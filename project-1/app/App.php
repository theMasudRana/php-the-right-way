<?php
declare(strict_types=1);


/**
 * @param string $driPath
 * @return array
 */
function getDataFiles(string $driPath): array
{
    $files = [];
    foreach (scandir($driPath) as $file) {
        if (is_dir($file)) {
            continue;
        }
        $files[] = $driPath . $file;
    }
    return $files;
}

/**
 * @param string $fileName
 * @return array
 */
function getTransactions(string $fileName): array
{
    if (!file_exists($fileName)) {
        trigger_error('File' . $fileName . 'does not exist.', E_USER_ERROR);
    }
    $file = fopen($fileName, 'r');
    fgetcsv($file);
    $transactions = [];
    while (($transaction = fgetcsv($file)) !== false) {
        $transactions[] = extractTransition($transaction);
    }
    return $transactions;
}


/**
 * @param array $transactionRow
 * @return array
 */
function extractTransition(array $transactionRow): array
{
    [$date, $checkNumber, $description, $amount] = $transactionRow;
    $amount = (float)str_replace(['$', ','], '', $amount);
    return [
        'date' => $date,
        'checkNumber' => $checkNumber,
        'description' => $description,
        'amount' => $amount
    ];
}

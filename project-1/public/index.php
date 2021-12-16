<?php
declare(strict_types=1);

$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;
define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
define('DATA_PATH', $root . 'data' . DIRECTORY_SEPARATOR);
define('VIEWS_PATH', $root . 'views' . DIRECTORY_SEPARATOR);

require APP_PATH . 'App.php';

$files = getDataFiles(DATA_PATH);
$transactions = [];
foreach ($files as $file) {
    $transactions = array_merge($transactions, getTransactions($file));
}

require VIEWS_PATH . 'transactions.php';
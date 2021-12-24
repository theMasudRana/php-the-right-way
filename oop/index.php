<?php
declare(strict_types=1);
require_once 'Transaction.php';

$transaction = new Transaction(100, 'Gift');
$transaction->add_tax(8);
$transaction->apply_discount(10);
var_dump($transaction->get_amount());
var_dump($transaction->get_description());

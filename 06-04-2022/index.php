<?php

require_once 'vendor/autoload.php';

use Hillel\Currency;
use Hillel\CurrencyCode;
use Hillel\Money;

$currency1 = new Currency(CurrencyCode::UAH);

$currency2 = new Currency(CurrencyCode::USD);

if ($currency1->equals($currency2)) {
    echo "Валюты равны<br>";
} else {
    echo "Валюты не равны<br>";
}


$money1 = new Money(100, $currency1);

echo $money1->getAmount() . "<br>";

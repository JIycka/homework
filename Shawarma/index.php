<?php

require_once '../autoload.php';

$shawarma1 = new \Hillel\Product\OdessaShawarma();

$shawarma2 = new \Hillel\Product\LambShawarma();

$shawarma3 = new \Hillel\Product\BeefShawarma();

echo '<pre>';

echo $shawarma1->getCost()."\n";
print_r( $shawarma1->getIngredients());
echo $shawarma1->getTitle()."\n\n";

echo $shawarma2->getCost()."\n";
print_r( $shawarma2->getIngredients());
echo $shawarma2->getTitle()."\n\n";

echo $shawarma3->getCost()."\n";
print_r ( $shawarma3->getIngredients());
echo $shawarma3->getTitle()."\n\n";


$calculator = new \Hillel\ShawarmaCalculator();

$calculator->add($shawarma1);
$calculator->add($shawarma2);
$calculator->add($shawarma3);
print_r($calculator->ingredients());
echo $calculator->price();

echo '</pre>';











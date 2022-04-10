<?php

require_once '../autoload.php';

$item = [
    'price' => 1750000,
    'attributes' => '{"memory":"8GB","color":"silver"}',
    'updated_at' => 1649428269
];

$product = new \Hillel\Entities\Product(
    $item['price'],
    $item['attributes'],
    $item['updated_at']
);

// добавим атрибут в виде добавления нового элемента в массив
$attributes = $product->attributes;
$attributes['year'] = 2021;
$product->attributes = $attributes;

// обновим цену
$product->price = 18500;

// зафиксируем время добавления время
$product->updatedAt = time();

echo '<pre>';

echo $product."\n";

echo $product->price."\n";
print_r($product->attributes);
echo $product->updatedAt."\n";
echo '</pre>';
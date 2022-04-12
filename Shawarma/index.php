<?php

require_once '../autoload.php';

$odessaShawarma = [
    'cost' => 69,
    'ingredients' => ['огурцы маринованные', 'картофель жареный', 'чесночный соус', 'тандырный лаваш', 'маринованный лук с барбарисом и зеленью', 'мясо куриное', 'салат коул слоу', 'корейская морковь'],
    'title' => "Одесская шаурма"
];

$beefShawarma = [
    'cost' => 75,
    'ingredients' => ['чесночный соус', 'говяжий окорок', 'огурцы маринованные', 'маринованный лук с барбарисом и зеленью', 'салат коул слоу', 'тандырный лаваш', 'помидоры свежие', 'хумус', 'соус тахин'],
    'title' => "Шаурма говяжья"
];

$lambShawarma = [
    'cost' => 85,
    'ingredients' => ['острый соус', 'огурцы маринованные', 'кинза', 'помидоры свежие', 'маринованный лук с барбарисом и зеленью', 'мясо баранины', 'лаваш арабский'],
    'title' => "Шаурма из Баранины"
];

$shawarma1 = new \Hillel\Product\Shawarma(
    $odessaShawarma['cost'],
    $odessaShawarma['ingredients'],
    $odessaShawarma['title']
);

$shawarma2 = new \Hillel\Product\Shawarma(
    $beefShawarma['cost'],
    $beefShawarma['ingredients'],
    $beefShawarma['title']
);

$shawarma3 = new \Hillel\Product\Shawarma(
    $lambShawarma['cost'],
    $lambShawarma['ingredients'],
    $lambShawarma['title']
);

echo '<pre>';

echo $shawarma1->getCost()."\n";
print_r( $shawarma1->getIngredients());
echo $shawarma1->getTitle()."\n".'<br>';

echo $shawarma2->getCost()."\n";
print_r( $shawarma2->getIngredients());
echo $shawarma2->getTitle()."\n".'<br>';

echo $shawarma3->getCost()."\n";
print_r ( $shawarma3->getIngredients());
echo $shawarma3->getTitle()."\n".'<br>';

echo '</pre>';












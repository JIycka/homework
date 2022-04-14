<?php

namespace Hillel\Product;

class BeefShawarma extends Shawarma
{
    protected float $cost = 75;

    protected array $ingredients = ['чесночный соус', 'говяжий окорок', 'огурцы маринованные', 'маринованный лук с барбарисом и зеленью', 'салат коул слоу', 'тандырный лаваш', 'помидоры свежие', 'хумус', 'соус тахин'];

    protected string $title = 'Шаурма говяжья';
}


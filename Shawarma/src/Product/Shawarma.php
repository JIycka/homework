<?php

namespace Hillel\Product;

use Hillel\Casts\BeefShawarma;
use Hillel\Casts\LambShawarma;
use Hillel\Casts\OdessaShawarma;

class Shawarma
{
    protected $shawarma = [
    'cost' => OdessaShawarma::class, BeefShawarma::class, LambShawarma::class,
    'ingredients' =>  OdessaShawarma::class, BeefShawarma::class, LambShawarma::class,
    'title' => OdessaShawarma::class, BeefShawarma::class, LambShawarma::class
    ];

    protected float $cost;

    protected array $ingredients;

    protected string $title;

    public function __construct($cost, $ingredients, $title)
    {
        $this->cost = $cost;
        $this->ingredients = $ingredients;
        $this->title = $title;
    }

    public function getCost(): float
    {

        return $this->cost;

    }
    public function getIngredients(): array
    {

        return $this->ingredients;

    }

    public function getTitle(): string
    {

        return $this->title;

    }

}


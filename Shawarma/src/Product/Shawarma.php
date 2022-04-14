<?php

namespace Hillel\Product;

abstract class Shawarma
{
    protected float $cost;
    protected array $ingredients;
    protected string $title;

    /**
     * @return float
     */
    public function getCost(): float
    {
        return $this->cost;
    }

    /**
     * @return array
     */
    public function getIngredients(): array
    {
        return $this->ingredients;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
}

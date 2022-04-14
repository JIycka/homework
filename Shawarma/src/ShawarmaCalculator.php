<?php

namespace Hillel;

use Hillel\Product\Shawarma;

class ShawarmaCalculator
{

    private array $shawarmaList = [];

    public function add(Shawarma $shawarma)

    {
        $this->shawarmaList[] = $shawarma;
    }

    public function ingredients()

    {
        $compound = [];

        foreach ($this->shawarmaList as $value) {
            $compound = array_unique(array_merge($compound, $value->getIngredients()));
        }
        return $compound;

    }

    public function price()

    {
        $total = 0;

        foreach ($this->shawarmaList as $value) {
            $total = $total + $value->getCost();

        }
        return $total;

    }

}


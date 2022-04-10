<?php

namespace Hillel\Entities;

use Hillel\Casts\ArrayCast;
use Hillel\Casts\DateTimeCast;
use Hillel\Casts\MoneyCast;

class Product
{
    protected $casts = [
        'price' => MoneyCast::class,
        'attributes' => ArrayCast::class,
        'updatedAt' => DateTimeCast::class,
    ];
    private float $price;
    private string $attributes;
    private int $updatedAt;

    public function __construct($price, $attributes, $updatedAt)
    {
        $this->price = $price;
        $this->attributes = $attributes;
        $this->updatedAt = $updatedAt;
    }

    public function __get($variable)
    {
        return $this->casts[$variable]::get($this->$variable);
    }

    public function __set($variable, $value)
    {
        $this->$variable = $this->casts[$variable]::set($value);
    }

    public function __toString(): string
    {
        return print_r([
            'price' => $this->price,
            'attributes' => $this->attributes,
            'updated_at' => $this->updatedAt,
        ], true);
    }
}

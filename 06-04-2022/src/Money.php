<?php

declare(strict_types=1);

namespace Hillel;

class Money
{
    private int|float $amount;

    private Currency $currency;

    public function __construct(int|float $amount, Currency $currency)
    {
        $this->setAmount($amount);
        $this->setCurrency($currency);
    }

    public function getAmount(): int|float
    {
        return $this->amount;
    }

    public function getCurrency(): Currency
    {
        return $this->currency;
    }

    public function setAmount(int|float $amount): void
    {
        $this->amount = $amount;
    }

    public function setCurrency(Currency $currency): void
    {
        $this->currency = $currency;
    }

    public function equals(Money $money): bool
    {
        if ($this->amount === $money->getAmount() && $this->currency->equals($money->currency)) {
            return true;
        }
            return false;
    }

    public function add(Money $money): void
    {
        if (!$this->currency->equals($money->currency)){
            throw new \Exception('Money is not equal');
        }
        $this->amount = $this->amount + $money->getAmount();
    }

}

<?php

declare(strict_types=1);

namespace Hillel;

class Currency
{
    private CurrencyCode $isoCode;

    public function __construct(CurrencyCode $isoCode)
    {
        $this->setIsoCode($isoCode);
    }

    public function getIsoCode(): CurrencyCode
    {
        return $this->isoCode;
    }

    public function setIsoCode(CurrencyCode $isoCode): void
    {
        $this->isoCode = $isoCode;
    }

    public function equals(Currency $currency): bool
    {
        if ($this->isoCode === $currency->getIsoCode()) {
            return true;
        }
        return false;
    }
}

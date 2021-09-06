<?php
declare(strict_types=1);
namespace Money;

use Currency\Currency;

class Money
{
    private int|float $amount;
    private Currency $currency;


    public function __construct(int|float $amount, Currency $currency)
    {
        $this->setAmount($amount);
        $this->setCurrency($currency);
    }


    public function getAmount()
    {
        return $this->amount;
    }


    private function setAmount(int|float $amount)
    {
        $this->amount = $amount;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

    private function setCurrency(Currency $currency)
    {
        $this->currency = $currency;
    }

    public function equals(Money $money): bool
    {
        return $this->getAmount() == $money->getAmount() &&
            $this->getCurrency() == $money->getCurrency();
    }

    public function add(Money $money): Money
    {
        if ($this->getCurrency() != $money->getCurrency()) {
            exit ('You cannot add different currencies');
        } else {
            return new self ($this->getAmount() + $money->getAmount(), $this->getCurrency());
        }
    }


}
<?php

namespace Namespaces\Paddle\Encapsulation;

class Transaction
{
    private float $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function setAmount(float $amount) {
       $this->amount = $amount;
    }

    public function getAmount() : float{
        return $this->amount;
    }

    public function process(){
        echo 'Processing $' . $this->amount . ' transaction';
    }
}
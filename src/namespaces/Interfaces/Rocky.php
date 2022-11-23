<?php

namespace Namespaces\Interfaces;

class Rocky implements DebtCollector
{

    public function collectDebt(float $owedAmount): float
    {
        return $owedAmount * 0.65;
    }
}
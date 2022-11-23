<?php

namespace Namespaces\Interfaces;

interface DebtCollector
{
    public function collectDebt (float $owedAmount): float;

}
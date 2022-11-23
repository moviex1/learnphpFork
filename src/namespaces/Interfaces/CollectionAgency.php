<?php

namespace Namespaces\Interfaces;

class CollectionAgency implements DebtCollector
{
    public function __construct()
    {

    }

    public function Foo(){

    }

    public function collectDebt(float $owedAmount): float
    {
        $guaranteed = $owedAmount * 0.5;
        return mt_rand($guaranteed, $owedAmount);
    }


}
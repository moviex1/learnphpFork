<?php

namespace Namespaces\Traits;

class AllInOneMaker extends CoffeeMaker
{
    private string $milkType = 'Chocolate milk';
    use CappuccinoTrait{
        CappuccinoTrait::makeLatte insteadof LatteTrait;
        CappuccinoTrait::makeLatte as public;
        CappuccinoTrait::makeCappuccino as public;
    }
    use LatteTrait{
        LatteTrait::makeLatte as makeOriginalLatte;
    }

    private function getMilkType(): string
    {
        return $this->milkType;
    }
}
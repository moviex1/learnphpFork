<?php

namespace Namespaces\Traits;

class CappuccinoMaker extends CoffeeMaker
{
    private string $milkType = "Whole-milk";

    use CappuccinoTrait{
        CappuccinoTrait::makeCappuccino as public;
    }


    private function getMilkType(): string
    {
//        return $this->milkType;
        return '';
    }
}
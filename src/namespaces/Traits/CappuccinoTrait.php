<?php

namespace Namespaces\Traits;

trait CappuccinoTrait
{
    private function makeCappuccino() : void
    {
        echo static::class . " Making Cappuccino " . $this->getMilkType() . PHP_EOL;
    }

    private function makeLatte() : void
    {
        echo static::class . " Making Latte (Cappuccino)" . PHP_EOL;
    }

    abstract private function getMilkType() : string;
//    {
//        if(property_exists($this,'milkType')){
//            return $this->milkType;
//        }
//        return '';
//    }
}
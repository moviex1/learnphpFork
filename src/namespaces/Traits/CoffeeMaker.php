<?php

namespace Namespaces\Traits;

class CoffeeMaker
{
   public function makeCoffee(){
       echo static::class . " making coffee " . PHP_EOL;
   }
}
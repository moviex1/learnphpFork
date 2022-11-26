<?php

namespace Namespaces\Traits;

trait LatteTrait
{
    public function makeLatte()
    {
        echo static::class . " Making Latte" . PHP_EOL;
    }
}
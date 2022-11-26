<?php

namespace Namespaces\LateStaticBinding;

class Class1
{
    protected static string $name = 'A';

    public static function getName(): string
    {
        return static::$name;
    }

}
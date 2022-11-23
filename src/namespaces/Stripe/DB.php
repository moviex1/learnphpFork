<?php

namespace Namespaces\Stripe;

class DB
{
    public static ?DB $instance = null;

    private function __construct(public array $config)
    {
        echo "Instance was created";
    }

    public static function Config(array$config) :DB{
        if(self::$instance == null){
            self::$instance = new DB($config);
        }

        return self::$instance;
    }

}
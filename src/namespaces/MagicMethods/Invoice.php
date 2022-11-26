<?php

namespace Namespaces\MagicMethods;

class Invoice
{
    protected array $data;

    public function slice(int $a, int $b) : int {
        return $a + $b;
    }

    public function __get(string $name)
    {
       if(array_key_exists($name, $this->data)){
           return $this->data[$name];
       }
       else{
           return null;
       }
    }

    public function __set(string $name, $value): void
    {
            $this->data[$name] = $value;
    }

    public function __isset(string $name): bool
    {
        return array_key_exists($name, $this->data);
    }

    public function __unset(string $name): void
    {
            unset($this->data[$name]);
            echo "unset" . PHP_EOL;

    }


    public function __call(string $name, array $arguments)
    {
        if(method_exists($this, $name)){
//            call_user_func([$this,$name], $arguments);
            $this->$name(...$arguments);
        }
    }


    //If u want to call ur method statically u should use next magic method ->

    public static function __callStatic(string $name, array $arguments)
    {
        var_dump('static',$name,$arguments);
    }
}
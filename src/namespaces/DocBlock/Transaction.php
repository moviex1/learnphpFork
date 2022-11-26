<?php

namespace Namespaces\DocBlock;

class Transaction
{
    /**
     * Some description
     *
     * @param Customer $customer
     * @param float $amount
     *
     * @throws \InvalidArgumentException
     *
     * @return bool
     */

    public function process($customer, $amount){

        return true;
    }



    public function foo(array $arr){
         /**
         * @var Customer $obj
         */
        foreach($arr as $obj){

            $obj->name;
        }
    }

}
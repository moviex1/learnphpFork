<?php

namespace Namespaces\Iterator;

class Iterator
{
    public int $id;
    public int $amount;

    public function __construct(int $amount)
    {
        $this->id = random_int(1000,9999);
        $this->amount = $amount;
    }


}
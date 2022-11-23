<?php

class PaymentProfile{
    public ?int $id = null;

    public function __construct()
    {
        $this->id = rand();
    }

}
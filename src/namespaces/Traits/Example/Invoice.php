<?php

namespace Namespaces\Traits\Example;

class Invoice
{
    use Mail;
    public function process(){
        echo "Processing Invoice" . PHP_EOL;

        $this->sendEmail();
    }

}
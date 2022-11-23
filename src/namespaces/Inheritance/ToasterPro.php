<?php

namespace Namespaces\Inheritance;

class ToasterPro extends Toaster
{

    public function __construct(){
        parent::__construct();
        $this->size = 4;
    }


    public function toastBagel(){
        foreach($this->slices as $i=>$toast){
            echo ($i + 1) . ": Toasting " . $toast . " with bagel option" . PHP_EOL;
        }
    }
}
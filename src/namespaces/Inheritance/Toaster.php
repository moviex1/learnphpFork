<?php

namespace Namespaces\Inheritance;

class Toaster
{
    protected array $slices;
    protected int $size;

    public function __construct(){
       $this->slices = [];
       $this->size = 2;
    }
    public function addSlice (string $slice) : void
    {
        if(count ($this->slices) < $this->size){
            $this->slices[] = $slice;
        } else{
            echo "Toaster is full " . PHP_EOL;
        }
    }

    public function toast()
    {
        foreach($this->slices as $i=>$slice){
          echo ($i + 1) . ": Toasting " . $slice . PHP_EOL;
        }
    }
}
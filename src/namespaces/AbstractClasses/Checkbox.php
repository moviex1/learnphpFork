<?php

namespace Namespaces\AbstractClasses;

class Checkbox extends Boolean
{
    public function render() : string
    {
        $text = <<<HTML
        <input type="checkbox" name="{$this->name}" />
        HTML;

        return $text;
    }
}
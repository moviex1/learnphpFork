<?php

namespace Namespaces\AbstractClasses;

class Radio extends Boolean
{
    public function render(): string
    {
        $text = <<<HTML
        <input type="radio" name="{$this->name}" />
        HTML;

        return $text;
    }
}
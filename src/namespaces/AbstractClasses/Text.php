<?php

namespace Namespaces\AbstractClasses;

class Text extends Field
{
    public function render() : string
    {
        $text = <<<HTML
        <input type="text" name="{$this->name}" />
        HTML;

        return $text;
    }

}
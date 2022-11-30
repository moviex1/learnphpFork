<?php

namespace Namespaces\Server\Routes;

class Info
{
    public function showInfo(): void
    {
        echo '<pre>';
        print_r($_SERVER);
    }

}
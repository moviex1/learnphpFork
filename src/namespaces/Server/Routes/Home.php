<?php

namespace Namespaces\Server\Routes;

class Home
{
    public function index() : void
    {
        setcookie(
            'UserName',
            'Nikita',
            time() + 10
        );
        echo '<pre>';
        echo 'Home';
    }

}
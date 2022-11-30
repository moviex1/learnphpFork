<?php

namespace Namespaces\Server\Routes;

class Home
{
    public function index() : void
    {
        echo '<pre>';
        var_dump($_GET);
        var_dump($_POST);
        echo 'Home';
    }

}
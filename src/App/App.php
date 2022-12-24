<?php

namespace App;

use App\Controllers\View;
use Namespaces\Server\Exceptions\RouteNotFoundException;
use Namespaces\Server\Router;

class App
{

    private static DB $db;
    public function __construct(protected Router $router, protected array $request, protected Config $config)
    {
       static::$db =  new DB($config->db ?? []);
    }
    public static function db() : DB
    {
        return static::$db;
    }

    public function run() : void
    {
        try {
           echo $this->router->resolve($this->request['uri'],strtolower($this->request['method']));
        } catch (RouteNotFoundException $e) {
            http_response_code(404);
            echo View::make('error/pageNotFound');
        }

    }

}
<?php declare(strict_types=1);


require_once __DIR__ . "/../vendor/autoload.php";

use Namespaces\Server\Routes;


$router = new Namespaces\Server\Router;

$router
    ->get('/', [Routes\Home::class, 'index'])
    ->get('/invoices', [Routes\Invoices::class, 'index'])
    ->get('/invoices/create', [Routes\Invoices::class, 'create'])
    ->post('/invoices/create', [Routes\Invoices::class, 'store'])
    ->get('/info', [Routes\Info::class, 'showInfo']);


$router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));


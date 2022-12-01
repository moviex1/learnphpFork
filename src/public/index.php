<?php declare(strict_types=1);

require_once __DIR__ . "/../vendor/autoload.php";

const STORAGE_PATH = __DIR__ . '/../storage';
const VIEWS_PATH = __DIR__ . '/../Views';

try {
    $router = new Namespaces\Server\Router;

    $router
        ->get('/', [App\Controllers\HomeController::class, 'index'])
        ->get('/download', [App\Controllers\HomeController::class, 'download'])
        ->post('/upload', [App\Controllers\HomeController::class, 'upload'])
        ->get('/invoices', [App\Controllers\InvoicesController::class, 'index'])
        ->get('/invoices/create', [App\Controllers\InvoicesController::class, 'create'])
        ->post('/invoices/create', [App\Controllers\InvoicesController::class, 'store'])
        ->get('/info', [Namespaces\Server\Routes\Info::class, 'showInfo']);


    echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));
} catch (\Namespaces\Server\Exceptions\RouteNotFoundException $e){
    http_response_code(404);

    echo \App\Controllers\View::make('error/pageNotFound');
}



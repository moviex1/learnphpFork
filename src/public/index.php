<?php declare(strict_types=1);


use App\Config;

require_once __DIR__ . "/../vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

const STORAGE_PATH = __DIR__ . '/../storage';
const VIEWS_PATH = __DIR__ . '/../Views';

$router = new Namespaces\Server\Router;

$router
    ->get('/', [App\Controllers\HomeController::class, 'index'])
    ->get('/download', [App\Controllers\HomeController::class, 'download'])
    ->post('/upload', [App\Controllers\HomeController::class, 'upload'])
    ->get('/invoices', [App\Controllers\InvoicesController::class, 'index'])
    ->get('/invoices/create', [App\Controllers\InvoicesController::class, 'create'])
    ->post('/invoices/create', [App\Controllers\InvoicesController::class, 'store'])
    ->get('/info', [Namespaces\Server\Routes\Info::class, 'showInfo']);


(new App\App(
    $router,
    ['uri' => $_SERVER['REQUEST_URI'], 'method' => $_SERVER['REQUEST_METHOD']],
    new Config($_ENV)
    ))->run();


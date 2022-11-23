<?php declare(strict_types=1);



require_once __DIR__ . "/../vendor/autoload.php";


use Namespaces\Interfaces\CollectionAgency;
use Namespaces\Interfaces\CollectorService;
use Namespaces\Interfaces\Rocky;

$collectorService = new CollectorService();
$collectorAgency = new CollectionAgency();
$rocky = new Rocky();

echo $collectorService->collectDebt($rocky) . PHP_EOL;
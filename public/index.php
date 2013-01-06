<?php
require_once '../vendor/peej/tonic/src/Tonic/Autoloader.php';
require_once '../src/autoload.php';

$app = new Tonic\Application(array(
    'load' => array('../resources/*.php'),
    'cache' => new Tonic\MetadataCacheFile('/tmp/tonic.cache'),
));
$request = new Tonic\Request();



$resource = $app->getResource($request);

$response = $resource->exec();

$response->output();



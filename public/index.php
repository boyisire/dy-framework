<?php

use Slim\Http\Request;
use Slim\Http\Response;

require __DIR__.'/../bootstrap/autoload.php';

$app = require_once __DIR__.'/../bootstrap/app.php';

$app->get('/hello/{name}',function (Request $request,Response $response){
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello [".$name."]!  Welcome To DY-Fromework.");

    return $response;
});


$app->run();

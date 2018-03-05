<?php

/*测试代码-1*/
//use Slim\Http\Request;
//use Slim\Http\Response;

require __DIR__.'/../bootstrap/autoload.php';

$config = require __DIR__ . '/../config/databases.php';



$app = require_once __DIR__.'/../bootstrap/app.php';

/*测试代码-2*/
//$app->get('/hello/{name}',function (Request $request,Response $response){
//    $name = $request->getAttribute('name');
//    $response->getBody()->write("Hello [".$name."]!  Welcome To DY-Fromework.");
//
//    return $response;
//});

require __DIR__.'/../routers/web.php';
require __DIR__.'/../routers/api.php';


$app->run();

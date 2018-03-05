<?php

$app->get('/', '\App\Http\Controllers\WelcomeController:index');
$app->get('/index', '\App\Http\Controllers\WelcomeController:index');
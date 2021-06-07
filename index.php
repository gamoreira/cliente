<?php

define('BASE_URL', 'http://localhost/cliente');
date_default_timezone_set('America/Sao_Paulo');
require __DIR__ . "/vendor/autoload.php";

$app = new \Slim\App();
$app->get('/', 'Source\Controllers\ClienteController:home');
$app->get('/register', 'Source\Controllers\ClienteController:register');
$app->get('/update/{id}', 'Source\Controllers\ClienteController:update');
$app->get('/list', 'Source\Controllers\ClienteController:list');
$app->post('/register', 'Source\Controllers\ClienteController:save');
$app->delete('/delete/{id}', 'Source\Controllers\ClienteController:delete');
$app->run();
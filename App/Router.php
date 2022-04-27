<?php

use App\Controllers\MainController;

$rotas = array();

$rotas['index'] = [
    'rota' => '/',
    'controller' => 'mainController',
    'action' => 'index',
];

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);



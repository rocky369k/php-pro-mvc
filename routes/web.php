<?php

$router->add('parks/{id:\d+}/show', [
    'controller' => \App\Controllers\ParksController::class,
    'action' => 'show',
    'method' => 'GET'
]);

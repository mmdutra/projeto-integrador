<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', 'HomeController@index');


$router->group(['prefix' => 'paciente'], function () use ($router) {
    $router->get('/', 'PatientController@index');
    $router->get('/novo', ['as' => 'paciente.novo', 'uses' => 'PatientController@create']);
});

$router->group(['prefix' => 'estado'], function () use ($router) {
    $router->get('/{cod_estado}/cidades', ['as' => 'estado.cidades', 'uses' => 'StateController@cities']);
});

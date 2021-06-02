<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', 'HomeController@index');

$router->group(['prefix' => 'paciente'], function () use ($router) {
    $router->get('/', ['as' => 'paciente.index', 'uses' => 'PatientController@index']);
    $router->get('/novo', ['as' => 'paciente.novo', 'uses' => 'PatientController@create']);
    $router->post('/novo', ['as' => 'paciente.salvar', 'uses' => 'PatientController@store']);
    $router->get('/editar/{id}', ['as' => 'paciente.editar', 'uses' => 'PatientController@edit']);
    $router->put('/editar/{id}', ['as' => 'paciente.update', 'uses' => 'PatientController@update']);
    $router->get('/deletar/{id}', ['as' => 'paciente.deletar', 'uses' => 'PatientController@destroy']);
});

$router->group(['prefix' => 'estado'], function () use ($router) {
    $router->get('/{cod_estado}/cidades', ['as' => 'estado.cidades', 'uses' => 'StateController@cities']);
});

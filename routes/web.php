<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => '/api'], function () use ($router){
    $router->group(['prefix' => 'users'], function () use ($router){
        $router->get('', 'UsersController@index');
        $router->post('', 'UsersController@store');
        $router->get('{id}', 'UsersController@show');
        $router->put('{id}', 'UsersController@update');
        $router->delete('{id}', 'UsersController@destroy');
    });
    $router->group(['prefix' => 'states'], function () use ($router){
        $router->get('', 'StatesController@index');
        $router->post('', 'StatesController@store');
        $router->get('{id}', 'StatesController@show');
        $router->put('{id}', 'StatesController@update');
        $router->delete('{id}', 'StatesController@destroy');
    });
    $router->group(['prefix' => 'notes'], function () use ($router){
        $router->get('', 'NotesController@index');
        $router->post('', 'NotesController@store');
        $router->get('{id}', 'NotesController@show');
        $router->put('{id}', 'NotesController@update');
        $router->delete('{id}', 'NotesController@destroy');
    });
});

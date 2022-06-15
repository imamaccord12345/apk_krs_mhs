<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix'=>'api'],function() use ($router) {

    $router->get('krs', ['uses' => 'KrsControllerController@index']);

    $router->get('krs/{id}',[ 'uses' => 'KrsControllerController@show']);

    $router->delete('krs/{id}',[ 'uses' => 'KrsControllerController@destroy']);

    $router->put('krs/{id}',[ 'uses' => 'KrsControllerController@update']);

    $router->post('krs',[ 'uses' => 'KrsControllerController@create']);

});


// $router->get('krs','KrsControllerController@index');

// $router->get('krs/{id}','KrsControllerController@show');

// $router->delete('krs/{id}','KrsControllerController@destroy');

// $router->put('krs/{id}','KrsControllerController@update');

// $router->post('krs','KrsControllerController@create');

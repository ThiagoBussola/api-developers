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
    return 'API REST Gazin with Laravel ' . $router->app->version();
});

$router->group(['prefix' => 'developers'], function() use($router) {
    $router->get('/', 'DeveloperController@index');
    $router->get('/{developerId}', 'DeveloperController@show');
    $router->post('/', 'DeveloperController@create');
//     $router->put('/{developerId}', 'DeveloperController@update');
//     $router->delete('/{developerId}', 'DeveloperController@destroy');
});

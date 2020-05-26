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

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

$router->get('/', ['as' => 'home.index', 'uses' => 'HomeController@index']);
$router->post('/store', ['as' => 'home.store', 'uses' => 'HomeController@store']);
$router->post('/notify', ['as' => 'home.notify', 'uses' => 'HomeController@notify']);

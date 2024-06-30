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

use App\Http\Controllers\DataController;

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/datas', 'DataController@index');
$router->get('/datas/{id}', 'DataController@show');
$router->post('/datas', 'DataController@create');
$router->put('/datas/{id}', 'DataController@update');
$router->delete('/datas/{id}', 'DataController@delete');

// $router->get('/datas', [DataController::class, 'index']);
// $router->get('/datas/{id}', [DataController::class, 'show']);
// $router->post('/datas', [DataController::class, 'create']);
// $router->put('/datas/{id}', [DataController::class, 'update']);
// $router->delete('/datas/{id}', [DataController::class, 'delete']);

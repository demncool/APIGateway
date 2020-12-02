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


$router->get('/users', 'UserController@getUsers');   // get all users records
$router->post('/users/add', 'UserController@addUser');  // create new user record
$router->get('/users/{id}', 'UserController@show'); // get user by id
$router->put('/users/update/{id}', 'UserController@update'); // update user record
$router->patch('/users/update{id}', 'UserController@update'); // update user record
$router->delete('/users/delete/{id}', 'UserController@delete'); // delete record
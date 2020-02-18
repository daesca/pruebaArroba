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


$router->get('/', function () {
    return view('index');
});

$router->get('/users/register', function () {
    return view('register');
});

$router->post('/users/store', 'UserController@store');

$router->get('/users/signin', function(){

    return view('signin');

});

$router->post('/users/start', 'UserController@start');

$router->get('users/files/register', function(){

    return view('files/register');

});

$router->post('users/files/store', 'FileController@store');

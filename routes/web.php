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

$app->get('/', function () {
    return view('index');
});

$app->get('workspace', function () {
    return view('workspace');
});

$app->post('signin', [
    'as' => 'signin', 'uses' => 'UserController@signin'
]);

$app->post('signup', [
    'as' => 'signup', 'uses' => 'UserController@signup'
]);

$app->get('signout', [
    'as' => 'signout', 'uses' => 'UserController@signout'
]);

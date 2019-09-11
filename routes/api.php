<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

$router->group(['prefix' => 'contact','namespace' => 'API'], function () use ($router) {

    $router->get('/data', 'ContactController@data');
    $router->post('/create', 'ContactController@store');
    $router->put('/update/{id}', 'ContactController@update');
    $router->delete('/delete/{id}', 'ContactController@destroy');

});

$router->group(['prefix' => 'user','namespace' => 'API'], function () use ($router) {

    $router->post('/create', 'UserController@store');
    $router->put('/password-update/{id}', 'UserController@updatePassword');
    
});


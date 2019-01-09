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

Route::group(['prefix' => 'v1', 'middleware' => 'cors'], function(){
    Route::resource('anak', 'AnakApiController');
    Route::post('/user/register',[
        'uses' => 'AuthController@store'
    ]);
    Route::post('/user/signin',[
        'uses' => 'AuthController@signin'
    ]);
    Route::get('/user/logout',[
        'uses' => 'AuthController@logout'
    ]);
    Route::get('/user',[
        'uses' => 'AuthController@user'
    ]);
    Route::get('/user/profile',[
        'uses' => 'AuthController@profile'
    ]);
    Route::get('/user/update_profile',[
        'uses' => 'AuthController@update_profile'
    ]);
    
    
});

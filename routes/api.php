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

Route::group(['prefix' => 'v1'], function(){

    Route::resource('film', 'FilmController');

    Route::resource('genre', 'GenreController',[
        'only' => ['index', 'store']
    ]);

    Route::get('country', 'CountryController@index');
    
    Route::get('language', 'LanguageController@index');

    Route::get('type', 'TypeController@index');

    Route::resource('director', 'DirectorController',[
        'only' => ['index', 'store']
    ]);

    Route::resource('star', 'StarController',[
        'only' => ['index', 'store']
    ]);

    Route::resource('writer', 'WriterController',[
        'only' => ['index', 'store']
    ]);

    Route::resource('production', 'ProductionController',[
        'only' => ['index', 'store']
    ]);

});
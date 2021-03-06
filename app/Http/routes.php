<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', function () {
        return view('welcome', ['id' => 100]);
    });

   /* Route::get('/bap', function () {
        return view('/form.bap');
    });*/
    Route::resource('/baps', 'BapController');

    Route::resource('/profil', 'ProfilController');

    Route::resource('/articles', 'PostController');
    Route::resource('/comment', 'CommentController');
    Route::resource('/contacts', 'ContactController');
    Route::get('/home', 'HomeController@index');
});

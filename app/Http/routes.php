<?php

use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    // return view('welcome');

    if (Auth::check()) {
        $user = Auth::user();
        return $user->name . " 已登入";
    } else {
        return "未登入";
    }
});

Route::get('/logout', function(){
    Auth::logout();
});

Route::auth();

Route::get('/home', 'HomeController@index');

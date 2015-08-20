<?php

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
    return view('welcome');
});

Route::get('home', function () {
    return view('main.index');
});

Route::get('teacher', function () {
    return view('teacher.list');
});

Route::get('signIn', function () {
    return view('signIn.signIn');
});
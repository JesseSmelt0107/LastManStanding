<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/login', 'HomeController@index')->name('home');
Route::get('/home', function(){
    return view('welcome');
});
Route::get('/test', function() {
    return view('test');
});

Route::get('/group', 'GroupController@index');

Route::get('/group/new', 'GroupController@create');\
Route::get('/game/{id}', 'GameController@overview');
Route::post('/group', 'GroupController@store');
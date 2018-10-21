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


//Cada vez que un usuario entre a la home del sitio se va ejectitar esta funcion anonanima 
//y se renderezidara la view welcom 
Route::get('/', 'PagesController@home');


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






Auth::routes();

Route::get('/auth/facebook','SocialAuthController@facebook');
Route::get('/auth/facebook/callback','SocialAuthController@callback');
Route::post('/auth/facebook/register','SocialAuthController@register');

Route::get('/messages','MessagesController@search');
Route::get('/messages/{message}','MessagesController@show' );

Route::group(['middleware'=>'auth'],function (){
    Route::post('/{username}/dms','UsersController@sendPrivateMessage');
    Route::post('/messages/create','MessagesController@create' );
    Route::post('/{username}/follow','UsersController@follow');
    Route::post('/{username}/unfollow','UsersController@unfollow');
    Route::get('/conversations/{conversation}', 'UsersController@showConversations');
});

Route::get('/{username}/follows','UsersController@follows');
Route::get('/{username}/followers','UsersController@followers');
Route::get('/{username}','UsersController@show');

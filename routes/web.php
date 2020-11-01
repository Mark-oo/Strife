<?php

use Illuminate\Support\Facades\Route;

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
Route::group(['middleware'=>['web']],function(){
  // chat create
  Route::post('/create','ChatController@store')->name('group.store');
  Route::get('/create',['uses'=>'ChatController@create','as'=>'chats.create']);
// authentication
Route::get('register',['uses'=>'Auth\RegisterController@showRegistrationForm','as'=>'auth.register']);
Route::get('/login','Auth\LoginController@showloginForm');
// Auth::routes();
// main page
Route::get('/',['uses'=>'PagesController@getIndexPage','as'=>'pages.index']);

});

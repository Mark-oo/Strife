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
Auth::routes();
Route::get('/logout','Auth\LoginController@logout');
Route::post('/login','Auth\LoginController@login');
Route::get('/login','Auth\LoginController@showloginForm');
// Auth::routes();
// main page
Route::get('/',['uses'=>'PagesController@getWelcomePage','as'=>'pages.welcome']);
Route::get('/@me',['uses'=>'PagesController@getIndexPage','as'=>'pages.index']);

});

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
  // search
  Route::get('/search','SearchController@search');
  // Friends stuff
   // requests
  Route::post('/friends/unblock','RequestController@unblock');
  Route::get('/requests/blocked','PagesController@blockedUserPage');
  Route::post('/friends/block','RequestController@block');
  Route::get('/requests/pending','PagesController@pendingFriendPage');
  Route::post('/friends/send','RequestController@request');
  Route::get('/friends/find','PagesController@findFriendsPage');
  Route::post('/friends/add','RequestController@add');


  Route::get('/friends/show/{handle}',['uses'=>'FriendController@getFriendShow','as'=>'friends.show']);
  Route::post('/friends/d','FriendController@delete');
  Route::get('/friends', 'FriendController@getIndex')->name('friends.index');

  // chat.messages
  Route::post('chats/{chat_id}',['uses'=>'MessageController@store','as'=>'messages.store']);
  // chat create
  Route::post('chats/{chat}','ChatController@update');
  Route::resource('chats','ChatController');
  // authentication
  Auth::routes();
  Route::get('/logout','Auth\LoginController@logout');
  Route::post('/login','Auth\LoginController@login');
  Route::get('/login','Auth\LoginController@showLoginForm');
  // main page
  Route::get('/profile/{hadnle}','PagesController@getSelf')->name('pages.self');
  Route::get('/',['uses'=>'PagesController@getWelcomePage','as'=>'pages.welcome']);
  Route::get('/@me',['uses'=>'PagesController@getIndexPage','as'=>'pages.index']);

});

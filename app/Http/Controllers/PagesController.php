<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Chat;
use App\User;

class PagesController extends Controller
{
  public function __construct(){
    $this->middleware('auth',['except'=>'getWelcomePage']);
  }

  public function getWelcomePage(){
    return view('pages.welcome');
  }

  public function getIndexPage(){

    $chat=Chat::all();

    return view('pages.index')->with('chat',$chat);
  }

  public function getChat($id){

    $chat=DB::table('chats')->where('id','=',$id)->get();
    $users=User::all();
     return view('pages.single')->with('chat',$chat)->with('users',$users);
  }


}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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

    $user=User::where('id',Auth::id())->first();

    return view('pages.index')->with('user',$user);
  }

  public function getChat($id){

    $chat=DB::table('chats')->where('id','=',$id)->get();
    $users=User::all();
     return view('pages.single')->with('chat',$chat)->with('users',$users);
  }

  public function getSelf($handle){
    // dd($handle);
    $user=User::where('handle',$handle)->first();
    // dd($user)
    return view('pages.self')->with('user',$user);
  }


}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use   Illuminate\Pagination\Paginator;

use Illuminate\Http\Request;
use App\Chat;
use App\User;
use App\Friendship;
use Image;

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
    $pop_chats=Chat::where('type','public')->orderBy('user_count','desc')->paginate(5);#dd($pop_chats);
    return view('pages.index')->with('user',$user)->with('pop_chats',$pop_chats);
  }
  // OVA FUNKCIJA JE DUPLIKAT IMA U ChatControleru
  public function getChat($id){

    $chat=DB::table('chats')->where('id','=',$id)->get();
    $users=User::all();
     return view('pages.single')->with('chat',$chat)->with('users',$users);
  }


  public function findFriendsPage(){
    $not_friends = User::where('id', '!=', Auth::user()->id);

    if (Auth::user()->friends->count()) {
     $not_friends->whereNotIn('id', Auth::user()->friends->modelKeys());
     // dd($not_friends);
    }
    // dd($not_friends);
    $not_friends = $not_friends->get();
    return view('friends.find')->with('not_friends',$not_friends);
  }

  public function pendingFriendPage(){

    $pending=Friendship::where('second_user',Auth::user()->id)->where('status','pending')->get();
// dd($pending);
    return view('requests.pending')->with('pending',$pending);#->with('$users',$user);
  }

  public function blockedUserPage(){
    $blocked=Friendship::where('second_user',Auth::user()->id)->where('status','blocked')->get();
    // dd($blocked);
    return view('requests.blocked')->with('blocked',$blocked);
  }


}

<?php

namespace App\Http\Controllers;

use App\User;
use App\Friendship;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;

class RequestController extends Controller
{

  public function __construct(){
    $this->middleware('auth');
  }

  public function add(Request $request){
    $not_friends=User::where('id','!=',Auth::user()->id)->get();
    foreach($not_friends as $not_friend){
      if($not_friend->id==$request->friend_id){
        Auth::user()->addFriend($not_friend);
        break;
      }
    }
  }

  public function request(Request $request){
    $this->validate($request,[
      'userOne'=>'required|integer',
      'userTwo'=>'required|integer'
    ]);

    $friendships=new Friendship;

    $friendships->first_user=$request->userOne;
    $friendships->second_user=$request->userTwo;
    $friendships->user_id=$request->userOne;
    $friendships->status='pending';

    $friendships->save();
  }

  public function accept(){

  }

  public function block(Request $request){
    $this->validate($request,['user_id'=>'required|integer']);

    $friendship=Friendship::where('first_user',$request->user_id)->where('second_user',Auth::id())->first();

    $friendship->first_user=$request->user_id;
    $friendship->second_user=Auth::id();
    $friendship->user_id=$request->user_id;
    $friendship->status='blocked';

    $friendship->save();
  }

  public function unblock(Request $request){
    $this->validate($request,['user_id'=>'required|integer']);

    $blocked=Friendship::where('first_user',$request->user_id)->where('second_user',Auth::id())->where('status','blocked')->first();
    $blocked->delete();

    $friend=User::where('id',$request->user_id)->first();

    Auth::user()->addFriend($friend);

  }

}

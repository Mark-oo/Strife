<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Friendship;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;

class FriendController extends Controller
{

    public function getIndex(){
       // $friends=User::where('id','!=',Auth::user()->id)->get();
       // $collection=collect($friends);
       $not_friends = User::where('id', '!=', Auth::user()->id);

       if (Auth::user()->friends->count()) {
        $not_friends->whereNotIn('id', Auth::user()->friends->modelKeys());
        // dd($not_friends);
       }
       // dd($not_friends);
       $not_friends = $not_friends->get();
       return view('friends.index')->with('not_friends',$not_friends);
    }

    public function getFriendShow($handle){
      $friend=User::where('handle',$handle)->first();
      // dd($friend->id);
      return view('friends.show')->with('friend',$friend);
    }




    public function delete(Request $request){
     foreach (Auth::user()->friends as $friend) {
       if($friend->id==$request->friend_id){
         Auth::user()->removeFriend($friend);
         break;
       }
     }
    }

}

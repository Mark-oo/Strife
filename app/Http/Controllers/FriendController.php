<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
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
       }
       $not_friends = $not_friends->get();

       return view('friends.index')->with('not_friends',$not_friends);
    }

    public function getAddFriend($id){
      $user = User::find($id);
      Auth::user()->addFriend($user);
      // return Redirect::back();
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SearchController extends Controller
{
  // public function __construct(){
  //   $this->middleware('auth');
  // }

  public function search(Request $request){
    // dd($request);

    // $users=User::all();
    // $user_handle=[];
    // foreach($users as $user){
    //  $user_handle[$user->id]=$user->handle;
    // }
    //
    // return response()->json($user_handle);
    $user=User::where('handle',$request->user)->first();
    // dd($user);
    return response()->json($user,200);
  }
}

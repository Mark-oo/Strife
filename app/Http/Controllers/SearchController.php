<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SearchController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }

  public function search(){
    $users=User::all();
    $user_handle=[];
    foreach($users as $user){
     $user_handle[$user->id]=$user->handle;
    }
    // dd($user_handle);

    return response()->json($user_handle);
  }
}

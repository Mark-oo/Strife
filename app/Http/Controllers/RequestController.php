<?php

namespace App\Http\Controllers;

use App\User;
use App\Friendship;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;

class RequestController extends Controller
{
  public function request(Request $request){
    $this->validate($request,[
      'userOne'=>'required|integer',
      'userTwo'=>'required|integer'
    ]);

    $friendship=new Friendship;

    $friendship->first_usesr=$request->userOne;
    $friendship->second_usesr=$request->userTwo;
    $friendship->acted_user=$request->userOne;
    $friendship->status='pending';

    $friendship->save();
  }
}

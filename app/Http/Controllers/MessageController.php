<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chat;
use App\User;
use App\Message;

class MessageController extends Controller
{

    public function __construct(){
      $this->middleware('auth');
    }

    public function store(Request $request,$chat_id){
      $this->validate($request,['message'=>'required|max:255'],);
      $chat=Chat::find($chat_id);
      $message=new Message;

      $message->message=$request->message;
      $message->user_id=auth()->user()->id;
      $message->chat()->associate($chat_id);

      $message->save();

      return redirect()->route('chats.show',$chat_id);

    }
}

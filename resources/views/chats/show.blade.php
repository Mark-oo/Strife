@extends('main_auth')
@section('title',"| ")
@section('content')


<div class="container">
  <div class="text-center">
    <h2><a href="{{route('chats.edit',$chat->id)}}" >{{$chat->name}}</a></h2>
  </div>
  <div class="row ">
    <div class="col-md-12">
      {{-- <h3>
          <span class="icon-spaceing glyphicon glyphicon-comment">
          </span>{{$chat->messages->count()}} Comments
      </h3> --}}
     @foreach($chat->messages as $message)

       <div class="message">
         <img class="{{$message->user_id==Auth::id()?"float-right":"float-left"}}" src="{{"https://www.gravatar.com/avatar/".md5(strtolower(trim($message->user->email)))."?s=50&d=monsterid"}}" class="user-image">
         <div class="{{$message->user_id==Auth::id()?"float-right":""}} info">
           <h4><strong>{{$message->user->handle}}:</strong></h4>
           <p class="time">{{date('F n,Y -G:m',strtotime($message->created_at))}}</p>
         </div>
         <div class="{{$message->user_id==Auth::id()?"float-right":""}} message-body">
           {{$message->message}}
         </div>
       </div>
   @endforeach
    </div>
  </div>
  <div class="row mt">
     <div class="col-md-10 offset-2">@include('messages.create')</div>
  </div>



@endsection

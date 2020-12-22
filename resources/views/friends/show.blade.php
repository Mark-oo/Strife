@extends('main_auth')
@section('title',"| $friend->handle")
@section('content')
<div class="container">
  <div class="text-center"><h3>{{$friend->handle}}</h3></div>
  <div class="row">
    <div class="col">
    <table>
      <thead>
        <tr>
          <th>Friends</th>
        </tr>
      </thead>
      <tbody>
        @foreach($friend->friends as $f)
        <tr>
          <td>{{$f->handle}}</td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
  <div class="col">
    {{$friend->name}}
    {{$friend->email}}
    {{$friend->created_at}}
  </div>
  <div class="row">
  {{-- {{  $friend->chat}} --}}
    @foreach($friend->chat as $user_chats)
    {{$user_chats->name}}
    @endforeach
  </div>
  </div>
</div>
@endsection

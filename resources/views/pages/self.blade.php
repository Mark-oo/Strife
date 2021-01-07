@extends('main_auth')
@section('title',"| $user->handle")
@section('content')
<div class="container">
  <div class="text-center"><h3>{{$user->name}}</h3></div>
  <div class="row">
    <div class="col">
    {{-- User self description --}}
  </div>
  </div>
  <div class="row">
    <table>
      <thead>
        <tr>
          <th>#</th><th>Chat name</th>
        </tr>
      </thead>
      <tbody>
        @foreach($user->chat as $chat)
          <tr>
            <td></td><td>{{$chat->name}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection

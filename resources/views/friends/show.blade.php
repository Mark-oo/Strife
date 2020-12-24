@extends('main_auth')
@section('title',"| $friend->handle")
@section('content')
<div class="container">
  <div class="text-center"><h3>{{$friend->handle}}</h3></div>
  <div class="row">
    <div class="col">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>{{$friend->handle}}'s Friends</th>
        </tr>
      </thead>
        @if($friend->friends->count() == null)
          <tbody>
           <tr><td>{{$friend->handle}} has no friends</td></tr>
          </tbody>
        @else
          <tbody>
            @foreach($friend->friends as $f)
              <tr>
                <td>{{$f->handle}}</td>
              </tr>
            @endforeach
          </tbody>
        @endif

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

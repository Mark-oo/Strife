@extends('main_auth')
@section('title','| Friends')
@section('content')
<h3 class="text-center">Friends</h3>
<div id="app"  class="container">
  <div class="row">
    <div class="col">
    <p>Your Friends</p>
    <table class="table-stripped table-bordered" style="width:100%;">
      <thead>
        <tr>
          <th>#</th><th>Handle</th><th>name</th><th></th>
        </tr>
      </thead>
      <tbody>
        @foreach(Auth::user()->friends as $friend)
           <show-friend friend-name="{{$friend->name}}" friend-handle={{$friend->handle}} friend-id="{{$friend->id}}"></show-friend>
        @endforeach
      </tbody>
    </table>
    </div>
    <div  class="col">
      <p>Add Friends</p>
      <search></search>
      <table class="table-stripped table-bordered" style="width:100%;">
        <thead>
          <tr>
            <th>#</th><th>Name</th><th>handle</th><th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($not_friends as $not_friend)
            <tr>
              <td>{{$not_friend->id}}</td>
              <td>{{$not_friend->name}}</td>
              <td>{{$not_friend->handle}}</td>
              <td><add-friend friend-id="{{$not_friend->id}}"></add-friend><a class="btn btn-block btn-sm btn-danger" href="#">Delete</a></td>
            </tr>
          @endforeach
        </tbody>
    </table>
    </div>
  </div>
</div>
<script src="{{asset('js/app.js')}}"></script>

@endsection

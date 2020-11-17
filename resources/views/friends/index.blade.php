@extends('main_auth')
@section('title','| Friends')
@section('content')
<h3 class="text-center">Friends</h3>
<div class="container">
  <div class="row">
    <div class="col">
    <p>Your Friends</p>
    <table class="table-stripped table-bordered" style="width:100%;">
      <thead>
        <tr>
          <th>#</th><th>Name</th><th>handle</th>
        </tr>
      </thead>
      <tbody>
        @foreach(Auth::user()->friends as $friend)
        <tr>
          <td>{{$friend->id}}</td>
          <td>{{$friend->name}}</td>
          <td>{{$friend->handle}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    </div>
    <div class="col">
      <p>Add Friends</p>
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
              <td><a class="btn btn-block btn-sm btn-primary" href="#">View</a><a class="btn btn-block btn-sm btn-danger" href="#">Delete</a></td>
            </tr>
          @endforeach
        </tbody>
    </table>
    </div>
  </div>
</div>
@endsection

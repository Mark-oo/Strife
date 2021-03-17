@extends('main_auth')
@section('title','|Find Friends')
@section('content')
  <div class="container">
    <div class="col-md-8 offset-2">
      <search></search>
      <h4 class="text-center">U may also know</h4>
      <div class="card-deck">
        @foreach($not_friends as $friend)
          <div class="card">
            <img src="/css/images/big/{{$friend->filename}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5  class="card-title"><a href="{{url('/users/show',$friend->handle)}}">{{$friend->handle}}</a></h5>
              <p class="card-text">"{{$friend->bio}}"</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">pisa</small>
            </div>
          </div>
        @endforeach
        </div>
      </div>
    </div>
  {{-- <table class="table table-sm table-striped">
    <thead>
     <tr>
       <th>name</th><th>Send request</th>
     </tr>
    </thead>
    <tbody>
      @foreach ($not_friends as $nt)
        <tr>
          <td>{{$nt->handle}}</td>
          <td><send-request data-toggle="button" user-one="{{Auth::id()}}" user-two="{{$nt->id}}"></send-request></td>
        </tr>
      @endforeach
    </tbody>
  </table> --}}
  </div>
@endsection

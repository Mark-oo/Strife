@extends('main_auth')
@section('title','| Friends')
@section('content')
<h3 class="text-center">Friends</h3>
<div  class="container">
  <div class="row">
    <div class="col">
    <p>Your Friends</p>
        <show-friend friends="{{ json_encode(Auth::user()->friends) }}"></show-friend>
        {{-- TODO:mora ovo ispocetka mislim zato sto ovako prikazuje i pennding frienshipe a to je no gud --}}
    </div>
    {{-- <div  class="col">
      <p>Add Friends</p>
      <search></search>
      <table class="table table-striped" style="width:100%;">
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
              <td><add-friend friend-id="{{$not_friend->id}}"></add-friend></td>
            </tr>
          @endforeach
        </tbody>
    </table>
    </div> --}}
  </div>
</div>
{{-- <script src="{{asset('js/app.js')}}"></script> --}}

@endsection

@extends('main_auth')
@section('title','|Find Friends')
@section('content')
  <div class="">
  <table class="table table-striped">
    <thead>
     <tr>
       <th>name</th><th></th>
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
  </table>
  </div>
@endsection

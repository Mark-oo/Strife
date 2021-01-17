@extends('main_auth')
@section('title','| Blocked')
  @section('content')
    <h3 class="text-center">Blocked friend requsets</h3>
    <table class="table table-striped ">
     <thead>
       <tr>
         <th>Who</th><th>When</th><th>unbloc</th>
       </tr>
     </thead>
     <tbody>
       @if(!count($blocked))
         <tr>
           <td></td><td>No users blocked</td><td></td>
         </tr>
         @else
         @foreach($blocked as $b)
           <tr>
             <td>{{$b->user->handle}}</td>
             <td>{{date("j F Y, g:i ",strtotime($b->updated_at))}}</td>
             <td><unblock-user user-id="{{$b->first_user}}"></unblock-user></td>
           </tr>
         @endforeach
       @endif
     </tbody>
    </table>
@endsection

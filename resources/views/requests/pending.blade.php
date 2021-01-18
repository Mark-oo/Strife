@extends('main_auth')
@section('title','|Pending')
@section('content')
  <h3 class="text-center">Pending friend requsets</h3>
  <div class="container">
  <table class="table table-sm table-striped ">
   <thead>
     <tr>
       <th>From</th><th>When</th><th>Acc/Blo</th>
     </tr>
   </thead>
   <tbody>
     @if(!count($pending))
       <tr>
         <td></td><td>No pending requsets</td><td></td>
       </tr>
       @else
       @foreach($pending as $p)
         <tr>
           <td>{{$p->user->handle}}</td>
           <td>{{date("j F Y, g:i ",strtotime($p->created_at))}}</td>
           <td><add-friend friend-id="{{$p->first_user}}"></add-friend><block-user style="margin-left:5px;" user-id="{{$p->first_user}}"></block-user></td>
         </tr>
       @endforeach
     @endif
   </tbody>
  </table>
  </div>
@endsection

@extends('main_auth')
@section('title','| Group create')
@section('content')
<div class="contaner">
  <div class="row">
{!!Form::open(['route' => 'group.store','method'=>'POST'])!!}
<h2>Create group chat</h2>
{{Form::label('name',"Name:")}}
{{Form::text('name',null,['class'=>'form-control'])}}

{{Form::label('description',"Description:")}}
{{Form::textarea('description',null,['class'=>'form-control'])}}

{{Form::label('rules',"Rules:")}}
{{Form::textarea('rules',null,['class'=>'form-control'])}}

{{-- invite people ?--}}

{{Form::submit('Create',['class'=>'brn btn-outline-dark form-control'])}}
{!!Form::close()!!}
</div>
</div>
@endsection

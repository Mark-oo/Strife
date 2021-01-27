@extends('main_auth')
@section('title',"|$user->handle")
@section('content')
<div class="col-md-6 offset-md-3">
  {!!Form::model($user,['route'=>['user.update',$user->id],'method'=>'PUT','files'=>true])!!}
   {{Form::label('name','Name:')}}
   {{Form::text('name',null,['class'=>'form-control'])}}
   {{Form::label('email','Email:')}}
   {{Form::email('email',null,['class'=>'form-control'])}}
   {{Form::label('handle','Handle:')}}
   {{Form::text('handle',null,['class'=>'form-control'])}}
   {{Form::label('bio','Bio:')}}
   {{Form::textarea('bio',null,['class'=>'form-control','rows'=>"4", 'cols'=>"50"])}}
   {{Form::label('filename',"Profile Image:")}}
   {{Form::file('filename',['class'=>'form-control'])}}
   <div class="row" style="margin-top:5px;">
    <div class="col-md-6">
   {{Form::submit('Save',['class'=>'btn form-control btn-outline-primary'])}}
    </div>
    <div class="col-md-6">
   {!!Html::linkRoute('users.self','Cancel',[$user->handle],['class'=>'btn form-control btn-outline-danger'])!!}
   </div>
   {!!Form::close()!!}
{{-- </div>
{{-- <div class="col-md-6 offset-md-3">
  <form class="" action="index.html" method="put">
    <label for="name">Name:</label>
    <input class="form-control" type="text" name="name" value="{{$user->name}}">
    <label for="email">Email:</label>
    <input class="form-control" type="email" name="email" value="{{$user->email}}">
    <label for="handle">Handle:</label>
    <input class="form-control" type="text" name="handle" value="{{$user->handle}}">
    <label for="bio">Bio</label>
    <textarea name="bio" rows="8" cols="80" >{{$user->bio}}</textarea>
  </form>
</div> --}}
@endsection

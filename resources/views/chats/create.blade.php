@extends('main_auth')
@section('title','| Group create')

{!! Html::style('css/select2.min.css') !!}

@section('content')




<div class="contaner">
  <div class="col-md-8 offset-2">
{!!Form::open(['route' => 'chats.store','method'=>'POST'])!!}
<h2>Create group chat</h2>
{{Form::label('name',"Name:")}}
{{Form::text('name',null,['class'=>'form-control'])}}

{{Form::label('description',"Description:")}}
{{Form::textarea('description',null,['class'=>'form-control','rows'=>"4", 'cols'=>"50"])}}

{{Form::label('rules',"Rules:")}}
{{Form::textarea('rules',null,['class'=>'form-control','rows'=>"4", 'cols'=>"50"])}}

{{Form::label('key','Key:')}}
{{Form::text('key',null,['class'=>'form-control'])}}

{{-- invite people ?--}}
{{Form::label('users','Invite:')}}
<select class="form-control js-example-basic-multiple" name="users[]" multiple="multiple">
  @foreach($users as $user)

  <option value="{{$user->id}}">{{$user->name}}</option>
@endforeach()
</select>

{{Form::submit('Create',['class'=>'brn btn-outline-dark form-control','style'=>'margin-top:5px;'])}}
{!!Form::close()!!}
</div>
</div>

@endsection
@section('scripts')
  {!! Html::script('js/select2.min.js') !!}
  <script type="text/javascript">
     $('.js-example-basic-multiple').select2();
  </script>
@endsection

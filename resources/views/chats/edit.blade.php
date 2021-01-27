@extends('main_auth')
@section('title','|edit')

{!! Html::style('css/select2.min.css') !!}

@section('content')
  <div class="container">
    <div class="row">
      <h3>Chat settings</h3>
    </div>
    <div class="col-md-8 offset-2">
      {{Form::model($chat,['route'=>['chats.update',$chat->id],'method'=>'PUT'])}}
      {{Form::label('name','Name:')}}
      {{Form::text('name',null,['class'=>'form-control'])}}

      {{Form::label('type',"Type")}}
      <select class="form-control js-example-basic-single" name="type">
        <option value="private">private</option>
        <option value="public">public</option>
      </select>
      {{Form::label('key','Key:')}}
      {{Form::text('key',null,['class'=>'form-control'])}}
      {{Form::label('description','Description:')}}
      {{Form::textarea('description',null,['class'=>'form-control','rows'=>"4", 'cols'=>"50"])}}
      {{Form::label('rules','Rules:')}}
      {{Form::textarea('rules',null,['class'=>'form-control','rows'=>"4", 'cols'=>"50"])}}
      {{Form::label('users','Invite:')}}
      {{Form::select('users[]',$users,null,['class'=>'form-control js-example-basic-multiple',
                                            'multiple'=>'multiple'
                                       ])
      }}

      {{Form::submit('Change',['class'=>'brn btn-outline-dark form-control','style'=>'margin-top:5px;'])}}
      {!!Html::linkRoute('chats.show','Cancel',[$chat->id],['class'=>'btn btn-outline-dark btn-block','style'=>'margin-top:5px;'])!!}
      {{Form::close()}}
      {!!Form::open(['route'=>['chats.destroy',$chat->id],'method'=>'DELETE'])!!}
      {!!Form::submit('Delete',['class'=>'btn btn-danger btn-block'])!!}
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

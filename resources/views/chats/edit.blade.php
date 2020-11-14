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
      {{Form::label('description','Description:')}}
      {{Form::textarea('description',null,['class'=>'form-control','rows'=>"4", 'cols'=>"50"])}}
      {{Form::label('rules','Rules:')}}
      {{Form::textarea('rules',null,['class'=>'form-control','rows'=>"4", 'cols'=>"50"])}}
      {{Form::label('users','Invite:')}}
      {{Form::select('users[]',$users,null,['class'=>'form-control js-example-basic-multiple',
                                        'multiple'=>'multiple'
                                       ])
      }}
      {{-- <select class="form-control js-example-basic-multiple" name="u[]" multiple>
        @foreach($u as $user)

        <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
      </select> --}}

      {{Form::submit('Change',['class'=>'brn btn-outline-dark form-control','style'=>'margin-top:5px;'])}}
      {!!Html::linkRoute('chats.show','Cancel',[$chat->id],['class'=>'btn btn-outline-dark btn-block','style'=>'margin-top:5px;'])!!}
      {{Form::close()}}

    </div>
  </div>
@endsection
@section('scripts')
  {!! Html::script('js/select2.min.js') !!}
  <script type="text/javascript">
     $('.js-example-basic-multiple').select2();
  </script>
@endsection

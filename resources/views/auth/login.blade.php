@extends('main_auth')
@section('title','| login')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Login</div>

                <div class="card-body">
                  {!!Form::open()!!}
                  {{Form::label('name',"Name:")}}
                  {{Form::text('name',null,['class'=>'form-control'])}}

                  {{Form::label('email',"Email:")}}
                  {{Form::text('email',null,['class'=>'form-control'])}}

                  {{Form::label('password',"Password:")}}
                  {{Form::password('password',['class'=>'form-control'])}}

                  {{Form::label('password_confirmation',"Confirm Password:")}}
                  {{Form::password('password_confirmation',['class'=>'form-control'])}}
                  <br>

                  {{Form::submit('Register',['class'=>'form-control btn btn-outline-primary'])}}
                  {!!Form::close()!!}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

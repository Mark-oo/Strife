@extends('main_auth')
@section('title')
  @section('content')
  @foreach ($user as $u)
    {{$u}}
  @endforeach
@endsection

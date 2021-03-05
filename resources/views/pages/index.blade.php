@extends('main')
@section('title','| Home')
  @section('content')
      <div class="col-md-8">
        <h1 class="text-center">General Stuff</h1>
        <find-chat></find-chat>
        <br>
        Popular Public Chats:
        <div class="row row-cols-1 row-cols-md-2">
        @foreach($pop_chats as $chat)
          <div class="col mb-2">
            <div class="card">
              {{-- <img src="..." class="card-img-top" alt="..."> --}}
              <div class="card-body">
                <h5 class="card-title"><a href="{{url('/chats',$chat->id)}}">{{$chat->name}}</a></h5>
                <p class="card-text">{{$chat->description}}</p>
                {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
              </div>
            </div>
          </div>
        @endforeach
        </div>
        {{ $pop_chats->links() }}
      </div>

@endsection

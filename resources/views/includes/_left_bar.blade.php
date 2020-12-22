<div class="col-md-2">
<h3>Find conversation</h3>
<div class="container">
  <a class="btn btn-sm btn-outline-dark" href="{{url('/chats/create')}}">Create group</a>
</div>
<div class="container">
  <h3>Friends</h3>
  <table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Friend</th>
    </tr>
  </thead>
  <tbody>
    @foreach($user->friends as $friend)
    <tr>
      <td><a href="{{route('friends.show',$friend->id)}}">{{$friend->handle}}<a></td>

    </tr>
  @endforeach
  </tbody>
</table>
</div>
</div>

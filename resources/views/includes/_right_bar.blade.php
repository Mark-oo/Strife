<div class="col-md-2">

<p>My chats</p>
<table>
  <thead>
    <th>#</th><th>Name</th>
  </thead>
  <tbody>
    @foreach($user->chat as $chat)
    <tr>
      <td>{{$chat->id}}</td>
      <td><a href="{{route('chats.show',$chat->id)}}">{{substr($chat->name,0,8)}}{{strlen($chat->name) > 8   ?"...":''}}</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

<div class="col-md-2">

<h3>My conversations</h3>
<table>
  <thead>
    <th>#</th><th>Name</th>
  </thead>
  <tbody>
    @foreach($chat as $c)
    <tr>
      <td>{{$c->id}}</td>
      <td><a href="{{route('chats.show',$c->id)}}">{{$c->name}}</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

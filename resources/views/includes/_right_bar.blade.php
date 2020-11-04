<div class="col-md-2">

<h3>My conversations</h3>
<table>
  <thead>
    <th>#</th><th></th>
  </thead>
  <tbody>
    @foreach($chat as $c)
    <tr>
      <td>{{$c->id}}</td>
      <td>{{$c->name}}</td>
    </tr>
  @endforeach
  </tbody>
</table>
</div>

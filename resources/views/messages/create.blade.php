<div class="col-md-8 col-md-offset-2" style="margin-left:-15px;">
     {{Form::open(['route'=>['messages.store',$chat->id],'method'=>'POST'])}}
     <form>
     <div class="row">
       <div class="col-10">
         {{Form::text('message',null,['class'=>'form-control','placeholder'=>'Write something...'])}}
       </div>
       <div class="col-2">
         {{Form::submit('Send',['class'=>'form-control btn btn-primary'])}}
       </div>
     </div>
     </form>
     {{Form::close()}}
</div>

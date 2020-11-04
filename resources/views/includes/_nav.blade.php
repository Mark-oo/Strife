<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="logo.img" width="30" height="30" alt="">Strife</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{Request::is('/')?'active':''}}">
        <a class="nav-link" href="#">Add Friend <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item {{Request::is('#')?"active":""}}">
        <a class="nav-link" href="#">All <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item {{Request::is('/')?'active':''}}">
        <a class="nav-link" href="#">Pending <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item {{Request::is('/')?'active':''}}">
        <a class="nav-link" href="#">Blocked <span class="sr-only">(current)</span></a>
      </li>
      @if(Auth::check())
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           {{Auth::user()->handle}}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('/accaunt')}}">Myaccount</a>
          <a class="dropdown-item" href="{{url('/friends')}}">Friends</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{url('/logout')}}">Logout</a>
        </div>
      </li>
    </ul>
  @elseif(Request::is('login'))
   @else()
     <ul class="navbar-nav  ml-md-auto">
       <li class="nav-item"><a class="btn btn-outline-dark" href="/login">Login</a></li>
       <li class="nav-item"><a class="btn btn-outline-dark" href="/register">Register</a></li>
      </ul>
     </div>
   @endif()
  </div>
</nav>

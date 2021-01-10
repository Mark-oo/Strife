<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/@me"><img src="/css/images/logo2.png" width="50" height="50" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav nm-left mr-auto">
      <li class="nav-item {{Request::is('/')?'active':''}}">
        <a class="nav-link" href="{{url('/friends/find')}}">Find  <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item {{Request::is('#')?"active":""}}">
        <a class="nav-link" href="{{url('/friends')}}">Friends <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item {{Request::is('/')?'active':''}}">
        <a class="nav-link" href="#">Pending <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item {{Request::is('/')?'active':''}}">
        <a class="nav-link" href="#">Blocked <span class="sr-only">(current)</span></a>
      </li>
      @if(Auth::check())
      <li class="nav-item nm-left2 dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           {{Auth::user()->handle}}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route('pages.self',Auth::user()->handle)}}">Myaccount</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{url('/logout')}}">Logout</a>
        </div>
      </li>
    </ul>
   @endif()
  </div>
</nav>

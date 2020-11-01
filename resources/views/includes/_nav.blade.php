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
      <li class="nav-item {{Request::is('/')?'active':''}}">
        <a class="nav-link" href="/login">login <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Username
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('/login')}}">Login</a>
          <a class="dropdown-item" href="{{url('/register')}}">Register</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

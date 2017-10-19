<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
  <a class="navbar-brand" href="/" style="margin-right: 50px; padding: 0px; margin-top: 0px; margin-bottom: 0px;">
    <img src="/image/logo1.svg" width="auto" height="42" alt=""/>
  </a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="{{Request::is("/") ? "nav-item active" : "nav-item"}}">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="{{ (Request::is("news") || Request::is("news/*")) ? "nav-item active" : "nav-item"}}">
        <a class="nav-link" href="/news">News</a>
      </li>
      @foreach ($pages as $page)
        <li class="{{Request::is($page->slug) ? "nav-item active" : "nav-item"}}">
          <a class="nav-link" href="/{{$page->slug}}">{{$page->title}}</a>
        </li>
      @endforeach
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>

  <div class="navbar-nav navbar-right">
    <!--<a class="btn btn-primary navbar-btn" href="/login" role="button">Sign in</a>-->
    <!--<a class="btn btn-primary navbar-btn" href="/register" role="button">Sign up</a>-->
    @if (Auth::guest())
        <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
        <li class="nav-item"><a class="nav-link" href="/register">Register</a></li>
    @else
        <li class="nav-item dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu">
                <li><a href="/manage">Manage</a></li>
                <li>
                    <a href="logout"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="logout" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>
    @endif
  </div>
  
</nav>

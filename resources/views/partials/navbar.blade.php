<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <a id="brand-logo" class='navbar-brand' href='/'><img id="brand-img" src="/image/logo1.svg"/></a>
     <!--<span class='navbar-brand'>Advanced Avionics and Intelligent Information Lab</span>-->
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="{{Request::is("/") ? "active" : ""}}"><a href="/">Home</a></li>
        <li class="{{( Request::is("news") || Request::is("news/*") ) ? "active" : ""}}"><a href="/news">News</a></li>
        @foreach ($pages as $page)
          <li class="{{Request::is($page->slug) ? "active" : ""}}"><a href="/{{$page->slug}}">{{$page->title}}</a></li>
        @endforeach
      </ul>
      <div class="nav navbar-nav navbar-right">
        <!--<a class="btn btn-primary navbar-btn" href="/login" role="button">Sign in</a>-->
        <!--<a class="btn btn-primary navbar-btn" href="/register" role="button">Sign up</a>-->
        @if (Auth::guest())
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Register</a></li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
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
    </div><!--/.navbar-collapse -->
  </div>
</nav>

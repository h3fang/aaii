<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>AAII Lab - @yield('title')</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <style>
        body { padding-top: 5em; }
        #copyright { text-Align:center; }
        #brand-img {max-height: 100%; width: auto; display:block;}
        #brand-logo {padding: 0px; margin-right: 50px;}
    </style>
    
    @yield('stylesheet')
    
  </head>
  
  <body>
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
            <li class="{{Request::is("research") ? "active" : ""}}"><a href="/research">Research</a></li>
            <li class="{{Request::is("members") ? "active" : ""}}"><a href="/members">Members</a></li>
            <li class="{{Request::is("publications") ? "active" : ""}}"><a href="/publications">Publications</a></li>
            <li class="{{Request::is("courses") ? "active" : ""}}"><a href="/courses">Courses</a></li>
            <li class="{{Request::is("download") ? "active" : ""}}"><a href="/download">Download</a></li>
            <li class="{{Request::is("contact") ? "active" : ""}}"><a href="/about">About</a></li>
          </ul>
          <div class="navbar-right">
            <a class="btn btn-primary navbar-btn" href="/auth/login" role="button">Sign in</a>
            <a class="btn btn-primary navbar-btn" href="/auth/register" role="button">Sign up</a>
          </div>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
    
    @yield('content')
    
    <hr>

    <footer>
        <p id='copyright'>&copy; 2015-2017 AAII Lab. All rights reserved.</p>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    @yield('javascript')
    
  </body>
  
</html>

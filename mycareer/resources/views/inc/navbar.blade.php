<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="logo" href="/" >
                      
                        <!-- Logo text image you can use text also -->
                        <span class="hidden-xs">
                        <!--This is light logo text--><img style ="margin-top: 5px;" src="../plugins/images/myCareer-logo-main.png" alt="home" class="light-logo" />
                     </span> </a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="/posts">Blog</a></li>
          <li><a href="/about">About</a></li>
          
          <li><a href="/contact">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li>
            <div class="search-bound"><input class="search-box" type="text" placeholder="Search" /></div>
        </li>
        <!-- Authentication Links #NavruzbekNoraliev-->    
        @if (Auth::guest())
        <li><a href="{{ route('login') }}" id="login_btn" onclick="onLoginClicked()"> <span class="glyphicon glyphicon-log-in" ></span> Login</a></li>
        @else
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
            {{ Auth::user()->name }} {{ Auth::user()->lastname }} <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
            <li><a href="/dashboard">Dashboard</a></li>
            <li>
            <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
            </form>
            </li>
            </ul>
            </li>
             
            </ul>
            @endif
         </div>
    </div>
  </nav>
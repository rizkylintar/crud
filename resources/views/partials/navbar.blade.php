<header>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
          .navbar {
            border-radius: 0;
            margin-bottom: 0;
          }
          .navbar-nav {
            float: none;
            text-align: center;
          }
          .navbar-nav > li {
            display: inline-block;
            float: none;
          }
          .navbar-nav > li > a {
            padding-top: 15px;
            padding-bottom: 15px;
            color: #333;
          }
          .navbar-nav > .active > a, .navbar-nav > li > a:hover {
            background-color: #f8f8f8;
            color: #555;
          }
          .navbar-toggle {
            border: none;
          }
          .navbar-toggle .icon-bar {
            background-color: #555;
          }
        </style>


<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>   
        </div>
        
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-center">
                <li class="{{ request()->is('services') ? 'active' : '' }}">
                    <a href="{{ url('/services') }}">Services</a>
                </li>
                <li class="{{ request()->is('products') ? 'active' : '' }}">
                    <a href="{{ url('/products') }}">Produk</a>
                </li>
                @if(auth()->check() && auth()->user()->role === 'admin')
                    <li class="{{ request()->is('users') ? 'active' : '' }}">
                    <a href="{{ route('users.index') }}">User List</a></li>
                    </li>
                @endif
                @if(auth()->check())
                    <li class="{{ request()->is('profile') ? 'active' : '' }}">
                        <a href="{{ url('/profile') }}">Profile ({{ auth()->user()->name }})</a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout ({{ auth()->user()->name }})</a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                    <li>
                        <a href="{{ route('login') }}">Login</a>
                    </li>
                @endif
                <li class="{{ request()->is('home') ? 'active' : '' }}">
                    <a href="{{ url('/') }}">Back to Website</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>

<!-- Layout utilisé sur toutes les pages de l'application, contient tout le CSS ainsi que le menu partagé et l'en-tête --> 
<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Une App exceptionnelle !</title>
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">

 <!-- CSRF Token -->
 <meta name="csrf-token" content="{{ csrf_token() }}">


<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>
.row-column-text-center {
text-align: center;
}

.chat {
list-style: none;
margin: 0;
padding: 0;
}

.chat li {
margin-bottom: 10px;
padding-bottom: 5px;
border-bottom: 1px dotted #B3A9A9;
}

.chat li .chat-body p {
margin: 0;
color: #777777;
}

.panel-body {
overflow-y: scroll;
height: 350px;
}

::-webkit-scrollbar-track {
-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
background-color: #F5F5F5;
}

::-webkit-scrollbar {
width: 12px;
background-color: #F5F5F5;
}

::-webkit-scrollbar-thumb {
-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
background-color: #555;
}
</style>

</head>
<body>
<div id="app">
<div class="container">
<div class="navbar-header">
<div class="top-bar">
<div class="top-bar-left">
<ul class="menu">
<li class="menu-text">Blog</li>
<li><a href="/">Accueil</a></li>
<li><a href="/articles">Articles</a></li>
<li><a href="/contact">Contact</a></li>
<li><a href="/chat">Chat</a></li>
<li class="container"></li>

 <!-- Authentication Links -->
         @if (Auth::guest())
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
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
        @endif
</ul>
</div>
</div>
</ul>
</div>
</div>

<div class="callout large primary">
<div class="row-column-text-center">
<h1>Un super blog</h1>
<h2 class="subheader">Elu blog de l'année 2019 par un jury compétent</h2>
</div>
</div>

@yield('content')

</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
      $(document).foundation();
    </script>
</body>
</html>

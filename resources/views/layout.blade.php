<html>
    <head><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
        <link href="https://fonts.googleapis.com/css?family=Lora|Ubuntu:300,400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/styles.css">
    </head>
    <body> 
        <header>
            <div class="container container-flex">
                <div class="site-title">
                    <h1>Living the social life</h1>
                    <p class="subtitle">A blog exploring minimalism in life</p>
                </div>
                <nav>
                    <ul>
                        <li><a class="current-page" href="/">Home</a></li>
                        <li><a href="/about">About me</a></li>
                        <li><a href="/post">Add posts</a></li>
                        <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                    </ul>
                </nav>
            </div> <!-- / .container -->
        </header>
        
       @yield('content')
        
        <footer>
            <p><strong>Living the Simple Life</strong></p>
            <p>Copyright 2019</p>
        </footer>

        
        
    </body>
</html>
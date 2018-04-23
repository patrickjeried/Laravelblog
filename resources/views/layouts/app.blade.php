<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    @include ('layouts.head')


    <!-- <link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap.min.css')}}"/>
    <script src="{{url('assets/js/components/bootstrap.js')}}"></script>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->

    <!-- CSRF Token -->
    <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css"> -->

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    
</head>
<body>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    <!-- <img src="pat.jpg" style="height: 200px; margin-bottom: 20px; margin-left: 5px;"> -->
                    
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                            <li><p style="margin-top: 21px; margin-right: 20px; font-family: 'Monoton', cursive; font-size: 26px; color: #E6780B; text-decoration-style: none;">Juantech</p></li>
                            <li><a class="nav-link" href="{{ url('/home') }}" style="margin-top: 25px;">Home</a></li>
                        @if(Auth::id() == 1)
                             <li><a class="nav-link" href="{{ url('/post') }}" style="margin-top: 25px;"">Add Post</a></li>
                        @endif
                       
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @if(Auth::id() ==1)
                                    <li><a class="dropdown-item" href="{{ url('/profile') }}" ><i class="fas fa-user"></i>    {{ __('Profile') }}</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/category') }}"><i class="fas fa-list-alt"></i>   {{ __('Category') }}</a></li>
                                    @endif
                                    <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>
                                            {{ __('Logout') }}
                                    </a>
                                    </li>
                                </ul>
                                
                                    

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
@include ('layouts.body')
</body>
</html>

<!doctype html>
<html>
	<head>
    <title>@yield('title')</title> 
    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
	</head>
	<body>
<div id="app">
    <header >
    <topo titulo="{{ config('app.name', 'Biblioteca') }}" url="{{url('/')}}">
        <ul class="navbar-nav mr-auto">    
            <li class="nav-item ">
                <a class="nav-link" href="#">Empréstimos<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="{{ route('livro.index') }}">Livros</a> 
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="#" >Usuários</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar-se') }}</a>
                </li>
            @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
    
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
    
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
        </topo>
</header>
    <hr>
	<section>
        <div class="corpoView">
            @yield('content')
        </div>    
    </section>
    <hr>
	<footer>
		Todos os direitos reservados
    </footer>
        
    <script src="{{ asset('js/app.js') }}"></script>
</div>
	</body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <!-- Fonte do google -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <!-- CSS Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <!-- CSS da Aplicação -->
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/d.jpg" alt="Robotica">
                    </a>
                    
                    <ul class="navbar-nav">
                        <p>
                        <li class="nav">
                            <a href="/" class="btn-home">Home</a>
                        </li>
                        @auth
                        <li class="nav">
                            <a href="/tela/cadastroAtividade" class="btn-cadastro">Cadastrar</a>
                        </li> 
                        <li class="nav">
                            <a href="/dashboard" class="btn-usario">Pagina Inicial dos Usuários</a>
                        </li> 
                        <li class="nav">
                           <form action="/logout" method="POST">
                            @csrf
                            <a href="/logout" 
                                class="btn-sair" 
                                onclick="event.preventDefault();
                                this.closest('form').submit();">
                            Sair
                            </a>
                           </form>
                        </li>
                        @endauth
                        @guest
                        <li class="nav">
                            <a href="/register" class="btn-cadastror">Cadastrar professor</a>
                        </li> 
                        <li class="nav">
                            <a href="/login" class="btn-login">Fazer login</a>
                        </li>
                        @endguest
                        </p>
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <div class="container-fluid">
                <div class="row">
                    @if(session('msg'))
                       <p class="msg">{{ session('msg') }}</p>
                    @endif 
                    @yield('content')
                </div>
            </div>
        <main>
        <footer>
            <p>Site de Estudo sobre robótica &copy; 2023</p>
        </footer>

        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>

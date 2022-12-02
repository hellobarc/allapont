<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta http-equiv="X-Frame-Options" content="deny">

        <meta name="description" content="Centro de investigación científica. Especialistas en la gestión de ciencia, tecnología y conocimiento. Asesores científicos especializados en varias áreas del conocimiento.">

        <!--Cursor-->
        <style type="text/css">
        body {
            cursor: url('{{asset('cursores/left_ptr.cur')}}'), default;
        }
        </style>

        <!-- UIkit CSS -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/uikit.min.css')}}">

        <!-- Personal CSS -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

        <!-- UIkit JS -->
        <script src="{{asset('js/uikit.min.js')}}"></script>
        <script src="{{asset('js/uikit-icons.min.js')}}"></script>

        <!-- Personal JS -->
        <script src="{{asset('js/js.js')}}"></script>
        <script src="{{ asset('js/app.js') }}" defer></script><!--ESTO JALA EL VUEJS--->
        
        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Sen:wght@700&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Red+Hat+Display&display=swap" rel="stylesheet"> 

        <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet"> 
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Days+One&display=swap" rel="stylesheet"> 
        
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;700&display=swap" rel="stylesheet"> 

        <!-- ROBOT -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

        <!-- FAV -->
        <link rel="icon" type="image/png" href="{{asset('img/fav.svg')}}">


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!--
        <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
        <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
        #Comentado para porbar Quill no errores reportados aun-->

        <!--KATEX
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.11.1/dist/katex.min.css" integrity="sha384-zB1R0rpPzHqg7Kpt0Aljp8JPLqbXI3bhnPWROx27a9N0Ll6ZP/+DiW/UqRcLbRjq" crossorigin="anonymous">

         The loading of KaTeX is deferred to speed up page rendering 
        <script defer src="https://cdn.jsdelivr.net/npm/katex@0.11.1/dist/katex.min.js" integrity="sha384-y23I5Q6l+B6vatafAwxRu/0oK/79VlbSz7Q9aiSZUvyWYIYsd+qj+o24G5ZU2zJz" crossorigin="anonymous"></script>-->

        <!-- To automatically render math in text elements, include the auto-render extension: REMUEVE EL ANTICLICK
        <script defer src="https://cdn.jsdelivr.net/npm/katex@0.11.1/dist/contrib/auto-render.min.js" integrity="sha384-kWPLUVMOks5AQFrykwIup5lo0m3iMkkHrD0uJ4H5cjeGihAutqP0yW0J6dpFiVkI" crossorigin="anonymous" onload="renderMathInElement(document.body);"></script>-->
        <!--
        <script>
            function ready(){
            renderMathInElement(document.body, {delimiters: [ // mind the order of delimiters(!?)
            {left: "$", right: "$", display: true},
            {left: "$", right: "$", display: false},
            {left: "\\[", right: "\\]", display: true},
            {left: "\\(", right: "\\)", display: false},
            ]});
            }
        </script>
         #Comentado para porbar Quill no errores reportados aun-->



        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.13.11/dist/katex.min.css" integrity="sha384-Um5gpz1odJg5Z4HAmzPtgZKdTBHZdw8S29IecapCSB31ligYPhHQZMIlWLYQGVoc" crossorigin="anonymous">

        <!-- The loading of KaTeX is deferred to speed up page rendering -->
        <script defer src="https://cdn.jsdelivr.net/npm/katex@0.13.11/dist/katex.min.js" integrity="sha384-YNHdsYkH6gMx9y3mRkmcJ2mFUjTd0qNQQvY9VYZgQd7DcN7env35GzlmFaZ23JGp" crossorigin="anonymous"></script>

        <!-- To automatically render math in text elements, include the auto-render extension: -->
        <script defer src="https://cdn.jsdelivr.net/npm/katex@0.13.11/dist/contrib/auto-render.min.js" integrity="sha384-vZTG03m+2yp6N6BNi5iM4rW4oIwk5DfcNdFfxkk9ZWpDriOkXX8voJBFrAO7MpVl" crossorigin="anonymous"
            onload="renderMathInElement(document.body);"></script>



</head>
<body class="">
<div id=""><!--VUE SE AGREGA DONDE SE NECESITA-->

<div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
    <nav class="uk-navbar-container bg-header " uk-navbar   id="myTopnav">
            <ul class="uk-navbar-nav  menus">
                <li>
                    <a href="{{ url('/')}}" class="logoHeader " >
                        <img src="{{asset('img/Logo.svg')}}" class="" >
                    </a>
                </li>
                <!--<li class="uk-active">
                    <a class="uk-margin">
                        <form class="uk-search uk-search-default " >
                            <button href="" class="uk-search-icon-flip " uk-search-icon></button>
                            <input class="uk-search-input radcard" type="search" placeholder="Buscar...">
                        </form>
                    </a>      
                </li>-->
            </ul>

        <div class="uk-navbar-center ">
            <ul  class="uk-navbar-nav  menus">



                <li class="">
                    <a href="#" class="uk-button uk-button-text uk-text-bold">
                        Servicios 
                    </a>
                    <div class="uk-navbar-dropdown"  uk-dropdown="mode: click" style="padding:10px;">
                        <ul class="uk-nav uk-navbar-dropdown-nav  "  >
                            <li >
                                <a href="{{ url('asesoria/investigacion')}}" class=""><i class="fa fa-flask" aria-hidden="true"></i> Asesoria en investigación</a>
                            </li>
                            <!--<hr>
                            <li >
                                <a href="#" class=""><i class="fa fa-leaf" aria-hidden="true"></i> Agrotecnología</a>
                            </li>
                            <hr>    
                            <li >
                                <a href="#"><i class="fa fa-users" aria-hidden="true"></i> Seleción de recursos humanos</a>
                            </li>-->
                        </ul>
                    </div>
                </li>



                <li class=""  onclick="flecha1()">
                    <a href="" class="uk-button uk-button-text uk-text-bold" >
                        Herramientas 
                    </a>
                    <div class="uk-navbar-dropdown"  id="drop1" uk-dropdown="mode: click" style="padding:10px;">
                        <ul class="uk-nav uk-navbar-dropdown-nav" >
                            <li>
                                <a href="{{ url('muestra')}}" class="">
                                    <i class="fa fa-superscript" aria-hidden="true"></i> Calculadora de muestra
                                </a>
                            </li>
                            <!--<hr>    
                            <li>
                                <a href="#"><i class="fa fa-calculator" aria-hidden="true"></i> Edad cronológica</a>
                            </li>
                            <hr>            
                            <li>
                                <a href="#"><i class="fa fa-quote-right" aria-hidden="true"></i> Citador en APA</a>
                            </li>-->  
                            <hr style="margin:0px;">            
                            <li>
                                <a href="{{ url('repositorio')}}" class="">
                                    <i class="fa fa-table" aria-hidden="true"></i> Directorio de repositorios de investigación
                                </a>
                            </li>                          
                        </ul>
                    </div>
                </li>



                <li class="">
                    <a href="{{ url('cursos')}}" class="uk-button uk-button-text uk-text-bold">
                        Educación
                    </a>
                    <!--<div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav  ">
                            <li >
                                <a href="{{ url('cursos')}}"><i class="fa fa-leanpub" aria-hidden="true"></i> Cursos</a>
                            </li>
                            <hr>            
                            <li>
                                <a href="#"><i class="fa fa-certificate" aria-hidden="true"></i> Servicios para empresas</a>
                            </li>
                            
                            <hr>            
                            <li>
                                <a href="#"><i class="fa fa-certificate" aria-hidden="true"></i> Consulta un certificado</a>
                            </li>
                        </ul>
                    </div> -->
                </li><!---->

                <li class="" >
                    <a href="{{ url('publicaciones')}}" class="uk-button uk-button-text uk-text-bold">
                       Publicaciones
                    </a>

                </li>   

            </ul>
        </div>


        <a href="{{ url('/')}}" class="logoRes "><img src="{{asset('img/Logo.svg')}}" class=""></a>  

        <a class="uk-navbar-right noSelect" onclick="myFunction()" href="javascript:void(0);">
            <a class="uk-navbar-toggle icono-barras noSelect" uk-navbar-toggle-icon href="" uk-toggle="target: #offcanvas-push">
            </a>
        </a>


        <ul class="uk-navbar-nav  menus">

            @if(!Auth::check())
                <li class="uk-active ">
                    <a href="{{ url('login')}}" class="uk-button  uk-text-bold ">
                        Iniciar Sesión
                    </a>
                </li>  
            
                <li class="uk-active  ">
                    <a href="{{ url('register')}}" class=" uk-text-bold"><button class="uk-button uk-button-primary registro " >Registrarme</button></a>
                </li>                                  
            @endif


            @if(Auth::check())
            <li  class="uk-active  ">

                <a href="{{ url('/')}}" class="perfilImg " onclick="event.preventDefault()">
                    <img src="{{asset('/').Auth::user()->avatar}}" class="imgperfil ">
                </a>

                <div class="uk-navbar-dropdown " uk-dropdown="mode: click" style="padding:10px;">
                    <ul class="uk-nav uk-navbar-dropdown-nav  ">
                        <h5 class="uk-text-center ">{{ Auth::user()->name }}</h5>
                        <hr style="margin:0px;">

                        <li >
                            <a href="{{ url('user/perfil')}}" class=""><i class="fa fa-user" aria-hidden="true"></i> Mi Perfil</a>
                        </li>
                        <hr style="margin:0px;">

                        <li >
                            <a href="{{ url('user/cursos')}}" class=""><i class="fa fa-book" aria-hidden="true"></i> Mis cursos</a>
                        </li>
                        <hr style="margin:0px;">   

                        <li>
                            <a href="{{ url('user/certificados')}}" class=""><i class="fa fa-file-o" aria-hidden="true"></i> Mis certificados</a>
                        </li>  
                        <hr style="margin:0px;">

                        <li>
                            <a href="{{ url('user/pagos')}}" class=""><i class="fa fa-money" aria-hidden="true"></i> Mis pagos</a>
                        </li>  
                        <hr style="margin:0px;">  

                        <!--
                        q@foreach ($tesisUsers as $tesisUser)
                            Q@if ($tesisUser->user_id == Auth::id())
                                    <li>
                                    <a href="{{ url('asesoria/informe')}}" class=""><i class="fa fa-flask" aria-hidden="true"></i> Mi investigación</a>
                                    </li>  
                                    <hr>  
                            Q@endif
                        Q@endforeach              
                        -->

            
                        @can('users.index')
                        <li>
                            <a href="{{ route('users.index')}}" class=""><i class="fa fa-table" aria-hidden="true"></i> Administrador</a>
                        </li>  
                        <hr style="margin:0px;"> 
                        @endcan
                        <li>
                            <a class="dropdown-item " href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            <i class="fa fa-hand-spock-o" aria-hidden="true"></i> Cerrar Sesión
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>  

                    </ul>
                </div>                    
            </li>
            @endif

        </ul>
    </nav>
</div>


<!--MENU RESPONSIVO-->

<script>
    function servicios() {
        //Seleciono el menu que quiero ocultar
        var servicios = document.getElementById("servicios_menu");
        //seleciono el Style
        var serviciosStyle = servicios.style.display;
        //el condicional
        if(serviciosStyle == 'block'){
            servicios.style.display = 'none';
        }else{
            servicios.style.display = 'block';
        }
    }

    function herramientas() {
        //Seleciono el menu que quiero ocultar
        var herramientas = document.getElementById("herramientas_menu");
        //seleciono el Style
        var herramientasStyle = herramientas.style.display;
        //el condicional
        if(herramientasStyle == 'block'){
            herramientas.style.display = 'none';
        }else{
            herramientas.style.display = 'block';
        }
    }
    
    function menuUser() {
        //Seleciono el menu que quiero ocultar
        var menuUser = document.getElementById("menuUser");
        //seleciono el Style
        var menuUserStyle = menuUser.style.display;
        //el condicional
        if(menuUserStyle == 'block'){
            menuUser.style.display = 'none';
        }else{
            menuUser.style.display = 'block';
        }
    }
</script>

<div id="offcanvas-push" uk-offcanvas="flip: true; overlay: true ">
    <div class="uk-offcanvas-bar">

        <button class="uk-offcanvas-close" type="button" uk-close></button>

        <ul class="uk-nav uk-nav-default">
            @if(Auth::check())
                <div onclick="menuUser()" class="uk-text-center">
                    <img src="{{asset('/').Auth::user()->avatar}}" class="imgperfil ">
                    <p  class="uk-margin-small-top "> {{ Auth::user()->name }}</p>
                </div>
            @endif

            <div id="menuUser" class="menuUserRes menuResDis ">

                <li class="uk-parent " >
                    <a href="{{ url('user/perfil')}}" class="uk-nav-header " >
                        <i class="fa fa-user" aria-hidden="true"></i> 
                        Mi perfil    
                    </a>
                </li>
                <li class="uk-parent " >
                    <a href="{{ url('user/cursos')}}" class="uk-nav-header " >
                        <i class="fa fa-book" aria-hidden="true"></i> 
                        Mis cursos    
                    </a>
                </li>
                <li class="uk-parent ">
                    <a href="{{ url('user/certificados')}}" class="uk-nav-header " >
                        <i class="fa fa-file-o" aria-hidden="true"></i> 
                        Mis certificados
                    </a>
                </li> 
                <li class="uk-parent " >
                    <a href="{{ url('user/pagos')}}" class="uk-nav-header " >
                        <i class="fa fa-money" aria-hidden="true"></i> 
                        Mis pagos    
                    </a>
                </li>
                @can('users.index')
                <li class="uk-parent " >
                    <a href="{{ route('users.index')}}" class="uk-nav-header " >
                        <i class="fa fa-table" aria-hidden="true"></i> 
                        Administrador    
                    </a>
                </li>
                @endcan
            </div>


            <li class="uk-parent " >
                <a class="uk-nav-header " onclick="servicios()">
                    <i class="fa fa-th-large" aria-hidden="true"></i> 
                    Servicios    
                </a>
                
                <ul class="uk-nav-sub servicios " id="servicios_menu">
                    <li >
                        <a href="{{ url('asesoria/investigacion')}}" class=""><i class="fa fa-flask" aria-hidden="true"></i> Asesoria en investigación</a>
                    </li>
                    <!---
                    <li class="maginTop5">
                        <a href="#" class=""><i class="fa fa-leaf" aria-hidden="true"></i> Agrotecnología</a>
                    </li>--->
                </ul>
            </li>

            <li class="uk-parent " >
                <a class="uk-nav-header  maginTop5" onclick="herramientas()">
                    <i class="fa fa-wrench" aria-hidden="true"></i> 
                    Herramientas    
                </a>
                
                <ul class="uk-nav-sub servicios " id="herramientas_menu">
                    <li>
                        <a href="{{ url('muestra')}}" class=""><i class="fa fa-superscript" aria-hidden="true"></i> Calculadora de muestra</a>
                    </li>
                    <li class="maginTop5">
                        <a href="{{ url('repositorio')}}" class=""><i class="fa fa-table" aria-hidden="true"></i> Directorio de repositorios de investigación</a>
                    </li> 
                </ul>
            </li>

            <li class="uk-parent " >
                <a href="{{ url('cursos')}}" class="uk-nav-header  maginTop5" >
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i> 
                    Educación  
                </a>

            </li>            

            <li class="uk-parent " >
                <a href="{{ url('carrera')}}" class="uk-nav-header  maginTop5" >
                    <i class="fa fa-handshake-o" aria-hidden="true"></i> 
                    Trabaja en Alappont   
                </a>
            </li>  

            <hr>


            @if(!Auth::check())
                <div class="uk-text-center ">
                    <li class="uk-active ">
                        <a href="{{ url('login')}}" class="uk-text-bold text-btn"  ><button class="  uk-button uk-button-primary landing-btn-serv" style="color: #E4E6EB !important;"  >Iniciar Sesión</button></a>
                    </li>

                    <li class="uk-active  ">
                        <a href="{{ url('register')}}" class="uk-text-bold text-btn"  ><button class="  uk-button uk-button-primary landing-btn-serv " style="color: #E4E6EB !important;"  >Registrarme</button></a>
                    </li>
                </div>
            @endif

            @if(Auth::check())
            <div class="uk-text-center ">
                <li class="uk-active ">
                    <a href="{{route('logout')}}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <button class="uk-button uk-button-primary landing-btn-serv uk-text-bold text-btn " style="color: #E4E6EB !important;" >Cerrar Sesión</button>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </div>
            @endif

        </ul>

    </div>
</div>

<!---->



<main>
    @yield('content') 
</main>




</div><!--end- Vue.js-->
</body>

</html>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
                    <?php

    $frases = array(
        0 => "''Si trabajas apasionadamente y realmente convencido de lo que estás haciendo, habrás encontrado la clave del éxito — Anónimo''",
        1 => "''Siempre que te pregunten si puedes hacer un trabajo, contesta que sí y ponte enseguida a aprender cómo se hace — Franklin D. Roosevelt''", 
        2 => "''La confianza en sí mismo es el primer secreto del éxito — Ralph Waldo Emerson''", 
        3 => "''El triunfo no está en vencer siempre, sino en nunca desanimarse — Napoleón Bonaparte''", 
        4 => "''Un hombre inteligente no es el que tiene muchas ideas, sino el que sabe sacar provecho de las pocas que tiene — Anónimo''", 
        5 => "''El éxito no se logra sólo con cualidades especiales. Es sobre todo un trabajo de constancia, de método y de organización — Víctor Hugo''",
        6 => "''El trabajo que nunca se empieza es el que tarda más en finalizarse — J.R.R. Tolkien''",
        7 => "''Escoge un trabajo que te guste, y nunca tendrás que trabajar ni un solo día de tu vida — Confucio'",
        8 => "''El éxito en la vida consiste en siempre seguir adelante — Anónimo'",
        9 => "''El 80% del éxito se basa simplemente en insistir — Woody Allen'",
        10 => "''La motivación nos impulsa a comenzar y el hábito nos permite continuar — Jim Ryun'",
        11 => "''Si puedes soñarlo, puedes hacerlo — Walt Disney'",
        12 => "''Un líder es alguien que conoce el camino, anda el camino, y muestra el camino — John C. Maxwell'",
        13 => "''Pensando en nuestra familia y en nuestros amigos, encontraremos la motivación necesaria para empezar un nuevo día de trabajo — Anónimo'",
        14 => "''El éxito no es la clave de la felicidad. La felicidad es la clave del éxito — Albert Schweitzer'",
        15 => "''Cuanto más tiempo pase sin que actúes, más dinero estás dejando de ganar — Carrie Wilkerson'",
        16 => "''Mantente alejado de aquellas personas que tratan de menospreciar tus ambiciones. Las personas pequeñas siempre lo hacen, pero los verdaderamente grandes hacen sentirte que tú también puedes ser grande — Mark Twain'",
        17 => "''Definitivamente quería ganar mi libertad. Pero la principal motivación no fue hacer dinero, sino causar un impacto — Sean Parker'",
        18 => "''No tengo miedo a morir, tengo miedo a no intentarlo — Jay Z'",
        19 => "''A menudo las personas están trabajando duro en la cosa equivocada. Trabajar en la cosa correcta probablemente es más importante que trabajar duro — Caterina Fake'",
        20 => "''El éxito es la suma de pequeños esfuerzos repetidos un día sí y otro también — Robert Collier'",
        21 => "''Nada es particularmente difícil si lo divides en pequeños trabajos — Henry Ford'",
        22 => "''He aprendido que los errores pueden ser tan buenos profesores como el éxito — Jack Welch'",
        23 => "''Normalmente, lo que nos da más miedo hacer es lo que más necesitamos hacer — Timothy Ferriss'",
        24 => "''Si crees que puedes, ya estás a medio camino — Theodore Roosevelt'",
        25 => "''Trabajar es lo que nos mantiene vivos, sin nuestro trabajo, no seríamos más que seres sin metas en la vida — Anónimo'",
        26 => "''Pregúntate si lo que estás haciendo hoy te acerca al lugar en el que quieres estar mañana - Walt Disney'",
        27 => "''Cuando sientas que todo se pone en tu contra, recuerda que un avión despega contra el viento, no a favor - Henry Ford'",
        28 => "''Comienza haciendo lo que es necesario, después lo que es posible y de repente estarás haciendo lo imposible - San Francisco de Asís'",
        29 => "''La función del liderazgo es producir más líderes, no más seguidores - Ralph Nader'",
        30 => "''Dedica tanto tiempo a tu propia mejora personal que no te quede tiempo para criticar a los demás - Christian D. Larson'",
        31 => "''Nunca vas a poder cruzar el océano hasta que tengas el coraje de dejar de ver la costa - Cristóbal Colón'",
        32 => "''Si quieres llegar rápido, camina solo. Si quieres llegar lejos, camina en grupo - Proverbio africano'",
        33 => "''Si no actúas como piensas, vas a terminar pensando como actúas - Blaise Pascal'",
        34 => "''La forma de empezar algo es dejar de hablar y empezar a hacerlo - Walt Disney'",
        35 => "''Yo no soy tan inteligente, simplemente trabajo en los problemas más tiempo - Albert Einstein'",
        );

$numero = rand(1,35);

?>



<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'MICOL S.A.') }}
                </a>
                <?php

    echo "$frases[$numero]";

?>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

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

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

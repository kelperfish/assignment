<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>Starter Template - Materialize</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
    <link href="{{ url('css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="{{ url('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>
    <nav class="black" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="{{ route('home') }}" class="brand-logo" style="font-family: Candara">
                <i class="material-icons">code</i>NGSC Shoes
            </a>
            <ul class="right hide-on-med-and-down">
                <li><a href="/aboutUs">Background</a></li>
                <li><a href="{{ url('product') }}">Products</a></li>
                <li><a href="{{ url('cart') }}">Cart</a></li>
                <li><a href="#">Login</a></li>
                <li><a class="white black-text waves-effect waves-light btn" href="#">Register</a></li>
            </ul>

            <ul id="nav-mobile" class="sidenav">
                <li><a href="#">Navbar Link</a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="page-footer black">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Company Bio</h5>
                    <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job.<br />
                        Any support on this project is greatly appreciated.
                    </p>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Settings</h5>
                    <ul>
                        <li><a class="white-text" href="{{ route('home') }}">Home Page</a></li>
                        <li><a class="white-text" href="{{ url('product') }}">Products</a></li>
                        <li><a class="white-text" href="#!">About Us</a></li>
                    </ul>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Connect</h5>
                    <ul>
                        <li><a class="white-text" href="https://www.facebook.com/">Facebook</a></li>
                        <li><a class="white-text" href="https://www.instagram.com/">Instagram</a></li>
                        <li><a class="white-text" href="https://www.youtube.com/">YouTube</a></li>
                        <li><a class="white-text" href="https://twitter.com/">Twitter</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">NGSC Team</a>
            </div>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="{{ url('js/init.js') }}"></script>
    <script src="{{ url('js/materialize.js') }}"></script>
</body>
</html>
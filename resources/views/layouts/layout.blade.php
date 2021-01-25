<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>the Big Bikes</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
        rel="stylesheet">
        <link rel="stylesheet" href="/frontend/css/style.css">
    </head>
    
    <body>
        <!-- to retrieve the content from other pages -->
        <div class="main">
            <div class="con">
                <nav class="nav">
                    <div class="nav__left">
                        <ul class="nav__list">
                            <li class="nav__item">
                                <a href="/" class="nav__link">Home</a>
                            </li>
                            <li class="nav__item">
                                <a href="/shops" class="nav__link">Shop</a>
                            </li>
                            <li class="nav__item">
                                <a href="/products" class="nav__link">Products</a>
                            </li>
                        </ul>
                    </div>
                    <div class="nav__right">
                    <ul class="nav__list">
                            <li class="nav__item">
                                <a href="#" class="nav__link">Login</a>
                            </li>
                            <li class="nav__item">
                                <a href="#" class="nav__link">Signup</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- BUTTONS -->
                <form action="{{ url('/search') }}" type="GET" class="search-form">
                    <span class="material-icons">
                        search
                    </span>
                    <input type="search" name="query" id="query" class="search-box" placeholder="Search by model">
                </form>
            <div class="content">
              @yield('content')
            </div>
        </div>
        <footer class="footer">
            <div class="">
                <div class="">
                    <div class="footer__navigation">
                        <ul class="footer__list">
                            <li class="footer__item">
                                <a href="#" class="footer__link">Company</a>
                            </li>
                            <li class="footer__item">
                                <a href="#" class="footer__link">Contact us</a>
                            </li>
                            <li class="footer__item">
                                <a href="#" class="footer__link">Careers</a>
                            </li>
                            <li class="footer__item">
                                <a href="#" class="footer__link">Privacy Policy</a>
                            </li>
                            <li class="footer__item">
                                <a href="#" class="footer__link">Terms</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="">
                    <p class="footer__copyright">
                        Built by <a href="#" class="footer__link">Rad Julongbayan</a> for his project <a href="#" class="footer__link">Laravel</a>&nbsp;<a href="#" class="footer__link">PHP</a>&nbsp;<a href="#" class="footer__link">SQL</a>. <br>Copyright © by <a href="#" class="footer__link">BIKE SEARCH</a>
                    </p>
                </div>
            </div>
        </footer>
    </body>
</html>

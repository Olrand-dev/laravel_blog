<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>


    <!-- Scripts -->
    <script src="{{ asset('js/manifest.js') }}" defer></script>
    <script src="{{ asset('js/vendor.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/vendor.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>

    <div id="app">
        
        <header id="site-top">

            <div class="site-logo">
                <img src="{{ asset('img/logo_oww.png') }}" alt="">
            </div>

            <site-search></site-search>

            <nav id="drop-down-menu">

                <label for="tm" id="drop-down-toggle-menu">

                    <div class="site-logo-mobile">
                        <img class="full" src="{{ asset('img/logo_oww.png') }}" alt="">
                        <img class="icon" src="{{ asset('img/logo.png') }}" alt="">
                    </div>

                    <span class="drop-icon bars-icon">
                        <i class="fas fa-bars"></i>
                    </span>
                </label>
    
                <input type="checkbox" id="tm">
                <ul class="main-menu clearfix">
    
                    <li>
                        <a href="#">Sample</a>
                    </li>
    
                    <li>
                        <a href="#" class="parent">
                            2-level DD
                            <span class="drop-icon"><i class="fas fa-chevron-down"></i></span>
                            <label title="Toggle Drop-down" class="drop-icon" for="sm1">
                                <i class="fas fa-chevron-down"></i>
                            </label>
                        </a>
                        <input type="checkbox" id="sm1">
                        <ul class="sub-menu">
    
                            <li>
                                <a href="#">Item 2.1</a>
                            </li>
    
                            <li>
                                <a href="#" class="parent">
                                    Item 2.2
                                    <span class="drop-icon"><i class="fas fa-chevron-down"></i></span>
                                    <label title="Toggle Drop-down" class="drop-icon" for="sm2">
                                        <i class="fas fa-chevron-down"></i>
                                    </label>
                                </a>
                                <input type="checkbox" id="sm2">
                                <ul class="sub-menu">
    
                                    <li>
                                        <a href="#">Item 2.2.1</a>
                                    </li>
                                    <li>
                                        <a href="#" class="parent">
                                    Item 2.2
                                    <span class="drop-icon"><i class="fas fa-chevron-down"></i></span>
                                    <label title="Toggle Drop-down" class="drop-icon" for="sm3">
                                        <i class="fas fa-chevron-down"></i>
                                    </label>
                                </a>
                                <input type="checkbox" id="sm3">
                                <ul class="sub-menu">
    
                                    <li>
                                        <a href="#">Item 2.2.1</a>
                                    </li>
                                    <li>
                                        <a href="#">Item 2.2.2</a>
                                    </li>
                                    <li>
                                        <a href="#">Item 2.2.3</a>
                                    </li>
    
                                </ul>
                                    </li>
                                    <li>
                                        <a href="#">Item 2.2.3</a>
                                    </li>
    
                                </ul>
                            </li>
    
                            <li>
                                <a href="#">Item 3.4</a>
                            </li>
    
                        </ul>
                    </li>
    
                    <li>
                        <a href="#">Another Sample</a>
                    </li>
    
                </ul>
            </nav>

        </header>
        

        <div id="site-content" class="container-fluid py-4">

            @yield('content-layout')

        </div>


        <footer id="site-bottom">

            <div class="container-fluid footer">
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center">
                        &copy; Olrand Web Workshop ({{ date('Y') }})
                    </div>
                </div>
            </div>
            
        </footer>

    </div>

</body>
</html>

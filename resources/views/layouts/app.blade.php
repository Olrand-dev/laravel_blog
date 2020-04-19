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
    <script src="{{ asset('js/prism.js') }}" defer></script>
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

            {{ menu('Home Main', 'menus.main-top.menu') }}

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

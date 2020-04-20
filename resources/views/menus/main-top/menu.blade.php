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

        @foreach ($items as $menu_item)

            @include('menus.main-top.element', $menu_item)

        @endforeach
        
    </ul>

</nav>
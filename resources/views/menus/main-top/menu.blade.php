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

            @if (count($menu_item['children']) === 0)

                <li>
                    <a href="#">{{ $menu_item['title'] }}</a>
                </li>

            @else

                <li>
                    <a href="#" class="parent">

                        {{ $menu_item['title'] }}

                        <span class="drop-icon">
                            <i class="fas fa-chevron-down"></i>
                        </span>

                        <label title="Toggle Drop-down" class="drop-icon" 
                            for="sm-{{ $menu_item['id'] }}">

                            <i class="fas fa-chevron-down"></i>
                        </label>

                    </a>
                    <input type="checkbox" id="sm-{{ $menu_item['id'] }}">
                    
                    @include('menus.main-top.menu-element', $menu_item)

                </li>

            @endif
            
        @endforeach
        
    </ul>

</nav>
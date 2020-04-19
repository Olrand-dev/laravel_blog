<ul class="sub-menu">

    @if (count($menu_item['children']) === 0)

        <li>
            <a href="#">{{ $menu_item['title'] }}</a>
        </li>

    @else

        @foreach($menu_item['children'] as $menu_item)

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

    @endif

</ul>
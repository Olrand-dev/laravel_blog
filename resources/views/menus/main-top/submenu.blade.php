<ul class="sub-menu">

    @if (count($menu_item['children']) === 0)

        <li>
            <a href="{{ $menu_item['url'] }}">{{ $menu_item['title'] }}</a>
        </li>

    @else

        @foreach($menu_item['children'] as $menu_item)

            @include('menus.main-top.element', $menu_item)

        @endforeach

    @endif

</ul>
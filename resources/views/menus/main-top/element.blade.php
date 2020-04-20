<li>

    @if (count($menu_item['children']) > 0)

        @if ($menu_item['url'] !== '')
            @php ($e = 'a')
            <{{ $e }}  href="{{ $menu_item['url'] }}" class="parent">
        @else
            @php ($e = 'span')
            <{{ $e }} class="no-url">
        @endif

            <span class="el-text"> {{ $menu_item['title'] }} </span>

            <span class="drop-icon">
                <i class="fas fa-chevron-down"></i>
            </span>

            <label title="Toggle Drop-down" class="drop-icon" 
                for="sm-{{ $menu_item['id'] }}">

                <i class="fas fa-chevron-down"></i>
            </label>

        </{{ $e }}>

        <input type="checkbox" id="sm-{{ $menu_item['id'] }}">
        
        @include('menus.main-top.submenu', $menu_item)
    
    @else 

        <a href="{{ $menu_item['url'] }}">{{ $menu_item['title'] }}</a>

    @endif

</li>
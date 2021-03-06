@props(['items', 'type', 'title', 'container'])

@if (!empty($title))
    <div class="box-header">
        {{ $title }}
    </div>
@endif

@if ($type === 'simple')

    <div class="row card-collection">

        @foreach ($items as $item)

            <x-card :data="$item" class="col-md-6 col-lg-4 col-xl-3" :parent-container="$container" />
            
        @endforeach

    </div>

@elseif ($type === 'slider')

    <div class="card-collection">
        <div data-slider="slick">

            @foreach ($items as $item)

                <x-card :data="$item" class="col-md-6 col-lg-4 col-xl-3" />
                
            @endforeach

        </div>
    </div>

@endif
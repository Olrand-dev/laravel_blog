@extends('layouts.two-columns')

@section('title') {{ config('app.name') }} | Главная страница @endsection

@section('content')

    <div class="card content-box">
        
        <div class="card-body">

            {{ Breadcrumbs::render('main-page') }}

            <x-cards-collection :items="$newEntries" type="slider" title="Новые" />

            <x-cards-collection :items="$popularEntries" type="slider" title="Популярные" />

        </div>

    </div>

@endsection

@section('sidebar')
    
    @include('partials.sidebar-main')

@endsection

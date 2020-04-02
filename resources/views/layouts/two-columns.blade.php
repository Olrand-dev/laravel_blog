@extends('layouts.app')

@section('content-layout')

    <div class="row justify-content-center">

        <main class="col-xl-9 col-md-8">
            @yield('content')
        </main>

        <aside class="sidebar col-xl-3 col-md-4">
            @yield('sidebar')
        </aside>

    </div>

@endsection

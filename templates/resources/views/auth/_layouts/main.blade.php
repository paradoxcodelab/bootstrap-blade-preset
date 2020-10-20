<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script defer src="{{ asset('js/app.js') }}"></script>

    @livewireStyles
</head>
<body>
    <div id="app" class="d-flex flex-column min-vh-100">
        @section('header')
        @include('auth._layouts.header')
        @show

        <main class="flex-grow-1 py-4">
        @section('content')

        @show
        </main>

        @section('footer')
        @include('auth._layouts.footer')
        @show
    </div>

    @livewireScripts
</body>
</html>

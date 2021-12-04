<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <!-- Scripts -->
        @routes

        @production
        <script src="/js/vue.min.js" defer></script>
        @else
        <script src="/js/vue.js" defer></script>
        @endproduction

        @stack('register-components')

        <script defer>
            window.Laravel = window.Laravel || {}
            {{--window.Laravel.socketio_url = "{{ config('socketio.url') }}"--}}
        </script>

        <script src="{{ mix('/js/app.js') }}" defer></script>
    </head>
    <body>
        @inertia

        @env('local')
            <script src="http://localhost:35729/livereload.js"></script>
        @endenv
    </body>
</html>

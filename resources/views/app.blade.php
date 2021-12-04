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
    </head>
    <body>
        @inertia

        @env('local')
            <script src="http://localhost:35729/livereload.js"></script>
        @endenv

        @production
            <script src="/js/vue.min.js"></script>
        @else
            <script src="/js/vue.js"></script>
        @endproduction

        @stack('register-components')

        @inject('torque', 'torque') {!! $torque->renderComponents() !!}

        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>

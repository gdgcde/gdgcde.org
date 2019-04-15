<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GDG CDE - @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="py-4">
        <v-app class="white">
            <toolbar></toolbar>
            <drawer></drawer>
            <v-content id="home" class="pb-0">
                <v-slide-y-reverse-transition>
                    @yield('content')
                </v-slide-y-reverse-transition>
            </v-content>
            <g-footer></g-footer>
            <bottom-nav></bottom-nav>
        </v-app>
    </div>
</body>
</html>

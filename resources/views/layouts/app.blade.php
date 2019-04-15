<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="py-4">
        <v-app class="white">
            <Toolbar></Toolbar>
            <Drawer></Drawer>
            <v-content id="home" class="pb-0">
                <v-slide-y-reverse-transition>
                    @yield('content')
                </v-slide-y-reverse-transition>
            </v-content>
            <Footer></Footer>
            <BottomNav></BottomNav>
        </v-app>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
        @include(('layouts.head'))
</head>
<body>
    <div id="app">
        @include('layouts.nav')

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

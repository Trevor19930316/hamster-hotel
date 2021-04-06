<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- meta -->
    @include('backend.template.include.head-meta')
    <!-- Scripts -->
    @include('backend.template.include.head-script')
    <!-- Styles -->
    @include('backend.template.include.head-link')

    <style>
        @yield('self-css-style')
    </style>

    <title>@yield('title')</title>
</head>
<body>
    @yield('content')
</body>
</html>

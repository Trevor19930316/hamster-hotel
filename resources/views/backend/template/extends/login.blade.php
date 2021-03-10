<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- meta -->
    @include('backend.template.include.head-meta')
    <!-- Scripts -->
    @include('backend.template.include.head-script')
    <!-- Styles -->
    @include('backend.template.include.head-link')

    <!-- 自訂獨立頁面 css -->
    @yield('self-css-style')

    <title>@yield('title')</title>

</head>
<body>
    <div class="main-body">
        @yield('content')
    </div>
</body>
</html>

<!DOCTYPE html>

<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    {{--<link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">--}}
    {{--<link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">--}}
    {{--<link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">--}}
    {{--<link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">--}}
    {{--<link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">--}}
    {{--<link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">--}}
    {{--<link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">--}}
    {{--<link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">--}}
    {{--<link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">--}}
    {{--<link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.png">--}}
    {{--<link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">--}}
    {{--<link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">--}}
    {{--<link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">--}}
    {{--<link rel="manifest" href="assets/favicon/manifest.json">--}}
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>@yield('title')</title>

    <link href="{{ asset('css/free.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/coreui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/coreui-chartjs.css') }}" rel="stylesheet">

    {{-- Main styles for this application --}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    {{-- Element styles --}}
    <link href="{{ asset('css/backend/templates/element.css') }}" rel="stylesheet">

    {{-- 載入 plugin 包 --}}
    {{-- jQuery --}}
    <script src="{{asset('plugin/jquery/3.3.1/jquery.min.js')}}"></script>
    {{-- jQuery easing --}}
    <script src="{{asset('plugin/jquery/easing/1.4.2/easing.min.js')}}"></script>
    {{-- bootstrap --}}
    <script src="{{asset('plugin/bootstrap/4.3.1/js/bootstrap.js')}}"></script>
    {{-- bootstrap validation --}}
    <script src="{{asset('plugin/bootstrap/4.3.1/validation.js')}}"></script>

    {{-- google ads --}}
    {{--@include('backend.template.include.google-ads')--}}

    {{-- 自訂 Plugin --}}
    @yield('htmlHeadPlugin')
    {{-- 自訂 Css --}}
    @yield('htmlHeadCss')
    {{-- 自訂 JavaScript --}}
    @yield('htmlHeadJs')
</head>

<body class="c-app">
<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    @include('backend.template.shared.nav-builder')
</div>
<div class="c-wrapper">
    {{-- header --}}
    @include('backend.template.shared.header')
    <div class="c-body">
        <main class="c-main">
            <div class="container-fluid">
                <div class="fade-in">
                    {{-- content --}}
                    @yield('content')
                </div>
            </div>
        </main>
        {{-- footer --}}
        @include('backend.template.shared.footer')
    </div>
</div>

<!-- CoreUI and necessary plugins -->
<script src="{{ asset('js/coreui.bundle.min.js') }}"></script>
<script src="{{ asset('js/coreui-utils.js') }}"></script>

<!-- backend js -->
<script src="{{ asset('js/backend/helper.js') }}"></script>
<script src="{{ asset('js/backend/form.js') }}"></script>
<script src="{{ asset('js/backend/element.js') }}"></script>

@yield('javascript')

</body>
</html>

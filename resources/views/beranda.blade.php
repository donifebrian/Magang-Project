<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('assets/vendors/core/core.css') }}">

    @yield('plugins_css')

    <link rel="stylesheet" href="{{ asset('assets/fonts/feather-font/css/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/demo_1/style.css') }}">
    <link rel="shortcut icon" href="https://binamegah.com/wp-content/uploads/2020/09/cropped-favicon-logo-bmi1-180x180.png" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- metismenu --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/metismenu/dist/metisMenu.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/demo_1/costume.css') }}"> --}}
</head>

<body>

    <div class="main-wrapper" id="app">
        @include('components.sidebar.sidebar')
        <div class="page-wrapper">
            @include('components.navbar.navbar')
            <div class="page-content">
                <h1><a href="https://www.nobleui.com/laravel/template/light/">Click here for full Review</a></h1>
            </div>
            
            @include('components.footer')
        </div>
    </div>

    <script src="{{ asset('assets/vendors/core/core.js') }}"></script>
    @yield('plugins_js')
    <script src="{{ asset('assets/vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/template.js') }}"></script>

    @yield('scripts')

    {{-- metismenu --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery"></script>
    <script src="https://cdn.jsdelivr.net/npm/metismenu"></script>
    <script>
        $(function() {
            $('#menu1').metisMenu();
        });
    </script> --}}

</body>

</html>
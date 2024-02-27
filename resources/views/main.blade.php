<html>
<head>
    <title>Bricole Me - @yield('title')</title>

{{--    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">--}}
{{--    <meta http-equiv="Content-Security-Policy" content="block-all-mixed-content">--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
{{--    <meta http-equiv="Content-Security-Policy" content="default-src *;--}}
{{--    img-src * 'self' data: https: http:;--}}
{{--    script-src 'self' 'unsafe-inline' 'unsafe-eval' *;--}}
{{--    style-src  'self' 'unsafe-inline' *">   --}}

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('node_modules/nice-select2/dist/css/nice-select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />

</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>

<html>
<head>
    <title>Bricole Me - @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BricoleMe</title>
</head>

<body>
    <header class="fixed-top">
        @include('partials.nav')
    </header>
    <main>
        <div class="row my-2">
            @include('partials.flashbag')
        </div>
    </main>
    @include('partials.footer')
</body>

</html>

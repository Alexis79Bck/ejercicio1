<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,700;0,800;1,200;1,300;1,400;1,600;1,800&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    @livewireStyles
</head>

<body class="antialiased relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0"
    style="background-color:cornsilk">
    <div class="container">
        <div class="row">
            @livewire('top-titulo')
        </div>
        <div class="row">
            Otra Fila...
        </div>
    </div>


    @livewireScripts
</body>

</html>

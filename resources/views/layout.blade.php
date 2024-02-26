<!DOCTYPE html>
<html lang="en" data-theme="scoutbsalight">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-US-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        @vite('resources/css/app.css')
        <title>Eagle's Nest</title>
        
   
    </head>
    <body class="">
        @include('partials._navbar')
        {{-- VIEW OUTPUT --}}
        @yield('content')
    </body>
</html>
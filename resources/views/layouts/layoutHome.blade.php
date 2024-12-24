<!DOCTYPE html>
<html lang="en" data-theme="scoutbsalight">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-US-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        @vite('resources/css/app.css')
        <title>Eagle's Nest</title>
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Delicious+Handrawn&display=swap" rel="stylesheet">
   
    </head>
    <body class="">
        @include('partials._navbarHome')
        {{-- VIEW OUTPUT --}}
        @yield('content')
    </body>
        
        
</html>
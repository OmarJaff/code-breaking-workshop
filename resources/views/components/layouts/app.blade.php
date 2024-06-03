<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <title>{{ $title ?? 'CodeBreaker Game' }}</title>
    </head>
    <body class="pt-8 bg-gradient-to-r from-primary to-secondary text-white print:text-black grid place-items-center h-full">
         {{ $slot }}
     </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('titulo')</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        @vite(['resources/sass/pages/app.scss', 'resources/js/app.js'])
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Styles -->
    </head>
<body>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>UserManagement Module - {{ config('app.name', 'Laravel') }}</title>

    <meta name="description" content="{{ $description ?? '' }}">
    <meta name="keywords" content="{{ $keywords ?? '' }}">
    <meta name="author" content="{{ $author ?? '' }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
     


    
          <!-- Bootstrap CSS -->
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
          <!-- Loading main css file -->
          <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700|" rel="stylesheet" type="text/css">
          
          
          @vite(['resources/css/style.css','resources/css/costume-style.css','resources/js/app.js']);
    {{-- Vite CSS --}}
    {{-- {{ module_vite('build-usermanagement', 'resources/assets/sass/app.scss', storage_path('vite.hot')) }} --}}

    <link rel="shortcut icon" type="image/x-icon"
    href="{{ Vite::asset('resources/images/surecowtitle.png') }}" />
		
    </head>

<body>
    @yield('content')

    {{-- Vite JS --}}
    {{-- {{ module_vite('build-usermanagement', 'resources/assets/js/app.js', storage_path('vite.hot')) }} --}}
</body>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{asset('assets/css/smarty.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/flags/css/flag-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/images/favicon.png')}}" rel="icon" />

    <script src="https://twemoji.maxcdn.com/v/latest/twemoji.min.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
</head>
<body>

    @include('layouts.menu')

    <section id="mainContent" class="container-fluid">
        
        @yield('content')

    </section>
    
    
</body>

<script>
    $("#mainContent").hide();
</script>
</html>

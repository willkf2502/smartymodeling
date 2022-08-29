<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- /Fonts -->
    

    <link href="{{asset('assets/css/smarty.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/flags/css/flag-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/images/favicon.png')}}" rel="icon" />

    <script src="https://twemoji.maxcdn.com/v/latest/twemoji.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('assets/plugins/jquery/jquery-3.6.1.min.js')}}"></script>
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
    $("#mainContent").fadeIn();


    // Add slideDown animation to Bootstrap dropdown when expanding.
    $('.dropdown').on('show.bs.dropdown', function() {
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown({duration: 100});
    });
        
        // Add slideUp animation to Bootstrap dropdown when collapsing.
    $('.dropdown').on('hide.bs.dropdown', function() {
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp({duration: 100});
    });
    
    
</script>
    


</html>

<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="robots" content="noindex">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="xFfFMm0UfLUjLAT6s3EW3gIZplo9RTcKeiBHRHCz">

    {{-- Chrome Address Bar Color --}}
    <meta name="theme-color" content="#fff"/>

    <title>@yield('title', env('APP_NAME'))</title>
    <meta name="description" content="@yield('description')"/>

    {{-- Facebook share --}}
    <meta property="og:url" content="@yield('canonical')" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title', env('APP_NAME'))" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:image" content="{{asset('imgs/logo.png')}}"/>

    {{-- Twitter share --}}
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="@yield('title', '')"/>
    <meta name="twitter:description" content="@yield('description',)"/>
    <meta name="twitter:image" content="{{asset('imgs/logo.png')}}"/>

    {{-- Canonical --}}
    <link rel="canonical" href="@yield('canonical', '')"/>

    {{-- Favicon --}}
    {{-- <link rel="shortcut icon" href="{{ asset('favicon.ico') }}"> --}}
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    

    {{-- AOS CSS CDN --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- Tailwind CSS --}}
    <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}">

    {{-- intl Tel Input CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <style> .iti { width: 100%; margin-top: 6px  } </style>

    {{-- FontAwsome 6 --}}
    <script src="https://kit.fontawesome.com/2c6b599d00.js" crossorigin="anonymous"></script>

    {{-- Alpine JS --}}
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>

    @yield('links')

</head>

<body class="">

    {{-- Topbar --}}
    @include('partials.frontend.top-bar')

    {{-- Web Navbar --}}
    @if ( !Route::is('home') && !Route::is('services.show') )
        @include('partials.frontend.navbar')
    @endif

    @yield('content')

    {{-- Footer --}}
    @include('partials.frontend.footer')

    {{-- {{ TawkTo::widgetCode("https://embed.tawk.to/622b3ce01ffac05b1d7e17ff/1ftsebjnr") }} --}}

    {{-- scripts --}}

    {{-- jQuery cdn --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    {{-- AJAX jQuery cdn --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    {{-- intl Tel Input JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    {{-- AOS JS CDN --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script>

    @yield('scripts')
</body>

</html>

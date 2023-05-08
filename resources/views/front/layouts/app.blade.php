<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
 <title>Señor Churro </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="{{asset("assets/front/img/logo1.png")}}" rel="icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Señor Churro') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    @include('front.includes.styles')

    <!-- Scripts -->
    @yield('style')
</head>
<body>

@include('front.includes.navbar')

@yield('content')


@include('front.includes.footer')

@include('front.includes.top')


@include('front.includes.scripts')


@yield('script')


</body>
</html>

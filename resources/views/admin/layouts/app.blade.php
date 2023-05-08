<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Señor Churro') }}</title>
<!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

     @include('admin.includes.styles')

    <!-- Scripts -->
    @yield('style')
</head>
<body>

@include('admin.includes.navbar')

@include('admin.includes.sidebar')


@yield('content')


@include('admin.includes.footer')

@include('admin.includes.top')


@include('admin.includes.scripts')


@yield('script')


</body>
</html>

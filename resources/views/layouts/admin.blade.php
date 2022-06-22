<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    
    <link  href="./assets/css/material-dashboard.css?v=3.0.3" rel="stylesheet" />

    <link href="{{ asset('frontend/css/bootstrap5.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet"> --}}
</head>

<body>


    <!-- Scripts -->
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}" defer></script>


</body>

</html>

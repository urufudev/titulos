<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">


    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="app">

      @yield('content')

    </div>
    
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
  
</body>
</html>
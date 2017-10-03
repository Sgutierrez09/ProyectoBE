<!DOCTYPE html>
  <html lang="en">



  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Bienestar Estudiantil') }}</title>
    <link href="/css/boostrap.css" rel="stylesheet">
    <link href="/css/mcss.css" rel="stylesheet">
    <script src="/js/jquery-3.2.1.min.js" ></script>
    <script src="/js/app.js"></script>
    <script src="/js/aspectos.js"></script>
 </head>
<body>
   @include('service_view.nav')


   @yield('content')
   @yield('datos')

   @include('service_view.footer')


</body>
</html>
              
                
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>
      {{ config('app.name', '') }} 1$
  </title>

  <!-- Scripts -->
  <script src="{{ asset('/js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('/css/mr-style.css') }}" rel="stylesheet">
</head>
<body>
<div id="app" class="mr-main-div">
  @yield('content')
</div>
<div class="modal fade padding-0" id="mr_modal" role="dialog"></div>

</body>
</html>

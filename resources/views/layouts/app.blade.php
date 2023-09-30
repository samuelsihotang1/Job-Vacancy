<!DOCTYPE html>
<html class="no-js">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>@yield('title', 'PPW')</title>
  <meta name="robots" content="noindex, follow" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Place favicon.png in the root directory -->
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
  <!-- Font Icons css -->
  <link rel="stylesheet" href="{{ asset('css/font-icons.css') }}" />
  <!-- plugins css -->
  <link rel="stylesheet" href="{{ asset('css/plugins.css') }}" />
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <!-- Responsive css -->
  <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
</head>

<body>
  @yield('content')


  <!-- All JS Plugins -->
  <script src="{{ asset('js/plugins.js') }}"></script>
  <!-- Main JS -->
  <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
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
  @guest
  @else
  <ul>
    <!-- Authentication Links -->
    <li>
      <a id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
        v-pre>
        {{ Auth::user()->name }}
      </a>

      <div aria-labelledby="navbarDropdown">
        <a href="{{ route('logout') }}"
          onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST">
          @csrf
        </form>
      </div>
    </li>
  </ul>
  @endguest
  @yield('content')

  @yield('script')
</body>

</html>
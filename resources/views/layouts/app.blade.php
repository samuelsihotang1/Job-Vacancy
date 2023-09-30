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
  <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon" />
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

  {{-- Navbar --}}
  @hasSection('navbar')
  @else
  <!-- HEADER AREA START (header-5) -->
  <header class="ltn__header-area ltn__header-5 ltn__header-transparent gradient-color-2">
    <!-- ltn__header-middle-area start -->
    <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-black ltn__logo-right-menu-option plr--9---">
      <div class="container">
        <div class="row">
          <div class="col-lg-2">
            <div class="site-logo-wrap">
              <div class="site-logo">
                <a href="/"><img src="{{ asset('img/logo-3.png') }}" alt="Logo" /></a>
              </div>
            </div>
          </div>
          <div class="col header-menu-column menu-color-white">
            <div class="header-menu d-none d-xl-block">
              <nav>
                <div class="ltn__main-menu">
                  <ul style="justify-content: flex-end;">
                    <li class="special-link"><a href="index.html">BERANDA</a></li>
                    <li class="special-link"><a href="contact.html">KONTAK</a></li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>

          <div class="ltn__header-options ltn__header-options-2">
            <!-- header-search-1 -->

            <!-- user-menu -->
            <div class="ltn__drop-menu user-menu">
              <ul>
                <li>
                  <a href="#"><i class="icon-notification"></i>
                    <sup>2</sup></a>
                </li>
              </ul>
            </div>
            <!-- user-menu -->
            <div class="ltn__drop-menu user-menu">
              <ul>
                <li>
                  <a href="#"><i class="icon-user"></i></a>
                  <ul>
                    <li><a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                      </form>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ltn__header-middle-area end -->
  </header>
  <!-- HEADER AREA END -->
  <div class="ltn__utilize-overlay"></div>
  @endif


  
  @yield('content')

  <!-- All JS Plugins -->
  <script src="{{ asset('js/plugins.js') }}"></script>
  <!-- Main JS -->
  <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
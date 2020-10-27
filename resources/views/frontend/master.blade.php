<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset ('frontend/css/core.min.css') }}">
  <link rel="stylesheet" href="{{asset ('frontend/css/main.min.css') }}">
  <title>Home</title>
</head>

<body class="home-page">
  {{-- <header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-top-area">
            <!-- start header top left -->
              <div class="aa-header-top-left">
                <!-- start language -->
                
                <div class="cellphone hidden-xs">
                  <p>Ninh Kiều - Cần Thơ</p>
                </div>
                <!-- / language -->

                <!-- start cellphone -->
                <div class="cellphone hidden-xs">
                  <p><span class="fa fa-phone"></span>01678-991-281</p>
                </div>
                <!-- / cellphone -->
              </div>
              <!-- / header top left -->
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                  @if (Auth::check())
                    <li class="hidden-xs">{{ Auth::user()->name }}</li>
  <li class="hidden-xs"><a href="{{ url('/logout') }}">Thoát</a></li>
  @else
  <li class="hidden-xs"><a href="{{ url('/register') }}">Đăng kí</a></li>
  <li class="hidden-xs"><a href="{{ url('/login') }}">Đăng nhập</a></li>
  @endif
  </ul>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  <!-- / header top  -->

  <!-- start header bottom  -->
  <div class="aa-header-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-header-bottom-area">
            <!-- logo  -->
            <div class="aa-logo">
              <!-- Text based logo -->
              <a href="{!! URL('/') !!}">
                <span class="fa fa-shopping-cart"></span>
                <p>Nông sản sạch <strong>Cần Thơ</strong> <span>Good food - Good health</span></p>
              </a>
              <!-- img based logo -->
              <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
            </div>
            <!-- / logo  -->
            <!-- cart box -->
            <div class="aa-cartbox">
              <a class="aa-cart-link" href="{!! url('gio-hang') !!}">
                <span class="fa fa-shopping-basket"></span>
                <span class="aa-cart-title">GIỎ HÀNG</span>
                <span class="aa-cart-notify">
                  <?php 
                      $count = Cart::count(); 
                      print_r($count);
                    ?>
                </span>
              </a>
            </div>
            <!-- / cart box -->
            <!-- search box -->
            @include('frontend.blocks.seach')
            <!-- / search box -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / header bottom  -->
  </header> --}}
  <!-- / header section -->
  <!-- menu -->
  {{-- <section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>          
          </div>
          <!-- Start menu -->
          @include('frontend.blocks.menu')
          <!-- End menu -->
        </div>
      </div>       
    </div>
  </section> --}}
  <!-- / menu -->
  <!-- Content pages -->

  {{-- @yield('content') --}}

  <!-- / Content pages -->

  <!-- / product category -->
  <!-- jQuery library -->
  <header class="semi">
    <div class="container">
      <div class="backdrop-wrapper"></div>
      <div class="mobile-wrapper"></div>
      <div class="top-wrapper">
        <div class="logo-wrapper"><a href="/"><img src="{{asset ('images/img/logo.png') }}" alt=""></a></div>
        @include('frontend.blocks.seach')
        
        <div class="top-list-wrapper">
          <ul>
            <li><a href="#"><span class="ic"><img src="{{asset ('images/img/ic-1.png') }}" alt=""></span>Kinh nghiệm hay</a></li>
            <li><a href="#"><span class="ic"><img src="{{asset ('images/img/ic-2.png') }}" alt=""></span>Tài khoản</a></li>
            <li><a href="{!! url('gio-hang') !!}">
              <span class="ic"><em class="fa fa-shopping-basket"></em>
                <span>
                  0
                </span>
              </span>Giỏ hàng</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="bottom-wrapper">
        @include('frontend.blocks.menu')
      </div>
    </div>
  </header>
  <main>
    @yield('content')
    
    
    
    
    <div id="phoneButton"><a href="#"><span class="ic"><em class="mdi mdi-phone"></em></span></a></div>
    <div id="backToTop"><em class="mdi mdi-arrow-up"></em></div>
  </main>
  @include('frontend.blocks.footer')
  <script>
    (function (d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.0&autoLogAppEvents=1';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    window.twttr = (function (d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0],
        t = window.twttr || {};
      if (d.getElementById(id)) return t;
      js = d.createElement(s);
      js.id = id;
      js.src = "https://platform.twitter.com/widgets.js";
      fjs.parentNode.insertBefore(js, fjs);
      t._e = [];
      t.ready = function (f) {
        t._e.push(f);
      };
      return t;
    }(document, "script", "twitter-wjs"));
  </script>
  <script src="{{asset ('frontend/js/core.min.js') }}"></script>
  <script src="{{asset ('frontend/js/main.min.js') }}"></script>
</body>

</html>
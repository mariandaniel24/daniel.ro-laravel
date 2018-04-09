<!doctype html>
<html lang="{{ app()->getlocale() }}">
<head>
  <title>{{ env('APP_NAME') }} - Web design | UX & UI | Designer | SEO Services</title>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="apple-touch-icon" href="icon.png" /> {{--
  <link rel="stylesheet" href="/css/themify-icons.css"> --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/css/iziModal.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css"
  />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.2.0/css/iziToast.min.css" />
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <div id="wrapper">
    <!-- Navbar -->
    <nav class="nav-box unselectable desktop">
      <div class="container nav">
        <div id="logo-navbar" class="logo">
          <p>Daniel.</p>
        </div>
        <div id="lang-navbar" class="language-box shadow-6">
          <button type="button" class="language-button">@lang('navbar.language_title') 
			<i class="fa fa-chevron-down" aria-hidden="true"></i>
		</button>
          <div class="language-dropdown-list shadow-2">
            {{--  <a href="@lang('navbar.current.language_link')">
              <img class="img-responsive" src="@lang('navbar.current.language_icon')" alt="">
              @lang('navbar.current.language')	
             </a>  --}}

            <a href="@lang('navbar.other.language_link')">
				      <img class="img-responsive" src="@lang('navbar.other.language_icon')" alt="">
					  	@lang('navbar.other.language')	
            </a>
          </div>
        </div>
        <div class="hamburger hamburger--elastic js-hamburger">
          <div class="hamburger-box">
            <div class="hamburger-inner"></div>
          </div>
        </div>
        <ul id="menu">
          <li>
            <a data-nav="true" class="white active" href="#home">@lang('navbar.title.home')</a>
          </li>
          <li>
            <a data-nav="true" class="white" href="#services">@lang('navbar.title.services')</a>
          </li>
          <li>
            <a data-nav="true" class="white" href="#portfolio">@lang('navbar.title.portfolio')</a>
          </li>
          <li>
            <a data-nav="true" class="white" href="#about">@lang('navbar.title.about')</a>
          </li>
          <li>
            <a data-nav="true" class="white" href="#contact">@lang('navbar.title.contact')</a>
          </li>
        </ul>
      </div>
    </nav>
    <div id="page">
      <!-- First section -->
      <section id="home" class="section ">
  @include ('layouts.home')
      </section>
      <!-- Services section -->
      <section id="services" class="section white-bg">
  @include ('layouts.services')
      </section>
      <!-- Portfolio section -->
      <section id="portfolio" class="section">
  @include ('layouts.portfolio')
      </section>
      <!-- Statistics section -->
      <section id="statistics" class="section">
  @include ('layouts.statistics')
      </section>
      <!-- About section -->
      <section id="about" class="section ">
  @include ('layouts.about')
      </section>
      <!-- Contact section -->
      <section id="contact" class="section ">
  @include ('layouts.contact')
      </section>
      <!-- Footer section -->
      <section id="footer" class="section footer-bg">
  @include ('layouts.footer')
      </section>
    </div>
  </div>
  <!-- Loading section -->
  <div id="loading-box">
    <div class="loader">
      <svg class="loading" width="96px" height="96px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
  			<circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
      </svg>
    </div>
  </div>
  @yield('main')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/TypewriterJS/1.0.0/typewriter.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animateCSS/1.2.2/jquery.animatecss.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/3.3.6/scrollreveal.js" integrity="sha256-wpD5v2/x4TsvsX8iWHHJePQJ+j7yEOJgt2cVTGc27u0="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/js/iziModal.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.2.0/js/iziToast.min.js"></script>
  <script src="{{asset('js/app.js')}}"></script>
  <script>
    var app = document.getElementById('title-rotate');
    var typewriter = new Typewriter(app, { loop: true });
      typewriter.typeString('landing pages.')
      .pauseFor(2000)
      .deleteAll()
      .typeString('websites.')
      .pauseFor(2000)
      .deleteChars(6)
      .typeString(' applications.')
      .pauseFor(2000)
      .deleteAll()
      .typeString('user interfaces.')
      .pauseFor(2000)
      .deleteAll()
      .start();
  </script>
  @if (getenv('APP_ENV') === 'local')
  <script id="__bs_script__">
    //<![CDATA[
        document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.6'><\/script>".replace("HOST", location.hostname));
        //]]>
  </script>
  @endif
</body>
</html>
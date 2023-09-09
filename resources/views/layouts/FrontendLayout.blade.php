<!doctype html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Job board HTML-5 Template </title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="manifest" href="https://preview.colorlib.com/theme/jobfinderportal/site.webmanifest">
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/price_rangs.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/slicknav.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/fontawesome-all.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/themify-icons.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
@stack('css')
</head>

<body>



<header>

  <div class="header-area header-transparrent">
  <div class="headder-top header-sticky">
  <div class="container">
  <div class="row align-items-center">
  <div class="col-lg-3 col-md-2">

  <div class="logo">
  <a href="index.html"><img src="{{ asset('frontend/img/logo/logo.png') }}" alt=""></a>
  </div>
  </div>
  <div class="col-lg-9 col-md-9">
  <div class="menu-wrapper">
  
  <div class="main-menu">
  <nav class="d-none d-lg-block">
  <ul id="navigation">
  <li><a href="index.html">Home</a></li>
  <li><a href="job_listing.html">Find a Jobs </a></li>
  <li><a href="about.html">About</a></li>
  <li><a href="index.html#">Page</a>
  <ul class="submenu">
  <li><a href="blog.html">Blog</a></li>
  <li><a href="single-blog.html">Blog Details</a></li>
  <li><a href="elements.html">Elements</a></li>
  <li><a href="job_details.html">job Details</a></li>
  </ul>
  </li>
  <li><a href="contact.html">Contact</a></li>
  </ul>
  </nav>
  </div>
  
  <div class="header-btn d-none f-right d-lg-block">
  <a href="index.html#" class="btn head-btn1">Register</a>
  @guest()
  <a href="{{ route('login') }}" class="btn head-btn2">Login</a>
  @endguest

   @auth
   <a href="{{ route('home') }}" class="btn head-btn2">Dashboard</a>
   @endauth
  </div>
  </div>
  </div>
  
  <div class="col-12">
  <div class="mobile_menu d-block d-lg-none"></div>
  </div>
  </div>
  </div>
  </div>
  </div>
  
</header>

 <main>

 @yield('frontendContent')
 
</main>
<footer>

<div class="footer-area footer-bg footer-padding">
<div class="container">
<div class="row d-flex justify-content-between">
<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
<div class="single-footer-caption mb-50">
<div class="single-footer-caption mb-30">
<div class="footer-tittle">
<h4>About Us</h4>
<div class="footer-pera">
<p>Heaven frucvitful doesn't cover lesser dvsays appear creeping seasons so behold.</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
<div class="single-footer-caption mb-50">
<div class="footer-tittle">
<h4>Contact Info</h4>
<ul>
<li>
<p>Address :Your address goes
here, your demo address.</p>
</li>
<li><a href="index.html#">Phone : +8880 44338899</a></li>
<li><a href="index.html#">Email : <span class="__cf_email__" data-cfemail="a7cec9c1c8e7c4c8cbc8d5cbcec589c4c8ca">[email&#160;protected]</span></a></li>
</ul>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
<div class="single-footer-caption mb-50">
<div class="footer-tittle">
<h4>Important Link</h4>
<ul>
<li><a href="index.html#"> View Project</a></li>
<li><a href="index.html#">Contact Us</a></li>
<li><a href="index.html#">Testimonial</a></li>
<li><a href="index.html#">Proparties</a></li>
<li><a href="index.html#">Support</a></li>
</ul>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
<div class="single-footer-caption mb-50">
<div class="footer-tittle">
<h4>Newsletter</h4>
<div class="footer-pera footer-pera2">
<p>Heaven fruitful doesn't over lesser in days. Appear creeping.</p>
</div>

<div class="footer-form">
<div id="mc_embed_signup">
<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part">
<input type="email" name="email" id="newsletter-form-email" placeholder="Email Address" class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Email Address '">
<div class="form-icon">
<button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm"><img src="{{ asset('frontend/img/icon/form.png') }}" alt=""></button>
</div>
<div class="mt-10 info"></div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="row footer-wejed justify-content-between">
<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">

<div class="footer-logo mb-20">
<a href="index.html"><img src="{{ asset('frontend/img/logo/logo2_footer.png') }}" alt=""></a>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
<div class="footer-tittle-bottom">
<span>5000+</span>
<p>Talented Hunter</p>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
<div class="footer-tittle-bottom">
<span>451</span>
<p>Talented Hunter</p>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">

<div class="footer-tittle-bottom">
<span>568</span>
<p>Talented Hunter</p>
</div>
</div>
</div>
</div>
</div>

<div class="footer-bottom-area footer-bg">
<div class="container">
<div class="footer-border">
<div class="row d-flex justify-content-between align-items-center">
<div class="col-xl-10 col-lg-10 ">
<div class="footer-copy-right">
<p>
Copyright &copy;<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
</p>
</div>
</div>
<div class="col-xl-2 col-lg-2">
 <div class="footer-social f-right">
<a href="index.html#"><i class="fab fa-facebook-f"></i></a>
<a href="index.html#"><i class="fab fa-twitter"></i></a>
<a href="index.html#"><i class="fas fa-globe"></i></a>
<a href="index.html#"><i class="fab fa-behance"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>

</footer>


<script src="{{ asset('frontend/js/vendor/modernizr-3.5.0.min.js') }}"></script>
<script src="{{ asset('frontend/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('frontend/js/popper.min.js') }}"></script>
<script src="{{ asset('frontend//js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.slicknav.min.js') }}"></script>
<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/js/slick.min.js') }}"></script>
<script src="{{ asset('frontend/js/price_rangs.js') }}"></script>
<script src="{{ asset('frontend/js/wow.min.js') }}"></script>
<script src="{{ asset('frontend/js/animated.headline.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.scrollUp.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('frontend/js/contact.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.form.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('frontend/js/mail-script.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('frontend/js/plugins.js') }}"></script>
<script src="{{ asset('frontend/js/main.js') }}"></script>
@stack('customJs')
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854" integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg==" data-cf-beacon='{"rayId":"7f45e0f67b4a78c3","version":"2023.8.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>
</body>
</html>
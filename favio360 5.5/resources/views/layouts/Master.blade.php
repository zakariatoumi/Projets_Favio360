<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="author" content="Favio360" />
  <meta name="copyright" content="Favio360" />
  <meta name="keywords" content="video 360, favio360, sport, culture, music, technologie, Documentaire, Nature">
  <meta name="revisit-after" content="30 days">
  <meta name="robots" content="index, nofollow">
  <meta name="bingbot" content="noindex, nofollow">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('image/imageLogo.png') }}" alt="Favio360">
  <title>Favio 360</title>
  <link rel="stylesheet" href="{{ asset('css/foundation.css') }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
  <link href="https://use.fontawesome.com/releases/v5.0.2/css/all.css" rel="stylesheet">
</head>

<body>
  

  <!-- menu mobile -->

  <div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

      <div class="off-canvas position-left" id="mobile-menu" data-off-canvas>
        <ul>
          <li>
            <a href="{{url('/')}}" class="colorb">Acceuil</a>
          </li>
          <li>
            <a href="{{url('annuair')}}" class="colorb">Annuair</a>
          </li>
          <li>
            <a href="{{url('internaut')}}" class="colorb">Internaute</a>
          </li>
          <li>
            <a href="{{url('internaut')}}" class="colorb">Video 360</a>
          </li>
          <li>
              <a href="{{url('home')}}" class="colorb">Connexion</a>
          </li>
          <li>
          <form action="{{URL::to('recherche')}}" method="post" role="search">
          {{ csrf_field() }}
          <div class="searchbar">
          <div class="input-group-button">
          
          <input type="text" name="q" placeholder="Chercher sur ..." style="border-radius: 20px">
          <button type="submit" class="button search" name="button"><i class="fas fa-search"></i></button>
          </div>
        </div>
        </form>


          </li>
        </ul>
      </div>

      <div class="off-canvas-content" data-off-canvas-content>

        <div class="title-bar show-for-small-only" id="MB">
          <div class="title-bar-left">
            <button class="menu-icon" type="button" data-open="mobile-menu"></button>
          </div>
          <div class="title-bar-right">
            <a href="{{url('/')}}" alt="Favio 360"><img src="{{ asset('image/Logo-360-Source.png') }}" alt="Favio 360" width="60px" height="60px"></a>
          </div>

        </div>

        <!-- menu -->
        <nav class="top-bar nav-desktop">

          <div class="top-bar-left">
            <h3 class="logo">
              <a href="{{url('/')}}">   <img src="{{ asset('image/Logo-360-Source.png') }}" width="60px" height="60px" alt="Favio 360"></a>
            </h3>
          </div>

          <div class="top-bar-right">
            <ul class="menu menu-desktop">
              <li>
                <a href="{{url('/')}}" class="colorb">Acceuil</a>
              </li>
              <li>
                <a href="{{url('annuair')}}" class="colorb">Annuair</a>
              </li>
              <li>
                <a href="{{url('internaut')}}" class="colorb">Internaute</a>
              </li>
              <li>
                <a href="{{url('video360')}}" class="colorb">Video 360</a>
              </li>
              <li>
                <a href="{{url('home')}}" class="colorb">Connexion</a>
              </li>
              <li>
              <form action="{{URL::to('recherche')}}" method="post" role="search">
              {{ csrf_field() }}
              <div class="searchbar">
              <div class="input-group-button">
              
              <input type="text" name="q" placeholder="Chercher sur ..." style="border-radius: 20px">
              <button type="submit" class="button search" name="button"><i class="fas fa-search"></i></button>
              </div>
            </div>
            </form>


              </li>
            </ul>
          </div>

        </nav>


                @yield('content')


        <!-- footre -->
        
      </div>
      
    </div>
  </div>
<footer>

          <div class="social-footer">
          <div class="social-footer-left">
            <ul>
              <li class="colorb"><a href="{{url('notre_equipe')}}"  class="colorb">Notre équipe</a></li>
              <li class="colorb"><a href="{{url('mention')}}"  class="colorb">Mention légale</a></li>
            </ul>
          </div>
          <div class="social-footer-icons">
            <ul class="menu simple">
                <a href="https://facebook.com/MustafaBouri/" target="_blank"><li><i class="fab fa-facebook-square brd1"></i></li></a>
                <a href="https://twitter.com/FAVIO3601" target="_blank"><li><i class="fab fa-twitter brd1"></i></li></a>
                <a href="https://www.instagram.com/favio360degres/?hl=fr" target="_blank"><li><i class="fab fa-instagram brd1"></i></li></a>
            </ul>
          </div>
        </div>
        <p class="text-center Copyright">Favio360 Copyright 2018</p>
        </footer>
        <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-angle-up"></i></button>

  <script src="{{ asset('js/vendor/jquery.js') }}"></script>
  <script src="{{ asset('js/vendor/what-input.js') }}"></script>
  <script src="{{ asset('js/vendor/foundation.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script>
    $(document).ready(function () {
      $('.owl-carousel').owlCarousel({
        items: 1,
        merge: true,
        loop: true,
        margin: 4,
        videoHeight: 410,
        videoWidth: 400,
        video: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        lazyLoad: false,
        center: true,
        responsive: {
          480: {
            items: 2
          },
          600: {
            items: 4
          }
        }
      });
      $('.owl-carousel1').owlCarousel({
        items: 1,
        merge: true,
        loop: true,
        margin: 5,
        videoHeight: 200,
        videoWidth: 300,
        video: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        lazyLoad: false,
        center: false,
        responsive: {
          480: {
            items: 2
          },
          600: {
            items: 4
          }
        }
      });

    });
  </script>
  <script>
    $(document).foundation();

$(function() {
  $('.search')
    .bind('click', function(event) {
      $(".search-field").toggleClass("expand-search");
      if ($(".search-field").hasClass("expand-search")) {
        $(".search-field").focus();
      }
    })
});
  </script>
  <script>
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
</body>

</html>
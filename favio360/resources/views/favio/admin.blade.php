<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="image/imageLogo.png" alt="Favio360">
  <title>Favio 360</title>
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link href="https://use.fontawesome.com/releases/v5.0.2/css/all.css" rel="stylesheet">



</head>

<body>

  
  <!-- menu mobile -->

  <div class="off-canvas-wrapper">
      <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
  
        <div class="off-canvas position-left" id="mobile-menu" data-off-canvas>
          <ul>
          <li><a><h4>{{ Auth::user()->name }}</h4></a></li>
          
            <li>
                <a href="{{ route('logout') }}"  onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="colorb">Deconnexion</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
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
              <a href="index.html">   <img src="image/Logo-360-Source.png" width="60px" height="60px"></a>
            </div>
  
          </div>
  
          <!-- menu -->
          <nav class="top-bar nav-desktop">
  
            <div class="top-bar-left">
              <h3 class="logo">
                <img src="image/Logo-360-Source.png" width="60px" height="60px">
              </h3>
            </div>
  
            <div class="top-bar-right">
              <ul class="menu menu-desktop">
              <li><a><h4>{{ Auth::user()->name }}</h4></a></li>
              <li>
                  <a href="{{ route('logout') }}"  onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="colorb">Deconnexion</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
              </li>
              </ul>
            </div>
  
          </nav>
  
        <!-- head -->



        <!-- contenu -->
       <br>
        <section class="main">
          <div class="wrap row">
              <h3 class="TR">Modération video</h3>
              <br>
              <br>
              <div class="wrap">
              <table>
              <thead>
              <tr>
              <th width="400" class="t1">Lien video</th>
              <th width="300" class="t1">Action</th>
              
              </tr>
              </thead>
              <tbody>
              @foreach($videos as $video)
              <tr>
              <td>
              {{ $video->lien}}
              </td>
              <td>
              
                <div class="grid-x">
                     <div class="cell large-5">
                      
                       <form action="{{url('home/'.$video->id)}}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE')}}
                        <a href="{{ url('home/'.$video->id.'/edit') }}" class="button btn">Modifier</a>
                        <button type="submit" class="button btn">Supprimer</button>
                       </form>
                       
                     </div>
                     <div class="cell large-2 ft">Publier : </div>
                     <div class="cell large-2">
                     <div class="switch">
                     @if($video->valide == 1)
                     <form action="{{ url('home/'.$video->id.'/publier')}}" method="post" id="valideform{{$video->id}}">
                      <input type="hidden" name="_method" value="PUT">
                      {{ csrf_field() }}
                        <input class="switch-input" type="checkbox" name="exampleSwitch{{$video->id}}" checked>
                        <label class="switch-paddle" for="exampleSwitch{{$video->id}}" onclick="event.preventDefault();document.getElementById('valideform{{$video->id}}').submit();">
                        <span class="show-for-sr">Download Kittens</span>
                        </label>
                      </form>
                      @else
                      <form action="{{ url('home/'.$video->id.'/publier')}}" method="post" id="valideform{{$video->id}}">
                      <input type="hidden" name="_method" value="PUT">
                      {{ csrf_field() }}
                        <input class="switch-input" type="checkbox" name="exampleSwitch{{$video->id}}">
                        <label class="switch-paddle" for="exampleSwitch{{$video->id}}" onclick="event.preventDefault();document.getElementById('valideform{{$video->id}}').submit();">
                        <span class="show-for-sr">Download Kittens</span>
                        </label>
                      </form>
                      @endif
                      </div>
                     </div>
                     
                 </div>
                 
               
                   
                  
              </div>
              </td>
              </tr>
              @endforeach
              
              
              </tbody>
              </table>
              </div>
          </div>
        </section>



        
       
       
      </div>
    </div>
  </div>

  <p id="copy" class="text-center Copyright">Favio360 Copyright 2018</p>
  <script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/what-input.js"></script>
  <script src="js/vendor/foundation.js"></script>
  <script src="js/app.js"></script>
  
</body>

</html>

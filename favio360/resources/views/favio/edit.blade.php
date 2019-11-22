<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="image/imageLogo.png" alt="Favio360">
  <title>Favio 360</title>
  <link rel="stylesheet" href="{{ URL::asset('css/foundation.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('css/owl.theme.default.min.css') }}">
  <link href="https://use.fontawesome.com/releases/v5.0.2/css/all.css" rel="stylesheet">



</head>

<body>

  
  <!-- menu mobile -->

  <div class="off-canvas-wrapper">
      <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
  
        <div class="off-canvas position-left" id="mobile-menu" data-off-canvas>
          <ul>
          <li><a><h4>{{ Auth::user()->name }}</h4></a></li>
          <li><a href="{{url('home')}}" class="colorb">Home</a></li>
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
              <a href="index.html">   <img src="{{ URL::asset('image/Logo-360-Source.png') }}" width="60px" height="60px"></a>
            </div>
  
          </div>
  
          <!-- menu -->
          <nav class="top-bar nav-desktop">
  
            <div class="top-bar-left">
              <h3 class="logo">
                <img src="{{ URL::asset('image/Logo-360-Source.png') }}" width="60px" height="60px">
              </h3>
            </div>
  
            <div class="top-bar-right">
              <ul class="menu menu-desktop">
              <li><a><h4>{{ Auth::user()->name }}</h4></a></li>
              <li><a href="{{url('home')}}" class="colorb">home</a></li>
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
        <section class="main">
          <div class="wrap row">
            <h1>Soumettre une video</h1>
            <form action="{{ url('home/'.$v->id)}}" method="post">
            
                <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}
                <div class="grid-container">
                  
                   
                  <table>
                  <div class="grid-x grid-padding-x">
                    <div class="medium-6 cell">
                      <br>
                      <br>
                      <br>
                    </div>
                      
                    <div class="medium-6 cell">
                    <tr>
                       <td> 
                        <label>Votre pseudo : </label>
                       </td>
                       <td> <input type="text" name="pseudo" value="{{ $v->pseudo }}">
                       </td>
                      </tr>
              
                    </div>
                    <div class="medium-6 cell">
                    <tr>
                       <td> 
                        <label>Titre de la video: </label>
                       </td>
                       <td> <input type="text" name="titre" value="{{ $v->titre }}">
                       </td>
                      </tr>
              
                    </div>
                     <div class="medium-6 cell">
                    <tr>
                       <td> 
                        <label>Lien de la video : </label>
                       </td>
                       <td> <input type="text" name="lien" value="{{ $v->lien }}">
                       </td>
                      </tr>
                      
                    </div>
                    <div class="medium-6 cell">
                      <tr>
                         <td> 
                          <label>Catégorie : </label>
                         </td>
                         <td>
                           <div class="large-6 columns">
                        <select id="select" name="categorie" required >
                        @foreach($tags as $tag)
                        @if($tag->id == $v->tag_id)
                          <option value="{{$tag->id}}" selected>{{$tag->tag}}</option>
                        @else
                          <option value="{{$tag->id}}">{{$tag->tag}}</option>
                        @endif
                        @endforeach
                        </select>
                    
                    </div>
                         </td>
                        </tr>
                        
                      </div>
                     <div class="medium-6 cell">
                    <tr>
                       <td> 
                        <label>Discriprion :</label>
                        
                        <td>
                          <textarea name="discription">{{ $v->description }}</textarea>
                        </td>
                      </tr>     
                        
                      
                      
                    </div>
                    
                    </div>
                    
               </table> 
              </div>
              <div align="center">
                <input class="button btn" type="submit" value="Modifier" >
              </div>
              </form>
              
              
          </div>
        </section>


        
        
       
      </div>
    </div>
  </div>
<p id="copy" class="text-center Copyright">Favio360 Copyright 2018</p>

  <script src="{{ URL::asset('js/vendor/jquery.js') }}"></script>
  <script src="{{ URL::asset('js/vendor/what-input.js') }}"></script>
  <script src="{{ URL::asset('js/vendor/foundation.js') }}"></script>
  <script src="{{ URL::asset('js/app.js') }}"></script>
  
</body>

</html>

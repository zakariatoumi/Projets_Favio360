@extends('layouts.Master')
@section('content')
  



<section class="main">
          <div class="wrap row">

<div class="grid-x">
 <div class="cell small-12 medium-6 large-6">
 <div class="responsive-embed">
    <iframe  src="{{ $vu->lien }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
  
  </div>
 </div>


 <div class="cell small-12 medium-offset-1 medium-5 large-offset-1 large-5 ">
 	<span style="display: flex;">
 <h1>{{ $vu->titre }}</h1> 
 </span>
 <br>
<p> {{ $vu->description }} </p>
<br><br>

@if(count($notes)>0)
  @if($m == 1)
  <div style="display:flex">
  <form action="{{ url('etoile/'.$vu->id)}}" method="post" id="etoileform1">
  <input type="hidden" name="_method" value="PUT">
  {{ csrf_field() }}
  <i class="fas fa-star" alt="1" onclick="event.preventDefault();document.getElementById('etoileform1').submit();"><input class="switch-input" type="namber" name="etoile1" value="1"></i>
  </form>

  <form style="margin-left:6px" action="{{ url('etoile/'.$vu->id)}}" method="post" id="etoileform2">
  <input type="hidden" name="_method" value="PUT">
  {{ csrf_field() }}
  <i class="far fa-star"  onclick="event.preventDefault();document.getElementById('etoileform2').submit();"><input class="switch-input" type="namber" name="etoile1" value="2"></i>
  </form>

  <form style="margin-left:6px" action="{{ url('etoile/'.$vu->id)}}" method="post" id="etoileform3">
  <input type="hidden" name="_method" value="PUT">
  {{ csrf_field() }}
  <i class="far fa-star"  onclick="event.preventDefault();document.getElementById('etoileform3').submit();"><input class="switch-input" type="namber" name="etoile1" value="3"></i>
  </form>

  <form style="margin-left:6px" action="{{ url('etoile/'.$vu->id)}}" method="post" id="etoileform4">
  <input type="hidden" name="_method" value="PUT">
  {{ csrf_field() }}
  <i class="far fa-star"  onclick="event.preventDefault();document.getElementById('etoileform4').submit();"><input class="switch-input" type="namber" name="etoile1" value="4"></i>
  </form>

  <form style="margin-left:6px" action="{{ url('etoile/'.$vu->id)}}" method="post" id="etoileform5">
  <input type="hidden" name="_method" value="PUT">
  {{ csrf_field() }}
  <i class="far fa-star"  onclick="event.preventDefault();document.getElementById('etoileform5').submit();"><input class="switch-input" type="namber" name="etoile1" value="5"></i>
  </form>
  </div>

  @elseif($m == 2)
  <div style="display:flex">
  <form action="{{ url('etoile/'.$vu->id)}}" method="post" id="etoileform1">
  <input type="hidden" name="_method" value="PUT">
  {{ csrf_field() }}
  <i class="fas fa-star"  onclick="event.preventDefault();document.getElementById('etoileform1').submit();"><input class="switch-input" type="namber" name="etoile1" value="1"></i>
  </form>

  <form style="margin-left:6px" action="{{ url('etoile/'.$vu->id)}}" method="post" id="etoileform2">
  <input type="hidden" name="_method" value="PUT">
  {{ csrf_field() }}
  <i class="fas fa-star"  onclick="event.preventDefault();document.getElementById('etoileform2').submit();"><input class="switch-input" type="namber" name="etoile1" value="2"></i>
  </form>

  <form style="margin-left:6px" action="{{ url('etoile/'.$vu->id)}}" method="post" id="etoileform3">
  <input type="hidden" name="_method" value="PUT">
  {{ csrf_field() }}
  <i class="far fa-star"  onclick="event.preventDefault();document.getElementById('etoileform3').submit();"><input class="switch-input" type="namber" name="etoile1" value="3"></i>
  </form>

  <form style="margin-left:6px" action="{{ url('etoile/'.$vu->id)}}" method="post" id="etoileform4">
  <input type="hidden" name="_method" value="PUT">
  {{ csrf_field() }}
  <i class="far fa-star"  onclick="event.preventDefault();document.getElementById('etoileform4').submit();"><input class="switch-input" type="namber" name="etoile1" value="4"></i>
  </form>

  <form style="margin-left:6px" action="{{ url('etoile/'.$vu->id)}}" method="post" id="etoileform5">
  <input type="hidden" name="_method" value="PUT">
  {{ csrf_field() }}
  <i class="far fa-star"  onclick="event.preventDefault();document.getElementById('etoileform5').submit();"><input class="switch-input" type="namber" name="etoile1" value="5"></i>
  </form>
  </div>

  @elseif($m == 3)
  <div style="display:flex">
  <form action="{{ url('etoile/'.$vu->id)}}" method="post" id="etoileform1">
  <input type="hidden" name="_method" value="PUT">
  {{ csrf_field() }}
  <i class="fas fa-star"  onclick="event.preventDefault();document.getElementById('etoileform1').submit();"><input class="switch-input" type="namber" name="etoile1" value="1"></i>
  </form>

  <form style="margin-left:6px" action="{{ url('etoile/'.$vu->id)}}" method="post" id="etoileform2">
  <input type="hidden" name="_method" value="PUT">
  {{ csrf_field() }}
  <i class="fas fa-star"  onclick="event.preventDefault();document.getElementById('etoileform2').submit();"><input class="switch-input" type="namber" name="etoile1" value="2"></i>
  </form>

  <form style="margin-left:6px" action="{{ url('etoile/'.$vu->id)}}" method="post" id="etoileform3">
  <input type="hidden" name="_method" value="PUT">
  {{ csrf_field() }}
  <i class="fas fa-star"  onclick="event.preventDefault();document.getElementById('etoileform3').submit();"><input class="switch-input" type="namber" name="etoile1" value="3"></i>
  </form>

  <form style="margin-left:6px" action="{{ url('etoile/'.$vu->id)}}" method="post" id="etoileform4">
  <input type="hidden" name="_method" value="PUT">
  {{ csrf_field() }}
  <i class="far fa-star"  onclick="event.preventDefault();document.getElementById('etoileform4').submit();"><input class="switch-input" type="namber" name="etoile1" value="4"></i>
  </form>

  <form style="margin-left:6px" action="{{ url('etoile/'.$vu->id)}}" method="post" id="etoileform5">
  <input type="hidden" name="_method" value="PUT">
  {{ csrf_field() }}
  <i class="far fa-star"  onclick="event.preventDefault();document.getElementById('etoileform5').submit();"><input class="switch-input" type="namber" name="etoile1" value="5"></i>
  </form>
  </div>

  @elseif($m == 4)
  <div style="display:flex">
  <form action="{{ url('etoile/'.$vu->id)}}" method="post" id="etoileform1">
  <input type="hidden" name="_method" value="PUT">
  {{ csrf_field() }}
  <i class="fas fa-star"  onclick="event.preventDefault();document.getElementById('etoileform1').submit();"><input class="switch-input" type="namber" name="etoile1" value="1"></i>
  </form>

  <form style="margin-left:6px" action="{{ url('etoile/'.$vu->id)}}" method="post" id="etoileform2">
  <input type="hidden" name="_method" value="PUT">
  {{ csrf_field() }}
  <i class="fas fa-star"  onclick="event.preventDefault();document.getElementById('etoileform2').submit();"><input class="switch-input" type="namber" name="etoile1" value="2"></i>
  </form>

  <form style="margin-left:6px" action="{{ url('etoile/'.$vu->id)}}" method="post" id="etoileform3">
  <input type="hidden" name="_method" value="PUT">
  {{ csrf_field() }}
  <i class="fas fa-star"  onclick="event.preventDefault();document.getElementById('etoileform3').submit();"><input class="switch-input" type="namber" name="etoile1" value="3"></i>
  </form>

  <form style="margin-left:6px" action="{{ url('etoile/'.$vu->id)}}" method="post" id="etoileform4">
  <input type="hidden" name="_method" value="PUT">
  {{ csrf_field() }}
  <i class="fas fa-star"  onclick="event.preventDefault();document.getElementById('etoileform4').submit();"><input class="switch-input" type="namber" name="etoile1" value="4"></i>
  </form>

  <form style="margin-left:6px" action="{{ url('etoile/'.$vu->id)}}" method="post" id="etoileform5">
  <input type="hidden" name="_method" value="PUT">
  {{ csrf_field() }}
  <i class="far fa-star"  onclick="event.preventDefault();document.getElementById('etoileform5').submit();"><input class="switch-input" type="namber" name="etoile1" value="5"></i>
  </form>
  </div>

  @else
  <div style="display:flex">
  <form action="{{ url('etoile/'.$vu->id)}}" method="post" id="etoileform1">
  <input type="hidden" name="_method" value="PUT">
  {{ csrf_field() }}
  <i class="fas fa-star"  onclick="event.preventDefault();document.getElementById('etoileform1').submit();"><input class="switch-input" type="namber" name="etoile1" value="1"></i>
  </form>

  <form style="margin-left:6px" action="{{ url('etoile/'.$vu->id)}}" method="post" id="etoileform2">
  <input type="hidden" name="_method" value="PUT">
  {{ csrf_field() }}
  <i class="fas fa-star"  onclick="event.preventDefault();document.getElementById('etoileform2').submit();"><input class="switch-input" type="namber" name="etoile1" value="2"></i>
  </form>

  <form style="margin-left:6px" action="{{ url('etoile/'.$vu->id)}}" method="post" id="etoileform3">
  <input type="hidden" name="_method" value="PUT">
  {{ csrf_field() }}
  <i class="fas fa-star"  onclick="event.preventDefault();document.getElementById('etoileform3').submit();"><input class="switch-input" type="namber" name="etoile1" value="3"></i>
  </form>

  <form style="margin-left:6px" action="{{ url('etoile/'.$vu->id)}}" method="post" id="etoileform4">
  <input type="hidden" name="_method" value="PUT">
  {{ csrf_field() }}
  <i class="fas fa-star"  onclick="event.preventDefault();document.getElementById('etoileform4').submit();"><input class="switch-input" type="namber" name="etoile1" value="4"></i>
  </form>

  <form style="margin-left:6px" action="{{ url('etoile/'.$vu->id)}}" method="post" id="etoileform5">
  <input type="hidden" name="_method" value="PUT">
  {{ csrf_field() }}
  <i class="fas fa-star"  onclick="event.preventDefault();document.getElementById('etoileform5').submit();"><input class="switch-input" type="namber" name="etoile1" value="5"></i>
  </form>
  </div>
  @endif
  
@else
<div style="display:flex">
<form action="{{ url('etoile/'.$vu->id)}}" method="post" id="etoileform1">
<input type="hidden" name="_method" value="PUT">
{{ csrf_field() }}
<i class="far fa-star" alt="1" onclick="event.preventDefault();document.getElementById('etoileform1').submit();"><input class="switch-input" type="namber" name="etoile1" value="1"></i>
</form>

<form style="margin-left:6px" action="{{ url('etoile/'.$vu->id)}}" method="post" id="etoileform2">
<input type="hidden" name="_method" value="PUT">
{{ csrf_field() }}
<i class="far fa-star"  onclick="event.preventDefault();document.getElementById('etoileform2').submit();"><input class="switch-input" type="namber" name="etoile1" value="2"></i>
</form>

<form style="margin-left:6px" action="{{ url('etoile/'.$vu->id)}}" method="post" id="etoileform3">
<input type="hidden" name="_method" value="PUT">
{{ csrf_field() }}
<i class="far fa-star"  onclick="event.preventDefault();document.getElementById('etoileform3').submit();"><input class="switch-input" type="namber" name="etoile1" value="3"></i>
</form>

<form style="margin-left:6px" action="{{ url('etoile/'.$vu->id)}}" method="post" id="etoileform4">
<input type="hidden" name="_method" value="PUT">
{{ csrf_field() }}
<i class="far fa-star"  onclick="event.preventDefault();document.getElementById('etoileform4').submit();"><input class="switch-input" type="namber" name="etoile1" value="4"></i>
</form>

<form style="margin-left:6px" action="{{ url('etoile/'.$vu->id)}}" method="post" id="etoileform5">
<input type="hidden" name="_method" value="PUT">
{{ csrf_field() }}
<i class="far fa-star"  onclick="event.preventDefault();document.getElementById('etoileform5').submit();"><input class="switch-input" type="namber" name="etoile1" value="5"></i>
</form>
</div>
@endif
</div>


            <div class="small-12 medium-6 large-12 cell">
            <hr>
            <br>

            	<h4>Les vidéos même catégories :</h4>
              <div class="owl-carousel1 owl-theme">
              <?php $v=0; ?>
              @foreach($videoc as $video)
              @if($video->id != $vu->id)
              <div class="item-video">
              <div class="responsive-embed">
                   <iframe  src="{{ $video->lien }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                   
                   </div>
                <div class="card-divider">
                    <h5>{{ $video->titre }}</h5>
                 </div>
                  <div class="card-section radius bordere d shadow card">
                      
                  <p>{{ $video->description }}</p>   
                  <a href="{{ url('detail/'.$video->id) }}" class="button rounded bordered secondary">Voir Details</a>
              
                </div>
              </div>
               <?php $v=1; ?>
              @endif
              
              @endforeach
              
              
</div>
            @if($v == 0)
              <div data-closable class="alert-box callout info">
                <i class="fa fa-eye"></i> Aucune vidéo actuellement dans cette catégorie.
              </div>
              @endif

</div>
</section>

      @endsection



        
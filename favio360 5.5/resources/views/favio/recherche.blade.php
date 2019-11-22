@extends('layouts/Master')
   @section('content')




<section class="main">
<div class="wrap row">

<div class="grid-x">
 <div class="cell medium-6 large-12">
<!-- ou couper had code kamle dyale had blade recherche ou changih bi code li 3adak -->
<p> Les résultats de la recherche : <b> {{ $q }} </p>
    @if(isset($video))
        
    <h2>Resultat de recherche :</h2>
    <table class="stack">
        <thead>
            <tr>
                <th>Video</th>
                
                <th>Description</th>
                <th>Titre</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach($video as $vids)
            <tr>
                <td>
                <div class="responsive-embed">
                   <iframe  src="{{ $vids->lien }}" alt="Favio360" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                   
                   </div>
                </td>
                <td>{{$vids->titre}}</td>
                <td>{{$vids->description}}</td>
                <td>
                <div align="center">
                   <a href="{{ url('detail/'.$vids->id) }}"  class="button rounded bordered secondary">Voir Details</a>
                   </div>
                </td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif

     @if(isset($erro))
    

    <div data-closable class="alert-box callout alert">
           <i class="fa fa-ban"></i> {{$erro}}
         <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
             <span aria-hidden="true">&CircleTimes;</span>
           </button>
      </div>
       
    @endif
</div>




</div>


</div>
</section>

        @endsection

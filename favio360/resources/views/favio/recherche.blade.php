@extends('Layouts/Master')
   @section('content')




<section class="main">
<div class="wrap row">

<div class="grid-x">
 <div class="cell medium-6 large-12">


    @if(isset($details))
        <p> Les résultats de la recherche : <b> {{ $query }} </p>
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
            @foreach($details as $user)
            <tr>
                <td>
                <div class="responsive-embed">
                   <iframe  src="{{ $user->lien }}" alt="Favio360" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                   
                   </div>
                </td>
                <td>{{$user->titre}}</td>
                <td>{{$user->description}}</td>
                <td>
                <div align="center">
                   <a href="{{ url('detail/'.$user->id) }}"  class="button rounded bordered secondary">Voir Details</a>
                   </div>
                </td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>




</div>


</div>
</section>

        @endsection

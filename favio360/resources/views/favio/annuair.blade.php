 


 @extends('Layouts/Master')
   @section('content')
 <!-- contenu -->

        <section class="main">
          <div class="wrap row">
            <h1>Annuair</h1>
            <div class="main wrap ">
                <h5>Catégorie:</h5>
              <div class="grid-x large-12">
              
        <div class="cell medium-2">
          <ul class="vertical tabs" data-tabs id="example-tabs">
            <li class="tabs-title is-active"><a href="#panel0v" aria-selected="true" style="color:black;font-weight:bold">Tous les categories</a></li>
            <li class="tabs-title "><a href="#panel1v" style="color:black;font-weight:bold">Sports</a></li>
            <li class="tabs-title"><a href="#panel2v" style="color:black;font-weight:bold">Music</a></li>
            <li class="tabs-title"><a href="#panel3v" style="color:black;font-weight:bold">Nature</a></li>
            <li class="tabs-title"><a href="#panel4v" style="color:black;font-weight:bold">Culture</a></li>
            <li class="tabs-title"><a href="#panel5v" style="color:black;font-weight:bold">Technologie</a></li>
            <li class="tabs-title"><a href="#panel6v" style="color:black;font-weight:bold">Documentaire</a></li>
          </ul>
        </div>
        <div class="cell medium-10">
          <div class="tabs-content" data-tabs-content="example-tabs">
          <div class="tabs-panel is-active" id="panel0v">
             <div class="grid-x grid-margin-x">
                   
                   @foreach($videos as $video )
                   <div class="cell small-12 medium-4 large-3">
                   <div class="responsive-embed">
                     <iframe width="200" height="200" alt="Favio360" src="{{ $video->lien }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                   </div>
                   <div class="card-divider">
                       <h5>{{ $video->titre }}</h5>
                  </div>
                  <div class="card-section radius bordered shadow card">
                      
                  <p>{{ $video->description }}</p>
              
                  <a href="{{ url('detail/'.$video->id) }}" class="button rounded bordered secondary">Voir Details</a>
              
                   </div>
                   </div>
                   @endforeach
                   
              
       
              </div>
            </div>
            <div class="tabs-panel" id="panel1v">



             <div class="grid-x grid-margin-x">
             
             @if(count($sports)>0)
             @foreach($sports as $sport)
                   <div class="cell small-12 medium-4 large-3">
                   <div class="responsive-embed">
                   <iframe  src="{{ $sport->lien }}" frameborder="0" alt="Favio360" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                   
                   </div>
                     
                   <div class="card-divider">
                       <h5>{{ $sport->titre }}</h5>
                  </div>
                  <div class="card-section radius bordered shadow card">
                      
                  <p>{{ $sport->description }}</p>
              
                  <a href="{{ url('detail/'.$sport->id) }}" class="button rounded bordered secondary">Voir Details</a>
              
                   </div>
                   </div>
            @endforeach
            @else
            <div data-closable class="alert-box callout info">
                <i class="fa fa-eye"></i> Aucune vidéo actuellement dans cette catégorie.
            </div>
            @endif
            </div>

            </div>
            <div class="tabs-panel" id="panel2v">
              <div class="grid-x grid-margin-x">


              
             @if(count($musics)>0)
             @foreach($musics as $music)
                   <div class="cell small-12 medium-4 large-3">
                   <div class="responsive-embed">
                   <iframe  src="{{ $music->lien }}" alt="Favio360" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                   
                   </div>
                     
                   <div class="card-divider">
                       <h5>{{ $music->titre }}</h5>
                  </div>
                  <div class="card-section radius bordered shadow card">
                      
                  <p>{{ $music->description }}</p>
              
                  <a href="{{ url('detail/'.$music->id) }}" class="button rounded bordered secondary">Voir Details</a>
              
                   </div>
                   </div>
            @endforeach
            @else
            <div data-closable class="alert-box callout info">
                <i class="fa fa-eye"></i> Aucune vidéo actuellement dans cette catégorie.
            </div>
            @endif
           
   
           
                
           
           </div>
            </div>
            <div class="tabs-panel" id="panel3v">
              <div class="grid-x grid-margin-x">
              
              
             @if(count($natures)>0)
             @foreach($natures as $nature)
                   <div class="cell small-12 medium-4 large-3">
                   <div class="responsive-embed">
                   <iframe  src="{{ $nature->lien }}" alt="Favio 360" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                   
                   </div>
                     
                   <div class="card-divider">
                       <h5>{{ $nature->titre }}</h5>
                  </div>
                  <div class="card-section radius bordered shadow card">
                      
                  <p>{{ $nature->description }}</p>
              
                  <a href="{{ url('detail/'.$nature->id) }}" class="button rounded bordered secondary">Voir Details</a>
              
                   </div>
                   </div>
            @endforeach
            @else
            <div data-closable class="alert-box callout info">
                <i class="fa fa-eye"></i> Aucune vidéo actuellement dans cette catégorie.
            </div>
            @endif
           </div>
            </div>
            <div class="tabs-panel" id="panel4v">
              <div class="grid-x grid-margin-x">
                  
             @if(count($cultures)>0)
             @foreach($cultures as $culture)
                   <div class="cell small-12 medium-4 large-3">
                   <div class="responsive-embed">
                   <iframe  src="{{ $culture->lien }}" alt="Favio360" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                   
                   </div>
                     
                   <div class="card-divider">
                       <h5>{{ $culture->titre }}</h5>
                  </div>
                  <div class="card-section radius bordered shadow card">
                      
                  <p>{{ $culture->description }}</p>
              
                  <a href="{{ url('detail/'.$culture->id) }}" class="button rounded bordered secondary">Voir Details</a>
              
                   </div>
                   </div>
            @endforeach
            @else
            <div data-closable class="alert-box callout info">
                <i class="fa fa-eye"></i> Aucune vidéo actuellement dans cette catégorie.
            </div>
            @endif
              </div>
            </div>
            <div class="tabs-panel" id="panel5v">
              <div class="grid-x grid-margin-x">
              @if(count($technos)>0)
             @foreach($technos as $techno)
                   <div class="cell small-12 medium-4 large-3">
                   <div class="responsive-embed">
                   <iframe  src="{{ $techno->lien }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                   
                   </div>
                     
                   <div class="card-divider">
                       <h5>{{ $techno->titre }}</h5>
                  </div>
                  <div class="card-section radius bordered shadow card">
                      
                  <p>{{ $techno->description }}</p>
              
                  <a href="{{ url('detail/'.$techno->id) }}" class="button rounded bordered secondary">Voir Details</a>
              
                   </div>
                   </div>
            @endforeach
            @else
            <div data-closable class="alert-box callout info">
                <i class="fa fa-eye"></i> Aucune vidéo actuellement dans cette catégorie.
            </div>
            @endif
           </div>
            </div>
            <div class="tabs-panel" id="panel6v">
              <div class="grid-x grid-margin-x">
              @if(count($docs)>0)
             @foreach($docs as $doc)
                   <div class="cell small-12 medium-4 large-3">
                   <div class="responsive-embed">
                   <iframe  src="{{ $doc->lien }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                   
                   </div>
                     
                   <div class="card-divider">
                       <h5>{{ $doc->titre }}</h5>
                  </div>
                  <div class="card-section radius bordered shadow card">
                      
                  <p>{{ $doc->description }}</p>
              
                  <a href="{{ url('detail/'.$doc->id) }}" class="button rounded bordered secondary">Voir Details</a>
              
                   </div>
                   </div>
            @endforeach
            @else
            <div data-closable class="alert-box callout info">
                <i class="fa fa-eye"></i> Aucune vidéo actuellement dans cette catégorie.
            </div>
            @endif
           </div>
            </div>
          </div>
        </div>
      </div>
           </div>
          </div>
        </section>

        @endsection

   @extends('Layouts/Master')
   @section('content')
        <!-- contenu -->

        <section class="main">
          <div class="wrap row">
            <h1>VIDÉOS RECOMMANDÉES</h1>
            <div class="grid-y  grid-padding-y">
              <div class="cell shrink header medium-cell-block-container">
                <div class="grid-x grid-margin-x ">
                  <div class="cell small-12 medium-8 large-8">
                    <div class="owl-carousel owl-theme">
                    @foreach($tops as $top)
                      <div class="item-video" data-merge="2">
                      <div class="responsive-embed">
                   <iframe  src="{{ $top->lien }}" frameborder="0" allow="autoplay; encrypted-media" alt="Favio360" allowfullscreen></iframe>
                   
                   </div>
                   <div align="center">
                   <a href="{{ url('detail/'.$top->id) }}" class="button rounded bordered secondary">Voir Details</a>
                   </div>
                      </div>
                    @endforeach
                    </div>

                  </div>
                  <div class="cell small-12 medium-4 large-4 ">
                    <img src="image/imageLogo.png" alt="Favio360" width="40%" class="float-center" alt="Favio360">
                    <p class="text-justify" style="font-size:.82em"><strong>Favio360</strong> est le leader des sites web référençant les
                      vidéos 360° au Maroc, il vous propose de découvrir  ou
                      de re-découvrir un annuaire qui permet de sélectionner
                      les meilleures vidéos Youtube 360° sur le Maroc, et
                      vous donne aussi la possibilité de partager vos propres
                      vidéos 360° et la visionner avec un appareil de réalité
                      virtuelle. Depuis un simple Google CardBoard en
                      passant par un Samsung Gear VR ou voir même un HTC
                      VIVE Iphone ou un Oculus Rift, il est possible de
                      visionner des milliers de vidéos présentes sur notre site
                      web, De plus, un son binaural  à 360° permet d’être
                      réellement immergé dans les vidéos. En bref, une
                      multitude de choix pour découvrir le maroc en utilisant
                      la technologie VR.</p>
                  </div>
                </div>
              </div>
            </div>
            <hr>
            <h4>VIDÉOS RÉCENTES</h4>
            <div class="small-2 medium-2 column">
              <div class="owl-carousel1 owl-theme">
              @foreach($news as $new)
              <div class="item-video">
              <div class="responsive-embed">
                   <iframe  src="{{ $new->lien }}" alt="Favio360" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                   
                   </div>
                <div class="card-divider">
                    <h5>{{ $new->titre }}</h5>
                 </div>
                  <div class="card-section radius bordered shadow card">
                      
                  <p>{{ $new->description }}</p>
              
                  <a href="{{ url('detail/'.$new->id) }}" class="button rounded bordered secondary">Voir Details</a>
              
                   </div>
              </div>
              @endforeach
              </div>
            </div>
            <br>
          </div>
        </section>

@endsection
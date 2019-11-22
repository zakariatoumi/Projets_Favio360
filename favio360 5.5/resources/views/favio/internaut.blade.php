@extends('layouts/Master')
   @section('content')
        <!-- contenu -->

        <section class="main">
          <div class="wrap row">
            <h1>Soumettre une video</h1>
            <form data-abide novalidate action="{{ url('videos')}}" method="post">
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
                       <td>

                   <input type="text" placeholder="Entrer votre pseudo" name="pseudo" value="{{ old('pseudo')}}" aria-describedby="exampleHelpText" required pattern="text">
                  <span class="form-error">  
                   Entrer valeur valide !!!
                  </span>
                        </td>
                      </tr>
              
                    </div>
                    <div class="medium-6 cell">
                    <tr>
                       <td> 
                        <label>Titre de la video: </label>
                       </td>
                       <td> <input type="text" name="titre" placeholder="Entrer le titre de la video" value="{{ old('titre')}}" aria-describedby="exampleHelpText" required pattern="text">
                       <span class="form-error">  
                   Entrer valeur valide !!!
                  </span>
                       </td>
                      </tr>
              
                    </div>
                     <div class="medium-6 cell">
                    <tr>
                       <td> 
                        <label>Lien de la video : </label>
                       </td>
                       <td> <input type="text" name="lien" placeholder="Entrer votre Lien de la video" value="{{ old('lien')}}" aria-describedby="exampleHelpText" required pattern="text">
                       <span class="form-error">  
                       Entrer Votre Lien !!!
                      </span>
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
                        <select id="select" name="categorie" required value="{{ old('categorie')}}" aria-describedby="exampleHelpText" required pattern="lien" >
                        @foreach($tags as $tag)
                         <option value="{{$tag->id}}">{{$tag->tag}}</option>
                        @endforeach

                       
                    </td>
                        

                    </div>
                         </td>
                        </tr>
                        
                      </div>
                     <div class="medium-6 cell">
                    <tr>
                       <td> 
                        <label>Discriprion :</label>
                        
                        <td>
                          <textarea placeholder="Discriprion" name="discription" value="{{ old('discription')}}"></textarea>
                         
                        
                        </td>
                      </tr>     
                        
                      
                      
                    </div>
                    </div> 
               </table> 
              </div>
              <div align="center">
                <input class="button btn" type="submit" value="Soumettre" >
              </div>
              </form>
          </div>
        </section>
@endsection
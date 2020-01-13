@extends('front.layout.master')

    @section('additional-css')
    {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css') !!}
    {!! Html::style('css/front/register.css') !!}

    @endsection

    @section('content')
    <section class="header_page">
      <div class="image_header">
        <img src="{!! url('/image/front/images/fond14.jpg') !!}" class="img_fond" alt="" />
        <div class="description_header">
          <div class="text_header">
              <h2>S'INSCRIRE GRATUITEMENT</h2>
          </div>
        </div>
      </div>
    </section>
    <section class="inscription">
      <div class="content_register">
        <div class="bloc_description">
          <!-- <div class="background_image_bande">
            <div class="title_inscritpion">
              <label for="" class="title">Professionnels du bâtiment,</label>
              <label for="" class="title">accélérez votre activité commerciale !</label>
            </div>

            <div class="citation_inscription">
              <ul>
                <li>Recevez des opportunités de chantiers ciblées selon votre activité et zone d'intervention</li>
                <li>Gardez le contrôle de votre budget prospection et payez au réel de votre consommation</li>
                <li>Remplissez simplement et rapidement votre carnet de commandes</li>
              </ul>
            </div>
            <img src="{!! url('/image/front/images/fond3.jpg') !!}" class="img_fond_formulaire" alt="" />
          </div>
          <div class="item_publication">

          </div> -->

          <section class="content_avantages">
            <label for="" class="title_content">Quels avantages ?</label>
            <div class="item_avantages">
              <div class="description_avantages">
                <div class="title_avantages">
                  <label for="" class="number_avantages">1</label>
                  <label for="" class="text_title_avt">Des chantiers qualifiés</label>
                </div>
                <ul class="list_avantages">
                  <li>Trouvez de vrais chantiers, <strong>validés par notre Service Clients</strong> </li>
                  <li><strong>Un commercial dédié </strong> vous aidera à concrétiser vos projets  </li>
                </ul>
              </div>
              <div class="images_avantages">
                <img src="{!! url('/image/front/images/fond1.jpg') !!}" class="" alt="" />
              </div>
            </div>
            <div class="item_avantages row_reverse_item">
              <div class="description_avantages">
                <div class="title_avantages">
                  <label for="" class="number_avantages">2</label>
                  <label for="" class="text_title_avt">Une présence sur Internet</label>
                </div>
                <ul class="list_avantages">
                  <li>Améliorez <strong>votre visibilité sur Internet </strong> et votre réputation grâce aux avis clients</li>
                  <li>Accédez à une nouvelle clientèle et <strong> développez votre réseau </strong></li>
                </ul>
              </div>
              <div class="images_avantages">
                <img src="{!! url('/image/front/how_work/how4.jpg') !!}" class="" alt="" />
              </div>
            </div>
            <div class="item_avantages">
              <div class="description_avantages">
                <div class="title_avantages">
                  <label for="" class="number_avantages">3</label>
                  <label for="" class="text_title_avt">Un suivi des projets</label>
                </div>
                <ul class="list_avantages">
                  <li>Suivez <strong> l’avancement des projets</strong> dans votre espace personnel</li>
                  <!-- <li>Utilisez <strong> l’application mobile</strong> pour gérer vos projets quand vous êtes sur un chantier  </li> -->
                  <li>Recevez <strong>les demandes de devis</strong> en illimité dans votre département</li>
                </ul>
              </div>
              <div class="images_avantages">
                <img src="{!! url('/image/front/how_work/how5.jpg') !!}" class="" alt="" />
              </div>
            </div>
          </section>

        </div>
        <!-- route('register') -->
        {!! Form::open(array('url' =>  route('register'),'files' => true,'class'=>'form-horizontal d-flex justify-content-center','id'=>'form-artisan','method'=>'POST')) !!}
        {!! csrf_field() !!}
        <div class="bloc_form">
          <div class="item_formulaire">
            <label for="" class="title_inscription">Inscription Gratuite pour les Professionnels</label>
            <div class="sparated_form_title">
              <div class="separate"></div>
            </div>
            <div class="formular_item">
              <label for="" class="label_form">Activité principal *</label>
              <!-- <div class="dropdown-wrapper">
                <button type="button" class="select-button input_form" data-input="category">Sélectionnez une catégorie ...<span class="icon-select ti-angle-down"></span></button>
                <ul class="dropdown-option">
                  @if(isset($categories))
                    @foreach($categories as $category)
                      <li data-value="{{$category->id}}">{{$category->name}}</li>
                    @endforeach
                  @endif
                </ul>
              </div> -->

              <select required="required" tabindex="1" class="form-control input_form" name="category" id="category">
                  <option value="selectionnez"> Sélectionnez une catégorie ...</option>
                  @if(isset($categories))
                    @foreach($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                  @endif
              </select>
            </div>
            <div class="formular_item formular_item_responsive">
              <label for="" class="label_form">Code Postal *</label>
              <input type="text" class="input_form" id="postal_code" name="code_postal" value="" placeholder="Code Postal" required>
            </div>
            <!--  <div class="formular_item">
              <label for="" class="label_form">Ville *</label>
              <div class="dropdown-wrapper">
                <button type="button" class="select-button input_form" data-input="ville">Sélectionnez une ville ...<span class="icon-select ti-angle-down"></span></button>
                <ul class="dropdown-option" id="list_ville"></ul> 
              </div>
              <input type="text" name="ville" id="ville" class="hidden-input">
            </div>  -->
            
            <div class="formular_item">
              <label for="" class="label_form">Ville *</label>
              <select required="required" tabindex="1" class="form-control input_form" name="ville" id="ville" disabled>
                <option value="selectionnez"> Sélectionnez une ville ...</option>
              </select>
            </div>
            <div class="formular_item">
              <label for="" class="label_form">Raison Sociale</label>
              <input type="text" class="input_form" name="enterprise" value="" placeholder="Nom de votre société" required>
            </div>
            <div class="formular_item">
              <label for="" class="label_form">Nom et prenom</label>
              <input type="text" class="input_form" name="name" value="" placeholder="Nom" required>
            </div>
            <div class="formular_item">
             <!--  <label for="" class="label_form">Prénom</label> -->
              <input type="text" class="input_form" name="first_name" value="" placeholder="Prénom" required>
            </div>
            <div class="formular_item">
              <label for="" class="label_form">Téléphone</label>
              <input type="text" class="input_form" name="phone" value="" placeholder="Téléphone" required>
            </div>
            <div class="formular_item">
              <label for="" class="label_form">Email*</label>
              <input type="text" class="input_form" name="email" value="" placeholder="Email" required>
            </div>
            <div class="formular_item">
              <label for="" class="label_form">Mot de passe*</label>
              <input type="password" class="input_form" name="password" value="" placeholder="Mot de passe" required>
            </div>
            <div class="formular_item">
              <label for="" class="label_form">Confirmer votre mot de passe*</label>
              <input type="password" class="input_form" name="confirmPassword" value="" placeholder="Confirmer votre mot de passe">
            </div>

            <div class="btn_form">
              <button type="submit" name="button" class="formular_button btn_artisan" value="ENREGISTRER">ENREGISTRER</button>
            </div>
          </div>
        </div>
      </form>
      </div>
    </section>
    @endsection

    @section('additional-script')
      {!! Html::script('js/front/artisan.js') !!}
    @endsection

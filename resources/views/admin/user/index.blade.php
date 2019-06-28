@extends('adminlte::page')

@section('title', 'Profil')

@section('content_header')
    <h1>Modification Profile</h1>
@stop

@section('content')
    <section class="content">
        <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="{{ url('image/Admin/Profil/avatar.png') }}" alt="User profile picture">

              <h3 class="profile-username text-center">{{ $user->name }}</h3>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#settings" data-toggle="tab" aria-expanded="true">Modification</a></li>
            </ul>
            <div class="tab-content">            

              <div class="tab-pane active" id="settings">
                <form id="form-profil" class="form-horizontal" method="post" action="{{ route('post-profil') }}">
                  {!! csrf_field() !!}
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nom</label>

                    <div class="col-sm-10">
                      <input type="text" name="inputName" class="form-control" id="inputName" placeholder="Nom" value="{{ isset($user->name) ? $user->name : '' }}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" name="inputEmail" class="form-control" id="inputEmail" placeholder="Email" value="{{ isset($user->email) ? $user->email : '' }}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPhone" class="col-sm-2 control-label">Téléphone</label>

                    <div class="col-sm-10">
                      <input type="text" name="inputPhone" class="form-control" id="inputPhone" placeholder="Téléphone" value="{{ isset($user->phone) ? $user->phone : '' }}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword" class="col-sm-2 control-label">Mot de passe</label>

                    <div class="col-sm-10">
                      <input type="password" name="inputPassword" class="form-control" id="inputPassword" placeholder="Mot de passe">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputConfirmPassword" class="col-sm-2 control-label">Confirmez le mot de passe</label>

                    <div class="col-sm-10">
                      <input type="password" name="inputConfirmPassword" class="form-control" id="inputConfirmPassword" placeholder="Confirmez le mot de passe">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPhoto" class="col-sm-2 control-label">Photo</label>

                    <div class="col-sm-10">
                      <input type="file" name="inputPhoto" class="form-control" id="inputPhoto">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success">Enregistrer</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
    </section>
@stop

@section('js')
  <script type="text/javascript">
    $().ready(function() {
      $("#form-profil").validate({
      rules : {
        inputName : {
          required : true
        },
        inputEmail : {
          required : true,
          mail : true
        },  
        inputPhone : {
          required : true
        }
      },
      messages : {
        inputName : "Veuillez fournir un nom",
        inputEmail : "L'email est incorrect",
        inputPhone : "Veuillez fournir un numéro téléphone"
      },
      submitHandler: function(form) {
        form.submit();
      }
     });
    });
  </script>  
@stop
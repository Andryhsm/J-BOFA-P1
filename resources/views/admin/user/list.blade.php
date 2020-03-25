@extends('adminlte::page')

@section('title', 'Artisan')

@section('content_header')
    <h1>Liste des artisans</h1>
@stop

@section('css')
    
@stop

@section('content')

    <section class="user-list">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Nom et Pr&eacute;nom</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Entreprise</th>
                                <th>Catégory</th>
                                <th>Ville</th>
                                <th>Status</th>
                                <th class="no-sort">Action</th>
                            </tr>
                            </thead>
                            <!-- -->
                        </table>
                    </div>
                </div>
            </div>
        </div>

                <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header modal_header_relative">
                <h5 class="modal-title title_modal_header" id="exampleModalLabel">S&eacute;lectionnez la colonne &agrave; afficher</h5>
                <button type="button" class="close close_absolute" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body modal_flex_product">
                <div class="checkbox checkbox_width">
                    <label><input class="col1" type="checkbox" checked="" value="0">Nom et prenom</label>
                </div>
                <div class="checkbox checkbox_width">  
                    <label><input class="col2" type="checkbox" checked="" value="1">Email</label>
                </div>
                <div class="checkbox checkbox_width">
                    <label><input class="col3" type="checkbox" value="2">Phone</label>
                </div>
                <div class="checkbox checkbox_width">
                    <label><input class="col4" type="checkbox" value="3">Status</label>
                </div>
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Validate</button> -->
              </div>
            </div>
          </div>
        </div>
        
    </section>
@stop

@section('js')
    {!! Html::script('js/admin/datatables/jquery.dataTables.min.js') !!}
    {!! Html::script('js/admin/datatables/dataTables.bootstrap.min.js') !!}
    {!! Html::script('js/admin/list.js') !!}
  <script type="text/javascript">
    $('.user-list').on('click', '.delete-btn', function(event) {
        event.preventDefault();
        var $form = jQuery(this).closest('form').data('id');
        $('#confirm').modal({backdrop: 'static', keyboard: false})
                .one('click', '#delete', function () {
                    //console.log('form ',base_url + "admin/user");
                    $.ajax({
                        type: "POST",
                        data:{'user_id':$form},
                        url: base_url+'admin/artisan/delete',
                        success: function(success){
                            toastr.success('Suppréssion réussi !');
                            window.location.href = base_url + "admin/user";
                        }
                    });
                //$form.trigger('submit'); // submit the form
        });
    });

      $('.user-list').on('click','.form-check-input',function(){
        var user_id = $(this).closest('.switch').data('id');
        
        $.ajax({
            type: "POST",
            data: {'user_id':user_id},
            url: base_url + 'admin/user_status',
            success: function (success) {
                if (success.status == 1){
                    toastr.success('Utilisateur activé');
                }
                else{
                    toastr.warning('Utilisateur desactivé');
                }
            },
            error: function (error) {
                console.log(error);
            }
        });
      });
      
  </script>  
@stop
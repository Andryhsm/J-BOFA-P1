@extends('adminlte::page')

@section('title', 'Catégories')

@section('content_header')
    <!-- <h1>Liste des cat&eacute;gories</h1>
    <a class="btn btn-primary header-button" href="{{ route('category.create') }}"> <i class="fa fa-plus"></i> Ajout</a> -->
@stop

@section('css')
    {!! Html::style('compiled_css/account/main.css') !!}
@stop

@section('content')

    <section class="email-list">
        <div class="card">
            <div class="card-image" style="background-color:#cdcdcd">
                <center><strong><h1 style="color:#f90;font-size:40px"> Modes d'envoye d'e-mail </h1></strong></center>
            </div>
            <div class="row">
                <div class="col-xs-1"></div>
                <div class="col-xs-10" style="margin-top:50px;margin-bottom:50px">
                    <div class="col-xs-10" style="line-height:27px">
                        <div class="d-flex align-items-center">
                          <div class="switch-container position-relative d-flex align-items-center" style="margin-right: 10px;">
                              <label class="switch">
                                <input type="checkbox" class="form-check-input" checked>
                                <span class="slider round"></span>
                              </label>
                          </div>
                          <h3 style="margin-top: 0; margin-bottom: 0;"> Envoyer les devis normalement  </h3> 
                        </div>

                        <br class="span1">
                        <div class="d-flex align-items-center">
                          <div class="switch-container position-relative d-flex align-items-center" style="margin-right: 10px;">
                              <label class="switch">
                                <input type="checkbox" class="form-check-input sending" >
                                <span class="slider round"></span>
                              </label>
                          </div>
                          <h3 style="margin-top: 0; margin-bottom: 0;"> Envoyer les demandes à une seule personne </h3>                          
                        </div>
                        <br class="span2">
                        <div class="d-flex align-items-center">
                          <div class="switch-container position-relative d-flex flex-column align-items-center justify-content-center" style="margin-right: 10px;">
                              <label class="switch">
                                <input type="checkbox" class="form-check-input" >
                                <span class="slider round"></span>
                              </label>
                              <button class="btn btn-default btn_inactive" type="button" style="margin-top:8px">
                                  <i class="fa fa-eye"></i>
                              </button>
                              <button class="btn btn-success btn_active hidden" type="button" style="margin-left:20px">
                                  <i class="fa fa-eye"></i></button>
                          </div>
                          <h3  style="margin-top: 0; margin-bottom: 0;"> Envoyer les devis à plusieurs personnes </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>    
        <div class="row email_list hidden">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body ">
                        <table id="category" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Nom </th>
                                <th>Prenom</th>
                                <th>Email</th>
                                <th>Cr&eacute;e le</th>
                                <!-- <th>Status</th> -->
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
                    <label><input class="col1" type="checkbox" checked="" value="0">Nom cat&eacute;gories</label>
                </div>
                <div class="checkbox checkbox_width">
                    <label><input class="col4" type="checkbox" value="3">Status</label>
                </div>
                <div class="checkbox checkbox_width">  
                    <label><input class="col2" type="checkbox" checked="" value="1">Cr&eacute;e par</label>
                </div>
                <div class="checkbox checkbox_width">
                    <label><input class="col3" type="checkbox" value="2">Cr&eacute;e le</label>
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
    <!-- {!! Html::script('js/admin/category.js') !!} -->
  <script type="text/javascript">
    $('.email-list').on('click','.btn_inactive',function(){
        $(this).addClass('hidden');
        $(this).closest('.email-list').find('.email_list').removeClass('hidden');
        $(this).siblings('.btn_active').removeClass('hidden');
    });
    $('.email-list').on('click','.btn_active',function(){
        $(this).addClass('hidden');
        $(this).closest('.email-list').find('.email_list').addClass('hidden');
        $(this).siblings('.btn_inactive').removeClass('hidden');
    });
    $('.email-list').on('click','.sending',function(){
        if($(this).prop('checked')==true){
            $('#send_email').modal({backdrop: 'static', keyboard: false})
                .one('click', '.main-button', function () {
                    console.log('sending')
                
        });
        }else
            console.log('not ok')
    });
    // $(document).on('click', '.delete-btn', function(event) {
    //     event.preventDefault();
    //     var $form = jQuery(this).closest('form');
    //     $('#confirm').modal({backdrop: 'static', keyboard: false})
    //             .one('click', '#delete', function () {
    //             $form.trigger('submit'); // submit the form
    //     });
    // });

      // $('.category-list').on('click','.popular',function(){
      //   var category_id = $(this).closest('.switch').data('id');
        
      //   $.ajax({
      //       type: "POST",
      //       data: {'category_id':category_id},
      //       url: base_url + 'admin/category_popular',
      //       success: function (success) {
      //           if (success.ispopular == 1){
      //               toastr.success('Popularité activé');
      //           }
      //           else{
      //               toastr.warning('Popularité desactivé');
      //           }
      //       },
      //       error: function (error) {
      //           console.log(error);
      //       }
      //   });
      // });
      
  </script>  
@stop
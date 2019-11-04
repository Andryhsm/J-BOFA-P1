@extends('adminlte::page')

@section('title', 'Catégories')

@section('content_header')
    <h1>Liste des cat&eacute;gories</h1>
    <a class="btn btn-primary header-button" href="{{ route('category.create') }}"> <i class="fa fa-plus"></i> Ajout</a>
@stop

@section('css')
    
@stop

@section('content')

    <section class="category-list">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <table id="category" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Nom cat&eacute;gories</th>
                                <th>Populaire</th>
                                <th>Cr&eacute;e par</th>
                                <th>Cr&eacute;e le</th>
                                <th>Status</th>
                                <th class="no-sort">Action</th>
                            </tr>
                            </thead>
                            <!-- -->
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <form class="form-control" action="{{route('send_email')}}" method="POST">
                    @csrf
                    <input type="submit"  value="Send">
                </form>
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
    $(document).on('click', '.delete-btn', function(event) {
        event.preventDefault();
        var $form = jQuery(this).closest('form');
        $('#confirm').modal({backdrop: 'static', keyboard: false})
                .one('click', '#delete', function () {
                $form.trigger('submit'); // submit the form
        });
    });

      $('.category-list').on('click','.popular',function(){
        var category_id = $(this).closest('.switch').data('id');
        
        $.ajax({
            type: "POST",
            data: {'category_id':category_id},
            url: base_url + 'admin/category_popular',
            success: function (success) {
                if (success.ispopular == 1){
                    toastr.success('Popularité activé');
                }
                else{
                    toastr.warning('Popularité desactivé');
                }
            },
            error: function (error) {
                console.log(error);
            }
        });
      });
      
  </script>  
@stop
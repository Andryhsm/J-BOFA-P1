@extends('adminlte::page')

@section('title', 'Profil')

@section('content_header')
    <h1>Liste des temoingnages</h1>
    <a class="btn btn-primary header-button" href="{{ route('temoignage.create') }}"> <i class="fa fa-plus"></i> Ajout</a>
@stop

@section('css')
    
@stop

@section('content')

    <section class="temoin-list">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Category</th>
                                <th>Titre</th>
                                <th>Description</th>
                                <th>Nom</th>
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
        
    </section>
@stop

@section('js')
    {!! Html::script('js/admin/datatables/jquery.dataTables.min.js') !!}
    {!! Html::script('js/admin/datatables/dataTables.bootstrap.min.js') !!}
    {!! Html::script('js/admin/temoin.js') !!}
  <script type="text/javascript">
    $(document).on('click', '.delete-btn', function(event) {
        event.preventDefault();
        var $form = jQuery(this).closest('form');
        $('#confirm').modal({backdrop: 'static', keyboard: false})
                .one('click', '#delete', function () {
                $form.trigger('submit'); // submit the form
        });
    });

      $('.temoin-list').on('click','.form-check-input',function(){
        var temoin_id = $(this).closest('.switch').data('id');
        console.log(temoin_id)
        $.ajax({
            type: "POST",
            data: {'temoin_id':temoin_id},
            url: base_url + 'admin/temoin_status',
            success: function (success) {
                if (success.status == 1){
                    toastr.success('Faq activé');
                }
                else{
                    toastr.warning('Faq desactivé');
                }
            },
            error: function (error) {
                console.log(error);
            }
        });
      });
      
  </script>  
@stop
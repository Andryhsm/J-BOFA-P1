@extends('adminlte::page')

@section('title', 'Faq')

@section('content_header')
    <h1>Liste des Faqs</h1>
    <a class="btn btn-primary header-button" href="{{ route('faq.create') }}"> <i class="fa fa-plus"></i> Ajout</a>
@stop

@section('css')
    
@stop

@section('content')

    <section class="faq-list">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Type</th>
                                <th>Question</th>
                                <th>Reponse</th>
                                <th>Créer le</th>
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
    {!! Html::script('js/admin/faq.js') !!}
  <script type="text/javascript">
    $(document).on('click', '.delete-btn', function(event) {
        event.preventDefault();
        var $form = jQuery(this).closest('form');
        $('#confirm').modal({backdrop: 'static', keyboard: false})
                .one('click', '#delete', function () {
                $form.trigger('submit'); // submit the form
        });
    });

      $('.faq-list').on('click','.form-check-input',function(){
        var faq_id = $(this).closest('.switch').data('id');
        console.log(faq_id)
        $.ajax({
            type: "POST",
            data: {'faq_id':faq_id},
            url: base_url + 'admin/faq_status',
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
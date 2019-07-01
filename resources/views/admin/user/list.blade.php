@extends('adminlte::page')

@section('title', 'Profil')

@section('content_header')
    <h1>Liste des utilisateurs</h1>
    <a class="btn btn-primary header-button" href="{{ route('user.create') }}"> <i class="fa fa-plus"></i> Ajout</a>
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
                                <th>Status</th>
                                <th class="no-sort">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($users) > 0 )
                                @foreach($users as $admin)
                                    <tr>
                                        <td><img class=" img-circle img-profil-list" src="{{ $admin ? (($admin->photo =='' || !isset($admin->photo)) ? url('image/Admin/Profil/avatar.png') : url('image/Admin/Profil/'.$admin->photo.'')) : url('image/Admin/Profil/avatar.png')}}" alt="User profile picture">
                                            &nbsp; &nbsp; {!! $admin->name !!}
                                        </td>
                                        <td>{!! $admin->email !!}</td>
                                        <td>{!! $admin->phone !!}</td>
                                        <td>
                                            <div class="switch-container position-relative form-group">
                                                <label class="switch" data-id="{{$admin->id}}">
                                                  <input type="checkbox" class="form-check-input" {{($admin->status == 1) ? 'checked' : ''}}>
                                                  <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ Url('admin/user/'.$admin->id.'/edit/') }}"
                                                   class="btn btn-default btn-sm btn-warning" title="Edit"><i
                                                            class="fa fa-fw fa-edit" style="color:white;"></i></a>
                                                {!! Form::open(array('url' => route('user.destroy', [$admin->id]), 'class' => 'pull-left')) !!} &nbsp; &nbsp;
                                                {!! Form::hidden('_method', 'DELETE') !!}
                                                {!! Form::button('<i class="fa fa-fw fa-trash"></i>', ['type' => 'submit', 'class' => 'btn delete-btn btn-danger btn-sm','title'=>'Delete'] ) !!}
                                                {{ Form::close() }}
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5" align="center">{{config('admin.NO_RECORDS_MESSAGE')}}</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('js')
  <script type="text/javascript">
    var table;

    /*if (jQuery('#example2').length > 0) {
            table = jQuery('#example2').on('preXhr.dt', function ( e, settings, data ) {
                    
                } )
                .dataTable({
                "processing": true,
                "serverSide": true,
                "ajax": {   
                    "url": base_url+"admin/user",
                    "type": "POST"
                },
                "responsive"   : true,
                "bPaginate"    : true,
                "bLengthChange": true,
                "bFilter"      : true,
                "bInfo"        : true,
                "bAutoWidth"   : false,
                "order"        : [[6, "desc"]],
                "lengthMenu"   : [20, 40, 60, 80, 100],
                "pageLength"   : 20,
                columns        : [
                    {data: 'name', name:'name',searchable: true, sortable: true},
                    {data: 'email', name:'email',searchable: true, sortable: true},
                    {data: 'phone', name:'phone',searchable: true, sortable: true, visible: false},
                    {data: 'status', name:'status',searchable: true, sortable: true},
                    {data: 'action', name:'action',searchable: false, sortable: false}
                ],
                fnDrawCallback : function () {
                    var $paginate = this.siblings('.dataTables_paginate');

                    if (this.api().data().length <= this.fnSettings()._iDisplayLength) {
                        $paginate.hide();
                    }
                    else {
                        $paginate.show();
                    }
                },
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
                 } 
                
            });



    }*/
    $(document).on('click', '.delete-btn', function(event) {
        event.preventDefault();
        var $form = jQuery(this).closest('form');
        $('#confirm').modal({backdrop: 'static', keyboard: false})
                .one('click', '#delete', function () {
                $form.trigger('submit'); // submit the form
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
          // if($(this).find('.form-check-input').prop('checked')){
          //   var user_id = $(this).data('id');
          // }else{
          //   console.log('false');
          // }
      });
      
  </script>  
@stop
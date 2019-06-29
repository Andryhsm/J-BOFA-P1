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
                                            <div class="btn-group">
                                                <a href="{{ Url('admin/user/'.$admin->id.'/edit/') }}"
                                                   class="btn btn-default btn-sm btn-success" title="Edit"><i
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
    $(document).on('click', '.delete-btn', function(event) {
        event.preventDefault();
        var $form = jQuery(this).closest('form');
        $('#confirm').modal({backdrop: 'static', keyboard: false})
                .one('click', '#delete', function () {
                $form.trigger('submit'); // submit the form
        });
    });
  </script>  
@stop
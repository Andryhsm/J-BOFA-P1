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
                        <table id="artisan" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Nom et Pr&eacute;nom</th>
                                <th>Email</th>
                                <th>Phone</th>
                            </tr>
                            </thead>
                            <!-- -->
                        </table>
                    </div>
                </div>
            </div>
        </div>

                <!-- Modal -->
        
    </section>
@stop

@section('js')
    {!! Html::script('js/admin/datatables/jquery.dataTables.min.js') !!}
    {!! Html::script('js/admin/datatables/dataTables.bootstrap.min.js') !!}
    {!! Html::script('js/admin/artisan.js') !!}  
@stop
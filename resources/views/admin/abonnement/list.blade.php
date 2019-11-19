@extends('adminlte::page')

@section('title', 'Catégories')

@section('content_header')
    <h1>Liste des cat&eacute;gories</h1>
@stop

@section('css')
    
@stop

@section('content')

    <section class="category-list">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <table id="subscribe" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Nom et prenom</th>
                                <th>Montant</th>
                                <th>Date de payement</th>
                                <th>Status</th>
                                <!-- <th class="no-sort">Action</th> -->
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
    {!! Html::script('js/admin/subscribe.js') !!}
@stop
@extends('adminlte::page')

@section('title', 'Question')

@section('content_header')
    @if($temoin)
      <h1>Modification temoin</h1>
    @else
      <h1>Ajout temoin</h1>
    @endif  
@stop

@section('content')
    <section class="temoin">
      <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    {!! Form::open(array('url' => ($temoin) ? route('temoignage.update', ['temoin' => $temoin->id]) :route('temoignage.store'),'files' => true,'class'=>'','id'=>'form-temoin','method'=>($temoin) ? 'PATCH' : 'POST')) !!}
                    <div class="box-body">
                        <div class="form-group">
                          <label for="gorupe" class="col-sm-3 control-label">Catégory</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="category">
                              @if(isset($categories))
                                @foreach($categories as $category)
                                  <option value="{{$category->id}}" {{ ($temoin && $temoin->category_id == $category->id) ? 'selected' : ''}} >{{ $category->name }}</option>
                                @endforeach
                              @endif
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <input type="hidden" name="admin_id" value="{{Auth::guard('admin')->user()->id}}">
                          <label for="inputName" class="col-sm-3 control-label">Titre</label>
                          <input type="hidden" name="temoin_id" value="{{ $temoin ? (isset($temoin->id) ? $temoin->id : '') : '' }}">
                          <div class="col-sm-9">
                            <input type="text" name="titre" class="form-control"  placeholder="Titre" value="{{ $temoin ? (isset($temoin->titre) ? $temoin->titre : '') : '' }}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputName" class="col-sm-3 control-label">Description</label>
                          <div class="col-sm-9">
                            <textarea name="description" class="form-control"  placeholder="Description" >{{ $temoin ? (isset($temoin->description) ? $temoin->description : '') : '' }}</textarea>
                            <!-- <input type="text" name="description" class="form-control"  placeholder="Description" value="{{ $temoin ? (isset($temoin->description) ? $temoin->description : '') : '' }}"> -->
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputName" class="col-sm-3 control-label">Nom</label>
                          <div class="col-sm-9">
                            <input type="text" name="name" class="form-control"  placeholder="Nom" value="{{ $temoin ? (isset($temoin->name) ? $temoin->name : '') : '' }}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="status" class="col-sm-3 control-label">Status </label>

                          <div class="col-sm-9">
                            <input type="hidden" name="inputStatus" value="{{($temoin) ? $temoin->status : '0'}}">
                            <input type="checkbox" name="status" class="form-check-input" id="inputStatus" {{ $temoin ? (($temoin->status == 1) ? 'checked' : '') : '' }} >
                          </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary pull-right" id="add-admin">Valider</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        
      </div>
    </section>
@stop

@section('js')
  {!! Html::script('js/admin/temoin.js') !!}
@stop
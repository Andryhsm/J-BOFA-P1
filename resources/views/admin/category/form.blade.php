@extends('adminlte::page')

@section('title', 'Profil')

@section('content_header')
    @if($category)
      <h1>Modification cat&eacute;gorie</h1>
    @else
      <h1>Ajout cat&eacute;gorie</h1>
    @endif  
@stop

@section('content')
    <section class="category-update">
      <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    {!! Form::open(array('url' => ($category) ? route('category.update', ['category' => $category->id]) :route('category.store'),'files' => true,'class'=>'','id'=>'form-category','method'=>($category) ? 'PATCH' : 'POST')) !!}
                    <div class="box-body">
                        <div class="form-group">
                          <input type="hidden" name="user_id" value="{{Auth::guard('admin')->user()->id}}">
                          <label for="inputName" class="col-sm-3 control-label">Nom cat&eacute;gorie</label>
                          <input type="hidden" name="id" value="{{ $category ? (isset($category->id) ? $category->id : '') : '' }}">
                          <div class="col-sm-9">
                            <input type="text" name="name" class="form-control"  placeholder="Nom" value="{{ $category ? (isset($category->name) ? $category->name : '') : '' }}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="status" class="col-sm-3 control-label">Status </label>

                          <div class="col-sm-9">
                            <input type="hidden" name="inputStatus" value="{{($category) ? $category->status : '0'}}">
                            <input type="checkbox" name="status" class="form-check-input" id="inputStatus" {{ $category ? (($category->status == 1) ? 'checked' : '') : '' }} >
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
  {!! Html::script('js/admin/category.js') !!}
@stop
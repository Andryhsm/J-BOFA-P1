@extends('adminlte::page')

@section('title', 'Faq')

@section('content_header')
    @if($question)
      <h1>Modification question</h1>
    @else
      <h1>Ajout question</h1>
    @endif  
@stop

@section('content')
    <section class="faq">
      <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    {!! Form::open(array('url' => ($question) ? route('faq.update', ['question' => $question->id]) :route('faq.store'),'files' => true,'class'=>'','id'=>'form-faq','method'=>($question) ? 'PATCH' : 'POST')) !!}
                    <div class="box-body">
                        <div class="form-group">
                          <label for="gorupe" class="col-sm-3 control-label">Groupe</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="groupe">
                              <option value="Question générales" {{ ($question && $question->name == "Question générales") ? 'selected' : '' }}>Question générales</option>
                              <option value="Demande de devis" {{ ($question && $question->name == "Demande de devis") ? 'selected' : '' }}>Demande de devis</option>
                              <option value="Après la demande de devis" {{ ($question && $question->name == "Après la demande de devis") ? 'selected' : '' }}>Après la demande de devis</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <input type="hidden" name="admin_id" value="{{Auth::guard('admin')->user()->id}}">
                          <label for="inputName" class="col-sm-3 control-label">Contenue</label>
                          <input type="hidden" name="id" value="{{ $question ? (isset($question->id) ? $question->id : '') : '' }}">
                          <div class="col-sm-9">
                            <input type="text" name="content" class="form-control"  placeholder="Question" value="{{ $question ? (isset($question->question) ? $question->question : '') : '' }}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputName" class="col-sm-3 control-label">Reponse</label>
                          <div class="col-sm-9">
                            <input type="text" name="response" class="form-control"  placeholder="Reponse" value="{{ $question ? (isset($question->respone) ? $question->respone : '') : '' }}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="status" class="col-sm-3 control-label">Status </label>

                          <div class="col-sm-9">
                            <input type="hidden" name="inputStatus" value="{{($question) ? $question->status : '0'}}">
                            <input type="checkbox" name="status" class="form-check-input" id="inputStatus" {{ $question ? (($question->status == 1) ? 'checked' : '') : '' }} >
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
  {!! Html::script('js/admin/faq.js') !!}
@stop
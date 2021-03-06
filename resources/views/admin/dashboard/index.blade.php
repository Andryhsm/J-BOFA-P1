@extends('adminlte::page')

@section('css')
    {!! Html::style('compiled_css/account/main.css') !!}
    {!! Html::style('vendor/adminlte/css/custom-modal.css') !!}
@stop

@section('title', 'Tableau de bord')

@section('content_header')
    <h1>Tableau de bord</h1>
@stop

@section('content')
      <section class="">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{($users) ? count($users) : 0 }}</h3>

              <p>Artisans</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="{{route('user.index')}}" class="small-box-footer">Plus de détails <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{($admins) ? count($admins) : 0 }}</h3>

              <p>Utilisateurs</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="{{route('Admin')}}" class="small-box-footer">Plus de détails <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Taux de rebond</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">Plus de détails <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        
      </div>
      <!-- /.row -->
      </section>
      <section class="row">
        <!--  -->
        <div class="col-lg-8">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Dernières artisan inscrit</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Nom et prenom</th>
                    <th>Inscrit le</th>
                    <!-- <th>Ville</th> -->
                    <th>Entreprise</th>
                  </tr>
                  </thead>
                  <tbody>
                  @if(isset($derniers))
                  @foreach($derniers as $dernier)
                  <tr>
                    <td>{{$dernier->first_name}} {{$dernier->name}}</td>
                    <td>{{$dernier->created_at}}</td>
                   <!--  <td>{{$dernier->city_id}}</td> -->
                    <td>{{$dernier->enterprise}}</td>
                  </tr>
                  @endforeach
                  @endif
                  
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
             <!--  <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Passer une nouvelle commande</a> -->
              <a href="{{route('user.index')}}" class="btn btn-sm btn-default btn-flat pull-right">Voir tous les artisans</a>
            </div>
            <!-- /.box-footer -->
          </div>
        </div>  
        <!--  -->

        <div class="col-lg-4">
          <div class="box box-solid bg-teal-gradient">
                <div class="box-header ui-sortable-handle" style="cursor: move;">
                  <i class="fa fa-th"></i>

                  <h3 class="box-title">Graphique de vente</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <div class="box-body border-radius-none">
                  <div class="chart" id="line-chart" style="height: 250px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="250" version="1.1" width="800" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.75px; top: -0.59375px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.2.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="40" y="214" text-anchor="end" font-family="Open Sans" font-size="10px" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: &quot;Open Sans&quot;; font-size: 10px; font-weight: normal;" font-weight="normal"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="3.5">0</tspan></text><path fill="none" stroke="#efefef" d="M52.5,214H775" stroke-width="0.4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="40" y="166.75" text-anchor="end" font-family="Open Sans" font-size="10px" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: &quot;Open Sans&quot;; font-size: 10px; font-weight: normal;" font-weight="normal"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="3.5">5,000</tspan></text><path fill="none" stroke="#efefef" d="M52.5,166.75H775" stroke-width="0.4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="40" y="119.5" text-anchor="end" font-family="Open Sans" font-size="10px" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: &quot;Open Sans&quot;; font-size: 10px; font-weight: normal;" font-weight="normal"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="3.5">10,000</tspan></text><path fill="none" stroke="#efefef" d="M52.5,119.5H775" stroke-width="0.4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="40" y="72.25" text-anchor="end" font-family="Open Sans" font-size="10px" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: &quot;Open Sans&quot;; font-size: 10px; font-weight: normal;" font-weight="normal"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="3.5">15,000</tspan></text><path fill="none" stroke="#efefef" d="M52.5,72.25H775" stroke-width="0.4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="40" y="25" text-anchor="end" font-family="Open Sans" font-size="10px" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: &quot;Open Sans&quot;; font-size: 10px; font-weight: normal;" font-weight="normal"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="3.5">20,000</tspan></text><path fill="none" stroke="#efefef" d="M52.5,25H775" stroke-width="0.4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="642.4325350615159" y="226.5" text-anchor="middle" font-family="Open Sans" font-size="10px" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: &quot;Open Sans&quot;; font-size: 10px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,5.5)"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="3.5">2013</tspan></text><text x="321.1100703761835" y="226.5" text-anchor="middle" font-family="Open Sans" font-size="10px" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: &quot;Open Sans&quot;; font-size: 10px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,5.5)"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="3.5">2012</tspan></text><path fill="none" stroke="#efefef" d="M52.5,188.8063C72.68325021517899,188.5417,113.04975064553693,190.40038657417895,133.23300086071592,187.74790000000002C153.4253961824718,185.09421157417896,193.8101868259835,168.75624016393445,214.00258214773936,167.5816C233.97549491165006,166.41972766393442,273.9213204394714,180.64386249999998,293.8942332033821,178.40185C313.8671459672928,176.15983749999998,353.8129714951142,151.8811350409836,373.7858842590249,149.6455C393.97827958078074,147.3852975409836,434.36307022429247,158.0678125,454.5554655460483,160.4185C474.7478608678042,162.7691875,515.132651511316,179.6189893442623,535.3250468330718,168.451C555.2979595969825,157.4044018442623,595.2437851248038,78.52883321823204,615.2166978887145,71.56015C634.97012809478,64.66804571823204,674.4769885069111,105.24937403846155,694.2304187129765,113.00785C714.4228140347324,120.93873653846155,754.8076046782442,128.9901625,775,134.3176" stroke-width="2" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="52.5" cy="188.8063" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="133.23300086071592" cy="187.74790000000002" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="214.00258214773936" cy="167.5816" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="293.8942332033821" cy="178.40185" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="373.7858842590249" cy="149.6455" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="454.5554655460483" cy="160.4185" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="535.3250468330718" cy="168.451" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="615.2166978887145" cy="71.56015" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="694.2304187129765" cy="113.00785" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="775" cy="134.3176" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="left: 85.9748px; top: 100px; display: none;"><div class="morris-hover-row-label">2011 Q3</div><div class="morris-hover-point" style="color: #efefef">
                  Item 1:
                  4,912
                  </div></div>
                </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer no-border">
                  <div class="row">
                    <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                      <div style="display:inline;width:60px;height:60px;"><canvas width="60" height="60"></canvas><input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly" style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px; background: none; font: bold 12px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; -webkit-appearance: none;"></div>

                      <div class="knob-label">Mail commandes</div>
                    </div>
                    <!-- ./col -->
                    <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                      <div style="display:inline;width:60px;height:60px;"><canvas width="60" height="60"></canvas><input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly" style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px; background: none; font: bold 12px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; -webkit-appearance: none;"></div>

                      <div class="knob-label">En ligne</div>
                    </div>
                    <!-- ./col -->
                    <div class="col-xs-4 text-center">
                      <div style="display:inline;width:60px;height:60px;"><canvas width="60" height="60"></canvas><input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly" style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px; background: none; font: bold 12px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; -webkit-appearance: none;"></div>

                      <div class="knob-label">En magasin</div>
                    </div>
                    <!-- ./col -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.box-footer -->
              </div>
          </div>
          <button class="col-lg-4" id="site_number">
            <label>Voir le numero du site</label>
            
          </button>
          <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" id="contact">
              <div class="modal-dialog modal-sm">
                  <div class="modal-content full-width">
                      <div class="modal-body title_modal_delete full-width d-flex justify-content-center flex-wrap">
                         <label>Changement du numero téléphone</label>
                           {!! Form::open(array('url' =>route('contact_site', ['contact' =>$contact->id]),'files' => true,'class'=>'form-horizontal full-width','id'=>'form-contact','method'=>'POST')) !!}
                              
                            <div class="form-group">
                              <label for="inputPhone" class="col-sm-3 control-label">Téléphone</label>

                              <div class="col-sm-9">
                                <input type="hidden" name="id" value="1">
                                <input type="text" name="phone" class="form-control" id="inputPhone" placeholder="Téléphone" value="{{$contact->phone}}">
                              </div>
                            </div>
                            
                            <div class="form-group full-width">
                              <div class="col-sm-12 d-flex justify-content-center">
                                <button type="submit" class="btn pull-right  btn-success">Enregistrer</button>
                              </div>
                            </div>
                          {!! Form::close() !!}
                      
                      <!-- <div class="modal-footer foot_modal_delete">
                          <button type="button" data-dismiss="modal" class="btn btn-primary" id="delete">Supprimer</button>
                          <button type="button" data-dismiss="modal" class="btn">Annuler</button>
                      </div> -->
                  </div>
                  <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
          </div>
</section>
@stop
@section('js')
    <script type="text/javascript">
      $('.row').on('click','#site_number',function(event){
        event.preventDefault();
        $('#contact').modal({backdrop: 'static', keyboard: false})
                .one('click', '#save', function () {
                
        });
      })
    </script>
@stop
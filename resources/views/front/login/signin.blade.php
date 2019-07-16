@extends('front.layout.master')

    @section('additional-css')
    {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css') !!}
    {!! Html::style('image/front/fonts/font-awesome-4.7.0/css/font-awesome.min.css') !!}
    {!! Html::style('image/front/fonts/iconic/css/material-design-iconic-font.min.css') !!}
    {!! Html::style('css/front/vendor/animate/animate.css') !!}
    {!! Html::style('css/front/vendor/css-hamburgers/hamburgers.min.css') !!}
    {!! Html::style('css/front/vendor/animsition/css/animsition.min.css') !!}
    {!! Html::style('css/front/vendor/select2/select2.min.css') !!}
    {!! Html::style('css/front/vendor/daterangepicker/daterangepicker.css') !!}
    {!! Html::style('css/front/login.css') !!}
    {!! Html::style('css/front/main_login.css') !!}
    @endsection

    @section('content')
    <div class="limiter">
  		<div class="container-login100" style="background-image: url('/image/front/images/fond5.jpg');">
  			<div class="wrap-login100">
  				<form class="login100-form validate-form">
  					<span class="login100-form-logo">
  						<i class="zmdi zmdi-landscape"></i>
  					</span>

  					<span class="login100-form-title p-b-34 p-t-27">
  						Se connecter
  					</span>

  					<div class="wrap-input100 validate-input" data-validate = "Enter username">
  						<input class="input100" type="text" name="username" placeholder="Username">
  						<span class="focus-input100" data-placeholder="&#xf207;"></span>
  					</div>

  					<div class="wrap-input100 validate-input" data-validate="Enter password">
  						<input class="input100" type="password" name="pass" placeholder="Password">
  						<span class="focus-input100" data-placeholder="&#xf191;"></span>
  					</div>

  					<div class="contact100-form-checkbox">
  						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
  						<label class="label-checkbox100" for="ckb1">
  							Se souvenir de moi
  						</label>
  					</div>

  					<div class="container-login100-form-btn">
  						<button class="login100-form-btn">
  							Se connecter
  						</button>
  					</div>

  					<div class="text-center p-t-90">
  						<a class="txt1" href="#">
  							Mot de Passe oubliez?
  						</a>
  					</div>
  				</form>
  			</div>
  		</div>
  	</div>


  	<div id="dropDownSelect1"></div>
    @endsection

    @section('additional-script')
      {!! Html::script('css/front/vendor/animsition/js/animsition.min.js') !!}
      {!! Html::script('css/front/vendor/bootstrap/js/popper.js') !!}
      {!! Html::script('css/front/vendor/bootstrap/js/bootstrap.min.js') !!}
      {!! Html::script('css/front/vendor/select2/select2.min.js') !!}
      {!! Html::script('css/front/vendor/daterangepicker/moment.min.js') !!}
      {!! Html::script('css/front/vendor/daterangepicker/daterangepicker.js') !!}
      {!! Html::script('css/front/vendor/countdowntime/countdowntime.js') !!}
    @endsection

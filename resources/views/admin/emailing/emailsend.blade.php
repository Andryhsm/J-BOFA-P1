<!DOCTYPE html>
<html>
<head>
	<title>Send email</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<style type="text/css">
		.artisan-body {
			margin: 0;
		}

		.artisan-email-page {
			display: -webkit-box;display: -ms-flexbox;display: flex;
			-webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;
			-webkit-box-align: center;-ms-flex-align: center;align-items: center;
			-ms-flex-wrap: wrap;flex-wrap: wrap;
			max-width: 500px;
			margin: 40px   auto;
			background: #ffffff;
			padding: 0;
		}

		.artisan-email-page * {
			font-family: Roboto;
			box-sizing: border-box;
		}

		.artisan-page-header {
			width: 100%;
			margin: 0 5px;
		}

		.artisan-page-content {
			width: 100%;
			margin: 0 15px;
		}

		.artisan-email-page p {
			margin: 0;
		}

		.artisan-date {
			width: 100%;
			text-align: center;
			color: #868686;
			font-size: 14px;
			margin-bottom: 15px!important;
		}

		.artisan-mail-title {
			width: 100%;
			max-width: 100%;
			padding: 20px;
			background: #23abdf;
			margin-bottom: 30px;
		}

		.artisan-mail-title p {
			width: 100%;
			text-align: center;
			color: #ffffff;
			font-size: 18px;
		}

		.artisan-mail-title p:not(:last-child) {
			margin-bottom: 8px;
		}

		.artisan-introduction-text {

		}

		.artisan-introduction-text p.artisan-hello {
			margin-bottom: 25px;
		}

		.artisan-introduction-text p {
			color: #818181;
			font-size: 15px;
			margin-bottom: 40px;
			line-height: 1.3;
		}

		.artisan-firma {
			width: 100%;
			margin-bottom: 45px;
		}

		.artisan-information {
			border: 2px solid #6e9bae;
			padding: 8px;
		}

		.artisan-information-wrapper {
			display: -webkit-box;display: -ms-flexbox;display: flex;
		}

		.artisan-information-wrapper:not(:last-child) {
			margin-bottom: 8px;
		}

		.artisan-information label {
			color: #407da8;
			font-weight: bold;
			width: 120px;
		    text-align: right;
		    margin-right: 8px;
		}

		.artisan-information span {
			color: #676767;
			font-size: 15px;
			font-weight: 400;
			text-transform: uppercase;
			-webkit-box-flex: 1;-ms-flex: 1;flex: 1;
		}

		.artisan-firma p {
			color: #787878;
			margin-bottom: 15px;
		}

		.artisan-mail-footer p {
			color: #787878;
			font-size: 15px;
			margin-bottom: 15px;
		}

	</style>
</head>
<body class="artisan-body">
	<div class="artisan-email-page">
		<!-- <div class="artisan-page-header">
			<p class="artisan-date">Le {{$content['date']}}</p>

			<div class="artisan-mail-title">
				<p>{{$content['project']}}</p>
				<p>{{$content['postal']}} {{$content['address']}}</p>
			</div>
		</div> -->
		<div class="artisan-page-content">
			<div class="artisan-introduction-text">
				<p class="artisan-hello">Bonjour {{$content['name']}},<p>
				<p>Nous avons le plaisir de vous informer que le client <strong>{{$content['name_devi']}}</strong>&nbsp;a créé un devis concernant le projet {{$content['project']}}</p>
			</div>

			<div class="artisan-firma">
				<p>Description du devis<p>
				<div class="artisan-information">
					<div class="artisan-information-wrapper">
						<label>Devis:</label><span>{{$content['project']}}</span>
					</div>
					<div class="artisan-information-wrapper">
						<label>Adresse&nbsp;:</label><span>{{$content['postal']}} {{$content['address']}}</span>
					</div>
					<div class="artisan-information-wrapper">
						<label>Téléphone&nbsp;:</label><span>{{$content['phone']}}</span>
					</div>
					<div class="artisan-information-wrapper">
						<label>Email :</label>{{$content['email']}}					</div>
				</div>
			</div>

			<div class="artisan-mail-footer">
				<p>Dès à présent vous pouvez contacter la proprietaire pour fixer un rendez-vous. Selon notre charte de qualité, les professionnels s'engagent à prendre contact avec vous sous 72h.</p>

				<p>Nous vous remercions d'avoir fait appel au service HelloArtisan. Pour toute information complémentaire n'hésitez pas à nous contacter.</p>

				<p>Merci de votre confiance, à bientôt.</p>
				<p>L'équipe HelloArtisan</p>
			</div>
		</div>
	</div>
</body>
</html>

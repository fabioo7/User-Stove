<!DOCTYPE html>
<html lang="br">
	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="X-UA-Compatible" content="IE=9" />
		<meta name="Description" content="Sistema de Controle de Agua">
		<meta name="Author" content="FRangel">
		
		<meta name="Aqualizar" content="4" />
    <link rel="shortcut icon" href="https://aqualizar.com.br/adm/public/img/caixa/fav.jpg" type="image/x-icon">
<link type="image/x-icon" rel="shortcut icon" href="https://aqualizar.com.br/adm/public/img/caixa/fav.png"/>
<link rel="icon" sizes="32x32" href="https://aqualizar.com.br/adm/public/img/caixa/fav32x32.png"/>
<link rel="icon" sizes="192x192" href="https://aqualizar.com.br/adm/public/img/caixa/fav192x192.png"/>
<link rel="apple-touch-icon" href="https://aqualizar.com.br/adm/public/img/caixa/fav32x32.png"/>
<link rel="apple-touch-icon" sizes="76x76" href="https://aqualizar.com.br/adm/public/img/caixa/fav76x76.png"/>
<link rel="apple-touch-icon" sizes="120x120" href="https://aqualizar.com.br/adm/public/img/caixa/fav120x120.png"/>
<link rel="apple-touch-icon" sizes="152x152" href="https://aqualizar.com.br/adm/public/img/caixa/fav152x152.png"/>
<link rel="apple-touch-icon" sizes="180x180" href="https://aqualizar.com.br/adm/public/img/caixa/fav180x180.png"/>		
		@include('layouts.templateAdm.head')
	</head>


	<?php  
		$name_user =  'Fabio'; 
		$avatar =  'fh.jpg'; 
		?>	


	<body class="main-body app sidebar-mini">
		<!-- Loader -->
		<div id="global-loader">
			<img src="{{URL::asset('storage/img/loader.svg')}}" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->
		@include('layouts.templateAdm.main-sidebar')		
		<!-- main-content -->
		<div class="main-content app-content">
			@include('layouts.templateAdm.main-header')			
			<!-- container -->
			<div class="container-fluid">
				@yield('page-header')
				@yield('content')
				@include('layouts.templateAdm.sidebar-right')
				@include('layouts.templateAdm.models')
            	@include('layouts.templateAdm.footer')
				@include('layouts.templateAdm.footer-scripts')	
	</body>
</html>
<!DOCTYPE html>
<html lang="br">
	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="X-UA-Compatible" content="IE=9" />
		<meta name="Author" content="FRangel">
		
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
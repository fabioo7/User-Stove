<!-- main-header -->
<div class="main-header sticky side-header nav nav-item d-print-none">
				<div class="container-fluid">
					<div class="main-header-left ">
						<div class="responsive-logo">
							<a href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('public/assets/img/brand/logo.png')}}" class="logo-1" alt="logo"></a>
							<a href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('public/assets/img/brand/logo-white.png')}}" class="dark-logo-1" alt="logo"></a>
							<a href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('public/assets/img/brand/favicon.png')}}" class="logo-2" alt="logo"></a>
							<a href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('public/assets/img/brand/favicon.png')}}" class="dark-logo-2" alt="logo"></a>
						</div>
						<div class="app-sidebar__toggle" data-toggle="sidebar">
							<a class="open-toggle" href="#"><i class="header-icon fe fe-align-left" ></i></a>
							<a class="close-toggle" href="#"><i class="header-icons fe fe-x"></i></a>
						</div>
						<div class="main-header-center ml-3 d-sm-none d-md-none d-lg-block">
					
						
						</div>
					</div>
					<div class="main-header-right">
			
						<div class="nav nav-item  navbar-nav-right ml-auto">
							
		
						
							<div class="nav-item full-screen fullscreen-button">
								<a class="new nav-link full-screen-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg></a>
							</div>
							<div class="dropdown main-profile-menu nav nav-item nav-link">
								<a class="profile-user d-flex" href=""><img alt="" src="{!! url('/storage/img/fotos/users'); !!}/{{ $avatar ?? '' }}"></a>
								<div class="dropdown-menu">
									<div class="main-header-profile bg-primary p-3">
										<div class="d-flex wd-100p">
											<div class="main-img-user"><img alt="" src="{!! url('/storage/img/fotos/users'); !!}/{{ $avatar ?? '' }}" class=""></div>
											<div class="ml-3 my-auto">
												<h6>
											
												{{ $name_user ?? '' }}
												</h6><span>Nivel: Adm </span>
											</div>
										</div>
									</div>
									<a class="dropdown-item" href="https://romospantaleao.com.br/edit_user/ }}"><i class="bx bx-user-circle"></i>Profile</a>
						
									
		   @guest
           
            
		   @else
			 
		   <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
		   <i class="bx bx-log-out"></i>  Logout
                          </a>

		     <form id="logout-form" action="{{ route('logout') }}" method="POST" >
		     {{ csrf_field() }}
		     </form>
			@endguest
						
						
						
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- /main-header -->

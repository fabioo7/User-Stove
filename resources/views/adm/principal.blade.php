@extends('layouts.templateAdm.master')
@section('css')



@endsection
@section('page-header')

@if(session('mensagem'))
<br>
<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>OK!</strong> {{session('mensagem')}}.
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>

@endif
@if(session('erro'))
<br>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Ohh!</strong> {{session('erro')}}.
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>

@endif   

			<br><br>
				<!-- breadcrumb -->
@endsection
@section('content')
				

<div class="row row-sm">
                            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                                <div class="card overflow-hidden sales-card bg-primary-gradient">
                                    <div class="px-3 pt-3  pb-2 pt-0">
                                        <div class="">
                                            <h6 class="mb-3 tx-12 text-white">Total de Clientes</h6>
                                        </div>
                                        <div class="pb-0 mt-0">
                                            <div class="d-flex">
                                                <div class="">
                                                    <h4 class="tx-20 fw-bold mb-1 text-white">123</h4>
                                                    <p class="mb-0 tx-12 text-white op-7">Geral</p>
                                                </div>
                                                <span class="float-end my-auto ms-auto">
                                                    <i class="fas fa-arrow-circle-up text-white"></i>
                                                    <span class="text-white op-7"> +100</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                                <div class="card overflow-hidden sales-card bg-danger-gradient">
                                    <div class="px-3 pt-3  pb-2 pt-0">
                                        <div class="">
                                            <h6 class="mb-3 tx-12 text-white">Dispositivos Contratados</h6>
                                        </div>
                                        <div class="pb-0 mt-0">
                                            <div class="d-flex">
                                                <div class="">
                                                    <h4 class="tx-20 fw-bold mb-1 text-white">220</h4>
                                                    <p class="mb-0 tx-12 text-white op-7">Todos as categorias</p>
                                                </div>
                                                <span class="float-end my-auto ms-auto">
                                                    <i class="fas fa-arrow-circle-down text-white"></i>
                                                    <span class="text-white op-7"> -23.09%</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                                <div class="card overflow-hidden sales-card bg-success-gradient">
                                    <div class="px-3 pt-3  pb-2 pt-0">
                                        <div class="">
                                            <h6 class="mb-3 tx-12 text-white">Faturamento</h6>
                                        </div>
                                        <div class="pb-0 mt-0">
                                            <div class="d-flex">
                                                <div class="">
                                                    <h4 class="tx-20 fw-bold mb-1 text-white">R$ ****,**</h4>
                                                    <p class="mb-0 tx-12 text-white op-7">Ultima atualização</p>
                                                </div>
                                                <span class="float-end my-auto ms-auto">
                                                    <i class="fas fa-arrow-circle-up text-white"></i>
                                                    <span class="text-white op-7"> 52.09%</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                                <div class="card overflow-hidden sales-card bg-warning-gradient">
                                    <div class="px-3 pt-3  pb-2 pt-0">
                                        <div class="">
                                            <h6 class="mb-3 tx-12 text-white">Representantes</h6>
                                        </div>
                                        <div class="pb-0 mt-0">
                                            <div class="d-flex">
                                                <div class="">
                                                    <h4 class="tx-20 fw-bold mb-1 text-white">10</h4>
                                                    <p class="mb-0 tx-12 text-white op-7">Todos</p>
                                                </div>
                                                <span class="float-end my-auto ms-auto">
                                                    <i class="fas fa-arrow-circle-down text-white"></i>
                                                    <span class="text-white op-7"> -</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END ROW -->

                        <!-- ROW -->
                        <div class="row row-sm">
                            <div class="col-md-12 col-lg-12 col-xl-7">
                                <div class="card">
                                   
                                
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-5">
                               
                            </div>
                        </div>
                        <!-- END ROW -->

                        <!-- ROW -->
                        <div class="row row-sm">
                            <div class="col-xl-4 col-md-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header pb-1">
                                        <h3 class="card-title mb-2">Recent Customers</h3>
                                        <p class="tx-12 mb-0 text-muted">A customer is an individual or business that purchases the goods service has evolved to include real-time</p>
                                    </div>
                                    <div class="card-body p-0 customers mt-1">
                                        <div class="list-group list-lg-group list-group-flush">
                                            <div class="list-group-item list-group-item-action">
                                                <div class="media mt-0">
                                                    <img class="avatar-lg rounded-circle my-auto me-3" src="https://laravelui.spruko.com/valex/build/assets/img/users/3.jpg" alt="Image description">
                                                    <div class="media-body">
                                                        <div class="d-flex align-items-center">
                                                            <div class="mt-0">
                                                                <h5 class="mb-1 tx-15">Samantha Melon</h5>
                                                                <p class="mb-0 tx-13 text-muted">User ID: #1234 <span class="text-success ms-2 d-inline-block">Paid</span></p>
                                                            </div>
                                                            <div class="ms-auto wd-45p fs-16 mt-2">
                                                                <div id="spark1" class="wd-100p"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item list-group-item-action br-t-1">
                                                <div class="media mt-0">
                                                    <img class="avatar-lg rounded-circle my-auto me-3" src="https://laravelui.spruko.com/valex/build/assets/img/users/11.jpg" alt="Image description">
                                                    <div class="media-body">
                                                        <div class="d-flex align-items-center">
                                                            <div class="mt-1">
                                                                <h5 class="mb-1 tx-15">Jimmy Changa</h5>
                                                                <p class="mb-0 tx-13 text-muted">User ID: #1234 <span class="text-danger ms-2 d-inline-block">Pending</span></p>
                                                            </div>
                                                            <div class="ms-auto wd-45p fs-16 mt-2">
                                                                <div id="spark2" class="wd-100p"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item list-group-item-action br-t-1">
                                                <div class="media mt-0">
                                                    <img class="avatar-lg rounded-circle my-auto me-3" src="https://laravelui.spruko.com/valex/build/assets/img/users/17.jpg" alt="Image description">
                                                    <div class="media-body">
                                                        <div class="d-flex align-items-center">
                                                            <div class="mt-1">
                                                                <h5 class="mb-1 tx-15">Gabe Lackmen</h5>
                                                                <p class="mb-0 tx-13 text-muted">User ID: #1234 <span class="text-danger ms-2 d-inline-block">Pending</span></p>
                                                            </div>
                                                            <div class="ms-auto wd-45p fs-16 mt-2">
                                                                <div id="spark3" class="wd-100p"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item list-group-item-action br-t-1">
                                                <div class="media mt-0">
                                                    <img class="avatar-lg rounded-circle my-auto me-3" src="https://laravelui.spruko.com/valex/build/assets/img/users/15.jpg" alt="Image description">
                                                    <div class="media-body">
                                                        <div class="d-flex align-items-center">
                                                            <div class="mt-1">
                                                                <h5 class="mb-1 tx-15">Manuel Labor</h5>
                                                                <p class="mb-0 tx-13 text-muted">User ID: #1234 <span class="text-success ms-2 d-inline-block">Paid</span></p>
                                                            </div>
                                                            <div class="ms-auto wd-45p fs-16 mt-2">
                                                                <div id="spark4" class="wd-100p"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item list-group-item-action br-t-1 br-be-7 br-bs-7">
                                                <div class="media mt-0">
                                                    <img class="avatar-lg rounded-circle my-auto me-3" src="https://laravelui.spruko.com/valex/build/assets/img/users/6.jpg" alt="Image description">
                                                    <div class="media-body">
                                                        <div class="d-flex align-items-center">
                                                            <div class="mt-1">
                                                                <h5 class="mb-1 tx-15">Sharon Needles</h5>
                                                                <p class="b-0 tx-13 text-muted mb-0">User ID: #1234 <span class="text-success ms-2 d-inline-block">Paid</span></p>
                                                            </div>
                                                            <div class="ms-auto wd-45p fs-16 mt-2">
                                                                <div id="spark5" class="wd-100p"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-12 col-lg-6">
                                <div class="card">
                                    <div class="card-header pb-1">
                                        <h3 class="card-title mb-2">Sales Activity</h3>
                                        <p class="tx-12 mb-0 text-muted">Sales activities are the tactics that salespeople use to achieve their goals and objective</p>
                                    </div>
                                    <div class="product-timeline card-body pt-2 mt-1">
                                        <ul class="timeline-1 mb-0">
                                            <li class="mt-0 mrg-8"> <i class="ti-pie-chart bg-primary-gradient text-white product-icon"></i> <span class="fw-semibold mb-4 tx-14 ">Total Products</span> <a href="javascript:void(0);" class="float-end tx-11 text-muted">3 days ago</a>
                                                <p class="mb-0 text-muted tx-12">1.3k New Products</p>
                                            </li>
                                            <li class="mt-0 mrg-8"> <i class="mdi mdi-cart-outline bg-danger-gradient text-white product-icon"></i> <span class="fw-semibold mb-4 tx-14 ">Total Sales</span> <a href="javascript:void(0);" class="float-end tx-11 text-muted">35 mins ago</a>
                                                <p class="mb-0 text-muted tx-12">1k New Sales</p>
                                            </li>
                                            <li class="mt-0 mrg-8"> <i class="ti-bar-chart-alt bg-success-gradient text-white product-icon"></i> <span class="fw-semibold mb-4 tx-14 ">Toatal Revenue</span> <a href="javascript:void(0);" class="float-end tx-11 text-muted">50 mins ago</a>
                                                <p class="mb-0 text-muted tx-12">23.5K New Revenue</p>
                                            </li>
                                            <li class="mt-0 mrg-8"> <i class="ti-wallet bg-warning-gradient text-white product-icon"></i> <span class="fw-semibold mb-4 tx-14 ">Toatal Profit</span> <a href="javascript:void(0);" class="float-end tx-11 text-muted">1 hour ago</a>
                                                <p class="mb-0 text-muted tx-12">3k New profit</p>
                                            </li>
                                            <li class="mt-0 mrg-8"> <i class="si si-eye bg-purple-gradient text-white product-icon"></i> <span class="fw-semibold mb-4 tx-14 ">Customer Visits</span> <a href="javascript:void(0);" class="float-end tx-11 text-muted">1 day ago</a>
                                                <p class="mb-0 text-muted tx-12">15% increased</p>
                                            </li>
                                            <li class="mt-0 mb-0 mrg-8"> <i class="icon-note icons bg-primary-gradient text-white product-icon"></i> <span class="fw-semibold mb-4 tx-14 ">Customer Reviews</span> <a href="javascript:void(0);" class="float-end tx-11 text-muted">1 day ago</a>
                                                <p class="mb-0 text-muted tx-12">1.5k reviews</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-12 col-lg-6">
                                <div class="card">
                                    <div class="card-header pb-0">
                                        <h3 class="card-title mb-2">Recent Orders</h3>
                                        <p class="tx-12 mb-0 text-muted">An order is an investor's instructions to a broker or brokerage firm to purchase or sell</p>
                                    </div>
                                    <div class="card-body sales-info ot-0 pb-0 pt-0">
                                        <div id="chart" class="ht-150"></div>
                                        <div class="row sales-infomation pb-0 mb-0 mx-auto wd-100p">
                                            <div class="col-md-6 col">
                                                <p class="mb-0 d-flex"><span class="legend bg-primary brround"></span>Delivered</p>
                                                <h3 class="mb-1">5238</h3>
                                                <div class="d-flex">
                                                    <p class="text-muted ">Last 6 months</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col">
                                                <p class="mb-0 d-flex"><span class="legend bg-info brround"></span>Cancelled</p>
                                                    <h3 class="mb-1">3467</h3>
                                                <div class="d-flex">
                                                    <p class="text-muted">Last 6 months</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="d-flex align-items-center pb-2">
                                                    <p class="mb-0">Total Sales</p>
                                                </div>
                                                <h4 class="fw-bold mb-2">$7,590</h4>
                                                <div class="progress progress-style progress-sm">
                                                    <div class="progress-bar bg-primary-gradient wd-80p" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-4 mt-md-0">
                                                <div class="d-flex align-items-center pb-2">
                                                    <p class="mb-0">Active Users</p>
                                                </div>
                                                <h4 class="fw-bold mb-2">$5,460</h4>
                                                <div class="progress progress-style progress-sm">
                                                    <div class="progress-bar bg-danger-gradient wd-75" role="progressbar"  aria-valuenow="45" aria-valuemin="0" aria-valuemax="45"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END ROW -->

                        <!-- ROW -->
                        <div class="row row-sm row-deck">
                            <div class="col-md-12 col-lg-4 col-xl-4">
                                <div class="card card-dashboard-eight pb-2">
                                    <h6 class="card-title">Your Top Countries</h6><span class="d-block mg-b-10 text-muted tx-12">Sales performance revenue based by country</span>
                                    <div class="list-group border">
                                        <div class="list-group-item border-top-0" id="br-t-0">
                                            <i class="flag-icon flag-icon-us flag-icon-squared"></i>
                                            <p>United States</p><span>$1,671.10</span>
                                        </div>
                                        <div class="list-group-item">
                                            <i class="flag-icon flag-icon-nl flag-icon-squared"></i>
                                            <p>Netherlands</p><span>$1,064.75</span>
                                        </div>
                                        <div class="list-group-item">
                                            <i class="flag-icon flag-icon-gb flag-icon-squared"></i>
                                            <p>United Kingdom</p><span>$1,055.98</span>
                                        </div>
                                        <div class="list-group-item">
                                            <i class="flag-icon flag-icon-ca flag-icon-squared"></i>
                                            <p>Canada</p><span>$1,045.49</span>
                                        </div>
                                        <div class="list-group-item">
                                            <i class="flag-icon flag-icon-in flag-icon-squared"></i>
                                            <p>India</p><span>$1,930.12</span>
                                        </div>
                                        <div class="list-group-item border-bottom-0 mb-0">
                                            <i class="flag-icon flag-icon-au flag-icon-squared"></i>
                                            <p>Australia</p><span>$1,042.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-8 col-xl-8">
                                <div class="card card-table-two">
                                    <div class=" card-header p-0 d-flex justify-content-between">
                                        <h4 class="card-title mb-1">Your Most Recent Earnings</h4>
                                        <a href="javascript:void(0);" class="tx-inverse" data-bs-toggle="dropdown"><i
                                            class="mdi mdi-dots-horizontal text-gray"></i></a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Another
                                                Action</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Something Else
                                                Here</a>
                                        </div>
                                    </div>
                                    <span class="tx-12 tx-muted mb-3 ">This is your most recent earnings for today's date.</span>
                                    <div class="table-responsive country-table">
                                        <table class="table table-striped table-bordered mb-0 text-sm-nowrap text-lg-nowrap text-xl-nowrap">
                                            <thead>
                                                <tr>
                                                    <th class="wd-lg-25p">Date</th>
                                                    <th class="wd-lg-25p tx-right">Sales Count</th>
                                                    <th class="wd-lg-25p tx-right">Earnings</th>
                                                    <th class="wd-lg-25p tx-right">Tax Witheld</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>05 Dec 2019</td>
                                                    <td class="tx-right tx-medium tx-inverse">34</td>
                                                    <td class="tx-right tx-medium tx-inverse">$658.20</td>
                                                    <td class="tx-right tx-medium tx-danger">-$45.10</td>
                                                </tr>
                                                <tr>
                                                    <td>06 Dec 2019</td>
                                                    <td class="tx-right tx-medium tx-inverse">26</td>
                                                    <td class="tx-right tx-medium tx-inverse">$453.25</td>
                                                    <td class="tx-right tx-medium tx-danger">-$15.02</td>
                                                </tr>
                                                <tr>
                                                    <td>07 Dec 2019</td>
                                                    <td class="tx-right tx-medium tx-inverse">34</td>
                                                    <td class="tx-right tx-medium tx-inverse">$653.12</td>
                                                    <td class="tx-right tx-medium tx-danger">-$13.45</td>
                                                </tr>
                                                <tr>
                                                    <td>08 Dec 2019</td>
                                                    <td class="tx-right tx-medium tx-inverse">45</td>
                                                    <td class="tx-right tx-medium tx-inverse">$546.47</td>
                                                    <td class="tx-right tx-medium tx-danger">-$24.22</td>
                                                </tr>
                                                <tr>
                                                    <td>09 Dec 2019</td>
                                                    <td class="tx-right tx-medium tx-inverse">31</td>
                                                    <td class="tx-right tx-medium tx-inverse">$425.72</td>
                                                    <td class="tx-right tx-medium tx-danger">-$25.01</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END ROW -->

                </div>
            </div>
            <!-- END MAIN-CONTENT -->

            <!-- RIGHT-SIDEBAR -->
            <div class="sidebar sidebar-right sidebar-animate">
				<div class="panel panel-primary card mb-0 box-shadow">
					<div class="tab-menu-heading border-0 p-3">
						<div class="card-title mb-0">Notifications</div>
						<div class="card-options ms-auto">
							<a href="javascript:void(0);" class="sidebar-remove"><i class="fe fe-x"></i></a>
						</div>
					</div>
					<div class="panel-body tabs-menu-body latest-tasks p-0 border-0">
						<div class="tabs-menu ">
							<!-- Tabs -->
							<ul class="nav panel-tabs">
								<li class=""><a href="#side1" class="active" data-bs-toggle="tab"><i class="fe fe-message-circle tx-15 me-2"></i> Chat</a></li>
								<li><a href="#side2" data-bs-toggle="tab"><i class="fe fe-bell tx-15 me-2"></i> Notifications</a></li>
								<li><a href="#side3" data-bs-toggle="tab"><i class="fe fe-users tx-15 me-2"></i> Friends</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane active " id="side1">
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-primary brround avatar-md">CH</span>
									</div>
									<a class="wrapper w-100 ms-3" href="javascript:void(0);" >
										<p class="mb-0 d-flex ">
											<b>New Websites is Created</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted me-1"></i>
												<small class="text-muted ms-auto">30 mins ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-danger brround avatar-md">N</span>
									</div>
									<a class="wrapper w-100 ms-3" href="javascript:void(0);" >
										<p class="mb-0 d-flex ">
											<b>Prepare For the Next Project</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted me-1"></i>
												<small class="text-muted ms-auto">2 hours ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-info brround avatar-md">S</span>
									</div>
									<a class="wrapper w-100 ms-3" href="javascript:void(0);" >
										<p class="mb-0 d-flex ">
											<b>Decide the live Discussion</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted me-1"></i>
												<small class="text-muted ms-auto">3 hours ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-warning brround avatar-md">K</span>
									</div>
									<a class="wrapper w-100 ms-3" href="javascript:void(0);" >
										<p class="mb-0 d-flex ">
											<b>Meeting at 3:00 pm</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted me-1"></i>
												<small class="text-muted ms-auto">4 hours ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-success brround avatar-md">R</span>
									</div>
									<a class="wrapper w-100 ms-3" href="javascript:void(0);" >
										<p class="mb-0 d-flex ">
											<b>Prepare for Presentation</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted me-1"></i>
												<small class="text-muted ms-auto">1 day ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-pink brround avatar-md">MS</span>
									</div>
									<a class="wrapper w-100 ms-3" href="javascript:void(0);" >
										<p class="mb-0 d-flex ">
											<b>Prepare for Presentation</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted me-1"></i>
												<small class="text-muted ms-auto">1 day ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-purple brround avatar-md">L</span>
									</div>
									<a class="wrapper w-100 ms-3" href="javascript:void(0);" >
										<p class="mb-0 d-flex ">
											<b>Prepare for Presentation</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted me-1"></i>
												<small class="text-muted ms-auto">45 minutes ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center p-3">
									<div class="">
										<span class="avatar bg-blue brround avatar-md">U</span>
									</div>
									<a class="wrapper w-100 ms-3" href="javascript:void(0);" >
										<p class="mb-0 d-flex ">
											<b>Prepare for Presentation</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted me-1"></i>
												<small class="text-muted ms-auto">2 days ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="tab-pane  " id="side2">
								<div class="list-group list-group-flush ">
									<div class="list-group-item d-flex  align-items-center">
										<div>
											<span class="avatar avatar-lg brround cover-image" data-bs-image-src="https://laravelui.spruko.com/valex/build/assets/img/users/12.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="ms-3">
											<strong>Madeleine</strong> Hey! there I' am available....
											<div class="small text-muted">
												3 hours ago
											</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div>
											<span class="avatar avatar-lg brround cover-image" data-bs-image-src="https://laravelui.spruko.com/valex/build/assets/img/users/1.jpg"></span>
										</div>
										<div class="ms-3">
											<strong>Anthony</strong> New product Launching...
											<div class="small text-muted">
												5 hour ago
											</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div>
											<span class="avatar avatar-lg brround cover-image" data-bs-image-src="https://laravelui.spruko.com/valex/build/assets/img/users/2.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="ms-3">
											<strong>Olivia</strong> New Schedule Realease......
											<div class="small text-muted">
												45 minutes ago
											</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div>
											<span class="avatar avatar-lg brround cover-image" data-bs-image-src="https://laravelui.spruko.com/valex/build/assets/img/users/8.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="ms-3">
											<strong>Madeleine</strong> Hey! there I' am available....
											<div class="small text-muted">
												3 hours ago
											</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div>
											<span class="avatar avatar-lg brround cover-image" data-bs-image-src="https://laravelui.spruko.com/valex/build/assets/img/users/11.jpg"></span>
										</div>
										<div class="ms-3">
											<strong>Anthony</strong> New product Launching...
											<div class="small text-muted">
												5 hour ago
											</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div>
											<span class="avatar avatar-lg brround cover-image" data-bs-image-src="https://laravelui.spruko.com/valex/build/assets/img/users/6.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="ms-3">
											<strong>Olivia</strong> New Schedule Realease......
											<div class="small text-muted">
												45 minutes ago
											</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div>
											<span class="avatar avatar-lg brround cover-image" data-bs-image-src="https://laravelui.spruko.com/valex/build/assets/img/users/9.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="ms-3">
											<strong>Olivia</strong> Hey! there I' am available....
											<div class="small text-muted">
												12 minutes ago
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane  " id="side3">
								<div class="list-group list-group-flush ">
									<div class="list-group-item d-flex  align-items-center">
										<div>
											<span class="avatar avatar-md brround cover-image" data-bs-image-src="https://laravelui.spruko.com/valex/build/assets/img/users/9.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="ms-2">
											<div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Mozelle Belt</div>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div>
											<span class="avatar avatar-md brround cover-image" data-bs-image-src="https://laravelui.spruko.com/valex/build/assets/img/users/11.jpg"></span>
										</div>
										<div class="ms-2">
											<div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Florinda Carasco</div>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel" ><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div>
											<span class="avatar avatar-md brround cover-image" data-bs-image-src="https://laravelui.spruko.com/valex/build/assets/img/users/10.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="ms-2">
											<div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Alina Bernier</div>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div>
											<span class="avatar avatar-md brround cover-image" data-bs-image-src="https://laravelui.spruko.com/valex/build/assets/img/users/2.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="ms-2">
											<div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Zula Mclaughin</div>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div>
											<span class="avatar avatar-md brround cover-image" data-bs-image-src="https://laravelui.spruko.com/valex/build/assets/img/users/13.jpg"></span>
										</div>
										<div class="ms-2">
											<div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Isidro Heide</div>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div>
											<span class="avatar avatar-md brround cover-image" data-bs-image-src="https://laravelui.spruko.com/valex/build/assets/img/users/12.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="ms-2">
											<div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Mozelle Belt</div>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div>
											<span class="avatar avatar-md brround cover-image" data-bs-image-src="https://laravelui.spruko.com/valex/build/assets/img/users/4.jpg"></span>
										</div>
										<div class="ms-2">
											<div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Florinda Carasco</div>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div>
											<span class="avatar avatar-md brround cover-image" data-bs-image-src="https://laravelui.spruko.com/valex/build/assets/img/users/7.jpg"></span>
										</div>
										<div class="ms-2">
											<div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Alina Bernier</div>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div>
											<span class="avatar avatar-md brround cover-image" data-bs-image-src="https://laravelui.spruko.com/valex/build/assets/img/users/2.jpg"></span>
										</div>
										<div class="ms-2">
											<div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Zula Mclaughin</div>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel" ><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div>
											<span class="avatar avatar-md brround cover-image" data-bs-image-src="https://laravelui.spruko.com/valex/build/assets/img/users/14.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="ms-2">
											<div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Isidro Heide</div>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div>
											<span class="avatar avatar-md brround cover-image" data-bs-image-src="https://laravelui.spruko.com/valex/build/assets/img/users/11.jpg"></span>
										</div>
										<div class="ms-2">
											<div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Florinda Carasco</div>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div>
											<span class="avatar avatar-md brround cover-image" data-bs-image-src="https://laravelui.spruko.com/valex/build/assets/img/users/9.jpg"></span>
										</div>
										<div class="ms-2">
											<div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Alina Bernier</div>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div>
											<span class="avatar avatar-md brround cover-image" data-bs-image-src="https://laravelui.spruko.com/valex/build/assets/img/users/15.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="ms-2">
											<div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Zula Mclaughin</div>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div>
											<span class="avatar avatar-md brround cover-image" data-bs-image-src="https://laravelui.spruko.com/valex/build/assets/img/users/4.jpg"></span>
										</div>
										<div class="ms-2">
											<div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Isidro Heide</div>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
           <!-- END RIGHT-SIDEBAR -->







<!-- END SCRIPTS -->
@endsection
@section('js')
<!-- Internal Data tables -->




@endsection
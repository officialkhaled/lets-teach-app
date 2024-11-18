@extends('admin.layout')
@section('content')
	
	<main id="main-container">
		<div class="content">
			<div class="row">
				<div class="col-6 col-xl-3">
					<a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
						<div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
							<div class="d-none d-sm-block">
								<i class="si si-bag fa-2x text-primary-light"></i>
							</div>
							<div class="text-end">
								<div class="fs-3 fw-semibold text-primary">1500</div>
								<div class="fs-sm fw-semibold text-uppercase text-muted">Sales</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-6 col-xl-3">
					<a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
						<div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
							<div class="d-none d-sm-block">
								<i class="si si-wallet fa-2x text-earth-light"></i>
							</div>
							<div class="text-end">
								<div class="fs-3 fw-semibold text-earth">$780</div>
								<div class="fs-sm fw-semibold text-uppercase text-muted">Earnings</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-6 col-xl-3">
					<a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
						<div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
							<div class="d-none d-sm-block">
								<i class="si si-envelope-open fa-2x text-elegance-light"></i>
							</div>
							<div class="text-end">
								<div class="fs-3 fw-semibold text-elegance">15</div>
								<div class="fs-sm fw-semibold text-uppercase text-muted">Messages</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-6 col-xl-3">
					<a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
						<div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
							<div class="d-none d-sm-block">
								<i class="si si-users fa-2x text-pulse"></i>
							</div>
							<div class="text-end">
								<div class="fs-3 fw-semibold text-pulse">4252</div>
								<div class="fs-sm fw-semibold text-uppercase text-muted">Online</div>
							</div>
						</div>
					</a>
				</div>
				<!-- END Row #1 -->
			</div>
			<div class="row">
				<!-- Row #2 -->
				<div class="col-md-6">
					<div class="block block-rounded block-bordered">
						<div class="block-header block-header-default border-bottom">
							<h3 class="block-title">
								Sales <small>This week</small>
							</h3>
							<div class="block-options">
								<button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
									<i class="si si-refresh"></i>
								</button>
								<button type="button" class="btn-block-option">
									<i class="si si-wrench"></i>
								</button>
							</div>
						</div>
						<div class="block-content block-content-full">
							<div class="pull pt-5">
								<!-- Lines Chart Container functionality is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _js/pages/be_pages_dashboard.js -->
								<!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
								<canvas id="js-chartjs-dashboard-lines" style="height: 290px"></canvas>
							</div>
						</div>
						<div class="block-content">
							<div class="row items-push text-center">
								<div class="col-6 col-sm-4">
									<div class="fw-semibold text-success">
										<i class="fa fa-caret-up"></i> +16%
									</div>
									<div class="fs-4 fw-semibold">720</div>
									<div class="fs-sm fw-semibold text-uppercase text-muted">This Month</div>
								</div>
								<div class="col-6 col-sm-4">
									<div class="fw-semibold text-danger">
										<i class="fa fa-caret-down"></i> -3%
									</div>
									<div class="fs-4 fw-semibold">160</div>
									<div class="fs-sm fw-semibold text-uppercase text-muted">This Week</div>
								</div>
								<div class="col-12 col-sm-4">
									<div class="fw-semibold text-success">
										<i class="fa fa-caret-up"></i> +9%
									</div>
									<div class="fs-4 fw-semibold">24.3</div>
									<div class="fs-sm fw-semibold text-uppercase text-muted">Average</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="block block-rounded block-bordered">
						<div class="block-header block-header-default border-bottom">
							<h3 class="block-title">
								Earnings <small>This week</small>
							</h3>
							<div class="block-options">
								<button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
									<i class="si si-refresh"></i>
								</button>
								<button type="button" class="btn-block-option">
									<i class="si si-wrench"></i>
								</button>
							</div>
						</div>
						<div class="block-content block-content-full">
							<div class="pull pt-5">
								<!-- Lines Chart Container functionality is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _js/pages/be_pages_dashboard.js -->
								<!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
								<canvas id="js-chartjs-dashboard-lines2" style="height: 290px"></canvas>
							</div>
						</div>
						<div class="block-content bg-body-extra-light">
							<div class="row items-push text-center">
								<div class="col-6 col-sm-4">
									<div class="fw-semibold text-success">
										<i class="fa fa-caret-up"></i> +4%
									</div>
									<div class="fs-4 fw-semibold">$ 6,540</div>
									<div class="fs-sm fw-semibold text-uppercase text-muted">This Month</div>
								</div>
								<div class="col-6 col-sm-4">
									<div class="fw-semibold text-danger">
										<i class="fa fa-caret-down"></i> -7%
									</div>
									<div class="fs-4 fw-semibold">$ 1,525</div>
									<div class="fs-sm fw-semibold text-uppercase text-muted">This Week</div>
								</div>
								<div class="col-12 col-sm-4">
									<div class="fw-semibold text-success">
										<i class="fa fa-caret-up"></i> +35%
									</div>
									<div class="fs-4 fw-semibold">$ 9,352</div>
									<div class="fs-sm fw-semibold text-uppercase text-muted">Balance</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- END Row #2 -->
			</div>
			<div class="row">
				<!-- Row #3 -->
				<div class="col-md-6">
					<div class="block block-rounded block-bordered">
						<div class="block-header block-header-default border-bottom">
							<h3 class="block-title">Latest Orders</h3>
							<div class="block-options">
								<button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
									<i class="si si-refresh"></i>
								</button>
								<button type="button" class="btn-block-option">
									<i class="si si-wrench"></i>
								</button>
							</div>
						</div>
						<div class="block-content">
							<table class="table table-borderless table-striped">
								<thead>
								<tr>
									<th style="width: 100px;">ID</th>
									<th>Status</th>
									<th class="d-none d-sm-table-cell">Customer</th>
									<th class="d-none d-sm-table-cell text-end">Value</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										<a class="fw-semibold" href="#">ORD.1851</a>
									</td>
									<td>
										<span class="badge bg-danger">Canceled</span>
									</td>
									<td class="d-none d-sm-table-cell">
										<a href="#">Lori Grant</a>
									</td>
									<td class="d-none d-sm-table-cell text-end">
										<span>$727</span>
									</td>
								</tr>
								<tr>
									<td>
										<a class="fw-semibold" href="#">ORD.1850</a>
									</td>
									<td>
										<span class="badge bg-warning">Pending</span>
									</td>
									<td class="d-none d-sm-table-cell">
										<a href="#">David Fuller</a>
									</td>
									<td class="d-none d-sm-table-cell text-end">
										<span>$537</span>
									</td>
								</tr>
								<tr>
									<td>
										<a class="fw-semibold" href="#">ORD.1849</a>
									</td>
									<td>
										<span class="badge bg-info">Processing</span>
									</td>
									<td class="d-none d-sm-table-cell">
										<a href="#">Alice Moore</a>
									</td>
									<td class="d-none d-sm-table-cell text-end">
										<span>$632</span>
									</td>
								</tr>
								<tr>
									<td>
										<a class="fw-semibold" href="#">ORD.1848</a>
									</td>
									<td>
										<span class="badge bg-success">Completed</span>
									</td>
									<td class="d-none d-sm-table-cell">
										<a href="#">Marie Duncan</a>
									</td>
									<td class="d-none d-sm-table-cell text-end">
										<span>$277</span>
									</td>
								</tr>
								<tr>
									<td>
										<a class="fw-semibold" href="#">ORD.1847</a>
									</td>
									<td>
										<span class="badge bg-danger">Canceled</span>
									</td>
									<td class="d-none d-sm-table-cell">
										<a href="#">Melissa Rice</a>
									</td>
									<td class="d-none d-sm-table-cell text-end">
										<span>$194</span>
									</td>
								</tr>
								<tr>
									<td>
										<a class="fw-semibold" href="#">ORD.1846</a>
									</td>
									<td>
										<span class="badge bg-info">Processing</span>
									</td>
									<td class="d-none d-sm-table-cell">
										<a href="#">Thomas Riley</a>
									</td>
									<td class="d-none d-sm-table-cell text-end">
										<span>$569</span>
									</td>
								</tr>
								<tr>
									<td>
										<a class="fw-semibold" href="#">ORD.1845</a>
									</td>
									<td>
										<span class="badge bg-success">Completed</span>
									</td>
									<td class="d-none d-sm-table-cell">
										<a href="#">Andrea Gardner</a>
									</td>
									<td class="d-none d-sm-table-cell text-end">
										<span>$426</span>
									</td>
								</tr>
								<tr>
									<td>
										<a class="fw-semibold" href="#">ORD.1844</a>
									</td>
									<td>
										<span class="badge bg-success">Completed</span>
									</td>
									<td class="d-none d-sm-table-cell">
										<a href="#">Jack Estrada</a>
									</td>
									<td class="d-none d-sm-table-cell text-end">
										<span>$338</span>
									</td>
								</tr>
								<tr>
									<td>
										<a class="fw-semibold" href="#">ORD.1843</a>
									</td>
									<td>
										<span class="badge bg-info">Processing</span>
									</td>
									<td class="d-none d-sm-table-cell">
										<a href="#">Danielle Jones</a>
									</td>
									<td class="d-none d-sm-table-cell text-end">
										<span>$454</span>
									</td>
								</tr>
								<tr>
									<td>
										<a class="fw-semibold" href="#">ORD.1842</a>
									</td>
									<td>
										<span class="badge bg-success">Completed</span>
									</td>
									<td class="d-none d-sm-table-cell">
										<a href="#">Jesse Fisher</a>
									</td>
									<td class="d-none d-sm-table-cell text-end">
										<span>$553</span>
									</td>
								</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="block block-rounded block-bordered">
						<div class="block-header block-header-default border-bottom">
							<h3 class="block-title">Top Products</h3>
							<div class="block-options">
								<button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
									<i class="si si-refresh"></i>
								</button>
								<button type="button" class="btn-block-option">
									<i class="si si-wrench"></i>
								</button>
							</div>
						</div>
						<div class="block-content">
							<table class="table table-borderless table-striped">
								<thead>
								<tr>
									<th class="d-none d-sm-table-cell" style="width: 100px;">ID</th>
									<th>Product</th>
									<th class="text-center">Orders</th>
									<th class="d-none d-sm-table-cell text-center">Rating</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td class="d-none d-sm-table-cell">
										<a class="fw-semibold" href="#">PID.258</a>
									</td>
									<td>
										<a href="#">Dark Souls III</a>
									</td>
									<td class="text-center">
										<a class="text-gray-dark" href="#">912</a>
									</td>
									<td class="d-none d-sm-table-cell text-center">
										<div class="text-warning">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</td>
								</tr>
								<tr>
									<td class="d-none d-sm-table-cell">
										<a class="fw-semibold" href="#">PID.198</a>
									</td>
									<td>
										<a href="#">Bioshock Collection</a>
									</td>
									<td class="text-center">
										<a class="text-gray-dark" href="#">895</a>
									</td>
									<td class="d-none d-sm-table-cell text-center">
										<div class="text-warning">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</td>
								</tr>
								<tr>
									<td class="d-none d-sm-table-cell">
										<a class="fw-semibold" href="#">PID.852</a>
									</td>
									<td>
										<a href="#">Alien Isolation</a>
									</td>
									<td class="text-center">
										<a class="text-gray-dark" href="#">820</a>
									</td>
									<td class="d-none d-sm-table-cell text-center">
										<div class="text-warning">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</td>
								</tr>
								<tr>
									<td class="d-none d-sm-table-cell">
										<a class="fw-semibold" href="#">PID.741</a>
									</td>
									<td>
										<a href="#">Bloodborne</a>
									</td>
									<td class="text-center">
										<a class="text-gray-dark" href="#">793</a>
									</td>
									<td class="d-none d-sm-table-cell text-center">
										<div class="text-warning">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</td>
								</tr>
								<tr>
									<td class="d-none d-sm-table-cell">
										<a class="fw-semibold" href="#">PID.985</a>
									</td>
									<td>
										<a href="#">Forza Motorsport 7</a>
									</td>
									<td class="text-center">
										<a class="text-gray-dark" href="#">782</a>
									</td>
									<td class="d-none d-sm-table-cell text-center">
										<div class="text-warning">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</td>
								</tr>
								<tr>
									<td class="d-none d-sm-table-cell">
										<a class="fw-semibold" href="#">PID.056</a>
									</td>
									<td>
										<a href="#">Fifa 18</a>
									</td>
									<td class="text-center">
										<a class="text-gray-dark" href="#">776</a>
									</td>
									<td class="d-none d-sm-table-cell text-center">
										<div class="text-warning">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</td>
								</tr>
								<tr>
									<td class="d-none d-sm-table-cell">
										<a class="fw-semibold" href="#">PID.036</a>
									</td>
									<td>
										<a href="#">Gears of War 4</a>
									</td>
									<td class="text-center">
										<a class="text-gray-dark" href="#">680</a>
									</td>
									<td class="d-none d-sm-table-cell text-center">
										<div class="text-warning">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</td>
								</tr>
								<tr>
									<td class="d-none d-sm-table-cell">
										<a class="fw-semibold" href="#">PID.682</a>
									</td>
									<td>
										<a href="#">Minecraft</a>
									</td>
									<td class="text-center">
										<a class="text-gray-dark" href="#">670</a>
									</td>
									<td class="d-none d-sm-table-cell text-center">
										<div class="text-warning">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</td>
								</tr>
								<tr>
									<td class="d-none d-sm-table-cell">
										<a class="fw-semibold" href="#">PID.478</a>
									</td>
									<td>
										<a href="#">Dishonored 2</a>
									</td>
									<td class="text-center">
										<a class="text-gray-dark" href="#">640</a>
									</td>
									<td class="d-none d-sm-table-cell text-center">
										<div class="text-warning">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</td>
								</tr>
								<tr>
									<td class="d-none d-sm-table-cell">
										<a class="fw-semibold" href="#">PID.952</a>
									</td>
									<td>
										<a href="#">Gran Turismo Sport</a>
									</td>
									<td class="text-center">
										<a class="text-gray-dark" href="#">630</a>
									</td>
									<td class="d-none d-sm-table-cell text-center">
										<div class="text-warning">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</td>
								</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

@endsection
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					Navig8tor <small>financial services provider</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="index.html">
								Dashboard
							</a>
							<i></i>
						</li>
						<li class="pull-right">
							<div id="dashboard-report-range" class="dashboard-date-range tooltips" data-placement="top" data-original-title="Change dashboard date range">
								<i class="fa fa-calendar"></i>
								<span>
								</span>
								<i class="fa fa-angle-down"></i>
							</div>
						</li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN DASHBOARD STATS -->
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat blue">
						<div class="visual">
							<i class="fa fa-coffee"></i>
						</div>
						<div class="details">
							<div class="number">
								 <?=$leads?>
							</div>
							<div class="desc">
								 Leads
							</div>
						</div>
						<a class="more" href="<?=site_url('entities/leads')?>">
							 View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat green">
						<div class="visual">
							<i class="fa fa-star"></i>
						</div>
						<div class="details">
							<div class="number">
								 <?=$clients?>
							</div>
							<div class="desc">
								 Clients
							</div>
						</div>
						<a class="more" href="<?=site_url('entities/clients')?>">
							 View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat yellow">
						<div class="visual">
							<i class="fa fa-book"></i>
						</div>
						<div class="details">
							<div class="number">
								 <?=$providers?>
							</div>
							<div class="desc">
								 Providers
							</div>
						</div>
						<a class="more" href="<?=site_url('entities/providers')?>">
							 View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat purple">
						<div class="visual">
							<i class="fa fa-users"></i>
						</div>
						<div class="details">
							<div class="number">
								 <?=$users?>
							</div>
							<div class="desc">
								 Users
							</div>
						</div>
						<a class="more" href="<?=site_url('users')?>">
							 View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<!-- BEGIN CALENDAR PORTLET-->
					<div class="portlet box blue calendar">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-calendar"></i>Calendar
							</div>
						</div>
						<div class="portlet-body light-grey">
							<div id="calendar">
							</div>
						</div>
					</div>
					<!-- END PORTLET-->
				</div>
				<div class="col-md-6 col-sm-6">
					<!-- BEGIN TASKS PORTLET-->
					<div class="portlet box green tasks-widget">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-check"></i>Tasks
							</div>
							<div class="tools">
								<a href="" class="reload">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div class="task-content">
								<div class="scroller" style="height: 380px;" data-always-visible="1" data-rail-visible1="1">
									<!-- START TASK LIST -->
									<ul class="task-list">
										<li>
											<div class="task-title">
												<span class="task-title-sp">
													 Sample Task 1
												</span>
												<span class="label label-sm label-success">
													 Test Lead 1
												</span>
												<span class="task-bell">
													<i class="fa fa-bell-o"></i>
												</span>
											</div>
											<div class="task-config">
												<div class="task-config-btn btn-group">
													<a class="btn btn-xs default" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
														<i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
													</a>
													<ul class="dropdown-menu pull-right">
														<li>
															<a href="#">
																<i class="fa fa-check"></i> Complete
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-pencil"></i> Edit
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-trash-o"></i> Cancel
															</a>
														</li>
													</ul>
												</div>
											</div>
										</li>
										<li>
											<div class="task-title">
												<span class="task-title-sp">
													 Sample Task 2
												</span>
												<span class="label label-sm label-danger">
													 Test Client 2
												</span>
											</div>
											<div class="task-config">
												<div class="task-config-btn btn-group">
													<a class="btn btn-xs default" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
														<i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
													</a>
													<ul class="dropdown-menu pull-right">
														<li>
															<a href="#">
																<i class="fa fa-check"></i> Complete
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-pencil"></i> Edit
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-trash-o"></i> Cancel
															</a>
														</li>
													</ul>
												</div>
											</div>
										</li>
									</ul>
									<!-- END START TASK LIST -->
								</div>
							</div>
							<div class="task-footer">
								<span class="pull-right">
									<a href="#">
										 See All Tasks <i class="m-icon-swapright m-icon-gray"></i>
									</a>
									 &nbsp;
								</span>
							</div>
						</div>
					</div>
					<!-- END TASKS PORTLET-->
				</div>
			</div>
			<!-- END DASHBOARD STATS -->
		</div>
	</div>
	<!-- END CONTENT -->
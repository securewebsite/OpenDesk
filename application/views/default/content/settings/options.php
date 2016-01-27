	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
						<?=$title?>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li class="btn-group">
							<button type="button" class="btn default dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
							<span>
								Actions
							</span>
							<i class="fa fa-angle-down"></i>
							</button>
							<ul class="dropdown-menu pull-right" role="menu">
								<li>
									<a href="<?=site_url("entities/add/1")?>">
										New Lead
									</a>
								</li>
							</ul>
						</li>
						<li>
							<i class="fa fa-cogs"></i>
							<a href="<?=site_url("dashboard")?>">
								Settings
							</a>
						</li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN DASHBOARD STATS -->
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat yellow">
						<div class="visual">
							<i class="fa fa-coffee"></i>
						</div>
						<div class="details">
							<div class="number">
								3
							</div>
							<div class="desc">
								 Entity Modes
							</div>
						</div>
						<a class="more" href="<?=site_url('entities/leads')?>">
							 Click here to edit <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat yellow">
						<div class="visual">
							<i class="fa fa-book"></i>
						</div>
						<div class="details">
							<div class="number">
								 2
							</div>
							<div class="desc">
								 Entity Status
							</div>
						</div>
						<a class="more" href="<?=site_url('entities/prospects')?>">
							 View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat yellow">
						<div class="visual">
							<i class="fa fa-star"></i>
						</div>
						<div class="details">
							<div class="number">
								 4
							</div>
							<div class="desc">
								 Entity Types
							</div>
						</div>
						<a class="more" href="<?=site_url('entities/clients')?>">
							 View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="dashboard-stat blue">
						<div class="visual">
							<i class="fa fa-coffee"></i>
						</div>
						<div class="details">
							<div class="number">
								3
							</div>
							<div class="desc">
								 Ticket Types
							</div>
						</div>
						<a class="more" href="<?=site_url('entities/leads')?>">
							 Click here to edit <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="dashboard-stat blue">
						<div class="visual">
							<i class="fa fa-book"></i>
						</div>
						<div class="details">
							<div class="number">
								 2
							</div>
							<div class="desc">
								 Ticket Status
							</div>
						</div>
						<a class="more" href="<?=site_url('entities/prospects')?>">
							 View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat green">
						<div class="visual">
							<i class="fa fa-coffee"></i>
						</div>
						<div class="details">
							<div class="number">
								3
							</div>
							<div class="desc">
								 Product Status
							</div>
						</div>
						<a class="more" href="<?=site_url('entities/leads')?>">
							 Click here to edit <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat green">
						<div class="visual">
							<i class="fa fa-book"></i>
						</div>
						<div class="details">
							<div class="number">
								 2
							</div>
							<div class="desc">
								 Product Types
							</div>
						</div>
						<a class="more" href="<?=site_url('entities/prospects')?>">
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
								 4
							</div>
							<div class="desc">
								 Product Categories
							</div>
						</div>
						<a class="more" href="<?=site_url('entities/clients')?>">
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
								 4
							</div>
							<div class="desc">
								 Product Providers
							</div>
						</div>
						<a class="more" href="<?=site_url('entities/clients')?>">
							 View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat red">
						<div class="visual">
							<i class="fa fa-coffee"></i>
						</div>
						<div class="details">
							<div class="number">
								3
							</div>
							<div class="desc">
								 User Modes
							</div>
						</div>
						<a class="more" href="<?=site_url('entities/leads')?>">
							 Click here to edit <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat red">
						<div class="visual">
							<i class="fa fa-book"></i>
						</div>
						<div class="details">
							<div class="number">
								 2
							</div>
							<div class="desc">
								 User Status
							</div>
						</div>
						<a class="more" href="<?=site_url('entities/prospects')?>">
							 View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat red">
						<div class="visual">
							<i class="fa fa-star"></i>
						</div>
						<div class="details">
							<div class="number">
								 4
							</div>
							<div class="desc">
								 User Access Levels
							</div>
						</div>
						<a class="more" href="<?=site_url('entities/clients')?>">
							 View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
			</div>
			<!-- END DASHBOARD STATS -->
		</div>
	</div>
	<!-- END CONTENT -->
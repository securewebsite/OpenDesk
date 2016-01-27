<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-fixed-top">
	<!-- BEGIN TOP NAVIGATION BAR -->
	<div class="header-inner">
		<!-- BEGIN LOGO -->
		<a class="navbar-brand" href="<?=site_url('dashboard')?>">
			<img src="<?=base_url('assets/default/img/logo.png')?>" alt="logo" class="img-responsive"/>
		</a>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<img src="<?=base_url('assets/default/img/menu-toggler.png')?>" alt=""/>
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<ul class="nav navbar-nav pull-right">
		
			<!-- BEGIN NOTIFICATION DROPDOWN -->
			<li class="dropdown dropdown-extended" id="header_notification_bar">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<i class="fa fa-warning"></i>
					<span class="badge badge-warning">
						 <?=sizeof($usernotifications)?>
					</span>
				</a>
				<ul class="dropdown-menu extended notification">
					<li>
						<p>
							 You have <?=sizeof($usernotifications)?>  notifications
						</p>
					</li>
					<li>
						<ul class="dropdown-menu-list scroller" style="height: 250px;">
						<? foreach($usernotifications as $notificationrow): ?>
							<li>
								<a href="#">
									 <?=$notificationrow['description']; ?>
									<span class="time">
									</span>
								</a>
							</li>
						<? endforeach; ?>
						</ul>
					</li>
				</ul>
			</li>
			<!-- END NOTIFICATION DROPDOWN -->
			
			<!-- BEGIN TASKS DROPDOWN -->
			<li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
				<i class="fa fa-tasks"></i>
				<span class="badge">
				<?=sizeof($usertasks)?> </span>
				</a>
				<ul class="dropdown-menu extended tasks">
					<li>
						<p>
							 You have <?=sizeof($usertasks)?> active tasks
						</p>
					</li>
					<li>
						<ul class="dropdown-menu-list scroller" style="height: 250px;">
							<? foreach($usertasks as $taskrow): ?>
							<li>
								<a href="<?=site_url('settings/users_tasks_edit/'.$taskrow['utid'])?>">
								<span class="task">
								<span class="desc">
								<?=$taskrow['title']; ?></span>
								<span class="percent">
								<?=$taskrow['progress']; ?>% </span>
								</span>
								<span class="progress">
								<span style="width: <?=$taskrow['progress']; ?>%;" class="progress-bar progress-bar-success" aria-valuenow="<?=$taskrow['progress']; ?>" aria-valuemin="0" aria-valuemax="100">
								<span class="sr-only">
								<?=$taskrow['progress']; ?>% Complete </span>
								</span>
								</span>
								</a>
							</li>
							<? endforeach; ?>
						</ul>
					</li>
					<li class="external">
						<a href="<?=site_url('settings/users_view/'.$this->session->userdata('uid').'/#tab_1_2')?>">
						See all my tasks <i class="m-icon-swapright"></i>
						</a>
					</li>
				</ul>
			</li>
			<!-- END TASKS DROPDOWN -->
			
			<!-- BEGIN TICKETS DROPDOWN -->
			<li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<i class="fa fa-ticket"></i>
					<span class="badge"><?=sizeof($entitytickets)?> </span>
				</a>
				<ul class="dropdown-menu extended tasks">
					<li>
						<p>
							 You have <?=sizeof($entitytickets)?> active tickets
						</p>
					</li>
					<li>
						<ul class="dropdown-menu-list scroller" style="height: 250px;">
							<? foreach($entitytickets as $ticketrow): ?>
							<li>
								<a href="<?=site_url('entities/tickets_edit/'.$ticketrow['eid'].'/'.$ticketrow['etid'])?>">
								<span class="task">
								<span class="desc">
								<?=$ticketrow['title']; ?>
								</span>
								</span>
								</a>
							</li>
							<? endforeach; ?>
						</ul>
					</li>
					<li class="external">
						<a href="<?=site_url('settings/users_view/'.$this->session->userdata('uid').'/#tab_1_3')?>">
						See all my tickets <i class="m-icon-swapright"></i>
						</a>
					</li>
				</ul>
			</li>
			<!-- END TASKS DROPDOWN -->
			
			<!-- BEGIN PROFILE DROPDOWN -->
			<li class="dropdown user">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" src="<?=base_url('assets/default/img/avatar1.png')?>">
					<span class="username">
						<?= $this->session->userdata('profile_name'); ?>
					</span>
					<i class="fa fa-angle-down"></i>
				</a>
				<ul class="dropdown-menu">
					<li>
						<a href="<?= site_url("profiles/overview") ?>">
							<i class="fa fa-eye"></i> Overview
						</a>
					</li>
					<li>
						<a href="<?= site_url("profiles/overview") ?>">
							<i class="fa fa-cogs"></i> Settings
						</a>
					</li>
				</ul>
			</li>
			<!-- END PROFILE DROPDOWN -->		
			
			<!-- BEGIN USER LOGIN DROPDOWN -->
			<li class="dropdown user">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" src="<?=base_url('assets/default/img/avatar2.png')?>">
					<span class="username">
						<?= $this->session->userdata('fullname'); ?>
					</span>
					<i class="fa fa-angle-down"></i>
				</a>
				<ul class="dropdown-menu">
					<li>
						<a href="<?= site_url("accounts/overview") ?>">
							<i class="fa fa-user"></i> My Account
						</a>
					</li>
					<li>
						<a href="<?=site_url('accounts/overview/'.$this->session->userdata('uid').'/#tab_1_2')?>">
							<i class="fa fa-star"></i> My Entities
						</a>
					</li>
					<li>
						<a href="<?=site_url('accounts/overview/'.$this->session->userdata('uid').'/#tab_1_3')?>">
							<i class="fa fa-tasks"></i> My Tasks
						</a>
					</li>
					<li>
						<a href="<?=site_url('accounts/overview/'.$this->session->userdata('uid').'/#tab_1_4')?>">
							<i class="fa fa-ticket"></i> My Tickets
						</a>
					</li>
					<? if ($this->session->userdata['accesslevel'] == 1){ ?>
					<li>
						<a href="<?=site_url('accounts/overview/'.$this->session->userdata('uid').'/#tab_1_5')?>">
							<i class="fa fa-envelope"></i> My Emails
						</a>
					</li>
					<? } ?>
					<li class="divider">
					</li>
					<li>
						<a href="javascript:;" id="trigger_fullscreen">
							<i class="fa fa-arrows"></i> Full Screen
						</a>
					</li>
					<li>
						<a href="<?=site_url('authentication/logout')?>">
							<i class="fa fa-key"></i> Log Out
						</a>
					</li>
				</ul>
			</li>
			<!-- END USER LOGIN DROPDOWN -->
		</ul>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<!-- add "navbar-no-scroll" class to disable the scrolling of the sidebar menu -->
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone">
					</div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<li class="sidebar-search-wrapper">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<form class="sidebar-search"  method="post" action="<?=site_url("dashboard/search") ?>">
						<div class="form-container">
							<div class="input-box">
								<a href="javascript:;" class="remove">
								</a>
								<input type="text" name="searchstring" placeholder="Search..."/>
								<input type="submit" class="submit" value=" "/>
							</div>
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li class="start <? if ($this->session->userdata('menuitem')== "dashboard"){ echo "active";} ?>">
					<a href="<?=site_url('dashboard')?>">
						<i class="fa fa-home"></i>
						<span class="title">
							Dashboard
						</span>
						<span class="">
						</span>
					</a>
				</li>
				<li class="start <? if ($this->session->userdata('menuitem')== "leads"){ echo "active";} ?>">
					<a href="<?=site_url('entities/leads')?>">
						<i class="fa fa-coffee"></i>
						<span class="title">
							Leads
						</span>
						<span class="">
						</span>
					</a>
				</li>
				<li class="start <? if ($this->session->userdata('menuitem')== "prospects"){ echo "active";} ?>">
					<a href="<?=site_url('entities/prospects')?>">
						<i class="fa fa-book"></i>
						<span class="title">
							Prospects
						</span>
						<span class="">
						</span>
					</a>
				</li>
				<li class="start <? if ($this->session->userdata('menuitem')== "clients"){ echo "active";} ?>">
					<a href="<?=site_url('entities/clients')?>">
						<i class="fa fa-star"></i>
						<span class="title">
							Clients
						</span>
						<span class="">
						</span>
					</a>
				</li>
				<li class="start <? if ($this->session->userdata('menuitem')== "tools"){ echo "active";} ?>">
					<a href="javascript:;">
						<i class="fa fa-suitcase"></i>
						<span class="title">
							Tools
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?=site_url('tools/bulkemails')?>">
								<i class="fa fa-envelope"></i>
								Bulk Emails
							</a>
						</li>
						<li>
							<a href="<?=site_url('tools/bulksms')?>">
								<i class="fa fa-phone-square"></i>
								Bulk SMS
							</a>
						</li>
					</ul>
				</li>
				
				<!--
				<? if ($this->session->userdata('accesslevel') <= 2){ ?>
				<li class="start <? if ($this->session->userdata('menuitem')== "settings"){ echo "active";} ?>">
					<a href="javascript:;">
						<i class="fa fa-cogs"></i>
						<span class="title">
							Settings
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?=site_url('settings/groups')?>">
								<i class="fa fa-users"></i>
								Groups
							</a>
						</li>
						<? if ($this->session->userdata('accesslevel') ==1){ ?>
						<li>
							<a href="<?=site_url('settings/users')?>">
								<i class="fa fa-user"></i>
								Users
							</a>
						</li>
						<? } ?>
						<? if ($this->session->userdata('accesslevel') == 1){ ?>
						<li>
							<a href="<?=site_url('settings/profiles')?>">
								<i class="fa fa-sitemap"></i>
								Profiles
							</a>
						</li>
						<? } ?>
						<? if ($this->session->userdata('accesslevel') == 1){ ?>
						<li>
							<a href="<?=site_url('settings/options')?>">
								<i class="fa fa-cog"></i>
								Options
							</a>
						</li>
						<? } ?>
					</ul>
				</li>
				<? } ?>
				-->
				
				
				<!--
				<li class="start ">
					<a href="javascript:;">
						<i class="fa fa-bar-chart-o"></i>
						<span class="title">
							Reports
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="#">
								<i class="fa fa-th-large"></i>
								Short-Term Insurance
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-th-large"></i>
								Long-Term Insurance
							</a>
						</li>
					</ul>
				</li>
				-->
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
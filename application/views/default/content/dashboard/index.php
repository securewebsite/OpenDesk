	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
						<?=$profile->name?> <small>is an authorised financial services provider - FSP <?=$profile->fspnumber?></small>
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
								<li>
									<a href="<?=site_url("entities/add/2")?>">
										New Prospect
									</a>
								</li>
								<li>
									<a href="<?=site_url("entities/add/3")?>">
										New Client
									</a>
								</li>
							</ul>
						</li>
						<li>
							<i class="fa fa-home"></i>
							<a href="<?=site_url("dashboard")?>">
								Dashboard
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
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat blue">
						<div class="visual">
							<i class="fa fa-book"></i>
						</div>
						<div class="details">
							<div class="number">
								 <?=$prospects?>
							</div>
							<div class="desc">
								 Prospects
							</div>
						</div>
						<a class="more" href="<?=site_url('entities/prospects')?>">
							 View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
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
				<div class="col-md-8 col-sm-8">
					<!-- BEGIN TICKETS PORTLET-->
					<div class="portlet box light-grey tasks-widget">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-ticket"></i>My Tickets
							</div>
							<div class="actions">
								<div class="btn-group">
									<a class="btn default btn-xs" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
										 More <i class="fa fa-angle-down"></i>
									</a>
									<ul class="dropdown-menu pull-right">
										<li>
											<a href="#">
												<i class="i"></i> All Tickets
											</a>
										</li>
										<li class="divider">
										</li>
										</li>
										<li>
											<a href="#">
												 Pending
												<span class="badge badge-important">
													 4
												</span>
											</a>
										</li>
										<li>
											<a href="#">
												 Completed
												<span class="badge badge-success">
													 12
												</span>
											</a>
										</li>
										<li>
											<a href="#">
												 Overdue
												<span class="badge badge-warning">
													 9
												</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="portlet-body">
							<div class="task-content">
								<div class="scroller" style="height: 380px;" data-always-visible="1" data-rail-visible1="1">
									<!-- START TICKET LIST -->
									<ul class="task-list">
										<? FOREACH($tickets->result() as $row): ?>
										<li>
											<div class="task-title">
												<span class="task-title-sp">
													 <a href="<?=site_url('entities/tickets_edit/'.$row->eid.'/'.$row->etid)?>" title="<?=$row->description?>"><?=$row->tickettypedescription?> - <?=$row->name?> (<?=$row->title?>)</a>
												</span>
												<? if ($row->duedate < date("Y-m-d")){ ?>
												<span class="label label-sm label-danger">
													 Overdue
												</span>
												<? } ?>
												<? if ($row->duedate > date("Y-m-d")){ ?>
												<span class="label label-sm label-success">
													 <?=$row->duedate?>
												</span>
												<? } ?>
												<? if ($row->duedate == date("Y-m-d")){ ?>
												<span class="label label-sm label-warning">
													 Due Today
												</span>
												<? } ?>
											</div>
											<div class="task-config">
												<div class="task-config-btn btn-group">
													<a class="btn btn-xs default" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
														<i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
													</a>
													<ul class="dropdown-menu pull-right">
														<li>
															<a href="<?=site_url('entities/tickets_edit/'.$row->eid.'/'.$row->etid)?>">
																<i class="fa fa-pencil"></i> Edit Ticket
															</a>
														</li>
														<li>
															<a href="<?=site_url('entities/tickets_delete/'.$row->eid.'/'.$row->etid)?>">
																<i class="fa fa-trash-o"></i> Delete Ticket
															</a>
														</li>
														<li class="divider"></li>
														<li>
															<a href="<?=site_url('entities/view/'.$row->eid)?>">
																<i class="fa fa-star-o"></i> View Entity
															</a>
														</li>
													</ul>
												</div>
											</div>
										</li>
										<? ENDFOREACH; ?>
									</ul>
									<!-- END TICKET LIST -->
								</div>
							</div>
							<div class="task-footer">
								<span class="pull-right">
									<a href="<?=site_url('settings/users_view/'.$this->session->userdata('uid').'/#tab_1_3')?>">
										 Show All My Tickets <i class="m-icon-swapright m-icon-gray"></i>
									</a>
									 &nbsp;
								</span>
							</div>
						</div>
					</div>
					<!-- END TICKET PORTLET-->
				</div>
				<div class="col-md-4 col-sm-4">
					<!-- BEGIN TASKS PORTLET-->
					<div class="portlet box light-grey tasks-widget">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-tasks"></i>My Tasks
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
										<? FOREACH($tasks->result() as $row): ?>
										<li>
											<div class="task-title">
												<span class="task-title-sp">
													 <a href="<?=site_url('settings/users_tasks_edit/'.$row->utid)?>"><?=$row->title?></a>
												</span>
												<span class="label label-sm label-success">
													 <?=$row->duedate?>
												</span>
											</div>
											<div class="task-config">
												<div class="task-config-btn btn-group">
													<a class="btn btn-xs default" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
														<i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
													</a>
													<ul class="dropdown-menu pull-right">
														<li>
															<a href="<?=site_url('settings/users_tasks_edit/'.$row->utid)?>">
																<i class="fa fa-pencil"></i> Edit
															</a>
														</li>
														<li>
															<a href="<?=site_url('dashboard/users_tasks_delete/'.$row->utid)?>">
																<i class="fa fa-trash-o"></i> Delete
															</a>
														</li>
													</ul>
												</div>
											</div>
										</li>
										<? ENDFOREACH; ?>
									</ul>
									<!-- END TASK LIST -->
								</div>
							</div>
							<div class="task-footer">
								<span class="pull-right">
									<a href="<?=site_url('settings/users_view/'.$this->session->userdata('uid').'/#tab_1_2')?>">
										 Show All My Tasks <i class="m-icon-swapright m-icon-gray"></i>
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
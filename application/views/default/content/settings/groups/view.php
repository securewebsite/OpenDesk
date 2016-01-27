	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					<?=$title?> <small><?=$subtitle?></small>
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
									<a href="<?=site_url("settings/groups_add/")?>">
										New Group
									</a>
								</li>
								<li class="divider">
								<li>
									<a href="<?=site_url("settings/groups_edit/".$pgid)?>">
										Edit Group
									</a>
								</li>
							</ul>
						</li>
						<li>
							<i class="fa fa-cogs"></i>
							<a href="#">
								Settings
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="<?=site_url("settings/groups")?>">
								Groups
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">
								View
							</a>
						</li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row profile">
				<div class="col-md-12">
					<!--BEGIN TABS-->
					<div class="tabbable tabbable-custom tabbable-full-width">
						<ul class="nav nav-tabs">
							<li class="active">
								<a href="#tab_1_1" data-toggle="tab">
									 Overview
								</a>
							</li>
							<li>
								<a href="#tab_1_2" data-toggle="tab">
									 Leads
								</a>
							</li>
							<li>
								<a href="#tab_1_3" data-toggle="tab">
									 Prospects
								</a>
							</li>
							<li>
								<a href="#tab_1_4" data-toggle="tab">
									 Clients
								</a>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab_1_1">
								<div class="row">
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-8 profile-info">
												<table class="table table-bordered table-striped">
												<tr>
													<td>
														Group Name
													</td>
													<td>
														<?=$group->name?>
													</td>
												</tr>
												<tr>
													<td>
														Group Subject
													</td>
													<td>
														<?=$group->subject?>
													</td>
												</tr>
												<tr>
													<td>
														Status
													</td>
													<td>
														<? if ($group->status == 1){echo "Active";}else{echo "Inactive";}?>
													</td>
												</tr>
												</table>
											</div>
											<!--end col-md-8-->
											<div class="col-md-4 profile-info">
												<div class="note note-info">
													<h4 class="block">Active Subscribers</h4>
													<p>
														<?=$leads->num_rows()?> leads<br>
														<?=$prospects->num_rows()?> prospects<br>
														<?=$clients->num_rows()?> clients<br>
													</p>
												</div>
											</div>
											<!--end col-md-4-->
										</div>
										<!--end row-->
									</div>
								</div>
							</div>
							<!--tab_1_2-->
							<div class="tab-pane" id="tab_1_2">
								<div class="row profile-account">
									<div class="col-md-12">
										<div class="portlet-body">
											<table class="table table-striped table-bordered table-hover" id="sample_2">
											<thead>
											<tr>
												<th width="100%">
													 Lead Name
												</th>
												<th nowrap>
													 Actions
												</th>
											</tr>
											</thead>
											<tbody>
											<? FOREACH($leads->result() as $row): ?>
											<tr class="odd gradeX">
												<td width="100%">
													 <?=$row->name?>
												</td>
												<td nowrap>
													<a href="<?=site_url("settings/groups_unsubscribe/".$pgid."/".$row->eid)?>" class="btn default btn-xs blue-stripe">
														 Unsubscribe
													</a>
												</td>
											</tr>
											<? ENDFOREACH; ?>
											</tbody>
											</table>
										</div>
									</div>
									<!--end col-md-12-->
								</div>
							</div>
							<!--end tab-pane-->
							<!--tab_1_3-->
							<div class="tab-pane" id="tab_1_3">
								<div class="row profile-account">
									<div class="col-md-12">
										<div class="portlet-body">
											<table class="table table-striped table-bordered table-hover" id="sample_3">
											<thead>
											<tr>
												<th width="100%">
													 Prospect Name
												</th>
												<th nowrap>
													 Actions
												</th>
											</tr>
											</thead>
											<tbody>
											<? FOREACH($prospects->result() as $row): ?>
											<tr class="odd gradeX">
												<td width="100%">
													 <?=$row->name?>
												</td>
												<td nowrap>
													<a href="<?=site_url("settings/groups_unsubscribe/".$row->eid)?>" class="btn default btn-xs blue-stripe">
														 Unsubscribe
													</a>
												</td>
											</tr>
											<? ENDFOREACH; ?>
											</tbody>
											</table>
										</div>
									</div>
									<!--end col-md-12-->
								</div>
							</div>
							<!--end tab-pane-->
							<!--tab_1_4-->
							<div class="tab-pane" id="tab_1_4">
								<div class="row profile-account">
									<div class="col-md-12">
										<div class="portlet-body">
											<table class="table table-striped table-bordered table-hover" id="sample_3">
											<thead>
											<tr>
												<th width="100%">
													 Client Name
												</th>
												<th>
													 Actions
												</th>
											</tr>
											</thead>
											<tbody>
											<? FOREACH($clients->result() as $row): ?>
											<tr class="odd gradeX">
												<td width="100%">
													 <?=$row->name?>
												</td>
												<td nowrap>
													<a href="<?=site_url("entities/groups_unsubscribe/".$row->eid)?>" class="btn default btn-xs blue-stripe">
														 Unsubscribe
													</a>
												</td>
											</tr>
											<? ENDFOREACH; ?>
											</tbody>
											</table>
										</div>
									</div>
									<!--end col-md-12-->
								</div>
							</div>
							<!--end tab-pane-->
						</div>
					</div>
					<!--END TABS-->
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
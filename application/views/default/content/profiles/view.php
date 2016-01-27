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
									<a href="<?=site_url("settings/profiles_edit/".$pid)?>">
										Edit Profile
									</a>
								</li>
								<? if ($this->session->userdata('accesslevel') == 1){ ?>
								<li>
									<a href="<?=site_url("settings/profiles_delete/".$pid)?>">
										Delete Profile
									</a>
								</li>
								<? } ?>
							</ul>
						</li>
						<li>
							<a href="<?=site_url("settings/profiles")?>">
								<i class="fa fa-sitemap"></i>
								Profiles
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">
								Overview
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
									 Users
								</a>
							</li>
							<li>
								<a href="#tab_1_3" data-toggle="tab">
									 Groups
								</a>
							</li>
						</ul>
						<div class="tab-content">
							<!--tab_1_1-->
							<div class="tab-pane active" id="tab_1_1">
								<div class="row">
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-8 profile-info">
												<table class="table table-bordered table-striped">
												<tr>
													<td>
														Profile Name
													</td>
													<td>
														<?=$profile->name?>
													</td>
												</tr>
												<tr>
													<td>
														FSP Number
													</td>
													<td>
														<?=$profile->fspnumber?>
													</td>
												</tr>
												<tr>
													<td>
														Phone
													</td>
													<td>
														<?=$profile->phone?>
													</td>
												</tr>
												<tr>
													<td>
														Mobile
													</td>
													<td>
														<?=$profile->mobile?>
													</td>
												</tr>
												<tr>
													<td>
														Email
													</td>
													<td>
														<?=$profile->email?>
													</td>
												</tr>
												<tr>
													<td>
														Enabled Modules
													</td>
													<td>
														<? if ($profile->module_sti == 1){ echo "Short-Term Insurance<br>";}?>
														<? if ($profile->module_lti == 1){ echo "Long-Term Insurance<br>";}?>
														<? if ($profile->module_hsb == 1){ echo "Health Service Benefits<br>";}?>
														<? if ($profile->module_cis == 1){ echo "Collective Investment Schemes<br>";}?>
													</td>
												</tr>
												</table>
											</div>
											<!--end col-md-8-->
											<div class="col-md-4 profile-info">
												<div class="note note-info">
													<h4 class="block">General Information</h4>
													<p>
														Nothing to display yet.
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
								<div class="row">
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-12 profile-info">
												<table class="table table-striped table-bordered table-advance table-hover">
												<thead>
												<tr>
													<th>
														Full Name
													</th>
													<th>
														Username
													</th>
													<th>
														Accesslevel
													</th>
													<th>
														Status
													</th>
													<th>
														Last Updated
													</th>
												</tr>
												</thead>
												<tbody>
												<? FOREACH($users->result() as $row): ?>
												<tr>
													<td>
														<?=$row->fullname?>
													</td>
													<td>
														<?=$row->username?>
													</td>
													<td>
														<?=$row->useraccesslevel?>
													</td>
													<td>
														<?=$row->userstatus?>
													</td>
													<td>
														<?=$row->updated?>
													</td>
												</tr>
												<? ENDFOREACH; ?>
												</tbody>
												</table>
											</div>
											<!--end col-md-12-->
										</div>
										<!--end row-->										
									</div>
								</div>
							</div>
							<!--end tab-pane-->
							<!--tab_1_3-->
							<div class="tab-pane" id="tab_1_3">
								<div class="row">
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-12 profile-info">
												<table class="table table-striped table-bordered table-advance table-hover">
												<thead>
												<tr>
													<th>
														Full Name
													</th>
													<th>
														Username
													</th>
													<th>
														Accesslevel
													</th>
													<th>
														Status
													</th>
													<th>
														Last Updated
													</th>
												</tr>
												</thead>
												<tbody>
												<? FOREACH($users->result() as $row): ?>
												<tr>
													<td>
														<?=$row->fullname?>
													</td>
													<td>
														<?=$row->username?>
													</td>
													<td>
														<?=$row->useraccesslevel?>
													</td>
													<td>
														<?=$row->userstatus?>
													</td>
													<td>
														<?=$row->updated?>
													</td>
												</tr>
												<? ENDFOREACH; ?>
												</tbody>
												</table>
											</div>
											<!--end col-md-12-->
										</div>
										<!--end row-->
										
									</div>
								</div>
							</div>
							<!--end tab-pane-->
						</div>
					</div>
					<!--END TABS-->
				</div>
			</div>			

			<div class="portlet box light-grey">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-reorder"></i>SMS Settings
					</div>
					<div class="tools">
						<a href="javascript:;" class="collapse">
						</a>
					</div>
				</div>
				<div class="portlet-body flip-scroll">
					<table class="table table-bordered table-striped">
					<tr>
						<td width="20%">
							API_ID
						</td>
						<td>
							<?=$profile->sms_apiid?>
						</td>
					</tr>
					<tr>
						<td>
							Username
						</td>
						<td>
							<?=$profile->sms_username?>
						</td>
					</tr>
					<tr>
						<td>
							Available Credits
						</td>
						<td>
							<?=$sms?>
						</td>
					</tr>
					</table>
				</div>
			</div>
			
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
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
									<a href="<?=site_url("settings/users_edit/".$uid)?>">
										Edit User
									</a>
								</li>
								<? if ($this->session->userdata('accesslevel') == 1){ ?>
								<li>
									<a href="<?=site_url("settings/users_delete/".$uid)?>">
										Delete User
									</a>
								</li>
								<? } ?>
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
							<a href="<?=site_url("settings/users")?>">
								Users
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
														Full Name
													</td>
													<td>
														<?=$user->fullname?>
													</td>
												</tr>
												<tr>
													<td>
														Username
													</td>
													<td>
														<?=$user->username?>
													</td>
												</tr>
												<tr>
													<td>
														Password
													</td>
													<td>
														<a href="<?=site_url("settings/users_reset/".$user->uid)?>">reset password</a>
													</td>
												</tr>
												<tr>
													<td>
														Access Level
													</td>
													<td>
														<? FOREACH($accesslevels->result() as $row):?>
															<? if ($row->oualid == $user->accesslevel){ echo $row->description; } ?>
														<? ENDFOREACH; ?>
													</td>
												</tr>
												<? if ($this->session->userdata['accesslevel'] != 1){ ?>
												<tr>
													<td>
														Linked Company Profile
													</td>
													<td>
														<?=$user->profilename?>
													</td>
												</tr>
												<? } ?>

												<tr>
													<td width="20%">
														Imap_Email
													</td>
													<td>
														<?=$user->imap_email?>
													</td>
												</tr>
												<tr>
													<td>
														Imap Server
													</td>
													<td>
														<?=$user->imap_server?>
													</td>
												</tr>
												<tr>
													<td>
														Imap Default Folder
													</td>
													<td>
														<?=$user->imap_folder?>
													</td>
												</tr>
												</table>
											</div>
											<!--end col-md-8-->
											<div class="col-md-4 profile-info">
												<div class="note note-info">
													<h4 class="block">General Information</h4>
													<p>
														This user is currently active <br>
														It was last updated on <?=$user->updated?>
													</p>
												</div>
											</div>
											<!--end col-md-4-->
										</div>
										<!--end row-->
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--END TABS-->					
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
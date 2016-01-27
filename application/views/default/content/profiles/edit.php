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
						<li>
							<i class="fa fa-cogs"></i>
							<a href="#">
								Settings
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="<?=site_url("settings/profiles")?>">
								Profiles
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">
								Edit
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
					<div class="portlet box light-grey">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-reorder"></i>Edit Profile
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="javascript:;" class="reload">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form method="post" action="<?=site_url("settings/profiles_update") ?>">
								<input type="hidden" name="pid" value="<?=$profile->pid?>">
								<input type="hidden" name="updated" value="<?=$today?>">
								<div class="form-body">
									<div class="form-group">
										<label class="control-label">Profile Name</label>
										<input type="text" class="form-control" placeholder="Enter profile name" name="name" value="<?=$profile->name?>">
									</div>
									<div class="form-group">
										<label class="control-label">FSP Number</label>
										<input type="text" class="form-control" placeholder="Enter fsp number" name="fspnumber" value="<?=$profile->fspnumber?>">
									</div>
									<div class="form-group">
										<label class="control-label">Phone Number</label>
										<input type="text" class="form-control" placeholder="Enter phone number" name="phone" value="<?=$profile->phone?>">
									</div>
									<div class="form-group">
										<label class="control-label">Mobile Number</label>
										<input type="text" class="form-control" placeholder="Enter mobile number" name="mobile" value="<?=$profile->mobile?>">
									</div>
									<div class="form-group">
										<label class="control-label">Email Address</label>
										<input type="text" class="form-control" placeholder="Enter email address" name="email" value="<?=$profile->email?>">
									</div>
									<div class="form-group">
										<label class="control-label">Modules Enabled</label><br>
										<input type="checkbox" name="module_sti" <? if ($profile->module_sti == 1){ echo "checked";}?>  value="1">Short-Term Insurance<br>
										<input type="checkbox" name="module_lti" <? if ($profile->module_lti == 1){ echo "checked";}?>  value="1">Long-Term Insurance<br>
										<input type="checkbox" name="module_hsb" <? if ($profile->module_hsb == 1){ echo "checked";}?>  value="1">Health Service Benefits<br>
										<input type="checkbox" name="module_cis" <? if ($profile->module_cis == 1){ echo "checked";}?>  value="1">Collective Investment Schemes
									</div>
									<div class="form-group">
										<label class="control-label">SMS API_ID</label>
										<input type="text" class="form-control" placeholder="Enter clickatell api id" name="sms_apiid" value="<?=$profile->sms_apiid?>">
									</div>
									<div class="form-group">
										<label class="control-label">SMS Username</label>
										<input type="text" class="form-control" placeholder="Enter clickatell username" name="sms_username" value="<?=$profile->sms_username?>">
									</div>
									<div class="form-group">
										<label class="control-label">SMS Password</label>
										<input type="text" class="form-control" placeholder="Enter clickatell password" name="sms_password" value="<?=$profile->sms_password?>">
									</div>
								</div>
								<div class="form-actions">
									<button type="submit" class="btn green">Submit</button>
									<button type="button" class="btn default" onclick="window.history.back()">Cancel</button>
								</div>
							</form>
							<!-- END FORM-->
						</div>
						
					</div>
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
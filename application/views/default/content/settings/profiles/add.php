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
								Add
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
								<i class="fa fa-reorder"></i>Add Profile
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
							<form method="post" action="<?=site_url("settings/profiles_insert") ?>">
								<input type="hidden" name="updated" value="<?=$today?>">
								<div class="form-body">					
									<div class="form-group">
										<label class="control-label">FSP Name</label>
										<input type="text" class="form-control" placeholder="Enter fsp name" name="name" value="">
									</div>
									<div class="form-group">
										<label class="control-label">FSP Number</label>
										<input type="text" class="form-control" placeholder="Enter fsp number" name="fspnumber" value="">
									</div>
									<div class="form-group">
										<label class="control-label">Office Phone</label>
										<input type="text" class="form-control" placeholder="Enter office phone" name="phone" value="">
									</div>
									<div class="form-group">
										<label class="control-label">Office Email</label>
										<input type="text" class="form-control" placeholder="Enter office email" name="email" value="">
									</div>
									<div class="form-group">
										<label class="control-label">Office Mobile</label>
										<input type="text" class="form-control" placeholder="Enter office mobile" name="mobile" value="">
									</div>
									<div class="form-group">
										<label class="control-label">Modules Available</label><br>
										<input type="checkbox" class="form-control" name="module_sti" value="1">Short-Term Insurance<br>
										<input type="checkbox" name="module_lti" value="1">Long-Term Insurance<br>
										<input type="checkbox" name="module_hsb" value="1">Health Service Benefits<br>
										<input type="checkbox" name="module_cis" value="1">Collective Investment Schemes
									</div>
									<div class="form-group">
										<label class="control-label">SMS API_ID</label>
										<input type="text" class="form-control" placeholder="Enter clickatell api id" name="sms_apiid" value="">
									</div>
									<div class="form-group">
										<label class="control-label">SMS Username</label>
										<input type="text" class="form-control" placeholder="Enter clickatell username" name="sms_username" value="">
									</div>
									<div class="form-group">
										<label class="control-label">SMS Password</label>
										<input type="text" class="form-control" placeholder="Enter clickatell password" name="sms_password" value="">
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
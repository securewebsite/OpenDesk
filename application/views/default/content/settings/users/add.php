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
							<a href="<?=site_url("settings/users")?>">
								Users
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
								<i class="fa fa-reorder"></i>Add User
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
							<form method="post" action="<?=site_url("settings/users_insert") ?>">
							<input type="hidden" name="updated" value="<?=date('Y-m-d');?>">
								<div class="form-body">					
									<div class="form-group">
										<label class="control-label">Full Name</label>
										<input type="text" class="form-control" placeholder="Enter full name" name="fullname" value="">
									</div>
									<div class="form-group">
										<label class="control-label">Username</label>
										<input type="text" class="form-control" placeholder="Enter username" name="username" value="">
									</div>
									<div class="form-group password-strength">
										<label class="control-label">Password</label>
										<input type="text" class="form-control" name="password" placeholder="Type a password" id="password_strength">
									</div>
									<div class="form-group">
										<label class="control-label">Access Level</label>
										<select name="accesslevel" class="form-control">
										<? FOREACH($accesslevels->result() as $row):?>
											<option value="<?=$row->oualid?>"><?=$row->description?></option>
										<? ENDFOREACH; ?>
										</select>
									</div>
									<div class="form-group">
										<label class="control-label">Profile</label>
										<select name="profile" class="form-control">
										<? FOREACH($profiles->result() as $row):?>
											<option value="<?=$row->pid?>"><?=$row->name?></option>
										<? ENDFOREACH; ?>
										</select>
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
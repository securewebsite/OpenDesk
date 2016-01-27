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
							<a href="<?=site_url("settings/groups")?>">
								Groups
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
								<i class="fa fa-reorder"></i>Edit Group
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
							<form method="post" action="<?=site_url("settings/groups_update") ?>">
							<input type="hidden" name="updated" value="<?=date('Y-m-d');?>">
							<input type="hidden" name="pid" value="<?=$this->session->userdata('profile')?>">
							<input type="hidden" name="pgid" value="<?=$pgid?>">
								<div class="form-body">					
									<div class="form-group">
										<label class="control-label">Group Name</label>
										<input type="text" class="form-control" placeholder="Enter group name" name="name" value="<?=$group->name?>">
									</div>
									<div class="form-group">
										<label class="control-label">Subject</label>
										<input type="text" class="form-control" placeholder="Enter brief subject" name="subject" value="<?=$group->subject?>">
									</div>
									<div class="form-group">
										<label class="control-label">Status</label>
										<select name="status" class="form-control">
											<option value="1" <? if ($group->status == 1){echo "selected";}?>>Active</option>
											<option value="0" <? if ($group->status == 2){echo "selected";}?>>Inactive</option>
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
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
							<a href="<?=site_url("settings/users_view/".$uid)?>">
								View
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">
								Task
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
								<i class="fa fa-reorder"></i>Add Task
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
							<form method="post" action="<?=site_url("settings/users_tasks_insert") ?>">
							<input type="hidden" name="uid" value="<?=$uid?>">
							<input type="hidden" name="status" value="1">
								<div class="form-body">					
									<div class="form-group">
										<label class="control-label">Title</label>
										<input type="text" class="form-control" placeholder="Enter title" name="title" value="">
									</div>
									<div class="form-group">
										<label class="control-label">Description</label>
										<input type="text" class="form-control" placeholder="Enter description" name="description" value="">
									</div>
									<div class="form-group">
										<label class="control-label">Reminder Date</label>
										<input class="form-control input-long date-picker" data-date-format="yyyy-mm-dd" size="16" type="text" value="" name="reminderdate"/>
									</div>
									<div class="form-group">
										<label class="control-label">Due Date</label>
										<input class="form-control input-long date-picker" data-date-format="yyyy-mm-dd" size="16" type="text" value="" name="duedate"/>
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
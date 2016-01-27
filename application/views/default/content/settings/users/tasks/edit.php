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
							<a href="<?=site_url("settings/users_view/".$user->uid)?>">
								View
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="">
								Ticket
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
								<i class="fa fa-reorder"></i>Edit Task
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
							<form method="post" action="<?=site_url("settings/users_tasks_update") ?>">
							<input type="hidden" name="utid" value="<?=$utid?>">
							<input type="hidden" name="uid" value="<?=$user->uid?>">
								<div class="form-body">					
									<div class="form-group">
										<label class="control-label">Title</label>
										<input type="text" class="form-control" placeholder="Enter title" name="title" value="<?=$user->title?>">
									</div>
									<div class="form-group">
										<label class="control-label">Description</label>
										<input type="text" class="form-control" placeholder="Enter description" name="description" value="<?=$user->description?>">
									</div>
									<div class="form-group password-strength">
										<label class="control-label">Reminder Date</label>
										<input class="form-control input-long date-picker" data-date-format="yyyy-mm-dd" size="16" type="text" value="<?=$user->reminderdate?>" name="reminderdate"/>
									</div>
									<div class="form-group password-strength">
										<label class="control-label">Due Date</label>
										<input class="form-control input-long date-picker" data-date-format="yyyy-mm-dd" size="16" type="text" value="<?=$user->duedate?>" name="duedate"/>
									</div>
									<div class="form-group">
										<label class="control-label">Status</label>
										<select name="status" class="form-control">
										<? FOREACH($taskstatus->result() as $row):?>
											<option value="<?=$row->outsid?>" <? if ($row->outsid == $user->status){ echo "selected"; } ?>><?=$row->description?></option>
										<? ENDFOREACH; ?>
										</select>
									</div>
									<div class="form-group">
										<label class="control-label">Progress</label>
										<select name="progress" class="form-control">
											<option value="10" <? if ($user->progress == 10){ echo "selected"; } ?>>10%</option>
											<option value="20" <? if ($user->progress == 20){ echo "selected"; } ?>>20%</option>
											<option value="30" <? if ($user->progress == 30){ echo "selected"; } ?>>30%</option>
											<option value="40" <? if ($user->progress == 40){ echo "selected"; } ?>>40%</option>
											<option value="50" <? if ($user->progress == 50){ echo "selected"; } ?>>50%</option>
											<option value="60" <? if ($user->progress == 60){ echo "selected"; } ?>>60%</option>
											<option value="70" <? if ($user->progress == 70){ echo "selected"; } ?>>70%</option>
											<option value="80" <? if ($user->progress == 80){ echo "selected"; } ?>>80%</option>
											<option value="90" <? if ($user->progress == 90){ echo "selected"; } ?>>90%</option>
											<option value="100" <? if ($user->progress == 100){ echo "selected"; } ?>>100%</option>
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
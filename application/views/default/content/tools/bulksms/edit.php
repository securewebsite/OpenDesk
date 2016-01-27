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
							<i class="fa fa-suitcase"></i>
							<a href="#">
								Tools
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="<?=site_url("tools/bulksms")?>">
								Bulk SMS
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
								<i class="fa fa-reorder"></i>Edit Bulk SMS
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
							<form method="post" action="<?=site_url("tools/bulksms_update") ?>">
								<input type="hidden" name="pcid" value="<?=$communication->pcid?>">
								<input type="hidden" name="updated" value="<?=$today?>">
								<input type="hidden" name="type" value="2">
								<input type="hidden" name="mode" value="1">
								<div class="form-body">					
									<div class="form-group">
										<label class="control-label">Subject</label>
										<input type="text" class="form-control" placeholder="Enter bulk sms subject" name="subject" value="<?=$communication->subject?>">
									</div>
								</div>
								<div class="form-body">					
									<div class="form-group">
										<label class="control-label">Content</label>
										<textarea class="form-control" placeholder="Enter bulk sms content" name="content"><?=$communication->content?></textarea>
									</div>
								</div>
								<div class="form-body">		
									<div class="form-group">
										<label class="control-label">Group</label>
										<select name="group" class="form-control">
										<? FOREACH($groups->result() as $row): ?>
											<option value="<?=$row->pgid?>" <? if ($row->pgid == $communication->group) { echo "selected";} ?>><?=$row->name?></option>
										<? ENDFOREACH; ?>
										</select>
									</div>
								</div>
								<div class="form-body">		
									<div class="form-group">
										<label class="control-label">Status</label>
										<select name="status" class="form-control">
										<? FOREACH($communicationstatus->result() as $row): ?>
											<option value="<?=$row->ocsid?>" <? if ($communication->status == $row->ocsid) { echo "selected";} ?>><?=$row->description?></option>
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
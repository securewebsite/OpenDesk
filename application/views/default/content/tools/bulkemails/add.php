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
							<a href="<?=site_url("tools/bulkemails")?>">
								Bulk Emails
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
								<i class="fa fa-reorder"></i>Add Bulk Email
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
							<form method="post" action="<?=site_url("tools/bulkemails_insert") ?>">
								<input type="hidden" name="updated" value="<?=$today?>">
								<input type="hidden" name="type" value="1">
								<input type="hidden" name="mode" value="1">
								<input type="hidden" name="pid" value="<?=$this->session->userdata('profile')?>">
								<div class="form-body">					
									<div class="form-group">
										<label class="control-label">Subject</label>
										<input type="text" class="form-control" placeholder="Enter bulk email subject" name="subject" value="">
									</div>
								</div>
								<div class="form-body">					
									<div class="controls-row">
										<label class="control-label">Content</label>
										<textarea class="wysihtml5 form-control" name="message" rows="8"></textarea>
									</div>
								</div>
								<div class="form-body">		
									<div class="form-group">
										<label class="control-label">Status</label>
										<select name="status" class="form-control">
										<? FOREACH($communicationstatus->result() as $row): ?>
											<option value="<?=$row->ocsid?>"><?=$row->description?></option>
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
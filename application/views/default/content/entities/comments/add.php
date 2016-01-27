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
						<? if ($entity->status == "1"){ ?>
						<li>
							<i class="fa fa-coffee"></i>
							<a href="<?=site_url("entities/leads")?>">
								Leads
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<? } ?>
						<? if ($entity->status == "2"){ ?>
						<li>
							<i class="fa fa-book"></i>
							<a href="<?=site_url("entities/prospects")?>">
								Prospects
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<? } ?>
						<? if ($entity->status == "3"){ ?>
						<li>
							<i class="fa fa-star"></i>
							<a href="<?=site_url("entities/clients")?>">
								Clients
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<? } ?>
						<li>
							<a href="<?=site_url("entities/view/".$entity->eid)?>">
								View
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">
								Comments
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
								<i class="fa fa-reorder"></i>Add Comment
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
							<form method="post" action="<?=site_url("entities/comments_insert") ?>">
								<input type="hidden" name="eid" value="<?=$entity->eid?>">
								<input type="hidden" name="updated" value="<?=$today?>">
								<input type="hidden" name="type" value="4">
								<div class="form-body">
									<div class="form-group">
										<label class="control-label">Brief Description</label>
										<input type="text" name="description" class="form-control">
									</div>
									<div class="form-group">
										<label class="control-label">Content</label>
										<textarea class="form-control" placeholder="" name="content"></textarea>
									</div>
									<div class="form-group">
										<label class="control-label">Owner</label>
										<select name="createdby" class="form-control">
										<? FOREACH($users->result() as $row): ?>
											<option value="<?=$row->uid?>" <? if ($row->uid == $this->session->userdata('uid')){ echo "selected"; }?>><?=$row->fullname?></option>
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
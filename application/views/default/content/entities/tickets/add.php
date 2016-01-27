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
								<i class="fa fa-reorder"></i>Add Ticket
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
							<form method="post" action="<?=site_url("entities/tickets_insert") ?>">
								<input type="hidden" name="eid" value="<?=$entity->eid?>">
								<div class="form-body">
									<div class="form-group">
										<label class="control-label">Type</label>
										<select name="type" class="form-control">
										<? FOREACH($entitytickettypes->result() as $row): ?>
											<option value="<?=$row->oettid?>"><?=$row->description?></option>
										<? ENDFOREACH; ?>
										</select>
									</div>
									<div class="form-group">
										<label class="control-label">Product</label>
										<select name="epid" class="form-control">
										<? FOREACH($products->result() as $row): ?>
											<option value="<?=$row->epid?>"><?=$row->productcategorydescription?> - <?=$row->identifier?> - <?=$row->producttypedescription?></option>
										<? ENDFOREACH; ?>
										</select>
									</div>
									<div class="form-group">
										<label class="control-label">Title</label>
										<input type="text" class="form-control" placeholder="Enter ticket title" name="title">
									</div>
									<div class="form-group">
										<label class="control-label">Description</label>
										<textarea class="form-control" placeholder="Enter ticket description" name="description"></textarea>
									</div>
									<div class="form-group">
										<label class="control-label">Reminder Date</label>
										<input class="form-control input-long date-picker" data-date-format="yyyy-mm-dd" size="16" type="text" value="" name="reminderdate"/>
									</div>
									<div class="form-group">
										<label class="control-label">Due Date</label>
										<input class="form-control input-long date-picker" data-date-format="yyyy-mm-dd" size="16" type="text" value="" name="duedate"/>
									</div>
									<div class="form-group">
										<label class="control-label">Owner</label>
										<select name="ownedby" class="form-control">
										<? FOREACH($users->result() as $row): ?>
											<option value="<?=$row->uid?>" <? if ($row->uid == $this->session->userdata('uid')){ echo "selected"; }?>><?=$row->fullname?></option>
										<? ENDFOREACH; ?>
										</select>
									</div>
									<div class="form-group">
										<label class="control-label">Status</label>
										<select name="status" class="form-control">
										<? FOREACH($entityticketstatus->result() as $row): ?>
											<option value="<?=$row->oetsid?>"><?=$row->description?></option>
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
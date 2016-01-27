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
						<? if ($status == "1"){ ?>
						<li>
							<i class="fa fa-coffee"></i>
							<a href="<?=site_url("entities/leads")?>">
								Leads
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<? } ?>
						<? if ($status == "2"){ ?>
						<li>
							<i class="fa fa-book"></i>
							<a href="<?=site_url("entities/prospects")?>">
								Prospects
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<? } ?>
						<? if ($status == "3"){ ?>
						<li>
							<i class="fa fa-star"></i>
							<a href="<?=site_url("entities/clients")?>">
								Clients
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<? } ?>
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
							<? if ($status == "1"){ ?>
							<div class="caption">
								<i class="fa fa-reorder"></i>Add Lead
							</div>
							<? } ?>
							<? if ($status == "2"){ ?>
							<div class="caption">
								<i class="fa fa-reorder"></i>Add Prospect
							</div>
							<? } ?>
							<? if ($status == "3"){ ?>
							<div class="caption">
								<i class="fa fa-reorder"></i>Add Client
							</div>
							<? } ?>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="javascript:;" class="reload">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form method="post" action="<?=site_url("entities/insert") ?>">
								<div class="form-body">					
								<input type="hidden" name="status" value="<?=$status?>">
								<input type="hidden" name="updated" value="<?=$today?>">
								<input type="hidden" name="profile" value="<?=$this->session->userdata('profile')?>">
								<input type="hidden" name="mode" value="1">
									<div class="form-group">
										<label class="control-label">Full Name</label>
										<input type="text" class="form-control" placeholder="Enter the full name of the entity" name="name" value="">
									</div>
									<div class="form-group">
										<label class="control-label">Owner</label>
										<select name="createdby" class="form-control">
										<? FOREACH($users->result() as $row): ?>
											<option value="<?=$row->uid?>" <? if ($row->uid == $this->session->userdata('uid')){ echo "selected"; }?>><?=$row->fullname?></option>
										<? ENDFOREACH; ?>
										</select>
									</div>
									<div class="form-group">
										<label class="control-label">Type</label>
										<select name="type" class="form-control">
										<? FOREACH($entitytypeoptions->result() as $row): ?>
											<option value="<?=$row->oetid?>"><?=$row->description?></option>
										<? ENDFOREACH; ?>
										</select>
									</div>
									<? if ($status != "3"){ ?>
									<div class="form-group">
										<label>Subscribe to the following groups for communication purposes:</label>
										<? if ($profilegroups->num_rows() > 0){ ?>
										<div class="checkbox-list">
										<? $x = 0; ?>
										<? FOREACH($profilegroups->result() as $row): ?>
											<label class="checkbox-inline">
											<input type="checkbox" id="inlineCheckbox1" value="<?=$row->pgid?>" name="groups[<?=$x?>]"> <?=$row->subject?> </label>
											<? $x++; ?>
										<? ENDFOREACH; ?>
										</div>
										<? }else{ ?>
										<br><i>There are currently no groups to subscribe to.</i>
										<? } ?>
									</div>
									<? } ?>
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
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
							<a href="#">Edit</a>
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
							<? if ($entity->status == "1"){ ?>
							<div class="caption">
								<i class="fa fa-reorder"></i>Edit Lead
							</div>
							<? } ?>
							<? if ($entity->status == "2"){ ?>
							<div class="caption">
								<i class="fa fa-reorder"></i>Edit Prospect
							</div>
							<? } ?>
							<? if ($entity->status == "3"){ ?>
							<div class="caption">
								<i class="fa fa-reorder"></i>Edit Client
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
							<form method="post" action="<?=site_url("entities/update") ?>">
								<input type="hidden" name="eid" value="<?=$entity->eid?>">
								<input type="hidden" name="updated" value="<?=$today?>">
								<input type="hidden" name="profile" value="<?=$this->session->userdata('profile')?>">
								<div class="form-body">
									<div class="form-group">
										<label class="control-label">Full Name</label>
										<input type="text" class="form-control" placeholder="Enter full name" name="name" value="<?=$entity->name?>">
									</div>
									<div class="form-group">
										<label class="control-label">Owner</label>
										<select name="createdby" class="form-control">
										<? FOREACH($users->result() as $row): ?>
											<option value="<?=$row->uid?>" <? if ($row->uid == $entity->createdby){ echo "selected"; }?>><?=$row->fullname?></option>
										<? ENDFOREACH; ?>
										</select>
									</div>
									<div class="form-group">
										<label class="control-label">Type</label>
										<select name="type" class="form-control">
										<? FOREACH($entitytypeoptions->result() as $row): ?>
											<option value="<?=$row->oetid?>" <? if ($row->oetid == $entity->type){ echo "selected"; } ?> ><?=$row->description?></option>
										<? ENDFOREACH; ?>
										</select>
									</div>
									<? if ($entity->mode == "1"){ ?>
									<div class="form-group">
										<label>Group Subscriptions</label>
										<? if ($profilegroups->num_rows() > 0){ ?>
										<div class="checkbox">
										<? $x = 0; ?>
										<? $groups = explode(",",$entity->groups); ?>
										<? FOREACH($profilegroups->result() as $row): ?>
											<label class="checkbox-inline">
											<input type="checkbox" id="inlineCheckbox1" <? if (in_array($row->pgid, $groups)){ echo "checked";}?> value="<?=$row->pgid?>" name="groups[<?=$x?>]"> <?=$row->name?>&nbsp;(<i><?=$row->subject?></i>)</label><br>
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
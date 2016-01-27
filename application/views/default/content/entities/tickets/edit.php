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
						<? if ($ticket->entitystatus == "1"){ ?>
						<li>
							<i class="fa fa-coffee"></i>
							<a href="<?=site_url("entities/leads")?>">
								Leads
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<? } ?>
						<? if ($ticket->entitystatus == "2"){ ?>
						<li>
							<i class="fa fa-book"></i>
							<a href="<?=site_url("entities/prospects")?>">
								Prospects
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<? } ?>
						<? if ($ticket->entitystatus == "3"){ ?>
						<li>
							<i class="fa fa-star"></i>
							<a href="<?=site_url("entities/clients")?>">
								Clients
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<? } ?>
						<li>
							<a href="<?=site_url("entities/view/".$ticket->eid)?>">
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
				<div class="col-md-7">
					<div class="portlet box light-grey">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-reorder"></i>Edit Ticket
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
							<form method="post" action="<?=site_url("entities/tickets_update") ?>">
								<input type="hidden" name="eid" value="<?=$ticket->eid?>">
								<input type="hidden" name="etid" value="<?=$ticket->etid?>">
								<div class="form-body">
									<div class="form-group">
										<label class="control-label">Type</label>
										<select name="type" class="form-control">
										<? FOREACH($entitytickettypes->result() as $row): ?>
											<option value="<?=$row->oettid?>" <? if ($row->oettid == $ticket->type){ echo "selected";}?>><?=$row->description?></option>
										<? ENDFOREACH; ?>
										</select>
									</div>
									<div class="form-group">
										<label class="control-label">Title</label>
										<input type="text" class="form-control" placeholder="Enter ticket title" name="title" value="<?=$ticket->title?>">
									</div>
									<div class="form-group">
										<label class="control-label">Description</label>
										<textarea class="form-control" placeholder="" name="description"><?=$ticket->description?></textarea>
									</div>
									<div class="form-group">
										<label class="control-label">Reminder Date</label>
										<input class="form-control input-long date-picker" data-date-format="yyyy-mm-dd" size="16" type="text" value="<?=$ticket->reminderdate?>" name="reminderdate"/>
									</div>
									<div class="form-group">
										<label class="control-label">Due Date</label>
										<input class="form-control input-long date-picker" data-date-format="yyyy-mm-dd" size="16" type="text" value="<?=$ticket->duedate?>" name="duedate"/>
									</div>
									<div class="form-group">
										<label class="control-label">Owner</label>
										<select name="ownedby" class="form-control">
										<? FOREACH($users->result() as $row): ?>
											<option value="<?=$row->uid?>" <? if ($row->uid == $ticket->ownedby){ echo "selected"; }?>><?=$row->fullname?></option>
										<? ENDFOREACH; ?>
										</select>
									</div>
									<div class="form-group">
										<label class="control-label">Status</label>
										<select name="status" class="form-control">
										<? FOREACH($entityticketstatus->result() as $row): ?>
											<option value="<?=$row->oetsid?>"  <? if ($row->oetsid == $ticket->status){ echo "selected";}?>><?=$row->description?></option>
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
				<div class="col-md-5 col-sm-4">
					<div class="portlet box light-grey">
					
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-reorder"></i> Product Overview
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="javascript:;" class="reload">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<div class="form-body">
								<div class="form-group">
									<label class="control-label">Product Category</label>
									<input type="text" class="form-control" placeholder="" value="<?=$product->productcategorydescription?>">
								</div>
								<div class="form-group">
									<label class="control-label">Product Type</label>
									<input type="text" class="form-control" placeholder="" value="<?=$product->producttypedescription?>">
								</div>
								<div class="form-group">
									<label class="control-label">Product Provider</label>
									<input type="text" class="form-control" placeholder="" value="<?=$product->productproviderdescription?>">
								</div>
								<div class="form-group">
									<label class="control-label">Product Identifier</label>
									<input type="text" class="form-control" placeholder="" value="<?=$product->identifier?>">
								</div>
								<div class="form-group">
									<label class="control-label">Product Issue Date</label>
									<input type="text" class="form-control" placeholder="" value="<?=$product->issuedate?>">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row profile">
				<div class="col-md-12 col-sm-4">
					<div class="portlet box light-grey">
					
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-reorder"></i> Notes
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="javascript:;" class="reload">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<form method="post" action="<?=site_url("entities/tickets_notes_insert") ?>">
							<input type="hidden" name="eid" value="<?=$ticket->eid?>">
							<input type="hidden" name="etid" value="<?=$ticket->etid?>">
							<input type="hidden" name="updated" value="<?=date('Y-m-d')?>">
							<div class="form-body">
								<? FOREACH($entityticketnotes->result() as $note): ?>
								<div class="note note-info">
									<div class=""><?=$note->description?></div>
									<div class="right"><?=$note->updated?></div>
								</div>
								<? ENDFOREACH; ?>
								<div class="form-group">
									<textarea class="form-control" placeholder="" name="description"></textarea>
								</div>
							</div>
						<div class="form-actions">
							<button type="submit" class="btn blue">Add Note</button>
						</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
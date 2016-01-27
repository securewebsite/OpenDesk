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
							<a href="#">
								View
							</a>
						</li>
						<li class="btn-group">
							<button type="button" class="btn default dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
							<span>
								Actions
							</span>
							<i class="fa fa-angle-down"></i>
							</button>
							<ul class="dropdown-menu pull-right" role="menu">
								<li>
									<a href="<?=site_url("entities/contacts_add/".$eid)?>">
										Add Contact
									</a>
								</li>
								<li>
									<a href="<?=site_url("entities/tickets_add/".$eid)?>">
										Add Ticket
									</a>
								</li>
								<? if (($entity->status != "1")){ ?>
								<li>
									<a href="<?=site_url("entities/products_add/".$eid)?>">
										Add Product
									</a>
								</li>
								<? } ?>
								<li>
									<a href="<?=site_url("entities/comments_add/".$eid)?>">
										Add Comment
									</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="<?=site_url("entities/sms_add/".$eid)?>">
										Send SMS
									</a>
								</li>
								<li class="divider"></li>
								<? if ($entity->status == "1"){ ?>
								<li>
									<a href="<?=site_url("entities/edit/".$eid)?>">
										Edit Lead
									</a>
								</li>
								<li>
									<a href="<?=site_url("entities/delete/".$eid."/leads")?>">
										Delete Lead
									</a>
								</li>
								<? } ?>
								<? if ($entity->status == "2"){ ?>
								<li>
									<a href="<?=site_url("entities/edit/".$eid)?>">
										Edit Prospect
									</a>
								</li>
								<li>
									<a href="<?=site_url("entities/delete/".$eid."/prospects")?>">
										Delete Prospect
									</a>
								</li>
								<? } ?>
								<? if ($entity->status == "3"){ ?>
								<li>
									<a href="<?=site_url("entities/edit/".$eid)?>">
										Edit Client
									</a>
								</li>
								<li>
									<a href="<?=site_url("entities/delete/".$eid."/clients")?>">
										Delete Client
									</a>
								</li>
								<? } ?>
								<li class="dropdown-submenu pull-left">
									<a href="javascript:;">
										Change Status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									</a>
									<ul class="dropdown-menu pull-left" style="">
										<li>
											<? FOREACH($entitystatus->result() as $status): ?>
											<a href="<?=site_url("entities/status/".$eid."/".$status->oesid)?>">
												 <?=$status->description?>
											</a>
											<? ENDFOREACH; ?>
										</li>
									</ul>
								</li>
								<li class="dropdown-submenu pull-left">
									<a href="javascript:;">
										Change Mode&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									</a>
									<ul class="dropdown-menu pull-left" style="">
										<li>
											<? FOREACH($entitymodes->result() as $mode): ?>
											<a href="<?=site_url("entities/mode/".$eid."/".$mode->oemid)?>">
												 <?=$mode->description?>
											</a>
											<? ENDFOREACH; ?>
										</li>
									</ul>
								</li>
								<li class="dropdown-submenu pull-left">
									<a href="javascript:;">
										Set Primary Contact&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									</a>
									<ul class="dropdown-menu pull-left" style="">
										<li>
											<? FOREACH($contacts->result() as $row): ?>
											<a href="<?=site_url("entities/primary/".$row->eid."/".$row->ecid)?>">
												 <?=$row->firstname?> <?=$row->lastname?>
											</a>
											<? ENDFOREACH; ?>
											<a href="<?=site_url("entities/contacts_add/".$eid)?>">
												 New Contact
											</a>
										</li>
									</ul>
								</li>
							</ul>
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
							<i class="fa fa-reorder"></i>Personal Details
						</div>
						<div class="tools">
							<a href="javascript:;" class="collapse">
							</a>
						</div>
					</div>
					<div class="portlet-body">
						<!--BEGIN TABS-->
						<div class="tabbable tabbable-custom tabbable-full-width">
							<ul class="nav nav-tabs">
								<li class="active">
									<a href="#tab_1_1" data-toggle="tab">
										 Overview
									</a>
								</li>
								<li>
									<a href="#tab_1_2" data-toggle="tab">
										 Contacts
									</a>
								</li>
								<li>
									<a href="#tab_1_3" data-toggle="tab">
										 Tickets
									</a>
								</li>
								<li>
									<a href="#tab_1_4" data-toggle="tab">
										 Products
									</a>
								</li>
								<li>
									<a href="#tab_1_5" data-toggle="tab">
										 Comments
									</a>
								</li>
							</ul>
							<div class="tab-content">
								<!--tab_1_1-->
								<div class="tab-pane active" id="tab_1_1">
									<div class="row">
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-8 profile-info">
													<table class="table table-bordered table-striped">
													<tr>
														<td>
															Full Name
														</td>
														<td>
															<?=$entity->name?>
														</td>
													</tr>
													<tr>
														<td>
															Type
														</td>
														<td>
															<?=$entity->entitytype?>
														</td>
													</tr>
													<tr>
														<td>
															Status
														</td>
														<td>
															<?=$entity->entitystatus?>
														</td>
													</tr>
													<tr>
														<td>
															Mode
														</td>
														<td>
															<?=$entity->entitymode?>
														</td>
													</tr>
													<tr>
														<td>
															Created By
														</td>
														<td>
															<?=$entity->entityowner?>
														</td>
													</tr>
													<? if ($entity->mode == "1"){ ?>
													<tr>
														<td>
															Group Subscriptions
														</td>
														<td>
															<? 
																$groups = explode(",",$entity->groups);
																FOR ($x=0; $x < count($groups); $x++){
 																	FOREACH($profilegroups->result() as $group):
																		if ($group->pgid == $groups[$x]){
																			echo $group->name."<br>";
																		}
																	ENDFOREACH;
																}
															?>
														</td>
													</tr>
													<tr>
														<td>
															OpenDesk Profile
														</td>
														<td>
															No profile linked
														</td>
													</tr>
													<? } ?>
													</table>
												</div>
												<!--end col-md-8-->
												<div class="col-md-4 profile-info ">
													<? if (isset($entity->primarycontact) && ($entity->primarycontact != 0)) { ?>
													<div class="note note-info">
														<h4 class="block">Primary Contact</h4>														
														<p>
															<strong>Name: </strong><?=$entity->firstname?>&nbsp;<?=$entity->lastname?> <br>
															<strong>Mobile: </strong><?=$entity->mobile?><br>
															<strong>Home: </strong><?=$entity->homephone?><br>
															<strong>Office: </strong><?=$entity->officephone?><br>
															<strong>Email: </strong><?=$entity->email?><br>
															<strong>Address: </strong><?=$entity->physicaladdress?><br>
														</p>
													</div>
													<? }else{ ?>
													<div class="note note-warning">
														<h4 class="block">Primary Contact Not Set</h4>														
														<p>
															You have not yet set a primary contact for this entity. Each entity is required to have at least one primary contact where all communication and data is linked to.<br><br>
															<a href="<?=site_url("entities/contacts_add/".$eid)?>">Click here to create a new contact.</a>
														</p>
													</div>
													<? } ?>
												</div>
												<!--end col-md-4-->
											</div>
											<!--end row-->										
										</div>
									</div>
								</div>
								<!--end tab-pane-->
								<!--tab_1_2-->
								<div class="tab-pane" id="tab_1_2">
									<div class="row profile-account">
										<div class="col-md-12">
											<div class="portlet-body">
												<table class="table table-striped table-bordered table-advance table-hover">
												<thead>
												<tr>
													<th class="table-checkbox">
														<input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes"/>
													</th>
													<th>
														Firstname
													</th>
													<th>
														Lastname
													</th>
													<th>
														Email
													</th>
													<th>
														Mobile
													</th>
													<th>
														FICA
													</th>
													<th>
														Actions
													</th>
												</tr>
												</thead>
												<tbody>
												<? FOREACH($contacts->result() as $row): ?>
												<tr>
													<td>
														<input type="checkbox" class="checkboxes" value="1"/>
													</td>
													<td>
														<a href="<?=site_url("entities/contacts_edit/".$row->eid."/".$row->ecid)?>"><?=$row->firstname?></a>
													</td>
													<td>
														<?=$row->lastname?>
													</td>
													<td>
														<?=$row->email?>
													</td>
													<td>
														<?=$row->mobile?>
													</td>
													<td>
														<? if (($row->fica_id == 1) && ($row->fica_poa == 1) && ($row->fica_sars == 1)){ echo "Complete"; }else{ echo "Incomplete";} ?>
													</td>
													<td>
														<a href="<?=site_url("entities/contacts_edit/".$row->eid."/".$row->ecid)?>" class="btn default btn-xs green-stripe">
															 Edit
														</a>
														<a href="<?=site_url("entities/contacts_delete/".$row->eid."/".$row->ecid)?>" class="btn default btn-xs red-stripe">
															 Delete
														</a>
													</td>
												</tr>
												<? ENDFOREACH; ?>
												</tbody>
												</table>
											</div>
										</div>
										<!--end col-md-12-->
									</div>
								</div>
								<!--end tab-pane-->
								<!--tab_1_3-->
								<div class="tab-pane" id="tab_1_3">
									<div class="row profile-account">
										<div class="col-md-12">
											<div class="portlet-body">
												<table class="table table-striped table-bordered table-advance table-hover">
												<thead>
												<tr>
													<th class="table-checkbox">
														<input type="checkbox" class="group-checkable" data-set="#sample_3 .checkboxes"/>
													</th>
													<th>
														Type
													</th>
													<th>
														Product
													</th>
													<th>
														Title
													</th>
													<th>
														Due Date
													</th>
													<th>
														Status
													</th>
													<th>
														Owner
													</th>
													<th>
														Actions
													</th>
												</tr>
												</thead>
												<tbody>
												<? FOREACH($tickets->result() as $row): ?>
												<tr>
													<td>
														<input type="checkbox" class="checkboxes" value="1"/>
													</td>
													<td>
														<a href="<?=site_url("entities/tickets_edit/".$row->eid."/".$row->etid)?>"><?=$row->tickettype?></a>
													</td>
													<td>
														<?=$row->identifier?>
													</td>
													<td>
														<?=$row->title?>
													</td>
													<td>
														<?=$row->duedate?>
													</td>
													<td>
														<?=$row->ticketstatus?>
													</td>
													<td>
														<?=$row->ticketowner?>
													</td>
													<td>
														<a href="<?=site_url("entities/tickets_edit/".$row->eid."/".$row->etid)?>" class="btn default btn-xs green-stripe">
															 Edit
														</a>
														<a href="<?=site_url("entities/tickets_delete/".$row->eid."/".$row->etid)?>" class="btn default btn-xs red-stripe">
															 Delete
														</a>
													</td>
												</tr>
												<? ENDFOREACH; ?>
												</tbody>
												</table>
											</div>
										</div>
										<!--end col-md-12-->
									</div>
								</div>
								<!--end tab-pane-->
								<!--tab_1_4-->
								<div class="tab-pane" id="tab_1_4">
									<div class="row profile-account">
										<div class="col-md-12">
											<div class="portlet-body">
												<table class="table table-striped table-bordered table-advance table-hover">
												<thead>
												<tr>
													<th class="table-checkbox">
														<input type="checkbox" class="group-checkable" data-set="#sample_3 .checkboxes"/>
													</th>
													<th>
														Category
													</th>
													<th>
														Provider
													</th>
													<th>
														Type
													</th>
													<th>
														Identifier
													</th>
													<th>
														Status
													</th>
													<th>
														Actions
													</th>
												</tr>
												</thead>
												<tbody>
												<? FOREACH($products->result() as $row): ?>
												<tr>
													<td>
														<input type="checkbox" class="checkboxes" value="1"/>
													</td>
													<td>
														<a href="<?=site_url("entities/products_edit/".$row->eid."/".$row->epid)?>"><?=$row->productcategorydescription?></a>
													</td>
													<td>
														<?=$row->productproviderdescription?>
													</td>
													<td>
														<?=$row->producttypedescription?>
													</td>
													<td>
														<?=$row->identifier?>
													</td>
													<td>
														<?=$row->productstatusdescription?>
													</td>
													<td>
														<a href="<?=site_url("entities/products_edit/".$row->eid."/".$row->epid)?>" class="btn default btn-xs green-stripe">
															 Edit
														</a>
														<a href="<?=site_url("entities/products_edit/".$row->eid."/".$row->epid)?>" class="btn default btn-xs red-stripe">
															 Delete
														</a>
													</td>
												</tr>
												<? ENDFOREACH; ?>
												</tbody>
												</table>
											</div>
										</div>
										<!--end col-md-12-->
									</div>
								</div>
								<!--end tab-pane-->
								<!--tab_1_5-->
								<div class="tab-pane" id="tab_1_5">
									<div class="row profile-account">
										<div class="col-md-12">
											<div class="portlet-body">
												<table class="table table-striped table-bordered table-advance table-hover">
												<thead>
												<tr>
													<th class="table-checkbox">
														<input type="checkbox" class="group-checkable" data-set="#sample_3 .checkboxes"/>
													</th>
													<th>
														Type
													</th>
													<th>
														Description
													</th>
													<th>
														Created By
													</th>
													<th>
														Updated
													</th>
												</tr>
												</thead>
												<tbody>
												<? FOREACH($comments->result() as $row): ?>
												<tr>
													<td>
														<input type="checkbox" class="checkboxes" value="1"/>
													</td>
													<td>
														<?=$row->commenttypedescription?>
													</td>
													<td>
														<a href="<?=site_url("entities/comments_edit/".$row->eid."/".$row->ecid)?>"><?=$row->description?>
													</td>
													<td>
														<?=$row->entityowner?>
													</td>
													<td>
														<?=$row->updated?>
													</td>
												</tr>
												<? ENDFOREACH; ?>
												</tbody>
												</table>
											</div>
										</div>
									</div>
									<!--end col-md-12-->
								</div>
								<!--end tab-pane-->
							</div>
						</div>
						<!--END TABS-->
					</div>
				</div>
				
				<div class="portlet box  light-grey">
					<div class="portlet-title">
						<div class="caption">
							<i class="fa fa-reorder"></i>Activity Timeline
						</div>
						<div class="tools">
							<a href="javascript:;" class="collapse">
							</a>
						</div>
					</div>
					<div class="portlet-body flip-scroll">
						<div class="scroller" style="height: 300px;" data-always-visible="1" data-rail-visible="0">
							<ul class="feeds">
								<? FOREACH($activities->result() as $row): ?>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-info">
													<i class="fa fa-<?=$row->activitytypedescription?>"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 <?=$row->description?> - <i><?=$row->userfullname?></i>
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date" style="white-space: nowrap">
											 <?=$row->updated?>
										</div>
									</div>
								</li>
								<? ENDFOREACH; ?>
							</ul>
						</div>
					</div>
				</div>	
			</div>
			<!-- END PAGE CONTENT-->
			</div>
		</div>
	</div>
	<!-- END CONTENT -->
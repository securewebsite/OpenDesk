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
						<li class="btn-group">
							<button type="button" class="btn default dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
							<span>
								Actions
							</span>
							<i class="fa fa-angle-down"></i>
							</button>
							<ul class="dropdown-menu pull-right" role="menu">
								<li>
									<a href="<?=site_url("settings/users_tasks_add/".$uid)?>">
										New Task
									</a>
								</li>
								<li class="divider">
								<li>
									<a href="<?=site_url("settings/users_edit/".$uid)?>">
										Edit User
									</a>
								</li>
								<? if ($this->session->userdata('accesslevel') == 1){ ?>
								<li>
									<a href="<?=site_url("settings/users_delete/".$uid)?>">
										Delete User
									</a>
								</li>
								<? } ?>
							</ul>
						</li>
						<li>
							<i class="fa fa-cogs"></i>
							<a href="#">
								Accounts
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">
								Overview
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
									 My Entities
								</a>
							</li>
							<li>
								<a href="#tab_1_3" data-toggle="tab">
									 My Tasks
								</a>
							</li>
							<li>
								<a href="#tab_1_4" data-toggle="tab">
									 My Tickets
								</a>
							</li>
							<li>
								<a href="#tab_1_5" data-toggle="tab">
									 My Emails
								</a>
							</li>
						</ul>
						<div class="tab-content">
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
														<?=$user->fullname?>
													</td>
												</tr>
												<tr>
													<td>
														Username
													</td>
													<td>
														<?=$user->username?>
													</td>
												</tr>
												<tr>
													<td>
														Password
													</td>
													<td>
														<a href="<?=site_url("accounts/users_reset/".$user->uid)?>">reset password</a>
													</td>
												</tr>
												<tr>
													<td>
														Access Level
													</td>
													<td>
														<? FOREACH($accesslevels->result() as $row):?>
															<? if ($row->oualid == $user->accesslevel){ echo $row->description; } ?>
														<? ENDFOREACH; ?>
													</td>
												</tr>
												<? if ($this->session->userdata['accesslevel'] != 1){ ?>
												<tr>
													<td>
														Linked Company Profile
													</td>
													<td>
														<?=$user->profilename?>
													</td>
												</tr>
												<? } ?>

												<tr>
													<td width="20%">
														Imap_Email
													</td>
													<td>
														<?=$user->imap_email?>
													</td>
												</tr>
												<tr>
													<td>
														Imap Server
													</td>
													<td>
														<?=$user->imap_server?>
													</td>
												</tr>
												<tr>
													<td>
														Imap Default Folder
													</td>
													<td>
														<?=$user->imap_folder?>
													</td>
												</tr>
												</table>
											</div>
											<!--end col-md-8-->
											<div class="col-md-4 profile-info">
												<div class="note note-info">
													<h4 class="block">General Information</h4>
													<p>
														This user is currently active <br>
														It was last updated on <?=$user->updated?>
													</p>
												</div>
											</div>
											<!--end col-md-4-->
										</div>
										<!--end row-->
									</div>
								</div>
							</div>
							<!--tab_1_2--entities---->
							<div class="tab-pane" id="tab_1_2">
								<div class="row profile-account">
									<div class="col-md-12">
										<div class="portlet-body">
											<table class="table table-striped table-bordered table-hover">
											<thead>
											<tr>
												<th class="table-checkbox">
													<input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes"/>
												</th>
												<th>
													 Name
												</th>
												<th>
													 Type
												</th>
												<th>
													 Status
												</th>
												<th>
													 Mode
												</th>
												<th>
													 Actions
												</th>
											</tr>
											</thead>
											<tbody>
											<? FOREACH($entities->result() as $row): ?>
											<tr class="odd gradeX">
												<td>
													<input type="checkbox" class="checkboxes" value="1"/>
												</td>
												<td>
													 <a href="<?=site_url("entities/view/".$row->eid)?>"><?=$row->name?></a>
												</td>
												<td>
													 <?=$row->entitytype?>
												</td>
												<td>
													 <?=$row->entitystatus?>
												</td>
												<td>
													<?=$row->entitymode?>
												</td>
												<td>
													<a href="<?=site_url("entities/view/".$row->eid)?>" class="btn default btn-xs green-stripe">
														 View
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
							<!--tab_1_3--tasks---->
							<div class="tab-pane" id="tab_1_3">
								<div class="row profile-account">
									<div class="col-md-12">
										<div class="portlet-body">
											<table class="table table-striped table-bordered table-advance table-hover">
											<thead>
											<tr>
												<th class="table-checkbox">
													<input type="checkbox" class="group-checkable" data-set="#sample_5 .checkboxes"/>
												</th>
												<th>
													 Title
												</th>
												<th>
													 Description
												</th>
												<th>
													 Reminder Date
												</th>
												<th>
													Due Date
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
											<? FOREACH($tasks->result() as $row): ?>
											<tr class="odd gradeX">
												<td>
													<input type="checkbox" class="checkboxes" value="1"/>
												</td>
												<td>
													 <?=$row->title?>
												</td>
												<td>
													 <?=$row->description?>
												</td>
												<td>
													 <?=$row->reminderdate?>
												</td>
												<td>
													 <?=$row->duedate?>
												</td>
												<td>
													 <?=$row->usertaskstatus?>
												</td>
												<td>
													<a href="<?=site_url("settings/users_tasks_edit/".$row->utid)?>" class="btn default btn-xs blue-stripe">
														 Edit
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
							<!--tab_1_4---tickets-->
							<div class="tab-pane" id="tab_1_4">
								<div class="row profile-account">
									<div class="col-md-12">
										<div class="portlet-body">
											<table class="table table-striped table-bordered table-advance table-hover">
											<thead>
											<tr>
												<th class="table-checkbox">
													<input type="checkbox" class="group-checkable" data-set="#sample_6 .checkboxes"/>
												</th>
												<th>
													 Title
												</th>
												<th>
													Entity
												</th>
												<th>
													Type
												</th>
												<th>
													 Reminder Date
												</th>
												<th>
													Due Date
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
											<? FOREACH($tickets->result() as $row): ?>
											<tr class="odd gradeX">
												<td>
													<input type="checkbox" class="checkboxes" value="1"/>
												</td>
												<td>
													 <a href="<?=site_url("entities/tickets_edit/".$row->eid."/".$row->etid)?>"><?=$row->title?></a>
												</td>
												<td>
													 <a href="<?=site_url("entities/view/".$row->eid)?>"><?=$row->name?></a>
												</td>
												<td>
													 <?=$row->entitytickettype?>
												</td>
												<td>
													 <?=$row->reminderdate?>
												</td>
												<td>
													 <?=$row->duedate?>
												</td>
												<td>
													 <?=$row->entityticketstatus?>
												</td>
												<td>
													<a href="<?=site_url("entities/tickets_edit/".$row->eid."/".$row->etid)?>" class="btn default btn-xs blue-stripe">
														 Edit
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
														<input type="checkbox" class="group-checkable" data-set="#sample_7 .checkboxes"/>
													</th>
													<th>
														 <i class="fa fa-star-o"></i>
													</th>
													<th>
														 From
													</th>
													<th>
														 Subject
													</th>
													<th>
														Attachments
													</th>
													<th>
														Date
													</th>
												</tr>
												</thead>
												<tbody>
												<? foreach ($messages as $message){ ?>
												<tr <? if($message->Unseen == "U"){?> class="unread" <? } ?> data-messageid="1">
													<td class="inbox-small-cells">
														<input type="checkbox" class="mail-checkbox">
													</td>
													<td class="inbox-small-cells">
														<i class="fa fa-star-o"></i>
													</td>
													<td class="view-message hidden-xs">
														 <a href="<?=site_url("accounts/emails_view/".trim($message->Msgno)."/".trim($folder))?>"><?=$message->fromaddress ;?></a>
													</td>
													<td class="view-message ">
														 <? if (isset($message->subject)){ echo $message->subject; }else{ echo "no subject";}?>
													</td>
													<td class="view-message inbox-small-cells">
														<!--<i class="fa fa-paperclip"></i>-->
													</td>
													<td class="view-message text-right">
														 <?=date("j M Y", strtotime($message->date));?>
													</td>
												</tr>
												<? } ?>
												</tbody>
											</table>
										</div>
									</div>
									<!--end col-md-12-->
								</div>
							</div>
							<!--end tab-pane-->
						</div>
					</div>
					<!--END TABS-->					
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
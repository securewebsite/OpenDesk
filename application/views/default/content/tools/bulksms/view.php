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
								<? if ($this->session->userdata('sms_api') != ""){ ?>
								<li>
									<a href="<?=site_url("tools/bulksms_send/".$pcid)?>">
										Send Bulk SMS
									</a>
								</li>
								<li class="divider">
								<? } ?>
								<li>
									<a href="<?=site_url("tools/bulksms_edit/".$pcid)?>">
										Edit Bulk SMS
									</a>
								</li>
							</ul>
						</li>
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
								View
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
									 Subscribers
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
														Subject
													</td>
													<td>
														<?=$communication->subject?>
													</td>
												</tr>
												<tr>
													<td>
														Content
													</td>
													<td>
														<?=$communication->content?>
													</td>
												</tr>
												<tr>
													<td>
														Type
													</td>
													<td>
														<?=$communication->type?>
													</td>
												</tr>
												<tr>
													<td>
														Status
													</td>
													<td>
														<?=$communication->status?>
													</td>
												</tr>
												<tr>
													<td>
														Mode
													</td>
													<td>
														<?=$communication->mode?>
													</td>
												</tr>
												</table>
											</div>
											<!--end col-md-8-->
											<div class="col-md-4 profile-info">
												<div class="note note-warning">
													<h4 class="block">Important Information</h4>
													<p>
														<? if ($this->session->userdata('sms_api') != ""){ ?>
															The bulk sms will be sent using the following sms settings: <br><br>
															Username: <?=$this->session->userdata('sms_username');?> <br>
															Password: <?=$this->session->userdata('sms_password');?> <br>
															API ID: <?=$this->session->userdata('sms_api');?> <br>
															<strong>Clickatell SMS <?=$sms?></strong>
														<? }else{ ?>
															Please go to www.clickatell.com to register a developer account. This information is required before you can continue.
														<? } ?>
													</p>
												</div>
											</div>
											<!--end col-md-4-->
										</div>
										<!--end row-->
									</div>
								</div>
							</div>
							<!--tab_1_2-->
							<div class="tab-pane" id="tab_1_2">
								<div class="row profile-account">
									<div class="col-md-12">
									<div class="portlet-body">
										<table class="table table-striped table-bordered table-advance table-hover">
										<thead>
										<tr>
											<th class="table-checkbox">
												<input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes"/>
											</th>
											<th>
												 Entity
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
												Primary Contact
											</th>
										</tr>
										</thead>
										<tbody>
										<? FOREACH($subscribers->result() as $row): ?>
										<tr class="odd gradeX">
											<td>
												<input type="checkbox" class="checkboxes" value="1"/>
											</td>
											<td>
												 <?=$row->name?>
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
												 <?=$row->firstname?>&nbsp;<?=$row->lastname?> - <?=$row->mobile?>
											</td>
										</tr>
										<? ENDFOREACH; ?>
										</tbody>
										</table>
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
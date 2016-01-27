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
									<a href="<?=site_url("tools/bulkemails_send/".$pcid)?>">
										Send Bulk Email
									</a>
								</li>
								<li class="divider">
								<li>
									<a href="<?=site_url("tools/bulkemails_edit/".$pcid)?>">
										Edit Bulk Email
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
							<a href="<?=site_url("tools/bulkemails")?>">
								Bulk Emails
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">
								Preview
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
											<div class="col-md-12 profile-info">
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
												</table>
											</div>
											<!--end col-md-12-->
										</div>
										<!--end row-->
										<div class="row">
											<div class="col-md-12 profile-info">
												<h4>Please Note</h4>
												<p>
													The bulk email will be sent using the email server settings provided. OpenDesk cannot be held responsible for undelivered mail to recipients due to mail server security or spam rules.
													Although OpenDesk does not queue  email individually, the mail server specified may impose delivery restraints in order to manage processing priority and/or throttle bandwidth usage.
												</p>
											</div>
										</div>
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
												 Title
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
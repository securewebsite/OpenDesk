	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<h3 class="page-title">
					Search Results <small>"<?=$searchstring?>"</small>
					</h3>
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
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
									<a href="#">
										Advanced Search
									</a>
								</li>
							</ul>
						</li>
						<li>
							<i class="fa fa-home"></i>
							<a href="<?=site_url("dashboard")?>">
								Dashboard
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">
								Search Results
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
									 Leads
								</a>
							</li>
							<li>
								<a href="#tab_1_2" data-toggle="tab">
									 Prospects
								</a>
							</li>
							<li>
								<a href="#tab_1_3" data-toggle="tab">
									 Clients
								</a>
							</li>
						</ul>
						<div class="tab-content">
							<!--tab_1_1-->
							<div class="tab-pane active" id="tab_1_1">
								<div class="row">
									<div class="col-md-12">
										<div class="portlet-body">
											<table class="table table-striped table-bordered table-hover" id="sample_1">
											<thead>
											<tr>
												<th class="table-checkbox">
													<input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes"/>
												</th>
												<th>
													 Name
												</th>
												<th>
													 Status
												</th>
												<th>
													 Type
												</th>
												<th>
													 Updated
												</th>
												<th>
													 Actions
												</th>
											</tr>
											</thead>
											<tbody>
											<? FOREACH($leads->result() as $row): ?>
											<tr class="odd gradeX">
												<td>
													<input type="checkbox" class="checkboxes" value="1"/>
												</td>
												<td>
													 <?=$row->name?>
												</td>
												<td>
													 <?=$row->entitystatus?>
												</td>
												<td>
													 <?=$row->entitytype?>
												</td>
												<td>
													<?=$row->updated?>
												</td>
												<td>
													<a href="<?=site_url("entities/view/".$row->eid)?>" class="btn default btn-xs blue-stripe">
														 View
													</a>
												</td>
											</tr>
											<? ENDFOREACH; ?>
											</tbody>
											</table>
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
											<table class="table table-striped table-bordered table-hover" id="sample_2">
											<thead>
											<tr>
												<th class="table-checkbox">
													<input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes"/>
												</th>
												<th>
													 Name
												</th>
												<th>
													 Status
												</th>
												<th>
													 Type
												</th>
												<th>
													 Updated
												</th>
												<th>
													 Actions
												</th>
											</tr>
											</thead>
											<tbody>
											<? FOREACH($prospects->result() as $row): ?>
											<tr class="odd gradeX">
												<td>
													<input type="checkbox" class="checkboxes" value="1"/>
												</td>
												<td>
													 <?=$row->name?>
												</td>
												<td>
													 <?=$row->entitystatus?>
												</td>
												<td>
													 <?=$row->entitytype?>
												</td>
												<td>
													<?=$row->updated?>
												</td>
												<td>
													<a href="<?=site_url("entities/view/".$row->eid)?>" class="btn default btn-xs blue-stripe">
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
							<!--tab_1_3-->
							<div class="tab-pane" id="tab_1_3">
								<div class="row profile-account">
									<div class="col-md-12">
										<div class="portlet-body">
											<table class="table table-striped table-bordered table-hover" id="sample_3">
											<thead>
											<tr>
												<th class="table-checkbox">
													<input type="checkbox" class="group-checkable" data-set="#sample_3 .checkboxes"/>
												</th>
												<th>
													 Name
												</th>
												<th>
													 Status
												</th>
												<th>
													 Type
												</th>
												<th>
													 Updated
												</th>
												<th>
													 Actions
												</th>
											</tr>
											</thead>
											<tbody>
											<? FOREACH($clients->result() as $row): ?>
											<tr class="odd gradeX">
												<td>
													<input type="checkbox" class="checkboxes" value="1"/>
												</td>
												<td>
													 <?=$row->name?>
												</td>
												<td>
													 <?=$row->entitystatus?>
												</td>
												<td>
													 <?=$row->entitytype?>
												</td>
												<td>
													<?=$row->updated?>
												</td>
												<td>
													<a href="<?=site_url("entities/view/".$row->eid)?>" class="btn default btn-xs blue-stripe">
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
							<!--end tab-pane-->
							</div>
						</div>
					<!--END TABS-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			</div>
		</div>
	</div>
	<!-- END CONTENT -->
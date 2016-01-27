<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					<?=$title?><small><?=$subtitle?></small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
					<? if ($this->session->userdata('accesslevel') == 1){ ?>
						<li class="btn-group">
							<button type="button" class="btn default dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
							<span>
								Actions
							</span>
							<i class="fa fa-angle-down"></i>
							</button>
							<ul class="dropdown-menu pull-right" role="menu">
								<li>
									<a href="<?=site_url("settings/profiles_add")?>">
										New Profile
									</a>
								</li>
							</ul>
						</li>
						<? } ?>
						<li>
							<i class="fa fa-sitemap"></i>
							<a href="#">
								Profiles
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">
								List
							</a>
							<i></i>
						</li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box light-grey">
						<div class="portlet-title">
							<div class="caption">
								All Profiles
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="javascript:;" class="reload">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_2">
							<thead>
							<tr>
								<th class="table-checkbox">
									<input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes"/>
								</th>
								<th>
									 Profile Name
								</th>
								<th>
									 FSP Number
								</th>
								<th>
									 Phone
								</th>
								<th>
									Email
								</th>
								<th>
									 Actions
								</th>
							</tr>
							</thead>
							<tbody>
                            <? FOREACH($query->result() as $row): ?>
							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									 <a href="<?=site_url("profiles/view/".$row->pid)?>"><?=$row->name?></a>
								</td>
								<td>
									 <?=$row->fspnumber?>
								</td>
								<td>
									<?=$row->phone?>
								</td>
								<td>
									<?=$row->email?>
								</td>
								<td>
									<? if ($this->session->userdata('accesslevel') == 1){ ?>
                                    <a href="<?=site_url("profiles/view/".$row->pid)?>" class="btn default btn-xs green-stripe">
                                         View
                                    </a>
									<? } ?>
								</td>
							</tr>
                            <? ENDFOREACH; ?>
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
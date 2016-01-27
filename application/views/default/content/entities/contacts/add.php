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
						<i class="fa fa-coffee"></i>
						<li>
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
								Contact
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
								<i class="fa fa-reorder"></i>Add Contact
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
							<form method="post" action="<?=site_url("entities/contacts_insert") ?>">
								<input type="hidden" name="eid" value="<?=$entity->eid?>">
								<input type="hidden" name="updated" value="<?=$today?>">
								<div class="form-body">
									<div class="form-group">
										<label class="control-label">First Name</label>
										<input type="text" class="form-control" placeholder="Enter first name" name="firstname" value="">
									</div>
									<div class="form-group">
										<label class="control-label">Last Name</label>
										<input type="text" class="form-control" placeholder="Enter last name" name="lastname" value="">
									</div>
									<div class="form-group">
										<label class="control-label">Prefferred Name</label>
										<input type="text" class="form-control" placeholder="Enter preferred name" name="preferredname" value="">
									</div>
									<div class="form-group">
										<label class="control-label">ID Number</label>
										<input type="text" class="form-control" placeholder="Enter ID number" name="idnumber" value="">
									</div>
									<div class="form-group">
										<label class="control-label">Date of Birth</label>
										<input class="form-control input-long date-picker" data-date-format="yyyy-mm-dd" size="16" type="text" value="" name="dateofbirth"/>
									</div>
									<div class="form-group">
										<label class="control-label">Physical Address</label>
										<input type="text" class="form-control" placeholder="Enter physical address" name="physicaladdress" value="">
									</div>
									<div class="form-group">
										<label class="control-label">Postal Address</label>
										<input type="text" class="form-control" placeholder="Enter postal address" name="postaladdress" value="">
									</div>
									<div class="form-group">
										<label class="control-label">Home Phone</label>
										<input type="text" class="form-control" placeholder="Enter home phone" name="homephone" value="">
									</div>
									<div class="form-group">
										<label class="control-label">Office Phone</label>
										<input type="text" class="form-control" placeholder="Enter office phone" name="officephone" value="">
									</div>
									<div class="form-group">
										<label class="control-label">Mobile Number</label>
										<input type="text" class="form-control" placeholder="Enter mobile number" name="mobile" value="">
									</div>
									<div class="form-group">
										<label class="control-label">Email Address</label>
										<input type="text" class="form-control" placeholder="Enter email address" name="email" value="">
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
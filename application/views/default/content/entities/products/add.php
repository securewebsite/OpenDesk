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
							<a href="<?=site_url("entities/view/".$entity->eid)?>">
								View
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">
								Products
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
								<i class="fa fa-reorder"></i>Add Product
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
							<form role="form" method="post" action="<?=site_url("entities/products_insert") ?>">
								<input type="hidden" name="eid" value="<?=$entity->eid?>">
								<input type="hidden" name="updated" value="<?=$today?>">
								<input type="hidden" name="status" value="1">
								<div class="form-body">
									<div class="form-group">
										<label class="control-label">Category</label>
										<select name="category" class="form-control" >
										<option value="" selected>--Select Product Category--</option>
										<? FOREACH($productcategories->result() as $row): ?>
											<option value="<?=$row->oepcid?>"><?=$row->description?></option>
										<? ENDFOREACH; ?>
										</select>
									</div>
									<div class="form-group">
										<label class="control-label">Provider</label>
										<select name="provider" class="form-control" >
										<option value="" selected>--Select Product Provider--</option>
										<? FOREACH($productproviders->result() as $row): ?>
											<option value="<?=$row->oepid?>"><?=$row->description?></option>
										<? ENDFOREACH; ?>
										</select>
									</div>
									<div class="form-group">
										<label class="control-label">Type</label>
										<select name="type" class="form-control" >
										<option value="" selected>--Select Product Type--</option>
										<? FOREACH($producttypes->result() as $row): ?>
											<option value="<?=$row->oeptid?>"><?=$row->description?></option>
										<? ENDFOREACH; ?>
										</select>
									</div>
									<div class="form-group">
										<label class="control-label">Account Name / Policy Number / Unique Identifie</label>
										<input type="text" class="form-control" placeholder="Enter unique number" name="identifier" value="">
									</div>
									<div class="form-group">
										<label class="control-label">Date Issued</label>
										<input class="form-control input-long date-picker" placeholder="Enter date issue" data-date-format="yyyy-mm-dd" size="16" type="text" value="" name="issuedate"/>
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
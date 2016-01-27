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
								Product
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
								<i class="fa fa-reorder"></i>Edit Product
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
							<form method="post" action="<?=site_url("entities/products_update") ?>">
								<input type="hidden" name="eid" value="<?=$product->eid?>">
								<input type="hidden" name="epid" value="<?=$product->epid?>">
								<input type="hidden" name="updated" value="<?=$today?>">
								<div class="form-body">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class="control-label">Provider</label>
												<select name="provider" class="form-control">
												<? FOREACH($productproviders->result() as $row): ?>
													<option value="<?=$row->oepid?>" <? if ($product->provider == $row->oepid){ echo "selected"; }?> ><?=$row->description?></option>
												<? ENDFOREACH; ?>
												</select>
											</div>
											<div class="form-group">
												<label class="control-label">Type</label>
												<select name="type" class="form-control" >
												<option value="" selected>--Select Product Type--</option>
												<? FOREACH($producttypes->result() as $row): ?>
													<option value="<?=$row->oeptid?>" <? if ($product->type == $row->oeptid){ echo "selected"; }?> ><?=$row->description?></option>
												<? ENDFOREACH; ?>
												</select>
											</div>
											<div class="form-group">
												<label class="control-label">Unique Number</label>
												<input type="text" class="form-control" placeholder="Enter unique number" name="identifier" value="<?=$product->identifier?>">
											</div>
											<div class="form-group">
												<label class="control-label">Date Issued</label>
												<input class="form-control input-long date-picker" placeholder="Enter date issue" data-date-format="yyyy-mm-dd" size="16" type="text" value="<?=$product->issuedate?>" name="issuedate"/>
											</div>
											<div class="form-group">
												<label class="control-label">Status</label>
												<select name="status" class="form-control">
													<option value="0" <? if ($product->status == 0){ echo "selected"; }?>>Inactive</option>
													<option value="1" <? if ($product->status == 1){ echo "selected"; }?>>Active</option>
												</select>
											</div>
										</div>
									</div>
									<h4 class="form-section">FAIS Compliance Requirements</h4>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class="control-label">FAIS Financial Needs Analysis</label>
												<select name="fais_fna" class="form-control">
													<option value="0" <? if ($product->fais_fna == 0){ echo "selected"; }?>>No</option>
													<option value="1" <? if ($product->fais_fna == 1){ echo "selected"; }?>>Yes</option>
												</select>
											</div>
											<div class="form-group">
												<label class="control-label">FAIS Record Of Advice</label>
												<select name="fais_roa" class="form-control">
													<option value="0" <? if ($product->fais_roa == 0){ echo "selected"; }?>>No</option>
													<option value="1" <? if ($product->fais_roa == 1){ echo "selected"; }?>>Yes</option>
												</select>
											</div>
											<div class="form-group">
												<label class="control-label">FAIS Service Level Agreement</label>
												<select name="fais_sla" class="form-control">
													<option value="0" <? if ($product->fais_sla == 0){ echo "selected"; }?>>No</option>
													<option value="1" <? if ($product->fais_sla == 1){ echo "selected"; }?>>Yes</option>
												</select>
											</div>
										</div>
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
<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					<?=IMAP_EMAIL?><small><?=$subtitle?></small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
					<? if ($this->session->userdata('accesslevel') <= 2){ ?>
						<li class="btn-group">
							<button type="button" class="btn default dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
							<span>
								Actions
							</span>
							<i class="fa fa-angle-down"></i>
							</button>
							<ul class="dropdown-menu pull-right" role="menu">
								<li>
									<a href="<?=site_url("emails/compose")?>">
										Compose New Email
									</a>
								</li>
							</ul>
						</li>
						<? } ?>
						<li>
							<i class="fa fa-envelope"></i>
							<a href="#">
								Emails
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
				<!--
				<div class="col-md-2">
					<ul class="inbox-nav margin-bottom-10">
						<li class="inbox <? if ($folder == NULL){ echo "active";}?>">
							<a href="<?=site_url("tools/useremails")?>" class="btn" data-title="Inbox">
							Inbox(<?=$mailboxinfo->Unread?>) </a>
							<b></b>
						</li>
						<li class="sent <? if ($folder == 1){ echo "active";}?>">
							<a class="btn" href="<?=site_url("tools/useremails/1")?>" data-title="Sent">
							Sent </a>
							<b></b>
						</li>
						<li class="draft <? if ($folder == 2){ echo "active";}?>">
							<a class="btn" href="<?=site_url("tools/useremails/2")?>" data-title="Draft">
							Drafts </a>
							<b></b>
						</li>
						<li class="trash <? if ($folder == 3){ echo "active";}?>">
							<a class="btn" href="<?=site_url("tools/useremails/3")?>" data-title="Trash">
							Trash </a>
							<b></b>
						</li>
					</ul>
				</div>
				-->
				<div class="col-md-12">
					<div class="portlet box light-grey">
						<div class="portlet-title">
							<div class="caption">
								<?=$title?>
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
									 <a href="<?=site_url("emails/view/".trim($message->Msgno)."/".trim($folder))?>"><?=$message->fromaddress ;?></a>
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
				</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
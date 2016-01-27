<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					<? if (isset($msgoverview[0]->subject)){ echo $msgoverview[0]->subject; }else{ echo "no subject";}?>&nbsp;
					<small><?=date("l j F Y", strtotime($msgoverview[0]->date));?></small>
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
									<a href="javascript:;">Mark as UnRead </a>
								</li>
								<li>
									<a href="javascript:;">Mark as Spam </a>
								</li>
								<li>
									<a href="<?=site_url("tools/useremails_reply/".$msgno."/1")?>">Reply to Sender </a>
								</li>
								<li>
									<a href="javascript:;">Reply to All </a>
								</li>
								<? if ($eid != NULL){ ?>
								<li class="divider"></li>
								<li>
									<a href="<?=site_url("accounts/emails_archive/".$msgno)?>">Archive Message</a>
								</li>
								<li>
									<a href="<?=site_url("entities/contacts_add/".$eid)?>">Create Contact</a>
								</li>
								<li>
									<a href="<?=site_url("entities/tickets_add/".$eid)?>">Create Ticket</a>
								</li>
								<? } ?>
								<li class="divider"></li>
								<li>
									<a href="<?=site_url("emails/delete/".$msgno)?>">Delete Message</a>
								</li>
							</ul>
						</li>
						<? } ?>
						<li>
							<i class="fa fa-suitcase"></i>
							<a href="<?=site_url("emails/inbox")?>">
								Emails
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">
								<?=$msgoverview[0]->from?> &lt;<?=$msgheader[0]->mailbox."@".$msgheader[0]->host;?>&gt;
							</a>
							<i></i>
						</li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row inbox">
				<div class="col-md-12">
					<div class="inbox-content">
						<? if (isset($msgbody)){ echo $msgbody; }else{ echo "no message";}?>						
					</div>
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
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
									<a href="<?=site_url("tools/bulkemails_add")?>">
										Compose New Email
									</a>
								</li>
							</ul>
						</li>
						<? } ?>
						<li>
							<i class="fa fa-suitcase"></i>
							<a href="#">
								Tools
							</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">
								User Emails
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
				<div class="col-md-2">
					<ul class="inbox-nav margin-bottom-10">
						<li class="inbox active">
							<a href="<?=site_url("tools/useremails")?>" class="btn" data-title="Inbox">
							Inbox(<?=$mailboxinfo->Unread?>) </a>
							<b></b>
						</li>
						<li class="sent">
							<a class="btn" href="<?=site_url("tools/useremails")?>" data-title="Sent">
							Sent </a>
							<b></b>
						</li>
						<li class="draft">
							<a class="btn" href="<?=site_url("tools/useremails")?>" data-title="Draft">
							Draft </a>
							<b></b>
						</li>
						<li class="trash">
							<a class="btn" href="<?=site_url("tools/useremails")?>" data-title="Trash">
							Trash </a>
							<b></b>
						</li>
					</ul>
				</div>
				<div class="col-md-10">
					<form class="inbox-compose form-horizontal" id="fileupload" action="<?=site_url("tools/useremails_send")?>" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="msgno" value="<?=$msgno?>">
						<input type="hidden" name="subject" value="<?=$msgoverview[0]->subject?>">
						<div class="inbox-compose-btn">
							<button class="btn blue"><i class="fa fa-check"></i>Send</button>
							<button class="btn">Discard</button>
							<button class="btn">Draft</button>
						</div>
						<div class="inbox-form-group mail-to">
							<label class="control-label">To:</label>
							<div class="controls controls-to">
								<input type="text" class="form-control" name="toaddress" value="<?=$msgoverview[0]->from?>">
								<span class="inbox-cc-bcc">
								<span class="inbox-cc " style="display:none">
								Cc </span>
								<span class="inbox-bcc">
								Bcc </span>
								</span>
							</div>
						</div>
						<div class="inbox-form-group input-cc">
							<a href="javascript:;" class="close"></a>
							<label class="control-label">Cc:</label>
							<div class="controls controls-cc">
								<input type="text" name="ccaddress" class="form-control" value="">
							</div>
						</div>
						<div class="inbox-form-group input-bcc display-hide">
							<a href="javascript:;" class="close">
							</a>
							<label class="control-label">Bcc:</label>
							<div class="controls controls-bcc">
								<input type="text" name="bcc" class="form-control">
							</div>
						</div>
						<div class="inbox-form-group">
							<label class="control-label">Subject:</label>
							<div class="controls">
								<input type="text" class="form-control" name="subject" value="<?=$msgoverview[0]->subject?>">
							</div>
						</div>
						<div class="inbox-form-group">
							<div class="controls-row">
								<textarea class="inbox-editor inbox-wysihtml5 form-control" name="message" rows="8"></textarea>
								<!--blockquote content for reply message, the inner html of reply_email_content_body element will be appended into wysiwyg body. Please refer Inbox.js loadReply() function. -->
								<div id="reply_email_content_body" class="">
									<blockquote>
										 <?=$msgbody?>
									</blockquote>
								</div>
							</div>
						</div>
						<div class="inbox-compose-attachment">
							<!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
							<span class="btn green fileinput-button">
							<i class="fa fa-plus"></i>
							<span>
							Add files... </span>
							<input type="file" name="files[]" multiple>
							</span>
							<!-- The table listing the files available for upload/download -->
							<table role="presentation" class="table table-striped margin-top-10">
							<tbody class="files">
							</tbody>
							</table>
						</div>
						<script id="template-upload" type="text/x-tmpl">
					{% for (var i=0, file; file=o.files[i]; i++) { %}
						<tr class="template-upload fade">
							<td class="name" width="30%"><span>{%=file.name%}</span></td>
							<td class="size" width="40%"><span>{%=o.formatFileSize(file.size)%}</span></td>
							{% if (file.error) { %}
								<td class="error" width="20%" colspan="2"><span class="label label-danger">Error</span> {%=file.error%}</td>
							{% } else if (o.files.valid && !i) { %}
								<td>
									<p class="size">{%=o.formatFileSize(file.size)%}</p>
									<div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
									   <div class="progress-bar progress-bar-success" style="width:0%;"></div>
									   </div>
								</td>
							{% } else { %}
								<td colspan="2"></td>
							{% } %}
							<td class="cancel" width="10%" align="right">{% if (!i) { %}
								<button class="btn btn-sm red cancel">
										   <i class="fa fa-ban"></i>
										   <span>Cancel</span>
									   </button>
							{% } %}</td>
						</tr>
					{% } %}
						</script>
						<!-- The template to display files available for download -->
						<script id="template-download" type="text/x-tmpl">
					{% for (var i=0, file; file=o.files[i]; i++) { %}
						<tr class="template-download fade">
							{% if (file.error) { %}
								<td class="name" width="30%"><span>{%=file.name%}</span></td>
								<td class="size" width="40%"><span>{%=o.formatFileSize(file.size)%}</span></td>
								<td class="error" width="30%" colspan="2"><span class="label label-danger">Error</span> {%=file.error%}</td>
							{% } else { %}
								<td class="name" width="30%">
									<a href="{%=file.url%}" title="{%=file.name%}" data-gallery="{%=file.thumbnail_url&&'gallery'%}" download="{%=file.name%}">{%=file.name%}</a>
								</td>
								<td class="size" width="40%"><span>{%=o.formatFileSize(file.size)%}</span></td>
								<td colspan="2"></td>
							{% } %}
							<td class="delete" width="10%" align="right">
								<button class="btn default btn-sm" data-type="{%=file.delete_type%}" data-url="{%=file.delete_url%}"{% if (file.delete_with_credentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
									<i class="fa fa-times"></i>
								</button>
							</td>
						</tr>
					{% } %}
						</script>
						<div class="inbox-compose-btn">
							<button class="btn blue"><i class="fa fa-check"></i>Send</button>
							<button class="btn">Discard</button>
							<button class="btn">Draft</button>
						</div>
					</form>
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
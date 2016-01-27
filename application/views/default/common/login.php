<!-- BEGIN BODY -->
<body class="login">
<br><br><br><br><br><br>
<!-- BEGIN LOGO -->
<div class="logo">
	<a href="index.html">
		<img src="<?=base_url('assets/default/img/logo-big.png')?>" alt=""/>
	</a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
	<!-- BEGIN LOGIN FORM -->
	<form class="login-form" action="<?=site_url('authentication/login')?>" method="post">
		<h3 class="form-title">User Authentication</h3>
		<? if(isset($message)){ ?>
		<div class="alert alert-danger display">
			<button class="close" data-close="alert"></button>
			<span>
				<?=$message?>
			</span>
		</div>
		<? } ?>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Enter Username</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="login_username"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Enter Password</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="login_password"/>
			</div>
		</div>
		<div class="form-actions">
			<button type="submit" class="btn green pull-right">
			Login <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
	</form>
	<!-- END LOGIN FORM -->
</div>
<!-- END LOGIN -->
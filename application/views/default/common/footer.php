</div>
<!-- END CONTAINER -->
<? if ($this->session->userdata('uid') != ""){ ?>
<!-- BEGIN FOOTER -->
<div class="footer">
	<div class="footer-tools">
		<span class="go-top">
			<i class="fa fa-angle-up"></i>
		</span>
	</div>
</div>
<!-- END FOOTER -->
<? } ?>

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
	<script src="<?=base_url('assets/default/plugins/respond.min.js')?>"></script>
	<script src="<?=base_url('assets/default/plugins/excanvas.min.js')?>"></script> 
<![endif]-->
<script src="<?=base_url('assets/default/plugins/jquery-1.10.2.min.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/plugins/jquery-migrate-1.2.1.min.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/plugins/bootstrap/js/bootstrap.min.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/plugins/bootstrap/js/bootstrap2-typeahead.min.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/plugins/jquery-slimscroll/jquery.slimscroll.min.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/plugins/jquery.blockui.min.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/plugins/jquery.cokie.min.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/plugins/uniform/jquery.uniform.min.js')?>" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?=base_url('assets/default/plugins/jquery-validation/dist/jquery.validate.min.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/plugins/select2/select2.min.js')?>" type="text/javascript"></script>
<!--
<script src="<?=base_url('assets/default/plugins/jqvmap/jqvmap/jquery.vmap.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/plugins/flot/jquery.flot.min.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/plugins/flot/jquery.flot.resize.min.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/plugins/flot/jquery.flot.categories.min.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/plugins/jquery.pulsate.min.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/plugins/gritter/js/jquery.gritter.js')?>" type="text/javascript"></script>
-->
<!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
<script src="<?=base_url('assets/default/plugins/fullcalendar/fullcalendar/fullcalendar.min.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/plugins/jquery.sparkline.min.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/plugins/data-tables/jquery.dataTables.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/plugins/data-tables/DT_bootstrap.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/plugins/fuelux/js/spinner.min.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/plugins/jquery.input-ip-address-control-1.0.min.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/plugins/jquery.pwstrength.bootstrap/src/pwstrength.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/plugins/typeahead/handlebars.min.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/plugins/typeahead/typeahead.min.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/plugins/nouislider/jquery.nouislider.js')?>"></script>
<script src="<?=base_url('assets/default/plugins/fancybox/source/jquery.fancybox.pack.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/plugins/bootstrap-touchspin/bootstrap.touchspin.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/plugins/bootstrap-daterangepicker/moment.min.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/plugins/bootstrap-daterangepicker/daterangepicker.js')?>" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<!-- BEGIN CORE SCRIPTS -->
<script src="<?=base_url('assets/default/scripts/core/app.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/scripts/custom/index.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/scripts/custom/login.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/scripts/custom/table-managed.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/scripts/custom/components-pickers.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/scripts/custom/components-form-tools.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/scripts/custom/components-nouisliders.js')?>"></script>
<script src="<?=base_url('assets/default/scripts/custom/inbox.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/default/scripts/custom/components-editors.js')?>"></script>

<!-- END CORE SCRIPTS -->

<script>
jQuery(document).ready(function() {    
	App.init(); // initlayout and core plugins
	TableManaged.init();
	//Index.initCalendar();
    ComponentsFormTools.init();
	ComponentsPickers.init();
	//ComponentsNoUiSliders.init();
	//Inbox.init();
	ComponentsEditors.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
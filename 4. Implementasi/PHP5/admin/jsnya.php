<!-- /Switcher -->
<!-- Load site level scripts -->

<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> -->

<script type="text/javascript" src="<?php echo $base_url.'assets/js/jquery-1.10.2.min.js';?>"></script> 							<!-- Load jQuery -->
<script type="text/javascript" src="<?php echo $base_url.'assets/js/jqueryui-1.10.3.min.js';?>"></script> 							<!-- Load jQueryUI -->
<script type="text/javascript" src="<?php echo $base_url.'assets/js/bootstrap.min.js';?>"></script> 								<!-- Load Bootstrap -->
<script type="text/javascript" src="<?php echo $base_url.'assets/js/enquire.min.js';?>"></script> 									<!-- Load Enquire -->

<script type="text/javascript" src="<?php echo $base_url.'assets/plugins/velocityjs/velocity.min.js';?>"></script>					<!-- Load Velocity for Animated Content -->
<script type="text/javascript" src="<?php echo $base_url.'assets/plugins/velocityjs/velocity.ui.min.js';?>"></script>

<script type="text/javascript" src="<?php echo $base_url.'assets/plugins/wijets/wijets.js';?>"></script>     						<!-- Wijet -->

<script type="text/javascript" src="<?php echo $base_url.'assets/plugins/codeprettifier/prettify.js';?>"></script> 				<!-- Code Prettifier  -->
<script type="text/javascript" src="<?php echo $base_url.'assets/plugins/bootstrap-switch/bootstrap-switch.js';?>"></script> 		<!-- Swith/Toggle Button -->

<script type="text/javascript" src="<?php echo $base_url.'assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js';?>"></script>  <!-- Bootstrap Tabdrop -->

<script type="text/javascript" src="<?php echo $base_url.'assets/plugins/iCheck/icheck.min.js';?>"></script>     					<!-- iCheck -->

<script type="text/javascript" src="<?php echo $base_url.'assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js';?>"></script> <!-- nano scroller -->

<script type="text/javascript" src="<?php echo $base_url.'assets/js/application.js';?>"></script>
<script type="text/javascript" src="<?php echo $base_url.'assets/demo/demo.js';?>"></script>
<script type="text/javascript" src="<?php echo $base_url.'assets/demo/demo-datatables.js';?>"></script>
<script type="text/javascript" src="<?php echo $base_url.'assets/demo/demo-switcher.js';?>"></script>
<script type="text/javascript" src="<?php echo $base_url.'assets/plugins/datatables/jquery.dataTables.js';?>"></script>
<script type="text/javascript" src="<?php echo $base_url.'assets/plugins/datatables/dataTables.bootstrap.js';?>"></script>
<script type="text/javascript" src="<?php echo $base_url.'assets/plugins/form-inputmask/jquery.inputmask.bundle.min.js';?>"></script>  	<!-- Input Masks Plugin -->

<script type="text/javascript" src="<?php echo $base_url.'assets/demo/demo-mask.js';?>"></script>
<script>
// See Docs
	window.ParsleyConfig = {
    	  successClass: 'has-success'
		, errorClass: 'has-error'
		, errorElem: '<span></span>'
		, errorsWrapper: '<span class="help-block"></span>'
		, errorTemplate: "<div></div>"
		, classHandler: function(el) {
    		return el.$element.closest(".form-group");
		}
	};
</script>
<script type="text/javascript" src="<?php echo $base_url.'assets/plugins/form-parsley/parsley.js';?>"></script>  					<!-- Validate Plugin / Parsley -->
<script type="text/javascript" src="<?php echo $base_url.'assets/demo/demo-formvalidation.js';?>"></script>
<script>
	$(document).ready(function(){
		$('#demo3').multipleSelect({
			placeholder: "Pilih Mahasiswa",
			filter:true
		});
	});
</script>
<script>
	$(document).ready(function(){
		$('#demokls').multipleSelect({
			placeholder: "Pilih Kelas",
			filter:true
		});
	});
</script>
<script type="text/javascript" src="<?php echo $base_url.'assets/js/jquery.multiple.select.js';?>"></script>
<script type="text/javascript" src="<?php echo $base_url.'assets/plugins/switchery/switchery.js';?>"></script>     								<!-- Switchery -->
<script type="text/javascript" src="<?php echo $base_url.'assets/plugins/jquery-chained/jquery.chained.min.js';?>"></script> 						<!-- Chained Select Boxes -->

<script type="text/javascript" src="<?php echo $base_url.'assets/plugins/jquery-mousewheel/jquery.mousewheel.min.js';?>"></script> <!-- MouseWheel Support -->

<script type="text/javascript" src="<?php echo $base_url.'assets/demo/demo-formcomponents.js';?>"></script>
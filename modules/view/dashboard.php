<?php
	$data = new koneksi();
?>
<section class="wrapper site-min-height">
	<div class="row">
		<div class="col-lg-12"><div class="text-center"><img src="./img/logo-jateng.png" /></div></div>
	</div>
	<div class="row">
		<div class="col-lg-12"><div class="text-center"><img src="./img/jateng-gayeng.png" /></div></div>
	</div>
</section>

<script>
$(document).ready(function(){
	$('#main-content').css({
		'margin-left': '0px'
	});
	$('#sidebar').css({
		'margin-left': '-210px'
	});
	$('#sidebar > ul').hide();
	$("#container").addClass("sidebar-closed");
});
</script>
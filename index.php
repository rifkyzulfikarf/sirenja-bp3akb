<?php 
	session_start();
	date_default_timezone_set('Asia/Jakarta');
	set_time_limit(0);

	if (isset($_SESSION['en-data']) && isset($_SESSION['en-nama'])) {

		require 'modules/blob/blob.php';

		if (isset($_REQUEST['mod']) && $_REQUEST['mod'] != "" && !(is_null($_REQUEST['mod']))) {
			if (file_exists(d_url($_REQUEST['mod']))) {				
				require d_url($_REQUEST['mod']) ;
			} else {
				require d_url("Ylc5a2RXeGxjeTkyYVdWM0x6UXdOQzV3YUhBPQ==") ;
			}
		} elseif (isset($_REQUEST['aksi']) && $_REQUEST['aksi'] != ""  && !(is_null($_REQUEST['aksi']))) {
			if( file_exists( d_url($_REQUEST['aksi']) ) ){
				require d_url($_REQUEST['aksi']);
			}
		} else {
?>
			<!DOCTYPE html>
			<html lang="en">
				<?php 
					include('modules/view/head.php');
				?>
				<body>
					<section id="container" class="">
						<?php
							include('modules/view/header.php');
							include('modules/view/sidebar.php');
						?>
						
						<!--main content start-->
						<section id="main-content">
							<?php 
								if (isset($_REQUEST['no_spa']) && $_REQUEST['no_spa']<>"" && file_exists( d_url($_REQUEST['no_spa']))) {
									include d_url($_REQUEST['no_spa']);
								} else {
									include('modules/view/dashboard.php');
								}
							?>
						</section>
						<!--main content end-->
						
						<?php include('modules/view/footer.php'); ?>
					</section>
					
					<!-- js placed at the end of the document so the pages load faster -->
					<script src="js/bootstrap.min.js"></script>
					<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
					<script src="js/jquery.scrollTo.min.js"></script>
					<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
					<script src="js/respond.min.js" ></script>
					<script src="js/jquery.sparkline.js" type="text/javascript"></script>
					<script src="js/jquery.number.min.js" type="text/javascript"></script>
					<script src="js/jquery.print.js" type="text/javascript"></script>
					<script src="js/chosen.jquery.min.js" type="text/javascript"></script>
					<script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
					<script type="text/javascript" language="javascript" src="assets/advanced-datatable/extras/dataTables.fnReloadAjax.js"></script>
					<script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
					<script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
					<script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
					<script src="js/dropzone.js" ></script>

					<!--common script for all pages-->
					<script src="js/common-scripts.js"></script>
				</body>
			</html>
<?php
		}
	} else {
		session_destroy();
		echo "<script> window.location = './modules/view/login/'; </script>  Sorry, it seems you're lost. Just  <a href='./modules/view/login/'><button> click HERE to Go BACK </button></a>";
	}
?>
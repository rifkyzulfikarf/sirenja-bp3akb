<?php
	$data = new koneksi();
?>
<section class="wrapper site-min-height">
	<div class="row">
		<div class="col-sm-12">
			<section class="panel">
				<header class="panel-heading">
					Realisasi Capaian Indikator
				</header>
				<div class="panel-body">
					<form class="form-horizontal" role="form" id="frm-realisasi" action="#" method="POST">
						<input type="hidden" id="apa" name="apa" value="simpan-realisasi">
						<div class="form-group">
							<label for="cmbTahun" class="col-lg-2 col-sm-2 control-label">Tahun</label>
							<div class="col-lg-10">
								<select class="form-control chosen" id="cmbTahun" name="cmbTahun">
									<?php
										if ($query = $data->runQuery("SELECT `id`, `tahun` FROM `tahun` WHERE `hapus` = '0';")) {
											while ($rs = $query->fetch_array()) {
												echo "<option value='".$rs['id']."'>".$rs['tahun']."</option>";
											}
										}
									?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="cmbTriwulan" class="col-lg-2 col-sm-2 control-label">Triwulan</label>
							<div class="col-lg-10">
								<select class="form-control chosen" id="cmbTriwulan" name="cmbTriwulan">
									<option value="1">I</option>
									<option value="2">II</option>
									<option value="3">III</option>
									<option value="4">IV</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="cmbIndikator" class="col-lg-2 col-sm-2 control-label">Indikator Program</label>
							<div class="col-lg-10">
								<select class="form-control chosen" id="cmbIndikator" name="cmbIndikator">
									<?php
										if ($query = $data->runQuery("SELECT `id`, `indikator` FROM `indikator` WHERE `hapus` = '0';")) {
											while ($rs = $query->fetch_array()) {
												echo "<option value='".$rs['id']."'>".$rs['indikator']."</option>";
											}
										}
									?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="cmbTarget" class="col-lg-2 col-sm-2 control-label">Target</label>
							<div class="col-lg-10">
								<select class="form-control chosen" id="cmbTarget" name="cmbTarget">
									<?php
										if ($query = $data->runQuery("SELECT `id`, `target` FROM `target` WHERE `hapus` = '0';")) {
											while ($rs = $query->fetch_array()) {
												echo "<option value='".$rs['id']."'>".$rs['target']."</option>";
											}
										}
									?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="cmbTargetAkhir" class="col-lg-2 col-sm-2 control-label">Target Akhir</label>
							<div class="col-lg-10">
								<select class="form-control chosen" id="cmbTargetAkhir" name="cmbTargetAkhir">
									<?php
										if ($query = $data->runQuery("SELECT `id`, `target_akhir` FROM `target_akhir` WHERE `hapus` = '0';")) {
											while ($rs = $query->fetch_array()) {
												echo "<option value='".$rs['id']."'>".$rs['target_akhir']."</option>";
											}
										}
									?>
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label for="txtRealisasiSebelumnya" class="col-lg-2 col-sm-2 control-label">Realisasi Th Sebelumnya</label>
							<div class="col-lg-10">
								<textarea class="form-control" id="txtRealisasiSebelumnya" name="txtRealisasiSebelumnya" placeholder="Realisasi Tahun Sebelumnya"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="txtRealisasiTarget" class="col-lg-2 col-sm-2 control-label">Realisasi Target</label>
							<div class="col-lg-10">
								<textarea class="form-control" id="txtRealisasiTarget" name="txtRealisasiTarget" placeholder="Realisasi Target"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="txtPersentase" class="col-lg-2 col-sm-2 control-label">Persentase Ketercapaian</label>
							<div class="col-lg-10">
								<textarea class="form-control" id="txtPersentase" name="txtPersentase" placeholder="Persentase Ketercapaian"></textarea>
							</div>
						</div>
						
						<div class="text-center"><button class="btn btn-primary btn-lg" type="button" id="btn-simpan-data">Simpan Data</button></div>
					</form>
				</div>
			</section>
		</div>
	</div>
</section>

<script>
$(document).ready(function(){
	
	$('.chosen').chosen();
	$('.number').number(true, 0);
	
	function reloading(){
		$.ajax({
			url : "./",
			method: "POST",
			cache: false,
			data: {"mod" : "<?php echo e_url('modules/view/kinerja/realisasi-indikator.php'); ?>"},
			success: function(event){	
				$('#main-content').html(event);
			},
			error: function(){
				alert('Gagal terkoneksi dengan server, coba lagi..!');
			}
		});
	};
	
	$('#btn-simpan-data').click(function(ev){
		ev.preventDefault();
		var post_data = "aksi=" + "<?php echo e_url('modules/controller/kinerja/realisasi-indikator.php'); ?>" + "&" +$('#frm-realisasi').serialize();
		if (confirm('Simpan data ?')) {
			$('#btn-simpan-data').addClass('disabled').html('<i class="fa fa-spinner fa-pulse"></i> Processing...');
			$.ajax({
				url: "./",
				method: "POST",
				cache: false,
				dataType: "JSON",
				data: post_data,
				success: function(eve){
					if (eve.status){
						alert(eve.msg);
						reloading();
					} else {
						alert(eve.msg);
					}
					$('#btn-simpan-data').removeClass('disabled').html('Simpan Data');
				},
				error: function(err){
					console.log("AJAX error in request: " + JSON.stringify(err, null, 2));
					alert('Gagal terkoneksi dengan server..');
				}
			});
		}
	});
	
});
</script>
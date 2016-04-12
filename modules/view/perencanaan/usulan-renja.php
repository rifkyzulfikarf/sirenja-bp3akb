<?php
	$data = new koneksi();
?>
<section class="wrapper site-min-height">
	<div class="row">
		<div class="col-sm-12">
			<section class="panel">
				<header class="panel-heading">
					Usulan Renja
				</header>
				<div class="panel-body">
					<form class="form-horizontal" role="form" id="frm-usulan" action="#" method="POST">
						<input type="hidden" id="apa" name="apa" value="tambah-usulan">
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
							<label for="cmbUrusan" class="col-lg-2 col-sm-2 control-label">Urusan</label>
							<div class="col-lg-10">
								<select class="form-control chosen" id="cmbUrusan" name="cmbUrusan">
									<?php
										if ($query = $data->runQuery("SELECT `id`, `urusan` FROM `urusan` WHERE `hapus` = '0';")) {
											while ($rs = $query->fetch_array()) {
												echo "<option value='".$rs['id']."'>".$rs['urusan']."</option>";
											}
										}
									?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="cmbBidang" class="col-lg-2 col-sm-2 control-label">Bidang</label>
							<div class="col-lg-10">
								<select class="form-control chosen" id="cmbBidang" name="cmbBidang">
									<?php
										if ($query = $data->runQuery("SELECT `id`, `bidang` FROM `bidang` WHERE `hapus` = '0';")) {
											while ($rs = $query->fetch_array()) {
												echo "<option value='".$rs['id']."'>".$rs['bidang']."</option>";
											}
										}
									?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="cmbPrioritas" class="col-lg-2 col-sm-2 control-label">Prioritas Daerah</label>
							<div class="col-lg-10">
								<select class="form-control chosen" id="cmbPrioritas" name="cmbPrioritas">
									<?php
										if ($query = $data->runQuery("SELECT `id`, `prioritas` FROM `prioritas` WHERE `hapus` = '0';")) {
											while ($rs = $query->fetch_array()) {
												echo "<option value='".$rs['id']."'>".$rs['prioritas']."</option>";
											}
										}
									?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="cmbSasaran" class="col-lg-2 col-sm-2 control-label">Sasaran Daerah</label>
							<div class="col-lg-10">
								<select class="form-control chosen" id="cmbSasaran" name="cmbSasaran">
									<?php
										if ($query = $data->runQuery("SELECT `id`, `sasaran` FROM `sasaran` WHERE `hapus` = '0';")) {
											while ($rs = $query->fetch_array()) {
												echo "<option value='".$rs['id']."'>".$rs['sasaran']."</option>";
											}
										}
									?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="cmbProgram" class="col-lg-2 col-sm-2 control-label">Program</label>
							<div class="col-lg-10">
								<select class="form-control chosen" id="cmbProgram" name="cmbProgram">
									<?php
										if ($query = $data->runQuery("SELECT `id`, `program` FROM `program` WHERE `hapus` = '0';")) {
											while ($rs = $query->fetch_array()) {
												echo "<option value='".$rs['id']."'>".$rs['program']."</option>";
											}
										}
									?>
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
							<label for="cmbKegiatan" class="col-lg-2 col-sm-2 control-label">Kegiatan</label>
							<div class="col-lg-10">
								<select class="form-control chosen" id="cmbKegiatan" name="cmbKegiatan">
									<?php
										if ($query = $data->runQuery("SELECT `id`, `kegiatan` FROM `kegiatan` WHERE `hapus` = '0';")) {
											while ($rs = $query->fetch_array()) {
												echo "<option value='".$rs['id']."'>".$rs['kegiatan']."</option>";
											}
										}
									?>
								</select>
							</div>
						</div>
						<hr>
						<div class="form-group">
							<label for="txtTolokUkurKeluaran" class="col-lg-2 col-sm-2 control-label"><strong>Keluaran Kegiatan</strong></label>
						</div>
						<div class="form-group">
							<label for="txtTolokUkurKeluaran" class="col-lg-2 col-sm-2 control-label">Tolok Ukur</label>
							<div class="col-lg-10">
								<textarea class="form-control" id="txtTolokUkurKeluaran" name="txtTolokUkurKeluaran" placeholder="Tolok Ukur Keluaran Kegiatan"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="txtTargetKeluaran" class="col-lg-2 col-sm-2 control-label">Target</label>
							<div class="col-lg-10">
								<textarea class="form-control" id="txtTargetKeluaran" name="txtTargetKeluaran" placeholder="Target Keluaran Kegiatan"></textarea>
							</div>
						</div>
						<hr>
						<div class="form-group">
							<label class="col-lg-2 col-sm-2 control-label"><strong>Hasil Kegiatan</strong></label>
						</div>
						<div class="form-group">
							<label for="txtTolokUkurHasil" class="col-lg-2 col-sm-2 control-label">Tolok Ukur</label>
							<div class="col-lg-10">
								<textarea class="form-control" id="txtTolokUkurHasil" name="txtTolokUkurHasil" placeholder="Tolok Ukur Hasil Kegiatan"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="txtTargetHasil" class="col-lg-2 col-sm-2 control-label">Target</label>
							<div class="col-lg-10">
								<textarea class="form-control" id="txtTargetHasil" name="txtTargetHasil" placeholder="Target Hasil Kegiatan"></textarea>
							</div>
						</div>
						<hr>
						<div class="form-group">
							<label for="txtLokasi" class="col-lg-2 col-sm-2 control-label">Lokasi</label>
							<div class="col-lg-10">
								<textarea class="form-control" id="txtLokasi" name="txtLokasi" placeholder="Lokasi"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="txtPaguAnggaran" class="col-lg-2 col-sm-2 control-label">Pagu Anggaran</label>
							<div class="col-lg-10">
								<div class="input-group">
									<span class="input-group-addon">Rp</span>
									<input type="text" class="form-control number" id="txtPaguAnggaran" name="txtPaguAnggaran" placeholder="Pagu Anggaran">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="txtBelanjaPegawai" class="col-lg-2 col-sm-2 control-label">Belanja Pegawai</label>
							<div class="col-lg-10">
								<div class="input-group">
									<span class="input-group-addon">Rp</span>
									<input type="text" class="form-control number" id="txtBelanjaPegawai" name="txtBelanjaPegawai" placeholder="Belanja Pegawai">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="txtBelanjaBarangJasa" class="col-lg-2 col-sm-2 control-label">Belanja Barang Jasa</label>
							<div class="col-lg-10">
								<div class="input-group">
									<span class="input-group-addon">Rp</span>
									<input type="text" class="form-control number" id="txtBelanjaBarangJasa" name="txtBelanjaBarangJasa" placeholder="Belanja Barang Jasa">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="txtBelanjaModal" class="col-lg-2 col-sm-2 control-label">Belanja Modal</label>
							<div class="col-lg-10">
								<div class="input-group">
									<span class="input-group-addon">Rp</span>
									<input type="text" class="form-control number" id="txtBelanjaModal" name="txtBelanjaModal" placeholder="Belanja Modal">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="txtPaguAnggaranBerikutnya" class="col-lg-2 col-sm-2 control-label">Pagu Anggaran Th Berikutnya</label>
							<div class="col-lg-10">
								<div class="input-group">
									<span class="input-group-addon">Rp</span>
									<input type="text" class="form-control number" id="txtPaguAnggaranBerikutnya" name="txtPaguAnggaranBerikutnya" placeholder="Pagu Anggaran Tahun Berikutnya">
								</div>
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
			data: {"mod" : "<?php echo e_url('modules/view/perencanaan/usulan-renja.php'); ?>"},
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
		var post_data = "aksi=" + "<?php echo e_url('modules/controller/perencanaan/usulan-renja.php'); ?>" + "&" +$('#frm-usulan').serialize();
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
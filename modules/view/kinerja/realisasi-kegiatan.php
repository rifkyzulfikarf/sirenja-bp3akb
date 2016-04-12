<?php
	$data = new koneksi();
?>
<section class="wrapper site-min-height">
	<div class="row">
		<div class="col-sm-12">
			<section class="panel">
				<header class="panel-heading">
					Realisasi Program Kegiatan
				</header>
				<div class="panel-body">
					<form class="form-horizontal" role="form" id="frm-realisasi" action="#" method="POST">
						<input type="hidden" id="apa" name="apa" value="simpan-realisasi">
						<input type="hidden" id="id" name="id">
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
						<button class="btn btn-primary" type="button" id="btn-cari-data">Cari Data</button>
						<div class="text-center" id="label-proses"><label><strong>Sedang memproses permintaan...</strong></label></div>
						<hr>
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label for="txtTolokUkurKeluaran" class="col-lg-12 col-sm-12 control-label"><strong>Rencana Keluaran Kegiatan</strong></label>
								</div>
								<div class="form-group">
									<label for="txtTolokUkurKeluaranRencana" class="col-lg-2 col-sm-2 control-label">Rencana Tolok Ukur</label>
									<div class="col-lg-10">
										<textarea class="form-control" id="txtTolokUkurKeluaranRencana" name="txtTolokUkurKeluaranRencana" readonly></textarea>
									</div>
								</div>
								<div class="form-group">
									<label for="txtTargetKeluaranRencana" class="col-lg-2 col-sm-2 control-label">Rencana Target</label>
									<div class="col-lg-10">
										<textarea class="form-control" id="txtTargetKeluaranRencana" name="txtTargetKeluaranRencana" readonly></textarea>
									</div>
								</div>
							</div>
						
						
							<div class="col-lg-6">
								<div class="form-group">
									<label for="txtTolokUkurKeluaran" class="col-lg-12 col-sm-12 control-label"><strong>Realisasi Keluaran Kegiatan</strong></label>
								</div>
								<div class="form-group">
									<label for="txtTolokUkurKeluaranRealisasi" class="col-lg-2 col-sm-2 control-label">Realisasi Tolok Ukur</label>
									<div class="col-lg-10">
										<textarea class="form-control" id="txtTolokUkurKeluaranRealisasi" name="txtTolokUkurKeluaranRealisasi" placeholder="Realisasi Tolok Ukur Keluaran Kegiatan"></textarea>
									</div>
								</div>
								<div class="form-group">
									<label for="txtTargetKeluaranRealisasi" class="col-lg-2 col-sm-2 control-label">Realisasi Target</label>
									<div class="col-lg-10">
										<textarea class="form-control" id="txtTargetKeluaranRealisasi" name="txtTargetKeluaranRealisasi" placeholder="Realisasi Target Keluaran Kegiatan"></textarea>
									</div>
								</div>
							</div>
						</div>
						<hr>
						
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label for="txtLokasiRencana" class="col-lg-2 col-sm-2 control-label">Rencana Lokasi</label>
									<div class="col-lg-10">
										<textarea class="form-control" id="txtLokasiRencana" name="txtLokasiRencana" readonly></textarea>
									</div>
								</div>
								<div class="form-group">
									<label for="txtPaguAnggaran" class="col-lg-2 col-sm-2 control-label">Pagu Anggaran</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-addon">Rp</span>
											<input type="text" class="form-control number" id="txtPaguAnggaran" name="txtPaguAnggaran" readonly>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="txtBelanjaPegawai" class="col-lg-2 col-sm-2 control-label">Belanja Pegawai</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-addon">Rp</span>
											<input type="text" class="form-control number" id="txtBelanjaPegawai" name="txtBelanjaPegawai" readonly>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="txtBelanjaBarangJasa" class="col-lg-2 col-sm-2 control-label">Belanja Barang Jasa</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-addon">Rp</span>
											<input type="text" class="form-control number" id="txtBelanjaBarangJasa" name="txtBelanjaBarangJasa" readonly>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="txtBelanjaModal" class="col-lg-2 col-sm-2 control-label">Belanja Modal</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-addon">Rp</span>
											<input type="text" class="form-control number" id="txtBelanjaModal" name="txtBelanjaModal" readonly>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="txtPaguAnggaranBerikutnya" class="col-lg-2 col-sm-2 control-label">Pagu Anggaran Th Berikutnya</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-addon">Rp</span>
											<input type="text" class="form-control number" id="txtPaguAnggaranBerikutnya" name="txtPaguAnggaranBerikutnya" readonly>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-lg-6">
								<div class="form-group">
									<label for="txtLokasiRealisasi" class="col-lg-2 col-sm-2 control-label">Realisasi Lokasi</label>
									<div class="col-lg-10">
										<textarea class="form-control" id="txtLokasiRealisasi" name="txtLokasiRealisasi" placeholder="Realisasi Lokasi Kegiatan"></textarea>
									</div>
								</div>
								<div class="form-group">
									<label for="txtKeuanganRealisasi" class="col-lg-2 col-sm-2 control-label">Realisasi Keuangan</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-addon">Rp</span>
											<input type="text" class="form-control number" id="txtKeuanganRealisasi" name="txtKeuanganRealisasi" placeholder="Realisasi Keuangan">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="txtTglRealisasi" class="col-lg-2 col-sm-2 control-label">Tanggal Realisasi</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" id="txtTglRealisasi" name="txtTglRealisasi">
									</div>
								</div>
							</div>
						</div>
						<hr>
						
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label for="txtPermasalahan" class="col-lg-2 col-sm-2 control-label">Permasalahan</label>
									<div class="col-lg-10">
										<textarea class="form-control" id="txtPermasalahan" name="txtPermasalahan" placeholder="Permasalahan"></textarea>
									</div>
								</div>
							</div>
							
							<div class="col-lg-6">
								<div class="form-group">
									<label for="txtPenyelesaian" class="col-lg-2 col-sm-2 control-label">Upaya Penyelesaian</label>
									<div class="col-lg-10">
										<textarea class="form-control" id="txtPenyelesaian" name="txtPenyelesaian" placeholder="Upaya Penyelesaian"></textarea>
									</div>
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
	$('#label-proses').hide();
	$('#txtTglRealisasi').datepicker({
		format : "yyyy-mm-dd",
		viewMode: "months",
		minViewMode: "months",
		autoclose : true
	});
	
	function reloading(){
		$.ajax({
			url : "./",
			method: "POST",
			cache: false,
			data: {"mod" : "<?php echo e_url('modules/view/kinerja/realisasi-kegiatan.php'); ?>"},
			success: function(event){	
				$('#main-content').html(event);
			},
			error: function(){
				alert('Gagal terkoneksi dengan server, coba lagi..!');
			}
		});
	};
	
	$('#btn-cari-data').click(function(ev){
		ev.preventDefault();
		$('#label-proses').text("Sedang memproses permintaan...");
		$('#label-proses').show();
		$('#apa').val('cari-rencana');
		var post_data = "aksi=" + "<?php echo e_url('modules/controller/kinerja/realisasi-kegiatan.php'); ?>" + "&" +$('#frm-realisasi').serialize();
		
		$.ajax({
			url: "./",
			method: "POST",
			cache: false,
			dataType: "JSON",
			data: post_data,
			success: function(eve){
				if (eve.status) {
					$('#label-proses').hide();
					$('#id').val(eve.id);
					$('#txtTolokUkurKeluaranRencana').val(eve.tolok);
					$('#txtTargetKeluaranRencana').val(eve.target);
					$('#txtLokasiRencana').val(eve.lokasi);
					$('#txtPaguAnggaran').val(eve.pagu);
					$('#txtBelanjaPegawai').val(eve.pegawai);
					$('#txtBelanjaBarangJasa').val(eve.barang);
					$('#txtBelanjaModal').val(eve.modal);
					$('#txtPaguAnggaranBerikutnya').val(eve.paguberikutnya);
				} else {
					$('#label-proses').text(eve.msg);
					$('#id').val("");
					$('#txtTolokUkurKeluaranRencana').val("");
					$('#txtTargetKeluaranRencana').val("");
					$('#txtLokasiRencana').val("");
					$('#txtPaguAnggaran').val("");
					$('#txtBelanjaPegawai').val("");
					$('#txtBelanjaBarangJasa').val("");
					$('#txtBelanjaModal').val("");
					$('#txtPaguAnggaranBerikutnya').val("");
				}
			},
			error: function(err){
				console.log("AJAX error in request: " + JSON.stringify(err, null, 2));
				alert('Gagal terkoneksi dengan server..');
			}
		});
			
	});
	
	$('#btn-simpan-data').click(function(ev){
		ev.preventDefault();
		$('#apa').val('simpan-realisasi');
		var post_data = "aksi=" + "<?php echo e_url('modules/controller/kinerja/realisasi-kegiatan.php'); ?>" + "&" +$('#frm-realisasi').serialize();
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
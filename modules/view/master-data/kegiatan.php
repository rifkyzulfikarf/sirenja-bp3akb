<section class="wrapper site-min-height">
	<div class="row">
		<div class="col-sm-12">
			<section class="panel">
				<header class="panel-heading">
					Data Kegiatan
					<span class="tools pull-right">
						<button type="button" class="btn btn-primary btn-sm" id="btn-tambah-data" data-mode="tambah"><i class="fa fa-plus"></i> Tambah Data</button>
					</span>
				</header>
				<div class="panel-body">
					<div class="adv-table">
						<table class="display table table-bordered table-striped" id="tabel-kegiatan">
							<thead>
								<tr>
									<th>Kegiatan</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								
							</tbody>
							<tfoot>
								<tr>
									<th>Kegiatan</th>
									<th></th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</section>
		</div>
	</div>
</section>

<div class="modal fade " id="mdl-data-kegiatan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Data Kegiatan</h4>
			</div>
			<div class="modal-body">
				<form id="frm-kegiatan" action="#" method="POST" role="form">
					<input type="hidden" class="form-control" id="apa" name="apa">
					<input type="hidden" class="form-control" id="txt-id" name="txt-id">
					<div class="form-group">
						<input type="text" class="form-control" id="txt-kegiatan" name="txt-kegiatan" placeholder="Masukkan Kegiatan">
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button data-dismiss="modal" class="btn btn-default btn-close-modal" type="button">Close</button>
				<button class="btn btn-primary" type="button" id="btn-simpan-data">Simpan Data</button>
			</div>
		</div>
	</div>
</div>

<script>
$(document).ready(function(){
	
	var tabelkegiatan = $('#tabel-kegiatan').dataTable({
		"sAjaxSource": './',
		"sServerMethod": "POST",
		"fnServerParams": function ( aoData ) {
            aoData.push({"name": "aksi", "value": "<?php echo e_url('modules/controller/master-data/kegiatan.php'); ?>"});
            aoData.push({"name": "apa", "value": "get-kegiatan"});
        }
    });
	
	$('#btn-tambah-data').click(function(ev){
		ev.preventDefault();
		$('#mdl-data-kegiatan').modal();
		$('#apa').val('tambah-kegiatan');
		$('#txt-kegiatan').val("");
	});
	
	$('#tabel-kegiatan').on('click', '#btn-ubah-data', function(ev){
		ev.preventDefault();
		$('#mdl-data-kegiatan').modal();
		$('#apa').val('ubah-kegiatan');
		$('#txt-id').val($(this).data('id'));
		$('#txt-kegiatan').val($(this).data('kegiatan'));
	});
	
	$('#tabel-kegiatan').on('click', '#btn-hapus-kegiatan', function(ev){
		ev.preventDefault();
		var id = $(this).data('id');
		if (confirm('Setuju hapus data ?')) {
			$(this).addClass('disabled').html('<i class="fa fa-spinner fa-pulse"></i> Processing...');
			$.ajax({
				url: "./",
				method: "POST",
				cache: false,
				dataType: "JSON",
				data: {"aksi" : "<?php echo e_url('modules/controller/master-data/kegiatan.php'); ?>", "apa" : "hapus-kegiatan", "id" : id},
				success: function(eve){
					if (eve.status){
						alert(eve.msg);
						$('.btn-close-modal').click();
						tabelkegiatan.fnReloadAjax();
					} else {
						alert(eve.msg);
					}
				},
				error: function(err){
					console.log("AJAX error in request: " + JSON.stringify(err, null, 2));
					alert('Gagal terkoneksi dengan server..');
				}
			});
		}
	});
	
	$('#btn-simpan-data').click(function(ev){
		ev.preventDefault();
		var post_data = "aksi=" + "<?php echo e_url('modules/controller/master-data/kegiatan.php'); ?>" + "&" +$('#frm-kegiatan').serialize();
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
						$('.btn-close-modal').click();
						tabelkegiatan.fnReloadAjax();
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
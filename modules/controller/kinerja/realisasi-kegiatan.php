<?php
if (isset($_POST['apa']) && $_POST['apa'] != "") {
	
	include 'modules/model/class.realisasi_program.php';
	$data = new realisasi_program();
	
	switch ($_POST['apa']) {
		case "cari-rencana":
			$arr=array();
			
			if (isset($_POST['cmbTahun']) && $_POST['cmbTahun'] != "" && isset($_POST['cmbUrusan']) && $_POST['cmbUrusan'] != "" && 
			isset($_POST['cmbBidang']) && $_POST['cmbBidang'] != "" && isset($_POST['cmbPrioritas']) && $_POST['cmbPrioritas'] != "" && 
			isset($_POST['cmbSasaran']) && $_POST['cmbSasaran'] != "" && isset($_POST['cmbProgram']) && $_POST['cmbProgram'] != "" && 
			isset($_POST['cmbIndikator']) && $_POST['cmbIndikator'] != "" && isset($_POST['cmbKegiatan']) && $_POST['cmbKegiatan'] != "") {
				
				$qCek = "SELECT * FROM `rencana_program` WHERE `id_tahun` = '".$_POST['cmbTahun']."' AND 
						`id_urusan` = '".$_POST['cmbUrusan']."' AND `id_bidang` = '".$_POST['cmbBidang']."' AND 
						`id_prioritas` = '".$_POST['cmbPrioritas']."' AND id_sasaran = '".$_POST['cmbSasaran']."' AND 
						`id_program` = '".$_POST['cmbProgram']."' AND `id_indikator` = '".$_POST['cmbIndikator']."' AND 
						`id_kegiatan` = '".$_POST['cmbKegiatan']."';";
				
				if ($result = $data->runQuery($qCek)) {
					if ($result->num_rows > 0) {
						$rs = $result->fetch_array();
						$arr['status'] = TRUE;
						$arr['msg'] = "Data ditemukan..";
						
						$arr['id'] = $rs['id'];
						$arr['tolok'] = $rs['tolok_ukur_keluaran'];
						$arr['target'] = $rs['target_keluaran'];
						$arr['lokasi'] = $rs['lokasi'];
						$arr['pagu'] = $rs['pagu_anggaran'];
						$arr['pegawai'] = $rs['belanja_pegawai'];
						$arr['barang'] = $rs['belanja_barang_jasa'];
						$arr['modal'] = $rs['belanja_modal'];
						$arr['paguberikutnya'] = $rs['pagu_anggaran_th_berikutnya'];
					} else {
						$arr['status'] = FALSE;
						$arr['msg'] = "Data tidak ditemukan..";
					}
					
				}
			} else {
				$arr['status'] = FALSE;
				$arr['msg'] = "Harap isi data dengan lengkap..";
			}
			
			echo json_encode($arr);
			break;
		case "simpan-realisasi":
			$arr=array();
			
			if (isset($_POST['id']) && $_POST['id'] != "" && isset($_POST['txtTglRealisasi']) && $_POST['txtTglRealisasi'] != "" && 
			isset($_POST['txtTolokUkurKeluaranRealisasi']) && $_POST['txtTolokUkurKeluaranRealisasi'] != "" && 
			isset($_POST['txtTargetKeluaranRealisasi']) && $_POST['txtTargetKeluaranRealisasi'] != "" && 
			isset($_POST['txtLokasiRealisasi']) && $_POST['txtLokasiRealisasi'] != "" && 
			isset($_POST['txtKeuanganRealisasi']) && $_POST['txtKeuanganRealisasi'] != "" && 
			isset($_POST['txtPermasalahan']) && $_POST['txtPermasalahan'] != "" && 
			isset($_POST['txtPenyelesaian']) && $_POST['txtPenyelesaian'] != "") {
				
				if ($result = $data->tambah($_POST['id'], $_POST['txtTglRealisasi'], $_POST['txtTolokUkurKeluaranRealisasi'], 
				$_POST['txtTargetKeluaranRealisasi'], $_POST['txtLokasiRealisasi'], $_POST['txtKeuanganRealisasi'], 
				$_POST['txtPermasalahan'], $_POST['txtPenyelesaian'])) {
					$arr['status']=TRUE;
					$arr['msg']="Data tersimpan..";
				} else {
					$arr['status']=FALSE;
					$arr['msg']="Gagal menyimpan..";
				}
			} else {
				$arr['status']=FALSE;
				$arr['msg']="Harap isi data dengan lengkap..";
			}
			
			echo json_encode($arr);
			break;
	}
}
?>
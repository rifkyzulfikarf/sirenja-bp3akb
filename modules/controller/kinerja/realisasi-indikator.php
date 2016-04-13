<?php
if (isset($_POST['apa']) && $_POST['apa'] != "") {
	
	include 'modules/model/class.realisasi_indikator.php';
	$data = new realisasi_indikator();
	
	switch ($_POST['apa']) {
		case "simpan-realisasi":
			$arr=array();
			
			if (isset($_POST['cmbTahun']) && $_POST['cmbTahun'] != "" && isset($_POST['cmbTriwulan']) && $_POST['cmbTriwulan'] != "" && 
			isset($_POST['cmbIndikator']) && $_POST['cmbIndikator'] != "" && 
			isset($_POST['cmbTarget']) && $_POST['cmbTarget'] != "" && 
			isset($_POST['cmbTargetAkhir']) && $_POST['cmbTargetAkhir'] != "" && 
			isset($_POST['txtRealisasiSebelumnya']) && $_POST['txtRealisasiSebelumnya'] != "" && 
			isset($_POST['txtRealisasiTarget']) && $_POST['txtRealisasiTarget'] != "" && 
			isset($_POST['txtPersentase']) && $_POST['txtPersentase'] != "") {
				
				if ($result = $data->tambah($_POST['cmbTahun'], $_POST['cmbTriwulan'], $_POST['cmbIndikator'], 
				$_POST['cmbTarget'], $_POST['cmbTargetAkhir'], $_POST['txtRealisasiSebelumnya'], 
				$_POST['txtRealisasiTarget'], $_POST['txtPersentase'])) {
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
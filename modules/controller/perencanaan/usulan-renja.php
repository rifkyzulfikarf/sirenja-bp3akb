<?php
if (isset($_POST['apa']) && $_POST['apa'] != "") {
	
	include 'modules/model/class.usulan_renja.php';
	$data = new usulan_renja();
	
	switch ($_POST['apa']) {
		case "tambah-usulan":
			$arr=array();
			
			if (isset($_POST['cmbTahun']) && $_POST['cmbTahun'] != "" && isset($_POST['cmbUrusan']) && $_POST['cmbUrusan'] != "" && 
			isset($_POST['cmbBidang']) && $_POST['cmbBidang'] != "" && isset($_POST['cmbPrioritas']) && $_POST['cmbPrioritas'] != "" && 
			isset($_POST['cmbSasaran']) && $_POST['cmbSasaran'] != "" && isset($_POST['cmbProgram']) && $_POST['cmbProgram'] != "" && 
			isset($_POST['cmbIndikator']) && $_POST['cmbIndikator'] != "" && isset($_POST['cmbKegiatan']) && $_POST['cmbKegiatan'] != "" && 
			isset($_POST['txtTolokUkurKeluaran']) && $_POST['txtTolokUkurKeluaran'] != "" && isset($_POST['txtTargetKeluaran']) && $_POST['txtTargetKeluaran'] != "" && 
			isset($_POST['txtTolokUkurHasil']) && $_POST['txtTolokUkurHasil'] != "" && isset($_POST['txtTargetHasil']) && $_POST['txtTargetHasil'] != "" && 
			isset($_POST['txtLokasi']) && $_POST['txtLokasi'] != "" && isset($_POST['txtPaguAnggaran']) && $_POST['txtPaguAnggaran'] != "" && 
			isset($_POST['txtBelanjaPegawai']) && $_POST['txtBelanjaPegawai'] != "" && isset($_POST['txtBelanjaBarangJasa']) && $_POST['txtBelanjaBarangJasa'] != "" && 
			isset($_POST['txtBelanjaModal']) && $_POST['txtBelanjaModal'] != "" && isset($_POST['txtPaguAnggaranBerikutnya']) && $_POST['txtPaguAnggaranBerikutnya'] != "") {
				
				if ($result = $data->tambah($_POST['cmbTahun'], $_POST['cmbUrusan'], $_POST['cmbBidang'], $_POST['cmbPrioritas'], 
				$_POST['cmbSasaran'], $_POST['cmbProgram'], $_POST['cmbIndikator'], $_POST['cmbKegiatan'], $_POST['txtTolokUkurKeluaran'], 
				$_POST['txtTargetKeluaran'], $_POST['txtTolokUkurHasil'], $_POST['txtTargetHasil'], $_POST['txtLokasi'], 
				$_POST['txtPaguAnggaran'], $_POST['txtBelanjaPegawai'], $_POST['txtBelanjaBarangJasa'], $_POST['txtBelanjaModal'], 
				$_POST['txtPaguAnggaranBerikutnya'])) {
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
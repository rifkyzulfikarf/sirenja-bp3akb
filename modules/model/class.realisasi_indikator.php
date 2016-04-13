<?php
	class realisasi_indikator extends koneksi {
		
		function tambah($idTahun, $triwulan, $idIndikator, $idTarget, $idTargetAkhir, $idRealisasiSebelumnya, $realisasiTarget, 
		$persentase) {
		
			$idTahun = $this->clearText($idTahun);
			$triwulan = $this->clearText($triwulan);
			$idIndikator = $this->clearText($idIndikator);
			$idTarget = $this->clearText($idTarget);
			$idTargetAkhir = $this->clearText($idTargetAkhir);
			$idRealisasiSebelumnya = $this->clearText($idRealisasiSebelumnya);
			$realisasiTarget = $this->clearText($realisasiTarget);
			$persentase = $this->clearText($persentase);
			
			$query = "INSERT INTO `realisasi_indikator`(`id_tahun`, `triwulan`, `id_indikator`, `id_target`, 
					`id_target_akhir`, `realisasi_tahun_sebelumnya`, `realisasi_target`, `persentase_ketercapaian`) 
					VALUES ('$idTahun', '$triwulan', '$idIndikator', '$idTarget', '$idTargetAkhir', 
						'$idRealisasiSebelumnya', '$realisasiTarget', '$persentase');";
			
			if ($result = $this->runQuery($query)) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
	}
?>
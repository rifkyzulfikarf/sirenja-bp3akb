<?php
	class realisasi_program extends koneksi {
		
		function tambah($idRencana, $tanggal, $tolokUkur, $target, $lokasi, $keuangan, $permasalahan, 
		$upayaPenyelesaian) {
		
			$idRencana = $this->clearText($idRencana);
			$tanggal = $this->clearText($tanggal);
			$tolokUkur = $this->clearText($tolokUkur);
			$target = $this->clearText($target);
			$lokasi = $this->clearText($lokasi);
			$keuangan = $this->clearText($keuangan);
			$permasalahan = $this->clearText($permasalahan);
			$upayaPenyelesaian = $this->clearText($upayaPenyelesaian);
			
			$query = "INSERT INTO `realisasi_program` VALUES ('$idRencana', '$tanggal', '$tolokUkur', '$target', '$lokasi', 
						'$keuangan', '$permasalahan', '$upayaPenyelesaian');";
			
			if ($result = $this->runQuery($query)) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
	}
?>
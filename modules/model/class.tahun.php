<?php
	class tahun extends koneksi {
		
		function get_tahun() {
			if ($list = $this->runQuery("SELECT `id`, `tahun` FROM `tahun` WHERE `hapus` = '0';")) {
				if ($list->num_rows > 0) {
					return $list;
				} else {
					return FALSE;
				}
			} else {
				return FALSE;
			}
		}
		
		function tambah($tahun) {
			$tahun = $this->clearText($tahun);
			
			if ($result = $this->runQuery("INSERT INTO `tahun`(`tahun`, `hapus`) VALUES('$tahun', '0');")) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		function ubah($id, $tahun) {
			$id = $this->clearText($id);
			$tahun = $this->clearText($tahun);
			
			if ($result = $this->runQuery("UPDATE `tahun` SET `tahun` = '$tahun' WHERE `id` = '$id';")) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		function hapus($id) {
			$id = $this->clearText($id);
			
			if ($result = $this->runQuery("UPDATE `tahun` SET `hapus` = '1' WHERE `id` = '$id';")) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
	}
?>
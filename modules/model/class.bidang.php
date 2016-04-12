<?php
	class bidang extends koneksi {
		
		function get_bidang() {
			if ($list = $this->runQuery("SELECT `id`, `bidang` FROM `bidang` WHERE `hapus` = '0';")) {
				if ($list->num_rows > 0) {
					return $list;
				} else {
					return FALSE;
				}
			} else {
				return FALSE;
			}
		}
		
		function tambah($bidang) {
			$bidang = $this->clearText($bidang);
			
			if ($result = $this->runQuery("INSERT INTO `bidang`(`bidang`, `hapus`) VALUES('$bidang', '0');")) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		function ubah($id, $bidang) {
			$id = $this->clearText($id);
			$bidang = $this->clearText($bidang);
			
			if ($result = $this->runQuery("UPDATE `bidang` SET `bidang` = '$bidang' WHERE `id` = '$id';")) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		function hapus($id) {
			$id = $this->clearText($id);
			
			if ($result = $this->runQuery("UPDATE `bidang` SET `hapus` = '1' WHERE `id` = '$id';")) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
	}
?>
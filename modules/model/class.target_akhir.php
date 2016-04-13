<?php
	class target_akhir extends koneksi {
		
		function get_target_akhir() {
			if ($list = $this->runQuery("SELECT `id`, `target_akhir` FROM `target_akhir` WHERE `hapus` = '0';")) {
				if ($list->num_rows > 0) {
					return $list;
				} else {
					return FALSE;
				}
			} else {
				return FALSE;
			}
		}
		
		function tambah($target_akhir) {
			$target_akhir = $this->clearText($target_akhir);
			
			if ($result = $this->runQuery("INSERT INTO `target_akhir`(`target_akhir`, `hapus`) VALUES('$target_akhir', '0');")) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		function ubah($id, $target_akhir) {
			$id = $this->clearText($id);
			$target_akhir = $this->clearText($target_akhir);
			
			if ($result = $this->runQuery("UPDATE `target_akhir` SET `target_akhir` = '$target_akhir' WHERE `id` = '$id';")) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		function hapus($id) {
			$id = $this->clearText($id);
			
			if ($result = $this->runQuery("UPDATE `target_akhir` SET `hapus` = '1' WHERE `id` = '$id';")) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
	}
?>
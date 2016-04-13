<?php
	class target extends koneksi {
		
		function get_target() {
			if ($list = $this->runQuery("SELECT `id`, `target` FROM `target` WHERE `hapus` = '0';")) {
				if ($list->num_rows > 0) {
					return $list;
				} else {
					return FALSE;
				}
			} else {
				return FALSE;
			}
		}
		
		function tambah($target) {
			$target = $this->clearText($target);
			
			if ($result = $this->runQuery("INSERT INTO `target`(`target`, `hapus`) VALUES('$target', '0');")) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		function ubah($id, $target) {
			$id = $this->clearText($id);
			$target = $this->clearText($target);
			
			if ($result = $this->runQuery("UPDATE `target` SET `target` = '$target' WHERE `id` = '$id';")) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		function hapus($id) {
			$id = $this->clearText($id);
			
			if ($result = $this->runQuery("UPDATE `target` SET `hapus` = '1' WHERE `id` = '$id';")) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
	}
?>
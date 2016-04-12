<?php
	class urusan extends koneksi {
		
		function get_urusan() {
			if ($list = $this->runQuery("SELECT `id`, `urusan` FROM `urusan` WHERE `hapus` = '0';")) {
				if ($list->num_rows > 0) {
					return $list;
				} else {
					return FALSE;
				}
			} else {
				return FALSE;
			}
		}
		
		function tambah($urusan) {
			$urusan = $this->clearText($urusan);
			
			if ($result = $this->runQuery("INSERT INTO `urusan`(`urusan`, `hapus`) VALUES('$urusan', '0');")) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		function ubah($id, $urusan) {
			$id = $this->clearText($id);
			$urusan = $this->clearText($urusan);
			
			if ($result = $this->runQuery("UPDATE `urusan` SET `urusan` = '$urusan' WHERE `id` = '$id';")) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		function hapus($id) {
			$id = $this->clearText($id);
			
			if ($result = $this->runQuery("UPDATE `urusan` SET `hapus` = '1' WHERE `id` = '$id';")) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
	}
?>
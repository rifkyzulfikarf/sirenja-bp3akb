<?php
	class prioritas extends koneksi {
		
		function get_prioritas() {
			if ($list = $this->runQuery("SELECT `id`, `prioritas` FROM `prioritas` WHERE `hapus` = '0';")) {
				if ($list->num_rows > 0) {
					return $list;
				} else {
					return FALSE;
				}
			} else {
				return FALSE;
			}
		}
		
		function tambah($prioritas) {
			$prioritas = $this->clearText($prioritas);
			
			if ($result = $this->runQuery("INSERT INTO `prioritas`(`prioritas`, `hapus`) VALUES('$prioritas', '0');")) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		function ubah($id, $prioritas) {
			$id = $this->clearText($id);
			$prioritas = $this->clearText($prioritas);
			
			if ($result = $this->runQuery("UPDATE `prioritas` SET `prioritas` = '$prioritas' WHERE `id` = '$id';")) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		function hapus($id) {
			$id = $this->clearText($id);
			
			if ($result = $this->runQuery("UPDATE `prioritas` SET `hapus` = '1' WHERE `id` = '$id';")) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
	}
?>
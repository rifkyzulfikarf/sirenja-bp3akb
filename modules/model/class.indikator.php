<?php
	class indikator extends koneksi {
		
		function get_indikator() {
			if ($list = $this->runQuery("SELECT `id`, `indikator` FROM `indikator` WHERE `hapus` = '0';")) {
				if ($list->num_rows > 0) {
					return $list;
				} else {
					return FALSE;
				}
			} else {
				return FALSE;
			}
		}
		
		function tambah($indikator) {
			$indikator = $this->clearText($indikator);
			
			if ($result = $this->runQuery("INSERT INTO `indikator`(`indikator`, `hapus`) VALUES('$indikator', '0');")) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		function ubah($id, $indikator) {
			$id = $this->clearText($id);
			$indikator = $this->clearText($indikator);
			
			if ($result = $this->runQuery("UPDATE `indikator` SET `indikator` = '$indikator' WHERE `id` = '$id';")) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		function hapus($id) {
			$id = $this->clearText($id);
			
			if ($result = $this->runQuery("UPDATE `indikator` SET `hapus` = '1' WHERE `id` = '$id';")) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
	}
?>
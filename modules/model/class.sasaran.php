<?php
	class sasaran extends koneksi {
		
		function get_sasaran() {
			if ($list = $this->runQuery("SELECT `id`, `sasaran` FROM `sasaran` WHERE `hapus` = '0';")) {
				if ($list->num_rows > 0) {
					return $list;
				} else {
					return FALSE;
				}
			} else {
				return FALSE;
			}
		}
		
		function tambah($sasaran) {
			$sasaran = $this->clearText($sasaran);
			
			if ($result = $this->runQuery("INSERT INTO `sasaran`(`sasaran`, `hapus`) VALUES('$sasaran', '0');")) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		function ubah($id, $sasaran) {
			$id = $this->clearText($id);
			$sasaran = $this->clearText($sasaran);
			
			if ($result = $this->runQuery("UPDATE `sasaran` SET `sasaran` = '$sasaran' WHERE `id` = '$id';")) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		function hapus($id) {
			$id = $this->clearText($id);
			
			if ($result = $this->runQuery("UPDATE `sasaran` SET `hapus` = '1' WHERE `id` = '$id';")) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
	}
?>
<?php
	class kegiatan extends koneksi {
		
		function get_kegiatan() {
			if ($list = $this->runQuery("SELECT `id`, `kegiatan` FROM `kegiatan` WHERE `hapus` = '0';")) {
				if ($list->num_rows > 0) {
					return $list;
				} else {
					return FALSE;
				}
			} else {
				return FALSE;
			}
		}
		
		function tambah($kegiatan) {
			$kegiatan = $this->clearText($kegiatan);
			
			if ($result = $this->runQuery("INSERT INTO `kegiatan`(`kegiatan`, `hapus`) VALUES('$kegiatan', '0');")) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		function ubah($id, $kegiatan) {
			$id = $this->clearText($id);
			$kegiatan = $this->clearText($kegiatan);
			
			if ($result = $this->runQuery("UPDATE `kegiatan` SET `kegiatan` = '$kegiatan' WHERE `id` = '$id';")) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		function hapus($id) {
			$id = $this->clearText($id);
			
			if ($result = $this->runQuery("UPDATE `kegiatan` SET `hapus` = '1' WHERE `id` = '$id';")) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
	}
?>
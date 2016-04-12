<?php
	class program extends koneksi {
		
		function get_program() {
			if ($list = $this->runQuery("SELECT `id`, `program` FROM `program` WHERE `hapus` = '0';")) {
				if ($list->num_rows > 0) {
					return $list;
				} else {
					return FALSE;
				}
			} else {
				return FALSE;
			}
		}
		
		function tambah($program) {
			$program = $this->clearText($program);
			
			if ($result = $this->runQuery("INSERT INTO `program`(`program`, `hapus`) VALUES('$program', '0');")) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		function ubah($id, $program) {
			$id = $this->clearText($id);
			$program = $this->clearText($program);
			
			if ($result = $this->runQuery("UPDATE `program` SET `program` = '$program' WHERE `id` = '$id';")) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		function hapus($id) {
			$id = $this->clearText($id);
			
			if ($result = $this->runQuery("UPDATE `program` SET `hapus` = '1' WHERE `id` = '$id';")) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
	}
?>
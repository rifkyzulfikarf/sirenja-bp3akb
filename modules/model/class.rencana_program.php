<?php
	class rencana_program extends koneksi {
		
		function tambah($idTahun, $idUrusan, $idBidang, $idPrioritas, $idSasaran, $idProgram, $idIndikator, 
		$idKegiatan, $tolokUkurKeluaran, $targetKeluaran, $tolokUkurHasil, $targetHasil, $lokasi, $paguAnggaran, 
		$belanjaPegawai, $belanjaBarangJasa, $belanjaModal, $paguAnggaranBerikutnya) {
		
			$idTahun = $this->clearText($idTahun);
			$idUrusan = $this->clearText($idUrusan);
			$idBidang = $this->clearText($idBidang);
			$idPrioritas = $this->clearText($idPrioritas);
			$idSasaran = $this->clearText($idSasaran);
			$idProgram = $this->clearText($idProgram);
			$idIndikator = $this->clearText($idIndikator);
			$idKegiatan = $this->clearText($idKegiatan);
			$tolokUkurKeluaran = $this->clearText($tolokUkurKeluaran);
			$targetKeluaran = $this->clearText($targetKeluaran);
			$tolokUkurHasil = $this->clearText($tolokUkurHasil);
			$targetHasil = $this->clearText($targetHasil);
			$lokasi = $this->clearText($lokasi);
			$paguAnggaran = $this->clearText($paguAnggaran);
			$belanjaPegawai = $this->clearText($belanjaPegawai);
			$belanjaBarangJasa = $this->clearText($belanjaBarangJasa);
			$belanjaModal = $this->clearText($belanjaModal);
			$paguAnggaranBerikutnya = $this->clearText($paguAnggaranBerikutnya);
			
			$query = "INSERT INTO `rencana_program`(`id_tahun`, `id_urusan`, `id_bidang`, `id_prioritas`, `id_sasaran`, 
						`id_program`, `id_indikator`, `id_kegiatan`, `tolok_ukur_keluaran`, `target_keluaran`, 
						`tolok_ukur_hasil`, `target_hasil`, `lokasi`, `pagu_anggaran`, `belanja_pegawai`, 
						`belanja_barang_jasa`, `belanja_modal`, `pagu_anggaran_th_berikutnya`) VALUES 
						('$idTahun', '$idUrusan', '$idBidang', '$idPrioritas', '$idSasaran', '$idProgram', 
						'$idIndikator', '$idKegiatan', '$tolokUkurKeluaran', '$targetKeluaran', '$tolokUkurHasil', 
						'$targetHasil', '$lokasi', '$paguAnggaran', '$belanjaPegawai', '$belanjaBarangJasa', 
						'$belanjaModal', '$paguAnggaranBerikutnya');";
			
			if ($result = $this->runQuery($query)) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
	}
?>
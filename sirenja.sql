/*
SQLyog Ultimate v8.82 
MySQL - 5.6.24 : Database - sirenja
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sirenja` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `sirenja`;

/*Table structure for table `akses` */

DROP TABLE IF EXISTS `akses`;

CREATE TABLE `akses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pemakai` int(11) DEFAULT NULL,
  `id_menu` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

/*Data for the table `akses` */

insert  into `akses`(`id`,`id_pemakai`,`id_menu`) values (1,1,1),(2,1,2),(3,1,3),(4,1,4),(5,1,5),(6,1,6),(7,1,7),(8,1,8),(9,1,9),(10,1,10),(11,1,11),(12,1,12),(13,1,13),(14,1,14),(15,1,15),(16,1,16),(17,1,17),(18,1,18),(19,1,19),(20,1,20),(21,1,21),(22,1,22),(23,1,23),(24,1,24),(25,1,25);

/*Table structure for table `akses_menu` */

DROP TABLE IF EXISTS `akses_menu`;

CREATE TABLE `akses_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `urutan` int(11) NOT NULL DEFAULT '0',
  `nama` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL DEFAULT '#',
  `level` varchar(1) NOT NULL,
  `induk` tinyint(4) NOT NULL DEFAULT '0',
  `icon` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

/*Data for the table `akses_menu` */

insert  into `akses_menu`(`id`,`urutan`,`nama`,`url`,`level`,`induk`,`icon`) values (1,2,'Perencanaan','#','1',0,'fa fa-pencil-square-o'),(2,1,'Usulan Renja','./modules/view/perencanaan/usulan-renja.php','2',1,'-'),(3,2,'Rencana Program Kegiatan','./modules/view/perencanaan/rencana-program.php','2',1,'-'),(4,3,'Kinerja','#','1',0,'fa fa-trophy'),(5,1,'Realisasi Kegiatan','./modules/view/kinerja/realisasi-kegiatan.php','2',4,'-'),(6,2,'Realisasi Capaian Indikator','./modules/view/kinerja/realisasi-indikator.php','2',4,'-'),(7,4,'Laporan','#','1',0,'fa fa-book'),(8,1,'Usulan Renja','./modules/view/laporan/usulan-renja.php','2',7,'-'),(9,2,'Rencana Program Kegiatan','./modules/view/laporan/rencana-program','2',7,'-'),(10,3,'Capaian RPJMD','./modules/view/laporan/capaian-rpjmd.php','2',7,'-'),(11,4,'Capaian Renstra','./modules/view/laporan/capaian-renstra.php','2',7,'-'),(12,5,'Capaian Kegiatan','./modules/view/laporan/capaian-kegiatan.php','2',7,'-'),(13,6,'Capaian RKPD','./modules/view/laporan/capaian-rkpd.php','2',7,'-'),(14,7,'Capaian LKPJ','./modules/view/laporan/capaian-lkpj.php','2',7,'-'),(15,8,'Capaian Agenda 18','./modules/view/laporan/capaian-agenda-18.php','2',7,'-'),(16,9,'Evaluasi Hasil Renja SKPD','./modules/view/laporan/evaluasi-renja-skpd.php','2',7,'-'),(17,1,'Menu Admin','#','1',0,'fa fa-user'),(18,1,'Master Tahun','./modules/view/master-data/tahun.php','2',17,'-'),(19,2,'Master Urusan','./modules/view/master-data/urusan.php','2',17,'-'),(20,3,'Master Bidang','./modules/view/master-data/bidang.php','2',17,'-'),(21,4,'Master Prioritas Daerah','./modules/view/master-data/prioritas.php','2',17,'-'),(22,5,'Master Sasaran Daerah','./modules/view/master-data/sasaran.php','2',17,'-'),(23,6,'Master Program','./modules/view/master-data/program.php','2',17,'-'),(24,7,'Master Indikator Program','./modules/view/master-data/indikator.php','2',17,'-'),(25,8,'Master Kegiatan','./modules/view/master-data/kegiatan.php','2',17,'-');

/*Table structure for table `bidang` */

DROP TABLE IF EXISTS `bidang`;

CREATE TABLE `bidang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bidang` varchar(50) DEFAULT NULL,
  `hapus` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `bidang` */

insert  into `bidang`(`id`,`bidang`,`hapus`) values (1,'Non Urusan (Eks BAU)','0'),(2,'Pendidikan','0'),(3,'Pemberdayaan Perempuan dan Perlindungan Anak','0'),(4,'Pengendalian Penduduk dan Keluarga Berencana','0');

/*Table structure for table `indikator` */

DROP TABLE IF EXISTS `indikator`;

CREATE TABLE `indikator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `indikator` varchar(100) DEFAULT NULL,
  `hapus` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `indikator` */

insert  into `indikator`(`id`,`indikator`,`hapus`) values (1,'Tes','0');

/*Table structure for table `kegiatan` */

DROP TABLE IF EXISTS `kegiatan`;

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kegiatan` varchar(100) DEFAULT NULL,
  `hapus` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `kegiatan` */

insert  into `kegiatan`(`id`,`kegiatan`,`hapus`) values (1,'Tes','0');

/*Table structure for table `log_login` */

DROP TABLE IF EXISTS `log_login`;

CREATE TABLE `log_login` (
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_pemakai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `log_login` */

insert  into `log_login`(`tgl`,`id_pemakai`) values ('2016-04-12 07:57:52',1),('2016-04-12 08:01:48',1),('2016-04-12 08:06:15',1),('2016-04-12 08:22:50',1),('2016-04-12 09:23:49',1),('2016-04-12 11:29:18',1),('2016-04-12 12:41:06',1),('2016-04-12 17:32:16',1),('2016-04-12 21:21:50',1);

/*Table structure for table `pemakai` */

DROP TABLE IF EXISTS `pemakai`;

CREATE TABLE `pemakai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `jk` varchar(1) DEFAULT NULL,
  `user` text,
  `kunci` text,
  `hapus` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `pemakai` */

insert  into `pemakai`(`id`,`nama`,`jk`,`user`,`kunci`,`hapus`) values (1,'Administrator','L','WVdSdGFXND0=','WVdSdGFXND0=','0');

/*Table structure for table `prioritas` */

DROP TABLE IF EXISTS `prioritas`;

CREATE TABLE `prioritas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prioritas` varchar(100) DEFAULT NULL,
  `hapus` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `prioritas` */

insert  into `prioritas`(`id`,`prioritas`,`hapus`) values (1,'Tes','0');

/*Table structure for table `program` */

DROP TABLE IF EXISTS `program`;

CREATE TABLE `program` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `program` varchar(100) DEFAULT NULL,
  `hapus` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `program` */

insert  into `program`(`id`,`program`,`hapus`) values (1,'Tes','0');

/*Table structure for table `realisasi_program` */

DROP TABLE IF EXISTS `realisasi_program`;

CREATE TABLE `realisasi_program` (
  `id_rencana` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `tolok_ukur` text,
  `target` text,
  `lokasi` text,
  `keuangan` double DEFAULT NULL,
  `permasalahan` text,
  `upaya_penyelesaian` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `realisasi_program` */

/*Table structure for table `rencana_program` */

DROP TABLE IF EXISTS `rencana_program`;

CREATE TABLE `rencana_program` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tahun` int(11) DEFAULT NULL,
  `id_urusan` int(11) DEFAULT NULL,
  `id_bidang` int(11) DEFAULT NULL,
  `id_prioritas` int(11) DEFAULT NULL,
  `id_sasaran` int(11) DEFAULT NULL,
  `id_program` int(11) DEFAULT NULL,
  `id_indikator` int(11) DEFAULT NULL,
  `id_kegiatan` int(11) DEFAULT NULL,
  `tolok_ukur_keluaran` text,
  `target_keluaran` text,
  `tolok_ukur_hasil` text,
  `target_hasil` text,
  `lokasi` text,
  `pagu_anggaran` double DEFAULT NULL,
  `belanja_pegawai` double DEFAULT NULL,
  `belanja_barang_jasa` double DEFAULT NULL,
  `belanja_modal` double DEFAULT NULL,
  `pagu_anggaran_th_berikutnya` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `rencana_program` */

insert  into `rencana_program`(`id`,`id_tahun`,`id_urusan`,`id_bidang`,`id_prioritas`,`id_sasaran`,`id_program`,`id_indikator`,`id_kegiatan`,`tolok_ukur_keluaran`,`target_keluaran`,`tolok_ukur_hasil`,`target_hasil`,`lokasi`,`pagu_anggaran`,`belanja_pegawai`,`belanja_barang_jasa`,`belanja_modal`,`pagu_anggaran_th_berikutnya`) values (1,1,1,1,1,1,1,1,1,'tes','tes','tes','tes','tes',100000000,50000000,25000000,25000000,150000000);

/*Table structure for table `sasaran` */

DROP TABLE IF EXISTS `sasaran`;

CREATE TABLE `sasaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sasaran` varchar(100) DEFAULT NULL,
  `hapus` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `sasaran` */

insert  into `sasaran`(`id`,`sasaran`,`hapus`) values (1,'Tes','0');

/*Table structure for table `tahun` */

DROP TABLE IF EXISTS `tahun`;

CREATE TABLE `tahun` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tahun` varchar(15) DEFAULT NULL,
  `hapus` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tahun` */

insert  into `tahun`(`id`,`tahun`,`hapus`) values (1,'2016 - 2017','0'),(2,'2017 - 2018','0');

/*Table structure for table `urusan` */

DROP TABLE IF EXISTS `urusan`;

CREATE TABLE `urusan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `urusan` varchar(50) DEFAULT NULL,
  `hapus` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `urusan` */

insert  into `urusan`(`id`,`urusan`,`hapus`) values (1,'Non Urusan (Eks BAU)','0'),(2,'Urusan Wajib Pelayanan Dasar','0'),(3,'Urusan Wajib Non Pelayanan Dasar','0');

/*Table structure for table `usulan_renja` */

DROP TABLE IF EXISTS `usulan_renja`;

CREATE TABLE `usulan_renja` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tahun` int(11) DEFAULT NULL,
  `id_urusan` int(11) DEFAULT NULL,
  `id_bidang` int(11) DEFAULT NULL,
  `id_prioritas` int(11) DEFAULT NULL,
  `id_sasaran` int(11) DEFAULT NULL,
  `id_program` int(11) DEFAULT NULL,
  `id_indikator` int(11) DEFAULT NULL,
  `id_kegiatan` int(11) DEFAULT NULL,
  `tolok_ukur_keluaran` text,
  `target_keluaran` text,
  `tolok_ukur_hasil` text,
  `target_hasil` text,
  `lokasi` text,
  `pagu_anggaran` double DEFAULT NULL,
  `belanja_pegawai` double DEFAULT NULL,
  `belanja_barang_jasa` double DEFAULT NULL,
  `belanja_modal` double DEFAULT NULL,
  `pagu_anggaran_th_berikutnya` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `usulan_renja` */

insert  into `usulan_renja`(`id`,`id_tahun`,`id_urusan`,`id_bidang`,`id_prioritas`,`id_sasaran`,`id_program`,`id_indikator`,`id_kegiatan`,`tolok_ukur_keluaran`,`target_keluaran`,`tolok_ukur_hasil`,`target_hasil`,`lokasi`,`pagu_anggaran`,`belanja_pegawai`,`belanja_barang_jasa`,`belanja_modal`,`pagu_anggaran_th_berikutnya`) values (1,1,1,1,1,1,1,1,1,'tes','tes','tes','tes','tes',100000000,50000000,25000000,25000000,150000000);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

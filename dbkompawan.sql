/*
SQLyog Professional v12.5.1 (64 bit)
MySQL - 10.1.34-MariaDB : Database - dbkompawan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `tbl_detail_transaksi` */

DROP TABLE IF EXISTS `tbl_detail_transaksi`;

CREATE TABLE `tbl_detail_transaksi` (
  `transaksi_id` int(12) DEFAULT NULL,
  `produk_id` int(12) DEFAULT NULL,
  `qty` int(3) DEFAULT NULL,
  `harga` int(8) DEFAULT NULL,
  `ditambah_oleh` varchar(100) DEFAULT NULL,
  `tgl_tambah` datetime DEFAULT NULL,
  `diedit_oleh` varchar(100) DEFAULT NULL,
  `tgl_edit` datetime DEFAULT NULL,
  KEY `transaksi_id` (`transaksi_id`),
  CONSTRAINT `tbl_detail_transaksi_ibfk_1` FOREIGN KEY (`transaksi_id`) REFERENCES `tbl_transaksi` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_detail_transaksi` */

insert  into `tbl_detail_transaksi`(`transaksi_id`,`produk_id`,`qty`,`harga`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (103,108,2,4624,'00@admin.com','2020-01-23 00:24:01',NULL,NULL);
insert  into `tbl_detail_transaksi`(`transaksi_id`,`produk_id`,`qty`,`harga`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (103,109,3,12936,'00@admin.com','2020-01-23 00:24:01',NULL,NULL);
insert  into `tbl_detail_transaksi`(`transaksi_id`,`produk_id`,`qty`,`harga`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (103,110,4,222220,'00@admin.com','2020-01-23 00:24:01',NULL,NULL);

/*Table structure for table `tbl_paket` */

DROP TABLE IF EXISTS `tbl_paket`;

CREATE TABLE `tbl_paket` (
  `id` int(2) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `produk_max` int(5) DEFAULT NULL,
  `transaksi_max` int(5) DEFAULT NULL,
  `harga` int(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_paket` */

insert  into `tbl_paket`(`id`,`nama`,`produk_max`,`transaksi_max`,`harga`) values (01,'Starting',30,100,0);
insert  into `tbl_paket`(`id`,`nama`,`produk_max`,`transaksi_max`,`harga`) values (02,'Growing',500,1000,49000);
insert  into `tbl_paket`(`id`,`nama`,`produk_max`,`transaksi_max`,`harga`) values (03,'Professional',99999,3000,199000);
insert  into `tbl_paket`(`id`,`nama`,`produk_max`,`transaksi_max`,`harga`) values (04,'Enterprise',99999,9999999,499000);

/*Table structure for table `tbl_pelanggan` */

DROP TABLE IF EXISTS `tbl_pelanggan`;

CREATE TABLE `tbl_pelanggan` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `hp` varchar(12) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `alamat` text,
  `pos_id` bigint(11) DEFAULT NULL,
  `user_id` int(5) unsigned zerofill DEFAULT NULL,
  `dihapus` enum('1','0') DEFAULT NULL,
  `ditambah_oleh` varchar(100) DEFAULT NULL,
  `tgl_tambah` datetime DEFAULT NULL,
  `diedit_oleh` varchar(100) DEFAULT NULL,
  `tgl_edit` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `pos_id` (`pos_id`),
  CONSTRAINT `tbl_pelanggan_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `tbl_pelanggan_ibfk_2` FOREIGN KEY (`pos_id`) REFERENCES `tbl_pos` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_pelanggan` */

insert  into `tbl_pelanggan`(`id`,`nama`,`hp`,`email`,`alamat`,`pos_id`,`user_id`,`dihapus`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (117,'1','1','1','1',1,00002,'0','00@admin.com','2020-01-22 18:37:04',NULL,NULL);
insert  into `tbl_pelanggan`(`id`,`nama`,`hp`,`email`,`alamat`,`pos_id`,`user_id`,`dihapus`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (118,'1','1','1','1',3,00002,'0','00@admin.com','2020-01-22 18:39:09',NULL,NULL);
insert  into `tbl_pelanggan`(`id`,`nama`,`hp`,`email`,`alamat`,`pos_id`,`user_id`,`dihapus`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (119,'2','2','2','2',1,00002,'0','00@admin.com','2020-01-22 18:39:45',NULL,NULL);
insert  into `tbl_pelanggan`(`id`,`nama`,`hp`,`email`,`alamat`,`pos_id`,`user_id`,`dihapus`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (120,'udin','1','1','1',3,00002,'0','00@admin.com','2020-01-22 18:45:53',NULL,NULL);

/*Table structure for table `tbl_produk` */

DROP TABLE IF EXISTS `tbl_produk`;

CREATE TABLE `tbl_produk` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `sku` varchar(50) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `harga_jual` int(8) DEFAULT NULL,
  `harga_beli` int(8) DEFAULT NULL,
  `stok` int(4) DEFAULT NULL,
  `berat` int(5) DEFAULT NULL,
  `deskripsi` text,
  `gambar` varchar(50) DEFAULT NULL,
  `dihapus` enum('0','1') DEFAULT NULL,
  `user_id` int(5) unsigned zerofill DEFAULT NULL,
  `ditambah_oleh` varchar(100) DEFAULT NULL,
  `tgl_tambah` datetime DEFAULT NULL,
  `diedit_oleh` varchar(100) DEFAULT NULL,
  `tgl_edit` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `tbl_produk_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_produk` */

insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (1,'sku001','produk1',283204,198250,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (2,'sku002','produk2',328539,229980,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (3,'sku003','produk3',121494,85050,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (4,'sku004','produk4',437265,306090,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (5,'sku005','produk5',302407,211690,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (6,'sku006','produk6',483390,338380,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (7,'sku007','produk7',242342,169640,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (8,'sku008','produk8',264818,185380,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (9,'sku009','produk9',417214,292050,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (10,'sku010','produk10',38223,26760,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (11,'sku011','produk11',146075,102260,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (12,'sku012','produk12',492937,345060,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (13,'sku013','produk13',473166,331220,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (14,'sku014','produk14',172773,120950,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (15,'sku015','produk15',105116,73590,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (16,'sku016','produk16',438914,307240,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (17,'sku017','produk17',34064,23850,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (18,'sku018','produk18',344872,241420,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (19,'sku019','produk19',322102,225480,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (20,'sku020','produk20',479921,335950,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (21,'sku021','produk21',15623,10940,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (22,'sku022','produk22',263791,184660,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (23,'sku023','produk23',212273,148600,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (24,'sku024','produk24',372486,260750,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (25,'sku025','produk25',177954,124570,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (26,'sku026','produk26',359733,251820,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (27,'sku027','produk27',64456,45120,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (28,'sku028','produk28',131103,91780,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (29,'sku029','produk29',338559,237000,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (30,'sku030','produk30',413442,289410,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (31,'sku031','produk31',394497,276150,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (32,'sku032','produk32',182654,127860,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (33,'sku033','produk33',442928,310050,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (34,'sku034','produk34',424018,296820,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (35,'sku035','produk35',318003,222610,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (36,'sku036','produk36',152488,106750,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (37,'sku037','produk37',51193,35840,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (38,'sku038','produk38',111727,78210,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (39,'sku039','produk39',415755,291030,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (40,'sku040','produk40',191293,133910,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (41,'sku041','produk41',235281,164700,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (42,'sku042','produk42',142554,99790,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (43,'sku043','produk43',465012,325510,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (44,'sku044','produk44',406461,284530,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (45,'sku045','produk45',302470,211730,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (46,'sku046','produk46',163804,114670,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (47,'sku047','produk47',456606,319630,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (48,'sku048','produk48',103744,72630,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (49,'sku049','produk49',289038,202330,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (50,'sku050','produk50',477443,334220,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (51,'sku051','produk51',446411,312490,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (52,'sku052','produk52',310806,217570,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (53,'sku053','produk53',439966,307980,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (54,'sku054','produk54',72637,50850,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (55,'sku055','produk55',197454,138220,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (56,'sku056','produk56',80183,56130,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (57,'sku057','produk57',80039,56030,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (58,'sku058','produk58',124682,87280,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (59,'sku059','produk59',270335,189240,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (60,'sku060','produk60',433722,303610,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (61,'sku061','produk61',405099,283570,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (62,'sku062','produk62',264968,185480,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (63,'sku063','produk63',330422,231300,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (64,'sku064','produk64',233692,163590,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (65,'sku065','produk65',189935,132960,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (66,'sku066','produk66',200231,140170,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (67,'sku067','produk67',185848,130100,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (68,'sku068','produk68',176906,123840,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (69,'sku069','produk69',403912,282740,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (70,'sku070','produk70',21831,15290,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (71,'sku071','produk71',95001,66510,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (72,'sku072','produk72',112200,78540,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (73,'sku073','produk73',434519,304170,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (74,'sku074','produk74',341872,239320,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (75,'sku075','produk75',311961,218380,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (76,'sku076','produk76',222152,155510,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (77,'sku077','produk77',433485,303440,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (78,'sku078','produk78',324777,227350,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (79,'sku079','produk79',213250,149280,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (80,'sku080','produk80',360890,252630,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (81,'sku081','produk81',274931,192460,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (82,'sku082','produk82',22832,15990,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (83,'sku083','produk83',152539,106780,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (84,'sku084','produk84',350916,245650,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (85,'sku085','produk85',422637,295850,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (86,'sku086','produk86',133440,93410,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (87,'sku087','produk87',363446,254420,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (88,'sku088','produk88',342245,239580,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (89,'sku089','produk89',29970,20980,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (90,'sku090','produk90',430420,301300,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (91,'sku091','produk91',279345,195550,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (92,'sku092','produk92',339558,237700,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (93,'sku093','produk93',25678,17980,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (94,'sku094','produk94',394410,276090,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (95,'sku095','produk95',205432,143810,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (96,'sku096','produk96',402497,281750,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (97,'sku097','produk97',78136,54700,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (98,'sku098','produk98',477383,334170,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (99,'sku099','produk99',352696,246890,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (100,'sku100','produk100',378620,265040,100,100,NULL,NULL,'',00002,'00@admin.com',NULL,NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (105,'132421','baju',20000,12222,12,1000,'123432',NULL,'1',00002,'00@admin.com','2020-01-22 09:20:20','00@admin.com','2020-01-22 15:50:16');
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (106,'31321321321','kaos',123123,123123,21312,12321,'123123',NULL,'1',00002,'00@admin.com','2020-01-22 11:02:45','00@admin.com','2020-01-22 15:50:19');
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (107,'987654321','sutra',1,1,11,1,'1','987654321.jpg','1',00002,'00@admin.com','2020-01-22 11:05:04','00@admin.com','2020-01-22 15:50:12');
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (108,'123','Spiderman ',2312,1234,122,111,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor mi vitae velit posuere volutpat. Aliquam bibendum interdum sapien, non consectetur nunc auctor sit amet. Sed nec urna at diam ultricies lobortis. Integer et risus vel nisi tempus blandit. In venenatis, velit a imperdiet luctus, eros arcu ornare tellus, eget pulvinar velit mi id lorem. Nulla vestibulum mi in posuere euismod. Pellentesque ac ipsum sed est sagittis mattis id non velit. Mauris porttitor mauris vitae ultricies blandit. Vivamus nec ultricies nisi. In gravida libero at dolor feugiat rutrum eget id odio. Aliquam nec erat et velit vehicula viverra. Proin pharetra ullamcorper lacinia. Interdum et malesuada fames ac ante ipsum primis in faucibus.\r\n\r\nProin viverra laoreet laoreet. Nullam faucibus ipsum tortor, sit amet eleifend ligula porta nec. Suspendisse imperdiet libero in imperdiet dignissim. Duis eget lacinia orci, in lobortis ligula. Fusce egestas leo quis ex ornare vestibulum. Donec auctor, neque vel egestas faucibus, ipsum nulla pellentesque ligula, a semper lacus lectus id libero. Suspendisse fermentum metus dolor. Vivamus posuere ligula scelerisque leo faucibus, ut feugiat risus aliquet.\r\n\r\nDonec eu neque id ante pretium condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pulvinar diam vel nisi tempor placerat. Nullam a vehicula tellus, et interdum felis. Ut ac purus vitae arcu bibendum congue sit amet vel sem. Curabitur nunc justo, luctus sit amet sodales vitae, posuere sed lacus. Vestibulum commodo in ante luctus interdum. Nullam quam dui, euismod iaculis egestas vel, malesuada pellentesque ipsum. Nam et ex nunc. Quisque et aliquam ligula. Fusce vulputate metus non erat rhoncus fringilla. Duis sollicitudin rhoncus elit, at bibendum velit egestas nec. Proin porta felis non orci pellentesque dapibus. Curabitur faucibus urna non justo gravida, maximus viverra ante aliquet. Phasellus rhoncus erat sed sem malesuada dictum.','123.jpg','0',00002,'00@admin.com','2020-01-22 15:51:40',NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (109,'321','Spider Logo',4312,3213,123,2222,'Nullam fringilla, nisl non ultricies accumsan, risus augue iaculis orci, quis commodo mauris erat semper nulla. Proin in facilisis orci, in convallis tellus. Aliquam imperdiet eros at elementum eleifend. Duis feugiat imperdiet tortor at bibendum. Integer eros orci, dictum nec ornare quis, mattis quis turpis. Etiam rhoncus vitae purus non condimentum. Vivamus cursus interdum bibendum. Quisque tortor mi, condimentum in maximus vel, convallis ut ante. Etiam in venenatis metus, id mattis nunc.\r\n\r\nInteger ornare ut odio at rutrum. Phasellus luctus maximus justo, at imperdiet erat scelerisque posuere. Praesent eget augue elementum, laoreet elit nec, commodo lectus. Vivamus porttitor enim vitae posuere imperdiet. Curabitur molestie rutrum purus, eget aliquet justo laoreet eu. Integer congue odio id commodo viverra. Suspendisse sed sem diam.','321.jpg','0',00002,'00@admin.com','2020-01-22 15:52:17',NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (110,'4432','Spiderman Deui',55555,44444,23134,2123,'Proin viverra laoreet laoreet. Nullam faucibus ipsum tortor, sit amet eleifend ligula porta nec. Suspendisse imperdiet libero in imperdiet dignissim. Duis eget lacinia orci, in lobortis ligula. Fusce egestas leo quis ex ornare vestibulum. Donec auctor, neque vel egestas faucibus, ipsum nulla pellentesque ligula, a semper lacus lectus id libero. Suspendisse fermentum metus dolor. Vivamus posuere ligula scelerisque leo faucibus, ut feugiat risus aliquet.\r\n\r\nDonec eu neque id ante pretium condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pulvinar diam vel nisi tempor placerat. Nullam a vehicula tellus, et interdum felis. Ut ac purus vitae arcu bibendum congue sit amet vel sem. Curabitur nunc justo, luctus sit amet sodales vitae, posuere sed lacus. Vestibulum commodo in ante luctus interdum. Nullam quam dui, euismod iaculis egestas vel, malesuada pellentesque ipsum. Nam et ex nunc. Quisque et aliquam ligula. Fusce vulputate metus non erat rhoncus fringilla. Duis sollicitudin rhoncus elit, at bibendum velit egestas nec. Proin porta felis non orci pellentesque dapibus. Curabitur faucibus urna non justo gravida, maximus viverra ante aliquet. Phasellus rhoncus erat sed sem malesuada dictum.\r\n\r\nNullam fringilla, nisl non ultricies accumsan, risus augue iaculis orci, quis commodo mauris erat semper nulla. Proin in facilisis orci, in convallis tellus. Aliquam imperdiet eros at elementum eleifend. Duis feugiat imperdiet tortor at bibendum. Integer eros orci, dictum nec ornare quis, mattis quis turpis. Etiam rhoncus vitae purus non condimentum. Vivamus cursus interdum bibendum. Quisque tortor mi, condimentum in maximus vel, convallis ut ante. Etiam in venenatis metus, id mattis nunc.\r\n\r\nInteger ornare ut odio at rutrum. Phasellus luctus maximus justo, at imperdiet erat scelerisque posuere. Praesent eget augue elementum, laoreet elit nec, commodo lectus. Vivamus porttitor enim vitae posuere imperdiet. Curabitur molestie rutrum purus, eget aliquet justo laoreet eu. Integer congue odio id commodo viverra. Suspendisse sed sem diam.','4432.jpg','0',00002,'00@admin.com','2020-01-22 16:01:55',NULL,NULL);
insert  into `tbl_produk`(`id`,`sku`,`nama`,`harga_jual`,`harga_beli`,`stok`,`berat`,`deskripsi`,`gambar`,`dihapus`,`user_id`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (111,'4444','Iron Man',43232,2132,123,3333,'Proin viverra laoreet laoreet. Nullam faucibus ipsum tortor, sit amet eleifend ligula porta nec. Suspendisse imperdiet libero in imperdiet dignissim. Duis eget lacinia orci, in lobortis ligula. Fusce egestas leo quis ex ornare vestibulum. Donec auctor, neque vel egestas faucibus, ipsum nulla pellentesque ligula, a semper lacus lectus id libero. Suspendisse fermentum metus dolor. Vivamus posuere ligula scelerisque leo faucibus, ut feugiat risus aliquet.\r\n\r\nDonec eu neque id ante pretium condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pulvinar diam vel nisi tempor placerat. Nullam a vehicula tellus, et interdum felis. Ut ac purus vitae arcu bibendum congue sit amet vel sem. Curabitur nunc justo, luctus sit amet sodales vitae, posuere sed lacus. Vestibulum commodo in ante luctus interdum. Nullam quam dui, euismod iaculis egestas vel, malesuada pellentesque ipsum. Nam et ex nunc. Quisque et aliquam ligula. Fusce vulputate metus non erat rhoncus fringilla. Duis sollicitudin rhoncus elit, at bibendum velit egestas nec. Proin porta felis non orci pellentesque dapibus. Curabitur faucibus urna non justo gravida, maximus viverra ante aliquet. Phasellus rhoncus erat sed sem malesuada dictum.','4444.jpg','0',00002,'00@admin.com','2020-01-22 15:54:54',NULL,NULL);

/*Table structure for table `tbl_transaksi` */

DROP TABLE IF EXISTS `tbl_transaksi`;

CREATE TABLE `tbl_transaksi` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `pelanggan_id` int(12) DEFAULT NULL,
  `total_harga` int(9) DEFAULT NULL,
  `user_id` int(5) unsigned zerofill DEFAULT NULL,
  `kurir` int(2) DEFAULT NULL,
  `status` enum('belum_diproses','sudah_diproses','sudah_dikirim') DEFAULT NULL,
  `dihapus` enum('0','1') DEFAULT NULL,
  `ditambah_oleh` varchar(100) DEFAULT NULL,
  `tgl_tambah` datetime DEFAULT NULL,
  `diedit_oleh` varchar(100) DEFAULT NULL,
  `tgl_edit` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pelanggan_id` (`pelanggan_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `tbl_transaksi_ibfk_1` FOREIGN KEY (`pelanggan_id`) REFERENCES `tbl_pelanggan` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `tbl_transaksi_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_transaksi` */

insert  into `tbl_transaksi`(`id`,`pelanggan_id`,`total_harga`,`user_id`,`kurir`,`status`,`dihapus`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (103,120,239780,00002,0,NULL,'0','00@admin.com','2020-01-23 00:24:01',NULL,NULL);

/*Table structure for table `tbl_transaksi_paket` */

DROP TABLE IF EXISTS `tbl_transaksi_paket`;

CREATE TABLE `tbl_transaksi_paket` (
  `id` int(7) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `user_id` int(5) unsigned zerofill DEFAULT NULL,
  `paket_id` int(2) unsigned zerofill DEFAULT NULL,
  `tgl_daftar` date DEFAULT NULL,
  `tgl_aktif` date DEFAULT NULL,
  `tgl_expire` date DEFAULT NULL,
  `total` int(7) DEFAULT NULL,
  `status` enum('1','0') DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `paket_id` (`paket_id`),
  CONSTRAINT `tbl_transaksi_paket_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `tbl_transaksi_paket_ibfk_2` FOREIGN KEY (`paket_id`) REFERENCES `tbl_paket` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_transaksi_paket` */

insert  into `tbl_transaksi_paket`(`id`,`user_id`,`paket_id`,`tgl_daftar`,`tgl_aktif`,`tgl_expire`,`total`,`status`) values (0000001,00002,01,'2020-01-22','2020-01-22','2020-01-31',49000,'0');

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `id` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `hp` varchar(15) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `hak_akses` enum('0','1') DEFAULT NULL,
  `paket_id` int(2) unsigned zerofill DEFAULT NULL,
  `toko_id` varchar(100) DEFAULT NULL,
  `dihapus` enum('1','0') DEFAULT NULL,
  `ditambah_oleh` varchar(100) DEFAULT NULL,
  `tgl_tambah` datetime DEFAULT NULL,
  `diedit_oleh` varchar(100) DEFAULT NULL,
  `tgl_edit` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `paket_id` (`paket_id`),
  CONSTRAINT `tbl_user_ibfk_1` FOREIGN KEY (`paket_id`) REFERENCES `tbl_paket` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`id`,`nama`,`email`,`hp`,`password`,`hak_akses`,`paket_id`,`toko_id`,`dihapus`,`ditambah_oleh`,`tgl_tambah`,`diedit_oleh`,`tgl_edit`) values (00002,'ILHAM','00@admin.com','1','$2y$10$BhM0xcZuM0/dfQOrDUugF.YHLHzGuk2u4JwjY3kNV6P4gmkzjBoTG','1',01,NULL,'0','00@admin.com','2020-01-16 04:26:30',NULL,NULL);

/* Trigger structure for table `tbl_transaksi_paket` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `t_after_update_transaksi_paket` */$$

/*!50003 CREATE */ /*!50003 TRIGGER `t_after_update_transaksi_paket` AFTER UPDATE ON `tbl_transaksi_paket` FOR EACH ROW BEGIN
	if new.status = '1' then
	update tbl_user set paket_id = new.paket_id where id = new.user_id;
	elseif new.status = '0' THEN
	UPDATE tbl_user SET paket_id = '1' WHERE id = new.user_id;
	end if;
    END */$$


DELIMITER ;

/* Trigger structure for table `tbl_user` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `t_after_insert_user` */$$

/*!50003 CREATE */ /*!50003 TRIGGER `t_after_insert_user` AFTER INSERT ON `tbl_user` FOR EACH ROW BEGIN
	insert into tbl_transaksi_paket(user_id, paket_id, tgl_daftar, tgl_aktif, tgl_expire, total, status)
	values(new.id, 1, now(), now(), adddate(now(), interval 5 year), 49000, 1);
    END */$$


DELIMITER ;

/*Table structure for table `v_pelanggan_kelurahan` */

DROP TABLE IF EXISTS `v_pelanggan_kelurahan`;

/*!50001 DROP VIEW IF EXISTS `v_pelanggan_kelurahan` */;
/*!50001 DROP TABLE IF EXISTS `v_pelanggan_kelurahan` */;

/*!50001 CREATE TABLE  `v_pelanggan_kelurahan`(
 `id` int(12) ,
 `nama` varchar(50) ,
 `hp` varchar(12) ,
 `email` varchar(100) ,
 `alamat` text ,
 `pos_id` bigint(11) ,
 `user_id` int(5) unsigned zerofill ,
 `dihapus` enum('1','0') ,
 `ditambah_oleh` varchar(100) ,
 `tgl_tambah` datetime ,
 `diedit_oleh` varchar(100) ,
 `tgl_edit` datetime ,
 `urban` varchar(100) ,
 `sub_district` varchar(100) ,
 `city` varchar(100) 
)*/;

/*Table structure for table `v_transaksi` */

DROP TABLE IF EXISTS `v_transaksi`;

/*!50001 DROP VIEW IF EXISTS `v_transaksi` */;
/*!50001 DROP TABLE IF EXISTS `v_transaksi` */;

/*!50001 CREATE TABLE  `v_transaksi`(
 `id` int(12) ,
 `pelanggan_id` int(12) ,
 `total_harga` int(9) ,
 `user_id` int(5) unsigned zerofill ,
 `kurir` int(2) ,
 `dihapus` enum('0','1') ,
 `ditambah_oleh` varchar(100) ,
 `tgl_tambah` datetime ,
 `diedit_oleh` varchar(100) ,
 `tgl_edit` datetime ,
 `pelanggan_nama` varchar(50) ,
 `pelanggan_hp` varchar(12) 
)*/;

/*Table structure for table `v_user_paket` */

DROP TABLE IF EXISTS `v_user_paket`;

/*!50001 DROP VIEW IF EXISTS `v_user_paket` */;
/*!50001 DROP TABLE IF EXISTS `v_user_paket` */;

/*!50001 CREATE TABLE  `v_user_paket`(
 `user_id` int(5) unsigned zerofill ,
 `user_nama` varchar(50) ,
 `email` varchar(50) ,
 `hp` varchar(15) ,
 `password` varchar(100) ,
 `hak_akses` enum('0','1') ,
 `dihapus` enum('1','0') ,
 `tgl_aktif` date ,
 `tgl_expire` date ,
 `status` enum('1','0') ,
 `paket_id` int(2) unsigned zerofill ,
 `paket_nama` varchar(50) ,
 `produk_max` int(5) ,
 `transaksi_max` int(5) 
)*/;

/*View structure for view v_pelanggan_kelurahan */

/*!50001 DROP TABLE IF EXISTS `v_pelanggan_kelurahan` */;
/*!50001 DROP VIEW IF EXISTS `v_pelanggan_kelurahan` */;

/*!50001 CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `v_pelanggan_kelurahan` AS (select `a`.`id` AS `id`,`a`.`nama` AS `nama`,`a`.`hp` AS `hp`,`a`.`email` AS `email`,`a`.`alamat` AS `alamat`,`a`.`pos_id` AS `pos_id`,`a`.`user_id` AS `user_id`,`a`.`dihapus` AS `dihapus`,`a`.`ditambah_oleh` AS `ditambah_oleh`,`a`.`tgl_tambah` AS `tgl_tambah`,`a`.`diedit_oleh` AS `diedit_oleh`,`a`.`tgl_edit` AS `tgl_edit`,`b`.`urban` AS `urban`,`b`.`sub_district` AS `sub_district`,`b`.`city` AS `city` from (`tbl_pelanggan` `a` join `tbl_pos` `b` on((`a`.`pos_id` = `b`.`id`)))) */;

/*View structure for view v_transaksi */

/*!50001 DROP TABLE IF EXISTS `v_transaksi` */;
/*!50001 DROP VIEW IF EXISTS `v_transaksi` */;

/*!50001 CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `v_transaksi` AS (select `a`.`id` AS `id`,`a`.`pelanggan_id` AS `pelanggan_id`,`a`.`total_harga` AS `total_harga`,`a`.`user_id` AS `user_id`,`a`.`kurir` AS `kurir`,`a`.`dihapus` AS `dihapus`,`a`.`ditambah_oleh` AS `ditambah_oleh`,`a`.`tgl_tambah` AS `tgl_tambah`,`a`.`diedit_oleh` AS `diedit_oleh`,`a`.`tgl_edit` AS `tgl_edit`,`b`.`nama` AS `pelanggan_nama`,`b`.`hp` AS `pelanggan_hp` from (`tbl_transaksi` `a` join `tbl_pelanggan` `b` on((`a`.`pelanggan_id` = `b`.`id`)))) */;

/*View structure for view v_user_paket */

/*!50001 DROP TABLE IF EXISTS `v_user_paket` */;
/*!50001 DROP VIEW IF EXISTS `v_user_paket` */;

/*!50001 CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `v_user_paket` AS (select `a`.`id` AS `user_id`,`a`.`nama` AS `user_nama`,`a`.`email` AS `email`,`a`.`hp` AS `hp`,`a`.`password` AS `password`,`a`.`hak_akses` AS `hak_akses`,`a`.`dihapus` AS `dihapus`,`b`.`tgl_aktif` AS `tgl_aktif`,`b`.`tgl_expire` AS `tgl_expire`,`b`.`status` AS `status`,`c`.`id` AS `paket_id`,`c`.`nama` AS `paket_nama`,`c`.`produk_max` AS `produk_max`,`c`.`transaksi_max` AS `transaksi_max` from ((`tbl_user` `a` join `tbl_transaksi_paket` `b` on((`b`.`user_id` = `a`.`id`))) join `tbl_paket` `c` on((`b`.`paket_id` = `c`.`id`)))) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

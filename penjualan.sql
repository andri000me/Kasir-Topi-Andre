# Host: localhost  (Version 5.5.5-10.4.13-MariaDB)
# Date: 2020-07-27 10:47:30
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "tbl_barang"
#

DROP TABLE IF EXISTS `tbl_barang`;
CREATE TABLE `tbl_barang` (
  `barang_id` varchar(15) NOT NULL,
  `barang_nama` varchar(150) DEFAULT NULL,
  `barang_harjul_grosir` double DEFAULT NULL,
  `barang_stok` int(11) DEFAULT 0,
  `barang_min_stok` int(11) DEFAULT 0,
  `barang_tgl_input` timestamp NULL DEFAULT current_timestamp(),
  `barang_tgl_last_update` datetime DEFAULT NULL,
  `kategori_id` int(11) DEFAULT NULL,
  `satuan_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`barang_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "tbl_barang"
#

INSERT INTO `tbl_barang` VALUES ('BR000001','Baju Gamis',100000,94,10,'2020-07-27 02:29:07',NULL,5,10),('BR000002','nasi uduk',100000,100,10,'2020-07-27 02:29:28',NULL,4,10),('BR000003','air zam zam',100000,100,10,'2020-07-27 02:29:56',NULL,6,10),('BR000004','1 set baju muslim wanita',100000,49,10,'2020-07-27 02:43:52',NULL,5,12);

#
# Structure for table "tbl_detail_jual"
#

DROP TABLE IF EXISTS `tbl_detail_jual`;
CREATE TABLE `tbl_detail_jual` (
  `jual_nofak` varchar(15) DEFAULT NULL,
  `barang_id` varchar(15) DEFAULT NULL,
  `barang_nama` varchar(150) DEFAULT NULL,
  `barang_harjul_grosir` double DEFAULT NULL,
  `d_jual_qty` int(11) DEFAULT NULL,
  `d_jual_diskon` double DEFAULT NULL,
  `d_jual_total` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "tbl_detail_jual"
#

INSERT INTO `tbl_detail_jual` VALUES ('260720000001','BR000001','Baju Gamis',100000,1,0,100000),('260720000002','BR000004','1 set baju muslim wanita',100000,1,0,100000),('260720000002','BR000001','Baju Gamis',100000,5,0,500000);

#
# Structure for table "tbl_jual"
#

DROP TABLE IF EXISTS `tbl_jual`;
CREATE TABLE `tbl_jual` (
  `jual_nofak` varchar(15) NOT NULL,
  `jual_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `jual_total` double DEFAULT NULL,
  `jual_jml_uang` double DEFAULT NULL,
  `jual_kembalian` double DEFAULT NULL,
  `jual_keterangan` varchar(20) DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`jual_nofak`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "tbl_jual"
#

INSERT INTO `tbl_jual` VALUES ('260720000001','2020-07-27 02:30:39',100000,100000,0,'lunas',2),('260720000002','2020-07-27 02:49:10',600000,600000,0,'lunas',3);

#
# Structure for table "tbl_kategori"
#

DROP TABLE IF EXISTS `tbl_kategori`;
CREATE TABLE `tbl_kategori` (
  `kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_nama` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`kategori_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

#
# Data for table "tbl_kategori"
#

INSERT INTO `tbl_kategori` VALUES (4,'Makanan'),(5,'Pakaian'),(6,'Minuman'),(7,'Celana');

#
# Structure for table "tbl_satuan"
#

DROP TABLE IF EXISTS `tbl_satuan`;
CREATE TABLE `tbl_satuan` (
  `satuan_id` int(11) NOT NULL AUTO_INCREMENT,
  `satuan_nama` varchar(35) NOT NULL,
  PRIMARY KEY (`satuan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

#
# Data for table "tbl_satuan"
#

INSERT INTO `tbl_satuan` VALUES (10,'Pcs'),(11,'Lusin'),(12,'Set');

#
# Structure for table "tbl_user"
#

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_nama` varchar(35) DEFAULT NULL,
  `user_username` varchar(30) DEFAULT NULL,
  `user_password` varchar(35) DEFAULT NULL,
  `user_level` varchar(2) DEFAULT NULL,
  `user_status` varchar(2) DEFAULT '1',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

#
# Data for table "tbl_user"
#

INSERT INTO `tbl_user` VALUES (1,'admin','admin','21232f297a57a5a743894a0e4a801fc3','1','1'),(2,'kasir','kasir','c7911af3adbd12a035b289556d96470a','2','1'),(3,'arby','arby','eee36c5cb0208b67fe1b611020980581','2','1');

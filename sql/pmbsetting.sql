-- MySQL dump 10.13  Distrib 5.5.37, for debian-linux-gnu (x86_64)
--
-- Host: 192.168.7.2    Database: pmbsetting
-- ------------------------------------------------------
-- Server version	5.5.46-0ubuntu0.14.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `best`
--

DROP TABLE IF EXISTS `best`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `best` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tglmulai` date DEFAULT NULL,
  `tglakhir` date DEFAULT NULL,
  `kapasitas` int(11) DEFAULT NULL,
  `akd` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `best`
--

LOCK TABLES `best` WRITE;
/*!40000 ALTER TABLE `best` DISABLE KEYS */;
INSERT INTO `best` VALUES (1,'2016-08-05','2016-08-06',200,5),(2,'2016-08-08','2016-08-09',300,5),(3,'2016-08-10','2016-08-11',300,5),(4,'2016-08-12','2016-08-13',300,5),(5,'2016-08-15','2016-08-16',300,5),(6,'2016-08-18','2016-08-19',0,5),(7,'2016-08-22','2016-08-23',260,5),(8,'2016-08-30','2016-08-31',260,5),(9,'2016-09-24','2016-09-25',290,5),(10,'2016-10-01','2016-10-02',400,5),(11,'2016-10-08','2016-10-09',0,5);
/*!40000 ALTER TABLE `best` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blacklist`
--

DROP TABLE IF EXISTS `blacklist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blacklist` (
  `id` char(10) NOT NULL,
  `tgl` date NOT NULL,
  `thnakd` int(11) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `tmplhr` varchar(25) NOT NULL,
  `tgllhr` date NOT NULL,
  `sex` char(1) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `statuspenf` char(1) NOT NULL,
  `jenispendf` char(1) NOT NULL,
  `pil1` char(4) NOT NULL,
  `pil2` char(4) NOT NULL,
  `pil3` char(4) NOT NULL,
  `asalslta` varchar(50) DEFAULT NULL,
  `jurusan` char(2) DEFAULT NULL,
  `alamatslta` varchar(250) DEFAULT NULL,
  `asalpt` varchar(75) DEFAULT NULL,
  `prodiasal` char(4) DEFAULT NULL,
  `ijasah` char(2) DEFAULT NULL,
  `stsujian` char(1) NOT NULL,
  `bw` char(1) DEFAULT NULL COMMENT 'Buta Warna',
  `nb` text COMMENT 'Catatan Khusus',
  `gel` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blacklist`
--

LOCK TABLES `blacklist` WRITE;
/*!40000 ALTER TABLE `blacklist` DISABLE KEYS */;
/*!40000 ALTER TABLE `blacklist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pmb_fakultas`
--

DROP TABLE IF EXISTS `pmb_fakultas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pmb_fakultas` (
  `id` smallint(6) NOT NULL,
  `nama` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pmb_fakultas`
--

LOCK TABLES `pmb_fakultas` WRITE;
/*!40000 ALTER TABLE `pmb_fakultas` DISABLE KEYS */;
INSERT INTO `pmb_fakultas` VALUES (1,'Fakultas Keguruan dan Ilmu Pedidikan'),(2,'Fakultas Ekonomi'),(3,'Fakultas Teknik'),(4,'Fakultas Pertanian'),(6,'Fakultas Agama Islam'),(7,'Fakultas Psikologi'),(8,'Fakultas Farmasi'),(9,'Fakultas Sastra'),(10,'Fakultas Hukum'),(11,'Fakultas Ilmu Kesehatan'),(13,'Fakultas Kedokteran');
/*!40000 ALTER TABLE `pmb_fakultas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pmb_jurusan`
--

DROP TABLE IF EXISTS `pmb_jurusan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pmb_jurusan` (
  `id` char(2) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `keterangan` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pmb_jurusan`
--

LOCK TABLES `pmb_jurusan` WRITE;
/*!40000 ALTER TABLE `pmb_jurusan` DISABLE KEYS */;
INSERT INTO `pmb_jurusan` VALUES ('01','IPA',NULL),('02','IPS',NULL),('03','TKJ',NULL),('04','Multimedia',NULL),('05','Sistem Informasi',NULL),('06','RPL',NULL),('07','Akuntansi',NULL),('08','Administrasi Perkantoran',NULL),('09','Farmasi',NULL),('10','Penjualan',NULL),('11','Lainnya ...',NULL),('12','Teknik Mesin',NULL),('13','Teknik Elektro',NULL),('14','Kimia',NULL);
/*!40000 ALTER TABLE `pmb_jurusan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pmb_prodi`
--

DROP TABLE IF EXISTS `pmb_prodi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pmb_prodi` (
  `id` char(5) NOT NULL,
  `idf` smallint(6) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `jenjang` char(2) NOT NULL,
  `ipa` char(1) DEFAULT NULL,
  `ips` char(1) DEFAULT NULL,
  `pil1` char(1) DEFAULT NULL,
  `pil2` char(1) DEFAULT NULL,
  `sks` int(11) DEFAULT NULL,
  `kel` char(2) DEFAULT NULL,
  `nilai` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pmb_prodi`
--

LOCK TABLES `pmb_prodi` WRITE;
/*!40000 ALTER TABLE `pmb_prodi` DISABLE KEYS */;
INSERT INTO `pmb_prodi` VALUES ('0101',1,'Pendidikan Geografi','S1','1','1','1','1',19,'S1',0),('0102',1,'Pendidikan Sejarah','S1','','1','1','1',20,'S1',0),('0103',1,'PPKn','S1','','1','1','1',19,'S1',0),('0104',1,'Pendidikan Bahasa dan Sastra Indonesia','S1','','1','1','1',23,'S1',10),('0105',1,'Pendidikan Bahasa Inggris','S1','','1','1','1',20,'S1',10),('0106',1,'Pendidikan Matematika','S1','1','1','1','1',22,'S1',10),('0107',1,'Pendidikan Biologi','S1','1','','1','1',20,'S1',0),('0110',1,'Pendidikan Guru Sekolah Dasar (PGSD)','S1','','1','1','1',22,'S1',20),('0111',1,'Pendidikan Guru Pendidikan Anak Usia Dini (PG PAUD)','S1','','1','1','1',21,'S1',0),('0201',2,'Manajemen','S1','','1','1','1',22,'S1',0),('0203',2,'Akuntansi','S1','','1','1','1',20,'S1',0),('0204',2,'Akuntansi','D3','','1','1','1',18,'S1',0),('0301',3,'Teknik Sipil','S1','1','','1','1',20,'S1',0),('0302',3,'Teknik Kimia','S1','1','','1','1',18,'S1',0),('0303',3,'Teknik Elektro','S1','1','','1','1',18,'S1',0),('0304',3,'Teknik Informatika','S1','1','','1','1',20,'S1',0),('0401',4,'Agribisnis','S1','1','1','1','1',19,'S1',0),('0402',4,'Agroteknologi','S1','1','1','1','1',19,'S1',0),('0601',6,'Pendidikan Agama Islam','S1','1','1','1','1',20,'S1',0),('0604',6,'Hukum Ekonomi Syariah','S1','','1','1','1',20,'S1',0),('0701',7,'Psikologi','S1','','1','1','1',20,'S1',0),('0801',8,'Farmasi','S1','1','','1','',20,'S1',5),('0901',9,'Sastra Inggris','S1','','1','1','1',18,'S1',0),('1001',10,'Ilmu Hukum','S1','','1','1','1',16,'S1',0),('1101',11,'Keperawatan','D3','1','','1','1',20,'S1',0),('1102',11,'Keperawatan','S1','1','','1','1',20,'S1',0),('1103',11,'Kebidanan','D3','1','','1','1',24,'S1',0),('1301',13,'Pendidikan Dokter','S1','1','','1','',18,'S1',47),('1105',11,'Teknologi Laboratorium Medik','D4','1',NULL,'1','1',20,'S1',0);
/*!40000 ALTER TABLE `pmb_prodi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pmb_thnakademik`
--

DROP TABLE IF EXISTS `pmb_thnakademik`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pmb_thnakademik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tahun` char(9) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pmb_thnakademik`
--

LOCK TABLES `pmb_thnakademik` WRITE;
/*!40000 ALTER TABLE `pmb_thnakademik` DISABLE KEYS */;
INSERT INTO `pmb_thnakademik` VALUES (1,'2012/2013',0),(2,'2013/2014',0),(3,'2014/2015',0),(4,'2015/2016',0),(5,'2016/2017',1);
/*!40000 ALTER TABLE `pmb_thnakademik` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `useradmin`
--

DROP TABLE IF EXISTS `useradmin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `useradmin` (
  `user` varchar(25) NOT NULL,
  `pass` char(32) NOT NULL,
  `akses` char(1) NOT NULL DEFAULT '3' COMMENT '1=admin, 2=bpmb, 3=Panitia',
  PRIMARY KEY (`user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `useradmin`
--

LOCK TABLES `useradmin` WRITE;
/*!40000 ALTER TABLE `useradmin` DISABLE KEYS */;
INSERT INTO `useradmin` VALUES ('admin','2d683c08a212808c08a23a7935e978b1','1'),('fitri','2d683c08a212808c08a23a7935e978b1','2');
/*!40000 ALTER TABLE `useradmin` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-29 16:46:22

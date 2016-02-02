-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.0.86-community-nt


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema ongc
--

CREATE DATABASE IF NOT EXISTS ongc;
USE ongc;

--
-- Definition of table `data`
--

DROP TABLE IF EXISTS `data`;
CREATE TABLE `data` (
  `ReqNo` varchar(15) NOT NULL,
  `SrNo` int(10) unsigned NOT NULL,
  `MinLat` varchar(15) default 'empty',
  `MaxLat` varchar(15) default 'empty',
  `MinLong` varchar(15) default 'empty',
  `MaxLong` varchar(15) default 'empty',
  `Scale` varchar(10) default 'empty',
  `Seis2d` varchar(15) default 'empty',
  `Seis3d` varchar(15) default 'empty',
  `Lease` varchar(5) default 'empty',
  `Wells` varchar(5) default 'empty',
  PRIMARY KEY  USING BTREE (`SrNo`,`ReqNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

/*!40000 ALTER TABLE `data` DISABLE KEYS */;
INSERT INTO `data` (`ReqNo`,`SrNo`,`MinLat`,`MaxLat`,`MinLong`,`MaxLong`,`Scale`,`Seis2d`,`Seis3d`,`Lease`,`Wells`) VALUES 
 ('1373907885',1,'1','2','3','4','5','6','7','pel','n'),
 ('1373907885',2,'1','4','5','6','8','9','3','ml','y'),
 ('1373907885',3,'4','6','9','4','2','0','5','pel','n');
/*!40000 ALTER TABLE `data` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

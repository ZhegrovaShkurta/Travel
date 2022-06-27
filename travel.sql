-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2022 at 08:39 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteadmin` (IN `p_uid` INT(12))  DELETE
FROM
  admin
WHERE
  uid = p_uid$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteballina` (IN `p_ID_Ballina` INT(12))  DELETE
FROM
  ballina
WHERE
  ID_Ballina = p_ID_Ballina$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deletebiletat` (IN `p_ID_Bileta` INT(12))  DELETE
FROM
  biletat
WHERE
  ID_Bileta = p_ID_Bileta$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deletedestinacionet` (IN `p_ID_Destinacioni` INT(12))  DELETE
FROM
  destinacionet
WHERE
  ID_Destinacioni = p_ID_Destinacioni$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deletekontakti` (IN `p_ID_Kontakti` INT(12))  DELETE
FROM
  kontakti
WHERE
  ID_Kontakti = p_ID_Kontakti$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deleterrethnesh` (IN `p_ID_RrethNesh` INT(12))  DELETE
FROM
  rrethnesh
WHERE
  ID_RrethNesh = p_ID_RrethNesh$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deletesherbimet` (IN `p_ID_Sherbimi` INT(12))  DELETE
FROM
  sherbimet
WHERE
  ID_Sherbimi = p_ID_Sherbimi$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteslider` (IN `p_ID_Slider` INT(12))  DELETE 
FROM
slider
WHERE 
ID_Slider = p_ID_Slider$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteusers` (IN `p_uid` INT(12))  DELETE
FROM
  users
WHERE
  uid = p_uid$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertadmin` (IN `username` VARCHAR(30), IN `password` VARCHAR(30), IN `email` VARCHAR(50))  INSERT
INTO
  admin(
    username,
    password,
    email  
  )
VALUES(
    username,
    password,
    email )$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertballina` (IN `Titulli` VARCHAR(255), IN `Pershkrimi` MEDIUMTEXT, IN `Image` LONGBLOB, IN `EmrF0` VARCHAR(255))  INSERT
INTO
  ballina(
    Titulli,
    Pershkrimi,
     Image,
      EmrF0
  )
VALUES(
   Titulli,
    Pershkrimi,
     Image,
      EmrF0
)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertbiletat` (IN `Titulli` VARCHAR(255), IN `Pershkrimi` MEDIUMTEXT, IN `Image` LONGBLOB, IN `EmrF0` VARCHAR(255))  INSERT
INTO
  biletat(
    Titulli,
    Pershkrimi,
    Image,
    EmrF0 
  )
VALUES(
  Titulli,
    Pershkrimi,
    Image,
    EmrF0
)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertdestinacionet` (IN `Titulli` VARCHAR(255), IN `Image` LONGBLOB, IN `EmrF0` VARCHAR(255))  INSERT
INTO
  destinacionet(
    Titulli,
    Image,
    EmrF0
  )
VALUES(
  Titulli,
    Image,
    EmrF0
)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertkontakti` (IN `Emri` VARCHAR(20), IN `Email` VARCHAR(50), IN `Mesazhi` MEDIUMTEXT)  INSERT
INTO
  kontakti(
    Emri,
    Email,
    Mesazhi
  )
VALUES(
    Emri,
    Email,
    Mesazhi
)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertrrethnesh` (IN `Titulli` VARCHAR(255), IN `Pershkrimi` MEDIUMTEXT, IN `Image` LONGBLOB, IN `EmrF0` VARCHAR(255))  INSERT
INTO
  rrethnesh(
    Titulli,
    Pershkrimi,
    Image,
    EmrF0 
  )
VALUES(
  Titulli,
    Pershkrimi,
    Image,
    EmrF0
)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertsherbimet` (IN `Titulli` VARCHAR(255), IN `Pershkrimi` MEDIUMTEXT, IN `Image` LONGBLOB, IN `EmrF0` VARCHAR(255))  INSERT
INTO
  sherbimet(
    Titulli,
    Pershkrimi,
    Image,
    EmrF0
  )
VALUES(
  Titulli,
    Pershkrimi,
    Image,
    EmrF0
)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertslider` (IN `Titulli` VARCHAR(255), IN `Image` LONGBLOB, IN `EmrF0` VARCHAR(255))  INSERT
INTO
  slider(
    Titulli,
     Image,
      EmrF0
  )
VALUES(
   Titulli,
     Image,
      EmrF0
)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertusers` (IN `username` VARCHAR(30), IN `password` VARCHAR(30), IN `email` VARCHAR(50))  INSERT
INTO
  users(
    username,
    password,
    email  
  )
VALUES(
    username,
    password,
    email )$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `selectadmin` (IN `uid` INT(12))  SELECT
  *
FROM
  admin
WHERE
  uid = uid$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectFromBallina` ()  SELECT * FROM ballina order by ID_Ballina DESC limit 1$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectFromBiletat` ()  SELECT * FROM biletat order by ID_Bileta DESC limit 1$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectFromDestinacionet` ()  SELECT * FROM destinacionet order by ID_Destinacioni DESC limit 9$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectFromRrethNesh` ()  SELECT * FROM rrethnesh order by ID_RrethNesh DESC limit 2$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectFromSherbimet` ()  SELECT * FROM sherbimet order by ID_Sherbimi DESC limit 3$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectFromSlider` ()  SELECT * FROM slider order by ID_Slider DESC limit 3$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `updateadmin` (IN `p_uid` INT(12), IN `p_username` VARCHAR(30), IN `p_password` VARCHAR(30), IN `p_email` VARCHAR(50))  UPDATE
  admin
SET
  username = p_username,
  password = p_password,
  email = p_email
WHERE
  uid = p_uid$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `updateballina` (IN `p_ID_Ballina` INT(12), IN `p_Titulli` VARCHAR(255), IN `p_Pershkrimi` MEDIUMTEXT, IN `p_Image` LONGBLOB, IN `p_EmrF0` VARCHAR(255))  UPDATE
ballina
SET
  Titulli = p_Titulli,
  Pershkrimi = p_Pershkrimi,
  Image = p_Image,
  EmrF0 = p_EmrF0
 
WHERE
ID_Ballina = p_ID_Ballina$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `updatebiletat` (IN `p_ID_Bileta` INT(12), IN `p_Titulli` VARCHAR(255), IN `p_Pershkrimi` MEDIUMTEXT, IN `p_Image` LONGBLOB, IN `p_EmrF0` VARCHAR(255))  UPDATE
biletat
SET
  Titulli = p_Titulli,
  Pershkrimi = p_Pershkrimi,
  Image = p_Image,
  EmrF0 = p_EmrF0
 
WHERE
ID_Bileta = p_ID_Bileta$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `updatedestinacionet` (IN `p_ID_Destinacioni` INT(12), IN `p_Titulli` VARCHAR(255), IN `p_Image` LONGBLOB, IN `p_EmrF0` VARCHAR(255))  UPDATE
  destinacionet
SET
  Titulli = p_Titulli,
  Image = p_Image,
  EmrF0 = p_EmrF0
WHERE
  ID_Destinacioni = p_ID_Destinacioni$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `updaterrethnesh` (IN `p_ID_RrethNesh` INT(12), IN `p_Titulli` VARCHAR(255), IN `p_Pershkrimi` MEDIUMTEXT, IN `p_Image` LONGBLOB, IN `p_EmrF0` VARCHAR(255))  UPDATE
  rrethnesh
SET
  Titulli = p_Titulli,
  Pershkrimi = p_Pershkrimi,
  Image = p_Image,
  EmrF0 = p_EmrF0
WHERE
  ID_RrethNesh = p_ID_RrethNesh$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `updatesherbimet` (IN `p_ID_Sherbimi` INT(12), IN `p_Titulli` VARCHAR(255), IN `p_Pershkrimi` MEDIUMTEXT, IN `p_Image` LONGBLOB, IN `p_EmrF0` VARCHAR(255))  NO SQL
UPDATE
  sherbimet
SET
  Titulli = p_Titulli,
  Pershkrimi = p_Pershkrimi,
  Image = p_Image,
  EmrF0 = p_EmrF0
WHERE
  ID_Sherbimi = p_ID_Sherbimi$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `updateslider` (IN `p_ID_Slider` INT(12), IN `p_Titulli` VARCHAR(255), IN `p_Image` LONGBLOB, IN `p_EmrF0` VARCHAR(255))  UPDATE
slider
SET
  Titulli = p_Titulli,
  Image = p_Image,
  EmrF0 = p_EmrF0
 
WHERE
ID_Slider = p_ID_Slider$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uid` int(12) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uid`, `username`, `password`, `email`) VALUES
(1, 'sh', 's', 'sh@gmail.com'),
(2, 'zh', 'z', 'zh@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `ballina`
--

CREATE TABLE `ballina` (
  `ID_Ballina` int(12) NOT NULL,
  `Titulli` varchar(255) NOT NULL,
  `Pershkrimi` mediumtext NOT NULL,
  `Image` longblob NOT NULL,
  `EmrF0` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `biletat`
--

CREATE TABLE `biletat` (
  `ID_Bileta` int(12) NOT NULL,
  `Titulli` varchar(255) NOT NULL,
  `Pershkrimi` mediumtext NOT NULL,
  `Image` longblob NOT NULL,
  `EmrF0` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `destinacionet`
--

CREATE TABLE `destinacionet` (
  `ID_Destinacioni` int(12) NOT NULL,
  `Titulli` varchar(255) NOT NULL,
  `Image` longblob NOT NULL,
  `EmrF0` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kontakti`
--

CREATE TABLE `kontakti` (
  `ID_Kontakti` int(12) NOT NULL,
  `Emri` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mesazhi` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rrethnesh`
--

CREATE TABLE `rrethnesh` (
  `ID_RrethNesh` int(12) NOT NULL,
  `Titulli` varchar(255) NOT NULL,
  `Pershkrimi` mediumtext NOT NULL,
  `Image` longblob NOT NULL,
  `EmrF0` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sherbimet`
--

CREATE TABLE `sherbimet` (
  `ID_Sherbimi` int(12) NOT NULL,
  `Titulli` varchar(255) NOT NULL,
  `Pershkrimi` mediumtext NOT NULL,
  `Image` longblob NOT NULL,
  `EmrF0` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(12) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `password`, `email`) VALUES
(1, 'sh', '1', 'sh@gmail.com'),
(2, 'test', 'test', 'test@gmail.com'),


--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `ballina`
--
ALTER TABLE `ballina`
  ADD PRIMARY KEY (`ID_Ballina`);

--
-- Indexes for table `biletat`
--
ALTER TABLE `biletat`
  ADD PRIMARY KEY (`ID_Bileta`);

--
-- Indexes for table `destinacionet`
--
ALTER TABLE `destinacionet`
  ADD PRIMARY KEY (`ID_Destinacioni`);

--
-- Indexes for table `kontakti`
--
ALTER TABLE `kontakti`
  ADD PRIMARY KEY (`ID_Kontakti`);

--
-- Indexes for table `rrethnesh`
--
ALTER TABLE `rrethnesh`
  ADD PRIMARY KEY (`ID_RrethNesh`);

--
-- Indexes for table `sherbimet`
--
ALTER TABLE `sherbimet`
  ADD PRIMARY KEY (`ID_Sherbimi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `uid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ballina`
--
ALTER TABLE `ballina`
  MODIFY `ID_Ballina` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `biletat`
--
ALTER TABLE `biletat`
  MODIFY `ID_Bileta` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `destinacionet`
--
ALTER TABLE `destinacionet`
  MODIFY `ID_Destinacioni` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kontakti`
--
ALTER TABLE `kontakti`
  MODIFY `ID_Kontakti` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rrethnesh`
--
ALTER TABLE `rrethnesh`
  MODIFY `ID_RrethNesh` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sherbimet`
--
ALTER TABLE `sherbimet`
  MODIFY `ID_Sherbimi` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

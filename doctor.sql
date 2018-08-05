-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2018 at 05:34 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `namethai` varchar(50) NOT NULL,
  `nameeng` varchar(50) NOT NULL,
  `HN` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `id` varchar(50) NOT NULL,
  `blood` varchar(50) NOT NULL,
  `bloodhave` varchar(50) NOT NULL,
  `goblood` varchar(50) NOT NULL,
  `gobloodhave` varchar(50) NOT NULL,
  `masa` varchar(50) NOT NULL,
  `masahave` varchar(50) NOT NULL,
  `fatarus` varchar(50) NOT NULL,
  `fatarushave` varchar(50) NOT NULL,
  `comeback` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `inputmail` varchar(50) NOT NULL,
  `inputline` varchar(50) NOT NULL,
  `inputadd` varchar(50) NOT NULL,
  `usercheck` varchar(50) NOT NULL,
  `DCIP` varchar(50) NOT NULL,
  `MCV` varchar(50) NOT NULL,
  `RBC` varchar(50) NOT NULL,
  `Anisocytasis` varchar(50) NOT NULL,
  `Anisocytasishave` varchar(50) NOT NULL,
  `poikilocytosis` varchar(50) NOT NULL,
  `poikilocytosishave` varchar(50) NOT NULL,
  `inclusion` varchar(50) NOT NULL,
  `Hbh` varchar(50) NOT NULL,
  `HB` varchar(50) NOT NULL,
  `comment` varchar(50) NOT NULL,
  `result` varchar(50) NOT NULL,
  `texttext` varchar(100) NOT NULL,
  `checkcheck` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`namethai`, `nameeng`, `HN`, `age`, `sex`, `id`, `blood`, `bloodhave`, `goblood`, `gobloodhave`, `masa`, `masahave`, `fatarus`, `fatarushave`, `comeback`, `date`, `inputmail`, `inputline`, `inputadd`, `usercheck`, `DCIP`, `MCV`, `RBC`, `Anisocytasis`, `Anisocytasishave`, `poikilocytosis`, `poikilocytosishave`, `inclusion`, `Hbh`, `HB`, `comment`, `result`, `texttext`, `checkcheck`) VALUES
('นาย ไอริส แอสเตอร์', 'ires ester', '130', '23', 'female', '1198652161532', 'have', '', 'nohave', '', 'noteat', '', 'no', '', '', '2018-07-28', 'b_wasupon@hotmail.com', '5164565', '21321563415513', 'แบงค์เองแบงค์เอง', 'positive', '0.7', 'normochormic', '2+', '', '1+', '', 'Done', 'NotFound', '0.9', '', 'เป็นพาหะธาลัสซีเมียชนิดรุนแรง', '', 'true'),
('นาย โฮม', 'HOME', '660', '50', 'male', '51155', '', '', '', '', '', '', '', '', '   ', '2018-07-28', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('นาย โฮมโฮม', 'HONEMONE', '5555', '20', 'male', '6156516551651', 'have', '', '', '', '', '', '', '', '   ', '2018-07-28', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('ฉันคือ แบทแมน', 'kljjjklkjlkjl', '56', '2', 'male', '516561566516', 'have', 'fuckkcjkk', '', '', '', '', '', '', '', '2018-07-28', 'batman@htom.cpm', '', '', 'AryMiku16.29', 'negative', '0.8', 'normocytic', '2+', '', '3+', '', 'Done', 'NotFound', '0.7', '', 'เป็นธาลัสซีเมีย B+ -thal (Homo)', '', 'true'),
('ไม่บอกหรอก เย้ๆๆ', 'ukkkddkd', '234', '56', 'male', '1651561616511', 'have', 'dddd', 'have', 'eeee', 'eat', 'ffff', 'notknow', 'gggg', '   ', '2018-07-28', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('ฟหกดหฟก', 'akdjfasjfl', '11', '50', 'male', '1986565688668', '', '', '', '', '', '', '', '', '', '2018-07-28', '', '', '', 'arymiku', 'negative', '0.8', 'normochormic', '0', '', '0', '', 'NotDone', 'Found', '1.1', '', 'มีโอกาสเป็นพาหะธาลัสซีเมียหรือมีภาวะซีดเนื่องจากกา', '', 'true'),
('แฉล้ม ดูระนิตย์', 'kaman', '100', '18', 'female', '1234567891234', 'nothave', '', 'have', 'ขี้เกียจ', 'noteat', '', 'notknow', '', '', '2018-07-28', '', '', '', 'แบงค์', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('ทดสอบเกือบรอบสุดท้าย', 'wasuwasu', '50', '9', 'male', '1656121321321', '', '', '', '', '', '', '', '', '', '2018-07-30', '', '', '', 'แบงค์', 'negative', '73', 'normocytic', '3+', '', '3+', '', 'Done', 'NotFound', '0.2', '', 'มีภาวะซีดเล็กน้อย', '<h3>คำแนะนำ</h3> Iron deficiency α-thalassemia 2 trait', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

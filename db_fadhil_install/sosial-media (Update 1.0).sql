-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 31, 2020 at 01:44 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sosial-media`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  `bio` varchar(225) NOT NULL,
  `profile` varchar(225) NOT NULL,
  `school` varchar(225) NOT NULL,
  `gender` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `email`, `username`, `fullname`, `password`, `bio`, `profile`, `school`, `gender`) VALUES
(3, 'w', 'w', 'w', 'ww', 'ee', 'w', 'w', 'ww'),
(4, 'a', 's', 's', 's', 's', 's', 's', 's'),
(5, 'mpusnbkcothygwc@inilogic.com', 'jj', 'Fadhils Ajwa mian', 'ohuoi', 'No coding no life', 'profile', 'SMPN 9120742', 'Perempuan'),
(6, 'Sembarang.lupa.aku.8288282872@gmail.com', 'a', 'a', 'a', 'a', 'profile', 'a', 'Laki laki'),
(7, 'mpusnbkcothygwc@inilogic.com', 'aaaaa', 'aa', 'aaaa', 'aa', 'profile', 'aaa', 'Laki laki'),
(8, 'ss@jkwejn.com', 'sssss', 's', 'sss', 'a', 'Screenshot 10-26-2020 21.11.07.png', 'SMPN 9120742', 'Laki laki'),
(9, 'ss@jkd.com', 'dwqw', 'dwq', '5ab4be62c1408524d1e650a1fbd7595bdbe97340a5d930d03a00bd9991d3fb33b3c488965900329cbfcf49ea05735329ea4b025038ac44a6a1c230e8502114e4', 'dqw', 'Screenshot 10-26-2020 21.11.07.png', 'wqd', 'Laki laki'),
(10, 'root@root.com', 'root', 'root', '99adc231b045331e514a516b4b7680f588e3823213abe901738bc3ad67b2f6fcb3c64efb93d18002588d3ccc1a49efbae1ce20cb43df36b38651f11fa75678e8', 'root', 'Screenshot 10-26-2020 21.11.07.png', 'root', 'Laki laki'),
(11, 'mpusnbkcothygwsc@inilogic.com', 'root&lt;h1&gt;', 'Fadhils Ajwa mian&lt;h4 class=&quot;Hai&quot;&gt;wkwk&lt;/h4&gt;', 'abd8454374daebd1071a2324e863d80e4929919d5b80cb871791c7d9e17e2adb037d93b51f85d87dc24d6b0f8e896265c6e98e28efe1c70e0eb3a43838bacfab', '&lt;script&gt;alert(&quot;Halo&quot;);&lt;/script&gt;', 'Screenshot 10-26-2020 21.11.07.png', 'sa', 'Laki laki'),
(12, 'agusdeha00@gmail.com', 'agus', 'agus mukoronah', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 'No coding no life....hehe', 'Screenshot 10-30-2020 08.03.43.png', 'smk', 'Perempuan'),
(13, 'mpusnbkcothkygwc@inilogic.com', 'nlnl', 'ljl', '00f4915cdefa9b818cb87eaa7c9e919c91e1d5948ec4ba2f3337dc86423b7bb4c24f44485f06015bcc52fb8a418552e18773b99368941cf0bf4aca821634e802', 'aa', 'Screenshot 10-26-2020 21.11.07.png', 'hii', 'Laki laki'),
(14, 'ngkzolzkljkjlkhtk@inilogic.com', 'jknjkj', 'jhjhl', '7887877f40519d6c4ec1ead3146bbf9ce77bc2ea4aace3a106fd4f572ba033aa1e41dbea9f2359e22b2545f4559072481bc4bbd38d351e23431be1dcc50e492e', 'kjljllj', 'Screenshot 10-27-2020 07.49.19.png', 'jlljjk', 'Perempuan'),
(15, 'mpusnbkcothygwc@inilogic.com', 'njohohjojioji', 'hihhh', 'f88be6e2a6fd51521b682099d9f8b0f57f63f5e7cab9078a5f82d2ecd1d0e9770618de5b22ef0403a88291fde537f1d99619bf26071a6c333fd230c5712e57dc', 'kbjbkjkbj', 'logs.php', 'jnojnjn', 'Laki laki'),
(17, 'id.fadhil.riyanto@gmail.com ', 'fadhil_riyanto', 'Fadhil Riyanto ', '360f5854ca10ebe7283a2c9bb80ada2df928e52a404743d10b4fc18f8acaaa0d0a4136575cc0d2f0222897fe6f6ba50957ce363f96a2f692e4d3d7cb3a0e5732', 'Coding its fun ', '1604148685060488800792.jpg', 'Smp 33 semarang ', 'Laki laki');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

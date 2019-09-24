-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2019 at 07:20 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phbweb2_crudnupev`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `email`) VALUES
(3, 'ismi nururrizqi', 'ismi', 'ismi', 'isminururrizqi.nr@gmail.com'),
(4, 'saevia izzatun atiqoh', 'saevia', 'saevia', 'saevia.izzatun.atiqoh@gmail.com'),
(6, 'uzumaki', 'uzumaki', 'uzumaki', 'uzumaki@gmail.com'),
(7, 'boruto uzumaki', 'boruto', 'boruto', 'boruto@gmail.com'),
(8, 'sakura haruno', 'sakura', 'sakura', 'sakura@gmail.com'),
(9, 'shikamaru nara', 'shikamaru', 'shikamaru', 'shikamaru@gmail.com'),
(15, 'shikadai nara', 'shikadai', 'shikadai', 'shikadai@gmail.com'),
(16, 'sasuke uchiha', 'sasuke', 'sasuke', 'sasuke@gmail.con'),
(17, 'sarada uchiha', 'sarada', 'sarada', 'sarada@gmail.com'),
(18, 'mitsuki', 'misuki', 'mitsuki', 'mitsuki@gmail.com'),
(19, 'yahiko', 'yahiko', 'yahiko', 'yahiko@ymail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

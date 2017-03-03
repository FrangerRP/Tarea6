-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 03, 2017 at 01:59 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tarea6`
--

-- --------------------------------------------------------

--
-- Table structure for table `personas`
--

CREATE TABLE `personas` (
  `id` int(11) NOT NULL,
  `cedula` varchar(60) DEFAULT NULL,
  `nombre` varchar(60) DEFAULT NULL,
  `Email` varchar(60) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `comentario` text,
  `lat` varchar(20) DEFAULT NULL,
  `lon` varchar(20) DEFAULT NULL,
  `ip` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `personas`
--

INSERT INTO `personas` (`id`, `cedula`, `nombre`, `Email`, `telefono`, `comentario`, `lat`, `lon`, `ip`) VALUES
(23, '010203', 'Juan', 'j@h.com', '8094143859', 'jsacda', '18.5261268', '-69.8835651', '::1'),
(24, '030405', 'Franger', 'fsds@j.s', '983948', 'skdasjkcxacx', '18.70', '-69.60', '::1'),
(26, '01020304', 'Omar', 'oMAR@h.com', '8374819', 'jsdakdasdkasdjasd', '18.4744897', '-69.8774345', '::1'),
(27, '8138483481', 'Gerson', 'gersonsantosm@gmail.com', '8097661867', 'Este programa es la leche, GG programa, \r\ncamino a FMA.', '18.4510044', '-69.6624835', '::1'),
(28, '0102938', 'Marcos', 'MSan@hotmail.com', '8549903849', 'Probando papu', '18.5361268', '-69.8735651', '::1'),
(29, '4583', 'Pedro', 'Pedro@Pedro.com', '4358892031', 'jsadsakacmxzckmxz', '18.5461268', '-69.8935651', '::1'),
(30, 'asdsadsa', 'dsadasd', 'sadsad@jdsad.co', '92389213213', 'sajhdsajcxasc', '18.5561268', '-69.8535651', '::1'),
(31, '284930221-3', 'Mario', 'MarioElRojo@bros.com', '1112229348', 'It\' A mi Mario', '18.5061268', '-69.9035651', '::1'),
(32, '284730221-3', 'Maria', 'Maria@hotmail.com', '8097775584', 'Mi Comentario', '18.4961268', '-69.9035651', '::1'),
(33, '737230901-5', 'Ana', 'AnnaAa@hotmail.com', '80947385923', 'Mi Comentario', '18.5070370', '-69.9330650', '::1'),
(34, '8392172', 'Carla', 'CdCarla@gmail.com', '2349928902', 'Hola a todos', '18.5765268', '-69.9035651', '::1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personas`
--
ALTER TABLE `personas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

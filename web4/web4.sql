-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2017 at 12:04 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web4`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `UserID` int(10) UNSIGNED NOT NULL,
  `Username` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `point` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Password` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Status` enum('ADMIN','USER') CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT 'USER'
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`UserID`, `Username`, `Name`, `point`, `email`, `Password`, `Status`) VALUES
(2, 'tao', 'tataya', '0', 'tao_tataya@gmail.com', '1234', 'ADMIN'),
(3, 'kubkib', 'natthakan Thongweera', '59', 'gibb_gibza@hotmail.co.th', 'kubkib', 'USER'),
(6, 'one', 'onenapa', '118', 'one_1@gmail.com', 'oneone', 'USER'),
(18, 'wasupon', 'wasupon', '66', 'wa_supon@gmail.com', 'wasupon', 'USER');

-- --------------------------------------------------------

--
-- Table structure for table `my_cooking`
--

CREATE TABLE `my_cooking` (
  `imgID` int(10) UNSIGNED NOT NULL,
  `fileimg` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `detail` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `point` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `UserID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `my_cooking`
--

INSERT INTO `my_cooking` (`imgID`, `fileimg`, `Name`, `detail`, `point`, `UserID`) VALUES
(1, 'product1.png', 'คางกุ้งซี๊ดแบบห่อ', 'คางกุ้งซี๊ดรสสไปซี่ 1 ห่อ ใช้ point แลก 9 point', '9', 18),
(2, 'product2.png', 'พวงกุญแจ', 'พวงกุญแจคางกุ้งซี๊ด ใช้ point แลก 13 point', '13', 2),
(3, 'product3.png', 'คางกุ้งซี๊ดแบบกระปุก', 'คางกุ้งซี๊ดรสสไปซี่ 1 กระปุก ใช้ point แลก 19 point', '19', 2),
(4, 'product4.png', 'คางกุ้งซี๊ดแบบเซ็ท 4 กระปุก', 'คางกุ้งซี๊ดแบบเซ็ท 4 กระปุก มี 4 รส (สไปซี่ / ต้มยำ / เขียวหวาน / สาหร่าย ) ใช้ point แลก 60 point', '60', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `my_cooking`
--
ALTER TABLE `my_cooking`
  ADD PRIMARY KEY (`imgID`),
  ADD KEY `UserID` (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `UserID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `my_cooking`
--
ALTER TABLE `my_cooking`
  MODIFY `imgID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `my_cooking`
--
ALTER TABLE `my_cooking`
  ADD CONSTRAINT `my_cooking_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `member` (`UserID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

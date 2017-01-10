-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2017 at 10:01 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ge`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id_info` int(11) NOT NULL,
  `header` varchar(500) COLLATE utf32_unicode_ci NOT NULL,
  `detail` varchar(1000) COLLATE utf32_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `picture` varchar(1000) COLLATE utf32_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id_info`, `header`, `detail`, `date`, `picture`, `status`) VALUES
(2, 'หัวข้อข่าวประชาสัมพันธ์2', 'รายละเอียดข่าวประชาสัมพันธ์2', '2017-01-03', 'Koala.jpg', 1),
(3, 'หัวข้อข่าวประชาสัมพันธ์3', 'รายละเอียดข่าวประชาสัมพันธ์3', '2017-01-04', '20150110_092805.jpg', 1),
(4, 'หัวข้อข่าวสัมมนา', 'รายละเอียดข่าวสัมมนา', '2017-01-08', NULL, 2),
(5, 'หัวข้อข่าวสัมมนา2', 'รายละเอียดข่าวสัมมนา2', '2017-01-08', NULL, 2),
(6, 'ทดสอบหัวข้อจดหมายข่าว', 'ทดสอบรายละเอียดจดหมายข่าว', '2017-01-08', NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `id_instructor` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf32_unicode_ci NOT NULL,
  `picture` varchar(500) COLLATE utf32_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`id_instructor`, `name`, `picture`, `status`) VALUES
(2, 'ดร. อำภาพรรณ  ตันตินาครกูล', 'A1.png', 1),
(3, 'ผศ.ดร.ฐิยาพร  กันตาธนวัฒน์', 'A6.png', 1),
(4, 'รศ.ดร.กาญจนา บุญภักดิ์', 'A4.png', 1),
(5, 'ผศ.ดร.สมศักดิ์  วลัยรัชต์', 'A2.png', 1),
(6, 'ผศ.ดร.ประสันต์  ชุ่มใจหาญ', 'A3.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id_media` int(11) NOT NULL,
  `name` varchar(500) COLLATE utf32_unicode_ci NOT NULL,
  `detail` varchar(1000) COLLATE utf32_unicode_ci NOT NULL,
  `file` varchar(200) COLLATE utf32_unicode_ci DEFAULT NULL,
  `cover` varchar(200) COLLATE utf32_unicode_ci NOT NULL,
  `pathPicture` varchar(500) COLLATE utf32_unicode_ci DEFAULT NULL,
  `video` varchar(500) COLLATE utf32_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `public`
--

CREATE TABLE `public` (
  `id_public` int(11) NOT NULL,
  `title` varchar(1000) COLLATE utf32_unicode_ci NOT NULL,
  `file` varchar(1000) COLLATE utf32_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `public`
--

INSERT INTO `public` (`id_public`, `title`, `file`, `status`) VALUES
(2, 'หัวปฏิทินกิจกรรม2', NULL, 1),
(5, 'หัวแบบฟอร์มสำหรับ อาจารย์', '', 3),
(6, 'หัวแบบฟอร์มสำหรับ อาจารย์2', '', 3),
(7, 'หัวแบบฟอร์มสำหรับ อาจารย์3', '', 3),
(9, 'หัวแบบฟอร์มสำหรับ อาจารย์5', 's2559.docx', 3),
(10, 'หัวประกาศที่เกี่ยวข้อง', NULL, 2),
(11, 'หัวแบบฟอร์มสำหรับ นักศึกษา2', 'ความหมายแต่ละกลุ่ม.docx', 4),
(13, 'หนังสือนอกเวลา', 'Untitled.pdf', 5),
(15, 'ชื่อหนังสือนอกเวลา2', 'หมวดวิชาศึกษาทั่วไป (ฉบับปรับปรุง พ.ศ.2559) ฉบับอนุมัติจากสภา 310859 (1).pdf', 5),
(16, 'ชื่อหนังสือนอกเวลา4', 'ประวัติสำนักวิชาศึกษาทั่วไป.docx', 5),
(17, 'ชื่อหนังสือนอกเวลา', 'หมวดวิชาศึกษาทั่วไป (ฉบับปรับปรุง พ.ศ.2559) ฉบับอนุมัติจากสภา 310859 (1).docx', 5);

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id_slide` int(11) NOT NULL,
  `image` varchar(500) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id_slide`, `image`) VALUES
(1, 's1.jpg'),
(2, 's2.jpg'),
(3, 's3.jpg'),
(4, 's4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`, `status`) VALUES
(1, 'admin', 'adminmaster', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`id_instructor`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id_media`);

--
-- Indexes for table `public`
--
ALTER TABLE `public`
  ADD PRIMARY KEY (`id_public`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `id_instructor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id_media` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `public`
--
ALTER TABLE `public`
  MODIFY `id_public` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id_slide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1:3306
-- 生成日期： 2019-11-18 05:18:14
-- 服务器版本： 5.7.26
-- PHP 版本： 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `zzh`
--
CREATE DATABASE IF NOT EXISTS `zzh` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `zzh`;

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(25) NOT NULL,
  `title` varchar(225) DEFAULT NULL,
  `name` varchar(25) DEFAULT NULL,
  `ip` varchar(25) DEFAULT NULL,
  `mes` varchar(225) DEFAULT NULL,
  `time` time DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`user`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- 插入之前先把表清空（truncate） `message`
--

TRUNCATE TABLE `message`;
--
-- 转存表中的数据 `message`
--

INSERT INTO `message` (`id`, `user`, `title`, `name`, `ip`, `mes`, `time`) VALUES
(7, '123', 'å“ˆå“ˆå“ˆ', 'å“ˆå“ˆå“ˆå“ˆå“ˆå“ˆ', '127.0.0.1', 'å¥½å¥½å¥½å¥½', '15:40:06'),
(8, '123', '213123123', '1123123123123', '127.0.0.1', '123123123', '17:02:58'),
(9, '123', '2', 'æµ‹è¯•', '127.0.0.1', 'å•Šä¸‰å¤§ä¸‰å¤§', '17:06:57'),
(10, '123', '1', '1', '127.0.0.1', '1', '17:07:03'),
(12, '123', '1', '1', '127.0.0.1', '1', '17:07:16'),
(13, '123', '123123', '123213213', '127.0.0.1', '123123', '17:07:23'),
(16, '123', '1231231', '21123123', '127.0.0.1', '23123', '14:00:49'),
(17, '123', '1231231', '123123', '127.0.0.1', '12312312313213', '15:34:22'),
(18, '123', '23123123', '123123123', '127.0.0.1', '1231231', '16:09:53'),
(19, '123', '2312313', '2131231', '127.0.0.1', '1231231231231231231', '16:23:32'),
(20, '123', 'éšä¾¿äº†', 'æµ‹è¯•å·', '127.0.0.1', 'åŠ æ²¹åŠ æ²¹åŠ æ²¹', '16:15:00'),
(21, '123', '123123', '123123123', '127.0.0.1', '1231', '16:15:08'),
(22, '123', '123', '', '127.0.0.1', '', '16:15:54'),
(23, '123', '123', '123', '127.0.0.1', '', '16:17:08'),
(24, '123', 'ç•™è¨€', 'æµ‹è¯•æµ‹è¯•', '127.0.0.1', 'åŠ æ²¹åŠ æ²¹8k', '16:18:23'),
(25, '123', '312312312', '12312312', '127.0.0.1', '31231', '16:31:20');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 插入之前先把表清空（truncate） `user`
--

TRUNCATE TABLE `user`;
--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('11111', '11'),
('121231231', '1'),
('123', '123'),
('123123', '123'),
('123123123123', '111'),
('1231232131', '312'),
('aaa', '123');

--
-- 限制导出的表
--

--
-- 限制表 `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`user`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

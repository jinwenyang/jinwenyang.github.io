-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2017-06-14 10:28:09
-- 伺服器版本: 5.7.17-log
-- PHP 版本： 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `phphw`
--

-- --------------------------------------------------------

--
-- 資料表結構 `personal`
--

CREATE TABLE `personal` (
  `code` int(10) NOT NULL,
  `name` varchar(10) DEFAULT NULL,
  `tel` varchar(10) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `city` varchar(10) DEFAULT NULL,
  `loc` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `personal`
--

INSERT INTO `personal` (`code`, `name`, `tel`, `email`, `city`, `loc`, `gender`) VALUES
(2, 'rt', '3455', 'tr@33', 'Kaohsiung', 'tr', 'male'),
(3, 'rt', '34', 'tr@33', 'Kaohsiung', 'tr', 'male'),
(4, 'ww', '44', 'ww@ww', 'Taipei', 'ww', 'male');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`code`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `personal`
--
ALTER TABLE `personal`
  MODIFY `code` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

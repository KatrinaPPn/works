-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: 2020-10-29 14:41:17
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `climb`
--
CREATE DATABASE IF NOT EXISTS `climb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `climb`;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `ID` int(10) NOT NULL COMMENT '用户标号',
  `Username` varchar(10) NOT NULL COMMENT '用户账号名',
  `Password` char(32) NOT NULL COMMENT '用户密码',
  `CardID` char(20) NOT NULL COMMENT '身份证号',
  `Realname` varchar(10) NOT NULL COMMENT '真实姓名',
  `Address` varchar(40) NOT NULL COMMENT '收货地址',
  `Postcode` char(10) NOT NULL COMMENT '邮政编码',
  `Tel` varchar(20) NOT NULL COMMENT '手机号码',
  `Email` varchar(40) NOT NULL COMMENT '邮件地址'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`ID`, `Username`, `Password`, `CardID`, `Realname`, `Address`, `Postcode`, `Tel`, `Email`) VALUES
(1, 'sevenn', 'e10adc3949ba59abbe56e057f20f883e', '440783199803071227', '谢雯静', '广东省广州市', '529311', '12345678911', '123@qq.com'),
(2, 'katrina', '3a715498b51a468e87e07820b3e72734', '440783199803071221', '潘春杏', '广州市', '593612', '12345678900', '258@qq.com'),
(3, 'tom', 'e10adc3949ba59abbe56e057f20f883e', '440783199910102020', '汤姆', '广州市', '666666', '14725836933', '12356@qq.com'),
(4, '毛毛', 'c5fde9de2d29789a81d1bc0f16292048', '441226199903240022', '毛小毛', '广东肇庆1路', '526600', '13822661919', '2269656266@qq.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `user_info` (`ID`,`Username`,`CardID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT COMMENT '用户标号', AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

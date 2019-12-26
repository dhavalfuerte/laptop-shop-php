-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 01, 2017 at 12:15 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `miracle_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `eid` varchar(30) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`a_id`, `name`, `eid`, `pwd`) VALUES
(1, 'paras', 'paraskansagara', '456789');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cnm` varchar(30) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`cid`, `cnm`) VALUES
(4, 'Hp'),
(3, 'Sony'),
(5, 'Apple'),
(6, 'Dell'),
(7, 'LG'),
(8, 'Lenovo'),
(9, 'Asus');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_nm` varchar(30) NOT NULL,
  `eid` varchar(30) NOT NULL,
  `comment` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `feedback`
--


-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(30) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `pro_id`, `quantity`, `total_amount`) VALUES
(14, '9', 7, 3, 60000);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `model_nm` varchar(30) NOT NULL,
  `pro_img` text NOT NULL,
  `price` int(10) NOT NULL,
  `processor` varchar(30) NOT NULL,
  `ram` varchar(11) NOT NULL,
  `harddisk` varchar(11) NOT NULL,
  `os` varchar(30) NOT NULL,
  `web_camera` varchar(30) NOT NULL,
  `screen_size` varchar(30) NOT NULL,
  `graphics` varchar(30) NOT NULL,
  `warranty` varchar(30) NOT NULL,
  `information` text NOT NULL,
  `status` enum('0','1') NOT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `company_id`, `model_nm`, `pro_img`, `price`, `processor`, `ram`, `harddisk`, `os`, `web_camera`, `screen_size`, `graphics`, `warranty`, `information`, `status`) VALUES
(8, 4, 'E2H4-1522', 'images/pro_imgs/HP 240.jpeg', 25000, 'Intel core i7', '2 gb', '1 tb', 'Windows 8.1', 'Yes', '25', '2 gb', '2 year', 'hd video supported, bettry powersever,', '1'),
(7, 3, 'ECH2-17', 'images/pro_imgs/PVGNP15G.jpg', 20000, 'Intel core i5', '4 gb', '1 tb', 'Windows 10', 'Yes', '15', '2 gb', '2 year', 'hd video supported, bettry powersever, ', '1'),
(9, 5, 'MAC-3822', 'images/pro_imgs/images[12].jpg', 100000, 'dualcore i10', '2 gb', '1 tb', 'mac 10', 'Yes', '16 inch', '2 gb', '5 year', 'hd video supported, bettry powersever,', '1'),
(10, 6, 'B2IEE-11', 'images/pro_imgs/c6.jpg', 25000, 'intel core i3', '2 gb', '1tb', 'Windows 7', 'Yes', '15', '2 gb', '1 year', 'hd video supported, bettry powersever,', '1'),
(11, 7, 'KFD4-9T', 'images/pro_imgs/A2H3A2.jpg', 45000, 'intel core i3', '2 gb', '1 tb', 'Windows 8.1', 'Yes', '15', '1 gb', '2 year', 'this is best laptop in fature powersaver mode , long time bettry', '1'),
(12, 8, 'K4RT-22', 'images/pro_imgs/Lenovo Ideapad Z510.jpeg', 35500, 'intel core i5', '2 gb', '1 tb', 'Windows 10', 'Yes', '15', '1 gb', '2 year', 'this is best laptop in fature powersaver mode , long time bettry', '1'),
(13, 9, 'KDRQW-112', 'images/pro_imgs/c11.jpg', 22600, 'intel core i3', '1 gb', '1 tb', 'Windows 8.1', 'No', '17', '1 gb', '1 year', 'this is best laptop in fature powersaver mode , long time bettry', '1'),
(14, 5, 'MAC-4044', 'images/pro_imgs/Apple MacBook Pro Mac MD101HNA.jpeg', 80000, 'intel core i7', '2 gb', '1 tb', 'Mac 10.11', 'Yes', '15', '1 gb', '2 year', 'this is best laptop in fature powersaver mode , long time bettry', '1'),
(15, 3, 'KDFW-11', 'images/pro_imgs/Sony Vaio E14 Series SVE1413XPNB.jpeg', 36500, 'intel core i3', '2 gb', '1 tb', 'Windows 8.1', 'Yes', '15', '1 gb', '2 year', 'this is best laptop in fature powersaver mode , long time bettry', '1');

-- --------------------------------------------------------

--
-- Table structure for table `register_user`
--

CREATE TABLE IF NOT EXISTS `register_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_nm` varchar(30) NOT NULL,
  `user_fnm` varchar(30) NOT NULL,
  `user_lnm` varchar(30) NOT NULL,
  `eid` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `contect_no` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(10) NOT NULL,
  `pincode` int(10) NOT NULL,
  `profile_picture` text NOT NULL,
  `status` enum('0','1') NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `register_user`
--

INSERT INTO `register_user` (`user_id`, `user_nm`, `user_fnm`, `user_lnm`, `eid`, `pwd`, `contect_no`, `address`, `city`, `pincode`, `profile_picture`, `status`) VALUES
(10, 'disenpatel', 'disen', 'patel', 'disenpatel194@gmail.com', 'drk', '9429326080', 'near pranami temple ', 'moviya', 360330, 'images/profile_pic/imagesCAYBIS8Q.jpg', '1');

-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2018 at 10:56 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dutypaid_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `ds_catogory`
--

CREATE TABLE IF NOT EXISTS `ds_catogory` (
  `Catogory_id` int(10) NOT NULL AUTO_INCREMENT,
  `Catogory_name` varchar(50) NOT NULL,
  `Catogory_Description` varchar(50) NOT NULL,
  `Catogory_status` int(10) NOT NULL,
  PRIMARY KEY (`Catogory_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ds_catogory`
--

INSERT INTO `ds_catogory` (`Catogory_id`, `Catogory_name`, `Catogory_Description`, `Catogory_status`) VALUES
(1, 'baby care', 'gfhf', 0),
(2, 'choclates', 'gfhfgj', 0),
(3, 'icream', 'ddh', 0),
(4, 'jijkio', 'jijuioooooooooo', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ds_products`
--

CREATE TABLE IF NOT EXISTS `ds_products` (
  `Product_id` int(10) NOT NULL AUTO_INCREMENT,
  `Product_name` varchar(50) NOT NULL,
  `Product_catogory` int(10) NOT NULL,
  `Product_image` varchar(500) NOT NULL,
  `Product_description` varchar(50) NOT NULL,
  `Product_price` varchar(50) NOT NULL,
  `Product_quantity` int(20) NOT NULL,
  `Product_status` int(10) NOT NULL,
  PRIMARY KEY (`Product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ds_products`
--

INSERT INTO `ds_products` (`Product_id`, `Product_name`, `Product_catogory`, `Product_image`, `Product_description`, `Product_price`, `Product_quantity`, `Product_status`) VALUES
(1, 'll;', 1, '', 'lllllllllll', '75', 77, 0),
(2, 'll', 2, '', 'l;l;', '45', 45, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ds_user_register`
--

CREATE TABLE IF NOT EXISTS `ds_user_register` (
  `User_id` int(10) NOT NULL AUTO_INCREMENT,
  `User_fname` varchar(50) NOT NULL,
  `User_lname` varchar(50) NOT NULL,
  `User_age` int(10) NOT NULL,
  `User_gender` varchar(20) NOT NULL,
  `User_address` varchar(50) NOT NULL,
  `User_mobile_number` varchar(50) NOT NULL,
  `User_pic` varchar(500) NOT NULL,
  `User_email` varchar(50) NOT NULL,
  `User_password` varchar(50) NOT NULL,
  `User_type` varchar(20) NOT NULL,
  `User_status` int(10) NOT NULL,
  PRIMARY KEY (`User_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ds_user_register`
--

INSERT INTO `ds_user_register` (`User_id`, `User_fname`, `User_lname`, `User_age`, `User_gender`, `User_address`, `User_mobile_number`, `User_pic`, `User_email`, `User_password`, `User_type`, `User_status`) VALUES
(1, 'Admin', 'Admin', 20, 'Female', 'admin', '4512548545', '5aaea1f7213fe1521394167a1.jpg', 'admin@gmail.com', 'adminadmin', 'Admin', 0),
(2, 'Aleena', 'Paul', 20, 'Female', 'bfghgh', '8589568545', '5aaea23b1a39c1521394235003.jpg', 'aleena@gmail.com', 'aleenaaleena', 'Customer', 0),
(3, 'shahida', 'firoz', 30, 'Female', 'hhhhhhhh', '66666585', '5ab49d98b95a01521786264Desert.jpg', 'shah@gmail.com', '45564', 'Customer', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

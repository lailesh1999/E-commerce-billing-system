-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2021 at 09:01 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database:`mystores`
--

-- --------------------------------------------------------

--
-- Table structure for table`address_tbl`
--

CREATE TABLE `address_tbl` (
  `address_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `address` varchar(40) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `city` varchar(15) NOT NULL,
  `state` varchar(20) NOT NULL,
  `land_mark` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile_number` varchar(12) NOT NULL,
  `status` varchar(5) NOT NULL DEFAULT '0',
  `deleted` varchar(5) NOT NULL DEFAULT '0',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address_tbl`
--

INSERT INTO `address_tbl` (`address_id`, `user_id`, `address`, `pincode`, `city`, `state`, `land_mark`, `name`, `mobile_number`, `status`, `deleted`, `created_date`) VALUES
(11, 68, 'kasaragod1', '6713231', 'manjeshwar1', 'kerala1', 'vorkady1', 'royy', '90740801651', '0', '0', '2020-11-24 05:55:20'),
(13, 68, 'thjalapady hose vorkady post via manjwes', '573005', 'ullal', 'karnataka', 'ullal', 'karthik', '9961003680', '0', '0', '2020-11-24 06:50:14'),
(14, 68, 'hosangadi house vorkady post via manjesh', '671323a', 'manjeshwara', 'keralaa', 'vorkady', 'lailesh a', '9074080165', '0', '0', '2020-11-24 06:50:30'),
(15, 68, 'kasaragod house post kasargor ', '671323', 'manjeshwar', 'kerala', 'kollagana', 'karthik', '9961003680', '0', '0', '2020-12-03 06:33:02'),
(16, 68, 'manglore', '573005', 'ullal', 'karnataka', 'dddd', 'karthik', '9961003680', '0', '1', '2020-12-07 07:17:11');

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `admin_id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`admin_id`, `username`, `password`, `role`, `created_date`) VALUES
(1, 'admin', 'admin123', 'admin', '2020-11-04 04:58:47'),
(2, 'manager', '123', 'manager', '2020-11-07 08:24:57');

-- --------------------------------------------------------

--
-- Table structure for table `ajax_cart_tbl`
--

CREATE TABLE `ajax_cart_tbl` (
  `cart_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `status` varchar(5) NOT NULL DEFAULT '0',
  `deleted` varchar(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ajax_cart_tbl`
--

INSERT INTO `ajax_cart_tbl` (`cart_id`, `user_id`, `product_id`, `quantity`, `status`, `deleted`) VALUES
(3, 68, 36, '1', '0', '0'),
(8, 68, 37, '5', '0', '0'),
(18, 68, 35, '2', '0', '0'),
(40, 68, 34, '7', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `buy_supplier_tbl`
--

CREATE TABLE `buy_supplier_tbl` (
  `buy_supplier_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `supplier_id` int(10) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `purchase_price` varchar(10) NOT NULL,
  `invoice_number` varchar(15) NOT NULL,
  `total_price` varchar(20) NOT NULL,
  `deleted` varchar(5) NOT NULL DEFAULT '0',
  `status` varchar(5) NOT NULL DEFAULT '0',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `inserted_by_id` varchar(10) NOT NULL DEFAULT 'pending',
  `deleted_by_id` varchar(10) NOT NULL DEFAULT 'pending',
  `updated_by_id` varchar(10) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buy_supplier_tbl`
--

INSERT INTO `buy_supplier_tbl` (`buy_supplier_id`, `product_id`, `supplier_id`, `quantity`, `purchase_price`, `invoice_number`, `total_price`, `deleted`, `status`, `created_date`, `inserted_by_id`, `deleted_by_id`, `updated_by_id`) VALUES
(30, 31, 8, '19500', '234', '12234', '', '0', '0', '2020-11-12 12:42:46', '2', 'pending', '2'),
(31, 34, 10, '600', '35', '1011', '21000', '0', '0', '2020-11-12 15:11:31', '2', 'pending', '1'),
(32, 35, 11, '600', '10', '10112', '6000', '0', '0', '2020-11-12 15:11:58', '2', 'pending', '1'),
(33, 36, 10, '300', '5', '1013', '1500', '0', '0', '2020-11-12 15:12:24', '2', 'pending', '1'),
(34, 36, 10, '200', '2', '1223400000', '400', '0', '0', '2020-12-07 08:11:39', '', 'pending', '1'),
(35, 34, 10, '5', '35', '10001', '175', '0', '0', '2020-12-28 04:24:53', '1', 'pending', '1');

-- --------------------------------------------------------

--
-- Table structure for table `category_tbl`
--

CREATE TABLE `category_tbl` (
  `category_id` int(10) NOT NULL,
  `category_name` varchar(20) NOT NULL,
  `category_image` varchar(50) NOT NULL,
  `status` varchar(5) NOT NULL DEFAULT '0',
  `deleted` varchar(5) NOT NULL DEFAULT '0',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `inserted_by_id` varchar(10) NOT NULL DEFAULT 'pending',
  `updated_by_id` varchar(10) NOT NULL DEFAULT 'pending',
  `deleted_by_id` varchar(10) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_tbl`
--

INSERT INTO `category_tbl` (`category_id`, `category_name`, `category_image`, `status`, `deleted`, `created_date`, `inserted_by_id`, `updated_by_id`, `deleted_by_id`) VALUES
(32, 'penq    ', 'pen.jpg', '0', '1', '2020-11-09 03:51:03', '2', '2', '2'),
(33, ' book', 'books.jpg', '0', '1', '2020-11-09 03:51:21', '2', 'pending', '2'),
(34, 'earser', 'eraser.jpg', '0', '1', '2020-11-09 03:51:39', '2', 'pending', '2'),
(35, 'scale ', 'scale1.jpg', '0', '1', '2020-11-09 03:52:22', '2', '2', '2'),
(36, ' medium long book ', 'books.jpg', '0', '1', '2020-11-09 05:18:41', '2', '2', '2'),
(37, ' book', 'books.jpg', '0', '1', '2020-11-09 07:53:16', '2', 'pending', '2'),
(38, ' book', 'books.jpg', '0', '0', '2020-11-12 15:05:45', '2', 'pending', 'pending'),
(39, 'pen', 'pen.jpg', '0', '0', '2020-11-12 15:06:00', '2', 'pending', 'pending'),
(40, 'earser', 'eraser.jpg', '0', '0', '2020-11-12 15:06:21', '2', 'pending', 'pending'),
(41, 'pensil', 'pensil.png', '0', '0', '2020-11-30 07:08:41', '1', 'pending', 'pending'),
(42, 'scale', 'scale1.jpg', '0', '0', '2020-11-30 07:09:28', '1', 'pending', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `customer_tbl`
--

CREATE TABLE `customer_tbl` (
  `user_id` int(10) NOT NULL,
  `customer_name` varchar(20) NOT NULL,
  `customer_email` varchar(30) NOT NULL,
  `customer_phone_number` varchar(15) NOT NULL,
  `customer_address` varchar(50) NOT NULL,
  `customer_land_mark` varchar(20) NOT NULL,
  `customer_pincode` varchar(10) NOT NULL,
  `customer_password` varchar(20) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` varchar(5) NOT NULL DEFAULT '0',
  `status` varchar(5) NOT NULL DEFAULT '0',
  `deleted_by_id` varchar(10) NOT NULL DEFAULT 'pending',
  `inserted_by_id` varchar(10) NOT NULL DEFAULT 'pending',
  `updated_by_id` varchar(10) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_tbl`
--

INSERT INTO `customer_tbl` (`user_id`, `customer_name`, `customer_email`, `customer_phone_number`, `customer_address`, `customer_land_mark`, `customer_pincode`, `customer_password`, `created_date`, `deleted`, `status`, `deleted_by_id`, `inserted_by_id`, `updated_by_id`) VALUES
(1, 'joyan  ', 'joyan@g,mail  ', '8547513364', 'manglorte  ', 'manglore  ', '671323  ', '123  ', '2020-11-13 06:10:45', '0', '0', 'pending', '2', '1'),
(2, 'royal', 'royal@gmail.com ', '9961003680 ', 'banglore ', 'manglore ', '671323 ', '1234 ', '2020-11-13 06:13:30', '0', '0', 'pending', '2', '2'),
(3, 'karthik', 'karthik@gmail.com', '9961003680', 'manglore', 'manglore', '573005', '22', '2020-12-15 04:29:19', '0', '0', 'pending', '1', 'pending'),
(4, 'aaaa', 'joyan@g,mail', '4455555544', 'kasaragoda', 'aa', '671323a', 'aaa', '2020-12-15 05:13:28', '1', '0', '1', '1', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_detail_tbl`
--

CREATE TABLE `invoice_detail_tbl` (
  `invoice_detail_id` int(10) NOT NULL,
  `invoice_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `price` varchar(10) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_detail_tbl`
--

INSERT INTO `invoice_detail_tbl` (`invoice_detail_id`, `invoice_id`, `product_id`, `quantity`, `price`, `created_date`) VALUES
(253, 204, 34, '4', '25.00', '2020-12-23 04:17:47'),
(254, 204, 35, '4', '10.00', '2020-12-23 04:17:47'),
(255, 205, 34, '2', '25.00', '2020-12-23 04:18:18'),
(256, 205, 35, '2', '10.00', '2020-12-23 04:18:18'),
(257, 205, 36, '3', '5.00', '2020-12-23 04:18:18'),
(263, 207, 34, '4', '25.00', '2020-12-23 05:04:24'),
(264, 208, 34, '3', '25.00', '2020-12-23 06:38:32'),
(265, 209, 34, '3', '25.00', '2020-12-23 07:03:56'),
(266, 209, 35, '3', '10.00', '2020-12-23 07:03:56'),
(267, 210, 34, '4', '25.00', '2020-12-23 07:11:57'),
(269, 212, 34, '4', '25.00', '2020-12-24 04:27:36'),
(270, 212, 35, '4', '10.00', '2020-12-24 04:27:36'),
(271, 212, 36, '3', '5.00', '2020-12-24 04:27:36'),
(272, 212, 37, '4', '5.00', '2020-12-24 04:27:36'),
(273, 212, 38, '5', '9.80', '2020-12-24 04:27:36'),
(278, 214, 34, '2', '25.00', '2020-12-24 05:56:18'),
(279, 214, 35, '3', '10.00', '2020-12-24 05:56:18'),
(280, 214, 36, '2', '5.00', '2020-12-24 05:56:18'),
(281, 214, 37, '2', '5.00', '2020-12-24 05:56:18'),
(282, 214, 38, '3', '9.80', '2020-12-24 05:56:18'),
(283, 215, 34, '30', '25.00', '2020-12-28 03:22:35'),
(341, 248, 34, '8.0', '25.0', '2021-01-13 15:49:14'),
(342, 248, 35, '8.0', '10.0', '2021-01-13 15:49:14'),
(343, 249, 34, '10.0', '25.0', '2021-01-13 15:53:09'),
(344, 249, 35, '10.0', '10.0', '2021-01-13 15:53:10'),
(345, 249, 36, '10.0', '5.0', '2021-01-13 15:53:10'),
(346, 249, 37, '10.0', '5.0', '2021-01-13 15:53:10'),
(347, 249, 38, '10.0', '9.8', '2021-01-13 15:53:10'),
(348, 250, 34, '1', '25.00', '2021-03-10 07:55:18'),
(349, 251, 34, '579', '25.00', '2021-03-10 07:59:46');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_tbl`
--

CREATE TABLE `invoice_tbl` (
  `invoice_id` int(10) NOT NULL,
  `order_no` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `address_id` varchar(10) NOT NULL DEFAULT 'NO',
  `grand_total` varchar(10) NOT NULL,
  `order_status` varchar(10) NOT NULL DEFAULT '0',
  `deleted` varchar(10) NOT NULL DEFAULT '0',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_tbl`
--

INSERT INTO `invoice_tbl` (`invoice_id`, `order_no`, `user_id`, `address_id`, `grand_total`, `order_status`, `deleted`, `created_date`) VALUES
(204, 7551851, 1, 'NO', '140', '0', '0', '2020-12-23 04:17:47'),
(205, 7402446, 3, 'NO', '85', '0', '0', '2020-12-23 04:18:18'),
(208, 3135395, 68, '11', '75', '0', '0', '2020-12-23 06:38:32'),
(209, 5852152, 68, '13', '105', '0', '0', '2020-12-23 07:03:56'),
(210, 5813298, 1, 'NO', '100', '0', '0', '2020-12-23 07:11:57'),
(212, 9770604, 1, 'NO', '224', '0', '0', '2020-12-24 04:27:36'),
(214, 4946625, 68, '14', '129.4', '0', '0', '2020-12-24 05:56:18'),
(215, 4088993, 2, 'NO', '750', '0', '0', '2020-12-28 03:22:35'),
(248, 10223485, 68, '11', '280.0', '0', '0', '2021-01-13 15:49:14'),
(249, 10480987, 68, '11', '548.0', '0', '0', '2021-01-13 15:53:09'),
(250, 7621056, 2, 'NO', '25', '0', '0', '2021-03-10 07:55:18'),
(251, 6034005, 0, 'NO', '14475', '0', '0', '2021-03-10 07:59:45');

-- --------------------------------------------------------

--
-- Table structure for table `product_img_tbl`
--

CREATE TABLE `product_img_tbl` (
  `product_img_id` int(11) NOT NULL,
  `product_id` int(10) NOT NULL,
  `product_img` varchar(20) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(5) NOT NULL DEFAULT '0',
  `deleted` varchar(5) NOT NULL DEFAULT '0',
  `inserted_by_id` varchar(10) NOT NULL DEFAULT 'pending',
  `updated_by_id` varchar(10) NOT NULL DEFAULT 'pending',
  `deleted_by_id` varchar(10) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_img_tbl`
--

INSERT INTO `product_img_tbl` (`product_img_id`, `product_id`, `product_img`, `created_date`, `status`, `deleted`, `inserted_by_id`, `updated_by_id`, `deleted_by_id`) VALUES
(23, 34, 'books.jpg', '2020-11-18 05:34:12', '0', '1', '1', 'pending', '1'),
(24, 34, 'books.jpg', '2020-11-18 05:44:10', '0', '1', '1', 'pending', '1'),
(25, 36, 'pen.jpg', '2020-11-18 05:50:39', '0', '1', '1', 'pending', '1'),
(26, 36, 'eraser.jpg', '2020-11-18 05:53:17', '0', '1', '1', 'pending', '1'),
(27, 34, 'books.jpg', '2020-11-18 06:02:20', '0', '1', '1', 'pending', '1'),
(28, 34, 'pen.jpg', '2020-11-18 06:02:46', '0', '1', '1', 'pending', '1'),
(29, 36, 'eraser.jpg', '2020-11-18 06:11:50', '0', '1', '1', 'pending', '1'),
(30, 36, 'h1.jpg', '2020-11-18 06:12:23', '0', '1', '1', 'pending', '1'),
(31, 36, 'scale1.jpg', '2020-11-18 06:13:13', '0', '1', '1', 'pending', '1'),
(32, 35, 'books.jpg', '2020-11-18 06:14:46', '0', '1', '1', 'pending', '1'),
(33, 35, 'eraser.jpg', '2020-11-18 06:15:05', '0', '1', '1', 'pending', '1'),
(34, 35, 'scale1.jpg', '2020-11-18 06:45:15', '0', '1', '1', 'pending', '1'),
(35, 35, 'pen.jpg', '2020-11-18 07:23:18', '0', '1', '1', 'pending', '1'),
(36, 34, 'books.jpg', '2020-11-18 07:26:09', '0', '1', '1', 'pending', '1'),
(37, 34, 'h1.jpg', '2020-11-18 07:26:49', '0', '1', '1', 'pending', '1'),
(38, 34, 'eraser.jpg', '2020-11-18 07:28:50', '0', '1', '1', 'pending', '1'),
(39, 34, 'h1.jpg', '2020-11-18 07:29:25', '0', '1', '1', 'pending', '1'),
(40, 36, 'books.jpg', '2020-11-18 07:29:45', '0', '1', '1', 'pending', '1'),
(41, 0, 'eraser.jpg', '2020-11-18 07:31:32', '0', '0', '1', 'pending', 'pending'),
(42, 36, 'books.jpg', '2020-11-18 07:32:12', '0', '1', '1', 'pending', '1'),
(43, 36, 'books.jpg', '2020-11-18 07:32:25', '0', '1', '1', 'pending', '1'),
(44, 0, 'books.jpg', '2020-11-18 07:35:26', '0', '0', '1', 'pending', 'pending'),
(45, 0, 'books.jpg', '2020-11-18 07:35:32', '0', '0', '1', 'pending', 'pending'),
(46, 36, 'books.jpg', '2020-11-18 07:35:51', '0', '1', '1', 'pending', '1'),
(48, 36, 'scale1.jpg', '2020-11-18 07:36:14', '0', '1', '1', 'pending', '1'),
(49, 0, 'books.jpg', '2020-11-18 07:38:48', '0', '0', '1', 'pending', 'pending'),
(50, 36, 'pen.jpg', '2020-11-18 07:39:04', '0', '1', '1', 'pending', '1'),
(51, 36, 'h1.jpg', '2020-11-18 07:39:14', '0', '1', '1', 'pending', '1'),
(52, 36, 'pen.jpg', '2020-11-18 07:39:23', '0', '1', '1', 'pending', '1'),
(53, 34, 'books.jpg', '2020-11-18 07:42:47', '0', '1', '1', 'pending', '1'),
(54, 34, 'eraser.jpg', '2020-11-18 07:42:54', '0', '1', '1', 'pending', '1'),
(55, 34, 'h1.jpg', '2020-11-18 07:43:02', '0', '1', '1', 'pending', '1'),
(56, 0, 'books.jpg', '2020-11-18 07:44:08', '0', '0', '1', 'pending', 'pending'),
(57, 35, 'books.jpg', '2020-11-18 07:45:13', '0', '1', '1', 'pending', '1'),
(58, 35, 'pen.jpg', '2020-11-18 07:45:21', '0', '1', '1', 'pending', '1'),
(59, 35, 'books.jpg', '2020-11-18 07:49:03', '0', '1', '1', 'pending', '1'),
(60, 34, 'eraser.jpg', '2020-11-18 07:49:53', '0', '1', '1', 'pending', '1'),
(61, 35, 'books.jpg', '2020-11-18 07:51:24', '0', '1', '1', 'pending', '1'),
(62, 34, 'books.jpg', '2020-11-18 07:51:48', '0', '1', '1', 'pending', '1'),
(63, 34, 'eraser.jpg', '2020-11-18 07:51:54', '0', '1', '1', 'pending', '1'),
(64, 34, 'pen.jpg', '2020-11-18 07:52:01', '0', '1', '1', 'pending', '1'),
(65, 34, 'books.jpg', '2020-11-18 07:56:45', '0', '1', '1', 'pending', '1'),
(66, 34, 'eraser.jpg', '2020-11-18 07:56:54', '0', '1', '1', 'pending', '1'),
(67, 34, 'pen.jpg', '2020-11-18 07:59:25', '0', '1', '1', 'pending', '1'),
(68, 34, 'eraser.jpg', '2020-11-18 08:04:42', '0', '1', '1', 'pending', '1'),
(69, 35, 'books.jpg', '2020-11-18 08:05:25', '0', '1', '1', 'pending', '1'),
(70, 35, 'pen.jpg', '2020-11-18 08:05:33', '0', '1', '1', 'pending', '1'),
(71, 35, 'eraser.jpg', '2020-11-18 08:15:58', '0', '1', '1', 'pending', '1'),
(72, 35, 'h1.jpg', '2020-11-18 08:16:58', '0', '1', '1', 'pending', '1'),
(73, 34, 'eraser.jpg', '2020-11-18 13:56:36', '0', '1', '1', 'pending', '1'),
(74, 35, 'books.jpg', '2020-11-18 13:57:17', '0', '1', '1', 'pending', ''),
(75, 36, 'pen.jpg', '2020-11-18 13:57:30', '0', '1', '1', 'pending', ''),
(76, 34, 'books.jpg', '2020-11-19 05:25:37', '0', '0', '', 'pending', 'pending'),
(77, 35, 'pen.jpg', '2020-11-19 05:26:53', '0', '0', '', 'pending', 'pending'),
(78, 36, 'eraser.jpg', '2020-11-19 05:27:11', '0', '0', '', 'pending', 'pending'),
(79, 34, 'scale1.jpg', '2020-11-19 05:29:02', '0', '1', '1', 'pending', '1'),
(80, 34, 'scale1.jpg', '2020-11-21 07:59:31', '0', '1', '1', 'pending', '1'),
(81, 37, 'pensil.png', '2020-11-30 07:17:43', '0', '0', '1', 'pending', 'pending'),
(82, 38, 'scale1.jpg', '2020-11-30 07:18:20', '0', '0', '1', 'pending', 'pending'),
(83, 34, 'c2.jpg', '2020-12-07 04:12:21', '0', '0', '1', 'pending', 'pending'),
(84, 34, 'A5-320-1.jpg', '2020-12-07 04:57:30', '0', '0', '1', 'pending', 'pending'),
(85, 35, 'pen2.jpg', '2020-12-07 07:11:04', '0', '0', '1', 'pending', 'pending'),
(86, 37, 'p2.jpg', '2020-12-09 03:28:12', '0', '0', '1', 'pending', 'pending'),
(87, 36, '', '2020-12-09 03:29:27', '0', '1', '1', 'pending', '1'),
(88, 36, 'e2.jpg', '2020-12-09 03:29:39', '0', '0', '1', 'pending', 'pending'),
(89, 36, 'eraser.jpg', '2020-12-09 03:29:53', '0', '0', '1', 'pending', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

CREATE TABLE `product_tbl` (
  `product_id` int(10) NOT NULL,
  `unit_id` int(10) NOT NULL,
  `tax_id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  `sub_category_id` int(10) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `product_description` varchar(50) NOT NULL,
  `product_code` varchar(10) NOT NULL,
  `stock_status` varchar(10) NOT NULL DEFAULT 'available',
  `quantity` varchar(10) NOT NULL,
  `product_price` varchar(10) NOT NULL,
  `discount` varchar(10) NOT NULL,
  `selling_price` varchar(10) NOT NULL,
  `status` varchar(5) NOT NULL DEFAULT '0',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` varchar(5) NOT NULL DEFAULT '0',
  `inserted_by_id` varchar(10) NOT NULL DEFAULT 'pending',
  `updated_by_id` varchar(10) NOT NULL DEFAULT 'pending',
  `deleted_by_id` varchar(10) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_tbl`
--

INSERT INTO `product_tbl` (`product_id`, `unit_id`, `tax_id`, `category_id`, `sub_category_id`, `product_name`, `product_description`, `product_code`, `stock_status`, `quantity`, `product_price`, `discount`, `selling_price`, `status`, `created_date`, `deleted`, `inserted_by_id`, `updated_by_id`, `deleted_by_id`) VALUES
(34, 47, 20, 38, 31, 'classmate      ', 'classmate medium long ruled book      ', '1001      ', 'available', '10', '50      ', '50', '25.00', '0', '2020-11-12 15:08:20', '0', '2', '1', 'pending'),
(35, 47, 21, 39, 32, 'cello   ', 'black ink pen    ', '1002   ', 'available', '590.0', '10   ', '0', '10.00', '0', '2020-11-12 15:09:07', '0', '2', '1', 'pending'),
(36, 48, 22, 40, 33, 'camlin      ', 'camlin ink earser      ', '1003      ', 'available', '590.0', '5      ', '0', '5.00', '0', '2020-11-12 15:09:53', '0', '2', '1', 'pending'),
(37, 48, 21, 41, 34, 'natraj pensil      ', '0.7mm      ', '1004    ', 'available', '590.0', '5      ', '0', '5.00', '0', '2020-11-30 07:12:05', '0', '1', '1', 'pending'),
(38, 48, 20, 42, 36, 'medium scale     ', 'medium scale     ', '1005     ', 'available', '590.0', '10     ', '2', '9.80', '0', '2020-11-30 07:13:41', '0', '1', '1', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `register_tbl`
--

CREATE TABLE `register_tbl` (
  `user_id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_tbl`
--

INSERT INTO `register_tbl` (`user_id`, `username`, `phone_number`, `email`, `password`, `created_date`) VALUES
(68, 'admin     ', '9961003680       ', 'laileshveigas1999@gmail.com  ', 'admin123', '2020-11-18 03:31:55'),
(69, 'manager', '99610036801', 'lanston@gmail.com', 'admin123', '2020-11-18 12:25:25');

-- --------------------------------------------------------

--
-- Table structure for table `review_tbl`
--

CREATE TABLE `review_tbl` (
  `review_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `review` varchar(200) NOT NULL,
  `date_of_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `staus` varchar(5) NOT NULL DEFAULT '0',
  `deleted` varchar(10) NOT NULL DEFAULT '0',
  `inserted_by_id` varchar(10) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_tbl`
--

INSERT INTO `review_tbl` (`review_id`, `user_id`, `product_id`, `review`, `date_of_created`, `staus`, `deleted`, `inserted_by_id`) VALUES
(9, 68, 35, 'peb ', '2020-12-07 06:19:03', '0', '0', 'pending'),
(11, 68, 36, 'good', '2020-12-07 06:34:57', '0', '0', 'pending'),
(13, 68, 34, 'hello world', '2021-01-07 08:28:17', '0', '0', 'pending'),
(14, 68, 34, 'hello world', '2021-01-07 08:28:43', '0', '0', 'pending'),
(15, 68, 34, 'hello world', '2021-01-07 08:28:58', '0', '0', 'pending'),
(16, 68, 34, 'worldd', '2021-01-07 08:32:55', '0', '0', 'pending'),
(17, 68, 34, 'happy', '2021-01-07 16:26:14', '0', '0', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category_tbl`
--

CREATE TABLE `sub_category_tbl` (
  `sub_category_id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  `sub_category_name` varchar(20) NOT NULL,
  `status` varchar(5) NOT NULL DEFAULT '0',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` varchar(5) NOT NULL DEFAULT '0',
  `inserted_by_id` varchar(10) NOT NULL DEFAULT 'pending',
  `updated_by_id` varchar(10) NOT NULL DEFAULT 'pending',
  `deleted_by_id` varchar(10) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category_tbl`
--

INSERT INTO `sub_category_tbl` (`sub_category_id`, `category_id`, `sub_category_name`, `status`, `created_date`, `deleted`, `inserted_by_id`, `updated_by_id`, `deleted_by_id`) VALUES
(19, 33, 'ink  ', '0', '2020-11-09 06:33:59', '0', '2', '2', 'pending'),
(20, 33, 'medium long book', '0', '2020-11-09 06:34:19', '0', '2', 'pending', 'pending'),
(21, 35, 'long scale    ', '0', '2020-11-09 07:07:58', '0', '2', '2', 'pending'),
(22, 36, 'classmate  ', '0', '2020-11-09 07:53:39', '0', '2', '2', 'pending'),
(23, 36, 'classmate ruled book', '0', '2020-11-09 13:04:39', '0', '2', '', 'pending'),
(24, 36, 'long book unruled ', '0', '2020-11-10 04:37:32', '0', '', '', 'pending'),
(25, 37, 'long book 11', '0', '2020-11-10 06:56:50', '0', '2', 'pending', 'pending'),
(26, 34, 'small earser', '0', '2020-11-11 11:42:00', '0', '2', 'pending', 'pending'),
(27, 32, 'cello point', '0', '2020-11-11 11:42:21', '0', '2', 'pending', 'pending'),
(28, 32, 'long pen', '0', '2020-11-11 12:12:25', '0', '2', 'pending', 'pending'),
(29, 36, 'long book', '0', '2020-11-11 12:42:43', '0', '2', 'pending', 'pending'),
(30, 37, 'medium short book q', '0', '2020-11-11 12:44:22', '0', '2', 'pending', 'pending'),
(31, 38, 'long book', '0', '2020-11-12 15:06:39', '0', '2', 'pending', 'pending'),
(32, 39, 'black ink pen', '0', '2020-11-12 15:06:52', '0', '2', 'pending', 'pending'),
(33, 40, 'ink earser', '0', '2020-11-12 15:07:03', '0', '2', 'pending', 'pending'),
(34, 41, 'natraj', '0', '2020-11-30 07:09:43', '0', '1', 'pending', 'pending'),
(35, 0, 'small scale', '0', '2020-11-30 07:10:41', '0', '1', 'pending', 'pending'),
(36, 42, 'medium scale', '0', '2020-11-30 07:12:40', '0', '1', 'pending', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_tbl`
--

CREATE TABLE `supplier_tbl` (
  `supplier_id` int(10) NOT NULL,
  `supplier_name` varchar(15) NOT NULL,
  `supplier_contact` varchar(13) NOT NULL,
  `supplier_email` varchar(20) NOT NULL,
  `supplier_address` varchar(40) NOT NULL,
  `gst` varchar(10) NOT NULL,
  `status` varchar(5) NOT NULL DEFAULT '0',
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `inserted_by_id` varchar(10) NOT NULL DEFAULT 'pending',
  `updated_by_id` varchar(10) NOT NULL DEFAULT 'pending',
  `deleted_by_id` varchar(10) NOT NULL DEFAULT 'pending',
  `deleted` varchar(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier_tbl`
--

INSERT INTO `supplier_tbl` (`supplier_id`, `supplier_name`, `supplier_contact`, `supplier_email`, `supplier_address`, `gst`, `status`, `created_date`, `inserted_by_id`, `updated_by_id`, `deleted_by_id`, `deleted`) VALUES
(3, 'joyan', '9961003680', '', 'manglore', '35', '0', '2020-11-11 11:13:25', '2', 'pending', '2', '1'),
(4, 'joyan', '9961003680', '', 'manglore', '35', '0', '2020-11-11 11:14:30', '2', 'pending', '2', '1'),
(5, 'joyan', '9961003680', '', 'manglore', '35', '0', '2020-11-11 11:14:57', '2', 'pending', '2', '1'),
(6, 'joyan  1', '9961003680  1', 'aaa  1', 'manglore  1', '352  1', '0', '2020-11-11 11:45:57', '2', '2', '2', '1'),
(7, 'joyan', '9961003680', 'aaa', 'manglore', '35', '0', '2020-11-11 12:04:47', '2', 'pending', '2', '1'),
(8, 'royal ', '62626652 ', 'aaa ', 'banglore', '35 ', '0', '2020-11-11 12:05:05', '2', '2', '2', '1'),
(9, 'joyan', '9961003680', '', 'manglore', '35', '0', '2020-11-11 12:29:21', '2', 'pending', '2', '1'),
(10, 'joyan', '9961003680', 'joyan@gmail.com', 'manglore', '35', '0', '2020-11-12 20:40:20', '2', 'pending', 'pending', '0'),
(11, 'royal', '62626652', 'royal@gmail.com', 'banglore', '7', '0', '2020-11-12 20:40:41', '2', 'pending', 'pending', '0'),
(12, 'roy', '9961003680', 'aaa', 'wbwgw ', '35', '0', '2020-11-13 10:12:19', '2', 'pending', '2', '1'),
(13, 'joyan  1', '9961003680', 'aaa', 'manglore', '35', '0', '2020-11-13 10:13:39', '2', 'pending', '2', '1'),
(14, 'joyan', '9961003680', 'aaa', 'manglore', '35', '0', '2020-11-13 10:22:37', '2', 'pending', '2', '1'),
(15, 'bookmark', '9961003680', 'aaa', 'wbwgw ', '35', '0', '2020-11-13 10:22:57', '2', 'pending', '2', '1'),
(16, 'bookmark', '9961003680', 'aaa', 'manglore', '35', '0', '2020-11-13 10:24:18', '2', 'pending', '2', '1'),
(17, 'joyan', '9961003680', 'aaa  1', 'manglore', '35', '0', '2020-11-13 10:27:00', '2', 'pending', '2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tax_tbl`
--

CREATE TABLE `tax_tbl` (
  `tax_id` int(10) NOT NULL,
  `tax_name` varchar(20) NOT NULL,
  `tax_rate` varchar(10) NOT NULL,
  `status` varchar(5) NOT NULL DEFAULT '0',
  `deleted` varchar(5) NOT NULL DEFAULT '0',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `inserted_by_id` varchar(10) NOT NULL DEFAULT 'pending',
  `updated_by_id` varchar(10) NOT NULL DEFAULT 'pending',
  `deleted_by_id` varchar(10) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tax_tbl`
--

INSERT INTO `tax_tbl` (`tax_id`, `tax_name`, `tax_rate`, `status`, `deleted`, `created_date`, `inserted_by_id`, `updated_by_id`, `deleted_by_id`) VALUES
(12, 'sales tax', '44', '0', '1', '2020-11-09 13:44:43', '2', 'pending', '2'),
(13, 'gst', '100', '0', '1', '2020-11-09 13:44:54', '2', 'pending', '2'),
(14, 'service tax', '30', '0', '1', '2020-11-10 05:29:47', '2', 'pending', '2'),
(15, 'gst', '34', '0', '1', '2020-11-10 05:56:50', '2', 'pending', '2'),
(16, 'gst', '3000', '0', '1', '2020-11-10 07:58:41', '2', 'pending', '2'),
(17, 'sales tax', '100', '0', '1', '2020-11-10 07:58:50', '2', 'pending', '2'),
(18, 'service tax', '1000', '0', '1', '2020-11-10 07:59:01', '2', 'pending', '2'),
(19, 'sales tax', '2000', '0', '1', '2020-11-12 15:04:46', '2', 'pending', '2'),
(20, 'sales tax', '3000', '0', '0', '2020-11-12 15:04:56', '2', 'pending', 'pending'),
(21, 'gst ', '1500', '0', '0', '2020-11-12 15:05:06', '2', '2', 'pending'),
(22, 'service tax', '1000', '0', '0', '2020-11-12 15:05:17', '2', 'pending', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `unit_tbl`
--

CREATE TABLE `unit_tbl` (
  `unit_id` int(10) NOT NULL,
  `unit_name` varchar(50) NOT NULL,
  `status` varchar(5) NOT NULL DEFAULT '0',
  `deleted` varchar(5) NOT NULL DEFAULT '0',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `inserted_by_id` varchar(10) NOT NULL DEFAULT 'pending',
  `updated_by_id` varchar(10) NOT NULL DEFAULT 'pending',
  `deleted_by_id` varchar(10) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit_tbl`
--

INSERT INTO `unit_tbl` (`unit_id`, `unit_name`, `status`, `deleted`, `created_date`, `inserted_by_id`, `updated_by_id`, `deleted_by_id`) VALUES
(25, 'kg  ', '0', '1', '2020-11-07 03:26:45', 'pending', 'pending', '2'),
(26, 'gram', '0', '1', '2020-11-07 03:26:53', 'pending', 'pending', '2'),
(27, 'ml', '0', '1', '2020-11-07 03:32:14', 'pending', 'pending', '2'),
(28, 'gram ', '0', '1', '2020-11-08 04:39:42', '2', '2', '2'),
(29, 'gram', '0', '1', '2020-11-08 09:24:48', '2', 'pending', '2'),
(30, 'gram', '0', '1', '2020-11-08 09:24:53', '2', 'pending', '2'),
(31, 'gram', '0', '1', '2020-11-08 09:25:35', '2', 'pending', '2'),
(32, 'gram1', '0', '1', '2020-11-08 09:25:40', '2', 'pending', '2'),
(33, 'gram1', '0', '1', '2020-11-08 09:26:15', '2', 'pending', '2'),
(34, 'gram12', '0', '1', '2020-11-08 09:26:19', '2', 'pending', '2'),
(35, 'gram123', '0', '1', '2020-11-08 09:26:23', '2', 'pending', '2'),
(36, 'gram1234', '0', '1', '2020-11-08 09:26:27', '2', 'pending', '2'),
(37, 'gram12345', '0', '1', '2020-11-08 09:26:31', '2', 'pending', '2'),
(38, 'gram12345', '0', '1', '2020-11-08 09:26:34', '2', 'pending', '2'),
(39, 'gram12345', '0', '1', '2020-11-08 09:26:36', '2', 'pending', '2'),
(40, 'gram12345', '0', '1', '2020-11-08 09:26:38', '2', 'pending', '2'),
(41, 'gram12345', '0', '1', '2020-11-08 09:26:40', '2', 'pending', '2'),
(42, 'gram12345', '0', '1', '2020-11-08 09:26:41', '2', 'pending', '2'),
(43, 'gram11', '0', '1', '2020-11-08 09:51:05', '2', '2', '2'),
(44, 'gram1234 ', '0', '1', '2020-11-09 05:05:31', '2', '2', '2'),
(45, 'kg22 ', '0', '1', '2020-11-09 05:05:40', '2', '2', '2'),
(46, 'gram', '0', '1', '2020-11-09 13:15:20', '2', 'pending', '2'),
(47, 'gram', '0', '0', '2020-11-12 15:04:25', '2', '1', 'pending'),
(48, 'kg', '0', '0', '2020-11-12 15:04:34', '2', 'pending', 'pending'),
(49, 'litre', '0', '0', '2020-12-10 06:43:19', '1', 'pending', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address_tbl`
--
ALTER TABLE `address_tbl`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `ajax_cart_tbl`
--
ALTER TABLE `ajax_cart_tbl`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `buy_supplier_tbl`
--
ALTER TABLE `buy_supplier_tbl`
  ADD PRIMARY KEY (`buy_supplier_id`);

--
-- Indexes for table `category_tbl`
--
ALTER TABLE `category_tbl`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customer_tbl`
--
ALTER TABLE `customer_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `invoice_detail_tbl`
--
ALTER TABLE `invoice_detail_tbl`
  ADD PRIMARY KEY (`invoice_detail_id`);

--
-- Indexes for table `invoice_tbl`
--
ALTER TABLE `invoice_tbl`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `product_img_tbl`
--
ALTER TABLE `product_img_tbl`
  ADD PRIMARY KEY (`product_img_id`);

--
-- Indexes for table `product_tbl`
--
ALTER TABLE `product_tbl`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `register_tbl`
--
ALTER TABLE `register_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `review_tbl`
--
ALTER TABLE `review_tbl`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `sub_category_tbl`
--
ALTER TABLE `sub_category_tbl`
  ADD PRIMARY KEY (`sub_category_id`);

--
-- Indexes for table `supplier_tbl`
--
ALTER TABLE `supplier_tbl`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `tax_tbl`
--
ALTER TABLE `tax_tbl`
  ADD PRIMARY KEY (`tax_id`);

--
-- Indexes for table `unit_tbl`
--
ALTER TABLE `unit_tbl`
  ADD PRIMARY KEY (`unit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address_tbl`
--
ALTER TABLE `address_tbl`
  MODIFY `address_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ajax_cart_tbl`
--
ALTER TABLE `ajax_cart_tbl`
  MODIFY `cart_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `buy_supplier_tbl`
--
ALTER TABLE `buy_supplier_tbl`
  MODIFY `buy_supplier_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `category_tbl`
--
ALTER TABLE `category_tbl`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `customer_tbl`
--
ALTER TABLE `customer_tbl`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `invoice_detail_tbl`
--
ALTER TABLE `invoice_detail_tbl`
  MODIFY `invoice_detail_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=350;

--
-- AUTO_INCREMENT for table `invoice_tbl`
--
ALTER TABLE `invoice_tbl`
  MODIFY `invoice_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=252;

--
-- AUTO_INCREMENT for table `product_img_tbl`
--
ALTER TABLE `product_img_tbl`
  MODIFY `product_img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `product_tbl`
--
ALTER TABLE `product_tbl`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `register_tbl`
--
ALTER TABLE `register_tbl`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `review_tbl`
--
ALTER TABLE `review_tbl`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sub_category_tbl`
--
ALTER TABLE `sub_category_tbl`
  MODIFY `sub_category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `supplier_tbl`
--
ALTER TABLE `supplier_tbl`
  MODIFY `supplier_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tax_tbl`
--
ALTER TABLE `tax_tbl`
  MODIFY `tax_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `unit_tbl`
--
ALTER TABLE `unit_tbl`
  MODIFY `unit_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2016 at 12:36 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `izcatering`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `CustomerID` int(11) NOT NULL,
  `CustomerName` varchar(250) NOT NULL,
  `Address` text NOT NULL,
  `City` varchar(250) NOT NULL,
  `PostalCode` varchar(30) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`CustomerID`, `CustomerName`, `Address`, `City`, `PostalCode`, `Country`, `username`, `password`, `email`, `type`) VALUES
(1, 'Maria Anders', 'Obere Str. 57', 'Berlin', '12209', 'Germany', 'root', 'root', 'got@red.com', 'customer'),
(12, ' Lee Bryan', 'Kuala Lumpur ', 'uheigh', '55200', 'Malaysia', 'lee', 'anna', 'ne@gmail.com', 'customer'),
(13, ' Ng Boon Kiat', 'usm ', 'Terengganu', '', 'malaysia ', 'ng ', '123', 'ng@gmail.com', 'kitchen'),
(15, ' Yang', 'Canaddda ', 'Long', '', 'Canada ', 'qwer ', '123', 'happy@good.com', 'cashier'),
(16, ' jabil', 'kedah ', 'lantai', '', 'kampung ', '000 ', 'asd', 'jan@feb.com', 'manage'),
(17, ' Huat', 'kampung ', 'kyoto', '', 'japan ', 'go ', '123', 'ong@oong.com', 'customer'),
(18, ' baby', 'Genting ', 'Pahang', '', 'Highland ', 'king ', 'qwer', 'hh@gat.com', 'customer'),
(19, 'Kamu', 'youth ', 'Baju', '', 'Raju ', 'customer', 'iop', 'yam@red.com', 'customer'),
(20, 'Bob', 'Tekun', 'Penang', '74104', 'Malaysia', 'cash', 'iop', 'cash@cash.com', 'cashier'),
(21, 'Charlie', 'Saujana', 'Penang', '74104', 'Malaysia', 'kitchen', 'iop', 'kiy@cash.com', 'kitchen'),
(22, 'Dane', 'Restu', 'Penang', '74104', 'Malaysia', 'manage', 'iop', 'man@cash.com', 'manage'),
(23, ' Pak Kien', 'oip ', 'Kampung', '', 'Tabun ', 'pk ', 'sozai', 'baba@fan.com', 'customer'),
(24, ' Seong Yaik', 'Jabil ', 'Kuai', '', 'Malabu ', 'yaik ', 'iop', 'lili@food.com', 'kitchen'),
(25, ' Faber', 'Eifler Tower ', 'London', '', 'United Kingdom ', 'fb ', '12345', 'castell@popular.com', 'kitchen'),
(26, ' Ng Zhi Han', 'Jusco ', 'Serdang', '', 'Malaysia ', 'anna ', 'lee', 'jiajiado@red.com', 'manage'),
(27, ' Fong', 'hotel ', 'East', '', 'West ', 'fantasy ', 'iop', 'ncc@ngng.com', 'cashier');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `creation_date` date NOT NULL,
  `order_status` varchar(50) NOT NULL,
  `totalprice` double(10,2) NOT NULL,
  `paytime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `creation_date`, `order_status`, `totalprice`, `paytime`) VALUES
(1, 1, '2016-12-14', 'paid', 10.00, '2016-12-18 00:05:56'),
(2, 1, '2016-12-14', 'paid', 15.00, '2016-12-18 00:05:56'),
(3, 1, '2016-12-14', 'paid', 12.00, '2016-12-18 00:05:56'),
(4, 1, '2016-12-14', 'paid', 5.00, '2016-12-18 00:05:56'),
(5, 1, '2016-12-14', 'paid', 14.00, '2016-12-18 00:05:56'),
(6, 1, '2016-12-14', 'paid', 14.50, '2016-12-18 00:05:56'),
(7, 1, '2016-12-14', 'paid', 21.00, '2016-12-18 00:05:56'),
(8, 1, '2016-12-14', 'paid', 18.00, '2016-12-18 00:05:56'),
(9, 1, '2016-12-14', 'paid', 32.00, '2016-12-18 00:05:56'),
(10, 1, '2016-12-14', 'paid', 10.00, '2016-12-18 00:05:56'),
(12, 1, '2016-12-14', 'paid', 24.00, '2016-12-18 00:05:56'),
(13, 1, '2016-12-15', 'paid', 14.20, '2016-12-18 00:05:56'),
(14, 1, '2016-12-15', 'paid', 4.40, '2016-12-18 00:05:56'),
(15, 1, '2016-12-15', 'paid', 74.00, '2016-12-18 00:49:35'),
(17, 1, '2016-12-15', 'paid', 16.50, '2016-12-18 01:14:07'),
(18, 1, '2016-12-15', 'paid', 3.50, '2016-12-17 18:57:38'),
(19, 1, '2016-12-15', 'paid', 5.50, '2016-12-17 18:58:15'),
(20, 1, '2016-12-15', 'paid', 4.70, '2016-12-18 07:14:32'),
(21, 1, '2016-12-15', 'paid', 4.40, '2016-12-18 07:08:02'),
(22, 1, '2016-12-15', 'paid', 13.40, '2016-12-18 07:15:20'),
(23, 1, '2016-12-15', 'paid', 4.40, '2016-12-18 12:25:36'),
(24, 1, '2016-12-15', 'paid', 4.70, '2016-12-18 00:05:56'),
(25, 1, '2016-12-15', 'pending', 15.70, '2016-12-18 00:05:56'),
(26, 1, '2016-12-15', 'pending', 3.40, '2016-12-18 00:05:56'),
(27, 1, '2016-12-15', 'pending', 20.20, '2016-12-18 00:05:56'),
(28, 1, '2016-12-15', 'pending', 24.70, '2016-12-18 00:05:56'),
(29, 1, '2016-12-15', 'pending', 4.40, '2016-12-18 00:05:56'),
(30, 1, '2016-12-15', 'paid', 17.60, '2016-12-18 00:43:50'),
(31, 1, '2016-12-15', 'pending', 22.35, '2016-12-18 00:05:56'),
(32, 12, '2016-12-17', 'pending', 19.70, '2016-12-18 00:05:56'),
(33, 18, '2016-12-17', 'pending', 9.50, '2016-12-18 00:05:56'),
(34, 12, '2016-12-17', 'pending', 16.95, '2016-12-18 00:05:56'),
(35, 23, '2016-12-18', 'paid', 29.20, '2016-12-18 02:32:19'),
(36, 12, '2016-12-18', 'pending', 110.00, '2016-12-18 02:48:45'),
(37, 12, '2016-12-18', 'pending', 113.90, '2016-12-18 12:14:33');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_status` varchar(250) NOT NULL DEFAULT 'pending'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`id`, `order_id`, `product_name`, `product_price`, `product_quantity`, `product_status`) VALUES
(1, 1, 'Set F', 8.75, 2, 'served'),
(2, 1, 'Set A', 10.20, 1, 'served'),
(3, 1, 'Set D', 14.50, 2, 'served'),
(4, 2, 'Set B', 7.45, 3, 'served'),
(5, 3, 'Set A', 10.20, 1, 'served'),
(6, 4, 'Set A', 10.20, 1, 'served'),
(7, 4, 'Set B', 7.45, 1, 'com'),
(8, 5, 'Set C', 9.50, 4, 'com'),
(9, 5, 'Set B', 7.45, 1, 'served'),
(10, 6, 'Set B', 7.45, 5, 'served'),
(11, 6, 'Choco Frappe', 7.90, 1, 'com'),
(12, 6, 'Set C', 9.50, 1, 'served'),
(13, 7, 'Maltesers Icecream', 4.70, 1, 'served'),
(14, 7, 'Coleslaw (Big)', 5.50, 1, 'pending'),
(15, 8, 'Coleslaw (Big)', 5.50, 1, 'pending'),
(16, 9, 'Set A', 10.20, 1, 'served'),
(17, 10, 'Set A', 10.20, 7, 'served'),
(18, 10, 'Set C', 9.50, 3, 'served'),
(19, 10, 'Oreo Vanilla Icecream', 4.70, 10, 'served'),
(20, 11, 'Set C', 9.50, 1, 'served'),
(21, 11, 'Set F', 8.75, 1, 'served'),
(22, 11, 'Oreo Vanilla Icecream', 4.70, 47, 'served'),
(23, 12, 'Coleslaw (Big)', 5.50, 1, 'pending'),
(24, 13, 'Set F', 8.75, 1, 'served'),
(25, 14, 'Set D', 14.50, 4, 'served'),
(26, 14, 'Oreo Vanilla Icecream', 4.70, 2, 'served'),
(27, 15, 'MysNasi Ayam', 10.00, 1, 'served'),
(28, 15, 'Ice Milo', 4.40, 3, 'served'),
(29, 15, 'Burger DBChicken', 5.75, 1, 'served'),
(30, 17, 'Mashed Potato (Big)', 5.50, 1, 'pending'),
(31, 17, 'Cheezy Wedges', 5.50, 2, 'pending'),
(32, 18, 'Fries', 3.50, 1, 'pending'),
(33, 19, 'Chicken Nugget', 5.50, 1, 'pending'),
(34, 20, 'Maltesers Icecream', 4.70, 1, 'pending'),
(35, 21, 'Ice Lemon Tea', 4.40, 1, 'served'),
(36, 22, 'Cheezy Wedges', 5.50, 1, 'pending'),
(37, 22, 'Coffee Frappe', 7.90, 1, 'served'),
(38, 23, 'Coke Zero', 4.40, 1, 'served'),
(39, 24, 'Caramel Vanilla Icecream', 4.70, 1, 'pending'),
(40, 25, 'Chicken Nugget', 5.50, 2, 'pending'),
(41, 25, 'Maltesers Icecream', 4.70, 1, 'pending'),
(42, 26, 'Pepsi', 3.40, 1, 'pending'),
(43, 27, 'Set A', 10.20, 1, 'served'),
(44, 27, 'Nasi Lemak Ayam', 10.00, 1, 'served'),
(45, 28, 'Set D', 14.50, 1, 'served'),
(46, 28, 'Set A', 10.20, 1, 'served'),
(47, 29, 'Ice Lemon Tea', 4.40, 1, 'pending'),
(48, 30, 'Ice Milo', 4.40, 4, 'pending'),
(49, 31, 'Set B', 7.45, 3, 'served'),
(50, 32, 'Set A', 10.20, 1, 'served'),
(51, 32, 'Set C', 9.50, 1, 'served'),
(52, 33, 'Set C', 9.50, 1, 'served'),
(53, 34, 'Set C', 9.50, 1, 'served'),
(54, 34, 'Set B', 7.45, 1, 'served'),
(55, 35, 'Set A', 10.20, 2, 'served'),
(56, 35, 'Coke Zero', 4.40, 2, 'served'),
(57, 36, 'Cheezy Wedges', 5.50, 20, 'pending'),
(58, 37, 'Set E', 32.00, 3, 'served'),
(59, 37, 'Ice Milo', 4.40, 3, 'pending'),
(60, 37, 'Caramel Vanilla Icecream', 4.70, 1, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `type` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`, `type`) VALUES
(1, 'Set A', '1.png', 10.20, 'food'),
(2, 'Set B', '2.png', 7.45, 'food'),
(3, 'Set C', '3.png', 9.50, 'food'),
(4, 'Set D', '4.png', 14.50, 'food'),
(5, 'Mee Kari Ayam', '5.png', 6.25, 'food'),
(6, 'Burger DBChicken', '6.png', 5.75, 'food'),
(7, 'MysNasi Ayam', '7.png', 10.00, 'food'),
(8, 'Nasi Lemak Ayam', '8.png', 10.00, 'food'),
(9, 'Set E', '9.png', 32.00, 'food'),
(10, 'Set F', '10.png', 8.75, 'food'),
(11, 'Set G', '11.png', 12.25, 'food'),
(12, 'Family Bucket', '12.png', 44.25, 'food'),
(13, 'Coffee Frappe', '1.png', 7.90, 'drink'),
(14, 'Choco Frappe', '2.png', 7.90, 'drink'),
(15, 'Dual Choco Frappe', '3.png', 8.90, 'drink'),
(16, 'Pepsi', '4.png', 3.40, 'drink'),
(17, 'Fanta', '5.png', 3.40, 'drink'),
(18, 'Ice Lemon Tea', '6.png', 4.40, 'drink'),
(19, 'Ice Milo', '7.png', 4.40, 'drink'),
(20, 'Coke Zero', '8.png', 4.40, 'drink'),
(21, 'Coleslaw (Big)', '1.png', 5.50, 'side'),
(22, 'Cheezy Wedges', '2.png', 5.50, 'side'),
(23, 'Mashed Potato (Big)', '3.png', 5.50, 'side'),
(24, 'Fries', '4.png', 3.50, 'side'),
(25, 'Chicken Nugget', '5.png', 5.50, 'side'),
(26, 'Caramel Vanilla Icecream', '6.png', 4.70, 'side'),
(27, 'Oreo Vanilla Icecream', '7.png', 4.70, 'side'),
(28, 'Maltesers Icecream', '8.png', 4.70, 'side');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

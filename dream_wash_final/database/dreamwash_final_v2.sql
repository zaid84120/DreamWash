-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2018 at 05:14 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dreamwash`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` int(11) NOT NULL,
  `package_detail_id` int(11) NOT NULL,
  `customer_address_id` int(11) NOT NULL,
  `appointment_date` varchar(30) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `appointment_status` varchar(1) NOT NULL,
  `completion_date` varchar(30) NOT NULL,
  `car_no` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_id`, `package_detail_id`, `customer_address_id`, `appointment_date`, `employee_id`, `appointment_status`, `completion_date`, `car_no`) VALUES
(38, 5, 10, '18 September 2018 - 01:20 AM', 8, '1', '2018/09/13 01:26:32pm', 'MH12JS9515'),
(39, 7, 11, '18 September 2018 - 01:20 AM', 8, '1', '2018/09/13 01:15:12pm', 'MH14DD1479'),
(40, 5, 12, '27 September 2018 - 08:20 AM', 14, '1', '2018/09/13 03:42:46pm', 'MH14DD1479'),
(41, 5, 13, '18 September 2018 - 01:20 AM', 15, '1', '2018/09/13 04:04:24pm', 'MH12KK1253'),
(42, 5, 14, '27 September 2018 - 08:20 AM', 13, '1', '2018/09/13 04:15:34pm', 'mh14ui5468'),
(43, 5, 15, '18 September 2018 - 01:20 AM', 8, '1', '2018/09/14 08:41:16am', 'mh14ui5468'),
(51, 5, 28, '27 September 2018 - 08:20 AM', 8, '1', '2018/09/14 09:59:53am', 'mh14ui5468'),
(52, 6, 29, '27 September 2018 - 08:20 AM', 8, '1', '2018/09/14 10:00:07am', 'MH12KK1253'),
(53, 6, 30, '18 September 2018 - 01:20 AM', 8, '1', '2018/09/14 09:10:06am', 'MH14DD1479'),
(54, 6, 31, '18 September 2018 - 01:20 AM', 8, '1', '2018/09/14 09:48:04am', 'MH14DD1479'),
(55, 6, 32, '20 September 2018 - 06:20 AM', 13, '1', '2018/09/14 10:42:37am', 'MH13LI5468'),
(56, 6, 33, '18 September 2018 - 01:20 AM', 15, '1', '2018/09/14 12:35:20pm', 'MH12QN7865'),
(57, 8, 34, '08 November 2018 - 10:20 AM', 13, '1', '2018/09/14 12:44:21pm', 'mh14v5121');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(30) NOT NULL,
  `contact_name` varchar(30) NOT NULL,
  `contact_email` varchar(30) NOT NULL,
  `contact_message` text NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_email`, `contact_message`, `customer_id`) VALUES
(1, 'zaid shaikh', 'zaidshaikh505@gmail.com', 'hi ', 2),
(2, 'zaid shaikh', 'zaidshaikh505@gmail.com', 'hi ', 2),
(3, 'zaid shaikh', 'zaidshaikh505@gmail.com', 'hi', 2),
(4, 'zaid shaikh', 'zaidshaikh505@gmail.com', 'hi', 2),
(5, 'zaid shaikh', 'zaidshaikh505@gmail.com', 'hi', 2),
(6, 'zaid shaikh', 'zaidshaikh505@gmail.com', 'hi', 2),
(7, 'zaid shaikh', 'zaidshaikh505@gmail.com', 'hi', 2),
(8, 'zaid shaikh', 'zaidshaikh505@gmail.com', 'hiiii', 0),
(9, 'zaid shaikh', 'zaidshaikh505@gmail.com', 'hi', 0),
(10, 'zaid shaikh', 'zaidshaikh505@gmail.com', 'hhhhhhhhhhhhhhhhhhhhhhhhhhh', 0),
(11, 'zaid shaikh', 'zaidshaikh505@gmail.com', 'hi,dear sir please solve my problem', 0),
(12, 'zaid shaikh', 'zaidshaikh505@gmail.com', 'aaaaaaaaaaaaaaaa', 0),
(13, 'zaid shaikh', 'zaidshaikh505@gmail.com', 'hhhhhhhhhhhhhhhhhhhh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer_address`
--

CREATE TABLE `customer_address` (
  `customer_address_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `streetaddress` varchar(30) NOT NULL,
  `streetaddress1` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `zipcode` int(6) NOT NULL,
  `country` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_address`
--

INSERT INTO `customer_address` (`customer_address_id`, `customer_id`, `streetaddress`, `streetaddress1`, `city`, `state`, `zipcode`, `country`) VALUES
(1, 2, 'SR NO 11 PARNAKUTI PAYTHA', 'BAZME RAHAT YERWADA', 'PUNE', 'MAHARASTRA', 411006, 'India'),
(2, 2, 'SR NO 11 PARNAKUTI PAYTHA', 'BAZME RAHAT YERWADA', 'PUNE', 'MAHARASTRA', 411006, 'India'),
(3, 3, 'peerjade niwas', 'udhyam nagar', 'PUNE', 'MAHARASTRA', 411018, 'India'),
(4, 2, 'SR NO 11 PARNAKUTI PAYTHA', 'BAZME RAHAT YERWADA', 'PUNE', 'MAHARASTRA', 411006, 'India'),
(5, 2, 'SR NO 11 PARNAKUTI PAYTHA', 'BAZME RAHAT YERWADA', 'PUNE', 'MAHARASTRA', 411006, 'India'),
(6, 2, 'SR NO 11 PARNAKUTI PAYTHA', 'BAZME RAHAT YERWADA', 'PUNE', 'MAHARASTRA', 411006, 'India'),
(7, 2, 'SR NO 11 PARNAKUTI PAYTHA', 'BAZME RAHAT YERWADA', 'PUNE', 'MAHARASTRA', 411006, 'India'),
(8, 2, 'SR NO 11 PARNAKUTI PAYTHA', 'BAZME RAHAT YERWADA', 'PUNE', 'MAHARASTRA', 411006, 'India'),
(9, 2, 'SR NO 11 PARNAKUTI PAYTHA', 'BAZME RAHAT YERWADA', 'PUNE', 'MAHARASTRA', 411006, 'India'),
(10, 2, 'SR NO 11 PARNAKUTI PAYTHA', 'BAZME RAHAT YERWADA', 'PUNE', 'MAHARASTRA', 411006, 'India'),
(11, 3, 'peerjade niwas', 'udhyam nagar', 'PUNE', 'MAHARASTRA', 411018, 'India'),
(12, 2, 'SR NO 11 PARNAKUTI PAYTHA', 'BAZME RAHAT YERWADA', 'PUNE', 'MAHARASTRA', 411006, 'India'),
(13, 2, 'SR NO 11 DARBAR BAKERY', 'BAZME', 'PUNE', 'MAHARAHSTRA', 411001, 'India'),
(14, 2, 'm g road', 'camp', 'pune', 'MAHARASTRA', 411006, 'India'),
(15, 2, 'SR NO 11 DARBAR BAKERY', 'camp', 'PUNE', 'MAHARAHSTRA', 411001, 'India'),
(16, 2, 'peerjade niwas', 'udhyam nagar', 'PUNE', 'MAHARASTRA', 411018, 'India'),
(17, 2, 'peerjade niwas', 'udhyam nagar', 'PUNE', 'MAHARASTRA', 411018, 'India'),
(18, 2, 'peerjade niwas', 'udhyam nagar', 'PUNE', 'MAHARASTRA', 411018, 'India'),
(19, 2, 'peerjade niwas', 'udhyam nagar', 'PUNE', 'MAHARASTRA', 411018, 'India'),
(20, 2, 'peerjade niwas', 'udhyam nagar', 'PUNE', 'MAHARASTRA', 411018, 'India'),
(21, 2, 'peerjade niwas', 'udhyam nagar', 'PUNE', 'MAHARASTRA', 411018, 'India'),
(22, 2, 'peerjade niwas', 'udhyam nagar', 'PUNE', 'MAHARASTRA', 411018, 'India'),
(23, 2, 'peerjade niwas', 'udhyam nagar', 'PUNE', 'MAHARASTRA', 411018, 'India'),
(24, 2, 'peerjade niwas', 'udhyam nagar', 'PUNE', 'MAHARASTRA', 411018, 'India'),
(25, 2, 'peerjade niwas', 'udhyam nagar', 'PUNE', 'MAHARASTRA', 411018, 'India'),
(26, 2, 'peerjade niwas', 'udhyam nagar', 'PUNE', 'MAHARASTRA', 411018, 'India'),
(27, 2, 'peerjade niwas', 'udhyam nagar', 'PUNE', 'MAHARASTRA', 411018, 'India'),
(28, 2, 'peerjade niwas', 'udhyam nagar', 'PUNE', 'MAHARASTRA', 411018, 'India'),
(29, 2, 'SR NO 11 DARBAR BAKERY', 'camp', 'PUNE', 'MAHARAHSTRA', 411001, 'India'),
(30, 2, 'SR NO 11 DARBAR BAKERY', 'BAZME', 'PUNE', 'MAHARAHSTRA', 411001, 'India'),
(31, 2, 'peerjade niwas', 'udhyam nagar', 'PUNE', 'MAHARASTRA', 411018, 'India'),
(32, 2, 'SR NO 11 PARNAKUTI PAYTHA', 'BAZME RAHAT YERWADA', 'PUNE', 'MAHARASTRA', 411006, 'India'),
(33, 2, 'SR NO 11 PARNAKUTI PAYTHA', 'Yerwada', 'PUNE', 'MAHARASTRA', 411006, 'India'),
(34, 7, 'manap bhavan fc road shivajina', 'manapa bhavan ferguson colony ', 'pune', 'MAHARAHSTRA', 412114, 'India');

-- --------------------------------------------------------

--
-- Table structure for table `customer_signup`
--

CREATE TABLE `customer_signup` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `customer_email` varchar(30) NOT NULL,
  `customer_mobile` varchar(10) NOT NULL,
  `customer_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_signup`
--

INSERT INTO `customer_signup` (`customer_id`, `customer_name`, `customer_email`, `customer_mobile`, `customer_password`) VALUES
(1, 'Pawan Chintala', 'pawanch08@gmail.com', '7875351454', '7875351454'),
(2, 'zaid shaikh', 'zaidshaikh505@gmail.com', '8412095827', 'zaidshaikh'),
(3, 'shehzad', 'swiftkiller1212@gmail.com', '7777777777', '123456'),
(4, 'zaid shaikh', 'skzaid8412@gmail.com', '8237582564', '982b8be9db3040c31f79c0f8720a34'),
(5, 'umer', 'umer@gmail.com', '9874563210', 'dW1lcjEyMw=='),
(6, 'khurram', 'iamkhurram12@gmail.com', '9579584582', 'a2h1cnJhbQ=='),
(7, 'zammya khan', 'zammyakhan599@gmail.com', '9527544442', 'MDAwMDAwMA==');

-- --------------------------------------------------------

--
-- Table structure for table `employee_signup`
--

CREATE TABLE `employee_signup` (
  `employee_id` int(11) NOT NULL,
  `employee_type` varchar(30) NOT NULL,
  `employee_name` varchar(30) NOT NULL,
  `employee_status` varchar(11) NOT NULL,
  `employee_mobile` varchar(10) NOT NULL,
  `employee_email` varchar(30) NOT NULL,
  `employee_password` varchar(30) NOT NULL,
  `employee_street` varchar(30) NOT NULL,
  `employee_city` varchar(30) NOT NULL,
  `employee_state` varchar(30) NOT NULL,
  `employee_pincode` int(11) NOT NULL,
  `employee_country` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_signup`
--

INSERT INTO `employee_signup` (`employee_id`, `employee_type`, `employee_name`, `employee_status`, `employee_mobile`, `employee_email`, `employee_password`, `employee_street`, `employee_city`, `employee_state`, `employee_pincode`, `employee_country`) VALUES
(8, 'Employee ', 'Muqarril Ansari', 'idle', '8605778747', 'muqarril@gmail.com', '123456', 'm g road', 'pune', 'MAHARASTRA', 411006, 'India'),
(9, 'Admin', 'zaid shaikh', 'working', '8412095827', 'zaidshaikh505@gmail.com', 'zaid', 'SR NO 11 PARNAKUTI PAYTHA, BAZ', 'PUNE', 'MAHARASTRA', 411006, 'India'),
(13, 'Employee', 'zaid', 'idle', '9921514770', 'zaid@gmail.com', 'zaid123', 'SR NO 11 DARBAR BAKERY', 'PUNE', 'MAHARAHSTRA', 411001, 'India'),
(14, 'Employee', 'zaid shaikh', 'idle', '9921514770', 'zaid1@gmail.com', '123456', 'SR NO 11 DARBAR BAKERY', 'PUNE', 'MAHARAHSTRA', 411001, 'India'),
(15, 'Employee', 'usama', 'idle', '9130518340', 'usama@gmail.com', 'usama', 'yerwada', 'pune', 'bihar', 156425, 'India');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `package_id` int(11) NOT NULL,
  `package_name` varchar(30) NOT NULL,
  `package_type` varchar(30) NOT NULL,
  `no_of_services` int(11) NOT NULL,
  `package_price` int(11) NOT NULL,
  `No_Days` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`package_id`, `package_name`, `package_type`, `no_of_services`, `package_price`, `No_Days`) VALUES
(1, 'Basic', 'Monthly', 8, 4000, 30),
(2, 'Premium', 'Quaterly', 24, 12000, 90),
(3, 'Gold', 'Half-Yearly', 48, 24000, 180),
(4, 'PLATINIUM', 'Yearly', 96, 48000, 365);

-- --------------------------------------------------------

--
-- Table structure for table `package_details`
--

CREATE TABLE `package_details` (
  `package_detail_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `purchase_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_details`
--

INSERT INTO `package_details` (`package_detail_id`, `package_id`, `customer_id`, `purchase_date`) VALUES
(5, 2, 2, '2018-09-10 15:09:47'),
(6, 1, 2, '2018-09-10 15:55:02'),
(7, 1, 3, '2018-09-11 14:16:40'),
(8, 2, 7, '2018-09-14 16:10:14');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `package_detail_id` (`package_detail_id`),
  ADD KEY `customer_address_id` (`customer_address_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `customer_address`
--
ALTER TABLE `customer_address`
  ADD PRIMARY KEY (`customer_address_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `customer_id_2` (`customer_id`);

--
-- Indexes for table `customer_signup`
--
ALTER TABLE `customer_signup`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `employee_signup`
--
ALTER TABLE `employee_signup`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `package_details`
--
ALTER TABLE `package_details`
  ADD PRIMARY KEY (`package_detail_id`),
  ADD KEY `package_id` (`package_id`,`customer_id`),
  ADD KEY `package_id_2` (`package_id`,`customer_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `package_id` (`package_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `customer_address`
--
ALTER TABLE `customer_address`
  MODIFY `customer_address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `customer_signup`
--
ALTER TABLE `customer_signup`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employee_signup`
--
ALTER TABLE `employee_signup`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `package_details`
--
ALTER TABLE `package_details`
  MODIFY `package_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`customer_address_id`) REFERENCES `customer_address` (`customer_address_id`),
  ADD CONSTRAINT `appointment_ibfk_3` FOREIGN KEY (`package_detail_id`) REFERENCES `package_details` (`package_detail_id`);

--
-- Constraints for table `customer_address`
--
ALTER TABLE `customer_address`
  ADD CONSTRAINT `customer_address_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer_signup` (`customer_id`);

--
-- Constraints for table `package_details`
--
ALTER TABLE `package_details`
  ADD CONSTRAINT `package_details_ibfk_1` FOREIGN KEY (`package_id`) REFERENCES `package` (`package_id`),
  ADD CONSTRAINT `package_details_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer_signup` (`customer_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer_signup` (`customer_id`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`package_id`) REFERENCES `package` (`package_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

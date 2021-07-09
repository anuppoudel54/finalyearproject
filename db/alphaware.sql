-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2021 at 04:13 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alphaware`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `email`, `message`) VALUES
(1, '', ''),
(2, 'acdacsaca@gmail.com', 'acacacacacaca'),
(3, '', ''),
(4, '', ''),
(5, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerid` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `mi` varchar(1) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `zipcode` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerid`, `firstname`, `mi`, `lastname`, `address`, `country`, `zipcode`, `mobile`, `telephone`, `email`, `password`) VALUES
(5, 'Anup', '2', 'Poudel', 'devdaha khaireni', 'Province 5 ( ?????? ?? ? )', '3920', '9846526892', '', 's@gmail.com', 'nepal'),
(6, 'my', 'p', 'Poudel', 'devdaha khaireni', 'Province 5 ( ?????? ?? ? )', '3920', '9846526892', '', 'g@gmail.com', 'nepal'),
(7, 'youi', 'p', 'Pio', 'devdaha khaireni', 'Province 5', '3920', '', '', 'sb@gmail.com', 'nepal'),
(8, 'feri', 'l', 'ehww', 'devdaha khaireni', 'Province 5', '3920', '', '', 'f@gmail.com', 'nepal'),
(9, 'herko', 'm', 'Poudel', 'devdaha khaireni', 'Province 5 ( ?????? ?? ? )', '3920', '9846526892', '', 'lol@gmail.com', 'nepal'),
(10, 'neal', 'n', 'panj', 'sdaflkasjd', '5', '3920', '9846526892', '', 'se@gmail.com', 'nepal'),
(11, 'jio', 'n', 'mun', 'hel', '4', '3290', '9846526892', '', 'go@gmail.com', 'nepal');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `uiid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `prname` varchar(255) NOT NULL,
  `tmo` int(11) NOT NULL,
  `currate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`uiid`, `tid`, `prname`, `tmo`, `currate`) VALUES
(6, 5, 'Dripcake-maken-met ', 2500, 5),
(6, 7, 'Starlight-Crescent-Necklace', 7520, 3),
(9, 9, 'Dripcake-maken-met ', 2500, 5),
(5, 30, 'bouquet', 1200, 5),
(6, 31, 'wristwatch-ww-24554', 5625, 4),
(11, 34, 'teddy-bear', 4500, 5),
(11, 40, 'Dripcake-maken-met ', 2500, 2),
(6, 49, 'bouquet', 1200, 5),
(11, 63, 'bouquet', 1200, 4),
(9, 153, 'Dripcake-maken-met ', 2500, 5),
(9, 252, 'bouquet', 1200, 3),
(6, 376, 'bouquet', 1200, 5),
(10, 466, 'teddy-bear', 4500, 5),
(9, 661, 'Table-Watch-Metalic-TM-25622', 2534, 3),
(9, 751, 'picture-frame-715866_960_720', 1200, 2),
(9, 757, 'wristwatch-ww-24554', 5625, 3),
(5, 890, 'Table-Watch-Metalic-TM-25622', 2534, 3),
(11, 891, 'Table-Watch-Metalic-TM-25622', 2534, 2),
(9, 903, 'teddy-bear', 4500, 5),
(11, 3873, 'wristwatch-ww-24554', 5625, 4),
(10, 30790, 'Table-Watch-Metalic-TM-25622', 2534, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_size` varchar(50) NOT NULL,
  `product_image` varchar(500) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_size`, `product_image`, `brand`, `category`) VALUES
(33, 'Freshwater-Pearls ', '5455', 'M', '97140385667284458Freshwater Pearls and Lapis Enhanced Necklace.jpg', 'FPearls ', 'Ornaments'),
(261, 'teddy-bear', '4500', 'L', '43268320770834013teddy-bear-3599680_960_720.jpg', 'Teddy shows', 'feature'),
(388, 'Frame-Glitter', '560', 'M', '95835615979182682frame-3199396_960_720.png', 'Freshwater Pearls ', 'PhotoFrame'),
(403, 'pocket-watch-560937_960_720', '2354', 'M', 'pp_6079bd842cc668.38813910pocket-watch-560937_960_720.jpg', 'Timber', 'Watchs'),
(1755, 'Parallel-4-Frame', '2000', 'S', '7390049250120813photo-2204894_960_720.png', 'Blueparts', 'PhotoFrame'),
(8646, '3IN1-Frame-FR-0245', '1200', 'L', '84944836420276847frame-1714588_960_720.png', 'f', 'PhotoFrame'),
(9073, 'picture-frame-715866_960_720', '1200', 'L', '73209153499729787picture-frame-715866_960_720.jpg', 'WallFMERS', 'PhotoFrame'),
(29617, 'jewelry-bracelets ', '3210', 'M', '48944949115002516jewelry bracelets gold ideas.jpg', 'jewelry gold ', 'Ornaments'),
(41368, 'analog-watch-1869928_960_720', '2534', 'M', 'pp_6079bd3dba98e6.67967566analog-watch-1869928_960_720.jpg', 'Classic', 'Watchs'),
(73224, 'wristwatch-ww-24554', '5625', 'M', 'pp_6079bdcde19b04.80871991time-3091031_1920.jpg', 'Skyblue', 'Watchs'),
(86989, 'picture-frames', '3251', 'L', '44681275678897332picture-frames-1149414_960_720.jpg', 'Picturedash', 'PhotoFrame'),
(88701, 'Dripcake-maken-met ', '2500', 'L', '59127745579418034Dripcake maken met Callebaut Chocolade - Bouwhuis Blog.png', 'Cake Nepal', 'feature'),
(252001, 'Starlight-Crescent-Necklace', '7520', 'L', '33582257871093564Starlight Crescent Necklace.jpg', 'Crescent Necklace', 'Ornaments'),
(286577, 'Table-Watch-Metalic-TM-25622', '2534', 'L', 'pp_6079bda9836f51.75406060time-2980690_960_720.jpg', 'Wood watch', 'Watchs'),
(587138, 'bouquet', '1200', 'M', '78734439707327857bouquet-1851462_960_720.jpg', 'bouquet-nepal', 'feature'),
(3621306, 'Single-Curl-Wave-Wire-Ring ', '2410', 'M', '61529386980537332Single Curl Wave Wire Ring Instructions.jpg', 'Single Curl ', 'Ornaments'),
(9837511, 'Analog-watch-mn-54212', '1880', 'M', 'pp_6079bdf11aa659.19160237wristwatch-407096_960_720.jpg', 'Gurkha', 'Watchs');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `uid`, `pid`, `pname`, `rating`) VALUES
(14, 6, 587138, 'bouquet', '5'),
(15, 6, 88701, 'Dripcake-maken-met', '5'),
(16, 6, 261, 'teddy-bear', '2'),
(17, 5, 587138, 'bouquet', '5'),
(18, 7, 587138, 'bouquet', '5'),
(19, 8, 587138, 'bouquet', '5'),
(20, 8, 286577, 'Table-Watch-Metalic-TM-25622', '3'),
(22, 8, 73224, 'wristwatch-ww-24554', '4'),
(27, 8, 9073, 'picture-frame-715866_960_720', '3'),
(28, 5, 286577, 'Table-Watch-Metalic-TM-25622', '3'),
(29, 9, 88701, 'Dripcake-maken-met', '5'),
(30, 9, 587138, 'bouquet', '3'),
(31, 9, 261, 'teddy-bear', '5'),
(32, 9, 286577, 'Table-Watch-Metalic-TM-25622', '3'),
(33, 9, 73224, 'wristwatch-ww-24554', '3'),
(34, 9, 9073, 'picture-frame-715866_960_720', '2'),
(35, 10, 261, 'teddy-bear', '5'),
(36, 6, 73224, 'wristwatch-ww-24554', '4'),
(37, 6, 252001, 'Starlight-Crescent-Necklace', '3'),
(38, 11, 587138, 'bouquet', '4'),
(39, 11, 88701, 'Dripcake-maken-met', '2'),
(40, 11, 261, 'teddy-bear', '5'),
(41, 11, 73224, 'wristwatch-ww-24554', '4'),
(42, 11, 286577, 'Table-Watch-Metalic-TM-25622', '2');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stock_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stock_id`, `product_id`, `qty`) VALUES
(76, 587138, 20),
(75, 261, 41),
(74, 88701, 45),
(73, 252001, 10),
(72, 3621306, 20),
(71, 29617, 21),
(70, 33, 9),
(69, 1755, 14),
(68, 86989, 14),
(67, 388, 23),
(66, 9073, 11),
(65, 8646, 15),
(64, 9837511, 12),
(63, 73224, 9),
(62, 286577, 3),
(61, 403, 9),
(60, 41368, 10);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `order_stat` varchar(100) NOT NULL,
  `order_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `customerid`, `amount`, `order_stat`, `order_date`) VALUES
(0, 8, 1200, 'Confirmed', 'Apr 17, 2021'),
(1, 9, 1200, 'Confirmed', 'Apr 17, 2021'),
(5, 6, 2500, 'Confirmed', 'Apr 17, 2021'),
(7, 6, 7520, 'Confirmed', 'Apr 18, 2021'),
(9, 9, 2500, 'Confirmed', 'Apr 17, 2021'),
(28, 7, 1200, 'Confirmed', 'Apr 17, 2021'),
(30, 5, 1200, 'Confirmed', 'Apr 17, 2021'),
(31, 6, 5625, 'Confirmed', 'Apr 18, 2021'),
(34, 11, 4500, 'Confirmed', 'Apr 18, 2021'),
(40, 11, 2500, 'Confirmed', 'Apr 18, 2021'),
(49, 6, 1200, 'Confirmed', 'Apr 18, 2021'),
(63, 11, 1200, 'Confirmed', 'Apr 18, 2021'),
(68, 8, 2534, 'Confirmed', 'Apr 17, 2021'),
(70, 8, 5625, 'Confirmed', 'Apr 17, 2021'),
(72, 11, 2500, 'ON HOLD', 'Apr 18, 2021'),
(78, 8, 1200, 'Confirmed', 'Apr 17, 2021'),
(87, 11, 2534, 'Cancelled', 'Apr 18, 2021'),
(97, 5, 5625, 'Cancelled', 'Apr 17, 2021'),
(112, 9, 1200, 'Cancelled', 'Apr 17, 2021'),
(153, 9, 2500, 'Confirmed', 'Apr 17, 2021'),
(176, 9, 0, 'Cancelled', 'Apr 17, 2021'),
(252, 9, 1200, 'Confirmed', 'Apr 17, 2021'),
(376, 6, 1200, 'Confirmed', 'Apr 17, 2021'),
(466, 10, 4500, 'Confirmed', 'Apr 18, 2021'),
(491, 9, 6000, 'Cancelled', 'Apr 17, 2021'),
(661, 9, 5068, 'Confirmed', 'Apr 17, 2021'),
(751, 9, 1200, 'Confirmed', 'Apr 17, 2021'),
(757, 9, 5625, 'Confirmed', 'Apr 17, 2021'),
(890, 5, 8159, 'Confirmed', 'Apr 17, 2021'),
(891, 11, 10136, 'Confirmed', 'Apr 18, 2021'),
(903, 9, 4500, 'Confirmed', 'Apr 17, 2021'),
(3873, 11, 5625, 'Confirmed', 'Apr 18, 2021'),
(30790, 10, 5068, 'Confirmed', 'Apr 18, 2021');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_detail`
--

CREATE TABLE `transaction_detail` (
  `transacton_detail_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_qty` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_detail`
--

INSERT INTO `transaction_detail` (`transacton_detail_id`, `product_id`, `order_qty`, `transaction_id`) VALUES
(25, 88701, 1, 9),
(23, 286577, 1, 890),
(21, 9073, 1, 78),
(20, 73224, 1, 70),
(19, 286577, 1, 68),
(18, 587138, 1, 0),
(17, 587138, 1, 28),
(24, 73224, 1, 890),
(15, 88701, 1, 5),
(14, 587138, 1, 376),
(13, 587138, 1, 30),
(26, 587138, 1, 112),
(27, 587138, 5, 491),
(28, 587138, 1, 252),
(29, 88701, 1, 153),
(30, 261, 1, 903),
(31, 9073, 1, 1),
(32, 73224, 1, 757),
(33, 286577, 2, 661),
(34, 9073, 1, 751),
(35, 73224, 1, 97),
(36, 261, 1, 466),
(37, 286577, 2, 30790),
(38, 587138, 1, 49),
(39, 73224, 1, 31),
(40, 252001, 1, 7),
(41, 587138, 1, 63),
(42, 88701, 1, 40),
(43, 261, 1, 34),
(44, 73224, 1, 3873),
(45, 286577, 1, 87),
(46, 286577, 4, 891),
(47, 88701, 1, 72);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `transaction_detail`
--
ALTER TABLE `transaction_detail`
  ADD PRIMARY KEY (`transacton_detail_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `transaction_detail`
--
ALTER TABLE `transaction_detail`
  MODIFY `transacton_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

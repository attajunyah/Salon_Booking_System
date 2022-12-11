-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2019 at 05:24 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salonspa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `adminid` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminid`, `password`) VALUES
(1, 'ashwinrameshp@gmail.com', 'Pa@123'),
(2, 'divij@gmail.com', 'divij123');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `package` varchar(25) NOT NULL,
  `dotravel` date NOT NULL,
  `mode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `email`, `package`, `dotravel`, `mode`) VALUES
(3, 'a1@a1.com', 'NIRVANA', '2019-11-23', 'NEARBY CENTRE'),
(4, 'a1@a1.com', 'STYLE LOCKS', '2019-11-20', 'NEARBY CENTRE'),
(5, 'divij.nagendra@gmail.com', 'BASIC TOUCH', '2019-11-15', 'NEARBY CENTRE'),
(10, 'ashwinrameshp@gmail.com', 'BASIC TOUCH', '2019-11-29', 'NEARBY CENTRE');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `comments` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`name`, `email`, `mobile`, `comments`) VALUES
('Divij N', 'silver97eagle@gmail.com', '+917411115143', 'very nyc page ^_^'),
('Divij N', 'silver97eagle@gmail.com', '+917411115143', 'asdasfasf'),
('Rahul', 'rahul786@yahoomail.com', '784156984', 'plss add rating bar to your page'),
('Divya', 'divu30997@gmail.com', '1237896540', 'Had a great time booking'),
('Jonny', 'Johnny@gmail.com', '8888999922', 'Awesome Service. ');

-- --------------------------------------------------------

--
-- Table structure for table `fares`
--

CREATE TABLE `fares` (
  `package` varchar(50) NOT NULL,
  `cost` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fares`
--

INSERT INTO `fares` (`package`, `cost`) VALUES
('BASIC TOUCH', 399),
('STYLE LOCKS', 699),
('COLOR FLAUNT', 1599),
('NIRVANA', 3999);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `phcode` varchar(2) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `addr1` varchar(50) NOT NULL,
  `addr2` varchar(50) NOT NULL,
  `city` varchar(15) NOT NULL,
  `state` varchar(15) NOT NULL,
  `pincode` int(6) NOT NULL,
  `type` varchar(8) NOT NULL,
  `pass` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`fname`, `lname`, `phcode`, `mobile`, `dob`, `email`, `addr1`, `addr2`, `city`, `state`, `pincode`, `type`, `pass`) VALUES
('Divij', 'N', '91', '7411115143', '2019-10-02', 'a1@a1.com', 'm,xcvm cxmvbdxjfv mnc', 'mjcvb,mcvm,bnm,cvbm', 'Bangalore', 'Karnataka', 560079, 'male', 'Abc@123'),
('abc', 'def', '91', '47965', '2018-11-24', 'abcd@gmail.com', '', '', '', '', 0, 'male', 'Abc123'),
('Adarsh', 'Mohana', '91', '8800888008', '1998-05-13', 'adarsh@gmail.com', '', '', '', '', 0, 'male', 'Adarsh123'),
('xyg', 'mj', '91', '867596', '2018-10-31', 'asd@gmail.com', '', '', '', '', 0, 'male', 'Asd123'),
('Ashwin ', 'Ramesh P', '91', '9482026584', '2019-11-04', 'ashwinrameshp@gmail.com', '17', 'bang', 'Bang', 'Karnataka', 560057, 'male', 'Pa@123'),
('Bindu', 'M V', '91', '9874598745', '1998-02-27', 'bindu@gmail.com', '', '', '', '', 0, 'female', 'Bindu123'),
('chaitanya ', 'anand', '91', '123456789', '2018-11-13', 'cha@gmail.com', '', '', '', '', 0, 'male', 'Cha123'),
('Chaitanya', 'Anand', '91', '5512555125', '2018-11-02', 'chaitanya@gmail.com', '', '', '', '', 0, 'male', 'Chaitanya123'),
('DAVE', 'J', '91', '9485222222', '2017-11-14', 'dave@gmail.com', '17a', 'peenya', 'bangalore', 'karnataka', 560057, 'male', 'Password@123'),
('Divij', 'N', '91', '7411115143', '1997-11-10', 'divij.nagendra@gmail.com', 'No.29, Sri Kalki Jeevan, 2nd Stage, SVGNSS Layout', ' 3rd Stage, 4th Block, Basaveshwaranagar', 'Bengaluru', 'Karnataka', 560079, 'male', 'Divij@123'),
('Divya', 'N', '91', '7411115143', '2018-11-07', 'divya@gmail.com', '', '', '', '', 0, 'female', 'Divya123'),
('Harish', 'Babu', '91', '6360847086', '1998-12-12', 'harishhoit@gmail.com', '', '', '', '', 0, 'male', 'Harish123'),
('Kautilya', 'K Bhat', '91', '1234512345', '1997-12-08', 'kautilya.gtr@gmail.com', '', '', '', '', 0, 'male', 'Kautilya123'),
('Keerthana', 'G', '91', '8686886868', '1998-04-04', 'keegowda@gmail.com', '', '', '', '', 0, 'female', 'Sunku123'),
('Sai Mangala', 'M V', '91', 'secret', '1999-04-09', 'saimangal@gmail.com', '', '', '', '', 0, 'female', 'Sai123'),
('Divij', 'N', '91', '7411115143', '1997-11-10', 'silver97eagle@gmail.com', '', '', '', '', 0, 'male', 'Divij123');

--
-- Triggers `login`
--
DELIMITER $$
CREATE TRIGGER `deletetrigger` AFTER DELETE ON `login` FOR EACH ROW insert into loginlog values(old.email,old.fname,"DELETED :(",now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `inserttrigger` AFTER INSERT ON `login` FOR EACH ROW insert into loginlog values(new.email,new.fname,"REGISTERED :)",now())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `loginlog`
--

CREATE TABLE `loginlog` (
  `Email` varchar(34) NOT NULL,
  `fname` varchar(43) NOT NULL,
  `action` varchar(34) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginlog`
--

INSERT INTO `loginlog` (`Email`, `fname`, `action`, `time`) VALUES
('silver97eagle@gmail.com', 'Divij', 'REGISTERED :)', '2018-11-24 14:03:41'),
('a1@a1.com', 'Divij', 'REGISTERED :)', '2019-10-07 07:27:31'),
('divij.nagendra@gmail.com', 'Divij', 'REGISTERED :)', '2019-11-10 19:27:49'),
('ashwinrameshp@gmail.com', 'Ashwin ', 'REGISTERED :)', '2019-11-13 15:27:03'),
('dave@gmail.com', 'DAVE', 'REGISTERED :)', '2019-11-19 15:14:50');

-- --------------------------------------------------------

--
-- Table structure for table `packagedetails`
--

CREATE TABLE `packagedetails` (
  `package` varchar(25) NOT NULL,
  `details` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packagedetails`
--

INSERT INTO `packagedetails` (`package`, `details`) VALUES
('BASIC TOUCH', 'Haircut, Shave.'),
('STYLE LOCKS', 'Hair Style, Keratin, Roots Color Retouch.'),
('COLOR FLAUNT', 'Rebond, Permanent Color, Keratin, Haircut.'),
('NIRVANA', 'Brazilian Blowout, L\'Oreal Extenso Rebond, Head and Face Massage, Haircut.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package` (`package`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `fares`
--
ALTER TABLE `fares`
  ADD KEY `package` (`package`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `email_2` (`email`);

--
-- Indexes for table `packagedetails`
--
ALTER TABLE `packagedetails`
  ADD KEY `package` (`package`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`package`) REFERENCES `fares` (`package`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`email`) REFERENCES `login` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

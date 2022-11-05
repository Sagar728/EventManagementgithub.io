-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2022 at 12:49 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `authentication`
--

-- --------------------------------------------------------

--
-- Table structure for table `cancel_ticket`
--

CREATE TABLE `cancel_ticket` (
  `PNR_No` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cancel_ticket`
--

INSERT INTO `cancel_ticket` (`PNR_No`) VALUES
(1230450736),
(1230450737);

-- --------------------------------------------------------

--
-- Table structure for table `pnr`
--

CREATE TABLE `pnr` (
  `Seat_no` int(11) NOT NULL,
  `Pin` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pnr`
--

INSERT INTO `pnr` (`Seat_no`, `Pin`) VALUES
(157, 4728),
(158, 4587);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `From_station` varchar(20) NOT NULL,
  `To_station` varchar(20) NOT NULL,
  `No_of_passengers` int(11) NOT NULL,
  `Class` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Bank_name` varchar(20) DEFAULT NULL,
  `Cardholder_Name` varchar(20) DEFAULT NULL,
  `Debitcard_no` bigint(20) DEFAULT NULL,
  `Pin` int(11) DEFAULT NULL,
  `PNR_No` int(11) NOT NULL,
  `Fair` int(10) NOT NULL,
  `Train_no` int(10) DEFAULT NULL,
  `Total_fare` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `ticket`
--
DELIMITER $$
CREATE TRIGGER `trig1` BEFORE INSERT ON `ticket` FOR EACH ROW SET NEW.Total_fare = NEW.No_of_passengers*NEW.fair
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `Train_no` int(11) NOT NULL,
  `Train_name` varchar(50) DEFAULT NULL,
  `Arrival_time` time NOT NULL,
  `Departure_time` time NOT NULL,
  `Schedule` varchar(50) DEFAULT NULL,
  `Source` varchar(50) NOT NULL,
  `Destination` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`Train_no`, `Train_name`, `Arrival_time`, `Departure_time`, `Schedule`, `Source`, `Destination`) VALUES
(10012, 'Deccan Express', '17:00:00', '20:15:00', 'TUES,WED', 'Mumbai', 'Pune'),
(10067, 'Godavari Express', '16:15:00', '03:15:00', 'WED,THURS', 'Hyderabad Deccan', 'Visakhapatnam'),
(10109, 'Janshatabdi Express', '18:05:00', '02:00:00', 'WED,FRI,SUN', 'Coimbatore', 'Mayiladuturai'),
(10221, 'Chetak Express', '18:15:00', '19:30:00', 'TUES', 'Udaipur', 'Delhi Sarai Rohilla'),
(10228, 'Golden Temple Mail', '20:00:00', '08:40:00', 'MON,TUES,WED', 'Mumbai Central', 'Amritsar'),
(10257, 'Kaziranga Express', '03:15:00', '14:35:00', 'MON,THURS', 'Guwahati', 'Bangalore Cantonment'),
(10297, 'Rajdhani Express', '20:30:00', '07:15:00', 'SAT', 'BORIVALI', 'DELHI'),
(10312, 'Gomti Express', '20:05:00', '05:35:00', 'MON,TUES,WED,FRI', 'Lucknow NR', 'New Delhi'),
(10341, 'Avantika Express', '18:15:00', '07:15:00', 'MON,SAT,SUN', 'Indore Junction', 'Mumbai Central'),
(10650, 'Brindavan Express', '00:30:00', '21:40:00', 'WED', 'Bangalore', 'Chennai Central'),
(10654, 'Darjeeling Mail', '20:30:00', '22:00:00', 'MON,FRI', 'New Jalpaiguri', 'Sealdah'),
(10742, 'Ajanta Express', '19:45:05', '09:30:00', 'TUES,WED,FRI,SUN', 'Manmad Jn', 'Secunderabad Jn'),
(10883, 'Charminar Express', '21:30:00', '04:15:00', 'FRI', 'Tambaram', 'Hyderabad'),
(10890, 'August Kranti Rajdhani Express', '12:45:00', '21:15:00', 'WED,FRI', 'Hazrat Nizamuddin', 'Mumbai Central'),
(10897, 'Chennai Mail', '09:15:00', '12:45:00', 'THURS,SUN', 'Chennai Central', 'Howrah Jn');

-- --------------------------------------------------------

--
-- Table structure for table `train_status`
--

CREATE TABLE `train_status` (
  `Train_no` int(9) NOT NULL,
  `Class` varchar(50) NOT NULL,
  `Availability_of_seat` int(11) NOT NULL,
  `AC1` int(11) NOT NULL,
  `AC2` int(11) NOT NULL,
  `AC3` int(11) NOT NULL,
  `SL` int(11) NOT NULL,
  `S1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `train_status`
--

INSERT INTO `train_status` (`Train_no`, `Class`, `Availability_of_seat`, `AC1`, `AC2`, `AC3`, `SL`, `S1`) VALUES
(10012, 'AC1 ,AC2, AC3, SL, S1 ', 58, 750, 500, 400, 250, 120),
(10067, 'AC1 ,AC2, AC3, SL, S1 ', 58, 850, 500, 400, 250, 60),
(10109, 'AC1 ,AC2, AC3, SL, S1 ', 77, 950, 500, 400, 250, 120),
(10221, 'AC1 ,AC2, AC3, SL, S1 ', 23, 1250, 500, 400, 250, 70),
(10228, ' AC1 ,AC2, AC3, SL, S1', 32, 750, 500, 400, 250, 20),
(10257, 'AC1 ,AC2, AC3, SL, S1', 156, 650, 500, 400, 250, 120),
(10297, 'AC1 ,AC2, AC3, SL, S1 ', 35, 1750, 500, 400, 250, 120),
(10312, ' ,AC1 ,AC2, AC3, SL, S1 ', 27, 850, 500, 400, 250, 120),
(10341, 'AC1 ,AC2, AC3, SL, S1', 56, 850, 500, 400, 250, 120),
(10650, ' AC1 ,AC2, AC3, SL, S1', 9, 1000, 500, 400, 250, 120),
(10654, 'AC1 ,AC2, AC3, SL, S1', 88, 1000, 500, 400, 250, 120),
(10742, 'AC1 ,AC2, AC3, SL, S1', 107, 1100, 500, 400, 250, 120),
(10883, 'AC1 ,AC2, AC3, SL, S1', 201, 750, 500, 400, 250, 120),
(10890, 'AC1 ,AC2, AC3, SL, S1 ', 12, 740, 500, 400, 250, 120),
(10897, 'AC1 ,AC2, AC3, SL, S1', 10, 750, 500, 400, 250, 120);

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `Registration_no` int(5) NOT NULL,
  `Username` varchar(25) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `First_name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `Aadhar_no` bigint(20) DEFAULT NULL,
  `Mobile_no` bigint(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Street_address` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`Registration_no`, `Username`, `Password`, `First_name`, `Last_name`, `Aadhar_no`, `Mobile_no`, `Email`, `Street_address`, `City`, `State`, `DOB`, `Gender`) VALUES
(1554, 'sagar', '4728', 'Sagar', 'Rathod', 456312364569, 7755954728, 'sagar.rathod@spit.ac.in', 'Andheri', 'mumbai', 'maharastra', '2022-04-27', 'male'),
(1555, 'Prateek', '1234', 'prateek', 'Redkar', 745858964521, 7755984125, 'prateek@gmail.com', 'Andhri West', 'Mumbai', 'Maharastra', '2003-04-27', 'Male'),
(1556, 'saf', '35', 'dfv', 'asfdv', 35, 653, 'bsf@gmail.com', 'dfv', 'sdfv', 'sf', '0001-11-11', 'sf'),
(1557, 'xyz', '4722', 'Sagar', 'Rathod', 414, 7788996655, 'sagar.rathod4728@spit.ac.in', 'mumbai', 'chalisgaonm', 'maharastra', '2022-11-01', 'male'),
(1559, 'g', '8888', 'Full', 'Name', 0, 48289, 'pawan@gmail.com', 'bh', 'mj', 'maharastra', '0000-00-00', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pnr`
--
ALTER TABLE `pnr`
  ADD PRIMARY KEY (`Seat_no`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`PNR_No`),
  ADD KEY `Train_no` (`Train_no`);

--
-- Indexes for table `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`Train_no`),
  ADD UNIQUE KEY `Train_name` (`Train_name`);

--
-- Indexes for table `train_status`
--
ALTER TABLE `train_status`
  ADD KEY `Train_no` (`Train_no`);

--
-- Indexes for table `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`Registration_no`),
  ADD UNIQUE KEY `Mobile_no` (`Mobile_no`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Aadhar_no` (`Aadhar_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pnr`
--
ALTER TABLE `pnr`
  MODIFY `Seat_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `PNR_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1230450738;

--
-- AUTO_INCREMENT for table `user1`
--
ALTER TABLE `user1`
  MODIFY `Registration_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1570;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`Train_no`) REFERENCES `train` (`Train_no`);

--
-- Constraints for table `train_status`
--
ALTER TABLE `train_status`
  ADD CONSTRAINT `train_status_ibfk_1` FOREIGN KEY (`Train_no`) REFERENCES `train` (`Train_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

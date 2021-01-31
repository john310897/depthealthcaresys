-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2020 at 10:01 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE `drugs` (
  `dt` varchar(30) NOT NULL,
  `drug_used` varchar(30) NOT NULL,
  `purpose` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `stock` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drugs`
--

INSERT INTO `drugs` (`dt`, `drug_used`, `purpose`, `description`, `stock`) VALUES
('ankle sprains', 'elastic bandages (such as an A', 'Treating a sprained ankle promotes recovery and prevents further discomfort. It’s important not to put weight on the injured area while you’re recovering from an ankle sprain.', 'An injury that occurs when the ankle rolls, twists or turns in an awkward way.', '28'),
('Blisters', 'hydrocolloid dressings', 'Some medications, such as hydrocolloid dressings, can help prevent further discomfort and encourage the healing process. Hydrocolloid dressings are available', 'A blister is a pocket of fluid between the upper layers of skin. The most common causes are friction, freezing, burning, infection, and chemical burns. Blisters are also a symptom of some diseases.', '18'),
('Hamstring_Tear_or_Pull', 'anti-inflammatory painkillers,', 'use an elastic bandage around the leg to keep down swelling.', 'A hamstring strain, sometimes called a pulled hamstring, happens when one or more of these muscles gets stretched too far and starts to tear', '17'),
('Muscle_Cramps', 'vitamin B complex supplements ', 'You can usually treat muscle cramps with self-care measures. Your doctor can show you stretching exercises that can help you reduce your chances of getting muscle cramps. Making sure you stay well-hyd', 'Overuse of a muscle, dehydration, muscle strain or simply holding a position for a prolonged period can cause a muscle cramp.', '18');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `usn` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `bg` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`usn`, `password`, `name`, `branch`, `dob`, `bg`) VALUES
('', '', '', '', '0000-00-00', ''),
('1CD18MCA50', '123456', 'abhimannu', 'MCA', '0121-02-12', 'A+'),
('1CD18MCA52', '1234', 'johnjohn', 'BCA', '2002-02-02', 'A+'),
('1CD18MCA60', '1234', 'john', 'MCA', '2019-04-17', 'B+'),
('4VZ19MCA59', '1234', 'chethan', 'MCA', '2002-02-02', 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `student1`
--

CREATE TABLE `student1` (
  `usn` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `bg` varchar(30) NOT NULL,
  `emr1` varchar(30) NOT NULL,
  `emr2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student1`
--

INSERT INTO `student1` (`usn`, `password`, `name`, `branch`, `dob`, `bg`, `emr1`, `emr2`) VALUES
('', '', '', '', '0000-00-00', '', '', ''),
('1CD18MCA50', '123', 'abhimannu', 'MCA', '1998-02-02', 'A+', '8618390387', '7084020150'),
('1CD18MCA87', '123', 'satish', 'MCA', '1997-02-02', 'A+', '8310569170', '8618390387');

-- --------------------------------------------------------

--
-- Table structure for table `student_drug`
--

CREATE TABLE `student_drug` (
  `name` varchar(30) NOT NULL,
  `usn` varchar(30) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `du` varchar(30) NOT NULL,
  `stock` varchar(30) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_drug`
--

INSERT INTO `student_drug` (`name`, `usn`, `branch`, `du`, `stock`, `status`) VALUES
('abh', '1CD18MCA50', 'mca', 'bandage', '1', 'delivered'),
('', '', '', 'sterile bandage or clean cloth', '0', 'delivered'),
('john', '1CD18MCA60', 'MCA', 'sterile bandage or clean cloth', '0', 'delivered'),
('john', '1CD18MCA60', 'MCA', 'elastic bandages (such as an A', '0', 'delivered'),
('john', '1CD18MCA60', 'MCA', 'anti-inflammatory painkillers,', '4', 'requested'),
('john', '1CD18MCA60', 'MCA', 'vitamin B complex supplements ', '1', 'requested'),
('abhimannu', '1CD18MCA50', 'MCA', 'anti-inflammatory painkillers,', '3', 'requested'),
('abhimannu', '1CD18MCA50', 'MCA', 'sterile bandage or clean cloth', '0', 'delivered'),
('abhimannu', '1CD18MCA50', 'MCA', 'vitamin B complex supplements ', '0', 'delivered'),
('john', '1CD18MCA60', 'MCA', 'hydrocolloid dressings', '0', 'delivered'),
('johnjohn', '1CD18MCA52', 'BCA', 'hydrocolloid dressings', '1', 'requested');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`usn`);

--
-- Indexes for table `student1`
--
ALTER TABLE `student1`
  ADD PRIMARY KEY (`usn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

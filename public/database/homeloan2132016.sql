-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2016 at 07:23 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homeloan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `createed_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `createed_on`) VALUES
(1, 'admin', 'cc03e747a6afbbcbf8be7668acfebee5', '2016-03-16 18:01:21');

-- --------------------------------------------------------

--
-- Table structure for table `loan_opportunity`
--

CREATE TABLE IF NOT EXISTS `loan_opportunity` (
  `id` int(11) NOT NULL,
  `projectName` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `ltv` int(11) NOT NULL,
  `apr` int(11) NOT NULL,
  `maturityDate` varchar(250) NOT NULL,
  `penalty` varchar(250) NOT NULL,
  `agent` varchar(250) NOT NULL,
  `exitTerm` varchar(250) NOT NULL,
  `purpose` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `loanAmount` int(11) NOT NULL,
  `term` varchar(250) NOT NULL,
  `grossApr` int(11) NOT NULL,
  `date` varchar(250) NOT NULL,
  `closingDate` varchar(250) NOT NULL,
  `agentUrl` varchar(250) NOT NULL,
  `security` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan_opportunity`
--

INSERT INTO `loan_opportunity` (`id`, `projectName`, `city`, `state`, `ltv`, `apr`, `maturityDate`, `penalty`, `agent`, `exitTerm`, `purpose`, `location`, `address`, `loanAmount`, `term`, `grossApr`, `date`, `closingDate`, `agentUrl`, `security`, `image`, `created_on`) VALUES
(1, 'Project Name', 'Mumbai', 'Maharashtra', 100, 100, '03/21/2016', 'penalty', 'agent name', 'exit terms', 'purpose', 'location', 'address', 1000, 'terms', 100, '03/30/2016', '03/31/2016', 'http://www.testsite.dev', 'security', 'bnbn4c58.jpg', '2016-03-21 17:23:22');

-- --------------------------------------------------------

--
-- Table structure for table `loan_opportunity_documents`
--

CREATE TABLE IF NOT EXISTS `loan_opportunity_documents` (
  `id` int(11) NOT NULL,
  `lo_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  `file` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan_opportunity_documents`
--

INSERT INTO `loan_opportunity_documents` (`id`, `lo_id`, `title`, `type`, `file`) VALUES
(1, 1, 'document1', 'type1', 'document1.txt'),
(2, 1, 'document2', 'type2', 'document2.txt');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `emailId` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `resetpasswordlink` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `emailId`, `password`, `resetpasswordlink`) VALUES
(1, 'test@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE IF NOT EXISTS `user_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile_number` varchar(100) NOT NULL,
  `username` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `zipcode` int(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `account_type` varchar(250) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `firstname`, `lastname`, `email`, `mobile_number`, `username`, `state`, `city`, `zipcode`, `address`, `account_type`, `created_on`) VALUES
(1, 1, 'firstname', 'lastname', 'test@gmail.com', '9999999999', 'testuser123', 'Maharashtra', 'Mumbai', 123456, 'test address', 'Corporate', '2016-03-12 05:53:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_opportunity`
--
ALTER TABLE `loan_opportunity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_opportunity_documents`
--
ALTER TABLE `loan_opportunity_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `loan_opportunity`
--
ALTER TABLE `loan_opportunity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `loan_opportunity_documents`
--
ALTER TABLE `loan_opportunity_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

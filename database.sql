-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2021 at 08:58 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11),
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `current_balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `customers` (`customer_id`, `name`, `email`, `current_balance`) VALUES
(1234,'Tehleel', 'tehleel@gmail.com', '80000');
INSERT INTO `customers` (`customer_id`, `name`, `email`, `current_balance`) VALUES
(1235,'Samra', 'samra@gmail.com', '20000');
INSERT INTO `customers` (`customer_id`, `name`, `email`, `current_balance`) VALUES
(1236,'Tasmia', 'tasmia@gmail.com', '25000');
INSERT INTO `customers` (`customer_id`, `name`, `email`, `current_balance`) VALUES
(1237,'Ahmad', 'ahmad@gmail.com', '8000');
INSERT INTO `customers` (`customer_id`, `name`, `email`, `current_balance`) VALUES
(1238,'Arshiya', 'arshiya@gmail.com', '9000');
INSERT INTO `customers` (`customer_id`, `name`, `email`, `current_balance`) VALUES
(1239,'Arha', 'arha@gmail.com', '10000');
INSERT INTO `customers` (`customer_id`, `name`, `email`, `current_balance`) VALUES
(1240,'Umar', 'umar@gmail.com', '10000');
INSERT INTO `customers` (`customer_id`, `name`, `email`, `current_balance`) VALUES
(1241,'Simar', 'simar@gmail.com', '5000');
INSERT INTO `customers` (`customer_id`, `name`, `email`, `current_balance`) VALUES
(1243,'Rita', 'rita@gmail.com', '15000');
INSERT INTO `customers` (`customer_id`, `name`, `email`, `current_balance`) VALUES
(1244,'Tom', 'tom@gmail.com', '18000');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `amount_transferred` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

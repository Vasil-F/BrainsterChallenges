-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2022 at 08:32 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehicleapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`) VALUES
(7, 'johndoe@example.com', '$2y$10$K5qRlJ0ylLC38vAUgElIL.rCifSesJe5TSbbJj6vYdX/vX5wfuG4q'),
(8, 'janedoe@example.com', '$2y$10$xc6qatojHUFOmySWXafJpOVrDz4gPSAtcZFXxXO3e0L2G79faX98C'),
(9, 'jacksmith@example.com', '$2y$10$dobeSBXjw4yv/jI6iekslumDk79D.BFpv/AuS2jqlX274sOBzfvKu'),
(10, 'aliceburton@example.com', '$2y$10$n.Co9hBIuJmtVF3r8DP9LueXs32VV8iUriJJwrTosB.9lNgirRUBG');

-- --------------------------------------------------------

--
-- Table structure for table `fuel_types`
--

CREATE TABLE `fuel_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `fuel` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fuel_types`
--

INSERT INTO `fuel_types` (`id`, `fuel`) VALUES
(1, 'Gasoline'),
(2, 'Diesel'),
(3, 'Electric');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int(11) NOT NULL,
  `vehicle_model` varchar(32) NOT NULL,
  `vehicle_type` varchar(32) NOT NULL,
  `vehicle_chassis_number` varchar(32) NOT NULL,
  `vehicle_production_year` int(32) NOT NULL,
  `registration_number` varchar(32) NOT NULL,
  `fuel_type` varchar(32) NOT NULL,
  `registration_to` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `vehicle_model`, `vehicle_type`, `vehicle_chassis_number`, `vehicle_production_year`, `registration_number`, `fuel_type`, `registration_to`) VALUES
(15, 'Toyota', 'Sedan', '124sdaf32', 2021, 'SK-1927-AS', 'Electric', '2023-03-16'),
(16, 'Ford', 'Minivan', 'asd12c3', 2014, 'SK-5792-AD', 'Diesel', '2023-06-25'),
(17, 'Mercedez', 'SUV', 'hnzdc24', 2021, 'BT-0012-AB', 'Gasoline', '2022-12-25'),
(18, 'Volkswagen', 'Coupe', 'd2gw89x', 2012, 'OH-2288-AK', 'Diesel', '2022-10-15'),
(19, 'Skoda', 'Sedan', '2sj16m9', 2017, 'SK-2345-AB', 'Diesel', '2022-12-29'),
(20, 'Honda', 'SUV', 'ijasf82', 2022, 'SK-2288-AK', 'Electric', '2023-01-05'),
(21, 'Peugeot', 'Hatchback', 'jret5u3', 2015, 'KU-2305-AD', 'Gasoline', '2023-05-25'),
(22, 'Volvo', 'Minivan', 'pomfd68', 2012, 'KU-9876-DB', 'Diesel', '2022-09-20'),
(23, 'Nissan', 'Hatchback', 'zxcb324', 2021, 'PP-0503-BA', 'Electric', '2022-12-30'),
(24, 'Nissan', 'SUV', 'sadghw2', 2018, 'KU-1599-AB', 'Diesel', '2021-09-25'),
(25, 'Citroen', 'Minivan', 'zvoj250s', 2016, 'VE-9526-MD', 'Diesel', '2023-03-18'),
(26, 'Toyota', 'Coupe', 'nsdrg235', 2022, 'VE-0202-AD', 'Electric', '2023-05-05'),
(27, 'Mercedez', 'Sedan', 'kse65xc', 2022, 'OH-5125-MD', 'Gasoline', '2023-06-05'),
(28, 'Volkswagen', 'Hatchback', 'ir4gtj4', 2019, 'TE-8294-VM', 'Diesel', '2022-12-20'),
(29, 'Honda', 'SUV', 'poj125', 2020, 'GE-2431-SV', 'Electric', '2023-07-09'),
(30, 'Peugeot', 'Coupe', 'bwe35az', 2019, 'NE-9562-BB', 'Gasoline', '2023-05-08');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_models`
--

CREATE TABLE `vehicle_models` (
  `id` int(10) UNSIGNED NOT NULL,
  `model` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_models`
--

INSERT INTO `vehicle_models` (`id`, `model`) VALUES
(1, 'Toyota'),
(2, 'Mercedez'),
(3, 'Ford'),
(4, 'Honda'),
(5, 'Skoda'),
(6, 'Peugeot'),
(7, 'Citroen'),
(8, 'Volkswagen'),
(9, 'Volvo'),
(11, 'Nissan');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_types`
--

CREATE TABLE `vehicle_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_types`
--

INSERT INTO `vehicle_types` (`id`, `type`) VALUES
(1, 'Sedan'),
(2, 'Coupe'),
(3, 'Hatchback'),
(4, 'SUV'),
(5, 'Minivan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fuel_types`
--
ALTER TABLE `fuel_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_models`
--
ALTER TABLE `vehicle_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_types`
--
ALTER TABLE `vehicle_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `fuel_types`
--
ALTER TABLE `fuel_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `vehicle_models`
--
ALTER TABLE `vehicle_models`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `vehicle_types`
--
ALTER TABLE `vehicle_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

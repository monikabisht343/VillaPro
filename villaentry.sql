-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2023 at 08:22 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: "trip"
--

-- --------------------------------------------------------

--
-- Table structure for table "villaentry"
--

CREATE TABLE "villaentry" ;

--
-- Dumping data for table "villaentry"
--

SET IDENTITY_INSERT "villaentry" ON ;
INSERT INTO "villaentry" ("name", "age", "gender", "email", "phone", "dsc", "dt", "S_NO_") VALUES
('Radha', '23', 'female', 'monikabisht920@gmail.com', '9456525325', 'This is the best trip', '2023-05-25', 16),
('Radha', '23', 'female', 'monikabisht920@gmail.com', '9456525325', 'This is the best trip', '2023-05-25', 17),
('Ram', '23', 'Male', 'Ram@gmail.com', '887777676767', 'This is my first trip ever. ', '2023-05-25', 18),
('Ram', '23', 'Male', 'Ram@gmail.com', '887777676767', 'This is my first trip ever. ', '2023-05-25', 19),
('Rami', '23', 'female', 'rami@gmail.com', '8989899989', 'I am very excited about my new trip to the luxurious villa.', '2023-05-25', 20);

SET IDENTITY_INSERT "villaentry" OFF;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

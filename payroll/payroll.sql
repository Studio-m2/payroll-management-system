-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2023 at 08:32 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_department`
--

CREATE TABLE `employee_department` (
  `id` int(11) NOT NULL,
  `department_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_department`
--

INSERT INTO `employee_department` (`id`, `department_title`) VALUES
(2, 'HR'),
(35, 'IT'),
(37, 'Accounting'),
(38, 'Marketing'),
(39, 'Co_Founder');

-- --------------------------------------------------------

--
-- Table structure for table `employee_history`
--

CREATE TABLE `employee_history` (
  `id` int(11) NOT NULL,
  `employee_name` varchar(100) NOT NULL,
  `department` varchar(50) NOT NULL,
  `date_of_joing` date NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `salary` int(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_history`
--

INSERT INTO `employee_history` (`id`, `employee_name`, `department`, `date_of_joing`, `contact`, `email`, `gender`, `salary`, `password`) VALUES
(56, 'Harry Walsh', 'HR', '2023-07-05', '+134567887', 'HarryWalsh12@gmail.com', 'male', 90000, 'd9b1d7db4cd6e70935368a1efb10e377'),
(57, 'Ollie Hart', 'IT', '2023-07-05', '+15364256', 'OllieHart13@gmail.com', 'male', 60000, '202cb962ac59075b964b07152d234b70'),
(58, 'Joel West', 'Accounting', '2023-07-11', '+134765456', 'JoelWest17@gmail.com', 'male', 70000, '202cb962ac59075b964b07152d234b70'),
(59, 'Vance Rogers', 'HR', '2023-07-12', '+12789765', 'VanceRogers88@gmail.com', 'male', 80000, 'd9b1d7db4cd6e70935368a1efb10e377'),
(60, 'Ronnie Halt', 'HR', '2023-07-12', '+12323765', 'RonnieHalt98@gmail.com', 'male', 80000, '202cb962ac59075b964b07152d234b70'),
(61, 'Johann Hill', 'Accounting', '2023-07-12', '+12387654', 'JohannHill76@gmail.com', 'male', 90000, '202cb962ac59075b964b07152d234b70'),
(62, 'John haddy', 'HR', '2023-07-15', '+16756789', 'Johnhaddy39@gmail.com', 'male', 80000, '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `employee_leave`
--

CREATE TABLE `employee_leave` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(255) NOT NULL,
  `employee_leave` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_leave`
--

INSERT INTO `employee_leave` (`id`, `employee_id`, `employee_leave`) VALUES
(73, '61', '1'),
(74, '56', '1'),
(75, '60', '1'),
(76, '56', '1'),
(77, '56', '1');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstname`, `lastname`, `image`, `email`, `password`) VALUES
(1, 'anabia', 'malik', '', 'anabiamalik@123.com', 'b706835de79a2b4e80506f582af3676a'),
(2, 'bilal', 'awan', '', 'bial123@gmail.com', '202cb962ac59075b964b07152d234b70'),
(4, 'maryam', 'malik', '', 'marram@gmail.com', 'b706835de79a2b4e80506f582af3676a'),
(7, 'Muhammmad Bilal', 'malikm', '', 'bmm@gmail.com', 'b3cd915d758008bd19d0f2428fbb354a'),
(9, 'Muhammad Bilal', 'malik', '', 'bm@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(13, 'maryam', 'awan', '', 'maryam@gmail.com', '202cb962ac59075b964b07152d234b70'),
(14, 'naina', 'malik', '', 'nainamlik@gmail.com', 'b706835de79a2b4e80506f582af3676a'),
(16, 'naina', 'malik', '', 'naina@gmail.com', '202cb962ac59075b964b07152d234b70'),
(18, 'nn', 'nn', '', 'bmnnnn@gmail.com', 'eab71244afb687f16d8c4f5ee9d6ef0e'),
(19, 'amber', 'malik', '', 'v@gmailcom', '202cb962ac59075b964b07152d234b70'),
(20, 'nadia', 'malik', '', 'nadia123@gmail.com', '202cb962ac59075b964b07152d234b70'),
(21, 'naina', 'malik', '', 'nainamalik12@gmail.com', '202cb962ac59075b964b07152d234b70'),
(22, 'ss', 'malik', '', 'as@gmail.com', '202cb962ac59075b964b07152d234b70'),
(23, 'Nadia', 'malik', 'Red and Black Dark Gamer Sports YouTube Banner (4).jpg', 'nadia177@gmail.com', '202cb962ac59075b964b07152d234b70'),
(24, 'naveeda', 'malik', '', 'naveeda@gmail.com', '202cb962ac59075b964b07152d234b70'),
(25, 'michael', 'john', 'Red and Black Dark Gamer Sports YouTube Banner (5).jpg', 'michaeljohn13@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_department`
--
ALTER TABLE `employee_department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_history`
--
ALTER TABLE `employee_history`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `employee_leave`
--
ALTER TABLE `employee_leave`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_department`
--
ALTER TABLE `employee_department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `employee_history`
--
ALTER TABLE `employee_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `employee_leave`
--
ALTER TABLE `employee_leave`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

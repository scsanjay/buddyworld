-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2017 at 01:30 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buddyworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `text` varchar(5000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `user_id`, `text`, `date`) VALUES
(1, 'skc1234', 'hjghjh', '2017-03-01'),
(2, 'skc1234', 'hello there this is my first post\r\n', '2017-03-02'),
(3, 'skc1234', 'arpit dagar chutiya hai', '2017-03-02');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `mobile` int(10) NOT NULL,
  `aadhar` int(16) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `dob`, `mobile`, `aadhar`, `password`) VALUES
(1, 'shivam kumar chauhan', 'shivamchauhan3596@gmail.com', '7845', 78444, 45787, '$2y$10$123422charactersormore4'),
(2, 'skgupta', 'sk@gmail.com', '4578', 45478, 45121, '$2y$10$123422charactersormoreX'),
(3, 'aalu38', '87sk@gmail.com', '121', 7845, 1245, '$2y$10$123422charactersormoreB'),
(4, 'asdf', 'asdf@gmil.com', '7845', 7845, 5121, '$2y$10$123422charactersormoreO'),
(5, 'lolwa', 'lolwa@www.com', '7845', 45122, 2356, '$2y$10$123422charactersormoreb'),
(6, 'mmm', 'mmm@gm.com', '03051996', 4512, 5689, '78544'),
(7, 'bvbvb', 'nmn@gmail.com', '3051996', 2147483647, 2147483647, 'asdfg'),
(8, 'dagar', 'dagar@gmail.com', '8071994', 975948, 45125, 'asdfg'),
(9, 'sumit saini', 'sumitsaini807@gmail.com', '2121994', 2147483647, 2147483647, 'sumit123'),
(10, 'raghuraj singh', 'raghuraj.singh@miet.ac.in', '20081986', 2147483647, 2147483647, 'raghuraj123'),
(11, 'skc1234', 'sk@gmail.com', '3051996', 2147483647, 235487887, 'asdfg1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

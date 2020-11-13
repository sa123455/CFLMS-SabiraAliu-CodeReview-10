-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2020 at 09:26 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr10-sabiraaliu-biglibrary`
--
CREATE DATABASE IF NOT EXISTS `cr10-sabiraaliu-biglibrary` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cr10-sabiraaliu-biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `m_image` varchar(255) NOT NULL,
  `m_description` varchar(255) NOT NULL,
  `isbn` int(11) NOT NULL,
  `a_first_name` varchar(255) NOT NULL,
  `a_last_name` varchar(255) NOT NULL,
  `m_type` varchar(255) NOT NULL,
  `m_size` varchar(255) NOT NULL,
  `p_first_name` varchar(255) NOT NULL,
  `p_last_name` varchar(255) NOT NULL,
  `p_date` date NOT NULL,
  `p_address` varchar(255) NOT NULL,
  `m_available` varchar(255) NOT NULL,
  `m_reserved` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `title`, `m_image`, `m_description`, `isbn`, `a_first_name`, `a_last_name`, `m_type`, `m_size`, `p_first_name`, `p_last_name`, `p_date`, `p_address`, `m_available`, `m_reserved`) VALUES
(1, 'Title One', 'https://images.unsplash.com/photo-1502078534399-8190479363f5?ixlib=rb-1.2.1&auto=format&fit=crop&w=753&q=80', 'This is book', 1, 'John', 'James', 'Book', 'big', 'Anna ', 'Brown', '2020-11-21', 'Leo Mathauser Gasse', 'yes', 'no'),
(2, 'Title Two', 'https://images.unsplash.com/photo-1548778052-311f4bc2b502?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=60', 'This is a cd', 2, 'Shpend', 'Aliu', 'CD', 'medium', 'Shpend', 'Aliu', '2020-11-21', 'Leo Mathauser Gasse', 'yes', 'no'),
(4, 'Title Three', 'https://images.unsplash.com/photo-1580656449278-e8381933522c?ixlib=rb-1.2.1&auto=format&fit=crop&w=755&q=80', 'This is a dvd', 3, 'Hana', 'Aliu', 'DVD', 'big', 'Shpend', 'Aliu', '2020-11-29', 'Leo Mathauser Gasse', 'yes', 'no'),
(5, 'Title Four', 'https://images.unsplash.com/photo-1502078534399-8190479363f5?ixlib=rb-1.2.1&auto=format&fit=crop&w=753&q=80', 'This is book', 4, 'Isa ', 'Aliu', 'Book', 'small', 'Dean', 'Doan', '2020-11-04', 'Leo Mathauser Gasse', 'no', 'yes'),
(6, 'Title Four', 'https://images.unsplash.com/photo-1548778052-311f4bc2b502?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=60', 'This is book', 5, 'Richard', 'Richard', 'CD', 'medium', 'Eric', 'Smith', '2020-11-04', 'Leo Mathauser Gasse', 'no', 'yes'),
(7, 'Title Six', 'https://images.unsplash.com/photo-1580656449278-e8381933522c?ixlib=rb-1.2.1&auto=format&fit=crop&w=755&q=80', 'This is dvd', 6, 'Sabira', 'Aliu', 'DVD', 'big', 'Shpend', 'Aliu', '2020-12-24', 'Leo Mathauser Gasse', 'yes', 'no'),
(8, 'Title Seven', 'https://images.unsplash.com/photo-1502078534399-8190479363f5?ixlib=rb-1.2.1&auto=format&fit=crop&w=753&q=80', 'This is book', 7, 'Shpend', 'Aliu', 'Book', 'medium', 'Sabira', 'Aliu', '2020-08-14', 'Leo Mathauser Gasse', 'yes', 'no'),
(9, 'Title Eight', 'https://images.unsplash.com/photo-1548778052-311f4bc2b502?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=60', 'This is cd', 8, 'Shpend', 'Aliu', 'CD', '', 'Sabira', 'Aliu', '2020-11-17', 'Leo Mathauser Gasse', 'yes', 'no'),
(10, 'Title Nine', 'https://images.unsplash.com/photo-1580656449278-e8381933522c?ixlib=rb-1.2.1&auto=format&fit=crop&w=755&q=80', 'This is a dvd', 9, 'Shpend', 'Aliu', 'DVD', 'big', 'Shpend', 'Aliu', '2020-11-12', 'Leo Mathauser Gasse', 'no', 'yes'),
(11, 'Title Ten', 'https://images.unsplash.com/photo-1502078534399-8190479363f5?ixlib=rb-1.2.1&auto=format&fit=crop&w=753&q=80', 'This is book', 10, 'Shpend', 'Aliu', 'Book', 'small', 'Sabira', 'Aliu', '2020-11-12', 'Leo Mathauser Gasse', 'no', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

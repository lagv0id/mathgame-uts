-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2020 at 01:14 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mathgame`
--

-- --------------------------------------------------------

--
-- Table structure for table `uts_login`
--

CREATE TABLE `uts_login` (
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `skor` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uts_login`
--

INSERT INTO `uts_login` (`nama`, `email`, `skor`) VALUES
('Andre', '', 10),
('Andre', '', 60),
('Andre', 'ss', 0),
('Andre', 'sssss', 10),
('AAAA', 'asdasdasdsa', 0),
('11', '232323', 0),
('ADsfsdfds', 'dsgdfgd', 0),
('Aasdasd', 'asdasds', 25),
('asdasdas', 'dasdsd', 0),
('qweqwe', 'qweqwewew', 0),
('asdasdas', 'asdsad', 100),
('addddddd', 'dsad', 100),
('', 'dsad', 110),
('addddddd', 'dsad', 110),
('sadasdsad', 'ddddd', 100),
('sadasdsad', 'ddddd', 160),
('Test Run', 'ampepega@mail.com', 0),
('Test Run', 'ampepega@mail.com', 60),
('Test Run', 'ampepega@mail.com', 60),
('Test Run', 'ampepega@mail.com', 60),
('Test Run', 'ampepega@mail.com', 60),
('Test Run', 'ampepega@mail.com', 60),
('Test Run', 'ampepega@mail.com', 60),
('Test Run', 'ampepega@mail.com', 60),
('Test Run', 'ampepega@mail.com', 60),
('Test Run', 'ampepega@mail.com', 60),
('Test Run', 'ampepega@mail.com', 60),
('Test Run', 'ampepega@mail.com', 60),
('Andre EEE', 'assssssss', 0),
('Andre EEE', 'assssssss', 30),
('Andre EEE', 'assssssss', 30),
('Andre EEE', 'assssssss', 40),
('Wack ass mothafucka', 'heyhey@madmail.com', 0),
('Wack ass mothafucka', 'heyhey@madmail.com', 60),
('Wack ass mothafucka', 'heyhey@madmail.com', 90),
('Wack ass mothafucka', 'heyhey@madmail.com', 20),
('KKKKKK', 'ajajajajajjajajaaaa', 0),
('KKKKKK', 'ajajajajajjajajaaaa', 60),
('Xander', 'edgymcedgeboi@mail.com', 0),
('Xander', 'edgymcedgeboi@mail.com', 160),
('Xander', 'edgymcedgeboi@mail.com', -10),
('Xander', 'edgymcedgeboi@mail.com', -10),
('Xander', 'edgymcedgeboi@mail.com', -10),
('Andre', 'andrep21500@gmail.com', 0),
('Andre', 'andrep21500@gmail.com', 80),
('Andre', 'andrep21500@gmail.com', 80),
('Andre', 'asdflolrus3@gmail.com', 0),
('Andre', 'asdflolrus3@gmail.com', 130),
('Andre', 'asdflolrus3@gmail.com', 130),
('asdasddddddd', '2radasdawrdw', 0),
('asdasddddddd', '2radasdawrdw', 0),
('asdasddddddd', '2radasdawrdw', 0),
('asdasddddddd', '2radasdawrdw', 0),
('asdasddddddd', '2radasdawrdw', 0),
('asdasddddddd', '2radasdawrdw', 0),
('asdasddddddd', '2radasdawrdw', 0),
('asdasddddddd', '2radasdawrdw', 0),
('asdasddddddd', '2radasdawrdw', 0),
('asdasddddddd', '2radasdawrdw', 0),
('asdasddddddd', '2radasdawrdw', 0),
('asdasddddddd', '2radasdawrdw', 0),
('asdasddddddd', '2radasdawrdw', 0),
('asdasddddddd', '2radasdawrdw', 0),
('asdasddddddd', '2radasdawrdw', 0),
('asdasddddddd', '2radasdawrdw', 0),
('asdasddddddd', '2radasdawrdw', 0),
('asdasddddddd', '2radasdawrdw', 0),
('asdasddddddd', '2radasdawrdw', 0),
('asdasddddddd', '2radasdawrdw', 0),
('asdasddddddd', '2radasdawrdw', 0),
('asdasddddddd', '2radasdawrdw', 0),
('asdasddddddd', '2radasdawrdw', 0),
('asdasddddddd', '2radasdawrdw', 0),
('asdasddddddd', '2radasdawrdw', 0),
('asdasddddddd', '2radasdawrdw', 0),
('asdasddddddd', '2radasdawrdw', 0),
('asdasddddddd', '2radasdawrdw', 0),
('asdasddddddd', '2radasdawrdw', 0),
('asdasddddddd', '2radasdawrdw', 0),
('asdasddddddd', '2radasdawrdw', 0),
('222222', '232323', 0),
('222222', '232323', -10),
('Andre', 'sadsads', 0),
('Andre', 'sadsads', 50);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

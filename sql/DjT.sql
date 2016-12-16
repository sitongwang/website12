-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 16, 2016 at 04:06 PM
-- Server version: 5.6.28
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `DjT`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `idCF` int(11) NOT NULL,
  `namecf` varchar(255) NOT NULL,
  `emailcf` varchar(255) NOT NULL,
  `messagecf` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`idCF`, `namecf`, `emailcf`, `messagecf`) VALUES
(310, 'ssss', 'ssss', 'sssss'),
(311, 'christy', '11111@gmail.com', 'great'),
(312, 'paul', '3333@gmail.com', 'nice');

-- --------------------------------------------------------

--
-- Table structure for table `pictures_upload`
--

CREATE TABLE `pictures_upload` (
  `picture_id` int(11) NOT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `songid` int(11) NOT NULL,
  `sname` varchar(45) DEFAULT NULL,
  `votes` int(11) NOT NULL,
  `dvotes` int(11) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`songid`, `sname`, `votes`, `dvotes`, `artist`, `genre`) VALUES
(3, 'What about us', 0, 0, 'ATB', ''),
(4, 'Black Canyon', 0, 0, 'Matt Darey', ''),
(13, 'not exactly', 0, 0, 'deadmau5', 'electro house'),
(14, 'to forever', 0, 0, 'tiesto', 'trance');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(2, 'ali', 'ali12'),
(3, 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`idCF`);

--
-- Indexes for table `pictures_upload`
--
ALTER TABLE `pictures_upload`
  ADD PRIMARY KEY (`picture_id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`songid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `idCF` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=313;
--
-- AUTO_INCREMENT for table `pictures_upload`
--
ALTER TABLE `pictures_upload`
  MODIFY `picture_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `songid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
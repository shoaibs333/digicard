-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2025 at 10:46 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digicard`
--

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `cards_id` int(11) NOT NULL,
  `c_user_id` int(11) NOT NULL,
  `c_template_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_company_name` varchar(255) DEFAULT NULL,
  `c_designation` varchar(120) DEFAULT NULL,
  `c_mobile` varchar(20) DEFAULT NULL,
  `c_whatsapp` varchar(20) DEFAULT NULL,
  `c_address` text DEFAULT NULL,
  `c_email` varchar(190) DEFAULT NULL,
  `c_website` varchar(255) DEFAULT NULL,
  `c_about` text DEFAULT NULL,
  `c_added_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `c_updated_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`cards_id`, `c_user_id`, `c_template_id`, `c_name`, `c_company_name`, `c_designation`, `c_mobile`, `c_whatsapp`, `c_address`, `c_email`, `c_website`, `c_about`, `c_added_date`, `c_updated_date`) VALUES
(1, 1, 1, 'shoaib', 'sb', 'it', '8793736284', '8793736284', 'sr no 11', 'shaikhshoaib654@gmail.com', 'https://codebeautify.org/php-beautifier#', 'asd', '2025-08-25 11:50:52', '2025-08-26 14:09:09');

-- --------------------------------------------------------

--
-- Table structure for table `cards_products`
--

CREATE TABLE `cards_products` (
  `cp_id` int(11) NOT NULL,
  `cp_card_id` int(11) NOT NULL,
  `cp_title` varchar(255) DEFAULT NULL,
  `cp_image` varchar(255) NOT NULL,
  `cp_added_date` datetime NOT NULL DEFAULT current_timestamp(),
  `cp_update_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cards_services`
--

CREATE TABLE `cards_services` (
  `cs_id` int(11) NOT NULL,
  `cs_card_id` int(11) NOT NULL,
  `cs_title` varchar(255) DEFAULT NULL,
  `cs_image` varchar(160) NOT NULL,
  `cs_description` text DEFAULT NULL,
  `cs_added_date` datetime NOT NULL DEFAULT current_timestamp(),
  `cs_updated_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE `templates` (
  `template_id` int(11) NOT NULL,
  `tmp_name` varchar(255) NOT NULL,
  `tmp_url` varchar(255) NOT NULL,
  `tmp_added_date` datetime NOT NULL DEFAULT current_timestamp(),
  `tmp_updated_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `u_full_name` varchar(255) NOT NULL,
  `u_company_name` varchar(255) DEFAULT NULL,
  `u_mobile` varchar(20) NOT NULL,
  `u_email` varchar(190) NOT NULL,
  `u_password` varchar(255) NOT NULL,
  `u_role` enum('superadmin','customer') NOT NULL DEFAULT 'customer',
  `u_status` enum('active','suspended') NOT NULL DEFAULT 'active',
  `u_added_date` datetime NOT NULL DEFAULT current_timestamp(),
  `u_update_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `u_full_name`, `u_company_name`, `u_mobile`, `u_email`, `u_password`, `u_role`, `u_status`, `u_added_date`, `u_update_date`) VALUES
(1, 'shoaib', 'sb', '8793736284', 'shaikhshoaib654@gmail.com', '$2y$10$iMiblViWBiEtYFSmMZziwOwvlhNndox2HSv6QydqmoUWUYlRgm/1O', 'customer', 'active', '2025-08-25 17:19:17', '2025-08-26 14:16:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`cards_id`),
  ADD KEY `user_id` (`c_user_id`);

--
-- Indexes for table `cards_products`
--
ALTER TABLE `cards_products`
  ADD PRIMARY KEY (`cp_id`),
  ADD KEY `vcard_id` (`cp_card_id`);

--
-- Indexes for table `cards_services`
--
ALTER TABLE `cards_services`
  ADD PRIMARY KEY (`cs_id`),
  ADD KEY `vcard_id` (`cs_card_id`);

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`template_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `mobile` (`u_mobile`),
  ADD UNIQUE KEY `email` (`u_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `cards_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cards_products`
--
ALTER TABLE `cards_products`
  MODIFY `cp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cards_services`
--
ALTER TABLE `cards_services`
  MODIFY `cs_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `template_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cards`
--
ALTER TABLE `cards`
  ADD CONSTRAINT `cards_ibfk_1` FOREIGN KEY (`c_user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `cards_products`
--
ALTER TABLE `cards_products`
  ADD CONSTRAINT `cards_products_ibfk_1` FOREIGN KEY (`cp_card_id`) REFERENCES `cards` (`cards_id`);

--
-- Constraints for table `cards_services`
--
ALTER TABLE `cards_services`
  ADD CONSTRAINT `cards_services_ibfk_1` FOREIGN KEY (`cs_card_id`) REFERENCES `cards` (`cards_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

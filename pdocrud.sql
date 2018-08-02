SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `Ghp02FgpuqfbeO` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `Ghp02FgpuqfbeO`;
--
-- Table structure for table `contacts`
--
CREATE TABLE `contacts` (
  `id` int(11) UNSIGNED NOT NULL,
  `fname` varchar(65) NOT NULL,
  `lname` varchar(65) NOT NULL,
  `email` varchar(120) NOT NULL,
  `phone` varchar(22) NOT NULL,
  `country` varchar(128) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- Dumping data for table `contacts`
--
INSERT INTO `contacts` (`id`, `fname`, `lname`, `email`, `phone`, `country`, `is_deleted`, `created_on`) VALUES
(1, 'John', 'Smith', 'jhsmith@email.com', '1 818 555 1212', 'United States', 1, '2018-07-31 13:06:27'),
(2, 'Jane', 'Smith', 'jnsmith@email.com', '1 818 555 1212', 'USA', 0, '2018-07-31 13:16:27'),
(3, 'Bill', 'Collins', 'bcollins@email.com', '1 818 555 1212', 'USA', 0, '2018-07-31 13:16:27'),
(4, 'Wayne', 'Douglas', 'wdouglas@email.com', '1 818 555 1212', 'USA', 0, '2018-07-31 13:16:27'),
(5, 'Hyacinth', 'Bouquet', 'hbucket@email.com', '44 181 855 121', 'England', 0, '2018-07-31 13:16:27'),
(6, 'Glenn', 'Smythe', 'gsmith@email.com', '44 181 855 121', 'England', 0, '2018-07-31 13:16:27'),
(7, 'George', 'Sothsby', 'georges@email.com', '44 72 394 212', 'England', 0, '2018-07-31 13:16:27'),
(8, 'Arthur', 'Pendragon', 'karthur@email.com', '44 911 911 911', 'Scotland', 0, '2018-07-31 13:16:27'),
(9, 'Santa', 'Klees', 'santak@email.com', '1 800 555 1212', 'North Pole', 0, '2018-07-31 13:16:27'),
(10, 'Jan', 'van Steen', 'janvs@email.com', '32 8185 5512', 'Belgium', 0, '2018-07-31 13:16:27'),
(11, 'Patrik', 'Luiwamus', 'pluiwamis@email.com', '32 8185 5510', 'Belguim', 0, '2018-07-31 13:16:27'),
(12, 'Chris', 'Steenbok', 'csteen@email.com', '31 20 65 1212', 'The Netherlands', 0, '2018-07-31 13:16:27'),
(13, 'Paul', 'Vella', 'pvalla@email.com', '1 818 555 1212', 'Malta', 0, '2018-07-31 13:17:11'),
(14, 'John Jacob', 'Jingleheimer', 'jojaji@email.com', '1 900 555 1212', 'United States', 0, '2018-08-02 14:37:25');
-- --------------------------------------------------------
--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
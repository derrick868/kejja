-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2021 at 11:00 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `houses`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `house_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `time` time NOT NULL,
  `state` int(1) NOT NULL DEFAULT 0,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `house_id`, `date`, `email`, `phone`, `message`, `time`, `state`, `status`) VALUES
(22, 'derrick', 6, '2021-12-28', 'derrickmacha1@gmail.com', 741174317, 'i would like to visit', '13:02:00', 1, 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(3) NOT NULL,
  `comment_post_id` int(3) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(25) NOT NULL,
  `comment_phone` int(11) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_phone`, `comment_content`, `comment_status`, `comment_date`) VALUES
(52, 6, 'derrick', 'derrickmacha1@gmail.com', 741174317, 'kkkk', 'unapproved', '2021-12-28');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`, `date`) VALUES
(2, 'mark', 'mark1@gmail.com', 7444444, 'ppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppp', '2021-12-21');

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

CREATE TABLE `houses` (
  `house_id` int(11) NOT NULL,
  `house_number` varchar(255) NOT NULL,
  `house_size` varchar(255) NOT NULL,
  `house_rooms` int(11) NOT NULL,
  `house_rent` float NOT NULL,
  `units` varchar(255) NOT NULL,
  `house_category` varchar(255) NOT NULL,
  `house_image` varchar(255) NOT NULL,
  `house_status` varchar(255) NOT NULL,
  `house_location` varchar(255) NOT NULL,
  `house_description` varchar(255) NOT NULL,
  `house_image1` varchar(255) NOT NULL,
  `house_image2` varchar(255) NOT NULL,
  `house_image3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `houses`
--

INSERT INTO `houses` (`house_id`, `house_number`, `house_size`, `house_rooms`, `house_rent`, `units`, `house_category`, `house_image`, `house_status`, `house_location`, `house_description`, `house_image1`, `house_image2`, `house_image3`) VALUES
(5, 'blessed apartments', '400X300', 5, 2, 'M', 'sale', 'IMG-20211217-WA0016.jpg', 'available', 'NAIROBI SYOKIMAU', 'Remodeled to perfection! This beautiful home is located close to shopping and dining. Here are just a few of its wonderful features: cozy fireplace, new kitchen cabinets, stainless steel sink, modern quartz counter tops, wood flooring, remodeled bathrooms', 'IMG-20211217-WA0018.jpg', '', ''),
(6, 'kings houses', '300X200', 7, 2.4, 'M', 'rent', 'IMG-20211217-WA0000.jpg', 'unavailable', 'NAIROBI', 'Remodeled to perfection! This beautiful home is located close to shopping and dining. Here are just a few of its wonderful features: cozy fireplace, new kitchen cabinets, stainless steel sink, modern quartz counter tops, wood flooring, remodeled bathrooms', '', '', ''),
(7, 'popote house', '200X400', 0, 2.4, 'M', 'rent', 'IMG-20211217-WA0009.jpg', 'available', 'KISUMU', '                     Remodeled to perfection! This beautiful home is located close to shopping and dining. Here are just a few of its wonderful features: cozy fireplace, new kitchen cabinets, stainless steel sink, modern quartz counter tops, wood flooring', 'IMG-20211217-WA0010.jpg', '', ''),
(8, 'JURASIC APARTMENTS', '400X400', 5, 1.3, 'M', 'sale', 'IMG-20211217-WA0008.jpg', 'available', 'KISUMU', '                                        Prime property available to let in Parklands opposite parklands sports club 6 parcels of land each 0.5 acres the land is opposite parklands sports club. no permanent structures to be erected. water & electricity con', 'IMG-20211217-WA0017.jpg', '', ''),
(9, 'JURASIC APARTMENTS', '400X400', 5, 100000, '', 'rent', 'IMG-20211217-WA0008.jpg', 'available', 'KISUMU', '                                        Prime property available to let in Parklands opposite parklands sports club 6 parcels of land each 0.5 acres the land is opposite parklands sports club. no permanent structures to be erected. water & electricity con', 'IMG-20211217-WA0017.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` int(11) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft',
  `post_view_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`, `post_view_count`) VALUES
(9, 16, 'IT', 'mark', '2020-12-03', 'fifa_17-1920x1080.jpg', 'dffavargr vdvsrgrg freerhara argg34tgfv dfgrf3																											', 'php,cms,css', 0, 'published', 3),
(10, 18, 'cms project', 'derroh ', '2020-12-03', 'anonymous-masks-4752x3168-wallpaper-784421.jpg', 'waafferfrrvfebffbfeffefbfbfbafebaevaefvarwqwqwdfedsdsasvavdfvvfvfff												', 'php,cms,derroh', 0, 'published', 0),
(15, 9, 'cms project', 'derroh ', '2020-12-03', 'blue_bird-wallpaper-1600x900.jpg', '									', 'php,cms,derroh', 0, 'published', 2),
(16, 16, 'IT', 'kelvin', '2020-12-03', 'ash_scarlett_johansson_sing_4k-1920x1080.jpg', '															', 'php,cms,css', 0, 'published', 0),
(18, 18, 'cms project', 'derroh ', '2020-12-03', 'fifa.jpg', '			i love programming						', 'php,cms,derroh', 0, 'published', 1),
(20, 9, 'cms project', 'derroh ', '2021-06-28', 'beats by dre.jpg', '	i love programming		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.								', 'php,cms,derroh', 3, 'published', 40);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `house` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `mobile`, `email`, `role`, `password`, `house`, `date`) VALUES
(5, 'mark', 'ngunyi', 741174317, 'mark1@gmail.com', 'client', '', 3, '2021-12-13'),
(18, 'derrick', 'macharia', 741174317, 'derrickmacha1@gmail.com', 'admin', '$2y$10$1COko8KiMqCxL4/TMJzLtOpDoYP9ugJ6Zvn9DuiJda3ZpC/Qxzg2K', 0, '2021-12-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`house_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `houses`
--
ALTER TABLE `houses`
  MODIFY `house_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

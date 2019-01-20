-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20-Jan-2019 às 05:08
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categories`
--

CREATE TABLE `categories` (
  `catid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categories`
--

INSERT INTO `categories` (`catid`, `name`) VALUES
(1, 'Action'),
(2, 'Sci-Fi'),
(3, 'Biography'),
(4, 'Drama'),
(5, 'History'),
(6, 'Music'),
(7, 'Romance'),
(8, 'Thriller'),
(9, 'War'),
(10, 'Family'),
(11, 'Fantasy'),
(12, 'Musical');

-- --------------------------------------------------------

--
-- Estrutura da tabela `movies`
--

CREATE TABLE `movies` (
  `movid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `year` int(4) NOT NULL,
  `description` text NOT NULL,
  `rating_1` float NOT NULL,
  `rating_2` float NOT NULL,
  `rating_3` float NOT NULL,
  `rating_4` float NOT NULL,
  `media` longtext NOT NULL,
  `poster` longtext NOT NULL,
  `image_1` longtext NOT NULL,
  `image_2` longtext NOT NULL,
  `vote_ok` int(11) NOT NULL,
  `vote_notok` int(11) NOT NULL,
  `download_count` int(11) NOT NULL,
  `download_link` text NOT NULL,
  `creation_timestamp` datetime NOT NULL,
  `update_timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `movies`
--

INSERT INTO `movies` (`movid`, `title`, `year`, `description`, `rating_1`, `rating_2`, `rating_3`, `rating_4`, `media`, `poster`, `image_1`, `image_2`, `vote_ok`, `vote_notok`, `download_count`, `download_link`, `creation_timestamp`, `update_timestamp`) VALUES
(1, 'Venom', 2018, 'When Eddie Brock acquires the powers of a symbiote, he will have to release his alter-ego \"Venom\" to save his life.', 0, 0, 0, 0, 'https://www.youtube.com/embed/dzxFdtWmjto?rel=0&wmode=transparent&border=0&autoplay=1&iv_load_policy=3', 'https://img.yts.am/assets/images/movies/venom_2018/medium-cover.jpg', 'https://img.yts.am/assets/images/movies/venom_2018/large-screenshot2.jpg', 'https://img.yts.am/assets/images/movies/venom_2018/large-screenshot3.jpg', 0, 0, 0, '', '2019-01-20 01:00:30', '0000-00-00 00:00:00'),
(2, 'Hunter Killer', 2018, 'A U.S. submarine, the USS Tampa Bay, vanishes while shadowing a Russian Akula-class submarine in the Arctic. Rear Admiral John Fisk sends a Virginia-class submarine, the USS Arkansas, under the command of newly-promoted and unorthodox Commander Joe Glass to investigate. At the same time, a Navy SEAL team under the command of Lieutenant Bill Beaman is sent in to discreetly observe a Russian naval base, but their mission is swiftly complicated when Martinelli, the team\'s new DM recruit, is rendered unconscious during the HALO drop. When they arrive at the naval base, they witness defense minister Dmitri Durov conducting a coup d\'eta and taking Russian President Zakarin prisoner, and swiftly realize that Durov intends to trigger a war.', 0, 0, 0, 0, 'https://www.youtube.com/embed/mnP_z3qXDCQ?rel=0&wmode=transparent&border=0&autoplay=1&iv_load_policy=3', 'https://img.yts.am/assets/images/movies/hunter_killer_2018/medium-cover.jpg', 'https://img.yts.am/assets/images/movies/hunter_killer_2018/large-screenshot2.jpg', 'https://img.yts.am/assets/images/movies/hunter_killer_2018/large-screenshot3.jpg', 0, 0, 0, '', '2019-01-15 18:25:12', '0000-00-00 00:00:00'),
(3, 'First Man', 2018, 'A Biopic on the life of the legendary American Astronaut Neil Armstrong from 1961-1969, on his journey to becoming the first human to walk the moon. Exploring the sacrifices and costs on the Nation and Neil himself, during one of the most dangerous missions in the history of space travel.', 0, 0, 0, 0, 'https://www.youtube.com/embed/O9Y7DTCn7Cc?rel=0&wmode=transparent&border=0&autoplay=1&iv_load_policy=3', 'https://img.yts.am/assets/images/movies/first_man_2018/medium-cover.jpg', 'https://img.yts.am/assets/images/movies/first_man_2018/large-screenshot2.jpg', 'https://img.yts.am/assets/images/movies/first_man_2018/large-screenshot3.jpg', 0, 0, 0, '', '2018-12-25 23:41:35', '0000-00-00 00:00:00'),
(4, 'The Last Man', 2018, 'Tov Matheson is a war veteran with post traumatic stress disorder who perceives that the end of the world is coming. After establishing a relationship with a dubious Messiah, he leaves his normal life to begin the construction of a shelter underground and trains himself, in an extreme way, at the cost of everything in his life. When he also believes the Messiah, something extraordinary happens.', 0, 0, 0, 0, 'https://www.youtube.com/embed/NKgroygFaeA?rel=0&wmode=transparent&border=0&autoplay=1&iv_load_policy=3', 'https://img.yts.am/assets/images/movies/the_last_man_2018/medium-cover.jpg', 'https://img.yts.am/assets/images/movies/the_last_man_2018/large-screenshot2.jpg', 'https://img.yts.am/assets/images/movies/the_last_man_2018/large-screenshot3.jpg', 0, 0, 0, '', '2019-01-01 09:15:22', '0000-00-00 00:00:00'),
(5, 'Close', 2019, 'A bodyguard and counter-terrorism expert Sam takes a job protecting Zoe a rich young heiress. Neither party is keen on the arrangement until a violent kidnap forces them to go on the run.', 0, 0, 0, 0, 'https://www.youtube.com/embed/qWKsiHEpiJM?rel=0&wmode=transparent&border=0&autoplay=1&iv_load_policy=3', 'https://img.yts.am/assets/images/movies/close_2019/medium-cover.jpg', 'https://img.yts.am/assets/images/movies/close_2019/large-screenshot2.jpg', 'https://img.yts.am/assets/images/movies/close_2019/large-screenshot3.jpg', 0, 0, 0, '', '2019-01-19 20:32:10', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `movies_categories`
--

CREATE TABLE `movies_categories` (
  `intid` int(11) NOT NULL,
  `movid` int(11) DEFAULT NULL,
  `catid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `movies_categories`
--

INSERT INTO `movies_categories` (`intid`, `movid`, `catid`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 4, 3),
(4, 4, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movid`);

--
-- Indexes for table `movies_categories`
--
ALTER TABLE `movies_categories`
  ADD PRIMARY KEY (`intid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `movies_categories`
--
ALTER TABLE `movies_categories`
  MODIFY `intid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

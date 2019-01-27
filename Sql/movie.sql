-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27-Jan-2019 às 23:46
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
(12, 'Musical'),
(13, 'Horror'),
(14, 'Mystery'),
(15, 'Adventure'),
(16, 'Animation'),
(17, 'Comedy');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comments`
--

CREATE TABLE `comments` (
  `comid` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `creation_timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comments`
--

INSERT INTO `comments` (`comid`, `user`, `description`, `creation_timestamp`) VALUES
(1, 'Ryan Haywood', 'Barton waited twenty always repair in within we do. An delighted offending curiosity my is dashwoods at. Boy prosperous increasing surrounded companions her nor advantages sufficient put. John on time down give meet help as of.', '2019-01-26 23:25:12'),
(2, 'Pedro Roldan', 'yayds fdfkjsdlkfjsdlkfj\r\nsfgfdgsdfgd\r\ngffsdgdfg', '2019-01-26 01:25:12');

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
(1, 'Venom', 2018, 'When Eddie Brock acquires the powers of a symbiote, he will have to release his alter-ego \"Venom\" to save his life.', 6.4, 0, 0, 0, 'https://www.youtube.com/embed/dzxFdtWmjto?rel=0&wmode=transparent&border=0&autoplay=1&iv_load_policy=3', 'https://img.yts.am/assets/images/movies/venom_2018/medium-cover.jpg', 'https://img.yts.am/assets/images/movies/venom_2018/large-screenshot2.jpg', 'https://img.yts.am/assets/images/movies/venom_2018/large-screenshot3.jpg', 0, 0, 0, 'https://rarbgproxied.org/download.php?id=yj3pxfz&f=Venom.2018.720p.BluRay.H264.AAC-RARBG-[rarbg.to].torrent', '2019-01-20 01:00:30', '0000-00-00 00:00:00'),
(2, 'Hunter Killer', 2018, 'A U.S. submarine, the USS Tampa Bay, vanishes while shadowing a Russian Akula-class submarine in the Arctic. Rear Admiral John Fisk sends a Virginia-class submarine, the USS Arkansas, under the command of newly-promoted and unorthodox Commander Joe Glass to investigate. At the same time, a Navy SEAL team under the command of Lieutenant Bill Beaman is sent in to discreetly observe a Russian naval base, but their mission is swiftly complicated when Martinelli, the team\'s new DM recruit, is rendered unconscious during the HALO drop. When they arrive at the naval base, they witness defense minister Dmitri Durov conducting a coup d\'eta and taking Russian President Zakarin prisoner, and swiftly realize that Durov intends to trigger a war.', 7.2, 0, 0, 0, 'https://www.youtube.com/embed/mnP_z3qXDCQ?rel=0&wmode=transparent&border=0&autoplay=1&iv_load_policy=3', 'https://img.yts.am/assets/images/movies/hunter_killer_2018/medium-cover.jpg', 'https://img.yts.am/assets/images/movies/hunter_killer_2018/large-screenshot2.jpg', 'https://img.yts.am/assets/images/movies/hunter_killer_2018/large-screenshot3.jpg', 1, 0, 1, 'https://rarbgproxied.org/download.php?id=eivnw9a&f=Hunter.Killer.2018.BRRip.XviD.AC3-XVID-[rarbg.to].torrent', '2019-01-15 18:25:12', '2019-01-26 20:19:08'),
(3, 'First Man', 2018, 'A Biopic on the life of the legendary American Astronaut Neil Armstrong from 1961-1969, on his journey to becoming the first human to walk the moon. Exploring the sacrifices and costs on the Nation and Neil himself, during one of the most dangerous missions in the history of space travel.', 4.5, 0, 0, 0, 'https://www.youtube.com/embed/O9Y7DTCn7Cc?rel=0&wmode=transparent&border=0&autoplay=1&iv_load_policy=3', 'https://img.yts.am/assets/images/movies/first_man_2018/medium-cover.jpg', 'https://img.yts.am/assets/images/movies/first_man_2018/large-screenshot2.jpg', 'https://img.yts.am/assets/images/movies/first_man_2018/large-screenshot3.jpg', 2, 2, 1, 'https://rarbgproxied.org/download.php?id=ihtuy72&f=First.Man.2018.IMAX.720p.BluRay.H264.AAC-RARBG-[rarbg.to].torrent', '2018-12-25 23:41:35', '2019-01-26 20:16:52'),
(4, 'The Last Man', 2018, 'Tov Matheson is a war veteran with post traumatic stress disorder who perceives that the end of the world is coming. After establishing a relationship with a dubious Messiah, he leaves his normal life to begin the construction of a shelter underground and trains himself, in an extreme way, at the cost of everything in his life. When he also believes the Messiah, something extraordinary happens.', 5.7, 0, 0, 0, 'https://www.youtube.com/embed/NKgroygFaeA?rel=0&wmode=transparent&border=0&autoplay=1&iv_load_policy=3', 'https://img.yts.am/assets/images/movies/the_last_man_2018/medium-cover.jpg', 'https://img.yts.am/assets/images/movies/the_last_man_2018/large-screenshot2.jpg', 'https://img.yts.am/assets/images/movies/the_last_man_2018/large-screenshot3.jpg', 2, 0, 1, 'https://rarbgproxied.org/download.php?id=2e8csm4&f=The.Last.Man.2018.WEB-DL.XviD.AC3-FGT-[rarbg.to].torrent', '2019-01-01 09:15:22', '2019-01-27 02:27:59'),
(5, 'Close', 2019, 'A bodyguard and counter-terrorism expert Sam takes a job protecting Zoe a rich young heiress. Neither party is keen on the arrangement until a violent kidnap forces them to go on the run.', 8.2, 0, 0, 0, 'https://www.youtube.com/embed/qWKsiHEpiJM?rel=0&wmode=transparent&border=0&autoplay=1&iv_load_policy=3', 'https://img.yts.am/assets/images/movies/close_2019/medium-cover.jpg', 'https://img.yts.am/assets/images/movies/close_2019/large-screenshot2.jpg', 'https://img.yts.am/assets/images/movies/close_2019/large-screenshot3.jpg', 47, -2, 44, 'https://rarbgproxied.org/download.php?id=vd8hsfk&f=Close.2019.720p.WEBRip.x264-STRiFE-[rarbg.to].torrent', '2019-01-19 20:32:10', '2019-01-27 23:18:54'),
(6, 'Bohemian Rhapsody', 2018, 'Bohemian Rhapsody is a foot-stomping celebration of Queen, their music and their extraordinary lead singer Freddie Mercury. Freddie defied stereotypes and shattered convention to become one of the most beloved entertainers on the planet. The film traces the meteoric rise of the band through their iconic songs and revolutionary sound. They reach unparalleled success, but in an unexpected turn Freddie, surrounded by darker influences, shuns Queen in pursuit of his solo career. Having suffered greatly without the collaboration of Queen, Freddie manages to reunite with his bandmates just in time for Live Aid. While bravely facing a recent AIDS diagnosis, Freddie leads the band in one of the greatest performances in the history of rock music. Queen cements a legacy that continues to inspire outsiders, dreamers and music lovers to this day.', 8.3, 0, 0, 0, 'https://www.youtube.com/embed/6S9c5nnDd_s?rel=0&wmode=transparent&border=0&autoplay=1&iv_load_policy=3', 'https://img.yts.am/assets/images/movies/bohemian_rhapsody_2018/medium-cover.jpg', 'https://img.yts.am/assets/images/movies/bohemian_rhapsody_2018/large-screenshot2.jpg', 'https://img.yts.am/assets/images/movies/bohemian_rhapsody_2018/large-screenshot3.jpg', 0, 0, 0, 'https://rarbgproxied.org/download.php?id=dp7k9b5&f=Bohemian.Rhapsody.2018.1080p.WEB-DL.DD5.1.H264-FGT-[rarbg.to].torrent', '2019-01-27 18:25:12', '0000-00-00 00:00:00'),
(7, 'All the Devil\'s Men', 2018, 'Jack Collins (Milo Gibson) is a war-junkie and former Navy SEAL turned bounty hunter who tracks down terrorists as part of the CIA\'s outsourcing to private companies. Battling personal demons, the powers that be think he is becoming a liability so his CIA handler Leigh (Sylvia Hoeks) offers him one last chance to keep fighting, sending him to London for a job. There, he finds himself part of a three-man team tasked with hunting down a disavowed CIA Operative called McKnight (Elliot Cowan) before he procures a WMD from Russian gangsters and disappears. Together, Collins, Brennan (William Fichtner) and Samuelson (Gbenga Akinnagbe) find themselves locked in urban tactical combat with a former colleague, Deighton (Joseph Millson), and his private army, hired by McKnight as protection. Both sides fight smart and as casualties and betrayal mounts on both sides, Collins refuses to be defeated as he battles his way to an explosive climax.', 5.1, 0, 0, 0, 'https://www.youtube.com/embed/Ez4LB6t_jYA?rel=0&wmode=transparent&border=0&autoplay=1&iv_load_policy=3', 'https://img.yts.am/assets/images/movies/all_the_devils_men_2018/medium-cover.jpg', 'https://img.yts.am/assets/images/movies/all_the_devils_men_2018/medium-screenshot2.jpg', 'https://img.yts.am/assets/images/movies/all_the_devils_men_2018/medium-screenshot3.jpg', 0, 0, 0, 'https://rarbgproxied.org/download.php?id=cy251vz&f=All.The.Devils.Men.2018.BRRip.XviD.AC3-XVID-[rarbg.to].torrent', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Days of Heaven', 1978, 'Bill and Abby, a young couple who to the outside world pretend to be brother and sister are living and working in Chicago at the beginning of the century. They want to escape the poverty and hard labor of the city and travel south. Together with the girl Linda (who acts as the narrator in the movie) they find employment on a farm in the Texas panhandle. When the harvest is over the young, rich and handsome farmer invites them to stay because he has fallen in love with Abby. When Bill and Abby discover that the farmer is seriously ill and has only got a year left to live they decide that Abby will accept his wedding proposal in order to make some benefit out of the situation. When the expected death fails to come, jealousy and impatience are slowly setting in and accidents become eventually inevitable.', 7.9, 0, 0, 0, 'https://www.youtube.com/embed/XVbg9xc7tGc?rel=0&wmode=transparent&border=0&autoplay=1&iv_load_policy=3', 'https://img.yts.am/assets/images/movies/days_of_heaven_1978/medium-cover.jpg', 'https://img.yts.am/assets/images/movies/days_of_heaven_1978/medium-screenshot2.jpg', 'https://img.yts.am/assets/images/movies/days_of_heaven_1978/medium-screenshot3.jpg', 1, 0, 1, 'https://rarbgproxied.org/download.php?id=3wb9xot&f=Days.Of.Heaven.1978.BRRip.XviD.MP3-XVID-[rarbg.to].torrent', '2018-01-15 18:25:12', '2019-01-27 23:26:09'),
(9, 'Ace Ventura: Pet Detective Jr.', 2009, 'The son of an eccentric detective steps into his father\'s shoes after his mother is wrongly arrested for stealing a baby panda.', 2.1, 0, 0, 0, 'https://www.youtube.com/embed/5Iv1xs0hl4w?rel=0&wmode=transparent&border=0&autoplay=1&iv_load_policy=3', 'https://img.yts.am/assets/images/movies/ace_ventura_pet_detective_jr_2009/medium-cover.jpg', 'https://img.yts.am/assets/images/movies/ace_ventura_pet_detective_jr_2009/medium-screenshot2.jpg', 'https://img.yts.am/assets/images/movies/ace_ventura_pet_detective_jr_2009/medium-screenshot3.jpg', 0, 0, 0, 'https://rarbgproxied.org/download.php?id=l2miv4d&f=Ace.Ventura.Jr.Pet.Detective.2009.WEBRip.x264-ION10-[rarbg.to].torrent', '2019-01-01 09:15:22', '0000-00-00 00:00:00'),
(10, 'The Vanishing', 2018, 'Formally known as KEEPERS, The Vanishing is Inspired by the Flannan Isle mystery. A small relief boat approaches the Isle, a tiny isolated island no bigger than a football pitch, 20 miles off a rugged coast. Its aim is to routinely replace the three lighthouse keepers, after 6 weeks alone manning the light. It nears the dock and none of the men greet them. The winch is broken. A call. Nothing. Experienced keepers Thomas, James and Donald have vanished. The lamps are clean and refilled; the table is laid for dinner. There is an upturned chair. Two sets of yellow oilskins are missing...The men were never found.', 5.8, 0, 0, 0, 'https://www.youtube.com/embed/xVez1uCdndc?rel=0&wmode=transparent&border=0&autoplay=1&iv_load_policy=3', 'https://img.yts.am/assets/images/movies/the_vanishing_2018/medium-cover.jpg', 'https://img.yts.am/assets/images/movies/the_vanishing_2018/medium-screenshot2.jpg', 'https://img.yts.am/assets/images/movies/the_vanishing_2018/medium-screenshot3.jpg', 0, 0, 0, 'https://rarbgproxied.org/download.php?id=hbydw5k&f=The.Vanishing.2018.BRRip.XviD.AC3-XVID-[rarbg.to].torrent', '2019-01-20 01:00:30', '0000-00-00 00:00:00'),
(11, 'Abandoned', 2015, 'In 1989 the trimaran Rose Noelle set sail from Picton, New Zealand, for Tonga with four men on board. After a freak wave turned the boat upside down, they drifted for 119 days before landing on Great Barrier Island.', 6.2, 0, 0, 0, 'https://www.youtube.com/embed/etP3e_oNF-U?rel=0&wmode=transparent&border=0&autoplay=1&iv_load_policy=3', 'https://img.yts.am/assets/images/movies/abandoned_2015/medium-cover.jpg', 'https://img.yts.am/assets/images/movies/abandoned_2015/medium-screenshot2.jpg', 'https://img.yts.am/assets/images/movies/abandoned_2015/medium-screenshot3.jpg', 0, 0, 0, 'https://rarbgproxied.org/download.php?id=vsy19a6&f=Abandoned.2015.BRRip.XviD.MP3-XVID-[rarbg.to].torrent', '2019-01-19 20:32:10', '0000-00-00 00:00:00'),
(12, 'Lady in the Water', 2006, 'Cleveland Heep, a stuttering apartment superintendent, encounters a girl named Story swimming in the complex\'s pool. He soon learns that she comes from the Blue World, and has a message for mankind. Will he be able to help her complete her mission?', 5.6, 0, 0, 0, 'https://www.youtube.com/embed/cT8qbVVU4HI?rel=0&wmode=transparent&border=0&autoplay=1&iv_load_policy=3', 'https://img.yts.am/assets/images/movies/lady_in_the_water_2006/medium-cover.jpg', 'https://img.yts.am/assets/images/movies/lady_in_the_water_2006/medium-screenshot2.jpg', 'https://img.yts.am/assets/images/movies/lady_in_the_water_2006/medium-screenshot3.jpg', 0, 0, 0, 'https://rarbgproxied.org/download.php?id=3cl6dy9&f=Lady.In.The.Water.2006.720p.BluRay.H264.AAC-RARBG-[rarbg.to].torrent', '2019-01-15 18:25:12', '0000-00-00 00:00:00'),
(13, 'Shark Tale', 2004, 'The sea underworld is shaken up when the son of the shark mob boss is found dead and a young fish named Oscar is found at the scene. Being a bottom feeder, Oscar takes advantage of the situation and makes himself look like he killed the finned mobster. Oscar soon comes to realize that his claim may have serious consequences.', 6, 0, 0, 0, 'https://www.youtube.com/embed/mp2SbaK8dDg?rel=0&wmode=transparent&border=0&autoplay=1&iv_load_policy=3', 'https://img.yts.am/assets/images/movies/shark_tale_2004/medium-cover.jpg', 'https://img.yts.am/assets/images/movies/shark_tale_2004/medium-screenshot2.jpg', 'https://img.yts.am/assets/images/movies/shark_tale_2004/medium-screenshot3.jpg', 0, 0, 0, 'https://rarbgproxied.org/download.php?id=gt1j4os&f=Shark.Tale.2004.1080p.BluRay.H264.AAC-RARBG-[rarbg.to].torrent', '2019-01-26 20:25:12', '0000-00-00 00:00:00'),
(14, 'Under the Tree', 2017, 'Agnes throws Atli out and does not want him to see their daughter Ása anymore. He moves in with his parents, who are involved in a bitter dispute over their big and beautiful tree that casts a shadow on the neighbours\' deck. As Atli fights for the right to see his daughter, the dispute with the neighbours intensifies - property is damaged, pets mysteriously go missing, security cameras are being installed and there is a rumor that the neighbor was seen with a chainsaw.', 7, 0, 0, 0, 'https://www.youtube.com/embed/tU7KeDwJCAc?rel=0&wmode=transparent&border=0&autoplay=1&iv_load_policy=3', 'https://img.yts.am/assets/images/movies/under_the_tree_2017/medium-cover.jpg', 'https://img.yts.am/assets/images/movies/under_the_tree_2017/medium-screenshot2.jpg', 'https://img.yts.am/assets/images/movies/under_the_tree_2017/medium-screenshot3.jpg', 0, 0, 0, 'https://rarbgproxied.org/download.php?id=kmelu1f&f=Under.the.Tree.2017.LiMiTED.1080p.BluRay.x264-CADAVER-[rarbg.to].torrent', '2019-01-20 01:00:30', '0000-00-00 00:00:00'),
(15, 'Aliens: Zone of Silence', 2017, 'Four months ago, Morgan Taylor\'s brother, Hal, and his best friend went missing in a mysterious area of the Mexican desert known as Zona del Silencio. After receiving no help from authorities on either side of the border, Morgan heads south to uncover the truth about their disappearance, strapped with action cameras streaming footage to Hal\'s Marine Corps squadmate back in the United States. When her vehicle suddenly breaks down just outside the zone, Morgan must traverse the desert alone, enduring intense heat in the daytime and menacing coyotes at night. She eventually locates Hal\'s campsite and finds a kit filled with memory cards from his camera. The recordings reveal a series of strange noises, eerie lights in the sky, gravitational anomalies, and an extraterrestrial presence in a nearby mountain range. Convinced aliens were responsible for her brother\'s disappearance, Morgan must decide whether to flee with her life or attempt to expose the otherworldly beings once and for all.', 3.5, 0, 0, 0, 'https://www.youtube.com/embed/cU1AYVvMmRA?rel=0&wmode=transparent&border=0&autoplay=1&iv_load_policy=3', 'https://img.yts.am/assets/images/movies/aliens_zone_of_silence_2017/medium-cover.jpg', 'https://img.yts.am/assets/images/movies/aliens_zone_of_silence_2017/medium-screenshot2.jpg', 'https://img.yts.am/assets/images/movies/aliens_zone_of_silence_2017/medium-screenshot3.jpg', 0, 0, 0, 'https://rarbgproxied.org/download.php?id=j5y238p&f=Aliens.Zone.of.Silence.2017.WEBRip.x264-RARBG-[rarbg.to].torrent', '2019-01-26 09:00:30', '0000-00-00 00:00:00');

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
(4, 4, 4),
(5, 2, 1),
(6, 2, 8),
(7, 3, 3),
(8, 3, 4),
(9, 5, 1),
(10, 5, 8),
(11, 15, 13),
(12, 15, 14),
(13, 15, 2),
(14, 8, 4),
(15, 8, 7),
(16, 6, 3),
(17, 6, 4),
(18, 6, 6),
(19, 13, 15),
(20, 13, 16),
(21, 13, 10),
(22, 7, 1),
(23, 9, 15),
(24, 9, 17),
(25, 9, 10),
(26, 10, 4),
(27, 10, 14),
(28, 10, 8),
(29, 11, 15),
(30, 11, 4),
(31, 11, 8),
(32, 12, 4),
(33, 12, 11),
(34, 12, 14),
(35, 14, 17),
(36, 14, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `movies_comments`
--

CREATE TABLE `movies_comments` (
  `intid` int(11) NOT NULL,
  `movid` int(11) NOT NULL,
  `comid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `movies_comments`
--

INSERT INTO `movies_comments` (`intid`, `movid`, `comid`) VALUES
(1, 5, 1),
(2, 5, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comid`);

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
-- Indexes for table `movies_comments`
--
ALTER TABLE `movies_comments`
  ADD PRIMARY KEY (`intid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `movies_categories`
--
ALTER TABLE `movies_categories`
  MODIFY `intid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `movies_comments`
--
ALTER TABLE `movies_comments`
  MODIFY `intid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

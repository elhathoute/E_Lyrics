-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2023 at 11:04 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_lyrics`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `full_name`, `email`, `password`, `photo`) VALUES
(1, 'abdelazize\r\n', 'abdelaziz@gmail.com', 'azize@1998', 'face1.jpg'),
(2, 'saida', 'saida@gmail.com', 'saida123', 'face5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `full_name`) VALUES
(1, 'The Slim Shady EP (Slim Shady EP)'),
(2, 'Eminem is Back'),
(5, 'Coke Boys'),
(6, 'Jungle Rules'),
(7, 'Les Bourgeois'),
(8, 'Ne me quitte pas'),
(9, 'J\'arrive'),
(10, 'L\'Homme de la Mancha'),
(11, 'À la vie, à la mort !'),
(12, 'Gang'),
(13, 'High'),
(14, 'Tha Last Meal'),
(15, 'Je vis\r\n'),
(16, 'Mes hommages\r\n'),
(17, 'Pack de 6');

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id`, `full_name`, `photo`) VALUES
(2, 'eminem', 'eminem.jpg'),
(3, 'french montana', 'french-montana.jpg'),
(4, 'JACK BREL', 'Jacques_Brel_1955.jpg'),
(5, 'Johnny Hallydayµ', 'Johnny.JPG'),
(6, 'snoop Dog', 'snoopDog.jpg'),
(7, 'Morice Benin\r\n', 'Morice Benin.jpg'),
(8, 'Nilda Fernández', 'Nilda Fernández.jpg'),
(9, 'Alonzo', 'Alonzo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` int(11) NOT NULL,
  `date_created` date NOT NULL,
  `titre` varchar(255) NOT NULL,
  `parole_ar` varchar(255) NOT NULL,
  `parole_fr` varchar(255) NOT NULL,
  `parole_eng` varchar(255) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_album` int(11) DEFAULT NULL,
  `id_artist` int(11) NOT NULL,
  `id_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `date_created`, `titre`, `parole_ar`, `parole_fr`, `parole_eng`, `id_admin`, `id_album`, `id_artist`, `id_type`) VALUES
(25, '1997-12-10', 'No Ones Iller', 'أجعل مغني الراب يريدون أن يصبحوا مغنينأظل المعاول تلعق أصابعهمجلب المنافسة ومواجهة هذا نينا لديك فريقك بأكمله يقوم بعمل مذكرات استدعاءاللعنة لا ، لم تر طاقما عبقرياقتل الشخص بيننا ، احزم مشعات الخاص بك.', 'Je donne envie aux rappeurs de devenir chanteurs\r\nJe garde les houes léchant leurs doigts\r\nApportez de la concurrence et affrontez cette Nina\r\nVous avez toute votre équipe faisant des citations à comparaître\r\nBon sang non, vous n\'avez pas vu un génie de l', 'I make rappers want to become singersI keep hoes licking their fingersBring competition and face this NinaYou have your whole team making subpoenasDamn no, you didn\'t see a crew geniusKill the one between us, pack your radiators.', 1, 1, 2, 2),
(26, '1998-01-11', 'Low Down, Dirty', 'أنا منخفض وقذر ، لكنني لا أخجلأنا منخفض وأنا متستر! وإذا سمعت رجلا يتحدث مثلي يضربهواسأله من أين يحصل على موسيقى الراب اللعينةأنا منخفض وقذر ، لكنني لا أخجل\"أنا منخفض وأنا متستر! وإذا سمعت رجلا يتحدث مثلي يضربه ، واسأله من أين يحصل على موسيقى الراب اللعين', 'Je suis bas et sale, mais je n\'ai pas honte\r\nJe suis bas et je suis sournois !\r\nEt si tu entends un homme qui parle comme moi le frapper\r\nEt demandez-lui d\'où il tire ses putains de raps\r\nJe suis bas et sale, mais je n\'ai pas honte\"\r\nJe suis bas et je sui', 'I\'m low and dirty, but I\'m not ashamedI\'m low and I\'m sneaky! And if you hear a man who talks like me hit himAnd ask him where he gets his fucking raps fromI\'m low and dirty, but I\'m not ashamed\"I\'m low and I\'m sneaky! And if you hear a man who talks like', 1, 1, 2, 2),
(27, '2023-01-06', 'dabord', 'حسناً . وداعاً', 'salut', 'hi', 1, NULL, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `full_name`) VALUES
(1, 'POP'),
(2, 'RAP'),
(3, 'RAY'),
(5, 'CLASSIC'),
(6, 'JAZZ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_album` (`id_album`),
  ADD KEY `id_artist` (`id_artist`),
  ADD KEY `id_type` (`id_type`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `songs`
--
ALTER TABLE `songs`
  ADD CONSTRAINT `songs_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `songs_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `songs_ibfk_3` FOREIGN KEY (`id_album`) REFERENCES `albums` (`id`),
  ADD CONSTRAINT `songs_ibfk_4` FOREIGN KEY (`id_artist`) REFERENCES `artists` (`id`),
  ADD CONSTRAINT `songs_ibfk_5` FOREIGN KEY (`id_type`) REFERENCES `types` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

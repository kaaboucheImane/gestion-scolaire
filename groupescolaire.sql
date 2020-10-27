-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 27 oct. 2020 à 15:55
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `groupescolaire`
--

-- --------------------------------------------------------

--
-- Structure de la table `activiteimage`
--

DROP TABLE IF EXISTS `activiteimage`;
CREATE TABLE IF NOT EXISTS `activiteimage` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `image` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `titre` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `activiteimage`
--

INSERT INTO `activiteimage` (`id`, `image`, `date`, `titre`) VALUES
(9, '31384143_198710534073104_86622506743496704_n.jpg', '2018-04-27', ''),
(10, '31395026_198710460739778_4735280853490335744_n.jpg', '2018-04-27', 'ÙƒÙŠÙ Ø§ØµÙ†Ø¹ Ø­Ù„ÙˆØ© Ø¬Ù…ÙŠÙ„Ø© ÙˆÙ„Ø°ÙŠØ°Ø©'),
(11, '31395884_198710547406436_2158874386600296448_n.jpg', '2018-04-27', 'ÙƒÙŠÙ Ø§ØµÙ†Ø¹ Ø­Ù„ÙˆØ© Ø¬Ù…ÙŠÙ„Ø© ÙˆÙ„Ø°ÙŠØ°Ø©'),
(12, '31437447_198710467406444_6726953859769434112_n.jpg', '2018-04-27', 'ÙƒÙŠÙ Ø§ØµÙ†Ø¹ Ø­Ù„ÙˆØ© Ø¬Ù…ÙŠÙ„Ø© ÙˆÙ„Ø°ÙŠØ°Ø©'),
(13, '31478699_198710554073102_4796946653896507392_n.jpg', '2018-04-27', 'ÙƒÙŠÙ Ø§ØµÙ†Ø¹ Ø­Ù„ÙˆØ© Ø¬Ù…ÙŠÙ„Ø© ÙˆÙ„Ø°ÙŠØ°Ø©'),
(14, 'c4.jpg', '2018-04-30', 'Ù…Ø³Ø§Ø¨Ù‚Ø© Ø§Ù„Ø´Ø·Ø±Ù†Ø¬'),
(15, 'c5.jpg', '2018-04-30', 'Ù…Ø³Ø§Ø¨Ù‚Ø© Ø§Ù„Ø´Ø·Ø±Ù†Ø¬'),
(17, 'c7.jpg', '2018-04-30', 'Ù…Ø³Ø§Ø¨Ù‚Ø© Ø§Ù„Ø´Ø·Ø±Ù†Ø¬'),
(18, 'c6.jpg', '2018-04-30', 'Ù…Ø³Ø§Ø¨Ù‚Ø© Ø§Ù„Ø´Ø·Ø±Ù†Ø¬'),
(20, 'r10.jpg', '2018-05-16', 'ÙˆØ±Ø´Ø© ØµÙ†Ø¹ \" Ø§Ù„Ø´Ø¨Ø§ÙƒÙŠØ© \"'),
(21, 'r1.jpg', '2018-05-16', 'ÙˆØ±Ø´Ø© ØµÙ†Ø¹ \" Ø§Ù„Ø´Ø¨Ø§ÙƒÙŠØ© \"'),
(22, 'r2.jpg', '2018-05-16', 'ÙˆØ±Ø´Ø© ØµÙ†Ø¹ \" Ø§Ù„Ø´Ø¨Ø§ÙƒÙŠØ© \"'),
(23, 'r8.jpg', '2018-05-16', 'ÙˆØ±Ø´Ø© ØµÙ†Ø¹ \" Ø§Ù„Ø´Ø¨Ø§ÙƒÙŠØ© \"'),
(24, 'r6.jpg', '2018-05-16', 'ÙˆØ±Ø´Ø© ØµÙ†Ø¹ \" Ø§Ù„Ø´Ø¨Ø§ÙƒÙŠØ© \"'),
(25, 'r9.jpg', '2018-05-16', 'ÙˆØ±Ø´Ø© ØµÙ†Ø¹ \" Ø§Ù„Ø´Ø¨Ø§ÙƒÙŠØ© \"'),
(26, 'r13.jpg', '2018-05-16', 'ÙˆØ±Ø´Ø© ØµÙ†Ø¹ \" Ø§Ù„Ø´Ø¨Ø§ÙƒÙŠØ© \"');

-- --------------------------------------------------------

--
-- Structure de la table `activitetab`
--

DROP TABLE IF EXISTS `activitetab`;
CREATE TABLE IF NOT EXISTS `activitetab` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `image` varchar(600) NOT NULL,
  `titre` varchar(500) NOT NULL,
  `texte` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `activitetab`
--

INSERT INTO `activitetab` (`id`, `image`, `titre`, `texte`, `date`) VALUES
(3, '31381111_198710454073112_7642060478281154560_n.jpg', 'ÙƒÙŠÙ Ø§ØµÙ†Ø¹ Ø­Ù„ÙˆØ© Ø¬Ù…ÙŠÙ„Ø© ÙˆÙ„Ø°ÙŠØ°Ø©', 'ÙƒÙŠÙ Ø§ØµÙ†Ø¹ Ø­Ù„ÙˆØ© Ø¬Ù…ÙŠÙ„Ø© ÙˆÙ„Ø°ÙŠØ°Ø©ðŸ˜‹ðŸ˜‹ðŸŽ‚ Ø¥Ø¹Ø¯Ø§Ø¯ Ø¨Ø±Ø§Ø¹Ù… Ø§ÙŠØ© Ø§Ù„Ù…Ø¯ÙŠÙ†Ø© ÙˆØ¥Ø´Ø±Ø§Ù Ø§Ù„Ù…Ø±Ø¨ÙŠØ© ÙØ¯ÙˆÙ‰', '2018-04-27'),
(4, 'v2.png', 'Ù…Ø³Ø±Ø­ÙŠØ© Ø­ÙƒØ§ÙŠØ© Ø£Ù…Ø©', 'Ù…Ø³Ø±Ø­ÙŠØ© Ø­ÙƒØ§ÙŠØ© Ø£Ù…Ø© Ù…Ù† ØªÙ‚Ø¯ÙŠÙ… ØªÙ„Ø§Ù…ÙŠØ° Ùˆ ØªÙ„Ù…ÙŠØ°Ø§Øª Ø§Ù„Ø«Ø§Ù„Ø«Ø© Ø¥Ø¹Ø¯Ø§Ø¯ÙŠ ØŒ ÙˆÙ…Ù† ØªØ£Ø·ÙŠØ± Ùˆ Ø¥Ø®Ø±Ø§Ø¬ Ø§Ù„Ø£Ø³ØªØ§Ø°Ø© Ù†Ø§Ø¯ÙŠØ© Ø§Ù„Ù‚Ø¶Ø§ÙˆÙŠ ', '2018-05-03'),
(7, 'c1.jpg', 'Ù…Ø³Ø§Ø¨Ù‚Ø© Ø§Ù„Ø´Ø·Ø±Ù†Ø¬', 'Ù…Ø³Ø§Ø¨Ù‚Ø© Ø§Ù„Ø´Ø·Ø±Ù†Ø¬ 21 Ø¨ÙŠÙ† Ù…Ø¤Ø³Ø³Ø§Øª Ø§Ù„ØªØ¹Ù„ÙŠÙ… Ø§Ù„Ø«Ø§Ù†ÙˆÙŠ Ø¨ØªØ·ÙˆØ§Ù†', '2018-04-30'),
(8, 'r14.jpg', 'ÙˆØ±Ø´Ø© ØµÙ†Ø¹ \" Ø§Ù„Ø´Ø¨Ø§ÙƒÙŠØ© \"', '\r\nÙˆØ±Ø´Ø© ØµÙ†Ø¹ \" Ø§Ù„Ø´Ø¨Ø§ÙƒÙŠØ© \" Ù…Ù† Ø§Ø¹Ø¯Ø§Ø¯ Ø£Ø³Ø§ØªØ°Ø© Ùˆ ØªÙ„Ø§Ù…ÙŠØ° Ø§Ù„Ù…Ø³ØªÙˆÙ‰ Ø§Ù„Ø§ÙˆÙ„ Ø§Ù„Ø§Ø¨ØªØ¯Ø§Ø¦ÙŠ Ùˆ Ø°Ù„Ùƒ Ø¨Ù…Ù†Ø§Ø³Ø¨Ø© Ø­Ù„ÙˆÙ„ Ø´Ù‡Ø± Ø±Ù…Ø¶Ø§Ù† Ø§Ù„Ø£Ø¨Ø±Ùƒ Ø£Ø¯Ø®Ù„Ù‡ Ø§Ù„Ù„Ù‡ Ø¹Ù„ÙŠÙ†Ø§ ÙˆØ¹Ù„ÙŠÙƒÙ… Ø¨Ø§Ù„ÙŠÙ…Ù† Ùˆ Ø§Ù„Ø¨Ø±ÙƒØ© .', '2018-05-16');

-- --------------------------------------------------------

--
-- Structure de la table `activitevideo`
--

DROP TABLE IF EXISTS `activitevideo`;
CREATE TABLE IF NOT EXISTS `activitevideo` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `code` text NOT NULL,
  `date` date NOT NULL,
  `titre` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `activitevideo`
--

INSERT INTO `activitevideo` (`id`, `code`, `date`, `titre`) VALUES
(6, '200307450580079', '2018-05-03', 'Ù…Ø³Ø±Ø­ÙŠØ© Ø­ÙƒØ§ÙŠØ© Ø£Ù…Ø© '),
(9, '199474263996731', '2018-04-30', 'Ù…Ø³Ø§Ø¨Ù‚Ø© Ø§Ù„Ø´Ø·Ø±Ù†Ø¬ 21 Ø¨ÙŠÙ† Ù…Ø¤Ø³Ø³Ø§Øª Ø§Ù„ØªØ¹Ù„ÙŠÙ… Ø§Ù„Ø«Ø§Ù†ÙˆÙŠ Ø¨ØªØ·ÙˆØ§Ù†');

-- --------------------------------------------------------

--
-- Structure de la table `actualite`
--

DROP TABLE IF EXISTS `actualite`;
CREATE TABLE IF NOT EXISTS `actualite` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `image` varchar(600) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `texte` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `actualite`
--

INSERT INTO `actualite` (`id`, `image`, `titre`, `texte`, `date`) VALUES
(8, '31958493_201464633797694_331644476810330112_n.jpg', 'ANAPEC', 'Ø¬Ø§Ù†Ø¨ Ù…Ù† Ù…Ø¯Ø§Ø®Ù„Ø© Ø§Ù„Ù…Ø¯ÙŠØ± Ø§Ù„Ø¹Ø§Ù… Ù„Ù…Ø¤Ø³Ø³Ø© Ø§ÙŠØ© Ø§Ù„Ù…Ø¯ÙŠÙ†Ø© Ø®Ù„Ø§Ù„ ÙØ¹Ø§Ù„ÙŠØ§Øª Ø£Ø³Ø¨ÙˆØ¹ Ø§Ù„Ø·Ø§Ù„Ø¨ Ø§Ù„Ø°ÙŠ ØªØ­ØªØ¶Ù†Ù‡ ÙƒÙ„ÙŠØ© Ø§Ù„Ø¢Ø¯Ø§Ø¨ ÙˆØ§Ù„Ø¹Ù„ÙˆÙ… Ø§Ù„Ø§Ù†Ø³Ø§Ù†ÙŠØ© Ø­ÙˆÙ„ Ù…ÙˆØ¶ÙˆØ¹ \"Ø§Ù„Ù…Ù‡Ø§Ø±Ø§Øª Ø§Ù„Ø´Ø®ØµÙŠØ© ÙƒÙØ§Ø¡Ø§Øª Ø£Ø³Ø§Ø³ÙŠØ© Ù„ØªØ·ÙˆÙŠØ± Ù‚Ø§Ø¨Ù„ÙŠØ© Ø§Ù„ØªØ´ØºÙŠÙ„\"ÙˆÙ…Ù† Ø¬Ù‡Ø© Ø§Ø®Ø±Ù‰ ØªÙ… Ø¹Ù‚Ø¯ Ù„Ù‚Ø§Ø¡ Ù…Ø¹ Ø¹Ù…ÙŠØ¯ ÙƒÙ„ÙŠØ© Ø§Ù„Ø£Ø¯Ø§Ø¨ ÙˆØ§Ù„Ø¹Ù„ÙˆÙ… Ø§Ù„Ø§Ù†Ø³Ø§Ù†ÙŠØ© ØŒØ§Ù„Ø¯ÙƒØªÙˆØ± Ù…Ø­Ù…Ø¯ Ø³Ø¹Ø¯ Ø§Ù„Ø²Ù…ÙˆØ±ÙŠ Ùˆ Ù…Ø¯ÙŠØ± Ø§Ù„ÙˆÙƒØ§Ù„Ø© Ø§Ù„ÙˆØ·Ù†ÙŠØ© Ù„Ø§Ù†Ø¹Ø§Ø´ Ø§Ù„ØªØ´ØºÙŠÙ„ ÙˆØ§Ù„ÙƒÙØ§Ø¡Ø§Øª (ANAPEC) Ø§Ù„Ø³ÙŠØ¯ ØªÙˆÙÙŠÙ‚ Ø¨Ù† Ø­Ù„ÙŠÙ…Ø©ØŒÙ…Ù† Ø§Ø¬Ù„ Ø§Ù„ØªØ­Ø¶ÙŠØ± Ù„Ø¥Ø¨Ø±Ø§Ù… ÙˆØ¹Ù‚Ø¯ Ø´Ø±ÙƒØ§ØªØŒÙˆØ°Ù„Ùƒ ÙÙŠ Ø¥Ø·Ø§Ø± Ø§Ù†ÙØªØ§Ø­ Ù…Ø¤Ø³Ø³Ø© Ø§ÙŠØ© Ø§Ù„Ù…Ø¯ÙŠÙ†Ø© Ø¹Ù„Ù‰ Ù…Ø­ÙŠØ·Ù‡Ø§ Ø§Ù„Ø®Ø§Ø±Ø¬ÙŠ.', '2018-05-07'),
(10, '31408349_198714577406033_7479736376921948160_n.jpg', ' Ø§Ù„Ù„Ù‚Ø§Ø¡ Ø§Ù„ØªÙˆØ§ØµÙ„ÙŠ Ù…Ø¹ Ø§Ù…Ù‡Ø§Øª Ø§Ø¨Ø§Ø¡ ÙˆØ§ÙˆÙ„ÙŠØ§Ø¡ Ø§Ù…ÙˆØ± ØªÙ„Ø§Ù…Ø°ØªÙ†Ø§', 'Ø¬Ø§Ù†Ø¨ Ù…Ù† Ø§Ù„Ù„Ù‚Ø§Ø¡ Ø§Ù„ØªÙˆØ§ØµÙ„ÙŠ Ù…Ø¹ Ø§Ù…Ù‡Ø§Øª Ø§Ø¨Ø§Ø¡ ÙˆØ§ÙˆÙ„ÙŠØ§Ø¡ Ø§Ù…ÙˆØ± ØªÙ„Ø§Ù…Ø°ØªÙ†Ø§ Ø®Ù„Ø§Ù„ Ù‡Ø°Ø§ Ø§Ù„Ø§Ø³Ø¨ÙˆØ¹ØŒØ´ÙƒØ±Ù‹Ø§ Ø¹Ù„Ù‰ Ø­Ø¶ÙˆØ±ÙƒÙ… ', '2018-04-27'),
(13, 'pr4.jpg', 'Ø§Ø¨ØªÙƒØ§Ø± Ø¬Ø¯ÙŠØ¯  Ù…Ø¹ Ø§Ù„ØªÙ„Ù…ÙŠØ° Ø±ÙŠØ§Ø¶', 'Ø§Ø¨ØªÙƒØ§Ø± Ø¬Ø¯ÙŠØ¯ Ù‡Ø°Ù‡ Ø§Ù„Ù…Ø±Ø© Ù…Ø¹ Ø§Ù„ØªÙ„Ù…ÙŠØ° Ø±ÙŠØ§Ø¶ØŒØ²Ø±Ø¹ Ø§Ù„Ø«Ù‚Ø© ÙÙŠ Ù†ÙØ³ÙŠØ© Ø§Ù„ØªÙ„Ù…ÙŠØ°ØŒØ£ÙƒÙŠØ¯ Ø§Ù†Ù‡ Ø³ÙŠØ¨Ø¯Ø¹ ÙˆÙ„Ùˆ Ø¨ÙÙƒØ±Ø© Ø¨Ø³ÙŠØ·Ø© ØŒØ´ÙƒØ±Ù‹Ø§ Ø£Ø³Ø±Ø© Ø±ÙŠØ§Ø¶ Ø¹Ù„Ù‰ Ù‡Ø°Ø§ Ø§Ù„Ø¹Ù…Ù„ Ø§Ù„Ø¬Ù…ÙŠÙ„ðŸ˜ŠÙˆØ§Ù„Ø´ÙƒØ± ÙƒØ°Ù„Ùƒ Ù„Ù„Ø£Ø³ØªØ§Ø°Ø© Ø§Ù…ÙŠÙ†Ø© Ø¹Ù„Ù‰ Ù‡Ø°Ø§ Ø§Ù„ØªØ´Ø¬ÙŠØ¹ Ù„ØªÙ„Ø§Ù…Ø°ØªÙ‡Ø§', '2018-05-15');

-- --------------------------------------------------------

--
-- Structure de la table `actualiteimage`
--

DROP TABLE IF EXISTS `actualiteimage`;
CREATE TABLE IF NOT EXISTS `actualiteimage` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `image` varchar(600) NOT NULL,
  `titre` varchar(600) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `actualiteimage`
--

INSERT INTO `actualiteimage` (`id`, `image`, `titre`, `date`) VALUES
(1, 'anapec.jpg', 'ANAPEC', '2018-05-07'),
(2, 'anapec1.jpg', 'ANAPEC', '2018-05-07'),
(3, 'anpec.jpg', 'ANAPEC', '2018-05-07'),
(6, '31369684_198714630739361_6934711675668922368_n.jpg', ' Ø§Ù„Ù„Ù‚Ø§Ø¡ Ø§Ù„ØªÙˆØ§ØµÙ„ÙŠ Ù…Ø¹ Ø§Ù…Ù‡Ø§Øª Ø§Ø¨Ø§Ø¡ ÙˆØ§ÙˆÙ„ÙŠØ§Ø¡ Ø§Ù…ÙˆØ± ØªÙ„Ø§Ù…Ø°ØªÙ†Ø§', '2018-04-27'),
(7, '31357551_198714757406015_7086646229664268288_n.jpg', ' Ø§Ù„Ù„Ù‚Ø§Ø¡ Ø§Ù„ØªÙˆØ§ØµÙ„ÙŠ Ù…Ø¹ Ø§Ù…Ù‡Ø§Øª Ø§Ø¨Ø§Ø¡ ÙˆØ§ÙˆÙ„ÙŠØ§Ø¡ Ø§Ù…ÙˆØ± ØªÙ„Ø§Ù…Ø°ØªÙ†Ø§', '2018-04-27'),
(8, '31369653_198714694072688_1690462521699336192_n.jpg', ' Ø§Ù„Ù„Ù‚Ø§Ø¡ Ø§Ù„ØªÙˆØ§ØµÙ„ÙŠ Ù…Ø¹ Ø§Ù…Ù‡Ø§Øª Ø§Ø¨Ø§Ø¡ ÙˆØ§ÙˆÙ„ÙŠØ§Ø¡ Ø§Ù…ÙˆØ± ØªÙ„Ø§Ù…Ø°ØªÙ†Ø§', '2018-04-27'),
(9, '31395667_198714684072689_5930901235031867392_n.jpg', ' Ø§Ù„Ù„Ù‚Ø§Ø¡ Ø§Ù„ØªÙˆØ§ØµÙ„ÙŠ Ù…Ø¹ Ø§Ù…Ù‡Ø§Øª Ø§Ø¨Ø§Ø¡ ÙˆØ§ÙˆÙ„ÙŠØ§Ø¡ Ø§Ù…ÙˆØ± ØªÙ„Ø§Ù…Ø°ØªÙ†Ø§', '2018-04-27'),
(10, 'ghg.jpg', ' Ø§Ù„Ù„Ù‚Ø§Ø¡ Ø§Ù„ØªÙˆØ§ØµÙ„ÙŠ Ù…Ø¹ Ø§Ù…Ù‡Ø§Øª Ø§Ø¨Ø§Ø¡ ÙˆØ§ÙˆÙ„ÙŠØ§Ø¡ Ø§Ù…ÙˆØ± ØªÙ„Ø§Ù…Ø°ØªÙ†Ø§', '2018-04-27'),
(11, '31416980_198714604072697_6410970246764560384_n.jpg', ' Ø§Ù„Ù„Ù‚Ø§Ø¡ Ø§Ù„ØªÙˆØ§ØµÙ„ÙŠ Ù…Ø¹ Ø§Ù…Ù‡Ø§Øª Ø§Ø¨Ø§Ø¡ ÙˆØ§ÙˆÙ„ÙŠØ§Ø¡ Ø§Ù…ÙˆØ± ØªÙ„Ø§Ù…Ø°ØªÙ†Ø§', '2018-04-27'),
(12, 'pr1.jpg', 'Ø§Ø¨ØªÙƒØ§Ø± Ø¬Ø¯ÙŠØ¯ Ù‡Ø°Ù‡ Ø§Ù„Ù…Ø±Ø© Ù…Ø¹ Ø§Ù„ØªÙ„Ù…ÙŠØ° Ø±ÙŠØ§Ø¶', '2018-05-15');

-- --------------------------------------------------------

--
-- Structure de la table `agenda`
--

DROP TABLE IF EXISTS `agenda`;
CREATE TABLE IF NOT EXISTS `agenda` (
  `time2` text NOT NULL,
  `titre` text NOT NULL,
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `time` text NOT NULL,
  `texte` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `agenda`
--

INSERT INTO `agenda` (`time2`, `titre`, `id`, `date`, `time`, `texte`) VALUES
('15:30h', 'JournÃ©e jeux pour tous!', 8, '2018-05-31', '9:00h', 'Venez vous amuser, en famille, entre amis...');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `mail` text NOT NULL,
  `phone` varchar(100) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `emploidutemps`
--

DROP TABLE IF EXISTS `emploidutemps`;
CREATE TABLE IF NOT EXISTS `emploidutemps` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `pdf` varchar(600) NOT NULL,
  `annv` varchar(100) NOT NULL,
  `filiere` varchar(100) NOT NULL,
  `sm` varchar(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `emploidutemps`
--

INSERT INTO `emploidutemps` (`id`, `pdf`, `annv`, `filiere`, `sm`, `date`) VALUES
(6, '1-Cours_java_Introduction.pdf', 'Maternelle', 'Sciences expÃ©rimentales', '1Ã©re', '2018-06-02');

-- --------------------------------------------------------

--
-- Structure de la table `enseignants`
--

DROP TABLE IF EXISTS `enseignants`;
CREATE TABLE IF NOT EXISTS `enseignants` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `niveau` varchar(100) NOT NULL,
  `annee` varchar(100) NOT NULL,
  `profde` varchar(100) NOT NULL,
  `image` varchar(600) NOT NULL,
  `gmail` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `enseignants`
--

INSERT INTO `enseignants` (`id`, `nom`, `prenom`, `niveau`, `annee`, `profde`, `image`, `gmail`) VALUES
(3, 'kaabouche', 'imane', 'Maternelle', '1Ã©re', 'informatique', '17952858_1140017882811657_1432085019571444899_n.jpg', 'ifojf'),
(15, 'dlimi', 'hajar', 'Maternelle', '1Ã©re', 'informatique', '17991081_1135991156547663_7003543695349206052_n.jpg', 'dlimi@gmail.com'),
(16, 'bakhta', 'ikrame', 'Maternelle', '3Ã©me', 'math', 'giphy (23).gif', 'ikram@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `examen`
--

DROP TABLE IF EXISTS `examen`;
CREATE TABLE IF NOT EXISTS `examen` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `pdf` varchar(600) NOT NULL,
  `niveau` varchar(100) NOT NULL,
  `filiere` varchar(100) NOT NULL,
  `semestre` varchar(100) NOT NULL,
  `anneesc` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `examen`
--

INSERT INTO `examen` (`id`, `pdf`, `niveau`, `filiere`, `semestre`, `anneesc`, `date`) VALUES
(10, '1-Cours_java_Introduction.pdf', 'Maternelle', 'sciences Ã©conomiques', 'S1', '1Ã©re', '2018-06-01');

-- --------------------------------------------------------

--
-- Structure de la table `inscri`
--

DROP TABLE IF EXISTS `inscri`;
CREATE TABLE IF NOT EXISTS `inscri` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `mail` text NOT NULL,
  `phone` text NOT NULL,
  `option` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `inscri`
--

INSERT INTO `inscri` (`id`, `fullname`, `mail`, `phone`, `option`) VALUES
(2, 'Imane kaabouche', 'imanekaabouche1998@gmail.com', '0674845769', 'LycÃ©e');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

DROP TABLE IF EXISTS `inscription`;
CREATE TABLE IF NOT EXISTS `inscription` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `pdf` varchar(100) NOT NULL,
  `annv` varchar(100) NOT NULL,
  `filiere` varchar(100) NOT NULL,
  `sm` varchar(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `logparent`
--

DROP TABLE IF EXISTS `logparent`;
CREATE TABLE IF NOT EXISTS `logparent` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `mail` text NOT NULL,
  `phone` text NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `logparent`
--

INSERT INTO `logparent` (`id`, `name`, `mail`, `phone`, `message`) VALUES
(2, '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `pdf` varchar(600) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `menu`
--

INSERT INTO `menu` (`id`, `pdf`, `date`) VALUES
(4, '1-Cours_java_Introduction.pdf', '2018-05-03');

-- --------------------------------------------------------

--
-- Structure de la table `pieceafournir`
--

DROP TABLE IF EXISTS `pieceafournir`;
CREATE TABLE IF NOT EXISTS `pieceafournir` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `pdf` varchar(500) NOT NULL,
  `annv` varchar(100) NOT NULL,
  `filiere` varchar(100) NOT NULL,
  `sm` varchar(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pieceafournir`
--

INSERT INTO `pieceafournir` (`id`, `pdf`, `annv`, `filiere`, `sm`, `date`) VALUES
(6, '1-Cours_java_Introduction.pdf', 'Maternelle', 'Sciences expÃ©rimentales', '1Ã©re', '2018-06-03');

-- --------------------------------------------------------

--
-- Structure de la table `regle`
--

DROP TABLE IF EXISTS `regle`;
CREATE TABLE IF NOT EXISTS `regle` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `pdf` varchar(600) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `regle`
--

INSERT INTO `regle` (`id`, `pdf`, `date`) VALUES
(1, '1-Cours_java_Introduction.pdf', '2018-05-05');

-- --------------------------------------------------------

--
-- Structure de la table `rentreescolaire`
--

DROP TABLE IF EXISTS `rentreescolaire`;
CREATE TABLE IF NOT EXISTS `rentreescolaire` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `jr1` varchar(100) NOT NULL,
  `jr2` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time1` varchar(5) NOT NULL,
  `time2` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `rentreescolaire`
--

INSERT INTO `rentreescolaire` (`id`, `jr1`, `jr2`, `date`, `time1`, `time2`) VALUES
(2, 'Vendredi', 'Lundi', '2018-04-28', '9:00', '16:30');

-- --------------------------------------------------------

--
-- Structure de la table `responsable`
--

DROP TABLE IF EXISTS `responsable`;
CREATE TABLE IF NOT EXISTS `responsable` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `responsable`
--

INSERT INTO `responsable` (`id`, `username`, `password`) VALUES
(1, 'respo', '15987');

-- --------------------------------------------------------

--
-- Structure de la table `tabe1`
--

DROP TABLE IF EXISTS `tabe1`;
CREATE TABLE IF NOT EXISTS `tabe1` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `image` varchar(200) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tabe1`
--

INSERT INTO `tabe1` (`id`, `image`, `date`) VALUES
(104, 'PC - get_away_from_my_computer-wallpaper-1366x768.jpg', '2018-05-12');

-- --------------------------------------------------------

--
-- Structure de la table `tabe2`
--

DROP TABLE IF EXISTS `tabe2`;
CREATE TABLE IF NOT EXISTS `tabe2` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `fichier` varchar(600) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tabe2`
--

INSERT INTO `tabe2` (`id`, `date`, `fichier`) VALUES
(13, '2018-04-01', '1-Cours_java_Introduction.pdf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

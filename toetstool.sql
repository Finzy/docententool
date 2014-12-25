-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Genereertijd: 23 dec 2014 om 22:11
-- Serverversie: 5.6.11
-- PHP-versie: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `toetstool`
--
CREATE DATABASE IF NOT EXISTS `toetstool` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `toetstool`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `codes`
--

CREATE TABLE IF NOT EXISTS `codes` (
  `Formpin` varchar(8) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `date` varchar(24) NOT NULL,
  `questions` text NOT NULL,
  PRIMARY KEY (`Formpin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `codes`
--

INSERT INTO `codes` (`Formpin`, `date`, `questions`) VALUES
('5HkWCl', '1419332922', ''),
('5QzM0p', '1418722248', 'Wat is jouw favorieten broodje'),
('aVaLEW', '1418722370', ''),
('C3PrSj', '1418765376', 'hoi'),
('dLa07U', '1419972831', 'hoe gaat het'),
('e0Rlx5', '1419973013', 'zoooowww'),
('FjSPtq', '1418722362', 'Wat is voor jouw het balangrijkst'),
('hDAXsy', '1418719799', 'Wat is jouw favorieten broodje'),
('nEH3A4', '1418680389', 'Wat is voor jouw het balangrijkst'),
('NhFjfC', '1418766472', ''),
('nk3Pmw', '1418680558', 'Wat is voor jouw het balangrijkst'),
('QUMNpl', '1418678897', 'Wat is jouw favorieten broodje'),
('V9EzES', '1418765447', 'hoi'),
('vQAQY2', '1418681039', 'Wat is voor jouw het balangrijkst'),
('WbrccQ', '1418680994', 'Wat is jouw favorieten broodje');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `email`
--

CREATE TABLE IF NOT EXISTS `email` (
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Gegevens worden uitgevoerd voor tabel `users`
--

INSERT INTO `users` (`id`, `Username`, `password`, `info`) VALUES
(1, 'admin', '12345', 'het profiel van admin'),
(2, 'perry', 'perry', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `vragen`
--

CREATE TABLE IF NOT EXISTS `vragen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vraag` varchar(255) NOT NULL,
  `currentStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Gegevens worden uitgevoerd voor tabel `vragen`
--

INSERT INTO `vragen` (`id`, `vraag`, `currentStamp`) VALUES
(3, 'hallo', '2014-12-09 15:38:59'),
(4, 'test 2', '2014-12-09 15:50:20'),
(5, 'test 3', '2014-12-09 15:50:25'),
(6, 'nais', '2014-12-09 15:50:28'),
(7, 'nais', '2014-12-09 21:03:45'),
(8, 'nais', '2014-12-09 21:04:31'),
(9, 'nais', '2014-12-09 21:05:16'),
(10, 'nais', '2014-12-09 21:05:44'),
(11, 'nais', '2014-12-09 21:06:39'),
(12, 'hoi', '2014-12-09 21:06:44'),
(13, 'hoi', '2014-12-09 21:08:59'),
(14, 'hoi', '2014-12-09 21:20:46');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

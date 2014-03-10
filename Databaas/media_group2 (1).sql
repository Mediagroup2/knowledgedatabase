-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 24 feb 2014 om 10:06
-- Serverversie: 5.5.24-log
-- PHP-versie: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `media_group2`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `eigen_tutorials`
--

CREATE TABLE IF NOT EXISTS `eigen_tutorials` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `user_id` int(2) NOT NULL,
  `titel` varchar(20) NOT NULL,
  `tags` varchar(30) NOT NULL,
  `categorie` varchar(20) NOT NULL,
  `url` varchar(20) NOT NULL,
  `beschrijving` varchar(30) NOT NULL,
  `toegevoegd_op` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tutorials`
--

CREATE TABLE IF NOT EXISTS `tutorials` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `titel` varchar(20) NOT NULL,
  `tags` varchar(30) NOT NULL,
  `categorie` varchar(20) NOT NULL,
  `url` varchar(30) NOT NULL,
  `beschrijving` varchar(30) NOT NULL,
  `toegevoegd_op` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `foto` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `zoekfunctie`
--

CREATE TABLE IF NOT EXISTS `zoekfunctie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tags` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Beperkingen voor gedumpte tabellen
--

--
-- Beperkingen voor tabel `eigen_tutorials`
--
ALTER TABLE `eigen_tutorials`
  ADD CONSTRAINT `eigen_tutorials_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

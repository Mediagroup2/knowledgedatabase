-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 31 mrt 2014 om 10:36
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
-- Tabelstructuur voor tabel `css`
--

CREATE TABLE IF NOT EXISTS `css` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `titel_link` varchar(20) NOT NULL,
  `tags` varchar(20) NOT NULL,
  `url_video` varchar(40) NOT NULL,
  `link` varchar(40) NOT NULL,
  `titel_tutorial` varchar(40) NOT NULL,
  `toegevoegd_op` datetime NOT NULL,
  `titel_video` varchar(40) NOT NULL,
  `url_tutorial` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Gegevens worden uitgevoerd voor tabel `css`
--

INSERT INTO `css` (`id`, `titel_link`, `tags`, `url_video`, `link`, `titel_tutorial`, `toegevoegd_op`, `titel_video`, `url_tutorial`) VALUES
(6, 'css tutorial w3 scho', 'css', 'youtube.com/watch?v=9SzJt-kg_ak', 'w3schools.com/css/DEFAULT.asp', 'Tutorial website', '2014-03-31 00:00:00', 'css video', 'tutorial3.php');

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
-- Tabelstructuur voor tabel `html`
--

CREATE TABLE IF NOT EXISTS `html` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `titel_link` varchar(20) NOT NULL,
  `tags` varchar(20) NOT NULL,
  `url_video` varchar(40) NOT NULL,
  `link` varchar(40) NOT NULL,
  `titel_tutorial` varchar(30) NOT NULL,
  `toegevoegd_op` datetime NOT NULL,
  `titel_video` varchar(40) NOT NULL,
  `url_tutorial` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Gegevens worden uitgevoerd voor tabel `html`
--

INSERT INTO `html` (`id`, `titel_link`, `tags`, `url_video`, `link`, `titel_tutorial`, `toegevoegd_op`, `titel_video`, `url_tutorial`) VALUES
(16, 'html tutorial', 'html', 'youtube.com/watch?v=bWPMSSsVdPk', 'w3schools.com/html/html_basic.asp', 'html5 tutorial', '2014-03-31 00:00:00', 'html tutorial', 'tutorial1.php');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `jquery`
--

CREATE TABLE IF NOT EXISTS `jquery` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `titel_link` varchar(20) NOT NULL,
  `tags` varchar(20) NOT NULL,
  `url_video` varchar(40) NOT NULL,
  `link` varchar(40) NOT NULL,
  `titel_tutorial` varchar(30) NOT NULL,
  `toegevoegd_op` datetime NOT NULL,
  `titel_video` varchar(40) NOT NULL,
  `url_tutorial` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Gegevens worden uitgevoerd voor tabel `jquery`
--

INSERT INTO `jquery` (`id`, `titel_link`, `tags`, `url_video`, `link`, `titel_tutorial`, `toegevoegd_op`, `titel_video`, `url_tutorial`) VALUES
(5, 'jquery tutorial', 'jquery', 'youtube.com/watch?v=VRnQOcVclS8', 'w3schools.com/jquery/jquery_fade.asp', 'jquery tutorial', '2014-03-31 00:00:00', 'jquery tutorial', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `links`
--

CREATE TABLE IF NOT EXISTS `links` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `titel` varchar(20) NOT NULL,
  `tags` varchar(20) NOT NULL,
  `categorie` varchar(20) NOT NULL,
  `url` varchar(30) NOT NULL,
  `beschrijving` varchar(30) NOT NULL,
  `toegevoegd_op` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Gegevens worden uitgevoerd voor tabel `links`
--

INSERT INTO `links` (`id`, `titel`, `tags`, `categorie`, `url`, `beschrijving`, `toegevoegd_op`) VALUES
(1, 'html link', 'link', 'link', 'www.w3school.nl', 'link van w3school', '2014-03-20 00:00:00'),
(2, 'w', 'w', 'w', 'w', 'w', '2014-12-01 00:00:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `php`
--

CREATE TABLE IF NOT EXISTS `php` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `titel_link` varchar(20) NOT NULL,
  `tags` varchar(20) NOT NULL,
  `url_video` varchar(40) NOT NULL,
  `link` varchar(40) NOT NULL,
  `titel_tutorial` varchar(40) NOT NULL,
  `toegevoegd_op` datetime NOT NULL,
  `titel_video` varchar(40) NOT NULL,
  `url_tutorial` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Gegevens worden uitgevoerd voor tabel `php`
--

INSERT INTO `php` (`id`, `titel_link`, `tags`, `url_video`, `link`, `titel_tutorial`, `toegevoegd_op`, `titel_video`, `url_tutorial`) VALUES
(8, 'php tutorial', 'php', 'youtube.com/watch?v=27dR_sLaM74', 'w3schools.com/php/php_looping.asp', 'php tutorial', '2014-03-31 00:00:00', 'php tutorial', 'tutorial2.php');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `psd`
--

CREATE TABLE IF NOT EXISTS `psd` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `titel_link` varchar(20) NOT NULL,
  `tags` varchar(20) NOT NULL,
  `url_video` varchar(40) NOT NULL,
  `link` varchar(40) NOT NULL,
  `titel_tutorial` varchar(30) NOT NULL,
  `toegevoegd_op` datetime NOT NULL,
  `titel_video` varchar(40) NOT NULL,
  `url_tutorial` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Gegevens worden uitgevoerd voor tabel `psd`
--

INSERT INTO `psd` (`id`, `titel_link`, `tags`, `url_video`, `link`, `titel_tutorial`, `toegevoegd_op`, `titel_video`, `url_tutorial`) VALUES
(5, 'psd tutorial', 'psd', 'youtube.com/watch?v=OjRqZiAgoHo', 'http://photoshoponderdeknie.nl/basis-cur', 'photoshop tutorial', '2014-03-31 00:00:00', 'photoshop tutorial', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden uitgevoerd voor tabel `tutorials`
--

INSERT INTO `tutorials` (`id`, `titel`, `tags`, `categorie`, `url`, `beschrijving`, `toegevoegd_op`) VALUES
(1, 'Html tutorial', '', 'html', 'www.html.nl', 'tutorial van html', '2014-03-12 00:00:00');

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
-- Tabelstructuur voor tabel `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `titel` varchar(20) NOT NULL,
  `tags` varchar(30) NOT NULL,
  `categorie` varchar(20) NOT NULL,
  `url` varchar(30) NOT NULL,
  `beschrijving` varchar(30) NOT NULL,
  `toegevoegd_op` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Gegevens worden uitgevoerd voor tabel `videos`
--

INSERT INTO `videos` (`id`, `titel`, `tags`, `categorie`, `url`, `beschrijving`, `toegevoegd_op`) VALUES
(1, 'Remmert', 'Remmert', 'html', 'www.remmert.nl', 'remmert', '2014-03-26 00:00:00'),
(12, 'html', 'html', 'html', 'html', 'html', '2014-12-31 00:00:00'),
(13, '', '', '', '', '', '0000-00-00 00:00:00'),
(14, '', '', '', '', '', '0000-00-00 00:00:00'),
(15, 'w', 'w', 'w', 'w', 'w', '2014-12-31 00:00:00'),
(16, '', '', '', '', '', '0000-00-00 00:00:00'),
(17, '', '', '', '', '', '0000-00-00 00:00:00'),
(18, '', '', '', '', '', '0000-00-00 00:00:00'),
(19, '', '', '', '', '', '0000-00-00 00:00:00'),
(21, '', '', '', '', '', '0000-00-00 00:00:00'),
(22, '', '', '', '', '', '0000-00-00 00:00:00'),
(23, '', '', '', '', '', '0000-00-00 00:00:00'),
(24, '', '', '', '', '', '0000-00-00 00:00:00'),
(25, '', '', '', '', '', '0000-00-00 00:00:00'),
(26, 'qw', 'q', 'q', 'q', 'q', '2014-12-31 00:00:00'),
(27, '', '', '', '', '', '0000-00-00 00:00:00'),
(28, '', '', '', '', '', '0000-00-00 00:00:00'),
(29, '', '', '', '', '', '0000-00-00 00:00:00'),
(30, '', '', '', '', '', '0000-00-00 00:00:00'),
(31, 'w', 'w', 'w', 'w', 'w', '2013-12-31 00:00:00'),
(32, '', '', '', '', '', '0000-00-00 00:00:00'),
(33, '', '', '', '', '', '0000-00-00 00:00:00'),
(34, '', '', '', '', '', '0000-00-00 00:00:00'),
(35, '', '', '', '', '', '0000-00-00 00:00:00'),
(36, '', '', '', '', '', '0000-00-00 00:00:00'),
(37, '', '', '', '', '', '0000-00-00 00:00:00'),
(38, 'w', 'w', 'w', 'w', 'w', '2013-12-31 00:00:00'),
(39, '', '', '', '', '', '0000-00-00 00:00:00');

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

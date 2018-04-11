-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 11 avr. 2018 à 14:42
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `e_space`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `category_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `long_description` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `is_published`, `category_id`, `image`, `name`, `long_description`, `description`, `price`) VALUES
(1, 1, 1, 'img/mars.jpg', 'Mars', '', 'Profitez d\'une experience incroyable et du plus beau paysage que vous n\'ayez jamais vu, sur MARS.', '98900'),
(2, 1, 1, 'img/soleil.jpg', 'Soleil', '', 'Le voyage sans retour, oserez vous ?', '39900'),
(3, 1, 2, 'img/SpaceHouse.jpg', 'Maison spatial 1.0', '', 'Très courte descriptionj pour l\'instaant', '72900'),
(4, 1, 3, 'img/meteorite.png', 'Chondrites carbonées 20g', 'Cette météorite a été achetée en 2009 à Rissani à un négociant marocain en météorites. Hormis les météorites tombées en Antarctique, il n\'existe que 123 météorites référencées de ce type dans le monde.', 'Il n\'existe que 123 météorites référencées de ce type dans le monde.', '59.99'),
(5, 1, 4, 'img/etoile1.jpg', 'Starlet', '', 'Etoile standard', '59.00'),
(6, 1, 4, 'img/etoile1.jpg', 'Starlight', '', 'Etoiles lumineuses', '79.00'),
(7, 1, 4, 'img/etoile1.jpg', 'Zodiac', '', 'Etoiles principales de la constellation', '99.00'),
(8, 1, 4, 'img/etoile1.jpg', 'Twin', '', 'Deux étoiles côte à côte', '119'),
(9, 1, 4, 'img/etoile1.jpg', 'Supernova', '', 'Les étoiles les plus brillantes du ciel', '199'),
(10, 1, 3, 'img/nullarbormet.jpg', 'Nullar Bormet 2.1g', '', 'Lorem Ipsum Dolor sit ahame gerdima tesf', '89.99'),
(11, 1, 3, 'img/xango pirita.jpg', 'Xango Pirita 3.8g', '', 'Lorem ipsum dolor sit hamet lorem ipsum dolor sit hamet lorem ipsum dolor sit hamet', '79.99'),
(12, 1, 3, 'img/Pyrite_huaron_octaedre.jpg', 'Pyrite Huaron Octaedre 2.2g', '', 'Lorem Ipsum dolor sit hamet dolor sit lorem', '74.99'),
(13, 1, 1, 'img/lune.jpg', 'Lune', '', 'Profitez d\'une experience incroyable et du plus beau paysage que vous n\'ayez jamais vu, sur la LUNE.', '79000');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`, `image`, `description`) VALUES
(1, 'Voyages', 'img/logo_fusee.gif', 'Loreme Voyage Ipsume dolore site hamete'),
(2, 'Logements', 'img/logo_maison.gif', 'Lorem Ipsum dolor sit hamet logement'),
(3, 'Météorites', 'img/logo_meteorite.gif', 'Lorem meteorite ipsum dolor sit hamet'),
(4, 'Etoiles', 'img/logo_etoile.gif', 'Achetez une étoile et renommez la pour ensuite l\'offrir à l\'un de vos proches. C\'est un cadeau plein d\'amour, d\'amitié, d\'affection ou peut-être de chagrin. La personne qui recevra ce cadeau se souviendra de ce moment particulier à chaque fois qu\'elle regardera le ciel, et ce pour le reste de ses jours.');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `comment_text` text CHARACTER SET utf8mb4 NOT NULL,
  `comment_note` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `email`, `password`, `is_admin`) VALUES
(1, 'charly', 'luzzi.charly@gmail.com', '10f5b01f4ca1ac874785ba0a74cd61b2', 1),
(3, 'qersgfdg', 'errfh@f', '098f6bcd4621d373cade4e832627b4f6', 0),
(4, 'charlyyy', 'lea.solange@hotmail.fr', '098f6bcd4621d373cade4e832627b4f6', 0),
(5, 'bonjour', 'bonjour@gmail.com', '2e3fac58cc0f67f561b5f04a552e0240', 0),
(9, 'lychar', 'lychar@gmail.com', '4993a5f1748c71b1719a4784a7224355', 0),
(7, 'put', 'in@f', '098f6bcd4621d373cade4e832627b4f6', 0),
(8, 'Saluto', 'saluto@gmail.com', '327af1a0cf9427bfd74c146e0a69faf2', 0),
(10, 'nouvelle', 'nouvelle@gmail.com', 'nouvelle', 0),
(11, 'Voici', 'voici@gmail.com', 'a08a1101ea8be244dc502e4271b2f0c1', 0),
(12, 'celien', 'celien@gmail.com', '43acef3fdbb93b01352f8edb29b62cd3', 0),
(13, 'lea', 'lea@gmail.com', '812b94eb454835665e25797809c1d137', 0),
(14, 'tomy', 'tomy@gmail.com', '852907c499555bd7ae0be46847bc3e37', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 26 août 2019 à 10:59
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet4`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `prenom`, `email`, `password`) VALUES
(1, 'Forteroche', 'Jean', 'admin@dev.fr', '$2y$10$cL.6DgsPkDwDYTFMoiFUquRRoM.lWq08JU6Hbve8JyxTlkOhmfcXS');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ee` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `author`, `comment`, `comment_date`, `ee`) VALUES
(9, 3, 'Dev', 'TEST', '2019-07-29 21:36:20', ''),
(14, 2, 'dsv', 'xv', '2019-07-30 00:02:07', ''),
(30, 3, 'Dev', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto rerum quasi sequi perferendis, quisquam voluptatibus magnam obcaecati sapiente mollitia est exercitationem officiis doloribus quis, excepturi, veritatis culpa fugiat vitae neque?', '2019-08-05 23:33:57', ''),
(38, 3, 'dsf', 'fhjb', '2019-08-12 14:47:19', '0'),
(41, 24, 'sqfd', 'zfqf', '2019-08-12 15:07:50', '0'),
(42, 24, 'dsqfg', 'sdgw', '2019-08-12 15:08:46', '0'),
(44, 24, 'ez', 'qszr', '2019-08-12 15:16:35', '0'),
(45, 24, 'zqr', 'zqsr', '2019-08-12 15:18:03', '0'),
(46, 24, 'dsv', 'vhjv ', '2019-08-12 15:26:09', '0'),
(47, 24, 'dsv', 'kj ', '2019-08-12 15:31:02', '0'),
(54, 1, 'SDRGD', 'sqx', '2019-08-22 22:15:09', '0'),
(51, 1, 'e-sqtzw', 'y\'ezwywz', '2019-08-12 20:14:25', '0'),
(55, 3, 'vreseqd', 'svq', '2019-08-22 22:24:56', '<div class=\" alert alert-danger\"> <p> Le commentaire a Ã©tÃ© signialÃ© par utilisateur !</p></div>');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `creation_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `creation_date`) VALUES
(1, 'Shoreline', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quaerat eligendi maiores repellendus minus autem nam sint, et fuga. Sequi necessitatibus reprehenderit alias beatae tempore obcaecati quam fugit quidem laboriosam.', '2019-07-29 21:35:49'),
(2, 'Mountains', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto rerum quasi sequi perferendis, quisquam voluptatibus magnam obcaecati sapiente mollitia est exercitationem officiis doloribus quis, excepturi, veritatis culpa fugiat vitae neque?', '2019-07-29 21:35:54'),
(3, 'Misty', '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto rerum quasi sequi perferendis, quisquam voluptatibus magnam obcaecati sapiente mollitia est exercitationem officiis doloribus quis, excepturi, veritatis culpa fugiat vitae neque?</p>\r\n<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto rerum quasi sequi perferendis, quisquam voluptatibus magnam obcaecati sapiente mollitia est exercitationem officiis doloribus quis, excepturi, veritatis culpa fugiat vitae neque?</p>\r\n<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto rerum quasi sequi perferendis, quisquam voluptatibus magnam obcaecati sapiente mollitia est exercitationem officiis doloribus quis, excepturi, veritatis culpa fugiat vitae neque?</p>\r\n<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto rerum quasi sequi perferendis, quisquam voluptatibus magnam obcaecati sapiente mollitia est exercitationem officiis doloribus quis, excepturi, veritatis culpa fugiat vitae neque?</p>\r\n<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto rerum quasi sequi perferendis, quisquam voluptatibus magnam obcaecati sapiente mollitia est exercitationem officiis doloribus quis, excepturi, veritatis culpa fugiat vitae neque?</p>', '2019-08-22 22:25:29');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

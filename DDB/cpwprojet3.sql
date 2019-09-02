-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 02 sep. 2019 à 07:52
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
-- Base de données :  `cpwprojet3`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `title`, `date`, `author`, `content`, `image`) VALUES
(2, 'titre 2', '2019-07-05 10:01:54', 'leo2', '2 - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'https://archzine.fr/wp-content/uploads/2016/01/canada-paysage-fond-ecran-neige-fond-d-%C3%A9cran-d-hiver-beaut%C3%A9.jpg'),
(3, 'titre 3', '2019-07-13 09:48:13', 'leo3', '3 - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'https://archzine.fr/wp-content/uploads/2016/01/canada-paysage-fond-ecran-neige-fond-d-%C3%A9cran-d-hiver-beaut%C3%A9.jpg'),
(20, 'testtitle', '2019-08-06 07:28:55', 'testauthor', 'lorem ipsum dolor amet sit lorem ipsum dolor amet sit lorem ipsum dolor amet sit lorem ipsum dolor amet sit lorem ipsum dolor amet sit lorem ipsum dolor amet sitv lorem ipsum dolor amet sitlorem ipsum dolor amet sitvlorem ipsum dolor amet sit lorem ipsum dolor amet sitlorem ipsum dolor amet sitlorem ipsum dolor amet sitlorem ipsum dolor amet sit', 'https://oc-user.imgix.net/users/avatars/15474697268093_Capture.PNG?auto=compress,format&q=80'),
(21, 'mon nouveau chapitre', '2019-08-06 10:34:10', 'un nouveau auteur', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 'https://oc-user.imgix.net/users/avatars/15474697268093_Capture.PNG?auto=compress,format&q=80'),
(22, 'TITRE', '2019-08-12 10:27:56', 'bootstrap', 'test', 'https://getbootstrap.com/docs/4.3/assets/img/bootstrap-themes.png'),
(23, 'Mon nouveau chapitre', '2019-09-01 23:47:05', 'Encore moi', '<p>De toute façon le chevalier de Provence il faudrait déjà mettre la main dessus. Si ça se trouve? Alors pour nous sortir de là va falloir un plus solide que du si ça se trouve! Encore une chance qu’on se soit pas fait construire un buffet à vaisselle.</p>', 'https://pics.me.me/your-mother-is-open-source-31619600.png');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idArticle` int(11) NOT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `reported` tinyint(1) NOT NULL DEFAULT '0',
  `reportReason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idArticle` (`idArticle`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id`, `idArticle`, `alias`, `date`, `content`, `reported`, `reportReason`) VALUES
(2, 3, 'leo', '2019-07-05 11:36:59', 'mon commentaire', 0, NULL),
(3, 3, 'leo', '2019-08-05 12:43:49', 'mon commentaire', 0, '<null>'),
(4, 3, 'leo', '2019-08-05 12:44:03', 'mon commentaire 2', 0, NULL),
(5, 3, 'leo', '2019-08-05 12:44:06', 'mon commentaire 2', 0, NULL),
(6, 3, 'test', '2019-08-06 07:26:42', '', 0, ''),
(7, 20, 'mon alias', '2019-08-06 07:30:32', 'Mon commentaire', 0, NULL),
(8, 20, 'a', '2019-08-06 07:36:30', 'a', 0, NULL),
(9, 20, 'test', '2019-08-06 09:02:46', 'test', 0, '<null>'),
(10, 20, 'test', '2019-08-06 10:32:31', 'test', 0, NULL),
(12, 21, 'monAlias', '2019-08-11 17:39:28', 'Mon super commentaire sans lorem ipsum parce que ça fait un peu trop random.', 0, '<null>'),
(13, 21, 'Encore un alias', '2019-08-11 17:42:37', 'Encore un super commentaire sans lorem ipsum !', 0, NULL),
(14, 22, 'test', '2019-09-01 23:42:46', 'test', 0, '<null>'),
(15, 23, 'kaamelott ipsum', '2019-09-01 23:48:32', 'Ah ben c’est sûr que c’est pas Jo l’rigolo. N’empêche que tout le monde parle de moi! C’est quand même un signe! Moi je passe pas mal de temps à la taverne. J’ai jamais entendu parlé de celui-là! ', 1, 'sexual content');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `user`, `password`) VALUES
(1, 'admin', 'root');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`idArticle`) REFERENCES `article` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

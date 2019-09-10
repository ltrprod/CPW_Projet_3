-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 10 sep. 2019 à 09:01
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `title`, `date`, `author`, `content`, `image`) VALUES
(6, 'titre 6', '2019-07-05 10:01:51', 'Jean Rocheforte', '<section class=\"container max-w-800 mx-auto mt-60\">\r\n<div class=\"bg-white px-60 py-40\">\r\n<div class=\"text-18 leading-loose\">\r\n<p class=\"mt-20\">C&rsquo;est meilleur chaud, hein. Seulement l&agrave; aux cuisines ils sont sur le repas du soir. Hein, ils ont pas trop le temps. La ferme! Ouais&hellip; Ouais je me suis gour&eacute;&hellip;</p>\r\n<p class=\"mt-20\">Y a des gens qui ont pris la peine de faire un dessert. La moindre des choses c&rsquo;est de rester pour le manger. Non, j&rsquo;vais varier les fruits, n&rsquo;vous inqui&eacute;tez pas.</p>\r\n<p class=\"mt-20\">Putain en plein dans sa mouille! Non mais n&rsquo;exag&eacute;rez pas non plus! J&rsquo;vous demande quand m&ecirc;me pas de manger des briques! Merde j\'ai plus de pierres qu\'est-ce qu\'on fait? C&rsquo;est une tarte aux myrtilles. Pourquoi elle vous revient pas?</p>\r\n<p class=\"mt-20\">D&eacute;j&agrave; &agrave; la corne, ils regardent m&ecirc;me pas vers ici! Vous pouvez bien agiter tout les drapeaux que vous voudrez! Non mais c&rsquo;est dingue cette histoire! C&rsquo;est pas parce que vous faites des tartes pour des petits enfants qui existent pas que je dois les amener &agrave; la p&ecirc;che, non? Qu&rsquo;est ce que j&rsquo;ai dit? Une connerie? On vous met une dague sous le cou et on traverse le camp en gueulant \"bougez-pas, bougez-pas ou un bute le roi\". Alors par contre, si vous sentez qu&rsquo;il s&rsquo;&eacute;nerve un peu, hein, vous lui sortez un morceau de viande. Moi j&rsquo;appelle &ccedil;a des politesses! Merde j\'ai plus de pierres qu\'est-ce qu\'on fait?</p>\r\n<p class=\"mt-20\">Mais bien s&ucirc;r, comme &ccedil;a au lieu de confondre les signes, ils auraient confondu les couleurs! Allez-y mollo avec la joie! Y a quand m&ecirc;me pas cinquante trucs &agrave; retenir bon sang! Perceval le Galois en tout cas tout le monde s&rsquo;accorde &agrave; dire que c&rsquo;est une tanche et &ccedil;a c&rsquo;est pas une l&eacute;gende! Vous savez c&rsquo;est quand de m&ecirc;me pas grave de pas savoir faire des tartes!</p>\r\n</div>\r\n</div>\r\n</section>', 'https://archzine.fr/wp-content/uploads/2016/01/canada-paysage-fond-ecran-neige-fond-d-%C3%A9cran-d-hiver-beaut%C3%A9.jpg'),
(7, 'titre 7', '2019-07-05 10:01:51', 'Jean Rocheforte', '<section class=\"container max-w-800 mx-auto mt-60\">\r\n<div class=\"bg-white px-60 py-40\">\r\n<div class=\"text-18 leading-loose\">\r\n<p class=\"mt-20\">Ouais, y a pas &agrave; dire, quand y a du dessert le repas est tout de suite plus chaleureux! Oh mais j&rsquo;m&rsquo;en fais pas. J&rsquo;vais m&rsquo;entrainer jusqu&rsquo;&agrave; c&rsquo;que &ccedil;a marche!</p>\r\n<p class=\"mt-20\">Ils sont encore l&agrave;, ces cons! Vous binez pas&hellip; M&ecirc;me nous on a pas tout compris. La ferme! On plaisante, on plaisante&hellip;</p>\r\n<p class=\"mt-20\">Ah ben non tant que vous nous obligez pas &agrave; les manger! Mais &ccedil;a va! Pourquoi vous m&rsquo;agressez? Pas foutu de savoir son nom!</p>\r\n<p class=\"mt-20\">Non Proven&ccedil;al c&rsquo;est mon nom. Ca vous emmerde ce que j&rsquo;raconte? Non Proven&ccedil;al c&rsquo;est mon nom. Oui&hellip; Ben vous&hellip; Occupez vous d&rsquo;les faire &ccedil;a s&rsquo;ra d&eacute;j&agrave; pas mal! D&eacute;j&agrave; &agrave; la corne, ils regardent m&ecirc;me pas vers ici! Vous pouvez bien agiter tout les drapeaux que vous voudrez!</p>\r\n<p class=\"mt-20\">De toute fa&ccedil;on le chevalier de Provence il faudrait d&eacute;j&agrave; mettre la main dessus. Qu&rsquo;est ce que vous nous chantez? Vous &ecirc;tes pas gaulois que je sache! Ah mais non, on va se faire tuer l&agrave;! Sans vouloir la ramener la seule diff&eacute;rence concr&egrave;te avec les briques c&rsquo;est que vous appelez &ccedil;a des tartes. Pas foutu de savoir son nom!</p>\r\n</div>\r\n</div>\r\n</section>', 'https://archzine.fr/wp-content/uploads/2016/01/canada-paysage-fond-ecran-neige-fond-d-%C3%A9cran-d-hiver-beaut%C3%A9.jpg'),
(8, 'titre 8', '2019-07-05 10:01:51', 'Jean Rocheforte', '<section class=\"container max-w-800 mx-auto mt-60\">\r\n<div class=\"bg-white px-60 py-40\">\r\n<div class=\"text-18 leading-loose\">\r\n<p class=\"mt-20\">On va pas rester plant&eacute;s l&agrave; comme des radis. Oh mais j&rsquo;m&rsquo;en fais pas. J&rsquo;vais m&rsquo;entrainer jusqu&rsquo;&agrave; c&rsquo;que &ccedil;a marche! Qu&rsquo;est ce que vous nous chantez? Vous &ecirc;tes pas gaulois que je sache! Et on peut savoir depuis quand vous arpentez la Bretagne en racontant &agrave; tout le monde que vous vous appelez Proven&ccedil;al le Gaulois? Alors l&agrave;! Permettez-moi de vous dire! Le coup du myst&eacute;rieux chevalier gaulois solitaire &agrave; la rescousse de l&rsquo;opprim&eacute;. Ca fait vraiment bidon comme l&eacute;gende! Merde! S\'ils ont entendu mon plan c\'est foutu. C&rsquo;est la salle du tr&ocirc;ne. Il ferait beau voir que je puisse pas y rentrer!</p>\r\n<p class=\"mt-20\">Ah ah Sire! Je vous attends! &Agrave; moins que vous pr&eacute;f&eacute;riez qu&rsquo;on dise partout que le roi est une petite p&eacute;dale qui pisse dans son froc &agrave; l&rsquo;id&eacute;e d&rsquo;se battre! Allez en garde ma mignonne! Mais on en entend parler dans les tavernes &agrave; ivrognes! Voil&agrave;! Mais attendez&hellip; Y a une table et des si&egrave;ges et j&rsquo;devrais m&rsquo;farcir toutes les notes &agrave; ratifier debout? Putain en plein dans sa mouille! Droit devant, en plein dans leurs tronches.</p>\r\n<p class=\"mt-20\">Merde j\'ai plus de pierres qu\'est-ce qu\'on fait? P&rsquo;tite pucelle! L&agrave; c&rsquo;est une table ronde. Pour que les chevaliers de Bretagne se r&eacute;unissent autour. Toute fa&ccedil;on autant vous y faire parce qu&rsquo;&agrave; partir de maintenant on va s&rsquo;appeler &laquo;Les Chevaliers de la Table Ronde&raquo;. On pourrait balancer de la caillasse vers l&agrave;-bas, comme &ccedil;a ils se disent qu\'on y est et on part dans l\'autre sens. Y a pas d&rsquo;herbe dans la salle du tr&ocirc;ne.</p>\r\n<p class=\"mt-20\">Oui, ou une fissure &agrave; colmater dans un muret. Vous binez pas&hellip; M&ecirc;me nous on a pas tout compris. Animaux de la for&ecirc;t! Auw auw ouh, woh woh woh woh, auw aouh! Ils sont encore l&agrave;, ces cons! Bon alors en garde, fils d&rsquo;unijambiste. Mais &ccedil;a va! Pourquoi vous m&rsquo;agressez?</p>\r\n<p class=\"mt-20\">Non mais n&rsquo;exag&eacute;rez pas non plus! J&rsquo;vous demande quand m&ecirc;me pas de manger des briques! Si &ccedil;a se trouve? Alors pour nous sortir de l&agrave; va falloir un plus solide que du si &ccedil;a se trouve!</p>\r\n</div>\r\n</div>\r\n</section>', 'https://archzine.fr/wp-content/uploads/2016/01/canada-paysage-fond-ecran-neige-fond-d-%C3%A9cran-d-hiver-beaut%C3%A9.jpg'),
(9, 'titre 9', '2019-07-05 10:01:51', 'Jean Rocheforte', '<section class=\"container max-w-800 mx-auto mt-60\">\r\n<div class=\"bg-white px-60 py-40\">\r\n<div class=\"text-18 leading-loose\">\r\n<p class=\"mt-20\">Il s&rsquo;est fait chier dessus par un bouc! Un chef de guerre qui commande plus c&rsquo;est pas bon. Il va d&eacute;primer, il va s&rsquo;mettre &agrave; bouffer, il va prendre quarante livres! Ah ben non tant que vous nous obligez pas &agrave; les manger! Traitez-moi de grosse gouine et attaquez moi!</p>\r\n<p class=\"mt-20\">C&rsquo;est quand m&ecirc;me magnifique une arm&eacute;e bien coordonn&eacute;e, hein! Faut faire comme avec les scorpions qui se suicident quand ils sont entour&eacute;s par le feu. C&rsquo;est quand m&ecirc;me magnifique une arm&eacute;e bien coordonn&eacute;e, hein! Ils chantent pas vos espions.</p>\r\n<p class=\"mt-20\">Qu&rsquo;est ce que vous nous chantez? Vous &ecirc;tes pas gaulois que je sache! Et si on faisait le coup du bouclier humain?</p>\r\n<p class=\"mt-20\">Ah c&rsquo;est s&ucirc;r que les hommes vont pas pouvoir se prendre une d&eacute;rouill&eacute;e par semaine, comme &ccedil;a pendant longtemps. Perceval le Galois en tout cas tout le monde s&rsquo;accorde &agrave; dire que c&rsquo;est une tanche et &ccedil;a c&rsquo;est pas une l&eacute;gende! Sans vouloir abuser. Il me semble pas que vous soyez proven&ccedil;al non plus&hellip;</p>\r\n<p class=\"mt-20\">Y a quand m&ecirc;me pas cinquante trucs &agrave; retenir bon sang! S\'il y a un autre qui groupe qui arrive par l&agrave; on est marron des deux c&ocirc;t&eacute;s. On vous met une dague sous le cou et on traverse le camp en gueulant \"bougez-pas, bougez-pas ou un bute le roi\". Mais bien s&ucirc;r, comme &ccedil;a au lieu de confondre les signes, ils auraient confondu les couleurs! Mais on en entend parler dans les tavernes &agrave; ivrognes! Voil&agrave;!</p>\r\n</div>\r\n</div>\r\n</section>', 'https://archzine.fr/wp-content/uploads/2016/01/canada-paysage-fond-ecran-neige-fond-d-%C3%A9cran-d-hiver-beaut%C3%A9.jpg'),
(11, 'Chapitre 8 - Home sweet home', '2019-09-03 18:46:08', 'Jean Rocheforte', '<p>Ah ben non tant que vous nous obligez pas &agrave; les manger! Oui mais nous on est trois, enfin, deux et demi.Ben c&rsquo;est bien ce que j&rsquo;ai dit! Proven&ccedil;al le Gauloi le Galoi, Ouais je vois ce que vous voulez dire. Et on peut savoir depuis quand vous arpentez la Bretagne en racontant &agrave; tout le monde que vous vous appelez Proven&ccedil;al le Gaulois?Ah non, s\'il vous pla&icirc;t, laissez tomber les combines &agrave; deux ronds. P&rsquo;tite pucelle!Sinon on fait un tunnel jusqu\'&agrave; notre campement. L&eacute;odagan et moi on creuse, pendant vous balancez de la caillasse dans l\'autre sens pour les &eacute;loigner du chantier. De toute fa&ccedil;on le chevalier de Provence il faudrait d&eacute;j&agrave; mettre la main dessus. Ah ah Sire! Je vous attends! &Agrave; moins que vous pr&eacute;f&eacute;riez qu&rsquo;on dise partout que le roi est une petite p&eacute;dale qui pisse dans son froc &agrave; l&rsquo;id&eacute;e d&rsquo;se battre! Mais&hellip; C&rsquo;est le Chevalier de Provence ou le Chevalier Gaulois? Faudrait savoir! C&rsquo;est quand m&ecirc;me pas de bol pour lui, hein. Parce que les rares fois o&ugrave; il arrive &agrave; faire quelque chose de ses dix doigts, il se goure quand on lui demande son nom.On vous met une dague sous le cou et on traverse le camp en gueulant \"bougez-pas, bougez-pas ou un bute le roi\". On dit que l&agrave; o&ugrave; il passe l&rsquo;herbe ne repousse pas! La vache! Ca vous rend pas aimable en tout cas, hein!</p>', 'https://i.redd.it/jjvq0lx4jyk31.jpg'),
(12, 'Chapitre 9 - Retour', '2019-09-03 18:46:09', 'Jean Rocheforte', '<p>Oh ben &ccedil;a va on plaisante! Ah ben un peu oui, surtout que s\'ils ont vu d\'o&ugrave; venait la pierre ils sont en train de radiner droit sur nous! Merde! S\'ils ont entendu mon plan c\'est foutu. Mais arr&ecirc;tez bon sang! Si &ccedil;a se trouve? Alors pour nous sortir de l&agrave; va falloir un plus solide que du si &ccedil;a se trouve! Allez en garde ma mignonne! Il s&rsquo;est fait chier dessus par un bouc! Non Proven&ccedil;al c&rsquo;est mon nom. N&rsquo;emp&ecirc;che que j&rsquo;suis une l&eacute;gende! Faut faire comme avec les scorpions qui se suicident quand ils sont entour&eacute;s par le feu. Oui mais nous on est trois, enfin, deux et demi. P&rsquo;tite pucelle! La ferme! Ah ben un peu oui, surtout que s\'ils ont vu d\'o&ugrave; venait la pierre ils sont en train de radiner droit sur nous! H&eacute; mais j\'ai failli me la prendre! Mais Attila vous y attend, Sire! Attila! Le Fl&eacute;au de Dieu! N&rsquo;emp&ecirc;che que tout le monde parle de moi! C&rsquo;est quand m&ecirc;me un signe! C&rsquo;est meilleur chaud, hein. Seulement l&agrave; aux cuisines ils sont sur le repas du soir. Hein, ils ont pas trop le temps. Si &ccedil;a se trouve? Alors pour nous sortir de l&agrave; va falloir un plus solide que du si &ccedil;a se trouve! Animaux de la for&ecirc;t! Auw auw ouh, woh woh woh woh, auw aouh! Passer la t&ecirc;te? Pour me prendre une fl&ecirc;che dedans? Non merci! Sans vouloir abuser. Il me semble pas que vous soyez proven&ccedil;al non plus&hellip; Et si on faisait le coup du bouclier humain? Ils sont encore l&agrave;, ces cons!</p>', 'https://pics.me.me/your-mother-is-open-source-31619600.png'),
(13, 'Chapitre 10 : Raclette sous la couette', '2019-09-09 17:49:34', 'Jean Rocheforte', '<section class=\"container max-w-800 mx-auto mt-60\">\r\n<div class=\"bg-white px-60 py-40\">\r\n<div class=\"text-18 leading-loose\">\r\n<p class=\"mt-20\">Moi je passe pas mal de temps &agrave; la taverne. J&rsquo;ai jamais entendu parl&eacute; de celui-l&agrave;! Ah ben non tant que vous nous obligez pas &agrave; les manger! On dit que l&agrave; o&ugrave; il passe l&rsquo;herbe ne repousse pas! Mais oui mon p&rsquo;tit p&egrave;re il faudra bien vous y coller! &Agrave; moins que vous pr&eacute;f&eacute;riez vous taper les tartes! Mais&hellip; C&rsquo;est le Chevalier de Provence ou le Chevalier Gaulois? Faudrait savoir! C&rsquo;est une tarte aux myrtilles. Pourquoi elle vous revient pas?</p>\r\n<p class=\"mt-20\">Droit devant, en plein dans leurs tronches. Mais Attila vous y attend, Sire! Attila! Le Fl&eacute;au de Dieu! J&rsquo;ai envie d&rsquo;faire des tartes, voil&agrave;! Vous n&rsquo;allez pas m&rsquo;obliger &agrave; m&rsquo;justifier! Y a des gens qui ont pris la peine de faire un dessert. La moindre des choses c&rsquo;est de rester pour le manger.</p>\r\n<p class=\"mt-20\">Un chef de guerre qui commande plus c&rsquo;est pas bon. Il va d&eacute;primer, il va s&rsquo;mettre &agrave; bouffer, il va prendre quarante livres! Ah ben un peu oui, surtout que s\'ils ont vu d\'o&ugrave; venait la pierre ils sont en train de radiner droit sur nous! Sans vouloir abuser. Il me semble pas que vous soyez proven&ccedil;al non plus&hellip;</p>\r\n<p class=\"mt-20\">Non mais c&rsquo;est dingue cette histoire! C&rsquo;est pas parce que vous faites des tartes pour des petits enfants qui existent pas que je dois les amener &agrave; la p&ecirc;che, non? Oui mais nous on est trois, enfin, deux et demi. Mais&hellip; C&rsquo;est le Chevalier de Provence ou le Chevalier Gaulois? Faudrait savoir! Ah mais non, on va se faire tuer l&agrave;! Traitez-moi de grosse gouine et attaquez moi!</p>\r\n<p class=\"mt-20\">P&rsquo;tite pucelle! Allez-y mollo avec la joie! Mais Attila vous y attend, Sire! Attila! Le Fl&eacute;au de Dieu! Alors l&agrave;, personne sait qui est tomb&eacute; et tout le monde s&rsquo;en fout!</p>\r\n<p class=\"mt-20\">Qu&rsquo;est ce que j&rsquo;ai dit? Une connerie? De toute fa&ccedil;on le chevalier de Provence il faudrait d&eacute;j&agrave; mettre la main dessus. Qu&rsquo;est ce que j&rsquo;ai dit? Une connerie? Ah ben non tant que vous nous obligez pas &agrave; les manger!</p>\r\n<p class=\"mt-20\">Y en a marre de se comporter comme des sagouins avec tout le monde sous pr&eacute;texte qu&rsquo;on a des responsabilit&eacute;s. Traitez-moi de grosse gouine et attaquez moi! N&rsquo;emp&ecirc;che que j&rsquo;suis une l&eacute;gende!</p>\r\n<p class=\"mt-20\">Ouais, y a pas &agrave; dire, quand y a du dessert le repas est tout de suite plus chaleureux! Y en a marre de se comporter comme des sagouins avec tout le monde sous pr&eacute;texte qu&rsquo;on a des responsabilit&eacute;s. Non mais maintenant il faut se tirer dans l\'autre sens.</p>\r\n<p class=\"mt-20\">Sans vouloir la ramener la seule diff&eacute;rence concr&egrave;te avec les briques c&rsquo;est que vous appelez &ccedil;a des tartes. Bon alors en garde, fils d&rsquo;unijambiste. Mais attendez&hellip; Y a une table et des si&egrave;ges et j&rsquo;devrais m&rsquo;farcir toutes les notes &agrave; ratifier debout? Alors l&agrave;! Permettez-moi de vous dire! Le coup du myst&eacute;rieux chevalier gaulois solitaire &agrave; la rescousse de l&rsquo;opprim&eacute;. Ca fait vraiment bidon comme l&eacute;gende!</p>\r\n<p class=\"mt-20\">Vous binez pas&hellip; M&ecirc;me nous on a pas tout compris. Mais parce qu&rsquo;on a des frais! Vous pouvez pas vous rentrer &ccedil;a dans le cr&acirc;ne? Ben attendez, je vais vous rendre la v&ocirc;tre. Ca vous emmerde ce que j&rsquo;raconte? Encore une chance qu&rsquo;on se soit pas fait construire un buffet &agrave; vaisselle. Ca vous emmerde ce que j&rsquo;raconte? On pourrait foutre le feu &agrave; la for&ecirc;t pour les obliger &agrave; sortir.</p>\r\n</div>\r\n</div>\r\n</section>', 'https://upload.wikimedia.org/wikipedia/commons/7/7f/Raclette2.jpg?uselang=fr');

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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id`, `idArticle`, `alias`, `date`, `content`, `reported`, `reportReason`) VALUES
(7, 11, 'astromecano', '2019-09-03 18:49:29', 'LOL GREAT PUN', 0, '<null>'),
(8, 11, 'test', '2019-09-09 16:50:21', 'test', 1, 'Contenu à caractère violent'),
(14, 13, 'Leo', '2019-09-09 23:06:32', 'Oui… Ben vous… Occupez vous d’les faire ça s’ra déjà pas mal! Allez-y mollo avec la joie! P’tite pucelle! On vous met une dague sous le cou et on traverse le camp en gueulant \"bougez-pas, bougez-pas ou un bute le roi\".\r\n\r\nBon alors en garde, fils d’unijambiste. Sans vouloir abuser. Il me semble pas que vous soyez provençal non plus… Vous avez dit que ça devait être vexant! Ben voilà! Vous êtes vexé! Oui mais nous on est trois, enfin, deux et demi.\r\nOn plaisante, on plaisante… Moi j’appelle ça des politesses! Non Provençal c’est mon nom. Y a quand même pas cinquante trucs à retenir bon sang! Déjà à la corne, ils regardent même pas vers ici! Vous pouvez bien agiter tout les drapeaux que vous voudrez! N’empêche que j’suis une légende! On pourrait foutre le feu à la forêt pour les obliger à sortir. ', 0, '<null>'),
(15, 13, 'mon pseudo', '2019-09-09 23:21:28', 'Déjà à la corne, ils regardent même pas vers ici! Vous pouvez bien agiter tout les drapeaux que vous voudrez! N’empêche que j’suis une légende! On pourrait foutre le feu à la forêt pour les obliger à sortir.\r\n', 1, 'Contenu à caractère violent'),
(17, 11, 'MeGA PSEUDO', '2019-09-10 10:53:07', '\"Déjà à la corne, ils regardent même pas vers ici! Vous pouvez bien agiter tout les drapeaux que vous voudrez! N’empêche que j’suis une légende! On pourrait foutre le feu à la forêt pour les obliger à sortir. \"', 1, 'Contenu à caractère violent'),
(18, 7, 'ZeRetardProfessionnel', '2019-09-10 10:53:33', '\"Déjà à la corne, ils regardent\"Déjà à la corne, ils regardent même pas vers ici! Vous pouvez bien agiter tout les drapeaux que vous voudrez! N’empêche que j’suis une légende! On pourrait foutre le feu à la forêt pour les obliger à sortir. \"forêt pour les obliger à sortir. \"', 1, 'Racisme');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `user`, `password`) VALUES
(1, 'admin', '$2y$12$4t4mdra7G9Fxp8sTJtLsluT/P/sQ2qkODVa5rMKO19DFkL3EqRkXC');

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

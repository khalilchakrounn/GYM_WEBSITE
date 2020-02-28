-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 07 mai 2019 à 14:12
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `site_web`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonement`
--

DROP TABLE IF EXISTS `abonement`;
CREATE TABLE IF NOT EXISTS `abonement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_abonement` varchar(255) NOT NULL,
  `cour` varchar(255) NOT NULL,
  `duree` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `abonement`
--

INSERT INTO `abonement` (`id`, `nom_abonement`, `cour`, `duree`, `prix`, `image`) VALUES
(21, 'SUMMER SPECIAL', 'yoga/musculation/PISCINE', '2 mois', 120, 'images/stay-fit-during-ramadhan.jpg'),
(22, 'ReGular', 'FITNESS ', '1 mois', 60, 'images/methode_times_prod_web_bin_e018a772-e126-11e8-9838-efa7e96cbe2b.jpg'),
(23, 'MONSTER', 'MUSCULATION', '1 mois', 70, 'images/illustration-fitness-et-musculation.jpg'),
(24, 'WATER RACE', 'WATER YOGA AND FITNESS', '1 mois', 90, 'images/Water-Aerobics-Classes-myrtle-beach.jpg'),
(25, 'NO MORE FAT', 'CARDIO + FITNESS', '2 mois', 160, 'images/cardio-peak-training-960x540.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `ID_admin` int(11) NOT NULL AUTO_INCREMENT,
  `USERNAME` text NOT NULL,
  `EMAIL` text NOT NULL,
  `Firstname` text NOT NULL,
  `Lastname` text,
  `sexe` varchar(10) DEFAULT NULL,
  `PASSWORD` text NOT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `mobile` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`ID_admin`, `USERNAME`, `EMAIL`, `Firstname`, `Lastname`, `sexe`, `PASSWORD`, `adresse`, `mobile`) VALUES
(1, 'anes', 'anes@gmail.com', 'anes', 'temani', NULL, 'aa', 'korba', 52715563);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`, `description`) VALUES
(1, 'vetements', 'rstnqnqeedd'),
(3, 'homme', 'llllllllllllllllllllllllllllllllllllllllllllll'),
(5, 'jdidaaaaa', 'ffffff'),
(6, 'prot', 'irodek rajel'),
(9, '5373', 'xr,jskrt,f'),
(12, 'mm', 'mmmm'),
(13, 'nouvelle', 'll');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `ID_CLIENT` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(10) NOT NULL DEFAULT 'user',
  `status` varchar(10) DEFAULT 'active',
  `USERNAME` text NOT NULL,
  `EMAIL` text NOT NULL,
  `Firstname` text NOT NULL,
  `Lastname` text,
  `Nombre des reclamations` char(10) DEFAULT NULL,
  `sexe` varchar(10) DEFAULT NULL,
  `PASSWORD` text NOT NULL,
  `BIRTHDAY` date DEFAULT NULL,
  `IMAGE` text,
  `adresse` varchar(50) DEFAULT NULL,
  `mobile` int(11) DEFAULT NULL,
  `EmailConfirmed` int(11) DEFAULT '0',
  `token` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_CLIENT`)
) ENGINE=InnoDB AUTO_INCREMENT=191 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`ID_CLIENT`, `role`, `status`, `USERNAME`, `EMAIL`, `Firstname`, `Lastname`, `Nombre des reclamations`, `sexe`, `PASSWORD`, `BIRTHDAY`, `IMAGE`, `adresse`, `mobile`, `EmailConfirmed`, `token`) VALUES
(167, 'admin', 'active', 'anes019a', 'anes.temani@esprit.tna', 'aa', 'azer', NULL, 'male', 'aa', '2019-04-12', '', 'azer', 22222222, 0, '0'),
(189, 'user', 'active', 'ous', 'anestemani00@gmail.com', 'aaaa', 'azerezr', NULL, 'male', 'zz', '2019-05-24', '6901557096293.jpg', 'azer', 52715563, 1, 'J7DaS/IKGi'),
(190, 'user', 'active', 'anes019', 'anes.temani@esprit.tn', 'anes', 'temani', NULL, 'male', 'YthPd8XEVz', '1988-07-14', '9561557129807.jpg', 'korba', 52715563, 1, '/awcN4WZC3');

-- --------------------------------------------------------

--
-- Structure de la table `coach`
--

DROP TABLE IF EXISTS `coach`;
CREATE TABLE IF NOT EXISTS `coach` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `horaire` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `coache` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `coach`
--

INSERT INTO `coach` (`id`, `date`, `nom`, `prenom`, `horaire`, `message`, `coache`, `telephone`) VALUES
(14, '2019-04-17', 'walid', 'tayche', '10am', 'l.k', 'lamia', '56892356'),
(17, '2019-04-03', 'walid', 'tayche6853', '10am', 'cdsv', 'sam', '23568989'),
(16, '2019-04-25', 'walid', 'tayche6853', '10am', 'cdsv', 'lamia', '23568989');

-- --------------------------------------------------------

--
-- Structure de la table `coachess`
--

DROP TABLE IF EXISTS `coachess`;
CREATE TABLE IF NOT EXISTS `coachess` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `specialite` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `coachess`
--

INSERT INTO `coachess` (`id`, `nom`, `prenom`, `specialite`, `email`, `image`) VALUES
(10, 'sam', 'haji', 'musculation', 'samirhaji@hotmail.fr', 'img_coach/professeur-home-coach-sportif-diplome-creps-montpellier-interviens-salle-exterieur-domicile-coaching-individuel.jpg'),
(13, 'walid', 'tayche6853', 'dsfgdfg', 'walidtayech@hotmail.com', 'img_coach/professeur-home-coach-sportive-diplomee-donne-cours-pilates-nantes-formee-pilates-post-therapie-femme-enceinte.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id` int(11) NOT NULL,
  `nom_prenom` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `nom_prod` varchar(255) NOT NULL,
  `quantite` int(4) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `mode_livraison` varchar(255) NOT NULL,
  `mode_paiement` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `nom_prenom`, `tel`, `nom_prod`, `quantite`, `prix`, `adresse`, `region`, `ville`, `mode_livraison`, `mode_paiement`) VALUES
(1, 'b', '55555555', 'sneakers1', 1, '50', 'a', 'a', 'a', 'retrait Ã  la salle', 'Paiement Ã  la livraison'),
(2, 'b', '55555555', 'sneakers1', 1, '50', 'a', 'a', 'a', 'retrait Ã  la salle', 'Paiement Ã  la livraison'),
(3, 'a', '55555555', 'sneakers1', 1, '50', 'a', 'a', 'a', 'retrait Ã  la salle', 'Paiement Ã  la livraison'),
(4, 'a', '55555555', 'sneakers1', 1, '50', 'a', 'a', 'a', 'retrait Ã  la salle', 'Paiement Ã  la livraison'),
(5, 'firas', '2523438', 'wifek', 1, '99999', 'rue', 'hh', 'hh', 'livraison standard', 'Paiement Ã  la livraison'),
(6, 'firas', '2523438', 'wifek', 1, '99999', 'rue', 'hh', 'hh', 'livraison standard', 'Paiement Ã  la livraison'),
(7, 'walid', '23565689', '53743', 1, '124.3', 'gjk', 'gj', 'df', 'retrait Ã  la salle', 'Paiement Ã  la livraison'),
(8, 'walid', '235689', '53743', 10, '124.3', 'gjk', 'gj', 'df', 'retrait Ã  la salle', 'Paiement Ã  la livraison'),
(9, 'vqvr qrevver', '245375', 'fnxn', 1, '20', 'rue', 'zagh', 'zagh', 'livraison standard', 'Paiement Ã  la livraison'),
(10, 'mohamedali jbali', '22113355', 'JUMBO GAINER', 1, '60', 'azet', 'nabeul', 'Korba', 'livraison standard', 'Paiement Ã  la livraison'),
(11, 'mohamedali jbali', '22113355', 'JUMBO GAINER ', 1, '120', 'korba', 'a', 'azer', 'livraison standard', 'Paiement Ã  la livraison'),
(12, 'mohamedali jbali', '22113355', 'JUMBO GAINER', 1, '260', 'ezr', 'nabeul', 'aa', 'livraison standard', 'Paiement Ã  la livraison'),
(13, 'mohamedali jbali', '22113355', 'JUMBO GAINER', 1, '260', 'korba', 'nabeul', 'Korba', 'livraison standard', 'Paiement Ã  la livraison'),
(14, 'mohamedali jbali', '22113355', 'MASSIVE GAINER', 1, '130', 'korba', 'nabeul', 'Korba', 'livraison standard', 'Paiement Ã  la livraison'),
(15, 'mohamedali jbali', '22113355', 'JUMBO GAINER', 1, '60', 'korba', 'nabeul', 'Korba', 'livraison standard', 'Paiement Ã  la livraison'),
(16, 'mohamedali jbali', '22113355', 'JUMBO GAINER ', 1, '120', 'korba', 'nabeul', 'Korba', 'livraison standard', 'Paiement Ã  la livraison'),
(17, 'aaaa azerezr', '52715563', 'JUMBO GAINER ', 1, '120', 'korba', 'nabeul', 'Korba', 'livraison standard', 'Paiement Ã  la livraison'),
(18, 'aaaa azerezr', '52715563', 'MASS 20 SCITEC', 1, '80', 'korba', 'nabeul', 'azer', 'livraison standard', 'Paiement Ã  la livraison'),
(19, 'aaaa azerezr', '52715563', 'MASS 20 SCITEC', 1, '80', 'korba', 'a', 'Korba', 'livraison standard', 'Paiement Ã  la livraison'),
(20, 'anes temani', '52715563', 'MASS INFUSION NUTREX ', 4, '210', 'korba', 'korba', 'aa', 'livraison standard', 'Paiement Ã  la livraison');

-- --------------------------------------------------------

--
-- Structure de la table `cour`
--

DROP TABLE IF EXISTS `cour`;
CREATE TABLE IF NOT EXISTS `cour` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datet` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `horaire` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `coure` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cour`
--

INSERT INTO `cour` (`id`, `datet`, `nom`, `prenom`, `horaire`, `message`, `coure`, `telephone`) VALUES
(28, '4/20/2019', 'walid', 'tayche', '10am', 'dscd', 'fitness', '23568989'),
(29, '4/30/2019', 'zba9', 'tayche', '10am', 'cdsv', 'spinning', '23568989'),
(30, '4/30/2019', 'walid', 'tayche', '10am', 'cdsv', 'body pump', '+216 97543633');

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

DROP TABLE IF EXISTS `facture`;
CREATE TABLE IF NOT EXISTS `facture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cmd` int(11) NOT NULL,
  `nom_prenom` varchar(255) NOT NULL,
  `dat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `adresse` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `mode_livraison` varchar(255) NOT NULL,
  `mode_paiement` varchar(255) NOT NULL,
  `nom_prod` varchar(255) NOT NULL,
  `quantite` int(11) NOT NULL,
  `prix` float NOT NULL,
  `total` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_cmd` (`id_cmd`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `facture`
--

INSERT INTO `facture` (`id`, `id_cmd`, `nom_prenom`, `dat`, `adresse`, `region`, `ville`, `mode_livraison`, `mode_paiement`, `nom_prod`, `quantite`, `prix`, `total`) VALUES
(2, 1, 'b', '2019-04-20 12:39:26', 'a', 'a', 'a', 'retrait Ã  la salle', 'Paiement Ã  la livraison', 'sneakers1', 1, 50, 56),
(4, 2, 'b', '2019-04-20 12:46:03', 'a', 'a', 'a', 'retrait Ã  la salle', 'Paiement Ã  la livraison', 'sneakers1', 1, 50, 56),
(5, 3, 'a', '2019-04-20 12:46:37', 'a', 'a', 'a', 'retrait Ã  la salle', 'Paiement Ã  la livraison', 'sneakers1', 1, 50, 56),
(6, 4, 'a', '2019-04-20 12:47:21', 'a', 'a', 'a', 'retrait Ã  la salle', 'Paiement Ã  la livraison', 'sneakers1', 1, 50, 56),
(7, 5, 'firas', '2019-04-21 21:24:21', 'rue', 'hh', 'hh', 'livraison standard', 'Paiement Ã  la livraison', 'wifek', 1, 99999, 100005),
(8, 6, 'firas', '2019-04-21 21:24:44', 'rue', 'hh', 'hh', 'livraison standard', 'Paiement Ã  la livraison', 'wifek', 1, 99999, 100005),
(9, 7, 'walid', '2019-04-24 16:40:32', 'gjk', 'gj', 'df', 'retrait Ã  la salle', 'Paiement Ã  la livraison', '53743', 1, 124.3, 130.3),
(10, 8, 'walid', '2019-04-25 22:48:24', 'gjk', 'gj', 'df', 'retrait Ã  la salle', 'Paiement Ã  la livraison', '53743', 10, 124.3, 130.3),
(11, 9, 'vqvr qrevver', '2019-04-29 00:42:15', 'rue', 'zagh', 'zagh', 'livraison standard', 'Paiement Ã  la livraison', 'fnxn', 1, 20, 26),
(12, 10, 'mohamedali jbali', '2019-05-05 19:32:28', 'azet', 'nabeul', 'Korba', 'livraison standard', 'Paiement Ã  la livraison', 'JUMBO GAINER', 1, 60, 66),
(13, 11, 'mohamedali jbali', '2019-05-05 19:49:07', 'korba', 'a', 'azer', 'livraison standard', 'Paiement Ã  la livraison', 'JUMBO GAINER ', 1, 120, 126),
(14, 12, 'mohamedali jbali', '2019-05-05 19:49:31', 'ezr', 'nabeul', 'aa', 'livraison standard', 'Paiement Ã  la livraison', 'JUMBO GAINER', 1, 260, 266),
(15, 13, 'mohamedali jbali', '2019-05-05 19:51:56', 'korba', 'nabeul', 'Korba', 'livraison standard', 'Paiement Ã  la livraison', 'JUMBO GAINER', 1, 260, 266),
(16, 14, 'mohamedali jbali', '2019-05-05 19:56:10', 'korba', 'nabeul', 'Korba', 'livraison standard', 'Paiement Ã  la livraison', 'MASSIVE GAINER', 1, 130, 136),
(17, 15, 'mohamedali jbali', '2019-05-05 21:02:04', 'korba', 'nabeul', 'Korba', 'livraison standard', 'Paiement Ã  la livraison', 'JUMBO GAINER', 1, 60, 66),
(18, 16, 'mohamedali jbali', '2019-05-05 21:37:56', 'korba', 'nabeul', 'Korba', 'livraison standard', 'Paiement Ã  la livraison', 'JUMBO GAINER ', 1, 120, 126),
(19, 17, 'aaaa azerezr', '2019-05-05 21:52:44', 'korba', 'nabeul', 'Korba', 'livraison standard', 'Paiement Ã  la livraison', 'JUMBO GAINER ', 1, 120, 126),
(20, 18, 'aaaa azerezr', '2019-05-05 22:29:32', 'korba', 'nabeul', 'azer', 'livraison standard', 'Paiement Ã  la livraison', 'MASS 20 SCITEC', 1, 80, 86),
(21, 19, 'aaaa azerezr', '2019-05-05 22:34:49', 'korba', 'a', 'Korba', 'livraison standard', 'Paiement Ã  la livraison', 'MASS 20 SCITEC', 1, 80, 86),
(22, 19, 'aaaa azerezr', '2019-05-05 22:34:53', 'korba', 'a', 'Korba', 'livraison standard', 'Paiement Ã  la livraison', 'MASS 20 SCITEC', 1, 80, 86),
(23, 19, 'aaaa azerezr', '2019-05-05 22:34:56', 'korba', 'a', 'Korba', 'livraison standard', 'Paiement Ã  la livraison', 'MASS 20 SCITEC', 1, 80, 86),
(24, 19, 'aaaa azerezr', '2019-05-05 22:35:00', 'korba', 'a', 'Korba', 'livraison standard', 'Paiement Ã  la livraison', 'MASS 20 SCITEC', 1, 80, 86),
(25, 19, 'aaaa azerezr', '2019-05-05 22:35:03', 'korba', 'a', 'Korba', 'livraison standard', 'Paiement Ã  la livraison', 'MASS 20 SCITEC', 1, 80, 86),
(26, 19, 'aaaa azerezr', '2019-05-05 22:35:07', 'korba', 'a', 'Korba', 'livraison standard', 'Paiement Ã  la livraison', 'MASS 20 SCITEC', 1, 80, 86),
(27, 19, 'aaaa azerezr', '2019-05-05 22:35:10', 'korba', 'a', 'Korba', 'livraison standard', 'Paiement Ã  la livraison', 'MASS 20 SCITEC', 1, 80, 86),
(28, 19, 'aaaa azerezr', '2019-05-05 22:35:13', 'korba', 'a', 'Korba', 'livraison standard', 'Paiement Ã  la livraison', 'MASS 20 SCITEC', 1, 80, 86),
(29, 19, 'aaaa azerezr', '2019-05-05 22:35:17', 'korba', 'a', 'Korba', 'livraison standard', 'Paiement Ã  la livraison', 'MASS 20 SCITEC', 1, 80, 86),
(30, 19, 'aaaa azerezr', '2019-05-05 22:35:20', 'korba', 'a', 'Korba', 'livraison standard', 'Paiement Ã  la livraison', 'MASS 20 SCITEC', 1, 80, 86),
(31, 19, 'aaaa azerezr', '2019-05-05 22:35:23', 'korba', 'a', 'Korba', 'livraison standard', 'Paiement Ã  la livraison', 'MASS 20 SCITEC', 1, 80, 86),
(32, 20, 'anes temani', '2019-05-06 08:06:02', 'korba', 'korba', 'aa', 'livraison standard', 'Paiement Ã  la livraison', 'MASS INFUSION NUTREX ', 4, 210, 216);

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `newsletter`
--

INSERT INTO `newsletter` (`email`) VALUES
('anestemani00@gmail.com'),
('anes.temani@esprit.tn');

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

DROP TABLE IF EXISTS `note`;
CREATE TABLE IF NOT EXISTS `note` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `notee` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_client` (`id_produit`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`id`, `id_client`, `id_produit`, `notee`) VALUES
(3, 147, 36, 4),
(6, 147, 57, 2),
(8, 147, 35, 4),
(9, 147, 63, 3),
(12, 147, 39, 5),
(13, 147, 64, 5),
(15, 175, 64, 4),
(16, 147, 77, 3),
(17, 188, 77, 4),
(18, 190, 76, 4),
(20, 189, 76, 1);

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(15) DEFAULT 'proteine',
  `nom` varchar(200) NOT NULL,
  `quantite` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `prix` float NOT NULL,
  `description` text NOT NULL,
  `ingredient` text,
  `gout` varchar(15) DEFAULT NULL,
  `poids` float DEFAULT NULL,
  `image` varchar(250) NOT NULL,
  `note` int(5) NOT NULL DEFAULT '0',
  `etat` varchar(10) NOT NULL DEFAULT 'false',
  `prix_promo` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_catid` (`cat_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=133 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `type`, `nom`, `quantite`, `cat_id`, `prix`, `description`, `ingredient`, `gout`, `poids`, `image`, `note`, `etat`, `prix_promo`) VALUES
(76, 'proteine', 'JUMBO GAINER', 20, 1, 60, 'Gainer haute performance pour une prise de masse maximale en musculation. IdÃ©al pour les ectomorphes et les personnes ayant du mal Ã  prendre de la masse.', '', '', 1, 'images/jumbo-scitec-nutrition-600x600.jpg', 3, 'true', 54),
(77, 'proteine', 'MASS 20 SCITEC', 20, 1, 80, 'MASS 20 SCITEC – 1.75KG est une formule pour la prise de masse et de force: Supplément facile à digérer qui contribue à l’amélioration des performances et de la croissance musculaire.', NULL, NULL, 1.75, 'images/MASS-20-SCITEC-600x600.jpg\r\n', 4, 'false', 0),
(78, 'proteine', 'JUMBO GAINER ', 20, 1, 120, 'Gainer haute performance pour une prise de masse maximale en musculation. Idéal pour les ectomorphes et les personnes ayant du mal à prendre de la masse.', NULL, NULL, 2.86, 'images/Scitec-Jumbo-2.86kg1.jpg', 0, 'false', 0),
(82, 'proteine', 'MASS INFUSION NUTREX ', 210, 1, 210, 'Formule complète de gain de poids\r\nFournit des protéines de lactosérum de haute qualité\r\n50g de protéines\r\n200g de glucides\r\n1120 Calories\r\n22g Acides aminés essentiels\r\n10g BCAA\r\n8.1g Précurseurs de glutamine', NULL, NULL, 5.5, 'images/MASS-INFUSION-CHOCOLATEs.jpg', 0, 'false', 0),
(83, 'proteine', 'JUMBO GAINER', 20, 1, 260, 'Gainer haute performance pour une prise de masse maximale en musculation. Idéal pour les ectomorphes et les personnes ayant du mal à prendre de la masse.', NULL, NULL, 8.8, 'images/JUMBO-GAINER-8-600x600.jpg', 0, 'false', 0),
(84, 'proteine', 'JUMBO GAINER', 20, 1, 175, 'Gainer haute performance pour une prise de masse maximale en musculation. Idéal pour les ectomorphes et les personnes ayant du mal à prendre de la masse.', NULL, NULL, 4.4, 'images/jumbo-scitec-nutrition4.4KG-600x600.jpg', 0, 'false', 0),
(85, 'proteine', 'Mass-Tech Performances Series', 20, 1, 200, ' Gainer intégral de qualité\r\n\r\n– Complexe de protéines et glucides\r\n\r\n– Riche en créatine et acides aminés', '', NULL, 3.18, 'images/MASS-TECH-600x600.jpg', 0, 'false', 0),
(86, 'proteine', 'MASSIVE GAINER', 20, 1, 130, 'Augmente le poids\r\nAugmente le volume musculaire\r\nAugmente la force musculaire\r\nAccroît l’énergie\r\nAméliore le rendement sportif\r\nAccélère la récupération des muscles\r\nPrévient le catabolisme\r\nContient une dose cliniquement validée de créatine\r\nComprend du Vitargo breveté', NULL, NULL, 3.7, 'images/massive-gainer-quamtrax-4KG.jpg', 0, 'false', 0),
(87, 'proteine', 'MASSIVE GAINER', 20, 1, 185, 'Augmente le poids\r\nAugmente le volume musculaire\r\nAugmente la force musculaire\r\nAccroît l’énergie\r\nAméliore le rendement sportif\r\nAccélère la récupération des muscles\r\nPrévient le catabolisme\r\nContient une dose cliniquement validée de créatine\r\nComprend du Vitargo breveté', NULL, NULL, 7, 'images/massive-gainer-quamtrax-7KG.jpg', 0, 'false', 0),
(88, 'proteine', 'MUTANT MASS', 20, 1, 250, 'Gainer de très haute qualité pour une prise de muscle ultra-rapide en évitant la prise de gras\r\nComposition très complète\r\nPermet une prise de muscle très rapide, un gain de force optimal et une hausse des performances\r\nConvient aux débutants comme aux pratiquants confirmés', NULL, NULL, 6.8, 'images/mutant-mass-2kg-coconut-mutant_1_1-600x600.jpg', 0, 'false', 0),
(89, 'proteine', 'TRUE MASS', 20, 1, 175, 'Protein Multi-fonctionnelle et Glucides Matrice\r\nBCAA et d’autres acides aminés essentiels et non essentiels\r\nDeux sources de glucides, y compris la farine d’avoine\r\nExcellente source de fibre. Contient 16g de gras par portion', NULL, NULL, 4.7, 'images/TRUE-MASS-1200-600x600.jpg', 0, 'true', 105),
(92, 'proteine', 'SERIOUS MASS', 20, 1, 220, 'Serious Mass est un excellent supplément calorique qui apporte un surplus de calories basées sur une combinaison d’hydrates de carbone et de protéines avec un minimum de graisse qui, avec une alimentation et un entraînement adéquate, vous donnera le parfait matériel de construction musculaire donnant la possibilité de supprimer un ou deux repas par jour.', NULL, NULL, 5.45, 'images/eu_seriousmass_12lb_vanilla-600x600.jpg', 0, 'false', 0),
(93, 'proteine', 'PURE GAIN XL', 20, 1, 50, 'Pure Gain XL 1KG est spécialement formulé pour les sportifs ayant besoin d’une recharge extra de glycogène musculaire pour fournir de l’énergie et de la puissance pendant l’exercice, ce qui se traduit par une augmentation du  rendement sportif lors des entraînements prolongés, une augmentation de la force et de la puissance lors des entraînements  anaérobiques et  une rapide récupération post-entraînement.', NULL, NULL, 1, 'images/PURE-GAIN-XL-1KG-600x600.jpg', 0, 'false', 0),
(94, 'proteine', 'PURE GAIN XL', 20, 1, 175, 'Pure Gain XL 7KG est spécialement formulé pour les sportifs ayant besoin d’une recharge extra de glycogène musculaire pour fournir de l’énergie et de la puissance pendant l’exercice, ce qui se traduit par une augmentation du  rendement sportif lors des entraînements prolongés, une augmentation de la force et de la puissance lors des entraînements  anaérobiques et  une rapide récupération post-entraînement.', NULL, NULL, 7, 'images/gain-xl-gainer-prise-de-masse7KG.jpg', 0, 'false', 0),
(95, 'proteine', 'PURE GAIN XL', 20, 1, 120, 'Pure Gain XL 7KG est spécialement formulé pour les sportifs ayant besoin d’une recharge extra de glycogène musculaire pour fournir de l’énergie et de la puissance pendant l’exercice, ce qui se traduit par une augmentation du  rendement sportif lors des entraînements prolongés, une augmentation de la force et de la puissance lors des entraînements  anaérobiques et  une rapide récupération post-entraînement.', NULL, NULL, 3, 'images/pure-gain-xl-3xl-nutrition-1-600x600.jpg', 0, 'false', 0),
(96, 'proteine', 'REAL GAINS UNIVERSAL', 20, 1, 220, '– Gainer mondialement réputé pour son efficacité\r\n\r\n– Complexe de protéines et de glucides\r\n\r\n– Prise de masse musculaire sèche exceptionnelle', NULL, NULL, 4.7, 'images/REAL-GAINS-600x600.jpg', 0, 'true', 110),
(97, 'proteine', '100% WHEY PLATINIUM', 20, 5, 180, 'Isolats et peptides de whey\r\n\r\n–  5.5g de BCAA, 4g de L-Glutamine et 11.6g d’acides aminés essentiels par dose\r\n\r\n– Whey haut de gamme aux goût fantastiques', NULL, NULL, 2.3, 'images/Platinum-100-Whey-Essential-Series-1-600x600.jpg', 0, 'false', 0),
(101, 'proteine', 'ISO 100 DYMATIZE', 20, 5, 195, '90% d’isolat de whey hydrolysée\r\n\r\n– 0 lactose, 0 graisse, 0 glucides, 0 cholestérol\r\n\r\n– Pureté exceptionnelle !', NULL, NULL, 1.41, 'images/th.jpg', 0, 'false', 0),
(102, 'proteine', 'ELITE WHEY DYMATIZE', 20, 5, 380, ' Protéine de lactosérum exceptionnelle\r\n\r\n– Très riche en acides aminés\r\n\r\n– Enzymes digestives', NULL, NULL, 4.5, 'images/WHEY-ELITE2-600x600.jpg', 0, 'false', 0),
(103, 'proteine', 'ELITE CASEIN', 20, 5, 125, 'ELITE CASEIN – 907GR contient pas moins de 24 grammes de caséine micellaire (protéine) à assimilation lente, 10 grammes de BCAA et pas de sucres ajoutés. Particulièrement efficace avant d’aller dormir !\r\n', NULL, NULL, 0.908, 'images/ELITE-CASEIN-907GR-600x600.jpg', 0, 'false', 0),
(104, 'proteine', 'DIRECT WHEY PROTEIN', 20, 5, 165, 'DIRECT WHEY PROTEIN – 2KG : Concentré de lactosérum pur (Whey), l’option la plus anabolique pour la croissance musculaire et la récupération.', NULL, NULL, 2, 'images/whey-protein-DIRECT.jpg', 0, 'false', 0),
(105, 'proteine', 'ANIMAL WHEY', 20, 5, 195, 'Chargé avec l’isolât de protéines de lactosérum\r\nEnzymes digestives ajoutées pour une absorption et une digestibilité améliorées\r\nSupprime les exigences en matière de protéines de Hardcore Lifters\r\nDes profils de saveurs impressionnants', NULL, NULL, 1.8, 'images/ANIMAL-WHEY-600x600.jpg', 0, 'false', 0),
(106, 'proteine', 'NITRO-TECH WHEY GOLD', 20, 5, 190, 'Avec micro-filtré isolat de protéines de lactosérum , plus concentré de lactosérum, NITRO-TECH WHEY GOLD – 2.5KG offre une absorption supérieure, la digestibilité et miscibilité. Chaque godet sert jusqu’à 24g de protéines ultra-premium qui fournit 5.5g de BCAA et 4g de glutamine et précurseur.', NULL, NULL, 2.5, 'images/th1.jpg', 0, 'false', 0),
(107, 'proteine', 'NITRO-TECH PERFORMANCE SERIES ', 20, 5, 195, ' Protéine de lactosérum\r\n\r\n– Riche en acides aminés\r\n\r\n– Croissance musculaire extrême', NULL, NULL, 1.8, 'images/NITRO-TECH-600x600.jpg', 0, 'false', 0),
(108, 'proteine', 'MUTANT WHEY', 20, 5, 185, '– 5 sources de protéines de lactosérum\r\n\r\n– Absorption totale, ultra rapide\r\n\r\n– Très riche en BCAA', NULL, NULL, 2.27, 'images/Mutant-Whey-2.27kg-chocolate.jpg', 0, 'false', 0),
(109, 'proteine', '\r\nSyntha-6 FCT\r\nSYNTHA-6', 20, 5, 185, ' 6 sources de protéines\r\n\r\n– Diffusion lente et rapide\r\n\r\n– Développement musculaire garanti', NULL, NULL, 2.3, 'images/Syntha-6-600x600.jpg', 0, 'false', 0),
(110, 'proteine', 'ANIMAL PAK-30 PACKS', 20, 6, 130, 'ANIMAL PAK – 30 PACKS de la célèbre marque Universal Nutrition, est une combinaison unique et exceptionnelle de vitamines, minéraux, antioxydants, acides aminés et d’énergisants.', NULL, NULL, NULL, 'images/Universal_Nutrition_Animal_Pak_44_Packs-600x600.jpg', 0, 'false', 0),
(111, 'proteine', 'ANIMAL BCAA PRO -100CPS', 20, 6, 60, 'ANIMAL BCAA PRO -100CPS: Anabolisme musculaire, Force, Récupération, Retarde la fatigue, Performance.', NULL, NULL, NULL, 'images/ANIMAL-BCAA-PRO-100CPS-600x600.jpg', 0, 'false', 0),
(112, 'proteine', 'ANABOLIC AMINO 10000 3XL -300TAB', 20, 6, 90, 'Fournit 2000 mg d’acides aminés de haute qualité par comprimé\r\nAugmente et soutiens la prise de masse musculaire\r\nConserve la masse musculaire et la reconstruit plus rapidement\r\nTrès dosé en BCAA Complexe parfait pour une prise de masse rapide et efficace\r\n ', NULL, NULL, NULL, 'images/ANABOLIC-AMINO-10000-3XL-600x600.jpg', 0, 'false', 0),
(113, 'proteine', 'ANABOLIC AMINO 10000 -325TAB', 20, 6, 90, 'RUSSIAN BEAR ANABOLIC AMINO 10000 est un complexe d’acides aminés provenant de enzymatiquement hydrolysé Whey Isolate Protein.', NULL, NULL, NULL, 'images/amino10000-PST-600x600.jpg', 0, 'false', 0),
(114, 'proteine', 'AMINO X (435Gr)', 20, 6, 95, '– Le premier supplément effervescent !\r\n\r\n– 10 g d’acides aminés par dose\r\n\r\n– Sans sucres', NULL, NULL, NULL, 'images/bsn-amino-x-front-b_1_1-600x600.jpg', 0, 'false', 0),
(115, 'proteine', 'AMINO PRO -270 GR', 20, 6, 80, '5,5 G AMINO BLEND AVEC ELECTROLYTES\r\n2,5 G BCAAS\r\nACIDES AMINÉS DE FORME LIBRE CITRULLINE ET TAURINE\r\nGOÛT AMBIANT, PROPRE ET RAFRAÎCHISSANT', NULL, NULL, NULL, 'images/dymatize-amino-pro-lima-limon-600x600.jpg', 0, 'false', 0),
(116, 'proteine', 'AMINO BUILD- NEXT GEN (279 gr)', 20, 6, 75, ' BCAA Ratio 2:1:1\r\n– Amélioration spectaculaire de l’endurance, de l’énergie et de la récupération\r\n– 7,25 grammes d’acides aminés par mesure', NULL, NULL, NULL, 'images/amino-build-next-gen-600x600.jpg', 0, 'false', 0),
(117, 'proteine', 'AMINO 5600 -500TAB', 20, 6, 95, ' Formule complète d’acides aminés en tablettes\r\n\r\n– Enrichie en BCAA\r\n\r\n– Favorise le développement musculaire sec et la récupération', NULL, NULL, NULL, 'images/scitec-amino-5600-500-tablets-8801-9790-1088-1-productbig-600x600.jpg', 0, 'false', 0),
(118, 'proteine', 'AMINO 5600 -200TAB', 20, 6, 50, '– Formule complète d’acides aminés en tablettes\r\n\r\n– Enrichie en BCAA\r\n\r\n– Favorise le développement musculaire sec et la récupération', NULL, NULL, NULL, 'images/amino-5600-200-tabs-scitec.jpg', 0, 'false', 0),
(119, 'proteine', 'TR-90 + ZMA -90CPS', 20, 3, 70, 'Optimise la production de testostérone\r\nIl augmente la force, la puissance et la performance physique\r\nAméliore la puissance sexuelle\r\nAugmente la production de sperme', NULL, NULL, NULL, 'images/tr-90-zma-3XL-600x600.jpg', 0, 'false', 0),
(120, 'proteine', 'T-360 SCITEC NUTRITION 108CPS', 20, 3, 65, 'Notre complexe de T-360 contient plusieurs ingrédients dont\r\n1) Extrait de tribulus terrestris\r\n2) de la L-arginine\r\n3) de acetyl l-carnitine HCI\r\n4) de la l-carnitine l-tartrate\r\n5) du zinc', NULL, NULL, NULL, 'images/scitec-t-360-testo-booster-5-component-tribulus-complex-108-caps-600x600.jpg\r\n', 0, 'false', 0),
(121, 'proteine', 'GH SURGE-90 CPS', 20, 3, 60, ' Stimulant Naturel d‘Hormone de  Croissance (GH)\r\n– Accélère la prise de Muscle et réduit la masse Grasse', NULL, NULL, NULL, 'images/gh-surge-600x600.jpg', 0, 'false', 0),
(122, 'proteine', 'GH MAX-180 CAPS', 20, 3, 115, ' renforce les taux naturels de l’hormone de croissance\r\n\r\n formule scientifiquement équilibrée\r\n\r\nstimule la synthèse des protéines\r\n\r\n réduit le catabolisme protéique.\r\n\r\npharmacologiquement prouvé de 2:1 d’ arginine : ornithine.', NULL, NULL, NULL, 'images/gh-max-universal-180-capsulas.jpg', 0, 'false', 0),
(123, 'proteine', 'GH EXPLODE 3XL-100CPS', 20, 3, 60, 'Ces deux acides aminés reliés entre eux ont un puissant effet sur la stimulation de l’hormone de croissance, hormone de croissance, la somatostatine et de blocage, qui neutralise l’hormone.', NULL, NULL, NULL, 'images/GH-EXPLODE-600x600.jpg', 0, 'false', 0),
(124, 'proteine', 'Animal STAK 21PACKS', 20, 3, 160, 'Universal Nutrition Animal Stak est un complément booster de testostérone qui me parait vraiment très intéressant, très bien fourni en ingrédients reconnus ou aux résultats intéressants.', NULL, NULL, NULL, 'images/ANIMAL-STAK-1-600x600.jpg', 0, 'false', 0),
(125, 'proteine', 'SUPER VIT-120 CAPS', 20, 7, 70, 'Super Vit de Quamtrax est un supplément de multivitamines et de multiminéraux qui soutient les fonctions vitales de l’organisme, spécialement développé pour les athlètes de force et les culturistes. D’un puissant effet antioxydant. Il améliore l’absorption des nutriments, comme les protéines et les minéraux. Il fortifie le système immunitaire. Il améliore la capacité physique et mentale.', NULL, NULL, NULL, 'images/super-vit-quamtrax.jpg', 0, 'false', 0),
(126, 'proteine', 'PLATINUM MULTIVITAMIN 90 CPS', 20, 7, 65, 'Complexe de micronutriments élaboré pour les athlètes\r\nContient un dosage élevé en vitamines, minéraux et oligoéléments\r\nDosage élevé de vitamines du groupe B\r\nApport complet en minéraux et oligoéléments\r\nApporte du zinc, du magnésium, du calcium…\r\nFormule renforcée en acides aminés', NULL, NULL, NULL, 'images/813lVarXDeL._SL1500_-600x600.jpg', 0, 'false', 0),
(127, 'proteine', 'Mega Daily One Plus-60CPS', 20, 7, 50, 'Mega Daily One Plus – 60CPS est une formule avancée à base de multi-vitamines et sels minéraux qui contient pas moins de 15 ingrédients.', NULL, NULL, NULL, 'images/scitec_mega_daily_one_plus.jpg', 0, 'false', 0),
(128, 'proteine', 'GLUCOSAMINE 1100mg (60CPS)', 20, 7, 50, 'Prévient la dégénérescence du cartilage\r\narticulaires Anti-inflammatoire\r\nreleveur conjoint de la douleur\r\nAméliore la mobilité articulaire', NULL, NULL, NULL, 'images/glucosamina-600x600.jpg', 0, 'false', 0),
(131, 'proteine', 'ANIMAL PAK- 30 PACKS\r\nDT 130.00', 20, 7, 130, 'ANIMAL PAK – 30 PACKS de la célèbre marque Universal Nutrition, est une combinaison unique et exceptionnelle de vitamines, minéraux, antioxydants, acides aminés et d’énergisants.', NULL, NULL, NULL, 'images/Universal_Nutrition_Animal_Pak_44_Packs-600x600.jpg', 0, 'false', 0),
(132, 'proteine', 'ANIAML FLEX-44 PACKS', 20, 7, 150, 'ANIAML FLEX – 44 PACKS contribue à vous fournir des composants en lien direct ou indirect à vos tissus conjonctifs, articulations et ligaments.\r\n\r\nUN COMPLEXE DE CHONDROÏTINE, GLUCOSAMINE, MANGANÈSE, MSM SIGNÉ UNIVERSAL NUTRITION', NULL, NULL, NULL, 'images/th2.jpg', 0, 'false', 0);

-- --------------------------------------------------------

--
-- Structure de la table `programme`
--

DROP TABLE IF EXISTS `programme`;
CREATE TABLE IF NOT EXISTS `programme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cour` varchar(255) NOT NULL,
  `temps` varchar(255) NOT NULL,
  `descrip` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5523 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `programme`
--

INSERT INTO `programme` (`id`, `cour`, `temps`, `descrip`) VALUES
(9, 'repos', '08:00', 'relÃ¢chementeeee'),
(6, 'repos', '', ''),
(7, 'body pump', '08:00', 'attirement'),
(8, 'yoga', '08:00', ''),
(5, 'yoga', '09:00', 'relaxation'),
(4, 'fitness', '08:00', 'relachement'),
(3, 'body pump', '08:00', 'recuperation'),
(5522, 'repos', '', ''),
(10, 'bodybalance', '10:00', 'relaxation'),
(5500, 'aerobie', '10:00', 'relaxation'),
(5501, 'spinning', '10:00', ''),
(5502, 'yoga', '10:00', 'relaxation'),
(5503, 'fitness', '10:00', ''),
(5504, 'weigtlifting', '10:00', 'musculation'),
(5505, 'aerobie', '10:00', ''),
(5506, 'repos', '', ''),
(5507, 'weigtlifting', '14:00', 'relaxation'),
(5508, 'bodybuilding', '14:00', 'musculation'),
(5509, 'repos', '', ''),
(5510, 'aerobie', '14:00', ''),
(5511, 'bodybuilding', '14:00', 'musculation'),
(5512, 'repos', '', ''),
(5513, 'bodybump', '14:00', ''),
(5514, 'repos', '', ''),
(5515, 'spinning', '16:00', 'relachement'),
(5516, 'fitness', '16:00', 'relaxation'),
(5517, 'body building', '16:00', 'relaxation'),
(5518, 'yoga', '16:00', 'relaxation'),
(5519, 'fitness', '16:00', 'relaxation'),
(5520, 'repos', '', ''),
(5521, 'yoga', '16:00', 'relaxation');

-- --------------------------------------------------------

--
-- Structure de la table `promo`
--

DROP TABLE IF EXISTS `promo`;
CREATE TABLE IF NOT EXISTS `promo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `idp` int(11) NOT NULL,
  `pour` varchar(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_produit_promo` (`idp`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `promo`
--

INSERT INTO `promo` (`id`, `nom`, `idp`, `pour`) VALUES
(1, 'Promo_hiver', 76, '10'),
(2, 'Promo_hiver', 89, '40'),
(3, 'Promo_hiver', 96, '50');

-- --------------------------------------------------------

--
-- Structure de la table `pub`
--

DROP TABLE IF EXISTS `pub`;
CREATE TABLE IF NOT EXISTS `pub` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `pos` varchar(10) NOT NULL,
  `im` varchar(255) NOT NULL,
  `nb` int(11) NOT NULL,
  `nb_dis` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pub`
--

INSERT INTO `pub` (`id`, `nom`, `pos`, `im`, `nb`, `nb_dis`) VALUES
(37, 'zba9', '1', 'upload/pub7.jpg', 2, 0),
(38, 'zba9', '1', 'upload/pub1.jpg', 1, 0),
(39, 'walid', '2', 'upload/pub5.jpg', 0, 0),
(41, 'anes', 'POS_INIT', 'upload/pog.mp4', 0, 0),
(42, 'anes', '3', 'upload/anes.png', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `pub_liked`
--

DROP TABLE IF EXISTS `pub_liked`;
CREATE TABLE IF NOT EXISTS `pub_liked` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client` varchar(255) NOT NULL,
  `pub` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pub_liked`
--

INSERT INTO `pub_liked` (`id`, `client`, `pub`) VALUES
(25, 'anestemani00@gmail.com', 37),
(26, 'anestemani00@gmail.com', 38),
(27, 'anes.temani@esprit.tn', 37);

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

DROP TABLE IF EXISTS `reclamation`;
CREATE TABLE IF NOT EXISTS `reclamation` (
  `Id_reclamation` int(11) NOT NULL AUTO_INCREMENT,
  `TYPE` varchar(50) NOT NULL,
  `ID_client` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `CONTENU` text NOT NULL,
  `IMAGE` text,
  `ETAT` varchar(20) NOT NULL DEFAULT 'not treated',
  PRIMARY KEY (`Id_reclamation`),
  KEY `FK` (`ID_client`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reclamation`
--

INSERT INTO `reclamation` (`Id_reclamation`, `TYPE`, `ID_client`, `Username`, `CONTENU`, `IMAGE`, `ETAT`) VALUES
(25, 'service dans la salle', 189, 'anestemani00@gmail.com', 'aze', NULL, 'not treated');

-- --------------------------------------------------------

--
-- Structure de la table `reserver`
--

DROP TABLE IF EXISTS `reserver`;
CREATE TABLE IF NOT EXISTS `reserver` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coache` varchar(255) NOT NULL,
  `horaire` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reserver`
--

INSERT INTO `reserver` (`id`, `coache`, `horaire`, `date`) VALUES
(3, 'lamia', '11 am', '3/6/2019');

-- --------------------------------------------------------

--
-- Structure de la table `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE IF NOT EXISTS `wishlist` (
  `id_client` int(11) NOT NULL DEFAULT '1',
  `id_produit` int(11) NOT NULL,
  PRIMARY KEY (`id_client`,`id_produit`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `wishlist`
--

INSERT INTO `wishlist` (`id_client`, `id_produit`) VALUES
(1, 32),
(147, 36),
(149, 34),
(149, 36),
(188, 77),
(189, 76),
(189, 77),
(190, 82);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie` ADD FULLTEXT KEY `desc_cat` (`description`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD CONSTRAINT `FK` FOREIGN KEY (`ID_client`) REFERENCES `client` (`ID_CLIENT`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

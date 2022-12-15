-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 05 déc. 2022 à 10:30
-- Version du serveur : 8.0.27
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `foot`
--

-- --------------------------------------------------------

--
-- Structure de la table `achat`
--

DROP TABLE IF EXISTS `achat`;
CREATE TABLE IF NOT EXISTS `achat` (
  `id_user` int DEFAULT NULL,
  `id_rencontre` int DEFAULT NULL,
  `date_achat` datetime DEFAULT CURRENT_TIMESTAMP,
  KEY `id_rencontre` (`id_rencontre`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `achat`
--

INSERT INTO `achat` (`id_user`, `id_rencontre`, `date_achat`) VALUES
(72, 4, '2022-12-04 11:14:08'),
(61, 10, '2022-12-01 11:14:08'),
(64, 2, '2022-12-04 11:14:08'),
(62, 3, '2022-11-30 11:14:08'),
(87, 9, '2022-12-02 11:14:08'),
(68, 7, '2022-11-28 11:14:08'),
(85, 11, '2022-12-01 11:14:08'),
(68, 3, '2022-12-04 11:14:08'),
(69, 2, '2022-12-04 11:14:08'),
(75, 6, '2022-12-02 11:14:08'),
(70, 2, '2022-11-30 11:14:08'),
(87, 2, '2022-12-04 11:14:08'),
(80, 4, '2022-12-04 11:14:08'),
(86, 3, '2022-12-04 11:14:08'),
(66, 6, '2022-12-05 11:14:08');

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

DROP TABLE IF EXISTS `equipe`;
CREATE TABLE IF NOT EXISTS `equipe` (
  `nom_equipe` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`nom_equipe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `equipe`
--

INSERT INTO `equipe` (`nom_equipe`) VALUES
('ALLEMAGNE'),
('ANGLETERRE'),
('ARGENTINE'),
('AUSTRALIE'),
('BELGIQUE'),
('BOLIVIE'),
('BRESIL'),
('CAMEROUN'),
('CANADA'),
('CHINE'),
('COLOMBIE'),
('CONGO'),
('COREE'),
('EGYPTE'),
('ESPAGNE'),
('FRANCE'),
('GHANA'),
('IRAN'),
('ITALIE'),
('JAPON'),
('MAROC'),
('MEXIQUE'),
('NIGERIA'),
('POLOGNE'),
('PORTUGAL'),
('QATAR'),
('RUISSIE'),
('SENEGAL'),
('SUISSE'),
('TOGO'),
('TUNISIE'),
('TURQUIE');

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

DROP TABLE IF EXISTS `personne`;
CREATE TABLE IF NOT EXISTS `personne` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `prenom` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `nom` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `sexe` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `login` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `mdp` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ville` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `role` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`id_user`, `prenom`, `nom`, `sexe`, `login`, `mdp`, `ville`, `role`) VALUES
(59, 'Arthur', 'Ayoub', 'homme', 'artayub', 'ilci', 'Marseilles', 'client'),
(60, 'Mamadou', 'Dia', 'homme', 'mamsd', 'ilci', 'Dakar', 'client'),
(61, 'Emilie', 'Divine', 'femme', 'emilid', 'ilci', 'Brazzaville', 'client'),
(62, 'Anna', 'Apolline', 'femme', 'appol', 'ilci', 'Paris', 'client'),
(63, 'Arthur', 'Nathan', 'homme', 'artayub2', 'ilci', 'Marseilles', 'client'),
(64, 'Arthur', 'Félix', 'homme', 'artayub3', 'ilci', 'Marseilles', 'client'),
(65, 'Candice', 'Alicia', 'femme', 'candal', 'ilci', 'Yaoundé', 'client'),
(66, 'Arthur', 'Jacob', 'homme', 'artayub4', 'ilci', 'Marseilles', 'client'),
(67, 'Salim', 'Ayoub', 'homme', 'artayub5', 'ilci', 'Marseilles', 'client'),
(68, 'Charline', 'Elise', 'femme', 'charline', 'ilci', 'Paris', 'client'),
(69, 'Chloé', 'Clémence', 'femme', 'chlocle', 'ilci', 'Nantes', 'client'),
(70, 'Aminata', 'Kane', 'femme', 'amika', 'ilci', 'Fatick', 'client'),
(71, 'Arthur', 'Kamal', 'homme', 'artayub6', 'ilci', 'Belin', 'client'),
(72, 'Adam', 'Alexandre', 'homme', 'alexa', 'ilci', 'Bruxelles', 'client'),
(73, 'Jean', 'Jacob', 'homme', 'jacob', 'ilci', 'Accra', 'client'),
(74, 'Neith', 'Illunga', 'homme', 'neith', 'ilci', 'Brazzaville', 'client'),
(75, 'Fodé', 'Massiré', 'homme', 'fadma', 'ilci', 'Conakry', 'client'),
(76, 'Anna', 'Lisa', 'femme', 'anlis', 'ilci', 'Rabat', 'client'),
(77, 'Alice', 'Divine', 'femme', 'alidiv', 'ilci', 'Tunis', 'client'),
(78, 'William', 'Lavit', 'homme', 'willav', 'ilci', 'Courbevoie', 'client'),
(79, 'Amélia', 'Félix', 'femme', 'amfel', 'ilci', 'Paris', 'client'),
(80, 'Eduard', 'Mendy', 'homme', 'edumen', 'ilci', 'Londres', 'client'),
(81, 'Jean', 'Luck', 'homme', 'jluck', 'ilci', 'Paris', 'client'),
(82, 'Emma', 'Liam', 'femme', 'emma', 'ilci', 'Nantes', 'client'),
(83, 'Olivia', 'Jacob', 'femme', 'olivja', 'ilci', 'Rome', 'client'),
(84, 'Racky', 'Guiro', 'femme', 'rackg', 'ilci', 'Dakar', 'client'),
(85, 'harouna', 'Sall', 'homme', 'rounsal', 'ilci', 'Sira', 'client'),
(86, 'Moussa', 'Lepen', 'homme', 'lepen', 'ilci', 'Paris', 'client'),
(87, 'Louise', 'Ayoub', 'femme', 'louise', 'ilci', 'Yaoundé', 'client'),
(88, 'Samuel', 'Eto', 'homme', 'ilci', 'ilci', 'Yaoundé', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `rencontre`
--

DROP TABLE IF EXISTS `rencontre`;
CREATE TABLE IF NOT EXISTS `rencontre` (
  `id_rencontre` int NOT NULL AUTO_INCREMENT,
  `nom_equipe_a` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nom_equipe_b` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lieu` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `date_match` datetime NOT NULL,
  `heure_match` time NOT NULL,
  PRIMARY KEY (`id_rencontre`),
  UNIQUE KEY `jour_rencontre` (`nom_equipe_a`,`nom_equipe_b`,`date_match`),
  KEY `nom_equipe_b` (`nom_equipe_b`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rencontre`
--

INSERT INTO `rencontre` (`id_rencontre`, `nom_equipe_a`, `nom_equipe_b`, `lieu`, `date_match`, `heure_match`) VALUES
(1, 'ALLEMAGNE', 'ARGENTINE', 'Pékin', '2022-12-05 10:03:27', '16:00:00'),
(2, 'IRAN', 'GHANA', 'Bamako', '2022-12-05 10:05:04', '17:30:00'),
(3, 'SENEGAL', 'ANGLETERRE', 'Doha', '2022-12-04 11:05:17', '20:00:00'),
(4, 'COREE', 'BELGIQUE', 'Séoul', '2022-11-09 11:05:17', '15:30:00'),
(5, 'FRANCE', 'CANADA', 'Toronto', '2023-01-12 11:05:17', '23:00:00'),
(6, 'AUSTRALIE', 'EGYPTE', 'Caire', '2022-12-23 11:05:17', '18:00:00'),
(7, 'CHINE', 'QATAR', 'Doha', '2022-12-30 11:05:17', '15:00:00'),
(8, 'BRESIL', 'ITALIE', 'Dakar', '2022-12-31 11:05:17', '14:30:00'),
(9, 'MAROC', 'BOLIVIE', 'Casablanca', '2022-12-01 11:05:17', '17:30:00'),
(10, 'SUISSE', 'TOGO', 'Lomé', '2022-12-21 11:05:17', '19:00:00'),
(11, 'FRANCE', 'ARGENTINE', 'Doha', '2022-12-25 11:05:17', '19:00:00');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `achat`
--
ALTER TABLE `achat`
  ADD CONSTRAINT `achat_ibfk_1` FOREIGN KEY (`id_rencontre`) REFERENCES `rencontre` (`id_rencontre`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `achat_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `personne` (`id_user`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `rencontre`
--
ALTER TABLE `rencontre`
  ADD CONSTRAINT `rencontre_ibfk_1` FOREIGN KEY (`nom_equipe_a`) REFERENCES `equipe` (`nom_equipe`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `rencontre_ibfk_2` FOREIGN KEY (`nom_equipe_b`) REFERENCES `equipe` (`nom_equipe`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

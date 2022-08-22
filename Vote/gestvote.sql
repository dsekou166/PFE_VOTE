-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 22 août 2022 à 01:32
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestvote`
--

-- --------------------------------------------------------

--
-- Structure de la table `arrondissement`
--

DROP TABLE IF EXISTS `arrondissement`;
CREATE TABLE IF NOT EXISTS `arrondissement` (
  `id_arron` int NOT NULL AUTO_INCREMENT,
  `nom_arron` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_dep` int DEFAULT NULL,
  PRIMARY KEY (`id_arron`),
  KEY `id_dep` (`id_dep`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `arrondissement`
--

INSERT INTO `arrondissement` (`id_arron`, `nom_arron`, `id_dep`) VALUES
(3, 'Dakar Plateau', 1),
(4, 'Almadie', 1),
(5, 'Parcelles Assainie', 1),
(6, 'Grand Dakar', 1),
(7, 'guediawaye', 4),
(8, 'Pikine Dagoudane', 3),
(9, 'Thiaroye', 3),
(10, 'Niayes', 3),
(11, 'rufisque', 5),
(12, 'sangalkam', 5),
(13, 'mbambilor', 5),
(14, 'thies nord', 6),
(15, 'thies sud', 6),
(16, 'Mbour arrondissement 1', 8),
(17, 'Mbour arrondissement 2', 8);

-- --------------------------------------------------------

--
-- Structure de la table `bureau`
--

DROP TABLE IF EXISTS `bureau`;
CREATE TABLE IF NOT EXISTS `bureau` (
  `id_bureau` int NOT NULL AUTO_INCREMENT,
  `nom_bureau` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_commune` int DEFAULT NULL,
  PRIMARY KEY (`id_bureau`),
  KEY `id_commune` (`id_commune`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `bureau`
--

INSERT INTO `bureau` (`id_bureau`, `nom_bureau`, `id_commune`) VALUES
(1, 'bureau1', 1),
(2, 'bureau2', 1),
(3, 'bureau1', 2),
(4, 'bureau2', 2),
(5, 'bureau1', 6),
(6, 'bureau1', 5),
(7, 'bureau1', 3),
(8, 'bureau2', 3),
(9, 'bureau 1', 3),
(10, 'bureau 3', 5),
(11, 'bureau1', 7),
(12, 'bureau2', 7),
(13, 'bureau1', 8),
(14, 'bureau2', 8),
(15, 'bureau 3', 2),
(16, 'bureau1', 4),
(17, 'premier bureau mbour', 4);

-- --------------------------------------------------------

--
-- Structure de la table `candidat`
--

DROP TABLE IF EXISTS `candidat`;
CREATE TABLE IF NOT EXISTS `candidat` (
  `id_candidat` int NOT NULL AUTO_INCREMENT,
  `nom_candidat` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nom_partie` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `photo_parti` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  PRIMARY KEY (`id_candidat`),
  UNIQUE KEY `photo` (`id_candidat`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `candidat`
--

INSERT INTO `candidat` (`id_candidat`, `nom_candidat`, `nom_partie`, `photo_parti`) VALUES
(1, 'Macky Sall', 'carantech', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQka_kqfAJ7JkwTm3XEsyziKh0MmuqLai0ErVlK4DMe3P3VVf3xY3TQC6-mx_oHlP81s4E&usqp=CAU'),
(2, 'Ousmane Sonko', 'PASTEF', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHxPtBtn6P5_EkpC5zAGKEbpGpotsG9g0Anc3V31vJH-q9g_e8ywnvSgxXdiI87MsDm24&usqp=CAU'),
(8, 'Baytir ANE', 'ACS', 'https://upload.wikimedia.org/wikipedia/fr/4/46/Rewmi_logo_du_parti.jpg'),
(9, 'BULLETIN NUL', 'BULLETIN NUL', 'https://pngimage.net/wp-content/uploads/2018/06/nul-png.png'),
(11, 'Mamoud', 'Moon', 'https://media.istockphoto.com/vectors/geek-or-nerd-icon-stock-vector-vector-id1176769388?k=20&m=1176769388&s=612x612&w=0&h=nt7OpVCKkmZQYgcfRoB_A8prMM9lIV_rGr5LfInBkAw=');

-- --------------------------------------------------------

--
-- Structure de la table `commune`
--

DROP TABLE IF EXISTS `commune`;
CREATE TABLE IF NOT EXISTS `commune` (
  `id_commune` int NOT NULL AUTO_INCREMENT,
  `nom_commune` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_arron` int DEFAULT NULL,
  PRIMARY KEY (`id_commune`),
  KEY `id_arron` (`id_arron`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `commune`
--

INSERT INTO `commune` (`id_commune`, `nom_commune`, `id_arron`) VALUES
(1, 'commune thiaroye sud', 9),
(2, 'commune thiaroye nord', 9),
(3, 'commune mbour', 16),
(4, 'Mbour commune', 17),
(5, 'Commune GD', 6),
(6, 'Commune DP', 3),
(7, 'commune des plateau', 3),
(8, 'commune des plateau 2', 3);

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

DROP TABLE IF EXISTS `departement`;
CREATE TABLE IF NOT EXISTS `departement` (
  `id_dep` int NOT NULL AUTO_INCREMENT,
  `nom_dep` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_region` int DEFAULT NULL,
  PRIMARY KEY (`id_dep`),
  KEY `id_region` (`id_region`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `departement`
--

INSERT INTO `departement` (`id_dep`, `nom_dep`, `id_region`) VALUES
(1, 'dakar', 1),
(3, 'pakine', 1),
(4, 'guediawaye', 1),
(5, 'rufisque', 1),
(6, 'thies', 2),
(7, 'tivaoune', 2),
(8, 'mbour', 2);

-- --------------------------------------------------------

--
-- Structure de la table `electeur`
--

DROP TABLE IF EXISTS `electeur`;
CREATE TABLE IF NOT EXISTS `electeur` (
  `id_electeur` int NOT NULL AUTO_INCREMENT,
  `nom_electeur` varchar(40) NOT NULL,
  `prenom_electeur` varchar(40) NOT NULL,
  `cni` double DEFAULT NULL,
  `num_electeur` varchar(10) DEFAULT NULL,
  `sexe` varchar(30) NOT NULL,
  `date_nais` date DEFAULT NULL,
  `lieu_nais` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `adress` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `type` varchar(40) NOT NULL DEFAULT 'electeur',
  `status_vote` tinyint(1) NOT NULL DEFAULT '0',
  `login` varchar(20) NOT NULL,
  `mdp` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `region` int DEFAULT NULL,
  `dep` int DEFAULT NULL,
  `arron` int DEFAULT NULL,
  `commune` int DEFAULT NULL,
  `id_bureau` int DEFAULT NULL,
  `etat` varchar(50) NOT NULL,
  PRIMARY KEY (`id_electeur`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `electeur`
--

INSERT INTO `electeur` (`id_electeur`, `nom_electeur`, `prenom_electeur`, `cni`, `num_electeur`, `sexe`, `date_nais`, `lieu_nais`, `adress`, `type`, `status_vote`, `login`, `mdp`, `region`, `dep`, `arron`, `commune`, `id_bureau`, `etat`) VALUES
(4, 'diouf', 'moussa', 12345, '22222', 'masculin', '2021-08-13', 'khar yalla', 'grand yoff', 'admin', 1, 'diouf', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 3, 9, 2, 4, 'actif'),
(5, 'kama', 'dior', 12345, '11111', 'feminin', '2021-08-17', 'mbour', 'mbour', 'electeur', 1, 'kama', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 3, 9, 2, 4, 'actif'),
(6, 'gueye', 'yoro', 12345, '12345', 'masculin', '2021-08-12', 'pikine', 'dakar', 'electeur', 1, 'yoro', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 3, 9, 2, 4, 'actif'),
(7, 'ndiaye', 'abdou khadre', 99999, '99999', 'masculin', '2021-07-28', 'keur massar', 'khar massar', 'electeur', 1, 'ndiaye', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 3, 9, 2, 15, 'actif'),
(8, 'kheum', 'Madiambal', 123456, '147852', 'masculin', '2021-08-04', 'dakar', 'fass', 'electeur', 1, 'toto', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 3, 9, 2, 3, 'actif'),
(9, 'diop', 'alpha', 15356987, '15', 'masculin', '2021-08-12', 'dakar', 'fass', 'electeur', 1, 'toto', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 3, 9, 2, 3, 'actif'),
(10, 'saye', 'djibril', 12346, '123654', 'masculin', '2021-08-13', 'khombole', 'fass', 'electeur', 1, 'jojo', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 3, 9, 2, 3, 'actif'),
(11, 'Bourama', 'dsnfdg', 52, '5659', 'masculin', '2000-10-11', 'Bamako', 'ds@icloud.com', 'electeur', 0, 'kouma', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 1, 3, 7, 11, 'actif'),
(12, 'geej', 'hjvbij', 98655, '985642', 'masculin', '2000-10-11', 'Bamako', 'hgvfy@hjbhj.com', 'electeur', 0, 'hjbhb', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL, NULL, NULL, 'actif'),
(13, '754', '65566', 989989, '564900', 'masculin', '2022-05-11', 'jslks', 'sjgdv@djb.com', 'electeur', 0, 'dsjhq', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL, NULL, NULL, 'actif'),
(14, 'iuhsf', 'zefkjnzfs', 755, '266', 'masculin', '2011-08-11', 'Bko', 'dgyf@gmail.com', 'electeur', 1, 'kg', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL, NULL, NULL, 'actif'),
(15, 'DRAME', 'YACOU', 2159566, '741356', 'masculin', '2000-10-11', 'Bko', 'YACOU@GMAIL.COM', 'electeur', 1, 'yacou', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL, NULL, NULL, 'actif'),
(16, 'DRA', 'DRAAA7', 84611, '9849416', 'masculin', '2000-10-11', 'ACI', 'IG2', 'electeur', 1, 'DRA', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL, NULL, NULL, 'actif'),
(17, 'QFSSGSV', 'RGRHT', 6235, '668', 'masculin', '2000-10-11', 'BKO', 'EZEFCSD', 'electeur', 1, 'G', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL, NULL, NULL, 'actif'),
(18, 'ghsd', 'sdjhgds', 89654, '416544', 'masculin', '2000-10-11', 'ACI 2000 SIEGE', 'IG2', 'electeur', 1, 'h', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL, NULL, NULL, 'actif'),
(19, 'qsqsqc', 'cdsq', 56, '5546', 'masculin', '2000-11-11', 'ACI 2000 SIEGE', 'IG3', 'electeur', 1, 'k', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL, NULL, NULL, 'actif'),
(20, 'jhgsf', 'dsjnfkn', 56661, '6248', 'masculin', '2000-10-10', 'ACI 2000 ANCIENNE SIEGE', 'PDI', 'electeur', 1, 'p', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL, NULL, NULL, ''),
(21, 'g', 'd', 45754, '86451', 'masculin', '2000-11-11', 'ACI 2000 SIEGE', 'PDI', 'electeur', 1, 'u', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL, NULL, NULL, ''),
(22, 'jkrhgken', 'jkhlktz', 565465, 'BD001', 'masculin', '2022-02-09', 'BACO DJICORONI', 'RTI', 'electeur', 1, 'j', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL, NULL, NULL, ''),
(23, 'Coulibaly', 'Moussa', NULL, 'BD002', 'masculin', '2022-02-22', 'ACI 2000 SIEGE', 'PDI', 'electeur', 1, 'Mouscool123', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL, NULL, NULL, 'inactif'),
(24, 'Djitey', 'Malique', NULL, 'BD003', 'masculin', '2022-02-23', 'BACO DJICORONI', 'PDI', 'electeur', 1, 'b', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL, NULL, NULL, 'actif'),
(25, 'mali\' or 1=0-- -', 'mali\' or 1=0-- -', NULL, 'mali\' or 1', 'masculin', '2022-02-08', 'ACI 2000 SIEGE', 'mali\' or 1=0-- -', 'electeur', 1, 'mali\' or 1=0-- -', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL, NULL, NULL, ''),
(26, '<p>aliba</p>', '<p>aliba</p>', NULL, '<p>aliba</', 'masculin', '2022-02-15', 'ACI 2000 SIEGE', '<p>aliba</p>', 'electeur', 1, '<p>aliba</p>', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL, NULL, NULL, ''),
(27, 'Diarra', 'Bourama', NULL, '25255665', 'masculin', '2000-10-11', 'BACO DJICORONI', 'PDI', 'electeur', 0, 'dscgeek', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL, NULL, NULL, 'inactif'),
(28, 'carak', 'jjaya', NULL, '44846', 'masculin', '2011-04-11', 'BACO DJICORONI', 'RIT', 'electeur', 0, 'cark', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL, NULL, NULL, ''),
(29, 'hfghvjh', 'jjaya', NULL, 'BD05', 'masculin', '2011-04-11', 'ACI 2000 ANCIENNE SIEGE', 'RIT', 'electeur', 0, 'og', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL, NULL, NULL, ''),
(30, 'ALI', 'DIALLO', NULL, 'B051', 'masculin', '1971-03-16', 'BACO DJICORONI', 'PDI', 'electeur', 0, 'ad', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL, NULL, NULL, 'actif'),
(31, 'tirera', 'bakary', NULL, 'BD008', 'masculin', '2022-06-04', 'BACO DJICORONI', 'PDI', 'electeur', 1, 'tirera', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL, NULL, NULL, 'inactif'),
(32, 'DIAKITE', 'Madou', NULL, 'BD-7569', 'masculin', '2022-08-20', 'ACI 2000 ANCIENNE SIEGE', 'pdi', 'electeur', 0, 'k', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL, NULL, NULL, 'actif'),
(33, 'traore', 'isssa', NULL, '785', 'feminin', '2022-08-11', 'HIPPODROME', 'PDI', 'electeur', 0, 'issa', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL, NULL, NULL, 'actif'),
(34, 'traore', 'derrr', NULL, '5222', 'masculin', '2022-08-06', 'BACO DJICORONI', 'PDI', 'electeur', 1, 'der', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL, NULL, NULL, 'actif'),
(35, 'keita', 'fomba', NULL, 'BD058', 'feminin', '2022-08-26', 'ACI 2000 SIEGE', 'PDI', 'electeur', 1, 'md', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL, NULL, NULL, ''),
(36, 'keita', 'trtr', NULL, 'BD58', 'masculin', '2022-08-03', 'BACO DJICORONI', 'pdi', 'electeur', 1, 'moise', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL, NULL, NULL, ''),
(37, 'DIAKITE', 'Sekou', NULL, 'BD0566', 'masculin', '2222-02-22', 'ACI 2000 SIEGE', 'DES', 'admin', 1, 'tre', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

DROP TABLE IF EXISTS `region`;
CREATE TABLE IF NOT EXISTS `region` (
  `id_region` int NOT NULL AUTO_INCREMENT,
  `nom_region` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id_region`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `region`
--

INSERT INTO `region` (`id_region`, `nom_region`) VALUES
(1, 'Dakar'),
(2, 'Thies');

-- --------------------------------------------------------

--
-- Structure de la table `vote`
--

DROP TABLE IF EXISTS `vote`;
CREATE TABLE IF NOT EXISTS `vote` (
  `id_vote` int NOT NULL AUTO_INCREMENT,
  `nom_candidat` varchar(100) NOT NULL,
  `id_candidat` int DEFAULT NULL,
  `id_electeur` int DEFAULT NULL,
  PRIMARY KEY (`id_vote`),
  KEY `id_candidat` (`id_candidat`),
  KEY `id_electeur` (`id_electeur`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `vote`
--

INSERT INTO `vote` (`id_vote`, `nom_candidat`, `id_candidat`, `id_electeur`) VALUES
(21, 'Ousmane Sonko', 2, 5),
(22, 'Macky Sall', 1, 4),
(23, 'Ousmane Sonko', 2, 6),
(24, 'Ousmane Sonko', 2, 7),
(25, 'Baytir ANE', 8, 8),
(26, 'Macky Sall', 1, 9),
(27, 'Ousmane Sonko', 2, 10),
(28, 'Macky Sall', 1, 14),
(29, 'BULLETIN NUL', 9, 15),
(30, 'BULLETIN NUL', 9, 16),
(31, 'Macky Sall', 1, 17),
(32, 'Macky Sall', 1, 18),
(33, 'Ousmane Sonko', 2, 19),
(34, 'Ousmane Sonko', 2, 20),
(35, 'Ousmane Sonko', 2, 21),
(36, 'Ousmane Sonko', 2, 22),
(37, 'Ousmane Sonko', 2, 23),
(38, 'Macky Sall', 1, 24),
(39, 'Macky Sall', 1, 25),
(40, 'Macky Sall', 1, 26),
(41, 'Mamoud', 11, 31),
(42, 'Ousmane Sonko', 2, 35),
(43, 'Macky Sall', 1, 34),
(44, 'Macky Sall', 1, 36),
(45, 'Ousmane Sonko', 2, 37);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `arrondissement`
--
ALTER TABLE `arrondissement`
  ADD CONSTRAINT `arrondissement_ibfk_1` FOREIGN KEY (`id_dep`) REFERENCES `departement` (`id_dep`);

--
-- Contraintes pour la table `bureau`
--
ALTER TABLE `bureau`
  ADD CONSTRAINT `bureau_ibfk_1` FOREIGN KEY (`id_commune`) REFERENCES `commune` (`id_commune`);

--
-- Contraintes pour la table `commune`
--
ALTER TABLE `commune`
  ADD CONSTRAINT `commune_ibfk_1` FOREIGN KEY (`id_arron`) REFERENCES `arrondissement` (`id_arron`);

--
-- Contraintes pour la table `departement`
--
ALTER TABLE `departement`
  ADD CONSTRAINT `departement_ibfk_1` FOREIGN KEY (`id_region`) REFERENCES `region` (`id_region`);

--
-- Contraintes pour la table `vote`
--
ALTER TABLE `vote`
  ADD CONSTRAINT `vote_ibfk_1` FOREIGN KEY (`id_candidat`) REFERENCES `candidat` (`id_candidat`),
  ADD CONSTRAINT `vote_ibfk_2` FOREIGN KEY (`id_electeur`) REFERENCES `electeur` (`id_electeur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

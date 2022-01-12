-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 12 jan. 2022 à 11:26
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `reginci`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `Id_Article` int(11) NOT NULL,
  `Reference_Article` varchar(30) NOT NULL,
  `Designation_Article` text NOT NULL,
  `Prix_Unitaire` int(10) NOT NULL,
  `Id_Stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`Id_Article`, `Reference_Article`, `Designation_Article`, `Prix_Unitaire`, `Id_Stock`) VALUES
(1, 'C007', 'Demande de Naturalisation', 0, 1),
(2, 'C007', 'Demande de naturalisation', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `recette`
--

CREATE TABLE `recette` (
  `Id_Recette` int(11) NOT NULL,
  `Quantite` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Montant` int(11) NOT NULL,
  `Observation` text NOT NULL,
  `Id_Article` int(11) NOT NULL,
  `Id_TG` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `stock`
--

CREATE TABLE `stock` (
  `Id_Stock` int(11) NOT NULL,
  `Date` timestamp(5) NOT NULL DEFAULT current_timestamp(5) ON UPDATE current_timestamp(5),
  `Quantite` int(10) NOT NULL,
  `Libelle_Article` varchar(20) NOT NULL,
  `Observation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `stock`
--

INSERT INTO `stock` (`Id_Stock`, `Date`, `Quantite`, `Libelle_Article`, `Observation`) VALUES
(1, '2022-01-10 00:00:00.00000', 500, 'Certificat de vie et', 'Merci nous accusons réception'),
(2, '2022-01-04 00:00:00.00000', 800, 'Défense de fumerA5', 'Bien recu'),
(3, '2022-01-07 00:00:00.00000', 4500, 'Contrat d\'Accident', 'Bien recu'),
(4, '2022-01-07 00:00:00.00000', 15600, 'Demande d\'Immatricul', 'Bien recu'),
(5, '2022-01-05 00:00:00.00000', 5000, 'Livret de famille', 'Nous accusons réception du colis');

-- --------------------------------------------------------

--
-- Structure de la table `tg`
--

CREATE TABLE `tg` (
  `Id_TG` int(11) NOT NULL,
  `Code_TG` varchar(10) NOT NULL,
  `Libelle_TG` text NOT NULL,
  `Contact_TG` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tg`
--

INSERT INTO `tg` (`Id_TG`, `Code_TG`, `Libelle_TG`, `Contact_TG`) VALUES
(1, 'PC71', 'TRESORERIE GENERALE DE TABOU', '127'),
(2, 'PC64', 'TRESORERIE GENERALE DE DABOU', '0140011362'),
(4, 'PC72', 'TRESORERIE GENERALE DE BONDOUKOU', '0707828317'),
(5, 'PC73', 'TRESORERIE DE MAN', '0140011362'),
(6, 'PC604', 'TRESORERIE GENERALE D\'ABOISSO', '0103714815'),
(7, 'PC605', 'TRESORIE GENERALE DE KATIOLA', '0140011362'),
(8, 'PC606', 'TRESORERIE GENERALE NIAKARA', '0140011362'),
(9, 'PC608', 'TRESORERIE GENERALE DE DABAKALA', '0140011362');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `Id_User` int(11) NOT NULL,
  `Civilite` text NOT NULL,
  `Matricule_User` varchar(20) NOT NULL,
  `Prenom_User` varchar(50) NOT NULL,
  `Nom_User` varchar(30) NOT NULL,
  `Titre_User` text NOT NULL,
  `Id_TG` int(11) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`Id_User`, `Civilite`, `Matricule_User`, `Prenom_User`, `Nom_User`, `Titre_User`, `Id_TG`, `Password`) VALUES
(1, 'on', '102220', 'admin', '', 'DG', 0, '1234'),
(2, 'on', '456320G', 'KRA', '', 'DG', 0, '123j'),
(3, 'on', '485236M', 'DUBOIS', '', 'Caissiere', 0, '55jks6'),
(4, 'on', '789654L', 'AMANI', '', 'Fondé de Pouvoirs', 0, '123g3'),
(5, 'on', '456321M', 'KOUADIO', '', 'CAISSIER', 0, '33JN01'),
(6, 'on', '423746P', 'N\'GUETTIA', '', 'CAISSIERE', 0, '120wx'),
(7, 'on', '693741S', 'KRA', '', 'RESPONSABLE INFORMATIQUE', 0, '99qs'),
(8, 'on', '325674A', 'ANGAMAN', 'ROXANE KOFFI', 'CAISSIERE', 0, '78az');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`Id_Article`);

--
-- Index pour la table `recette`
--
ALTER TABLE `recette`
  ADD PRIMARY KEY (`Id_Recette`);

--
-- Index pour la table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`Id_Stock`);

--
-- Index pour la table `tg`
--
ALTER TABLE `tg`
  ADD PRIMARY KEY (`Id_TG`),
  ADD UNIQUE KEY `Code_TG` (`Code_TG`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_User`),
  ADD UNIQUE KEY `Matricule_User` (`Matricule_User`),
  ADD UNIQUE KEY `Password` (`Password`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `Id_Article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `recette`
--
ALTER TABLE `recette`
  MODIFY `Id_Recette` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `stock`
--
ALTER TABLE `stock`
  MODIFY `Id_Stock` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `tg`
--
ALTER TABLE `tg`
  MODIFY `Id_TG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `Id_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

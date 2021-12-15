-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 15 déc. 2021 à 16:29
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 7.3.31

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
  `Id_Article` int(4) NOT NULL,
  `Reference_Article` varchar(30) NOT NULL,
  `Designation_Article` varchar(50) NOT NULL,
  `Prix_Unit_Article` int(8) NOT NULL,
  `Id_Stock` int(4) NOT NULL,
  `Id_Client` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `Id_Client` int(4) NOT NULL,
  `Matricule_Client` varchar(10) NOT NULL,
  `Nom_Client` varchar(20) NOT NULL,
  `Prenom_Client` varchar(50) NOT NULL,
  `Contact_Client` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `recette`
--

CREATE TABLE `recette` (
  `Id_Recette` int(4) NOT NULL,
  `Quantite_Recette` int(10) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Montant` int(20) NOT NULL,
  `Observation` varchar(200) NOT NULL,
  `Id_Article` int(4) NOT NULL,
  `Id_TG` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `stock`
--

CREATE TABLE `stock` (
  `Id_Stock` int(4) NOT NULL,
  `Entre_Stock` int(10) NOT NULL,
  `Sortie_Stock` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tg`
--

CREATE TABLE `tg` (
  `Id_TG` int(4) NOT NULL,
  `Code_TG` varchar(8) NOT NULL,
  `Libelle_TG` varchar(50) NOT NULL,
  `Contact_TG` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `Id_User` int(4) NOT NULL,
  `Matricule_User` varchar(10) NOT NULL,
  `Nom_User` varchar(20) NOT NULL,
  `Prenom_User` varchar(30) NOT NULL,
  `Titre_User` text NOT NULL,
  `Genre` varchar(10) NOT NULL,
  `Id_TG` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`Id_User`, `Matricule_User`, `Nom_User`, `Prenom_User`, `Titre_User`, `Genre`, `Id_TG`) VALUES
(1, '', '', '', '', '', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`Id_Article`),
  ADD UNIQUE KEY `Reference_Article` (`Reference_Article`),
  ADD UNIQUE KEY `Designation_Article` (`Designation_Article`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`Id_Client`),
  ADD UNIQUE KEY `Matricule_Client` (`Matricule_Client`);

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
  ADD UNIQUE KEY `Matricule_User` (`Matricule_User`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `Id_Article` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `Id_Client` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `recette`
--
ALTER TABLE `recette`
  MODIFY `Id_Recette` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `stock`
--
ALTER TABLE `stock`
  MODIFY `Id_Stock` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tg`
--
ALTER TABLE `tg`
  MODIFY `Id_TG` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `Id_User` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 04 jan. 2022 à 13:10
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
  `Id_Stock` int(11) NOT NULL,
  `Id_Client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `Id_Client` int(11) NOT NULL,
  `Matricule_Client` varchar(10) NOT NULL,
  `Nom_Client` varchar(20) NOT NULL,
  `Prenom_Client` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Contact_Client` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`Id_Client`, `Matricule_Client`, `Nom_Client`, `Prenom_Client`, `Email`, `Contact_Client`) VALUES
(1, '483636L', 'KRA', 'KOBENAN', 'kra.kobenan2006@yahoo.com', '0140011362'),
(2, '528746K', 'KOBENAN', 'GBOKO THOMSON', 'kra.kobenan2006@yahoo.com', '0545639652'),
(3, '546320P', 'DATTE', 'KOFFI JULDAS', 'krakobenan2006@yahoo.fr', '0707828317'),
(4, '453784A', 'KRA', 'KOBENAN ALBERT', 'kra.kobenan2006@gmail.com', '0777320593');

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
-- Structure de la table `stok`
--

CREATE TABLE `stok` (
  `Id_STOCK` int(11) NOT NULL,
  `Entre_Stock` int(10) NOT NULL,
  `Sortie_Stock` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `tg`
--

CREATE TABLE `tg` (
  `Id_TG` int(11) NOT NULL,
  `Code_TG` varchar(10) NOT NULL,
  `Libelle_TG` text NOT NULL,
  `Contact_TG` tinyint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `Id_User` int(11) NOT NULL,
  `Matricule_User` varchar(20) NOT NULL,
  `Nom_User` varchar(30) NOT NULL,
  `Prenom_User` varchar(50) NOT NULL,
  `Titre_User` text NOT NULL,
  `Id_TG` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`Id_Article`);

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
-- Index pour la table `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`Id_STOCK`);

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
  MODIFY `Id_Article` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `Id_Client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `recette`
--
ALTER TABLE `recette`
  MODIFY `Id_Recette` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `stok`
--
ALTER TABLE `stok`
  MODIFY `Id_STOCK` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tg`
--
ALTER TABLE `tg`
  MODIFY `Id_TG` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `Id_User` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

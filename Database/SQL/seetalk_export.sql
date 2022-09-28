-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 28 sep. 2022 à 11:17
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `seetalk`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualite`
--

CREATE TABLE `actualite` (
  `ID_ACTU` int(2) NOT NULL,
  `TITRE` varchar(255) DEFAULT NULL,
  `MESSAGE` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `appeler`
--

CREATE TABLE `appeler` (
  `ID_APPEL` int(2) NOT NULL,
  `ID_USER` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `appel_video`
--

CREATE TABLE `appel_video` (
  `ID_APPEL` int(2) NOT NULL,
  `DATE_APPEL` timestamp NULL DEFAULT NULL,
  `DUREE` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `creer`
--

CREATE TABLE `creer` (
  `ID_USER` int(2) NOT NULL,
  `ID_REUNION` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `envoyer`
--

CREATE TABLE `envoyer` (
  `ID_USER` int(2) NOT NULL,
  `ID_MESSAGE` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `etre_appele`
--

CREATE TABLE `etre_appele` (
  `ID_USER` int(2) NOT NULL,
  `ID_APPEL` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `ID_MESSAGE` int(2) NOT NULL,
  `CONTENU` text DEFAULT NULL,
  `DATE_MESSAGE` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `recevoir`
--

CREATE TABLE `recevoir` (
  `ID_MESSAGE` int(2) NOT NULL,
  `ID_USER` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `reunion`
--

CREATE TABLE `reunion` (
  `ID_REUNION` int(2) NOT NULL,
  `NOM` varchar(255) DEFAULT NULL,
  `DESCRIPTION` text DEFAULT NULL,
  `DATE_REUNION` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `ID_USER` int(2) NOT NULL,
  `PSEUDO` varchar(255) DEFAULT NULL,
  `NOM` varchar(255) DEFAULT NULL,
  `PRENOM` varchar(255) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL,
  `SOCIETE` varchar(255) DEFAULT NULL,
  `BIO` text DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `TELEPHONE` varchar(255) DEFAULT NULL,
  `IMG` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actualite`
--
ALTER TABLE `actualite`
  ADD PRIMARY KEY (`ID_ACTU`);

--
-- Index pour la table `appeler`
--
ALTER TABLE `appeler`
  ADD PRIMARY KEY (`ID_APPEL`,`ID_USER`),
  ADD KEY `I_FK_APPELER_APPEL_VIDEO` (`ID_APPEL`),
  ADD KEY `I_FK_APPELER_UTILISATEUR` (`ID_USER`);

--
-- Index pour la table `appel_video`
--
ALTER TABLE `appel_video`
  ADD PRIMARY KEY (`ID_APPEL`);

--
-- Index pour la table `creer`
--
ALTER TABLE `creer`
  ADD PRIMARY KEY (`ID_USER`,`ID_REUNION`),
  ADD KEY `I_FK_CREER_UTILISATEUR` (`ID_USER`),
  ADD KEY `I_FK_CREER_REUNION` (`ID_REUNION`);

--
-- Index pour la table `envoyer`
--
ALTER TABLE `envoyer`
  ADD PRIMARY KEY (`ID_USER`,`ID_MESSAGE`),
  ADD KEY `I_FK_ENVOYER_UTILISATEUR` (`ID_USER`),
  ADD KEY `I_FK_ENVOYER_MESSAGE` (`ID_MESSAGE`);

--
-- Index pour la table `etre_appele`
--
ALTER TABLE `etre_appele`
  ADD PRIMARY KEY (`ID_USER`,`ID_APPEL`),
  ADD KEY `I_FK_ETRE_APPELE_UTILISATEUR` (`ID_USER`),
  ADD KEY `I_FK_ETRE_APPELE_APPEL_VIDEO` (`ID_APPEL`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`ID_MESSAGE`);

--
-- Index pour la table `recevoir`
--
ALTER TABLE `recevoir`
  ADD PRIMARY KEY (`ID_MESSAGE`,`ID_USER`),
  ADD KEY `I_FK_RECEVOIR_MESSAGE` (`ID_MESSAGE`),
  ADD KEY `I_FK_RECEVOIR_UTILISATEUR` (`ID_USER`);

--
-- Index pour la table `reunion`
--
ALTER TABLE `reunion`
  ADD PRIMARY KEY (`ID_REUNION`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`ID_USER`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actualite`
--
ALTER TABLE `actualite`
  MODIFY `ID_ACTU` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `appel_video`
--
ALTER TABLE `appel_video`
  MODIFY `ID_APPEL` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `ID_MESSAGE` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reunion`
--
ALTER TABLE `reunion`
  MODIFY `ID_REUNION` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `ID_USER` int(2) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `appeler`
--
ALTER TABLE `appeler`
  ADD CONSTRAINT `FK_APPELER_APPEL_VIDEO` FOREIGN KEY (`ID_APPEL`) REFERENCES `appel_video` (`ID_APPEL`),
  ADD CONSTRAINT `FK_APPELER_UTILISATEUR` FOREIGN KEY (`ID_USER`) REFERENCES `utilisateur` (`ID_USER`);

--
-- Contraintes pour la table `creer`
--
ALTER TABLE `creer`
  ADD CONSTRAINT `FK_CREER_REUNION` FOREIGN KEY (`ID_REUNION`) REFERENCES `reunion` (`ID_REUNION`),
  ADD CONSTRAINT `FK_CREER_UTILISATEUR` FOREIGN KEY (`ID_USER`) REFERENCES `utilisateur` (`ID_USER`);

--
-- Contraintes pour la table `envoyer`
--
ALTER TABLE `envoyer`
  ADD CONSTRAINT `FK_ENVOYER_MESSAGE` FOREIGN KEY (`ID_MESSAGE`) REFERENCES `message` (`ID_MESSAGE`),
  ADD CONSTRAINT `FK_ENVOYER_UTILISATEUR` FOREIGN KEY (`ID_USER`) REFERENCES `utilisateur` (`ID_USER`);

--
-- Contraintes pour la table `etre_appele`
--
ALTER TABLE `etre_appele`
  ADD CONSTRAINT `FK_ETRE_APPELE_APPEL_VIDEO` FOREIGN KEY (`ID_APPEL`) REFERENCES `appel_video` (`ID_APPEL`),
  ADD CONSTRAINT `FK_ETRE_APPELE_UTILISATEUR` FOREIGN KEY (`ID_USER`) REFERENCES `utilisateur` (`ID_USER`);

--
-- Contraintes pour la table `recevoir`
--
ALTER TABLE `recevoir`
  ADD CONSTRAINT `FK_RECEVOIR_MESSAGE` FOREIGN KEY (`ID_MESSAGE`) REFERENCES `message` (`ID_MESSAGE`),
  ADD CONSTRAINT `FK_RECEVOIR_UTILISATEUR` FOREIGN KEY (`ID_USER`) REFERENCES `utilisateur` (`ID_USER`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

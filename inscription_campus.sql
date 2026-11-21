-- phpMyAdmin SQL Dump
-- version 5.2.2deb1+deb13u1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 12 nov. 2026 à 14:48
-- Version du serveur : 11.8.6-MariaDB-0+deb13u1 from Debian
-- Version de PHP : 8.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `inscription_campus`
--

-- --------------------------------------------------------

--
-- Structure de la table `baccalaureat`
--

CREATE TABLE `baccalaureat` (
  `id_baccalaureat` int(11) NOT NULL,
  `libelle_baccalaureat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `civilite`
--

CREATE TABLE `civilite` (
  `id_civilite` int(11) NOT NULL,
  `libelle_civilite` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id_etudiant` int(11) NOT NULL,
  `nom_etudiant` varchar(100) NOT NULL,
  `prenoms_etudiant` varchar(150) NOT NULL,
  `naissance_etudiant` date NOT NULL,
  `lieu_naissance_etudiant` varchar(100) NOT NULL,
  `num_piece_etudiant` varchar(50) NOT NULL,
  `email_etudiant` varchar(150) NOT NULL,
  `tel_etudiant` varchar(25) NOT NULL,
  `nationalite_etudiant` varchar(100) NOT NULL,
  `adresse_etudiant` varchar(255) NOT NULL,
  `photo_identite_etudiant` varchar(255) DEFAULT NULL,
  `piece_identite_etudiant` varchar(255) DEFAULT NULL,
  `acte_naissance_etudiant` varchar(255) DEFAULT NULL,
  `id_civilite` int(11) NOT NULL,
  `id_ville` int(11) NOT NULL,
  `id_situation` int(11) NOT NULL,
  `id_responsable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `faculte`
--

CREATE TABLE `faculte` (
  `id_faculte` int(11) NOT NULL,
  `libelle_faculte` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

CREATE TABLE `filiere` (
  `id_filiere` int(11) NOT NULL,
  `libelle_filiere` varchar(150) NOT NULL,
  `id_faculte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `mention`
--

CREATE TABLE `mention` (
  `id_mention` int(11) NOT NULL,
  `libelle_mention` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `niveau_entree`
--

CREATE TABLE `niveau_entree` (
  `id_niveau_entree` int(11) NOT NULL,
  `libelle_niveau_entree` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `parcours_baccalaureat`
--

CREATE TABLE `parcours_baccalaureat` (
  `id_parcours_baccalaureat` int(11) NOT NULL,
  `derniere_ecole_parcours_scolaire` varchar(150) NOT NULL,
  `annee_bac` year(4) NOT NULL,
  `moyenne_bac_parcours_scolaire` decimal(4,2) NOT NULL,
  `releve_bac_parcours_baccalaureat` varchar(255) DEFAULT NULL,
  `id_baccalaureat` int(11) NOT NULL,
  `id_mention` int(11) NOT NULL,
  `id_etudiant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `parcours_universitaire`
--

CREATE TABLE `parcours_universitaire` (
  `id_parcours_universitaire` int(11) NOT NULL,
  `residence_parcours_universitaire` tinyint(1) NOT NULL DEFAULT 0,
  `restaurant_parcours_universitaire` tinyint(1) NOT NULL DEFAULT 0,
  `transport_parcours_universitaire` tinyint(1) NOT NULL DEFAULT 0,
  `demande_bourse_parcours_universitaire` tinyint(1) NOT NULL DEFAULT 0,
  `annee_academique_parcours_universitaire` varchar(20) NOT NULL,
  `id_niveau_entree` int(11) NOT NULL,
  `id_filiere` int(11) NOT NULL,
  `id_etudiant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE `pays` (
  `id_pays` int(11) NOT NULL,
  `nom_pays` varchar(100) NOT NULL,
  `code_iso_pays` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `responsable`
--

CREATE TABLE `responsable` (
  `id_responsable` int(11) NOT NULL,
  `nom_prenom_responsable` varchar(150) NOT NULL,
  `profession_responsable` varchar(100) DEFAULT NULL,
  `tel_responsable` varchar(25) NOT NULL,
  `lien_parente_responsable` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `situation`
--

CREATE TABLE `situation` (
  `id_situation` int(11) NOT NULL,
  `libelle_situation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `id_ville` int(11) NOT NULL,
  `nom_ville` varchar(100) NOT NULL,
  `code_postal_ville` varchar(20) DEFAULT NULL,
  `id_pays` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `baccalaureat`
--
ALTER TABLE `baccalaureat`
  ADD PRIMARY KEY (`id_baccalaureat`);

--
-- Index pour la table `civilite`
--
ALTER TABLE `civilite`
  ADD PRIMARY KEY (`id_civilite`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id_etudiant`),
  ADD UNIQUE KEY `uq_email_etudiant` (`email_etudiant`),
  ADD KEY `fk_etudiant_civilite` (`id_civilite`),
  ADD KEY `fk_etudiant_ville` (`id_ville`),
  ADD KEY `fk_etudiant_situation` (`id_situation`),
  ADD KEY `fk_etudiant_responsable` (`id_responsable`);

--
-- Index pour la table `faculte`
--
ALTER TABLE `faculte`
  ADD PRIMARY KEY (`id_faculte`);

--
-- Index pour la table `filiere`
--
ALTER TABLE `filiere`
  ADD PRIMARY KEY (`id_filiere`),
  ADD KEY `fk_filiere_faculte` (`id_faculte`);

--
-- Index pour la table `mention`
--
ALTER TABLE `mention`
  ADD PRIMARY KEY (`id_mention`);

--
-- Index pour la table `niveau_entree`
--
ALTER TABLE `niveau_entree`
  ADD PRIMARY KEY (`id_niveau_entree`);

--
-- Index pour la table `parcours_baccalaureat`
--
ALTER TABLE `parcours_baccalaureat`
  ADD PRIMARY KEY (`id_parcours_baccalaureat`),
  ADD UNIQUE KEY `uq_parcours_bac_etudiant` (`id_etudiant`),
  ADD KEY `fk_parcours_bac_type` (`id_baccalaureat`),
  ADD KEY `fk_parcours_bac_mention` (`id_mention`);

--
-- Index pour la table `parcours_universitaire`
--
ALTER TABLE `parcours_universitaire`
  ADD PRIMARY KEY (`id_parcours_universitaire`),
  ADD UNIQUE KEY `uq_parcours_univ_etudiant` (`id_etudiant`),
  ADD KEY `fk_parcours_univ_niveau` (`id_niveau_entree`),
  ADD KEY `fk_parcours_univ_filiere` (`id_filiere`);

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id_pays`);

--
-- Index pour la table `responsable`
--
ALTER TABLE `responsable`
  ADD PRIMARY KEY (`id_responsable`);

--
-- Index pour la table `situation`
--
ALTER TABLE `situation`
  ADD PRIMARY KEY (`id_situation`);

--
-- Index pour la table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`id_ville`),
  ADD KEY `fk_ville_pays` (`id_pays`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `baccalaureat`
--
ALTER TABLE `baccalaureat`
  MODIFY `id_baccalaureat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `civilite`
--
ALTER TABLE `civilite`
  MODIFY `id_civilite` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id_etudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `faculte`
--
ALTER TABLE `faculte`
  MODIFY `id_faculte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `filiere`
--
ALTER TABLE `filiere`
  MODIFY `id_filiere` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `mention`
--
ALTER TABLE `mention`
  MODIFY `id_mention` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `niveau_entree`
--
ALTER TABLE `niveau_entree`
  MODIFY `id_niveau_entree` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `parcours_baccalaureat`
--
ALTER TABLE `parcours_baccalaureat`
  MODIFY `id_parcours_baccalaureat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `parcours_universitaire`
--
ALTER TABLE `parcours_universitaire`
  MODIFY `id_parcours_universitaire` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pays`
--
ALTER TABLE `pays`
  MODIFY `id_pays` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `responsable`
--
ALTER TABLE `responsable`
  MODIFY `id_responsable` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `situation`
--
ALTER TABLE `situation`
  MODIFY `id_situation` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ville`
--
ALTER TABLE `ville`
  MODIFY `id_ville` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `fk_etudiant_civilite` FOREIGN KEY (`id_civilite`) REFERENCES `civilite` (`id_civilite`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_etudiant_responsable` FOREIGN KEY (`id_responsable`) REFERENCES `responsable` (`id_responsable`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_etudiant_situation` FOREIGN KEY (`id_situation`) REFERENCES `situation` (`id_situation`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_etudiant_ville` FOREIGN KEY (`id_ville`) REFERENCES `ville` (`id_ville`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `filiere`
--
ALTER TABLE `filiere`
  ADD CONSTRAINT `fk_filiere_faculte` FOREIGN KEY (`id_faculte`) REFERENCES `faculte` (`id_faculte`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `parcours_baccalaureat`
--
ALTER TABLE `parcours_baccalaureat`
  ADD CONSTRAINT `fk_parcours_bac_etudiant` FOREIGN KEY (`id_etudiant`) REFERENCES `etudiant` (`id_etudiant`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_parcours_bac_mention` FOREIGN KEY (`id_mention`) REFERENCES `mention` (`id_mention`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_parcours_bac_type` FOREIGN KEY (`id_baccalaureat`) REFERENCES `baccalaureat` (`id_baccalaureat`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `parcours_universitaire`
--
ALTER TABLE `parcours_universitaire`
  ADD CONSTRAINT `fk_parcours_univ_etudiant` FOREIGN KEY (`id_etudiant`) REFERENCES `etudiant` (`id_etudiant`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_parcours_univ_filiere` FOREIGN KEY (`id_filiere`) REFERENCES `filiere` (`id_filiere`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_parcours_univ_niveau` FOREIGN KEY (`id_niveau_entree`) REFERENCES `niveau_entree` (`id_niveau_entree`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `ville`
--
ALTER TABLE `ville`
  ADD CONSTRAINT `fk_ville_pays` FOREIGN KEY (`id_pays`) REFERENCES `pays` (`id_pays`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

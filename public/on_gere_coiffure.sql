-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 11 mai 2023 à 03:41
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
-- Base de données : `on_gere_coiffure`
--

-- --------------------------------------------------------

--
-- Structure de la table `accessoire`
--

CREATE TABLE `accessoire` (
  `id_accessoire` int(11) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `accessoire_rdv`
--

CREATE TABLE `accessoire_rdv` (
  `id_accessoire` int(11) NOT NULL,
  `id_rdv` int(11) NOT NULL,
  `quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `id` int(11) NOT NULL,
  `note` int(11) NOT NULL,
  `contenu` varchar(255) NOT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `coiffeuse`
--

CREATE TABLE `coiffeuse` (
  `id_coiffeuse` int(11) NOT NULL,
  `nom_prenom` varchar(255) NOT NULL,
  `nationalite` varchar(255) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `specialite` text NOT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `coiffure`
--

CREATE TABLE `coiffure` (
  `id_coiffure` int(11) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `duree_realisation` int(11) NOT NULL,
  `duree_port` varchar(50) NOT NULL,
  `accessoires` text NOT NULL,
  `prix` int(11) NOT NULL,
  `nb_commande` int(11) NOT NULL,
  `origine` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `coiffure_cheveux`
--

CREATE TABLE `coiffure_cheveux` (
  `id_coiffure` int(11) NOT NULL,
  `id_type_cheveux` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `date_creation` datetime NOT NULL,
  `date_achat` datetime NOT NULL,
  `statut` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commande_accessoire`
--

CREATE TABLE `commande_accessoire` (
  `id_commande` int(11) NOT NULL,
  `id_accessoire` int(11) NOT NULL,
  `quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `id_compte` int(11) NOT NULL,
  `login` varchar(256) NOT NULL,
  `mdp` varchar(256) NOT NULL,
  `sel` int(11) NOT NULL,
  `id_client` int(11) DEFAULT NULL,
  `id_coiffeuse` int(11) DEFAULT NULL,
  `point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

CREATE TABLE `demande` (
  `id_demande` int(11) NOT NULL,
  `date_heure` datetime NOT NULL,
  `id_client` int(11) NOT NULL,
  `contenu` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `piece_jointe`
--

CREATE TABLE `piece_jointe` (
  `id_piece_jointe` int(11) NOT NULL,
  `designation` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci NOT NULL,
  `emplacement` text NOT NULL,
  `id_rdv` int(11) DEFAULT NULL,
  `id_coiffure` int(11) DEFAULT NULL,
  `id_accessoire` int(11) DEFAULT NULL,
  `id_compte` int(11) DEFAULT NULL,
  `id_demande` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `rdv`
--

CREATE TABLE `rdv` (
  `id_rdv` int(11) NOT NULL,
  `date_heure` datetime NOT NULL,
  `id_coiffure` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_coiffeuse` int(11) DEFAULT NULL,
  `commentaire` text NOT NULL,
  `statut` int(11) NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `date_creation` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `type_cheveux`
--

CREATE TABLE `type_cheveux` (
  `id_type_cheveux` int(11) NOT NULL,
  `designation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `accessoire`
--
ALTER TABLE `accessoire`
  ADD PRIMARY KEY (`id_accessoire`);

--
-- Index pour la table `accessoire_rdv`
--
ALTER TABLE `accessoire_rdv`
  ADD KEY `id_accessoire` (`id_accessoire`),
  ADD KEY `id_rdv` (`id_rdv`);

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_client` (`id_client`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `coiffeuse`
--
ALTER TABLE `coiffeuse`
  ADD PRIMARY KEY (`id_coiffeuse`);

--
-- Index pour la table `coiffure`
--
ALTER TABLE `coiffure`
  ADD PRIMARY KEY (`id_coiffure`);

--
-- Index pour la table `coiffure_cheveux`
--
ALTER TABLE `coiffure_cheveux`
  ADD PRIMARY KEY (`id_coiffure`,`id_type_cheveux`),
  ADD KEY `id_type_cheveux` (`id_type_cheveux`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`),
  ADD KEY `id_client` (`id_client`);

--
-- Index pour la table `commande_accessoire`
--
ALTER TABLE `commande_accessoire`
  ADD PRIMARY KEY (`id_accessoire`,`id_commande`),
  ADD KEY `id_commande` (`id_commande`);

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`id_compte`,`login`,`mdp`),
  ADD KEY `id_coiffeuse` (`id_coiffeuse`),
  ADD KEY `id_client` (`id_client`);

--
-- Index pour la table `demande`
--
ALTER TABLE `demande`
  ADD PRIMARY KEY (`id_demande`),
  ADD KEY `id_client` (`id_client`);

--
-- Index pour la table `piece_jointe`
--
ALTER TABLE `piece_jointe`
  ADD PRIMARY KEY (`id_piece_jointe`),
  ADD KEY `id_compte` (`id_compte`),
  ADD KEY `id_accessoire` (`id_accessoire`),
  ADD KEY `id_coiffure` (`id_coiffure`),
  ADD KEY `id_rdv` (`id_rdv`),
  ADD KEY `id_demande` (`id_demande`);

--
-- Index pour la table `rdv`
--
ALTER TABLE `rdv`
  ADD PRIMARY KEY (`id_rdv`),
  ADD KEY `id_coiffeuse` (`id_coiffeuse`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_coiffure` (`id_coiffure`);

--
-- Index pour la table `type_cheveux`
--
ALTER TABLE `type_cheveux`
  ADD PRIMARY KEY (`id_type_cheveux`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `accessoire`
--
ALTER TABLE `accessoire`
  MODIFY `id_accessoire` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `coiffeuse`
--
ALTER TABLE `coiffeuse`
  MODIFY `id_coiffeuse` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `coiffure`
--
ALTER TABLE `coiffure`
  MODIFY `id_coiffure` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `compte`
  MODIFY `id_compte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `demande`
--
ALTER TABLE `demande`
  MODIFY `id_demande` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `piece_jointe`
--
ALTER TABLE `piece_jointe`
  MODIFY `id_piece_jointe` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `rdv`
--
ALTER TABLE `rdv`
  MODIFY `id_rdv` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `type_cheveux`
--
ALTER TABLE `type_cheveux`
  MODIFY `id_type_cheveux` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `accessoire_rdv`
--
ALTER TABLE `accessoire_rdv`
  ADD CONSTRAINT `accessoire_rdv_ibfk_1` FOREIGN KEY (`id_accessoire`) REFERENCES `accessoire` (`id_accessoire`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `accessoire_rdv_ibfk_2` FOREIGN KEY (`id_rdv`) REFERENCES `rdv` (`id_rdv`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Contraintes pour la table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `avis_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `coiffure_cheveux`
--
ALTER TABLE `coiffure_cheveux`
  ADD CONSTRAINT `coiffure_cheveux_ibfk_1` FOREIGN KEY (`id_type_cheveux`) REFERENCES `type_cheveux` (`id_type_cheveux`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `coiffure_cheveux_ibfk_2` FOREIGN KEY (`id_coiffure`) REFERENCES `coiffure` (`id_coiffure`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Contraintes pour la table `commande_accessoire`
--
ALTER TABLE `commande_accessoire`
  ADD CONSTRAINT `commande_accessoire_ibfk_1` FOREIGN KEY (`id_commande`) REFERENCES `commande` (`id_commande`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `commande_accessoire_ibfk_2` FOREIGN KEY (`id_accessoire`) REFERENCES `accessoire` (`id_accessoire`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Contraintes pour la table `compte`
--
ALTER TABLE `compte`
  ADD CONSTRAINT `compte_ibfk_1` FOREIGN KEY (`id_coiffeuse`) REFERENCES `coiffeuse` (`id_coiffeuse`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `compte_ibfk_2` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `demande`
--
ALTER TABLE `demande`
  ADD CONSTRAINT `demande_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `piece_jointe`
--
ALTER TABLE `piece_jointe`
  ADD CONSTRAINT `piece_jointe_ibfk_1` FOREIGN KEY (`id_compte`) REFERENCES `compte` (`id_compte`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `piece_jointe_ibfk_2` FOREIGN KEY (`id_coiffure`) REFERENCES `coiffure` (`id_coiffure`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `piece_jointe_ibfk_3` FOREIGN KEY (`id_accessoire`) REFERENCES `accessoire` (`id_accessoire`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `piece_jointe_ibfk_4` FOREIGN KEY (`id_rdv`) REFERENCES `rdv` (`id_rdv`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `piece_jointe_ibfk_5` FOREIGN KEY (`id_demande`) REFERENCES `demande` (`id_demande`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `rdv`
--
ALTER TABLE `rdv`
  ADD CONSTRAINT `rdv_ibfk_1` FOREIGN KEY (`id_coiffeuse`) REFERENCES `coiffeuse` (`id_coiffeuse`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `rdv_ibfk_2` FOREIGN KEY (`id_coiffure`) REFERENCES `coiffure` (`id_coiffure`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `rdv_ibfk_3` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

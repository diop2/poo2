-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mer 26 Juin 2019 à 09:56
-- Version du serveur :  5.7.26-0ubuntu0.19.04.1
-- Version de PHP :  7.2.19-0ubuntu0.19.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `universite`
--

-- --------------------------------------------------------

--
-- Structure de la table `batiment`
--

CREATE TABLE `batiment` (
  `id_bat` int(11) NOT NULL,
  `nom_batiment` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `boursier`
--

CREATE TABLE `boursier` (
  `id_pension` int(11) NOT NULL,
  `id_etudiant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE `chambre` (
  `numéro_chambre` int(11) NOT NULL,
  `chambre` int(11) NOT NULL,
  `id_bat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id_etudiant` int(11) NOT NULL,
  `matricule` varchar(250) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `telephone` int(11) NOT NULL,
  `mail` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`id_etudiant`, `matricule`, `nom`, `prenom`, `date_de_naissance`, `telephone`, `mail`) VALUES
(3, 'E0001', 'DIOP', 'Ousmane', '2019-06-06', 778385552, 'diop@gmail.com'),
(4, 'E0002', 'gueye', 'Abdoukader', '2004-03-18', 78855522, 'gueye@gmail.com'),
(7, 'E0003', 'gueye', 'Abdoukader', '2004-03-18', 78855522, 'gueye@gmail.com'),
(8, 'E0004', 'gueye', 'Abdoukader', '2004-03-18', 78855522, 'gueye@gmail.com'),
(9, 'E0005', 'gueye', 'Abdoukader', '2004-03-18', 78855522, 'gueye@gmail.com'),
(10, 'E0006', 'gueye', 'Abdoukader', '2004-03-18', 78855522, 'gueye@gmail.com'),
(11, 'E0007', 'gueye', 'Abdoukader', '2004-03-18', 78855522, 'gueye@gmail.com'),
(12, 'E0008', 'gueye', 'Abdoukader', '2004-03-18', 78855522, 'gueye@gmail.com'),
(13, 'E0009', 'gueye', 'Abdoukader', '2004-03-18', 78855522, 'gueye@gmail.com'),
(14, 'E00010', 'gueye', 'Abdoukader', '2004-03-18', 78855522, 'gueye@gmail.com'),
(16, 'E00011', 'gueye', 'Abdoukader', '2004-03-18', 78855522, 'gueye@gmail.com'),
(17, 'E00012', 'gueye', 'Abdoukader', '2004-03-18', 78855522, 'gueye@gmail.com'),
(18, 'E00013', 'gueye', 'Abdoukader', '2004-03-18', 78855522, 'gueye@gmail.com'),
(19, 'E00014', 'gueye', 'Abdoukader', '2004-03-18', 78855522, 'gueye@gmail.com'),
(21, 'E00015', 'gueye', 'Abdoukader', '2004-03-18', 78855522, 'gueye@gmail.com'),
(22, 'E00016', 'gueye', 'Abdoukader', '2004-03-18', 78855522, 'gueye@gmail.com'),
(23, 'E00017', 'gueye', 'Abdoukader', '2004-03-18', 78855522, 'gueye@gmail.com'),
(24, 'E00018', 'gueye', 'Abdoukader', '2004-03-18', 78855522, 'gueye@gmail.com'),
(25, 'E00019', 'gueye', 'Abdoukader', '2004-03-18', 78855522, 'gueye@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `loge`
--

CREATE TABLE `loge` (
  `id_loge` int(11) NOT NULL,
  `id_etudiant` int(11) NOT NULL,
  `numero_chambre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `non loge`
--

CREATE TABLE `non loge` (
  `id_etudiant` int(11) NOT NULL,
  `adresse` varchar(250) NOT NULL,
  `matricule` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `non_boursier`
--

CREATE TABLE `non_boursier` (
  `id_etudiant` int(11) NOT NULL,
  `adresse` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `pension`
--

CREATE TABLE `pension` (
  `id_pension` int(11) NOT NULL,
  `type` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `batiment`
--
ALTER TABLE `batiment`
  ADD PRIMARY KEY (`id_bat`);

--
-- Index pour la table `boursier`
--
ALTER TABLE `boursier`
  ADD PRIMARY KEY (`id_etudiant`),
  ADD KEY `matricule` (`id_etudiant`),
  ADD KEY `id_pension` (`id_pension`);

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`numéro_chambre`),
  ADD KEY `id_bat` (`id_bat`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id_etudiant`),
  ADD UNIQUE KEY `matricule` (`matricule`);

--
-- Index pour la table `loge`
--
ALTER TABLE `loge`
  ADD PRIMARY KEY (`id_loge`,`id_etudiant`),
  ADD KEY `numéro_chambre` (`numero_chambre`),
  ADD KEY `id_etudiant` (`id_etudiant`);

--
-- Index pour la table `non loge`
--
ALTER TABLE `non loge`
  ADD PRIMARY KEY (`id_etudiant`,`matricule`),
  ADD KEY `matricule` (`matricule`),
  ADD KEY `id_etudiant` (`id_etudiant`);

--
-- Index pour la table `non_boursier`
--
ALTER TABLE `non_boursier`
  ADD PRIMARY KEY (`id_etudiant`),
  ADD KEY `id_etudiant` (`id_etudiant`);

--
-- Index pour la table `pension`
--
ALTER TABLE `pension`
  ADD PRIMARY KEY (`id_pension`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `batiment`
--
ALTER TABLE `batiment`
  MODIFY `id_bat` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `chambre`
--
ALTER TABLE `chambre`
  MODIFY `numéro_chambre` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id_etudiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT pour la table `loge`
--
ALTER TABLE `loge`
  MODIFY `id_loge` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `pension`
--
ALTER TABLE `pension`
  MODIFY `id_pension` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `boursier`
--
ALTER TABLE `boursier`
  ADD CONSTRAINT `boursier_ibfk_1` FOREIGN KEY (`id_etudiant`) REFERENCES `etudiant` (`id_etudiant`),
  ADD CONSTRAINT `boursier_ibfk_2` FOREIGN KEY (`id_pension`) REFERENCES `pension` (`id_pension`);

--
-- Contraintes pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD CONSTRAINT `chambre_ibfk_1` FOREIGN KEY (`id_bat`) REFERENCES `batiment` (`id_bat`);

--
-- Contraintes pour la table `loge`
--
ALTER TABLE `loge`
  ADD CONSTRAINT `loge_ibfk_2` FOREIGN KEY (`numero_chambre`) REFERENCES `chambre` (`numéro_chambre`),
  ADD CONSTRAINT `loge_ibfk_3` FOREIGN KEY (`id_etudiant`) REFERENCES `boursier` (`id_etudiant`);

--
-- Contraintes pour la table `non_boursier`
--
ALTER TABLE `non_boursier`
  ADD CONSTRAINT `non_boursier_ibfk_1` FOREIGN KEY (`id_etudiant`) REFERENCES `etudiant` (`id_etudiant`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

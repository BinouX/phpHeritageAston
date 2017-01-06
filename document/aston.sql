-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 06 Janvier 2017 à 14:14
-- Version du serveur :  10.1.19-MariaDB
-- Version de PHP :  5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `aston`
--

-- --------------------------------------------------------

--
-- Structure de la table `aston_administrator`
--

CREATE TABLE `aston_administrator` (
  `id_administrator` int(11) NOT NULL,
  `firstname_administrator` varchar(25) NOT NULL,
  `lastname_administrator` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `statut` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `aston_classe`
--

CREATE TABLE `aston_classe` (
  `id_classe` int(11) NOT NULL,
  `name_classe` varchar(25) NOT NULL,
  `com_classe` text NOT NULL,
  `delegue1_classe` int(11) DEFAULT NULL,
  `delegue2_classe` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `aston_classe`
--

INSERT INTO `aston_classe` (`id_classe`, `name_classe`, `com_classe`, `delegue1_classe`, `delegue2_classe`) VALUES
(1, 'Kuro', 'coucou hibou', 3, 0);

-- --------------------------------------------------------

--
-- Structure de la table `aston_commentaire_classe`
--

CREATE TABLE `aston_commentaire_classe` (
  `id_commentaire` int(11) NOT NULL,
  `com_commentaire` text NOT NULL,
  `id_teacher` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `aston_commenter`
--

CREATE TABLE `aston_commenter` (
  `id_classe` int(11) NOT NULL,
  `id_commentaire` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `aston_dater`
--

CREATE TABLE `aston_dater` (
  `date_dater` date DEFAULT NULL,
  `id_administrator` int(11) NOT NULL,
  `id_note` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `aston_enseigner`
--

CREATE TABLE `aston_enseigner` (
  `id_teacher` int(11) NOT NULL,
  `id_classe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `aston_note`
--

CREATE TABLE `aston_note` (
  `id_note` int(11) NOT NULL,
  `note_note` varchar(25) DEFAULT NULL,
  `com_note` text,
  `coef_note` int(11) DEFAULT NULL,
  `id_personne` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `aston_student`
--

CREATE TABLE `aston_student` (
  `id_personne` int(11) NOT NULL,
  `firstname_student` varchar(25) NOT NULL,
  `lastname_student` varchar(25) NOT NULL,
  `statut` int(1) NOT NULL,
  `id_classe` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `aston_teacher`
--

CREATE TABLE `aston_teacher` (
  `id_teacher` int(11) NOT NULL,
  `firstname_teacher` varchar(25) NOT NULL,
  `lastname_teacher` varchar(25) NOT NULL,
  `statut` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `aston_user`
--

CREATE TABLE `aston_user` (
  `id_user` int(11) NOT NULL,
  `lastname_user` text NOT NULL,
  `firstname_user` text NOT NULL,
  `password` varchar(50) NOT NULL,
  `statut_user` int(1) NOT NULL,
  `id_classe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `aston_user`
--

INSERT INTO `aston_user` (`id_user`, `lastname_user`, `firstname_user`, `password`, `statut_user`, `id_classe`) VALUES
(1, 'Oyo', 'Emi', 'yoyo', 3, 1),
(2, 'admin', 'admin', 'admin', 1, 0),
(3, 'mimi', 'nounou', 'miou', 2, 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `aston_administrator`
--
ALTER TABLE `aston_administrator`
  ADD PRIMARY KEY (`id_administrator`);

--
-- Index pour la table `aston_classe`
--
ALTER TABLE `aston_classe`
  ADD PRIMARY KEY (`id_classe`);

--
-- Index pour la table `aston_commentaire_classe`
--
ALTER TABLE `aston_commentaire_classe`
  ADD PRIMARY KEY (`id_commentaire`);

--
-- Index pour la table `aston_commenter`
--
ALTER TABLE `aston_commenter`
  ADD PRIMARY KEY (`id_classe`,`id_commentaire`),
  ADD KEY `FK_aston_commenter_id_commentaire` (`id_commentaire`);

--
-- Index pour la table `aston_dater`
--
ALTER TABLE `aston_dater`
  ADD PRIMARY KEY (`id_administrator`,`id_note`),
  ADD KEY `FK_aston_dater_id_note` (`id_note`);

--
-- Index pour la table `aston_enseigner`
--
ALTER TABLE `aston_enseigner`
  ADD PRIMARY KEY (`id_teacher`,`id_classe`),
  ADD KEY `FK_aston_enseigner_id_classe` (`id_classe`);

--
-- Index pour la table `aston_note`
--
ALTER TABLE `aston_note`
  ADD PRIMARY KEY (`id_note`),
  ADD KEY `FK_aston_note_id_personne` (`id_personne`);

--
-- Index pour la table `aston_student`
--
ALTER TABLE `aston_student`
  ADD PRIMARY KEY (`id_personne`),
  ADD KEY `FK_aston_student_id_classe` (`id_classe`);

--
-- Index pour la table `aston_teacher`
--
ALTER TABLE `aston_teacher`
  ADD PRIMARY KEY (`id_teacher`);

--
-- Index pour la table `aston_user`
--
ALTER TABLE `aston_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `aston_administrator`
--
ALTER TABLE `aston_administrator`
  MODIFY `id_administrator` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `aston_classe`
--
ALTER TABLE `aston_classe`
  MODIFY `id_classe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `aston_commentaire_classe`
--
ALTER TABLE `aston_commentaire_classe`
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `aston_note`
--
ALTER TABLE `aston_note`
  MODIFY `id_note` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `aston_student`
--
ALTER TABLE `aston_student`
  MODIFY `id_personne` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `aston_teacher`
--
ALTER TABLE `aston_teacher`
  MODIFY `id_teacher` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `aston_user`
--
ALTER TABLE `aston_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `aston_commenter`
--
ALTER TABLE `aston_commenter`
  ADD CONSTRAINT `FK_aston_commenter_id_classe` FOREIGN KEY (`id_classe`) REFERENCES `aston_classe` (`id_classe`),
  ADD CONSTRAINT `FK_aston_commenter_id_commentaire` FOREIGN KEY (`id_commentaire`) REFERENCES `aston_commentaire_classe` (`id_commentaire`);

--
-- Contraintes pour la table `aston_dater`
--
ALTER TABLE `aston_dater`
  ADD CONSTRAINT `FK_aston_dater_id_administrator` FOREIGN KEY (`id_administrator`) REFERENCES `aston_administrator` (`id_administrator`),
  ADD CONSTRAINT `FK_aston_dater_id_note` FOREIGN KEY (`id_note`) REFERENCES `aston_note` (`id_note`);

--
-- Contraintes pour la table `aston_enseigner`
--
ALTER TABLE `aston_enseigner`
  ADD CONSTRAINT `FK_aston_enseigner_id_classe` FOREIGN KEY (`id_classe`) REFERENCES `aston_classe` (`id_classe`),
  ADD CONSTRAINT `FK_aston_enseigner_id_teacher` FOREIGN KEY (`id_teacher`) REFERENCES `aston_teacher` (`id_teacher`);

--
-- Contraintes pour la table `aston_note`
--
ALTER TABLE `aston_note`
  ADD CONSTRAINT `FK_aston_note_id_personne` FOREIGN KEY (`id_personne`) REFERENCES `aston_student` (`id_personne`);

--
-- Contraintes pour la table `aston_student`
--
ALTER TABLE `aston_student`
  ADD CONSTRAINT `FK_aston_student_id_classe` FOREIGN KEY (`id_classe`) REFERENCES `aston_classe` (`id_classe`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

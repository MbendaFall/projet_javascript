-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 19 mars 2024 à 15:56
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `quizz_javascript`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nom_admin` varchar(50) NOT NULL,
  `prenom_admin` varchar(50) NOT NULL,
  `login_admin` varchar(50) NOT NULL,
  `password_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `nom_admin`, `prenom_admin`, `login_admin`, `password_admin`) VALUES
(1, 'faye', 'adja', 'adja@gmail.com', 'adja123'),
(2, 'FALL', 'Mbenda', 'Mbenda@gmail.com', 'adja123'),
(3, 'DIOP', 'Anta', 'anta@gmail.com', 'passer123'),
(7, 'SAMB', 'Mame Fatou', 'mamefatou@gmail.com', 'passer123'),
(8, 'DIOP', 'Mbayang', 'mbayang@gmail.com', 'passer123'),
(9, 'Sy', 'Amadou', 'amadou@gmail.com', 'adou123'),
(10, 'Sy', 'Amadou', 'amadou@gmail.com', 'adou123'),
(11, 'Sy', 'Amadou', 'amadou@gmail.com', 'adou123'),
(12, 'Sy', 'Amadou', 'amadou@gmail.com', 'adou123'),
(13, 'Thiam', 'Lobe', 'lobe@gmail.com', 'lobe123'),
(14, 'kjjj', 'hhhh', 'hhhhhhhh@hu', 'yyyyyyyyyyyyyyyyy');

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

CREATE TABLE `joueur` (
  `id_joueur` int(11) NOT NULL,
  `nom_joueur` varchar(255) DEFAULT NULL,
  `prenom_joueur` varchar(255) DEFAULT NULL,
  `login_joueur` varchar(255) DEFAULT NULL,
  `password_joueur` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `joueur`
--

INSERT INTO `joueur` (`id_joueur`, `nom_joueur`, `prenom_joueur`, `login_joueur`, `password_joueur`) VALUES
(1, 'DIOP', 'Anta', 'anta@gmail.com', 'passer123'),
(4, 'DIOP', 'Mbayang', 'mbayang@gmail.com', 'passer123'),
(5, 'Sy', 'Amadou', 'amadou@gmail.com', 'adou123'),
(9, 'Thiam', 'Lobe', 'lobe@gmail.com', 'lobe123');

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

CREATE TABLE `question` (
  `id_question` int(11) NOT NULL,
  `libellé_question` varchar(256) NOT NULL,
  `nombre_point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`id_question`, `libellé_question`, `nombre_point`) VALUES
(1, 'Quelle est la capitale du Senegal ?', 5),
(2, 'Quelle est la capitale de la france ?', 5),
(3, 'Quelle est la capitale de la Russie ?', 5),
(4, 'Quelle est la capitale du Gabon ?', 5);

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

CREATE TABLE `reponse` (
  `id_reponse` int(11) NOT NULL,
  `libellé` varchar(50) DEFAULT NULL,
  `id_question` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reponse`
--

INSERT INTO `reponse` (`id_reponse`, `libellé`, `id_question`) VALUES
(1, 'Dakar', 1),
(2, 'Mbour', 1),
(3, 'Kedougou', 1),
(4, 'Marseille', 2),
(5, 'Paris', 2),
(6, 'bordeaux', 2),
(7, 'Kalmoukie', 3),
(8, 'Kiev', 3),
(9, 'Moscou', 3),
(10, 'Estuaire', 4),
(11, 'Libreville', 4),
(12, 'Woleu-Ntem', 4);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `joueur`
--
ALTER TABLE `joueur`
  ADD PRIMARY KEY (`id_joueur`);

--
-- Index pour la table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id_question`);

--
-- Index pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD PRIMARY KEY (`id_reponse`),
  ADD KEY `id_question` (`id_question`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `joueur`
--
ALTER TABLE `joueur`
  MODIFY `id_joueur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD CONSTRAINT `reponse_ibfk_1` FOREIGN KEY (`id_question`) REFERENCES `question` (`id_question`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

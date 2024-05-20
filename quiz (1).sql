-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 20 mai 2024 à 11:56
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `quiz`
--

-- --------------------------------------------------------

--
-- Structure de la table `options1`
--

CREATE TABLE `options1` (
  `id_option` varchar(77) NOT NULL,
  `text_option` varchar(66) NOT NULL,
  `email` varchar(55) NOT NULL,
  `correction` tinyint(1) NOT NULL,
  `id_question` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `options1`
--

INSERT INTO `options1` (`id_option`, `text_option`, `email`, `correction`, `id_question`) VALUES
('1', 'Application', 'hanane@gmail.com', 1, 3),
('2', 'Page de garde', 'hanane@gmail.com', 0, 3),
('3', 'Front-end', 'hanane@gmail.com', 0, 3),
('4', 'Page Web', 'hanane@gmail.com', 0, 3),
('Q1O1', 'langage de programmation', 'hanane@gmail.com', 0, 1),
('Q1O2', 'langage POO', 'hanane@gmail.com', 0, 1),
('Q1O3', 'langage de balisage', 'hanane@gmail.com', 1, 1),
('Q2O1', 'id', 'hanane@gmail.com', 1, 2),
('Q2O2', 'text', 'hanane@gmail.com', 0, 2),
('Q2O3', 'name', 'hanane@gmail.com', 0, 2),
('Q4O1', 'form', 'hanane@gmail.com', 1, 4),
('Q4O2', 'input', 'hanane@gmail.com', 0, 4),
('Q4O3', 'select', 'hanane@gmail.com', 0, 4),
('Q5O1', 'High-level Text Management Language', 'hanane@gmail.com', 0, 5),
('Q5O2', 'HyperText Markup Language', 'hanane@gmail.com', 1, 5),
('Q5O3', 'Hyperlink and Text Management Language', 'hanane@gmail.com', 0, 5);

-- --------------------------------------------------------

--
-- Structure de la table `questions1`
--

CREATE TABLE `questions1` (
  `id_question` int(11) NOT NULL,
  `id_quiz1` int(11) NOT NULL,
  `titre_question` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `questions1`
--

INSERT INTO `questions1` (`id_question`, `id_quiz1`, `titre_question`) VALUES
(1, 1, ' HTML est considéré comme ______ ?'),
(2, 1, ' Si nous souhaitons définir le style d\'un seule élément, quel sélecteur css utiliserons-nous?'),
(3, 1, 'Une page conçue en HTML s\'appelle?'),
(4, 1, 'Quel élément HTML est utilisé pour créer un formulaire dans une page web ?'),
(5, 1, 'Quest-ce que HTML signifie ?');

-- --------------------------------------------------------

--
-- Structure de la table `quiz1`
--

CREATE TABLE `quiz1` (
  `id_quiz1` int(11) NOT NULL,
  `titre_quiz1` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `quiz1`
--

INSERT INTO `quiz1` (`id_quiz1`, `titre_quiz1`) VALUES
(1, 'html'),
(2, 'css');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs1`
--

CREATE TABLE `utilisateurs1` (
  `firstName` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mot_passe` int(11) NOT NULL,
  `typee` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurs1`
--

INSERT INTO `utilisateurs1` (`firstName`, `email`, `mot_passe`, `typee`) VALUES
('Hanane', 'hanane@gmail.com', 12345, 'stagaire');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `options1`
--
ALTER TABLE `options1`
  ADD PRIMARY KEY (`id_option`),
  ADD KEY `id_question` (`id_question`);

--
-- Index pour la table `questions1`
--
ALTER TABLE `questions1`
  ADD PRIMARY KEY (`id_question`),
  ADD KEY `id_quiz1` (`id_quiz1`);

--
-- Index pour la table `quiz1`
--
ALTER TABLE `quiz1`
  ADD PRIMARY KEY (`id_quiz1`);

--
-- Index pour la table `utilisateurs1`
--
ALTER TABLE `utilisateurs1`
  ADD PRIMARY KEY (`email`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `options1`
--
ALTER TABLE `options1`
  ADD CONSTRAINT `options1_ibfk_1` FOREIGN KEY (`id_question`) REFERENCES `questions1` (`id_question`);

--
-- Contraintes pour la table `questions1`
--
ALTER TABLE `questions1`
  ADD CONSTRAINT `questions1_ibfk_1` FOREIGN KEY (`id_quiz1`) REFERENCES `quiz1` (`id_quiz1`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

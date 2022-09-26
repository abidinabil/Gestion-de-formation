-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 23 nov. 2021 à 19:47
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_formation`
--

-- --------------------------------------------------------

--
-- Structure de la table `formateur`
--

CREATE TABLE `formateur` (
  `id_f` int(15) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `specialite` varchar(30) NOT NULL,
  `direction` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `formateur`
--

INSERT INTO `formateur` (`id_f`, `LastName`, `FirstName`, `specialite`, `direction`) VALUES
(2, 'ayoub', 'ghmogui', 'web', 'mhamdia'),
(4, 'karim', 'labidi', 'genie cevil', 'silaina');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `id_c` int(30) NOT NULL,
  `theme` varchar(100) NOT NULL,
  `mode` varchar(100) NOT NULL,
  `lieu` varchar(100) NOT NULL,
  `gouvernorat` varchar(100) NOT NULL,
  `periode` date NOT NULL,
  `fin_periode` time NOT NULL,
  `temps` time NOT NULL,
  `fin_t` time NOT NULL,
  `pause` time NOT NULL,
  `fin_p` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id_c`, `theme`, `mode`, `lieu`, `gouvernorat`, `periode`, `fin_periode`, `temps`, `fin_t`, `pause`, `fin_p`) VALUES
(2, 'dev', 'huihui', 'huihui', 'huhgui', '1551-12-15', '00:12:15', '12:15:00', '12:05:00', '12:15:00', '00:00:00'),
(3, 'marketing', 'marketing', 'siliana', 'siliana', '1551-12-15', '00:14:51', '12:15:00', '12:05:00', '12:15:00', '12:51:00');

-- --------------------------------------------------------

--
-- Structure de la table `participant`
--

CREATE TABLE `participant` (
  `id_p` int(30) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_c` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `participant`
--

INSERT INTO `participant` (`id_p`, `FirstName`, `email`, `id_c`) VALUES
(8, 'ayoub', 'ayoub123@gmail.com', 0),
(9, 'nabil', 'labidinabil321@gmail.com', 0),
(10, 'karim', 'kqksnlk@gmail.com', 0),
(11, 'karim', 'karim@gmail.com', 0),
(12, 'fsef', 'dss', 0),
(13, 'fsef', 'dss', 2),
(14, 'ayoub', 'ayoub123@gmail.com', 2),
(15, 'ayoub', 'ayoub@gmail.com', 3),
(16, 'mohamed jouini', 'mohsen@gmail.com', 3);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `specialite` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `role` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `surname`, `specialite`, `gender`, `role`, `password`) VALUES
(2, 'nabil', 'labidi', 'web devolppment', 'male', 'admin', '123'),
(3, 'ayoub', 'ghmougi', 'web devolppment', 'male', 'participant', '123');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `formateur`
--
ALTER TABLE `formateur`
  ADD PRIMARY KEY (`id_f`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id_c`);

--
-- Index pour la table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`id_p`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `formateur`
--
ALTER TABLE `formateur`
  MODIFY `id_f` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `id_c` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `participant`
--
ALTER TABLE `participant`
  MODIFY `id_p` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

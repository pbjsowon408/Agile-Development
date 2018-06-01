-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  sam. 10 juin 2017 à 02:19
-- Version du serveur :  10.1.22-MariaDB
-- Version de PHP :  7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `chat_room`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `msg` text NOT NULL,
  `msg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`msg_id`, `user_id`, `msg`, `msg_date`) VALUES
(1, 2, 'test', '2017-06-09 15:01:14'),
(2, 1, 'hey all', '2017-06-09 16:02:59'),
(3, 6, 'hey', '2017-06-09 16:04:22'),
(4, 8, 'hey stone', '2017-06-09 16:16:56'),
(5, 9, 'hey everyone', '2017-06-09 16:17:27'),
(6, 1, 'hey', '2017-06-09 16:17:58'),
(7, 1, 'how are you', '2017-06-09 16:18:05'),
(8, 1, 'hye', '2017-06-09 17:21:08'),
(9, 1, 'how are you', '2017-06-09 17:22:04'),
(10, 10, 'hey all', '2017-06-09 17:23:13'),
(11, 1, ':p', '2017-06-09 17:38:48'),
(16, 1, 'hye', '2017-06-09 20:56:38'),
(18, 1, '<?php  \"DELETE * FROM users\"; ?>', '2017-06-09 20:58:50');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_pass`) VALUES
(1, 'admin', '12yJ.Of/NQ.Pk'),
(2, 'Xavian eldon', '12yJ.Of/NQ.Pk'),
(3, 'Zouhir', '13Cy5uqunGZqM'),
(4, 'robot', 'otRB.6ApsKuJE'),
(5, 'robot2', '12g3TXqVjhlYk'),
(6, 'stone', 'xa9rNZ7XdM8RQ'),
(7, 'muhammed', '12KnvwZrpqAbw'),
(8, 'robot19', '075l3i1kxu.6Y'),
(9, 'jack', 'fg0zxy5ccesOU'),
(10, 'XxavianxX', 'zomz9LTxEmqwY'),
(11, 'Spark', 'zomz9LTxEmqwY'),
(12, 'JAcksparrow', 'df3YmQGNqadHI'),
(13, 'jonnydeep', 'ds9A0HyiHfN.6');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : sam. 28 août 2021 à 22:08
-- Version du serveur :  5.7.24
-- Version de PHP : 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `city_inventory`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `item`
--

CREATE TABLE `item` (
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `logs`
--

CREATE TABLE `logs` (
  `user_id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `logs`
--

INSERT INTO `logs` (`user_id`, `description`, `date`) VALUES
(1, 'Logout user', '2021-08-25'),
(1, 'User login', '2021-08-25'),
(1, 'Logout user', '2021-08-25'),
(1, 'User login', '2021-08-25'),
(1, 'Logout user', '2021-08-25'),
(1, 'User login', '2021-08-25'),
(1, 'Update user', '2021-08-25'),
(1, 'Update user', '2021-08-25'),
(1, 'Update user', '2021-08-25'),
(1, 'Logout user', '2021-08-25'),
(1, 'User login', '2021-08-25'),
(1, 'Logout user', '2021-08-25'),
(1, 'User login', '2021-08-25'),
(1, 'Logout user', '2021-08-25'),
(1, 'Logout user', '2021-08-25'),
(1, 'User login', '2021-08-25'),
(1, 'Create user', '2021-08-25'),
(1, 'Delete user', '2021-08-25'),
(1, 'Create user', '2021-08-25'),
(1, 'Create user', '2021-08-25'),
(1, 'User login', '2021-08-25'),
(1, 'Logout user', '2021-08-25'),
(1, 'Logout user', '2021-08-25'),
(1, 'User login', '2021-08-25'),
(1, 'Logout user', '2021-08-25'),
(1, 'User login', '2021-08-25'),
(1, 'Logout user', '2021-08-25'),
(1, 'User login', '2021-08-25'),
(1, 'Logout user', '2021-08-25'),
(1, 'User login', '2021-08-25'),
(1, 'Logout user', '2021-08-25'),
(1, 'User login', '2021-08-25'),
(1, 'User login', '2021-08-26'),
(1, 'Logout user', '2021-08-26'),
(1, 'User login', '2021-08-26'),
(1, 'User login', '2021-08-26'),
(1, 'User login', '2021-08-27'),
(1, 'Create user', '2021-08-27'),
(1, 'Logout user', '2021-08-27'),
(1, 'User login', '2021-08-27'),
(1, 'Logout user', '2021-08-27'),
(1, 'User login', '2021-08-27'),
(1, 'User login', '2021-08-27'),
(1, 'Logout user', '2021-08-27'),
(1, 'User login', '2021-08-27'),
(1, 'Logout user', '2021-08-27'),
(1, 'User login', '2021-08-27'),
(1, 'Logout user', '2021-08-27'),
(1, 'User login', '2021-08-27'),
(1, 'Logout user', '2021-08-27'),
(1, 'User login', '2021-08-27');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `mrp` double DEFAULT NULL,
  `price` double DEFAULT NULL,
  `available` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `mrp`, `price`, `available`) VALUES
(1, 'aa', 3.2, 3.5, 'vv');

-- --------------------------------------------------------

--
-- Structure de la table `request`
--

CREATE TABLE `request` (
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `request`
--

INSERT INTO `request` (`status`) VALUES
('released');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `designation_office` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`username`, `password`, `user_id`, `name`, `user_type`, `designation_office`) VALUES
('ghassen@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, 'ghassen', 'Admin', 'bna'),
('aa', 'e10adc3949ba59abbe56e057f20f883e', 3, 'aa', 'Admin', 'aaa'),
('dd', '8277e0910d750195b448797616e091ad', 4, 'd', 'Admin', 'aa'),
('b', '92eb5ffee6ae2fec3ad71c777531578f', 5, 'b', 'Guest', 'b');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

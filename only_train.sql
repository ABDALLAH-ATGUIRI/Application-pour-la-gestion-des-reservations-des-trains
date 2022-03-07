-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 06 mars 2022 à 11:58
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `only_train`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `Nom` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Id_admin` int(11) NOT NULL,
  `pasword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`Nom`, `Email`, `Id_admin`, `pasword`) VALUES
('ABDALLAH ATGUIRI', 'wahbidox@gmail.com', 1, 'open&Sesame');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `n_phone` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `Id_client` int(11) NOT NULL,
  `l_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`email`, `password`, `n_phone`, `f_name`, `Id_client`, `l_name`) VALUES
('med@gmail.com', '$2y$10$n91ri7bLO5rAURIYuUkOKuS2kssl4HealPJlhfbcOIZO5GvNbS7jq', 123456789, 'med', 11, 'b3ayz'),
('DOX@gmail.com', '$2y$10$5nCVK7Wk/mFnHf.mcj5qseiG2g2DNPiXa9BXjhy/tbNAtqQ3r7jYS', 9876543, 'ABDO', 13, 'DOX'),
('abdo@gmail.com', '$2y$10$UBmqnKx7q.MpXOvXSDTOnOrDNjL36aPr6uEjNGmYQ5q525qkzFZj.', 987654, 'brahim', 14, 'b3ayz');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `Id_reserv` int(11) NOT NULL,
  `Id_voyage` int(11) NOT NULL,
  `nb_reservation` int(11) NOT NULL,
  `Id_visiteur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `train`
--

CREATE TABLE `train` (
  `nom_train` varchar(255) NOT NULL,
  `depart_train` varchar(255) NOT NULL,
  `arrive_train` varchar(255) NOT NULL,
  `Id_train` int(11) NOT NULL,
  `nb_places` int(11) NOT NULL,
  `date_dep` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `train`
--

INSERT INTO `train` (`nom_train`, `depart_train`, `arrive_train`, `Id_train`, `nb_places`, `date_dep`) VALUES
('AL-BORAK', 'agadire', 'tanger', 1, 101, '2022-03-05'),
('TOR', 'marrakech', 'Laayoune', 2, 55, '2022-03-05'),
('b3ayze', 'fas', 'oujda', 3, 100, '2022-03-17'),
('fahd', 'khribga', 'rabat', 6, 500, '2022-03-24');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `Id_visiteur` int(11) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`Id_visiteur`, `Phone`, `Nom`) VALUES
(1, 623777798, 'taha lachger'),
(2, 657579889, 'med ait kaba'),
(3, 98765434, 'aymane lk7al'),
(4, 657570898, 'mehdi zghab');

-- --------------------------------------------------------

--
-- Structure de la table `voyage`
--

CREATE TABLE `voyage` (
  `Id_voyage` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `depart` varchar(255) NOT NULL,
  `arrive` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `Id_train` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `voyage`
--

INSERT INTO `voyage` (`Id_voyage`, `date`, `depart`, `arrive`, `price`, `Id_train`) VALUES
(1, '2022-03-24', 'Laâyoune', 'Tanger', 1500, 1),
(3, '2022-03-27', 'agadir', 'tanga', 4500, 1),
(4, '2022-03-27', 'agadir', 'tanga', 4500, 1),
(5, '2022-03-26', 'asdfghjkl', 'dfghj', 13456, 2),
(10, '2022-03-17', 'asdfghjkl', 'jkhdez', 13456, 1),
(11, '2022-03-25', 'casa', 'marackech', 340, 1),
(12, '2022-03-25', 'casa', 'marackech', 340, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id_admin`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`Id_client`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`Id_reserv`),
  ADD KEY `Id_visiteur` (`Id_visiteur`),
  ADD KEY `Id-voyage` (`Id_voyage`);

--
-- Index pour la table `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`Id_train`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_visiteur`);

--
-- Index pour la table `voyage`
--
ALTER TABLE `voyage`
  ADD PRIMARY KEY (`Id_voyage`),
  ADD KEY `Id_train` (`Id_train`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `Id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `train`
--
ALTER TABLE `train`
  MODIFY `Id_train` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `Id_visiteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `voyage`
--
ALTER TABLE `voyage`
  MODIFY `Id_voyage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `Id-voyage` FOREIGN KEY (`Id_voyage`) REFERENCES `voyage` (`Id_voyage`),
  ADD CONSTRAINT `Id_visiteur` FOREIGN KEY (`Id_visiteur`) REFERENCES `user` (`Id_visiteur`);

--
-- Contraintes pour la table `voyage`
--
ALTER TABLE `voyage`
  ADD CONSTRAINT `Id_train` FOREIGN KEY (`Id_train`) REFERENCES `train` (`Id_train`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

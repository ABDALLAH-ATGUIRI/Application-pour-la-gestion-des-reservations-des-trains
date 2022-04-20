-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 20 avr. 2022 à 03:42
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
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`Nom`, `Email`, `Id_admin`, `password`) VALUES
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
('dox@gmail.com', '$2y$10$ERcp9LtvTFsmXufc8WjUVOItD9SMrtwtGqGaueJgn5HOcsRa61BSi', 623779270, 'ABDALLAH', 22, 'ATGUIRI'),
('amin@gmail.com', '$2y$10$1ZA3KKEtTIAlZ7X2dftBLeAqWmVByNtNRhH492DDX0lGMwRlpR8SC', 623456789, 'Mohamed', 23, 'AMINE'),
('A@GMAIL.COM', '$2y$10$6OmL1s/GYtwd2iU7goJfcOj0SdHCBAiXTeu0JGv.6IvgYBgxBQepy', 2147483647, 'ABDALLAH', 24, 'ATGUIRI'),
('l@gmail.com', '$2y$10$PQuAEdTE8t4Gu5KrxRNyMOaghCcJ.bTqzIqiAcNuhAGf3nlFGJCFi', 987654, 'abdelhaq', 25, 'laachari'),
('lachaari@gmail.com', '$2y$10$CUt4b6nGXy7fqmz6pO3f1uhYYuXHmWb/SQmFHUdQ.YsAUWzdBbR0e', 623779270, 'abdalhaq', 26, 'lachaari');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `Id_reserv` int(11) NOT NULL,
  `Id_voyage` int(11) NOT NULL,
  `anullation` tinyint(1) NOT NULL,
  `client` int(11) DEFAULT NULL,
  `user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`Id_reserv`, `Id_voyage`, `anullation`, `client`, `user`) VALUES
(21, 48, 0, NULL, 90),
(22, 47, 1, 22, NULL),
(23, 47, 1, 22, NULL),
(24, 40, 0, NULL, 91),
(26, 47, 1, 23, NULL),
(27, 43, 1, 23, NULL),
(28, 40, 1, 22, NULL),
(29, 43, 1, 22, NULL),
(30, 45, 1, 22, NULL),
(31, 49, 0, 25, NULL),
(32, 53, 1, 22, NULL),
(33, 40, 1, 22, NULL),
(34, 40, 0, 23, NULL),
(35, 40, 0, NULL, 93),
(36, 40, 1, 22, NULL),
(37, 59, 1, 22, NULL),
(38, 59, 1, 22, NULL),
(39, 59, 1, 22, NULL),
(40, 59, 1, 22, NULL),
(41, 59, 1, 23, NULL),
(42, 59, 1, 23, NULL),
(43, 41, 0, 23, NULL),
(44, 41, 0, 23, NULL),
(45, 41, 0, 23, NULL),
(46, 62, 1, 23, NULL),
(47, 62, 1, 23, NULL),
(48, 62, 1, 23, NULL),
(49, 62, 1, 23, NULL),
(50, 62, 0, 23, NULL),
(51, 62, 1, 23, NULL),
(52, 62, 0, 22, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `train`
--

CREATE TABLE `train` (
  `depart_train` varchar(255) NOT NULL,
  `arrive_train` varchar(255) NOT NULL,
  `nb_places` int(11) NOT NULL,
  `Id_train` int(11) NOT NULL,
  `nom_train` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `train`
--

INSERT INTO `train` (`depart_train`, `arrive_train`, `nb_places`, `Id_train`, `nom_train`) VALUES
('agadire', 'tanger', 101, 1, 'AL-BORAK'),
('marrackech', 'agadir', 60, 2, 'TOR'),
('marrakech', 'Laayoune', 55, 3, 'MAROC'),
('safi', 'fes', 50, 4, 'oden');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `Id_user` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `n_phone` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`Id_user`, `email`, `n_phone`, `f_name`, `l_name`) VALUES
(90, 'ahmad@gmail.com', 2147483647, 'ahmad', 'wakhidi'),
(91, 'ahmad@gmail.com', 2147483647, 'ahmad', 'rochdi'),
(92, 'wahbidox@gmail.com', 72388976, 'ATGUIRI', 'ABDALLAH'),
(93, 'wahbidox@gmail.com', 72388976, 'ATGUIRI', 'ABDALLAH');

-- --------------------------------------------------------

--
-- Structure de la table `voyage`
--

CREATE TABLE `voyage` (
  `Id_voyage` int(11) NOT NULL,
  `date_dep` datetime NOT NULL,
  `depart` varchar(255) NOT NULL,
  `arrive` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `Id_train` int(11) NOT NULL,
  `date_arr` datetime NOT NULL,
  `Annuler` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `voyage`
--

INSERT INTO `voyage` (`Id_voyage`, `date_dep`, `depart`, `arrive`, `price`, `Id_train`, `date_arr`, `Annuler`) VALUES
(40, '2022-03-18 04:25:00', 'Casablanca', 'Fes', 4560, 1, '2022-03-18 12:25:00', 1),
(41, '2022-03-18 06:28:00', 'Salé', 'Rabat', 150, 3, '2022-03-18 10:28:00', 0),
(42, '2022-03-18 10:30:00', 'Agadir', '	Mohammedia', 120, 4, '2022-03-18 13:30:00', 1),
(43, '2022-03-18 19:33:00', 'Inezgane', 'Bouskoura', 500, 3, '2022-03-19 07:33:00', 1),
(44, '2022-03-18 14:34:00', 'Ben Guerir', 'Essaouira', 200, 2, '2022-03-18 01:38:00', 1),
(45, '2022-03-18 07:37:00', 'Oujda', 'Safi', 300, 3, '2022-03-18 04:37:00', 1),
(46, '2022-03-19 05:41:00', 'El Jadida', 'Mohammedia', 450, 2, '2022-03-18 13:43:00', 1),
(47, '2022-03-18 07:50:00', 'Agadir', 'Safi', 500, 3, '2022-03-18 15:50:00', 1),
(48, '2022-03-18 06:51:00', 'agadir', 'safi', 200, 2, '2022-03-18 07:51:00', 1),
(49, '2022-03-18 06:51:00', 'agadir', 'ifran', 200, 1, '2022-03-18 07:51:00', 1),
(50, '2022-03-19 04:59:00', 'agadir', 'safi', 500, 2, '2022-03-19 14:00:00', 1),
(51, '2022-03-18 16:58:00', 'youcoode', 'home', 0, 2, '2022-03-18 17:58:00', 1),
(52, '2022-03-18 11:58:00', 'youcoode', 'home', 0, 2, '2022-03-18 11:58:00', 1),
(53, '2022-03-18 11:58:00', 'youcoode', 'home', 0, 2, '2022-03-18 11:58:00', 1),
(54, '2022-04-23 10:46:00', 'agadir', 'Meknès', 4500, 3, '2022-04-22 10:46:00', 0),
(55, '2022-04-19 13:47:00', 'taoujdate', 'safi', 4500, 2, '2022-04-18 13:47:00', 1),
(56, '2022-04-19 13:47:00', 'taoujdate', 'safi', 4500, 2, '2022-04-18 13:47:00', 1),
(57, '2022-04-19 13:47:00', 'taoujdate', 'safi', 4500, 2, '2022-04-18 13:47:00', 1),
(58, '2022-04-19 13:47:00', 'taoujdate', 'safi', 4500, 2, '2022-04-18 13:47:00', 0),
(59, '2022-04-21 15:57:00', 'agadir', 'tanga', 5000, 4, '2022-04-24 10:51:00', 1),
(60, '2022-04-21 15:57:00', 'agadir', 'tanga', 5000, 4, '2022-04-24 10:51:00', 1),
(61, '2022-04-21 15:57:00', 'agadir', 'tanga', 5000, 4, '2022-04-24 10:51:00', 1),
(62, '2022-04-22 10:50:00', 'casa', 'tawjtat', 100, 3, '2022-04-21 14:50:00', 0),
(63, '2022-04-22 10:50:00', 'casa', 'tawjtat', 100, 3, '2022-04-21 14:50:00', 0),
(64, '2022-04-22 10:50:00', 'casa', 'tawjtat', 100, 3, '2022-04-21 14:50:00', 0),
(65, '2022-04-22 10:50:00', 'casa', 'tawjtat', 100, 3, '2022-04-21 14:50:00', 0),
(66, '2022-04-22 10:50:00', 'marakkech', 'tawjtat', 100, 1, '2022-04-21 14:50:00', 0),
(67, '2022-04-22 10:50:00', 'casa', 'tawjtat', 102, 1, '2022-04-21 14:50:00', 0);

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
  ADD KEY `Id-voyage` (`Id_voyage`),
  ADD KEY `Id_client` (`client`),
  ADD KEY `Id_user` (`user`);

--
-- Index pour la table `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`Id_train`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_user`);

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
  MODIFY `Id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `Id_reserv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT pour la table `train`
--
ALTER TABLE `train`
  MODIFY `Id_train` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `Id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT pour la table `voyage`
--
ALTER TABLE `voyage`
  MODIFY `Id_voyage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `Id-voyage` FOREIGN KEY (`Id_voyage`) REFERENCES `voyage` (`Id_voyage`),
  ADD CONSTRAINT `Id_client` FOREIGN KEY (`client`) REFERENCES `client` (`Id_client`),
  ADD CONSTRAINT `Id_user` FOREIGN KEY (`user`) REFERENCES `user` (`Id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

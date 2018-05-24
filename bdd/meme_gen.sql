-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 15 Mai 2018 à 09:20
-- Version du serveur :  5.7.22-0ubuntu0.16.04.1
-- Version de PHP :  7.2.4-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `meme_gen`
--

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id_image` int(150) NOT NULL,
  `name_image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `image`
--

INSERT INTO `image` (`id_image`, `name_image`) VALUES
(1, 'aaaaand-its-gone.jpg'),
(2, 'baby-godfather.jpg'),
(3, 'business-cat.jpg'),
(4, 'duck-face-chicks.jpg'),
(5, 'evil-baby.jpg'),
(6, 'evil-cows.jpg'),
(7, 'evil-plotting-raccoon.jpg'),
(8, 'grumpy-cat-not-amused.jpg'),
(9, 'grumpy-cat-star-wars.jpg'),
(10, 'guy.jpg'),
(11, 'hide-the-pain-harold.jpg'),
(12, 'impossibru-guy-Ooriginal.jpg'),
(13, 'putin-bear.jpg'),
(14, 'putin-freefall.jpg'),
(15, 'putin-shark.jpg'),
(16, 'rangutan-original.jpg'),
(17, 'secure-parking.jpg'),
(18, 'smiling-cat.jpg'),
(19, 'success-kid-original.jpg'),
(20, 'trump-jong.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `image_meme`
--

CREATE TABLE `image_meme` (
  `id_image` int(150) NOT NULL,
  `id_meme` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `meme`
--

CREATE TABLE `meme` (
  `id_meme` int(150) NOT NULL,
  `name_meme` int(150) NOT NULL,
  `date_meme` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id_image`);

--
-- Index pour la table `meme`
--
ALTER TABLE `meme`
  ADD PRIMARY KEY (`id_meme`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id_image` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `meme`
--
ALTER TABLE `meme`
  MODIFY `id_meme` int(150) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

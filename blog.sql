-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Lun 27 Janvier 2014 à 21:19
-- Version du serveur: 5.5.16
-- Version de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `texte` text NOT NULL,
  `date` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `texte`, `date`) VALUES
(5, 'Article 1', 'In gravida luctus magna, ac rhoncus augue semper sollicitudin. Suspendisse massa augue, dignissim eget nisl nec, mollis commodo tellus. Integer in dapibus sem. Ut in iaculis felis. Sed auctor fringilla nisl, eu vehicula nisl dictum feugiat. In neque eros, dapibus sit amet auctor in, viverra et quam. Proin eget blandit purus.', 0),
(6, 'Article 2', 'Maecenas consectetur, orci sed volutpat luctus, tellus mi lacinia risus, a dignissim neque neque quis nibh. Phasellus tempus semper nulla, pulvinar egestas tortor porttitor sit amet. Cras viverra leo molestie magna venenatis luctus. Nulla sit amet libero non est imperdiet tincidunt. Proin leo tellus, semper non quam quis, volutpat imperdiet mauris. Suspendisse tristique elementum orci, non iaculis ante accumsan at. Praesent risus eros, sagittis sit amet neque ac, fermentum mattis leo. In quis orci sem. Integer eget convallis est, at sollicitudin lorem. Aliquam erat volutpat. Curabitur lobortis libero nisi, in feugiat libero lacinia nec.', 0),
(7, 'Article 3', 'Curabitur non sapien ipsum. Etiam a nisl vitae dui porta rhoncus nec volutpat elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam enim neque, congue at nulla ac, tempor venenatis nulla. Ut ultricies est eu eros congue tristique. Nulla aliquam augue at mi luctus lacinia. Nullam id felis orci. Suspendisse sagittis sed turpis a mattis. Fusce nec sollicitudin velit. Aenean varius massa sit amet sapien egestas tincidunt. Aliquam eleifend nulla vitae congue iaculis. Vivamus porta orci eget turpis bibendum, a egestas lacus ultrices. Pellentesque ac ullamcorper nisi. Aliquam libero felis, euismod ut vestibulum et, gravida pellentesque sapien. In id augue odio. Morbi at tellus lacus.', 0);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `mdp` varchar(30) NOT NULL,
  `sid` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `email`, `mdp`, `sid`) VALUES
(1, 'admin@admin.fr', 'admin', 'cf108c907825c7d098c29c71b0d459c2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

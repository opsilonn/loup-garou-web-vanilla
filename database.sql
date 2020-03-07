SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données :  `loup-garou`
--

-- --------------------------------------------------------

--
-- Structure de la table `faction`
--

DROP TABLE IF EXISTS `faction`;
CREATE TABLE IF NOT EXISTS `faction`
(
  `ID` int(1) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) 
ENGINE=InnoDB  CHARACTER SET utf8 COLLATE utf8_bin;


--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role`
(
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `ID_Faction` int(1) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Description` varchar(500) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_ID_Faction` (`ID_Faction`)
) 
ENGINE=InnoDB  CHARACTER SET utf8 COLLATE utf8_bin;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `role`
--
ALTER TABLE `role`
  ADD CONSTRAINT `FK_ID_Faction` FOREIGN KEY (`ID_Faction`) REFERENCES `faction` (`ID`);
COMMIT;


--
-- Déchargement des données de la table `role`
--

INSERT INTO `faction` (`Name`) VALUES
('Villageois'),
('Loups-Garous'),
('Indépendants');
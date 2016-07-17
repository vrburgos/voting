-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-07-2016 a las 00:06:01
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `voting`
--
CREATE DATABASE IF NOT EXISTS `voting` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `voting`;

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `api`
--
DROP VIEW IF EXISTS `api`;
CREATE TABLE IF NOT EXISTS `api` (
`surnames` varchar(60)
,`names` varchar(60)
,`email` varchar(60)
,`id_document` varchar(20)
,`country` varchar(40)
,`department` varchar(40)
,`committee` varchar(60)
,`date` datetime
);
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candidate`
--

DROP TABLE IF EXISTS `candidate`;
CREATE TABLE IF NOT EXISTS `candidate` (
  `idCandidate` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `surnames` varchar(60) DEFAULT NULL,
  `idCommittee` int(11) NOT NULL,
  `idCountry` int(11) NOT NULL,
  PRIMARY KEY (`idCandidate`),
  KEY `fk_Candidate_Committee1_idx` (`idCommittee`),
  KEY `fk_Candidate_Country1_idx` (`idCountry`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `candidate`
--

INSERT INTO `candidate` (`idCandidate`, `name`, `surnames`, `idCommittee`, `idCountry`) VALUES
(1, 'Jon', 'Snow', 1, 1),
(2, 'Jose', 'Tobar', 1, 1),
(3, 'Mike', 'Smalling', 2, 1),
(4, 'Tom', 'Stanton', 2, 1),
(5, 'Ronald', 'Trump', 1, 2),
(6, 'John', 'Lennon', 1, 2),
(7, 'Ray', 'Pennber', 1, 2),
(8, 'Hugh', 'Hefner', 2, 2),
(9, 'Tiger', 'Woods', 2, 2),
(10, 'Ivan', 'Zamorano', 3, 2),
(11, 'Mario', 'Kempes', 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `committee`
--

DROP TABLE IF EXISTS `committee`;
CREATE TABLE IF NOT EXISTS `committee` (
  `idCommittee` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `Department_idDepartment` int(11) NOT NULL,
  PRIMARY KEY (`idCommittee`),
  KEY `fk_Committee_Department1_idx` (`Department_idDepartment`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `committee`
--

INSERT INTO `committee` (`idCommittee`, `name`, `description`, `Department_idDepartment`) VALUES
(1, 'Homeland Security', NULL, 4),
(2, 'Intelligence', NULL, 4),
(3, 'Judiciary ', NULL, 2),
(4, 'Public Education', NULL, 3),
(5, 'Communication', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `country`
--

DROP TABLE IF EXISTS `country`;
CREATE TABLE IF NOT EXISTS `country` (
  `idCountry` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  PRIMARY KEY (`idCountry`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `country`
--

INSERT INTO `country` (`idCountry`, `name`) VALUES
(1, 'El Salvador'),
(2, 'United States');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `idDepartment` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  PRIMARY KEY (`idDepartment`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `department`
--

INSERT INTO `department` (`idDepartment`, `name`) VALUES
(1, 'State'),
(2, 'Justice'),
(3, 'Education'),
(4, 'Defense');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log_user`
--

DROP TABLE IF EXISTS `log_user`;
CREATE TABLE IF NOT EXISTS `log_user` (
  `idLog_user` int(11) NOT NULL AUTO_INCREMENT,
  `user_iduser` int(11) NOT NULL,
  `visit_date` datetime NOT NULL,
  PRIMARY KEY (`idLog_user`),
  KEY `fk_table1_user1_idx` (`user_iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `person`
--

DROP TABLE IF EXISTS `person`;
CREATE TABLE IF NOT EXISTS `person` (
  `idPerson` int(11) NOT NULL AUTO_INCREMENT,
  `names` varchar(60) NOT NULL,
  `surnames` varchar(60) NOT NULL,
  `email` varchar(60) DEFAULT NULL,
  `id_document` varchar(20) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idCountry` int(11) NOT NULL,
  PRIMARY KEY (`idPerson`),
  KEY `fk_Person_user_idx` (`iduser`),
  KEY `fk_Person_Country1_idx` (`idCountry`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `person`
--

INSERT INTO `person` (`idPerson`, `names`, `surnames`, `email`, `id_document`, `iduser`, `idCountry`) VALUES
(1, 'Victor Roberto', 'Burgos', 'vrburgosm@live.com', '04248893', 2, 1),
(2, 'Jose', 'Mendoza', 'jmendoza@gmail.com', '1212130232', 3, 1),
(3, 'Roberto', 'Suria', 'rsuria@gmail.com', '1121212455', 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(80) NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`iduser`, `username`, `password`) VALUES
(2, 'vrburgos', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'jmendoza', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'rsuria', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vote`
--

DROP TABLE IF EXISTS `vote`;
CREATE TABLE IF NOT EXISTS `vote` (
  `idVote` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `idCandidate` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `idCommittee` int(11) NOT NULL,
  PRIMARY KEY (`idVote`),
  KEY `fk_Vote_user1_idx` (`iduser`),
  KEY `fk_Vote_Candidate1_idx` (`idCandidate`),
  KEY `fk_Vote_Committee1_idx` (`idCommittee`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `vote`
--

INSERT INTO `vote` (`idVote`, `iduser`, `idCandidate`, `date`, `idCommittee`) VALUES
(1, 2, 1, '2016-07-17 16:55:54', 1),
(2, 2, 3, '2016-07-17 17:04:31', 2),
(3, 3, 2, '2016-07-17 12:19:20', 1),
(4, 4, 1, '2016-07-17 12:21:32', 1);

-- --------------------------------------------------------

--
-- Estructura para la vista `api`
--
DROP TABLE IF EXISTS `api`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `api` AS select `p`.`surnames` AS `surnames`,`p`.`names` AS `names`,`p`.`email` AS `email`,`p`.`id_document` AS `id_document`,`c`.`name` AS `country`,`dep`.`name` AS `department`,`comm`.`name` AS `committee`,`v`.`date` AS `date` from (((((`vote` `v` join `person` `p` on((`v`.`iduser` = `p`.`iduser`))) join `country` `c` on((`p`.`idCountry` = `c`.`idCountry`))) join `candidate` `cand` on((`v`.`idCandidate` = `cand`.`idCandidate`))) join `committee` `comm` on((`cand`.`idCommittee` = `comm`.`idCommittee`))) join `department` `dep` on((`comm`.`Department_idDepartment` = `dep`.`idDepartment`)));

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `candidate`
--
ALTER TABLE `candidate`
  ADD CONSTRAINT `fk_Candidate_Committee1` FOREIGN KEY (`idCommittee`) REFERENCES `committee` (`idCommittee`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Candidate_Country1` FOREIGN KEY (`idCountry`) REFERENCES `country` (`idCountry`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `committee`
--
ALTER TABLE `committee`
  ADD CONSTRAINT `fk_Committee_Department1` FOREIGN KEY (`Department_idDepartment`) REFERENCES `department` (`idDepartment`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `log_user`
--
ALTER TABLE `log_user`
  ADD CONSTRAINT `fk_table1_user1` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `person`
--
ALTER TABLE `person`
  ADD CONSTRAINT `fk_Person_user` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Person_Country1` FOREIGN KEY (`idCountry`) REFERENCES `country` (`idCountry`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `vote`
--
ALTER TABLE `vote`
  ADD CONSTRAINT `fk_Vote_user1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Vote_Candidate1` FOREIGN KEY (`idCandidate`) REFERENCES `candidate` (`idCandidate`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Vote_Committee1` FOREIGN KEY (`idCommittee`) REFERENCES `committee` (`idCommittee`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

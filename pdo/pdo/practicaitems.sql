-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-10-2017 a las 10:50:41
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `joseluis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `items`
--
DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id_item` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_item`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Volcar la base de datos para la tabla `items`
--

INSERT INTO `items` (`id_item`, `item`) VALUES
(1, 'PHP'),
(2, 'Mootools'),
(3, 'Google Maps'),
(4, 'Javascript'),
(5, 'Actionscript'),
(6, 'c#'),
(7, 'ASP');

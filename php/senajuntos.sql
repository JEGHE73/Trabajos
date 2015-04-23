-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-04-2015 a las 13:30:18
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `senajuntos`
--
CREATE DATABASE IF NOT EXISTS `senajuntos` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `senajuntos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `amigos`
--

CREATE TABLE IF NOT EXISTS `amigos` (
  `id_amigos` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `usuario_amigos` int(11) NOT NULL,
  PRIMARY KEY (`id_amigos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos`
--

CREATE TABLE IF NOT EXISTS `archivos` (
  `id_archivos` int(11) NOT NULL AUTO_INCREMENT,
  `archivos` varchar(500) NOT NULL,
  PRIMARY KEY (`id_archivos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE IF NOT EXISTS `imagenes` (
  `id_imagen` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(500) NOT NULL,
  PRIMARY KEY (`id_imagen`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id_imagen`, `imagen`) VALUES
(1, 'img/11058389_915243811871517_7807740413274257437_n.jpg'),
(2, 'img/1400904353135.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE IF NOT EXISTS `publicaciones` (
  `id_publicaciones` int(11) NOT NULL AUTO_INCREMENT,
  `message` tinytext NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fperfil` varchar(500) NOT NULL,
  `fportada` varchar(500) NOT NULL,
  `fotos` varchar(500) NOT NULL,
  `videos` varchar(500) NOT NULL,
  PRIMARY KEY (`id_publicaciones`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE IF NOT EXISTS `registro` (
  `usuario_id` int(11) NOT NULL AUTO_INCREMENT,
  `correo` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `ape` varchar(50) NOT NULL,
  `tdoc` varchar(50) NOT NULL,
  `doc` bigint(20) NOT NULL,
  `anyo` int(11) NOT NULL,
  `mes` int(11) NOT NULL,
  `dia` int(11) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `rol` varchar(50) NOT NULL,
  `ficha` int(11) NOT NULL,
  `programa` varchar(250) NOT NULL,
  `regional` varchar(250) NOT NULL,
  `centro` varchar(250) NOT NULL,
  PRIMARY KEY (`usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`usuario_id`, `correo`, `clave`, `nombre`, `ape`, `tdoc`, `doc`, `anyo`, `mes`, `dia`, `sexo`, `rol`, `ficha`, `programa`, `regional`, `centro`) VALUES
(3, 'cnavarro43@misena.edu.co', 'f552d28cb071a0f1fe1297605eb2898106361643', 'Carolyn', ' Navarro Restrepo', 'cedula', 1036669187, 1996, 10, 24, 'f', 'ap', 689741, 'ADSI', 'ANTIOQUIA', 'CENTRO TECNOLOGICO DEL MOBILIARIO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `ape` varchar(50) NOT NULL,
  `rol` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `fperfil` varchar(250) NOT NULL,
  `fportada` varchar(250) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `ape`, `rol`, `correo`, `fperfil`, `fportada`) VALUES
(1, '', '', '', '', 'img/1400904353135.jpg', 'img/11058389_915243811871517_7807740413274257437_n.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id_videos` int(11) NOT NULL AUTO_INCREMENT,
  `video` varchar(500) NOT NULL,
  PRIMARY KEY (`id_videos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

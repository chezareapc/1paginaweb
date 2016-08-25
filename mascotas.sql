-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-08-2016 a las 22:18:32
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascotas`
--

CREATE TABLE `mascotas` (
  `idmascota` int(10) NOT NULL,
  `nombremascota` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `tipodemascota` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `raza` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `sexo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nombredueno` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `fechanac` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `mascotas`
--

INSERT INTO `mascotas` (`idmascota`, `nombremascota`, `tipodemascota`, `raza`, `sexo`, `nombredueno`, `fechanac`) VALUES
(21310945, 'Bartolo', 'Perro', 'Boxer', 'Masculino', 'zuleibis', '01012015');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

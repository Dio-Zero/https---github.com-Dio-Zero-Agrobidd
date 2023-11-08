-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 08-11-2023 a las 11:40:09
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `remates`
--

DROP TABLE IF EXISTS `remates`;
CREATE TABLE IF NOT EXISTS `remates` (
  `id_remate` int NOT NULL AUTO_INCREMENT,
  `nombre_remate` varchar(30) NOT NULL,
  `horario` time NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `id_lote` int NOT NULL,
  PRIMARY KEY (`id_remate`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `remates`
--

INSERT INTO `remates` (`id_remate`, `nombre_remate`, `horario`, `fecha`, `descripcion`, `id_lote`) VALUES
(5, 'remate pereira', '12:13:00', '2023-11-23', 'Se remata lote de vacas en colona del sacramento en la chacra pereira', 2),
(6, 'remate pereira', '10:14:00', '2023-11-02', 'Se remata lote de vacas en colona del sacramento en la chacra pereira', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

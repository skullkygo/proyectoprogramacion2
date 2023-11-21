-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2023 a las 20:33:58
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `autoridades`
--
CREATE DATABASE IF NOT EXISTS `autoridades` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `autoridades`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_autoridades`
--
-- Creación: 21-11-2023 a las 18:40:52
-- Última actualización: 21-11-2023 a las 19:26:16
--

CREATE TABLE `datos_autoridades` (
  `cargo` varchar(150) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `correo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_autoridades`
--

INSERT INTO `datos_autoridades` (`cargo`, `nombre`, `correo`) VALUES
('Profesor', 'Gustavo Javier', 'gustavojavier@gmail.com'),
('Licenciado', 'Roberto Gonzalez', 'robertogonzalez@gmail.com'),
('Licenciado en Sistemas', 'Alfredo Villafañe', 'alfredovillafañe@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

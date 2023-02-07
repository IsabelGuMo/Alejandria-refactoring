-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 07-02-2023 a las 08:54:16
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `alejandria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alejandria`
--

CREATE TABLE `alejandria` (
  `isbn` varchar(25) NOT NULL,
  `editorial` text NOT NULL,
  `titulo` text NOT NULL,
  `autor` text NOT NULL,
  `descripcion` text NOT NULL,
  `img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alejandria`
--

INSERT INTO `alejandria` (`isbn`, `editorial`, `titulo`, `autor`, `descripcion`, `img`) VALUES
('', '', '', '', '', ''),
('666666666666', 'pepito', 'vakmvapo', 'asld`fl', 'alfqplfkaefpoekfeofkoflk,dfplkfofk', ''),
('978-84-663-6069-2', 'De bolsillo', 'El plan infinito', 'Allende', 'Gregory quiere llevar a la práctica el peculiar \"plan infinito\" que se trazó a sí mismo en su infancia. Sin embargo, para conseguirlo debe recorrer un duro camino lleno de obstáculos: la marginación social, el racismo, el brutal contraste entre pobreza y riqueza o la guerra de Vietnam.', '978-84-663-6069-2.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alejandria`
--
ALTER TABLE `alejandria`
  ADD PRIMARY KEY (`isbn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

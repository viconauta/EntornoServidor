-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2026 a las 20:10:01
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `centro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `dni` char(9) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `edad` tinyint(4) NOT NULL CHECK (`edad` between 0 and 120)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`dni`, `nombre`, `edad`) VALUES
('22222222B', 'María López', 21),
('33333333C', 'Paloma Ruiz', 24),
('44444444R', 'Isabel Perea', 25),
('55555555Z', 'Ramón Torres', 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaturas`
--

CREATE TABLE `asignaturas` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `creditos` smallint(6) NOT NULL,
  `trimestre` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `asignaturas`
--

INSERT INTO `asignaturas` (`codigo`, `nombre`, `creditos`, `trimestre`) VALUES
(1, 'Bases de datos', 15, 1),
(2, 'Programación', 18, 2),
(3, 'Lenguajes de marcas', 23, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matriculas`
--

CREATE TABLE `matriculas` (
  `dni` char(9) NOT NULL,
  `codigo` int(11) NOT NULL,
  `anio` smallint(6) NOT NULL,
  `nota` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `matriculas`
--

INSERT INTO `matriculas` (`dni`, `codigo`, `anio`, `nota`) VALUES
('22222222B', 1, 2025, 4.00),
('22222222B', 1, 2026, 6.00),
('33333333C', 2, 2025, 7.00),
('55555555Z', 1, 2026, 8.00),
('55555555Z', 2, 2026, 4.00);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`dni`);

--
-- Indices de la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `matriculas`
--
ALTER TABLE `matriculas`
  ADD PRIMARY KEY (`dni`,`codigo`,`anio`),
  ADD KEY `codigo` (`codigo`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `matriculas`
--
ALTER TABLE `matriculas`
  ADD CONSTRAINT `matriculas_ibfk_1` FOREIGN KEY (`dni`) REFERENCES `alumnos` (`dni`),
  ADD CONSTRAINT `matriculas_ibfk_2` FOREIGN KEY (`codigo`) REFERENCES `asignaturas` (`codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2021 a las 11:02:43
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `examenapirest`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos_de_futbol`
--

CREATE TABLE `equipos_de_futbol` (
  `id_equipo` int(11) NOT NULL,
  `nombre_equipo` varchar(255) NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  `numeroJugadores` tinyint(3) UNSIGNED NOT NULL,
  `nombre_estadio` varchar(255) NOT NULL,
  `division` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `equipos_de_futbol`
--

INSERT INTO `equipos_de_futbol` (`id_equipo`, `nombre_equipo`, `ciudad`, `numeroJugadores`, `nombre_estadio`, `division`) VALUES
(1, 'Almería', 'Almería', 11, 'Juegos del Mediterráneo', '2'),
(2, 'Éibar', 'Éibar', 11, 'Estadio Municipal de Ipurúa', '2'),
(3, 'Alcorcón', 'Alcorcón', 11, 'Estadio Municipal de Santo Domingo', '2'),
(6, 'Barcelona', 'Barcelona', 11, 'Camp Nou', '1'),
(7, 'Real Madrid', 'Madrid', 11, 'Estadio Santiago Bernabeú', '1'),
(8, 'Real Sociedad', 'San Sebastián', 11, 'Reale Arena', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_ususario` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol` varchar(15) NOT NULL DEFAULT 'cliente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_ususario`, `nombre`, `email`, `password`, `rol`) VALUES
(1, 'Pepita', 'pepita@gmail.com', '$2y$10$yJYDtG8VF8pv55nyfO5xc.SNre13ReojDNkNKIXunIxnZNC2r3I2e', 'administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipos_de_futbol`
--
ALTER TABLE `equipos_de_futbol`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_ususario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equipos_de_futbol`
--
ALTER TABLE `equipos_de_futbol`
  MODIFY `id_equipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_ususario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

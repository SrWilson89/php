-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-11-2021 a las 13:41:39
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `netvideo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id_pelicula` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `duracion` int(4) UNSIGNED NOT NULL,
  `anio` int(4) UNSIGNED NOT NULL,
  `pais` varchar(255) NOT NULL,
  `genero` varchar(255) NOT NULL,
  `sipnosis` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id_pelicula`, `titulo`, `duracion`, `anio`, `pais`, `genero`, `sipnosis`, `imagen`) VALUES
(1, '300', 117, 2007, 'España', 'Guerra, historico', 'En el año 480 antes de Cristo, existe un estado de guerra entre Persia, dirigida por el rey Jerjes, y Grecia. En la batalla de la Termópilas, Leonidas, rey de la ciudad griega de Esparta, encabeza a sus 300 bravos soldados en contra del numeroso ejército ', '5f8bba164aef0.jpg'),
(2, 'Colega donde esta mi coche', 83, 2000, 'España', 'Comedia', 'Jesse y Chester se despiertan una mañana después de una fiesta muy intensa, pero ninguno de los dos puede recordar qué pasó durante la noche anterior.', '19514331.jpg'),
(3, 'Hercules', 93, 1997, 'España', 'Infantil', 'Hércules, hijo de Hera y el dios Zeus, es robado del Olimpo por los secuaces de Hades para llevarlo a la Tierra y despojarlo de su inmortalidad.', '511V6QBV6PL._SY445_.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id_pelicula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id_pelicula` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

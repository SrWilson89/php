-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2021 a las 11:16:26
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `telefono` char(9) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_usuario` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre`, `apellidos`, `direccion`, `telefono`, `email`, `id_usuario`) VALUES
(1, 'Pepito', 'Grillo', 'C/ Grillo, 35', '925212121', 'pepito@gmail.com', NULL),
(2, 'Felipe', 'Saltamontes', 'C/ Pilar, 35', '925101010', 'felipe@gmail.com', NULL),
(3, 'Alicia', 'pulgarcita', 'C/ Lilipu, 1', '925303030', 'alicia@yahoo.es', NULL),
(4, 'filomeno', 'cascarabias', 'Plaza locura, 56', '925404040', 'filomeno@yahoo.com', NULL),
(5, 'rogelio', 'salamero', 'calle pirata, 33', '925555555', 'rogelio@gmail.com', NULL),
(6, 'fermin', 'cacho', 'Calle/ fermin de los santos', '925123456', 'fermin@gmail.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(10) UNSIGNED NOT NULL,
  `id_cliente` int(10) UNSIGNED NOT NULL,
  `fecha_compra` datetime NOT NULL DEFAULT current_timestamp(),
  `estado` varchar(15) NOT NULL,
  `fecha_entrega` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `id_cliente`, `fecha_compra`, `estado`, `fecha_entrega`) VALUES
(1, 3, '2020-11-03 10:22:59', 'entregado', '2020-11-06'),
(2, 1, '2021-10-18 10:27:18', 'pagado', NULL),
(3, 1, '2019-10-01 12:22:07', 'entregado', '2019-10-03'),
(4, 2, '2020-04-01 12:49:25', 'entregado', '2020-04-06'),
(5, 6, '2021-10-22 10:37:01', 'pagado', NULL),
(6, 6, '2021-10-22 10:37:34', 'enviado', NULL),
(7, 6, '2021-10-22 10:40:07', 'pagado', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos_productos`
--

CREATE TABLE `pedidos_productos` (
  `id_pedido` int(10) UNSIGNED NOT NULL,
  `id_producto` int(10) UNSIGNED NOT NULL,
  `cantidad` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedidos_productos`
--

INSERT INTO `pedidos_productos` (`id_pedido`, `id_producto`, `cantidad`) VALUES
(1, 1, 1),
(1, 5, 1),
(2, 3, 2),
(3, 4, 1),
(4, 2, 1),
(5, 1, 1),
(5, 5, 1),
(5, 7, 1),
(6, 1, 1),
(6, 5, 1),
(7, 1, 1),
(7, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `stock` tinyint(3) UNSIGNED NOT NULL,
  `marca` varchar(255) NOT NULL,
  `precio` decimal(7,2) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `peso` decimal(4,2) NOT NULL,
  `imagen` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `stock`, `marca`, `precio`, `descripcion`, `categoria`, `peso`, `imagen`) VALUES
(1, 'Memoria DD5 8GB 3200', 8, 'Corsair', '59.00', 'Memorias con rgb super molonas, fps sin fin.', 'memoria', '0.10', 'await_further_instructions-696726621-large.jpg'),
(2, 'ryzen 5 5600X', 3, 'amd', '200.00', 'cpu ryzen 5 5600X a 4.7GHz', 'cpu', '0.30', 'armed_response-733595707-large.jpg'),
(3, 'SSD 2TB NVMe M.2 PCIe 4.0', 2, 'Western Digital', '409.34', 'WD Black SN850 2TB SSD NVMe M.2 PCIe 4.0 sin Disipador Térmico', 'almacenamiento', '0.20', 'brightburn-170933836-large.jpg'),
(4, 'RTX 3060 Ti ', 1, 'PNY', '849.90', 'PNY GeForce RTX 3060 Ti XLR8 Gaming REVEL EPIC-X RGB Dual Fan LHR 8GB GDDR6', 'graficas', '0.80', ''),
(5, 'Asus Prime B460M-A R2.0', 4, 'asus', '79.94', 'Intel ® LGA 1200 socket: Listo para la 11 y 10a gen de procesadores Intel ® Core ™\r\nSolución de potencia mejorada: 8 etapas de potencia, estranguladores de aleación y condensadores duraderos para una entrega de potencia estable\r\nRefrigeración completa: disipador de calor PCH, cabezales de ventilador híbridos y Fan Xpert\r\nASUS OptiMem: enrutamiento cuidadoso de trazas y vías para preservar la integridad de la señal para mejorar la estabilidad de la memoria\r\nConectividad ultrarrápida: PCIe ® 4.0, Intel ® 1 Gb Ethernet, Front USB 3.2 Gen 1', 'placas base', '0.40', ''),
(6, 'NO VENDIDO', 1, 'NISU', '999.99', 'NI SU MADRE LO QUIERE', 'raton', '0.15', ''),
(7, 'Intel Core I5 10400 290 GHz', 5, 'Intel', '183.00', 'Procesador\r\nNúmero de núcleos de procesador: 6\r\nNúmero de filamentos de procesador: 12\r\n Processor Base Frequency   2.90 GHz \r\n Max Turbo Frequency   4.30 GHz \r\n Cache   12 MB Intel® Smart Cache \r\n Bus Speed   8 GT/s \r\n TDP   65 W', 'cpu', '0.10', ''),
(11, 'Gigabyte AORUS GeForce GTX 1650 D6 WINDFORCE OC 4GB GDDR6', 2, 'Gigabyte', '445.64', 'Procesador\r\nCUDA: Si\r\nNúcleos CUDA: 896\r\nFamilia de procesadores de gráficos: NVIDIA\r\nProcesador gráfico: GeForce GTX 1650\r\nFrecuencia del procesador: 1710 MHz\r\nMáxima resolución: 7680 x 4320 Pixeles\r\nSoporte para proceso paralelo: No compatible', 'Tarjeta gráfica', '0.50', 'armed_response-733595707-large.jpg'),
(13, 'Producto de prueba ', 4, 'MSI', '125.90', 'Descripcion de prueba', 'pruebas', '0.50', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `email`, `password`, `rol`) VALUES
(1, 'fermin', 'fermin@gmail.com', '$2y$10$uY96clliaKROXvcRFNvAVeRuLbjU4WFQj.Z3o48dIkzY4fJHvpMNK', 'cliente'),
(6, 'admin', 'admin@campus.com', '$2y$10$roLFlIvxXqtX8CIbhc2Sb.HpUkshbxGEBs3CzlZUQW.av/KCSZfWO', 'administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `clientes-usuario-fk` (`id_usuario`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `pedidos-cliente-fk` (`id_cliente`);

--
-- Indices de la tabla `pedidos_productos`
--
ALTER TABLE `pedidos_productos`
  ADD PRIMARY KEY (`id_pedido`,`id_producto`),
  ADD KEY `ped-pro-producto` (`id_producto`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `nombre_ind` (`nombre`),
  ADD UNIQUE KEY `email_ind` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes-usuario-fk` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos-cliente-fk` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`);

--
-- Filtros para la tabla `pedidos_productos`
--
ALTER TABLE `pedidos_productos`
  ADD CONSTRAINT `ped-pro-pedidos` FOREIGN KEY (`id_pedido`) REFERENCES `pedidos` (`id_pedido`),
  ADD CONSTRAINT `ped-pro-producto` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

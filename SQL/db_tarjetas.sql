-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2017 a las 01:30:06
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_tarjetas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `comentario` text NOT NULL,
  `valoracion` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_comentario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id` int(11) NOT NULL,
  `fk_id_tarea` int(11) NOT NULL,
  `path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id`, `fk_id_tarea`, `path`) VALUES
(39, 137, 'img/5a076dcdd178a_1.jpg'),
(40, 137, 'img/5a076dcdda346_2.jpg'),
(41, 137, 'img/5a076dcde31dc_3.jpg'),
(45, 137, 'img/5a076dce23ce1_11.jpg'),
(46, 137, 'img/5a076dce2c051_12.jpg'),
(47, 137, 'img/5a076dce3c413_13.jpg'),
(49, 156, 'img/5a076f617c41b_6.jpg'),
(52, 156, 'img/5a076f61a8d36_9.jpg'),
(53, 156, 'img/5a076f61b0e37_10.jpg'),
(55, 156, 'img/5a076f61c12e7_12.jpg'),
(56, 156, 'img/5a076f61c9670_13.jpg'),
(57, 156, 'img/5a076f61d58e4_14.jpg'),
(66, 160, 'img/5a0774f46a607_6.jpg'),
(67, 160, 'img/5a0774f476c77_7.jpg'),
(68, 160, 'img/5a0774f47f578_8.jpg'),
(75, 148, 'img/5a0775160736d_6.jpg'),
(76, 148, 'img/5a07751610c01_7.jpg'),
(77, 148, 'img/5a0775161924d_8.jpg'),
(78, 148, 'img/5a07751627747_9.jpg'),
(79, 148, 'img/5a07751635a3d_10.jpg'),
(81, 148, 'img/5a0775166a885_12.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id`, `nombre`) VALUES
(1, 'MSI'),
(2, 'GIGABYTE'),
(3, 'EVGA'),
(4, 'XFX'),
(5, 'ASUS'),
(6, 'SAPPHIRE'),
(7, 'PALIT'),
(8, 'ZOTAC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `memoria` int(11) NOT NULL,
  `banda` double NOT NULL,
  `consumo` int(11) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `modelo`, `memoria`, `banda`, `consumo`, `id_marca`, `imagen`) VALUES
(134, 'GTX 1080 Ti', 1111, 1111, 0, 7, ''),
(135, 'fff', 1111, 1111, 1111, 1, ''),
(136, 'asdasd', 0, 0, 0, 1, ''),
(137, 'GTX 1080 Ti', 8, 450, 500, 5, ''),
(148, 'GTX 1070 Ti', 6, 500, 600, 7, ''),
(156, 'aaaa', 1, 1, 1, 6, ''),
(157, 'q', 1, 1, 1, 4, ''),
(160, '1', 1, 1, 1, 5, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `superAdmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `password`, `nombre`, `apellido`, `superAdmin`) VALUES
(1, 'admin', '$2y$10$mX0CJe.TzCawcbgGb1x4h.GLC4ZYlqCtqtjI85vaqmxc/kmNbX9s.', 'carlos', 'cabrera', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_tarea` (`fk_id_tarea`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_marca` (`id_marca`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `imagen_ibfk_1` FOREIGN KEY (`fk_id_tarea`) REFERENCES `producto` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-09-2018 a las 16:55:47
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `imotriz`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `concesionarioapp_categoria`
--

CREATE TABLE `concesionarioapp_categoria` (
  `catid` int(11) NOT NULL,
  `catipo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `concesionarioapp_categoria`
--

INSERT INTO `concesionarioapp_categoria` (`catid`, `catipo`) VALUES
(1, 'Camioneta'),
(2, 'Campero'),
(3, 'sedan'),
(4, 'automovil'),
(5, '4x4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `concesionarioapp_datospersonales`
--

CREATE TABLE `concesionarioapp_datospersonales` (
  `datid` int(11) NOT NULL,
  `datnombre` varchar(50) DEFAULT NULL,
  `datapellido` varchar(50) DEFAULT NULL,
  `datipoid` varchar(20) DEFAULT NULL,
  `datnumeroid` varchar(20) DEFAULT NULL,
  `datelefono` varchar(20) DEFAULT NULL,
  `datcorreo` varchar(50) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `usuid_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `concesionarioapp_datospersonales`
--

INSERT INTO `concesionarioapp_datospersonales` (`datid`, `datnombre`, `datapellido`, `datipoid`, `datnumeroid`, `datelefono`, `datcorreo`, `foto`, `usuid_id`) VALUES
(1, 'Manuel Fernando', 'Arias Ramirez', 'CC', '1093227090', '3136772949', 'manu-9624@hotmail.com', 'foto', 1),
(2, 'Natalia', 'Morales', 'CC', '87895156', '235387983', 'Natalia@hotmail.com', 'foto', 2),
(3, 'Gloria', 'Rodriguez', 'CC', '578637463', '373673', 'Gloria@hotmial.com', 'efgerg', 3),
(4, 'Luis', 'Arias', 'CC', '7867836', '67863763', 'Luis@hotmail.com', 'fgergte', 4),
(5, 'Sebastian', 'Posada', 'CC', '8677986', '68786', 'Sebastian@hotmail.com', 'wegferg', 5),
(6, 'Carlos', 'betancour', 'CC', '68876', '786786', 'Carlos@hotmail.com', 'ergethth', 6),
(7, 'Jorge', 'Gomez', 'CC', '75785', '78678', 'Joder@hotmail.com', 'wefeg', 7),
(8, 'Pedro', 'Vasco', 'CC', '73737', '37783573', 'Pedro@hotmail.com', 'wferg', 8),
(9, 'Maria', 'Ariza', 'CC', '8765786', '876786', 'Maria@hotmail.com', 'regeg', 9),
(10, 'Valeria', 'Morales', 'CC', '547637', '3783', 'Valeria@hotmail.com', 'wefgeg', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `concesionarioapp_rol`
--

CREATE TABLE `concesionarioapp_rol` (
  `rolid` int(11) NOT NULL,
  `roltipo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `concesionarioapp_rol`
--

INSERT INTO `concesionarioapp_rol` (`rolid`, `roltipo`) VALUES
(1, 'Vendedor'),
(2, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `concesionarioapp_usuario`
--

CREATE TABLE `concesionarioapp_usuario` (
  `id` int(11) NOT NULL,
  `password` varchar(128) DEFAULT NULL,
  `username` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `concesionarioapp_usuario`
--

INSERT INTO `concesionarioapp_usuario` (`id`, `password`, `username`) VALUES
(1, '12345678', 'Manuel'),
(2, '984187998', 'Natalia'),
(3, '87654321', 'Gloria'),
(4, '321987654', 'Luis'),
(5, '789123456', 'sebastian'),
(6, '865876876', 'Carlos'),
(7, '8769786', 'Jorge'),
(8, '6862546378', 'Pedro'),
(9, '87815877', 'Maria'),
(10, '9352857', 'Valeria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `concesionarioapp_usuariorol`
--

CREATE TABLE `concesionarioapp_usuariorol` (
  `id` int(11) NOT NULL,
  `rolid_id` int(11) NOT NULL,
  `usuid_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `concesionarioapp_usuariorol`
--

INSERT INTO `concesionarioapp_usuariorol` (`id`, `rolid_id`, `usuid_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 2, 6),
(7, 2, 7),
(8, 2, 8),
(9, 2, 9),
(10, 2, 10),
(11, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `concesionarioapp_vehiculo`
--

CREATE TABLE `concesionarioapp_vehiculo` (
  `vehplaca` varchar(10) NOT NULL,
  `vehmodelo` int(11) DEFAULT NULL,
  `vehcolor` varchar(50) DEFAULT NULL,
  `vehmarca` varchar(50) DEFAULT NULL,
  `vehestado` varchar(30) DEFAULT NULL,
  `vehprecio` int(11) DEFAULT NULL,
  `vehfoto` varchar(100) DEFAULT NULL,
  `catid_id` int(11) NOT NULL,
  `datid_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `concesionarioapp_vehiculo`
--

INSERT INTO `concesionarioapp_vehiculo` (`vehplaca`, `vehmodelo`, `vehcolor`, `vehmarca`, `vehestado`, `vehprecio`, `vehfoto`, `catid_id`, `datid_id`) VALUES
('rtfre', 2012, 'rojo', 'thethr', 'Usado', 456564, 'Foto', 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `concesionarioapp_categoria`
--
ALTER TABLE `concesionarioapp_categoria`
  ADD PRIMARY KEY (`catid`);

--
-- Indices de la tabla `concesionarioapp_datospersonales`
--
ALTER TABLE `concesionarioapp_datospersonales`
  ADD PRIMARY KEY (`datid`),
  ADD KEY `fk_concesionarioapp_datospersonales_concesionarioapp_usuari_idx` (`usuid_id`);

--
-- Indices de la tabla `concesionarioapp_rol`
--
ALTER TABLE `concesionarioapp_rol`
  ADD PRIMARY KEY (`rolid`);

--
-- Indices de la tabla `concesionarioapp_usuario`
--
ALTER TABLE `concesionarioapp_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `concesionarioapp_usuariorol`
--
ALTER TABLE `concesionarioapp_usuariorol`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_concesionarioapp_rol_has_concesionarioapp_usuario_conces_idx` (`usuid_id`),
  ADD KEY `fk_concesionarioapp_rol_has_concesionarioapp_usuario_conces_idx1` (`rolid_id`);

--
-- Indices de la tabla `concesionarioapp_vehiculo`
--
ALTER TABLE `concesionarioapp_vehiculo`
  ADD PRIMARY KEY (`vehplaca`),
  ADD KEY `fk_concesionarioapp_vehiculo_concesionarioapp_categoria1_idx` (`catid_id`),
  ADD KEY `fk_concesionarioapp_vehiculo_concesionarioapp_datospersonal_idx` (`datid_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `concesionarioapp_categoria`
--
ALTER TABLE `concesionarioapp_categoria`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `concesionarioapp_datospersonales`
--
ALTER TABLE `concesionarioapp_datospersonales`
  MODIFY `datid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `concesionarioapp_usuario`
--
ALTER TABLE `concesionarioapp_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `concesionarioapp_usuariorol`
--
ALTER TABLE `concesionarioapp_usuariorol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `concesionarioapp_datospersonales`
--
ALTER TABLE `concesionarioapp_datospersonales`
  ADD CONSTRAINT `fk_concesionarioapp_datospersonales_concesionarioapp_usuario1` FOREIGN KEY (`usuid_id`) REFERENCES `concesionarioapp_usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `concesionarioapp_usuariorol`
--
ALTER TABLE `concesionarioapp_usuariorol`
  ADD CONSTRAINT `fk_concesionarioapp_rol_has_concesionarioapp_usuario_concesio` FOREIGN KEY (`rolid_id`) REFERENCES `concesionarioapp_rol` (`rolid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_concesionarioapp_rol_has_concesionarioapp_usuario_concesio1` FOREIGN KEY (`usuid_id`) REFERENCES `concesionarioapp_usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `concesionarioapp_vehiculo`
--
ALTER TABLE `concesionarioapp_vehiculo`
  ADD CONSTRAINT `fk_concesionarioapp_vehiculo_concesionarioapp_categoria1` FOREIGN KEY (`catid_id`) REFERENCES `concesionarioapp_categoria` (`catid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_concesionarioapp_vehiculo_concesionarioapp_datospersonales1` FOREIGN KEY (`datid_id`) REFERENCES `concesionarioapp_datospersonales` (`datid`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-04-2020 a las 19:19:17
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `parmove`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `id_tipo` int(11) NOT NULL,
  `dimension` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`id_tipo`, `dimension`) VALUES
(1, 'Vehículo Pequeño'),
(2, 'Vehículo Mediano'),
(3, 'Vehículo Grande'),
(4, 'Furgoneta Pasajeros'),
(5, 'Furgoneta Carga');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `primer_apellido` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `segundo_apellido` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `direccion` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` int(9) NOT NULL,
  `carnet_conducir` int(9) NOT NULL,
  `fecha_caducidad` date NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `primer_apellido`, `segundo_apellido`, `fecha_nacimiento`, `direccion`, `telefono`, `carnet_conducir`, `fecha_caducidad`, `email`, `password`) VALUES
(1, 'Ana', 'Martin', 'Rodriguez', '1983-01-01', 'CALLE REINO UNIDO, 3, PORTAL 9,2ÂºA', 0, 3522522, '2025-06-01', 'ana@gmail.es', '$2y$10$cowEUQL9xrXL8BC2iOG7Y.p8puR9YJZjBhKDZ2InzmfwCt0MS3kiW'),
(2, 'Laura', 'Martin', 'Lopez', '1983-01-02', 'Calle Teruel, 17. ', 0, 1234567, '2025-06-02', 'laura@gmail.es', '$2y$10$gndMFdZ/mmOF4T2fqR7K4enT3Kb7CxK.j84vOsP58EvwDSHaSRrn6'),
(3, 'Pablo', 'Ruiz', 'Gomez', '1983-01-03', 'Avda. America, 21, 5B', 0, 77112112, '2025-06-03', 'pablo@gmail.es', '$2y$10$Nu7ovrOYvo5t9hVJOZ6hNOwZa1oaOS6T3rBCWhDNo5HikaAdBKYEq'),
(4, 'Isabel', 'Sanchez', 'Carvajal', '1983-01-04', 'Calle Castilla,42', 0, 3568956, '2025-06-04', 'isabel@gmail.es', '$2y$10$LAImLXDOhoJtEHM8888NCufpfQ4XXBBiMzTxsqlWIyNVTtxayaHs6'),
(5, 'Gonzalo', 'Rodriguez', 'Martinez', '1983-01-05', 'Calle La Isla,52', 0, 44221221, '2025-06-05', 'gonzalo@gmail.es', '$2y$10$HYiFUV.stak.o6cQxCsxuecN7M9ic3bmGUpy8p4.kMcmp1ZFwv9vy'),
(6, 'Enzo', 'Avila', 'Collado', '1983-01-06', 'Avda. Jerusalen, 2', 0, 2336225, '2025-06-06', 'enzo@gmail.es', '$2y$10$aCmvOMQXZVkxzXCg/SU1f.cuAnLxtyH2i9FJwVF.lDLItb5GJFvDu'),
(7, 'Aitana', 'Villaverde', 'Acosta', '1983-01-07', 'Calle Prado,14', 0, 4020202, '2025-06-07', 'aitana@gmail.es', '$2y$10$mCKwMF1U/jzF12IyUTGRu.EUeD2phHQyFFnsfs/ZSsKVY71r8t6Ju'),
(8, 'David', 'Lopez', 'Toledo', '1983-01-08', 'Calle Miranda de Ebro, 101', 0, 78456123, '2025-06-08', 'david@gmail.es', '$2y$10$cjOP4JT/Jvparw2p/pL/Tuqr2NCDQWUIP4F4NQhQyUGSaDBNH4Kv6'),
(9, 'Luis', 'Araujo', 'Rodriguez', '1983-01-09', 'Calle Cancion, 45', 0, 89562312, '2025-06-09', 'luis@gmail.es', '$2y$10$QX5hy7qvJiznPT2b8LCQ0uc6YBDUtiWr33cK.fBcvSKu/zXIQ7ypS'),
(10, 'Marta', 'Ruiz', 'De mesa', '1983-01-10', 'Calle Ceuta, 14', 0, 23456789, '2025-06-10', 'marta@gmail.es', '$2y$10$ODVJnGZK43X9E2zf/r3OGuYfVBT2zrgKOPIqSUEjxFEmPVR6ceetS'),
(11, 'Lucia', 'Valle', 'Bueno', '1983-01-11', 'Avda. La fuente, 115', 0, 2145256, '2025-06-11', 'lucia@gmail.es', '$2y$10$jlwfImdN7VR0tyaVHQN7G.koIgc7ytzaYFOo/z74ooalndPHLxd8e'),
(12, 'Sara', 'Santamaria', 'Segovia', '1983-01-12', 'Calle Florida, 23', 0, 45789632, '2025-06-12', 'sara@gmail.es', '$2y$10$htWph/.UB/uaKNd16Mgfc.ZV.f2JVqHlI4m2UpKw8i.jrXRzW4MtC'),
(13, 'Antonio', 'Gomez', 'Casanova', '1983-01-13', 'Calle Budapest, 52', 0, 32698587, '2025-06-13', 'antonio@gmail.es', '$2y$10$EuOSPGDEH6VvDVGrutdb1.eNAgVNS/RgX.TNe5IAuhucWKIjfxLPG'),
(14, 'Julia', 'Ruiz', 'Jarabo', '1983-01-14', 'Calle Tulipan, 3', 0, 31236125, '2025-06-14', 'julia@gmail.es', '$2y$10$m.YEerDc/2d9CsY5RqW4WenjXRD4AzdT2D4xIl4qhmYmfm56tDKwq'),
(15, 'Miguel', 'Hita', 'Esteban', '1983-01-15', 'Calle Panaderias, 12', 0, 2032210, '2025-06-15', 'miguel@gmail.es', '$2y$10$YviFxm2Z/OVvwNLEkmsv/ejemegiTpXtR5M1dHMO8Q.PtWgHdLH1.'),
(16, 'Daniel', 'Bajo', 'Sevilla', '1983-02-01', 'Calle Tintin y Milu, 21', 0, 31289347, '2026-02-01', 'daniel@gmail.es', '$2y$10$8NZaRJJflfiWw7FP7Qc76.nAdDbPQZeM.BK7MWdlG9scjcTKdfIRi'),
(17, 'Sandra', 'Meloso', 'Jaen', '1983-02-02', 'Calle Londres, 25', 0, 4555221, '2025-02-02', 'sandra@gmail.es', '$2y$10$1Wt4dg.zsEsBrnd2ATASVeKRBh7HBqQYF6kD6AvDSRtZAaThaFmnK'),
(18, 'Marcos', 'Maqueda', 'Suarez', '1983-02-03', 'Calle Berlin, 23', 0, 2145145, '2025-02-03', 'marcos@gmail.es', '$2y$10$eTLKflcGUvyQTCQMDU9tSu0YTlpF.pMEqqcdwy.XbfzgAMZAYRL5S'),
(19, 'Lorenzo', 'Sanchez', 'Garcia', '1983-02-04', 'Calle Estrella Polar, 11', 0, 45896563, '2025-02-04', 'lorenzo@gmail.es', '$2y$10$Hk15ogDMJE8Tghn2Ka0pI.JBKFYVUeOCvzDEAoRvTLe.27WNIqnQu'),
(20, 'Nicolas', 'Bilbao', 'Martinez', '1983-02-05', 'Avda. Democracia, 22', 0, 5238651, '2025-02-05', 'nicolas@gmail.es', '$2y$10$hNJQaagB5LSSbBCSmWrPE.yW4/OvU42CNOja4bF485yO9R7olO.hC'),
(21, 'Manuel', 'Quevedo', 'Lorenzo', '1983-02-06', 'Calle Paris, 28', 0, 53226, '2025-02-06', 'manuel@gmail.es', '$2y$10$0pHNUOlx5x01YE3TL/4V4O69PbJMUd.tN8EAykVnllLKZNo/pEmVa'),
(23, 'Teresa', 'Valle', 'Bernabeu', '1983-02-07', 'Calle Pez, 15', 0, 2852852, '2025-02-07', 'teresa@gmail.es', '$2y$10$ypzkkmUVZhKcyDTlxEusTe1SEyrahv0AqpobFhOY087X71bGlunhS'),
(24, 'Maria', 'Velez', 'Esteban', '1983-02-08', 'Calle Laguna azul,52', 0, 3462153, '2025-02-08', 'maria@gmail.es', '$2y$10$bSsMsXv1BizGiTkbRxYVSu5zXIwlFCU0uKaAuux8xcXXBU0M.Vuiu'),
(25, 'Julian', 'Prados', 'Jaca', '1983-02-09', 'Avda Pradana,25', 0, 1004455, '2025-02-09', 'julian@gmail.es', '$2y$10$M.K6U0W3Eus0.pfpEMuEmu2l3eAfa/qykU6n5t7Li7isVlg8gEYz.'),
(26, 'Joaquin', 'Marquez', 'Puig', '1983-02-10', 'Calle Irlanda,45', 0, 50412365, '2025-02-10', 'joaquin@gmail.es', '$2y$10$gCl4wABP6HFCES8/VXb.y.PDh9IZtlNtCtUdUCEV4vmG2F98ZfFcy'),
(27, 'Santiago', 'Perez', 'Rojo', '1983-02-11', 'Calle Molino Alto, 25', 0, 3278614, '2025-02-11', 'santiago@gmail.es', '$2y$10$Lh/RR8b4d8O0BhpxrdEVZODzjehcmZ2mJzQSB33cf27Ooihf/dEvS'),
(28, 'Tamara', 'Barranco', 'Herrero', '1983-02-12', 'Calle Almansa,36', 0, 236258, '2025-02-12', 'tamara@gmail.es', '$2y$10$OcVtwUSDSKdpGTV4mYroPOyzvmmvWISnt6.J7oXCSK9RMqlS2xVM2'),
(29, 'Agueda', 'Adan', 'Alcantara', '1983-02-13', 'Avda. Asturias, 28', 0, 23636221, '2025-02-13', 'agueda@gmail.es', '$2y$10$wZJ6gOM8MlNzFFYPduDD4eRGbXJWWRanN8IqauLRa9HqdK7re9tgu'),
(30, 'Miriam', 'Valdes', 'Hernandez', '1983-02-14', 'Calle Dinamarca,25', 0, 2014563, '2025-02-14', 'miriam@gmail.es', '$2y$10$QuntP.IAGL6zXBgJYaYx1O99fTqiw46MC8Sd49nLiqNnbLRQz4O1K'),
(31, 'Mario', 'Gil', 'Marin', '1983-02-15', 'Avda. Barcelona, 11', 0, 2000566, '2025-02-15', 'mario@gmail.es', '$2y$10$wNUGWKLQna0fKKdS2Cb8uuAWQw3KkhdecyvtuwAjFC6qXYXFzW8l6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `id_vehiculo` int(11) NOT NULL,
  `marca` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelo` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plazas` int(11) NOT NULL,
  `color` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `combustible` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seguro` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `disponibilidad` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_coche` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_zona` int(11) NOT NULL,
  `id_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`id_vehiculo`, `marca`, `modelo`, `plazas`, `color`, `combustible`, `seguro`, `precio`, `disponibilidad`, `foto_coche`, `id_usuario`, `id_zona`, `id_tipo`) VALUES
(2, 'Ford', 'Focus C-Max', 7, 'Gris oscuro', 'Diesel', 'Mutua Madrid', 40, 'Sabados y Domingos', 'coche_laura.jpg', 2, 5, 3),
(3, 'Renault', 'Scenic', 5, 'Gris', 'Diesel', 'Mutua Madrid', 38, 'Lunes, Miercoles y Viernes', 'coche_pablo.jpg', 3, 5, 2),
(6, 'Opel', 'Astra', 5, 'Plata', 'Gasolina', 'Caser', 35, 'martes y Jueves', 'coche_gonzalo.jpg', 5, 2, 2),
(7, 'Mini', 'Cooper', 4, 'Gris', 'Gasolina', 'Santalucia', 45, 'Lunes, Martes y Miercoles', 'coche_enzo.jpg', 6, 3, 1),
(8, 'Bmw', 'X3', 5, 'Crema', 'Diesel', 'Caser', 50, 'Miercoles', 'coche_aitana.jpg', 7, 4, 3),
(9, 'Peugeot', '308', 5, 'Gris', 'Diesel', 'Mapfre', 35, 'Sabados y Domingos', 'coche_david.jpg', 8, 4, 2),
(11, 'Citroen', 'C4', 5, 'Gris Oscuro', 'Gasolina', 'Caser', 30, 'Jueves', 'coche_isabel.jpg', 4, 3, 2),
(12, 'Fiat', '500', 4, 'Azul', 'Gasolina', 'Axa', 25, 'martes y Jueves', 'coche_ana.jpg', 1, 5, 1),
(13, 'Renault', 'Clio', 5, 'Gris', 'Gasolina', 'Santalucia', 25, 'Lunes, Miercoles y Viernes', 'coche_luis.jpg', 9, 1, 1),
(14, 'Citroen', 'C5', 5, 'Azul Oscuro', 'Diesel', 'Mutua Madrid', 45, 'Lunes, Miercoles y Viernes', 'coche_marta.jpg', 10, 2, 3),
(15, 'BMW', 'M3', 5, 'Plata', 'Gasolina', 'Caser', 50, 'Lunes y Martes', 'coche_lucia.jpg', 11, 5, 3),
(16, 'Fiat', '500', 4, 'Negro', 'Gasolina', 'Santalucia', 25, 'Sabado y Domingo', 'coche_sara.jpg', 12, 2, 1),
(17, 'Opel', 'Astra', 4, 'Gris', 'Gasolina', 'Axa', 30, 'Martes y Jueves', 'coche_antonio.jpg', 13, 1, 2),
(18, 'Renault', 'Twingo', 4, 'Celeste', 'Diesel', 'Mapfre', 30, 'Sabado y Domingo', 'coche_julia.jpg', 14, 1, 1),
(19, 'Opel', 'Vivaro', 9, 'Azul', 'Diesel', 'Mutua Madrid', 75, 'Sabado y Domingo', 'furgoneta_miguel.jpg', 15, 4, 4),
(20, 'VW', 'Golf', 5, 'Blanco', 'Diesel', 'Caser', 50, 'Sabado y Domingo', 'coche_daniel.jpg', 16, 5, 2),
(21, 'Peugeot', '208', 5, 'Blanco', 'Diesel', 'Santalucia', 35, 'Lunes, Miercoles y Viernes', 'coche_sandra.jpg', 17, 4, 1),
(22, 'Audi', 'Q5', 5, 'Blanco', 'Diesel', 'Mapfre', 75, 'Lunes, Martes y Miercoles', 'coche_marcos.jpg', 18, 1, 3),
(23, 'Skoda', 'Octavia', 5, 'Plata', 'Diesel', 'Mutua Madrid', 40, 'Sabado y Domingo', 'coche_lorenzo.jpg', 19, 2, 3),
(24, 'Ford', 'Transit', 3, 'Blanco', 'Diesel', 'Axa', 60, 'Sabado y Domingo', 'furgoneta_nicolas.jpg', 20, 1, 5),
(25, 'Peugeot', '407', 5, 'Rojo', 'Diesel', 'Santalucia', 40, ' Viernes, Sabado y Domingo', 'coche_manuel.jpg', 21, 3, 3),
(26, 'Renault', 'Clio', 5, 'Verde', 'Gasolina', 'Santalucia', 30, 'Lunes y Martes', 'coche_teresa.jpg', 23, 3, 1),
(27, 'Citroen', 'C3', 4, 'Morado', 'Diesel', 'Mutua Madrid', 25, 'Lunes, Martes, Miercoles y Jueves', 'coche_maria.jpg', 24, 4, 1),
(28, 'Mercedes-Benz', 'Clase B', 5, 'Rojo', 'Gasolina', 'Mapfre', 70, 'Lunes, Martes, Miercoles y Jueves', 'coche_julian.jpg', 25, 2, 2),
(29, 'Peugeot', '407', 5, 'Morado', 'Diesel', 'Axa', 45, 'Sabado y Domingo', 'coche_joaquin.jpg', 26, 4, 3),
(30, 'Chrysler', 'Grand Voyager', 7, 'Azul Oscuro', 'Gasolina', 'Caser', 75, 'Lunes, Martes, Miercoles y Jueves', 'coche_santiago.jpg', 27, 5, 4),
(31, 'VW', 'Golf', 5, 'Gris', 'Diesel', 'Caser', 45, 'Lunes, Martes, Miercoles y Jueves', 'coche_tamara.jpg', 28, 1, 2),
(32, 'Fiat', 'Punto', 5, 'Negro', 'Diesel', 'Santalucia', 30, 'Viernes, Sabado y Domingo', 'coche_agueda.jpg', 29, 5, 1),
(33, 'Citroen', 'C4', 5, 'Negro', 'Diesel', 'Mutua Madrid', 35, 'Viernes, Sabado y Domingo', 'coche_miriam.jpg', 30, 3, 2),
(34, 'Seat', 'Ibiza', 5, 'Azul', 'Diesel', 'Santalucia', 35, 'Lunes, Martes, Miercoles y Jueves', 'coche_mario.jpg', 31, 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zona`
--

CREATE TABLE `zona` (
  `id_zona` int(11) NOT NULL,
  `nombre_zona` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `zona`
--

INSERT INTO `zona` (`id_zona`, `nombre_zona`) VALUES
(1, 'Distrito Noroeste'),
(2, 'Distrito Noreste'),
(3, 'Distrito Suroeste'),
(4, 'Distrito Sureste'),
(5, 'Distrito Este');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`id_vehiculo`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_zona` (`id_zona`),
  ADD KEY `id_tipo` (`id_tipo`);

--
-- Indices de la tabla `zona`
--
ALTER TABLE `zona`
  ADD PRIMARY KEY (`id_zona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `id_vehiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `zona`
--
ALTER TABLE `zona`
  MODIFY `id_zona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD CONSTRAINT `vehiculo_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vehiculo_ibfk_2` FOREIGN KEY (`id_zona`) REFERENCES `zona` (`id_zona`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vehiculo_ibfk_3` FOREIGN KEY (`id_tipo`) REFERENCES `tipo` (`id_tipo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

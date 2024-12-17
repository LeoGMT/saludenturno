-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-06-2024 a las 16:38:43
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
-- Base de datos: `set`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora vacunación`
--

CREATE TABLE `bitacora vacunación` (
  `id_bitacora` int(11) NOT NULL,
  `id_paciente` int(11) DEFAULT NULL,
  `id_vacuna` int(11) DEFAULT NULL,
  `fecha_aplicacion` date DEFAULT NULL,
  `id_jornada` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `admin_rel` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat.insumos`
--

CREATE TABLE `cat.insumos` (
  `id_cat_insumos` int(11) NOT NULL,
  `nombre_del_insumo` char(20) DEFAULT NULL,
  `existente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario insumos`
--

CREATE TABLE `inventario insumos` (
  `id_bitacora` int(11) NOT NULL,
  `id_insumos` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `admin_rel` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornada`
--

CREATE TABLE `jornada` (
  `id_jornada` int(11) NOT NULL,
  `direccion` char(100) DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `cantidad_de_personal` int(11) DEFAULT NULL,
  `id_sede` int(11) DEFAULT NULL,
  `responsable` char(50) DEFAULT NULL,
  `admin_rel` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `jornada`
--

INSERT INTO `jornada` (`id_jornada`, `direccion`, `hora`, `fecha`, `cantidad_de_personal`, `id_sede`, `responsable`, `admin_rel`) VALUES
(1, 'Piramides #111 int 6', '00:00:00', '2024-06-21', 2, 2, 'Iliana', 666666),
(2, 'Piramides #111 int 6', '07:33:00', '2024-05-31', 4, 2, 'Iliana', 666666);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kardex alergias`
--

CREATE TABLE `kardex alergias` (
  `id_Kardex_Alergias` int(11) NOT NULL,
  `ID_Alergias` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kardex padecimientos`
--

CREATE TABLE `kardex padecimientos` (
  `id_Kardex_Padecimientos` int(11) NOT NULL,
  `ID_Padecimientos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel`
--

CREATE TABLE `nivel` (
  `id_nivel` int(11) NOT NULL,
  `nombre_del_nivel` char(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `nivel`
--

INSERT INTO `nivel` (`id_nivel`, `nombre_del_nivel`) VALUES
(1, 'Admin'),
(2, 'Standar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `id_paciente` int(11) NOT NULL,
  `CURP` char(18) DEFAULT NULL,
  `correo` char(50) DEFAULT NULL,
  `Fecha_de_nacimiento` date DEFAULT NULL,
  `genero` char(1) DEFAULT NULL,
  `nover` int(11) DEFAULT NULL,
  `novers` int(11) DEFAULT NULL,
  `Nombre` char(30) NOT NULL,
  `apep` char(30) DEFAULT NULL,
  `apem` char(30) DEFAULT NULL,
  `alergias` char(100) NOT NULL,
  `padecimientos` char(100) NOT NULL,
  `admin_rel` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`id_paciente`, `CURP`, `correo`, `Fecha_de_nacimiento`, `genero`, `nover`, `novers`, `Nombre`, `apep`, `apem`, `alergias`, `padecimientos`, `admin_rel`) VALUES
(1, 'SANFGUTSZAAI', 'ventas.zdsolutions@gmail.com', '2014-02-20', 'm', NULL, NULL, 'Santiago', 'Fernando', 'Gutierrez', 'Ninguna', 'Ninguno', '666666'),
(2, 'SANFGUTSZAAI', 'ventas.zdsolutions@gmail.co', '2014-02-20', 'm', NULL, NULL, 'Santiago', 'Fernando', 'Gutierrez', 'Ninguna', 'Ninguno', '666666'),
(3, '', '', '0000-00-00', '', NULL, NULL, '', '', '', '', '', ''),
(4, 'SANFGUTSZAAI', 'ventas.zdsolutions@gmail.co', '2014-02-20', 'm', NULL, NULL, 'Santiago', 'Fernando', 'Gutierrez', 'Ninguna', 'Ninguno', '666666'),
(5, 'PEZD070709HDFRTGA9', 'ventas.zdsolutions@gmail.co', '2024-07-09', 'm', NULL, NULL, 'Santiago', 'Fernando', 'Gutierrez', 'Penicilina', 'Ninguno', '666666');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `id_nivel` int(11) DEFAULT NULL,
  `nombre` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `id_nivel`, `nombre`) VALUES
(1, 1, 'Root'),
(2, 2, 'Aplicador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sede`
--

CREATE TABLE `sede` (
  `id_sede` int(11) NOT NULL,
  `direccion` char(100) DEFAULT NULL,
  `nombre_sede` char(50) DEFAULT NULL,
  `responsable` char(50) DEFAULT NULL,
  `telefono_sede` char(12) DEFAULT NULL,
  `admin_rel` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sede`
--

INSERT INTO `sede` (`id_sede`, `direccion`, `nombre_sede`, `responsable`, `telefono_sede`, `admin_rel`) VALUES
(1, 'Piramides #111 int 6 Claveria Azcapotzalco Mexico', 'Casa Zetina', '42', '5614209239', 666666),
(2, 'Piramides', 'Santa Marta Acatitla', '42', '666', 666666),
(3, 'Piramides #111 int 6 Claveria Azcapotzalco', 'SaludEnTurno', '42', '5516254367', 666666),
(4, 'Piramides #111 int 6 Claveria Azcapotzalco Mexico', 'SaludEnTurno', '42', '5614209239', 666666);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo de vacuna`
--

CREATE TABLE `tipo de vacuna` (
  `id_tipo_de_vacuna` int(11) NOT NULL,
  `nombre_tipo_de_vacuna` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo de vacuna`
--

INSERT INTO `tipo de vacuna` (`id_tipo_de_vacuna`, `nombre_tipo_de_vacuna`) VALUES
(1, 'Intra Muscular'),
(2, 'Nasal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` int(11) NOT NULL,
  `cedula` char(9) DEFAULT NULL,
  `nombre` char(40) DEFAULT NULL,
  `ape_pate` char(30) DEFAULT NULL,
  `ape_mate` char(30) DEFAULT NULL,
  `correo` char(40) DEFAULT NULL,
  `celular` char(10) DEFAULT NULL,
  `id_sede` int(11) DEFAULT NULL,
  `id_rol` int(1) DEFAULT NULL,
  `password` varchar(16) NOT NULL,
  `admin_rel` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `cedula`, `nombre`, `ape_pate`, `ape_mate`, `correo`, `celular`, `id_sede`, `id_rol`, `password`, `admin_rel`) VALUES
(12, '666666', 'Diego Adan', 'Perez', 'Zetina', 'diegoadanperez@gmail.com', '5614209239', NULL, 1, '0714', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacunas`
--

CREATE TABLE `vacunas` (
  `id_Vacunas` int(11) NOT NULL,
  `nombre_coloquial` char(50) DEFAULT NULL,
  `id_tipo_de_vacuna` int(11) DEFAULT NULL,
  `lote` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `dosis` int(11) DEFAULT NULL,
  `num_salubridad` int(11) DEFAULT NULL,
  `marca_de_la_vacuna` char(20) DEFAULT NULL,
  `num_cofepris` int(11) DEFAULT NULL,
  `componentes_de_vacuna` char(60) DEFAULT NULL,
  `admin_rel` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vacunas`
--

INSERT INTO `vacunas` (`id_Vacunas`, `nombre_coloquial`, `id_tipo_de_vacuna`, `lote`, `cantidad`, `dosis`, `num_salubridad`, `marca_de_la_vacuna`, `num_cofepris`, `componentes_de_vacuna`, `admin_rel`) VALUES
(1, 'Influenza', 1, 123, 34, 1, 123, 'Pfizer', 123, 'Metil', 666666),
(2, '1ddss', 2, 12222, 3, 2, 12334, 'sdecc', 22222, 'dcfc', 666666);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bitacora vacunación`
--
ALTER TABLE `bitacora vacunación`
  ADD PRIMARY KEY (`id_bitacora`),
  ADD KEY `id. usuario_idx` (`id_usuario`),
  ADD KEY `id. paciente_idx` (`id_paciente`),
  ADD KEY `id. vacuna_idx` (`id_vacuna`),
  ADD KEY `id. jornada_idx` (`id_jornada`);

--
-- Indices de la tabla `cat.insumos`
--
ALTER TABLE `cat.insumos`
  ADD PRIMARY KEY (`id_cat_insumos`);

--
-- Indices de la tabla `inventario insumos`
--
ALTER TABLE `inventario insumos`
  ADD PRIMARY KEY (`id_bitacora`),
  ADD KEY `id. insumos_idx` (`id_insumos`);

--
-- Indices de la tabla `jornada`
--
ALTER TABLE `jornada`
  ADD PRIMARY KEY (`id_jornada`),
  ADD KEY `id.sede_idx` (`id_sede`);

--
-- Indices de la tabla `kardex alergias`
--
ALTER TABLE `kardex alergias`
  ADD PRIMARY KEY (`id_Kardex_Alergias`),
  ADD KEY `id.Alergias_idx` (`ID_Alergias`);

--
-- Indices de la tabla `kardex padecimientos`
--
ALTER TABLE `kardex padecimientos`
  ADD PRIMARY KEY (`id_Kardex_Padecimientos`),
  ADD KEY `ID.Padecimientos_idx` (`ID_Padecimientos`);

--
-- Indices de la tabla `nivel`
--
ALTER TABLE `nivel`
  ADD PRIMARY KEY (`id_nivel`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id_paciente`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`),
  ADD KEY `ide nivel_idx` (`id_nivel`);

--
-- Indices de la tabla `sede`
--
ALTER TABLE `sede`
  ADD PRIMARY KEY (`id_sede`);

--
-- Indices de la tabla `tipo de vacuna`
--
ALTER TABLE `tipo de vacuna`
  ADD PRIMARY KEY (`id_tipo_de_vacuna`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`),
  ADD UNIQUE KEY `cedula` (`cedula`),
  ADD KEY `ide sede_idx` (`id_sede`),
  ADD KEY `id rol_idx` (`id_rol`);

--
-- Indices de la tabla `vacunas`
--
ALTER TABLE `vacunas`
  ADD PRIMARY KEY (`id_Vacunas`),
  ADD KEY `id.tipos de a_idx` (`id_tipo_de_vacuna`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `jornada`
--
ALTER TABLE `jornada`
  MODIFY `id_jornada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `nivel`
--
ALTER TABLE `nivel`
  MODIFY `id_nivel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sede`
--
ALTER TABLE `sede`
  MODIFY `id_sede` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipo de vacuna`
--
ALTER TABLE `tipo de vacuna`
  MODIFY `id_tipo_de_vacuna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `vacunas`
--
ALTER TABLE `vacunas`
  MODIFY `id_Vacunas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bitacora vacunación`
--
ALTER TABLE `bitacora vacunación`
  ADD CONSTRAINT `id. jornada` FOREIGN KEY (`id_jornada`) REFERENCES `jornada` (`id_jornada`),
  ADD CONSTRAINT `id. paciente` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`),
  ADD CONSTRAINT `id. usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuarios`),
  ADD CONSTRAINT `id. vacuna` FOREIGN KEY (`id_vacuna`) REFERENCES `vacunas` (`id_Vacunas`);

--
-- Filtros para la tabla `inventario insumos`
--
ALTER TABLE `inventario insumos`
  ADD CONSTRAINT `id. bitacora` FOREIGN KEY (`id_bitacora`) REFERENCES `bitacora vacunación` (`id_bitacora`),
  ADD CONSTRAINT `id. insumos` FOREIGN KEY (`id_insumos`) REFERENCES `cat.insumos` (`id_cat_insumos`);

--
-- Filtros para la tabla `jornada`
--
ALTER TABLE `jornada`
  ADD CONSTRAINT `id.sede` FOREIGN KEY (`id_sede`) REFERENCES `sede` (`id_sede`);

--
-- Filtros para la tabla `kardex alergias`
--
ALTER TABLE `kardex alergias`
  ADD CONSTRAINT `id.Alergias` FOREIGN KEY (`ID_Alergias`) REFERENCES `alergias` (`id_Alergias`);

--
-- Filtros para la tabla `kardex padecimientos`
--
ALTER TABLE `kardex padecimientos`
  ADD CONSTRAINT `ID.Padecimientos` FOREIGN KEY (`ID_Padecimientos`) REFERENCES `pacdecimientos` (`id_Padecimientos`);

--
-- Filtros para la tabla `rol`
--
ALTER TABLE `rol`
  ADD CONSTRAINT `ide nivel` FOREIGN KEY (`id_nivel`) REFERENCES `nivel` (`id_nivel`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `id rol` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`),
  ADD CONSTRAINT `id sede` FOREIGN KEY (`id_sede`) REFERENCES `sede` (`id_sede`);

--
-- Filtros para la tabla `vacunas`
--
ALTER TABLE `vacunas`
  ADD CONSTRAINT `id.tipos de a` FOREIGN KEY (`id_tipo_de_vacuna`) REFERENCES `tipo de vacuna` (`id_tipo_de_vacuna`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

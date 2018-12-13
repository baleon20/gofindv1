-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-10-2018 a las 15:12:09
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbgofind`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprendiz`
--

CREATE TABLE `aprendiz` (
  `id` int(10) UNSIGNED NOT NULL,
  `n_ficha` int(11) NOT NULL,
  `estrato` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idusuario` int(10) UNSIGNED NOT NULL,
  `idprograma` int(10) UNSIGNED NOT NULL,
  `idcentro` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centro`
--

CREATE TABLE `centro` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idciudad` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iddepartamento` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idpais` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `especialidad` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idempresa` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo_electronico` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idpais` int(10) UNSIGNED NOT NULL,
  `iddepartamento` int(10) UNSIGNED NOT NULL,
  `idciudad` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha`
--

CREATE TABLE `ficha` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_finalizacion` date NOT NULL,
  `idvacante` int(10) UNSIGNED NOT NULL,
  `idprograma` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructor`
--

CREATE TABLE `instructor` (
  `id` int(10) UNSIGNED NOT NULL,
  `especialidad` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idcentro` int(10) UNSIGNED NOT NULL,
  `idusuario` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_10_01_140121_create_pais_table', 1),
(2, '2018_10_01_140434_create_departamento_table', 1),
(3, '2018_10_01_140733_create_ciudad_table', 1),
(4, '2018_10_01_151421_create_usuario_table', 1),
(5, '2018_10_01_152143_create_centro_table', 1),
(6, '2018_10_01_152707_create_programa_table', 1),
(7, '2018_10_01_153151_create_aprendiz_table', 1),
(8, '2018_10_01_153517_create_instructor_table', 1),
(9, '2018_10_01_154430_create_empresa_table', 1),
(10, '2018_10_01_154831_create_vacante_table', 1),
(11, '2018_10_01_155503_create_ficha_table', 1),
(12, '2018_10_01_155524_create_empleado_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE `programa` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idcentro` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombres` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `genero` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo_electronico` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacante`
--

CREATE TABLE `vacante` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idprograma` int(10) UNSIGNED NOT NULL,
  `idempresa` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aprendiz`
--
ALTER TABLE `aprendiz`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aprendiz_idusuario_foreign` (`idusuario`),
  ADD KEY `aprendiz_idprograma_foreign` (`idprograma`),
  ADD KEY `aprendiz_idcentro_foreign` (`idcentro`);

--
-- Indices de la tabla `centro`
--
ALTER TABLE `centro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `centro_idciudad_foreign` (`idciudad`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ciudad_iddepartamento_foreign` (`iddepartamento`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departamento_idpais_foreign` (`idpais`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empleado_idempresa_foreign` (`idempresa`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `empresa_correo_electronico_unique` (`correo_electronico`),
  ADD KEY `empresa_idpais_foreign` (`idpais`),
  ADD KEY `empresa_iddepartamento_foreign` (`iddepartamento`),
  ADD KEY `empresa_idciudad_foreign` (`idciudad`);

--
-- Indices de la tabla `ficha`
--
ALTER TABLE `ficha`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ficha_idvacante_foreign` (`idvacante`),
  ADD KEY `ficha_idprograma_foreign` (`idprograma`);

--
-- Indices de la tabla `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `instructor_idcentro_foreign` (`idcentro`),
  ADD KEY `instructor_idusuario_foreign` (`idusuario`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `programa`
--
ALTER TABLE `programa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `programa_idcentro_foreign` (`idcentro`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario_correo_electronico_unique` (`correo_electronico`);

--
-- Indices de la tabla `vacante`
--
ALTER TABLE `vacante`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vacante_idprograma_foreign` (`idprograma`),
  ADD KEY `vacante_idempresa_foreign` (`idempresa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aprendiz`
--
ALTER TABLE `aprendiz`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `centro`
--
ALTER TABLE `centro`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ficha`
--
ALTER TABLE `ficha`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `instructor`
--
ALTER TABLE `instructor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `programa`
--
ALTER TABLE `programa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `vacante`
--
ALTER TABLE `vacante`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `aprendiz`
--
ALTER TABLE `aprendiz`
  ADD CONSTRAINT `aprendiz_idcentro_foreign` FOREIGN KEY (`idcentro`) REFERENCES `centro` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `aprendiz_idprograma_foreign` FOREIGN KEY (`idprograma`) REFERENCES `programa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `aprendiz_idusuario_foreign` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `centro`
--
ALTER TABLE `centro`
  ADD CONSTRAINT `centro_idciudad_foreign` FOREIGN KEY (`idciudad`) REFERENCES `ciudad` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `ciudad_iddepartamento_foreign` FOREIGN KEY (`iddepartamento`) REFERENCES `departamento` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD CONSTRAINT `departamento_idpais_foreign` FOREIGN KEY (`idpais`) REFERENCES `pais` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_idempresa_foreign` FOREIGN KEY (`idempresa`) REFERENCES `empresa` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `empresa_idciudad_foreign` FOREIGN KEY (`idciudad`) REFERENCES `ciudad` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `empresa_iddepartamento_foreign` FOREIGN KEY (`iddepartamento`) REFERENCES `departamento` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `empresa_idpais_foreign` FOREIGN KEY (`idpais`) REFERENCES `pais` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `ficha`
--
ALTER TABLE `ficha`
  ADD CONSTRAINT `ficha_idprograma_foreign` FOREIGN KEY (`idprograma`) REFERENCES `programa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ficha_idvacante_foreign` FOREIGN KEY (`idvacante`) REFERENCES `vacante` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `instructor`
--
ALTER TABLE `instructor`
  ADD CONSTRAINT `instructor_idcentro_foreign` FOREIGN KEY (`idcentro`) REFERENCES `centro` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `instructor_idusuario_foreign` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `programa`
--
ALTER TABLE `programa`
  ADD CONSTRAINT `programa_idcentro_foreign` FOREIGN KEY (`idcentro`) REFERENCES `centro` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `vacante`
--
ALTER TABLE `vacante`
  ADD CONSTRAINT `vacante_idempresa_foreign` FOREIGN KEY (`idempresa`) REFERENCES `empresa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vacante_idprograma_foreign` FOREIGN KEY (`idprograma`) REFERENCES `programa` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

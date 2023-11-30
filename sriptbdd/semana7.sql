-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2023 a las 01:48:33
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `semana7`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_contenido`
--

CREATE TABLE `tbl_contenido` (
  `con_id` int(11) NOT NULL,
  `tem_id` int(11) NOT NULL,
  `con_contenido` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_contenido`
--

INSERT INTO `tbl_contenido` (`con_id`, `tem_id`, `con_contenido`) VALUES
(1, 1, 'CHAT GPT la empresa a cargo de esta orgnanizacion es OpenIA'),
(2, 2, 'La importancia de machine learing es la generacion de soluciones en el mundo empresarial es de gran importancia ya que es la base de la generacion de detecciones con vision artificial');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_portada`
--

CREATE TABLE `tbl_portada` (
  `por_id` int(11) NOT NULL,
  `por_titulo` varchar(255) NOT NULL,
  `por_contenido` varchar(255) NOT NULL,
  `por_estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_portada`
--

INSERT INTO `tbl_portada` (`por_id`, `por_titulo`, `por_contenido`, `por_estado`) VALUES
(1, 'PUCE-TEC', 'ASSAD', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tema`
--

CREATE TABLE `tbl_tema` (
  `tem_id` int(11) NOT NULL,
  `tem_tema` varchar(255) NOT NULL,
  `tem_estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_tema`
--

INSERT INTO `tbl_tema` (`tem_id`, `tem_tema`, `tem_estado`) VALUES
(1, 'inteligencia artificial', 1),
(2, 'machine learning', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_contenido`
--
ALTER TABLE `tbl_contenido`
  ADD PRIMARY KEY (`con_id`);

--
-- Indices de la tabla `tbl_portada`
--
ALTER TABLE `tbl_portada`
  ADD PRIMARY KEY (`por_id`);

--
-- Indices de la tabla `tbl_tema`
--
ALTER TABLE `tbl_tema`
  ADD PRIMARY KEY (`tem_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_contenido`
--
ALTER TABLE `tbl_contenido`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_portada`
--
ALTER TABLE `tbl_portada`
  MODIFY `por_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_tema`
--
ALTER TABLE `tbl_tema`
  MODIFY `tem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

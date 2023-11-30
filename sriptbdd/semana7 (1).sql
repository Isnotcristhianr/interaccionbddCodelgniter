-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2023 a las 22:26:44
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
-- Estructura de tabla para la tabla `tbl_libros`
--

CREATE TABLE `tbl_libros` (
  `lib_id` int(11) NOT NULL,
  `tem_id` int(11) NOT NULL,
  `lib_titulo` varchar(20) NOT NULL,
  `lib_codigo` varchar(50) NOT NULL,
  `lib_precio` float NOT NULL,
  `lib_resumen` varchar(255) NOT NULL,
  `lib_estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_libros`
--

INSERT INTO `tbl_libros` (`lib_id`, `tem_id`, `lib_titulo`, `lib_codigo`, `lib_precio`, `lib_resumen`, `lib_estado`) VALUES
(1, 1, 'Pulp Fiction', '001', 45, 'Lorem ipsum es el texto que se usa habitualmente en diseño gráfico en demostraciones de tipografías o de borradores de diseño para probar el diseño visual antes de insertar el texto final. ', 1),
(2, 1, 'Kokoro', '002', 20, 'Aunque no posee actualmente fuentes para justificar sus hipótesis, el profesor de filología clásica Richard McClintock asegura que su uso se remonta a los impresores de comienzos del siglo XVI. Su uso en algunos editores de texto muy conocidos en la actua', 1),
(3, 3, 'TOTORO', '003', 0.25, 'Porttitor massa id neque aliquam vestibulum morbi blandit cursus. Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis. Ac tortor vitae purus faucibus ornare suspendisse sed. Massa ultricies mi quis hendrerit. Sed viverra tellus in hac habi', 1),
(4, 4, 'Kid Cuddi', '004', 12, 'Fusce ut placerat orci nulla pellentesque dignissim enim. Fusce id velit ut tortor. Amet aliquam id diam maecenas ultricies. Amet nisl suscipit adipiscing bibendum est ultricies integer quis auctor. Urna et pharetra pharetra massa massa ultricies mi quis.', 1);

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
(2, 'machine learning', 1),
(3, 'ficcion', 1),
(4, 'drama', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_contenido`
--
ALTER TABLE `tbl_contenido`
  ADD PRIMARY KEY (`con_id`);

--
-- Indices de la tabla `tbl_libros`
--
ALTER TABLE `tbl_libros`
  ADD PRIMARY KEY (`lib_id`);

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
-- AUTO_INCREMENT de la tabla `tbl_libros`
--
ALTER TABLE `tbl_libros`
  MODIFY `lib_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbl_portada`
--
ALTER TABLE `tbl_portada`
  MODIFY `por_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_tema`
--
ALTER TABLE `tbl_tema`
  MODIFY `tem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

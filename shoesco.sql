-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-06-2017 a las 19:23:44
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `shoesco`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `i_codigo` int(11) NOT NULL,
  `c_nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`i_codigo`, `c_nombre`) VALUES
(1, 'Bota'),
(2, 'Botin'),
(3, 'Zapato');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coleccion`
--

CREATE TABLE `coleccion` (
  `i_codigo` int(11) NOT NULL,
  `c_nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `f_creacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `coleccion`
--

INSERT INTO `coleccion` (`i_codigo`, `c_nombre`, `f_creacion`) VALUES
(1, 'Primavera', NULL),
(2, 'Verano', NULL),
(3, 'Otoño', NULL),
(4, 'Invierno', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `i_codigo` int(11) NOT NULL,
  `c_nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `c_descripcion` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `f_creacion` date DEFAULT NULL,
  `a_descontinuado` tinyint(1) NOT NULL,
  `i_coleccion` int(11) NOT NULL,
  `i_tipo` int(11) NOT NULL,
  `c_ruta_imagen` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `c_desc_imagen` varchar(250) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`i_codigo`, `c_nombre`, `c_descripcion`, `f_creacion`, `a_descontinuado`, `i_coleccion`, `i_tipo`, `c_ruta_imagen`, `c_desc_imagen`) VALUES
(1, 'Botin bajo rojo', 'Botiin que sirve para lucir', '2017-02-08', 0, 1, 1, 'imagenesProductos/20.jpg', 'Botin de color rojo con fondo blanco'),
(2, 'Botin azul', 'botin para lucir con saco azul', '2017-02-09', 0, 1, 1, 'imagenesProductos/22.jpg', 'Foto de botin azul con fondo blanco');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`i_codigo`);

--
-- Indices de la tabla `coleccion`
--
ALTER TABLE `coleccion`
  ADD PRIMARY KEY (`i_codigo`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`i_codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `i_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `coleccion`
--
ALTER TABLE `coleccion`
  MODIFY `i_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `i_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

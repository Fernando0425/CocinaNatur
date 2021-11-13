-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2021 a las 22:31:05
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cocina_nature`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios_receta`
--

CREATE TABLE `comentarios_receta` (
  `id_receta` int(11) NOT NULL,
  `comentarios_comentario` text NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios_receta`
--

INSERT INTO `comentarios_receta` (`id_receta`, `comentarios_comentario`, `id_usuario`) VALUES
(2, 'Hola, Excelente receta ', 2),
(2, 'Hola', 2),
(2, 'Hola', 2),
(2, 'Hola, Excelente receta ', 2),
(2, 'Hola, Excelente receta ', 2),
(5, 'Hola, Excelente receta ', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `receta`
--

CREATE TABLE `receta` (
  `id_receta` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombre_receta` text NOT NULL,
  `tipo_receta` varchar(50) NOT NULL,
  `tiempo_receta` varchar(10) NOT NULL,
  `dificultad_receta` varchar(20) NOT NULL,
  `calificacion_receta` int(5) NOT NULL,
  `ingredientes_receta` varchar(1000) NOT NULL,
  `pasos_receta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `receta`
--

INSERT INTO `receta` (`id_receta`, `id_usuario`, `nombre_receta`, `tipo_receta`, `tiempo_receta`, `dificultad_receta`, `calificacion_receta`, `ingredientes_receta`, `pasos_receta`) VALUES
(1, 2, 'Fajitas de pollo 2.0', 'Casera', '1 hora', 'Facil', 4, 'Holaaaaa Aqui va dos', 'sdkfgskufasd jhsgfsdjfgsdjgfjsd'),
(2, 2, 'Tortitas de atun', 'Casera', '1:30 horas', 'Facil', 3, '1 atun\r\n2 huevos\r\npimienta\r\nsal', 'Primero se bate el huevo y se le agrega el atun después se agrega sal y pimienta y directo a la sarten.'),
(3, 2, 'Hamburguesa', 'Comida rapida', '2 horas', 'Facil', 4, 'Pan\r\nCarne\r\nLechuga\r\nTomate\r\nAguacate', 'Se hace la carne, se sazona, se cose en la sarten con un poco aceite al igual que el pan, y por ultimo se juntan todos los ingredientes en el pan.\r\nhasgvdfasgdas.\r\nfjagsdfj.'),
(5, 2, 'Chicharrón', '', '1 hora', 'Intermedio', 0, '1 faksfhasdf\r\n2 faijsfaf', '3 fajkhnsdlfjhjas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `correo_usuario` varchar(50) NOT NULL,
  `contrasena_usuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre_usuario`, `correo_usuario`, `contrasena_usuario`) VALUES
(2, 'Fernando', 'fer.hg25@gmail.com', '12345'),
(5, 'Leonor', 'leo.rp@gmail.com', '12345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `receta`
--
ALTER TABLE `receta`
  ADD PRIMARY KEY (`id_receta`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `receta`
--
ALTER TABLE `receta`
  MODIFY `id_receta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

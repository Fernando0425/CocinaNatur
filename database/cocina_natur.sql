-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2021 a las 11:21:42
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
-- Base de datos: `cocina_natur`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios_receta`
--

CREATE TABLE `comentarios_receta` (
  `id_receta` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `comentarios_comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios_receta`
--

INSERT INTO `comentarios_receta` (`id_receta`, `id_usuario`, `nombre_usuario`, `comentarios_comentario`) VALUES
(1, 2, 'Fernando Herrera', 'Hola, muy buena receta, me gustó mucho y tambien a mi familia, gracias, saludos'),
(1, 2, 'Fernando Herrera', 'Hola, Excelente receta '),
(1, 5, 'Leonor', 'Hola, muy buena receta, me gustó mucho y tambien a mi familia, gracias, saludos'),
(3, 5, 'Leonor', 'Hola, Excelente receta ');

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
(1, 2, 'Fajitas de pollo', 'Comida Mexicana', '1:30 horas', 'Facil', 4, '2 lbs de pechuga de pollo, sin piel y sin hueso.\r\n  2 cucharaditas de sazón para tacos.\r\n  2 cucharaditas de aceite de oliva.\r\n ½ pimiento verde, cortado en tiras.\r\n  ½ pimiento rojo, cortado en tiras.\r\n ½ pimiento amarillo, cortado en tiras.\r\n 1 cebolla mediana, cortada fina.\r\n 1 cucharadita de jugo de limón recién exprimido. \r\n Dos pizca de sal.', 'Esta es uno de los platos más fáciles que he preparado en mi vida y estos platos fáciles tienden siempre a ser mis favoritos.\r\nPoder preparar una comida en menos de 30 minutes y que sea deliciosa es uno de los requerimientos numero 1 para ponerlas al principio de mi lista y este plato está listo en solo 25 minutos de principio a fin.\r\nEsta receta de fajitas de pollo acaba de convertirse en la número uno en mi larga lista de recetas fantásticas de preparar para la cena a mediados de semana. Estoy segura de que te encantará a ti también. \r\nPara esta receta he usado una combinación de pimientos verdes, rojos y amarillos y cebolla roja. También puedes usar cebollas amarillas o cebollas españolas.'),
(2, 2, 'Tortitas de atun', 'Cenas', '1:30 horas', 'Facil', 3, '1 atun\r\n2 huevos\r\npimienta\r\nsal', 'Primero se bate el huevo y se le agrega el atun después se agrega sal y pimienta y directo a la sarten.'),
(3, 2, 'Hamburguesa', 'Niños', '2 horas', 'Facil', 4, 'Pan\r\nCarne\r\nLechuga\r\nTomate\r\nAguacate', 'Se hace la carne, se sazona, se cose en la sarten con un poco aceite al igual que el pan, y por ultimo se juntan todos los ingredientes en el pan. hasgvdfasgdas. fjagsdfj.amsdfasjrtf'),
(5, 2, 'Chicharrón', 'Comida Mexicana', '1 hora', 'Intermedio', 0, '1 faksfhasdf\r\n2 faijsfaf', '3 fajkhnsdlfjhjas'),
(6, 5, 'Pizza casera', 'Otros', '2 horas', 'Intermedio', 0, '3/4 tazas de agua, tibia (120 grados)\r\n1 cucharadita de levadura\r\n1 cucharada de sal\r\n3 cucharadas de aceite de oliva\r\n1 taza de harina, 1/4 taza adicional por si es necesario', 'En un recipiente hondo y grande, ponga la levadura y 2 cucharadas de agua caliente y mezcle bien. Deje que repose unos minutos. (Se deben de formar burbujas). Nota: si nada sucede despues de 10-15 minutos, vuelva a empezar. Una vez que las burbujas aparezcan, agregue el resto del agua tibia, la sal y 2 cuchardas de aceite de oliva. Revuelva bien.\r\nDivida el harina en 1/2 tazas. Debe de sobrar 1/4 de harina. Con una cuchara de madera, agregue 1/2 taza de harina al agua con levadura. Revuelva bien. Agregue otra 1/2 taza y vuelva a revolver. Al incorporar la última media taza de harina, la masa se debe de volver un poco dura y difícil de revolver. Si no es así, agregue otro 1/4 de taza de harina y revuelva.\r\nCuando la masa esté lo suficientemente dura para seguir revolviendo, póngala en una superficie limpia y amasela durante 7 minutos. Si la masa esta un poco pegajosa, se puede espolvorear con un poco de harina.\r\nPonga un poquito de aceite de oliva en un bowl. Ponga la masa sobre el aceite hasta que esté cubierta. Cubra con una toalla húmeda y deje que se infle hasta que doble su tamaño.\r\nUna vez que la masa haya doblado su tamaño, amasela otra vez y refrigere entre 6-8 horas para dejar que se infle otra vez.\r\nDespues de 6-8 hrs en el refrigerador, se puede utilizar la masa. Cortar la masa en el número de pizzas que se piensan preparar y formarla en pizzas. Dejar que llegue a temperatura ambiente antes de hornear.\r\nPonles los ingredientes que desees y hornealas 12-15 minutos a 500 F (260° C)');

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
(2, 'Fernando Herrera', 'fer.hg25@gmail.com', '12345'),
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
  MODIFY `id_receta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

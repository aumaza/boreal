-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 26-04-2020 a las 16:59:47
-- Versión del servidor: 5.5.65-MariaDB
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `boreal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avatar`
--

CREATE TABLE `avatar` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `user_name` varchar(60) DEFAULT NULL,
  `path_folder` varchar(60) DEFAULT NULL,
  `upload_on` datetime NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genre`
--

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `genre`
--

INSERT INTO `genre` (`id`, `descripcion`) VALUES
(1, 'Rock Suave'),
(2, 'Pop'),
(3, 'Rock'),
(4, 'Jazz'),
(5, 'Brit Pop'),
(6, 'Folclore'),
(7, 'Cumbia'),
(8, 'Rockabilly'),
(9, 'Hard Rock'),
(10, 'Heavy Metal'),
(11, 'Punk Rock');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `user_name` varchar(60) DEFAULT NULL,
  `path_folder` varchar(60) DEFAULT NULL,
  `upload_on` datetime NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instrumentos`
--

CREATE TABLE `instrumentos` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `instrumentos`
--

INSERT INTO `instrumentos` (`id`, `descripcion`) VALUES
(1, 'Guitarra'),
(2, 'Bajo'),
(3, 'BaterÃ­a'),
(4, 'Saxo'),
(5, 'ViolÃ­n'),
(6, 'Piano'),
(7, 'Keybards'),
(8, 'PercusiÃ³n'),
(9, 'Cello'),
(10, 'Citara'),
(11, 'Trompeta'),
(12, 'Oboe'),
(13, 'Guitarra EspaÃ±ola'),
(14, 'Requinto'),
(15, 'Ukelele'),
(16, 'Vocalista');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidades`
--

CREATE TABLE `localidades` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `localidades`
--

INSERT INTO `localidades` (`id`, `descripcion`) VALUES
(1, 'Ciudad AutÃ³noma de Buenos Aires'),
(2, 'Avellaneda'),
(3, 'Villa Dominico'),
(4, 'Sarandi'),
(5, 'Quilmes'),
(6, 'Wilde'),
(7, 'Bernal'),
(8, 'Berazategui'),
(9, 'La Plata'),
(10, 'Gerli'),
(11, 'Lanus'),
(12, 'Remedios de Escalada'),
(13, 'Banfield'),
(14, 'Lomas de Zamora'),
(15, 'Temperley'),
(16, 'Adrogue'),
(17, 'Burzaco'),
(18, 'Longchamps'),
(19, 'Glew'),
(20, 'Turdera'),
(21, 'Lavallol'),
(22, 'Luis Guillon'),
(23, 'Monte Grande'),
(24, 'Ezeiza'),
(25, 'Vicente Lopez'),
(26, 'Martinez'),
(27, 'San Isidro'),
(28, 'Beccar'),
(29, 'Tigre'),
(30, 'Victoria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `music`
--

CREATE TABLE `music` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `user_name` varchar(60) DEFAULT NULL,
  `path_folder` varchar(60) DEFAULT NULL,
  `upload_on` datetime NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `music`
--

INSERT INTO `music` (`id`, `file_name`, `user_name`, `path_folder`, `upload_on`, `status`) VALUES
(1, '03 - mentira piadosa.mp3', 'Augusto Maza', '../../uploads/music/', '2020-04-21 15:56:25', '1'),
(2, '14 - A Rodar La Vida.ogg', 'Augusto Maza', '../../uploads/music/', '2020-04-22 16:34:26', '1'),
(3, '01 - John Lennon - Imagine.flac', 'Augusto Maza', '../../uploads/music/', '2020-04-22 16:36:23', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`id`, `descripcion`) VALUES
(1, 'Buenos Aires'),
(2, 'La Pampa'),
(3, 'Tucuman'),
(4, 'Cordoba'),
(5, 'Chaco'),
(6, 'Formosa'),
(7, 'Santiago del Estero'),
(8, 'Santa Fe'),
(9, 'Misiones'),
(10, 'Entre Rios'),
(11, 'Corrientes'),
(12, 'Salta'),
(13, 'Jujuy'),
(14, 'San Juan'),
(15, 'San Luis'),
(16, 'Santa Cruz'),
(17, 'Chubut'),
(18, 'Neuquen'),
(19, 'Tierra del Fuego'),
(20, 'Rio Negro'),
(21, 'Mendoza'),
(22, 'Catamarca'),
(23, 'La Rioja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabs`
--

CREATE TABLE `tabs` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `user_name` varchar(60) DEFAULT NULL,
  `path_folder` varchar(60) DEFAULT NULL,
  `upload_on` datetime NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tabs`
--

INSERT INTO `tabs` (`id`, `file_name`, `user_name`, `path_folder`, `upload_on`, `status`) VALUES
(1, 'If I Fell.pdf', 'Augusto Maza', '../../uploads/tabs/', '2020-04-21 16:01:22', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `theory`
--

CREATE TABLE `theory` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `user_name` varchar(60) DEFAULT NULL,
  `path_folder` varchar(60) DEFAULT NULL,
  `upload_on` datetime NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `theory`
--

INSERT INTO `theory` (`id`, `file_name`, `user_name`, `path_folder`, `upload_on`, `status`) VALUES
(1, 'acordes_escalas.pdf', 'Augusto Maza', '../../uploads/theory/', '2020-04-21 17:52:16', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nombreApellido` varchar(35) NOT NULL,
  `sexo` varchar(9) NOT NULL,
  `instrumento` varchar(40) NOT NULL,
  `genre` varchar(40) NOT NULL,
  `provincia` varchar(40) NOT NULL,
  `localidad` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `avatar` varchar(80) DEFAULT NULL,
  `observaciones` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombreApellido`, `sexo`, `instrumento`, `genre`, `provincia`, `localidad`, `email`, `avatar`, `observaciones`) VALUES
(1, 'Florentina Maza', 'Femenino', 'Piano', 'Pop', 'Buenos Aires', 'Lomas de Zamora', 'floren@gmail.com', 'uploads/avatar/female-user-img.png', 'ninguna'),
(2, 'Augusto Maza', 'Masculino', 'Guitarra', 'Rock', 'Buenos Aires', 'Banfield', 'debianmaza@gmail.com', 'uploads/avatar/user-blue-img.png', 'Piano Bateria Bajo'),
(8, 'Ignacio Maza', 'Masculino', 'Guitarra', 'Pop', 'Buenos Aires', 'Adrogue', 'nacho@gmail.com', '../../img/leaf-img.png', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `user` varchar(15) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `permisos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `user`, `password`, `permisos`) VALUES
(1, 'Administrador', 'root', 'linux1303', 1),
(2, 'Augusto Maza', 'aumaza', 'slack142', 1),
(3, 'Florentina Maza', 'fmaza', 'fmaza1234', 1),
(4, 'Ignacio Maza', 'igmaza', 'igmaza1234', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `user_name` varchar(60) DEFAULT NULL,
  `path_folder` varchar(60) DEFAULT NULL,
  `upload_on` datetime NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `video`
--

INSERT INTO `video` (`id`, `file_name`, `user_name`, `path_folder`, `upload_on`, `status`) VALUES
(1, 'VID-20180329-WA0001.mp4', 'Augusto Maza', '../../uploads/video/', '2020-04-23 00:38:43', '1'),
(2, 'Tutorial Sqlite Con Qt Creator- Parte 1.mp4', 'Augusto Maza', '../../uploads/video/', '2020-04-23 14:50:58', '1'),
(3, 'tokyo.m4v', 'Augusto Maza', '../../uploads/video/', '2020-04-23 15:22:12', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `avatar`
--
ALTER TABLE `avatar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `instrumentos`
--
ALTER TABLE `instrumentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `localidades`
--
ALTER TABLE `localidades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tabs`
--
ALTER TABLE `tabs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `theory`
--
ALTER TABLE `theory`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `avatar`
--
ALTER TABLE `avatar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `instrumentos`
--
ALTER TABLE `instrumentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `localidades`
--
ALTER TABLE `localidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `music`
--
ALTER TABLE `music`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `tabs`
--
ALTER TABLE `tabs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `theory`
--
ALTER TABLE `theory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

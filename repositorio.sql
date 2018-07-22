-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-07-2018 a las 07:05:07
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `repositorio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodologias`
--

CREATE TABLE `metodologias` (
  `ID_METODOLOGIA` int(11) NOT NULL,
  `NOMBRE_METODOLOGIA` text,
  `IMG_PREV_METO` text,
  `SIGLAS_METO` text,
  `PDF_METO` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niveles`
--

CREATE TABLE `niveles` (
  `ID_NIVELES` int(11) NOT NULL,
  `NOMBRE_NIV` text,
  `IMG_PREV_NIV` text,
  `PDF_NIV` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temas`
--

CREATE TABLE `temas` (
  `ID_TEMA` int(11) NOT NULL,
  `NOMBRE_TEMA` text,
  `SIGLAS` text,
  `IMG_PREV_TEMA` text,
  `PDF_TEMA` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `temas`
--

INSERT INTO `temas` (`ID_TEMA`, `NOMBRE_TEMA`, `SIGLAS`, `IMG_PREV_TEMA`, `PDF_TEMA`) VALUES
(1, 'Fundamentos de Programación', 'Programación', 'img/Materias/fundamento.jpg', NULL),
(2, 'Cálculo Diferencial', 'Cálculo Diferencial', 'img/Materias/diferencial.PNG', NULL),
(3, 'Álgebra Lineal', 'Álgebra Lineal', 'img/Materias/algebra.jpg', NULL),
(4, 'Programación Orientada a Objetos', 'POO', 'img/Materias/poo.jpg', NULL),
(5, 'Estructura de Datos', 'ED', 'img/Materias/es.jpg', NULL),
(6, 'Programación Aplicada a la Web', 'Web', 'img/Materias/web1.jpg', NULL),
(7, 'Electrónica', 'Electrónica', 'img/Materias/electronica.jpg', NULL),
(8, 'Análisis y Diseño de Base de Datos', 'ADBD', 'img/Materias/analisis.jpg', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `ID_TIPO` int(11) NOT NULL,
  `TIPO_USER` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`ID_TIPO`, `TIPO_USER`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_USER` int(11) NOT NULL,
  `ID_TIPO` int(11) DEFAULT NULL,
  `USERNAME` text,
  `CORREO` text,
  `CONTRASENA` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_USER`, `ID_TIPO`, `USERNAME`, `CORREO`, `CONTRASENA`) VALUES
(1, 1, 'admin', NULL, '21232f297a57a5a743894a0e4a801fc3'),
(2, 2, 'JUNIORCEDE', 'juniorcede2@gmail.com', '588584c2d49c22e2108b89489eea7b9f');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `metodologias`
--
ALTER TABLE `metodologias`
  ADD PRIMARY KEY (`ID_METODOLOGIA`);

--
-- Indices de la tabla `niveles`
--
ALTER TABLE `niveles`
  ADD PRIMARY KEY (`ID_NIVELES`);

--
-- Indices de la tabla `temas`
--
ALTER TABLE `temas`
  ADD PRIMARY KEY (`ID_TEMA`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`ID_TIPO`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_USER`),
  ADD KEY `FK_RELATIONSHIP_3` (`ID_TIPO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `metodologias`
--
ALTER TABLE `metodologias`
  MODIFY `ID_METODOLOGIA` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `niveles`
--
ALTER TABLE `niveles`
  MODIFY `ID_NIVELES` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `temas`
--
ALTER TABLE `temas`
  MODIFY `ID_TEMA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `ID_TIPO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`ID_TIPO`) REFERENCES `tipo_usuario` (`ID_TIPO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

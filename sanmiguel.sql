-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-05-2020 a las 06:25:17
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sanmiguel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `2viernes`
--

CREATE TABLE `2viernes` (
  `id2Viernes` int(11) NOT NULL,
  `Habitantes_idPersona` int(11) NOT NULL,
  `Cooperacion` double NOT NULL,
  `Cabildo_idCabildo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `2viernes`
--

INSERT INTO `2viernes` (`id2Viernes`, `Habitantes_idPersona`, `Cooperacion`, `Cabildo_idCabildo`) VALUES
(1, 11, 9500, 1),
(2, 12, 9500, 1),
(3, 13, 9500, 1),
(4, 14, 9500, 1),
(5, 15, 9500, 1),
(6, 16, 9500, 1),
(7, 17, 9500, 1),
(8, 18, 9500, 1),
(9, 19, 9500, 1),
(10, 20, 9500, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `idtable1` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellidos` varchar(45) NOT NULL,
  `Usuario` varchar(45) NOT NULL,
  `Psw` varchar(45) NOT NULL,
  `Activo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`idtable1`, `Nombre`, `Apellidos`, `Usuario`, `Psw`, `Activo`) VALUES
(1, 'Jovanny', 'Leobardo Salas', 'j', 'j', '1'),
(2, 'Ian Alejandro', 'Leobardo Hernández', 'i', 'i', '1'),
(3, 'Elizeth Guadalupe', 'Hernández García', 'e', 'e', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cabildo`
--

CREATE TABLE `cabildo` (
  `idCabildo` int(11) NOT NULL,
  `Agente` varchar(45) NOT NULL,
  `Suplente` varchar(45) NOT NULL,
  `Secretario` varchar(45) NOT NULL,
  `Vocal 1` varchar(45) NOT NULL,
  `Vocal 2` varchar(45) NOT NULL,
  `Vocal 3` varchar(45) NOT NULL,
  `Vocal 4` varchar(45) NOT NULL,
  `FechaIngreso` date NOT NULL,
  `Activo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cabildo`
--

INSERT INTO `cabildo` (`idCabildo`, `Agente`, `Suplente`, `Secretario`, `Vocal 1`, `Vocal 2`, `Vocal 3`, `Vocal 4`, `FechaIngreso`, `Activo`) VALUES
(1, 'Rufino Santos Vasquez', 'Pedro Santos García', 'Jorge Hernández Perez', 'Armando Maldonado Hernández', 'Eustacio Merino De Jesús', 'Timón García Hernandez', 'Salvador López Hernández', '2020-01-01', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunidad`
--

CREATE TABLE `comunidad` (
  `idComunidad` int(11) NOT NULL,
  `Comunidad` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comunidad`
--

INSERT INTO `comunidad` (`idComunidad`, `Comunidad`) VALUES
(1, 'San Miguel Copala'),
(2, 'Constancia del Rosario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fechaingreso`
--

CREATE TABLE `fechaingreso` (
  `idFechaIngreso` int(11) NOT NULL,
  `Fecha` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fiestapatronal`
--

CREATE TABLE `fiestapatronal` (
  `idFiestaPatronal` int(11) NOT NULL,
  `Habitantes_idPersona` int(11) NOT NULL,
  `Cooperacion` varchar(45) NOT NULL,
  `Cabildo_idCabildo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `fiestapatronal`
--

INSERT INTO `fiestapatronal` (`idFiestaPatronal`, `Habitantes_idPersona`, `Cooperacion`, `Cabildo_idCabildo`) VALUES
(31, 1, '12000', 1),
(32, 2, '12000', 1),
(33, 3, '12000', 1),
(34, 4, '12000', 1),
(35, 5, '12000', 1),
(36, 7, '12000', 1),
(37, 6, '12000', 1),
(38, 8, '12000', 1),
(39, 9, '12000', 1),
(40, 10, '12000', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitantes`
--

CREATE TABLE `habitantes` (
  `idPersona` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellidos` varchar(45) NOT NULL,
  `Sexo_idSexo` int(11) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `Comunidad_idComunidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `habitantes`
--

INSERT INTO `habitantes` (`idPersona`, `Nombre`, `Apellidos`, `Sexo_idSexo`, `FechaNacimiento`, `Comunidad_idComunidad`) VALUES
(1, 'Ian Alejandro', 'Leobardo Hernández', 1, '2020-04-06', 1),
(2, 'Elizeth', 'Hernández García', 2, '2020-04-23', 2),
(3, 'Eliseo', 'Leobardo', 1, '2020-05-21', 1),
(4, 'Jovanny', 'Leobardo Salas', 1, '2020-05-13', 1),
(5, 'Guillerma', 'Leobardo Salas', 2, '2020-05-19', 1),
(6, 'María del Rosario', 'Leobardo Salas', 2, '2020-05-11', 1),
(7, 'Delfina', 'Leobardo Salas', 2, '2020-05-08', 1),
(8, 'Rommel Abad', 'Leobardo Salas', 1, '2020-05-07', 1),
(9, 'Miranda', 'Leobardo Hernández', 2, '2020-05-13', 1),
(10, 'Doroteo', 'Leobardo Salas', 1, '2020-05-20', 1),
(11, 'Gemma', 'Cruz Cruz', 2, '2020-05-12', 1),
(12, 'Baltazar', 'Leobardo Cruz', 1, '2020-05-06', 1),
(13, 'Elvis Yael', 'Leobardo Cruz', 1, '2020-05-14', 1),
(14, 'Evoni', 'Leobardo Cruz', 2, '2020-05-26', 1),
(15, 'Javier', 'Hernandez Guzmán', 1, '2020-05-14', 1),
(16, 'Xochilt', 'Velasco Leobardo', 2, '2020-05-13', 1),
(17, 'Britney', 'Hernández Velasco', 2, '2020-05-13', 1),
(18, 'Zury', 'Velasco Hernández', 2, '2020-05-12', 1),
(19, 'Javier Galileo', 'Hernández Velasco', 1, '2020-05-13', 1),
(20, 'Enrique', 'Velasco Leobardo', 1, '2020-05-13', 1),
(21, 'Austreberta', 'Hernandez García', 2, '2020-05-13', 1),
(22, 'Jolette', 'Velasco Hernández', 2, '2020-05-26', 1),
(23, 'Bret Eliel', 'Velasco Leobardo', 1, '2020-05-26', 1),
(24, 'Fidel', 'López Solano', 1, '2020-05-20', 1),
(25, 'Raquel', 'Martinez Leobardo', 2, '2020-05-26', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE `sexo` (
  `idSexo` int(11) NOT NULL,
  `SimboloSexo` varchar(1) NOT NULL,
  `Sexo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`idSexo`, `SimboloSexo`, `Sexo`) VALUES
(1, 'H', 'Hombre'),
(2, 'M', 'Mujer');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `2viernes`
--
ALTER TABLE `2viernes`
  ADD PRIMARY KEY (`id2Viernes`),
  ADD KEY `fk_2Viernes_Habitantes1_idx` (`Habitantes_idPersona`),
  ADD KEY `fk_2Viernes_Cabildo1_idx` (`Cabildo_idCabildo`);

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idtable1`);

--
-- Indices de la tabla `cabildo`
--
ALTER TABLE `cabildo`
  ADD PRIMARY KEY (`idCabildo`);

--
-- Indices de la tabla `comunidad`
--
ALTER TABLE `comunidad`
  ADD PRIMARY KEY (`idComunidad`);

--
-- Indices de la tabla `fechaingreso`
--
ALTER TABLE `fechaingreso`
  ADD PRIMARY KEY (`idFechaIngreso`);

--
-- Indices de la tabla `fiestapatronal`
--
ALTER TABLE `fiestapatronal`
  ADD PRIMARY KEY (`idFiestaPatronal`),
  ADD KEY `fk_FiestaPatronal_Habitantes1_idx` (`Habitantes_idPersona`),
  ADD KEY `fk_FiestaPatronal_Cabildo1_idx` (`Cabildo_idCabildo`);

--
-- Indices de la tabla `habitantes`
--
ALTER TABLE `habitantes`
  ADD PRIMARY KEY (`idPersona`),
  ADD KEY `fk_Habitantes_Comunidad_idx` (`Comunidad_idComunidad`),
  ADD KEY `fk_Habitantes_Sexo1_idx` (`Sexo_idSexo`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`idSexo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `2viernes`
--
ALTER TABLE `2viernes`
  MODIFY `id2Viernes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `idtable1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cabildo`
--
ALTER TABLE `cabildo`
  MODIFY `idCabildo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `comunidad`
--
ALTER TABLE `comunidad`
  MODIFY `idComunidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `fiestapatronal`
--
ALTER TABLE `fiestapatronal`
  MODIFY `idFiestaPatronal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `habitantes`
--
ALTER TABLE `habitantes`
  MODIFY `idPersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `sexo`
--
ALTER TABLE `sexo`
  MODIFY `idSexo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `2viernes`
--
ALTER TABLE `2viernes`
  ADD CONSTRAINT `fk_2Viernes_Cabildo1` FOREIGN KEY (`Cabildo_idCabildo`) REFERENCES `cabildo` (`idCabildo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_2Viernes_Habitantes1` FOREIGN KEY (`Habitantes_idPersona`) REFERENCES `habitantes` (`idPersona`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `fiestapatronal`
--
ALTER TABLE `fiestapatronal`
  ADD CONSTRAINT `fk_FiestaPatronal_Cabildo1` FOREIGN KEY (`Cabildo_idCabildo`) REFERENCES `cabildo` (`idCabildo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_FiestaPatronal_Habitantes1` FOREIGN KEY (`Habitantes_idPersona`) REFERENCES `habitantes` (`idPersona`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `habitantes`
--
ALTER TABLE `habitantes`
  ADD CONSTRAINT `fk_Habitantes_Comunidad` FOREIGN KEY (`Comunidad_idComunidad`) REFERENCES `comunidad` (`idComunidad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Habitantes_Sexo1` FOREIGN KEY (`Sexo_idSexo`) REFERENCES `sexo` (`idSexo`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

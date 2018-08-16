-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-08-2018 a las 20:04:29
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `userejercito`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `IDGENERO` int(11) NOT NULL,
  `NOMBREGENERO` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`IDGENERO`, `NOMBREGENERO`) VALUES
(1, 'Femenino'),
(2, 'Masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `IDUSUARIO` int(11) NOT NULL,
  `NOMBREUSUARIO` varchar(100) DEFAULT NULL,
  `APELLIDOUSUARIO` varchar(100) DEFAULT NULL,
  `RUTUSUARIO` varchar(100) DEFAULT NULL,
  `GENEROUSUARIO` varchar(100) DEFAULT NULL,
  `MAILUSUARIO` varchar(100) DEFAULT NULL,
  `DIRECCIONUSUARIO` varchar(100) DEFAULT NULL,
  `ESTADOUSUARIO` varchar(100) DEFAULT NULL,
  `MOSTRARUSUARIO` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`IDUSUARIO`, `NOMBREUSUARIO`, `APELLIDOUSUARIO`, `RUTUSUARIO`, `GENEROUSUARIO`, `MAILUSUARIO`, `DIRECCIONUSUARIO`, `ESTADOUSUARIO`, `MOSTRARUSUARIO`) VALUES
(1, 'Luis', 'Peñaloza', '14143456-k', 'Masculino', 'po@gmail.com', 'eded ', 'Activo', 'Si'),
(2, 'Antonio', 'zambrano perea', '17889776-8', 'Masculino', 'a.zambrano@gmail.com', 'Av. las parcelas, N°707, Comuna Santiago', 'Activo', 'Si'),
(3, 'Miguel', 'mendez', NULL, NULL, NULL, NULL, 'Inactivo', 'No'),
(4, 'Daniel Manuel', 'Aracena Mendez', '18765414-k', 'Masculino', 'wwww', 'ww', 'Activo', 'Si'),
(5, 'Ramona', 'Gonzalez Perea', '14143456-9', 'Femenino', NULL, NULL, 'Inactivo', 'Si'),
(7, 'Luis', 'Ganzaga mendéz', '17665443-1', 'Femenino', 'aa@gmailcom', 'av.pp 234', 'Activo', 'Si'),
(8, 'Carlos', 'Sanchez', '22222222-2', 'Masculino', 'aa@gmail.com', 'Pasaje Cerro Nevado, N°188, Comuna Maipu', 'Activo', 'Si'),
(9, 'oo', 'sss', '13132345-7', 'Masculino', 'a.zambrano@gmail.com', 'eeeee', 'Activo', 'Si'),
(10, 'Luis', 'pela', '14143456k', 'Femenino', 'er.a@gmail.com', 'rfrf', 'Activo', 'Si'),
(11, 'luis', 'peñaloza', '14143456k', 'Masculino', 'penaloza.luis@gmail.com', 'las acacias 138', 'Activo', 'Si');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`IDGENERO`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IDUSUARIO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `IDGENERO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `IDUSUARIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

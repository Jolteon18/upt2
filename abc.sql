-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-09-2020 a las 09:45:11
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `abc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `Puesto` int(11) NOT NULL,
  `Descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`Puesto`, `Descripcion`) VALUES
(1, 'Sistemas'),
(2, 'Comercial');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `Clave_Emp` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `ApPaterno` varchar(50) NOT NULL,
  `ApMaterno` varchar(50) NOT NULL,
  `FecNac` date NOT NULL,
  `Departamento` int(11) NOT NULL,
  `Sueldo` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`Clave_Emp`, `Nombre`, `ApPaterno`, `ApMaterno`, `FecNac`, `Departamento`, `Sueldo`) VALUES
(1, 'algo', 'nose', 'nosex2', '2000-09-25', 1, 5000),
(2, 'sope', 'qweqdw', 'asdasd', '2020-09-09', 2, 50003);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`Puesto`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`Clave_Emp`),
  ADD KEY `Departamento` (`Departamento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `Puesto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `Clave_Emp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`Departamento`) REFERENCES `departamentos` (`Puesto`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

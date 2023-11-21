-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 21-11-2023 a las 18:08:36
-- Versión del servidor: 8.0.17
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `citas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `Id` int(11) NOT NULL,
  `Descripcion` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`Id`, `Descripcion`) VALUES
(1, '<p>PC SYSTEMS Y COMPUTACIÓN</p><p>INGENIERO: JEBER RODY RICALDE DE LA BARRERA</p><p>Numero de teléfono: +52 1 924 178 2211&nbsp;</p><p>INGENIERO: ALBERTO ORTIZ ESPINOZA<br></p><p>Numero de teléfono:&nbsp;+52 1 924 117 5453</p><p><br></p>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Apellidos` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Numero` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `Correo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Direccion` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Servicio` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time NOT NULL,
  `MensajeAdicional` text COLLATE utf8mb4_general_ci,
  `Estado` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `FechaCreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `FechaModificacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`ID`, `Nombre`, `Apellidos`, `Numero`, `Correo`, `Direccion`, `Servicio`, `Fecha`, `Hora`, `MensajeAdicional`, `Estado`, `FechaCreacion`) VALUES
(8, 'Francisco Javier', 'Zetina Murillo', '9242122051', 'franciscojavier.ze@itsjc.edu.mx', 'Jesús Carranza Ver', 'Instalación de cámaras', '2023-11-20', '09:00:00', 'Cita almacenada con exito', 'Confirmado', '2023-11-21 01:42:34'),
(16, 'Juan Felipe', 'Reyes Alcantara', '9242122051', 'juanfe@gmail.com', 'Jesús Carranza Ver 96950', 'Intalacion de cercos electricos', '2023-11-21', '15:00:00', 'Cita almacenada con exito', 'Pendiente', '2023-11-21 16:17:08'),
(18, 'Yasmin ', 'Cota Picos', '9241285578', 'loca423@gmail.com', 'La paz baja california del sur', 'Instalación de camaras', '2023-11-21', '11:00:00', 'Cita almacenada con exito', 'Pendiente', '2023-11-21 18:02:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(2) NOT NULL,
  `nombre` varchar(256) COLLATE utf8_spanish2_ci NOT NULL,
  `username` varchar(256) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(256) COLLATE utf8_spanish2_ci NOT NULL,
  `modificado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `username`, `password`) VALUES
(0, 'Francisco', 'admin', '$2y$10$/ikUo4ZuWZzqT3L7NMOve.SMnVLWhNe/KzI6PSvBuF6vDU3bMuM7K');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

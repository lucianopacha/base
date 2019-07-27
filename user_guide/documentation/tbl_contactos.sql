-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-07-2019 a las 05:01:54
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mueblesroci`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_contactos`
--

CREATE TABLE `tbl_contactos` (
  `id` int(20) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `telefono` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `mensaje` varchar(255) COLLATE utf8_bin NOT NULL,
  `falta` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_contactos`
--

INSERT INTO `tbl_contactos` (`id`, `nombre`, `telefono`, `email`, `mensaje`, `falta`) VALUES
(1, 'Luciano Pacheco', '1561605031', 'luciano.a.pacheco@gmail.com', 'prueba', '2019-07-22'),
(2, 'LP', '1561605031', 'lp@lp.com', '', '2019-07-22'),
(3, 'Luciano Pacheco', '1561605031', 'luciano.a.pacheco@gmail.com', '', '2019-07-22'),
(4, 'Luciano Pacheco', '1561605031', 'luciano.a.pacheco@gmail.com', '', '2019-07-22'),
(5, 'Luciano Pacheco', '1561605031', 'luciano.a.pacheco@gmail.com', '', '2019-07-22'),
(6, 'Luciano Pacheco', '1561605031', 'luciano.a.pacheco@gmail.com', '', '2019-07-22'),
(7, 'Luciano Pacheco', '1561605031', 'luciano.a.pacheco@gmail.com', '', '2019-07-22'),
(8, 'Luciano Pacheco', '1561605031', 'luciano.a.pacheco@gmail.com', '', '2019-07-22'),
(9, 'Luciano Pacheco', '1561605031', 'luciano.a.pacheco@gmail.com', '', '2019-07-22'),
(10, 'Luciano Pacheco', '1561605031', 'luciano.a.pacheco@gmail.com', '', '2019-07-22'),
(11, 'Luciano Pacheco', '1561605031', 'luciano.a.pacheco@gmail.com', '', '2019-07-22'),
(12, 'Luciano Pacheco', '1561605031', 'luciano.a.pacheco@gmail.com', '', '2019-07-22'),
(13, 'Luciano Pacheco', '1561605031', 'luciano.a.pacheco@gmail.com', '', '2019-07-22'),
(14, 'Luciano Pacheco', '1561605031', 'luciano.a.pacheco@gmail.com', '', '2019-07-22'),
(15, 'Luciano Pacheco', '1561605031', 'luciano.a.pacheco@gmail.com', '', '2019-07-22'),
(16, 'Luciano Pacheco', '1561605031', 'luciano.a.pacheco@gmail.com', '', '2019-07-22'),
(17, 'Luciano Pacheco', '1561605031', 'luciano.a.pacheco@gmail.com', '', '2019-07-22'),
(18, 'Luciano Pacheco', '1561605031', 'luciano.a.pacheco@gmail.com', '', '2019-07-22'),
(19, 'Luciano Pacheco', '1561605031', 'luciano.a.pacheco@gmail.com', '', '2019-07-22'),
(20, 'Luciano Pacheco', '1561605031', 'luciano.a.pacheco@gmail.com', '', '2019-07-22'),
(21, 'Luciano Pacheco', '1561605031', 'luciano.a.pacheco@gmail.com', '', '2019-07-22'),
(22, 'Luciano Pacheco', '1561605031', 'luciano.a.pacheco@gmail.com', '', '2019-07-22');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_contactos`
--
ALTER TABLE `tbl_contactos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_contactos`
--
ALTER TABLE `tbl_contactos`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

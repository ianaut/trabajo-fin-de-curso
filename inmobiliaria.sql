-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-08-2022 a las 13:19:55
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inmobiliaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmuebles`
--

CREATE TABLE `inmuebles` (
  `idInmueble` int(5) NOT NULL,
  `precio` int(10) DEFAULT NULL,
  `habitaciones` int(2) DEFAULT NULL,
  `metros` int(4) DEFAULT NULL,
  `fecha_construccion` date DEFAULT NULL,
  `amueblado` varchar(10) DEFAULT NULL,
  `vendedor` int(5) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `descripcion` longtext DEFAULT NULL,
  `tipo` varchar(100) DEFAULT NULL,
  `fecha_creacion` date NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inmuebles`
--

INSERT INTO `inmuebles` (`idInmueble`, `precio`, `habitaciones`, `metros`, `fecha_construccion`, `amueblado`, `vendedor`, `direccion`, `descripcion`, `tipo`, `fecha_creacion`, `status`) VALUES
(1, 100000, 2, 120, '2012-11-07', 'Si', 11, '1', NULL, 'Piso', '2022-06-27', 1),
(2, 150000, 2, 120, '2012-11-07', 'Si', 1, '2', NULL, 'Piso', '2022-06-27', 1),
(3, 120900, 3, 150, '2000-01-31', 'No', 2, '3', NULL, 'Casa', '2022-06-27', 1),
(4, 90000, 1, 70, '1996-01-25', 'No', 3, '4', NULL, 'Piso', '2022-06-27', 1),
(5, 230700, 4, 180, '1970-02-09', 'Si', 4, '5', NULL, 'Piso', '2022-06-27', 1),
(6, 300000, 5, 250, '1989-03-02', 'No', 5, '6', NULL, 'Casa', '2022-06-27', 1),
(7, 255000, 3, 150, '1997-04-30', 'Si', 6, '7', NULL, 'Piso', '2022-06-27', 1),
(8, 105000, 2, 80, '2012-05-15', 'Si', 7, '8', NULL, 'Piso', '2022-06-27', 1),
(9, 107000, 2, 90, '1989-06-12', 'No', 8, '9', NULL, 'Casa', '2022-06-27', 1),
(10, 230000, 4, 200, '1993-07-13', 'Si', 9, '10', NULL, 'Piso', '2022-06-27', 1),
(11, 70000, 1, 50, '2000-08-17', 'Si', 10, '11', NULL, 'Casa', '2022-06-27', 1),
(12, 90000, 2, 90, '1977-09-03', 'No', 11, '12', NULL, 'Piso', '2022-06-27', 1),
(13, 150000, 3, 95, '1994-10-02', 'No', 12, '13', NULL, 'Piso', '2022-06-27', 1),
(14, 170000, 4, 136, '1967-11-04', 'No', 13, '14', NULL, 'Piso', '2022-06-27', 1),
(15, 80500, 1, 68, '2003-12-09', 'Si', 14, '15', NULL, 'Casa', '2022-06-27', 1),
(16, 130000, 2, 101, '1994-12-05', 'No', 15, '16', NULL, 'Casa', '2022-06-27', 1),
(17, 400000, 4, 196, '1980-10-27', 'Si', 16, '17', NULL, 'Piso', '2022-06-27', 1),
(18, 140500, 3, 77, '2017-04-23', 'Si', 17, '18', NULL, 'Piso', '2022-06-27', 1),
(19, 100000, 2, 86, '2015-06-23', 'No', 18, '19', NULL, 'Piso', '2022-06-27', 1),
(20, 125000, 2, 99, '1999-07-27', 'Si', 19, '20', NULL, 'Piso', '2022-06-27', 1),
(21, 110000, 1, 75, '2000-07-28', 'Si', 20, '21', NULL, 'Casa', '2022-06-27', 1),
(22, 100000, 3, 115, '1984-07-24', 'No', 21, '22', NULL, 'Casa', '2022-06-27', 1),
(23, 450000, 5, 350, '2015-12-23', 'Si', 23, '23', NULL, 'Casa', '2022-06-27', 1),
(24, 60000, 1, 62, '2009-02-10', 'Si', 22, '24', NULL, 'Piso', '2022-06-27', 1),
(25, 70000, 1, 66, '2004-01-19', 'No', 24, '25', NULL, 'Casa', '2022-06-27', 1),
(26, 250000, 3, 143, '2012-06-12', 'Si', 25, '26', NULL, 'Piso', '2022-06-27', 1),
(27, 100000, 2, 113, '2019-01-23', 'Si', 26, '27', NULL, 'Casa', '2022-06-27', 1),
(28, 190000, 4, 199, '2021-02-17', 'Si', 1, '28', NULL, 'Piso', '2022-06-27', 1),
(29, 90000, 2, 89, '2006-09-19', 'No', 23, '29', NULL, 'Piso', '2022-06-27', 1),
(30, 115000, 2, 100, '2003-08-19', 'Si', 4, '30', NULL, 'Piso', '2022-06-27', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(100) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `fecha_creacion` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `apellidos`, `password`, `email`, `fecha_creacion`) VALUES
(1, '1123', '123123', '1231231', '12312412', '2022-07-11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedor`
--

CREATE TABLE `vendedor` (
  `idVendedor` int(5) NOT NULL,
  `nombreVendedor` varchar(100) DEFAULT NULL,
  `telefono` int(9) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `fecha_creacion` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vendedor`
--

INSERT INTO `vendedor` (`idVendedor`, `nombreVendedor`, `telefono`, `mail`, `fecha_creacion`) VALUES
(1, 'Bernardino García', 765509547, 'benardinogarcia@gmail.com', '2022-06-27'),
(2, 'Luna Pérez', 678550327, 'lunaperez@gmail.com', '2022-06-27'),
(3, 'Ana Nunez', 614796527, 'ananunez@gmail.com', '2022-06-27'),
(4, 'Rodolfo Vallejo', 624443837, 'rodolfovallejo@gmail.com', '2022-06-27'),
(5, 'Debora Prados', 609804690, 'deboraprados@gmail.com', '2022-06-27'),
(6, 'Monserrat Latorre', 691415678, 'monserratlatorre@gmail.com', '2022-06-27'),
(7, 'Paula Huerta', 642481489, 'paulahuerta@gmail.com', '2022-06-27'),
(8, 'Martina Calle', 685811375, 'martinacalle@gmail.com', '2022-06-27'),
(9, 'Giovanni Ariza', 668367655, 'giovanniariza@gmail.com', '2022-06-27'),
(10, 'Axel Mansilla', 643801102, 'axelmansilla@gmail.com', '2022-06-27'),
(11, 'Ainoa Mas', 662089794, 'ainoamas@gmail.com', '2022-06-27'),
(12, 'Jose Cabello', 696952520, 'josecabello@gmail.com', '2022-06-27'),
(13, 'Samuel Segarra', 682555697, 'samuelsegarra@gmail.com', '2022-06-27'),
(14, 'Alain Ripoll', 615501845, 'alainripoll@gmail.com', '2022-06-27'),
(15, 'Ismael Boix', 647454853, 'ismaelboix@gmail.com', '2022-06-27'),
(16, 'Igor Trigo', 602680123, 'igortrigo@gmail.com', '2022-06-27'),
(17, 'Valeria Nieves', 667775986, 'valerianieves@gmail.com', '2022-06-27'),
(18, 'Rosa Sierra', 677594321, 'Rosasierra@gmail.com', '2022-06-27'),
(19, 'Jacqueline Sobrino', 600947964, 'jacquelinesobrino@gmail.com', '2022-06-27'),
(20, 'Fermin del Campo', 686348913, 'fermindelcampo@gmail.com', '2022-06-27'),
(21, 'Aranzazu Montilla', 640241718, 'aranzazumontilla@gmail.com', '2022-06-27'),
(22, 'Lazaro Amado', 624416593, 'lazaroamado@gmail.com', '2022-06-27'),
(23, 'Ruben Frances', 680727343, 'rubenfrances@gmail.com', '2022-06-27'),
(24, 'Salud Cardenas', 663700874, 'saludcardenas@gmail.com', '2022-06-27'),
(25, 'Christopher Rus', 699603235, 'christopherrus@gmail.com', '2022-06-27'),
(26, 'Naima Postigo', 665501247, 'benardinogarcia@gmail.com', '2022-06-27');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inmuebles`
--
ALTER TABLE `inmuebles`
  ADD PRIMARY KEY (`idInmueble`),
  ADD KEY `vendedor` (`vendedor`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- Indices de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`idVendedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inmuebles`
--
ALTER TABLE `inmuebles`
  MODIFY `idInmueble` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  MODIFY `idVendedor` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `inmuebles`
--
ALTER TABLE `inmuebles`
  ADD CONSTRAINT `inmuebles_ibfk_1` FOREIGN KEY (`vendedor`) REFERENCES `vendedor` (`idVendedor`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

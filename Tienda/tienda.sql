-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-07-2020 a las 23:10:20
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(256) NOT NULL,
  `direccion` varchar(256) NOT NULL,
  `telefono` varchar(16) NOT NULL,
  `celular` varchar(16) NOT NULL,
  `dui` varchar(25) DEFAULT NULL,
  `nit` varchar(25) DEFAULT NULL,
  `registro_fiscal` varchar(25) NOT NULL,
  `porcentaje_ganancia` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre`, `direccion`, `telefono`, `celular`, `dui`, `nit`, `registro_fiscal`, `porcentaje_ganancia`) VALUES
(1, 'Samuel Alejandro González Espinoza', 'Residencial Alto Verde, Senda Los Cipreses, #65', '2468-0683', '7556-9099', '1230-1230421-1', '0210-030798-103-5', '123912-5', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `id_factura` int(11) NOT NULL,
  `nombre` varchar(256) NOT NULL,
  `fecha` date NOT NULL,
  `direccion` varchar(256) DEFAULT NULL,
  `dui` varchar(25) DEFAULT NULL,
  `nit` varchar(25) DEFAULT NULL,
  `tipo` int(1) NOT NULL,
  `cantidad_1` int(4) DEFAULT NULL,
  `cantidad_2` int(4) DEFAULT NULL,
  `cantidad_3` int(4) DEFAULT NULL,
  `cantidad_4` int(4) DEFAULT NULL,
  `cantidad_5` int(4) DEFAULT NULL,
  `cantidad_6` int(4) DEFAULT NULL,
  `cantidad_7` int(4) DEFAULT NULL,
  `cantidad_8` int(4) DEFAULT NULL,
  `cantidad_9` int(4) DEFAULT NULL,
  `cantidad_10` int(4) DEFAULT NULL,
  `descripcion_1` varchar(256) DEFAULT NULL,
  `descripcion_2` varchar(256) DEFAULT NULL,
  `descripcion_3` varchar(256) DEFAULT NULL,
  `descripcion_4` varchar(256) DEFAULT NULL,
  `descripcion_5` varchar(256) DEFAULT NULL,
  `descripcion_6` varchar(256) DEFAULT NULL,
  `descripcion_7` varchar(256) DEFAULT NULL,
  `descripcion_8` varchar(256) DEFAULT NULL,
  `descripcion_9` varchar(256) DEFAULT NULL,
  `descripcion_10` varchar(256) DEFAULT NULL,
  `precio_1` double DEFAULT NULL,
  `precio_2` double DEFAULT NULL,
  `precio_3` double DEFAULT NULL,
  `precio_4` double DEFAULT NULL,
  `precio_5` double DEFAULT NULL,
  `precio_6` double DEFAULT NULL,
  `precio_7` double DEFAULT NULL,
  `precio_8` double DEFAULT NULL,
  `precio_9` double DEFAULT NULL,
  `precio_10` double DEFAULT NULL,
  `ventas_afectas_1` double DEFAULT NULL,
  `ventas_afectas_2` double DEFAULT NULL,
  `ventas_afectas_3` double DEFAULT NULL,
  `ventas_afectas_4` double DEFAULT NULL,
  `ventas_afectas_5` double DEFAULT NULL,
  `ventas_afectas_6` double DEFAULT NULL,
  `ventas_afectas_7` double DEFAULT NULL,
  `ventas_afectas_8` double DEFAULT NULL,
  `ventas_afectas_9` double DEFAULT NULL,
  `ventas_afectas_10` double DEFAULT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`id_factura`, `nombre`, `fecha`, `direccion`, `dui`, `nit`, `tipo`, `cantidad_1`, `cantidad_2`, `cantidad_3`, `cantidad_4`, `cantidad_5`, `cantidad_6`, `cantidad_7`, `cantidad_8`, `cantidad_9`, `cantidad_10`, `descripcion_1`, `descripcion_2`, `descripcion_3`, `descripcion_4`, `descripcion_5`, `descripcion_6`, `descripcion_7`, `descripcion_8`, `descripcion_9`, `descripcion_10`, `precio_1`, `precio_2`, `precio_3`, `precio_4`, `precio_5`, `precio_6`, `precio_7`, `precio_8`, `precio_9`, `precio_10`, `ventas_afectas_1`, `ventas_afectas_2`, `ventas_afectas_3`, `ventas_afectas_4`, `ventas_afectas_5`, `ventas_afectas_6`, `ventas_afectas_7`, `ventas_afectas_8`, `ventas_afectas_9`, `ventas_afectas_10`, `total`) VALUES
(1, 'Rodrigo Gonzalez', '2020-07-16', NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 400),
(2, 'Samuel', '2020-07-16', 'casona', '123', '456', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 600),
(3, 'Cesar', '2020-12-16', 'casona', '123', '456', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `descripcion` varchar(256) NOT NULL,
  `costo` double NOT NULL,
  `precio` double NOT NULL,
  `cantidad` int(4) NOT NULL,
  `fecha_vencimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `codigo`, `descripcion`, `costo`, `precio`, `cantidad`, `fecha_vencimiento`) VALUES
(1, 21390812, 'Mascarilla KN95', 0.21, 2, 200, '2020-09-04'),
(2, 98123412, 'Guantes de latex', 0.34, 1, 24, '2020-09-04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(32) NOT NULL,
  `clave` varchar(64) NOT NULL,
  `tipo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `clave`, `tipo`) VALUES
(1, 'admin', 'admin', 1),
(2, 'user', 'user', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`id_factura`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `id_factura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

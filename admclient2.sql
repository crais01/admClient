-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 06-12-2019 a las 17:16:46
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `admclient2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `baseclient`
--

CREATE TABLE `baseclient` (
  `id_database` int(11) NOT NULL,
  `dbname` varchar(20) NOT NULL,
  `state` char(1) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `baseclient`
--

INSERT INTO `baseclient` (`id_database`, `dbname`, `state`, `date`) VALUES
(1, 'db_craisDesigner', '1', '2019-12-06 19:42:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `client`
--

CREATE TABLE `client` (
  `rut` varchar(11) NOT NULL,
  `name_client` varchar(40) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `client`
--

INSERT INTO `client` (`rut`, `name_client`, `address`, `phone`, `mobile`, `email`, `date`) VALUES
('016931389-k', 'craisDesigner', 'los alamos 123', 23290804, 987786703, 'ccortesj.01@gmail.com', '2019-12-06 14:49:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientuserdb`
--

CREATE TABLE `clientuserdb` (
  `rut_client` varchar(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_db` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientuserdb`
--

INSERT INTO `clientuserdb` (`rut_client`, `id_user`, `id_db`) VALUES
('016931389-k', 1, 1),
('016931389-k', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profile`
--

CREATE TABLE `profile` (
  `id_profile` int(11) NOT NULL,
  `name_profile` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `profile`
--

INSERT INTO `profile` (`id_profile`, `name_profile`, `description`, `date`) VALUES
(1, 'superAdmin', 'super administrador', '2019-12-06 14:49:56'),
(2, 'admin', 'administrador', '2019-12-06 14:50:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(20) NOT NULL,
  `rut_user` varchar(11) NOT NULL,
  `first_names` varchar(50) NOT NULL,
  `last_names` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_profile` int(11) NOT NULL,
  `state` char(1) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `name_user`, `rut_user`, `first_names`, `last_names`, `password`, `id_profile`, `state`, `date`) VALUES
(1, 'crais', '016931389-k', 'christopher', 'cortes', '454545', 1, '1', '2019-12-06 19:38:49'),
(2, 'silvecor', '25468978-8', 'Silvanna', 'cortes', '232323', 1, '1', '2019-12-06 19:39:48');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `baseclient`
--
ALTER TABLE `baseclient`
  ADD PRIMARY KEY (`id_database`);

--
-- Indices de la tabla `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`rut`);

--
-- Indices de la tabla `clientuserdb`
--
ALTER TABLE `clientuserdb`
  ADD KEY `rut_client` (`rut_client`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_db` (`id_db`);

--
-- Indices de la tabla `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_profile` (`id_profile`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `baseclient`
--
ALTER TABLE `baseclient`
  MODIFY `id_database` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `profile`
--
ALTER TABLE `profile`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientuserdb`
--
ALTER TABLE `clientuserdb`
  ADD CONSTRAINT `clientuserdb_ibfk_1` FOREIGN KEY (`rut_client`) REFERENCES `client` (`rut`),
  ADD CONSTRAINT `clientuserdb_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `clientuserdb_ibfk_3` FOREIGN KEY (`id_db`) REFERENCES `baseclient` (`id_database`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_profile`) REFERENCES `profile` (`id_profile`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

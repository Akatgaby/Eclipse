-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-10-2019 a las 05:01:29
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `database_monsters`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `table_careers`
--

CREATE TABLE `table_careers` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(255) NOT NULL,
  `type_descript` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `table_careers`
--

INSERT INTO `table_careers` (`type_id`, `type_name`, `type_descript`) VALUES
(1, 'Ingeniería en Sistemas Informáticos', 'Cinco años de estudio.'),
(2, 'Doctorado en Medicina', 'Ocho años de estudio.'),
(3, 'Ingeniería Civil', 'Cinco años de estudio.'),
(4, 'Licenciatura en psicología', 'Cuatro años de estudio.'),
(5, 'Licenciatura en Idiomas', 'Cuatro años de estudio.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `table_clients`
--

CREATE TABLE `table_clients` (
  `user_id` int(11) NOT NULL,
  `name_client` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `e_mail` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `pass_word` varchar(255) NOT NULL,
  `block` int(11) NOT NULL DEFAULT '0',
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `table_clients`
--

INSERT INTO `table_clients` (`user_id`, `name_client`, `last_name`, `e_mail`, `user_name`, `pass_word`, `block`, `type`) VALUES
(1, 'Catalina', 'Guzmán', 'sae@gmail.com', 'Sae', '$2y$10$UeWXYYfWObN3ckB1OU.Qd.hecZc2PsG7WKGvl6Zb/XORnr/KxBFeK', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `table_data`
--

CREATE TABLE `table_data` (
  `id` int(11) NOT NULL,
  `applicant` int(11) NOT NULL,
  `high_school` int(11) NOT NULL,
  `school_option` varchar(50) NOT NULL,
  `first_year` int(11) NOT NULL,
  `last_year` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `second_phone` int(11) DEFAULT NULL,
  `birth_date` date NOT NULL,
  `career` int(11) NOT NULL,
  `dui` int(11) NOT NULL,
  `nit` int(11) NOT NULL,
  `nie` int(11) NOT NULL,
  `applicant_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `table_data`
--

INSERT INTO `table_data` (`id`, `applicant`, `high_school`, `school_option`, `first_year`, `last_year`, `phone`, `second_phone`, `birth_date`, `career`, `dui`, `nit`, `nie`, `applicant_photo`) VALUES
(1, 1, 1, 'Desarrollo de Software', 2014, 2018, 77889944, 77114730, '1999-08-22', 2, 123456789, 1112132, 11554466, 'JKLSAJLJALKJSKLJKASJLAJLKS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `table_places`
--

CREATE TABLE `table_places` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(100) NOT NULL,
  `type_descript` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `table_places`
--

INSERT INTO `table_places` (`type_id`, `type_name`, `type_descript`) VALUES
(1, 'Instituto Técnico Ricaldone', 'Zacamil'),
(2, 'Colegio Santa Cecilia', 'San Salvador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `table_type`
--

CREATE TABLE `table_type` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `table_type`
--

INSERT INTO `table_type` (`id`, `type`) VALUES
(2, 'En proceso'),
(1, 'Inscrito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `table_users`
--

CREATE TABLE `table_users` (
  `user_id` int(11) NOT NULL,
  `name_adm` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `e_mail` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `pass_word` varchar(255) NOT NULL,
  `block` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `table_users`
--

INSERT INTO `table_users` (`user_id`, `name_adm`, `last_name`, `e_mail`, `user_name`, `pass_word`, `block`) VALUES
(1, 'Gaby', 'Ramos', 'aki@gmail.com', 'Aki', '$2y$10$UeWXYYfWObN3ckB1OU.Qd.hecZc2PsG7WKGvl6Zb/XORnr/KxBFeK', 0),
(2, 'Ana', 'Méndez', 'atsushi@gmail.com', 'Atsushi', '$2y$10$KnelBPUJDP0ZDaiOZn10f.sME6Nx7nXy2Mcsj3Mz/ozkITpKTgpqy', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `table_careers`
--
ALTER TABLE `table_careers`
  ADD PRIMARY KEY (`type_id`),
  ADD UNIQUE KEY `type_name` (`type_name`);

--
-- Indices de la tabla `table_clients`
--
ALTER TABLE `table_clients`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `e_mail` (`e_mail`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD KEY `type` (`type`);

--
-- Indices de la tabla `table_data`
--
ALTER TABLE `table_data`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dui` (`dui`),
  ADD UNIQUE KEY `nie` (`nie`),
  ADD UNIQUE KEY `nit` (`nit`),
  ADD KEY `applicant` (`applicant`),
  ADD KEY `career` (`career`),
  ADD KEY `high_school` (`high_school`);

--
-- Indices de la tabla `table_places`
--
ALTER TABLE `table_places`
  ADD PRIMARY KEY (`type_id`),
  ADD UNIQUE KEY `type_name` (`type_name`);

--
-- Indices de la tabla `table_type`
--
ALTER TABLE `table_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `type` (`type`);

--
-- Indices de la tabla `table_users`
--
ALTER TABLE `table_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `e_mail` (`e_mail`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `table_careers`
--
ALTER TABLE `table_careers`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `table_clients`
--
ALTER TABLE `table_clients`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `table_data`
--
ALTER TABLE `table_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `table_places`
--
ALTER TABLE `table_places`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `table_type`
--
ALTER TABLE `table_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `table_users`
--
ALTER TABLE `table_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `table_clients`
--
ALTER TABLE `table_clients`
  ADD CONSTRAINT `table_clients_ibfk_1` FOREIGN KEY (`type`) REFERENCES `table_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `table_data`
--
ALTER TABLE `table_data`
  ADD CONSTRAINT `table_data_ibfk_1` FOREIGN KEY (`applicant`) REFERENCES `table_clients` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `table_data_ibfk_2` FOREIGN KEY (`career`) REFERENCES `table_careers` (`type_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `table_data_ibfk_3` FOREIGN KEY (`high_school`) REFERENCES `table_places` (`type_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

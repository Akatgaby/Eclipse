-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2019 a las 16:32:36
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `illussion`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `avaliable` (IN `event` INT, IN `date` DATE)  SELECT booking_date FROM bookings WHERE booking_id=event && booking_date=date$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `contacto` (IN `id` INT)  SELECT name,phone_number FROM clients,events WHERE events.client_id=clients.client_id && events.event_id=id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `evento` (IN `p0` VARCHAR(30))  NO SQL
INSERT INTO `event_types`(`etype_id`, `type`) VALUES (null,p0)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `binnacle`
--

CREATE TABLE `binnacle` (
  `action_id` int(11) NOT NULL,
  `action_performed` varchar(100) NOT NULL,
  `action_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `binnacle`
--

INSERT INTO `binnacle` (`action_id`, `action_performed`, `action_date`) VALUES
(1, 'Se han actualizado los datos de un evento.', '2019-05-02'),
(2, 'Se ha elaborado una nueva reserva.', '2019-05-02'),
(3, 'Se ha elaborado una nueva reserva.', '2019-05-02'),
(4, 'Se ha elaborado una nueva reserva.', '2019-05-02'),
(5, 'Se ha retirado un producto del inventario, verifique.', '2019-05-02'),
(6, 'Se ha elaborado una nueva reserva.', '2019-05-02'),
(7, 'Evento finalizado exitosamente.', '2019-05-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `booking_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bookings`
--

INSERT INTO `bookings` (`booking_id`, `room_id`, `booking_date`) VALUES
(1, 1, '2019-05-24'),
(2, 1, '2019-05-20'),
(3, 1, '2019-05-31'),
(4, 5, '2019-05-03');

--
-- Disparadores `bookings`
--
DELIMITER $$
CREATE TRIGGER `binnacle_ai` AFTER INSERT ON `bookings` FOR EACH ROW INSERT INTO binnacle(action_performed, action_date) VALUES('Se ha elaborado una nueva reserva.', NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `phone_number` int(8) NOT NULL,
  `e_mail` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dui` varchar(10) NOT NULL,
  `nit` varchar(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clients`
--

INSERT INTO `clients` (`client_id`, `name`, `last_name`, `phone_number`, `e_mail`, `address`, `dui`, `nit`) VALUES
(1, 'Catalina', 'Guzmán', 58946532, '78@gmail.com', 'Pasaje Valaparaíso', '12345678-9', '0608-150800-102-7'),
(6, 'Rodrigo', 'Castillo', 79879825, '789@gmail.com', 'Pasaje El Mar', '12365498-7', '0608-150800-102-2'),
(7, 'Silvia', 'Prado', 12345789, '69@gmail.com', 'Calle El Señor de los Cielos', '00235678-9', '0608-150800-102-9');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `employe_in_charge` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `event_type` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `state` varchar(30) NOT NULL,
  `total` double(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `events`
--

INSERT INTO `events` (`event_id`, `employe_in_charge`, `client_id`, `room_id`, `event_type`, `booking_date`, `state`, `total`) VALUES
(2, 1, 6, 5, 3, '2019-05-09', 'Finalizado', 45.99),
(4, 1, 6, 2, 3, '2019-05-27', 'Pendiente', 89.00),
(5, 2, 7, 1, 4, '2019-05-30', 'Pendiente', 48.50);

--
-- Disparadores `events`
--
DELIMITER $$
CREATE TRIGGER `binnacle_au` AFTER UPDATE ON `events` FOR EACH ROW BEGIN
IF(old.state != new.state) 
THEN 
INSERT INTO binnacle(action_performed, action_date) VALUES('Evento finalizado exitosamente.', NOW()); 
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `event_types`
--

CREATE TABLE `event_types` (
  `etype_id` int(11) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `event_types`
--

INSERT INTO `event_types` (`etype_id`, `type`) VALUES
(3, '15 años'),
(2, 'Baby Shower'),
(1, 'Boda'),
(5, 'Cumpleaños'),
(6, 'Despedida de soltero'),
(4, 'Divorcio'),
(9, 'Estudiar valirio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `product_type` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `price` double(5,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_type`, `stock`, `price`, `image`) VALUES
(1, 'Globos verdes', 6, 45, 0.99, ''),
(2, 'Serpentinas', 6, 78, 0.99, ''),
(3, 'Cadenas', 4, 79, 0.99, '');

--
-- Disparadores `products`
--
DELIMITER $$
CREATE TRIGGER `binnacle_ad` AFTER DELETE ON `products` FOR EACH ROW INSERT INTO binnacle(action_performed, action_date) VALUES('Se ha retirado un producto del inventario, verifique.', NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products_events`
--

CREATE TABLE `products_events` (
  `pe_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_types`
--

CREATE TABLE `product_types` (
  `ptype_id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `product_types`
--

INSERT INTO `product_types` (`ptype_id`, `type`) VALUES
(6, 'Adornos colgantes'),
(7, 'Bebidas'),
(4, 'Con temática'),
(8, 'Desechables'),
(1, 'Manteles'),
(5, 'Pasteles'),
(3, 'Platos'),
(2, 'Vasos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(11) NOT NULL,
  `room_name` varchar(50) NOT NULL,
  `room_address` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rooms`
--

INSERT INTO `rooms` (`room_id`, `room_name`, `room_address`, `description`) VALUES
(1, 'Salón El Encanto', 'Avenida La Elegancia de Francia', 'Consta de segunda planta, piscina y terraza.'),
(2, 'Sala América', 'Mejicanos', 'Con piscina.'),
(3, 'Sala Europea', 'Calle El Progreso', 'Con tres plantas y terraza.'),
(4, 'Discoteca', 'Avenida El Café', 'Con pista de baile.'),
(5, 'Salón España', 'Avenida El Paraíso', 'Incluye fiesta.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `e_mail` varchar(50) NOT NULL,
  `dui` int(9) NOT NULL,
  `nit` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `name`, `last_name`, `e_mail`, `dui`, `nit`, `username`, `password`) VALUES
(1, 'Gaby', 'Ramos', 'gaby@gmail.com', 123456789, 789, 'Akat', '$2y$10$GbHSnkj0kMbnpfC93as3RuyfsqX9XyHr7MzpCugQIRIRTcOg/eKtW'),
(2, 'André', 'Candray', 'ca@gmail.com', 987654321, 456, 'Candray', '$2y$10$GbHSnkj0kMbnpfC93as3RuyfsqX9XyHr7MzpCugQIRIRTcOg/eKtW'),
(3, 'Sebastián', 'Jiménez', 'sebas@gmail.com', 654987321, 123, 'Sebas', '$2y$10$GbHSnkj0kMbnpfC93as3RuyfsqX9XyHr7MzpCugQIRIRTcOg/eKtW');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `binnacle`
--
ALTER TABLE `binnacle`
  ADD PRIMARY KEY (`action_id`);

--
-- Indices de la tabla `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indices de la tabla `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`),
  ADD UNIQUE KEY `phone_number` (`phone_number`),
  ADD UNIQUE KEY `e_mail` (`e_mail`),
  ADD UNIQUE KEY `dui` (`dui`),
  ADD UNIQUE KEY `nit` (`nit`);

--
-- Indices de la tabla `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `employe_in_charge` (`employe_in_charge`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `room_id` (`room_id`),
  ADD KEY `event_type` (`event_type`);

--
-- Indices de la tabla `event_types`
--
ALTER TABLE `event_types`
  ADD PRIMARY KEY (`etype_id`),
  ADD UNIQUE KEY `type` (`type`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `product_name` (`product_name`),
  ADD KEY `products_ibfk_1` (`product_type`);

--
-- Indices de la tabla `products_events`
--
ALTER TABLE `products_events`
  ADD PRIMARY KEY (`pe_id`),
  ADD KEY `event_id` (`event_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indices de la tabla `product_types`
--
ALTER TABLE `product_types`
  ADD PRIMARY KEY (`ptype_id`),
  ADD UNIQUE KEY `type` (`type`);

--
-- Indices de la tabla `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`),
  ADD UNIQUE KEY `room_name` (`room_name`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `e_mail` (`e_mail`),
  ADD UNIQUE KEY `dui` (`dui`),
  ADD UNIQUE KEY `nit` (`nit`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `binnacle`
--
ALTER TABLE `binnacle`
  MODIFY `action_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `event_types`
--
ALTER TABLE `event_types`
  MODIFY `etype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `products_events`
--
ALTER TABLE `products_events`
  MODIFY `pe_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `product_types`
--
ALTER TABLE `product_types`
  MODIFY `ptype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`employe_in_charge`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `events_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `events_ibfk_3` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `events_ibfk_4` FOREIGN KEY (`event_type`) REFERENCES `event_types` (`etype_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`product_type`) REFERENCES `product_types` (`ptype_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `products_events`
--
ALTER TABLE `products_events`
  ADD CONSTRAINT `products_events_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `events` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_events_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

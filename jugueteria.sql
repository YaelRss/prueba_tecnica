-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 16-02-2026 a las 10:00:15
-- Versión del servidor: 8.0.44
-- Versión de PHP: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `jugueteria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juguetes`
--

CREATE TABLE `juguetes` (
  `id` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `genero` enum('niño','niña','ambos') NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `juguetes`
--

INSERT INTO `juguetes` (`id`, `nombre`, `precio`, `genero`, `imagen`) VALUES
(1, 'Balón de Fútbol', 150.00, 'niño', 'https://m.media-amazon.com/images/I/71FYdVCqWeL._AC_SY300_SX300_QL70_ML2_.jpg'),
(2, 'Muñeca Clásica', 200.00, 'niña', 'https://m.media-amazon.com/images/I/61bFn7QK-rL._AC_SY300_SX300_QL70_ML2_.jpg'),
(3, 'Carro de Carreras', 120.50, 'niño', 'https://m.media-amazon.com/images/I/61Sm-lurB-L._AC_SX569_.jpg'),
(4, 'Set de Té', 90.00, 'niña', 'https://m.media-amazon.com/images/I/81iUU561+SL._AC_SY300_SX300_QL70_ML2_.jpg'),
(5, 'Juego de Mesa', 250.00, 'ambos', 'https://m.media-amazon.com/images/I/81C+KD7tdZL._AC_SY300_SX300_QL70_ML2_.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `juguetes`
--
ALTER TABLE `juguetes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `juguetes`
--
ALTER TABLE `juguetes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2024 a las 18:15:39
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cafetear`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `peso` varchar(50) NOT NULL,
  `varietal` varchar(50) NOT NULL,
  `notas` varchar(30) NOT NULL,
  `sensaciones` varchar(30) NOT NULL,
  `precio` varchar(50) NOT NULL,
  `portada` varchar(200) NOT NULL,
  `id_variedades` int(50) NOT NULL,
  `id_nacionalidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `nombre`, `peso`, `varietal`, `notas`, `sensaciones`, `precio`, `portada`, `id_variedades`, `id_nacionalidad`) VALUES
(1, 'Montivelo', '500 grs', 'Caturra y Typica', 'Caramelo ,Chocolate', 'Suave en Boca', '20000', '01-grano.jpg', 2, 2),
(2, 'Bistreo', '1000 grs', 'Mundo Novo', 'Manzana, Chocolate y Nuez', 'Strong', '17000', '02-grano.jpg', 2, 7),
(3, 'San Juan Valdez', '500 grs', 'Caturra y Bourbon', 'mandarina, miel y caña de azúc', 'delicado', '450000', '03-grano.jpg', 2, 7),
(4, 'Lavazza', '500 grs', 'Aromatica', 'madera', 'Notas de Nuez', '56000', '04-grano.jpg', 2, 4),
(5, 'Bonafide', '500 grs', 'caturra', 'Durazno, Nuez, Chocolate Amarg', 'Acidez baja y delicada, cuerpo', '20000', '05-grano.jpg', 2, 2),
(6, 'Bonafide', '1000 grs', 'Caturra - Catuai', 'Caña de azucar, Caramelo y ave', 'suave en boca', '30000', '06-grano.jpg', 2, 2),
(13, '5 Hispanos', '250 grs', 'moka', 'caramelo ,chocolate', 'acido', '9000', '07-torrado.jpg', 1, 3),
(14, 'Bonafide', '3 kgs', 'azuzu , durazno', 'Durazno y nuez', 'Complejo', '27000', '08-torrado.jpg', 1, 2),
(15, 'La Virginia', '500 grs', 'wine , blend', 'chocolate, miel', 'Robusto', '4000', '09-torrado.webp', 1, 5),
(16, '3 caracoes', '500 grs', 'Aromatica', 'frutos rojos', 'suave', '4000', '10-torrado.jpg', 1, 2),
(17, 'La Morenita', '500 grs', 'cazurra ,itau', 'mandarina y avellanas', 'delicada, cuerpo Alto', '37000', '11-torrado.jpg', 1, 7),
(18, 'Oro Negro', '500 grs', 'pache comun', 'Avellanas', 'suave en boca', '140000', '12-torrado.jpg', 1, 3),
(25, 'La Virginia', '500 grs', 'ypica', 'dulces y frutales', 'aspero en garganta', '20000', '13-tostado.jpg', 3, 2),
(26, 'La Virginia', '500 grs', 'pache colis', 'Manzana, chocolate y nuez', 'strong', '17000', '14-tostado.jpg', 3, 7),
(27, 'Martinez', '500 grs', 'scotish', 'limon y castañas', 'sabroso y suave', '33000', '15-tostado.jpg', 3, 2),
(28, 'Martinez', '500 grs', 'sativo', 'uva y miel', 'Fuerte', '66000', '16-tostado.jpg', 3, 4),
(29, 'Nescafe Gold', '250 grs', 'caturra', 'Chocolate', 'Notas dulces y Textura cremosa', '20000', '17-tostado.jpg', 3, 6),
(30, 'Cabrales', '500 grs', 'Catuai', 'Avellanas', 'suave en boca', '30000', '18-tostado.jpg', 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nacionalidad`
--

CREATE TABLE `nacionalidad` (
  `id` int(11) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `altura` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `nacionalidad`
--

INSERT INTO `nacionalidad` (`id`, `pais`, `altura`) VALUES
(1, 'Argentina', '1500 a 1700 mts'),
(2, 'Brasil', '500a a 750 mts'),
(3, 'Peru', '1000 a 1200 mts'),
(4, 'Italia', '500 a 800 mts'),
(5, 'Costa Rica', '1500 a 2000 mts'),
(6, 'Egipto', '300 a 700 mts'),
(7, 'Colombia', '2500 a 3500 mts');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `variedades`
--

CREATE TABLE `variedades` (
  `id` int(11) NOT NULL,
  `tipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `variedades`
--

INSERT INTO `variedades` (`id`, `tipo`) VALUES
(1, 'Torrado'),
(2, 'En Granos'),
(3, 'Tostado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pais` (`id_nacionalidad`),
  ADD KEY `fk_catalogo` (`id_variedades`);

--
-- Indices de la tabla `nacionalidad`
--
ALTER TABLE `nacionalidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `variedades`
--
ALTER TABLE `variedades`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `nacionalidad`
--
ALTER TABLE `nacionalidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `variedades`
--
ALTER TABLE `variedades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD CONSTRAINT `fk_catalogo` FOREIGN KEY (`id_variedades`) REFERENCES `variedades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pais` FOREIGN KEY (`id_nacionalidad`) REFERENCES `nacionalidad` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

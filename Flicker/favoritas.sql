-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-02-2020 a las 12:37:13
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `practicafotos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favoritas`
--

DROP TABLE IF EXISTS `favoritas`;
CREATE TABLE IF NOT EXISTS `favoritas` (
  `id` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `ruta` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `titulo` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `favoritas`
--

INSERT INTO `favoritas` (`id`, `ruta`, `titulo`) VALUES
('49585376788', 'http://farm66.static.flickr.com/65535/49585376788_7be8c8c582_m.jpg', 'Ecuador._Islas_Galápagos._Tortuga_Terrestre'),
('49585511407', 'http://farm66.static.flickr.com/65535/49585511407_ff1240df9d_m.jpg', 'Monterosso_Cinque_Terre_Italy_2018'),
('49586181278', 'http://farm66.static.flickr.com/65535/49586181278_9f42cab1c0_m.jpg', 'IMG_2814'),
('49586865197', 'http://farm66.static.flickr.com/65535/49586865197_b80dc3ec0a_m.jpg', 'Dry_Tortugas_Fort_Jefferson_National_Park'),
('49594370512', 'http://farm66.static.flickr.com/65535/49594370512_fd9370c12e_m.jpg', '2020_\"Blu_Nethuns\"_Lamborghini_Huracan_EVO_Spyder'),
('49594726308', 'http://farm66.static.flickr.com/65535/49594726308_aaf02d4e13_m.jpg', 'Gato_Siam_(14)');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

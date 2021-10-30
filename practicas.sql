-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-10-2021 a las 03:39:18
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `practicas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner`
--

CREATE TABLE `banner` (
  `id` int(10) NOT NULL,
  `bannerOne` varchar(100) DEFAULT NULL,
  `bannerTwo` varchar(100) DEFAULT NULL,
  `bannerThree` varchar(100) DEFAULT NULL,
  `bannerFourt` varchar(100) DEFAULT NULL,
  `bannerFive` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `banner`
--

INSERT INTO `banner` (`id`, `bannerOne`, `bannerTwo`, `bannerThree`, `bannerFourt`, `bannerFive`) VALUES
(1, 'bannerWeb/11.jpg', 'bannerWeb/work.gif', 'bannerWeb/10.jpg', 'bannerWeb/12.jpeg', 'bannerWeb/work.gif'),
(8, 'banner/foto3.jpeg', 'banner/foto4.jpeg', 'banner/foto5.jpeg', 'banner/foto5.jpg', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `id` int(10) NOT NULL,
  `nombreVideo` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urlVideo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`id`, `nombreVideo`, `urlVideo`, `fecha`) VALUES
(9, 'Las Rutinas En la escuela', 'https://www.youtube.com/embed/b34hwIWenyw', '24-10-2021 10:48 am'),
(12, 'Contando Cuentos', 'https://www.youtube.com/embed/8lcLhQFz6p8', '24-10-2021 11:02 am'),
(13, 'Inclusión en Educación Parvularia', 'https://www.youtube.com/embed/54MkWQAsfTQ', '24-10-2021 11:42 am'),
(14, 'AprendoTV - Lenguaje Verbal Pre-kinder y Kinder/ Capítulo 1', 'https://www.youtube.com/embed/liBq1JE23Co', '24-10-2021 9:06 pm'),
(15, 'AprendoTV - Pensamiento Matemático Pre-kinder y Kinder/ Capítulo 8', 'https://www.youtube.com/embed/VzP8pJsQfCU', '24-10-2021 9:11 pm'),
(20, 'Bienvenidos', 'https://www.youtube.com/embed/S8fgtqA_sfw', '24-10-2021 9:28 pm'),
(23, 'Geografía de Chile | Planeta Darwin | Ciencias naturales', 'https://www.youtube.com/embed/078cyJTNBPU', '24-10-2021 9:44 pm'),
(24, '¡Vamos 🔍a jugar! Con Mario y Ela - Cap. 15: Súper pingpong ¡de las palabras!', 'https://www.youtube.com/embed/3Sibmm53fOY', '24-10-2021 10:01 pm'),
(25, '¡Vamos 🔍a jugar! Con Mario y Ela - Cap. 16: Veo, veo... ¡qué palabra es!', 'https://www.youtube.com/embed/OCnQ59bj4fE', '24-10-2021 10:04 pm'),
(26, 'Cuento - La Laguna de los Pumas - Lee Chile Lee', 'https://www.youtube.com/embed/_2pG1TXwMF0', '25-10-2021 12:34 pm'),
(27, 'Cuando los moais caminaban: leyenda rapa nui, | Cuéntame un cuento', 'https://www.youtube.com/embed/c69IeyoISNs', '25-10-2021 12:40 pm'),
(28, 'Trabajo en equipo: Una competencia para la vida', 'https://www.youtube.com/embed/nGnpIWNIwYY', '26-10-2021 12:10 pm'),
(29, 'Partes de una planta | Camaleón', 'https://www.youtube.com/embed/zIDVm8_aLDI', '26-10-2021 12:37 pm');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

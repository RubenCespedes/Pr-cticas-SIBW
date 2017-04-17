-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 12-04-2017 a las 15:10:35
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `SIBW_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Etiqueta`
--

CREATE TABLE `Etiqueta` (
  `idEtiqueta` bigint(20) UNSIGNED NOT NULL,
  `nombreEtiqueta` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Etiqueta`
--

INSERT INTO `Etiqueta` (`idEtiqueta`, `nombreEtiqueta`) VALUES
(1, 'Real Madrid'),
(2, 'Liga Santander'),
(3, 'Deporte nacional'),
(4, 'Fútbol'),
(5, 'UEFA Champions League'),
(6, 'Copa del Rey');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Imagen`
--

CREATE TABLE `Imagen` (
  `idImagen` bigint(20) UNSIGNED NOT NULL,
  `ubicacion` varchar(21844) NOT NULL,
  `autor` tinytext NOT NULL,
  `lugar` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Noticia`
--

CREATE TABLE `Noticia` (
  `idNoticia` bigint(20) UNSIGNED NOT NULL,
  `titularExtendido` tinytext,
  `titularCorto` tinytext NOT NULL,
  `entradilla` varchar(21844) NOT NULL,
  `cuerpo` text NOT NULL,
  `autor` tinytext NOT NULL,
  `lugar` tinytext NOT NULL,
  `genero` enum('nacional','internacional','politica','deportes','tecnologia') NOT NULL,
  `tipo` enum('importante','destacada','normal','principal','secundaria') DEFAULT NULL,
  `fechaSubida` date NOT NULL,
  `horaActualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Noticia`
--

INSERT INTO `Noticia` (`idNoticia`, `titularExtendido`, `titularCorto`, `entradilla`, `cuerpo`, `autor`, `lugar`, `genero`, `tipo`, `fechaSubida`, `horaActualizacion`) VALUES
(1, NULL, 'San Cristiano sí que da miedo', 'El luso llega motivado a la fase que mejor se le da de la Champions', 'Europa es su escenario por excelencia. Donde se siente cómodo, donde muestra siempre su mejor versión y donde Cristiano Ronaldo se ha proclamado durante las últimas temporadas el auténtico rey. No hay prácticamente equipo que se le resista en octavos, y tampoco estadio. Una tradición que quiere seguir celebrando esta noche. Porque San Paolo arderá, pero no va a poder con Cristiano Ronaldo.\r\n\r\nEstá llamado a ser hoy el auténtico protagonista del partido. Primero, por su historial en octavos. Lleva cinco ediciones seguidas marcando en esta fase. El año pasado, eliminó con sus dos dianas -una en el Olímpico y la que cerró la eliminatoria en el Bernabéu- a la Roma, y ayudó así al Madrid a superar a un equipo italiano. Algo de lo que no habían sido capaces los blancos en las últimas ocho eliminatorias.\r\n\r\nAñadió entonces a su cuenta particular dos goles en los octavos de final de la competición europea. Dos que le permitieron alcanzar los 14 en las cinco últimas temporadas.\r\n\r\nEn la 14-15 y en la 13-14, un mismo rival sufrió el olfato goleador del luso. Le tocó al Schalke ver como en la primera eliminatoria les marcaba hasta cuatro goles, y aún conociendo su peligro, sufrieron otros tres el año siguiente. En la 12-13, disputó en octavos una de las eliminatorias más especiales para el portugués. El sorteo quiso que Cristiano se midiese a su Manchester United. Y el destino, que eliminase al conjunto que le había formado años antes. Marcó el gol del empate (1-1) en la ida en el Santiago Bernabéu, y el de la victoria (1-2) en Old Trafford en la vuelta. Lo mismo sucedió la temporada anterior. Cristiano disputó la fase posterior a la de grupos y vio puerta: tres goles frente al CSKA de Moscú, uno en Rusia y dos en Madrid.\r\n\r\nEl Lyon en la 10-11 fue el único equipo que no sufrió los goles del internacional luso en octavos como madridista. Firmó dos asistencias, pero no pudo ver puerta. Sin embargo, los franceses ya se habían enfrentado el curso pasado al Madrid con Cristiano, y en aquella ocasión, marcó un gol, aunque cayó eliminado.\r\n\r\nDescansado y motivado\r\n\r\nSu registro goleador en octavos no es el único motivo por el que Cristiano da miedo. Y es que el luso llega en una forma física inmejorable. Descansó el pasado sábado en Liga ante el Eibar y vuelve a Europa con la motivación extra del gol. La eliminatoria se presenta de cara para los blancos, que ganaron 3-1 en el Santiago Bernabéu, por lo que el delantero buscará sentenciarla y, de paso, seguir con su racha en octavos.\r\n\r\nIntentará, además, volver a su mejor versión en Champions. Es el máximo goleador de la competición, con 95 goles, pero esta campaña está siendo un tanto irregular. Lleva tan sólo dos goles -en fase de grupos ante Sporting y Dortmund-, una racha atípica en el portugués, y a la que quiere poner fin esta noche. San Cristiano sí da miedo.', 'Patricia Terroba', 'San Paolo', 'deportes', NULL, '2017-04-04', '2017-04-04 16:27:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `NoticiaContieneImagen`
--

CREATE TABLE `NoticiaContieneImagen` (
  `idNoticia` bigint(20) UNSIGNED NOT NULL,
  `idImagen` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `NoticiaTieneEtiqueta`
--

CREATE TABLE `NoticiaTieneEtiqueta` (
  `idNoticia` bigint(20) UNSIGNED NOT NULL,
  `idEtiqueta` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `NoticiaTieneEtiqueta`
--

INSERT INTO `NoticiaTieneEtiqueta` (`idNoticia`, `idEtiqueta`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Etiqueta`
--
ALTER TABLE `Etiqueta`
  ADD PRIMARY KEY (`idEtiqueta`),
  ADD UNIQUE KEY `idEtiqueta` (`idEtiqueta`);

--
-- Indices de la tabla `Imagen`
--
ALTER TABLE `Imagen`
  ADD PRIMARY KEY (`idImagen`),
  ADD UNIQUE KEY `idImagen` (`idImagen`);

--
-- Indices de la tabla `Noticia`
--
ALTER TABLE `Noticia`
  ADD PRIMARY KEY (`idNoticia`),
  ADD UNIQUE KEY `idNoticia` (`idNoticia`);

--
-- Indices de la tabla `NoticiaContieneImagen`
--
ALTER TABLE `NoticiaContieneImagen`
  ADD PRIMARY KEY (`idNoticia`,`idImagen`),
  ADD KEY `idImagen` (`idImagen`);

--
-- Indices de la tabla `NoticiaTieneEtiqueta`
--
ALTER TABLE `NoticiaTieneEtiqueta`
  ADD PRIMARY KEY (`idNoticia`,`idEtiqueta`),
  ADD KEY `idEtiqueta` (`idEtiqueta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Etiqueta`
--
ALTER TABLE `Etiqueta`
  MODIFY `idEtiqueta` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `Imagen`
--
ALTER TABLE `Imagen`
  MODIFY `idImagen` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Noticia`
--
ALTER TABLE `Noticia`
  MODIFY `idNoticia` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `NoticiaContieneImagen`
--
ALTER TABLE `NoticiaContieneImagen`
  ADD CONSTRAINT `NoticiaContieneImagen_ibfk_1` FOREIGN KEY (`idNoticia`) REFERENCES `Noticia` (`idNoticia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `NoticiaContieneImagen_ibfk_2` FOREIGN KEY (`idImagen`) REFERENCES `Imagen` (`idImagen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `NoticiaTieneEtiqueta`
--
ALTER TABLE `NoticiaTieneEtiqueta`
  ADD CONSTRAINT `NoticiaTieneEtiqueta_ibfk_1` FOREIGN KEY (`idEtiqueta`) REFERENCES `Etiqueta` (`idEtiqueta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `NoticiaTieneEtiqueta_ibfk_2` FOREIGN KEY (`idNoticia`) REFERENCES `Noticia` (`idNoticia`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2017 at 12:39 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elprofeta`
--

-- --------------------------------------------------------

--
-- Table structure for table `etiqueta`
--

CREATE TABLE `etiqueta` (
  `idEtiqueta` bigint(20) UNSIGNED NOT NULL,
  `nombreEtiqueta` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `etiqueta`
--

INSERT INTO `etiqueta` (`idEtiqueta`, `nombreEtiqueta`) VALUES
(1, 'Real Madrid'),
(2, 'Liga Santander'),
(3, 'Deporte nacional'),
(4, 'Fútbol'),
(5, 'UEFA Champions League'),
(6, 'Copa del Rey');

-- --------------------------------------------------------

--
-- Table structure for table `imagen`
--

CREATE TABLE `imagen` (
  `idImagen` bigint(20) UNSIGNED NOT NULL,
  `ubicacion` varchar(21844) NOT NULL,
  `autor` tinytext NOT NULL,
  `lugar` tinytext NOT NULL,
  `descripcion` varchar(21455) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imagen`
--

INSERT INTO `imagen` (`idImagen`, `ubicacion`, `autor`, `lugar`, `descripcion`) VALUES
(1, 'images/aficionado.jpg', 'Rubén Céspedes', 'Córdoba', 'Momento en el que los aficionados del Belgrano empujan desde la tribuna a Emanuel Balbo.'),
(2, 'images/ordenador.jpg', 'Google', 'Google', 'Ordenador'),
(3, 'images/fernandoalonso.jpg', 'Yo', 'Brasil', 'Sebastian Vettel celebra en Bahrein la victoria con su equipo'),
(4, 'images/atleticomadrid.jpg', 'Yo', 'Madrid', 'Antoine Griezmann lanza el penalti contra el Leicester en cuartos de la Champions '),
(5, 'images/zidane.jpg', 'Yo', 'Far Far Away', 'Zidane ');

-- --------------------------------------------------------

--
-- Table structure for table `noticia`
--

CREATE TABLE `noticia` (
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
-- Dumping data for table `noticia`
--

INSERT INTO `noticia` (`idNoticia`, `titularExtendido`, `titularCorto`, `entradilla`, `cuerpo`, `autor`, `lugar`, `genero`, `tipo`, `fechaSubida`, `horaActualizacion`) VALUES
(1, 'San Cristiano sí que da miedo', 'San Cristiano sí que da miedo', 'El luso llega motivado a la fase que mejor se le da de la Champions', 'Europa es su escenario por excelencia. Donde se siente cómodo, donde muestra siempre su mejor versión y donde Cristiano Ronaldo se ha proclamado durante las últimas temporadas el auténtico rey. No hay prácticamente equipo que se le resista en octavos, y tampoco estadio. Una tradición que quiere seguir celebrando esta noche. Porque San Paolo arderá, pero no va a poder con Cristiano Ronaldo.\r\n\r\nEstá llamado a ser hoy el auténtico protagonista del partido. Primero, por su historial en octavos. Lleva cinco ediciones seguidas marcando en esta fase. El año pasado, eliminó con sus dos dianas -una en el Olímpico y la que cerró la eliminatoria en el Bernabéu- a la Roma, y ayudó así al Madrid a superar a un equipo italiano. Algo de lo que no habían sido capaces los blancos en las últimas ocho eliminatorias.\r\n\r\nAñadió entonces a su cuenta particular dos goles en los octavos de final de la competición europea. Dos que le permitieron alcanzar los 14 en las cinco últimas temporadas.\r\n\r\nEn la 14-15 y en la 13-14, un mismo rival sufrió el olfato goleador del luso. Le tocó al Schalke ver como en la primera eliminatoria les marcaba hasta cuatro goles, y aún conociendo su peligro, sufrieron otros tres el año siguiente. En la 12-13, disputó en octavos una de las eliminatorias más especiales para el portugués. El sorteo quiso que Cristiano se midiese a su Manchester United. Y el destino, que eliminase al conjunto que le había formado años antes. Marcó el gol del empate (1-1) en la ida en el Santiago Bernabéu, y el de la victoria (1-2) en Old Trafford en la vuelta. Lo mismo sucedió la temporada anterior. Cristiano disputó la fase posterior a la de grupos y vio puerta: tres goles frente al CSKA de Moscú, uno en Rusia y dos en Madrid.\r\n\r\nEl Lyon en la 10-11 fue el único equipo que no sufrió los goles del internacional luso en octavos como madridista. Firmó dos asistencias, pero no pudo ver puerta. Sin embargo, los franceses ya se habían enfrentado el curso pasado al Madrid con Cristiano, y en aquella ocasión, marcó un gol, aunque cayó eliminado.\r\n\r\nDescansado y motivado\r\n\r\nSu registro goleador en octavos no es el único motivo por el que Cristiano da miedo. Y es que el luso llega en una forma física inmejorable. Descansó el pasado sábado en Liga ante el Eibar y vuelve a Europa con la motivación extra del gol. La eliminatoria se presenta de cara para los blancos, que ganaron 3-1 en el Santiago Bernabéu, por lo que el delantero buscará sentenciarla y, de paso, seguir con su racha en octavos.\r\n\r\nIntentará, además, volver a su mejor versión en Champions. Es el máximo goleador de la competición, con 95 goles, pero esta campaña está siendo un tanto irregular. Lleva tan sólo dos goles -en fase de grupos ante Sporting y Dortmund-, una racha atípica en el portugués, y a la que quiere poner fin esta noche. San Cristiano sí da miedo.', 'Patricia Terroba', 'San Paolo', 'deportes', NULL, '2017-04-04', '2017-04-04 16:27:00'),
(2, '¿Alguien cree en un nuevo milagro del Barcelona?', '¿Alguien cree en un nuevo milagro del Barcelona?', 'Ni el ambiente, ni la estadística, ni el juego apoyan la ilusión de remontar ante la Juventus', 'Algunos, unos cuantos, demasiados, subieron hasta el Monasterio de Montserrat. Otros, muchos, un número considerable, se bañaron en la playa de la Barceloneta en pleno mes de marzo. Y así, hasta cumplir todas las promesas por asistir a un milagro en el Camp Nou. No se abrió el césped y mucho menos el cielo, pero la remontada estratosférica ante el Paris Saint-Germain fue un milagro para los seguidores del Barcelona. Sin embargo, la fe ha decrecido. Se mantiene, de acuerdo, pero ya no es tan intensa. Tanto, que el club apuesta por espolear a su gente con un mosaico con el lema Més que un club... pero en inglés. ¿A qué se debe este desánimo?El equipo azulgrana llega al partido decisivo contra la Juventus ilusionado, pero embadurnado de barro y con tres puñales clavados en la espalda. Si hace tiempo disfrutó de tres semanas para hablar de la ristra de remontadas históricas y trazar un plan de escape hasta convertir al agnóstico en creyente, los últimos siete días han dado para contemplar las vergüenzas de un grupo que se mueve entre el jolgorio y la penuria.', 'Andrés Corpas', 'Barcelona', 'deportes', 'importante', '2017-04-17', '2017-04-18 00:00:00'),
(3, 'Muere el aficionado arrojado desde las gradas', 'Muere el aficionado arrojado desde las gradas', 'El padre de la víctima explica que su hijo reconoció al asesino de su hermano y éste incitó a la violencia al señalarle como simpatizante del equipo rival', 'Emanuel Balbo, el hincha de Belgrano golpeado por varios hombres y arrojado desde las gradas durante un partido disputado este sábado, falleció este lunes a los 22 años en el Hospital de Urgencias de Córdoba (Argentina). Raúl Balbo, padre de la víctima, confirmó la muerte, mientras la fiscal del caso, Liliana Sánchez, informó de la detención de cuatro personas -uno de ellos menor de edad- por \"homicidio agravado\". Además, Óscar Gómez, presunto autor intelectual del homicidio, se entregó también a la Justicia.Según confirmaron a Efe fuentes policiales, Gómez, conocido como \"Sapito\", se presentó el lunes por la tarde en la Jefatura de Policía de la provincia de Córdoba (centro) y reconoció haber instigado a varios aficionados a golpear a Emanuel Balbo, quien falleció tras varios días en estado crítico.El hincha de fútbol Emanuel Balbo fue lanzado por otros aficionados desde una tribuna del estadio Mario Alberto Kempes de la ciudad argentina de Córdoba. Los violentos eran radicales del Belgrano, que después de golpear a la víctima, la dejaron caer desde una altura de cinco metros. Rául Balbo, padre de Emanuel, relató los hechos en diálogo con el diario \'La Voz del Interior\': \"El problema se arma porque a mí hace cuatro años me mataron un hijo y él va a la cancha y se encuentra con uno de los que lo mataron. Ahí se arma el problema y como Óscar Gómez [uno de los que habían matado al hermano de Emanuel], en vez de defenderse solo, incitó a la violencia a todos los amigos que tenía ahí. Empezaron a pegarle y hacerle lo que le hicieron\".', 'Carlos Entrena', 'Córdoba', 'deportes', 'importante', '2017-04-11', '2017-04-10 00:00:00'),
(4, 'La guerra por los ordenadores baratos está a punto de empezar', 'La guerra por los ordenadores baratos está a punto de empezar', 'El mercado de los ordenadores baratos y conectados a Internet está creciendo y Microsoft quiere una porción de la tarta que se está comiendo Google', 'El próximo 2 de mayo, Microsoft presentará novedades sobre su hardware. Según los especialistas, se limitarán a una renovación de la gama Surface Pro y algún anuncio sobre HoloLens, su proyecto de realidad aumentada. Pero si los rumores son ciertos, la empresa se guarda una novedad importante de la que ya hemos hablado anteriormente: Windows 10 Cloud.Si las estimaciones se confirman, estaremos ante otro sistema operativo que funciona bien sin exigir mucha potencia al equipo y que permite hacer casi de todo, sea editar textos, fotografías o vídeos breves mientras se navega en Internet. Todo esto, sin depender demasiado de programas instalados en el propio ordenador. Es un cambio de paradigma que Google ha entendido muy bien y en el que lleva ventaja con los Chromebook. Sus portátiles no suelen pasar de los 500 euros (y los hay mucho más baratos), funcionan bien porque tiran de una versión modificada y sencilla de Android y tiene los servicios online de Google integrados. No tienen las capacidades de un ordenador clásico, pero es funcional.Resulta, sin embargo, que a mucha gente les basta con esto. A diferencia de los netbook de antaño, estos portátiles no son una basura ni una moda temporal: son un mercado que vuelve a ser jugoso gracias a lo que Google ha demostrado. De hecho, se sospecha que ese crecimiento de la industria de los ordenadores se debe a ellos, aunque no está del todo demostrado. Por ello, Microsoft no quiere perder terreno en el segmento del mundo de la tecnología donde todavía sigue teniendo una fuerza apabullante. Aunque todo el mundo tenga en más estima a los Mac, Windows sigue siendo el rey, pero no puede dormirse en los laureles. Y ahí entraría Windows 10 Cloud, un sistema operativo que depende de apps eficientes, lanzadas desde la tienda de Microsoft y que funcionen en ordenadores baratos sin tanta potencia. Tanto este Windows 10 Cloud como Chrome OS servirían de sobra a estudiantes que necesitan ordenadores eficientes como a profesionales con necesidad de un segundo equipo asequible, pero eficiente. La clave está en si se decantarán por usar Google Docs o Word. Ambos, curiosamente, funcionan muy bien en el iPad. No hay que olvidar que Apple sigue siendo una empresa de hardware y software fusionados y que también hacen ordenadores, o sustitutos de los mismos. No hay nada más que ver su publicidad más reciente: según ellos, el iPad Pro puede sustituir a un ordenador y hacer mejor muchas de las cosas para las que se usan portátiles. El entorno de iOS depende de apps, las cuales hay a patadas tras tantos años de existencia. ¿Es posible que Apple reoriente su gama de tablets profesionales para este fin ahora que el mercado de estos productos se está contrayendo? Los iPad Pro tendrán que bajar de precio, sin embargo, para poder competir realmente en este segmento, pues por 670 euros que cuesta el modelo de 9,7 pulgadas más básico (que no incluye teclado ni lápiz), no todo el mundo apostará por esta opción.Apple parece la menos preparada para tomar este segmento tan apetecible del mercado de los ordenadores, pero Microsoft tampoco las tiene todas consigo. Si se hace un Windows 10 Cloud que prescinda de los programas que no están en la Tienda del sistema operativo, habrá muchas bajas notables y el sistema operativo no será tan versátil como sus hermanos mayores. Curiosamente, en lo que a apps y soluciones se refiere, Apple sí tiene muchas alternativas. Google también tiene sus límites. Chrome OS depende demasiado del entorno de la compañía, y eso no funciona con todo el mundo, sobre todo, con las grandes empresas que necesitan seguridad u opciones más avanzadas. Sin embargo, su integración con Android y que puede ejecutar apps de móviles es una ventaja inmensa que podría decantar esta nueva guerra a favor de Google. De confirmarse los rumores de que la compañía trabaja en un nuevo sistema operativo heredero de Android que funcione igual de bien en móviles, tablets y ordenadores y que lo tendrá listo dentro de no demasiado, este nuevo terreno podría convertirse en una guerra muy dura entre las tres compañías de software más importantes del planeta. Microsoft revelará su jugada el próximo 2 de mayo, y a partir de lo que hagan, podremos empezar a vislumbrar si este conflicto será cruento y largo o si, en caso de que la compañía no apueste realmente por competir contra Google, se trate de una simple alternativa que no suplantará su sistema operativo más completo.', 'Bruno Toledano', 'Mi imaginación', 'tecnologia', 'destacada', '2017-04-18', '2017-04-18 11:00:00'),
(5, 'Ferrari: el recuerdo que hoy escuece a Fernando Alonso', 'Ferrari: el recuerdo que hoy escuece a Fernando Alonso', '\"Si ganan podría pensar que me equivoqué\", reconocía el asturiano al inicio de la pasada temporada, en referencia a su marcha de la escudería italiana', 'Recuerda el anecdotario de la Fórmula 1, caprichoso en ocasiones, que el último piloto capaz de remontar en Bahrein desde la tercera posición de la parrilla hasta la victoria fue Fernando Alonso. Ocurrió en el arranque del Mundial 2010, primer capítulo del asturiano con Ferrari. Un fulgurante regreso a la élite tras su paréntesis de dos años en Renault. Aquella mañana en Sakhir, Alonso se deshizo de Sebastian Vettel, la pole, y Felipe Massa, su compañero, abriendo pista hacia su primera batalla frustrada por el anhelado tricampeonato.Siete años después, Vettel repitió la escena. Apartado de la primera línea de la parrilla por los Mercedes, mandó a la cuneta a Hamilton y Bottas para trepar por segunda vez en la temporada al primer pedestal del podio. Un golpe certero y sonoro en un campeonato donde, ahora mismo, el rojo asusta tanto como lo ha hecho el color plata en el último trienio. Ferrari vuelve a mandar igual que lo hizo cuando Alonso llevaba el timón. Entonces murió en la orilla en dos ocasiones -2010 y 2012-. Ambas, vencido por Vettel.«Si gana Ferrari podría pensar que me equivoqué, pero es un condicional demasiado grande en estos momentos». La cita pertenece al Alonso que iniciaba el Mundial 2016. El Alonso convencido de la decisión tomada en el verano de 2014, cuando dio por cerrada su etapa como icono ferrarista. Ni la desesperante aventura de 2015, en su vuelta a la escudería británica, ni la oscuridad que se atisbaba para el futuro le habían hecho dudar de la decisión tomada. El Ferrari que dejó como legado sólo ganó tres carreras, todas en 2015, todas de la mano de Vettel. El curso pasado, apenas hubo rastro del cavallino. Tal vez porque en silencio, sin levantar sospecha, preparaban la revolución con la que el asturiano había soñado para 2017. Ese campeonato, este Mundial, siempre fue el pretexto perfecto de Honda y McLaren para mantener viva la alegría de su fichaje estrella.', 'Carlos Entrena', 'Brasil', 'deportes', 'destacada', '2017-04-03', '2017-04-04 00:00:00'),
(6, 'Los penaltis, la debilidad del Atlético de Madrid', 'Los penaltis, la debilidad del Atlético de Madrid', 'El 50% que da el azar es superior al acierto en los penaltis del Atlético en lo que va de curso\r\n', 'Entre los periodistas que siguen habitualmente la información del Atlético de Madrid hay bromas. Incluso hay alguna lista por ahí sobre quién es el que más veces ha recibido un monosílabo de Simeone en una rueda de prensa. Al entrenador argentino, si se le da opción y la pregunta no le gusta, resuelve con un \"no\" o con un \"sí\", de ahí que el planteamiento necesite de vez en cuando de algún requiebro añadido. El pasado sábado, tras el partido contra Osasuna, dos penaltis más fallados, los periodistas trataron de averiguar si lo de este equipo con ese tipo de lanzamientos era ya cuestión de suerte. O de mala suerte. \"No\", respondió el argentino.Suerte o no, mala suerte o tampoco, lo cierto es que los penaltis, desde la final de Milán, son un problema en este equipo. Allí, en San Siro, Griezmann falló en la segunda parte y Juanfran lo hizo en la tanda. Desde entonces, los números son desoladores. El Atlético ha errado los seis últimos penaltis que ha lanzado en Liga, y de la totalidad de 13 de los que ha dispuesto, apenas ha convertido cinco. Esos errores en Liga se ven compensados, por buscar una arista positiva, en Champions. Dos lanzamientos, dos aciertos (Gameiro ante el Leverkusen y Griezmann en la ida ante el Leicester).Junto a ellos dos, sólo Saúl (en Copa contra el Guijuelo) y Torres (en Liga ante el Sporting) han llevado el balón a la red desde los 11 metros. El resto, un desastre: Gameiro contra el Barcelona en Copa, Torres contra el Celta, Carrasco y Thomas contra Osasuna, Griezmann y Gabi contra el Valencia y de nuevo el francés en el partido contra el Leganés. En resumen: las matemáticas dicen que este equipo mete el 38,4% de los penaltis que tira. Llevado esto al absurdo, no sería mentir decir que un lanzamiento de moneda al aire le daría más opciones de pasar (50%) contra el Leicester.Simeone insiste en su teoría de que ensayarlos no sirve de nada porque un entrenamiento no tiene la tensión ni el ambiente de un partido, aunque sus jugadores en las últimas semanas han practicado algo más. «Claro que lo hablamos en el vestuario, pero qué le vas a hacer. Es una acción individual, ajena al juego», dice Godín.', 'Eduardo', 'Madrid', 'deportes', 'destacada', '2017-04-15', '2017-04-15 00:00:00'),
(7, 'Zidane y Ancelotti, dos entrenadores en deuda', 'Zidane y Ancelotti, dos entrenadores en deuda', 'Zidane y Ancelotti', 'Ancelotti se siente tan orgulloso de sus libros como de sus títulos. Se le nota cuando habla de ellos. Al leerlos, a uno le asalta la duda de si habla sobre fútbol o sobre la vida a través del fútbol. Aborda la relación con los jugadores y con los presidentes, que es la más próxima a la relación con el dinero. En ambas pueden encontrarse buena parte de las claves de la relación de los hombres, en general. Sólo faltan las mujeres. Al mismo tiempo, Ancelotti describe la relación que mantiene consigo mismo, el peso de la enseñanza que supuso la vida de su padre, un campesino que le transmitió lo insignificantes que somos frente a lo inexorable, como el clima, y los prejuicios de los que se ha sabido desprenderse con el tiempo. Al referirse a esto último es cuando señala a Zidane, porque su talento le hizo anteponer el jugador al sistema, durante las dos temporadas de cohabitación en la Juventus.', 'Orfeo', 'Madrid', 'deportes', 'destacada', '2017-04-14', '2017-04-14 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `noticiacontieneimagen`
--

CREATE TABLE `noticiacontieneimagen` (
  `idNoticia` bigint(20) UNSIGNED NOT NULL,
  `idImagen` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `noticiacontieneimagen`
--

INSERT INTO `noticiacontieneimagen` (`idNoticia`, `idImagen`) VALUES
(3, 1),
(4, 2),
(5, 3),
(6, 4),
(7, 5);

-- --------------------------------------------------------

--
-- Table structure for table `noticiatieneetiqueta`
--

CREATE TABLE `noticiatieneetiqueta` (
  `idNoticia` bigint(20) UNSIGNED NOT NULL,
  `idEtiqueta` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `noticiatieneetiqueta`
--

INSERT INTO `noticiatieneetiqueta` (`idNoticia`, `idEtiqueta`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(2, 1),
(2, 3),
(2, 4),
(3, 3),
(3, 4),
(3, 5),
(5, 3),
(6, 3),
(6, 4),
(6, 5),
(6, 6),
(7, 1),
(7, 3),
(7, 4),
(7, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `etiqueta`
--
ALTER TABLE `etiqueta`
  ADD PRIMARY KEY (`idEtiqueta`),
  ADD UNIQUE KEY `idEtiqueta` (`idEtiqueta`);

--
-- Indexes for table `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`idImagen`),
  ADD UNIQUE KEY `idImagen` (`idImagen`);

--
-- Indexes for table `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`idNoticia`),
  ADD UNIQUE KEY `idNoticia` (`idNoticia`);

--
-- Indexes for table `noticiacontieneimagen`
--
ALTER TABLE `noticiacontieneimagen`
  ADD PRIMARY KEY (`idNoticia`,`idImagen`),
  ADD KEY `idImagen` (`idImagen`);

--
-- Indexes for table `noticiatieneetiqueta`
--
ALTER TABLE `noticiatieneetiqueta`
  ADD PRIMARY KEY (`idNoticia`,`idEtiqueta`),
  ADD KEY `idEtiqueta` (`idEtiqueta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `etiqueta`
--
ALTER TABLE `etiqueta`
  MODIFY `idEtiqueta` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `imagen`
--
ALTER TABLE `imagen`
  MODIFY `idImagen` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `noticia`
--
ALTER TABLE `noticia`
  MODIFY `idNoticia` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `noticiacontieneimagen`
--
ALTER TABLE `noticiacontieneimagen`
  ADD CONSTRAINT `NoticiaContieneImagen_ibfk_1` FOREIGN KEY (`idNoticia`) REFERENCES `noticia` (`idNoticia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `NoticiaContieneImagen_ibfk_2` FOREIGN KEY (`idImagen`) REFERENCES `imagen` (`idImagen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `noticiatieneetiqueta`
--
ALTER TABLE `noticiatieneetiqueta`
  ADD CONSTRAINT `NoticiaTieneEtiqueta_ibfk_1` FOREIGN KEY (`idEtiqueta`) REFERENCES `etiqueta` (`idEtiqueta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `NoticiaTieneEtiqueta_ibfk_2` FOREIGN KEY (`idNoticia`) REFERENCES `noticia` (`idNoticia`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-07-2016 a las 22:24:26
-- Versión del servidor: 5.5.45-cll
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bolpascl_bolpas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(20) NOT NULL,
  `texto` varchar(2000) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`,`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `precio` varchar(20) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `cantidad`, `imagen`, `modelo`, `marca`, `descripcion`) VALUES
(30, 'Bolsa Thomas Junior 1216-1516 y 1616', '13.000', 3, '20130730_134403 - copia.jpg', '60 cm x 30 cm', 'Thomas', 'Para los modelos Thomas Junior 1216, 1516 y 1616. Bolsa 100% lavable, con boquilla de goma.'),
(31, 'Bolsa para Aspiradoras Rowenta', '13.000', 3, '../imagenes/WP_20140508_22_53_29_Pro.jpg', '60 cm x 30 cm', 'Rowenta', 'Bolsa para los modelos AGPO, RU101, RU010, RU386 y H2PO. Bolsas 100% lavables para aspiradoras ya descontinuadas.'),
(32, 'Bolsa pequeÃ±a para aspiradoras Thomas', '10.000', 3, 'WP_20141119_007.jpg', '35 cm x 25 cm', 'Thomas', 'Bolsa pequeÃ±a para los modelos Thomas Junior 1216, 1516 y 1616. La bolsa es 100% lavable. Oferta de 2 bolsas x $16.000'),
(33, 'Bolsa para Aspiradoras Karcher Modelo1', '12.000', 0, '../imagenes/20150924_163213.jpg', '25 cm x 25 cm', 'Karcher', 'Bolsa para los modelos WD 2.000 a WD 2.399 y MV2. Bolsa 100% lavable, con boquilla de goma. La mejor alternativa a la bolsa de papel que trae la aspiradora.'),
(34, 'Bolsa para Aspiradoras Ridgid WD0671', '13.000', 3, '../imagenes/20130701_140332.jpg', '60 cm x 30 cm', 'Ridgid', 'Producto EXCLUSIVO. Bolsa 100% lavable. Te permitirÃ¡ mantener el filtro de la aspiradora limpio. Mira lo que sucede cuando el filtro estÃ¡ sucio https://youtu.be/KwV_xxX-x4c'),
(35, 'Bolsa para Aspiradoras Ridgid WD4070 y WD4075', '12.000', 3, '20151206_193657040.jpg', '60 cm x 20 cm', 'Ridgid', 'Producto EXCLUSIVO. Bolsa 100% lavable. Te permitirÃ¡ mantener el filtro de la aspiradora limpio mientras el polvo lo captura la bolsa. El filtro sufrirÃ¡ menos desgaste y te durarÃ¡ mas tiempo.'),
(36, 'Bolsa Einhell VC1420-VC1815-VC1820', '13.000', 3, '../imagenes/einhell.jpg', '60 cm x 30 cm', 'Einhell', 'Bolsa para los modelos VC1820 - VC1815 y VC1420. Bolsa 100% lavable. Es de una calidad muy superior a la bolsa original de papel de la aspiradora.'),
(37, 'Bolsa Para Aspiradoras Ridgid WD1270', '15.000', 1, '../imagenes/20130701_140332.jpg', '70 cm x 40 cm', 'Ridgid', 'Producto EXCLUSIVO. Bolsa 100% lavable. Te permitirÃ¡ mantener el filtro de la aspiradora limpio mientras el polvo lo captura la bolsa. El filtro sufrirÃ¡ menos desgaste y te durarÃ¡ mas tiempo.'),
(38, 'Bolsa Para Aspiradoras Ridgid WD1680', '17.000', 1, '../imagenes/20130701_140405.jpg', '90 cm x 40 cm', 'Ridgid', 'Producto EXCLUSIVO. Bolsa 100% lavable. Te permitirÃ¡ mantener el filtro de la aspiradora limpio mientras el polvo lo captura la bolsa. El filtro sufrirÃ¡ menos desgaste y te durarÃ¡ mas tiempo.'),
(39, 'Bolsa Para Aspiradoras Somela Aquadry 1400', '13.000', 1, '../imagenes/somela_aquadry1400.jpg', '50 cm x 40 cm', 'Somela', 'Potencia tu aspiradora con nuestra bolsa ya que es de una calidad muy superior a la bolsa original y retiene mas eficientemente el polvo.'),
(40, 'Bolsa Para Aspiradoras Somela Ultraclean 1700', '13.000', 1, '../imagenes/bolsa-para-aspiradora-somela-ultraclean-1700-14552-MLC20087437122_042014-O.jpg', '60 cm x 30 cm', 'Somela', 'Bolsa 100% lavable, con boquilla de goma.'),
(41, 'Bolsa para Aspiradoras Karcher Modelo 2', '13.000', 1, '../imagenes/wd3500.jpg', '60 cm x 30 cm', 'Karcher', 'Bolsa para los modelos WD 3.200 a WD 3.500 P y MV3 Premium. Bolsa 100% lavable, con boquilla de goma. La mejor alternativa a la bolsa de papel.'),
(42, 'Bolsa para Aspiradoras Karcher Modelo 3', '13.000', 1, '../imagenes/bolsas-para-aspiradoras-karcher-modelos-wd4000-a-wd-5999.jpg', '60 cm x 30 cm', 'Karcher', 'Bolsa para los modelos WD 4.000 WD 5.999. Bolsa 100% lavable, con boquilla de goma. La mejor alternativa a la bolsa de papel.'),
(43, 'Bolsa Para Aspiradoras Lux DP9000', '15.000', 1, '../imagenes/dp_9000.jpg', '95 cm x 25 cm', 'Lux', 'Este modelo de aspiradora que esta descontinuado, usaba una bolsa de papel que el distribuidor ya no vende. Extiende la vida Ãºtil de tu aspiradora usando nuestras bolsas de gÃ©nero, 100% lavable.'),
(44, 'Bolsa Para Aspiradoras Bosch Amphibix 1200', '13.000', 1, '../imagenes/bolsa-para-aspiradoras-modelo-bosch-amphibixx-.jpg', '60 cm x 30 cm', 'Bosch', 'Bolsas 100% lavables para esta aspiradora ya descontinuada.'),
(45, 'Protector de Filtro para Aspiradoras Ridgid', '13.000', 0, '../imagenes/CM150726-221305002.jpg', 'Filtro Protector', 'Ridgid', 'Producto Exclusivo. Con nuestro protector, alargaras la vida Ãºtil del filtro. FÃ¡cil de instalar y lavar.'),
(46, 'Bolsa Para Apiradoras Electrolux Flex Green', '12.000', 1, '../imagenes/electrolux-flex-green.jpg', '60 cm x 20 cm', 'Electrolux', 'Modelo EXCLUSIVO. Este modelo de aspiradora originalmente no trae bolsa. Pero a pedido de nuestros clientes le hemos diseÃ±ado una, solucionando el problema que su falta ocasiona.'),
(47, 'Bolsa para Aspiradoras Karcher Modelo 4', '15.000', 1, '../imagenes/bolsa-para-aspiradoras-karcher-modelos-nt-652-hasta-nt-722.jpg', '40 cm x 90 cm', 'Karcher', 'Bolsa para los modelos NT65/2 hasta NT 72/2. Bolsa 100% lavable, con boquilla de goma.'),
(48, 'Bolsa para Aspiradora Luster BF575', '15.000', 1, '20151207_130545736.jpg', '70 cm x 40 cm', 'Luster', 'Producto EXCLUSIVO. Bolsa 100% lavable. Te permitirÃ¡ mantener el tambor de la aspiradora limpio mientras el polvo lo captura la bolsa, facilitando la limpieza de la aspiradora.'),
(49, 'Bolsa para Aspiradora Bauker 18 litros', '10.000', 1, '../imagenes/Bauker 18.jpg', '25 cm x 25 cm Aproxi', 'Bauker', 'Para usar esta bolsa se necesita la boquilla de plÃ¡stico que trae la bolsa de papel que viene con la aspiradora. '),
(50, 'Bolsa Para Apiradoras Lux D775', '20.000', 1, '../imagenes/PHOTO_20160103_221424.jpg', '30 cm x 32 cm', 'Lux', 'Bolsa 100% lavable. Pack de dos bolsas reutilizables. DiseÃ±ada para las aspiradoras descontinuadas D775.'),
(51, 'Bolsa Einhell VC 2230', '15.000', 2, '../imagenes/EINHELL-TE-VC-2230-SA.jpg', '70 cm x 40 cm', 'Einhell', 'Bolsa 100% lavable, con boquilla de goma. La mejor alternativa a la bolsa de papel que trae la aspiradora.'),
(52, 'Bolsa Para Apiradoras Stanley 4.5 HP 7 gallon', '13.000', 1, '../imagenes/Stanley 4.5hp.jpg', '60 cm x 30 cm', 'Stanley', 'Bolsa 100% lavable. DiseÃ±ada para las aspiradoras descontinuadas de esta marca.'),
(53, 'Bolsa Einhell VC1925-VC1930', '15.000', 1, 'Einhell_VC-1925-SA.jpg', '70 cm x 40 cm', 'Einhell', 'Bolsa 100% lavable, con boquilla de goma. La mejor alternativa a la bolsa de papel que trae la aspiradora.'),
(54, 'Bolsa Aquafilter TH-1420', '13.000', 1, '../imagenes/1420.png', '60 cm x 30 cm', 'Thomas', 'Las aspiradoras modelos Aquafilter Biovac TH-1420 y TH-1220 tambiÃ©n pueden ser usadas con bolsa para capturar el polvo en vez de agua.'),
(55, 'Bolsa Para Apiradoras Michelin VCX 20 1200 L ABS', '15.000', 1, '../imagenes/Aspiradora VCX 20-1200 L ABS.jpg', '70 cm x 40 cm', 'Michelin', 'Bolsa 100% lavable, con boquilla de goma. La mejor alternativa a la bolsa de papel que trae la aspiradora.'),
(56, 'Bolsa Para Apiradoras Michelin VCX 20-1200 ABS', '13.000', 1, '../imagenes/Aspiradora VCX 20-1200 ABS.jpg', '60 cm x 30 cm', 'Michelin', 'Bolsa 100% lavable, con boquilla de goma. La mejor alternativa a la bolsa de papel que trae la aspiradora.'),
(57, 'Bolsa Para Apiradoras Michelin VCX 24-1250 Inox', '13.000', 1, '../imagenes/Aspiradora VCX 24-1250 Inox.jpg', '60 cm x 30 cm', 'Michelin', 'Bolsa 100% lavable, con boquilla de goma. La mejor alternativa a la bolsa de papel que trae la aspiradora.'),
(58, 'Boquilla de Rincones para Aspiradoras Ridgid VT2502 2 1/2', '5.000', 7, '../imagenes/Vt2502(2).jpg', 'VT2502', 'Ridgid', 'Para los siguientes modelos WD1270-WD1450WD-WD1680'),
(59, 'Bolsa para Aspiradora Electrolux A10', '13.000', 2, '../imagenes/Electrolux-A10s--1-.jpg', '60 cm x 30 cm', 'Electrolux', 'Bolsa 100% lavable, con boquilla de goma. La mejor alternativa a la bolsa de papel que trae la aspiradora.'),
(60, 'Cepillo Para Aspiradora Ridgid VT 2501 De 2 1/2', '8.000', 4, '../imagenes/cepillo_vt2501_2.5.jpg', 'VT 2501', 'Ridgid', 'Cepillo para desempolvar Modelo VT2501 de 2 1/2'),
(61, 'Bolsa para Aspiradora Thomas TH-1410', '15.000', 2, '../imagenes/th-1410.jpg', 'TH-1410', 'Thomas', 'Bolsa 100% lavable. Pack de dos bolsas reutilizables.'),
(62, 'Bolsa para Aspiradora Thomas TH-1620', '17.000', 4, '../imagenes/th-1620.jpg', 'TH-1620', 'Thomas', 'Bolsa 100% lavable. Pack de dos bolsas reutilizables.'),
(63, 'Bolsa para Aspiradora Thomas TH-2210', '17.000', 2, '../imagenes/th-2210.jpg', 'TH-2210', 'Thomas', 'Bolsa 100% lavable. Pack de dos bolsas reutilizables.'),
(64, 'Bolsa para Aspiradora Sindelen Force Duster 2.000', '17.000', 2, '../imagenes/Sindelen_Force_duster.jpg', 'Force Duster 2.000', 'Sindelen', 'Bolsa 100% lavable.Pack de dos bolsas reutilizables. Bolsa de mejor capacidad de retenciÃ³n de polvo que la original de la marca.'),
(65, 'Bolsa para Aspiradora Toyotomi Eco Balance II', '17.000', 2, '../imagenes/Toyotomi_ECO_BALANCE22_1000.jpg', 'Eco Balance II', 'Toyotomi', 'Bolsa 100% lavable. Pack de dos bolsas reutilizables. Bolsa de mejor capacidad de retenciÃ³n de polvo que la original de la marca.'),
(66, 'Bolsa para Aspiradora Somela Aqua Solid 1500', '12.000', 2, '../imagenes/Somela_Aquasolid_1500.jpg', '60 cm x 20 cm', 'Somela', 'Bolsa 100% lavable. Facilita la retenciÃ³n de polvo y disposiciÃ³n de la basura mucho mejor que el filtro de canasto original.'),
(67, 'Bolsa para Aspiradora Thomas TH-1405', '15.000', 2, '../imagenes/th-1405.jpg', 'TH-1405', 'Thomas', 'Bolsa 100% lavable. Pack de dos bolsas reutilizables.'),
(68, 'Bolsa para Aspiradora Somela Power Duster 1600', '15.000', 1, 'PHOTO_20160625_202750.jpg', 'Power Duster 1600', 'Somela', 'Bolsa 100% lavable. Pack de dos bolsas reutilizables. Bolsa de mejor capacidad de retenciÃ³n de polvo que la original de la marca.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcoment`
--

CREATE TABLE IF NOT EXISTS `subcoment` (
  `subID` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL DEFAULT '',
  `texto` varchar(1000) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`subID`,`id`,`usuario`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `correo` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `tipo` varchar(2) DEFAULT 'c',
  `apellido` varchar(20) NOT NULL,
  PRIMARY KEY (`correo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`correo`, `password`, `nombre`, `tipo`, `apellido`) VALUES
('oscar@gmail.com', '301192', 'oscar', 'a', 'roman');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `subcoment`
--
ALTER TABLE `subcoment`
  ADD CONSTRAINT `subcoment_ibfk_1` FOREIGN KEY (`id`) REFERENCES `comentarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

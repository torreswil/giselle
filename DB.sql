-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.5.10 - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             8.0.0.4396
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura de base de datos para babyshower
DROP DATABASE IF EXISTS `babyshower`;
CREATE DATABASE IF NOT EXISTS `babyshower` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `babyshower`;


-- Volcando estructura para tabla babyshower.invitados
DROP TABLE IF EXISTS `invitados`;
CREATE TABLE IF NOT EXISTS `invitados` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `prefijo` varchar(100) NOT NULL,
  `decariño` varchar(100) NOT NULL,
  PRIMARY KEY (`id`,`clave`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla babyshower.invitados: ~6 rows (aproximadamente)
DELETE FROM `invitados`;
/*!40000 ALTER TABLE `invitados` DISABLE KEYS */;
INSERT INTO `invitados` (`id`, `nombre`, `clave`, `prefijo`, `decariño`) VALUES
	(1, 'Jose y Oliva', '48kj1', 'Queridos', 'abuelos'),
	(2, 'Martha', 'lq128', 'Querida', 'abuela'),
	(3, 'Francela', 'mh35p', 'querida', 'tia'),
	(4, 'Dairo', 'dt125', 'querido', 'tio'),
	(5, 'Sergio', 'chapatin12', 'Estimado', ''),
	(6, 'Jonathan', 'unido2013', 'Estimado', '');
/*!40000 ALTER TABLE `invitados` ENABLE KEYS */;


-- Volcando estructura para tabla babyshower.regalos
DROP TABLE IF EXISTS `regalos`;
CREATE TABLE IF NOT EXISTS `regalos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `regalo` varchar(50) NOT NULL,
  `lugar` varchar(50) DEFAULT NULL,
  `link` varchar(50) DEFAULT NULL,
  `estado` bit(1) NOT NULL,
  `quien` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_regalos_invitados` (`quien`),
  CONSTRAINT `FK_regalos_invitados` FOREIGN KEY (`quien`) REFERENCES `invitados` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla babyshower.regalos: ~41 rows (aproximadamente)
DELETE FROM `regalos`;
/*!40000 ALTER TABLE `regalos` DISABLE KEYS */;
INSERT INTO `regalos` (`id`, `regalo`, `lugar`, `link`, `estado`, `quien`) VALUES
	(1, 'Aspirador Nasal', '', 'aspirador nasa.jpg', b'10000000', 6),
	(2, 'Baberos', NULL, 'baberos.jpg', b'10000000', 6),
	(3, 'Bañera', NULL, 'bañera.jpg', b'10000000', 4),
	(4, 'Cargador Canguro', NULL, 'cargador canguro.jpg', b'10000000', 4),
	(5, 'Casco Protector', NULL, 'casco protector.jpg', b'10000000', 4),
	(6, 'Cobija Fresca', NULL, 'Cobija fresca.jpg', b'10000000', 4),
	(7, 'Cobija', NULL, 'cobija.jpg', b'00000000', NULL),
	(8, 'Coche', NULL, 'Coche.jpg', b'00000000', NULL),
	(9, 'colcha cambiadora', NULL, 'colcha cambiadora.jpg', b'00000000', NULL),
	(10, 'Colchoneta sencilla.jpg', NULL, 'Colchoneta sencilla.jpg', b'00000000', NULL),
	(11, 'Cukos', NULL, 'cukos.jpg', b'00000000', NULL),
	(12, 'Kit de baño', NULL, 'kit de baño.jpg', b'00000000', NULL),
	(13, 'Kit manicura', NULL, 'kit manicura.jpeg', b'00000000', NULL),
	(14, 'Mamelucos', NULL, 'mamelucos.jpg', b'00000000', NULL),
	(15, 'Mica para Baño', NULL, 'mica para baño.jpg', b'00000000', NULL),
	(16, 'Pañalera colgante', NULL, 'Pañalera colgante.jpg', b'00000000', NULL),
	(17, 'Pañales de Tela', NULL, 'Pañales de Tela.jpg', b'00000000', NULL),
	(18, 'Pañales Etapa Cero', NULL, 'pañales etapa cero.jpg', b'00000000', NULL),
	(19, 'Pañales Etapa Cero', NULL, 'pañales etapa cero.jpg', b'00000000', NULL),
	(20, 'Pañales Etapa Cero', NULL, 'pañales etapa cero.jpg', b'00000000', NULL),
	(21, 'Pañales Etapa 2', NULL, 'pañales etapa 2.jpg', b'00000000', NULL),
	(22, 'Pañales Etapa 2', NULL, 'pañales etapa 2.jpg', b'00000000', NULL),
	(23, 'Pañales Etapa 3', NULL, 'Pañales etapa 3.jpg', b'00000000', NULL),
	(24, 'Camacuna', NULL, 'camacuna.jpg', b'10000000', NULL),
	(25, 'Lenceria Camacuna', NULL, 'lenceria camacuna.jpg', b'10000000', NULL),
	(26, 'Pañales Etapa 3', NULL, 'Pañales Etapa 3.jpg', b'00000000', NULL),
	(27, 'Pantalon Pijama', NULL, 'Pantalon Pijama.jpg', b'00000000', NULL),
	(28, 'Piscina', NULL, 'Picina.jpg', b'00000000', NULL),
	(29, 'Pijamas', NULL, 'pijamas.jpg', b'00000000', NULL),
	(30, 'Primera Muda', NULL, 'primera muda.jpg', b'00000000', NULL),
	(31, 'Protectores Lactancia', NULL, 'Protectores de Lactancia.png', b'00000000', NULL),
	(32, 'Sandalias', NULL, 'sandalias.jpg', b'00000000', NULL),
	(33, 'Semanario', NULL, 'Semanario.jpg', b'00000000', NULL),
	(34, 'Silla Comedor', NULL, 'silla comedor.jpg', b'00000000', NULL),
	(35, 'Sonajero', NULL, 'sonajero.jpg', b'00000000', NULL),
	(36, 'Sonajero para Cuna', NULL, 'Sonajeros para Cuna.jpg', b'00000000', NULL),
	(37, 'Termometro Digital', NULL, 'termometro digital.jpg', b'00000000', NULL),
	(38, 'Teteros', NULL, 'teteros.jpg', b'00000000', NULL),
	(39, 'Toalla y Salida de Baño', NULL, 'toalla y salida de baño.jpg', b'00000000', NULL),
	(40, 'Toalla', NULL, 'Toalla.jpg', b'00000000', NULL),
	(41, 'Pañitos Humedos', NULL, 'Toallitas.jpg', b'00000000', NULL);
/*!40000 ALTER TABLE `regalos` ENABLE KEYS */;


-- Volcando estructura para vista babyshower.vistaregalos
DROP VIEW IF EXISTS `vistaregalos`;
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `vistaregalos` (
	`regalo` VARCHAR(50) NOT NULL COLLATE 'utf8_general_ci',
	`nombre` VARCHAR(100) NOT NULL COLLATE 'utf8_general_ci'
) ENGINE=MyISAM;


-- Volcando estructura para vista babyshower.vistaregalos
DROP VIEW IF EXISTS `vistaregalos`;
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `vistaregalos`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` VIEW `babyshower`.`vistaregalos` AS select regalos.regalo, invitados.nombre  from (invitados join regalos on regalos.quien=invitados.id) ;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.5.4-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para ssu
CREATE DATABASE IF NOT EXISTS `ssu` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `ssu`;

-- Volcando estructura para tabla ssu.estado
CREATE TABLE IF NOT EXISTS `estado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla ssu.proyecto
CREATE TABLE IF NOT EXISTS `proyecto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estado_id` int(11) NOT NULL DEFAULT 1,
  `titulo` varchar(75) NOT NULL DEFAULT 'empty',
  `objetivo` varchar(200) NOT NULL DEFAULT 'empty',
  `descripcion` varchar(200) NOT NULL DEFAULT 'empty',
  `nivel` varchar(50) NOT NULL DEFAULT 'empty',
  `modalidad` varchar(50) NOT NULL DEFAULT 'empty',
  `est_cantidad` int(11) NOT NULL DEFAULT 0,
  `est_perfil` varchar(200) NOT NULL DEFAULT 'empty',
  `lugar` varchar(50) NOT NULL DEFAULT 'empty',
  `fecha` varchar(50) NOT NULL DEFAULT '00-00-0000',
  `horas` int(11) NOT NULL DEFAULT 0,
  `asesor_nombre` varchar(50) NOT NULL DEFAULT 'empty',
  `asesor_tel` varchar(50) NOT NULL DEFAULT 'empty',
  `asesor_email` varchar(50) NOT NULL DEFAULT 'empty',
  `supervisor_nombre` varchar(50) NOT NULL DEFAULT 'empty',
  `supervisor_tel` varchar(50) NOT NULL DEFAULT 'empty',
  `supervisor_email` varchar(50) NOT NULL DEFAULT 'empty',
  `organismo_nombre` varchar(50) NOT NULL DEFAULT 'empty',
  `imagen` varchar(500) NOT NULL DEFAULT 'empty',
  `lugar_descr` varchar(100) NOT NULL DEFAULT 'empty',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `FK_estado_proyecto` (`estado_id`),
  CONSTRAINT `FK_estado_proyecto` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla ssu.rol
CREATE TABLE IF NOT EXISTS `rol` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) DEFAULT 'empty',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla ssu.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rol_id` int(11) NOT NULL DEFAULT 1,
  `cedula` varchar(50) NOT NULL DEFAULT 'empty',
  `nombre_completo` varchar(50) NOT NULL DEFAULT 'empty',
  `email` varchar(50) NOT NULL DEFAULT 'empty',
  `password` varchar(50) NOT NULL DEFAULT 'empty',
  `telefono` varchar(50) NOT NULL DEFAULT 'empty',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla ssu.voluntario
CREATE TABLE IF NOT EXISTS `voluntario` (
  `user_id` int(11) NOT NULL,
  `proyect_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`proyect_id`),
  KEY `FK_voluntario_proyecto` (`proyect_id`),
  CONSTRAINT `FK_voluntario_proyecto` FOREIGN KEY (`proyect_id`) REFERENCES `proyecto` (`id`),
  CONSTRAINT `FK_voluntario_usuario` FOREIGN KEY (`user_id`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

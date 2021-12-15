-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.19-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para sportsigloxx
CREATE DATABASE IF NOT EXISTS `sportsigloxx` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `sportsigloxx`;

-- Volcando estructura para tabla sportsigloxx.area
CREATE TABLE IF NOT EXISTS `area` (
  `idArea` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion_A` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idArea`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla sportsigloxx.area: ~0 rows (aproximadamente)
DELETE FROM `area`;
/*!40000 ALTER TABLE `area` DISABLE KEYS */;
INSERT INTO `area` (`idArea`, `Descripcion_A`) VALUES
	(1, 'Calzado-Mujer');
/*!40000 ALTER TABLE `area` ENABLE KEYS */;

-- Volcando estructura para tabla sportsigloxx.categoriaproductos
CREATE TABLE IF NOT EXISTS `categoriaproductos` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla sportsigloxx.categoriaproductos: ~3 rows (aproximadamente)
DELETE FROM `categoriaproductos`;
/*!40000 ALTER TABLE `categoriaproductos` DISABLE KEYS */;
INSERT INTO `categoriaproductos` (`idCategoria`, `Descripcion`) VALUES
	(1, 'Niños'),
	(2, 'Mujeres'),
	(3, 'Hombres');
/*!40000 ALTER TABLE `categoriaproductos` ENABLE KEYS */;

-- Volcando estructura para tabla sportsigloxx.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL DEFAULT 0,
  `telefono` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `tarjeta` varchar(200) NOT NULL,
  `expiracion` varchar(200) NOT NULL,
  `codigo` varchar(200) NOT NULL,
  PRIMARY KEY (`id_cliente`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `FK_clientes_usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla sportsigloxx.clientes: ~3 rows (aproximadamente)
DELETE FROM `clientes`;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` (`id_cliente`, `id_usuario`, `telefono`, `direccion`, `tarjeta`, `expiracion`, `codigo`) VALUES
	(36, 3, '9191611508                             ', 'av. los girasoles                             ', 'u/xY84h2nLBBFj6lkk45nFFqMdEsvr/QEurYmqnHJ1Y=', '2001-12', 'OKcXFvAJrhc2mR4z6t0D1Q=='),
	(38, 13, '9191022778', 'Emiliano Zapata', 'zAVeTEebSFLK7NwVf67onFFqMdEsvr/QEurYmqnHJ1Y=', '2001-12', 'OKcXFvAJrhc2mR4z6t0D1Q=='),
	(39, 14, ' 9191002134', 'Ejido RUben jaramillo', 'zTadgMPP2KQP6ZV4TQMzb1FqMdEsvr/QEurYmqnHJ1Y=', '2001-12', 'OKcXFvAJrhc2mR4z6t0D1Q==');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;

-- Volcando estructura para tabla sportsigloxx.detallecompra
CREATE TABLE IF NOT EXISTS `detallecompra` (
  `idCompra` int(11) NOT NULL AUTO_INCREMENT,
  `idCliente` int(11) NOT NULL DEFAULT 0,
  `idProducto` int(11) NOT NULL DEFAULT 0,
  `Cantidad` int(50) NOT NULL DEFAULT 0,
  `Estado` bit(1) NOT NULL,
  PRIMARY KEY (`idCompra`),
  KEY `FK__clientes` (`idCliente`),
  KEY `FK_detallecompra_inventario` (`idProducto`),
  CONSTRAINT `FK__clientes` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_detallecompra_inventario` FOREIGN KEY (`idProducto`) REFERENCES `inventario` (`idProducto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=284 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla sportsigloxx.detallecompra: ~2 rows (aproximadamente)
DELETE FROM `detallecompra`;
/*!40000 ALTER TABLE `detallecompra` DISABLE KEYS */;
INSERT INTO `detallecompra` (`idCompra`, `idCliente`, `idProducto`, `Cantidad`, `Estado`) VALUES
	(280, 36, 1, 5, b'0'),
	(282, 36, 3, 1, b'0'),
	(283, 36, 1, 2, b'1');
/*!40000 ALTER TABLE `detallecompra` ENABLE KEYS */;

-- Volcando estructura para tabla sportsigloxx.inventario
CREATE TABLE IF NOT EXISTS `inventario` (
  `idProducto` int(11) NOT NULL AUTO_INCREMENT,
  `nombreP` varchar(50) NOT NULL DEFAULT '0',
  `precioP` float NOT NULL,
  `rutaImagen` varchar(300) NOT NULL DEFAULT '',
  `catidadP` int(11) NOT NULL DEFAULT 0,
  `descripcionP` varchar(50) NOT NULL DEFAULT '0',
  `categoriaP` int(11) DEFAULT NULL,
  `idArea` int(11) DEFAULT NULL,
  `talla` int(50) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idProducto`),
  KEY `FK_inventario_categoriaproductos` (`categoriaP`),
  KEY `FK_inventario_area` (`idArea`),
  CONSTRAINT `FK_inventario_area` FOREIGN KEY (`idArea`) REFERENCES `area` (`idArea`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `FK_inventario_categoriaproductos` FOREIGN KEY (`categoriaP`) REFERENCES `categoriaproductos` (`idCategoria`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla sportsigloxx.inventario: ~3 rows (aproximadamente)
DELETE FROM `inventario`;
/*!40000 ALTER TABLE `inventario` DISABLE KEYS */;
INSERT INTO `inventario` (`idProducto`, `nombreP`, `precioP`, `rutaImagen`, `catidadP`, `descripcionP`, `categoriaP`, `idArea`, `talla`, `color`) VALUES
	(1, 'Tenis SIMSON EDICIÓN ILIMITADA', 300, 'calzado/calzado1.jpg', 50, 'Tenis para prácticar atletismo', 2, 1, 17, 'blanco'),
	(2, 'Tenis PARA PRÁCTICAR FUTBOL SOCCER', 500, 'calzado/calzado2.jpg', 100, 'Tenis para prácticar futbol', 2, 1, 25, 'blanco'),
	(3, 'Tenis PARA ATLETISMO EDICIÓN ILIMITADA', 1200, 'calzado/calzado3.jpg', 100, 'Tenis para práticar Atletismo de montaña', 2, 1, 26, 'blanco');
/*!40000 ALTER TABLE `inventario` ENABLE KEYS */;

-- Volcando estructura para tabla sportsigloxx.mensajes
CREATE TABLE IF NOT EXISTS `mensajes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) DEFAULT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mensaje` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_cliente` (`id_cliente`),
  CONSTRAINT `FK_mensajes_clientes` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla sportsigloxx.mensajes: ~2 rows (aproximadamente)
DELETE FROM `mensajes`;
/*!40000 ALTER TABLE `mensajes` DISABLE KEYS */;
INSERT INTO `mensajes` (`id`, `id_cliente`, `nombre`, `email`, `mensaje`) VALUES
	(36, NULL, 'Leonardo', 'guillen@gmail.com', _binary 0x673759764b663443324e72536e7a51345a4e6b6831682b4f4e5953447857446f4d37786f463050333645756b2b2f4b68454b6b616a314e4c4c6f527252567178356d77527957676b6f3363382f4b4d2f7678545278497a557846416936646d524f4c497a6b63414678416133576e417847426d3977376f2f6e475a77544157744745387a506d4b656d57532f334c38526777715a76784e745662347a6b7635484e6c673761346a5678466f30384678465a48345855466472484f662b675662724f37697573303041376f587a306d754e6d42373476457a6b6f77726d4a7832796a766f703030497778465842546d507476622f59714b316c4e576574486a526f74586f477233346a517334356d702f764c3558372b67647a454451773454424135355a324b4774544f74636f337253454f71546c37614f544a4c585a6e3369656a2b5136454a69454248724d4855727946726f4367673d3d),
	(40, 36, 'Leonardo', 'guillennavarro@gmail.com', _binary 0x59334c797a494a4f786c3256767a45687a687175493350466930642b445a7942777a6848356c78613366416e783651766275462f73637569543231566942392b4f4a7246653261484c68324e466b452f74472b56313947425a7a32725942476366617444496f474e484f5031504f6b696a6b347a694d302f635861614b79447832646c614e5252314a35536935565568337a6f4d4858524d70693175323267516d78434a6a74724c6e2b446242326b45374330546f5058776d334f2b46476d6f6d2b63446c6244495a34426e6f6662746173696f45544338454a434371584d537046736338796e426b3834532f747763422b33466a6972594f2b6a596d35696d454937696e517350325633502b73344c396a612b3151357853465a4e2b674c436b4b55393830326a2b784e4f323454354a3877456b685742653836592b37767750436a387248532b2b74466f494233704c2b654c6f673d3d);
/*!40000 ALTER TABLE `mensajes` ENABLE KEYS */;

-- Volcando estructura para tabla sportsigloxx.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido_p` varchar(50) NOT NULL,
  `apellido_m` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `intentos` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla sportsigloxx.usuarios: ~6 rows (aproximadamente)
DELETE FROM `usuarios`;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido_p`, `apellido_m`, `correo`, `password`, `tipo`, `intentos`) VALUES
	(3, 'Leonardo', 'Guillen', 'Navarro', 'guillennavarro@gmail.com', '$2y$10$0uiKcsMrVW/dGygAikYlLucEiy5jWTMqlEEITJCkm9g/lSGQddI9W', 'cliente', 3),
	(5, 'victor', 'Arroyo', 'Ruiz', 'ruiz@gmail.com', '$2y$10$6WAYLhmgVmXGHr4YfUO7zewS4X55uvTxnyRf3u7eGXQB7pI8XfBAa', 'gerente', 0),
	(6, 'Edgardo', 'Encino', 'Gómez', 'edgardo@gmail.com', '$2y$10$et/2LKB.bzGkct7/G9CAIO4wpZujNos8Fr/aAuhy3mQo4P1.IzpHC', 'cliente', 0),
	(7, 'Carlos', 'Mendez', 'Sanchez', 'mendez@gmail.com', '$2y$10$jE49nyzMqtSbqoy3HKK4oealAEe3mM15OjywrIxME1GJLNLOWXQ4q', 'cliente', 0),
	(13, 'Luis', 'Dominguez', 'Santiz', 'luis@gmail.com', '$2y$10$usGnXlKfB5CtzanAPnovAun/n5n1bWsmCP0vSTvVYYaA91r7zCQ1u', 'cliente', 0),
	(14, 'Pepe', 'Dominguez', 'Santiz', 'pepe@gmail.com', '$2y$10$8/p3LW0pIKzGZhYOFlDd2eHvJDLhtFr3/pHfj2AlynEHI12tOuJmW', 'cliente', 0),
	(15, 'master', 'master', 'master', 'master', '$2y$10$dlBH5tvcnK6i4iMXFNJci.sBg1ZLnWLX5puv2SZddmC7Nw5urZpq2', 'cliente', 0);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

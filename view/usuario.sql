
CREATE DATABASE wdinamico DEFAULT CHARSET utf8 COLLATE utf8_general_ci;
USE wdinamico;
--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuario_id` smallint(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `paterno` varchar(30) NOT NULL,
  `materno` varchar(30) NOT NULL,
  `nombres` varchar(35) NOT NULL,
  `tipo_documento` varchar(50) NOT NULL,
  `num_documento` varchar(50) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nacionalidad` varchar(50) NOT NULL,
  `reside` varchar(50) NOT NULL,
  `ocupacion` varchar(50) NOT NULL,
  `entidad` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  PRIMARY KEY (`usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;


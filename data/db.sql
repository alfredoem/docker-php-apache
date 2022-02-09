USE bdmovil;
DROP TABLE IF EXISTS `producto`;
CREATE TABLE `producto` (
  `codigo` varchar(4) NOT NULL,
  `producto` varchar(60) NOT NULL,
  `precio` decimal(6,2) NOT NULL,
  `fabricante` varchar(25) NOT NULL,
  PRIMARY KEY (`codigo`)
);

DROP PROCEDURE IF EXISTS `sp_insert_presupuesto`;
CREATE PROCEDURE `sp_insert_presupuesto`(IN `nombre` VARCHAR(255), IN `email` VARCHAR(255), IN `material` VARCHAR(255), IN `alto` INT(4), IN `ancho` INT(4), IN `mensaje` LONGTEXT, IN `plano` VARCHAR(255)) NOT DETERMINISTIC NO SQL SQL SECURITY DEFINER 
BEGIN 
	INSERT INTO tbl_presupuesto (id,nombre, email, material, alto, ancho, mensaje, falta, plano) 
	VALUES(0,nombre, email, material, alto, ancho, mensaje, now(),plano); 
END
DROP PROCEDURE IF EXISTS `sp_insert_contacto`;
CREATE PROCEDURE `sp_insert_contacto`(IN `nombre` VARCHAR(255), IN `telefono` VARCHAR(20), IN `email` VARCHAR(255), IN `mensje` LONGTEXT, IN `falta` DATE) NOT DETERMINISTIC NO SQL SQL SECURITY DEFINER 
BEGIN
	INSERT INTO tbl_contactos (id,nombre, telefono, email, mensaje, falta)
    					VALUES(0,nombre, telefono, email, mensaje, falta);
END
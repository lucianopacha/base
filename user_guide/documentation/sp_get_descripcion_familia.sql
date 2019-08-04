DROP PROCEDURE IF EXISTS sp_get_descripcion_familia;

CREATE DEFINER=`yqcflxse`@`localhost` PROCEDURE `sp_get_descripcion_familia`(IN `familia` VARCHAR(255)) NOT DETERMINISTIC NO SQL SQL SECURITY DEFINER 
SELECT descripcion 
FROM tbl_productos_familia 
WHERE id = familia
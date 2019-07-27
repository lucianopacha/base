DROP PROCEDURE IF EXISTS sp_get_producto_por_familia;

CREATE PROCEDURE `sp_get_producto_por_familia`(IN `familia` INT(20)) NOT DETERMINISTIC NO SQL SQL SECURITY DEFINER 
BEGIN
    SELECT  p.descripcion, 
            p.falta, 
            f.descripcion, 
            p.fbaja, 
            p.foto 
    FROM    tbl_producto p,
            tbl_productos_familia f
    WHERE   p.familia = familia
    AND     p.fbaja IS null
    AND     p.familia = f.id;
END
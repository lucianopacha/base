DROP PROCEDURE IF EXISTS sp_get_max_presupuesto;

CREATE PROCEDURE `sp_get_max_presupuesto`() NOT DETERMINISTIC NO SQL SQL SECURITY DEFINER 
SELECT MAX(id) 
FROM tbl_presupuesto; 
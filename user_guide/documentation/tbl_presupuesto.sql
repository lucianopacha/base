CREATE TABLE `tbl_presupuesto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `material` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `alto` int(4) DEFAULT NULL,
  `ancho` int(4) DEFAULT NULL,
  `mensaje` longtext COLLATE utf8_bin NOT NULL,
  `falta` date NOT NULL,
  `fenvio` date DEFAULT NULL,
  `plano` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

ALTER TABLE `tbl_presupuesto`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_presupuesto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
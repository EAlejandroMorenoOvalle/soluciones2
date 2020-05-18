create database ejemplo;
use ejemplo;
CREATE TABLE `tbl_personal` (
  `id` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `fregis` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `tbl_personal` (`id`, `nombres`, `edad`, `estado`, `fregis`) VALUES
(1, 'Juan Carrillo', 34, 'Chile', '2019-08-20'),
(2, 'Luis Fontis', 26, 'Argentina', '2019-08-19'),
(3, 'Maria Cotrina', 23, 'Ecuador', '2019-08-21'),
(4, 'Jenifer Carrillo', 27, 'Peru', '2019-08-21'),
(5, 'Milagros Ferrer', 29, 'Colombia', '2019-08-16');

ALTER TABLE `tbl_personal`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
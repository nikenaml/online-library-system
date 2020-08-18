DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1,	'admin',	'a39952a8f3d23cbd9c2bbfdd1846c669d9b4c51d03ab44757b74d2b547f82bd3a36cdabfbd112bd77afa77b8ced1821e752963f07ddec5b2bc54b30a0cee65c9JzEifc4KIb2YJRdqHca7OPn9bzsJ2nbtBVAdvBPkF5k=');

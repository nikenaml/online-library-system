-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `anak`;
CREATE TABLE `anak` (
  `id_anak` int(11) NOT NULL AUTO_INCREMENT,
  `id_ibu` int(11) NOT NULL,
  `nama_anak` varchar(255) NOT NULL,
  `gender_anak` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_anak`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `anak` (`id_anak`, `id_ibu`, `nama_anak`, `gender_anak`) VALUES
(3,	5,	'Ismail',	1),
(4,	6,	'Ishaq',	1),
(5,	6,	'Yaqub',	1);

DROP TABLE IF EXISTS `buku`;
CREATE TABLE `buku` (
  `kode_buku` varchar(255) NOT NULL,
  `judul_buku` varchar(255) NOT NULL,
  `sampul_buku` varchar(255) NOT NULL,
  `stok_buku` varchar(255) NOT NULL,
  PRIMARY KEY (`kode_buku`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `buku` (`kode_buku`, `judul_buku`, `sampul_buku`, `stok_buku`) VALUES
('718120243',	'Doa Harian',	'buku_doa.jpeg',	'20'),
('9786020307374',	'Frozen',	'frozen.jpeg',	'20'),
('9786020462493',	'Huruf Hijaiah',	'hijaiyah.jpeg',	'26'),
('9786022436232',	'Disney Princess',	'disney.jpeg',	'30');

DROP TABLE IF EXISTS `ibu`;
CREATE TABLE `ibu` (
  `id_ibu` int(11) NOT NULL AUTO_INCREMENT,
  `nama_ibu` varchar(255) NOT NULL,
  `umur_ibu` int(11) NOT NULL,
  `foto_ibu` varchar(255) NOT NULL,
  PRIMARY KEY (`id_ibu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `ibu` (`id_ibu`, `nama_ibu`, `umur_ibu`, `foto_ibu`) VALUES
(5,	'Siti Hawa',	50,	'Siti_Hawa.jpg'),
(6,	'Siti Sara',	60,	'Siti_Sara.jpg');

DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE `mahasiswa` (
  `nim` varchar(255) NOT NULL,
  `nama_mahasiswa` varchar(255) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `mahasiswa` (`nim`, `nama_mahasiswa`) VALUES
('41515010002',	'Oky Dwimajaya '),
('41515010100',	'SEPTIO HENDRIYAWAN '),
('41516010074',	'SANDY MAHENDRA '),
('41516010075',	'PEGI WIRANTO '),
('41516010116',	'AGAM MAUREZZA '),
('41516020003',	'ADITYA '),
('41517010007',	'DIO DAVA RAMADHA '),
('41517010010',	'AZHAR FAUZAN '),
('41517010012',	'WIDIANTO '),
('41517010015',	'ARYA ARIEF BUDIMAN '),
('41517010016',	'RINGGA SASENA PUTRA '),
('41517010020',	'DICKY FIRMANSYAH '),
('41517010026',	'BEKTI PANGASTUTI '),
('41517010034',	'NOVIANA HAPSARI '),
('41517010036',	'RAFIKA AWALIAH '),
('41517010054',	'NIKEN AMELIA '),
('41517010059',	'AANG KHUNAEFI '),
('41517010062',	'VINA LISTIANI NINGSIH '),
('41517010064',	'MOCH FIQRI THOYBAH '),
('41517010069',	'HENDRI SETIAWAN '),
('41517010074',	'AHMAD ALI MUTEZAR '),
('41517010080',	'RIFKI RIADY '),
('41517010084',	'MUHAMMAD AFIF FATHONI '),
('41517010091',	'SIMON GERALDO SIMANULANG '),
('41517010093',	'CHRISTOPHER BENRIO LIMBOING '),
('41517010098',	'ADHI RAHMAWAN '),
('41517010099',	'ADAM MAULANA KHOSASIH '),
('41517010100',	'LISNA MARNI WARUWU '),
('41517010102',	'DODY JAMES TUA ARITONANG '),
('41517010104',	'DENDY PUTRA PRATAMA '),
('41517010106',	'IMAM HILMI '),
('41517010107',	'CHRISTOPHER JASON KURNIAWAN '),
('41517010109',	'YUSTIKA HETI HANDAL '),
('41517010111',	'FERLYANDI '),
('41517010113',	'AMALIA FITRI HARDIYANTI '),
('41517010116',	'NENSIA ALENDIA '),
('41517010118',	'MUHAMMAD IHSAN FAUZI '),
('41517010125',	'AFSAL AGUS ALFARIZI '),
('41517010127',	'FAHMI AFFANI EL HAKIM ');

DROP TABLE IF EXISTS `pahlawan`;
CREATE TABLE `pahlawan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(25) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `usia` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `pahlawan` (`id`, `nama`, `gender`, `usia`) VALUES
(1,	'Alif',	'Pria',	20),
(2,	'Ai',	'Pria',	30),
(3,	'Aris',	'Pria',	25),
(4,	'Ami',	'Wanita',	40),
(5,	'Udit',	'Wanita',	55);

DROP TABLE IF EXISTS `pinjam`;
CREATE TABLE `pinjam` (
  `id_pinjam` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(255) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  PRIMARY KEY (`id_pinjam`),
  KEY `nim` (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `pinjam` (`id_pinjam`, `nim`, `tanggal_pinjam`) VALUES
(1,	'41515010002',	'2019-07-01'),
(2,	'41515010100',	'2019-07-01'),
(3,	'41517010007',	'2019-07-02'),
(4,	'41517010010',	'2019-07-03'),
(5,	'41517010012',	'2019-07-03'),
(6,	'41517010015',	'2019-07-03'),
(7,	'41517010016',	'2019-07-04'),
(8,	'41517010069',	'2019-07-04'),
(10,	'41517010113',	'2019-07-10'),
(11,	'41517010111',	'2019-07-10');

DROP TABLE IF EXISTS `pinjam_buku`;
CREATE TABLE `pinjam_buku` (
  `id_pinjam` int(11) NOT NULL,
  `kode_buku` varchar(255) NOT NULL,
  KEY `id_pinjam_kode_buku` (`id_pinjam`,`kode_buku`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `pinjam_buku` (`id_pinjam`, `kode_buku`) VALUES
(1,	'718120243'),
(1,	'9786020307374'),
(1,	'9786020462493'),
(1,	'9786022436232'),
(2,	'718120243'),
(2,	'9786020307374'),
(2,	'9786020462493'),
(2,	'9786022436232'),
(3,	'9786020307374'),
(3,	'9786020462493'),
(3,	'9786022436232'),
(4,	'718120243'),
(4,	'9786020462493'),
(5,	'9786020307374'),
(5,	'9786020462493'),
(10,	'9786020307374'),
(10,	'9786020462493'),
(10,	'9786022436232'),
(11,	'9786020307374'),
(11,	'9786020462493'),
(11,	'9786022436232');

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_user`),
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `pahlawan` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1,	'admin',	'a39952a8f3d23cbd9c2bbfdd1846c669d9b4c51d03ab44757b74d2b547f82bd3a36cdabfbd112bd77afa77b8ced1821e752963f07ddec5b2bc54b30a0cee65c9JzEifc4KIb2YJRdqHca7OPn9bzsJ2nbtBVAdvBPkF5k=');

-- 2019-07-11 04:48:45

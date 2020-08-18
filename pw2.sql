-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2019 at 06:42 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2`
--

-- --------------------------------------------------------

--
-- Table structure for table `anak`
--

CREATE TABLE `anak` (
  `id_anak` int(11) NOT NULL,
  `id_ibu` int(11) NOT NULL,
  `nama_anak` varchar(255) NOT NULL,
  `gender_anak` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anak`
--

INSERT INTO `anak` (`id_anak`, `id_ibu`, `nama_anak`, `gender_anak`) VALUES
(3, 5, 'Ismail', 1),
(4, 6, 'Ishaq', 1),
(5, 6, 'Yaqub', 1);

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `kode_buku` varchar(255) NOT NULL,
  `judul_buku` varchar(255) NOT NULL,
  `sampul_buku` varchar(255) NOT NULL,
  `stok_buku` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`kode_buku`, `judul_buku`, `sampul_buku`, `stok_buku`) VALUES
('718120243', 'Doa Harian', 'buku_doa.jpeg', '17'),
('9786020307374', 'Frozen', 'frozen.jpeg', '20'),
('9786020462493', 'Huruf Hijaiah', 'hijaiyah.jpeg', '24'),
('9786022436232', 'Disney Princess', 'disney.jpeg', '29');

-- --------------------------------------------------------

--
-- Table structure for table `ibu`
--

CREATE TABLE `ibu` (
  `id_ibu` int(11) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `umur_ibu` int(11) NOT NULL,
  `foto_ibu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ibu`
--

INSERT INTO `ibu` (`id_ibu`, `nama_ibu`, `umur_ibu`, `foto_ibu`) VALUES
(5, 'Siti Hawa', 50, 'Siti_Hawa.jpg'),
(6, 'Siti Sara', 60, 'Siti_Sara.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `penduduk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id`, `id_provinsi`, `nama`, `penduduk`) VALUES
(1, 1, 'Jakarta Barat', 8000000),
(2, 1, 'Jakarta Selatan', 10000000),
(3, 2, 'Kota Tangerang', 5000000),
(4, 3, 'Bandung', 7000000),
(5, 3, 'Cirebon', 4000000);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(255) NOT NULL,
  `nama_mahasiswa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama_mahasiswa`) VALUES
('41515010002', 'Oky Dwimajaya '),
('41515010100', 'SEPTIO HENDRIYAWAN '),
('41516010074', 'SANDY MAHENDRA '),
('41516010075', 'PEGI WIRANTO '),
('41516010116', 'AGAM MAUREZZA '),
('41516020003', 'ADITYA '),
('41517010007', 'DIO DAVA RAMADHA '),
('41517010010', 'AZHAR FAUZAN '),
('41517010012', 'WIDIANTO '),
('41517010015', 'ARYA ARIEF BUDIMAN '),
('41517010016', 'RINGGA SASENA PUTRA '),
('41517010020', 'DICKY FIRMANSYAH '),
('41517010026', 'BEKTI PANGASTUTI '),
('41517010034', 'NOVIANA HAPSARI '),
('41517010036', 'RAFIKA AWALIAH '),
('41517010054', 'NIKEN AMELIA '),
('41517010059', 'AANG KHUNAEFI '),
('41517010062', 'VINA LISTIANI NINGSIH '),
('41517010064', 'MOCH FIQRI THOYBAH '),
('41517010069', 'HENDRI SETIAWAN '),
('41517010074', 'AHMAD ALI MUTEZAR '),
('41517010080', 'RIFKI RIADY '),
('41517010084', 'MUHAMMAD AFIF FATHONI '),
('41517010091', 'SIMON GERALDO SIMANULANG '),
('41517010093', 'CHRISTOPHER BENRIO LIMBOING '),
('41517010098', 'ADHI RAHMAWAN '),
('41517010099', 'ADAM MAULANA KHOSASIH '),
('41517010100', 'LISNA MARNI WARUWU '),
('41517010102', 'DODY JAMES TUA ARITONANG '),
('41517010104', 'DENDY PUTRA PRATAMA '),
('41517010106', 'IMAM HILMI '),
('41517010107', 'CHRISTOPHER JASON KURNIAWAN '),
('41517010109', 'YUSTIKA HETI HANDAL '),
('41517010111', 'FERLYANDI '),
('41517010113', 'AMALIA FITRI HARDIYANTI '),
('41517010116', 'NENSIA ALENDIA '),
('41517010118', 'MUHAMMAD IHSAN FAUZI '),
('41517010125', 'AFSAL AGUS ALFARIZI '),
('41517010127', 'FAHMI AFFANI EL HAKIM ');

-- --------------------------------------------------------

--
-- Table structure for table `pahlawan`
--

CREATE TABLE `pahlawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `usia` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pahlawan`
--

INSERT INTO `pahlawan` (`id`, `nama`, `gender`, `usia`) VALUES
(1, 'Alif', 'Pria', 20),
(2, 'Ai', 'Pria', 30),
(3, 'Aris', 'Pria', 25),
(4, 'Ami', 'Wanita', 40),
(5, 'Udit', 'Wanita', 55);

-- --------------------------------------------------------

--
-- Table structure for table `pinjam`
--

CREATE TABLE `pinjam` (
  `id_pinjam` int(11) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `tanggal_pinjam` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pinjam`
--

INSERT INTO `pinjam` (`id_pinjam`, `nim`, `tanggal_pinjam`) VALUES
(1, '41515010002', '2019-07-01'),
(2, '41515010100', '2019-07-01'),
(3, '41517010007', '2019-07-02'),
(4, '41517010010', '2019-07-03'),
(5, '41517010012', '2019-07-03'),
(6, '41517010015', '2019-07-03'),
(7, '41517010016', '2019-07-04'),
(8, '41517010069', '2019-07-04'),
(10, '41517010113', '2019-07-10'),
(11, '41517010111', '2019-07-10'),
(12, '41517010074', '2019-07-13'),
(13, '41517010054', '2019-07-13'),
(14, '41517010054', '2019-09-20');

-- --------------------------------------------------------

--
-- Table structure for table `pinjam_buku`
--

CREATE TABLE `pinjam_buku` (
  `id_pinjam` int(11) NOT NULL,
  `kode_buku` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pinjam_buku`
--

INSERT INTO `pinjam_buku` (`id_pinjam`, `kode_buku`) VALUES
(1, '718120243'),
(1, '9786020307374'),
(1, '9786020462493'),
(1, '9786022436232'),
(2, '718120243'),
(2, '9786020307374'),
(2, '9786020462493'),
(2, '9786022436232'),
(3, '9786020307374'),
(3, '9786020462493'),
(3, '9786022436232'),
(4, '718120243'),
(4, '9786020462493'),
(5, '718120243'),
(5, '9786020307374'),
(5, '9786020462493'),
(10, '9786020307374'),
(10, '9786020462493'),
(10, '9786022436232'),
(11, '9786020307374'),
(11, '9786020462493'),
(11, '9786022436232'),
(12, '718120243'),
(12, '9786020462493'),
(12, '9786022436232'),
(13, '718120243'),
(13, '9786020462493');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id` int(11) NOT NULL,
  `nama` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id`, `nama`) VALUES
(1, 'DKI Jakarta'),
(2, 'Banten'),
(3, 'Jawa Barat');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', 'a39952a8f3d23cbd9c2bbfdd1846c669d9b4c51d03ab44757b74d2b547f82bd3a36cdabfbd112bd77afa77b8ced1821e752963f07ddec5b2bc54b30a0cee65c9JzEifc4KIb2YJRdqHca7OPn9bzsJ2nbtBVAdvBPkF5k=');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`id_anak`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kode_buku`);

--
-- Indexes for table `ibu`
--
ALTER TABLE `ibu`
  ADD PRIMARY KEY (`id_ibu`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_provinsi` (`id_provinsi`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `pahlawan`
--
ALTER TABLE `pahlawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`id_pinjam`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `pinjam_buku`
--
ALTER TABLE `pinjam_buku`
  ADD KEY `id_pinjam_kode_buku` (`id_pinjam`,`kode_buku`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anak`
--
ALTER TABLE `anak`
  MODIFY `id_anak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ibu`
--
ALTER TABLE `ibu`
  MODIFY `id_ibu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pahlawan`
--
ALTER TABLE `pahlawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kota`
--
ALTER TABLE `kota`
  ADD CONSTRAINT `fk_provinsi` FOREIGN KEY (`id_provinsi`) REFERENCES `provinsi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `pahlawan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

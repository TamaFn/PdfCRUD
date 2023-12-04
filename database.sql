CREATE DATABASE `pendaftaran_siswa`;

USE `PdfCRUD`;


CREATE TABLE IF NOT EXISTS `calon_siswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `agama` varchar(15) NOT NULL,
  `sekolah_asal` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `calon_siswa` 
(`id`, `nis`, `nama`, `jenis_kelamin`, `telp`, `alamat`, `agama`, `sekolah_asal`,`foto`) VALUES 
(NULL,'50252111962','Lia Handayati', 'perempuan', '081808765233', 'Jl. Mangga No. 3, Mataram','Islam','SMPN 32 Ampenan','images.jpg');


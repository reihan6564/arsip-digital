-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Sep 2019 pada 19.52
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surma_revisi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(256) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `gambar`) VALUES
(4, 'admin', '$2y$10$98ZW.FRvGHCzcftlwKjLaeUQRSHMQIdG83y0tytwEkdKYKnLRp5qm', 'bad-gateway.png'),
(5, 'admin_jerax', '$2y$10$vxOLnZ0B8D1YGHLanuzqq.vm5Dpn87XJ3gQ0OE8koGAkfn4xezqAe', 'default.png'),
(6, 'pai', '$2y$10$0WNB1J7FpkAOEsp/pV7DbuH4ovReYKD.djkyJjV9gPWJ673.LKWkW', 'img066.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen_keluar`
--

CREATE TABLE `dokumen_keluar` (
  `id_dokumen_keluar` int(11) NOT NULL,
  `no_arsip` varchar(10) NOT NULL,
  `keamanan_arsip` varchar(30) NOT NULL,
  `keterangan` text NOT NULL,
  `no` varchar(30) NOT NULL,
  `tujuan` varchar(80) NOT NULL,
  `prihal` varchar(80) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `tanggal_keluar` varchar(80) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `isi_surat` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokumen_keluar`
--

INSERT INTO `dokumen_keluar` (`id_dokumen_keluar`, `no_arsip`, `keamanan_arsip`, `keterangan`, `no`, `tujuan`, `prihal`, `tanggal_surat`, `tanggal_keluar`, `id_kategori`, `isi_surat`) VALUES
(2, 'ARSK001', '', '35', '097', 'tugas', 'tugas', '2018-04-20', '2019-09-03', 2, 'program-sanlat-2011.doc'),
(3, 'ARSK002', '', 'ww', '22', 'ss', 'ww', '2019-08-31', '2019-09-03', 5, 'surat_keterangan_kerja.docx'),
(4, 'ARSK003', '', '3233', '88', 'aww', 'ddd', '2019-10-01', '2019-10-02', 1, 'lihat_dulu.docx'),
(5, 'ARSK004', '', '3233', '889', 'Belajar', 'Aplikasi', '2019-09-30', '2019-10-02', 4, '331.docx'),
(6, 'ARSK006', 'umum', '3233', '22', 'ss', 'ww', '2019-08-31', '2019-09-03', 1, 'lihat_dulu3.docx'),
(8, 'ARSK007', 'rahasia', '3233', '33', 'ss', 'ww', '2019-08-31', '2019-09-03', 4, 'lihat_dulu4.docx'),
(9, 'ARSK008', 'Umum', '33', '33', 'ww', 'ww', '2019-10-01', '2019-09-03', 2, 'Logo_Label.docx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen_masuk`
--

CREATE TABLE `dokumen_masuk` (
  `id_dokumen_masuk` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `no` varchar(20) NOT NULL,
  `no_arsip` varchar(15) NOT NULL,
  `keamanan_arsip` varchar(30) NOT NULL,
  `asal_surat` varchar(40) NOT NULL,
  `prihal` varchar(50) NOT NULL,
  `tanggal_surat` varchar(50) NOT NULL,
  `isi_surat` varchar(70) NOT NULL,
  `keterangan` varchar(79) NOT NULL,
  `status` varchar(30) NOT NULL,
  `tanggal_masuk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokumen_masuk`
--

INSERT INTO `dokumen_masuk` (`id_dokumen_masuk`, `id_kategori`, `no`, `no_arsip`, `keamanan_arsip`, `asal_surat`, `prihal`, `tanggal_surat`, `isi_surat`, `keterangan`, `status`, `tanggal_masuk`) VALUES
(2, 5, '333', '', '', '333', '333', '2018-05-03', 'Logo_Buat_Pembatas.docx', '333', 'Sudah Dibaca', ''),
(3, 1, '333/44', '', '', '444', '444', '2019-09-04', 'Logo_Label.docx', '444', 'Sudah Dibaca', ''),
(4, 1, '33', 'ARS001', 'Rahasia', '23', 'ddd', '2019-09-02', 'lirik1_(1).docx', '33', 'Belum Dibaca', ''),
(5, 2, '33', 'ARSM002', 'Rahasia', '23', 'ddd', '2019-10-01', 'lirik1.docx', '33', 'Sudah Dibaca', ''),
(6, 3, '22', 'ARSM003', 'Biasa', 'Dinas sosial', '333', '2019-09-02', 'lirik11.docx', '33', 'Belum Dibaca', '2019-10-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_dokumen`
--

CREATE TABLE `kategori_dokumen` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(26) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_dokumen`
--

INSERT INTO `kategori_dokumen` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Observasi'),
(2, 'ijin pemetaan'),
(3, 'pra penelitian'),
(4, 'ijin kuliah'),
(5, 'ijin upacara');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_keluar`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_keluar` (
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_masuk`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_masuk` (
);

-- --------------------------------------------------------

--
-- Struktur untuk view `v_keluar`
--
DROP TABLE IF EXISTS `v_keluar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_keluar`  AS  select `ks`.`nama_kategori` AS `nama_kategori`,`sk`.`tujuan` AS `tujuan`,`sk`.`prihal` AS `prihal`,`sk`.`tanggal_surat` AS `tanggal_surat`,`sk`.`tanggal_jatuh_tempo` AS `tanggal_jatuh_tempo`,`sk`.`id_surat_keluar` AS `id_surat_keluar`,`sk`.`isi_surat` AS `isi_surat` from (`surat_keluar` `sk` join `kategori_surat` `ks`) where (`sk`.`id_kategori` = `ks`.`id_kategori`) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_masuk`
--
DROP TABLE IF EXISTS `v_masuk`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_masuk`  AS  select `ks`.`nama_kategori` AS `nama_kategori`,`sm`.`id_surat_masuk` AS `id_surat_masuk`,`sm`.`Asal_surat` AS `Asal_surat`,`sm`.`Prihal` AS `Prihal`,`sm`.`Tanggal_surat` AS `Tanggal_surat`,`sm`.`Tempo_surat` AS `Tempo_surat`,`sm`.`isi_surat` AS `isi_surat` from (`surat_masuk` `sm` join `kategori_surat` `ks`) where (`sm`.`id_kategori` = `ks`.`id_kategori`) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dokumen_keluar`
--
ALTER TABLE `dokumen_keluar`
  ADD PRIMARY KEY (`id_dokumen_keluar`);

--
-- Indeks untuk tabel `dokumen_masuk`
--
ALTER TABLE `dokumen_masuk`
  ADD PRIMARY KEY (`id_dokumen_masuk`);

--
-- Indeks untuk tabel `kategori_dokumen`
--
ALTER TABLE `kategori_dokumen`
  ADD PRIMARY KEY (`id_kategori`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `dokumen_keluar`
--
ALTER TABLE `dokumen_keluar`
  MODIFY `id_dokumen_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `dokumen_masuk`
--
ALTER TABLE `dokumen_masuk`
  MODIFY `id_dokumen_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kategori_dokumen`
--
ALTER TABLE `kategori_dokumen`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jan 2022 pada 08.12
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asyka`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `nama_admin` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'Dedin', 'admin', '202cb962ac59075b964b07152d234b70'),
(2, 'Imam Nawawi', 'imam', '200ceb26807d6bf99fd6f4f0d1ca54d4'),
(3, 'Maruloh', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_anggota` varchar(45) NOT NULL,
  `gender` enum('Laki-Laki','Perempuan') NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(35) NOT NULL,
  `pt` enum('SD','SMTP','SMTA','AKDM/UNIV') NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `agama` enum('Islam','Kristen','Hindu','Budha') NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `id_paket` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `username`, `nama_anggota`, `gender`, `no_telp`, `alamat`, `email`, `password`, `pt`, `ttl`, `agama`, `pekerjaan`, `id_paket`) VALUES
(30, '123', 'Chelsea', 'Perempuan', '02133335555', 'Cilamaya', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 'SD', 'Karawang,20 Maret 1992', 'Islam', 'Artis', 0),
(28, 'har', 'Harith ML', 'Laki-Laki', '02133335555', 'Cikampek', 'admin@admin.com', '202cb962ac59075b964b07152d234b70', 'SMTA', 'Karawang,20 Maret 1992', 'Islam', 'Artis', 0),
(31, 'ded', 'Dedin Toyibah', 'Laki-Laki', '023523523', 'bandung', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 'SD', 'Karawang,20 Maret 1992', 'Islam', 'Artis', 0),
(32, 'man', 'Mantul', 'Laki-Laki', '02133335555', 'bandung', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 'SD', 'Karawang,20 Maret 1992', 'Islam', 'Artis', 0),
(33, 'obay', 'Dedin', 'Laki-Laki', '09', 'Kawasan Industri Suryacipta, Jl. Surya Madya VI ka', 'dedtroy1@gmail.com', '202cb962ac59075b964b07152d234b70', 'SMTA', 'karawang', 'Islam', 'y', 0),
(34, 'toya', 'Dedin', 'Laki-Laki', '09', 'Apl Office Tower 33th Floor, Unit 7', 'dedinarc70@gmail.com', '202cb962ac59075b964b07152d234b70', 'SMTA', 'karawang', 'Islam', 'y', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kursus`
--

CREATE TABLE `data_kursus` (
  `id_kursus` int(4) NOT NULL,
  `id_anggota` int(4) NOT NULL,
  `id_pengajar` int(4) NOT NULL,
  `tgl_belajar` date NOT NULL,
  `status_belajar` enum('Belum Belajar','Sudah Belajar') NOT NULL,
  `id_paket` int(4) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `p1` enum('Belum Belajar','Sudah Belajar') NOT NULL,
  `p2` enum('Belum Belajar','Sudah Belajar') NOT NULL,
  `p3` enum('Belum Belajar','Sudah Belajar') NOT NULL,
  `p4` enum('Belum Belajar','Sudah Belajar') NOT NULL,
  `p5` enum('Belum Belajar','Sudah Belajar') NOT NULL,
  `p6` enum('Belum Belajar','Sudah Belajar') NOT NULL,
  `p7` enum('Belum Belajar','Sudah Belajar') NOT NULL,
  `p8` enum('Belum Belajar','Sudah Belajar') NOT NULL,
  `p9` enum('Belum Belajar','Sudah Belajar') NOT NULL,
  `p10` enum('Belum Belajar','Sudah Belajar') NOT NULL,
  `kelas` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_kursus`
--

INSERT INTO `data_kursus` (`id_kursus`, `id_anggota`, `id_pengajar`, `tgl_belajar`, `status_belajar`, `id_paket`, `tgl_daftar`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `kelas`) VALUES
(1, 31, 7, '0000-00-00', 'Belum Belajar', 1, '2019-05-08', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', NULL),
(2, 32, 11, '0000-00-00', 'Belum Belajar', 2, '2019-05-08', 'Sudah Belajar', 'Sudah Belajar', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', NULL),
(3, 32, 10, '0000-00-00', 'Belum Belajar', 3, '2019-05-08', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', NULL),
(4, 32, 9, '0000-00-00', 'Belum Belajar', 1, '2019-05-08', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', NULL),
(5, 28, 11, '0000-00-00', 'Belum Belajar', 1, '2019-05-10', 'Sudah Belajar', 'Sudah Belajar', 'Sudah Belajar', 'Sudah Belajar', 'Sudah Belajar', 'Sudah Belajar', 'Sudah Belajar', 'Sudah Belajar', 'Sudah Belajar', 'Sudah Belajar', NULL),
(6, 28, 11, '0000-00-00', 'Sudah Belajar', 3, '2019-05-10', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', NULL),
(8, 33, 11, '0000-00-00', 'Belum Belajar', 2, '2022-01-18', 'Sudah Belajar', 'Sudah Belajar', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', 'Belum Belajar', 'Kelas Siang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(40) NOT NULL,
  `biaya` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `biaya`) VALUES
(1, 'Paket Pemula', '925000'),
(2, 'Paket Memperlancar', '625000'),
(3, 'Paket Reguler', '475000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajar`
--

CREATE TABLE `pengajar` (
  `id_pengajar` int(4) NOT NULL,
  `nama_pengajar` varchar(40) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(35) NOT NULL,
  `no_telp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengajar`
--

INSERT INTO `pengajar` (`id_pengajar`, `nama_pengajar`, `alamat`, `username`, `password`, `no_telp`) VALUES
(1, 'Romi', '', '', '', ''),
(2, 'Sultan', 'R', 'sultan', '202cb962ac59075b964b07152d234b70', '82f74f48ca1b71260fcfb13afbeaf093'),
(3, 'Indra', '', '', '', ''),
(4, 'Mamat', '', '', '', ''),
(7, 'Maman', 'bandung', 'mam', '202cb962ac59075b964b', '02133335555'),
(8, 'lola', 'kk', 'lol', '698d51a19d8a121ce581', '0897979'),
(9, 'pom', 'k', 'pom', '202cb962ac59075b964b07152d234b70', '089'),
(10, 'Toya', 'Cikampek', 'toy', '202cb962ac59075b964b07152d234b70', '023523523'),
(11, 'Paul Bastian', 'Cilamaya', 'paul', '202cb962ac59075b964b07152d234b70', '02133335555');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(4) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `id_anggota` int(4) NOT NULL,
  `id_paket` int(4) NOT NULL,
  `metode_bayar` enum('Transfer BANK','Tunai') NOT NULL,
  `status_konfirmasi` enum('Belum Dikonfirmasi','Sudah Dikonfirmasi') NOT NULL,
  `id_pengajar` int(4) NOT NULL,
  `kelas` varchar(45) NOT NULL,
  `ub` varchar(40) NOT NULL,
  `no_rek` varchar(40) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tgl_daftar`, `id_anggota`, `id_paket`, `metode_bayar`, `status_konfirmasi`, `id_pengajar`, `kelas`, `ub`, `no_rek`, `gambar`) VALUES
(29, '2022-01-18', 33, 1, 'Transfer BANK', 'Sudah Dikonfirmasi', 2, 'Kelas Siang', '975000', '123', 'gambar1642477245.png'),
(34, '2022-01-18', 33, 2, 'Transfer BANK', 'Belum Dikonfirmasi', 11, 'Kelas Siang', '675000', '675000', 'gambar1642478557.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `data_kursus`
--
ALTER TABLE `data_kursus`
  ADD PRIMARY KEY (`id_kursus`);

--
-- Indeks untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indeks untuk tabel `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`id_pengajar`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `data_kursus`
--
ALTER TABLE `data_kursus`
  MODIFY `id_kursus` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pengajar`
--
ALTER TABLE `pengajar`
  MODIFY `id_pengajar` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

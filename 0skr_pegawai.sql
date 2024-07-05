-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jul 2024 pada 15.26
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `0skr_pegawai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `file`
--

CREATE TABLE `file` (
  `id_file` int(11) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hitung`
--

CREATE TABLE `hitung` (
  `id_hitung` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_lowongan` int(11) NOT NULL,
  `vektor_s` float NOT NULL,
  `vektor_v` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `hitung`
--

INSERT INTO `hitung` (`id_hitung`, `id_user`, `id_lowongan`, `vektor_s`, `vektor_v`) VALUES
(28, 24, 16, 8.28255, 0.215541),
(29, 25, 16, 7.80717, 0.20317),
(30, 27, 16, 7.22673, 0.188065),
(31, 28, 16, 7.49438, 0.19503),
(32, 26, 16, 7.61598, 0.198194);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lowongan`
--

CREATE TABLE `lowongan` (
  `id_lowongan` int(11) NOT NULL,
  `lowongan` varchar(50) NOT NULL,
  `kuota` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `pengumuman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `lowongan`
--

INSERT INTO `lowongan` (`id_lowongan`, `lowongan`, `kuota`, `status`, `pengumuman`) VALUES
(16, 'Lowongan Hukum Perdata ', 1, 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lowongan_rinci`
--

CREATE TABLE `lowongan_rinci` (
  `id_lowongan_rinci` int(11) NOT NULL,
  `id_lowongan` int(11) NOT NULL,
  `kriteria` varchar(30) NOT NULL,
  `bobot` int(11) NOT NULL,
  `status_nilai` tinyint(4) NOT NULL,
  `status_upload` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `lowongan_rinci`
--

INSERT INTO `lowongan_rinci` (`id_lowongan_rinci`, `id_lowongan`, `kriteria`, `bobot`, `status_nilai`, `status_upload`) VALUES
(57, 16, 'Pengalaman Kerja', 5, 1, 0),
(58, 16, 'Pendidikan Minimal D3', 4, 1, 0),
(59, 16, 'Kemampuan Analisis', 4, 1, 0),
(60, 16, 'Dapat Berkomunikasi Dengan Bai', 3, 1, 0),
(61, 16, 'Sertifikasi Tambahan', 3, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelamar`
--

CREATE TABLE `pelamar` (
  `id_lamaran` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_lowongan` int(11) NOT NULL,
  `kriteria` varchar(30) NOT NULL,
  `nilai` varchar(10) NOT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pelamar`
--

INSERT INTO `pelamar` (`id_lamaran`, `id_user`, `id_lowongan`, `kriteria`, `nilai`, `file`) VALUES
(166, 24, 16, 'Pengalaman Kerja', '9', ''),
(167, 24, 16, 'Pendidikan Minimal D3', '9', ''),
(168, 24, 16, 'Kemampuan Analisis', '8', ''),
(169, 24, 16, 'Dapat Berkomunikasi Dengan Bai', '7', ''),
(170, 24, 16, 'Sertifikasi Tambahan', '8', ''),
(171, 25, 16, 'Pengalaman Kerja', '8', ''),
(172, 25, 16, 'Pendidikan Minimal D3', '7', ''),
(173, 25, 16, 'Kemampuan Analisis', '9', ''),
(174, 25, 16, 'Dapat Berkomunikasi Dengan Bai', '8', ''),
(175, 25, 16, 'Sertifikasi Tambahan', '7', ''),
(176, 27, 16, 'Pengalaman Kerja', '7', ''),
(177, 27, 16, 'Pendidikan Minimal D3', '8', ''),
(178, 27, 16, 'Kemampuan Analisis', '8', ''),
(179, 27, 16, 'Dapat Berkomunikasi Dengan Bai', '7', ''),
(180, 27, 16, 'Sertifikasi Tambahan', '6', ''),
(181, 28, 16, 'Pengalaman Kerja', '7', ''),
(182, 28, 16, 'Pendidikan Minimal D3', '7', ''),
(183, 28, 16, 'Kemampuan Analisis', '9', ''),
(184, 28, 16, 'Dapat Berkomunikasi Dengan Bai', '9', ''),
(185, 28, 16, 'Sertifikasi Tambahan', '6', ''),
(186, 26, 16, 'Pengalaman Kerja', '8', ''),
(187, 26, 16, 'Pendidikan Minimal D3', '8', ''),
(188, 26, 16, 'Kemampuan Analisis', '7', ''),
(189, 26, 16, 'Dapat Berkomunikasi Dengan Bai', '8', ''),
(190, 26, 16, 'Sertifikasi Tambahan', '7', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pendidikan` varchar(30) NOT NULL,
  `file_cv` varchar(50) NOT NULL,
  `foto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama_lengkap`, `username`, `password`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `no_hp`, `email`, `pendidikan`, `file_cv`, `foto`) VALUES
(23, 'Putro Agung Leksana', 'putro', 'a90d08bdfc79f829a5575d0149065547', '', '', '0000-00-00', '', 'putroagung@gmail.com', '', '', ''),
(24, 'Rina Wulandari', 'Rina', '3aea9516d222934e35dd30f142fda18c', '', '', '0000-00-00', '', 'rina@gmail.com', 'S2 Hukum', '', ''),
(25, 'Budi Santoso', 'budi', '00dfc53ee86af02e742515cdcf075ed3', '', '', '0000-00-00', '', 'budi@gmail.com', 'D3 ', '', ''),
(26, 'Dewi Susanti', 'dewi', 'ed1d859c50262701d92e5cbf39652792', '', '', '0000-00-00', '', 'dewi@gmail.com', 'S1 ', '', ''),
(27, 'Agus Priyanto', 'agus', 'fdf169558242ee051cca1479770ebac3', '', '', '0000-00-00', '', 'agus@gmail.com', 'S1 ', '', ''),
(28, 'Yusuf Maulana', 'yusuf', 'dd2eb170076a5dec97cdbbbbff9a4405', '', '', '0000-00-00', '', 'yusuf@gmail.com', 'S2 ', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id_file`);

--
-- Indeks untuk tabel `hitung`
--
ALTER TABLE `hitung`
  ADD PRIMARY KEY (`id_hitung`);

--
-- Indeks untuk tabel `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id_lowongan`);

--
-- Indeks untuk tabel `lowongan_rinci`
--
ALTER TABLE `lowongan_rinci`
  ADD PRIMARY KEY (`id_lowongan_rinci`);

--
-- Indeks untuk tabel `pelamar`
--
ALTER TABLE `pelamar`
  ADD PRIMARY KEY (`id_lamaran`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `file`
--
ALTER TABLE `file`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `hitung`
--
ALTER TABLE `hitung`
  MODIFY `id_hitung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `id_lowongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `lowongan_rinci`
--
ALTER TABLE `lowongan_rinci`
  MODIFY `id_lowongan_rinci` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT untuk tabel `pelamar`
--
ALTER TABLE `pelamar`
  MODIFY `id_lamaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

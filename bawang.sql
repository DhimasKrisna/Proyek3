-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Nov 2021 pada 03.30
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bawang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `harga_bawang`
--

CREATE TABLE `harga_bawang` (
  `id` int(11) NOT NULL,
  `jumlah_panen` int(50) NOT NULL,
  `tanggal_panen` date NOT NULL,
  `harga` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `harga_bawang`
--

INSERT INTO `harga_bawang` (`id`, `jumlah_panen`, `tanggal_panen`, `harga`) VALUES
(1, 27858, '2021-10-01', 20000),
(2, 26512, '2019-10-01', 21500),
(4, 27156, '2020-02-05', 19000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_bawang`
--

CREATE TABLE `jenis_bawang` (
  `id` int(11) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `asal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_bawang`
--

INSERT INTO `jenis_bawang` (`id`, `jenis`, `asal`) VALUES
(1, 'bauci', 'Nganjuk'),
(2, 'Tajuk', 'local (asal thailand)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sawah`
--

CREATE TABLE `sawah` (
  `id` int(11) NOT NULL,
  `pemilik` varchar(50) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `tgl_tanam` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sawah`
--

INSERT INTO `sawah` (`id`, `pemilik`, `jenis`, `tgl_tanam`) VALUES
(4, 'doni', 'Tajuk', '2021-11-03'),
(5, 'admin', 'Tajuk', '2021-11-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `aktif` varchar(50) NOT NULL,
  `dibuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `diubah` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`, `aktif`, `dibuat`, `diubah`) VALUES
(1, 'admin', 'admin', 'admin', 'ya', '2021-10-22 02:34:21', '2021-10-22 02:35:45'),
(2, 'budi', 'budi', 'user', 'ya', '2021-10-22 02:34:21', '2021-11-12 08:32:03'),
(3, 'doni', 'doni', 'pengurus', 'ya', '2021-10-22 02:34:21', '2021-11-05 07:20:36'),
(6, 'halo', 'halo', 'user', 'tidak', '2021-10-22 04:37:26', '2021-10-22 04:37:26'),
(8, 'saya', 'saya', 'user', 'tidak', '2021-10-22 04:39:35', '2021-10-22 04:39:35'),
(9, 'tono', 'tono', 'user', 'tidak', '2021-10-22 04:41:06', '2021-10-22 04:41:06');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `harga_bawang`
--
ALTER TABLE `harga_bawang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis_bawang`
--
ALTER TABLE `jenis_bawang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jenis` (`jenis`);

--
-- Indeks untuk tabel `sawah`
--
ALTER TABLE `sawah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sawah_ibfk_1` (`pemilik`),
  ADD KEY `fk_jenis` (`jenis`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `harga_bawang`
--
ALTER TABLE `harga_bawang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jenis_bawang`
--
ALTER TABLE `jenis_bawang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sawah`
--
ALTER TABLE `sawah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `sawah`
--
ALTER TABLE `sawah`
  ADD CONSTRAINT `fk_jenis` FOREIGN KEY (`jenis`) REFERENCES `jenis_bawang` (`jenis`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sawah_ibfk_1` FOREIGN KEY (`pemilik`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

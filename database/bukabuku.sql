-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Apr 2019 pada 18.40
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bukabuku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `nama` varchar(155) NOT NULL,
  `email` varchar(155) NOT NULL,
  `password` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `nama`, `email`, `password`) VALUES
(1, 'a', 'asd@asd.com', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data__buku`
--

CREATE TABLE `data__buku` (
  `No` int(11) NOT NULL,
  `Judul_Buku` varchar(100) NOT NULL,
  `Bentuk_Cover` varchar(100) NOT NULL,
  `Sinopsis` varchar(100) NOT NULL,
  `Pengarang` varchar(100) NOT NULL,
  `Harga` varchar(100) NOT NULL,
  `Penerbit` varchar(100) NOT NULL,
  `ISBN` int(11) NOT NULL,
  `Halaman` int(11) NOT NULL,
  `Dimensi` varchar(100) NOT NULL,
  `Bahasa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data__buku`
--

INSERT INTO `data__buku` (`No`, `Judul_Buku`, `Bentuk_Cover`, `Sinopsis`, `Pengarang`, `Harga`, `Penerbit`, `ISBN`, `Halaman`, `Dimensi`, `Bahasa`) VALUES
(1, 'aa', 'a', 'a', 'a', '12', 'a', 1, 1, '1', 'indonesia'),
(2, 'd', 'd', 'd', 'd', '124', 'd', 11, 11, '11', 'indonesia');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data__buku`
--
ALTER TABLE `data__buku`
  ADD PRIMARY KEY (`ISBN`),
  ADD KEY `No` (`No`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data__buku`
--
ALTER TABLE `data__buku`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

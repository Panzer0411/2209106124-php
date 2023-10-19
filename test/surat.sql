-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2023 pada 16.43
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
-- Database: `surat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `srtmskklr`
--

CREATE TABLE `srtmskklr` (
  `id` int(45) NOT NULL,
  `nama` text NOT NULL,
  `nomor_surat` varchar(125) NOT NULL,
  `perihal` varchar(125) NOT NULL,
  `lampiran` int(45) NOT NULL,
  `instansi` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `srtmskklr`
--

INSERT INTO `srtmskklr` (`id`, `nama`, `nomor_surat`, `perihal`, `lampiran`, `instansi`) VALUES
(9, 'q3w45657234567890876543', '4we5rty', '54e5', 0, '2345dgfh'),
(10, 'wdadwad', 'wadadaw', '321312', 0, 'dwadaw'),
(11, 'd', 'wwdwa', '232', 0, 'dawda');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `srtmskklr`
--
ALTER TABLE `srtmskklr`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `srtmskklr`
--
ALTER TABLE `srtmskklr`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

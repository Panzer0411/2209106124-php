-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Okt 2023 pada 17.09
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
-- Struktur dari tabel `reglog`
--

CREATE TABLE `reglog` (
  `id` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `reglog`
--

INSERT INTO `reglog` (`id`, `email`, `no_hp`, `username`, `password`) VALUES
(20, 'adwd@gmail.com', 0, 'panzer', '$2y$10$RuYFYwwcY38XLV1SWB8GMOFs0.SAuxwe4dG146qe9/h7.IVF66N.G'),
(21, 'fikoramadani@gmail.com', 34567, 'awds', '$2y$10$GOoD9Jgf7ibJ0kaebFrDi.L9kT7whMeJKLccVwN.r8f7QXyBWoeFy'),
(22, 'adwdad@21321', 23112122, 'asd', '$2y$10$adDMTyCFt8SWcEmOiQ8Wu.Cnc8eX/xLcf1EiUhqFtsvzi4Eo8mvNi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `reglog`
--
ALTER TABLE `reglog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `reglog`
--
ALTER TABLE `reglog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

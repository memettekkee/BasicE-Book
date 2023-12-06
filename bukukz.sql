-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Des 2023 pada 11.31
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bukukz`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Laboratorium Pemrograman Web', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `penulis` varchar(250) NOT NULL,
  `th_terbit` varchar(4) NOT NULL,
  `genre` varchar(250) NOT NULL,
  `jumlah_halaman` int(2) NOT NULL,
  `gambar` text NOT NULL,
  `link_buku` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul`, `penulis`, `th_terbit`, `genre`, `jumlah_halaman`, `gambar`, `link_buku`) VALUES
(28, 'Bumi', 'Tere Liye', '2014', 'Fantasi', 440, 'gambar_buku/bumi.jpg', 'https://drive.google.com/file/d/17vm8uDI6Hn0a-Fp5kONqDKoaSbtpXxK2/view?usp=sharing'),
(29, 'Manusia Setengah Salmon', 'Raditya Dika', '2011', 'Komedi', 264, 'gambar_buku/manusia salmon.jpg', 'https://drive.google.com/file/d/1PZT3DPK-sqUyjijuSRTxZyVXEKRjdu4O/view?usp=drive_link'),
(30, 'Cinta Brontosaurus ', 'Raditya Dika', '2006', 'Komedi, Romance', 160, 'gambar_buku/bronto.jpg', 'https://drive.google.com/file/d/12xruJrP-xICBL_zseN_pP_4cJSp_ADWm/view?usp=drive_link'),
(31, 'Laskar Pelangi', 'Andrea Hirata', '2005', 'Romance', 529, 'gambar_buku/pelangi.jpg', 'https://drive.google.com/file/d/1cip3HFwiQbdwdQj9PD6L-dMhwkvPbyL8/view?usp=sharing'),
(32, 'Negeri 5 Menara ', 'Ahmad Fuadi', '2009', 'Fiksi', 432, 'gambar_buku/5menara.jpg', 'https://drive.google.com/file/d/1KkUb_iyL6h6ZnN8LG6KzoqWRNalLu7G7/view?usp=drive_link'),
(33, 'Bumi Manusia', 'Pramoedya Ananta Toer', '2005', 'History, Fiksi', 535, 'gambar_buku/bumimanusia.jpg', 'https://drive.google.com/file/d/1N2ZWfythNQELQl6-sVkoS4TcA96oZzMA/view?usp=drive_link'),
(34, 'Athlas', 'Eko Ivano Winata', '2018', 'Romance', 444, 'gambar_buku/athlas.jpg', 'https://drive.google.com/file/d/13E6rLV0hKcNUp5Tc0UnMcR68KZRjPtJK/view?usp=drive_link'),
(35, 'Semua Untuk Hindia', 'Iksaka Banu', '2014', 'Fiksi', 153, 'gambar_buku/hindia.jpg', 'https://drive.google.com/file/d/1kQeaykGhLgagOqFToge_TM06JGV2NqOS/view?usp=sharing'),
(36, 'Perahu Kertas', 'Dewi Lestari', '2009', 'Drama', 444, 'gambar_buku/perahulertas.jpg', 'https://drive.google.com/file/d/1Wtnq3fEALisBKVcYCBzD6f_QOb_MQe-m/view?usp=sharing'),
(37, 'Laut Bercerita', 'Leila Salikha Chudori', '2017', 'History, Fiksi', 379, 'gambar_buku/laut cerita.jpg', 'https://drive.google.com/file/d/1KKbH2jcgEb77eKOgfBMAhIakydwruuvI/view?usp=drive_link');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembaca`
--

CREATE TABLE `pembaca` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pembaca`
--

INSERT INTO `pembaca` (`id`, `nama`, `username`, `password`) VALUES
(1, 'muhammad', 'memet', 'wkwk'),
(3, 'muhammad', 'met', 'met');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembaca`
--
ALTER TABLE `pembaca`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `pembaca`
--
ALTER TABLE `pembaca`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Nov 2019 pada 04.57
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineshop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'admin', 'rezaldy266', 'rezaldyabidin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ongkir`
--

CREATE TABLE `ongkir` (
  `id_ongkir` int(5) NOT NULL,
  `nama_kota` varchar(200) NOT NULL,
  `tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ongkir`
--

INSERT INTO `ongkir` (`id_ongkir`, `nama_kota`, `tarif`) VALUES
(1, 'Jakarta', 20000),
(2, 'Bogor', 25000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `email_pelanggan` varchar(100) NOT NULL,
  `password_pelanggan` varchar(50) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `telepon_pelanggan` varchar(25) NOT NULL,
  `alamat_pelanggan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `email_pelanggan`, `password_pelanggan`, `nama_pelanggan`, `telepon_pelanggan`, `alamat_pelanggan`) VALUES
(1, 'rakha', 'rakhawahyu', 'rakhawahyuanda', '0898989898898', ''),
(2, 'rezaldy266@gmail.com', 'laladon03', 'rezaldy266', '08008080808', ''),
(3, 'rakha@gmail.com', 'rakha123', 'rakha', '69696', 'rakha123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_ongkir` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total_pembelian` int(11) NOT NULL,
  `nama_kota` varchar(100) NOT NULL,
  `tarif` int(11) NOT NULL,
  `alamat_pengiriman` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_pelanggan`, `id_ongkir`, `tanggal_pembelian`, `total_pembelian`, `nama_kota`, `tarif`, `alamat_pengiriman`) VALUES
(1, 1, 1, '2019-10-09', 15000000, '', 0, ''),
(2, 1, 1, '2019-10-24', 2000000, '', 0, ''),
(3, 2, 1, '2019-11-04', 295000, '', 0, ''),
(4, 2, 1, '2019-11-04', 295000, '', 0, ''),
(5, 2, 2, '2019-11-04', 300000, '', 0, ''),
(6, 2, 2, '2019-11-04', 300000, '', 0, ''),
(7, 2, 1, '2019-11-04', 295000, '', 0, ''),
(8, 2, 1, '2019-11-04', 20000, '', 0, ''),
(9, 2, 2, '2019-11-04', 100000, '', 0, ''),
(10, 2, 0, '2019-11-04', 0, '', 0, ''),
(11, 2, 0, '2019-11-04', 200000, '', 0, ''),
(12, 2, 1, '2019-11-04', 220000, '', 0, ''),
(13, 2, 1, '2019-11-04', 220000, '', 0, ''),
(14, 2, 1, '2019-11-04', 145000, 'Jakarta', 20000, ''),
(15, 2, 2, '2019-11-04', 100000, 'Bogor', 25000, 'Laladon Jawa'),
(16, 2, 1, '2019-11-04', 620000, 'Jakarta', 20000, 'Laladon'),
(17, 2, 1, '2019-11-04', 445000, 'Jakarta', 20000, 'sadwa'),
(18, 2, 2, '2019-11-04', 400000, 'Bogor', 25000, '12131wsqda');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian_produk`
--

CREATE TABLE `pembelian_produk` (
  `id_pembelian_produk` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `subberat` int(11) NOT NULL,
  `subharga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembelian_produk`
--

INSERT INTO `pembelian_produk` (`id_pembelian_produk`, `id_pembelian`, `id_produk`, `jumlah`, `nama`, `harga`, `berat`, `subberat`, `subharga`) VALUES
(1, 1, 1, 1, '', 0, 0, 0, 0),
(2, 1, 2, 1, '', 0, 0, 0, 0),
(3, 4, 5, 1, '', 0, 0, 0, 0),
(4, 4, 7, 2, '', 0, 0, 0, 0),
(5, 5, 5, 1, '', 0, 0, 0, 0),
(6, 5, 7, 2, '', 0, 0, 0, 0),
(7, 6, 5, 1, '', 0, 0, 0, 0),
(8, 6, 7, 2, '', 0, 0, 0, 0),
(9, 7, 5, 1, '', 0, 0, 0, 0),
(10, 7, 7, 2, '', 0, 0, 0, 0),
(11, 9, 7, 1, '', 0, 0, 0, 0),
(12, 11, 7, 1, '', 0, 0, 0, 0),
(13, 11, 9, 1, '', 0, 0, 0, 0),
(14, 12, 5, 1, '', 0, 0, 0, 0),
(15, 12, 6, 1, '', 0, 0, 0, 0),
(16, 13, 9, 1, 'Keranjang Es', 125000, 12, 12, 125000),
(17, 13, 7, 1, 'Ice Pack Regular', 75000, 700, 700, 75000),
(18, 14, 5, 1, 'keranjang es', 125000, 20, 20, 125000),
(19, 15, 4, 1, 'Box AG 75 Garuda', 75000, 10, 10, 75000),
(20, 16, 4, 5, 'Box AG 75 Garuda', 75000, 10, 50, 375000),
(21, 16, 6, 3, 'Ice Brasil', 75000, 10, 30, 225000),
(22, 17, 5, 1, 'keranjang es', 125000, 20, 20, 125000),
(23, 17, 6, 4, 'Ice Brasil', 75000, 10, 40, 300000),
(24, 18, 5, 3, 'keranjang es', 125000, 20, 60, 375000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `desc_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `berat`, `foto_produk`, `desc_produk`) VALUES
(4, 'Box AG 75 Garuda', 75000, 10, '9051422_7fead262-1cc4-4af0-81ec-b4ab9d19ed0e_2048_2048.jpg', 'Ukuran 75 x 42 x 32'),
(5, 'keranjang es', 125000, 20, '9051422_b11faefb-b872-403d-a8ab-17433a67eb00_2048_2048 (1).jpg', 'Ukuran 43 x 21 x24'),
(6, 'Ice Brasil', 75000, 10, '6.jpg', 'Ice Cream Sehat'),
(7, 'Ice Pack Regular', 75000, 700, '9051422_b754139a-e7dc-49d8-a1c7-db4a32f0fbea_2048_2048.jpg', 'Ukuran 22  x 9 x 3cm'),
(8, 'Box BM', 18000, 10, '9051422_93e509a5-e87f-4455-8298-1152363a0093_2048_2047.jpg', 'Ukuran 34 x 25 x 30'),
(9, 'Keranjang Es', 125000, 12, '9051422_b11faefb-b872-403d-a8ab-17433a67eb00_2048_2048.jpg', 'Ukuran 43 x 21 x24'),
(10, 'Ice Cream', 15000, 10, '7.jpg', 'Rasa Coklat'),
(11, 'Ice Pack MIni', 50000, 450, '1.jpg', 'Ukuran 17 x 9 x 3 cm');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `ongkir`
--
ALTER TABLE `ongkir`
  ADD PRIMARY KEY (`id_ongkir`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indeks untuk tabel `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD PRIMARY KEY (`id_pembelian_produk`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `ongkir`
--
ALTER TABLE `ongkir`
  MODIFY `id_ongkir` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  MODIFY `id_pembelian_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Agu 2021 pada 08.52
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentamusic`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alat_musik`
--

CREATE TABLE `alat_musik` (
  `id_alat_musik` int(5) NOT NULL,
  `nama_alat_musik` varchar(50) NOT NULL,
  `harga` int(10) NOT NULL,
  `id_pegawai` int(5) NOT NULL,
  `tipe` varchar(10) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `merk` varchar(10) NOT NULL,
  `stok` int(2) NOT NULL,
  `pic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alat_musik`
--

INSERT INTO `alat_musik` (`id_alat_musik`, `nama_alat_musik`, `harga`, `id_pegawai`, `tipe`, `jenis`, `merk`, `stok`, `pic`) VALUES
(1, 'Gitar Akustik Yamaha YM206', 150000, 1, 'YM206', 'Akustik', 'Yamaha', 9, ''),
(2, 'Bass Akustik Yamaha YB302', 180000, 1, 'YB302', 'Akustik', 'Yamaha', 8, ''),
(3, 'Mic Keren', 50000, 1, 'BM800', 'Condenser', 'BM', 8, ''),
(4, 'Drum Wow', 500000, 1, 'YM200', 'Drum', 'Yamaha', 2, ''),
(8, 'Drum Pearl', 400000, 2, 'PE201', 'Akustik', 'Pearl', 10, 'uwaw.jpg'),
(9, 'Gitar Ibanez RG Prestige warna Hitam', 300000, 2, 'RG', 'Elektrik', 'Ibanez', 5, 'ibanez.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_paket`
--

CREATE TABLE `daftar_paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(20) NOT NULL,
  `harga` int(10) NOT NULL,
  `id_pegawai` int(5) NOT NULL,
  `stok` int(2) NOT NULL,
  `pict` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar_paket`
--

INSERT INTO `daftar_paket` (`id_paket`, `nama_paket`, `harga`, `id_pegawai`, `stok`, `pict`) VALUES
(1, 'Paket Sound System', 500000, 1, 1, ''),
(2, 'Paket Wow', 700000, 2, 1, 'Hikawa_Hina_full_2699867.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(5) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `username`, `password`, `status`) VALUES
(1, 'Rizkx', 'rizk', '2d442af6e7f44eda21bf96016c6730e0', 'Aktif'),
(2, 'FSW', 'fazal', 'e4e02d924897ff998d8f4482e513d749', 'Aktif'),
(3, 'Admin Pusat', 'adm', '80177534a0c99a7e3645b52f2027a48b', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `kartu_identitas` varchar(20) NOT NULL,
  `no_identitas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `username`, `password`, `nama_pelanggan`, `alamat`, `no_hp`, `kartu_identitas`, `no_identitas`) VALUES
(2, 'fazalsaid', 'e4e02d924897ff998d8f4482e513d749', 'Fazal S', 'Jl. Janti, Gang Puntodewo No. 194 \r\nBanguntapan, Bantul, YK', '082233439041', ' KTP', '3501051604960001'),
(3, 'andyps', '03339dc0dff443f15c254baccde9bece', 'Andi P', '<i>Alamat belum ada.</i>', '123456987', '--', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyewaan`
--

CREATE TABLE `penyewaan` (
  `id_pemesanan` int(5) NOT NULL,
  `kode_penyewaan` varchar(5) NOT NULL,
  `id_alat_musik` int(5) NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `tgl_jatuh_tempo` date NOT NULL,
  `id_pelanggan` int(5) NOT NULL,
  `id_paket` int(5) NOT NULL,
  `id_pegawai` int(5) NOT NULL,
  `jumlah` int(2) NOT NULL,
  `jumlah_hari` int(11) NOT NULL,
  `jumlah_hari_telat` int(11) NOT NULL,
  `denda` int(11) NOT NULL,
  `total_bayar` int(20) NOT NULL,
  `status_bayar` varchar(20) NOT NULL,
  `status_sewa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penyewaan`
--

INSERT INTO `penyewaan` (`id_pemesanan`, `kode_penyewaan`, `id_alat_musik`, `tgl_pemesanan`, `tgl_jatuh_tempo`, `id_pelanggan`, `id_paket`, `id_pegawai`, `jumlah`, `jumlah_hari`, `jumlah_hari_telat`, `denda`, `total_bayar`, `status_bayar`, `status_sewa`) VALUES
(4, 'GM971', 1, '2021-06-17', '2021-06-19', 2, 0, 1, 1, 2, 0, 0, 300000, 'Lunas', 'Disewa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alat_musik`
--
ALTER TABLE `alat_musik`
  ADD PRIMARY KEY (`id_alat_musik`);

--
-- Indeks untuk tabel `daftar_paket`
--
ALTER TABLE `daftar_paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `penyewaan`
--
ALTER TABLE `penyewaan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alat_musik`
--
ALTER TABLE `alat_musik`
  MODIFY `id_alat_musik` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `daftar_paket`
--
ALTER TABLE `daftar_paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `penyewaan`
--
ALTER TABLE `penyewaan`
  MODIFY `id_pemesanan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

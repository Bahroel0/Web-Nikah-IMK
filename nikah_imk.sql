-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10 Apr 2018 pada 09.29
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nikah_imk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_ayah`
--

CREATE TABLE `tabel_ayah` (
  `id` int(11) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `warganegara` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_ayah`
--

INSERT INTO `tabel_ayah` (`id`, `nama_ayah`, `tempat`, `tanggal`, `warganegara`, `agama`, `pekerjaan`, `alamat`) VALUES
(1, 'Ahmad Thohari', 'Tuban', '3 December, 2017', 'Indonesia', '1', 'Tani', 'Bancar Tuban');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_domisili`
--

CREATE TABLE `tabel_domisili` (
  `id` int(11) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `desa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_domisili`
--

INSERT INTO `tabel_domisili` (`id`, `kabupaten`, `kecamatan`, `desa`) VALUES
(1, 'Tuban', 'Bancar', 'Bancar'),
(2, 'Tuban', 'bancar', 'bancar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_ibu`
--

CREATE TABLE `tabel_ibu` (
  `id` int(11) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `warganegara` varchar(30) NOT NULL,
  `agama` varchar(25) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_ibu`
--

INSERT INTO `tabel_ibu` (`id`, `nama_ibu`, `tempat`, `tanggal`, `warganegara`, `agama`, `pekerjaan`, `alamat`) VALUES
(1, 'Siti Asiyah', 'Tuban', '9 December, 2017', 'Indonesia', '1', 'Pedagang', 'Bancar Tuban');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_mantan`
--

CREATE TABLE `tabel_mantan` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `warganegara` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `meninggal_pada` varchar(50) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_pasangan`
--

CREATE TABLE `tabel_pasangan` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `warganegara` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_pasangan`
--

INSERT INTO `tabel_pasangan` (`id`, `nama_lengkap`, `nama_ayah`, `tempat_lahir`, `tanggal_lahir`, `warganegara`, `agama`, `pekerjaan`, `alamat`) VALUES
(1, 'Rizqiyatus Zahra', 'Muh Harun', 'Tuban', '6 December, 2017', 'Indonesia', '1', 'Pegawai', 'Jl Raya Bancar RT 05 RW 02 Bancar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_pria`
--

CREATE TABLE `tabel_pria` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `warganegara` varchar(50) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `tempat_tinggal` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `nama_istri_terdahulu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_pria`
--

INSERT INTO `tabel_pria` (`id`, `nama_lengkap`, `nama_ayah`, `tempat_lahir`, `tanggal_lahir`, `warganegara`, `agama`, `pekerjaan`, `tempat_tinggal`, `status`, `nama_istri_terdahulu`) VALUES
(13, 'dasd', 'asdas', 'dasdas', '31 December, 2017', 'dasdas', 'Konghucu', 'dasdas', 'dasdasdasdsad', 'Jejaka', ''),
(14, 'Bahrul Amaruddin', 'Ahmad Tohari', 'Tuban', '9 May, 1997', 'Indonesia', 'Islam', 'Wirausaha', 'RT 05 RW 02 Bancar Tuban', 'Jejaka', ''),
(15, 'Bahrul Amaruddin', 'Tihari', 'Tuban', '22 December, 2017', 'Indonesia', 'Islam', 'Tani', 'Bancar', 'Jejaka', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_rencana`
--

CREATE TABLE `tabel_rencana` (
  `id` int(11) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `jam` varchar(50) NOT NULL,
  `mas_kawin` varchar(50) NOT NULL,
  `dibayar` varchar(50) NOT NULL,
  `tempat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_rencana`
--

INSERT INTO `tabel_rencana` (`id`, `hari`, `tanggal`, `jam`, `mas_kawin`, `dibayar`, `tempat`) VALUES
(1, 'Jumat', '29 December, 2017', '15:30', '1 Bitcoin', '1', 'Rumah mempelai wanita ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_wanita`
--

CREATE TABLE `tabel_wanita` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `warganegara` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `tempat_tinggal` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `nama_suami_terdahulu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_ayah`
--
ALTER TABLE `tabel_ayah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_domisili`
--
ALTER TABLE `tabel_domisili`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_ibu`
--
ALTER TABLE `tabel_ibu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_mantan`
--
ALTER TABLE `tabel_mantan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_pasangan`
--
ALTER TABLE `tabel_pasangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_pria`
--
ALTER TABLE `tabel_pria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_rencana`
--
ALTER TABLE `tabel_rencana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_wanita`
--
ALTER TABLE `tabel_wanita`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_ayah`
--
ALTER TABLE `tabel_ayah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabel_domisili`
--
ALTER TABLE `tabel_domisili`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tabel_ibu`
--
ALTER TABLE `tabel_ibu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabel_mantan`
--
ALTER TABLE `tabel_mantan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabel_pasangan`
--
ALTER TABLE `tabel_pasangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabel_pria`
--
ALTER TABLE `tabel_pria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tabel_rencana`
--
ALTER TABLE `tabel_rencana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabel_wanita`
--
ALTER TABLE `tabel_wanita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

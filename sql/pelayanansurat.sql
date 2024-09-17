-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 05:51 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pelayanansurat`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jekel` enum('Laki-laki','Perempuan') NOT NULL,
  `role_id` int(2) NOT NULL,
  `password` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `nama`, `email`, `jekel`, `role_id`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@gmail.com', 'Laki-laki', 1, '$2y$10$zedAdfe5XgVeOX1MyqCK5uxwdlbZeI/jAh92IKfz/92IM7ROfTIuu', '2022-03-17 13:47:13', '0000-00-00 00:00:00'),
(2, 'Kepala Desa', 'kades@gmail.com', 'Laki-laki', 2, '$2y$10$Q93HdyfptAa5TQPWEd/BJewVoUu0k4Rlo9ke2taQU73vXxSwsJQ7q', '2022-03-17 13:47:51', '2022-03-31 17:56:46');

-- --------------------------------------------------------

--
-- Table structure for table `surat_domisili`
--

CREATE TABLE `surat_domisili` (
  `id` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `jenis_surat` varchar(50) NOT NULL,
  `nomor_surat` varchar(20) NOT NULL,
  `tanggal_surat` varchar(25) NOT NULL,
  `tanggal_kadaluarsa` varchar(25) NOT NULL,
  `keperluan` text NOT NULL,
  `file_kk` varchar(225) NOT NULL,
  `file_ktp` varchar(225) NOT NULL,
  `status` varchar(20) NOT NULL,
  `komentar` text NOT NULL,
  `notifikasi` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat_domisili`
--

INSERT INTO `surat_domisili` (`id`, `id_warga`, `jenis_surat`, `nomor_surat`, `tanggal_surat`, `tanggal_kadaluarsa`, `keperluan`, `file_kk`, `file_ktp`, `status`, `komentar`, `notifikasi`, `created_at`, `updated_at`) VALUES
(1, 1, 'SURAT KETERANGAN DOMISILI', '001/SKD/04/2022', '11/04/2022', '11/05/2022', 'Untuk pindah', 'skd-id-1-tgl20220411-1210-834.jpeg', 'skd-id-1-tgl20220411-1210-308.jpeg', 'Diterima', '', 0, '2022-04-11 06:12:10', '0000-00-00 00:00:00'),
(2, 1, 'SURAT KETERANGAN DOMISILI', '002/SKD/06/2022', '21/06/2022', '21/07/2022', 'qweqwewq', 'skd-id-1-tgl20220621-4507-594.jpg', 'skd-id-1-tgl20220621-4507-486.jpg', 'Menunggu Verifikasi', '', 0, '2022-06-21 17:45:07', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `surat_kelahiran`
--

CREATE TABLE `surat_kelahiran` (
  `id` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `jenis_surat` varchar(40) NOT NULL,
  `nomor_surat` varchar(20) NOT NULL,
  `tanggal_surat` varchar(20) NOT NULL,
  `tanggal_kadaluarsa` varchar(20) NOT NULL,
  `ayah` varchar(30) NOT NULL,
  `ibu` varchar(30) NOT NULL,
  `no_kk` int(16) NOT NULL,
  `nama_bayi` varchar(30) NOT NULL,
  `jekel_b` varchar(10) NOT NULL,
  `tempat_lahir_b` varchar(20) NOT NULL,
  `tanggal_lahir_b` date NOT NULL,
  `anak_ke` int(2) NOT NULL,
  `agama_b` varchar(10) NOT NULL,
  `kewarganegaraan_b` varchar(10) NOT NULL,
  `alamat_b` text NOT NULL,
  `keperluan` text NOT NULL,
  `file_kk` varchar(225) NOT NULL,
  `file_ktp` varchar(225) NOT NULL,
  `status` varchar(20) NOT NULL,
  `komentar` text DEFAULT NULL,
  `notifikasi` int(2) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat_kelahiran`
--

INSERT INTO `surat_kelahiran` (`id`, `id_warga`, `jenis_surat`, `nomor_surat`, `tanggal_surat`, `tanggal_kadaluarsa`, `ayah`, `ibu`, `no_kk`, `nama_bayi`, `jekel_b`, `tempat_lahir_b`, `tanggal_lahir_b`, `anak_ke`, `agama_b`, `kewarganegaraan_b`, `alamat_b`, `keperluan`, `file_kk`, `file_ktp`, `status`, `komentar`, `notifikasi`, `created_at`, `updated_at`) VALUES
(1, 1, 'SURAT PENGANTAR AKTE KELAHIRAN', '001/SKPAK/04/2022', '11/04/2022', '11/05/2022', 'Sujono', 'Sutiem', 2147483647, 'Ahmad Rossyi Al Awwalu', 'Laki - Lak', 'Jepara', '2022-04-11', 2, 'Islam', 'WNI', 'Desa Brantaksekarjati', 'Untuk Membuat Akte Kelahiran Baru', 'spak-id-1-tgl20220411-2214-825.jpeg', 'spak-id-1-tgl20220411-2214-909.jpeg', 'Diterima', NULL, 0, '2022-04-11 06:22:14', '0000-00-00 00:00:00'),
(2, 1, 'SURAT PENGANTAR AKTE KELAHIRAN', '002/SKPAK/06/2022', '21/06/2022', '21/07/2022', 'qwewqe', 'qwewq', 2147483647, '123123123', 'Laki - Lak', 'qweqwe', '2022-06-10', 1, 'Kristen', 'WNI', 'qeqweqwe', '2321xasdasdsadsad', 'spak-id-1-tgl20220621-4233-920.jpg', 'spak-id-1-tgl20220621-4233-85.jpg', 'Menunggu Verifikasi', NULL, NULL, '2022-06-21 17:42:33', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `surat_kematian`
--

CREATE TABLE `surat_kematian` (
  `id` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `jenis_surat` varchar(50) NOT NULL,
  `nomor_surat` varchar(20) NOT NULL,
  `tanggal_surat` varchar(25) NOT NULL,
  `tanggal_kadaluarsa` varchar(25) NOT NULL,
  `hubungan` varchar(100) NOT NULL,
  `nama_alm` varchar(50) NOT NULL,
  `bin` varchar(50) NOT NULL,
  `nik_a` varchar(30) NOT NULL,
  `jekel_a` varchar(15) NOT NULL,
  `tempat_lahir_a` varchar(20) NOT NULL,
  `tanggal_lahir_a` varchar(20) NOT NULL,
  `kewarganegaraan_a` varchar(5) NOT NULL,
  `status_perkawinan_a` varchar(10) NOT NULL,
  `pekerjaan_a` varchar(225) NOT NULL,
  `alamat_a` text NOT NULL,
  `file_kk` varchar(225) NOT NULL,
  `file_ktp` varchar(225) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `tanggal_meninggal` varchar(20) NOT NULL,
  `jam_meninggal` varchar(10) NOT NULL,
  `tempat_meninggal` varchar(225) NOT NULL,
  `sebab_meninggal` varchar(225) NOT NULL,
  `tempat_pemakaman` varchar(100) NOT NULL,
  `keperluan` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `komentar` text DEFAULT NULL,
  `notifikasi` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat_kematian`
--

INSERT INTO `surat_kematian` (`id`, `id_warga`, `jenis_surat`, `nomor_surat`, `tanggal_surat`, `tanggal_kadaluarsa`, `hubungan`, `nama_alm`, `bin`, `nik_a`, `jekel_a`, `tempat_lahir_a`, `tanggal_lahir_a`, `kewarganegaraan_a`, `status_perkawinan_a`, `pekerjaan_a`, `alamat_a`, `file_kk`, `file_ktp`, `hari`, `tanggal_meninggal`, `jam_meninggal`, `tempat_meninggal`, `sebab_meninggal`, `tempat_pemakaman`, `keperluan`, `status`, `komentar`, `notifikasi`, `created_at`, `updated_at`) VALUES
(1, 1, 'SURAT KETERANGAN KEMATIAN', '001/SKK/04/2022', '11/04/2022', '11/05/2022', 'Keponakan', 'mujnah', 'somat', '030302939392923', 'Laki - Laki', 'Jepara', '1998-02-11', 'WNI', 'Janda', 'Mantan TK', 'Jepara Desa Brantaksekarjati', 'skk-id-1-tgl20220411-2410-42.jpeg', 'skk-id-1-tgl20220411-2410-290.jpeg', 'Senin', '2022-04-11', '09:00', 'RSUD Kartini Jepara', 'Sakit Keras', 'TPU Desa Setempat', 'Untuk Keterangan', 'Diterima', NULL, 0, '2022-04-11 06:24:10', '0000-00-00 00:00:00'),
(2, 1, 'SURAT KETERANGAN KEMATIAN', '002/SKK/06/2022', '21/06/2022', '21/07/2022', 'sadsadsad', 'asdsad', 'asdsad', '1111111111111111', 'Laki - Laki', 'asdas', '2022-06-15', 'WNI', 'Kawin', 'asdasds', 'asdasdasd', 'skk-id-1-tgl20220621-4958-669.jpeg', 'skk-id-1-tgl20220621-4958-85.jpg', 'Selasa', '2022-06-14', '22:51', 'dasdasd', 'dasasd', 'TPU Desa', 'sadasdsadasd', 'Menunggu Verifikasi', NULL, 0, '2022-06-21 17:49:58', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keterangan_pengantar`
--

CREATE TABLE `surat_keterangan_pengantar` (
  `id` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `jenis_surat` varchar(50) NOT NULL,
  `nomor_surat` varchar(20) NOT NULL,
  `tanggal_surat` varchar(20) NOT NULL,
  `tanggal_kadaluarsa` varchar(20) NOT NULL,
  `keperluan` text NOT NULL,
  `file_kk` varchar(100) NOT NULL,
  `file_ktp` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `komentar` text DEFAULT NULL,
  `notifikasi` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat_keterangan_pengantar`
--

INSERT INTO `surat_keterangan_pengantar` (`id`, `id_warga`, `jenis_surat`, `nomor_surat`, `tanggal_surat`, `tanggal_kadaluarsa`, `keperluan`, `file_kk`, `file_ktp`, `status`, `komentar`, `notifikasi`, `created_at`, `updated_at`) VALUES
(1, 1, 'SURAT KETERANGAN PENGANTAR', '002/SKP/04/2022', '11/04/2022', '11/05/2022', 'Untuk Pengantar Kerja Ke Malaysia', 'skp-id-1-tgl20220411-2037-350.jpeg', 'skp-id-1-tgl20220411-2037-562.jpeg', 'Diterima', NULL, 0, '2022-04-11 06:20:37', '0000-00-00 00:00:00'),
(2, 1, 'SURAT KETERANGAN PENGANTAR', '003/SKP/06/2022', '21/06/2022', '21/07/2022', 'dasdsds', 'skp-id-1-tgl20220621-4744-427.jpg', 'skp-id-1-tgl20220621-4744-892.jpg', 'Menunggu Verifikasi', NULL, 0, '2022-06-21 17:47:44', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `surat_tidak_mampu`
--

CREATE TABLE `surat_tidak_mampu` (
  `id` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `jenis_surat` varchar(50) NOT NULL,
  `nomor_surat` varchar(50) NOT NULL,
  `tanggal_surat` varchar(25) NOT NULL,
  `tanggal_kadaluarsa` varchar(25) NOT NULL,
  `keperluan` text NOT NULL,
  `tanggungan` varchar(10) NOT NULL,
  `file_kk` varchar(225) NOT NULL,
  `file_ktp` varchar(225) NOT NULL,
  `file_rumah` varchar(225) NOT NULL,
  `status` varchar(20) NOT NULL,
  `notifikasi` int(2) NOT NULL,
  `komentar` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat_tidak_mampu`
--

INSERT INTO `surat_tidak_mampu` (`id`, `id_warga`, `jenis_surat`, `nomor_surat`, `tanggal_surat`, `tanggal_kadaluarsa`, `keperluan`, `tanggungan`, `file_kk`, `file_ktp`, `file_rumah`, `status`, `notifikasi`, `komentar`, `created_at`, `updated_at`) VALUES
(1, 1, 'SURAT KETERANGAN TIDAK MAMPU', '001/SKTM/04/2022', '11/04/2022', '11/05/2022', 'Untuk kuliah', '', 'sktm-id-1-tgl20220411-0000-775.jpeg', 'sktm-id-1-tgl20220411-0000-393.jpeg', '', 'Diterima', 0, '', '2022-04-11 06:00:01', '0000-00-00 00:00:00'),
(2, 1, 'SURAT KETERANGAN TIDAK MAMPU', '002/SKTM/04/2022', '11/04/2022', '11/05/2022', 'Buat mendaftar KIP', '', 'sktm-id-1-tgl20220411-0626-725.jpeg', 'sktm-id-1-tgl20220411-0626-248.png', '', 'Diterima', 0, '', '2022-04-11 06:06:26', '0000-00-00 00:00:00'),
(3, 1, 'SURAT KETERANGAN TIDAK MAMPU', '003/SKTM/06/2022', '18/06/2022', '18/07/2022', 'Lorem ipsum dolor sit amet', '10', 'sktm-id-1-tgl20220618-5951-45.jpg', 'sktm-id-1-tgl20220618-5951-477.jpg', 'sktm-id-1-tgl20220618-5951-190.jpg', 'Terverifikasi', 0, '', '2022-06-18 23:59:51', '0000-00-00 00:00:00'),
(4, 1, 'SURAT KETERANGAN TIDAK MAMPU', '004/SKTM/06/2022', '19/06/2022', '19/07/2022', 'adasdasdasd', '231', 'sktm-id-1-tgl20220619-0908-5.jpeg', 'sktm-id-1-tgl20220619-0908-465.jpg', 'sktm-id-1-tgl20220619-0908-663.jpg', 'Terverifikasi', 0, '', '2022-06-19 00:09:08', '0000-00-00 00:00:00'),
(9, 2, 'SURAT KETERANGAN TIDAK MAMPU', '005/SKTM/06/2022', '19/06/2022', '19/07/2022', 'adsdass', '1212', 'sktm-id-2-tgl20220619-3444-457.jpg', 'sktm-id-2-tgl20220619-3444-104.jpg', 'sktm-id-2-tgl20220619-3444-146.jpeg', 'Menunggu Verifikasi', 0, '', '2022-06-19 00:34:44', '0000-00-00 00:00:00'),
(10, 1, 'SURAT KETERANGAN TIDAK MAMPU', '010/SKTM/06/2022', '19/06/2022', '19/07/2022', 'adasdas', '132', 'sktm-id-1-tgl20220619-3529-185.jpg', 'sktm-id-1-tgl20220619-3529-909.jpg', 'sktm-id-1-tgl20220619-3529-739.jpg', 'Menunggu Verifikasi', 0, '', '2022-06-19 00:35:29', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `surat_usaha`
--

CREATE TABLE `surat_usaha` (
  `id` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `jenis_surat` varchar(50) NOT NULL,
  `nomor_surat` varchar(20) NOT NULL,
  `tanggal_surat` varchar(25) NOT NULL,
  `tanggal_kadaluarsa` varchar(25) NOT NULL,
  `nama_usaha` varchar(225) NOT NULL,
  `tgl_mulai` varchar(20) NOT NULL,
  `alamat_usaha` text NOT NULL,
  `keperluan` text NOT NULL,
  `file_kk` varchar(225) NOT NULL,
  `file_ktp` varchar(225) NOT NULL,
  `status` varchar(20) NOT NULL,
  `komentar` text NOT NULL,
  `notifikasi` varchar(2) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='f';

--
-- Dumping data for table `surat_usaha`
--

INSERT INTO `surat_usaha` (`id`, `id_warga`, `jenis_surat`, `nomor_surat`, `tanggal_surat`, `tanggal_kadaluarsa`, `nama_usaha`, `tgl_mulai`, `alamat_usaha`, `keperluan`, `file_kk`, `file_ktp`, `status`, `komentar`, `notifikasi`, `created_at`, `updated_at`) VALUES
(1, 1, 'SURAT KETERANGAN USAHA', '001/SKU/04/2022', '11/04/2022', '11/05/2022', 'Alfatechnology', '2022-04-12', 'Kelet Keling Jepara', 'Untuk Rekomendasi naik status ke PT', 'sku-id-1-tgl20220411-1938-534.jpeg', 'sku-id-1-tgl20220411-1938-718.jpeg', 'Diterima', '', '0', '2022-04-11 06:19:38', '0000-00-00 00:00:00'),
(2, 1, 'SURAT KETERANGAN USAHA', '002/SKU/06/2022', '21/06/2022', '21/07/2022', 'Lorem', '2022-06-21', 'Lorem', 'lorem', 'sku-id-1-tgl20220621-3308-496.jpg', 'sku-id-1-tgl20220621-3308-303.jpeg', 'Menunggu Verifikasi', '', NULL, '2022-06-21 17:33:08', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role_id` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `id_warga`, `email`, `password`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'warga@gmail.com', '$2y$10$jhMdmG3aC8PFcYcY00ikPOzUNowUHPYoZ/yQi0dird.Oe5Pz6KklK', 3, '2022-04-11 05:55:19', '0000-00-00 00:00:00'),
(2, 2, 'warga2@gmail.com', '$2y$10$cHPfa5PJhazV7JZWLDandO25LbX9TIxBpGC40JblWW.CsV2UCw1Bu', 3, '2022-06-19 00:33:35', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE `warga` (
  `id_warga` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jekel` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` varchar(10) NOT NULL,
  `golongan_darah` varchar(4) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `status_pernikahan` varchar(20) NOT NULL,
  `pekerjaan` varchar(225) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `rt` int(5) NOT NULL,
  `rw` int(5) NOT NULL,
  `alamat` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`id_warga`, `nik`, `nama`, `jekel`, `agama`, `golongan_darah`, `pendidikan`, `status_pernikahan`, `pekerjaan`, `tempat_lahir`, `tgl_lahir`, `rt`, `rw`, `alamat`, `created_at`, `updated_at`) VALUES
(1, '1234567891234567', 'Warga Desa Brantaksekarjati', 'Laki-laki', 'Islam', 'Tida', 'Tamat SMA/Sederajat', 'Belum Menikah', 'Freelancer', 'Jepara', '2000-02-02', 1, 3, 'Desa Brantaksekarjati, Rt.001/Rw.002 Kecamatan Welahan Kabupaten Jepara', '2022-04-02 00:03:14', '0000-00-00 00:00:00'),
(2, '1111111111111111', 'Muhammad', 'Laki-laki', 'Islam', 'A', 'Tamat SD/Sederajat', 'Menikah', 'Lorme', 'Lorem', '2022-12-31', 1, 2, 'Lorem', '2022-06-19 05:32:50', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_domisili`
--
ALTER TABLE `surat_domisili`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_warga` (`id_warga`);

--
-- Indexes for table `surat_kelahiran`
--
ALTER TABLE `surat_kelahiran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_warga` (`id_warga`);

--
-- Indexes for table `surat_kematian`
--
ALTER TABLE `surat_kematian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_warga` (`id_warga`);

--
-- Indexes for table `surat_keterangan_pengantar`
--
ALTER TABLE `surat_keterangan_pengantar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_warga` (`id_warga`);

--
-- Indexes for table `surat_tidak_mampu`
--
ALTER TABLE `surat_tidak_mampu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wr` (`id_warga`);

--
-- Indexes for table `surat_usaha`
--
ALTER TABLE `surat_usaha`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_warga` (`id_warga`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`),
  ADD KEY `warga_rel` (`id_warga`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id_warga`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `surat_domisili`
--
ALTER TABLE `surat_domisili`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `surat_kelahiran`
--
ALTER TABLE `surat_kelahiran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `surat_kematian`
--
ALTER TABLE `surat_kematian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `surat_keterangan_pengantar`
--
ALTER TABLE `surat_keterangan_pengantar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `surat_tidak_mampu`
--
ALTER TABLE `surat_tidak_mampu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `surat_usaha`
--
ALTER TABLE `surat_usaha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `id_warga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `surat_domisili`
--
ALTER TABLE `surat_domisili`
  ADD CONSTRAINT `surat_domisili_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `surat_kelahiran`
--
ALTER TABLE `surat_kelahiran`
  ADD CONSTRAINT `surat_kelahiran_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `surat_kematian`
--
ALTER TABLE `surat_kematian`
  ADD CONSTRAINT `surat_kematian_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `surat_keterangan_pengantar`
--
ALTER TABLE `surat_keterangan_pengantar`
  ADD CONSTRAINT `surat_keterangan_pengantar_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `surat_tidak_mampu`
--
ALTER TABLE `surat_tidak_mampu`
  ADD CONSTRAINT `wr` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `surat_usaha`
--
ALTER TABLE `surat_usaha`
  ADD CONSTRAINT `surat_usaha_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `warga_rel` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

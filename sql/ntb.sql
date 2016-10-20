-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2016 at 04:12 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ntb`
--

-- --------------------------------------------------------

--
-- Table structure for table `master_jab_kabkota`
--

CREATE TABLE IF NOT EXISTS `master_jab_kabkota` (
  `jab_kode` int(2) NOT NULL,
  `jab_nama` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_jab_prov`
--

CREATE TABLE IF NOT EXISTS `master_jab_prov` (
  `jabatan_kode` bigint(4) NOT NULL,
  `jabatan_nama` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_jab_prov`
--

INSERT INTO `master_jab_prov` (`jabatan_kode`, `jabatan_nama`) VALUES
(1, 'Kepala BPS');

-- --------------------------------------------------------

--
-- Table structure for table `m_agama`
--

CREATE TABLE IF NOT EXISTS `m_agama` (
`agama_kode` int(1) NOT NULL,
  `agama_nama` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_agama`
--

INSERT INTO `m_agama` (`agama_kode`, `agama_nama`) VALUES
(1, 'ISLAM'),
(2, 'PROTESTAN'),
(3, 'KATOLIK'),
(4, 'HINDU'),
(5, 'BUDHA'),
(6, 'KONGHUCU');

-- --------------------------------------------------------

--
-- Table structure for table `m_gol`
--

CREATE TABLE IF NOT EXISTS `m_gol` (
  `gol_kode` int(2) NOT NULL,
  `gol_nama` varchar(5) NOT NULL,
  `gol_jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_gol`
--

INSERT INTO `m_gol` (`gol_kode`, `gol_nama`, `gol_jabatan`) VALUES
(11, 'I/a', 'JURU MUDA'),
(12, 'I/b', 'JURU MUDA TINGKAT I'),
(13, 'I/c', 'JURU'),
(14, 'I/d', 'JURU TINGKAT I'),
(21, 'II/a', 'PENGATUR MUDA'),
(22, 'II/b', 'PENGATUR MUDA TINGKAT I'),
(23, 'II/c', 'PENGATUR'),
(24, 'II/d', 'PENGATUR TINGKAT I'),
(31, 'III/a', 'PENATA MUDA'),
(32, 'III/b', 'PENATA MUDA TINGKAT I'),
(33, 'III/c', 'PENATA'),
(34, 'III/d', 'PENATA TINGKAT I'),
(41, 'IV/a', 'PEMBINA'),
(42, 'IV/b', 'PEMBINA TINGKAT I'),
(43, 'IV/c', 'PEMBINA UTAMA MUDA'),
(44, 'IV/d', 'PEMBINA UTAMA MADYA'),
(45, 'IV/e', 'PEMBINA UTAMA');

-- --------------------------------------------------------

--
-- Table structure for table `m_pegawai`
--

CREATE TABLE IF NOT EXISTS `m_pegawai` (
  `pegawai_nip` bigint(18) NOT NULL,
  `pegawai_nama` varchar(100) NOT NULL,
  `pegawai_nama_panggilan` varchar(20) NOT NULL,
  `pegawai_gelar_depan` varchar(10) NOT NULL,
  `pegawai_gelar_blkg` varchar(20) NOT NULL,
  `pegawai_nip_lama` bigint(9) NOT NULL,
  `pegawai_agama` int(1) NOT NULL,
  `pegawai_jk` int(1) NOT NULL,
  `pegawai_tempat_lahir` varchar(20) NOT NULL,
  `pegawai_tgl_lahir` date NOT NULL,
  `pegawai_tmt_cpns` date NOT NULL,
  `pegawai_tmt_pns` date NOT NULL,
  `pegawai_gol_cpns` int(2) NOT NULL,
  `pegawai_gol_pns` int(2) NOT NULL,
  `pegawai_nik` bigint(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_pegawai`
--

INSERT INTO `m_pegawai` (`pegawai_nip`, `pegawai_nama`, `pegawai_nama_panggilan`, `pegawai_gelar_depan`, `pegawai_gelar_blkg`, `pegawai_nip_lama`, `pegawai_agama`, `pegawai_jk`, `pegawai_tempat_lahir`, `pegawai_tgl_lahir`, `pegawai_tmt_cpns`, `pegawai_tmt_pns`, `pegawai_gol_cpns`, `pegawai_gol_pns`, `pegawai_nik`) VALUES
(198203192004121002, 'I PUTU DYATMIKA', 'MIKA', '', 'S.ST', 340017401, 4, 1, 'MATARAM', '1982-03-19', '2004-12-01', '2005-12-01', 31, 34, 5272031903820005);

-- --------------------------------------------------------

--
-- Table structure for table `m_unitkerja`
--

CREATE TABLE IF NOT EXISTS `m_unitkerja` (
  `unit_kode` int(5) NOT NULL,
  `unit_nama` varchar(255) NOT NULL,
  `unit_parent` int(5) DEFAULT NULL,
  `unit_dibuat_oleh` bigint(18) NOT NULL,
  `unit_dibuat_waktu` datetime NOT NULL,
  `unit_diupdate_oleh` bigint(18) NOT NULL,
  `unit_diupdate_waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `unit_jenis` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_unitkerja`
--

INSERT INTO `m_unitkerja` (`unit_kode`, `unit_nama`, `unit_parent`, `unit_dibuat_oleh`, `unit_dibuat_waktu`, `unit_diupdate_oleh`, `unit_diupdate_waktu`, `unit_jenis`) VALUES
(52000, 'BPS Provinsi Nusa Tenggara Barat', NULL, 198203192004121002, '2016-10-20 10:42:20', 198203192004121002, '2016-10-20 02:42:20', 1),
(52010, 'BPS Kabupaten Lombok Barat', 52000, 198203192004121002, '2016-10-20 10:47:52', 198203192004121002, '2016-10-20 02:47:52', 2),
(52020, 'BPS Kabupaten Lombok Tengah', 52000, 198203192004121002, '2016-10-20 10:42:42', 198203192004121002, '2016-10-20 02:42:42', 2),
(52030, 'BPS Kabupaten Lombok Timur', 52000, 198203192004121002, '2016-10-20 10:48:09', 198203192004121002, '2016-10-20 02:48:09', 2),
(52040, 'BPS Kabupaten Sumbawa', 52000, 198203192004121002, '2016-10-20 10:48:23', 198203192004121002, '2016-10-20 02:48:23', 2),
(52050, 'BPS Kabupaten Dompu', 52000, 198203192004121002, '2016-10-20 10:48:56', 198203192004121002, '2016-10-20 02:48:56', 2),
(52060, 'BPS Kabupaten Bima', 52000, 198203192004121002, '2016-10-20 10:49:22', 198203192004121002, '2016-10-20 02:49:22', 2),
(52070, 'BPS Kabupaten Sumbawa Barat', 52000, 198203192004121002, '2016-10-20 10:49:41', 198203192004121002, '2016-10-20 02:49:41', 2),
(52080, 'BPS Kabupaten Lombok Utara', 52000, 198203192004121002, '2016-10-20 10:49:52', 198203192004121002, '2016-10-20 02:49:52', 2),
(52510, 'Bagian Tata Usaha', 52000, 198203192004121002, '2016-10-20 10:53:21', 198203192004121002, '2016-10-20 02:53:21', 1),
(52511, 'Subbagian Bina Program', 52510, 198203192004121002, '2016-10-20 14:43:21', 198203192004121002, '2016-10-20 06:43:22', 1),
(52513, 'Subbagian Keuangan ', 52510, 99999999999, '2016-10-20 16:27:23', 99999999999, '2016-10-20 08:27:23', 1),
(52514, 'Subbagian Urusan Dalam', 52510, 99999999999, '2016-10-20 16:27:52', 99999999999, '2016-10-20 08:27:52', 1),
(52520, 'Bidang Statistik Sosial', 52000, 198203192004121002, '2016-10-20 10:53:37', 198203192004121002, '2016-10-20 02:53:37', 1),
(52521, 'Seksi Statistik Kependudukan', 52520, 198203192004121002, '2016-10-20 14:56:04', 198203192004121002, '2016-10-20 06:56:04', 1),
(52530, 'Bidang Statistik Produksi', 52000, 198203192004121002, '2016-10-20 10:58:38', 198203192004121002, '2016-10-20 02:58:38', 1),
(52540, 'Bidang Statistik Distribusi', 52000, 198203192004121002, '2016-10-20 10:59:15', 198203192004121002, '2016-10-20 02:59:15', 1),
(52550, 'Seksi Neraca Wilayah dan Analisis Statistik', 52000, 198203192004121002, '2016-10-20 10:47:28', 99999999999, '2016-10-20 08:26:10', 1),
(52560, 'Bidang Integrasi Pengolahan dan Diseminasi Statistik', 52000, 198203192004121002, '2016-10-20 10:43:05', 198203192004121002, '2016-10-20 02:43:05', 1),
(52561, 'Seksi Integrasi Pengolahan Data', 52560, 198203192004121002, '2016-10-20 10:43:30', 198203192004121002, '2016-10-20 02:43:30', 1),
(52562, 'Seksi Jaringan dan Rujukan Statistik', 52560, 198203192004121002, '2016-10-20 10:44:52', 198203192004121002, '2016-10-20 02:44:52', 1),
(52563, 'Seksi Diseminasi dan Layanan Statistik', 52560, 198203192004121002, '2016-10-20 10:44:18', 198203192004121002, '2016-10-20 02:44:18', 1),
(52710, 'BPS Kota Mataram', 52000, 198203192004121002, '2016-10-20 10:46:35', 198203192004121002, '2016-10-20 02:46:35', 2),
(52720, 'BPS Kota Bima', 52000, 198203192004121002, '2016-10-20 20:51:18', 198203192004121002, '2016-10-20 12:51:18', 2);

-- --------------------------------------------------------

--
-- Table structure for table `peg_dt_pokok`
--

CREATE TABLE IF NOT EXISTS `peg_dt_pokok` (
  `peg_nip` bigint(18) NOT NULL,
  `peg_kawin` int(1) NOT NULL,
  `peg_gol_terakhir` int(2) NOT NULL,
  `peg_pendidikan` int(2) NOT NULL,
  `peg_jab` int(11) NOT NULL,
  `peg_npwp` varchar(50) NOT NULL,
  `peg_karpeg` varchar(20) NOT NULL,
  `peg_askes` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peg_dt_pokok`
--

INSERT INTO `peg_dt_pokok` (`peg_nip`, `peg_kawin`, `peg_gol_terakhir`, `peg_pendidikan`, `peg_jab`, `peg_npwp`, `peg_karpeg`, `peg_askes`) VALUES
(198203192004121002, 2, 34, 7, 5200134, '470606211913000', 'M 104062', '0000146483335');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE IF NOT EXISTS `profil` (
  `profil_nip` bigint(18) NOT NULL,
  `profil_nama` varchar(100) NOT NULL,
  `profil_email` varchar(100) NOT NULL,
  `profil_photo` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `setting_nama` varchar(20) NOT NULL,
  `setting_nilai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`setting_nama`, `setting_nilai`) VALUES
('bps_alamat', 'Jl. Gunung Rinjani No. 2 Mataram NTB 83126'),
('bps_email', 'ntb@bps.go.id'),
('bps_fax', '0370 612345'),
('bps_nama', 'BPS Provinsi Nusa Tenggara Barat'),
('bps_telepon', '0370 625381'),
('bps_timezone', 'Asia/Makassar'),
('bps_url', 'http://localhost/sibpsntb');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_nip` bigint(18) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `user_nama` varchar(100) NOT NULL,
  `user_passwd` varchar(32) NOT NULL,
  `user_unit` int(5) NOT NULL,
  `user_level` int(2) NOT NULL,
  `user_lastlogin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_ip` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_nip`, `user_id`, `user_nama`, `user_passwd`, `user_unit`, `user_level`, `user_lastlogin`, `user_ip`) VALUES
(99999999999, 'admin', 'Super Administrator', 'admin', 99999, 99, '2016-10-20 08:19:22', '10.52.6.31'),
(198203192004121002, 'mika', 'I Putu Dyatmika', 'mika', 99999, 999, '2016-10-20 12:38:35', '::1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master_jab_kabkota`
--
ALTER TABLE `master_jab_kabkota`
 ADD PRIMARY KEY (`jab_kode`);

--
-- Indexes for table `master_jab_prov`
--
ALTER TABLE `master_jab_prov`
 ADD PRIMARY KEY (`jabatan_kode`);

--
-- Indexes for table `m_agama`
--
ALTER TABLE `m_agama`
 ADD PRIMARY KEY (`agama_kode`);

--
-- Indexes for table `m_gol`
--
ALTER TABLE `m_gol`
 ADD PRIMARY KEY (`gol_kode`);

--
-- Indexes for table `m_pegawai`
--
ALTER TABLE `m_pegawai`
 ADD PRIMARY KEY (`pegawai_nip`);

--
-- Indexes for table `m_unitkerja`
--
ALTER TABLE `m_unitkerja`
 ADD PRIMARY KEY (`unit_kode`);

--
-- Indexes for table `peg_dt_pokok`
--
ALTER TABLE `peg_dt_pokok`
 ADD PRIMARY KEY (`peg_nip`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
 ADD PRIMARY KEY (`profil_nip`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
 ADD PRIMARY KEY (`setting_nama`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_agama`
--
ALTER TABLE `m_agama`
MODIFY `agama_kode` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

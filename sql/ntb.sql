-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2016 at 06:43 PM
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
-- Table structure for table `ckp_kamus`
--

CREATE TABLE IF NOT EXISTS `ckp_kamus` (
`ckp_k_id` bigint(10) NOT NULL,
  `ckp_k_nama` varchar(255) NOT NULL,
  `ckp_k_unitkode` int(5) NOT NULL,
  `ckp_k_parent` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ckp_kamus`
--

INSERT INTO `ckp_kamus` (`ckp_k_id`, `ckp_k_nama`, `ckp_k_unitkode`, `ckp_k_parent`) VALUES
(1, 'Monitoring dan Evaluasi ARC September 2016', 52563, 52560),
(2, 'Monitoring dan Evaluasi ARC Oktober 2016', 52563, 52560),
(3, 'Monitoring dan Evaluasi ARC Januari 2016', 52563, 52560),
(4, 'Mengawasi dan Pelaksana Kegiatan Upload terhadap publikasi dalam ARC', 52563, 52560);

-- --------------------------------------------------------

--
-- Table structure for table `ckp_r`
--

CREATE TABLE IF NOT EXISTS `ckp_r` (
`ckp_r_id` bigint(10) NOT NULL,
  `ckp_t_id` bigint(10) NOT NULL,
  `ckp_r_keg` varchar(255) NOT NULL,
  `ckp_r_satuan` int(2) NOT NULL,
  `ckp_r_target` int(6) NOT NULL,
  `ckp_r_realisasi` int(6) NOT NULL,
  `ckp_r_persen` float(3,2) NOT NULL,
  `ckp_r_kualitas` float(3,2) NOT NULL,
  `ckp_r_kodekeg` int(6) NOT NULL,
  `ckp_r_angkakredit` float(4,2) NOT NULL,
  `ckp_r_ket` varchar(255) NOT NULL,
  `ckp_r_unitkode_sumber` int(5) NOT NULL,
  `ckp_r_pegnip_sumber` bigint(18) NOT NULL,
  `ckp_r_unitkode_penerima` int(5) NOT NULL,
  `ckp_r_pegnip_penerima` bigint(18) NOT NULL,
  `ckp_r_bulan` int(2) NOT NULL,
  `ckp_r_tahun` int(4) NOT NULL,
  `ckp_r_peg_jabatan` int(2) NOT NULL,
  `ckp_r_tipe` int(1) NOT NULL,
  `ckp_r_status` int(1) NOT NULL,
  `ckp_r_edit` int(1) NOT NULL,
  `ckp_r_tgl_dibuat` datetime NOT NULL,
  `ckp_r_tgl_diupdate` datetime NOT NULL,
  `ckp_r_penilai` bigint(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ckp_satuan`
--

CREATE TABLE IF NOT EXISTS `ckp_satuan` (
`ckp_sat_id` int(2) NOT NULL,
  `ckp_sat_nama` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ckp_satuan`
--

INSERT INTO `ckp_satuan` (`ckp_sat_id`, `ckp_sat_nama`) VALUES
(1, 'Paket'),
(2, 'Konten'),
(3, 'Pengunjung'),
(4, 'Laporan'),
(5, 'Kegiatan'),
(6, 'Hari'),
(7, 'Blok Sensus'),
(8, 'Rumah Tangga'),
(9, 'Dokumen'),
(10, 'Persen'),
(11, 'Peserta'),
(12, 'Publikasi'),
(13, 'Set'),
(14, 'Aktivitas');

-- --------------------------------------------------------

--
-- Table structure for table `ckp_t`
--

CREATE TABLE IF NOT EXISTS `ckp_t` (
`ckp_t_id` bigint(10) NOT NULL,
  `ckp_t_keg` varchar(255) NOT NULL,
  `ckp_t_satuan` int(2) NOT NULL,
  `ckp_t_target` int(6) NOT NULL,
  `ckp_t_ket` varchar(255) NOT NULL,
  `ckp_t_unikode_atasan` int(5) NOT NULL,
  `ckp_t_nip_atasan` bigint(18) NOT NULL,
  `ckp_t_nama_atasan` varchar(250) NOT NULL,
  `ckp_t_unitkode` int(5) NOT NULL,
  `ckp_t_pegnip` bigint(18) NOT NULL,
  `ckp_t_bulan` int(2) NOT NULL,
  `ckp_t_tahun` int(4) NOT NULL,
  `ckp_t_peg_jabatan` int(2) NOT NULL,
  `ckp_t_tipe` int(1) NOT NULL,
  `ckp_t_status` int(1) NOT NULL,
  `ckp_t_status_dok` int(1) NOT NULL,
  `ckp_t_edit` int(1) NOT NULL,
  `ckp_t_tgl_dibuat` datetime NOT NULL,
  `ckp_t_tgl_diupdate` datetime NOT NULL,
  `ckp_t_dibuat_oleh` bigint(18) NOT NULL,
  `ckp_t_diupdate_oleh` bigint(18) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ckp_t`
--

INSERT INTO `ckp_t` (`ckp_t_id`, `ckp_t_keg`, `ckp_t_satuan`, `ckp_t_target`, `ckp_t_ket`, `ckp_t_unikode_atasan`, `ckp_t_nip_atasan`, `ckp_t_nama_atasan`, `ckp_t_unitkode`, `ckp_t_pegnip`, `ckp_t_bulan`, `ckp_t_tahun`, `ckp_t_peg_jabatan`, `ckp_t_tipe`, `ckp_t_status`, `ckp_t_status_dok`, `ckp_t_edit`, `ckp_t_tgl_dibuat`, `ckp_t_tgl_diupdate`, `ckp_t_dibuat_oleh`, `ckp_t_diupdate_oleh`) VALUES
(1, 'Mengawasi dan Monitoring laporan evaluasi ARC Provinsi dan kab Kota', 4, 1, '', 52563, 198203192004121002, '', 52563, 198203192004121002, 11, 2016, 1, 1, 2, 0, 2, '2016-11-04 21:27:47', '2016-11-04 21:27:47', 198203192004121002, 198203192004121002),
(2, 'Monitoring dan Evaluasi ARC Oktober 2016', 4, 1, 'dibuat laporannya tanggal 1 awal bulan', 52563, 198203192004121002, '', 52563, 198203192004121002, 11, 2016, 1, 1, 2, 1, 2, '2016-11-04 21:29:54', '2016-11-12 19:25:10', 198203192004121002, 198203192004121002),
(3, 'Pengawasan dan Monitoring penyusunan laporan pengunjung website', 3, 3500, '', 52563, 198203192004121002, '', 52563, 198203192004121002, 11, 2016, 1, 1, 3, 0, 2, '2016-11-04 21:30:47', '2016-11-04 21:30:47', 198203192004121002, 198203192004121002),
(5, 'Merumuskan perencanaan dan monev Pengolahan SE2016', 1, 1, 'pengolahan se2016', 52010, 196412311991031022, '', 52010, 196412311991031022, 11, 2016, 1, 1, 1, 0, 1, '2016-11-05 06:03:28', '2016-11-05 06:03:28', 196412311991031022, 196412311991031022),
(6, 'Merumuskan perencanaan dan monev Pengolahan Susenas', 1, 1, '', 52010, 196412311991031022, '', 52010, 196412311991031022, 11, 2016, 1, 1, 1, 0, 1, '2016-11-05 06:04:02', '2016-11-05 06:04:02', 196412311991031022, 196412311991031022),
(7, 'Merumuskan perencanaan dan monev dipa', 1, 1, '', 52510, 196512311991031012, '', 52510, 196512311991031012, 11, 2016, 1, 1, 1, 0, 1, '2016-11-05 06:05:03', '2016-11-05 06:05:03', 196512311991031012, 196512311991031012),
(8, 'mengawasi pengolahan susenas', 7, 20, '', 52016, 198511162010121006, '', 52016, 198511162010121006, 11, 2016, 1, 1, 1, 0, 1, '2016-11-05 06:05:45', '2016-11-05 06:05:45', 198511162010121006, 198511162010121006),
(9, 'melakukan pencacahan susenas september 2016', 7, 3, '', 52010, 199107192014031002, '', 52010, 199107192014031002, 11, 2016, 3, 1, 1, 0, 1, '2016-11-05 06:06:31', '2016-11-05 06:06:31', 199107192014031002, 199107192014031002),
(10, 'melakukan entri saiba dan sakpa', 1, 1, '', 52010, 199107192014031002, '', 52010, 199107192014031002, 11, 2016, 3, 1, 1, 0, 1, '2016-11-05 06:06:45', '2016-11-05 06:06:45', 199107192014031002, 199107192014031002),
(11, 'melakukan layout publikasi kca', 12, 12, '', 52010, 199107192014031002, '', 52010, 199107192014031002, 11, 2016, 3, 1, 1, 0, 1, '2016-11-05 06:07:08', '2016-11-05 06:07:08', 199107192014031002, 199107192014031002),
(12, 'melakukan pengawasan ubinan', 9, 10, '', 52013, 198202082004122001, '', 52013, 198202082004122001, 11, 2016, 1, 1, 1, 0, 1, '2016-11-05 06:07:50', '2016-11-05 06:07:50', 198202082004122001, 198202082004122001),
(13, 'Merumuskan perencanaan dan monev pengujung perpustakaan', 3, 100, '', 52560, 197412311996121001, '', 52560, 197412311996121001, 11, 2016, 1, 1, 1, 0, 1, '2016-11-05 06:08:45', '2016-11-05 06:08:45', 197412311996121001, 197412311996121001),
(14, 'Merumuskan perencanaan dan monev Pengolahan SE2016', 1, 1, '', 52560, 197412311996121001, '', 52560, 197412311996121001, 11, 2016, 1, 1, 1, 0, 1, '2016-11-05 06:10:07', '2016-11-05 06:10:07', 197412311996121001, 197412311996121001),
(15, 'menjadi petugas pst', 6, 28, '', 52563, 197812271999121001, '', 52563, 197812271999121001, 11, 2016, 2, 1, 1, 0, 1, '2016-11-05 06:50:06', '2016-11-05 06:50:06', 197812271999121001, 197812271999121001),
(16, 'menjadi petugas pst', 6, 25, '', 52563, 196312251982032001, '', 52563, 196312251982032001, 11, 2016, 2, 1, 1, 0, 1, '2016-11-05 06:50:51', '2016-11-05 06:50:51', 196312251982032001, 196312251982032001),
(17, 'Mengawasi dan Monitoring laporan evaluasi ARC Provinsi dan kab Kota', 4, 3, '', 52563, 198203192004121002, '', 52563, 198203192004121002, 10, 2016, 1, 1, 1, 0, 1, '2016-11-05 11:28:22', '2016-11-05 11:28:22', 198203192004121002, 198203192004121002),
(18, 'Monitoring laporan sakernas agustus 2016', 7, 34, '', 52521, 198204262004122001, '', 52521, 198204262004122001, 11, 2016, 1, 1, 1, 0, 1, '2016-11-05 11:30:33', '2016-11-05 11:30:33', 198204262004122001, 198204262004122001),
(19, 'Membuat kliping koran berita bps provinsi ntb', 2, 4, '', 52563, 196312251982032001, '', 52563, 196312251982032001, 11, 2016, 2, 1, 1, 0, 1, '2016-11-07 21:25:07', '2016-11-07 21:25:07', 196312251982032001, 196312251982032001),
(20, 'Memperbaharui konten website', 2, 7, '', 52563, 196312251982032001, '', 52563, 196312251982032001, 11, 2016, 2, 1, 1, 0, 1, '2016-11-07 21:25:55', '2016-11-07 21:25:55', 196312251982032001, 196312251982032001),
(21, 'merekap pengunjung pst', 3, 100, '', 52563, 196312251982032001, '', 52563, 196312251982032001, 11, 2016, 2, 1, 1, 0, 1, '2016-11-07 21:47:56', '2016-11-07 21:47:56', 196312251982032001, 196312251982032001),
(22, 'Monitoring dan Evaluasi ARC September 2016', 5, 1, '', 52563, 198203192004121002, '', 52563, 198203192004121002, 10, 2016, 1, 1, 1, 0, 1, '2016-11-07 22:30:08', '2016-11-07 22:30:08', 198203192004121002, 198203192004121002),
(23, 'Monitoring dan Evaluasi ARC Oktober 2016', 5, 1, '', 52563, 198203192004121002, '', 52563, 198203192004121002, 1, 2016, 1, 1, 1, 0, 1, '2016-11-07 23:11:09', '2016-11-07 23:11:09', 198203192004121002, 198203192004121002),
(24, 'Monitoring dan Evaluasi ARC Januari 2016', 5, 1, '', 52563, 198203192004121002, '', 52563, 198203192004121002, 2, 2016, 1, 1, 1, 0, 1, '2016-11-07 23:11:35', '2016-11-07 23:11:35', 198203192004121002, 198203192004121002),
(25, 'Mengawasi dan Pelaksana Kegiatan Upload terhadap publikasi dalam ARC', 5, 1, '', 52563, 198203192004121002, '', 52563, 198203192004121002, 2, 2015, 1, 1, 1, 0, 1, '2016-11-07 23:12:01', '2016-11-07 23:12:01', 198203192004121002, 198203192004121002),
(27, 'Supervisor Pengolahan SE2016', 5, 1, '', 0, 197412311996121001, '', 52563, 198203192004121002, 11, 2016, 1, 2, 2, 0, 2, '2016-11-12 20:29:17', '2016-11-12 20:29:17', 198203192004121002, 198203192004121002);

-- --------------------------------------------------------

--
-- Table structure for table `keg_periode`
--

CREATE TABLE IF NOT EXISTS `keg_periode` (
`keg_periode_id` int(2) NOT NULL,
  `keg_periode_nama` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keg_periode`
--

INSERT INTO `keg_periode` (`keg_periode_id`, `keg_periode_nama`) VALUES
(1, 'Bulanan'),
(2, 'Triwulanan'),
(3, 'Semesteran'),
(4, 'Tahunan');

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
  `pegawai_nama` varchar(250) NOT NULL,
  `pegawai_nama_panggilan` varchar(20) NOT NULL,
  `pegawai_gelar_depan` varchar(10) DEFAULT NULL,
  `pegawai_gelar_blkg` varchar(20) DEFAULT NULL,
  `pegawai_nip_lama` bigint(9) NOT NULL,
  `pegawai_agama` int(1) NOT NULL,
  `pegawai_jk` int(1) NOT NULL,
  `pegawai_tempat_lahir` varchar(20) NOT NULL,
  `pegawai_tgl_lahir` date NOT NULL,
  `pegawai_tmt_cpns` date NOT NULL,
  `pegawai_tmt_pns` date NOT NULL,
  `pegawai_gol_cpns` int(2) NOT NULL,
  `pegawai_gol_pns` int(2) NOT NULL,
  `pegawai_unit` int(5) NOT NULL,
  `pegawai_jabatan` int(1) NOT NULL,
  `pegawai_dibuat_oleh` bigint(18) NOT NULL,
  `pegawai_dibuat_waktu` datetime NOT NULL,
  `pegawai_diupdate_oleh` bigint(18) NOT NULL,
  `pegawai_diupdate_waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pegawai_status` int(1) NOT NULL,
  `pegawai_prov` int(1) NOT NULL,
  `pegawai_users` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_pegawai`
--

INSERT INTO `m_pegawai` (`pegawai_nip`, `pegawai_nama`, `pegawai_nama_panggilan`, `pegawai_gelar_depan`, `pegawai_gelar_blkg`, `pegawai_nip_lama`, `pegawai_agama`, `pegawai_jk`, `pegawai_tempat_lahir`, `pegawai_tgl_lahir`, `pegawai_tmt_cpns`, `pegawai_tmt_pns`, `pegawai_gol_cpns`, `pegawai_gol_pns`, `pegawai_unit`, `pegawai_jabatan`, `pegawai_dibuat_oleh`, `pegawai_dibuat_waktu`, `pegawai_diupdate_oleh`, `pegawai_diupdate_waktu`, `pegawai_status`, `pegawai_prov`, `pegawai_users`) VALUES
(196312251982032001, 'TRI KADARYANTI NINGTIYAS', 'TRI', NULL, NULL, 340009601, 1, 2, 'YOGYAKARTA', '1963-12-25', '1982-03-01', '1983-03-01', 21, 34, 52563, 2, 198203192004121002, '2016-11-05 05:47:14', 198203192004121002, '2016-11-04 21:57:12', 2, 1, 1),
(196312311985021003, 'DAHRUN', 'DAHRUN', NULL, NULL, 340010924, 1, 1, 'SELONG', '1963-12-31', '1985-02-01', '1986-02-03', 21, 34, 52034, 1, 198203192004121002, '2016-11-07 21:11:33', 198203192004121002, '2016-11-07 13:11:58', 2, 2, 0),
(196412311991031022, 'AGUS ALWI', 'AGUS', NULL, NULL, 340012862, 1, 1, 'MATARAM', '1964-12-31', '1991-03-01', '1992-03-02', 31, 42, 52010, 1, 198203192004121002, '2016-11-05 05:37:25', 198203192004121002, '2016-11-07 13:12:23', 2, 2, 1),
(196509231990032002, 'ENDANG TRI WAHYUNINGSIH', 'ENDANG', NULL, NULL, 340012530, 1, 2, 'SEMARANG', '1965-09-23', '1990-03-01', '1991-03-01', 31, 42, 52000, 1, 198203192004121002, '2016-11-05 05:54:26', 198203192004121002, '2016-11-04 21:57:36', 2, 1, 1),
(196512311991031012, 'SYAMSUDIN', 'SYAM', NULL, NULL, 340012866, 1, 1, 'PRAYA', '1965-12-31', '1991-03-01', '1992-03-02', 31, 42, 52510, 1, 198203192004121002, '2016-11-05 05:56:22', 198203192004121002, '2016-11-04 21:59:48', 2, 1, 1),
(196512311992121001, 'LALU SUPRATNA', 'MIQ NOK', NULL, NULL, 340013474, 1, 1, 'PRAYA', '1965-12-31', '1992-12-01', '1993-12-01', 31, 42, 52030, 1, 198203192004121002, '2016-11-07 21:06:15', 198203192004121002, '2016-11-07 13:06:15', 2, 2, 0),
(196912142002121002, 'MUHAMMAD PATAHUDDIN', 'PATAH', NULL, NULL, 340016867, 1, 1, 'SELONG', '1969-12-14', '2002-12-02', '2003-12-01', 21, 32, 52030, 3, 198203192004121002, '2016-11-07 21:08:28', 198203192004121002, '2016-11-07 13:08:28', 2, 2, 0),
(197412311996121001, 'AGUS SUDIBYO', 'AGUS', NULL, NULL, 340015309, 1, 1, 'BREBES', '1974-12-31', '1996-12-02', '1997-12-01', 23, 41, 52560, 1, 99999999999, '2016-10-22 16:20:39', 198203192004121002, '2016-10-25 01:44:45', 2, 1, 1),
(197604301997121001, 'LUKMAN', 'LUKMAN', NULL, NULL, 340015534, 1, 1, 'TEGAL', '1976-04-30', '1997-12-01', '1998-12-01', 23, 34, 52562, 1, 198203192004121002, '2016-11-05 05:51:48', 198203192004121002, '2016-11-04 22:00:06', 2, 1, 1),
(197804152002121006, 'AHMAD SUKRI', 'SUKRI', NULL, NULL, 340016866, 1, 1, 'PENUNJAK', '1978-04-15', '2002-12-02', '2003-12-01', 31, 34, 52561, 1, 198203192004121002, '2016-11-05 05:48:54', 198203192004121002, '2016-11-04 22:00:22', 2, 1, 1),
(197812271999121001, 'I PUTU YUDHISTIRA', 'YUDIS', NULL, NULL, 340016053, 4, 1, 'MATARAM', '1979-12-27', '1999-12-01', '2000-12-01', 23, 32, 52563, 2, 99999999999, '2016-10-22 16:27:34', 198203192004121002, '2016-11-04 22:01:14', 2, 1, 1),
(198202082004122001, 'NI KETUT ALIT RAHAYU HENDRAYANI', 'ALIT', NULL, NULL, 340017399, 4, 2, 'BULELENG', '1982-02-08', '2004-12-01', '2005-12-01', 31, 34, 52013, 1, 198203192004121002, '2016-11-05 05:41:45', 198203192004121002, '2016-11-04 22:00:57', 2, 2, 1),
(198203192004121002, 'I PUTU DYATMIKA', 'MIKA', '', 'S.ST', 340017401, 4, 1, 'MATARAM', '1982-03-19', '2004-12-01', '2005-12-01', 31, 34, 52563, 1, 999999999, '2016-10-12 14:14:17', 198203192004121002, '2016-11-07 14:04:10', 2, 1, 1),
(198204262004122001, 'GUSTI KETUT INDRADEWI', 'INDRA', NULL, NULL, 340017402, 4, 2, 'GIANYAR', '1982-04-26', '2004-12-01', '2005-12-01', 31, 34, 52521, 1, 99999999999, '2016-10-22 00:26:49', 198203192004121002, '2016-11-05 03:27:08', 2, 1, 1),
(198311032011011008, 'CASSLIRAIS SURAWAN', 'CASSLI', NULL, NULL, 340054408, 1, 1, 'YOGYAKARTA', '1983-11-03', '2011-01-01', '2012-01-02', 31, 32, 52562, 2, 198203192004121002, '2016-10-22 20:00:17', 198203192004121002, '2016-11-04 22:02:06', 2, 1, 1),
(198511162010121006, 'HASAN BASRIL', 'HASAN', NULL, NULL, 340054212, 1, 1, 'JAKARTA', '1982-11-16', '2010-12-01', '2011-12-01', 31, 32, 52016, 1, 198203192004121002, '2016-10-22 21:28:12', 198203192004121002, '2016-10-29 16:10:04', 2, 2, 1),
(199107192014031002, 'PANDE GDE DONY GUMILAR', 'DONY', NULL, NULL, 340056543, 4, 1, 'DENPASAR', '1991-07-19', '2014-03-03', '2015-03-02', 31, 31, 52010, 3, 198203192004121002, '2016-11-05 05:44:17', 198203192004121002, '2016-11-04 22:00:40', 2, 2, 1);

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
  `unit_jenis` int(1) NOT NULL,
  `unit_eselon` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_unitkerja`
--

INSERT INTO `m_unitkerja` (`unit_kode`, `unit_nama`, `unit_parent`, `unit_dibuat_oleh`, `unit_dibuat_waktu`, `unit_diupdate_oleh`, `unit_diupdate_waktu`, `unit_jenis`, `unit_eselon`) VALUES
(52000, 'BPS Provinsi Nusa Tenggara Barat', NULL, 198203192004121002, '2016-10-20 10:42:20', 198203192004121002, '2016-10-25 01:50:22', 1, 2),
(52010, 'BPS Kabupaten Lombok Barat', 52000, 198203192004121002, '2016-10-20 10:47:52', 198203192004121002, '2016-10-25 02:00:52', 2, 3),
(52011, 'Subbagian Tata Usaha', 52010, 198203192004121002, '2016-10-22 21:20:17', 198203192004121002, '2016-10-25 01:50:12', 2, 4),
(52012, 'Seksi Statistik Sosial', 52010, 198203192004121002, '2016-10-22 21:21:00', 198203192004121002, '2016-10-25 01:50:12', 2, 4),
(52013, 'Seksi Statistik Produksi', 52010, 198203192004121002, '2016-10-22 21:26:04', 198203192004121002, '2016-10-25 01:50:12', 2, 4),
(52014, 'Seksi Statistik Distribusi', 52010, 198203192004121002, '2016-10-22 21:25:28', 198203192004121002, '2016-10-25 01:50:12', 2, 4),
(52015, 'Seksi Neraca Wilayah dan Analisis Statistik', 52010, 198203192004121002, '2016-10-22 21:24:35', 198203192004121002, '2016-10-25 01:50:12', 2, 4),
(52016, 'Seksi Integrasi Pengolahan dan Diseminasi Statistik ', 52010, 198203192004121002, '2016-10-22 21:24:04', 198203192004121002, '2016-10-25 01:50:12', 2, 4),
(52020, 'BPS Kabupaten Lombok Tengah', 52000, 198203192004121002, '2016-10-20 10:42:42', 198203192004121002, '2016-10-25 02:01:06', 2, 3),
(52021, 'Subbagian Tata Usaha', 52020, 198203192004121002, '2016-11-07 18:03:57', 198203192004121002, '2016-11-07 10:03:57', 2, 4),
(52025, 'Seksi Neraca Wilayah dan Analisis Statistik', 52020, 198203192004121002, '2016-10-22 21:32:09', 198203192004121002, '2016-10-25 01:50:12', 2, 4),
(52026, 'Seksi Integrasi Pengolahan dan Diseminasi Statistik ', 52020, 198203192004121002, '2016-11-07 17:56:36', 198203192004121002, '2016-11-07 10:00:16', 2, 4),
(52030, 'BPS Kabupaten Lombok Timur', 52000, 198203192004121002, '2016-10-20 10:48:09', 198203192004121002, '2016-10-25 02:01:31', 2, 3),
(52034, 'Seksi Statistik Distribusi', 52030, 198203192004121002, '2016-11-07 21:11:16', 198203192004121002, '2016-11-07 13:11:16', 2, 4),
(52040, 'BPS Kabupaten Sumbawa', 52000, 198203192004121002, '2016-10-20 10:48:23', 198203192004121002, '2016-10-25 02:01:44', 2, 3),
(52050, 'BPS Kabupaten Dompu', 52000, 198203192004121002, '2016-10-20 10:48:56', 198203192004121002, '2016-10-25 02:02:09', 2, 3),
(52060, 'BPS Kabupaten Bima', 52000, 198203192004121002, '2016-10-20 10:49:22', 198203192004121002, '2016-10-25 02:02:01', 2, 3),
(52070, 'BPS Kabupaten Sumbawa Barat', 52000, 198203192004121002, '2016-10-20 10:49:41', 198203192004121002, '2016-10-25 02:02:19', 2, 3),
(52080, 'BPS Kabupaten Lombok Utara', 52000, 198203192004121002, '2016-10-20 10:49:52', 198203192004121002, '2016-10-25 02:01:53', 2, 3),
(52510, 'Bagian Tata Usaha', 52000, 198203192004121002, '2016-10-20 10:53:21', 198203192004121002, '2016-10-25 01:52:25', 1, 3),
(52511, 'Subbagian Bina Program', 52510, 198203192004121002, '2016-10-20 14:43:21', 198203192004121002, '2016-10-25 01:50:12', 1, 4),
(52512, 'Subbagian Kepegawaian dan Hukum', 52510, 99999999999, '2016-10-22 14:44:57', 99999999999, '2016-10-25 01:50:12', 1, 4),
(52513, 'Subbagian Keuangan ', 52510, 99999999999, '2016-10-20 16:27:23', 99999999999, '2016-10-25 01:50:12', 1, 4),
(52514, 'Subbagian Urusan Dalam', 52510, 99999999999, '2016-10-20 16:27:52', 99999999999, '2016-10-25 01:50:12', 1, 4),
(52515, 'Subbagian Perlengkapan', 52510, 99999999999, '2016-10-22 14:45:25', 99999999999, '2016-10-25 01:50:12', 1, 4),
(52520, 'Bidang Statistik Sosial', 52000, 198203192004121002, '2016-10-20 10:53:37', 198203192004121002, '2016-10-25 01:53:57', 1, 3),
(52521, 'Seksi Statistik Kependudukan', 52520, 198203192004121002, '2016-10-20 14:56:04', 198203192004121002, '2016-10-25 01:50:12', 1, 4),
(52522, 'Seksi Statistik Ketahanan Sosial', 52520, 198203192004121002, '2016-10-22 21:13:50', 198203192004121002, '2016-10-25 01:50:12', 1, 4),
(52523, 'Seksi Statistik Kesejahteraan Rakyat', 52520, 198203192004121002, '2016-10-22 21:14:17', 198203192004121002, '2016-10-25 01:50:12', 1, 4),
(52530, 'Bidang Statistik Produksi', 52000, 198203192004121002, '2016-10-20 10:58:38', 198203192004121002, '2016-10-25 02:00:09', 1, 3),
(52531, 'Seksi Statistik Pertanian', 52530, 198203192004121002, '2016-10-22 21:15:09', 198203192004121002, '2016-10-25 01:50:12', 1, 4),
(52532, 'Seksi Statistik Industri', 52530, 198203192004121002, '2016-10-22 21:15:42', 198203192004121002, '2016-10-25 01:50:12', 1, 4),
(52533, 'Seksi Statistik Pertambangan, Energi dan Konstruksi', 52530, 198203192004121002, '2016-10-22 21:16:02', 198203192004121002, '2016-10-25 01:50:12', 1, 4),
(52540, 'Bidang Statistik Distribusi', 52000, 198203192004121002, '2016-10-20 10:59:15', 198203192004121002, '2016-10-25 02:00:21', 1, 3),
(52541, 'Seksi Statistik Harga Konsumen dan Harga Perdagangan Besar', 52540, 198203192004121002, '2016-10-22 21:17:30', 198203192004121002, '2016-10-25 01:50:12', 1, 4),
(52542, 'Seksi Statistik Keuangan Dan Harga Produsen', 52540, 198203192004121002, '2016-10-22 21:17:55', 198203192004121002, '2016-10-25 01:50:12', 1, 4),
(52543, 'Seksi Statistik Niaga dan Jasa', 52540, 198203192004121002, '2016-10-22 21:18:16', 198203192004121002, '2016-10-25 01:50:12', 1, 4),
(52550, 'Bidang Neraca Wilayah dan Analisis Statistik', 52000, 198203192004121002, '2016-10-20 10:47:28', 198203192004121002, '2016-10-25 02:00:31', 1, 3),
(52551, 'Seksi Neraca Produksi', 52550, 198203192004121002, '2016-10-22 21:18:57', 198203192004121002, '2016-10-25 01:50:12', 1, 4),
(52552, 'Seksi Neraca Konsumsi', 52550, 198203192004121002, '2016-10-22 21:19:18', 198203192004121002, '2016-10-25 01:50:12', 1, 4),
(52553, 'Seksi Analisis Statistik Lintas Sektoral', 52550, 198203192004121002, '2016-10-22 21:19:37', 198203192004121002, '2016-10-25 01:50:12', 1, 4),
(52560, 'Bidang Integrasi Pengolahan dan Diseminasi Statistik', 52000, 198203192004121002, '2016-10-20 10:43:05', 198203192004121002, '2016-10-25 02:00:39', 1, 3),
(52561, 'Seksi Integrasi Pengolahan Data', 52560, 198203192004121002, '2016-10-20 10:43:30', 198203192004121002, '2016-10-25 01:50:12', 1, 4),
(52562, 'Seksi Jaringan dan Rujukan Statistik', 52560, 198203192004121002, '2016-10-20 10:44:52', 198203192004121002, '2016-10-25 01:50:12', 1, 4),
(52563, 'Seksi Diseminasi dan Layanan Statistik', 52560, 198203192004121002, '2016-10-20 10:44:18', 198203192004121002, '2016-10-25 01:50:12', 1, 4),
(52710, 'BPS Kota Mataram', 52000, 198203192004121002, '2016-10-20 10:46:35', 198203192004121002, '2016-10-25 01:59:55', 2, 3),
(52711, 'Subbagian Tata Usaha', 52710, 198203192004121002, '2016-10-25 08:35:04', 198203192004121002, '2016-10-25 02:02:39', 2, 4),
(52716, 'Seksi Integrasi Pengolahan dan Diseminasi Statistik ', 52710, 198203192004121002, '2016-10-25 08:35:47', 198203192004121002, '2016-10-25 01:50:12', 2, 4),
(52720, 'BPS Kota Bima', 52000, 198203192004121002, '2016-10-20 20:51:18', 198203192004121002, '2016-10-25 02:01:18', 2, 3);

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
-- Table structure for table `sakip_satuan`
--

CREATE TABLE IF NOT EXISTS `sakip_satuan` (
`sakip_sat_id` int(2) NOT NULL,
  `sakip_sat_nama` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sakip_satuan`
--

INSERT INTO `sakip_satuan` (`sakip_sat_id`, `sakip_sat_nama`) VALUES
(1, 'Paket'),
(2, 'Laporan'),
(3, 'Kegiatan');

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
('bps_kode', '52000'),
('bps_nama', 'BPS Provinsi Nusa Tenggara Barat'),
('bps_telepon', '0370 625381'),
('bps_timezone', 'Asia/Makassar'),
('bps_url', 'http://192.168.1.9/sibpsntb');

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
  `user_ip` varchar(30) NOT NULL,
  `user_dibuat_oleh` bigint(18) NOT NULL,
  `user_dibuat_waktu` datetime NOT NULL,
  `user_diupdate_oleh` bigint(18) NOT NULL,
  `user_diupdate_waktu` datetime NOT NULL,
  `user_status` int(1) NOT NULL,
  `user_kode_aktivasi` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_nip`, `user_id`, `user_nama`, `user_passwd`, `user_unit`, `user_level`, `user_lastlogin`, `user_ip`, `user_dibuat_oleh`, `user_dibuat_waktu`, `user_diupdate_oleh`, `user_diupdate_waktu`, `user_status`, `user_kode_aktivasi`) VALUES
(99999999999, 'admin', 'Super Administrator', 'admin', 52000, 99, '2016-10-22 13:49:57', '192.168.1.18', 99999999999, '2016-10-19 11:37:37', 198203192004121002, '2016-10-21 01:11:19', 1, ''),
(196312251982032001, 'tri', 'TRI KADARYANTI NINGTIYAS', 'kadar', 52563, 1, '2016-11-07 13:23:52', '192.168.1.9', 198203192004121002, '2016-11-05 05:57:12', 198203192004121002, '2016-11-05 05:57:12', 1, ''),
(196412311991031022, 'alwi', 'IR. AGUS ALWI', 'alwi', 52010, 30, '2016-11-05 03:34:58', '192.168.1.18', 198203192004121002, '2016-11-05 05:59:23', 198203192004121002, '2016-11-05 05:59:23', 1, ''),
(196509231990032002, 'endang', 'ENDANG TRI WAHYUNINGSIH', 'endang', 52000, 40, '2016-11-05 03:28:57', '192.168.1.9', 198203192004121002, '2016-11-05 05:57:36', 198203192004121002, '2016-11-05 05:57:36', 1, ''),
(196512311991031012, 'syambon', 'SYAMSUDIN', 'syambon', 52510, 30, '2016-11-04 22:04:35', '192.168.1.9', 198203192004121002, '2016-11-05 05:59:48', 198203192004121002, '2016-11-05 05:59:48', 1, ''),
(197412311996121001, 'agus', 'AGUS SUDIBYO', 'agus', 52560, 30, '2016-11-05 03:31:25', '192.168.1.18', 198203192004121002, '2016-10-25 09:44:45', 198203192004121002, '2016-10-25 09:44:45', 1, ''),
(197604301997121001, 'lukman', 'LUKMAN', 'lukman', 52562, 10, '2016-11-04 22:00:06', '', 198203192004121002, '2016-11-05 06:00:06', 198203192004121002, '2016-11-05 06:00:06', 1, ''),
(197804152002121006, 'sukri', 'AHMAD SUKRI', 'sukri', 52561, 10, '2016-11-04 22:00:22', '', 198203192004121002, '2016-11-05 06:00:22', 198203192004121002, '2016-11-05 06:00:22', 1, ''),
(197812271999121001, 'yudis', 'I PUTU YUDHISTIRA', 'yudis', 52563, 1, '2016-11-04 22:49:37', '192.168.1.9', 198203192004121002, '2016-11-05 06:01:14', 198203192004121002, '2016-11-05 06:01:14', 1, ''),
(198202082004122001, 'alit', 'NI KETUT ALIT RAHAYU HENDRAYANI', 'alit', 52013, 10, '2016-11-04 22:07:27', '192.168.1.9', 198203192004121002, '2016-11-05 06:00:57', 198203192004121002, '2016-11-05 06:00:57', 1, ''),
(198203192004121002, 'mika', 'I PUTU DYATMIKA', 'mika', 52563, 99, '2016-11-12 11:56:17', '192.168.1.9', 198203192004121002, '2016-11-07 22:04:10', 198203192004121002, '2016-11-07 22:04:10', 1, ''),
(198204262004122001, 'indradewi', 'GUSTI KETUT INDRADEWI', 'indra', 52521, 10, '2016-11-05 03:29:54', '192.168.1.9', 198203192004121002, '2016-11-05 11:27:07', 198203192004121002, '2016-11-05 11:27:07', 1, ''),
(198311032011011008, 'cassli', 'CASSLIRAIS SURAWAN', 'cassli', 52562, 1, '2016-10-24 07:13:23', '', 198203192004121002, '2016-10-24 15:13:23', 198203192004121002, '2016-10-24 15:13:23', 1, ''),
(198511162010121006, 'hasan', 'HASAN BASRIL', 'hasan', 52016, 10, '2016-11-04 22:05:21', '192.168.1.9', 198203192004121002, '2016-10-30 00:10:04', 198203192004121002, '2016-10-30 00:10:04', 1, ''),
(199107192014031002, 'dony', 'PANDE GDE DONY GUMILAR', 'dony', 52010, 1, '2016-11-04 22:05:56', '192.168.1.9', 198203192004121002, '2016-11-05 06:00:40', 198203192004121002, '2016-11-05 06:00:40', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ckp_kamus`
--
ALTER TABLE `ckp_kamus`
 ADD PRIMARY KEY (`ckp_k_id`);

--
-- Indexes for table `ckp_r`
--
ALTER TABLE `ckp_r`
 ADD PRIMARY KEY (`ckp_r_id`);

--
-- Indexes for table `ckp_satuan`
--
ALTER TABLE `ckp_satuan`
 ADD PRIMARY KEY (`ckp_sat_id`);

--
-- Indexes for table `ckp_t`
--
ALTER TABLE `ckp_t`
 ADD PRIMARY KEY (`ckp_t_id`);

--
-- Indexes for table `keg_periode`
--
ALTER TABLE `keg_periode`
 ADD PRIMARY KEY (`keg_periode_id`);

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
-- Indexes for table `sakip_satuan`
--
ALTER TABLE `sakip_satuan`
 ADD PRIMARY KEY (`sakip_sat_id`);

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
-- AUTO_INCREMENT for table `ckp_kamus`
--
ALTER TABLE `ckp_kamus`
MODIFY `ckp_k_id` bigint(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ckp_r`
--
ALTER TABLE `ckp_r`
MODIFY `ckp_r_id` bigint(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ckp_satuan`
--
ALTER TABLE `ckp_satuan`
MODIFY `ckp_sat_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `ckp_t`
--
ALTER TABLE `ckp_t`
MODIFY `ckp_t_id` bigint(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `keg_periode`
--
ALTER TABLE `keg_periode`
MODIFY `keg_periode_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `m_agama`
--
ALTER TABLE `m_agama`
MODIFY `agama_kode` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sakip_satuan`
--
ALTER TABLE `sakip_satuan`
MODIFY `sakip_sat_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

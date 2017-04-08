-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2017 at 12:00 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jangkrik`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama_admin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `password`, `nama_admin`) VALUES
('admin1', 'jangkrik', 'admin1'),
('admin2', 'jangkrik2', 'admin2');

-- --------------------------------------------------------

--
-- Table structure for table `bi_wide`
--

CREATE TABLE `bi_wide` (
  `id_bi_wide` int(11) NOT NULL,
  `nama_bi_wide` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bi_wide`
--

INSERT INTO `bi_wide` (`id_bi_wide`, `nama_bi_wide`) VALUES
(1, 'BINS'),
(2, 'DAI'),
(3, 'DEKS'),
(4, 'DHk'),
(5, 'DInt'),
(6, 'DKEM'),
(7, 'DKEU'),
(8, 'DKMP'),
(9, 'DKom'),
(10, 'DKSP'),
(11, 'DMR'),
(12, 'DMST'),
(13, 'DOTP'),
(14, 'DPD'),
(15, 'DPKL'),
(16, 'DPLF'),
(17, 'DPM'),
(18, 'DPPK'),
(19, 'DPS'),
(20, 'DPSI'),
(21, 'DPSP'),
(22, 'DPU'),
(23, 'DPUM'),
(24, 'DR 1'),
(25, 'DR 2'),
(26, 'DR 3'),
(27, 'DR 4'),
(28, 'DRK'),
(29, 'DSDM'),
(30, 'DSSK'),
(31, 'DSTa'),
(32, 'PPTBI'),
(33, 'KPw BI Aceh'),
(34, 'KPw BI Babel'),
(35, 'KPw BI Bali'),
(36, 'KPw BI Balikpapan'),
(37, 'KPw BI Banten'),
(38, 'KPw BI Bengkulu'),
(39, 'KPw BI Cirebon'),
(40, 'KPw BI DKI'),
(41, 'KPw BI Gorontalo'),
(42, 'KPw BI Jabar'),
(43, 'KPw BI Jambi'),
(44, 'KPw BI Jateng'),
(45, 'KPw BI Jember'),
(46, 'KPw BI Kalbar'),
(47, 'KPw BI Kalsel'),
(48, 'KPw BI Kalteng'),
(49, 'KPw BI Kaltim'),
(50, 'KPw BI Kediri'),
(51, 'KPw BI Kep. Riau'),
(52, 'KPw BI Lampung'),
(53, 'KPw BI Lhokseumawe'),
(54, 'KPw BI Malang'),
(55, 'KPw BI Maluku '),
(56, 'KPw BI Malut'),
(57, 'KPw BI NTB'),
(58, 'KPw BI NTT'),
(59, 'KPw BI Papua'),
(60, 'KPw BI Papua Barat'),
(61, 'KPw BI Pematangsiantar'),
(62, 'KPw BI Purwokerto'),
(63, 'KPw BI Riau'),
(64, 'KPw BI Sibolga'),
(65, 'KPw BI Solo'),
(66, 'KPw BI Sulbar'),
(67, 'KPw BI Sulsel'),
(68, 'KPw BI Sulteng'),
(69, 'KPw BI Sultra'),
(70, 'KPw BI Sulut'),
(71, 'KPw BI Sumbar'),
(72, 'KPw BI Sumsel'),
(73, 'KPw BI Sumut'),
(74, 'KPw BI Tasikmalaya'),
(75, 'KPw BI Tegal'),
(76, 'KPw BI Yogyakarta'),
(77, 'KPw BI London'),
(78, 'KPw BI New York'),
(79, 'KPw BI Singapur '),
(80, 'KPw BI Tokyo');

-- --------------------------------------------------------

--
-- Table structure for table `catatan`
--

CREATE TABLE `catatan` (
  `tgl` date NOT NULL,
  `id_catatan` int(11) NOT NULL,
  `nomor_catatan` varchar(100) NOT NULL,
  `penandatangan` int(11) NOT NULL,
  `perihal` varchar(30) NOT NULL,
  `dari` int(11) NOT NULL,
  `backdate` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catatan`
--

INSERT INTO `catatan` (`tgl`, `id_catatan`, `nomor_catatan`, `penandatangan`, `perihal`, `dari`, `backdate`) VALUES
('2017-04-01', 21, '19/1/Sb-DAEK-FDSEK/M.02/B', 3, 'coba 1', 1, '19/1B/Sb-DAEK-FDSEK/M.01/B'),
('2017-04-08', 22, '19/2/Sb-DAEK-FDSEK/M.02/B', 1, 'coba 2', 1, '19/2/Sb-DAEK-FDSEK/M.02/B'),
('2017-04-05', 23, '19/1A/Sb-DAEK-FDSEK/M.01/B', 2, 'backdate 1', 1, NULL),
('2017-04-03', 25, '19/1B/Sb-DAEK-FDSEK/M.01/B', 2, 'backdate 2', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` int(11) NOT NULL,
  `nama_divisi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `nama_divisi`) VALUES
(1, 'DAEK'),
(2, 'DPE'),
(3, 'DSPPUR');

-- --------------------------------------------------------

--
-- Table structure for table `divisi_fungsi`
--

CREATE TABLE `divisi_fungsi` (
  `id_divisi` int(11) NOT NULL,
  `id_fungsi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisi_fungsi`
--

INSERT INTO `divisi_fungsi` (`id_divisi`, `id_fungsi`) VALUES
(1, 1),
(1, 2),
(2, 3),
(2, 4),
(3, 5),
(3, 6),
(3, 7),
(3, 8),
(3, 9),
(3, 10),
(3, 11);

-- --------------------------------------------------------

--
-- Table structure for table `fungsi`
--

CREATE TABLE `fungsi` (
  `id_fungsi` int(11) NOT NULL,
  `nama_fungsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fungsi`
--

INSERT INTO `fungsi` (`id_fungsi`, `nama_fungsi`) VALUES
(1, 'FDSEK'),
(2, 'FAES'),
(3, 'FKKB'),
(4, 'FPPU'),
(5, 'UDU'),
(6, 'ULAK'),
(7, 'UPU'),
(8, 'FPP'),
(9, 'FKIPK'),
(10, 'UOSP'),
(11, 'SLA');

-- --------------------------------------------------------

--
-- Table structure for table `jam`
--

CREATE TABLE `jam` (
  `id_jam` int(2) NOT NULL,
  `jam` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jam`
--

INSERT INTO `jam` (`id_jam`, `jam`) VALUES
(1, '06.00'),
(2, '06.30'),
(3, '07.00'),
(4, '07.30'),
(5, '08.00'),
(6, '08.30'),
(7, '09.00'),
(8, '09.30'),
(9, '10.00'),
(10, '10.30'),
(11, '11.00'),
(12, '11.30'),
(13, '12.00'),
(14, '12.30'),
(15, '13.00'),
(16, '13.30'),
(17, '14.00'),
(18, '14.30'),
(19, '15.00'),
(20, '15.30'),
(21, '16.00'),
(22, '16.30'),
(23, '17.00'),
(24, '17.30'),
(25, '18.00');

-- --------------------------------------------------------

--
-- Table structure for table `ldp`
--

CREATE TABLE `ldp` (
  `tgl` date NOT NULL,
  `id_ldp` int(11) NOT NULL,
  `nomor_ldp` varchar(100) NOT NULL,
  `kepada` int(11) NOT NULL,
  `perihal` varchar(30) NOT NULL,
  `backdate` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ldp`
--

INSERT INTO `ldp` (`tgl`, `id_ldp`, `nomor_ldp`, `kepada`, `perihal`, `backdate`) VALUES
('2017-04-01', 1, '19/1/Sb-DAEK-FDSEK/M.01/B', 4, 'coba 1', '19/1B/Sb-DAEK-FDSEK/M.01/B'),
('2017-04-08', 2, '19/2/Sb-DAEK-FDSEK/M.01/B', 8, 'coba 2', '19/2/Sb-DAEK-FDSEK/M.01/B'),
('2017-04-05', 3, '19/1A/Sb-DAEK-FDSEK/M.01/B', 3, 'backdate 1', NULL),
('2017-04-04', 4, '19/1B/Sb-DAEK-FDSEK/M.01/B', 7, 'backdate 2', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `memo`
--

CREATE TABLE `memo` (
  `tgl` date NOT NULL,
  `id_memo` int(11) NOT NULL,
  `nomor_memo` varchar(25) NOT NULL,
  `kepada` int(30) NOT NULL,
  `perihal` varchar(30) NOT NULL,
  `backdate` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memo`
--

INSERT INTO `memo` (`tgl`, `id_memo`, `nomor_memo`, `kepada`, `perihal`, `backdate`) VALUES
('2017-04-01', 14, '19/1/Sb/M.01/B', 18, 'penting', '19/1B/Sb/M.01/B'),
('2017-04-08', 15, '19/2/Sb/M.01/B', 1, 'coba', '19/2/Sb/M.01/B'),
('2017-04-05', 16, '19/1A/Sb/M.01/B', 1, 'backdate 1', NULL),
('2017-04-03', 17, '19/1B/Sb/M.01/B', 1, 'backdate 2', NULL),
('2017-04-08', 18, '19/3/Sb/M.01/B', 1, 'coba 1', '19/3/Sb/M.01/B');

-- --------------------------------------------------------

--
-- Table structure for table `penandatanganan`
--

CREATE TABLE `penandatanganan` (
  `id_penandatangan` int(11) NOT NULL,
  `penandatangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penandatanganan`
--

INSERT INTO `penandatanganan` (`id_penandatangan`, `penandatangan`) VALUES
(1, 'Kepala Perwakilan'),
(2, 'Kepala Grup'),
(3, 'Kepala Divisi');

-- --------------------------------------------------------

--
-- Table structure for table `pengemudi`
--

CREATE TABLE `pengemudi` (
  `id_pengemudi` varchar(10) NOT NULL,
  `nama_pengemudi` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengemudi`
--

INSERT INTO `pengemudi` (`id_pengemudi`, `nama_pengemudi`) VALUES
('efg87', 'efg'),
('hij88', 'hij'),
('klm79', 'klm');

-- --------------------------------------------------------

--
-- Table structure for table `pengikut_surattugas`
--

CREATE TABLE `pengikut_surattugas` (
  `id_pengikut` int(30) NOT NULL,
  `id_surattugas` int(30) NOT NULL,
  `nip_pengikut` varchar(225) NOT NULL,
  `nama_pengikut` varchar(225) NOT NULL,
  `jabatan_pengikut` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengikut_surattugas`
--

INSERT INTO `pengikut_surattugas` (`id_pengikut`, `id_surattugas`, `nip_pengikut`, `nama_pengikut`, `jabatan_pengikut`) VALUES
(3, 2, 'wow', 'wow', 'wow'),
(4, 2, 'e', 'e', 'e'),
(5, 22, '098', 'pengikut 1', 'Jabatan 1'),
(6, 22, '098', 'pengikut 2', 'jabatan 2'),
(7, 23, 'nip 1', 'pengikut 1', 'Jabatan 1'),
(8, 24, 'coba 1', 'ganti', 'coba 1'),
(10, 24, 'ganti', 'ganti', 'ganti'),
(11, 31, 'b', 'b', 'b'),
(12, 32, 'd', 'd', 'd'),
(13, 32, 'd', 'd', 'd'),
(14, 32, 'd', 'd', 'd'),
(15, 33, 'nip1', 'pengikut 1', 'jabatan 2'),
(16, 34, 'q', 'q', 'q'),
(17, 35, 'w', 'w', 'w'),
(18, 35, 'w', 'w', 'w'),
(19, 36, 'q', 'q', 'q'),
(20, 37, 'R', 'R', 'R'),
(21, 37, 'F', 'F', 'F'),
(22, 39, 'nip', 'nama', 'jabatan'),
(23, 40, 'er', 'kl', 'we'),
(24, 42, 'nip 1', 'nama 1', 'jabatan 1'),
(25, 43, 'backdate 1', 'backdate 1', 'backdate 1'),
(26, 45, 'backdate 2', 'backdate 2', 'backdate 2'),
(27, 43, 'backdate 3', 'backdate 3', 'backdate 3'),
(28, 45, 'backdate 3', 'backdate 3', 'backdate 3'),
(29, 48, 'backdate 3', 'backdate 3', 'backdate 3'),
(30, 49, 'backdate 3', 'backdate 3', 'backdate 3'),
(31, 50, 'backdate 3', 'backdate 3', 'backdate 3'),
(32, 51, 'backdate 3', 'backdate 3', 'backdate 3'),
(33, 52, 'Backdate 3', 'Backdate 3', 'Backdate 3');

-- --------------------------------------------------------

--
-- Table structure for table `permohonan_pengemudi`
--

CREATE TABLE `permohonan_pengemudi` (
  `id_permohonan` int(11) NOT NULL,
  `nama_pengguna` varchar(35) NOT NULL,
  `tujuan` varchar(35) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `kegiatan` varchar(50) NOT NULL,
  `jam_keberangkatan` int(11) NOT NULL,
  `jumlah_pengemudi` int(2) NOT NULL,
  `tanggaljam_masukan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_status` int(1) NOT NULL,
  `is_delete` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permohonan_pengemudi`
--

INSERT INTO `permohonan_pengemudi` (`id_permohonan`, `nama_pengguna`, `tujuan`, `tanggal_mulai`, `tanggal_selesai`, `kegiatan`, `jam_keberangkatan`, `jumlah_pengemudi`, `tanggaljam_masukan`, `id_status`, `is_delete`) VALUES
(2, 'aaa', 'Jakarta', '2017-02-22', '2017-02-24', 'Rapat', 1, 2, '2017-03-04 09:53:45', 1, NULL),
(170228, 'Manager', 'Malaysia', '2017-02-28', '2017-03-06', 'Gathering', 1, 3, '2017-03-04 09:54:45', 1, NULL),
(170301, 'Bbb', 'Malang', '2017-03-01', '2017-02-02', 'Rapat', 1, 1, '2017-03-04 09:45:45', 1, NULL),
(170302, 'b', 'b', '2017-03-17', '2017-03-17', 'b', 1, 2, '2017-03-04 09:54:24', 1, NULL),
(170303, 'cnama', 'Jombang', '2017-03-15', '2017-03-15', 'Meeting besar', 1, 1, '2017-03-04 11:01:59', 1, NULL),
(170304, 'coba 1', 'coba 1', '1970-01-01', '1970-01-01', 'coba 1', 19, 6, '2017-03-08 07:59:55', 2, NULL),
(170316, 'nama ketua', 'surabaya', '2017-03-21', '2017-02-22', 'meeting', 19, 5, '2017-03-05 12:25:54', 1, NULL),
(170317, 'nama', 's', '2017-03-15', '2017-03-13', 's', 15, 8, '2017-03-07 19:54:10', 1, '2017-03-07'),
(170318, 'nama', 's', '2017-03-15', '2017-03-13', 's', 1, 5, '2017-03-08 07:31:19', 1, '2017-03-08'),
(170319, 'nama', 's', '2017-03-15', '2017-03-13', 's', 1, 1, '2017-03-08 07:37:36', 0, '2017-03-08'),
(170320, 'nama', 's', '2017-03-15', '2017-03-13', 's', 1, 1, '2017-03-08 07:39:19', 0, '2017-03-08'),
(170321, 'nama', 's', '2017-03-15', '2017-03-13', 's', 17, 6, '2017-03-08 07:39:58', 1, '2017-03-08'),
(170322, 'nama', 's', '2017-03-15', '2017-03-13', 's', 1, 1, '2017-03-08 07:40:29', 1, '2017-03-08'),
(170323, 'nama', 's', '2017-03-15', '2017-03-13', 's', 1, 1, '2017-03-08 07:42:32', 1, '2017-03-08'),
(170327, 'nama', 's', '2017-03-15', '2017-03-13', 's', 1, 1, '2017-03-08 07:50:46', 1, '2017-03-08'),
(170328, 'nama', 's', '2017-03-15', '2017-03-13', 's', 19, 7, '2017-03-08 07:53:22', 1, NULL),
(170329, 'coba', 'mojokerto', '2017-04-25', '2017-04-29', 'Meeting besar', 14, 4, '2017-03-31 09:02:57', 1, NULL),
(170330, 'coba nama', 'COBA TUJUAN ', '2017-04-20', '2017-04-21', 'coba kegiatan', 5, 8, '2017-04-04 20:11:45', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `status_permohonan`
--

CREATE TABLE `status_permohonan` (
  `id_permohonan` varchar(15) NOT NULL,
  `id_pengemudi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_permohonan`
--

INSERT INTO `status_permohonan` (`id_permohonan`, `id_pengemudi`) VALUES
('170222sbyjktam', 'efg87'),
('170222sbyjktam', 'jkl86');

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `tanggal` date NOT NULL,
  `id_surat` int(11) NOT NULL,
  `nomor_surat` varchar(25) NOT NULL,
  `kepada` varchar(30) NOT NULL,
  `perihal` varchar(30) NOT NULL,
  `backdate` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`tanggal`, `id_surat`, `nomor_surat`, `kepada`, `perihal`, `backdate`) VALUES
('2017-03-22', 107, '19/1/Sb/Srt/B', 'coba ', 'coba', '19/1A/Sb/Srt/B'),
('2017-04-01', 108, '19/2/Sb/Srt/B', 'coba 2', 'coba 2', '19/2C/Sb/Srt/B'),
('2017-04-08', 109, '19/3/Sb/Srt/B', 'coba 3', 'coba 3', '19/3/Sb/Srt/B'),
('2017-04-05', 110, '19/2A/Sb/Srt/B', 'coba backdate 1', 'coba backdate 1', NULL),
('2017-04-03', 111, '19/2B/Sb/Srt/B', 'coba backdate 2', 'coba backdate 2', NULL),
('2017-04-06', 112, '19/2C/Sb/Srt/B', 'coba backdate 3', 'coba backdate 3', NULL),
('2017-03-22', 113, '19/1A/Sb/Srt/B', 'coba backdate 4', 'coba backdate  4', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `surattugas`
--

CREATE TABLE `surattugas` (
  `id_surattugas` int(30) NOT NULL,
  `nomor_surattugas` varchar(25) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `tanggaldinas_mulai` date NOT NULL,
  `tanggaldinas_berakhir` date NOT NULL,
  `tujuan` varchar(30) NOT NULL,
  `kegiatan` varchar(100) NOT NULL,
  `need_driver` int(11) NOT NULL,
  `nama_signer` varchar(225) NOT NULL,
  `jabatan_signer` varchar(225) NOT NULL,
  `backdate` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surattugas`
--

INSERT INTO `surattugas` (`id_surattugas`, `nomor_surattugas`, `nama`, `nip`, `jabatan`, `tanggal_surat`, `tanggaldinas_mulai`, `tanggaldinas_berakhir`, `tujuan`, `kegiatan`, `need_driver`, `nama_signer`, `jabatan_signer`, `backdate`) VALUES
(32, '19/459/Sb/ST', 'd', 'd', 'd', '2017-03-06', '2017-03-10', '2017-03-10', 'd', 'd', 0, 'd', 'd', '19/459B/Sb/ST'),
(33, '19/460/Sb/ST', 'coba', 'coba nip', 'coba jabatan', '2017-03-10', '2017-04-25', '2017-04-29', 'mojokerto', 'Meeting besar', 170329, 'signer', 'jabatn signer', '19/460A/Sb/ST'),
(43, '19/460A/Sb/ST', 'backdate 1', 'backdate 1', 'backdate 1', '2017-03-15', '2017-03-02', '2017-03-03', 'backdate 1', 'backdate 1', 0, 'backdate 1', 'backdate 1', NULL),
(45, '19/459A/Sb/ST', 'backdate 2', 'backdate 2', 'backdate 2', '2017-03-08', '2017-04-12', '2017-04-13', 'backdate 2', 'backdate 2', 0, 'backdate 2', 'backdate 2', NULL),
(52, '19/459B/Sb/ST', 'Backdate 3', 'Backdate 3', 'Backdate 3', '2017-03-07', '2017-04-05', '2017-04-06', 'Backdate 3', 'Backdate 3', 0, 'Backdate 3', 'Backdate 3', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_status`
--

CREATE TABLE `tabel_status` (
  `id_status` int(1) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_status`
--

INSERT INTO `tabel_status` (`id_status`, `status`) VALUES
(1, 'Belum Diproses'),
(2, 'Disetujui'),
(3, 'Tidak Disetujui');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bi_wide`
--
ALTER TABLE `bi_wide`
  ADD PRIMARY KEY (`id_bi_wide`);

--
-- Indexes for table `catatan`
--
ALTER TABLE `catatan`
  ADD PRIMARY KEY (`id_catatan`),
  ADD KEY `dari` (`dari`),
  ADD KEY `penandatangan` (`penandatangan`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `fungsi`
--
ALTER TABLE `fungsi`
  ADD PRIMARY KEY (`id_fungsi`);

--
-- Indexes for table `jam`
--
ALTER TABLE `jam`
  ADD PRIMARY KEY (`id_jam`);

--
-- Indexes for table `ldp`
--
ALTER TABLE `ldp`
  ADD PRIMARY KEY (`id_ldp`),
  ADD KEY `kepada` (`kepada`);

--
-- Indexes for table `memo`
--
ALTER TABLE `memo`
  ADD PRIMARY KEY (`id_memo`),
  ADD KEY `kepada` (`kepada`);

--
-- Indexes for table `penandatanganan`
--
ALTER TABLE `penandatanganan`
  ADD PRIMARY KEY (`id_penandatangan`);

--
-- Indexes for table `pengemudi`
--
ALTER TABLE `pengemudi`
  ADD PRIMARY KEY (`id_pengemudi`);

--
-- Indexes for table `pengikut_surattugas`
--
ALTER TABLE `pengikut_surattugas`
  ADD PRIMARY KEY (`id_pengikut`);

--
-- Indexes for table `permohonan_pengemudi`
--
ALTER TABLE `permohonan_pengemudi`
  ADD PRIMARY KEY (`id_permohonan`);

--
-- Indexes for table `status_permohonan`
--
ALTER TABLE `status_permohonan`
  ADD PRIMARY KEY (`id_permohonan`,`id_pengemudi`),
  ADD KEY `fk_status` (`id_pengemudi`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `surattugas`
--
ALTER TABLE `surattugas`
  ADD PRIMARY KEY (`id_surattugas`);

--
-- Indexes for table `tabel_status`
--
ALTER TABLE `tabel_status`
  ADD PRIMARY KEY (`id_status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bi_wide`
--
ALTER TABLE `bi_wide`
  MODIFY `id_bi_wide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `catatan`
--
ALTER TABLE `catatan`
  MODIFY `id_catatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `fungsi`
--
ALTER TABLE `fungsi`
  MODIFY `id_fungsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `jam`
--
ALTER TABLE `jam`
  MODIFY `id_jam` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `ldp`
--
ALTER TABLE `ldp`
  MODIFY `id_ldp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `memo`
--
ALTER TABLE `memo`
  MODIFY `id_memo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `penandatanganan`
--
ALTER TABLE `penandatanganan`
  MODIFY `id_penandatangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pengikut_surattugas`
--
ALTER TABLE `pengikut_surattugas`
  MODIFY `id_pengikut` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `permohonan_pengemudi`
--
ALTER TABLE `permohonan_pengemudi`
  MODIFY `id_permohonan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170331;
--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
--
-- AUTO_INCREMENT for table `surattugas`
--
ALTER TABLE `surattugas`
  MODIFY `id_surattugas` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `catatan`
--
ALTER TABLE `catatan`
  ADD CONSTRAINT `catatan_ibfk_1` FOREIGN KEY (`dari`) REFERENCES `fungsi` (`id_fungsi`),
  ADD CONSTRAINT `catatan_ibfk_2` FOREIGN KEY (`penandatangan`) REFERENCES `penandatanganan` (`id_penandatangan`);

--
-- Constraints for table `ldp`
--
ALTER TABLE `ldp`
  ADD CONSTRAINT `ldp_ibfk_1` FOREIGN KEY (`kepada`) REFERENCES `fungsi` (`id_fungsi`);

--
-- Constraints for table `memo`
--
ALTER TABLE `memo`
  ADD CONSTRAINT `memo_ibfk_1` FOREIGN KEY (`kepada`) REFERENCES `bi_wide` (`id_bi_wide`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

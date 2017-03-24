-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2017 at 09:33 PM
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
  `dari` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catatan`
--

INSERT INTO `catatan` (`tgl`, `id_catatan`, `nomor_catatan`, `penandatangan`, `perihal`, `dari`) VALUES
('2017-03-09', 1, '19/345/Sb-DPE/M.02/B', 2, 'perihal 2', 4),
('2017-03-09', 4, '19/346/Sb-DPE/M.02/B', 1, 'peria', 3),
('2017-03-09', 5, '19/347/Sb-DPE/M.02/B', 1, 'peria', 3),
('2017-03-10', 6, '19/348/Sb-DPE/M.01/B', 3, 'periassss', 3),
('2017-03-10', 7, '19/349/Sb-SPPUR-ULAK/M.02/B', 3, 'periassss', 6),
('2017-03-10', 8, '19/350/Sb-SPPUR-FKIPK/M.02/Rhs', 2, 'perihal', 9),
('2017-03-09', 12, '19/347A/Sb-SPPUR-FPP/M.01/B', 3, 'backdatec 2', 8),
('2017-03-09', 13, '19/347B/Sb-DAEK-FAES/M.01/Rhs', 3, 'perihal', 2),
('2017-03-10', 14, '19/351/Sb-SPPUR-UOSP/M.02/B', 3, 'perihal', 10),
('2017-03-10', 15, '19/352/Sb-SPPUR-UPU/M.02/B', 2, 'perihal', 7),
('2017-03-10', 16, '19/353/Sb-SPPUR-FPP/M.02/B', 3, 'backdatec 2', 8),
('2017-03-22', 17, '19/1/Sb-SPPUR-UDU/M.02/B', 2, 'coba udu', 5),
('2017-03-22', 18, '19/349/Sb-DPE/M.01/Rhs', 2, 'perihal', 4),
('2017-03-22', 19, '19/350/Sb-DPE/M.02/B', 2, 'perihal', 3),
('2017-03-10', 20, '19/350A/Sb-SPPUR-FKIPK/M.01/B', 2, 'perijal', 9);

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
(1, '06.00-06.30'),
(2, '06.30-07.00'),
(3, '07.30-08.00'),
(4, '08.30-09.00'),
(5, '08.30-09.00'),
(6, '09.30-10.00'),
(7, '10.30-11.00'),
(8, '11.30-12.00'),
(9, '12.30-13.00'),
(10, '13.00-13.30'),
(11, '13.30-14.00'),
(12, '14.00-14.30'),
(13, '14.30-15.00'),
(14, '15.00-15.30'),
(15, '15.30-16.00'),
(16, '16.00-16.30'),
(17, '16.30-17.00'),
(18, '17.00-17.30'),
(19, '17.30-18.00');

-- --------------------------------------------------------

--
-- Table structure for table `ldp`
--

CREATE TABLE `ldp` (
  `tgl` date NOT NULL,
  `id_ldp` int(11) NOT NULL,
  `nomor_ldp` varchar(100) NOT NULL,
  `kepada` int(11) NOT NULL,
  `perihal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ldp`
--

INSERT INTO `ldp` (`tgl`, `id_ldp`, `nomor_ldp`, `kepada`, `perihal`) VALUES
('2017-03-08', 1, '19/345/Sb-DPE/M.01/B', 9, 'perihal 1'),
('2017-03-08', 4, '19/346/Sb-DPE/M.01/B', 6, 'perijal2'),
('2017-03-08', 7, '19/347/Sb-SLA/M.01/B', 5, 'sla'),
('2017-03-08', 8, '19/348/Sb-SLA/M.01/B', 3, 'sla'),
('2017-03-08', 11, '19/349/Sb-DPE/M.01/B', 8, 'poohg'),
('2017-03-08', 12, '19/350/Sb-SPPUR-UDU/M.01/B', 8, 'poohg'),
('2017-03-08', 13, '19/350A/Sb-DPE/M.01/B', 8, 'perihal 34'),
('2017-03-09', 14, '19/351/Sb-DPE/M.01/B', 9, 'perihal coba'),
('2017-03-22', 15, '19/1/Sb-SPPUR-ULAK/M.01/B', 3, 'coba ulak'),
('2017-03-22', 16, '19/349/Sb-SLA/M.01/Rhs', 5, 'coba'),
('2017-03-22', 17, '19/2/Sb-SPPUR-ULAK/M.01/B', 3, 'coba ulak'),
('2017-03-22', 18, '19/3/Sb-SPPUR-ULAK/M.01/B', 8, 'coba ulak'),
('2017-03-22', 19, '19/3A/Sb-SPPUR-ULAK/M.01/B', 8, 'backdate'),
('2017-03-22', 20, '19/3B/Sb-SPPUR-ULAK/M.01/B', 8, 'backdate'),
('2017-03-22', 21, '19/351/Sb-SPPUR-UDU/M.01/B', 4, 'coba udu'),
('2017-03-08', 22, '19/350A/Sb-SPPUR-UDU/M.01/B', 4, 'backdate udu'),
('2017-03-22', 23, '19/352/Sb-DPE/M.01/B', 8, 'coba');

-- --------------------------------------------------------

--
-- Table structure for table `memo`
--

CREATE TABLE `memo` (
  `tgl` date NOT NULL,
  `id_memo` int(11) NOT NULL,
  `nomor_memo` varchar(25) NOT NULL,
  `kepada` int(30) NOT NULL,
  `perihal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memo`
--

INSERT INTO `memo` (`tgl`, `id_memo`, `nomor_memo`, `kepada`, `perihal`) VALUES
('2017-03-07', 1, '19/345/Sb/M.01/B', 2, 'perihal 1'),
('2017-03-07', 2, '19/1/Sb/M.01/B', 1, 'perihal 2'),
('2017-03-07', 3, '19/1/Sb/M.01/B', 1, 'perihal 3'),
('2017-03-07', 4, '19/1/Sb/M.01/B', 1, 'w'),
('2017-03-07', 5, '19/346/Sb/M.01/B', 1, 'w'),
('2017-03-07', 6, '19/347/Sb/M.01/B', 1, 'w'),
('2017-03-07', 7, '19/348/Sb/M.01/B', 8, 'perihal 5eeeee'),
('2017-03-07', 8, '19/349/Sb/M.01/Rhs', 9, 'perihal 6'),
('2017-03-07', 9, '19/350/Sb/M.01/Rhs', 11, 'perihal 6'),
('2017-03-08', 10, '19/351/Sb/M.01/B', 11, 'perihal yooo'),
('2017-03-08', 11, '19/352/Sb/M.01/Rhs', 11, 'perihal 6er'),
('2017-03-07', 12, '19/350A/Sb/M.01/B', 1, 'reeeee'),
('2017-03-07', 13, '19/350B/Sb/M.01/B', 1, 'peri');

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
(21, 37, 'F', 'F', 'F');

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
(170329, 'coba', 'mojokerto', '2017-03-16', '2017-03-13', 'Meeting besar', 14, 4, '2017-03-10 16:12:46', 1, NULL);

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
  `perihal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`tanggal`, `id_surat`, `nomor_surat`, `kepada`, `perihal`) VALUES
('2017-03-22', 104, '19/1/Sb/Srt/B', 'coba', 'coba'),
('2017-03-22', 105, '19/2/Sb/Srt/B', 'coba 2', 'coba 2');

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
  `jabatan_signer` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surattugas`
--

INSERT INTO `surattugas` (`id_surattugas`, `nomor_surattugas`, `nama`, `nip`, `jabatan`, `tanggal_surat`, `tanggaldinas_mulai`, `tanggaldinas_berakhir`, `tujuan`, `kegiatan`, `need_driver`, `nama_signer`, `jabatan_signer`) VALUES
(32, '19/459B/Sb/ST', 'd', 'd', 'd', '2017-03-06', '2017-03-10', '2017-03-10', 'd', 'd', 0, 'd', 'd'),
(33, '19/460/Sb/ST', 'coba', 'coba nip', 'coba jabatan', '2017-03-10', '2017-03-16', '2017-03-13', 'mojokerto', 'Meeting besar', 170329, 'signer', 'jabatn signer'),
(34, '19/459C/Sb/ST', 'q', 'q', 'q', '2017-03-06', '2017-03-10', '2017-03-10', 'q', 'q', 0, 'q', 'q'),
(35, '19/461/Sb/ST', 'w', 'w', 'e', '2017-03-22', '2017-03-22', '2017-03-16', 'w', 'w', 0, 'w', 'w'),
(36, '19/462/Sb/ST', 'q', 'q', 'q', '2017-03-24', '1970-01-01', '1970-01-01', 'q', 'q', 0, 'w', 'w'),
(37, '19/463/Sb/ST', 'Q', 'R', 'R', '2017-03-24', '2017-04-04', '2017-04-05', 'R', 'R', 0, 'T', 'T'),
(38, '19/463A/Sb/ST', 'Xx', 'x', 'x', '2017-03-24', '2017-03-01', '2017-03-02', 'r', 'r', 0, 'wW', 'E');

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
  MODIFY `id_catatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
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
-- AUTO_INCREMENT for table `ldp`
--
ALTER TABLE `ldp`
  MODIFY `id_ldp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `memo`
--
ALTER TABLE `memo`
  MODIFY `id_memo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `penandatanganan`
--
ALTER TABLE `penandatanganan`
  MODIFY `id_penandatangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pengikut_surattugas`
--
ALTER TABLE `pengikut_surattugas`
  MODIFY `id_pengikut` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `permohonan_pengemudi`
--
ALTER TABLE `permohonan_pengemudi`
  MODIFY `id_permohonan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170330;
--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
--
-- AUTO_INCREMENT for table `surattugas`
--
ALTER TABLE `surattugas`
  MODIFY `id_surattugas` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
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

-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2017 at 10:50 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jangkrik`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
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
-- Table structure for table `catatan`
--

CREATE TABLE IF NOT EXISTS `catatan` (
  `tgl` date NOT NULL,
`id_catatan` int(11) NOT NULL,
  `nomor_catatan` varchar(25) NOT NULL,
  `penandatangan` varchar(30) NOT NULL,
  `perihal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE IF NOT EXISTS `divisi` (
`id_divisi` int(11) NOT NULL,
  `nama_divisi` varchar(100) NOT NULL,
  `singkatan` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `nama_divisi`, `singkatan`) VALUES
(1, 'DAEK - Divisi Advisory Ekonomi Keuangan', 'DAEK'),
(2, 'DPE - Divisi Pengembangan Ekonomi ', 'DPE'),
(3, 'DSP PUR - Divisi Sistem Pembayaran dan Pengelolaan Uang Rupiah', 'DSP-PUR');

-- --------------------------------------------------------

--
-- Table structure for table `divisi_fungsi`
--

CREATE TABLE IF NOT EXISTS `divisi_fungsi` (
  `id_divisi` int(11) NOT NULL,
  `id_fungsi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fungsi`
--

CREATE TABLE IF NOT EXISTS `fungsi` (
`id_fungsi` int(11) NOT NULL,
  `nama_fungsi` varchar(100) NOT NULL,
  `singkatan` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fungsi`
--

INSERT INTO `fungsi` (`id_fungsi`, `nama_fungsi`, `singkatan`) VALUES
(1, 'FDSEK - Fungsi Data Statistik Ekonomi dan Keuangan', 'FDSEK'),
(2, 'FAES - Fungsi Assesmen Ekonomi dan Surveilance', 'FAES'),
(3, 'FKKK - Fungsi Koordinasi dan Komunikasi Kebijakan', 'FKKK'),
(4, 'FPPU - Fungsi Pelaksanaan Pengembangan UMKM', 'FPPU'),
(5, 'FPP SP PUR - Fungsi Perizinan dan Pengembangan SP PUR', 'FPP-SP-PUR'),
(6, 'FKIPK - Fungsi Keuangan Inklusif dan Perlindungan Konsumen', 'FKIPK'),
(7, 'FSLASPP - Fungsi SDM, Logistik, Anggaran, Sekretariat, Protokol & Pengaman', 'FSLASPP');

-- --------------------------------------------------------

--
-- Table structure for table `jam`
--

CREATE TABLE IF NOT EXISTS `jam` (
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

CREATE TABLE IF NOT EXISTS `ldp` (
  `tgl` date NOT NULL,
`id_ldp` int(11) NOT NULL,
  `nomor_ldp` varchar(25) NOT NULL,
  `kepada` varchar(30) NOT NULL,
  `perihal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `memo`
--

CREATE TABLE IF NOT EXISTS `memo` (
  `tgl` date NOT NULL,
`id_memo` int(11) NOT NULL,
  `nomor_memo` varchar(25) NOT NULL,
  `kepada` varchar(30) NOT NULL,
  `perihal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengemudi`
--

CREATE TABLE IF NOT EXISTS `pengemudi` (
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

CREATE TABLE IF NOT EXISTS `pengikut_surattugas` (
`id_pengikut` int(30) NOT NULL,
  `id_surattugas` int(30) NOT NULL,
  `nip_pengikut` varchar(225) NOT NULL,
  `nama_pengikut` varchar(225) NOT NULL,
  `jabatan_pengikut` varchar(225) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

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
(10, 24, 'ganti', 'ganti', 'ganti');

-- --------------------------------------------------------

--
-- Table structure for table `permohonan_pengemudi`
--

CREATE TABLE IF NOT EXISTS `permohonan_pengemudi` (
`id_permohonan` int(11) NOT NULL,
  `nama_pengguna` varchar(35) NOT NULL,
  `tujuan` varchar(35) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `kegiatan` varchar(50) NOT NULL,
  `jam_keberangkatan` int(11) NOT NULL,
  `jumlah_pengemudi` int(2) NOT NULL,
  `tanggaljam_masukan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_status` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=170317 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permohonan_pengemudi`
--

INSERT INTO `permohonan_pengemudi` (`id_permohonan`, `nama_pengguna`, `tujuan`, `tanggal_mulai`, `tanggal_selesai`, `kegiatan`, `jam_keberangkatan`, `jumlah_pengemudi`, `tanggaljam_masukan`, `id_status`) VALUES
(2, 'aaa', 'Jakarta', '2017-02-22', '2017-02-24', 'Rapat', 1, 2, '2017-03-04 09:53:45', 1),
(170228, 'Manager', 'Malaysia', '2017-02-28', '2017-03-06', 'Gathering', 1, 3, '2017-03-04 09:54:45', 1),
(170301, 'Bbb', 'Malang', '2017-03-01', '2017-02-02', 'Rapat', 1, 1, '2017-03-04 09:45:45', 1),
(170302, 'b', 'b', '2017-03-17', '2017-03-17', 'b', 1, 2, '2017-03-04 09:54:24', 1),
(170303, 'cnama', 'Jombang', '2017-03-15', '2017-03-15', 'Meeting besar', 1, 1, '2017-03-04 11:01:59', 1),
(170304, 'coba 1', 'coba 1', '1970-01-01', '1970-01-01', 'coba 1', 2, 2, '2017-03-05 18:27:15', 2),
(170316, 'nama ketua', 'surabaya', '2017-03-21', '2017-02-22', 'meeting', 19, 5, '2017-03-05 12:25:54', 1);

-- --------------------------------------------------------

--
-- Table structure for table `status_permohonan`
--

CREATE TABLE IF NOT EXISTS `status_permohonan` (
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

CREATE TABLE IF NOT EXISTS `surat` (
  `tanggal` date NOT NULL,
`id_surat` int(11) NOT NULL,
  `nomor_surat` varchar(25) NOT NULL,
  `kepada` varchar(30) NOT NULL,
  `perihal` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`tanggal`, `id_surat`, `nomor_surat`, `kepada`, `perihal`) VALUES
('2017-02-19', 1, '19/456/sb/srt/Rhs', 'kepada', 'perihal'),
('2017-02-22', 2, '19/457/sb/srt/B', 'kepada 1', 'perihal 2'),
('2017-02-08', 3, '18/178A/sb/srt/A', 'kepada 3', 'perihal 3'),
('2017-02-22', 66, '19/457A/sb/srt/B', 'coba 1', 'coba 1'),
('2017-02-23', 67, '19/457B/sb/srt/B', 'coba 2', 'coba 2'),
('2017-02-23', 68, '19/457C/sb/srt/Rhs', 'coba 2', 'coba 2'),
('2017-02-22', 72, '19/458/sb/srt/B', 'k1', 'p1'),
('2017-02-22', 75, '19//sb/srt/Rhs', 'k2', 'p2'),
('0000-00-00', 81, '19/459/sb/srt/B', 'c1', 'c1'),
('1970-01-01', 82, '19/460/sb/srt/B', 'c2', 'c2'),
('1970-01-01', 83, '19/461/sb/srt/B', 'c3', 'c3'),
('2017-02-24', 84, '19/462/sb/srt/B', 'd', 'd'),
('2017-02-23', 85, '19/457D/sb/srt/Rhs', 'c6', 'c6'),
('2017-02-24', 86, '19/463/sb/srt/Rhs', 'kepada', 'perihal'),
('2017-02-24', 87, '19/463A/sb/srt/B', 'kepada backdate', 'perihal backdate'),
('2017-02-25', 88, '19/464/sb/srt/Rhs', 'd', 'd'),
('2017-02-24', 89, '19/463B/sb/srt/B', 'f', 'f'),
('2017-02-26', 90, '19/465/sb/srt/Rhs', 'oooo', 'oooo'),
('2017-02-27', 92, '19/466/sb/srt/B', 'sf', 'sf'),
('2017-02-24', 93, '19/463C/sb/srt/B', 'qqqqqqqqqqqqqq', 'qqqqqqqqqqqqqqqq'),
('2017-03-03', 94, '19/467/sb/srt/Rhs', 'Sekretaris', 'Kegiatan'),
('2017-02-22', 99, '19/458A/sb/srt/B', 're', 'er');

-- --------------------------------------------------------

--
-- Table structure for table `surattugas`
--

CREATE TABLE IF NOT EXISTS `surattugas` (
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
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surattugas`
--

INSERT INTO `surattugas` (`id_surattugas`, `nomor_surattugas`, `nama`, `nip`, `jabatan`, `tanggal_surat`, `tanggaldinas_mulai`, `tanggaldinas_berakhir`, `tujuan`, `kegiatan`, `need_driver`, `nama_signer`, `jabatan_signer`) VALUES
(1, '19/453/ST/B', 'nama ketua', '564', 'sekretaris', '2017-02-28', '2017-03-21', '2017-02-22', 'surabaya', 'meeting', 170316, 'signer 1', 'jabatan signer 1'),
(2, '19/454/ST/B', 'cnama', 'cnip', 'Sekretaris', '2017-02-28', '2017-03-15', '2017-03-15', 'Jombang', 'Meeting besar', 170303, 'nama', 'jabatan'),
(22, '19/455/ST/B', 'nama ketua', 'nip', 'jabatan', '2017-03-03', '2017-09-03', '1970-01-01', 'tujuan', 'kegiatan', 0, 'nama signer', 'jabatan signer'),
(23, '19/456/ST/B', 'nama 2', 'nip2', 'jabatan 2', '2017-03-03', '1970-01-01', '1970-01-01', 'tujuan 2', 'kegitan 2', 0, 'nama signer 2', 'jabatan signer 2'),
(24, '19/457/ST/B', 'coba 1', 'ganti', 'ganti', '2017-03-04', '1970-01-01', '1970-01-01', 'coba 1', 'coba 1', 170304, 'ganti', 'ganti'),
(25, '19/458/ST/B', 'w', 'w', 'w', '2017-03-05', '2017-05-03', '2017-05-03', 'w', 'w', 0, 'w', 'w'),
(26, '19/456A/ST/B', 'l', 'l', 'l', '2017-03-03', '2017-05-03', '2017-05-03', 'l', 'l', 0, 'l', 'l'),
(27, '19/456B/ST/B', 'v', 'v', 'v', '2017-03-03', '2017-03-05', '2017-03-05', 'v', 'v', 0, 'v', 'v'),
(28, '19/457A/ST/B', 's', 's', 'Sekretaris', '2017-03-04', '2017-03-05', '2017-03-05', 's', 's', 0, 's', 's'),
(29, '19/457B/ST/B', 'coba', 'd', 'd', '2017-03-04', '2017-03-05', '2017-03-05', 'd', 'd', 0, 'd', 'd'),
(30, '19/459/ST/B', 'nama', 's', 's', '2017-03-06', '2017-03-15', '2017-03-13', 's', 's', 0, 's', 's');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_status`
--

CREATE TABLE IF NOT EXISTS `tabel_status` (
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
-- Indexes for table `catatan`
--
ALTER TABLE `catatan`
 ADD PRIMARY KEY (`id_catatan`);

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
 ADD PRIMARY KEY (`id_ldp`);

--
-- Indexes for table `memo`
--
ALTER TABLE `memo`
 ADD PRIMARY KEY (`id_memo`);

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
 ADD PRIMARY KEY (`id_permohonan`,`id_pengemudi`), ADD KEY `fk_status` (`id_pengemudi`);

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
-- AUTO_INCREMENT for table `catatan`
--
ALTER TABLE `catatan`
MODIFY `id_catatan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `fungsi`
--
ALTER TABLE `fungsi`
MODIFY `id_fungsi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `ldp`
--
ALTER TABLE `ldp`
MODIFY `id_ldp` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `memo`
--
ALTER TABLE `memo`
MODIFY `id_memo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengikut_surattugas`
--
ALTER TABLE `pengikut_surattugas`
MODIFY `id_pengikut` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `permohonan_pengemudi`
--
ALTER TABLE `permohonan_pengemudi`
MODIFY `id_permohonan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=170317;
--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=100;
--
-- AUTO_INCREMENT for table `surattugas`
--
ALTER TABLE `surattugas`
MODIFY `id_surattugas` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

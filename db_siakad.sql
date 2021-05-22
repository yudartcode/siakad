-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 01:00 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siakad`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nuptk` varchar(30) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` varchar(30) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `status_kepegawaian` varchar(30) NOT NULL,
  `jenis_ptk` varchar(15) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `tugas_tambahan` varchar(30) NOT NULL,
  `golongan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nama`, `nuptk`, `jk`, `tempat_lahir`, `tanggal_lahir`, `nip`, `status_kepegawaian`, `jenis_ptk`, `agama`, `alamat`, `kecamatan`, `tugas_tambahan`, `golongan`) VALUES
(23, 'Raudatul Jannah', '99988888', 'P', 'Kopang', '21 Januari 1999', '899000', 'PNS', 'Guru Mapel', 'islam', 'Kopang', 'Kopang', 'Guru Piket', 'III/a');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `kd_jurusan` varchar(15) NOT NULL,
  `jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `kd_kelas` varchar(15) NOT NULL,
  `kelas` varchar(15) NOT NULL,
  `jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kd_kelas`, `kelas`, `jurusan`) VALUES
('MM2019', '12', '--Pilih Jenis Jurusan--');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `kd_mapel` varchar(15) NOT NULL,
  `mata_pelajaran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`kd_mapel`, `mata_pelajaran`) VALUES
('001', 'bahasa indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `kd_nilai` varchar(15) NOT NULL,
  `nis` varchar(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kd_mapel` varchar(30) NOT NULL,
  `id_guru` varchar(100) NOT NULL,
  `kd_kelas` varchar(10) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `semester` varchar(15) NOT NULL,
  `tugas` varchar(5) NOT NULL,
  `uts` varchar(5) NOT NULL,
  `uas` varchar(5) NOT NULL,
  `total_nilai` varchar(10) NOT NULL,
  `rata_rata` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`kd_nilai`, `nis`, `nama`, `kd_mapel`, `id_guru`, `kd_kelas`, `jurusan`, `semester`, `tugas`, `uts`, `uas`, `total_nilai`, `rata_rata`) VALUES
('9000', '1243', 'Raudatul', 'Bahasa indonesia', 'iyat', '--Pilih Ke', '--Pilih Jurusan--', '--Pilih Semeste', '90', '78', '80', '208', '83');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `nisn` varchar(30) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(30) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `rombel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `jk`, `nisn`, `tempat_lahir`, `tanggal_lahir`, `agama`, `alamat`, `kecamatan`, `nama_ayah`, `nama_ibu`, `rombel`) VALUES
('7654', 'Raudatul Jannah', 'perempuan', '7654', 'Kopang', '21 Januari 1999', 'islam', 'Kopang', 'Kopang', 'iiiiii', 'mm', '--Pilih Ro');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `password`, `level`) VALUES
(1, 'admin', 'raudatul', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(2, '1243', 'yatman', '827ccb0eea8a706c4c34a16891f84e7b', 'siswa'),
(3, 'gr123', 'iyat', '827ccb0eea8a706c4c34a16891f84e7b', 'guru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`kd_jurusan`),
  ADD KEY `jurusan` (`jurusan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kd_kelas`),
  ADD KEY `jurusan` (`jurusan`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`kd_mapel`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`kd_nilai`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

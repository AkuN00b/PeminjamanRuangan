-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- 생성 시간: 22-04-25 13:26
-- 서버 버전: 10.4.11-MariaDB
-- PHP 버전: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `peminjaman_ruangan`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nohp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` varchar(500) DEFAULT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama`, `nohp`, `email`, `foto`, `status`) VALUES
('12', '12', '122222', '12', '12@m.com', '1650885762-download.jpg', ''),
('Max', 'max12345', 'Max Cowell Robert Tesr', '082374212567', 'mcowll@gmail.com', '1650099101-download-(1).jpg', '');

-- --------------------------------------------------------

--
-- 테이블 구조 `barang`
--

CREATE TABLE `barang` (
  `idBarang` int(11) NOT NULL,
  `idRuangan` int(11) NOT NULL,
  `namaBarang` varchar(50) NOT NULL,
  `totalBarang` int(11) NOT NULL,
  `jumlahTersedia` int(11) NOT NULL,
  `jumlahRusak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 테이블 구조 `jenis_ruangan`
--

CREATE TABLE `jenis_ruangan` (
  `idJenisRuangan` int(11) NOT NULL,
  `namaJenisRuangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `jenis_ruangan`
--

INSERT INTO `jenis_ruangan` (`idJenisRuangan`, `namaJenisRuangan`) VALUES
(1, 'Kelas'),
(2, 'Laboratorium');

-- --------------------------------------------------------

--
-- 테이블 구조 `peminjaman`
--

CREATE TABLE `peminjaman` (
  `idPeminjaman` int(11) NOT NULL,
  `idRuangan` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` date NOT NULL,
  `mulai` time NOT NULL,
  `selesai` time NOT NULL,
  `jumlahPemakai` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `peminjam` varchar(50) NOT NULL,
  `tingkat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 테이블 구조 `ruangan`
--

CREATE TABLE `ruangan` (
  `idRuangan` int(11) NOT NULL,
  `idJenisRuangan` int(11) NOT NULL,
  `idSop` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `namaRuangan` varchar(50) NOT NULL,
  `statusPinjam` int(11) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `ruangan`
--

INSERT INTO `ruangan` (`idRuangan`, `idJenisRuangan`, `idSop`, `username`, `namaRuangan`, `statusPinjam`, `kapasitas`, `foto`, `status`) VALUES
(105, 2, 2, 'Max', '101', 1, 30, '1650098467-download-(5).jpg', 0);

-- --------------------------------------------------------

--
-- 테이블 구조 `sop`
--

CREATE TABLE `sop` (
  `idSop` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `sop`
--

INSERT INTO `sop` (`idSop`, `deskripsi`, `foto`) VALUES
(1, 'sop1edit', '1650885915-standar-operasional-prosedur.jpg'),
(3, 'sop2edit', '1650885879-shutterstock_1511504984.png');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- 테이블의 인덱스 `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idBarang`);

--
-- 테이블의 인덱스 `jenis_ruangan`
--
ALTER TABLE `jenis_ruangan`
  ADD PRIMARY KEY (`idJenisRuangan`);

--
-- 테이블의 인덱스 `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`idPeminjaman`);

--
-- 테이블의 인덱스 `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`idRuangan`);

--
-- 테이블의 인덱스 `sop`
--
ALTER TABLE `sop`
  ADD PRIMARY KEY (`idSop`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `barang`
--
ALTER TABLE `barang`
  MODIFY `idBarang` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `jenis_ruangan`
--
ALTER TABLE `jenis_ruangan`
  MODIFY `idJenisRuangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 테이블의 AUTO_INCREMENT `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `idPeminjaman` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `idRuangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- 테이블의 AUTO_INCREMENT `sop`
--
ALTER TABLE `sop`
  MODIFY `idSop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

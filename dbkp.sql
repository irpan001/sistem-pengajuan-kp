-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Mar 2022 pada 04.03
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbkp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `namaadmin` varchar(100) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nohp` bigint(12) NOT NULL,
  `e-mail` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `namaadmin`, `username`, `password`, `nohp`, `e-mail`, `level`) VALUES
(2, 'Lastri Agustin', 'lastri', '123', 6289123456, 'lastri.agustin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kp`
--

CREATE TABLE `kp` (
  `id_pengajuan` int(20) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `id_pembimbing` varchar(50) NOT NULL,
  `tanggalmulai` date NOT NULL,
  `judulkp` varchar(25) NOT NULL,
  `pdf` varchar(50) NOT NULL,
  `id_mahasiswa` int(10) NOT NULL,
  `status` varchar(25) NOT NULL,
  `ulasan` varchar(30) NOT NULL,
  `lap_akhir` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kp`
--

INSERT INTO `kp` (`id_pengajuan`, `nis`, `nama`, `kelas`, `jurusan`, `id_pembimbing`, `tanggalmulai`, `judulkp`, `pdf`, `id_mahasiswa`, `status`, `ulasan`, `lap_akhir`) VALUES
(5, '17182072001', 'Ade Sari Febriani', '12', 'Rekayasa Perangkat Lunak', 'Asih Mustika', '2020-10-01', 'PT.Denso Indonesia', '5f745b27160be.pdf', 4, '1', 'sangat bagus guys', ''),
(6, '17182072008', 'Cintia Sriwandani', '12', 'Rekayasa Perangkat Lunak', 'Asih Mustika', '2020-10-01', 'PT.Denso Indonesia', '5f745b67d6029.pdf', 8, '2', 'cari tempat pkl lain', ''),
(10, '17182072001', 'Ade Sari Febriani', '12', 'Rekayasa Perangkat Lunak', 'Lastri Agustin', '2022-03-02', 'testing', '621f26924c78c.pdf', 4, '2', 'hmmm', 'lap_akhir'),
(11, '121212', 'irpan', 'TI A 17', 'Informatika', 'Lastri Agustin', '2022-03-02', 'tessss', '621f42964d731.pdf', 16, '1', 'mantap', 'lap_akhir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id_pengajuan` int(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kelas` int(25) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `pdf` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id_pengajuan`, `nama`, `kelas`, `jurusan`, `pdf`) VALUES
(17, 'Ade Sari Febriani', 12, 'Teknik Informatika', '6123bb7664170.pdf'),
(18, 'irpan', 0, 'Teknik Informatika', '621f474e20575.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(10) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `namamahasiswa` varchar(50) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` bigint(12) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nis`, `namamahasiswa`, `kelas`, `jurusan`, `email`, `nohp`, `uname`, `pass`, `level`) VALUES
(4, '17182072001', 'Ade Sari Febriani', '12', 'Teknik Informatika', 'adesari@gmail.com', 8912345678, 'adesari', '123', 'mahasiswa'),
(5, '17182072004', 'Aprilia Anggraeni', '12', 'Teknik Informatika', 'aprilia@gmail.com', 8912345678, 'aprilia.anggraeni', '123', 'mahasiswa'),
(6, '17182072005', 'Astri Nurhasanah', '12', 'Teknik Informatika', 'astri_n@gmail.com', 8912345678, 'astri.nurhasanah', '123', 'mahasiswa'),
(7, '17182072007', 'Cindy Nirmalasari', '12', 'Teknik Informatika', 'cindy_n@gmail.com', 8912345678, 'cindy.nirmalasari', '123', 'mahasiswa'),
(8, '17182072008', 'Cintia Sriwandani', '12', 'Teknik Informatika', 'cintia_s@gmail.com', 8912345678, 'cintia.sriwandani', '123', 'mahasiswa'),
(9, '17182072009', 'Cucu Maulana', '12', 'Teknik Informatika', 'cucu_maul@gmail.com', 8912345678, 'cucu.maulana', '123', 'mahasiswa'),
(10, '17182072010', 'Devi Lestari', '12', 'Teknik Informatika', 'devi_les@gmail.com', 8912345678, 'devi.lestari', '123', 'mahasiswa'),
(11, '17182072012', 'Dini Indah Lestari', '12', 'Teknik Informatika', 'dini_indah@gmail.com', 8912345678, 'dini.indah.l', '123', 'mahasiswa'),
(12, '17182072013', 'Elma Rahma', '12', 'Teknik Informatika', 'elma_r@gmail.com', 8912345678, 'elma.rahma', '123', 'mahasiswa'),
(13, '17182072014', 'Gugun Gunawan', '12', 'Teknik Informatika', 'gugun_g@gmail.com', 8912345678, 'gugun.gunawan', '123', 'mahasiswa'),
(14, '1', 'Alfiansyah Fawzi', '12', 'Teknik Informatika', 'fawzi@gmail.com', 89663051098, 'alfian', '123', 'mahasiswa'),
(16, '121212', 'irpan', 'TI A 17', 'Teknik Informatika', 'irpanpauji16@gmail.com', 81123145156, 'irpan', '123', 'mahasiswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `id_jurusan` int(20) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'Teknik Informatika'),
(2, 'Teknik Sipil');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembimbing`
--

CREATE TABLE `tb_pembimbing` (
  `id_pembimbing` int(20) NOT NULL,
  `nama_pembimbing` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pembimbing`
--

INSERT INTO `tb_pembimbing` (`id_pembimbing`, `nama_pembimbing`, `alamat`) VALUES
(1, 'Lastri Agustin, S.Kom', 'Sindangkasih'),
(2, 'Asih Mustika, S.kom', 'Sindangkasih');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kp`
--
ALTER TABLE `kp`
  ADD PRIMARY KEY (`id_pengajuan`),
  ADD KEY `id_siswa` (`id_mahasiswa`) USING BTREE,
  ADD KEY `id_jurusan` (`jurusan`),
  ADD KEY `id_pembimbing` (`id_pembimbing`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`),
  ADD KEY `jurusan` (`jurusan`),
  ADD KEY `nis` (`nis`) USING BTREE;

--
-- Indeks untuk tabel `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `tb_pembimbing`
--
ALTER TABLE `tb_pembimbing`
  ADD PRIMARY KEY (`id_pembimbing`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kp`
--
ALTER TABLE `kp`
  MODIFY `id_pengajuan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_pengajuan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  MODIFY `id_jurusan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_pembimbing`
--
ALTER TABLE `tb_pembimbing`
  MODIFY `id_pembimbing` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

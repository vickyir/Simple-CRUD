-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jan 2021 pada 22.02
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_beasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `program`
--

CREATE TABLE `program` (
  `id_program` char(5) NOT NULL,
  `program_name` varchar(50) NOT NULL,
  `program_degree` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `program`
--

INSERT INTO `program` (`id_program`, `program_name`, `program_degree`) VALUES
('P001', 'Manajemen Informatic', 'Diploma'),
('P002', 'Information System', 'Graduated'),
('P003', 'Information Technology', 'Graduated');

-- --------------------------------------------------------

--
-- Struktur dari tabel `student`
--

CREATE TABLE `student` (
  `id_student` int(11) NOT NULL,
  `id_program` char(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone_number` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `student`
--

INSERT INTO `student` (`id_student`, `id_program`, `name`, `phone_number`, `email`, `password`) VALUES
(2, 'P002', 'sindhy', '08234517281', 'sindhypramudita@gmail.com', '12345'),
(3, 'P002', 'Bagus Gunawan', '082188389873', 'bagusgunawan@gmail.com', '12345'),
(4, 'P003', 'Titan Bagus Br', '082133131921', 'titanbagusbr@gmail.com', '123456'),
(5, 'P003', 'vicky irwanto', '082188389873', 'vicky.ir@students.amikom.ac.id', 'bismillah00'),
(6, 'P001', 'reyhan alikhfan', '082134681311', 'Reyhanalikhfan@yahoo.co.id', '12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `firts_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `firts_name`, `last_name`, `email`, `password`) VALUES
(1, 'vicky', 'irwanto', 'vickyirwanto2001@gmail.com', 'vicky1234'),
(2, 'reyhan', 'alikhfan', 'Reyhanalikhfan@yahoo.co.id', 'reyhan'),
(3, 'sindhy', 'Pramudita', 'sindhy@gmail.com', '12345678'),
(4, 'sindhy', 'Pramudita', 'sindhy@gmail.com', '12345678'),
(5, 'sindhy', 'Pramudita', 'sindhy@gmail.com', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id_program`);

--
-- Indeks untuk tabel `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id_student`),
  ADD KEY `id_program` (`id_program`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `student`
--
ALTER TABLE `student`
  MODIFY `id_student` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `id_program` FOREIGN KEY (`id_program`) REFERENCES `program` (`id_program`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

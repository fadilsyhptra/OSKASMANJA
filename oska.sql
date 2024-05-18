-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Bulan Mei 2024 pada 19.21
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oska`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `evaluasi`
--

CREATE TABLE `evaluasi` (
  `Id` int(11) NOT NULL,
  `Pesan` mediumtext NOT NULL,
  `ToUser` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `Id` int(11) NOT NULL,
  `Gambar` varchar(64) NOT NULL,
  `Deskripsi` mediumtext NOT NULL,
  `Judul` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`Id`, `Gambar`, `Deskripsi`, `Judul`) VALUES
(5, '663d85da7e2b6.jpeg', 'Event ini bertujuan untuk mengedukasi siswa/i terkhususnya bagi kelas 12 yang akan melanjutkan ke jenjang perkuliahan.\r\n\r\nDihadiri oleh beberapa kampus ternama, sepert UPI, UGM, dll.', 'Gebyar Kampus (2024)'),
(6, '663d88085a1d6.jpeg', 'Kegiatan SmartTren 2024 di SMA Negeri 1 Jatiluhur dihadiri oleh seluruh siswa siswi, guru juga staff TU yang diawali dengan sholat dhuha bersama. Dalam acara pembukaan tersebut dipaparkan penjelasan mengenai kegiatan peserta didik dalam mengisi waktu di bulan ramadhan yang di antaranya Kajian Islam Di Sekolah (KIDS), NGOBRAS dengan KCD wilayah IV, Infak Masal Aktualisasi Masagi (IMAM), Gerakan Wakaf Al Quran,  Rantang Berbagi Ramadhan, dan Penulisan Mushaf Al Qur’an.', 'SmartTren Ramadhan (2024)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `information`
--

CREATE TABLE `information` (
  `Id` int(11) NOT NULL,
  `Judul` text NOT NULL,
  `Deskripsi` longtext NOT NULL,
  `Gambar` varchar(64) NOT NULL,
  `Tanggal` date NOT NULL,
  `Diunggah_oleh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `information`
--

INSERT INTO `information` (`Id`, `Judul`, `Deskripsi`, `Gambar`, `Tanggal`, `Diunggah_oleh`) VALUES
(25, 'Banyak dari siswa SMANJA yang lulus SNBP', 'Selamat dan sukses kepada siswa siswi SMA Negeri 1 Jatiluhur yang telah diterima di PTN melalui jalur SNBP 2024.\r\nPerjuangan baru untuk menyongsong masa depan gemilang telah di mulai.\r\nBagi siswa dan siswi yang belum lolos, jangan berkecil hati! Tetap semangat berprestasi dalam hal yang positif.', '663e426103fe0.jpg', '2024-03-27', 'Muhammad Fadil Syahputra');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `Id` int(11) NOT NULL,
  `Nama_Lengkap` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Jabatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`Id`, `Nama_Lengkap`, `Username`, `Password`, `Jabatan`) VALUES
(1, 'Muhammad Fadil Syahputra', 'fadilsyhputra_0726', '$2y$10$zl.cH5.nI6q7jtAtlNckAOLY.xXAkeC31e7ClL.rMmylpZYZ9JaXO', 'Wakil Ketua OSIS'),
(2, 'Amelia Ismawanti', '20240201102', '$2y$10$lD7DFHU1AYA8cjL3Am986uc.c/feCsUBwGqL8NzOSfyIZGn0irxnW', 'Ketua MPK'),
(3, 'Fahmi Fauzi Hidayat', '20240101103', '$2y$10$v8FyRakSglfyiWyVjHYSZOz2BoIczU9/stgXaetLUIIKEupe54osu', 'Ketua OSIS'),
(4, 'Hanin Rosidah', '20240201204', '$2y$10$q.uRMXKV7MyNrp8LZB0EQ.Vqsoof8EJkRuW6XAbZDZqX04ismeTL6', 'Wakil Ketua MPK'),
(5, 'Jenisya Rifdah Nazla', '20240202105', '$2y$10$8csol2YKu9Z7N.yU.xqVve8wk5ypxvtFtxFFpTvGiys/eTFaVh6Je', 'Sekretaris MPK'),
(6, 'Etsa Tharifa', '20240102106', '$2y$10$wN9rLO2gX463TygemKjMHuwwvdGG2CBB5qMs.dlk28wtMd7sLz/uS', 'Sekretaris OSIS'),
(7, 'Nelson Fernando', '20240102207', '$2y$10$Bzfwhwz85AOJ1zQsucntf.EUW.QDevcllDhwd4AaOIW8yJO8C/22O', 'Sekretaris OSIS'),
(8, 'Siti Rohmah', '20240203108', '$2y$10$q79.mjAaXpY2FpE8CZk00uURjAkPCg1oZ8pUle.1rSG9pCwIooQPq', 'Bendahara MPK'),
(9, 'Nazura Eifelyne Rachzid', '20240103109', '$2y$10$2WWUoHsyAcsu8Jp2X.MoZuuLRDDmF3gy8.SjSBZQ.NuixIJsLde8u', 'Bendahara OSIS'),
(10, 'Siti Nazlia Nurfauziah', '20240103210', '$2y$10$MXfp2KZlrlhoylr7sg2lYOmiIvTiGuk/K2mcFm.hLZKXCfoVj/zMO', 'Bendahara OSIS'),
(11, 'Alia Shoufia Alfadilah', '20240204111', '$2y$10$Shtj7zewpp4EsThVzUUvMuM2h4UESjpy2grwE50k5ZpMv67R05fxK', 'Komisi 1 (MPK)'),
(12, 'Hafidz Assidiqi', '20240104112', '$2y$10$fiYUj1GqNzNNPd7xHdFAIOFNAKBqLKUyi0/VnFLe76xrLcTcd7Orq', 'Sekbid 1 (Ketua)'),
(13, 'Rifka Khoerunnisa Salsabila', '20240104213', '$2y$10$wQRop1RVXEenHFW9wWPnnOFonNQJ6W/R/nfpJpFRRNABljD/EX1K2', 'Sekbid 1'),
(14, 'Hasna Mahira', '20240104314', '$2y$10$FUUol9NCm7VdRDzPok50feJCbZs25osrvVxE4pnrEP0lxSvBQvbKa', 'Sekbid 1'),
(15, 'Vika Oktavianti Lestari', '20240205115', '$2y$10$g3TvkzgTOwG3pE12L6oYyuTCxUHQvb2giqoz9Wyu3PU5ctsitpRpu', 'Komisi 2 (MPK)'),
(16, 'Aditya Irwansyah', '20240205216', '$2y$10$3v/Wt0tOZdRW5vjONlPjSe0i9/BVnBF0kkb1Fc2iA/biIppLDyrcy', 'Komisi 2 (MPK)'),
(17, 'Sekar Kinanti Nugroho', '20240205317', '$2y$10$zwZVsivpVWbLatlZwCzzHuN8sph3Vz3lzxQxD4IJWfPTtCLAmkvT2', 'Komisi 2 (MPK)'),
(18, 'Gamar Deniar Lestari', '20240105118', '$2y$10$vwBjQPQESdZ/ZxV/1tUl2.V/0FnQkTgtVVKGdg20m6JcHKK3Tc6Ke', 'Sekbid 2 (Ketua)'),
(19, 'Mela Anjaningsih', '20240105219', '$2y$10$vLKJ4D6ypjKssngiNpwyOuAg7Lax4HuUjhwn6N6uRPrrvZjOW3N62', 'Sekbid 2'),
(20, 'Abdul Rafi', '20240105320', '$2y$10$2tKALofZP8B1UrYCEUywAeAjlDG7Q1QqNlb5uqj7Q4KNeFfEY2ddG', 'Sekbid 2'),
(21, 'Mozza Luthfia Purwani', '20240206121', '$2y$10$I7trof6QF1AXhIVVr.iXkewIBycXQr0308pdU5z/riiPWoM8kHGXW', 'Komisi 3 (MPK)'),
(22, 'Alka Dhia', '20240206222', '$2y$10$6p2K5F37WlUUN5B6h5HtmO/eZEo1rbmp9dXJVPE39cG9ax0CIPnzW', 'Komisi 3 (MPK)'),
(23, 'Astri Ayu Cahyani', '20240106123', '$2y$10$paCE/bnMP4iesXESJFjLme.tthkBwO5fize1CRyGiEPRNi5h.hnmy', 'Sekbid 3 (Ketua)'),
(24, 'Raihan Adi Tsaqif', '20240106224', '$2y$10$kgtaPdNT165D7hMQcxgWG.G2NhHBj87axZjJ1.RAzKLE7qsivNz2S', 'Sekbid 3'),
(25, 'Nayla Nurfathya Wijaya', '20240106325', '$2y$10$L2yX403tMJrKztgr1RXYoO7x2nLBWWxjrW8I.5tNI13tywsa7h0v.', 'Sekbid 3'),
(26, 'Lintang Cerebry Putri Hutami', '20240107126', '$2y$10$m./kJ3WseCaxi3fCRRlwUe8Q8dBiYmrP1krIgTP1p1bs5wwsFpocu', 'Sekbid 4 (Ketua)'),
(27, 'Cheeryl Keyla Azzahra', '20240107227', '$2y$10$sjsQ8eMLgr7ibo57FDofKuh65/EIzKFQQ965vTZMK6PacrpbHZAgu', 'Sekbid 4'),
(28, 'Mazaya Zahra Nugraha', '20240107328', '$2y$10$CgDxXf4W64dQtZwf2MkO2.g1qMzTkTpGqCrVs4AXhNn55ZUJ4GjTu', 'Sekbid 4'),
(29, 'Nunik Putri Irianto', '20240108129', '$2y$10$F5rYW8yAC9xobYsGZ9Nntu6TSmZBJgvnjq.F15fEmzMc.wcPIssqi', 'Sekbid 5 (Ketua)'),
(30, 'Alina Vinke', '20240108230', '$2y$10$p30D0Zw6UBkwECCP8eIE/OO.xSfOY2Kpcv7sKsY4JAq6bkLXsbutO', 'Sekbid 5'),
(31, 'Meilida Azahra', '20240108331', '$2y$10$3Y98xY9wbuwG1SVgSHp8leH2b59q0QeipyRUWUJgYtN/xMExquWme', 'Sekbid 5'),
(32, 'M.Algian Prayata J', '20240207132', '$2y$10$FnOTBWVrknJM9igyDvMrP.VvYmRM728EEoKRf75MH5pyAA2aZkYE2', 'Komisi 4 (MPK)'),
(33, 'Ranisya Rahma Dwiane', '20240207233', '$2y$10$.SKlUudBH58nym8QJ0S7q.RDtOfWplR/8..anJhIuDmlaIZ5VJR8G', 'Komisi 4 (MPK)'),
(34, 'Dzikry Achmad Fahrezi', '20240207334', '$2y$10$PUl5eNzA2oWnQUKSDbBQAe0sWwArulJRxJYeU6iyb2pTzKMvIgFLm', 'Komisi 4 (MPK)'),
(35, 'Annisa Putri Ramadhani', '20240109135', '$2y$10$CuyYLWccdhNBs0jHA5Tk2uEZNurNVPpEG09GRSCskcf8JL.jP0nOW', 'Sekbid 6 (Ketua)'),
(36, 'Fira Nurlita', '20240109236', '$2y$10$P4/4dCQFqaKg5Id80GH6c.hQFB8IyFKpopjakYPWsN2sLY7oYel8u', 'Sekbid 6'),
(37, 'Shahifah Rihadatul Aisy', '20240109337', '$2y$10$6QPy9YtRu0Hbs5jel3D2JuRziy1EpsK0PTbybLF7Z6t3AZD8WbNbG', 'Sekbid 6'),
(38, 'Zahra Aulia Nurfatwa', '20240110138', '$2y$10$2p59TMUQv1vLymTmeKZVk.ZrE7VB9x/jWie/NGXAvdCCYj0l7K4/q', 'Sekbid 7 (Ketua)'),
(39, 'Muhamad Alvin Hidayat', '20240110239', '$2y$10$mNseZmgU2BLoLVvrq5yhaeq0cMA.u7P4i5a31N4OcDlmZmFCGCRwe', 'Sekbid 7'),
(40, 'Ayu Husnul Khotimah', '20240110340', '$2y$10$CXbaCR0VNINNT9QaNLcev.zzBWFiXmoFJoQOVDAzeEWm/YbYOUk8e', 'Sekbid 7');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran`
--

CREATE TABLE `saran` (
  `Id` int(11) NOT NULL,
  `Nama` text NOT NULL,
  `Kelas` text NOT NULL,
  `Saran` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `evaluasi`
--
ALTER TABLE `evaluasi`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `evaluasi`
--
ALTER TABLE `evaluasi`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `information`
--
ALTER TABLE `information`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `saran`
--
ALTER TABLE `saran`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

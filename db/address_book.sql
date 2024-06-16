-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jun 2024 pada 09.28
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `address_book`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `testing1`
--

CREATE TABLE `testing1` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `relationship` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `testing1`
--

INSERT INTO `testing1` (`id`, `user_id`, `name`, `email`, `birthday`, `phone`, `relationship`, `address`) VALUES
(1, 1, 'Sopo ', 'sopo12@gmail.com', '2000-02-01', '089371499392', 'Buruh', 'Jalan Karet Berkah No.18'),
(2, 1, 'Jarwo', 'jarwokuat@gmail.com', '1999-02-01', '08128829462', 'Buruh', 'Jalan Karet Berkah No.19'),
(3, 1, 'Adit', 'aditwibu8@gmail.com', '2007-03-01', '087657488390', 'Teman ', 'Jalan Nusa Indah No.1'),
(4, 1, 'Denis', 'denis33@gmail.com', '2007-11-11', '081293859203', 'Teman', 'Jalan Kaki Seribu No.1000 '),
(5, 1, 'Adel', 'adel@gmail.com', '2010-01-01', '-', 'Adik Adit', 'Jalan Nusa Indah No.1'),
(6, 1, 'Babah Chang', 'chiputo@gmail.com', '1980-09-07', '08327482482', 'Langganan', 'Jalan Karet Berkah No.66'),
(7, 1, 'Ucup', 'ucupmetal2@gmail.com', '2008-12-13', '08729922389', 'Teman', 'Jalan Longsor Batu No.19'),
(8, 1, 'Asep Knalpot', 'asepracing@gmail.com', '2000-02-21', '085435267890', 'Sahabat', 'Jalan Bengkel No.90'),
(9, 1, 'Mang Rusdi ', 'rusdidi@gmai.com', '1982-03-19', '7418183', 'Paman', 'Jalan Isaja No.899'),
(10, 1, 'Gojo', 'gojokun88@gmail.com', '0999-02-02', '-', 'Baru kenal', 'Jalan jujutsu kaisen no.8362'),
(11, 1, 'yuji itadori', 'yujiitardori21@gmail.com', '1111-11-11', '11111', 'Baru kenal', 'Jalan Jujurku Kasian No.111111'),
(12, 1, 'Yin', 'akuadalahyin@gmail.com', '2003-03-12', '084678294860', 'Keluarga', 'Jalan Majapahit Gang 99 No.99'),
(13, 1, 'Madara', 'madarah@gmail.com', '0001-11-20', '-', 'Murid', 'Konoha Gakure No.906'),
(14, 1, 'Naruto', 'nartohhh@gmail.com', '2000-12-12', '085673788902', 'Murid', 'Jalan Konoha Gakure No.200'),
(15, 1, 'Buk Dewa', 'bukdewa99@gmail.com', '1990-02-09', '08937289932', 'Langganan Lontong', 'Jalan Ks Tubun No.9'),
(16, 1, 'Pak Min', 'minho@gmail.com', '1990-03-08', '08245278221', 'Langganan Bakso', 'Jalan Gajah Mada'),
(17, 1, 'Roger', 'siaproger@gmail.com', '0666-06-06', '-', 'Kenalan Baru', 'Jalan Land Of Dawn No.18 Sumatra'),
(18, 1, 'Nila', 'ikannila@gmail.com', '2020-02-02', '-', 'Langganan Ikan Hias', 'Jalan Mekar Nomor 90'),
(19, 1, 'CHanna', 'channafish@gmail.com', '2001-03-09', '089314728222', 'Teman', 'Jalan Akuarium No.99'),
(20, 1, 'Yupi', 'yupiahihihi@gmail.com', '2002-03-09', '082394299800', 'Mbak Pulsa', 'Jalan Batanghari No.9999'),
(21, 1, 'bernard bear', 'aihihiihi2@gmail.com', '2012-06-09', '-', 'Keluarga', 'Jalan Setapak Kotak No.99'),
(22, 1, 'Adudu Badudu', 'adududuh@gmail.com', '0211-03-02', '01937492020', 'Makhluk Asing', 'Jalan Pulau Rintis'),
(23, 1, 'Doraeman', 'doraemon@gmail.com', '2030-03-09', '086789345628', 'Sahabat', 'Jalan Tol No.01'),
(24, 1, 'mas telur gulung', 'gulungaja33@gmail.com', '1989-03-02', '089313722891', 'Langgananku', 'Jalan Dangin Carik No.98'),
(25, 1, 'Mas Sempol', 'sempoloce99@gmail.com', '1988-12-20', '0893729319', 'Langganan Sempol', 'Disebelah Utara SMP N 2 Tabanan'),
(26, 1, 'Suneo', 'suneorich78@gmal.com', '2010-02-10', '08391428439', 'Teman TK', 'Jalan Masashi No.23'),
(27, 1, 'Kiko', 'kikoenaktau@gmail.com', '2000-03-09', '-', 'Teman Dilaut', 'Jalan Asri No.378'),
(28, 1, 'Marayhha', 'growtopia@gmail.com', '0001-02-01', '08942743392', 'teman kerja', 'Jalan santai No.21, Tabanan'),
(29, 1, 'Brandon', 'bforbrandon1@gmail.com', '1999-09-09', '087528930232', 'teman mancing', 'Jalan Gunung Batur No.909'),
(30, 1, 'Kurama', 'kurmaku54@gmail.com', '2006-04-09', '083581456700', 'Teman Sejati', 'Jalan Konoha Roboh No.922');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testing2`
--

CREATE TABLE `testing2` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `relationship` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `testing2`
--

INSERT INTO `testing2` (`id`, `user_id`, `name`, `email`, `birthday`, `phone`, `relationship`, `address`) VALUES
(1, 2, 'Gojo Satoru', 'gojokendali@gmail.com', '2222-02-22', '086212445768', 'Teman', 'Jalan Jujutsu Kaisen No.2\r\n'),
(2, 2, 'Patrick Star', 'pforp4trick@gmail.com', '2022-02-04', '085932448839', 'Teman Nongkrong', 'Jalan Pulau Nias No.98'),
(3, 2, 'Spongebob Squarepants', 'sekuerpen@gmail.com', '2022-03-08', '083573284399', 'Teman Nongkrong', 'Jalan Kebijaksanaan No.1'),
(4, 2, 'Squidward', 'witwot4@gmail.com', '2020-03-04', '082364728900', 'Teman Nongki', 'Jalan Kesesatan No.89'),
(5, 2, 'TuanKrab', 'tuankraby@gmail.com', '2010-02-20', '082471865388', 'Bos', 'Jalan Emas Berlian No.43'),
(6, 2, 'Plankton', 'planktoyn@gmail.com', '2010-03-09', '083953253900', 'Manager', 'Jalan Ketenangan Batin No.43'),
(7, 2, 'Sandy', 'pasir1321@gmail.com', '2015-03-08', '084147299130', 'Sahabat', 'Jalan Kacang Hijau No.57 Texas'),
(8, 2, 'Roamer', 's5roamer@gmail.com', '2033-02-09', '084382955839', 'Bodyguard', 'Jalan Raya Gede Utama No.4'),
(9, 2, 'Xavier', 'xavier8@gmail.com', '2000-02-29', '085294742839', 'Teman SD', 'Jalan Kerikiliatus No.493 India'),
(10, 2, 'Delon', 'hidelon@gmail.com', '2004-02-20', '08935288390', 'Keluarga', 'Jalan Terang Menuju Masa Depan No.1'),
(12, 2, 'Sosro Ambatukam', 'ambasos@gmail.com', '2009-03-31', '084291292110', 'Keponakan', 'Jalan Grosiranjana No.90');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'testing1', '$2y$10$xPwJZzSWhL7rhrRUdZHzJeRUz665oF2eDjyrECE6Oc2vvrJBUdtNS'),
(2, 'testing2', '$2y$10$RrWex94bOaJPBPdacC.iWemax3TN5YwO3NGM6IjIhkRb2fUn2lk5K');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `testing1`
--
ALTER TABLE `testing1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `testing2`
--
ALTER TABLE `testing2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `testing1`
--
ALTER TABLE `testing1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `testing2`
--
ALTER TABLE `testing2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `testing1`
--
ALTER TABLE `testing1`
  ADD CONSTRAINT `testing1_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `testing2`
--
ALTER TABLE `testing2`
  ADD CONSTRAINT `testing2_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

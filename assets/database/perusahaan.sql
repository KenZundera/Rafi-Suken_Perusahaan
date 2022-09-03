-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Sep 2022 pada 17.28
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perusahaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(100) NOT NULL,
  `nik` int(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `no_hp` varchar(18) NOT NULL,
  `usia` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `agama` enum('Islam','Kristen','Protestan','Katolik','Hindu','Buddha','Konghucu','') NOT NULL,
  `jabatan` enum('CEO','Direktur','Manajer','Karyawan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nik`, `nama`, `jenis_kelamin`, `no_hp`, `usia`, `email`, `alamat`, `agama`, `jabatan`) VALUES
(1, 140, 'Karman Wibowo', 'P', '(+62) 354 0678 074', 32, 'paramita@gmail.com', 'Jln. Bahagia  No. 907, SumSel', 'Hindu', 'Direktur'),
(2, 114, 'Purwanto Prayoga', 'P', '(+62) 545 2418 266', 32, 'atmaja@gmail.com', 'Kpg. Bara No. 964, Aceh', 'Islam', 'Manajer'),
(3, 133, 'Jagaraga Suwarno', 'P', '(+62) 537 7612 615', 24, 'maman@gmail.com', 'Gg. Ikan No. 978, Lampung', 'Islam', 'Direktur'),
(4, 142, 'Ganjaran Wacana', 'P', '(+62) 610 6101 319', 40, 'samsul@gmail.com', 'Kpg. Sam Ratulangi No. 364, SulTeng', 'Protestan', 'Manajer'),
(5, 115, 'Michelle Laksmiwati', 'P', '0910 8418 893', 35, 'paramita@gmail.com', 'Ds. Laksamana No. 213, BaBel', 'Katolik', 'Direktur'),
(6, 146, 'Niyaga Sinaga', 'P', '(+62) 271 0600 446', 36, 'umi@gmail.com', 'Ki. Sentot Alibasa No. 606, SulTeng', 'Buddha', 'Direktur'),
(7, 118, 'Samiah Utami', 'P', '0901 3961 213', 20, 'caturangga@gmail.com', 'Psr. Cikutra Timur No. 531, Banten', 'Hindu', 'Direktur'),
(8, 127, 'Mahmud Maryadi', 'L', '(+62) 816 6472 918', 39, 'qori@gmail.com', 'Jr. Honggowongso No. 765, SumBar', 'Kristen', 'Manajer'),
(9, 122, 'Cagak Tarihoran', 'L', '021 2295 2171', 25, 'irnanto@gmail.com', 'Psr. Basudewo No. 506, SulTra', 'Konghucu', 'Manajer'),
(10, 129, 'Nurul Hastuti', 'P', '0805 421 959', 31, 'wani@gmail.com', 'Jln. Yohanes No. 47, SulTra', 'Islam', 'Karyawan'),
(11, 133, 'Tugiman Hutagalung', 'L', '(+62) 375 2111 125', 30, 'argono@gmail.com', 'Psr. Cikapayang No. 575, Gorontalo', 'Hindu', 'Karyawan'),
(12, 113, 'Raisa Andriani', 'L', '(+62) 899 5121 730', 19, 'zelda@gmail.com', 'Jln. Yohanes No. 245, SulTeng', 'Hindu', 'Karyawan'),
(13, 127, 'Janet Novitasari', 'L', '0437 6788 274', 33, 'gina@gmail.com', 'Kpg. Moch. Toha No. 332, KalSel', 'Buddha', 'Karyawan'),
(14, 121, 'Jail Dabukke', 'L', '(+62) 744 5641 426', 32, 'fitria@gmail.com', 'Gg. Aceh No. 83, DKI', 'Konghucu', 'Karyawan'),
(15, 143, 'Dimaz Hutagalung', 'P', '(+62) 606 3363 640', 21, 'ilsa@gmail.com', 'Dk. Basket No. 646, Banten', 'Katolik', 'Direktur'),
(16, 116, 'Ella Laksita', 'L', '(+62) 317 7372 485', 36, 'maya@gmail.com', 'Jr. Acordion No. 623, SulTeng', 'Buddha', 'Direktur'),
(17, 126, 'Mala Nasyidah', 'P', '(+62) 355 6798 111', 40, 'sabrina@gmail.com', 'Jln. Imam Bonjol No. 375, KalBar', 'Islam', 'Manajer'),
(18, 122, 'Zahra Namaga', 'P', '0817 9287 275', 25, 'nalar@gmail.com', 'Ds. Ekonomi No. 330, Bengkulu', 'Kristen', 'Karyawan'),
(19, 137, 'Lala Aryani', 'L', '0899 356 074', 36, 'eka@gmail.com', 'Ds. Bakau Griya Utama No. 641, SulBar', 'Islam', 'Direktur'),
(20, 134, 'Setya Megantara', 'P', '0371 7565 400', 22, 'violet@gmail.com', 'Psr. Jaksa No. 773, PapBar', 'Konghucu', 'Karyawan'),
(21, 150, 'Vera Rahimah', 'L', '(+62) 420 0352 304', 37, 'yoga@gmail.com', 'Gg. Salam No. 752, DKI', 'Protestan', 'Karyawan'),
(22, 145, 'Rahayu Mandasari', 'L', '0570 9410 621', 20, 'hana@gmail.com', 'Jr. Pasirkoja No. 61, Riau', 'Katolik', 'Karyawan'),
(23, 126, 'Wirda Laksmiwati', 'P', '0617 9395 638', 20, 'eko@gmail.com', 'Ds. Achmad Yani No. 678, Gorontalo', 'Hindu', 'Manajer'),
(24, 120, 'Ajiman Napitupulu', 'P', '0707 6257 7256', 36, 'adikara@gmail.com', 'Jr. Zamrud No. 250, Gorontalo', 'Buddha', 'Manajer'),
(25, 132, 'Elma Padmasari', 'L', '(+62) 214 4512 554', 37, 'marsito@gmail.com', 'Jr. Bagis Utama No. 933, SulTra', 'Konghucu', 'Manajer'),
(26, 132, 'Estiono Sihombing', 'P', '0932 9018 337', 32, 'dimaz@gmail.com', 'Gg. Asia Afrika No. 665, Jambi', 'Buddha', 'Direktur'),
(27, 145, 'Raihan Saragih', 'L', '(+62) 540 7668 342', 21, 'septi@gmail.com', 'Dk. Kali No. 6, Maluku', 'Islam', 'Direktur'),
(28, 143, 'Mustofa Nashiruddin', 'L', '0257 0166 2723', 33, 'putri@gmail.com', 'Gg. Badak No. 642, SumSel', 'Konghucu', 'Direktur'),
(29, 149, 'Eka Safitri', 'L', '(+62) 908 3370 996', 19, 'chelsea@gmail.com', 'Ds. Katamso No. 191, Jambi', 'Buddha', 'Manajer'),
(31, 150, 'Vanya Aryani', 'L', '(+62) 27 3722 2268', 22, 'jayadi@gmail.com', 'Jln. Salak No. 429, Papua', 'Konghucu', 'Manajer'),
(32, 149, 'Usman Salahudin', 'P', '(+62) 504 2495 966', 25, 'nyana@gmail.com', 'Jr. Dr. Junjunan No. 307, BaBel', 'Hindu', 'Manajer'),
(33, 144, 'Samiah Susanti', 'L', '(+62) 863 6826 932', 23, 'hesti@gmail.com', 'Ds. Astana Anyar No. 4, NTB', 'Hindu', 'Karyawan'),
(34, 112, 'Capa Maryadi', 'L', '0862 6956 286', 19, 'aslijan@gmail.com', 'Kpg. Abang No. 121, SumBar', 'Konghucu', 'Direktur'),
(35, 127, 'Gandi Sitompul', 'L', '0837 9942 4199', 40, 'himawan@gmail.com', 'Ki. Cut Nyak Dien No. 648, SumBar', 'Katolik', 'Manajer'),
(36, 141, 'Gantar Wasita', 'L', '0699 3214 704', 31, 'imam@gmail.com', 'Kpg. Ciwastra No. 309, KepR', 'Buddha', 'Direktur'),
(37, 111, 'Jaiman Jailani', 'P', '(+62) 864 3675 049', 38, 'rahayu@gmail.com', 'Gg. Acordion No. 932, MalUt', 'Hindu', 'Direktur'),
(38, 131, 'Laksana Hutagalung', 'P', '0825 473 440', 19, 'jamil@gmail.com', 'Ds. Bak Air No. 332, SumUt', 'Hindu', 'Direktur'),
(39, 143, 'Vega Uwais', 'P', '0458 7622 8968', 27, 'eli@gmail.com', 'Kpg. Gardujati No. 630, Bali', 'Islam', 'Direktur'),
(40, 137, 'Salman Maheswara', 'P', '(+62) 841 0339 469', 40, 'tasdik@gmail.com', 'Dk. Siliwangi No. 540, SulTeng', 'Katolik', 'Karyawan'),
(41, 118, 'Cahyo Wacana', 'L', '(+62) 693 8259 488', 25, 'gading@gmail.com', 'Jr. Haji No. 982, SulBar', 'Katolik', 'Karyawan'),
(42, 126, 'Prayoga Pangestu', 'P', '0272 3187 5706', 39, 'cahya@gmail.com', 'Gg. Gambang No. 282, SumUt', 'Katolik', 'Direktur'),
(43, 121, 'Ilyas Waluyo', 'L', '(+62) 200 6060 738', 29, 'virman@gmail.com', 'Ds. Hang No. 697, DKI', 'Kristen', 'Direktur'),
(44, 130, 'Putri Nurdiyanti', 'L', '(+62) 883 572 665', 20, 'dadap@gmail.com', 'Kpg. Bambu No. 79, SulSel', 'Kristen', 'Direktur'),
(45, 133, 'Betania Rahmawati', 'L', '0425 4270 197', 31, 'nadine@gmail.com', 'Ki. Baabur Royan No. 173, KalBar', 'Islam', 'Manajer'),
(46, 119, 'Estiawan Waluyo', 'L', '0488 5832 085', 28, 'cemplunk@gmail.com', 'Psr. Ters. Jakarta No. 921, SumUt', 'Katolik', 'Direktur'),
(47, 135, 'Wakiman Ardianto', 'L', '0758 0226 814', 28, 'silvia@gmail.com', 'Ki. Baladewa No. 189, Gorontalo', 'Islam', 'Direktur'),
(48, 142, 'Paiman Firgantoro', 'P', '0726 6422 002', 23, 'calista@gmail.com', 'Jr. Barat No. 988, KalTeng', 'Konghucu', 'Karyawan'),
(49, 119, 'Jais Tarihoran', 'P', '0684 8935 3388', 28, 'ilyas@gmail.com', 'Kpg. Ki Hajar Dewantara No. 869, Banten', 'Protestan', 'Direktur'),
(50, 140, 'Cahyono Utama', 'P', '0420 2699 667', 39, 'ganep@gmail.com', 'Ds. Baranangsiang No. 598, Bali', 'Konghucu', 'Manajer');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

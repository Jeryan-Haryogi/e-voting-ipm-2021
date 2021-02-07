-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Nov 2016 pada 11.54
-- Versi Server: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ff85aefa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `0ec06eb2`
--

CREATE TABLE IF NOT EXISTS `0ec06eb2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL DEFAULT 'avatar.png',
  `nba` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='calon_formatur' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `4e107e60`
--

CREATE TABLE IF NOT EXISTS `4e107e60` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) DEFAULT NULL,
  `pass` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='userlog' AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `4e107e60`
--

INSERT INTO `4e107e60` (`id`, `nama`, `pass`) VALUES
(1, 'ff85aefa', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `b82a9109`
--

CREATE TABLE IF NOT EXISTS `b82a9109` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) DEFAULT NULL,
  `asal` varchar(200) DEFAULT NULL,
  `nba` varchar(15) DEFAULT NULL,
  `kode` varchar(45) DEFAULT NULL,
  `hak` tinyint(1) DEFAULT '0',
  `tetap` char(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='pemilih' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cf45a49b`
--

CREATE TABLE IF NOT EXISTS `cf45a49b` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pilih` varchar(200) DEFAULT NULL,
  `kode` varchar(8) NOT NULL,
  `re` char(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='pilih' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota`
--

CREATE TABLE IF NOT EXISTS `kota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kota` varchar(200) NOT NULL,
  `prov` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=539 ;

--
-- Dumping data untuk tabel `kota`
--

INSERT INTO `kota` (`id`, `kota`, `prov`) VALUES
(1, 'Prov. D.K.I. Jakarta', 'Prov. D.K.I. Jakarta'),
(2, 'Kab. Kepulauan Seribu', 'Prov. D.K.I. Jakarta'),
(3, 'Kota Jakarta Pusat', 'Prov. D.K.I. Jakarta'),
(4, 'Kota Jakarta Utara', 'Prov. D.K.I. Jakarta'),
(5, 'Kota Jakarta Barat', 'Prov. D.K.I. Jakarta'),
(6, 'Kota Jakarta Selatan', 'Prov. D.K.I. Jakarta'),
(7, 'Kota Jakarta Timur', 'Prov. D.K.I. Jakarta'),
(8, 'Prov. Jawa Barat', 'Prov. Jawa Barat'),
(9, 'Kab. Bogor', 'Prov. Jawa Barat'),
(10, 'Kab. Sukabumi', 'Prov. Jawa Barat'),
(11, 'Kab. Cianjur', 'Prov. Jawa Barat'),
(12, 'Kab. Bandung', 'Prov. Jawa Barat'),
(13, 'Kab. Sumedang', 'Prov. Jawa Barat'),
(14, 'Kab. Garut', 'Prov. Jawa Barat'),
(15, 'Kab. Tasikmalaya', 'Prov. Jawa Barat'),
(16, 'Kab. Ciamis', 'Prov. Jawa Barat'),
(17, 'Kab. Kuningan', 'Prov. Jawa Barat'),
(18, 'Kab. Majalengka', 'Prov. Jawa Barat'),
(19, 'Kab. Cirebon', 'Prov. Jawa Barat'),
(20, 'Kab. Indramayu', 'Prov. Jawa Barat'),
(21, 'Kab. Subang', 'Prov. Jawa Barat'),
(22, 'Kab. Purwakarta', 'Prov. Jawa Barat'),
(23, 'Kab. Karawang', 'Prov. Jawa Barat'),
(24, 'Kab. Bekasi', 'Prov. Jawa Barat'),
(25, 'Kab. Bandung Barat', 'Prov. Jawa Barat'),
(26, 'Kota Bandung', 'Prov. Jawa Barat'),
(27, 'Kota Bogor', 'Prov. Jawa Barat'),
(28, 'Kota Sukabumi', 'Prov. Jawa Barat'),
(29, 'Kota Cirebon', 'Prov. Jawa Barat'),
(30, 'Kota Bekasi', 'Prov. Jawa Barat'),
(31, 'Kota Depok', 'Prov. Jawa Barat'),
(32, 'Kota Cimahi', 'Prov. Jawa Barat'),
(33, 'Kota Tasikmalaya', 'Prov. Jawa Barat'),
(34, 'Kota Banjar', 'Prov. Jawa Barat'),
(35, 'Prov. Banten', 'Prov. Banten'),
(36, 'Kab. Pandeglang', 'Prov. Banten'),
(37, 'Kab. Lebak', 'Prov. Banten'),
(38, 'Kab. Tangerang', 'Prov. Banten'),
(39, 'Kab. Serang', 'Prov. Banten'),
(40, 'Kota Cilegon', 'Prov. Banten'),
(41, 'Kota Tangerang', 'Prov. Banten'),
(42, 'Kota Serang', 'Prov. Banten'),
(43, 'Kota Tangerang Selatan', 'Prov. Banten'),
(44, 'Prov. Jawa Tengah', 'Prov. Jawa Tengah'),
(45, 'Kab. Cilacap', 'Prov. Jawa Tengah'),
(46, 'Kab. Banyumas', 'Prov. Jawa Tengah'),
(47, 'Kab. Purbalingga', 'Prov. Jawa Tengah'),
(48, 'Kab. Banjarnegara', 'Prov. Jawa Tengah'),
(49, 'Kab. Kebumen', 'Prov. Jawa Tengah'),
(50, 'Kab. Purworejo', 'Prov. Jawa Tengah'),
(51, 'Kab. Wonosobo', 'Prov. Jawa Tengah'),
(52, 'Kab. Magelang', 'Prov. Jawa Tengah'),
(53, 'Kab. Boyolali', 'Prov. Jawa Tengah'),
(54, 'Kab. Klaten', 'Prov. Jawa Tengah'),
(55, 'Kab. Sukoharjo', 'Prov. Jawa Tengah'),
(56, 'Kab. Wonogiri', 'Prov. Jawa Tengah'),
(57, 'Kab. Karanganyar', 'Prov. Jawa Tengah'),
(58, 'Kab. Sragen', 'Prov. Jawa Tengah'),
(59, 'Kab. Grobogan', 'Prov. Jawa Tengah'),
(60, 'Kab. Blora', 'Prov. Jawa Tengah'),
(61, 'Kab. Rembang', 'Prov. Jawa Tengah'),
(62, 'Kab. Pati', 'Prov. Jawa Tengah'),
(63, 'Kab. Kudus', 'Prov. Jawa Tengah'),
(64, 'Kab. Jepara', 'Prov. Jawa Tengah'),
(65, 'Kab. Demak', 'Prov. Jawa Tengah'),
(66, 'Kab. Semarang', 'Prov. Jawa Tengah'),
(67, 'Kab. Temanggung', 'Prov. Jawa Tengah'),
(68, 'Kab. Kendal', 'Prov. Jawa Tengah'),
(69, 'Kab. Batang', 'Prov. Jawa Tengah'),
(70, 'Kab. Pekalongan', 'Prov. Jawa Tengah'),
(71, 'Kab. Pemalang', 'Prov. Jawa Tengah'),
(72, 'Kab. Tegal', 'Prov. Jawa Tengah'),
(73, 'Kab. Brebes', 'Prov. Jawa Tengah'),
(74, 'Kota Magelang', 'Prov. Jawa Tengah'),
(75, 'Kota Surakarta', 'Prov. Jawa Tengah'),
(76, 'Kota Salatiga', 'Prov. Jawa Tengah'),
(77, 'Kota Semarang', 'Prov. Jawa Tengah'),
(78, 'Kota Pekalongan', 'Prov. Jawa Tengah'),
(79, 'Kota Tegal', 'Prov. Jawa Tengah'),
(80, 'Prov. D.I. Yogyakarta', 'Prov. D.I. Yogyakarta'),
(81, 'Kab. Bantul', 'Prov. D.I. Yogyakarta'),
(82, 'Kab. Sleman', 'Prov. D.I. Yogyakarta'),
(83, 'Kab. Gunung Kidul', 'Prov. D.I. Yogyakarta'),
(84, 'Kab. Kulon Progo', 'Prov. D.I. Yogyakarta'),
(85, 'Kota Yogyakarta', 'Prov. D.I. Yogyakarta'),
(86, 'Prov. Jawa Timur', 'Prov. Jawa Timur'),
(87, 'Kab. Gresik', 'Prov. Jawa Timur'),
(88, 'Kab. Sidoarjo', 'Prov. Jawa Timur'),
(89, 'Kab. Mojokerto', 'Prov. Jawa Timur'),
(90, 'Kab. Jombang', 'Prov. Jawa Timur'),
(91, 'Kab. Bojonegoro', 'Prov. Jawa Timur'),
(92, 'Kab. Tuban', 'Prov. Jawa Timur'),
(93, 'Kab. Lamongan', 'Prov. Jawa Timur'),
(94, 'Kab. Madiun', 'Prov. Jawa Timur'),
(95, 'Kab. Ngawi', 'Prov. Jawa Timur'),
(96, 'Kab. Magetan', 'Prov. Jawa Timur'),
(97, 'Kab. Ponorogo', 'Prov. Jawa Timur'),
(98, 'Kab. Pacitan', 'Prov. Jawa Timur'),
(99, 'Kab. Kediri', 'Prov. Jawa Timur'),
(100, 'Kab. Nganjuk', 'Prov. Jawa Timur'),
(101, 'Kab. Blitar', 'Prov. Jawa Timur'),
(102, 'Kab. Tulungagung', 'Prov. Jawa Timur'),
(103, 'Kab. Trenggalek', 'Prov. Jawa Timur'),
(104, 'Kab. Malang', 'Prov. Jawa Timur'),
(105, 'Kab. Pasuruan', 'Prov. Jawa Timur'),
(106, 'Kab. Probolinggo', 'Prov. Jawa Timur'),
(107, 'Kab. Lumajang', 'Prov. Jawa Timur'),
(108, 'Kab. Bondowoso', 'Prov. Jawa Timur'),
(109, 'Kab. Situbondo', 'Prov. Jawa Timur'),
(110, 'Kab. Jember', 'Prov. Jawa Timur'),
(111, 'Kab. Banyuwangi', 'Prov. Jawa Timur'),
(112, 'Kab. Pamekasan', 'Prov. Jawa Timur'),
(113, 'Kab. Sampang', 'Prov. Jawa Timur'),
(114, 'Kab. Sumenep', 'Prov. Jawa Timur'),
(115, 'Kab. Bangkalan', 'Prov. Jawa Timur'),
(116, 'Kota Surabaya', 'Prov. Jawa Timur'),
(117, 'Kota Malang', 'Prov. Jawa Timur'),
(118, 'Kota Madiun', 'Prov. Jawa Timur'),
(119, 'Kota Kediri', 'Prov. Jawa Timur'),
(120, 'Kota Mojokerto', 'Prov. Jawa Timur'),
(121, 'Kota Blitar', 'Prov. Jawa Timur'),
(122, 'Kota Pasuruan', 'Prov. Jawa Timur'),
(123, 'Kota Probolinggo', 'Prov. Jawa Timur'),
(124, 'Kota Batu', 'Prov. Jawa Timur'),
(125, 'Prov. Nanggroe Aceh Darussalam', 'Prov. Nanggroe Aceh Darussalam'),
(126, 'Kab. Aceh Besar', 'Prov. Nanggroe Aceh Darussalam'),
(127, 'Kab. Pidie', 'Prov. Nanggroe Aceh Darussalam'),
(128, 'Kab. Aceh Utara', 'Prov. Nanggroe Aceh Darussalam'),
(129, 'Kab. Aceh Timur', 'Prov. Nanggroe Aceh Darussalam'),
(130, 'Kab. Aceh Tengah', 'Prov. Nanggroe Aceh Darussalam'),
(131, 'Kab. Aceh Barat', 'Prov. Nanggroe Aceh Darussalam'),
(132, 'Kab. Aceh Selatan', 'Prov. Nanggroe Aceh Darussalam'),
(133, 'Kab. Aceh Tenggara', 'Prov. Nanggroe Aceh Darussalam'),
(134, 'Kab. Simeulue', 'Prov. Nanggroe Aceh Darussalam'),
(135, 'Kab. Bireuen', 'Prov. Nanggroe Aceh Darussalam'),
(136, 'Kab. Aceh Singkil', 'Prov. Nanggroe Aceh Darussalam'),
(137, 'Kab. Aceh Tamiang', 'Prov. Nanggroe Aceh Darussalam'),
(138, 'Kab. Nagan Raya', 'Prov. Nanggroe Aceh Darussalam'),
(139, 'Kab. Aceh Jaya', 'Prov. Nanggroe Aceh Darussalam'),
(140, 'Kab. Aceh Barat Daya', 'Prov. Nanggroe Aceh Darussalam'),
(141, 'Kab. Gayo Lues', 'Prov. Nanggroe Aceh Darussalam'),
(142, 'Kab. Bener Meriah', 'Prov. Nanggroe Aceh Darussalam'),
(143, 'Kab. Pidie Jaya', 'Prov. Nanggroe Aceh Darussalam'),
(144, 'Kota Sabang', 'Prov. Nanggroe Aceh Darussalam'),
(145, 'Kota Banda Aceh', 'Prov. Nanggroe Aceh Darussalam'),
(146, 'Kota Lhokseumawe', 'Prov. Nanggroe Aceh Darussalam'),
(147, 'Kota Langsa', 'Prov. Nanggroe Aceh Darussalam'),
(148, 'Kota Subulussalam', 'Prov. Nanggroe Aceh Darussalam'),
(149, 'Prov. Sumatera Utara', 'Prov. Sumatera Utara'),
(150, 'Kab. Deli Serdang', 'Prov. Sumatera Utara'),
(151, 'Kab. Langkat', 'Prov. Sumatera Utara'),
(152, 'Kab. Karo', 'Prov. Sumatera Utara'),
(153, 'Kab. Simalungun', 'Prov. Sumatera Utara'),
(154, 'Kab. Dairi', 'Prov. Sumatera Utara'),
(155, 'Kab. Asahan', 'Prov. Sumatera Utara'),
(156, 'Kab. Labuhan Batu', 'Prov. Sumatera Utara'),
(157, 'Kab. Tapanuli Utara', 'Prov. Sumatera Utara'),
(158, 'Kab. Tapanuli Tengah', 'Prov. Sumatera Utara'),
(159, 'Kab. Tapanuli Selatan', 'Prov. Sumatera Utara'),
(160, 'Kab. Nias', 'Prov. Sumatera Utara'),
(161, 'Kab. Mandailing Natal', 'Prov. Sumatera Utara'),
(162, 'Kab. Toba Samosir', 'Prov. Sumatera Utara'),
(163, 'Kab. Nias Selatan', 'Prov. Sumatera Utara'),
(164, 'Kab. Pak pak Bharat', 'Prov. Sumatera Utara'),
(165, 'Kab. Humbang Hasundutan', 'Prov. Sumatera Utara'),
(166, 'Kab. Samosir', 'Prov. Sumatera Utara'),
(167, 'Kab. Serdang Bedagai', 'Prov. Sumatera Utara'),
(168, 'Kab. Batu Bara', 'Prov. Sumatera Utara'),
(169, 'Kab. Padang Lawas Utara', 'Prov. Sumatera Utara'),
(170, 'Kab. Padang Lawas', 'Prov. Sumatera Utara'),
(171, 'Kab. Labuhanbatu Utara', 'Prov. Sumatera Utara'),
(172, 'Kab. Labuhanbatu Selatan', 'Prov. Sumatera Utara'),
(173, 'Kab. Nias Barat', 'Prov. Sumatera Utara'),
(174, 'Kab. Nias Utara', 'Prov. Sumatera Utara'),
(175, 'Kota Medan', 'Prov. Sumatera Utara'),
(176, 'Kota Binjai', 'Prov. Sumatera Utara'),
(177, 'Kota Tebing Tinggi', 'Prov. Sumatera Utara'),
(178, 'Kota Pematang Siantar', 'Prov. Sumatera Utara'),
(179, 'Kota Tanjung Balai', 'Prov. Sumatera Utara'),
(180, 'Kota Sibolga', 'Prov. Sumatera Utara'),
(181, 'Kota Padang Sidempuan', 'Prov. Sumatera Utara'),
(182, 'Kota Gunung Sitoli', 'Prov. Sumatera Utara'),
(183, 'Prov. Sumatera Barat', 'Prov. Sumatera Barat'),
(184, 'Kab. Agam', 'Prov. Sumatera Barat'),
(185, 'Kab. Pasaman', 'Prov. Sumatera Barat'),
(186, 'Kab. Lima Puluh Koto', 'Prov. Sumatera Barat'),
(187, 'Kab. Solok', 'Prov. Sumatera Barat'),
(188, 'Kab. Padang Pariaman', 'Prov. Sumatera Barat'),
(189, 'Kab. Pesisir Selatan', 'Prov. Sumatera Barat'),
(190, 'Kab. Tanah Datar', 'Prov. Sumatera Barat'),
(191, 'Kab. Sawahlunto/ Sijunjung', 'Prov. Sumatera Barat'),
(192, 'Kab. Kepulauan Mentawai', 'Prov. Sumatera Barat'),
(193, 'Kab. Solok Selatan', 'Prov. Sumatera Barat'),
(194, 'Kab. Dharmas Raya', 'Prov. Sumatera Barat'),
(195, 'Kab. Pasaman Barat', 'Prov. Sumatera Barat'),
(196, 'Kota Bukittinggi', 'Prov. Sumatera Barat'),
(197, 'Kota Padang', 'Prov. Sumatera Barat'),
(198, 'Kota Padang Panjang', 'Prov. Sumatera Barat'),
(199, 'Kota Sawah Lunto', 'Prov. Sumatera Barat'),
(200, 'Kota Solok', 'Prov. Sumatera Barat'),
(201, 'Kota Payakumbuh', 'Prov. Sumatera Barat'),
(202, 'Kota Pariaman', 'Prov. Sumatera Barat'),
(203, 'Prov. Riau', 'Prov. Riau'),
(204, 'Kab. Kampar', 'Prov. Riau'),
(205, 'Kab. Bengkalis', 'Prov. Riau'),
(206, 'Kab. Indragiri Hulu', 'Prov. Riau'),
(207, 'Kab. Indragiri Hilir', 'Prov. Riau'),
(208, 'Kab. Pelalawan', 'Prov. Riau'),
(209, 'Kab. Siak', 'Prov. Riau'),
(210, 'Kab. Kuantan Singingi', 'Prov. Riau'),
(211, 'Kab. Rokan Hulu', 'Prov. Riau'),
(212, 'Kab. Rokan Hilir', 'Prov. Riau'),
(213, 'Kab. Kep. Meranti', 'Prov. Riau'),
(214, 'Kota Pekanbaru', 'Prov. Riau'),
(215, 'Kota Dumai', 'Prov. Riau'),
(216, 'Prov. Kepulauan Riau', 'Prov. Kepulauan Riau'),
(217, 'Kab. Bintan', 'Prov. Kepulauan Riau'),
(218, 'Kab. Karimun', 'Prov. Kepulauan Riau'),
(219, 'Kab. Natuna', 'Prov. Kepulauan Riau'),
(220, 'Kab. Lingga', 'Prov. Kepulauan Riau'),
(221, 'Kab. Kep. Anambas', 'Prov. Kepulauan Riau'),
(222, 'Kota Batam', 'Prov. Kepulauan Riau'),
(223, 'Kota Tanjungpinang', 'Prov. Kepulauan Riau'),
(224, 'Prov. Jambi', 'Prov. Jambi'),
(225, 'Kab. Batang Hari', 'Prov. Jambi'),
(226, 'Kab. Bungo', 'Prov. Jambi'),
(227, 'Kab. Sarolangun', 'Prov. Jambi'),
(228, 'Kab. Tanjung Jabung Barat', 'Prov. Jambi'),
(229, 'Kab. Kerinci', 'Prov. Jambi'),
(230, 'Kab. Tebo', 'Prov. Jambi'),
(231, 'Kab. Muaro Jambi', 'Prov. Jambi'),
(232, 'Kab. Tanjung Jabung Timur', 'Prov. Jambi'),
(233, 'Kab. Merangin', 'Prov. Jambi'),
(234, 'Kota Jambi', 'Prov. Jambi'),
(235, 'Kota. Sungai Penuh', 'Prov. Jambi'),
(236, 'Prov. Sumatera Selatan', 'Prov. Sumatera Selatan'),
(237, 'Kab. Musi Banyu Asin', 'Prov. Sumatera Selatan'),
(238, 'Kab. Ogan Komering Ilir', 'Prov. Sumatera Selatan'),
(239, 'Kab. Ogan Komering Ulu', 'Prov. Sumatera Selatan'),
(240, 'Kab. Muara Enim', 'Prov. Sumatera Selatan'),
(241, 'Kab. Lahat', 'Prov. Sumatera Selatan'),
(242, 'Kab. Musi Rawas', 'Prov. Sumatera Selatan'),
(243, 'Kab. Banyuasin', 'Prov. Sumatera Selatan'),
(244, 'Kab. Ogan Komering Ulu Timur', 'Prov. Sumatera Selatan'),
(245, 'Kab. Ogan Komering Ulu Sel.', 'Prov. Sumatera Selatan'),
(246, 'Kab. Ogan Ilir', 'Prov. Sumatera Selatan'),
(247, 'Kab. Empat Lawang', 'Prov. Sumatera Selatan'),
(248, 'Kota Palembang', 'Prov. Sumatera Selatan'),
(249, 'Kota Prabumulih', 'Prov. Sumatera Selatan'),
(250, 'Kota Lubuk Linggau', 'Prov. Sumatera Selatan'),
(251, 'Kota Pagar Alam', 'Prov. Sumatera Selatan'),
(252, 'Prov. Bangka Belitung', 'Prov. Bangka Belitung'),
(253, 'Kab. Bangka', 'Prov. Bangka Belitung'),
(254, 'Kab. Belitung', 'Prov. Bangka Belitung'),
(255, 'Kab. Bangka Tengah', 'Prov. Bangka Belitung'),
(256, 'Kab. Bangka Barat', 'Prov. Bangka Belitung'),
(257, 'Kab. Bangka Selatan', 'Prov. Bangka Belitung'),
(258, 'Kab. Belitung Timur', 'Prov. Bangka Belitung'),
(259, 'Kota Pangkalpinang', 'Prov. Bangka Belitung'),
(260, 'Prov. Bengkulu', 'Prov. Bengkulu'),
(261, 'Kab. Bengkulu Utara', 'Prov. Bengkulu'),
(262, 'Kab. Rejang Lebong', 'Prov. Bengkulu'),
(263, 'Kab. Bengkulu Selatan', 'Prov. Bengkulu'),
(264, 'Kab. Muko-muko', 'Prov. Bengkulu'),
(265, 'Kab. Kepahiang', 'Prov. Bengkulu'),
(266, 'Kab. Lebong', 'Prov. Bengkulu'),
(267, 'Kab. Kaur', 'Prov. Bengkulu'),
(268, 'Kab. Seluma', 'Prov. Bengkulu'),
(269, 'Kab. Bengkulu Tengah', 'Prov. Bengkulu'),
(270, 'Kota Bengkulu', 'Prov. Bengkulu'),
(271, 'Prov. Kepulauan Riau', 'Prov. Kepulauan Riau'),
(272, 'Kab. Bintan', 'Prov. Kepulauan Riau'),
(273, 'Kab. Karimun', 'Prov. Kepulauan Riau'),
(274, 'Kab. Natuna', 'Prov. Kepulauan Riau'),
(275, 'Kab. Lingga', 'Prov. Kepulauan Riau'),
(276, 'Kab. Kep. Anambas', 'Prov. Kepulauan Riau'),
(277, 'Kota Batam', 'Prov. Kepulauan Riau'),
(278, 'Kota Tanjungpinang', 'Prov. Kepulauan Riau'),
(279, 'Prov. Lampung', 'Prov. Lampung'),
(280, 'Kab. Lampung Selatan', 'Prov. Lampung'),
(281, 'Kab. Lampung Tengah', 'Prov. Lampung'),
(282, 'Kab. Lampung Utara', 'Prov. Lampung'),
(283, 'Kab. Lampung Barat', 'Prov. Lampung'),
(284, 'Kab. Tulang Bawang', 'Prov. Lampung'),
(285, 'Kab. Tanggamus', 'Prov. Lampung'),
(286, 'Kab. Lampung Timur', 'Prov. Lampung'),
(287, 'Kab. Way Kanan', 'Prov. Lampung'),
(288, 'Kab. Pesawaran', 'Prov. Lampung'),
(289, 'Kab. Pringsewu', 'Prov. Lampung'),
(290, 'Kab. Mesuji', 'Prov. Lampung'),
(291, 'Kab. Tulang Bawang Barat', 'Prov. Lampung'),
(292, 'Kota Bandar Lampung', 'Prov. Lampung'),
(293, 'Kota Metro', 'Prov. Lampung'),
(294, 'Prov. Kalimantan Barat', 'Prov. Kalimantan Barat'),
(295, 'Kab. Sambas', 'Prov. Kalimantan Barat'),
(296, 'Kab. Pontianak', 'Prov. Kalimantan Barat'),
(297, 'Kab. Sanggau', 'Prov. Kalimantan Barat'),
(298, 'Kab. Sintang', 'Prov. Kalimantan Barat'),
(299, 'Kab. Kapuas Hulu', 'Prov. Kalimantan Barat'),
(300, 'Kab. Ketapang', 'Prov. Kalimantan Barat'),
(301, 'Kab. Bengkayang', 'Prov. Kalimantan Barat'),
(302, 'Kab. Landak', 'Prov. Kalimantan Barat'),
(303, 'Kab. Sekadau', 'Prov. Kalimantan Barat'),
(304, 'Kab. Melawi', 'Prov. Kalimantan Barat'),
(305, 'Kab. Kayong Utara', 'Prov. Kalimantan Barat'),
(306, 'Kab. Kubu Raya', 'Prov. Kalimantan Barat'),
(307, 'Kota Pontianak', 'Prov. Kalimantan Barat'),
(308, 'Kota Singkawang', 'Prov. Kalimantan Barat'),
(309, 'Prov. Kalimantan Tengah', 'Prov. Kalimantan Tengah'),
(310, 'Kab. Kapuas', 'Prov. Kalimantan Tengah'),
(311, 'Kab. Barito Selatan', 'Prov. Kalimantan Tengah'),
(312, 'Kab. Barito Utara', 'Prov. Kalimantan Tengah'),
(313, 'Kab. Kotawaringin Timur', 'Prov. Kalimantan Tengah'),
(314, 'Kab. Kotawaringin Barat', 'Prov. Kalimantan Tengah'),
(315, 'Kab. Katingan', 'Prov. Kalimantan Tengah'),
(316, 'Kab. Seruyan', 'Prov. Kalimantan Tengah'),
(317, 'Kab. Sukamara', 'Prov. Kalimantan Tengah'),
(318, 'Kab. Lamandau', 'Prov. Kalimantan Tengah'),
(319, 'Kab. Gunung Mas', 'Prov. Kalimantan Tengah'),
(320, 'Kab. Pulang Pisau', 'Prov. Kalimantan Tengah'),
(321, 'Kab. Murung Raya', 'Prov. Kalimantan Tengah'),
(322, 'Kab. Barito Timur', 'Prov. Kalimantan Tengah'),
(323, 'Kota Palangka Raya', 'Prov. Kalimantan Tengah'),
(324, 'Prov. Kalimantan Selatan', 'Prov. Kalimantan Selatan'),
(325, 'Kab. Banjar', 'Prov. Kalimantan Selatan'),
(326, 'Kab. Tanah Laut', 'Prov. Kalimantan Selatan'),
(327, 'Kab. Barito Kuala', 'Prov. Kalimantan Selatan'),
(328, 'Kab. Tapin', 'Prov. Kalimantan Selatan'),
(329, 'Kab. Hulu Sungai Selatan', 'Prov. Kalimantan Selatan'),
(330, 'Kab. Hulu Sungai Tengah', 'Prov. Kalimantan Selatan'),
(331, 'Kab. Hulu Sungai Utara', 'Prov. Kalimantan Selatan'),
(332, 'Kab. Tabalong', 'Prov. Kalimantan Selatan'),
(333, 'Kab. Kota Baru', 'Prov. Kalimantan Selatan'),
(334, 'Kab. Balangan', 'Prov. Kalimantan Selatan'),
(335, 'Kab. Tanah Bumbu', 'Prov. Kalimantan Selatan'),
(336, 'Kota Banjarmasin', 'Prov. Kalimantan Selatan'),
(337, 'Kota Banjarbaru', 'Prov. Kalimantan Selatan'),
(338, 'Prov. Kalimantan Timur', 'Prov. Kalimantan Timur'),
(339, 'Kab. Pasir', 'Prov. Kalimantan Timur'),
(340, 'Kab. Kutai Kartanegara', 'Prov. Kalimantan Timur'),
(341, 'Kab. Berau', 'Prov. Kalimantan Timur'),
(342, 'Kab. Bulungan', 'Prov. Kalimantan Timur'),
(343, 'Kab. Malinau', 'Prov. Kalimantan Timur'),
(344, 'Kab. Nunukan', 'Prov. Kalimantan Timur'),
(345, 'Kab. Kutai Barat', 'Prov. Kalimantan Timur'),
(346, 'Kab. Kutai Timur', 'Prov. Kalimantan Timur'),
(347, 'Kab. Penajam Paser Utara', 'Prov. Kalimantan Timur'),
(348, 'Kab. Tana Tidung', 'Prov. Kalimantan Timur'),
(349, 'Kota Samarinda', 'Prov. Kalimantan Timur'),
(350, 'Kota Balikpapan', 'Prov. Kalimantan Timur'),
(351, 'Kota Tarakan', 'Prov. Kalimantan Timur'),
(352, 'Kota Bontang', 'Prov. Kalimantan Timur'),
(353, 'Prov. Sulawesi Utara', 'Prov. Sulawesi Utara'),
(354, 'Kab. Bolaang Mengondow', 'Prov. Sulawesi Utara'),
(355, 'Kab. Minahasa', 'Prov. Sulawesi Utara'),
(356, 'Kab. Kepulauan Sangihe', 'Prov. Sulawesi Utara'),
(357, 'Kab. Kepulauan Talaud', 'Prov. Sulawesi Utara'),
(358, 'Kab. Minahasa Selatan', 'Prov. Sulawesi Utara'),
(359, 'Kab. Minahasa Utara', 'Prov. Sulawesi Utara'),
(360, 'Kab. Bolaang Mongondow Utara', 'Prov. Sulawesi Utara'),
(361, 'Kab. Siau Tagulandang Biaro', 'Prov. Sulawesi Utara'),
(362, 'Kab. Minahasa Tenggara', 'Prov. Sulawesi Utara'),
(363, 'Kab. Bolaang Mongondow Timur', 'Prov. Sulawesi Utara'),
(364, 'Kab. Bolaang Mongondow Selatan', 'Prov. Sulawesi Utara'),
(365, 'Kota Manado', 'Prov. Sulawesi Utara'),
(366, 'Kota Bitung', 'Prov. Sulawesi Utara'),
(367, 'Kota Tomohon', 'Prov. Sulawesi Utara'),
(368, 'Kota Kotamobagu', 'Prov. Sulawesi Utara'),
(369, 'Prov. Gorontalo', 'Prov. Gorontalo'),
(370, 'Kab. Boalemo', 'Prov. Gorontalo'),
(371, 'Kab. Gorontalo', 'Prov. Gorontalo'),
(372, 'Kab. Pohuwato', 'Prov. Gorontalo'),
(373, 'Kab. Bone Bolango', 'Prov. Gorontalo'),
(374, 'Kab. Gorontalo Utara', 'Prov. Gorontalo'),
(375, 'Kota Gorontalo', 'Prov. Gorontalo'),
(376, 'Prov. Sulawesi Tengah', 'Prov. Sulawesi Tengah'),
(377, 'Kab. Banggai Kepulauan', 'Prov. Sulawesi Tengah'),
(378, 'Kab. Donggala', 'Prov. Sulawesi Tengah'),
(379, 'Kab. Poso', 'Prov. Sulawesi Tengah'),
(380, 'Kab. Banggai', 'Prov. Sulawesi Tengah'),
(381, 'Kab. Buol', 'Prov. Sulawesi Tengah'),
(382, 'Kab. Toli-Toli', 'Prov. Sulawesi Tengah'),
(383, 'Kab. Morowali', 'Prov. Sulawesi Tengah'),
(384, 'Kab. Parigi Moutong', 'Prov. Sulawesi Tengah'),
(385, 'Kab. Tojo Una-Una', 'Prov. Sulawesi Tengah'),
(386, 'Kab. Sigi', 'Prov. Sulawesi Tengah'),
(387, 'Kota Palu', 'Prov. Sulawesi Tengah'),
(388, 'Prov. Sulawesi Selatan', 'Prov. Sulawesi Selatan'),
(389, 'Kab. Maros', 'Prov. Sulawesi Selatan'),
(390, 'Kab. Pangkajene Kepulauan', 'Prov. Sulawesi Selatan'),
(391, 'Kab. Gowa', 'Prov. Sulawesi Selatan'),
(392, 'Kab. Takalar', 'Prov. Sulawesi Selatan'),
(393, 'Kab. Jeneponto', 'Prov. Sulawesi Selatan'),
(394, 'Kab. Barru', 'Prov. Sulawesi Selatan'),
(395, 'Kab. Bone', 'Prov. Sulawesi Selatan'),
(396, 'Kab. Wajo', 'Prov. Sulawesi Selatan'),
(397, 'Kab. Soppeng', 'Prov. Sulawesi Selatan'),
(398, 'Kab. Bantaeng', 'Prov. Sulawesi Selatan'),
(399, 'Kab. Bulukumba', 'Prov. Sulawesi Selatan'),
(400, 'Kab. Sinjai', 'Prov. Sulawesi Selatan'),
(401, 'Kab. Selayar', 'Prov. Sulawesi Selatan'),
(402, 'Kab. Pinrang', 'Prov. Sulawesi Selatan'),
(403, 'Kab. Sidenreng Rappang', 'Prov. Sulawesi Selatan'),
(404, 'Kab. Enrekang', 'Prov. Sulawesi Selatan'),
(405, 'Kab. Luwu', 'Prov. Sulawesi Selatan'),
(406, 'Kab. Tana Toraja', 'Prov. Sulawesi Selatan'),
(407, 'Kab. Tana Toraja Utara', 'Prov. Sulawesi Selatan'),
(408, 'Kab. Luwu Utara', 'Prov. Sulawesi Selatan'),
(409, 'Kab. Luwu Timur', 'Prov. Sulawesi Selatan'),
(410, 'Kota Makassar', 'Prov. Sulawesi Selatan'),
(411, 'Kota Pare-Pare', 'Prov. Sulawesi Selatan'),
(412, 'Kota Palopo', 'Prov. Sulawesi Selatan'),
(413, 'Prov. Sulawesi Barat', 'Prov. Sulawesi Barat'),
(414, 'Kab. Mamuju', 'Prov. Sulawesi Barat'),
(415, 'Kab. Mamuju Utara', 'Prov. Sulawesi Barat'),
(416, 'Kab. Polewali Mandar', 'Prov. Sulawesi Barat'),
(417, 'Kab. Mamasa', 'Prov. Sulawesi Barat'),
(418, 'Kab. Majene', 'Prov. Sulawesi Barat'),
(419, 'Prov. Sulawesi Tenggara', 'Prov. Sulawesi Tenggara'),
(420, 'Kab. Konawe', 'Prov. Sulawesi Tenggara'),
(421, 'Kab. Muna', 'Prov. Sulawesi Tenggara'),
(422, 'Kab. Buton', 'Prov. Sulawesi Tenggara'),
(423, 'Kab. Kolaka', 'Prov. Sulawesi Tenggara'),
(424, 'Kab. Konawe Selatan', 'Prov. Sulawesi Tenggara'),
(425, 'Kab. Wakatobi', 'Prov. Sulawesi Tenggara'),
(426, 'Kab. Bombana', 'Prov. Sulawesi Tenggara'),
(427, 'Kab. Kolaka Utara', 'Prov. Sulawesi Tenggara'),
(428, 'Kab. Konawe Utara', 'Prov. Sulawesi Tenggara'),
(429, 'Kab. Buton Utara', 'Prov. Sulawesi Tenggara'),
(430, 'Kota Kendari', 'Prov. Sulawesi Tenggara'),
(431, 'Kota Baubau', 'Prov. Sulawesi Tenggara'),
(432, 'Prov. Maluku', 'Prov. Maluku'),
(433, 'Kab. Maluku Tengah', 'Prov. Maluku'),
(434, 'Kab. Maluku Tenggara', 'Prov. Maluku'),
(435, 'Kab. Buru', 'Prov. Maluku'),
(436, 'Kab. Maluku Tenggara Barat', 'Prov. Maluku'),
(437, 'Kab. Seram Bagian Barat', 'Prov. Maluku'),
(438, 'Kab. Seram Bagian Timur', 'Prov. Maluku'),
(439, 'Kab. Kepulauan Aru', 'Prov. Maluku'),
(440, 'Kab. Maluku Barat Daya', 'Prov. Maluku'),
(441, 'Kab. Buru Selatan', 'Prov. Maluku'),
(442, 'Kota Ambon', 'Prov. Maluku'),
(443, 'Kota Tual', 'Prov. Maluku'),
(444, 'Prov. Maluku Utara', 'Prov. Maluku Utara'),
(445, 'Kab. Halmahera Tengah', 'Prov. Maluku Utara'),
(446, 'Kab. Halmahera Barat', 'Prov. Maluku Utara'),
(447, 'Kab. Halmahera Utara', 'Prov. Maluku Utara'),
(448, 'Kab. Halmahera Selatan', 'Prov. Maluku Utara'),
(449, 'Kab. Halmahera Timur', 'Prov. Maluku Utara'),
(450, 'Kab. Kepulauan Sula', 'Prov. Maluku Utara'),
(451, 'Kab. Kepulauan Morotai', 'Prov. Maluku Utara'),
(452, 'Kota Ternate', 'Prov. Maluku Utara'),
(453, 'Kota Tidore Kepulauan', 'Prov. Maluku Utara'),
(454, 'Prov. Bali', 'Prov. Bali'),
(455, 'Kab. Buleleng', 'Prov. Bali'),
(456, 'Kab. Jembrana', 'Prov. Bali'),
(457, 'Kab. Tabanan', 'Prov. Bali'),
(458, 'Kab. Badung', 'Prov. Bali'),
(459, 'Kab. Gianyar', 'Prov. Bali'),
(460, 'Kab. Klungkung', 'Prov. Bali'),
(461, 'Kab. Bangli', 'Prov. Bali'),
(462, 'Kab. Karang Asem', 'Prov. Bali'),
(463, 'Kota Denpasar', 'Prov. Bali'),
(464, 'Prov. Nusa Tenggara Barat', 'Prov. Nusa Tenggara Barat'),
(465, 'Kab. Lombok Barat', 'Prov. Nusa Tenggara Barat'),
(466, 'Kab. Lombok Tengah', 'Prov. Nusa Tenggara Barat'),
(467, 'Kab. Lombok Timur', 'Prov. Nusa Tenggara Barat'),
(468, 'Kab. Sumbawa', 'Prov. Nusa Tenggara Barat'),
(469, 'Kab. Dompu', 'Prov. Nusa Tenggara Barat'),
(470, 'Kab. Bima', 'Prov. Nusa Tenggara Barat'),
(471, 'Kab. Sumbawa Barat', 'Prov. Nusa Tenggara Barat'),
(472, 'Kab. Lombok Utara', 'Prov. Nusa Tenggara Barat'),
(473, 'Kota Mataram', 'Prov. Nusa Tenggara Barat'),
(474, 'Kota Bima', 'Prov. Nusa Tenggara Barat'),
(475, 'Prov. Nusa Tenggara Timur', 'Prov. Nusa Tenggara Timur'),
(476, 'Kab. Kupang', 'Prov. Nusa Tenggara Timur'),
(477, 'Kab. Timor Tengah Selatan', 'Prov. Nusa Tenggara Timur'),
(478, 'Kab. Timor Tengah Utara', 'Prov. Nusa Tenggara Timur'),
(479, 'Kab. Belu', 'Prov. Nusa Tenggara Timur'),
(480, 'Kab. Alor', 'Prov. Nusa Tenggara Timur'),
(481, 'Kab. Flores Timur', 'Prov. Nusa Tenggara Timur'),
(482, 'Kab. Sikka', 'Prov. Nusa Tenggara Timur'),
(483, 'Kab. Ende', 'Prov. Nusa Tenggara Timur'),
(484, 'Kab. Ngada', 'Prov. Nusa Tenggara Timur'),
(485, 'Kab. Manggarai', 'Prov. Nusa Tenggara Timur'),
(486, 'Kab. Sumba Timur', 'Prov. Nusa Tenggara Timur'),
(487, 'Kab. Sumba Barat', 'Prov. Nusa Tenggara Timur'),
(488, 'Kab. Lembata', 'Prov. Nusa Tenggara Timur'),
(489, 'Kab. Rote-Ndao', 'Prov. Nusa Tenggara Timur'),
(490, 'Kab. Manggarai Barat', 'Prov. Nusa Tenggara Timur'),
(491, 'Kab. Nagekeo', 'Prov. Nusa Tenggara Timur'),
(492, 'Kab. Sumba Tengah', 'Prov. Nusa Tenggara Timur'),
(493, 'Kab. Sumba Barat Daya', 'Prov. Nusa Tenggara Timur'),
(494, 'Kab. Manggarai Timur', 'Prov. Nusa Tenggara Timur'),
(495, 'Kab. Sabu Raijua', 'Prov. Nusa Tenggara Timur'),
(496, 'Kota Kupang', 'Prov. Nusa Tenggara Timur'),
(497, 'Prov. Papua', 'Prov. Papua'),
(498, 'Kab. Jayapura', 'Prov. Papua'),
(499, 'Kab. Biak Numfor', 'Prov. Papua'),
(500, 'Kab. Yapen Waropen', 'Prov. Papua'),
(501, 'Kab. Merauke', 'Prov. Papua'),
(502, 'Kab. Jayawijaya', 'Prov. Papua'),
(503, 'Kab. Nabire', 'Prov. Papua'),
(504, 'Kab. Paniai', 'Prov. Papua'),
(505, 'Kab. Puncak Jaya', 'Prov. Papua'),
(506, 'Kab. Mimika', 'Prov. Papua'),
(507, 'Kab. Boven Digoel', 'Prov. Papua'),
(508, 'Kab. Mappi', 'Prov. Papua'),
(509, 'Kab. Asmat', 'Prov. Papua'),
(510, 'Kab. Yahukimo', 'Prov. Papua'),
(511, 'Kab. Pegunungan Bintang', 'Prov. Papua'),
(512, 'Kab. Tolikara', 'Prov. Papua'),
(513, 'Kab. Sarmi', 'Prov. Papua'),
(514, 'Kab. Keerom', 'Prov. Papua'),
(515, 'Kab. Waropen', 'Prov. Papua'),
(516, 'Kab. Supiori', 'Prov. Papua'),
(517, 'Kab. Memberamo Raya', 'Prov. Papua'),
(518, 'Kab. Nduga Tengah', 'Prov. Papua'),
(519, 'Kab. Lanny Jaya', 'Prov. Papua'),
(520, 'Kab. Mamberamo Tengah', 'Prov. Papua'),
(521, 'Kab. Yalimo', 'Prov. Papua'),
(522, 'Kab. Puncak', 'Prov. Papua'),
(523, 'Kab. Dogiyai', 'Prov. Papua'),
(524, 'Kab. Deiyai', 'Prov. Papua'),
(525, 'Kab. Intan Jaya', 'Prov. Papua'),
(526, 'Kota Jayapura', 'Prov. Papua'),
(527, 'Prov. Papua Barat', 'Prov. Papua Barat'),
(528, 'Kab. Fak-Fak', 'Prov. Papua Barat'),
(529, 'Kab. Kaimana', 'Prov. Papua Barat'),
(530, 'Kab. Teluk Wondama', 'Prov. Papua Barat'),
(531, 'Kab. Teluk Bintuni', 'Prov. Papua Barat'),
(532, 'Kab. Manokwari', 'Prov. Papua Barat'),
(533, 'Kab. Sorong Selatan', 'Prov. Papua Barat'),
(534, 'Kab. Sorong', 'Prov. Papua Barat'),
(535, 'Kab. Kep. Raja Ampat', 'Prov. Papua Barat'),
(536, 'Kab. Tambrauw', 'Prov. Papua Barat'),
(537, 'Kab. Maybrat', 'Prov. Papua Barat'),
(538, 'Kota Sorong', 'Prov. Papua Barat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `setqr`
--

CREATE TABLE IF NOT EXISTS `setqr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `atas` float NOT NULL DEFAULT '0',
  `kiri` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `setqr`
--

INSERT INTO `setqr` (`id`, `atas`, `kiri`) VALUES
(1, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
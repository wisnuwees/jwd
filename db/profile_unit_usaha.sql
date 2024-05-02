-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jul 20, 2023 at 12:10 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `profile_unit_usaha`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `karyawan`
-- 

CREATE TABLE `karyawan` (
  `id_karyawan` smallint(11) NOT NULL,
  `id_unit` smallint(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `bagian` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `foto` varchar(200) NOT NULL,
  PRIMARY KEY  (`id_karyawan`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `karyawan`
-- 

INSERT INTO `karyawan` VALUES (4, 4, 'Isni', 'Staff', 'Person Responsible', 'img/isni.jpeg');
INSERT INTO `karyawan` VALUES (2, 2, 'Adira', 'Staff', 'Person Responsible', 'img/adira.jpeg');
INSERT INTO `karyawan` VALUES (3, 3, 'Buana', 'Staff', 'Person Responsible', 'img/buana.jpeg');
INSERT INTO `karyawan` VALUES (1, 1, 'Riki', 'Staff', 'Person Responsible', 'img/riki.jpg');
INSERT INTO `karyawan` VALUES (5, 5, 'Chandra', 'Staff', 'Person Responsible', 'img/chandra.jpeg');
INSERT INTO `karyawan` VALUES (6, 6, 'Kalino', 'Staff', 'Person Responsible', 'img/kalino.jpeg');
INSERT INTO `karyawan` VALUES (7, 7, 'Agus', 'Staff', 'Person Responsible', 'img/agus.jpeg');
INSERT INTO `karyawan` VALUES (8, 1, 'Sugiman', 'Staff', 'Head of Business Unit', 'img/pak sugiman.jpg');
INSERT INTO `karyawan` VALUES (9, 1, 'Putri', 'Staff', 'Human Resources', 'img/putri.jpg');
INSERT INTO `karyawan` VALUES (10, 1, 'Rina', 'Staff', 'Finance', 'img/bu rina.jpg');

-- --------------------------------------------------------

-- 
-- Table structure for table `kontak`
-- 

CREATE TABLE `kontak` (
  `id_kontak` smallint(11) NOT NULL,
  `id_unit` smallint(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY  (`id_kontak`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `kontak`
-- 

INSERT INTO `kontak` VALUES (1, 0, '', 'Jl. Gatot Subroto, Simp. Tanjung, Medan Sunggal, Kota Medan, Sumatera Utara, 20122', '+6261-8455-571', 'unpab@pancabudi.ac.id');

-- --------------------------------------------------------

-- 
-- Table structure for table `login`
-- 

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `sandi` varchar(200) NOT NULL,
  PRIMARY KEY  (`id_login`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `login`
-- 

INSERT INTO `login` VALUES (1, '12345');

-- --------------------------------------------------------

-- 
-- Table structure for table `media`
-- 

CREATE TABLE `media` (
  `id_media` smallint(11) NOT NULL,
  `media` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL,
  PRIMARY KEY  (`id_media`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `media`
-- 

INSERT INTO `media` VALUES (1, 'Instagram', 'https://instagram.com/unitusahaofficial?igshid=MzRlODBiNWFlZA==');

-- --------------------------------------------------------

-- 
-- Table structure for table `produk_layanan`
-- 

CREATE TABLE `produk_layanan` (
  `id_produk_layanan` smallint(11) NOT NULL,
  `id_unit` smallint(11) NOT NULL,
  `gambar_produk` varchar(200) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `produk` varchar(30) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `testimoni` text NOT NULL,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY  (`id_produk_layanan`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `produk_layanan`
-- 

INSERT INTO `produk_layanan` VALUES (3, 1, 'img/mie goreng.jpg', 'Rp 13.000', 'Mie Goreng', 'Makanan', 'Enaaaak', 'Udin');
INSERT INTO `produk_layanan` VALUES (2, 1, 'img/kentang_goreng.jpg', 'Rp 15.000', 'Kentang Goreng', 'Makanan', 'Enaaaak', 'Udin');
INSERT INTO `produk_layanan` VALUES (1, 5, 'img/ayam_geprek.png', 'Rp 17.000', 'Nasi Ayam Geprek', 'Makanan', 'Enaaaak', 'Yudi');
INSERT INTO `produk_layanan` VALUES (4, 1, 'img/mie kuah.jpg', 'Rp 13.000', 'Mie Kuah', 'Makanan', 'Enaaaak', 'Udin');
INSERT INTO `produk_layanan` VALUES (5, 1, 'img/nasi ayam bakar.jpg', 'Rp 18.000', 'Nasi Ayam Bakar', 'Makanan', 'Enaaaak', 'Udin');
INSERT INTO `produk_layanan` VALUES (6, 1, 'img/nasi goreng.jpg', 'Rp. 13000', 'Nasi Goreng', 'Makanan', 'Enaaaak', 'Udin');
INSERT INTO `produk_layanan` VALUES (7, 1, 'img/nasi soto.jpg', 'Rp. 13000', 'Nasi Soto', 'Makanan', 'Enaaaak', 'Budi');
INSERT INTO `produk_layanan` VALUES (9, 3, 'img/alat tulis.jpg', 'Rp. 13000', 'Alat Tulis', 'Alat', '', '');
INSERT INTO `produk_layanan` VALUES (10, 7, 'img/better.jpg', 'Rp. 4000', 'Better', 'Makanan', 'Enakkkk', 'Lala');
INSERT INTO `produk_layanan` VALUES (11, 3, 'img/buku.jpg', '', 'Buku', 'Bahan', '', '');
INSERT INTO `produk_layanan` VALUES (12, 6, 'img/burger.jpg', 'Rp. 10.000', 'Burger', 'Makanan', 'wenakkk', 'Siti');
INSERT INTO `produk_layanan` VALUES (13, 1, 'img/cappuchino cincau.jpg', 'Rp 11.000', 'Cappuchino Cincau', 'Minuman', 'Segar Nikmat Mantap!', 'Putri');
INSERT INTO `produk_layanan` VALUES (14, 7, 'img/chiki.jpg', 'Rp 3.000', 'Chiki', 'Makanan', 'Mantap', 'Fadli');
INSERT INTO `produk_layanan` VALUES (15, 2, 'img/cimory.jpg', 'Rp 8.000', 'Cimory', 'Minuman', 'Enakkkk', 'Rika');
INSERT INTO `produk_layanan` VALUES (16, 6, 'img/cleo.png', 'Rp. 3000', 'Cleo', 'Minuman', 'Segarrr', 'wawan');
INSERT INTO `produk_layanan` VALUES (17, 2, 'img/fitbar.JPG', 'Rp 10.000', 'Fitbar', 'Makanan', 'Sedapnya', 'Nurfad');
INSERT INTO `produk_layanan` VALUES (18, 1, 'img/ifumie goreng.jpg', 'Rp 13.000', 'Ifumie Goreng', 'Makanan', 'Sedapnya', 'Pita');
INSERT INTO `produk_layanan` VALUES (19, 6, 'img/kebab.jpg', 'Rp 15.000', 'Kebab', 'Makanan', 'sedapp', 'ayu');
INSERT INTO `produk_layanan` VALUES (20, 1, 'img/leman tea.jpg', 'Rp 10.000', 'Lemon Tea', 'Minuman', 'Segarrr', 'Andi');
INSERT INTO `produk_layanan` VALUES (21, 6, 'img/mie bakso.jpg', 'Rp 10.000', 'Mie Bakso', 'Makanan', 'Enak buat kenyang', 'Wita');
INSERT INTO `produk_layanan` VALUES (24, 2, 'img/thai tea.jpg', 'Rp 8.000', 'Thai Tea', 'Minuman', 'segerrr', 'Wahyu');
INSERT INTO `produk_layanan` VALUES (25, 7, 'img/fruit tea.jpg', 'Rp 8.000', 'Fruit Tea', 'Minuman', 'Segarrr', 'Aliya');
INSERT INTO `produk_layanan` VALUES (26, 3, 'img/penggaris.jpg', '', 'Penggaris', 'Alat', '', '');
INSERT INTO `produk_layanan` VALUES (27, 3, 'img/penghapus.jpg', '', 'Penghapus', 'Alat', '', '');
INSERT INTO `produk_layanan` VALUES (28, 4, 'img/pisang coklat.jpe.jpg', 'Rp 5.000', 'Pisang Coklat', 'Makanan', 'Enakkkk', 'Dillah');
INSERT INTO `produk_layanan` VALUES (29, 2, 'img/pocky.jpg', 'Rp 8.000', 'Pocky', 'Makanan', 'Lumayan', 'Indah');
INSERT INTO `produk_layanan` VALUES (30, 3, 'img/pulpen.jpg', '', 'Pulpen', 'Alat', '', '');
INSERT INTO `produk_layanan` VALUES (31, 4, 'img/risol ayam.jpg', 'Rp 4.000', 'Risol Ayam', 'Makanan', 'Mantap', 'Amal');
INSERT INTO `produk_layanan` VALUES (32, 4, 'img/risol mayo.jpg', 'Rp 3.000', 'Risol Mayo', 'Makanan', 'Enaaaak', 'Ahmad');
INSERT INTO `produk_layanan` VALUES (33, 4, 'img/roti boi.png', 'Rp 7.000', 'Roti Boi', 'Makanan', 'Enakkkk', 'Nadia');
INSERT INTO `produk_layanan` VALUES (34, 2, 'img/snack.jpg', 'Rp 4.000', 'Snack', 'Makanan', 'Enakkkk', 'Putri');
INSERT INTO `produk_layanan` VALUES (35, 4, 'img/sus.jpeg.jpg', 'Rp 2.000', 'Soes', 'Makanan', 'Enakkkk', 'Pita');
INSERT INTO `produk_layanan` VALUES (36, 2, 'img/frisian flag.JPG', 'Rp 7.000', 'Frisian Flag', 'Minuman', 'Enak', 'Ria');
INSERT INTO `produk_layanan` VALUES (37, 6, 'img/teh manis.jpg', 'Rp 5.000', 'Teh Manis Panas/Dingin', 'Minuman', 'Enakkkk', 'puput');
INSERT INTO `produk_layanan` VALUES (38, 7, 'img/teh pucuk.jpg', 'Rp 5.000', 'Teh Pucuk', 'Minuman', 'segerrr', 'wisnu');
INSERT INTO `produk_layanan` VALUES (39, 3, 'img/tipe x.jpg', '', 'Tipe X', 'Alat', '', '');
INSERT INTO `produk_layanan` VALUES (40, 7, 'img/walls.jpg', 'Rp 5.000', 'Walls', 'Makanan', 'Enakkkk', 'Nurfad');
INSERT INTO `produk_layanan` VALUES (41, 1, 'img/AmericanoPanas.jpg', 'Rp. 11.000', 'Americano Panas', 'Minuman', 'Nikmat', 'Atok');
INSERT INTO `produk_layanan` VALUES (42, 1, 'img/creamy-sanger-premium.jpg', 'Rp. 15.000', 'Sanger Panas', 'Minuman', 'Nikmat', 'Dalang');
INSERT INTO `produk_layanan` VALUES (43, 1, 'img/Milo-dingin--0-9235f09ef1f74199.jpg', 'Rp 8.000', 'Milo Panas/Dingin', 'Minuman', 'Enak', 'Dana');
INSERT INTO `produk_layanan` VALUES (44, 2, 'img/pop mie.jpeg', '', 'Pop Mie', 'Makanan', 'Enak', 'Opet');
INSERT INTO `produk_layanan` VALUES (45, 2, 'img/cleo-eco-shape.png', 'Rp 3.000', 'Cleo', 'Minuman', 'Nikmat', 'Ape');
INSERT INTO `produk_layanan` VALUES (46, 2, 'img/le minerale.jpg', 'Rp 4.000', 'Le Minerale', 'Minuman', 'Kek Ada Manis Manis Nya Gitu', 'Upin');
INSERT INTO `produk_layanan` VALUES (47, 2, 'img/pringles.jpg', '', 'Pringles', 'Makanan', 'Enak', 'Ipin');
INSERT INTO `produk_layanan` VALUES (48, 3, 'img/double folio.jpg', '', 'Double Folio', 'Bahan', '', '');
INSERT INTO `produk_layanan` VALUES (49, 3, 'img/kertas hvs a4.jpg', '', 'Kertas HVS A4', 'Bahan', '', '');
INSERT INTO `produk_layanan` VALUES (50, 3, 'img/map plastik.jpg', '', 'Map Plastik', 'Bahan', '', '');
INSERT INTO `produk_layanan` VALUES (51, 3, 'img/kertas karton.jpeg', '', 'Kertas Karton', 'Bahan', '', '');
INSERT INTO `produk_layanan` VALUES (52, 5, 'img/Lontong_sayur_without_spoon.jpeg', 'Rp 10.000', 'Lontong Sayur', 'Makanan', 'Enak', 'Opah');
INSERT INTO `produk_layanan` VALUES (53, 5, 'img/manis dingin.jpg', 'Rp 5.000', 'Manis Dingin', 'Minuman', 'Nikmat', 'Jali');
INSERT INTO `produk_layanan` VALUES (54, 5, 'img/cleo-eco-shape.png', 'Rp 3.000', 'Cleo', 'Minuman', 'Nikmat', 'Tuh');
INSERT INTO `produk_layanan` VALUES (55, 5, 'img/nasi ayam sambal hijau.jpeg', 'Rp. 13000', 'Nasi Ayam Sambal Hijau', 'Makanan', 'Enak', 'Yadi');
INSERT INTO `produk_layanan` VALUES (56, 5, 'img/nasi ikan lele bakar.jpg', 'Rp. 13000', 'Nasi Ikan Lele Bakar', 'Makanan', 'Enak', 'Yani');
INSERT INTO `produk_layanan` VALUES (57, 5, 'img/bubur ayam.jpg', 'Rp 10.000', 'Bubur Ayam', 'Makanan', 'Enaknya', 'Doni');
INSERT INTO `produk_layanan` VALUES (58, 5, 'img/jus jeruk.jpeg', 'Rp 10.000', 'Jus Jeruk', 'Minuman', 'Seger', 'Ikan');
INSERT INTO `produk_layanan` VALUES (59, 5, 'img/kopi-panas-atau-dingin.jpg', 'Rp 7.000', 'Kopi Susu Panas/Dingin', 'Minuman', 'Nikmat', 'Wak');
INSERT INTO `produk_layanan` VALUES (60, 5, 'img/wedang jahe.jpg', 'Rp 7.000', 'Wedang Jahe', 'Minuman', 'Nikmat', 'Beni');
INSERT INTO `produk_layanan` VALUES (61, 6, 'img/nasi ayam sambal hijau.jpeg', 'Rp 11.000', 'Nasi Ayam Sambal Hijau', 'Makanan', 'Enak', 'Ben');
INSERT INTO `produk_layanan` VALUES (62, 6, 'img/nasi ayam bakar.jpg', 'Rp 11.000', 'Nasi Ayam Bakar', 'Makanan', 'Enaaaak', 'Ari');
INSERT INTO `produk_layanan` VALUES (63, 6, 'img/nasi-ayam-saus-inggris-foto-resep-utama.jpg', 'Rp 11.000', 'Nasi Ayam Saos', 'Makanan', 'Enaaaak', 'Duda');
INSERT INTO `produk_layanan` VALUES (64, 6, 'img/Milo-dingin--0-9235f09ef1f74199.jpg', 'Rp 8.000', 'Milo Panas/Dingin', 'Minuman', 'Nikmat', 'Ilih');
INSERT INTO `produk_layanan` VALUES (65, 6, 'img/nutrisari1.jpg', 'Rp 6.000', 'Nutrisari', 'Minuman', 'Segarrr', 'Boboiboy');
INSERT INTO `produk_layanan` VALUES (66, 6, 'img/pop ice.jpg', 'Rp 6.000', 'Pop Ice', 'Minuman', 'Segarrr', 'Bima');
INSERT INTO `produk_layanan` VALUES (67, 7, 'img/chocolatos.png', '', 'Chocolatos', 'Makanan', 'Enak', 'Nabila');
INSERT INTO `produk_layanan` VALUES (68, 7, 'img/slai olai.jpg', '', 'Slai o''lai', 'Makanan', 'Enak', 'Zaskia');
INSERT INTO `produk_layanan` VALUES (69, 7, 'img/Qtela.jpg', '', 'Qtela', 'Makanan', 'Enak', 'Rifal');
INSERT INTO `produk_layanan` VALUES (70, 7, 'img/teh botol.jpg', '', 'Teh Botol', 'Minuman', 'Nikmat', 'Ana');
INSERT INTO `produk_layanan` VALUES (71, 7, 'img/varian-produk-You-C-1000.jpg', '', 'You C1000', 'Minuman', 'Sehat', 'Fani');
INSERT INTO `produk_layanan` VALUES (72, 7, 'img/milku.jpg', '', 'Milku', 'Minuman', 'Nikmat', 'Sindy');

-- --------------------------------------------------------

-- 
-- Table structure for table `sejarah`
-- 

CREATE TABLE `sejarah` (
  `id_sejarah` smallint(11) NOT NULL,
  `id_unit` smallint(11) NOT NULL,
  `tgl_berdiri` varchar(30) NOT NULL,
  `sejarah` text NOT NULL,
  PRIMARY KEY  (`id_sejarah`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `sejarah`
-- 

INSERT INTO `sejarah` VALUES (1, 1, '2007-01-01', 'Panca Budi business units began to exist around 1985. At that time the Panca Budi business was still small like a Padimart. The students who dominated at that time were students majoring in agriculture and law. Buyers also at that time only about 3 people only. until in 1999 began operating in laziz. and starting at that time the business had started to improve, they had been assisted by coca cola. in 2007 built verandah cafe. until in 2009 the number of buyers increased, reaching approximately 100 people. in 2009, several more outlets were built, such as the back canteen, which we call joint venture shops and joint venture shops. and also in 2009 a padimart and a photocopy were also built, which are all still active today. buyers are also increasingly crowded. because not only students, but people outside the campus also buy in several business units, such as followers of the tarekat surau who come from outside PancabudiÂ University.');
INSERT INTO `sejarah` VALUES (2, 2, '2009-01-01', 'Panca Budi business units began to exist around 1985. At that time the Panca Budi business was still small like a Padimart. The students who dominated at that time were students majoring in agriculture and law. Buyers also at that time only about 3 people only. until in 1999 began operating in laziz. and starting at that time the business had started to improve, they had been assisted by coca cola. in 2007 built verandah cafe. until in 2009 the number of buyers increased, reaching approximately 100 people. in 2009, several more outlets were built, such as the back canteen, which we call joint venture shops and joint venture shops. and also in 2009 a padimart and a photocopy were also built, which are all still active today. buyers are also increasingly crowded. because not only students, but people outside the campus also buy in several business units, such as followers of the tarekat surau who come from outside PancabudiÂ University.');
INSERT INTO `sejarah` VALUES (3, 3, '2009-01-01', 'Panca Budi business units began to exist around 1985. At that time the Panca Budi business was still small like a Padimart. The students who dominated at that time were students majoring in agriculture and law. Buyers also at that time only about 3 people only. until in 1999 began operating in laziz. and starting at that time the business had started to improve, they had been assisted by coca cola. in 2007 built verandah cafe. until in 2009 the number of buyers increased, reaching approximately 100 people. in 2009, several more outlets were built, such as the back canteen, which we call joint venture shops and joint venture shops. and also in 2009 a padimart and a photocopy were also built, which are all still active today. buyers are also increasingly crowded. because not only students, but people outside the campus also buy in several business units, such as followers of the tarekat surau who come from outside PancabudiÂ University.');
INSERT INTO `sejarah` VALUES (4, 4, '2008-01-01', 'Panca Budi business units began to exist around 1985. At that time the Panca Budi business was still small like a Padimart. The students who dominated at that time were students majoring in agriculture and law. Buyers also at that time only about 3 people only. until in 1999 began operating in laziz. and starting at that time the business had started to improve, they had been assisted by coca cola. in 2007 built verandah cafe. until in 2009 the number of buyers increased, reaching approximately 100 people. in 2009, several more outlets were built, such as the back canteen, which we call joint venture shops and joint venture shops. and also in 2009 a padimart and a photocopy were also built, which are all still active today. buyers are also increasingly crowded. because not only students, but people outside the campus also buy in several business units, such as followers of the tarekat surau who come from outside PancabudiÂ University.');
INSERT INTO `sejarah` VALUES (5, 5, '1999-01-01', 'Panca Budi business units began to exist around 1985. At that time the Panca Budi business was still small like a Padimart. The students who dominated at that time were students majoring in agriculture and law. Buyers also at that time only about 3 people only. until in 1999 began operating in laziz. and starting at that time the business had started to improve, they had been assisted by coca cola. in 2007 built verandah cafe. until in 2009 the number of buyers increased, reaching approximately 100 people. in 2009, several more outlets were built, such as the back canteen, which we call joint venture shops and joint venture shops. and also in 2009 a padimart and a photocopy were also built, which are all still active today. buyers are also increasingly crowded. because not only students, but people outside the campus also buy in several business units, such as followers of the tarekat surau who come from outside PancabudiÂ University.');
INSERT INTO `sejarah` VALUES (6, 6, '2009-01-01', 'Panca Budi business units began to exist around 1985. At that time the Panca Budi business was still small like a Padimart. The students who dominated at that time were students majoring in agriculture and law. Buyers also at that time only about 3 people only. until in 1999 began operating in laziz. and starting at that time the business had started to improve, they had been assisted by coca cola. in 2007 built verandah cafe. until in 2009 the number of buyers increased, reaching approximately 100 people. in 2009, several more outlets were built, such as the back canteen, which we call joint venture shops and joint venture shops. and also in 2009 a padimart and a photocopy were also built, which are all still active today. buyers are also increasingly crowded. because not only students, but people outside the campus also buy in several business units, such as followers of the tarekat surau who come from outside PancabudiÂ University.');
INSERT INTO `sejarah` VALUES (7, 7, '2009-01-01', 'Panca Budi business units began to exist around 1985. At that time the Panca Budi business was still small like a Padimart. The students who dominated at that time were students majoring in agriculture and law. Buyers also at that time only about 3 people only. until in 1999 began operating in laziz. and starting at that time the business had started to improve, they had been assisted by coca cola. in 2007 built verandah cafe. until in 2009 the number of buyers increased, reaching approximately 100 people. in 2009, several more outlets were built, such as the back canteen, which we call joint venture shops and joint venture shops. and also in 2009 a padimart and a photocopy were also built, which are all still active today. buyers are also increasingly crowded. because not only students, but people outside the campus also buy in several business units, such as followers of the tarekat surau who come from outside PancabudiÂ University.');

-- --------------------------------------------------------

-- 
-- Table structure for table `struktur`
-- 

CREATE TABLE `struktur` (
  `id_struktur` smallint(11) NOT NULL,
  `id_unit` smallint(11) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  PRIMARY KEY  (`id_struktur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `struktur`
-- 

INSERT INTO `struktur` VALUES (1, 1, 'img/STRUKTUR-UNIT-USAHA-UNPAB.jpg');
INSERT INTO `struktur` VALUES (2, 2, 'img/STRUKTUR-UNIT-USAHA-UNPAB.jpg');
INSERT INTO `struktur` VALUES (3, 3, 'img/STRUKTUR-UNIT-USAHA-UNPAB.jpg');
INSERT INTO `struktur` VALUES (4, 4, 'img/STRUKTUR-UNIT-USAHA-UNPAB.jpg');
INSERT INTO `struktur` VALUES (5, 5, 'img/STRUKTUR-UNIT-USAHA-UNPAB.jpg');
INSERT INTO `struktur` VALUES (6, 6, 'img/STRUKTUR-UNIT-USAHA-UNPAB.jpg');
INSERT INTO `struktur` VALUES (7, 7, 'img/STRUKTUR-UNIT-USAHA-UNPAB.jpg');

-- --------------------------------------------------------

-- 
-- Table structure for table `tugas_tj`
-- 

CREATE TABLE `tugas_tj` (
  `id_tugas_tj` smallint(11) NOT NULL,
  `id_unit` smallint(11) NOT NULL,
  `id_karyawan` smallint(6) NOT NULL,
  `tugas` text NOT NULL,
  `tgg_jwb` text NOT NULL,
  PRIMARY KEY  (`id_tugas_tj`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `tugas_tj`
-- 

INSERT INTO `tugas_tj` VALUES (1, 1, 8, 'Develop and nurture business units to grow and evolve so that it can serve the needs All Pancabudi UniversityÂ Communities.', 'Responsible for the running of all business units at the Pancabudi DevelopmentÂ University.');
INSERT INTO `tugas_tj` VALUES (2, 1, 9, 'as an effort to achieve success in achieving goals both individually and within the organization.', 'responsible for managing the employee cycle. Starting from recruiting, hiring, orientation, training, firing employees and managing employee benefits.');
INSERT INTO `tugas_tj` VALUES (3, 1, 3, 'Control the administration of incoming mail, in accordance with procedures and applicable conditions, in order to facilitateÂ searching.', 'Streamline the administration of incoming and outgoing mail, documentationÂ ofÂ mail,Â etc.');
INSERT INTO `tugas_tj` VALUES (4, 1, 10, 'Run and operate the life wheels of business units as efficiently and effectivelyÂ asÂ possible.', 'Responsible for assisting business planning and decision making by advising with appropriate financialÂ advice.');

-- --------------------------------------------------------

-- 
-- Table structure for table `unit`
-- 

CREATE TABLE `unit` (
  `id_unit` smallint(11) NOT NULL,
  `unit` varchar(30) NOT NULL,
  `tentang` varchar(300) NOT NULL,
  `foto` varchar(300) NOT NULL,
  `gambar` varchar(300) NOT NULL,
  PRIMARY KEY  (`id_unit`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `unit`
-- 

INSERT INTO `unit` VALUES (1, 'Beranda Cafe', '           Beranda Cafe is a cafe that provides various types of food and drinks', ' img/Logo_New_Branda_1.jpg', ' img/beranda.png');
INSERT INTO `unit` VALUES (2, 'Padimart', '    Padimart is a mini market that sells a variety of snacks and drinks', ' img/padimart.jpg', ' img/1688698961492.jpg');
INSERT INTO `unit` VALUES (3, 'Fotocopy', '   Photocopying is a business that provides copying, printing and other services.', ' img/logo unit usaha.png', ' img/IMG_20230525_095227.jpg');
INSERT INTO `unit` VALUES (4, 'Juman Bakery', '  Juman Bakery is a business that produces various types of cakes, breads and fried foods.', ' img/01 LOGO _ A3.png', ' img/IMG_20230525_100000.jpg');
INSERT INTO `unit` VALUES (5, 'Laziz Centro', '   Laziz Centro is a business that provides various types of food and drinks.', ' img/laziz png.png', ' img/IMG_20230525_101115.jpg');
INSERT INTO `unit` VALUES (6, 'Warung Kongsi', '   Warung Kongsi is a business that provides a variety of food and drinks.', ' img/warung kongsi.jpg', ' img/IMG20230525094730.jpg');
INSERT INTO `unit` VALUES (7, 'Toko Kongsi', '  Toko Kongsi is a business that provides various types of snacks and drinks.', ' img/shop corner.png', ' img/IMG_20230525_094400.jpg');

-- --------------------------------------------------------

-- 
-- Table structure for table `visi_misi`
-- 

CREATE TABLE `visi_misi` (
  `id_visi_misi` smallint(11) NOT NULL,
  `id_unit` smallint(11) NOT NULL,
  `visi` tinytext NOT NULL,
  `misi` tinytext NOT NULL,
  PRIMARY KEY  (`id_visi_misi`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `visi_misi`
-- 

INSERT INTO `visi_misi` VALUES (1, 1, 'To become a professional business unit division in the business and business sector that prioritizes optimal service for customer satisfaction', 'Recruiting skilled and professional human resources <br>Conduct employee training to achieve optimal service <br>Accommodate the desires of Business Unit customers');
INSERT INTO `visi_misi` VALUES (2, 2, 'To become a professional business unit division in the business and business sector that prioritizes optimal service for customer satisfaction	', 'Recruiting skilled and professional human resources <br>Conduct employee training to achieve optimal service <br>Accommodate the desires of Business Unit customers');
INSERT INTO `visi_misi` VALUES (3, 3, 'To become a professional business unit division in the business and business sector that prioritizes optimal service for customer satisfaction	', 'Recruiting skilled and professional human resources <br>Conduct employee training to achieve optimal service <br>Accommodate the desires of Business Unit customers');
INSERT INTO `visi_misi` VALUES (4, 4, 'To become a professional business unit division in the business and business sector that prioritizes optimal service for customer satisfaction	', 'Recruiting skilled and professional human resources <br>Conduct employee training to achieve optimal service <br>Accommodate the desires of Business Unit customers');
INSERT INTO `visi_misi` VALUES (5, 5, 'To become a professional business unit division in the business and business sector that prioritizes optimal service for customer satisfaction	', 'Recruiting skilled and professional human resources <br>Conduct employee training to achieve optimal service <br>Accommodate the desires of Business Unit customers');
INSERT INTO `visi_misi` VALUES (6, 6, 'To become a professional business unit division in the business and business sector that prioritizes optimal service for customer satisfaction	', 'Recruiting skilled and professional human resources <br>Conduct employee training to achieve optimal service <br>Accommodate the desires of Business Unit customers');
INSERT INTO `visi_misi` VALUES (7, 7, 'To become a professional business unit division in the business and business sector that prioritizes optimal service for customer satisfaction	', 'Recruiting skilled and professional human resources <br>Conduct employee training to achieve optimal service <br>Accommodate the desires of Business Unit customers');

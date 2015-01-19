-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2015 at 03:12 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lowongankita`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataadmin`
--

CREATE TABLE IF NOT EXISTS `dataadmin` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `NmLengkap` varchar(30) NOT NULL,
  `JnKelamin` varchar(10) NOT NULL,
  `TglLahir` varchar(20) NOT NULL,
  `Almt` text NOT NULL,
  `Email` varchar(50) NOT NULL,
  `NoHP` varchar(20) NOT NULL,
  `TglUbah` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `dataadmin`
--

INSERT INTO `dataadmin` (`user_id`, `username`, `password`, `NmLengkap`, `JnKelamin`, `TglLahir`, `Almt`, `Email`, `NoHP`, `TglUbah`) VALUES
(1, 'admin', 'admin', 'adminitrastor', 'Laki-laki', '19 January 2000', 'jl.arjuna', 'admin@gmail.com', '089667138589', '19 January 2015');

-- --------------------------------------------------------

--
-- Table structure for table `datacalonpekerja`
--

CREATE TABLE IF NOT EXISTS `datacalonpekerja` (
  `calonpekerja_id` int(4) NOT NULL AUTO_INCREMENT,
  `usernamecalonpekerja` varchar(20) NOT NULL,
  `password` varchar(70) NOT NULL,
  `namacalonpekerja` varchar(300) NOT NULL,
  `kotacalonpekerja` varchar(100) NOT NULL,
  `provinsicalonpekerja` varchar(100) NOT NULL,
  `alamatcalonpekerja` varchar(300) NOT NULL,
  `emailcalonpekerja` varchar(70) NOT NULL,
  `noteleponcalonpekerja` varchar(14) NOT NULL,
  `pendidikanterakhir` varchar(150) NOT NULL,
  `skilldankeahlian` varchar(300) NOT NULL,
  PRIMARY KEY (`calonpekerja_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `datacalonpekerja`
--

INSERT INTO `datacalonpekerja` (`calonpekerja_id`, `usernamecalonpekerja`, `password`, `namacalonpekerja`, `kotacalonpekerja`, `provinsicalonpekerja`, `alamatcalonpekerja`, `emailcalonpekerja`, `noteleponcalonpekerja`, `pendidikanterakhir`, `skilldankeahlian`) VALUES
(1, 'gazan', '321273', 'gazan san vigaz', 'semarang', 'jawatengah', 'jl.arjuna 30', 'gazan@gmail.com', '089999999999', 'SMK', 'teknisi'),
(4, 'asep', '321273', 'Asep Hillda', 'Semarang', 'Jawa Tengah', 'Jl. Garuda no.27', 'asep@gmail.com', '089667145776', 'SMK', 'Teknisi'),
(12, 'angga', '321273', 'angga mulyanto', 'semarang', 'jawa tengah', 'jl. manggata no 29 rt.02 rw.03', 'angga1994@gmail.com', '085836274568', 'SMK', 'Teknisi');

-- --------------------------------------------------------

--
-- Table structure for table `datacurriculumvitae`
--

CREATE TABLE IF NOT EXISTS `datacurriculumvitae` (
  `curriculum_id` int(15) NOT NULL AUTO_INCREMENT,
  `nama` varchar(300) NOT NULL,
  `tempattanggallahir` varchar(100) NOT NULL,
  `jeniskelamin` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `tinggibadan` varchar(50) NOT NULL,
  `beratbadan` varchar(50) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `notelepon` varchar(14) NOT NULL,
  `status` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sekolahdasar` varchar(100) NOT NULL,
  `smp` varchar(100) NOT NULL,
  `sma` varchar(100) NOT NULL,
  `perguruantinggi1` varchar(300) NOT NULL,
  `perguruantinggi2` varchar(300) NOT NULL,
  `perguruantinggi3` varchar(300) NOT NULL,
  `kemampuan1` varchar(300) NOT NULL,
  `kemampuan2` varchar(300) NOT NULL,
  `kemampuan3` varchar(300) NOT NULL,
  `pengalaman1` varchar(300) NOT NULL,
  `pengalaman2` varchar(300) NOT NULL,
  `pengalaman3` varchar(300) NOT NULL,
  `lowongan_id` int(15) NOT NULL,
  `calonpekerja_id` int(11) NOT NULL,
  `statuslamaran` varchar(100) NOT NULL,
  PRIMARY KEY (`curriculum_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `datacurriculumvitae`
--

INSERT INTO `datacurriculumvitae` (`curriculum_id`, `nama`, `tempattanggallahir`, `jeniskelamin`, `agama`, `tinggibadan`, `beratbadan`, `alamat`, `notelepon`, `status`, `email`, `sekolahdasar`, `smp`, `sma`, `perguruantinggi1`, `perguruantinggi2`, `perguruantinggi3`, `kemampuan1`, `kemampuan2`, `kemampuan3`, `pengalaman1`, `pengalaman2`, `pengalaman3`, `lowongan_id`, `calonpekerja_id`, `statuslamaran`) VALUES
(25, 'gazan san vigaz', 'semarang, 26 april 1994', 'laki - laki', 'islam', '170cm', '60kg', 'jl.arjuna 30', '089999999999', 'belum menikah', 'gazan@gmail.com', 'sd negeri 2 semarang', 'smp negeri 4 semarang', 'smk negeri 1 semarang', '', '', '', 'teknisi komputer', '', '', '', '', '', 8, 1, ''),
(26, 'angga mulyanto', 'semarang, 20 april 1994', 'laki - laki', 'islam', '160cm', '55kg', 'jl. manggata no 29 rt.02 rw.03', '085836274568', 'belum menikah', 'angga1994@gmail.com', 'sd negeri 5 semarang', 'smp negeri 4 semarang', 'smk negeri 3 semarang', '', '', '', 'teknisi komputer', '', '', '', '', '', 8, 12, ''),
(28, 'Asep Hillda', 'semarang, 18 januari 1994', 'laki - laki', 'islam', '160cm', '60kg', 'Jl. Garuda no.27', '089667145776', 'belum menikah', 'asep@gmail.com', 'sd negeri 2 semarang', 'smp negeri 4 semarang', 'smk negeri 5 semarang', '', '', '', 'teknisi komputer', '', '', '', '', '', 10, 4, 'diterima');

-- --------------------------------------------------------

--
-- Table structure for table `datadokumen`
--

CREATE TABLE IF NOT EXISTS `datadokumen` (
  `dokumen_id` int(15) NOT NULL AUTO_INCREMENT,
  `juduldokumenlamaran` varchar(100) NOT NULL,
  `link_dokumenlamaran` varchar(200) NOT NULL,
  `juduldokumenijazah` varchar(100) NOT NULL,
  `link_dokumenijazah` varchar(200) NOT NULL,
  `juduldokumenskillpendukung` varchar(100) NOT NULL,
  `link_dokumenskillpendukung` varchar(200) NOT NULL,
  `juduldokumenfoto` varchar(100) NOT NULL,
  `link_dokumenfoto` varchar(200) NOT NULL,
  `curriculum_id` int(15) NOT NULL,
  PRIMARY KEY (`dokumen_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `datadokumen`
--

INSERT INTO `datadokumen` (`dokumen_id`, `juduldokumenlamaran`, `link_dokumenlamaran`, `juduldokumenijazah`, `link_dokumenijazah`, `juduldokumenskillpendukung`, `link_dokumenskillpendukung`, `juduldokumenfoto`, `link_dokumenfoto`, `curriculum_id`) VALUES
(3, 'suratlamarangazansanvigaz.docx', 'dokumenlamaran/suratlamarangazansanvigaz.docx', 'ijazahgazansanvigaz.jpg', 'dokumenijazah/ijazahgazansanvigaz.jpg', 'sertifikatgazansanvigaz.jpg', 'dokumenskillpendukung/sertifikatgazansanvigaz.jpg', 'fotogazansanvigaz.jpg', 'dokumenfoto/fotogazansanvigaz.jpg', 25),
(4, 'suratlamaranangga.docx', 'dokumenlamaran/suratlamaranangga.docx', 'ijazahangga.jpg', 'dokumenijazah/ijazahangga.jpg', 'sertifikatangga.jpg', 'dokumenskillpendukung/sertifikatangga.jpg', 'fotoangga.jpg', 'dokumenfoto/fotoangga.jpg', 26),
(5, 'suratlamaranasep.docx', 'dokumenlamaran/suratlamaranasep.docx', 'ijazahasep.jpg', 'dokumenijazah/ijazahasep.jpg', 'ijazahasep.jpg', 'dokumenskillpendukung/ijazahasep.jpg', 'fotoasep.jpg', 'dokumenfoto/fotoasep.jpg', 28);

-- --------------------------------------------------------

--
-- Table structure for table `datakomen`
--

CREATE TABLE IF NOT EXISTS `datakomen` (
  `komen_id` int(3) NOT NULL AUTO_INCREMENT,
  `lowongan_id` int(15) NOT NULL,
  `nama` varchar(30) NOT NULL DEFAULT '',
  `komentar` varchar(250) NOT NULL DEFAULT '',
  `date` datetime NOT NULL,
  `url` varchar(60) NOT NULL,
  PRIMARY KEY (`komen_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `datakomen`
--

INSERT INTO `datakomen` (`komen_id`, `lowongan_id`, `nama`, `komentar`, `date`, `url`) VALUES
(24, 8, 'starcom', 'oj', '2015-01-17 18:51:18', 'detaillowongan.php?id=8'),
(25, 8, 'starcom', 'coba men', '2015-01-17 18:57:38', 'detaillowongan.php?id=8'),
(26, 8, 'starcom', 'coba lagi', '2015-01-17 19:02:01', 'detaillowongan.php?id=8'),
(29, 8, 'starcom', 'alc', '2015-01-17 19:15:30', 'detaillowongan.php?id=8'),
(30, 8, 'gazan san vigaz', 'coba pekerja', '2015-01-17 19:23:16', 'detaillowongan.php?id=8');

-- --------------------------------------------------------

--
-- Table structure for table `datalowongan`
--

CREATE TABLE IF NOT EXISTS `datalowongan` (
  `lowongan_id` int(15) NOT NULL AUTO_INCREMENT,
  `namapekerjaan` varchar(100) NOT NULL,
  `deskripsipekerjaan` varchar(300) NOT NULL,
  `syaratpekerjaan` varchar(300) NOT NULL,
  `jenispekerjaan` varchar(100) NOT NULL,
  `jumlahorangyangdiperlukan` varchar(50) NOT NULL,
  `statuslowonganpekerjaan` varchar(100) NOT NULL,
  `perusahaan_id` int(15) NOT NULL,
  PRIMARY KEY (`lowongan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `datalowongan`
--

INSERT INTO `datalowongan` (`lowongan_id`, `namapekerjaan`, `deskripsipekerjaan`, `syaratpekerjaan`, `jenispekerjaan`, `jumlahorangyangdiperlukan`, `statuslowonganpekerjaan`, `perusahaan_id`) VALUES
(8, 'manager', 'Di butukan Pt.tayminjaya membutuhkan seorang manager', 'jujur, rajin, bertanggung jawab', 'belum diketahui', '1', 'belum terisi', 1),
(10, 'Seles', 'perusahaan kami membutuhkan beberapa seles ', 'jujur', 'kontrak', '8', 'belum terisi', 1),
(11, 'manager', 'perusahan kami membutuhkan seorang manager yang perkasa', 'jujur', 'kontrak', '1', 'belum terisi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dataperusahaan`
--

CREATE TABLE IF NOT EXISTS `dataperusahaan` (
  `perusahaan_id` int(15) NOT NULL AUTO_INCREMENT,
  `usernameperusahaan` varchar(20) NOT NULL,
  `password` varchar(70) NOT NULL,
  `namaperusahaan` varchar(100) NOT NULL,
  `emailperusahaan` varchar(70) NOT NULL,
  `noteleponperusahaan` bigint(14) NOT NULL,
  `alamatperusahaan` varchar(150) NOT NULL,
  `deskripsiperusahaan` varchar(400) NOT NULL,
  `jenispekerjaanyangadadiperusahaan` varchar(500) NOT NULL,
  PRIMARY KEY (`perusahaan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `dataperusahaan`
--

INSERT INTO `dataperusahaan` (`perusahaan_id`, `usernameperusahaan`, `password`, `namaperusahaan`, `emailperusahaan`, `noteleponperusahaan`, `alamatperusahaan`, `deskripsiperusahaan`, `jenispekerjaanyangadadiperusahaan`) VALUES
(1, 'starcom', '321273', 'starcom', 'perusahaan@gmail.com', 85555555555, 'jl, beo 20', 'hj', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE IF NOT EXISTS `posting` (
  `posting_id` int(11) NOT NULL AUTO_INCREMENT,
  `TglPost` varchar(20) NOT NULL,
  `Judul` varchar(30) NOT NULL,
  `Isi` text NOT NULL,
  `Nav` varchar(30) NOT NULL,
  PRIMARY KEY (`posting_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`posting_id`, `TglPost`, `Judul`, `Isi`, `Nav`) VALUES
(1, '19 January 2015', 'TentangKami', '<br>\r\n<br>owongankita.meximas.com adalah tugas matakuliah pemrograman internet yang di ampu oleh Bapak Abu Salam.\r\n<br>\r\n<br>lowongankita.meximas.com menawarkan satu set pelayanan perekutan tenaga kerja yang melibatkan perusahaan dan calon pekerja secara aktif.\r\n<br>\r\n<br>lowongankita.meximas.com mengelola proses perekrutan mereka melalui aplikasi berbasis web dengan perantaraan Internet.\r\n<br>\r\n<h4>Yuli Rizqianto Aldi (Ketua Kelompok.</h4>\r\nMahasiswa Universitas Dian Nuswantoro Semarang\r\n<br>Pengusung ide dan dialog antar muka web, pembagi masalah dan kendali project pembangunan web\r\n<br>\r\n<h4>Aprian Tri Mulyana (Anggota)</h4>\r\nMahasiswa Universitas Dian Nuswantoro Semarang\r\n<br>Programer dan Designer Database\r\n<h4>Ihda Mukhoyar (Anggota)</h4>\r\nMahasiswa Universitas Dian Nuswantoro Semarang\r\n<br>Programer dan Designer Database', 'TentangKami'),
(2, '19 January 2015', 'LowonganKita', '<p>website ini di buat dengan tujuan untuk menyelesaikan tugas kuliah</p>\r\n<p>Kelompok :</p>\r\n<p>1. Yuli Rizqianto Aldi (A11.2012.07091)</p>\r\n<p>2. Aprian Tri Mulyana (A11.2012.07055)</p>\r\n<p>3. Ihda Mukhoyar (A11.2012.07044)</p>\r\n<p>Deskripsi Fitur sistem :</p>\r\n<p><a href="deskripsifitursistem.php">Klik di sini</a> </p>\r\n<p>Peracangan Database</p>\r\n<p>1.<a href="database/lowongankita.sql">Database lowongankita</a></p>', 'Home'),
(4, '19 January 2015', 'Kontak', '<h2>Dartar Pembangun Halaman :</h2>\r\n				<h3>Pemrograman Internet A11.4503 Job House</h3>\r\n				<ul>\r\n					<p>NIM		: A11.2012.07091</p>\r\n					<p>Nama		: Yuli Rizqianto Aldi</p>\r\n					<p>Email	: rizkiantoaldi.yuli27@gmail.com</p>\r\n					<p>facebook : <a href="https://www.facebook.com/aldy.rizqi">Aldy</a></p>\r\n				</ul>\r\n				<ul>\r\n					<p>NIM		: A11.2012.07044</p>\r\n					<p>Nama		: Ihda Mukhoyar</p>\r\n					<p>Email	: ihdatech@gmail.com</p>\r\n					<p>facebook : <a href="https://www.facebook.com/ihda.mukhoyar.soemodiharjo.sarman">Ihda</a></p>\r\n				</ul>\r\n				<ul>\r\n					<p>NIM		: A11.2012.07055</p>\r\n					<p>Nama		: Aprian Tri Mulyana</p>\r\n					<p>Email	: aptm94@gmail.com</p>\r\n					<p>facebook : <a href="https://www.facebook.com/aptm94">Aprian</a></p>\r\n				</ul>', 'Kontak');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

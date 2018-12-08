-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2018 at 03:16 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipetor_2018`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(50) NOT NULL,
  `nama` varchar(150) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `password`, `status`) VALUES
('1990122420161224001', 'Teguh Pribadi', 'fb687657f83d4b93a41d5360046665b6', '1');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` varchar(50) NOT NULL,
  `kelas` varchar(100) DEFAULT NULL,
  `tahun_akademik` varchar(225) DEFAULT NULL,
  `semester` varchar(3) DEFAULT NULL,
  `status` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kelas`, `tahun_akademik`, `semester`, `status`) VALUES
('2016/2017MI-13', 'MI-1', '2016/2017', '3', '1'),
('2016/2017MI-43', 'MI-4', '2016/2017', '3', '1'),
('2016/2017MI-63', 'MI-6', '2016/2017', '3', '1');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_mahasiswa`
--

CREATE TABLE `kelas_mahasiswa` (
  `id_kelas` varchar(50) DEFAULT NULL,
  `id_mahasiswa` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas_mahasiswa`
--

INSERT INTO `kelas_mahasiswa` (`id_kelas`, `id_mahasiswa`) VALUES
('2016/2017MI-13', '1521024001'),
('2016/2017MI-13', '1521024002'),
('2016/2017MI-13', '1521024003'),
('2016/2017MI-13', '1521024004'),
('2016/2017MI-13', '1521024005'),
('2016/2017MI-13', '1521024006'),
('2016/2017MI-13', '1521024007'),
('2016/2017MI-13', '1521024008'),
('2016/2017MI-13', '1521024010'),
('2016/2017MI-13', '1521024011'),
('2016/2017MI-13', '1521024012'),
('2016/2017MI-13', '1521024013'),
('2016/2017MI-13', '1521024014'),
('2016/2017MI-13', '1521024015'),
('2016/2017MI-13', '1521024016'),
('2016/2017MI-13', '1521024017'),
('2016/2017MI-13', '1521024018'),
('2016/2017MI-13', '1521024019'),
('2016/2017MI-13', '1521024020'),
('2016/2017MI-13', '1521024021'),
('2016/2017MI-13', '1521024022'),
('2016/2017MI-13', '1521024023'),
('2016/2017MI-13', '1521024024'),
('2016/2017MI-13', '1521024025'),
('2016/2017MI-13', '1521024026'),
('2016/2017MI-13', '1521024027'),
('2016/2017MI-43', '1521024082'),
('2016/2017MI-43', '1521024083'),
('2016/2017MI-43', '1521024085'),
('2016/2017MI-43', '1521024086'),
('2016/2017MI-43', '1521024087'),
('2016/2017MI-43', '1521024088'),
('2016/2017MI-43', '1521024089'),
('2016/2017MI-43', '1521024090'),
('2016/2017MI-43', '1521024091'),
('2016/2017MI-43', '1521024092'),
('2016/2017MI-43', '1521024093'),
('2016/2017MI-43', '1521024094'),
('2016/2017MI-43', '1521024095'),
('2016/2017MI-43', '1521024096'),
('2016/2017MI-43', '1521024097'),
('2016/2017MI-43', '1521024098'),
('2016/2017MI-43', '1521024099'),
('2016/2017MI-43', '1521024100'),
('2016/2017MI-43', '1521024101'),
('2016/2017MI-43', '1521024102'),
('2016/2017MI-43', '1521024103'),
('2016/2017MI-43', '1521024104'),
('2016/2017MI-43', '1521024105'),
('2016/2017MI-43', '1521024107'),
('2016/2017MI-43', '1521024108'),
('2016/2017MI-63', '1521024136'),
('2016/2017MI-63', '1521024137'),
('2016/2017MI-63', '1521024138'),
('2016/2017MI-63', '1521024139'),
('2016/2017MI-63', '1521024140'),
('2016/2017MI-63', '1521024141'),
('2016/2017MI-63', '1521024142'),
('2016/2017MI-63', '1521024143'),
('2016/2017MI-63', '1521024145'),
('2016/2017MI-63', '1521024146'),
('2016/2017MI-63', '1521024147'),
('2016/2017MI-63', '1521024148'),
('2016/2017MI-63', '1521024149'),
('2016/2017MI-63', '1521024150'),
('2016/2017MI-63', '1521024151'),
('2016/2017MI-63', '1521024154'),
('2016/2017MI-63', '1521024155'),
('2016/2017MI-63', '1521024156'),
('2016/2017MI-63', '1521024157'),
('2016/2017MI-63', '1521024158'),
('2016/2017MI-63', '1521024159'),
('2016/2017MI-63', '1521024188'),
('2016/2017MI-13', '1521024009');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` varchar(10) NOT NULL,
  `nama_mahasiswa` varchar(50) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nama_mahasiswa`, `password`, `status`) VALUES
('1521024001', 'A. CHUDLORI', '38ab517d6e55c86156504f1892da843d', '1'),
('1521024002', 'ACHMAD WIMAR DWIKY WIJAYA', 'f6edaec33cccec1731c257fce387a1d0', '1'),
('1521024003', 'AGUSTIN PURWITASARI', 'd796e722cd34e7f748c1724136395778', '1'),
('1521024004', 'AHMAD ARSYAD IRHAMI', '2f420a26b12bbe4a11b9842a0b8d87aa', '1'),
('1521024005', 'ALFIAN SUGI PRIATAMA', '4076eb616e8af7336888cb25f5666271', '1'),
('1521024006', 'ARIF LATIFUDIN', '4076eb616e8af7336888cb25f5666271', '1'),
('1521024007', 'BELA EKA JULIANA', '5ec46cc3c7f0a8fda10b227e7e6b47c0', '1'),
('1521024008', 'DANANG AROFIQ', '2a7e7c20957ce0e47bb914a9a1a2f580', '1'),
('1521024009', 'DEWI CITRA KURNIA', 'c53618f51eda9dcef8ce01d5e1f07f34', '1'),
('1521024010', 'DWI MURYONO', '6dd48dc74aaf2768e7b2a3387aa2343a', '1'),
('1521024011', 'FIRDAUSSINAIM', '18d9acdfe189b4c9cfab147d225299b0', '1'),
('1521024012', 'IIN TIRTHA MANDAR MAS', '229fb5a71bef7d971c6b2772cf5b61c9', '1'),
('1521024013', 'JOKO RIYADI', '24a43e0d74918e9832902a716086c7a8', '1'),
('1521024014', 'M. AGUS BUDIANTO', 'db822be39dd429bc2c6cde5fa3114102', '1'),
('1521024015', 'MIRTHA DWI CAHYANTI', '26f43c3ca50484123f64298287b62afa', '1'),
('1521024016', 'MOCH. AJI CAHYONO', '6854aef55d422d29212622fd2d049f6e', '1'),
('1521024017', 'MOCH. ZAMRONI', 'a932d8cffaaf39695f095c1fc6c62d7c', '1'),
('1521024018', 'MUCHAMMAD ABDUL AZIS', '7ceaca99d47e674f26296f6d4edfe68c', '1'),
('1521024019', 'NASZARUDDIN LUZAIN ASHAR', '1682edc8c1a1079f2e3585a5e3cc2e57', '1'),
('1521024020', 'NUR AHMAD FAJARUDIN', 'ce4cf68eca15bd0c832b9dffee456985', '1'),
('1521024021', 'NURMALA KHOIRIZA ULFA', '238a8a6cf8c0dc9b1cb24a07218d3fc2', '1'),
('1521024022', 'RAHMAD JALALUDIN', '67fce718d26fe721d7140c6e551ab025', '1'),
('1521024023', 'RESHA AWWALIYATUL HIDAYAH', 'b8ad89a0e6210bc593b65e4a81ed8a0d', '1'),
('1521024024', 'RISZKY ARDIANZAH', 'd16b871d7250924bd56385e78d8b738b', '1'),
('1521024025', 'SABIT ALY WAFA', 'e9d4cb30d8855b889b9386848f33f87b', '1'),
('1521024026', 'SULASTRI', '72275c18411b2c97eb9799ac2b005f32', '1'),
('1521024027', 'VANDHA DWI OKTAWA', 'b729381e88afa83d92ef7440b2010ac3', '1'),
('1521024082', 'A. SHOLAHUDDIN AL AYYUBI', 'd00a512c7e4fee754ed55ec0058758a2', '1'),
('1521024083', 'ADI DWI AHMAD SANTOSO', '7c53a0f84418b43de121e95f4cfe3d04', '1'),
('1521024085', 'AMINATUN NAFIA', '55eedbb34a43d6597da255bc9ef9bfde', '1'),
('1521024086', 'ANANG WIDIANTO', '72cf3a2132d1824b26e05ad7cbdd6573', '1'),
('1521024087', 'BAYU AMALIYA PUTRI SOLIKAH', 'c7d54dd3fcb062ddf1066809554b72b1', '1'),
('1521024088', 'DAVIED HERMANTO', '9873a0108c7dc40574e0b0062af0e42d', '1'),
('1521024089', 'DESITA AYU SULISTYANA', 'ba2a9da4f530d72166de416ec10a0cf7', '1'),
('1521024090', 'DWI BUDIARTI', 'aa1ef3aafddd322bf7f6dcee1e4c288a', '1'),
('1521024091', 'ENDI RIWANTO', '5f7d86935df523c60831f98574061c93', '1'),
('1521024092', 'GIOVANNO PRATAMA PUTRA', '74fbf638c86e1092c31f9cd3ec456bac', '1'),
('1521024093', 'KAMIM AHMAD YUSUF ', '73b2500f88554b7d25f25705a6b2b6d4', '1'),
('1521024094', 'KHUSNUL KHOTIMAH', '2a9587819ffe93353d845d850e361e3a', '1'),
('1521024095', 'M. EDHI PURWANTO', 'aad38b3c489b8a1ed3a5ef1aeb37b78a', '1'),
('1521024096', 'M. YUNNUS WAHYU UTOMO', '25aa1d955f1b555eacd58ee83564ece8', '1'),
('1521024097', 'MOCH. IMAM BUKHORI', 'c31b1a202625c7eb502c9a9c1ba17b16', '1'),
('1521024098', 'MOH. KHOIRUL HUDA', 'fdd3e83f82b28bf120c8c4c37b811c3a', '1'),
('1521024099', 'MUHAMMAD HASIIB NOOR', 'c65f096847dcb75812fdc6115e5629ae', '1'),
('1521024100', 'NOLA IRFANA MIN CHATILAH', '17e19ccc967c4f179dd0bd09b06e488a', '1'),
('1521024101', 'PARDINA MEIGRASARI', '7f1d5e9efac27767371ef69b9a00c803', '1'),
('1521024102', 'PETRICK SENO AJI', '603f81030a01ba4a016983e757da0ea6', '1'),
('1521024103', 'RAKIH YANUAR YUNUS', '5a0c837da9767b4972296bfa17a44dba', '1'),
('1521024104', 'ROFIU DARAJAT', '960f28c9c712bea3f3f2e1e191812a4d', '1'),
('1521024105', 'SETIANING RAHAYU', '28b7417e565c3822528f5944c3afd6be', '1'),
('1521024107', 'WAWAN BUDI SUSETYO', 'd003c1a07740d90abdc8e07b613bf51f', '1'),
('1521024108', 'YULI SETIYOWATI', '98597c5b5abba87d6bf37e5c87ee4e9a', '1'),
('1521024109', 'ABDUL ROSYID', 'f25412bf09de5aba382f94d1f2b0f5b1', '0'),
('1521024136', 'ABDUL ROZAK ROMADONI', '6aa703fb6e379c8504343d2c93b70cb5', '1'),
('1521024137', 'ADITYA PUTRA IRFANDI', '3992f767379cbb9538798810c1f0780a', '1'),
('1521024138', 'AHMAD DWI ALFIAN', '1039fadb75c97f00112fccdc7074105d', '1'),
('1521024139', 'ALFIAN DWICAHYA', '82d9efc0e4127dba3cf8b76f0c6f9eb5', '1'),
('1521024140', 'ARINI ULFA RAHMAWATI', 'ca79b025a2e75f4d604cfa9a2b23c511', '1'),
('1521024141', 'DADANG KURNIA SANDI', '1fbe96b1732ef57586d58c38e85c6354', '1'),
('1521024142', 'DENNIS PANDU UTOMO', '8e332edf28605694c5b134bf1ad9ad99', '1'),
('1521024143', 'DEVI TIANA KARTIKA SARI', 'ea5ce321f9a7f539b8e0e9805cf35df9', '1'),
('1521024145', 'EREN YOGA ERIYANA', '18de01032591392e9027ff3934553ec9', '1'),
('1521024146', 'HERNI SUSTIYAWATI', '69d12ef2bc5e843e34f414d8bb36c2ac', '1'),
('1521024147', 'KRISNA PONCO HUTOMO', '37cf21a1d3a9f72aa755b5e0af6f0ed9', '1'),
('1521024148', 'M. RIZAL', '75e4182f16732a3f80f585dc7d69d6e7', '1'),
('1521024149', 'M. ZEIN ZOMI HIKA PUTRA', 'c065d086c42697765c8ea07893b3eaf6', '1'),
('1521024150', 'MEI DINA SETIA MEGA P.', 'c38435fc82c67690aa72262077fea9ec', '1'),
('1521024151', 'MOCH. SANDY AGUS W.', '85bd5523fa88150c8d0c2543f4d4f3ac', '1'),
('1521024154', 'MUHAMMAD WAHYUDIN ARIANTO', '9d6e4ca2df4ff924a0163ed4aa252609', '1'),
('1521024155', 'PRIANTO AGUS SUSILO', 'c4d480cb7af7cbe18de24dca0dbbdf71', '1'),
('1521024156', 'RIAN WIGUNA', 'ec2bc329d6d1ba4252345b69d0e24b3d', '1'),
('1521024157', 'RUDI BACHTIAR', '8e570e5ea5883010a62049abe6083d70', '1'),
('1521024158', 'SITI KHOIRUN NISA', 'eb3dc3b3469d1eaf27a310def0089ce2', '1'),
('1521024159', 'TIKA WIDYA OKTAVIA', '452a1d2355a34146ca9818939d559876', '1'),
('1521024188', 'DICKY CIPTO RAHARJO', '68016d6bba42c159731605c87dbb685c', '1');

-- --------------------------------------------------------

--
-- Table structure for table `presentasi`
--

CREATE TABLE `presentasi` (
  `id_presentasi` int(11) NOT NULL,
  `id_mahasiswa` varchar(50) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(2) NOT NULL,
  `id_admin` varchar(50) NOT NULL,
  `analisis_hasil` bigint(20) DEFAULT NULL,
  `analisis_pemahaman` bigint(20) DEFAULT NULL,
  `analisis_komentar` text,
  `desain_hasil` bigint(20) DEFAULT NULL,
  `desain_pemahaman` bigint(20) DEFAULT NULL,
  `desain_komentar` text,
  `implementasi_hasil` bigint(20) DEFAULT NULL,
  `implementasi_pemahaman` bigint(20) DEFAULT NULL,
  `implementasi_komentar` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presentasi`
--

INSERT INTO `presentasi` (`id_presentasi`, `id_mahasiswa`, `waktu`, `status`, `id_admin`, `analisis_hasil`, `analisis_pemahaman`, `analisis_komentar`, `desain_hasil`, `desain_pemahaman`, `desain_komentar`, `implementasi_hasil`, `implementasi_pemahaman`, `implementasi_komentar`) VALUES
(2, '1521024023', '2017-01-17 10:32:36', '1', '1990122420161224001', 75, 70, 'kurang persiapan, banyak hal copas tanpa penyaringan', 70, 70, 'kurang memahami', 0, 0, 'duplikasi'),
(3, '1521024018', '2017-01-17 08:12:43', '1', '1990122420161224001', 78, 74, 'dipertajaam lagi ', 60, 60, 'tidak ditampilkan', 75, 70, 'ku'),
(4, '1521024025', '2017-01-17 08:21:27', '1', '1990122420161224001', 60, 0, 'tidak menyampaikan', 70, 65, 'kurang memahami, konsepnya kurang matang', 0, 0, 'belum membuat'),
(5, '1521024004', '2017-01-17 08:29:35', '1', '1990122420161224001', 75, 70, 'kurang mendalami analisisi program', 65, 65, 'tidak ada fitur utama', 70, 60, 'belum '),
(6, '1521024011', '2017-01-17 08:37:36', '1', '1990122420161224001', 65, 60, 'kurang memahami', 68, 65, 'kurang memahami UML dan konsep didalamnya', 0, 0, 'belum'),
(7, '1521024003', '2017-01-17 08:45:43', '1', '1990122420161224001', 76, 70, 'penejlasan kurang dalam', 60, 60, 'tidak menampilkan UML', 60, 0, ''),
(8, '1521024014', '2017-01-17 09:07:38', '1', '1990122420161224001', 80, 80, 'pemahaman bagus, PD dan informatifnya belum', 75, 79, 'cukup bagus, diperdalam pemahamannya', 60, 60, 'belum\r\n'),
(9, '1521024010', '2017-01-17 09:08:35', '1', '1990122420161224001', 70, 70, 'cukup memahami, diperdalam pemahamannya', 65, 70, '', 60, 60, ''),
(10, '1521024008', '2017-01-17 09:16:23', '1', '1990122420161224001', 70, 70, 'cukup', 75, 70, 'pemahamannya diperdalam', 73, 70, ''),
(11, '1521024017', '2017-01-17 09:24:38', '1', '1990122420161224001', 76, 80, 'cukup jelas penjelasannya, diperdalam permahamnnya', 78, 70, '', 78, 79, ''),
(12, '1521024006', '2017-01-17 10:05:31', '1', '1990122420161224001', 68, 65, 'kurang memahami', 67, 68, 'kurang memahami', 70, 70, 'belum'),
(13, '1521024015', '2017-01-17 10:38:39', '1', '1990122420161224001', 75, 77, 'informatif', 70, 65, 'belum', 0, 0, 'duplikasi'),
(14, '1521024013', '2017-01-17 10:21:45', '1', '1990122420161224001', 79, 80, 'memahami', 78, 78, '', 79, 80, ''),
(15, '1521024027', '2017-01-17 10:32:27', '1', '1990122420161224001', 74, 73, 'kurang dalam pemahamannya', 72, 71, 'penjelasan tidak sinkron', 0, 0, 'duplikasi'),
(16, '1521024007', '2017-01-17 10:38:09', '1', '1990122420161224001', 74, 79, 'to dopoint pada pertanyaan [diperhatikan]', 73, 70, '', 0, 0, ''),
(17, '1521024002', '2017-01-17 10:45:54', '1', '1990122420161224001', 70, 70, 'analisisnya diperdalam', 75, 70, '', 0, 0, 'dupikasi'),
(18, '1521024012', '2017-01-17 10:55:51', '1', '1990122420161224001', 70, 71, 'kurang memahami', 70, 70, '', 0, 0, 'duplikasi'),
(19, '1521024024', '2017-01-17 11:02:56', '1', '1990122420161224001', 70, 70, 'diperdalam lagi pemahamannya', 71, 70, 'belum terdapat logout', 0, 0, ''),
(20, '1521024138', '2017-01-18 07:56:38', '1', '1990122420161224001', 80, 85, 'tanpa slide tapi konsepnya jelas', 78, 83, 'hasilnya belum dipersiapkan, penjelasan clear', 75, 75, 'belum maksimal jadinya'),
(21, '1521024188', '2017-01-18 08:05:24', '1', '1990122420161224001', 78, 78, 'oke', 73, 73, 'file bermasalah', 60, 60, 'aplikasi berekstensi html, tanpa pemrograman'),
(22, '1521024009', '2017-01-18 08:13:30', '1', '1990122420161224001', 77, 78, 'terwakili', 76, 76, 'desain tidak mewakili analsiis secara keseluruhan', 73, 73, 'aplikasi belum clear banget'),
(23, '1521024001', '2017-01-18 08:22:10', '1', '1990122420161224001', 70, 70, 'kurang pemahaman terhadap sistem', 70, 70, 'tidak sinkron antara analisis dan desain', 68, 68, ''),
(24, '1521024141', '2017-01-18 08:30:23', '1', '1990122420161224001', 70, 70, 'kurang mendalami projek sehingga jawaban kurang sesuai pertanyaan', 70, 70, 'belum mewakili analisis', 70, 70, 'belum clear'),
(25, '1521024158', '2017-01-18 08:38:42', '1', '1990122420161224001', 72, 77, 'hasil belum maksimal, padahal analogi sudah baik', 70, 70, 'desain belum', 70, 70, 'belum clear'),
(26, '1521024157', '2017-01-18 08:46:48', '1', '1990122420161224001', 70, 70, 'cukup kurang pemahamanannya', 70, 70, 'kurang mewakili analisi', 75, 75, ''),
(27, '1521024147', '2017-01-18 08:54:51', '1', '1990122420161224001', 70, 70, 'pemahamannya dipertajam lagi', 70, 70, 'pemahaman dipertajam dan analsiisi diperdetail', 70, 70, 'belum clear'),
(28, '1521024146', '2017-01-18 09:02:54', '1', '1990122420161224001', 69, 69, 'belum memahami secara keseluruhan', 65, 65, 'desain UML belum maksimal', 66, 66, 'belum clear'),
(29, '1521024149', '2017-01-18 09:37:05', '1', '1990122420161224001', 85, 85, 'pertanyaan dapat diterima dan dijawab dengan informatif serta jelas', 85, 85, 'clear', 80, 80, 'belum clear betul'),
(30, '1521024151', '2017-01-18 09:45:08', '1', '1990122420161224001', 60, 60, 'kurang mendalami project', 60, 60, 'belum memahami', 60, 60, 'kurang memahami script '),
(31, '1521024142', '2017-01-18 09:55:30', '1', '1990122420161224001', 80, 80, 'konsepnya dipahami', 75, 75, 'cukup', 70, 80, 'inovasinya boleh, tetapi script nya masih html'),
(32, '1521024140', '2017-01-18 10:03:19', '1', '1990122420161224001', 60, 60, 'belum tahu (katanya_', 60, 60, 'baru mbuat', 60, 60, 'tidak paham'),
(33, '1521024156', '2017-01-18 10:11:21', '1', '1990122420161224001', 60, 60, 'kurang memahami alurnya', 60, 60, 'kurang paham analisis sistem informasinya sehingga pengetahuan terait programnya belum jelas', 60, 60, 'analisis dan desain = kurang sehingga jalannya program belum paham'),
(34, '1521024154', '2017-01-18 10:19:44', '1', '1990122420161224001', 78, 78, 'cukup', 74, 74, 'cukup kurang', 73, 73, 'penjelasan kurang mengena'),
(35, '1521024150', '2017-01-18 10:28:23', '1', '1990122420161224001', 70, 70, 'cukup', 70, 70, 'cukup', 70, 70, 'cukup'),
(36, '1521024145', '2017-01-18 10:36:42', '1', '1990122420161224001', 80, 80, 'memahami konsep', 73, 73, 'cukup', 72, 72, 'belum cle'),
(37, '1521024137', '2017-01-18 10:44:44', '1', '1990122420161224001', 75, 75, 'diperdalam pemahamannya', 75, 80, 'cukup memahami walaupun pekerjaan keliru', 75, 80, 'cukup paham'),
(38, '1521024155', '2017-01-18 10:52:46', '1', '1990122420161224001', 65, 65, 'kurang memahami', 65, 65, 'kurang memahami', 65, 65, 'kurang memahami'),
(39, '1521024136', '2017-01-18 11:01:08', '1', '1990122420161224001', 70, 78, 'hasilnya kurang tetapi wawasannya cukup', 70, 70, 'cukup', 70, 70, 'belum ada fitur utama'),
(40, '1521024159', '2017-01-18 11:09:14', '1', '1990122420161224001', 66, 66, 'kurang memahami', 66, 66, 'kurang memahami', 66, 66, 'kurang memahami'),
(41, '1521024139', '2017-01-19 14:50:11', '1', '1990122420161224001', 80, 83, 'memahami', 80, 80, 'memahami', 77, 78, 'cukup memahami'),
(42, '1521024091', '2017-01-30 07:49:58', '1', '1990122420161224001', 60, 60, 'kurang paham', 50, 50, 'kurang paham', 50, 50, 'kurang paham'),
(43, '1521024082', '2017-01-30 07:59:34', '1', '1990122420161224001', 55, 55, 'kurang memahami', 50, 50, 'kurang memahami', 50, 50, 'kurang paham, aplikasi belum ja'),
(44, '1521024096', '2017-01-30 08:08:50', '1', '1990122420161224001', 65, 65, 'penjelasan awal pd', 50, 50, 'kurang maksimal', 65, 65, 'kurang maksimal'),
(45, '1521024100', '2017-01-30 08:20:26', '1', '1990122420161224001', 55, 55, 'kurang memahami dan jeli dalam analisis', 50, 50, 'analisis dan desain kurang ', 40, 40, 'alasan tidak sesuai (banget, khusus soal html)'),
(46, '1521024097', '2017-01-30 08:28:50', '1', '1990122420161224001', 65, 65, 'kurang memahami, sepertinya kurang persiapan terkait materi', 50, 50, 'kurang memahami dan hasil kurang maksimal', 68, 68, 'hasil lumayan, kurang kontribusi'),
(47, '1521024087', '2017-01-30 08:35:59', '1', '1990122420161224001', 40, 40, 'tidak memiliki pendapat', 40, 40, 'tidak memiliki pendapat', 40, 40, 'tidak memiliki pendapat dan belum selesai aplikasinya'),
(48, '1521024102', '2017-01-30 08:42:52', '1', '1990122420161224001', 50, 50, 'pemahamanan kurang', 50, 50, 'pemahaman kurang', 40, 40, 'aplikasi masih html'),
(49, '1521024086', '2017-01-30 08:49:50', '1', '1990122420161224001', 60, 60, 'walalupun bisa sharing masalah tetapi kurang memahami', 50, 50, 'jelasnya belum memahami', 40, 40, 'html'),
(50, '1521024083', '2017-01-30 09:01:41', '1', '1990122420161224001', 50, 50, 'kurang memahami', 55, 55, 'kurang memahami', 55, 55, 'kurang memahami'),
(51, '1521024094', '2017-01-30 09:07:34', '1', '1990122420161224001', 40, 40, 'belum persiapan dengan maksimal', 35, 35, 'belum persiapan dengan maksimal', 35, 35, 'belum persiapan dengan maksimal'),
(52, '1521024089', '2017-01-30 09:15:39', '1', '1990122420161224001', 50, 50, 'masih bisa diajak sharingwalaupun nggak dong', 50, 50, 'kurang memahami', 40, 40, 'berbasis html'),
(53, '1521024108', '2017-01-30 09:22:46', '1', '1990122420161224001', 40, 40, 'belum memahami poll', 40, 40, 'belum memahami poll', 40, 40, 'belum memahami poll'),
(54, '1521024105', '2017-01-30 09:30:51', '1', '1990122420161224001', 60, 60, 'pemahaman kurang maksimal', 60, 60, 'desain sudah lumayan', 50, 50, 'aplikasi masih ada yg html'),
(55, '1521024085', '2017-01-30 09:56:51', '1', '1990122420161224001', 55, 55, 'kurang memahami', 50, 50, 'belum clear', 40, 40, ''),
(56, '1521024101', '2017-01-30 10:05:39', '1', '1990122420161224001', 50, 50, 'kuarng memahami', 50, 50, 'kuarng memahami dan tidak sinkron dengan analisis', 40, 40, 'masih ada html dan tidak sinkron'),
(57, '1521024099', '2017-01-30 10:24:55', '1', '1990122420161224001', 65, 65, 'lumayan memahami', 78, 78, 'memahami konsep dan aplikastif', 70, 70, 'oke'),
(58, '1521024093', '2017-01-30 10:33:12', '1', '1990122420161224001', 50, 50, 'belum memahami', 45, 45, 'belum memahami', 45, 45, 'akhirnya belum memahami juga dengan maksimal terkait projectnya'),
(59, '1521024092', '2017-01-30 10:40:08', '1', '1990122420161224001', 70, 70, 'penjelasan runtut', 60, 60, 'lumayan', 60, 60, ''),
(60, '1521024103', '2017-01-30 10:47:34', '1', '1990122420161224001', 70, 70, 'konsep dipahami', 65, 65, 'konsep dipahami', 65, 65, 'luamyan'),
(61, '1521024090', '2017-01-30 10:57:08', '1', '1990122420161224001', 50, 50, 'kurang memahami', 55, 55, 'kurang memahami', 40, 40, 'kurang memahami'),
(62, '1521024095', '2017-01-30 11:04:15', '1', '1990122420161224001', 50, 50, 'pemahaman kurang', 30, 30, 'belum memahami', 60, 60, 'cukup kelihatan'),
(63, '1521024143', '2017-01-30 11:11:38', '1', '1990122420161224001', 60, 60, 'pengetahuan konsep aplikasi cuku[', 50, 60, 'lumayan', 60, 60, 'belum clear'),
(64, '1521024016', '2017-01-30 11:18:35', '1', '1990122420161224001', 50, 50, 'konsep analisisnya perlu ditingkatkan', 50, 50, 'desain belum menjawab analisis secara jelas', 45, 45, 'belum clear'),
(65, '1521024021', '2017-01-30 11:26:30', '1', '1990122420161224001', 50, 50, 'belum memahami secara detail', 50, 50, 'belum memahami secara detail', 50, 50, 'belum memahami secara detail'),
(66, '1521024019', '2017-01-30 11:33:44', '1', '1990122420161224001', 0, 0, '', 0, 0, '', 0, 0, ''),
(67, '1521024020', '2017-09-24 06:50:03', '1', '1990122420161224001', 10, 10, '-', 10, 10, '-', 10, 10, '-'),
(68, '1521024005', '2018-12-08 01:48:55', '1', '', 40, 40, 'tes', 40, 40, 'tes', 40, 40, 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `tugasbesar`
--

CREATE TABLE `tugasbesar` (
  `id_tb` int(50) NOT NULL,
  `nama_sistem` text NOT NULL,
  `status` varchar(2) NOT NULL,
  `id_kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tugasbesar`
--

INSERT INTO `tugasbesar` (`id_tb`, `nama_sistem`, `status`, `id_kelas`) VALUES
(7, 'Aplikasi bengkel berbasis online														        ', '1', '2016/2017MI-13'),
(8, 'Aplikasi catering online														        ', '1', '2016/2017MI-13'),
(9, 'Aplikasi custom your cloth														        ', '1', '2016/2017MI-13'),
(10, 'WarTeg Go														        ', '1', '2016/2017MI-13'),
(11, 'SI Liebe Diet Catering														        ', '1', '2016/2017MI-13'),
(12, 'Mau Pijat														        ', '1', '2016/2017MI-13'),
(13, 'Lets read														        ', '1', '2016/2017MI-13'),
(14, 'Meat GO														        ', '1', '2016/2017MI-13'),
(15, 'Sedot WC														        ', '1', '2016/2017MI-13'),
(16, 'Pendataan Barang pada gudang berbasis web														        ', '1', '2016/2017MI-43'),
(17, 'Sistem pakar untuk konsultan kerusakan alat elektronik														        ', '1', '2016/2017MI-43'),
(18, 'Aplikasi pemesanan kue berbasis web														        ', '1', '2016/2017MI-43'),
(19, 'Sistem Informasi Penyewaan Rias Pengantin dan Perlengkapan', '1', '2016/2017MI-43'),
(20, 'Mitra desa														        ', '1', '2016/2017MI-43'),
(21, 'Persewaan Mobil														        ', '1', '2016/2017MI-43'),
(22, 'Resto Online														        ', '1', '2016/2017MI-43'),
(23, 'Sistem Informasi Lelang Online														        ', '1', '2016/2017MI-43'),
(24, 'Rental kamera												        														        														        ', '1', '2016/2017MI-63'),
(25, 'Raport online												        														        														        ', '1', '2016/2017MI-63'),
(26, 'Manajemen Penggunaan Kendaraan Dinas dan Bahan Bakar Minyak di PDAM Surya Sembada Kota Surabaya													        														        														        ', '1', '2016/2017MI-63'),
(27, 'Penyewaan studio musik												        														        ', '1', '2016/2017MI-63'),
(28, 'Kedai Kopi (Karepem)														        ', '1', '2016/2017MI-63'),
(29, 'Interaktive Tool														        ', '1', '2016/2017MI-63'),
(30, 'Event Bojonegoro														        ', '1', '2016/2017MI-63'),
(31, 'Perpustakaan														        ', '1', '2016/2017MI-63'),
(32, 'Sistem Keuangan Karang Taruna														        ', '1', '2016/2017MI-43'),
(33, 'SI SIPETOR', '1', '2016/2017MI-13');

-- --------------------------------------------------------

--
-- Table structure for table `tugasbesar_mahasiswa`
--

CREATE TABLE `tugasbesar_mahasiswa` (
  `id_tb` varchar(50) DEFAULT NULL,
  `id_mahasiswa` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tugasbesar_mahasiswa`
--

INSERT INTO `tugasbesar_mahasiswa` (`id_tb`, `id_mahasiswa`) VALUES
('7', '1521024001'),
('7', '1521024008'),
('7', '1521024014'),
('8', '1521024002'),
('8', '1521024023'),
('8', '1521024027'),
('9', '1521024004'),
('9', '1521024018'),
('9', '1521024024'),
('10', '1521024006'),
('10', '1521024010'),
('10', '1521024016'),
('11', '1521024003'),
('12', '1521024007'),
('12', '1521024012'),
('12', '1521024015'),
('13', '1521024009'),
('13', '1521024017'),
('13', '1521024021'),
('14', '1521024013'),
('15', '1521024019'),
('18', '1521024085'),
('18', '1521024087'),
('16', '1521024083'),
('16', '1521024091'),
('16', '1521024102'),
('17', '1521024082'),
('17', '1521024086'),
('17', '1521024098'),
('19', '1521024101'),
('19', '1521024105'),
('20', '1521024095'),
('20', '1521024104'),
('20', '1521024107'),
('21', '1521024089'),
('21', '1521024094'),
('21', '1521024108'),
('22', '1521024090'),
('22', '1521024100'),
('23', '1521024092'),
('23', '1521024096'),
('23', '1521024103'),
('24', '1521024136'),
('24', '1521024146'),
('24', '1521024159'),
('25', '1521024137'),
('25', '1521024147'),
('25', '1521024150'),
('26', '1521024140'),
('26', '1521024143'),
('26', '1521024145'),
('27', '1521024141'),
('27', '1521024156'),
('27', '1521024158'),
('28', '1521024138'),
('28', '1521024139'),
('28', '1521024149'),
('29', '1521024142'),
('29', '1521024154'),
('29', '1521024188'),
('30', '1521024148'),
('31', '1521024151'),
('31', '1521024155'),
('31', '1521024157'),
('32', '1521024093'),
('32', '1521024097'),
('32', '1521024099'),
('7', '1521024026');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `presentasi`
--
ALTER TABLE `presentasi`
  ADD PRIMARY KEY (`id_presentasi`);

--
-- Indexes for table `tugasbesar`
--
ALTER TABLE `tugasbesar`
  ADD PRIMARY KEY (`id_tb`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `presentasi`
--
ALTER TABLE `presentasi`
  MODIFY `id_presentasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `tugasbesar`
--
ALTER TABLE `tugasbesar`
  MODIFY `id_tb` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

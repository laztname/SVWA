-- Adminer 4.6.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `svwa` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `svwa`;

DROP TABLE IF EXISTS `m_message`;
CREATE TABLE `m_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `m_message` (`id`, `name`, `email`, `phone`, `message`, `time`) VALUES
(1,	'John Doe',	'me@potato.web.id',	'08912345678',	'Hi admin, howdy ?\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis, nibh at porta finibus, libero tortor molestie justo, nec egestas leo sem at mi. Suspendisse potenti. Vivamus id efficitur est. Sed ornare nulla sit amet ligula tincidunt, at malesuada purus pretium. Ut et feugiat eros. Morbi dui tortor, dapibus nec urna quis, volutpat commodo leo. Cras at tortor nec arcu luctus pulvinar. Nulla ac cursus turpis. In pharetra dui in pretium vulputate. Maecenas in eleifend ligula. Aliquam vehicula dui sem, et tempus nisl rutrum ac. Donec dignissim at orci ac mattis. Fusce sed varius eros, sit amet venenatis erat.',	'2018-09-17 13:25:55');

DROP TABLE IF EXISTS `m_post`;
CREATE TABLE `m_post` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `post_title` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_post`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `m_post` (`id_post`, `post_title`, `post_body`, `user`) VALUES
(1,	'Challenges Surabaya Hacker Link',	'<p>Kita baru saja mendapatkan pesan penting dari John Peperikus Copernikus, yang mengatakan bahwa websitenya telah di hack oleh hacker jahat. Dan meminta bantuan kepada kita untuk menyelamatkan websitenya. Sebagai warga negara kesatuan Republik Indonesia yang baik, tolong bantu John Peperikus Copernikus untuk mengembalikan web site nya seperti sedia kala. Sebagai imbalannya, kami akan memberikan link untuk masuk ke group private Surabaya Hacker Link. Website John Peperikus Copernikus bisa kamu temukan di <a href=\"http://challenges.surabayahackerlink.org/web/\">sini.</a></p>',	'admin'),
(2,	'KoLU | Komunitas Linux UPN ',	'<p style=\"text-align: justify;\"><strong>Sejarah KOLU<br />(Komunitas Linux UPN &ldquo;Veteran&rdquo; Jawa Timur)</strong></p>\r\n<p>Sebelum Kolu berdiri sebelumnya berdiri KSL (Kelompok Study Linux)yang didirikan oleh HIMATIFA (Himpunan Mahasiswa Teknik Informatika) 2005/2006, tapi karena belum adanya sekretariat KSL dan kurangnya sumber daya manusia yang berminat terhadap linux maka KSL tidak berjalan dengan semestinya.</p>\r\n<p style=\"text-align: justify;\">Ruangan riset Komunitas Linux sempat disediakan oleh ketua jurusan Teknik Informatika (Bpk. H. Ir. Akhmad Fauzi MMT.) ini merupakan janji dari beliau pada kepengurusan HIMATIFA 2005/2006 yaitu diruangan Lab Komputing, akan tetapi setelah sekian lama Informatika semakin berkembang maka ruangan Lab tersebut dijadikan ruangan Dosen karena ruangan untuk dosen Teknik Informatika pada waktu itu sangat kurang. Setelah kehilangan ruangan, riset linux sempat berhenti (vakum), memang tanpa ruangan dan fasilitas riset sangat sulit dilakukan.</p>\r\n<p style=\"text-align: justify;\">Merasa kelompok linux sangat dibutuhkan mahasiswa teknik informatika khususnya untuk perkembangan open source di UPN &ldquo;Veteran&rdquo; JATIM apalagi ada seruan dari pemerintah untuk Indonesian Go Open Source (IGOS), maka banyak pemikiran untuk mendirikan komunitas linux, ide ini dari Moch. Ginanjar, Yusfi Helmi, Rahadia Wiyoshastono, Lahir Wisada, Andi Baskoro, Bpk. Abdullah Fadil (Administrator PUSKOM UPN &ldquo;Veteran&rdquo; JATIM). Komunitas perlu didirikan dengan anggapan komunitas akan lebih maju dibandingkan dengan kelompok study. Ketika kita punya keinginan berusahalah untuk mencapai keinginan tersebut maka keinginan itu akan terwujud, keyakinan ini dipegang teguh oleh Moch. Ginanjar dengan berusaha bekerja sama dengan jurusan dan Fakultas Teknologi Industri untuk bisa mendapatkan ruangan riset, akhirnya perjuangan menapatkan hasil dengan bantuan dari HIMATIFA 2006/2007 dibangunlah ruangan untuk sekretariat Komunitas Linux di lantai 2 gedung Giri Santika.</p>\r\n<p style=\"text-align: justify;\">Melalui pertimbangan yang matang dan mendalam nama KoLU diberikan oleh Moch. Ginanjar yang berasal dari bahasa jawa yang artinya &ldquo;mau/ingin&rdquo;, karena sistem operasi linux banyak yang &ldquo;gak kolu&rdquo; (ga mau), maka komunitas ini bermaksud membuat khususnya mahasiswa teknik informatika UPN, kolu (mau) terhadap linux dan juga masyarakat pada umumnya.</p>\r\n<p style=\"text-align: justify;\">KoLU diresmikan pada 03 Januari 2007 yaitu pada rapat koordinasi pertama yang diadakan diruang sekretariat HIMATIFA dan langsung diketuai oleh Moch. Ginanjar dengan wakil Megawati.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../assets/img/383085_1973715642816_839178093_n.jpg\" alt=\"\" /></p>\r\n<p>&nbsp;</p>',	'admin'),
(3,	'Workshop Website Penetration and Security',	'<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../assets/img/pam.jpg\" alt=\"\" width=\"680\" /></p>\r\n<p>Keamanan merupakan aspek penting yang tidak terpisahkan dari sebagian besar website yang ada di internet saat ini. <br />Ingin lebih tahu mengenai cara meretas keamanan website sekaligus cara mengamankannya ? Ayo segera daftarkan dirimu untuk mengikuti event Workshop dengan tema</p>\r\n<p>\"Website Penetration And Security\"</p>\r\n<p>, yang cocok untuk kamu bila berminat terhadap jaringan dan keamanan pada sebuah website. <br />Dengan Trainer : <br />👨&zwj;🔬Surabaya Hacker Link <br /><br />Event ini akan diadakan pada : <br />📆Minggu, 23 September 2018 <br />⏰08.00 &ndash; 16.30 <br />🏢Coneco Coworking Space Jalan Ratna, Ngagel, Wonokromo, Surabaya <br />HTM : 💲85.000 IDR<br />💳(Transfer ke Rek. BCA 7900499137 a/n Maratul Adila atau BRI 036001041005508 a/n Bagus Andreanto )<br />Terakhir 16 September 2018 <br /><br />Fasilitas : 🛡️Snack 🛡️Coffe break 🛡️Makan siang 🛡️Pendamping Workshop 🛡️Seminar kit 🛡️Sertifikat 🛡️Ilmu yang bermanfaat <br /><br />Caranya daftarkan diri melalui kontak yang dapat kalian hubungi, <br />langsung chat ke salah satunya aja ya : <br />📱Line : maratuladila20 📱WA : 081237386441 <br />Atau <br />📱Line: baguse5 📱WA : 085934346529</p>\r\n<p>Info lebih lengkapnya, pantengin terus sosial media kita <br />Instagram : @kolu_upn_jatim Web : kolu.web.id <br />#KoLU #upnjatim #teknikinformatika #ITFEST #penetration #hacking #workshop #blackhat #whitehat</p>',	'admin');

DROP TABLE IF EXISTS `m_user`;
CREATE TABLE `m_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `m_user` (`id`, `username`, `password`, `profile`) VALUES
(1,	'admin',	'89a4b5bd7d02ad1e342c960e6a98365c',	'');

-- 2018-09-19 12:38:19

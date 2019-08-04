-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 26 Jun 2019 pada 11.11
-- Versi server: 10.0.38-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `purg9431_klinikpuri`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `photo` varchar(45) DEFAULT 'default_doctors.jpeg',
  `service_id` int(11) DEFAULT NULL,
  `schedule` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `informations`
--

CREATE TABLE `informations` (
  `id` int(11) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `photo` varchar(70) DEFAULT NULL,
  `content` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `informations`
--

INSERT INTO `informations` (`id`, `title`, `photo`, `content`) VALUES
(1, 'Kenali Sleep Regression Pada Bayi', 'article.jpg', '<p>Istilah<em>&nbsp;sleep regression</em>&nbsp;digunakan untuk menggambarkan fase ketika bayi sering terbangun saat sedang tidur dan sulit untuk tidur kembali.&nbsp;<em>Sleep regression</em>&nbsp;biasanya dialami oleh bayi, namun dapat juga terjadi pada anak-anak hingga usia 1,5 tahun. Umumnya&nbsp;<em>sleep regression</em>&nbsp;hanya terjadi sementara, yaitu sekitar 2-6 minggu.</p>\n<p><strong>Bagian dari Tahap Perkembangan Fisik dan Otak Bayi</strong><br />Sleep regression terjadi pada salah satu tahapan pertumbuhan dan perkembangan otak bayi yang pesat. Tahapan ini akan mengganggu kadar hormon yang mengatur tidur di otak bayi, sehingga menyebabkan sleep regression.</p>\n<p>Selain itu, sleep regression juga bisa disebabkan oleh faktor-faktor dari luar, seperti stres, akan tumbuh gigi, sakit, perubahan aktivitas bayi, atau perjalanan jauh.</p>\n<p><strong>Berbagai Cara Mengatasi Sleep Regression</strong><br />Kondisi sleep regression ini tidak berbahaya bagi kesehatan bayi, namun mungkin akan mengganggu dan menghabiskan energi Bunda dan Ayah. Berikut ini adalah beberapa cara yang bisa digunakan untuk mengatasi sleep regression pada bayi:</p>\n<ol>\n<li><strong>Buat jadwal tidur yang teratur</strong><br />Hal pertama yang bisa Bunda dan Ayah lakukan untuk mengatasi sleep regression pada bayi adalah membuat jadwal tidur teratur. Hal ini bisa dilakukan dengan mengatur jadwal dan kebiasaan sebelum tidur, seperti memandikan, minum susu, dan membacakan dongeng.</li>\n<li><strong>Biasakan bayi tidur di tempat tidurnya sendiri</strong><br />Sebagian orang tua mungkin mengalami kesulitan untuk membiarkan bayinya tidur sendiri di tempat tidur tanpa digendong. Namun sebenarnya, membiasakan Si Kecil tidur sendiri di tempat tidur merupakan cara yang efektif untuk mengatasi sleep regression. Bunda dan Ayah bisa meletakkan Si Kecil di tempat tidur saat dia sudah mulai terlihat mengantuk. Dengan begitu, Si Kecil akan terlatih untuk bisa tidur dengan caranya sendiri.</li>\n<li><strong>Matikan lampu ketika tidur</strong><br />Selain membuat bayi tidur dengan lebih tenang, mematikan lampu ketika tidur juga bermanfaat untuk mengatasi sleep regression pada bayi. Hal ini karena ketika terbangun di malam hari dan melihat lampu mati, maka dengan sendirinya bayi akan tidur kembali. Pada pagi hari ketika saatnya bayi bangun, jangan lupa untuk menyalakan lampu. Cahaya lampu bermanfaat untuk mengirimkan sinyal ke otak bayi untuk membantunya memahami siklus tidur.</li>\n<li><strong>Tenangkan bayi</strong><br />Ketika Si Kecil terbangun di tengah tidur, tetaplah tenang dan tepuk-tepuk lembut tubuhnya agar dia kembali tidur dengan nyenyak. Hindari mengajak Si Kecil berbicara, menggendongnya, menyalakan lampu, atau melakukan hal-hal lain yang dapat membuatnya terjaga penuh.</li>\n<li><strong>Batasi penggunaan gadget</strong></li>\nUntuk sebagian orang tua, gadget merupakan salah satu alat yang digunakan untuk membuat bayi senang dan tidak rewel. Namun, terlalu sering menggunakan gadget justru dapat mengganggu kualitas dan pola tidur bayi. Jadi, yuk, batasi penggunaan gadget pada bayi, terlebih di malam hari sebelum tidur.</ol>\n<p>Sleep regression merupakan fase normal yang umum dialami bayi. Namun, Bunda dan Ayah harus segera memeriksakan Si Kecil ke dokter anak jika sleep regression terjadi berlarut-larut, membuatnya kurang tidur, apalagi sampai menyebabkan gangguan kesehatan.</p>\n<p><br /><strong>Ditinjau oleh: dr. Merry Dame Cristy Pane</strong></p>'),
(2, 'Kenali Sleep Regression Pada Bayi', 'article.jpg', '<p>Istilah<em>&nbsp;sleep regression</em>&nbsp;digunakan untuk menggambarkan fase ketika bayi sering terbangun saat sedang tidur dan sulit untuk tidur kembali.&nbsp;<em>Sleep regression</em>&nbsp;biasanya dialami oleh bayi, namun dapat juga terjadi pada anak-anak hingga usia 1,5 tahun. Umumnya&nbsp;<em>sleep regression</em>&nbsp;hanya terjadi sementara, yaitu sekitar 2-6 minggu.</p>\n<p><strong>Bagian dari Tahap Perkembangan Fisik dan Otak Bayi</strong><br />Sleep regression terjadi pada salah satu tahapan pertumbuhan dan perkembangan otak bayi yang pesat. Tahapan ini akan mengganggu kadar hormon yang mengatur tidur di otak bayi, sehingga menyebabkan sleep regression.</p>\n<p>Selain itu, sleep regression juga bisa disebabkan oleh faktor-faktor dari luar, seperti stres, akan tumbuh gigi, sakit, perubahan aktivitas bayi, atau perjalanan jauh.</p>\n<p><strong>Berbagai Cara Mengatasi Sleep Regression</strong><br />Kondisi sleep regression ini tidak berbahaya bagi kesehatan bayi, namun mungkin akan mengganggu dan menghabiskan energi Bunda dan Ayah. Berikut ini adalah beberapa cara yang bisa digunakan untuk mengatasi sleep regression pada bayi:</p>\n<ol>\n<li><strong>Buat jadwal tidur yang teratur</strong><br />Hal pertama yang bisa Bunda dan Ayah lakukan untuk mengatasi sleep regression pada bayi adalah membuat jadwal tidur teratur. Hal ini bisa dilakukan dengan mengatur jadwal dan kebiasaan sebelum tidur, seperti memandikan, minum susu, dan membacakan dongeng.</li>\n<li><strong>Biasakan bayi tidur di tempat tidurnya sendiri</strong><br />Sebagian orang tua mungkin mengalami kesulitan untuk membiarkan bayinya tidur sendiri di tempat tidur tanpa digendong. Namun sebenarnya, membiasakan Si Kecil tidur sendiri di tempat tidur merupakan cara yang efektif untuk mengatasi sleep regression. Bunda dan Ayah bisa meletakkan Si Kecil di tempat tidur saat dia sudah mulai terlihat mengantuk. Dengan begitu, Si Kecil akan terlatih untuk bisa tidur dengan caranya sendiri.</li>\n<li><strong>Matikan lampu ketika tidur</strong><br />Selain membuat bayi tidur dengan lebih tenang, mematikan lampu ketika tidur juga bermanfaat untuk mengatasi sleep regression pada bayi. Hal ini karena ketika terbangun di malam hari dan melihat lampu mati, maka dengan sendirinya bayi akan tidur kembali. Pada pagi hari ketika saatnya bayi bangun, jangan lupa untuk menyalakan lampu. Cahaya lampu bermanfaat untuk mengirimkan sinyal ke otak bayi untuk membantunya memahami siklus tidur.</li>\n<li><strong>Tenangkan bayi</strong><br />Ketika Si Kecil terbangun di tengah tidur, tetaplah tenang dan tepuk-tepuk lembut tubuhnya agar dia kembali tidur dengan nyenyak. Hindari mengajak Si Kecil berbicara, menggendongnya, menyalakan lampu, atau melakukan hal-hal lain yang dapat membuatnya terjaga penuh.</li>\n<li><strong>Batasi penggunaan gadget</strong></li>\nUntuk sebagian orang tua, gadget merupakan salah satu alat yang digunakan untuk membuat bayi senang dan tidak rewel. Namun, terlalu sering menggunakan gadget justru dapat mengganggu kualitas dan pola tidur bayi. Jadi, yuk, batasi penggunaan gadget pada bayi, terlebih di malam hari sebelum tidur.</ol>\n<p>Sleep regression merupakan fase normal yang umum dialami bayi. Namun, Bunda dan Ayah harus segera memeriksakan Si Kecil ke dokter anak jika sleep regression terjadi berlarut-larut, membuatnya kurang tidur, apalagi sampai menyebabkan gangguan kesehatan.</p>\n<p><br /><strong>Ditinjau oleh: dr. Merry Dame Cristy Pane</strong></p>'),
(3, 'Kenali Sleep Regression Pada Bayi', 'article.jpg', '<p>Istilah<em>&nbsp;sleep regression</em>&nbsp;digunakan untuk menggambarkan fase ketika bayi sering terbangun saat sedang tidur dan sulit untuk tidur kembali.&nbsp;<em>Sleep regression</em>&nbsp;biasanya dialami oleh bayi, namun dapat juga terjadi pada anak-anak hingga usia 1,5 tahun. Umumnya&nbsp;<em>sleep regression</em>&nbsp;hanya terjadi sementara, yaitu sekitar 2-6 minggu.</p>\n<p><strong>Bagian dari Tahap Perkembangan Fisik dan Otak Bayi</strong><br />Sleep regression terjadi pada salah satu tahapan pertumbuhan dan perkembangan otak bayi yang pesat. Tahapan ini akan mengganggu kadar hormon yang mengatur tidur di otak bayi, sehingga menyebabkan sleep regression.</p>\n<p>Selain itu, sleep regression juga bisa disebabkan oleh faktor-faktor dari luar, seperti stres, akan tumbuh gigi, sakit, perubahan aktivitas bayi, atau perjalanan jauh.</p>\n<p><strong>Berbagai Cara Mengatasi Sleep Regression</strong><br />Kondisi sleep regression ini tidak berbahaya bagi kesehatan bayi, namun mungkin akan mengganggu dan menghabiskan energi Bunda dan Ayah. Berikut ini adalah beberapa cara yang bisa digunakan untuk mengatasi sleep regression pada bayi:</p>\n<ol>\n<li><strong>Buat jadwal tidur yang teratur</strong><br />Hal pertama yang bisa Bunda dan Ayah lakukan untuk mengatasi sleep regression pada bayi adalah membuat jadwal tidur teratur. Hal ini bisa dilakukan dengan mengatur jadwal dan kebiasaan sebelum tidur, seperti memandikan, minum susu, dan membacakan dongeng.</li>\n<li><strong>Biasakan bayi tidur di tempat tidurnya sendiri</strong><br />Sebagian orang tua mungkin mengalami kesulitan untuk membiarkan bayinya tidur sendiri di tempat tidur tanpa digendong. Namun sebenarnya, membiasakan Si Kecil tidur sendiri di tempat tidur merupakan cara yang efektif untuk mengatasi sleep regression. Bunda dan Ayah bisa meletakkan Si Kecil di tempat tidur saat dia sudah mulai terlihat mengantuk. Dengan begitu, Si Kecil akan terlatih untuk bisa tidur dengan caranya sendiri.</li>\n<li><strong>Matikan lampu ketika tidur</strong><br />Selain membuat bayi tidur dengan lebih tenang, mematikan lampu ketika tidur juga bermanfaat untuk mengatasi sleep regression pada bayi. Hal ini karena ketika terbangun di malam hari dan melihat lampu mati, maka dengan sendirinya bayi akan tidur kembali. Pada pagi hari ketika saatnya bayi bangun, jangan lupa untuk menyalakan lampu. Cahaya lampu bermanfaat untuk mengirimkan sinyal ke otak bayi untuk membantunya memahami siklus tidur.</li>\n<li><strong>Tenangkan bayi</strong><br />Ketika Si Kecil terbangun di tengah tidur, tetaplah tenang dan tepuk-tepuk lembut tubuhnya agar dia kembali tidur dengan nyenyak. Hindari mengajak Si Kecil berbicara, menggendongnya, menyalakan lampu, atau melakukan hal-hal lain yang dapat membuatnya terjaga penuh.</li>\n<li><strong>Batasi penggunaan gadget</strong></li>\nUntuk sebagian orang tua, gadget merupakan salah satu alat yang digunakan untuk membuat bayi senang dan tidak rewel. Namun, terlalu sering menggunakan gadget justru dapat mengganggu kualitas dan pola tidur bayi. Jadi, yuk, batasi penggunaan gadget pada bayi, terlebih di malam hari sebelum tidur.</ol>\n<p>Sleep regression merupakan fase normal yang umum dialami bayi. Namun, Bunda dan Ayah harus segera memeriksakan Si Kecil ke dokter anak jika sleep regression terjadi berlarut-larut, membuatnya kurang tidur, apalagi sampai menyebabkan gangguan kesehatan.</p>\n<p><br /><strong>Ditinjau oleh: dr. Merry Dame Cristy Pane</strong></p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `services`
--

INSERT INTO `services` (`id`, `name`, `description`) VALUES
(1, 'Umum', 'Pelayanan Kebidanan memberikanmu blablablabla blablabla blabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla'),
(2, 'Kebidanan', 'Pelayanan Kebidanan memberikanmu blablablabla blablabla blabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla'),
(3, 'Poli Gigi', 'Pelayanan Kebidanan memberikanmu blablablabla blablabla blabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla'),
(4, 'Poli Laktasi', 'Pelayanan Kebidanan memberikanmu blablablabla blablabla blabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla'),
(5, 'Pijat Bayi', 'Pelayanan Kebidanan memberikanmu blablablabla blablabla blabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla'),
(6, 'Senam Hamil', 'Pelayanan Kebidanan memberikanmu blablablabla blablabla blabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla'),
(7, 'Home Care', 'Pelayanan Kebidanan memberikanmu blablablabla blablabla blabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla'),
(8, 'Poli Tumbuh Kembang', 'Pelayanan Kebidanan memberikanmu blablablabla blablabla blabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla'),
(9, 'Farmasi', 'Pelayanan Kebidanan memberikanmu blablablabla blablabla blabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla blablabla');

-- --------------------------------------------------------

--
-- Struktur dari tabel `service_photos`
--

CREATE TABLE `service_photos` (
  `id` int(11) NOT NULL,
  `service_id` int(11) DEFAULT NULL,
  `url` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `service_photos`
--

INSERT INTO `service_photos` (`id`, `service_id`, `url`) VALUES
(1, 1, 'room1.jpeg'),
(2, 1, 'room2.jpeg'),
(3, 1, 'room3.jpeg'),
(4, 2, 'room1.jpeg'),
(5, 2, 'room2.jpeg'),
(6, 2, 'room3.jpeg'),
(7, 3, 'room1.jpeg'),
(8, 3, 'room2.jpeg'),
(9, 3, 'room3.jpeg'),
(10, 4, 'room1.jpeg'),
(11, 4, 'room2.jpeg'),
(12, 4, 'room3.jpeg'),
(13, 5, 'room1.jpeg'),
(14, 5, 'room2.jpeg'),
(15, 5, 'room3.jpeg'),
(16, 6, 'room1.jpeg'),
(17, 6, 'room2.jpeg'),
(18, 6, 'room3.jpeg'),
(19, 7, 'room1.jpeg'),
(20, 7, 'room2.jpeg'),
(21, 7, 'room3.jpeg'),
(22, 8, 'room1.jpeg'),
(23, 8, 'room2.jpeg'),
(24, 8, 'room3.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `informations`
--
ALTER TABLE `informations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `service_photos`
--
ALTER TABLE `service_photos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `informations`
--
ALTER TABLE `informations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `service_photos`
--
ALTER TABLE `service_photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

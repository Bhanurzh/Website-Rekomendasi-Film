-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Des 2022 pada 17.34
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `popcorn_time`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `genre`
--

CREATE TABLE `genre` (
  `id_genre` int(11) NOT NULL,
  `genre_film` varchar(30) NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `genre`
--

INSERT INTO `genre` (`id_genre`, `genre_film`, `image_url`) VALUES
(1, 'horror', 'horror1.jpg'),
(2, 'horror', 'horror2.jpeg'),
(3, 'horror', 'horror3.jpg'),
(4, 'horror', 'horror4.jpeg'),
(5, 'horror', 'horror5.jpeg'),
(6, 'horror', 'horror6.jpeg'),
(7, 'horror', 'horror7.jpeg'),
(8, 'horror', 'horror8.jpeg'),
(9, 'horror', 'horror9.jpg'),
(10, 'horror', 'horror10.jpeg'),
(15, 'comedy', 'images(1).jpeg'),
(16, 'comedy', 'images(2).jpg'),
(17, 'comedy', 'images(3).jpeg'),
(18, 'comedy', 'images(4).jpeg'),
(19, 'comedy', 'images(5).jpg'),
(20, 'comedy', 'images(6).jpeg'),
(21, 'comedy', 'images(7).jpeg'),
(22, 'comedy', 'images(8).jpeg'),
(23, 'comedy', 'images(9).jpeg'),
(24, 'comedy', 'images(10).jpeg'),
(25, 'action', 'action1.jpg'),
(26, 'action', 'action2.jpg'),
(27, 'action', 'action3.jpg'),
(28, 'action', 'action4.jpg'),
(29, 'action', 'action5.jpg'),
(30, 'action', 'action6.jpg'),
(31, 'action', 'action7.jpg'),
(32, 'action', 'action8.jpg'),
(33, 'action', 'action9.jpg'),
(34, 'action', 'action10.jpg'),
(35, 'drama', 'drama1.jpg'),
(36, 'drama', 'drama2.jpg'),
(37, 'drama', 'drama3.jpg'),
(38, 'drama', 'drama4.jpg'),
(39, 'drama', 'drama5.jpg'),
(40, 'drama', 'drama6.jpg'),
(41, 'drama', 'drama7.jpg'),
(42, 'drama', 'drama8.jpg'),
(43, 'drama', 'drama9.jpg'),
(44, 'drama', 'drama10.jpg'),
(45, 'scifi', 'scifi1.jpg'),
(46, 'scifi', 'scifi2.jpg'),
(48, 'scifi', 'scifi4.jpg'),
(49, 'scifi', 'scifi5.jpg'),
(50, 'scifi', 'scifi6.jpg'),
(51, 'scifi', 'scifi7.jpg'),
(52, 'scifi', 'scifi8.jpg'),
(53, 'scifi', 'scifi9.jpg'),
(54, 'scifi', 'scifi10.jpg'),
(55, 'scifi', 'scifi3.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_comment` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `topic` varchar(30) NOT NULL,
  `comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_comment`, `id_user`, `topic`, `comment`) VALUES
(1, 1, 'Thor4', 'filmya seru banget'),
(2, 6, 'Thor4', 'thornya terlalu gagah, janenya keren banget');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `image`) VALUES
(1, 'Aswangga Bhanu Rizqullah', 'bhanurz', 'aswanggab@gmail.com', '$2y$10$u5cTquXjyRlFvsyQeAzdrOuiY8kiRsZ2VzWv7fPtgYZ0jxAEDIM6u', 'bhanu.jpeg'),
(2, 'Java Moreno', 'java', 'javamoreno@gmail.com', '$2y$10$z4ReN2n9gWIFW2ZVQkNYKu.jqAxa2tKplqHD0lvJ6bwro1ad2w2PK', ''),
(3, 'Della Chintiya', 'della', 'nsjah@gmail', '$2y$10$ffvAIAWJLjtnhO9c6Lan7eKkH1nHQ9nfEMUEKTBYAb2yfRmsFy5Gm', 'messageImage_1669264899048.jpg'),
(4, 'Evania Azarine', 'zerrin', 'evaniaazarine@gmail.com', '$2y$10$pztn/5yGly0YptJUEhISaOoZJyYXp6iytSTwZ2ehPNUrA0oHlAKku', '1658222990399.jpg'),
(5, 'Kharismalya Meira', 'meira', 'meira@gmail.com', '$2y$10$yImReNEALIYVKAc0C3XUDeu0gw7ancMkB5eQRxnWr03S4TJak3NV2', ''),
(6, 'Deta', 'deta', 'deta@gmail.com', '$2y$10$8aOOyPqqMVB2mgs0MMcEEeA1QwHEUiPtz9Haz8Tgp2alMxtc0tPl6', '634825.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id_genre`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_user_foreign` (`id_user`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `genre`
--
ALTER TABLE `genre`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

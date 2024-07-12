-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jul 2024 pada 20.22
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psdaoke`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `administrator`
--

CREATE TABLE `administrator` (
  `id` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `administrator`
--

INSERT INTO `administrator` (`id`, `username`, `email`, `password`, `foto`) VALUES
('245ba5e67c9fb4fadc303427eef9fa785b3224a4', 'admindd', 'pasarmanonjaya@gmail.com', '$2y$10$yyQsylG.QHvP0Y3gkvxOX.YmC32GnFx9ZhOSD9ThZcDCByeyeOC9W', 'WhatsApp Image 2023-07-27 at 08.31.03.jpg'),
('2ae76949b8a6126beb83601c1156e8edf1f5a308', 'taraju', 'pasarciawi@gmail.com', '$2y$10$R3fFxmbJJ8pkqKkn4PDhiOxnB8BCxC99A0.llRp9bZhZsCTOmlzW6', 'WhatsApp Image 2023-07-27 at 08.31.03.jpg'),
('42fdd66d9a7ba8e267e844c9578c69883fd3a22c', 'Pasar Singaparna', 'pasarsingaparna@gmail.com', '$2y$10$6odNP1t.Z6JJHb6tJIHeS.ggIx9okSIh5AcrBkyqgwQ5NUdDHUd4S', 'FLOWCHART SIMPSDA.png'),
('667b804a304a18beb18d59883be7584a6f94c004', 'admin', 'metorizkimmelmi@gmail.com', '$2y$10$hvnHkwVd0Dh0e21l8EyZXOfXvz6xhgBt3NPPRxGFXYWCW3KXThFJS', 'pexels-artempodrez-4884114.jpg'),
('bc07ae8761655d1ae47c32f929082719525c5ce3', 'psda', 'psda@gmail.com', '$2y$10$HYB.SxSu2bfy/.oLKDjwue92/9NDxCx345XwFcUIIE6vRdP37zU6K', 'focus-concept-illustration_114360-1291.webp'),
('d15010cce274850bca0bf6c03d4a9bb022b55c45', 'cikatomas', 'pasarcikatomas@gmail.com', '$2y$10$mxY/0FeiHaKKzekH3GEATek.c2TkL21JltF9FqV7wlcBjZb/jH9l2', 'WhatsApp Image 2023-07-27 at 08.31.03.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `benih`
--

CREATE TABLE `benih` (
  `id_benih` varchar(255) NOT NULL,
  `id_tahun` varchar(255) NOT NULL,
  `mas` int(255) NOT NULL,
  `nila` int(255) NOT NULL,
  `nilem` int(255) NOT NULL,
  `mujair` int(255) NOT NULL,
  `gurame` int(255) NOT NULL,
  `tawes` int(255) NOT NULL,
  `lele` int(255) NOT NULL,
  `sapat` int(255) NOT NULL,
  `tambakan` int(255) NOT NULL,
  `lainnya` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `benih`
--

INSERT INTO `benih` (`id_benih`, `id_tahun`, `mas`, `nila`, `nilem`, `mujair`, `gurame`, `tawes`, `lele`, `sapat`, `tambakan`, `lainnya`) VALUES
('2ed2c5b4bf0cbc250508bdb43b79a22759bf49a0', '2e245803c5fb42627f947044f75d44cf5d66aa23', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2),
('c77bfe6a81bad8fe676bec87f00b4fb6598c68f4', '47a9cbe87c0451df9dbafa1ef5e0478515a4d69a', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `buah`
--

CREATE TABLE `buah` (
  `id_buah` varchar(255) NOT NULL,
  `id_kecamatan` varchar(255) NOT NULL,
  `id_tahun` varchar(255) NOT NULL,
  `id_jenis_buah` varchar(255) NOT NULL,
  `panen` varchar(255) NOT NULL,
  `produksi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bulan`
--

CREATE TABLE `bulan` (
  `id_bulan` varchar(255) NOT NULL,
  `bulan` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bulan`
--

INSERT INTO `bulan` (`id_bulan`, `bulan`) VALUES
('1', 'Januari'),
('10', 'Februari'),
('11', 'Maret'),
('12', 'April'),
('2', 'Mei'),
('3', 'Juni'),
('4', 'Juli'),
('5', 'Agustus'),
('6', 'September'),
('7', 'Oktober'),
('8', 'November'),
('9', 'Desember');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hewan_ternak`
--

CREATE TABLE `hewan_ternak` (
  `id_hewan_ternak` varchar(255) NOT NULL,
  `id_kecamatan` varchar(255) NOT NULL,
  `id_tahun` varchar(255) NOT NULL,
  `produksi1` varchar(255) NOT NULL,
  `produksi2` varchar(255) NOT NULL,
  `produksi3` varchar(255) NOT NULL,
  `produksi4` varchar(255) NOT NULL,
  `produksi5` varchar(255) NOT NULL,
  `produksi6` varchar(255) NOT NULL,
  `nilai1` varchar(255) NOT NULL,
  `nilai2` varchar(255) NOT NULL,
  `nilai3` varchar(255) NOT NULL,
  `nilai4` varchar(255) NOT NULL,
  `nilai5` varchar(255) NOT NULL,
  `nilai6` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hewan_ternak`
--

INSERT INTO `hewan_ternak` (`id_hewan_ternak`, `id_kecamatan`, `id_tahun`, `produksi1`, `produksi2`, `produksi3`, `produksi4`, `produksi5`, `produksi6`, `nilai1`, `nilai2`, `nilai3`, `nilai4`, `nilai5`, `nilai6`) VALUES
('17e613e0650083cb9fdea1fc39d95482170c7a10', '1', '47a9cbe87c0451df9dbafa1ef5e0478515a4d69a', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('c324e17fddcbb0978a245b5e7f95ae872bedfe9d', '2', '2e245803c5fb42627f947044f75d44cf5d66aa23', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hewan_unggas`
--

CREATE TABLE `hewan_unggas` (
  `id_hewan_unggas` varchar(255) NOT NULL,
  `id_kecamatan` varchar(255) NOT NULL,
  `id_tahun` varchar(255) NOT NULL,
  `produksi1` varchar(255) NOT NULL,
  `produksi2` varchar(255) NOT NULL,
  `produksi3` varchar(255) NOT NULL,
  `produksi4` varchar(255) NOT NULL,
  `nilai1` varchar(255) NOT NULL,
  `nilai2` varchar(255) NOT NULL,
  `nilai3` varchar(255) NOT NULL,
  `nilai4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hotel`
--

CREATE TABLE `hotel` (
  `id_hotel` varchar(255) NOT NULL,
  `id_kecamatan` varchar(255) NOT NULL,
  `id_tahun` varchar(255) NOT NULL,
  `hotel` varchar(255) NOT NULL,
  `kamar` varchar(255) NOT NULL,
  `kasur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hotel`
--

INSERT INTO `hotel` (`id_hotel`, `id_kecamatan`, `id_tahun`, `hotel`, `kamar`, `kasur`) VALUES
('4dp4iDkwKe5KF5WCHeGD7oX5gxb00tHZrOGzyiWK', '1', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '0', '0', '0'),
('uMxZlyQ1f8Usl2kUzMf5HyqCFUZDDHYoFcCzBnGk', '2', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '0', '0', '0'),
('odc2AWzF4TxFB3VESSmLG5U2XQLKPt6fr7rmAK1u', '3', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '0', '0', '0'),
('MvLotoHlodasSVx8cWdPzYgajkLMagVIq8yLe4Em', '4', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '1', '26', '52'),
('1e22wSJyp1S5vAtn9FZz259MBean4mV5jEpFb5U1', '5', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '0', '0', '0'),
('S71blqpPOYTYC8v3NYSVw5RkH01vQANFwmwBx5Qe', '6', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '0', '0', '0'),
('sFSMG4QkKF6cc3H4NWJp2XOFqM6Fn4ogr3WGeHKb', '7', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '0', '0', '0'),
('rKvUUoRaUVuqL1tHYjt4VBCJp3acBsgf5I5MNf35', '8', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '0', '0', '0'),
('52kV6oec0yhRv9nMHAqY4ZRKBj0d1453qwysIjch', '9', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '0', '0', '0'),
('S5sz7SmORty3CfajmXDFUWzE0DrXx134zcvdD0Ez', '10', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '8', '130', '199'),
('5I3EpJuRJ6QgvSK7SmKAir3T5qnIwfLZeMjNYUbP', '11', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '1', '47', '61'),
('3s4YRLHBvvhZYvn3jKHEAzJR61e37Iymqis6i7J0', '12', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '0', '0', '0'),
('vTSfq2UCM468EZ09ZGTMFyxgRzTEYxxmpgjRtxvc', '13', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '0', '0', '0'),
('9j3uEIZrPJCtjnaRHvc9j2pusTaNzbwiaeLalsy3', '14', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '0', '0', '0'),
('AWvucCy6QgzjYN44yXY1HApTk8JxjciZYsbE9tqO', '15', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '0', '0', '0'),
('G19UrhiLPrtlyNppUqbKe6Rj9QWA5mSmPWESQZQE', '16', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '0', '0', '0'),
('imXELr7qk1jQkI6TtsXtikRoX5h30iNZa5U1VGeI', '17', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '0', '0', '0'),
('LiNbjfyjZTVw4JE1H9lBUj3uFJgKQxLjRql62lWB', '18', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '0', '0', '0'),
('CHeGB0JMjOetN3xTL7Renrk0ctTUuvklPcgNjLMe', '19', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '0', '0', '0'),
('ykh32t9w5RoX6mOVA96u5YN1osm6zWUhs9v1CkyR', '20', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '0', '0', '0'),
('AL21qyAnIylnTqdWUlCYy5KG8kARYJgNcp80UFeJ', '21', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '0', '0', '0'),
('TFhZcBwxo1XUeczxfIJUNG3H5QjDhjMT86v8kDfX', '22', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '0', '0', '0'),
('XvpCM1r7pbP4vJaqJrBAA83h9Vw2Chmcawmu1F09', '23', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '1', '17', '96'),
('ZEIawlpjyXbD6lI3DlzWTgmh2vKiPlQeq8v7ejVE', '24', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '0', '0', '0'),
('RLHCzDx0wYm3ngq0LXXseQ1e4Djrun6xMkTyIOuB', '25', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '0', '0', '0'),
('5fygLVM5BWuqIoyHLkWDKq5h8MH7cavifzlkGtXp', '26', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '0', '0', '0'),
('PMPpl8HnxHNr2QrqVpUnLBhmdiWGc7aRFmzR4t5Z', '27', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '0', '0', '0'),
('TVw05Fm1bn0VJuRK8W4do0PrxzxeCvqHjf0ouxsM', '28', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '1', '22', '49'),
('0lgvQEig8RgsELr7pffCqQRkHxqCFWhlXFTSi2r3', '29', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '0', '0', '0'),
('WJnsrUivMtB3beHKe7RjBY2NdtO7EfVK0tGSLCnE', '30', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '0', '0', '0'),
('dIR7886yMlXHeCtjplAOI8egKR4sx2BbJZm0WQQg', '31', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '3', '77', '137'),
('1r3aZyylkGwjg6HuZz4Em2iH6W7qk3s4XLvQDdKd', '32', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '0', '0', '0'),
('11tEJgMZa6bZpIp7v8izfDwrLziSxIQ63pmHvdD1', '33', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '0', '0', '0'),
('JJSBOH2Dm73ndd8cUQU1S5vAvzyiYQKBl7BM49MD', '34', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '0', '0', '0'),
('pM7NNZZy247CTbTMFy0uQBTfnlK9ec00q1RxISGl', '35', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '0', '0', '0'),
('sx0yiT4mYEN2r1OlTw6YGVY6jBY2Ncp81VM5CbFH', '36', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '0', '0', '0'),
('UScavhbhYUfiPjFtYxwgQwFFKjXLxbwjjFvgUGfO', '37', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '0', '0', '0'),
('mbSNMT72eyliAUoQXHb2Cl0dwgOlTuy0uN1mi3wP', '38', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '0', '0', '0'),
('53ry8ZGVY5eow7ZO551e4DineiSyKakswxmsrYz7', '39', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '0', '0', '0'),
('Tqfe4HyuRKAed2AWy7V2XN8MH7cXhjNWJrCDN58G', '1', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '0', '0', '0'),
('if1wURYKp0NjKKSBM47EcEC6kFtYujndatZz7PXJ', '2', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '0', '0', '0'),
('nqis6j9ONWJrBBCIjbeJTDWpNFwp84lSoZEIeCrW', '3', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '0', '0', '0'),
('um1crIjdozLalsvsQLJNlXEO56773jObeGFGQAPM', '4', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '0', '0', '0'),
('OmXBB96stiiGz1yeBoL9W3U7yOqshjPfygLXTbRE', '5', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '0', '0', '0'),
('if1zkZRMHCy7UyD0DujlSoZEKkdmpbQ664s2Of1v', '6', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '0', '0', '0'),
('QDbC3WHgQv9oShxVVsgdwhS4nbSJ39RZO6AL344y', '7', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '0', '0', '0'),
('THo3g4BY3T0TAHhXOEm4rwwjetLtGUVvta3LPruo', '8', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '0', '0', '0'),
('9ADPGvfNjObgQu6cc6W8wAoPU1WLyjWJow9kAOIB', '9', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '0', '0', '0'),
('rZ9sjs4WFUaIYjqtku6fr7stcIQ65xLhKMf4Djpl', '10', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '8', '130', '199'),
('DeOs2PkNT5qmDbD6i6EeR3ohwSK4Dge10nnTmLDu', '11', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '1', '47', '61'),
('kohtEHZrQNRv6dgKTCOEpIo2ZcBvsUcVWuqJtMxX', '12', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '0', '0', '0'),
('fYePuD8v06NPiCiqrdP1iKKXVl8Gjh9TlDfWQRmM', '13', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '0', '0', '0'),
('MWPGzxhQsvqHiZZwtRLHApXzBpOKKTFcD4ZRNPiB', '14', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '0', '0', '0'),
('fZig8Sh0mftHXjs2NdsIhQt1IE7j9ONVEUdVScat', '15', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '0', '0', '0'),
('YwuXpKzq6obQ9K0sCEN41lcd8ed6PdjdmpfiNZZ1', '16', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '0', '0', '0'),
('Cl3pqX3Rtz7SnRgtHavfQyR89EWl50cwdCvrPH18', '17', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '0', '0', '0'),
('QZQElwECA3adFAuugXTZJgIIQ4wIUPSqkzam0XVi', '18', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '0', '0', '0'),
('wOyVUnIxkfxb2AZEGRHuWjuEFP7EcGJZku8lI01s', '19', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '0', '0', '0'),
('B7ssbD8spJuUY8rjvIXdNptm60WUflceD0Bl773n', '20', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '0', '0', '0'),
('fkaVdWY0Ez6PXHfILgEwp96t1G5V8xE8nSkCcITL', '21', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '0', '0', '0'),
('AbKiRu0CoGlphtB4fvTRbWfcweHHOzZlxKZkqnL8', '22', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '1', '34', '60'),
('W3VCJow9j6789AFa1DqPMOlRmOU7v8j6BQOWHiYS', '23', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '1', '17', '96'),
('Tqfcynw8j3uGREgWRTtuhZbBwyuTUtn75u6cc5OZ', '24', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '0', '0', '0'),
('VffCoK358GjiErSV1Prsgbo6v7fq4fvVY8oVutb9', '25', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '0', '0', '0'),
('nOQmQeq5kJBpQSrnCTbQ9JyllKDxzrEN42qx3DoF', '26', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '0', '0', '0'),
('dFD8tsa5YLuMuHYlzVOJCtgbn3g6J6QfuLpx9iyX', '27', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '0', '0', '0'),
('cLgF0AcTJ0uNzgJIPyUNFvmv9pWy7XA2YSV1Ng8U', '28', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '1', '22', '49'),
('rhjNXPH18OQlNT6svqKtJmkGtYtePyTHrFVbMpvy', '29', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '0', '0', '0'),
('xgPogr2RwEC9xBun6wGIZpEYsY1IE8qcOxRBPKIK', '30', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '0', '0', '0'),
('ZjmXDIfILe5LF4Sv6aQFmyPySEcD6i5AMAZC6mSm', '31', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '3', '77', '137'),
('LDvn4ncXdSCUgkZSNLUCQKE1DtfVNAZAxAnIvb5U', '32', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '0', '0', '0'),
('yGGMs7nTqdSFjkLLXSYFNycytLvQCa8lEikSqfhJ', '33', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '0', '0', '0'),
('GHSGn1XWnHo6t2JKWUgpuwmwC2RwBw18Renqfe5I', '34', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '0', '0', '0'),
('5NRvAtoDUcUONWJrEN42ooRdeCthf36Ehco5naO2', '35', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '0', '0', '0'),
('ptoEYuijJBsdOtAxAlBQSqhpreWVmCXwveLZhbkm', '36', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '0', '0', '0'),
('TsqNFufPuB2U71XVjzcvdF9qdRANCghF06LHBuoC', '37', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '0', '0', '0'),
('PI6TuxtRMLTCPJ9fhMYWoJwc9gpx8dd7W7rl50Zg', '38', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '0', '0', '0'),
('WQQerCERJ5LKS5wHRCWpSaSLCoHp80TCOEpGgTBK', '39', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '0', '0', '0'),
('uP8K4Dgdzq8w8hwP7AKxfJQ0akpl8EZ0CnDYxwib', '1', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '0', '0', '0'),
('eKYZ4U3co2cnzPuAw4LKUJvXiqvxnzNnfnqcRCXs', '2', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '0', '0', '0'),
('dNngtFO5776zUJyjab4NUDQKE0Bk1hH9lDcIQ7AH', '3', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '0', '0', '0'),
('jeuRJ4GxqBCHdBrbEFLr6mQemmQeoxAoPRocTL7R', '4', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '0', '0', '0'),
('guKmkGua3LOlW6pffAjwOwNtC9yHIUONWJq95lOY', '5', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '0', '0', '0'),
('QKAj0gF07OVA97wFC6mOV94mXA5jFucE9trSZIc4', '6', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '0', '0', '0'),
('JDy3CeUMAbKiQodZm1dxgPqraB1Ppj0iMXSW3XN6', '7', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '0', '0', '0'),
('Go6xISFidsLvP68CQNU7wE9w2G06LDult1IGEDEM', '8', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '0', '0', '0'),
('yasTZGREhexjaZvmvBwzxiU983hAaJaqIo1WNBZB', '9', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '0', '0', '0'),
('2VEWhpreUL7ORstgZfS5xLhID2NcnyLe26Ehf39N', '10', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '8', '130', '199'),
('JE4VCGaxtROQpfkWDN44wOwNuFO0kV81XRTqfbtT', '11', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '1', '47', '61'),
('X5h2ybvfPs1H9oPU4jH2AY5fvQBWupDQLF5U2acD', '12', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '0', '0', '0'),
('3T0UGeMe257ANAbJbwjf0r7ssYz9cVWtku8oVvyv', '13', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '0', '0', '0'),
('XkxOuDA3acC0Ey25AQQjCdP0cwhT872e1xYjrvsR', '14', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '0', '0', '0'),
('PceF6dgNhAZEId5OZVeapCLzli568AGiZYwsN7Iw', '15', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '0', '0', '0'),
('eJR89DSUv17NPkNS0VJuQElwFFMtGQBTgpxAk51g', '16', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '0', '0', '0'),
('Cl64sz9fjU4kNRyLgAfgH9k6AKxgNhAZDA4etO44', '17', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '0', '0', '0'),
('xOxQ663lW94g4ATflenuxvZxuUbKiRroMAbMpsm7', '18', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '0', '0', '0'),
('60XXtheyllKCsdOs3SzQySBN9Wx4I8efDulwE9v1', '19', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '0', '0', '0'),
('CjvHSIvc8dbzzmmPWERLF1F05J5NQqlBRUyF8mJ6', '20', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '0', '0', '0'),
('Pbc6V5lOU7xJUNErRUzHGLnlGrKwYoCPI4I8cVWy', '21', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '0', '0', '0'),
('7W5h32qw020mkCdQ1hH6XDKq3aa1BjwJcxnyHKfA', '22', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '1', '34', '60'),
('gjRrpQRoW3ZUcSHpAAABFVghG7catYujnbTPU1UF', '23', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '1', '17', '96'),
('a4Ph6FlxITHrHgRxKZjoiyapEXoHnyKZiiGz0tHZ', '24', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '0', '0', '0'),
('sWmBSXA2YUdWa9tpKyjYSToUsilZLtFP9NH4OYSS', '25', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '0', '0', '0'),
('kEjndd4LIKctUcQ9K0sEMwUTi0gIGHREgZeNnejV', '26', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '0', '0', '0'),
('CIjcki9Tk8IvXl4uAv07MHBtkwGKhMWN9VurODkv', '27', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '0', '0', '0'),
('FJd5MNexiWHhVEVgkU3euTRelgzkaYqOH4MS1YYw', '28', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '1', '22', '49'),
('uXnFeLcuVdVVpRZP8K5FqLzlg0lhziRv9mIxlmSo', '29', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '0', '0', '0'),
('WzG9nPV7u1DsbBx7V1T85sy3AZ9v04BWwwkjI6Uz', '30', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '0', '0', '0'),
('KWTed5OWJmrl4vHSFkqqUj53qsilW91TCPGvgT88', '31', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '3', '77', '137'),
('70XUglelh5ANGz1xaub6bWdTK0tHb04BXz8aKjVC', '32', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '0', '0', '0'),
('IhUABIlmRgvRFkrseSBNCjrx4I5QgzhQrrY2MZYv', '33', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '0', '0', '0'),
('pCM453s2QrqUlAPOaYsZ2LPrwzuRIysJiWHhT73h', '34', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '0', '0', '0'),
('DnAIq80R3neiS0UGgVHlnW4beJR8CODjt5bayxiV', '35', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '0', '0', '0'),
('ETVw4NWGeHKaqGfKWTcXgcsM2xUONXODkvD9w4Oc', '36', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '0', '0', '0'),
('kg45662jPesIgMco4lPchUDQLJJVRW6oYDGUVvvh', '37', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '0', '0', '0'),
('YUeasRQbc5RlMLTAFb7dc3H2ChmbYl2iICvtWk0e', '38', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '0', '0', '0'),
('28NJJR60bn3iDoDVjzbsRQbc5Qg1r6kGxnwBusVh', '39', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '0', '0', '0'),
('qx6UyD3PjGzxiUBHiZYrWpTfmlK8aLoskyUNFwmw', '1', '2e245803c5fb42627f947044f75d44cf5d66aa23', '0', '0', '0'),
('Bx2ChkTzNlXEN3xRCXtgbpADOBaD7paKiQpj0e5J', '2', '2e245803c5fb42627f947044f75d44cf5d66aa23', '0', '0', '0'),
('8bQAOJBscMmcbz1ybzxeE3QlOWGayzq5jGvibjfy', '3', '2e245803c5fb42627f947044f75d44cf5d66aa23', '0', '0', '0'),
('kciYVebvfOlXDJlh58EeNkSu2H6V3cnv5V5lPciW', '4', '2e245803c5fb42627f947044f75d44cf5d66aa23', '0', '0', '0'),
('IntuhdvXm9DVhqyAk65zUL49QV3cnwAqY6fr93cm', '5', '2e245803c5fb42627f947044f75d44cf5d66aa23', '0', '0', '0'),
('u08UuufTBKwawo2bknXB8wAqX1KOqshf8UrjrzAj', '6', '2e245803c5fb42627f947044f75d44cf5d66aa23', '0', '0', '0'),
('0f8Vx9hs9x9k8FhYWoL6LG8gq2UACKsEO58GkkOX', '7', '2e245803c5fb42627f947044f75d44cf5d66aa23', '0', '0', '0'),
('Lyd7W7qhmgwRFlu7fq4fzkbb2DqNEtYwtSRgvO54', '8', '2e245803c5fb42627f947044f75d44cf5d66aa23', '0', '0', '0'),
('vFJeAk52jObgQu5bb2DnBOGwnxIOuFJgHFDB6peb', '9', '2e245803c5fb42627f947044f75d44cf5d66aa23', '0', '0', '0'),
('tUeaqHhWKuQGrKtKq2XN6DbEB3bfMctTTnQbXipo', '10', '2e245803c5fb42627f947044f75d44cf5d66aa23', '8', '130', '199'),
('PSu1DpL7NNadFDA0Mf5GucBtl1bo4kMQrun4nbUU', '11', '2e245803c5fb42627f947044f75d44cf5d66aa23', '1', '47', '61'),
('oRZO6CTfiSyKXZ4T1XRQensqRTv2H7YJiVCJow8i', '12', '2e245803c5fb42627f947044f75d44cf5d66aa23', '0', '0', '0'),
('ze6QgyeBnGlu3NbgT9BJrA6ql662iJGC5ciaa2IA', '13', '2e245803c5fb42627f947044f75d44cf5d66aa23', '0', '0', '0'),
('oQV7u2H8gpw3KHIRBRUyCwxozNlXCHb03452lYJl', '14', '2e245803c5fb42627f947044f75d44cf5d66aa23', '0', '0', '0'),
('gxbzwdAmEfVKzmnRh0nlHxklOUA983iEsVlAL5Fq', '15', '2e245803c5fb42627f947044f75d44cf5d66aa23', '0', '0', '0'),
('GgQwGMptoFbApWx5MOhCjt6fr8v4ObfOpl9L5Hwj', '16', '2e245803c5fb42627f947044f75d44cf5d66aa23', '0', '0', '0'),
('g1uJfGBw18PV7v9mJ28LBk0ctTYCB91VKzkcjcjf', '17', '2e245803c5fb42627f947044f75d44cf5d66aa23', '0', '0', '0'),
('xb022sAzJQ4t5aWfbtUbO0fCpL8Sh0lcfLVM9Vut', '18', '2e245803c5fb42627f947044f75d44cf5d66aa23', '1', '10', '10'),
('a4QjFrPLHE9uwn1XSYFP9OI9k51jRpffAglbXl1d', '19', '2e245803c5fb42627f947044f75d44cf5d66aa23', '0', '0', '0'),
('xjcicjg48JyljDkuAx9flfq7qhqy9huEIb04ATgq', '20', '2e245803c5fb42627f947044f75d44cf5d66aa23', '0', '0', '0'),
('2S3kPciXQKDxveJQ3oj564u9qeWVnLAcSItRMIHM', '21', '2e245803c5fb42627f947044f75d44cf5d66aa23', '0', '0', '0'),
('ooShwSHuXmAL33yYfXXtfWQPbdDy7Uuwn0S62f7O', '22', '2e245803c5fb42627f947044f75d44cf5d66aa23', '0', '0', '0'),
('QpitC9xE5bc6U1QvD9tugZb8hxVVpSfpw5PetLq5', '23', '2e245803c5fb42627f947044f75d44cf5d66aa23', '1', '17', '96'),
('g20hMWOGwnxE7mLG9k9L6J7Ux8fkcdCvrPGytO8J', '24', '2e245803c5fb42627f947044f75d44cf5d66aa23', '0', '0', '0'),
('zrCFSOQnZKiRwC0G9oTk9OJE3Rqj0e3BZBzIITK3', '25', '2e245803c5fb42627f947044f75d44cf5d66aa23', '0', '0', '0'),
('8K5Hxo0R0ZdLe5HzxfJOs1MXTbO2qx6UyF7j7FgZ', '26', '2e245803c5fb42627f947044f75d44cf5d66aa23', '0', '0', '0'),
('dJTHo5odZoCM5DbD7lKCpPQi8PSsqQSsnFeMgBho', '27', '2e245803c5fb42627f947044f75d44cf5d66aa23', '0', '0', '0'),
('mHvc8htFQAQSqiryAk64vC6mNPkKHHLlbYpIp8zR', '28', '2e245803c5fb42627f947044f75d44cf5d66aa23', '1', '22', '49'),
('1cuUZEHYjt4V96v9mJ3BY6h2tDFSMG7aSNMUBIo0', '29', '2e245803c5fb42627f947044f75d44cf5d66aa23', '0', '0', '0'),
('Ongpvz257AL33xSIuXm64qpTj3xRBRUzJS9EZ07T', '30', '2e245803c5fb42627f947044f75d44cf5d66aa23', '0', '0', '0'),
('nQZSNNYXoJzov09Y9w7aP6BQOaXnBOEqKyiU9985', '31', '2e245803c5fb42627f947044f75d44cf5d66aa23', '4', '193', '369'),
('ogoqeXY0EwsN7HtSQbc4NVETW1Nf4ARYKnqeYdPv', '32', '2e245803c5fb42627f947044f75d44cf5d66aa23', '0', '0', '0'),
('HUQU0Qu8nRcd7XDIeF6diWHgOmW91WL0q2VFXnEb', '33', '2e245803c5fb42627f947044f75d44cf5d66aa23', '0', '0', '0'),
('AqZAyCvtUeaqKtN2s6jBaDB7ssZ4V81ZZz4Gub8g', '34', '2e245803c5fb42627f947044f75d44cf5d66aa23', '0', '0', '0'),
('tDFSPTzMgCnEbAqY4ZTW1LWRRi8MF1Bfcvb7cZrP', '35', '2e245803c5fb42627f947044f75d44cf5d66aa23', '0', '0', '0'),
('J9ee7UxAnIxjfvVaFKhOhBbLmemoZEHXhiMS4maP', '36', '2e245803c5fb42627f947044f75d44cf5d66aa23', '0', '0', '0'),
('67BL1vO2putb8k8Gn2cp7zOs0HD6fsFSMIFBzF6b', '37', '2e245803c5fb42627f947044f75d44cf5d66aa23', '0', '0', '0'),
('Xjs4WESPWEPDgbo5rrZ6eli6DdLf8UuvklSpaIXg', '38', '2e245803c5fb42627f947044f75d44cf5d66aa23', '0', '0', '0'),
('bqCM3zbvgRzS8CNAVtoBJsJjaZvjkMPpmDZ3QkMO', '39', '2e245803c5fb42627f947044f75d44cf5d66aa23', '0', '0', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ikan_budidaya`
--

CREATE TABLE `ikan_budidaya` (
  `id_ikan_budidaya` varchar(255) NOT NULL,
  `id_kecamatan` varchar(255) NOT NULL,
  `id_tahun` varchar(255) NOT NULL,
  `produksi1` varchar(255) NOT NULL,
  `produksi2` varchar(255) NOT NULL,
  `produksi3` varchar(255) NOT NULL,
  `produksi4` varchar(255) NOT NULL,
  `produksi5` varchar(255) NOT NULL,
  `nilai1` varchar(255) NOT NULL,
  `nilai2` varchar(255) NOT NULL,
  `nilai3` varchar(255) NOT NULL,
  `nilai4` varchar(255) NOT NULL,
  `nilai5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ikan_budidaya`
--

INSERT INTO `ikan_budidaya` (`id_ikan_budidaya`, `id_kecamatan`, `id_tahun`, `produksi1`, `produksi2`, `produksi3`, `produksi4`, `produksi5`, `nilai1`, `nilai2`, `nilai3`, `nilai4`, `nilai5`) VALUES
('4c640d21e362eec99da90813199ebffbd09436e3', '1', '47a9cbe87c0451df9dbafa1ef5e0478515a4d69a', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2'),
('7f2af9be86f5ae71562b9ee7902d2f949e1a43a5', '2', '2e245803c5fb42627f947044f75d44cf5d66aa23', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ikan_laut`
--

CREATE TABLE `ikan_laut` (
  `id_ikan_laut` varchar(255) NOT NULL,
  `id_kecamatan` varchar(255) NOT NULL,
  `id_tahun` varchar(255) NOT NULL,
  `produksi1` varchar(255) NOT NULL,
  `produksi2` varchar(255) NOT NULL,
  `nilai1` varchar(255) NOT NULL,
  `nilai2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ikan_tangkap`
--

CREATE TABLE `ikan_tangkap` (
  `id_ikan_tangkap` varchar(255) NOT NULL,
  `id_kecamatan` varchar(255) NOT NULL,
  `id_tahun` varchar(255) NOT NULL,
  `produksi1` varchar(255) NOT NULL,
  `produksi2` varchar(255) NOT NULL,
  `nilai1` varchar(255) NOT NULL,
  `nilai2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ikan_umum`
--

CREATE TABLE `ikan_umum` (
  `id_ikan_umum` varchar(255) NOT NULL,
  `id_kecamatan` varchar(255) NOT NULL,
  `id_tahun` varchar(255) NOT NULL,
  `produksi1` varchar(255) NOT NULL,
  `produksi2` varchar(255) NOT NULL,
  `produksi3` varchar(255) NOT NULL,
  `produksi4` varchar(255) NOT NULL,
  `produksi5` varchar(255) NOT NULL,
  `nilai1` varchar(255) NOT NULL,
  `nilai2` varchar(255) NOT NULL,
  `nilai3` varchar(255) NOT NULL,
  `nilai4` varchar(255) NOT NULL,
  `nilai5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ikm`
--

CREATE TABLE `ikm` (
  `id_ikm` varchar(255) NOT NULL,
  `id_jenis_ikm` int(255) NOT NULL,
  `id_kecamatan` int(255) NOT NULL,
  `id_tahun` varchar(255) NOT NULL,
  `ikm` int(255) NOT NULL,
  `tk` int(255) NOT NULL,
  `produksi` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ikm`
--

INSERT INTO `ikm` (`id_ikm`, `id_jenis_ikm`, `id_kecamatan`, `id_tahun`, `ikm`, `tk`, `produksi`) VALUES
('05fbe5f4ba29b2ffbfe731cca05887817d40adec', 1, 1, '47a9cbe87c0451df9dbafa1ef5e0478515a4d69a', 0, 0, 0),
('8389272fada091fcfaf2dac09a5a4e8e2281a203', 2, 1, '47a9cbe87c0451df9dbafa1ef5e0478515a4d69a', 0, 0, 0),
('feb9e29e3a46ab786bae2a869df4a9fce5dfc6e0', 1, 1, '2e245803c5fb42627f947044f75d44cf5d66aa23', 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `investasi`
--

CREATE TABLE `investasi` (
  `id_investasi` varchar(255) NOT NULL,
  `id_bulan` varchar(255) NOT NULL,
  `id_tahun` varchar(255) NOT NULL,
  `investasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_buah`
--

CREATE TABLE `jenis_buah` (
  `id_jenis_buah` varchar(255) NOT NULL,
  `jenis_buah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_buah`
--

INSERT INTO `jenis_buah` (`id_jenis_buah`, `jenis_buah`) VALUES
('7bURdd9gmi2wP2ni1nkDeSAHklPZVdTL6MLUCQKC', 'Sukun'),
('CGWhkV7w8k9L8SlGrLygJNnejYQGub8fnpYB3YTZ', 'Jeruk Besar'),
('cRCVnIuXk1hH8egIISBQOYQJ9dZoBInv3LOlTw9l', 'Duku/Langsat'),
('CWseS9HlnZJgJMhG5Suyynv3LPsy7SmMHD2QobTM', 'Durian'),
('czsGXjrzDukt0DscHMpvz1yc2AW0G9mK9bNvMtAz', 'Pepaya'),
('DFO68CTbSJ39RcYn8AFa2ICuo9ACN8MG5TxCx3Cg', 'Mangga'),
('e5LHE7jAUmGn3hBeXbC5dlkH01wSIzvRI132t9w5', 'Jambu Biji'),
('FsVk2onNLQuAtpKxd8dd6Paaz0tKlfuP7FgYWpNH', 'Sirsak'),
('G5QlKE0Bis3T2dvWgjPfzmkH00sEJjXKuMyZn6xL', 'Jambu Air'),
('Gmv8i3vJbxp7u4U1TAHkiBdTGmv9pWzDy27LCoHm', 'Manggis'),
('jCcNpreVOKJPxP0fAebrN8OMVGcBtjpnK7PWESRg', 'Belimbing'),
('LYa7gsDFRI15ASdbwlqmAM8PU3cp6rpQV2XPFrRR', 'Melinjo'),
('mRkElwITJyntvmxHOwP1hJJSAKwawlrpRYJhOjLK', 'Nanas'),
('MUCN9QV5nZIZqL0r7qk0bsOCdRAJvWfcxjdp3bkj', 'Sawo'),
('NRu3PjGyuRI3ChhH8ejVCKr8xE7kDhf4BXy8YFP8', 'Alpukat'),
('Q2hH6W8v4RrnFfS75sx149L8RhyeBnEcHMmfr8v3', 'Rambutan'),
('QjEn75sx16HtWkyWVoONYSUuvjjKE2MXOFrPI7XC', 'Jeruk Siam'),
('sdNni1ooSguMtFP9K10oqcP2ni2r3YQI3CghF1Bf', 'Pisang'),
('uJiRt0CmAKxeD0Bk3t5bc7ZMvO3vGO2opX4XJozL', 'Petai'),
('wAskwKd0ygMZdHKfBl4vIURXEP9PRpcQAOI9j1jQ', 'Nangka'),
('ZfS872hCkzZgWSV3YQLJLdymspOIBoNH9hvMr3ZU', 'Salak Pondoh'),
('ZhcqCHgOkPfwYn9COCeUM8Si3yYfVPKF4V93g5Dg', 'Salak Lokal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_ikm`
--

CREATE TABLE `jenis_ikm` (
  `id_jenis_ikm` int(11) NOT NULL,
  `jenis_ikm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_ikm`
--

INSERT INTO `jenis_ikm` (`id_jenis_ikm`, `jenis_ikm`) VALUES
(1, 'Pengolahan Pangan'),
(2, 'Kerajinan Anyaman'),
(3, 'Tekstil'),
(4, 'Galian Bukan Logam'),
(5, 'Pengolahan Kayu'),
(6, 'Pengolahan Logam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_kebun`
--

CREATE TABLE `jenis_kebun` (
  `id_jenis_kebun` varchar(255) NOT NULL,
  `jenis_kebun` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_kebun`
--

INSERT INTO `jenis_kebun` (`id_jenis_kebun`, `jenis_kebun`) VALUES
('GsQNRsvpCLzjYOAUmHsN7J39Tize9cWY1KPs1IE9', 'Kelapa Sawit'),
('JNqtl1csN5APMPqqWtjqpVqaB2S0VNChjRpgkWEQ', 'Kelapa'),
('t7mLG9lCa7j69JvZsVl79GietMxatYvo6wGIWY1L', 'Lada'),
('TCNAY7i7FjjLNexhRwEB5jEoDSUuwn1WQQdnsqPO', 'Kakao'),
('vxsMzgKR2kRoZFNzc02xYjrxzyhS1ZfPvD7qff9d', 'Kopi Arabika'),
('YhhCl2kTw9lEjkNWJp1UDSVx9j0fCpL7MJHMnj43', 'Kopi Robusta'),
('yLf6NOiCiprbJZksz7W4fuRGrM1tGTPRodWY4XHf', 'Karet');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_komoditas`
--

CREATE TABLE `jenis_komoditas` (
  `id_jenis_komoditas` varchar(255) NOT NULL,
  `jenis_komoditas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_komoditas`
--

INSERT INTO `jenis_komoditas` (`id_jenis_komoditas`, `jenis_komoditas`) VALUES
('0sB8w9nK7ToW0IJXY2KMf7Ri2wO1lbZrSX8uy0ye', 'Kacang Hijau'),
('1bo4kMRxHOwP1jSv6XGXioj53quqKwb038K5J7Ts', 'Padi Sawah'),
('1DpK1zfEz5I2Cgf8Uvz20opbLjT0R1e258FgXUda', 'Kacang Panjang'),
('2wO1lZO8K6LHD5cdCvqIlnYDEKq3bgS2g9YB2VFa', 'Padi Ladang'),
('68AInu1EwqGa05FpGeHKbtUbOyXdPxOxRCTaP53q', 'Wortel'),
('8HrKq7u07Rh0lftJhOiDnCRSmPV97v7fr5iAVsjp', 'Petsay/Sawi'),
('a9ripnOMWJtLtHYlyQ3rvwknXA1T73jMT4ndc3Dn', 'Ubi Jalar'),
('aywc6XCCEQFn6yNmforl4uAw4LMdwdBraDA2UAEU', 'Terung'),
('BivJasTYA2XODlyR63mbWbIWZ7lGrKxb18Rcd9iy', 'Bawang Merah'),
('BLzli58Ho6sun5t1G7dd7V4cmqiuFLouvidrFVeY', 'Bawang Daun'),
('bOyXbFIaqJq81VJtKq4esGZrSXA1TACOAX0HEAzG', 'Buncis'),
('C2T3g7LG4RobP3vIXfYbArgf5J9cVVpUnK5LF5WB', 'Mentimun'),
('cHQ4vEGRIyntvmxJYcJXcHP4wJd15DdOt6gyd8YF', 'Kedelai'),
('CrXwvgS4qpRaRJ259NEsYwuYugXVl8FcFC5gyeCr', 'Ubi Kayu'),
('dfGAuqKxd9gpw4KJPvHTJ258Glt0Bk0cwgR1blrt', 'Semangka'),
('EO8MFyxiZWm7871duUbMr1OhDm760XXvqFa3ICwv', 'Kangkung'),
('gUDRNQpjyWWtjoizd15DdOs2OjKHD7nQaVaFKjYM', 'Bayam'),
('hg9W2T3iFudKZiiFwp82ezoxAmGqGeHKbqHiYVff', 'Stroberi'),
('iadD3QqmDXwtVebtUbO1kXGZta5U4iCfZihBeZjl', 'Cabai Rawit'),
('JUM8ToTmJ3AX0HE9utcEAyAnK3ATk9MCl0d0yfF6', 'Jamur Tiram'),
('m5zUK0r90OpmFmxJUNErSYFRGqImobQ8DWpPPfuP', 'Kubis'),
('QDcKd12xWaDA0OlV4h8NKMg8SmJ6PYN57DWoL5I0', 'Kacang Tanah'),
('qHhYTX5i9SdeDxxnu2H7bTOPiCeUMCiryAhr1Ppk', 'Labu Siam'),
('qWx14BVoNJFAvz1xbwjf1vQDbC4ZUY9uxuXl2jOb', 'Cabai Besar'),
('r6mRj8K3AXy6RlH00q1T6xJXZ4U4iDkwIWY3SyKY', 'Jagung'),
('un5swvdGGNwP52jQkLHE9uvlrqSdd6QgyeCulu7f', 'Blewah'),
('V3clobOzd3AWy7VzJR4u8pX5beIKcuZxuWhmcbyw', 'Tomat'),
('wxqCIhU996vBy9gnlGsRPYM1r6kH033xUPQlMMae', 'Kembang Kol'),
('ZjmYJiRxHOyVThuJfG8hzd6PchRyOrx2CjvD8tsX', 'Bawang Putih');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_koperasi`
--

CREATE TABLE `jenis_koperasi` (
  `id_jenis_koperasi` int(255) NOT NULL,
  `jenis_koperasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_koperasi`
--

INSERT INTO `jenis_koperasi` (`id_jenis_koperasi`, `jenis_koperasi`) VALUES
(1, 'Koperasi Unit Desa'),
(2, 'Koperasi Serba Usaha'),
(3, 'Koperasi Pondok Pesantren'),
(4, 'KPRI'),
(5, 'Koperasi Konsumen'),
(6, 'KOPKAR'),
(7, 'Koperasi Angkatan Darat'),
(8, 'Koperasi Angkatan Udara'),
(9, 'Koperasi Kepolisian'),
(10, 'Koperasi Wanita'),
(11, 'Koperasi Wredatama'),
(12, 'Koperasi Pemuda'),
(13, 'Koperasi Warga'),
(14, 'LEPMM'),
(15, 'POKMAS'),
(16, 'PRIMKOPABRI'),
(17, 'PRIMKOVERI'),
(18, 'KSP'),
(19, 'KBMT'),
(20, 'KSPPS'),
(21, 'KOPINKRA'),
(22, 'Koperasi Pertanian'),
(23, 'Koperasi Jasa'),
(24, 'Koperasi Pemasaran'),
(25, 'Koperasi Sekunder');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kebun`
--

CREATE TABLE `kebun` (
  `id_kebun` varchar(255) NOT NULL,
  `id_kecamatan` varchar(255) NOT NULL,
  `id_tahun` varchar(255) NOT NULL,
  `id_jenis_kebun` varchar(255) NOT NULL,
  `panen` varchar(255) NOT NULL,
  `produksi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `kecamatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `kecamatan`) VALUES
(1, 'Bantarkalong'),
(2, 'Bojongasih'),
(3, 'Bojonggambir'),
(4, 'Ciawi'),
(5, 'Cibalong'),
(6, 'Cigalontang'),
(7, 'Cikalong'),
(8, 'Cikatomas'),
(9, 'Cineam'),
(10, 'Cipatujah'),
(11, 'Cisayong'),
(12, 'Culamega'),
(13, 'Gunungtanjung'),
(14, 'Jamanis'),
(15, 'Jatiwaras'),
(16, 'Kadipaten'),
(17, 'Karangjaya'),
(18, 'Karangnunggal'),
(19, 'Leuwisari'),
(20, 'Mangunreja'),
(21, 'Manonjaya'),
(22, 'Padakembang'),
(23, 'Pagerageung'),
(24, 'Pancatengah'),
(25, 'Parungponteng'),
(26, 'Puspahiang'),
(27, 'Rajapolah'),
(28, 'Salawu'),
(29, 'Salopa'),
(30, 'Sariwangi'),
(31, 'Singaparna'),
(32, 'Sodonghilir'),
(33, 'Sukahening'),
(34, 'Sukaraja'),
(35, 'Sukarame'),
(36, 'Sukaratu'),
(37, 'Sukaresik'),
(38, 'Tanjungjaya'),
(39, 'Taraju');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komoditas`
--

CREATE TABLE `komoditas` (
  `id_komoditas` varchar(255) NOT NULL,
  `id_kecamatan` varchar(255) NOT NULL,
  `id_jenis_komoditas` varchar(255) NOT NULL,
  `luas_tanam` varchar(255) NOT NULL,
  `luas_panen` varchar(255) NOT NULL,
  `provitas` varchar(255) NOT NULL,
  `produksi` varchar(255) NOT NULL,
  `id_tahun` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `koperasi`
--

CREATE TABLE `koperasi` (
  `id_koperasi` varchar(255) NOT NULL,
  `id_jenis_koperasi` int(255) NOT NULL,
  `id_tahun` varchar(255) NOT NULL,
  `aktif` int(255) NOT NULL,
  `nonaktif` int(255) NOT NULL,
  `manajer` int(255) NOT NULL,
  `karyawan` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `koperasi`
--

INSERT INTO `koperasi` (`id_koperasi`, `id_jenis_koperasi`, `id_tahun`, `aktif`, `nonaktif`, `manajer`, `karyawan`) VALUES
('0TCOBcMmgwSIyo0QwGKfExvdD2OeuQHyp4iDnAHl', 21, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 1, 0, 0, 4),
('2EsWoNH4MT6yMiLPrtilW8xC0HFB2VDQJ7UyD1IE', 8, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 0, 0, 0, 0),
('4YPCcLfBm8EZ1EuhdrIkgzkaWghIE5bZsUhs6jDg', 4, 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 42, 0, 5, 93),
('7j8LAcQ53poQV7u2JIPwNs4ZTUrhlZMwVUnLCoIu', 9, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 1, 0, 0, 4),
('a9rdUNEtZ1G7bVZAx9k65yTIrIhT6yLe6OT0VJuT', 17, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 2, 0, 0, 0),
('aMqzF7i2tC90Pu6empbMs9v2DpM8PU5lPbeGC4ZU', 10, 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 5, 0, 0, 4),
('APNT6vBx4KGBw2BeWVmEfVN9WzCsdNprgcvb5TxC', 13, 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 15, 0, 1, 20),
('AY6gyfE1F2H5Srm79BM47CUflbawlt09cTNJE3Pl', 11, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 7, 0, 0, 17),
('BjxSEcFFJeBmDZ0DteQ2kUzNiG3H6TxAmIvb6ZKm', 8, 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 0, 0, 0, 0),
('BOH3FwlqoJ0vTQV7txxjdo1UEViqyAk3r0IJVRXD', 18, 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 26, 0, 11, 102),
('C6nUtqOFueKalvBwzzoyD1IE8nShzhKOqsilXGUX', 3, 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 11, 0, 6, 243),
('C9yE5aWipqY4XKp3cmtwrLygLTCQLIIPzZhg8Rcf', 25, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 1, 0, 0, 4),
('ctRMLS73iJE3PjH3H4LNhDoGjf2zgG7ejYPCfXXt', 5, 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 7, 0, 1, 6),
('FhdsLxZn73mZLr6kGua5V6qjzcxlmRh1pyAnHrKt', 21, 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 1, 0, 0, 3),
('fNhErSZIc4JD0BjwLmhye8YCA4g32s8uwrJp2XOD', 2, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 41, 0, 3, 54),
('Gico3euSPXGYoHnxE7lJ7SnTnORrpPPchVGcCwxo', 20, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 4, 0, 2, 11),
('GYpHkjI5NVDPEoAGfOohuGQCXy4I6RkI29Ww18QZ', 19, 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 2, 0, 0, 5),
('H8deCrXwyp7wBvudJTGlrpOJGEDDIfHFEGTRbXhk', 24, 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 1, 0, 0, 2),
('hMagVL0pzJQ2kTxC0Ez4FsVitB4ckjFsUgldjaXo', 23, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 10, 0, 1, 9),
('Ho2dtO6AOH4NVGb6W91VKxb05FqGfPqoPPg1vO3u', 24, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 1, 0, 0, 2),
('JD1HCzAjzZikRmOT2cn0QzVMBdUMAZFKkaYqQOWH', 1, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 26, 0, 4, 113),
('jplDZ4U5mUyCuo872duUaJd29VutZ1DqOKHHP2nh', 6, 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 6, 0, 1, 10),
('JR786zVNBfcweJSAL1vNwQ8Eb8lDeQ2kTw7bWfbs', 16, 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 4, 0, 0, 7),
('k4yVPNWKvQFn5t3Of0q5h6DdMjRrpOLLYa7ekcgQ', 13, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 14, 0, 0, 17),
('Kov3IBqXzAglekg0mlJ7V1Qu5aVbJasSTsm75vB1', 22, 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 7, 0, 3, 226),
('l1crHhVHgQu9pX4YO9ScavhYWmANAZC9xCwytP9O', 3, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 10, 0, 0, 10),
('lLF4Pi9UoPU2acCx16J4Gwmu4QkI6Tv08UqcP0f9', 9, 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 1, 0, 0, 3),
('LMeympdVTi0hKNjOadF9qcOvLldgOkQgzmj9NKLX', 4, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 41, 0, 0, 76),
('Lq2T6xHOxRDY0CoL4AVqZ9sl2jNYUdYhe1ygIGHQ', 12, 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 0, 0, 0, 0),
('M2yYhhCjwJbwjg48JztHawlrrZ7j9POcjevWggCn', 17, 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 2, 0, 0, 0),
('MajiCkvGLnlJ6OT5qmDb9qbLhLS60WRV0NjKJQ1h', 23, 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 3, 0, 0, 4),
('mRi8K7PWFTWzE0BjxSEbByAk2pqaGP3t7mORrqTe', 22, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 27, 0, 0, 60),
('mtujlUzHJYgbp7zR2hG1BghHAoPRnV0JQ0bpDN6D', 16, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 4, 0, 0, 7),
('noVx6V4esJjYPDfakpl9ItPCbGLkaWfe3BZ9snAJ', 1, 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 26, 0, 9, 141),
('P9PPeq80R2iKJS89AHhXROT1VM7J4FsVj0cxlocR', 20, 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 0, 0, 0, 0),
('pIsKpzKWRW4g0otqOGzzntujiG19Y6kGucC0Dxwe', 15, 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 9, 0, 0, 15),
('QfsFSOPh7LCoHqBFWjwLhKNkRoYDDGWhkSv3KKXV', 12, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 0, 0, 0, 0),
('qKyhQt1Ey0yhNcp95phr3XO8NJILe7Ri7HrJp2WL', 6, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 6, 0, 1, 15),
('Rcb2EqM7NMVHllOVAACJq6qk3s5aYqOG037HsLzi', 18, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 26, 0, 5, 103),
('rEO9NIBshg8Vvxp81WNCfbsQI16J3AY8nPU4kKHE', 2, 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 15, 0, 4, 26),
('t9yF8lGuYrWrZ7j6Da7fpyE4VBESQaUY7oUutYxx', 15, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 9, 0, 0, 13),
('U1VHllPbc6W7roK1yfEz7RjATgsA1S4plANFywb3', 25, 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 2, 0, 0, 7),
('U5rrZ6elkI2AX1KPvGLlcc8fjU6u4Su2KJTDXtfT', 19, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 2, 0, 0, 5),
('UZB3bfNjOaa2F05GtXoIuTTpWx6Trm8AHjh5DfVM', 10, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 5, 0, 0, 4),
('vD6h31ni3yYhf38J27GqFWl3qtl1cqEUaKhKQwGN', 14, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 0, 0, 0, 0),
('WrZ4WEQI3EqM6GrM59NH5SsoItPCdPyVSZLq3XPF', 5, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 0, 0, 0, 0),
('x01vO1lbYpHlocUTiyZm0XWoL7NOg369GlrqTgot', 14, 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 0, 0, 0, 0),
('zd4I6SoZFMs8ttdJVQSsqRV2XQKDxyrA7xGHRCY0', 7, 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 0, 0, 0, 0),
('ZEId7V2XOBZ8nQbXl2iLOogpw2DqNBfalwD6h1tE', 11, 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 7, 0, 0, 14),
('znpZDDGWdSDYwvdGEDCBDJmmPXKsFP9NIAoMDqOH', 7, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `olahraga`
--

CREATE TABLE `olahraga` (
  `id_olahraga` varchar(255) NOT NULL,
  `id_tahun` varchar(255) NOT NULL,
  `voli_out` int(255) NOT NULL,
  `voli_in` int(255) NOT NULL,
  `basket` int(255) NOT NULL,
  `tenis_meja` int(255) NOT NULL,
  `tenis_lapang` int(255) NOT NULL,
  `futsal` int(255) NOT NULL,
  `bola` int(255) NOT NULL,
  `bultang` int(255) NOT NULL,
  `gd_olahraga` int(255) NOT NULL,
  `kolam` int(255) NOT NULL,
  `tinju` int(255) NOT NULL,
  `motor` int(255) NOT NULL,
  `fitness` int(255) NOT NULL,
  `mini_soccer` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `olahraga`
--

INSERT INTO `olahraga` (`id_olahraga`, `id_tahun`, `voli_out`, `voli_in`, `basket`, `tenis_meja`, `tenis_lapang`, `futsal`, `bola`, `bultang`, `gd_olahraga`, `kolam`, `tinju`, `motor`, `fitness`, `mini_soccer`) VALUES
('0BjyWUj3vIYks0F2H9j3wMooToRcd9iwQ7AL2yc1', '2e245803c5fb42627f947044f75d44cf5d66aa23', 430, 14, 5, 280, 3, 8, 71, 19, 0, 5, 5, 1, 5, 3),
('cuVfd28QV7wC0HC1KPwHSGmyLe26Ca9qdTHqDM0o', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', 404, 4, 7, 269, 0, 5, 66, 18, 0, 3, 5, 1, 1, 1),
('PoizbsQLHD6i6DaAurQPcgNhCk0an2cqABFVcRDY', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 420, 13, 7, 275, 0, 8, 71, 19, 0, 5, 5, 1, 4, 0),
('riokBTfldjckjDiokAQRoX8rm9EXsa9pWzE1Exwg', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 420, 6, 10, 315, 3, 10, 70, 22, 0, 7, 10, 1, 5, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `organisasi`
--

CREATE TABLE `organisasi` (
  `id_organisasi` varchar(255) NOT NULL,
  `id_tahun` varchar(255) NOT NULL,
  `org_olahraga` int(255) NOT NULL,
  `org_sosial` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `organisasi`
--

INSERT INTO `organisasi` (`id_organisasi`, `id_tahun`, `org_olahraga`, `org_sosial`) VALUES
('4dfe9fd96e61d3882b212752c14b6cc5536c11e6', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 41, 94),
('6b916fa0f0b9fff8dbd8db170a46c5357e4c54da', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 58, 100),
('be16f83b89504acc9306d2f6bc304420d05b7b56', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', 41, 94),
('dd0ef1bc9482954efc35b05c1ab49f4bc6698f0d', '2e245803c5fb42627f947044f75d44cf5d66aa23', 58, 101);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasar_modern`
--

CREATE TABLE `pasar_modern` (
  `id_pasar_modern` varchar(255) NOT NULL,
  `id_kecamatan` int(255) NOT NULL,
  `id_tahun` varchar(255) NOT NULL,
  `supermarket` int(255) NOT NULL,
  `minimarket` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasar_modern`
--

INSERT INTO `pasar_modern` (`id_pasar_modern`, `id_kecamatan`, `id_tahun`, `supermarket`, `minimarket`) VALUES
('5472da5377678356c037952b60cc3b87f42076ee', 3, '2e245803c5fb42627f947044f75d44cf5d66aa23', 0, 0),
('c56d7cda2ce27063d0eb1aaf2cd9bfe6d04deab1', 3, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasar_tradisional`
--

CREATE TABLE `pasar_tradisional` (
  `id_pasar_tradisional` varchar(255) NOT NULL,
  `id_kecamatan` varchar(255) NOT NULL,
  `id_tahun` varchar(255) NOT NULL,
  `permanen` int(255) NOT NULL,
  `semi` int(255) NOT NULL,
  `tanpa_bng` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasar_tradisional`
--

INSERT INTO `pasar_tradisional` (`id_pasar_tradisional`, `id_kecamatan`, `id_tahun`, `permanen`, `semi`, `tanpa_bng`) VALUES
('f028c98f417d17ed66aab9bc359231a11688865e', '1', '47a9cbe87c0451df9dbafa1ef5e0478515a4d69a', 0, 0, 0),
('f453bc55d0e0513884d80e01dcc5b1ba9ef4112f', '4', '47a9cbe87c0451df9dbafa1ef5e0478515a4d69a', 2, 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemandu`
--

CREATE TABLE `pemandu` (
  `id_pemandu` varchar(255) NOT NULL,
  `sertifikat` varchar(255) NOT NULL,
  `nonsertifikat` varchar(255) NOT NULL,
  `id_tahun` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemandu`
--

INSERT INTO `pemandu` (`id_pemandu`, `sertifikat`, `nonsertifikat`, `id_tahun`) VALUES
('0d82a3536667b73e4c1bfdde48a7f9e58d47cc93', '19', '22', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a'),
('2620e0bfcc7f98e24a661142d54cdd5747b428f3', '19', '0', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b'),
('434fe53f7602a9d8ae33668e3b69b18687521954', '19', '22', 'fd429aed2ec6947fb68035d7d00c93700bd623c9'),
('cf9eb31ed378ef1e11812ea747f69fdf5d67fec1', '19', '22', '2e245803c5fb42627f947044f75d44cf5d66aa23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemohon_kerja`
--

CREATE TABLE `pemohon_kerja` (
  `id_pemohon_kerja` varchar(255) NOT NULL,
  `id_kecamatan` varchar(255) NOT NULL,
  `id_tahun` varchar(255) NOT NULL,
  `ak1_laki` varchar(255) NOT NULL,
  `ak1_perempuan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemuda`
--

CREATE TABLE `pemuda` (
  `id_pemuda` varchar(255) NOT NULL,
  `id_tahun` varchar(255) NOT NULL,
  `id_pendidikan` varchar(255) NOT NULL,
  `laki_laki` int(255) NOT NULL,
  `perempuan` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemuda`
--

INSERT INTO `pemuda` (`id_pemuda`, `id_tahun`, `id_pendidikan`, `laki_laki`, `perempuan`) VALUES
('06KDvqFXpM8QXJlkGucCx2AY6h2uJgIFFHWcOvJa', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '5', 84562, 88721),
('0ZgagWM6I0xbxsLtKli6EdNpqX1KR3maSNJHHQ9G', '2e245803c5fb42627f947044f75d44cf5d66aa23', '1', 1414, 1324),
('21nmLCnFgUHkjH2CggEwsM0osl1hG3LMeyljEn9C', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '2', 14360, 11135),
('3olEgagYWnGn0TCRQfsCEQHyq93dsHfIKbtTYB3c', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '3', 22699, 23816),
('5i9RbWdUMBdVRYFRIyo2XTYC90QyOtAx9j0hLQyQ', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '2', 5104, 5355),
('5J7W4esFRK8W3aYtbC3S1YYvqGb4QjFqL2ybwidp', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '6', 4599, 7395),
('5phpskwLgG5W93etPCcLiLT84ofkZUX6gzldlkH0', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '1', 4152, 2539),
('5pk78CPGyuTUrhjNab7cbzzmmOT1WOEnBJuO7Fkq', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '3', 49099, 42269),
('C4dntujlTuxsOBZ8mLCrVnJ1yeDvqJrBCFXl1f6L', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '5', 70223, 64938),
('hCl2jOab6YJiWFYrWoK25ANDm63lWA4jFtXsbEB5', '2e245803c5fb42627f947044f75d44cf5d66aa23', '6', 24668, 23022),
('hhH8flh1puwo3g49NF05Em0ajiDoGhZZ1Bis3U99', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '2', 11451, 9078),
('IGGNvKhLTAIloaNvMr4ZWk2jOdnyHKfCoJynrm8D', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '6', 5768, 9070),
('jdrFVbMqx8aP53ry8ZJiRt09cREdJUMAcP2mgr8u', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '4', 76405, 80163),
('jWDN6AQRkI4H4MPoegHE7j9QTxBurOEoDSW1Qv9r', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '1', 3311, 2070),
('lBQRkGwlodXdNr1Nco3fzox9iyXeUKzpyGC2U82b', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '4', 66727, 66781),
('LR2iJDz9cWXy7X8v2G2EufR4t2NcmssdLhG4ObfN', '2e245803c5fb42627f947044f75d44cf5d66aa23', '5', 88919, 83229),
('lrqScasUed26HwfMg9VyCtiiH5SqfhHBsilXGVaG', '2e245803c5fb42627f947044f75d44cf5d66aa23', '2', 5373, 5018),
('M31prhiLQwISDa7ejYQKDwqIlnW5fvSMG4RmTpbN', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '3', 61573, 51845),
('n0TBM6EikPerBBEPEjpnK3BaFGRIwfKVPKHD8qfe', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '5', 55996, 52944),
('NvJgJLe4ElwITK21tFLs9xBuqImrnEb9oTkAScXe', '2e245803c5fb42627f947044f75d44cf5d66aa23', '3', 23868, 22342),
('qIloaKiQnbQ9MAcRBPNVDPGucCzAk4vIXeUJxfJQ', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '6', 23426, 24578),
('s5gxbzzpxCy7SpaJbwjewaywc5QjBaDB6mRi454u', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '4', 83680, 81910),
('TXA2YVhomJ6OT3g4BY2LTAGfNiG2ErTbQDa9qZDB', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '1', 1345, 1411),
('WSZKlep1VFb6YKli7FmwGJczxeF6bawnzOqrfXZ2', '2e245803c5fb42627f947044f75d44cf5d66aa23', '4', 80324, 75218);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_pendidikan` int(255) NOT NULL,
  `pendidikan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendidikan`
--

INSERT INTO `pendidikan` (`id_pendidikan`, `pendidikan`) VALUES
(1, 'Tidak Bersekolah'),
(2, 'Tidak Tamat Sekolah Dasar'),
(3, 'Tamat Sekolah Dasar'),
(4, 'Tamat Sekolah Menengah Pertama'),
(5, 'Tamat Sekolah Menengah Atas'),
(6, 'Tamat Perguruan Tinggi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `resto`
--

CREATE TABLE `resto` (
  `id_resto` varchar(255) NOT NULL,
  `id_kecamatan` int(255) NOT NULL,
  `resto` int(255) NOT NULL,
  `id_tahun` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `resto`
--

INSERT INTO `resto` (`id_resto`, `id_kecamatan`, `resto`, `id_tahun`) VALUES
('06MLTBKwYl1e231nkBWt', 4, 4, '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b'),
('1KNlXCGZudISBQRi9OPg', 38, 0, '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b'),
('1TCN7K6NQodaqInxFB2S', 17, 0, 'fd429aed2ec6947fb68035d7d00c93700bd623c9'),
('1wRFjmW7twsQI4H2AaEH', 15, 0, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a'),
('1ZcFD9v4Oab7bUUoTj6B', 18, 2, 'fd429aed2ec6947fb68035d7d00c93700bd623c9'),
('20lfq3cmtulv9oReiWJm', 23, 0, '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b'),
('22tEJiU7zQ1dylmTpY8r', 35, 0, '2e245803c5fb42627f947044f75d44cf5d66aa23'),
('3PiBeWTeiQpj0hG7dd7X', 5, 0, 'fd429aed2ec6947fb68035d7d00c93700bd623c9'),
('4g33wP50dyoxE7i451gB', 39, 0, 'fd429aed2ec6947fb68035d7d00c93700bd623c9'),
('4JBpQTxBtm4ohtB7srWt', 7, 0, '2e245803c5fb42627f947044f75d44cf5d66aa23'),
('4ZVeYhdtSRenqhlaSORt', 2, 0, '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b'),
('5i9ShxVWuoAHjg1wREhf', 34, 0, '2e245803c5fb42627f947044f75d44cf5d66aa23'),
('6gyc01vP52lZN1qzGAut', 6, 0, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a'),
('6gygIJVRW8yIOt8rhngs', 16, 2, '2e245803c5fb42627f947044f75d44cf5d66aa23'),
('7Eb9pUoPU3co2bidrEQG', 38, 0, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a'),
('7kBY1JJUJxgMdvYrSYGV', 24, 0, '2e245803c5fb42627f947044f75d44cf5d66aa23'),
('7kFn6vD7mPYN451hJGC4', 13, 0, 'fd429aed2ec6947fb68035d7d00c93700bd623c9'),
('7lHwlmUvz0vSNIF9qaHV', 35, 0, 'fd429aed2ec6947fb68035d7d00c93700bd623c9'),
('82ahafOnhtCBB95nZKlf', 10, 4, '2e245803c5fb42627f947044f75d44cf5d66aa23'),
('8cWcLjSu2H8huHYinehN', 22, 0, 'fd429aed2ec6947fb68035d7d00c93700bd623c9'),
('8nOSw8k9NG05I13550cu', 15, 0, '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b'),
('8pZCA5kMMafQySDVk1jS', 35, 0, '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b'),
('8QZP8L7PXIiWKtLsCBBB', 12, 0, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a'),
('90NlV6nUx8fjXJp1R1dv', 6, 0, 'fd429aed2ec6947fb68035d7d00c93700bd623c9'),
('a1BhnkCZ4WFWfd0wZpHn', 4, 4, '2e245803c5fb42627f947044f75d44cf5d66aa23'),
('ANBfan3hDn9EYsbByAjz', 36, 0, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a'),
('aO3xTJ1yeBpOMT71cp7z', 30, 0, 'fd429aed2ec6947fb68035d7d00c93700bd623c9'),
('aQEjlSpdYgdvYpK0rA4g', 14, 5, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a'),
('aSLExvb6YHaudIP0e4Di', 32, 0, '2e245803c5fb42627f947044f75d44cf5d66aa23'),
('az1xZoBLyiU70VK0sDHa', 11, 3, 'fd429aed2ec6947fb68035d7d00c93700bd623c9'),
('b5U1UBJq8xFB1Qrun4pm', 21, 0, '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b'),
('B6phqyAixTL9X3YPGtUf', 17, 0, '2e245803c5fb42627f947044f75d44cf5d66aa23'),
('bBw020nnORtwsOAUpVsg', 24, 0, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a'),
('bBy7W7rnDZ1Eyxjcjcmt', 27, 6, '2e245803c5fb42627f947044f75d44cf5d66aa23'),
('Bhngr7qjyWWtkrwwico0', 33, 3, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a'),
('bnzNmbXkuC4aYtbC0F6a', 9, 0, 'fd429aed2ec6947fb68035d7d00c93700bd623c9'),
('BSZLosl5wJZkrvqIlocU', 8, 2, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a'),
('cfJOs1LUHmsthf5ElzTF', 10, 4, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a'),
('Cgf6LF2H9lCa7gtId5OV', 17, 0, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a'),
('chVGfNg9WzDz8YA1UDPF', 14, 5, 'fd429aed2ec6947fb68035d7d00c93700bd623c9'),
('CwuZy0xZpGicnxE8nPVA', 9, 0, '2e245803c5fb42627f947044f75d44cf5d66aa23'),
('d29QYKpxAnLBjuC8uz25', 37, 1, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a'),
('d29Tk8JxkfwZsVivIXfY', 26, 0, '2e245803c5fb42627f947044f75d44cf5d66aa23'),
('e232r2Rv9nPU3dtN2tA2', 25, 0, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a'),
('e9dYhhFz1yd6TrkzZihC', 14, 5, '2e245803c5fb42627f947044f75d44cf5d66aa23'),
('eNjMS3kQh5CXxztO57BM', 11, 3, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a'),
('EQGvgQxNonOPh7J4Em3m', 13, 0, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a'),
('EVcSEcHOwNs7nTnORsul', 18, 2, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a'),
('exeF8j9NFywc9k650bo7', 31, 9, '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b'),
('eymmNPmUw7ZLsCCGXkzV', 23, 0, 'fd429aed2ec6947fb68035d7d00c93700bd623c9'),
('Fb8hvNwRBSaQAQQh6Flt', 4, 4, 'fd429aed2ec6947fb68035d7d00c93700bd623c9'),
('FKiRv7elh1r6kI3EoDVi', 6, 0, '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b'),
('FxqDN6BTgnmMIHJZmzTG', 26, 0, 'fd429aed2ec6947fb68035d7d00c93700bd623c9'),
('Fz5HyrDN43uDCCGWghIE', 23, 0, '2e245803c5fb42627f947044f75d44cf5d66aa23'),
('giKNkStuhajhAY5ftJjY', 30, 0, '2e245803c5fb42627f947044f75d44cf5d66aa23'),
('GpBIlnVyD0CpOKHHMpw0', 22, 0, '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b'),
('H5Obc9j3tAyF8lFm2hDq', 1, 0, '2e245803c5fb42627f947044f75d44cf5d66aa23'),
('hJJSAK0sCEO7Fkpj0gG6', 18, 2, '2e245803c5fb42627f947044f75d44cf5d66aa23'),
('hMafQyPwMpurQMOiFugV', 12, 0, '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b'),
('hnfq1RzS76zVNCgiJIOt', 15, 0, '2e245803c5fb42627f947044f75d44cf5d66aa23'),
('hni3yXdLgEyyntwrImro', 36, 0, '2e245803c5fb42627f947044f75d44cf5d66aa23'),
('i30fAfiNbkiDn89BIoxD', 37, 1, '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b'),
('iBeXa8kBVqVrbHRAOKGD', 34, 0, '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b'),
('ibkmSnQbZrRUw3JF7hxZ', 27, 6, 'fd429aed2ec6947fb68035d7d00c93700bd623c9'),
('IqDLwVWy7W7pfhJLZig7', 22, 1, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a'),
('j52onOPjGzymlMKOqtku', 14, 4, '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b'),
('J8YGUTj68FfPvEFKmkDe', 21, 0, '2e245803c5fb42627f947044f75d44cf5d66aa23'),
('JapGfOmXDJiVFWjwKgIE', 5, 0, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a'),
('joi0jTyKXXtks0CqTefC', 25, 0, '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b'),
('JtMyc02yd4KF4TxGFHUT', 13, 0, '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b'),
('k2lWB95ofjVBCHeGEC7r', 1, 0, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a'),
('K358Ea7fpzIKdyrDJmpb', 37, 1, '2e245803c5fb42627f947044f75d44cf5d66aa23'),
('Kcyq7tz6NPkNS1XUefBm', 35, 0, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a'),
('KIKbrKwWeWXumzTFeMf6', 20, 4, 'fd429aed2ec6947fb68035d7d00c93700bd623c9'),
('KnqgkWDMziT2bjh7MJHJ', 27, 6, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a'),
('kqrcKbvdD3U4kNU82ewd', 8, 2, '2e245803c5fb42627f947044f75d44cf5d66aa23'),
('kvC4aXm8CPI4LMaicnxG', 5, 0, '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b'),
('LbrKvSNLS2iG2FwpA982', 30, 0, '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b'),
('ldlkJ9dasUbQ8FgXQPba', 20, 4, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a'),
('lWBA6svpBJozMhCl4vDB', 33, 3, '2e245803c5fb42627f947044f75d44cf5d66aa23'),
('M46AOGywdDy5NQqoOJGC', 1, 0, '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b'),
('mCRRkHytLuNzfAgkYKp1', 2, 0, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a'),
('MIGGNwO1jRqiuDB6obRD', 23, 0, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a'),
('MOg6KBjzbsOBZBzGB0HG', 4, 4, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a'),
('MQt2LRzUKzq5jFtXrXwu', 3, 0, '2e245803c5fb42627f947044f75d44cf5d66aa23'),
('n5u6dgNeyljCeVOKJOs3', 28, 2, 'fd429aed2ec6947fb68035d7d00c93700bd623c9'),
('NhBggCoIuSShzfF4Stuk', 19, 0, '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b'),
('NPjJAjyZkrvsRQfrA5jI', 21, 0, 'fd429aed2ec6947fb68035d7d00c93700bd623c9'),
('O9OMT7zR4t7i2wP4xP2l', 31, 8, '2e245803c5fb42627f947044f75d44cf5d66aa23'),
('OGz0tJkaXk1gAfd3CeVP', 2, 0, '2e245803c5fb42627f947044f75d44cf5d66aa23'),
('OIAoL9aIbvfPqtjnflgz', 11, 2, '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b'),
('oj2ooUoRaTRceE1G4Odo', 16, 2, 'fd429aed2ec6947fb68035d7d00c93700bd623c9'),
('OJCum1aknYFQFmzTEa3M', 24, 0, 'fd429aed2ec6947fb68035d7d00c93700bd623c9'),
('OKJPzVQSqhnj54uEFP9M', 32, 0, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a'),
('ov2Fyyow9k9K2452kV8y', 29, 1, '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b'),
('P2ni1qzF7h0jT3f0uKnn', 38, 0, '2e245803c5fb42627f947044f75d44cf5d66aa23'),
('P9L8SkEjpl9L7ORsvo71', 8, 1, 'fd429aed2ec6947fb68035d7d00c93700bd623c9'),
('paHVUnL9ZGREihDm5xOt', 34, 0, 'fd429aed2ec6947fb68035d7d00c93700bd623c9'),
('PKE4U4jI8aNze8X6nVw4', 19, 0, 'fd429aed2ec6947fb68035d7d00c93700bd623c9'),
('PwKcwicjg48Gn2blpiwM', 31, 8, 'fd429aed2ec6947fb68035d7d00c93700bd623c9'),
('q0JOqsioj52nj6AL6GsS', 32, 0, 'fd429aed2ec6947fb68035d7d00c93700bd623c9'),
('qdWUk53olEfVOFwlrrXy', 6, 0, '2e245803c5fb42627f947044f75d44cf5d66aa23'),
('qpRXFSNKNlV5kI7V0Poi', 1, 0, 'fd429aed2ec6947fb68035d7d00c93700bd623c9'),
('QXCEN579HnxD4VDM0nnR', 9, 0, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a'),
('R8DSUw5PdoyGEFO0kWCJ', 28, 2, '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b'),
('rnEa7ekcfLXXtjmZKmkD', 24, 0, '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b'),
('RzUItN43vIWbGNwO1jQk', 3, 0, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a'),
('S60WUfjV81XRTspK1xWb', 34, 0, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a'),
('sEN2tB5kJ8aNzc0yiVCL', 8, 0, '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b'),
('sFSLBjxOzan3jJE4V7u4', 11, 3, '2e245803c5fb42627f947044f75d44cf5d66aa23'),
('SkEhf38MFz4BaDB6oYC8', 39, 0, '2e245803c5fb42627f947044f75d44cf5d66aa23'),
('SNLPs2LS5wHOxTK259Jv', 10, 4, 'fd429aed2ec6947fb68035d7d00c93700bd623c9'),
('SpaHWZAyAnK6ORroMAdU', 31, 8, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a'),
('Sty2467AKxgKTCPKEz8V', 12, 0, '2e245803c5fb42627f947044f75d44cf5d66aa23'),
('swwgS3jKHHP4uDB6nW4a', 20, 4, '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b'),
('T3jKIKcva05J6PcgOmWA', 38, 0, 'fd429aed2ec6947fb68035d7d00c93700bd623c9'),
('TAFYvkpj2pshkV4iAZB0', 18, 3, '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b'),
('teTDXscGLkaTUqbLiNZZ', 26, 0, '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b'),
('Tsl2maQCa9qaFKiRv7fn', 33, 0, 'fd429aed2ec6947fb68035d7d00c93700bd623c9'),
('tViuFJiRv7ekchT85rtj', 15, 0, 'fd429aed2ec6947fb68035d7d00c93700bd623c9'),
('tXoHqCKr91TCM31nj6AO', 39, 0, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a'),
('U0LZeMiID3RtxvdF8mNL', 17, 0, '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b'),
('u7hyd6TqgjPh8OQkI8ZK', 19, 0, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a'),
('UCOAVtn6xLgCnEb8j6AO', 25, 0, 'fd429aed2ec6947fb68035d7d00c93700bd623c9'),
('uHVWy5PdlkH2BdR9Gibj', 33, 0, '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b'),
('UyF9pW0F7gr6oZHXfZfT', 3, 0, 'fd429aed2ec6947fb68035d7d00c93700bd623c9'),
('uz3CcNpskyQ4uAx8cVY6', 36, 0, '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b'),
('v6ZO58CSW4esHb17MIE9', 5, 0, '2e245803c5fb42627f947044f75d44cf5d66aa23'),
('VBGb5SqitB2T84oeeCqS', 29, 1, 'fd429aed2ec6947fb68035d7d00c93700bd623c9'),
('vHUScawkkKHEB1RwGLmf', 7, 0, '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b'),
('VjyVQV5jFrPH3ErRUv1B', 29, 1, '2e245803c5fb42627f947044f75d44cf5d66aa23'),
('VOH5QiATkAQRmQaYpM7L', 22, 1, '2e245803c5fb42627f947044f75d44cf5d66aa23'),
('vqFXm9EYwsM31lbazzou', 3, 0, '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b'),
('VrbGLmgvSK8X7qebsRNS', 36, 0, 'fd429aed2ec6947fb68035d7d00c93700bd623c9'),
('WKuO54xPzZkqpScYoBJt', 26, 0, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a'),
('WL33vIatZxuYqRV3bhXP', 20, 4, '2e245803c5fb42627f947044f75d44cf5d66aa23'),
('wlofhKNkU0QxMkT0Psy6', 30, 0, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a'),
('WyAjzZkqpRaRHtSUtrTe', 25, 0, '2e245803c5fb42627f947044f75d44cf5d66aa23'),
('xaub6bXhjQmSoVusVl65', 9, 0, '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b'),
('xGGMqzIKbqGb4QiAWx5N', 37, 1, 'fd429aed2ec6947fb68035d7d00c93700bd623c9'),
('xJXY3Og49POab3LOkQg1', 32, 0, '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b'),
('Xl4rx147Glv7fovz39RZ', 7, 0, 'fd429aed2ec6947fb68035d7d00c93700bd623c9'),
('xOuEFN0iQqk50dxkiCeV', 10, 4, '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b'),
('xSFhbmv6cb2AaFMr5fxa', 29, 1, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a'),
('xsKp0PpmGo82f4BWvudE', 12, 0, 'fd429aed2ec6947fb68035d7d00c93700bd623c9'),
('xvc9j2r0GC0G9pX0IISC', 28, 2, '2e245803c5fb42627f947044f75d44cf5d66aa23'),
('YIgNe0tJgLUHnxE9soGg', 19, 0, '2e245803c5fb42627f947044f75d44cf5d66aa23'),
('Ym4qpThxVUmIvdE3Rty3', 16, 2, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a'),
('Z0AdYhg9W2RxIQ63nhwQ', 7, 0, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a'),
('z0uMwQ9L5HxnwBvtYtfU', 21, 0, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a'),
('z6NOg5EhhCjwKe5LKS6y', 27, 5, '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b'),
('zd12ycysIfJNokBUk7CR', 2, 0, 'fd429aed2ec6947fb68035d7d00c93700bd623c9'),
('zGEAzILf8W1PnaNze8ZJ', 13, 0, '2e245803c5fb42627f947044f75d44cf5d66aa23'),
('ZlxISEfR2jLOmYHXkvGN', 28, 2, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a'),
('znpbO0fCnEbAqY4ZUW2Q', 39, 0, '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b'),
('Zuhbmu2IE7i58DYy0xd6', 16, 2, '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun`
--

CREATE TABLE `tahun` (
  `id_tahun` varchar(255) NOT NULL,
  `tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tahun`
--

INSERT INTO `tahun` (`id_tahun`, `tahun`) VALUES
('19d021c948bf4cc06fe50bcbaec50c4edf8868ee', 2018),
('2e245803c5fb42627f947044f75d44cf5d66aa23', 2023),
('47a9cbe87c0451df9dbafa1ef5e0478515a4d69a', 2024),
('60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', 2020),
('7acabf0d950adc8e9322b23f25d891fd3de13aea', 2017),
('cd68a85bbbb779bc24ca042f9150ba231d429d8a', 2022),
('d49866f3cc67871a3f3b3adf4772739f4c5117d6', 2019),
('fd429aed2ec6947fb68035d7d00c93700bd623c9', 2021);

-- --------------------------------------------------------

--
-- Struktur dari tabel `telur`
--

CREATE TABLE `telur` (
  `id_telur` varchar(255) NOT NULL,
  `id_kecamatan` varchar(255) NOT NULL,
  `id_tahun` varchar(255) NOT NULL,
  `produksi1` varchar(255) NOT NULL,
  `produksi2` varchar(255) NOT NULL,
  `produksi3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tenaga_kerja`
--

CREATE TABLE `tenaga_kerja` (
  `id_tenaga_kerja` varchar(255) NOT NULL,
  `id_kecamatan` varchar(255) NOT NULL,
  `id_tahun` varchar(255) NOT NULL,
  `tk_laki` varchar(255) NOT NULL,
  `tk_perempuan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `umkm`
--

CREATE TABLE `umkm` (
  `id_umkm` varchar(255) NOT NULL,
  `id_kecamatan` varchar(255) NOT NULL,
  `id_tahun` varchar(255) NOT NULL,
  `umkm` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `umkm`
--

INSERT INTO `umkm` (`id_umkm`, `id_kecamatan`, `id_tahun`, `umkm`) VALUES
('0hLT74ndaucE8qcRANCkxNrzG8k9NFwqDM1tELou', '8', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 378),
('0noVusTbRGn2f1xYm1e1yd5OWHfMf4AScavgVIp3', '16', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', 319),
('11qzIJXcGLmgtIbxp94kNSzS9DSSmNOh8NNafNjO', '2', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', 36),
('1wVVuoDRPYQGuYwpBHhS3jMPnaQCZ3QoecytMycz', '32', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', 157),
('1XTbREgZb9oQZN1nlJ5KF4Suz5J6SoW1LYXtfWQQ', '22', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', 199),
('2BealvC2SzQ0amzPu9vxtPCdPyUOLMdtPEn4oj2q', '15', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 338),
('2H6YHavhbkjH3I7YGTQZO42qwzznttdLgCoGlqoJ', '37', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', 119),
('2S2dxfIKbrLwYn8884plCXwua4NZWl5zYbC1LXTb', '30', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 335),
('3JF7kBXx133yWWsfYbBzCujpmEgXSZHWbJZksx28', '8', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 832),
('48IweIOryAj0gDsbBx7X91VJuO41laUUshjNWM5A', '26', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 759),
('7wC2Rv8j7EfTBKwZqL36BQSoX8rm8BLzlj9RcZpH', '39', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', 125),
('7zS9CPI5MQrqWseSAKzljBXzDwuXqQRnSlJ4H037', '34', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', 240),
('8CSW2UADOCfXY1ExxlkJBnFiduTVw2CiqwxqBCIl', '6', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 448),
('8PV6stig7QYO8J0uO69HnyKYdNnhvP3wMpsl0Zhd', '12', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', 31),
('8yKYbC3U84naNzeAffCoJxiYTX8tvkpj1kWEO9PP', '22', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 349),
('8zQ0ZhbjkKG9oQZO69Hmu2ICwzyhT3iFwnyMgDpK', '31', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', 948),
('9DRSoUurPKE3Ph9UqZ8rhlZN2r4beJR5yP0bsQJ7', '19', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 414),
('9PU2ZZz4FqM5CZ6enqfd133vJeAgnkARYKlgxc3H', '14', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 214),
('ab6ZLsB7ty11tEIfIGKhIHLhLR0XVlBQPckg0otq', '3', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', 55),
('AETZDGTSgsB90S6xMjStvo85sy26Fkt0F1BjuC8v', '7', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 214),
('aKhKPvD7paHURZP9NEuiduUY7lI4I7V3YTX9v2H5', '29', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', 354),
('alt2LT85rsgbqEQKCqSbVY6eow7ZN2qzF8kCbEA1', '10', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', 144),
('AqaFIZm4qpRbWeXY0CpL7PWFTToUqaGNwQ9IqDLv', '4', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 597),
('asSXA0QvB0KR3maSKAdYgcrJoyE6eljDku7hybvg', '28', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 134),
('b9lCY2LS5sy6SlK9cVXz8bQAPOYQJ8ZIc4JAmFko', '28', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 523),
('bD7oX5h1r5gyhOiFxqBETUqeWUiyWY2NdsLvQASZ', '10', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 381),
('Bfd1468CRRjAVpShuKjVCIkesGXkwKe8YDGUVvub', '3', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 133),
('Bl7760YbBy7W7pcUOKKTEa4Ssuhf22vNvLmgwVX2', '13', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 366),
('bLlbb3I9izd0znoX6i59K244zYePvGMq0KS9DTYD', '5', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', 80),
('CN8NJHITIwc8gr4cjckkI5Pdkh455yVQTx9k9Jxi', '38', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 406),
('co5obTNH8eiRtxzwXippUoRcb04AUnLBgiNXSUv1', '2', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 216),
('dAnJ1zlepzLYcGIYikSspMAcNuFMuJfG7fq2WJrA', '21', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 504),
('dasTaKleow8huJd4I9efE08W1Nf49QWA5nX8w8gq', '29', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 632),
('DbBx3G05FpCOAUpUnMFy0xc3EqNDl3lV6oaMtEJj', '35', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', 267),
('DJljAX1IIR8AHklPYRLF1Fz4CcKe4H16IzwZrQQd', '26', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 65),
('dp8zNkStvlt0BivHSJ38NLNkQjDlyOwJbucApWuq', '36', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 410),
('e5J8aLnoVvxrIhU85t0CpNFyxhVDQJAhptqOH3Fw', '15', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 1221),
('eBpOLOmYHbyuSRdfJOqvvgT9DSUskzVRW7roHp81', '17', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 106),
('EKkdkh59NFvjiGyvWhnj53t6i7Iyo0Ps0F3MT870', '33', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 372),
('EMxZm0ZfR4qqY4YLxZn9AGfNjMRxISDZ4U2Za1Fy', '6', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', 221),
('eOpoONWKwWdSCSXB8xD4XKp2YUeZm2g8UtpIo0T9', '6', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 374),
('fgIEAw4MRwGIYilTxD3T0T9EUeZn5rsfZgVM8RbX', '27', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', 560),
('fxb1AZC8v2G2FxrHgQv9qcNr3VFWhooShxWbGNuE', '34', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 3537),
('fyhPnaO4zYgahco1YZy1zmjATj3uEHZoEYvo6wFF', '23', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 231),
('g343vFLnoUtnBN8PSv4SrpL6LF1EwrHhVHhVFb6Y', '17', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', 15),
('gxZoEYvn2f243vJZoBIlmRh30hJJSCRUyE4SyKXY', '23', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', 191),
('hFy0tKouxuVeYeQ3okAOH7ZMtGSK6MMagTCPHzzo', '11', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 692),
('HZpJtO8JyozLbmxIR9FgS71dwb5PesEQFpEXmBOG', '18', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', 182),
('iAVupHkjEqL2zeAk2lZP9POZZvmzS73nfkbb3I9j', '7', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 258),
('ihErUixSFhdvXkwLlZRKAffBl7771dvZvjkMPmYH', '14', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', 196),
('J39QV4jH3EsVmBQQi7J0xd6SqecvdFAw05DeVNBe', '9', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', 126),
('JhPkNT4lSqhlaUUsjqrbHSFkncVX1IIQ50amyNmb', '35', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 638),
('JhQtz6QftJiS1XVk4vFJeAk5zVScXfXZ6aVZB3XN', '13', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 117),
('KkaYpK0sCBCHdCun3mZJkbeGBzDy4H2AaFIc00tH', '24', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 246),
('KorjvGP6774ohvNwP4ySDZ4RpebveLcrKuMxUTi1', '11', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 566),
('l0crLvSMIE6fsBA5ocUTj3uFMtCA4h6J28PTzMg9', '28', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', 96),
('L2ybwiclqmBOFvjiFvico1YWoJxhQvC1LXSYFP6B', '37', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 436),
('lgxZpFcCx033xTK37Ivb5QkJ8ZJgJNngsA2YUbNt', '32', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 262),
('lQjEm5sz8ZHVWx2AaEGSJ130kZRI15DbGLldhRv9', '24', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 306),
('M9TlEkrsfZfUIo4h9VskyQ3oj565xNqvxp93h9Vv', '17', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 43),
('mqhmfpx9huGREijKJPwIVUlEgYXsdNnhybxmrqSc', '27', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 678),
('mtwuYtdMjPfwWghFy0wVZAxAk65xP1hH8eiRwC1N', '1', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 335),
('n0TAFcCwytN1qx8fiSyKbpBFZxuTVyAmFhbklQgy', '16', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 531),
('NblpjxTMAcP3qx4KGBzCqWsdQ3qupFZ08Vx5OZVf', '14', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 694),
('nj6ANFvjiDl2lV6qivLjT1UHmql9GicnzNkSssY0', '12', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 56),
('NkPfuQElu5ZRI00q3ZYuhbnyKan3kOYPGucBtjrw', '19', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 332),
('NU982eyllNOh8QaTSfq5i8PT0OpoONWKxavhZa4P', '33', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 179),
('o2ZdIR79EViuDEJjWIlmToVvxp7xIP2mcavif1wS', '8', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', 167),
('OaYsWrY1IGFHVY5ZTUqcP1iNXOCgcsPDimbUSi0i', '30', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 238),
('OPiDkuAyBqX0DsdLe28OPh7I0zler8yINs5dkh6D', '9', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 588),
('P54wIVWsilWA7xE7kCdPxR8BOGwlofiOexhPmYDJ', '31', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 3121),
('pBJo0PqseVNDpIsKp2WKuQGqHhUDTV0ILgDsZ3Qm', '39', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 255),
('PiEpGhXQLGAqbKfCpOI8dd7UxAnK7Rfr91VKuPBX', '31', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 1088),
('qbLkWERJ6OVBETX3YOATkAOLLWQRkFrM33uGP7AL', '25', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 236),
('QNU7yLf8W3ZUZFNwSJztJkcgQsy4FrQPcgNhDpJv', '2', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 62),
('QOXLvSNLQwFHVWtn6yOuB0Ng7QaUY8qhkXEPDhgA', '4', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', 286),
('QQftIfIJWTfmi58Ho2afR1f4BY3RtxzwWeWUk4zb', '38', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 265),
('QZQFpCL0pzIKdztMvNybtWm8DUdYgbo6u6cbzzr9', '22', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 532),
('RHwgPt2KQxKe5I7V2T6xISFig7OSwCx5NS1YXtgZ', '5', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 241),
('RmQdliAWwxp4lPZWjuD9zLajkMSzPwHSIvc8gotq', '1', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 691),
('rqVpRZMxZm1e0vPAQSsqSYEMxYkt4XIjbdCvrOEo', '37', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 434),
('RYFQEkpmHrHiXPEpGeJQ3ppWw021opaFJfG9pVvu', '27', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 2719),
('T5t2KPsy4JBmEcGJarL1uKkbZvkmUv3KJPxOvJd2', '11', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', 357),
('THmswvdE7gxXfZif4ATgq1OnaO1nj9OMRzR4rwxo', '21', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', 372),
('TQaUY7nTnQYJmlNNdsHfJR3ndgJMhEwpADQJ7V0K', '4', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 402),
('Tw5U3cjh8PT1TAGeIOuC6nVw5PetIgKQ1f7RhzjU', '30', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', 144),
('ufR4ruqJsJmlI5NRu6bWeYfXTed6PbeE5YKq3biZ', '9', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 375),
('UKykfuP9NH7YIc5PdntvmxHNr4ZSSkBVoPRrl5yR', '5', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 419),
('uUaGRDdKao85sx14565zVOG037HrHhS2hBghJHJY', '13', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', 42),
('v05HzxfIKbrM3zfAjxRBQOWHiXPGxnwC1LUGfOmY', '12', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 51),
('VcQ8CQMMZeLctQKEy25BWrbFJe9ed29SemmMMVJv', '3', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 257),
('VDQGwido3fykfvUShwRGpADPDgbo4ncYjs0Exynu', '36', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', 260),
('VInwBw022s7mPYN451iMT86wD5eq5kLKS9BJsHc5', '29', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 2736),
('VOI7YHYkwHSIuWk0ao5rsfYcEAzINmfnqghICx29', '25', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', 91),
('VOKJNomIzuQGqHjeuPARZKpx8eiQrrZ7guMvNxTJ', '1', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', 137),
('vvhagVHlphptqM5CbDAyGC5ep2VJqA96u2HBrdSB', '16', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 127),
('VwywZtcEAx8cWbKd3CeUNDm5xNqx4LJPwLhID2Qo', '26', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', 88),
('WeVQQh5BSZJkbb3KJQ1hEwo4kMPncWdR9HkmTuvl', '36', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 355),
('wlrpOKJOuB0MdsN59L6J7Uvyynu06NOf1xarN8NK', '18', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 1651),
('x15DeR4ry6QfvRFlxIR9HnxGGP53r0F3MWM5AOKK', '24', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', 144),
('X90QxLe6NOiEsWoMErSZJiQsum0UK0sELs90Pu6c', '20', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 160),
('xC0Ey11tFO4zcvb6YIgKS9BL1wQCVoMBis4aYpM8', '21', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 934),
('xfGByAixSHsO8MEwp995rscKcyrCEPDeTGjg47Go', '33', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', 110),
('XjppUoQV5lPYRNQpfjT1WPKE2IE7kElwITK5FqJr', '25', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 208),
('xkh469IrFUY9x8gorhlXHayxgPnaO3wNtCA4fwaw', '7', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', 179),
('XLziU7zR4qpVreVRV1UBHfNhEtbC2QsxxkjFtXpQ', '39', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 189),
('XTcWaC5eq6qjyXZ5ZPDhe1xbzykfuO563olBUhuI', '34', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 4156),
('XTZJgKOry6Pbc9j4zZjncXikTv5Tw6aSKAed1457', '18', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 515),
('y5NS1XTbSIxllNOjG06HxlmSpYA0Me0vQDdOuAw4', '32', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', 139),
('YlzVQSpdURXCEQGsQMKPu7lHwicmtxuZvjmW6mRh', '15', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', 249),
('Ym1dxjbdF8pX4aWipsjt6eov2EvkncVY6fq6pfiO', '35', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 250),
('YvmzR3mcaudIOxR9Gjf20mgxarN9TkBWum0XVk51', '10', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 348),
('zKVPOZXm9GgUCODjs2MZb9nNLOohuHUTkAQRnW1O', '23', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 626),
('zp3cloaKlcgPqqUlBVmEfTBNAWvwnyJUNEqOGxp9', '38', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', 248),
('ztLuMtCDHd9gmh2uHXhgBfgCpNDpIqDLuLsA3aeJ', '20', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', 160),
('zyiVDPEm3kRmOU7zOomHtSRep1T86yNolEheyjdo', '20', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', 261),
('zyllJAgnmMHBtku7hzfE0CoGlqoK242rzF5XHeDx', '19', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', 286);

-- --------------------------------------------------------

--
-- Struktur dari tabel `usaha_wisata`
--

CREATE TABLE `usaha_wisata` (
  `id_usaha_wisata` varchar(255) NOT NULL,
  `biro` int(255) NOT NULL,
  `agen` int(255) NOT NULL,
  `id_tahun` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `usaha_wisata`
--

INSERT INTO `usaha_wisata` (`id_usaha_wisata`, `biro`, `agen`, `id_tahun`) VALUES
('869773826f0597808d53807be825e7e0cf77ffd3', 9, 2, 'cd68a85bbbb779bc24ca042f9150ba231d429d8a'),
('ae2ebd04e1b02a0289fb4557cf0890eee728e470', 9, 2, '2e245803c5fb42627f947044f75d44cf5d66aa23'),
('cc7cf420bbf5b650bdc1261ef449a56455368e66', 9, 2, 'fd429aed2ec6947fb68035d7d00c93700bd623c9'),
('efbeb59c0d92efe6a75e43a4c62b4f1351eeab99', 10, 2, '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisatawan`
--

CREATE TABLE `wisatawan` (
  `id_wisatawan` varchar(255) NOT NULL,
  `id_bulan` varchar(255) NOT NULL,
  `id_tahun` varchar(255) NOT NULL,
  `kunjungan` varchar(255) NOT NULL,
  `tiket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `wisatawan`
--

INSERT INTO `wisatawan` (`id_wisatawan`, `id_bulan`, `id_tahun`, `kunjungan`, `tiket`) VALUES
('20jT3ewavlpj1iOewZtZ1DqPNT3jLKR74qraC4be', '9', '2e245803c5fb42627f947044f75d44cf5d66aa23', '140163', '222398750'),
('3s1KR3oj3t7oY8rjuAzGAvvjjH3I8eiQnaO3tC6n', '3', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '61748', '105537000'),
('5kKDwvcCy4H2Dm5yPyVPMS2dwa06K9bP4zamyMiM', '1', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '97419', '172669000'),
('5PbeF8kDfVL6I0zkcgOmYHZqM7MG4QkKCpRYIc5Q', '9', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '89141', '117289000'),
('5Tw7bXge4En6zVNDoDViuFLnnQaTVtnAJqBA95qm', '7', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '71591', '101111500'),
('63pmIwgS3mW90QvD8tsa6ceDz7Uvz23yXeTFeOoi', '4', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '65653', '127468000'),
('6Ri57BOI8cYku9qdUNEueOs2NbjiBdTJxiZUbNtC', '1', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '57376', '94303000'),
('6zTEbBtkvFHTMEuhbmwBwyvXl0bqGa07PWGXm8AF', '11', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '70425', '113144000'),
('7i2uIZpHlocTOMUDQJAgnlGtWmCRSoWzF5VA95qm', '12', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '49259', '86055500'),
('8htFQARYJgJPt6gye9cWaD9w4ObfNiJGD8rjuDCA', '9', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '67835', '144091500'),
('8oTlEksz7UuvjlRjEkwGKiRrsbFFJhQql8CRRi46', '3', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '36821', '82099500'),
('9ffAjwMopY6i59L6J6Rh3yasPGytN1r3XM0nnRdi', '5', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '20261', '31144500'),
('A4g47FgXVjyYeR4ry8aNxUScZpFeIQ3qvtWoK0wU', '10', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '30716', '56467500'),
('aNxWZ7kDeUHo3h8PU4jI7XCBBAA82bmwBx2CippS', '7', '2e245803c5fb42627f947044f75d44cf5d66aa23', '49934', '74378500'),
('b6XEO8K37FmxGKgIE9rggCnEZ2LQvB1Ng8QYN1or', '12', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '6800', '18640000'),
('BQPaa06J5MNdsLvP7FhaeNmcYkvC5erB94iDm4sy', '9', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '73957', '150908500'),
('BTbRFlt3RtvpETYB6lNRv8j54vIVTiyaoAFYtcIP', '2', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '71708', '134335500'),
('cb0342opWx4LJNpoRbYn8AHiadE6guMwTK6LE1Dr', '10', '2e245803c5fb42627f947044f75d44cf5d66aa23', '66486', '54018000'),
('DbD4YRLDulwE9uxvYsYwuYtcFFIc3G16KAfhMUFb', '8', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '70662', '108965000'),
('E6ep2XRQcfKUHmu1DqPKJQyTHnyMiMUDPHzxeCwu', '5', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '40829', '59433000'),
('eDwwjg2xYikRmRi7EfVL5CaB1McqDOAVpTizfAhq', '12', '2e245803c5fb42627f947044f75d44cf5d66aa23', '55206', '152303500'),
('eVPNT4lSsoJxgNhAZC90QwFEJfEz7SmNMYWmAM7O', '7', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '48853', '56119000'),
('EXqSbSK7QbYrQQftJjYQHyq92dqBESPWCJmmQbb3', '3', '2e245803c5fb42627f947044f75d44cf5d66aa23', '57047', '56812500'),
('fctTYC90QxKd28QV8xD3VBETW0JPxMnj6AMAaEHW', '6', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '58438', '82858000'),
('FYtcIP2ppUqZAyCvtWk1iMWLyhQt0CoJwb2G18Tm', '10', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '55094', '20071500'),
('G3I9gpuvig48K25ANG19W2RwD4XLxavgUEXoK230', '4', '2e245803c5fb42627f947044f75d44cf5d66aa23', '68588', '100748750'),
('gHAqWx28RbWgf6OV94mUw6W8yIOuC5jBbJcxkkJB', '5', '2e245803c5fb42627f947044f75d44cf5d66aa23', '45649', '34989500'),
('hvO2pqbLlaTRcb038LAdXdNppWx4KHFC8v2H8dc0', '8', '2e245803c5fb42627f947044f75d44cf5d66aa23', '36573', '57663500'),
('i7HtTW0ILe5I5LKQzXWsdPyTHo3f37DcIP2mbXim', '1', '2e245803c5fb42627f947044f75d44cf5d66aa23', '66131', '153650500'),
('jt5cfKVNBdUMCjvHSHtSQcgOjI9ixUOKJR4rx29U', '2', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '135254', '322617500'),
('LF09X7oY9yGC4ZUZCA4h9TmK9bQ9JwdAoMDoItQE', '11', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '43410', '80632000'),
('m2iFxuWff8V0LYXun2eymmQaYqQNT4ndarOFsSX9', '12', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '0', '0'),
('OewZsVjyVRWB80PvFIYijPfwZsUgnj7Gn3hCjuD9', '7', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '46099', '59842500'),
('Og1wREgXVk5zakqoPOcloaJe9gkaWfd247DXscIR', '8', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '75125', '138113500'),
('oK22vO0f9bOzcyrCGawo4mV3beJSBM9Si4zam0WT', '6', '2e245803c5fb42627f947044f75d44cf5d66aa23', '66564', '58390500'),
('oY9xAoPQkHzyjab6V6oaNxTNFz1ziRwD4XIlkGuc', '4', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '57578', '65724000'),
('qcNuDB8xD3U7wE8oY7nQdhRyOs3T3g5GrM33yUQR', '3', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '52788', '71750000'),
('S5v9sjrwzvXkyTGmu3Pi9UoSfq2WLxbz0tGVbJZn', '10', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '42093', '51501500'),
('UmJ5I4H4LLWRTuxrIjbgPt2NcmsuijLLXWpPObdE', '11', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '43963', '80687500'),
('UsoEXtgYZ3Odo2Za1EwrKr91TCN8PQnX8sqSaNze', '4', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '533', '0'),
('VCLwXilYIdAj1lYLvO2r0IKZgblrrXvuYvmyMkSv', '6', 'fd429aed2ec6947fb68035d7d00c93700bd623c9', '45256', '79618000'),
('VoMDpM7LCpNEsWpPPetJkciaa3KLXXtgZgXVk2md', '11', '2e245803c5fb42627f947044f75d44cf5d66aa23', '59652', '62713000'),
('w7aO69IqCIkfwWfZhbmwD5enrl4uAvz21r6kFrPI', '8', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '42526', '81327500'),
('x6V3bfLbn2crGb19X6jBZ9trSW4fvUX3VCLvTNMU', '2', '2e245803c5fb42627f947044f75d44cf5d66aa23', '71122', '141181500'),
('xAnK6ORv7guIc048L8TqdRAK0q5jGxo0TBKwYm5u', '2', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '0', '0'),
('XpNEtcD3RwD4aXm773mZMvMuIYkvD8rkyRBRUyE2', '6', 'cd68a85bbbb779bc24ca042f9150ba231d429d8a', '45069', '47564000'),
('ybuc9nK8VyAk661f5Hxo3cp5odYjqqY3S0R1g8Ur', '5', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '90606', '183740500'),
('ZRNLT9BImpdYikPerBBCJoxAnLCl4t5ZTUtn899A', '1', '60534ea9007b7b6e821ed2dd8d6d1e58025f2c6b', '110213', '64253500');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `benih`
--
ALTER TABLE `benih`
  ADD PRIMARY KEY (`id_benih`);

--
-- Indeks untuk tabel `buah`
--
ALTER TABLE `buah`
  ADD PRIMARY KEY (`id_buah`);

--
-- Indeks untuk tabel `bulan`
--
ALTER TABLE `bulan`
  ADD PRIMARY KEY (`id_bulan`);

--
-- Indeks untuk tabel `hewan_ternak`
--
ALTER TABLE `hewan_ternak`
  ADD PRIMARY KEY (`id_hewan_ternak`);

--
-- Indeks untuk tabel `hewan_unggas`
--
ALTER TABLE `hewan_unggas`
  ADD PRIMARY KEY (`id_hewan_unggas`);

--
-- Indeks untuk tabel `ikan_budidaya`
--
ALTER TABLE `ikan_budidaya`
  ADD PRIMARY KEY (`id_ikan_budidaya`);

--
-- Indeks untuk tabel `ikan_laut`
--
ALTER TABLE `ikan_laut`
  ADD PRIMARY KEY (`id_ikan_laut`);

--
-- Indeks untuk tabel `ikan_tangkap`
--
ALTER TABLE `ikan_tangkap`
  ADD PRIMARY KEY (`id_ikan_tangkap`);

--
-- Indeks untuk tabel `ikan_umum`
--
ALTER TABLE `ikan_umum`
  ADD PRIMARY KEY (`id_ikan_umum`);

--
-- Indeks untuk tabel `ikm`
--
ALTER TABLE `ikm`
  ADD PRIMARY KEY (`id_ikm`);

--
-- Indeks untuk tabel `investasi`
--
ALTER TABLE `investasi`
  ADD PRIMARY KEY (`id_investasi`);

--
-- Indeks untuk tabel `jenis_buah`
--
ALTER TABLE `jenis_buah`
  ADD PRIMARY KEY (`id_jenis_buah`);

--
-- Indeks untuk tabel `jenis_ikm`
--
ALTER TABLE `jenis_ikm`
  ADD PRIMARY KEY (`id_jenis_ikm`);

--
-- Indeks untuk tabel `jenis_kebun`
--
ALTER TABLE `jenis_kebun`
  ADD PRIMARY KEY (`id_jenis_kebun`);

--
-- Indeks untuk tabel `jenis_komoditas`
--
ALTER TABLE `jenis_komoditas`
  ADD PRIMARY KEY (`id_jenis_komoditas`);

--
-- Indeks untuk tabel `jenis_koperasi`
--
ALTER TABLE `jenis_koperasi`
  ADD PRIMARY KEY (`id_jenis_koperasi`);

--
-- Indeks untuk tabel `kebun`
--
ALTER TABLE `kebun`
  ADD PRIMARY KEY (`id_kebun`);

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indeks untuk tabel `komoditas`
--
ALTER TABLE `komoditas`
  ADD PRIMARY KEY (`id_komoditas`);

--
-- Indeks untuk tabel `koperasi`
--
ALTER TABLE `koperasi`
  ADD PRIMARY KEY (`id_koperasi`);

--
-- Indeks untuk tabel `olahraga`
--
ALTER TABLE `olahraga`
  ADD PRIMARY KEY (`id_olahraga`);

--
-- Indeks untuk tabel `organisasi`
--
ALTER TABLE `organisasi`
  ADD PRIMARY KEY (`id_organisasi`);

--
-- Indeks untuk tabel `pasar_modern`
--
ALTER TABLE `pasar_modern`
  ADD PRIMARY KEY (`id_pasar_modern`);

--
-- Indeks untuk tabel `pasar_tradisional`
--
ALTER TABLE `pasar_tradisional`
  ADD PRIMARY KEY (`id_pasar_tradisional`);

--
-- Indeks untuk tabel `pemandu`
--
ALTER TABLE `pemandu`
  ADD PRIMARY KEY (`id_pemandu`);

--
-- Indeks untuk tabel `pemohon_kerja`
--
ALTER TABLE `pemohon_kerja`
  ADD PRIMARY KEY (`id_pemohon_kerja`);

--
-- Indeks untuk tabel `pemuda`
--
ALTER TABLE `pemuda`
  ADD PRIMARY KEY (`id_pemuda`);

--
-- Indeks untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indeks untuk tabel `resto`
--
ALTER TABLE `resto`
  ADD PRIMARY KEY (`id_resto`);

--
-- Indeks untuk tabel `tahun`
--
ALTER TABLE `tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indeks untuk tabel `telur`
--
ALTER TABLE `telur`
  ADD PRIMARY KEY (`id_telur`);

--
-- Indeks untuk tabel `tenaga_kerja`
--
ALTER TABLE `tenaga_kerja`
  ADD PRIMARY KEY (`id_tenaga_kerja`);

--
-- Indeks untuk tabel `umkm`
--
ALTER TABLE `umkm`
  ADD PRIMARY KEY (`id_umkm`);

--
-- Indeks untuk tabel `usaha_wisata`
--
ALTER TABLE `usaha_wisata`
  ADD PRIMARY KEY (`id_usaha_wisata`);

--
-- Indeks untuk tabel `wisatawan`
--
ALTER TABLE `wisatawan`
  ADD PRIMARY KEY (`id_wisatawan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jenis_ikm`
--
ALTER TABLE `jenis_ikm`
  MODIFY `id_jenis_ikm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

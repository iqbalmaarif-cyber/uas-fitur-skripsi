-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Agu 2020 pada 08.38
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uas_web2020`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `smt` int(5) NOT NULL,
  `prodi` varchar(20) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `jk`, `kelas`, `smt`, `prodi`, `updated_at`, `created_at`) VALUES
(1, 1755201342, 'Iqbal Maarif', 'L', 'F1', 6, 'Teknik Informatika', '2020-08-09', '2020-08-07'),
(2, 1755201400, 'Alifah', 'P', 'F1', 6, 'Teknik Informatika', '2020-08-09', '2020-08-09'),
(3, 1755201212, 'akmel', 'P', 'F1', 6, 'Teknik Sipil', '2020-08-09', '2020-08-09'),
(4, 1755201425, 'Muhammad Nur Roby', 'L', 'F1', 6, 'Teknik Informatika', '2020-08-09', '2020-08-09'),
(6, 1755201314, 'Ahmad Kurnia', 'L', 'E1', 6, 'Teknik Informatika', '2020-08-09', '2020-08-09'),
(7, 1755201510, 'Dermawan', 'L', 'B1', 6, 'Teknik Mesin', '2020-08-09', '2020-08-09'),
(8, 1755201321, 'Gandi', 'L', 'C2', 6, 'Teknik Mesin', '2020-08-09', '2020-08-09'),
(9, 1755201662, 'Komar', 'L', 'E1', 6, 'Teknik Informatika', '2020-08-09', '2020-08-09'),
(11, 1755201401, 'Komadi', 'L', 'C1', 4, 'Teknik Informatika', '2020-08-09', '2020-08-09'),
(12, 1755201421, 'syifrun', 'P', 'F2', 6, 'Teknik Mesin', '2020-08-09', '2020-08-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `skripsi`
--

CREATE TABLE `skripsi` (
  `id` int(11) NOT NULL,
  `nim` int(10) NOT NULL,
  `nama_mahasiswa` varchar(30) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tempat_penelitian` varchar(60) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `skripsi`
--

INSERT INTO `skripsi` (`id`, `nim`, `nama_mahasiswa`, `judul`, `tempat_penelitian`, `alamat`, `updated_at`, `created_at`) VALUES
(6, 1755201342, 'iqbal maarif', 'Analisa Sistem Penerimaan Siswa Baru', 'SMK Muhammadiyah 1 Tangerang', 'Jl.Kh.Maulana Hasanudi No.63', '2020-08-09', '2020-08-09'),
(7, 1755201212, 'Adeyunan Helmi', 'Analisa Sistem Penerimaan Siswa Baru', 'SMA Muhammadiyah 2 Tangerang', 'Jl.Kh.Maulana Hasanudi No.63', '2020-08-09', '2020-08-09'),
(8, 1755201400, 'Alifah', 'Analisa Sistem Perancangan Pangan', 'SD Muhammadiyah 1 Poris', 'Jl.kh.dewantoro', '2020-08-09', '2020-08-09'),
(9, 1755201425, 'Bayu Sukmajaya', 'Analisa Sistem Pangan', 'Rawa Cipondoh', 'Cipondoh', '2020-08-09', '2020-08-09'),
(10, 1755201418, 'M Nur Roby', 'Analisa Sistem Koprasi', 'SMA Muhammadiyah 2 Tangerang', 'Jl.Kh.Maulana Hasanudi No.63', '2020-08-09', '2020-08-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `skripsi`
--
ALTER TABLE `skripsi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `skripsi`
--
ALTER TABLE `skripsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

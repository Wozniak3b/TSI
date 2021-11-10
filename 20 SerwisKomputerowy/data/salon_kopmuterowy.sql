-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 05 Lis 2021, 12:11
-- Wersja serwera: 10.3.16-MariaDB
-- Wersja PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `salon_kopmuterowy`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `acer`
--

CREATE TABLE `acer` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(60) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `acer`
--

INSERT INTO `acer` (`id`, `nazwa`) VALUES
(1, 'Extensa'),
(2, 'Aspire'),
(3, 'TravelMate'),
(4, 'Nitro'),
(5, 'Predator'),
(6, 'Aspire One'),
(7, 'Swift'),
(8, 'Spin'),
(9, 'ConceptD'),
(10, 'Veriton');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `asus`
--

CREATE TABLE `asus` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(60) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `asus`
--

INSERT INTO `asus` (`id`, `nazwa`) VALUES
(1, 'ZenBook'),
(2, 'VivoBook'),
(3, 'ASUSPRO'),
(4, 'ExpertBook'),
(5, 'ProArt StudioBook'),
(6, 'TUF Gaming'),
(7, 'Republic Of Gamers (ROG Gaming)'),
(8, 'Chromebook'),
(9, 'EeeBook'),
(10, 'G Series'),
(11, 'N Series'),
(12, 'K Series'),
(13, 'X Series'),
(14, 'E Series'),
(15, 'Q Series'),
(16, 'U Series'),
(17, 'B Series'),
(18, 'V Series'),
(19, 'F Series'),
(20, 'A Series'),
(21, 'T Series');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dell`
--

CREATE TABLE `dell` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(60) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `dell`
--

INSERT INTO `dell` (`id`, `nazwa`) VALUES
(1, 'G Series'),
(2, 'Inspiron'),
(3, 'Latitude'),
(4, 'Precision'),
(5, 'Vostro'),
(6, 'XPS'),
(7, 'Studio'),
(8, 'Adamo');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `hp`
--

CREATE TABLE `hp` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(60) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `hp`
--

INSERT INTO `hp` (`id`, `nazwa`) VALUES
(1, 'EliteBook'),
(3, 'Envy'),
(4, 'Essential Laptops'),
(5, 'Pavilion'),
(6, 'Pavilion TX Series'),
(7, 'Pavilion dv2z'),
(8, 'Pavilion dv4'),
(9, 'Pavilion dv5'),
(10, 'Pavilion dv7'),
(11, 'Pavilion dv1000 series'),
(12, 'Pavilion dv2000 series'),
(13, 'Pavilion dv6000 series'),
(14, 'Pavilion dv9000 series'),
(15, 'ProBook'),
(16, 'Voodoo Envy'),
(17, 'ZBook');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `lenovo`
--

CREATE TABLE `lenovo` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(60) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `lenovo`
--

INSERT INTO `lenovo` (`id`, `nazwa`) VALUES
(1, 'ThinkPad'),
(2, 'IdeaPad'),
(3, 'Yoga'),
(4, 'Z'),
(5, 'Y'),
(6, 'G'),
(7, 'B'),
(8, 'Legion'),
(9, 'YogaBook');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `msi`
--

CREATE TABLE `msi` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(60) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `msi`
--

INSERT INTO `msi` (`id`, `nazwa`) VALUES
(1, 'Gaming'),
(2, 'GS Stealth'),
(3, 'GE Raider'),
(4, 'GP Leopard'),
(5, 'Pulse GL'),
(6, 'Katana/Sword GF'),
(7, 'Alpha'),
(8, 'Bravo');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `acer`
--
ALTER TABLE `acer`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `asus`
--
ALTER TABLE `asus`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `dell`
--
ALTER TABLE `dell`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `hp`
--
ALTER TABLE `hp`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `lenovo`
--
ALTER TABLE `lenovo`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `msi`
--
ALTER TABLE `msi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `acer`
--
ALTER TABLE `acer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `asus`
--
ALTER TABLE `asus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT dla tabeli `dell`
--
ALTER TABLE `dell`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `hp`
--
ALTER TABLE `hp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT dla tabeli `lenovo`
--
ALTER TABLE `lenovo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `msi`
--
ALTER TABLE `msi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

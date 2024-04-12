-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 12 Kwi 2024, 13:41
-- Wersja serwera: 10.4.27-MariaDB
-- Wersja PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `warsztat`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `garaze`
--

CREATE TABLE `garaze` (
  `id` int(11) NOT NULL,
  `garaż` varchar(3) NOT NULL,
  `czy_dyspozycyjne` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `garaze`
--

INSERT INTO `garaze` (`id`, `garaż`, `czy_dyspozycyjne`) VALUES
(1, '5G', 'tak'),
(2, '12A', 'tak'),
(3, '3E', 'tak');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

CREATE TABLE `klienci` (
  `id` int(11) NOT NULL,
  `imie` text DEFAULT NULL,
  `nazwisko` text DEFAULT NULL,
  `miasto` text DEFAULT NULL,
  `czas_najmu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `klienci`
--

INSERT INTO `klienci` (`id`, `imie`, `nazwisko`, `miasto`, `czas_najmu`) VALUES
(1, 'Grzegorz', 'Brzęczyszczykiewicz', 'Łękołody', 5),
(2, 'Hans', 'Hansmann', 'Berlin', 9),
(3, 'Saxton', 'Hale', 'Sydney', 2),
(4, 'Adam', 'Schindler', 'Monachium', 44),
(5, 'Piotr', 'Schabowicz', 'Katowice', 23),
(6, 'Piotr', 'Pietruszka', 'Warszawa', 19),
(7, 'Wiesia', 'Stokrotek', 'Warszawa', 344),
(8, 'Adolf', 'Rymszowski', 'Kraków', 315),
(22, 'kunegunda', 'giuseppowa', ' glwice łabędy', 6),
(23, 'kamilek', 'rymszewski', 'kleszczow', 1),
(24, 'dsfdsf', 'fdgdfg', 'dfgdfg', 5),
(25, 'dsfdsf', 'fdgdfg', 'dfgdfg', 5);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wynajem_garaz`
--

CREATE TABLE `wynajem_garaz` (
  `id` int(11) NOT NULL,
  `miasto` text DEFAULT NULL,
  `czas` date DEFAULT NULL,
  `garaż` varchar(3) DEFAULT NULL,
  `czy_zajety` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `wynajem_garaz`
--

INSERT INTO `wynajem_garaz` (`id`, `miasto`, `czas`, `garaż`, `czy_zajety`) VALUES
(1, 'Bydgoszcz', '1998-04-02', '5G', 'tak'),
(2, 'gdansk', '2015-02-02', '5G', 'nie'),
(3, 'Warszawa', '2025-05-05', '3E', 'tak'),
(4, 'Katowice', '2025-03-05', '5G', 'nie'),
(5, 'Katowice', '2025-03-05', '12A', 'nie'),
(6, 'Warszawa', '2025-06-05', '12A', 'nie'),
(7, 'Warszawa', '2025-06-05', '5G', 'tak');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `garaze`
--
ALTER TABLE `garaze`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `wynajem_garaz`
--
ALTER TABLE `wynajem_garaz`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `garaze`
--
ALTER TABLE `garaze`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `klienci`
--
ALTER TABLE `klienci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT dla tabeli `wynajem_garaz`
--
ALTER TABLE `wynajem_garaz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

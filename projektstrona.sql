-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 12 Kwi 2021, 14:05
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `projektstrona`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `bibliotekarze`
--

CREATE TABLE `bibliotekarze` (
  `id_bib` int(11) NOT NULL,
  `login` varchar(30) DEFAULT NULL,
  `haslo` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `bibliotekarze`
--

INSERT INTO `bibliotekarze` (`id_bib`, `login`, `haslo`) VALUES
(1, 'Mareks', 'zaq12wsx'),
(2, 'Zenek', 'qwertyasdfg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kategorie`
--

CREATE TABLE `kategorie` (
  `id_kategorii` int(11) NOT NULL,
  `kategoria` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `kategorie`
--

INSERT INTO `kategorie` (`id_kategorii`, `kategoria`) VALUES
(1, 'kryminał'),
(2, 'fantasy'),
(3, 'romans'),
(4, 'literatura faktu'),
(5, 'horror');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

CREATE TABLE `klienci` (
  `id_klienta` int(11) NOT NULL,
  `id_ksiazki` int(11) DEFAULT NULL,
  `mail` varchar(30) DEFAULT NULL,
  `numer_tel` varchar(30) DEFAULT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `klienci`
--

INSERT INTO `klienci` (`id_klienta`, `id_ksiazki`, `mail`, `numer_tel`, `data`) VALUES
(1, 1, 'test@gmail.com', '111222333', '2021-04-21'),
(2, 1, 'test2@gmail.com', '111333333', '2021-04-05');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ksiazki`
--

CREATE TABLE `ksiazki` (
  `id_ksiazki` int(11) NOT NULL,
  `tytul` varchar(30) DEFAULT NULL,
  `autor` varchar(30) DEFAULT NULL,
  `id_kategorii` int(11) DEFAULT NULL,
  `l_stron` int(11) DEFAULT NULL,
  `l_sztuk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `ksiazki`
--

INSERT INTO `ksiazki` (`id_ksiazki`, `tytul`, `autor`, `id_kategorii`, `l_stron`, `l_sztuk`) VALUES
(1, 'I nie było już nikogo', 'Agatha Christie', 1, 296, 18),
(2, 'Ostatnie życzenie', 'Andrzej Sapkowski', 2, 345, 22),
(3, 'Wampir z Zagłębia', 'Przemysłąw Semczuk', 4, 540, 10),
(4, 'Później', 'Stephen King', 5, 384, 30),
(5, 'Layla', 'Hoover Colleen', 3, 336, 25);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `opinie`
--

CREATE TABLE `opinie` (
  `id_opinii` int(11) NOT NULL,
  `pseudonim` varchar(30) DEFAULT NULL,
  `opinia` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `opinie`
--

INSERT INTO `opinie` (`id_opinii`, `pseudonim`, `opinia`) VALUES
(1, 'sdsdsdsd', 'jaslkdjsalkd'),
(2, 'test3333', 'xzczxczxczxczxc'),
(3, 'ddszdasds', 'bvcbvcbcvbvcbc'),
(6, 'test3333', 'opinia kolejna');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `bibliotekarze`
--
ALTER TABLE `bibliotekarze`
  ADD PRIMARY KEY (`id_bib`);

--
-- Indeksy dla tabeli `kategorie`
--
ALTER TABLE `kategorie`
  ADD PRIMARY KEY (`id_kategorii`);

--
-- Indeksy dla tabeli `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`id_klienta`),
  ADD KEY `id_ksiazki` (`id_ksiazki`);

--
-- Indeksy dla tabeli `ksiazki`
--
ALTER TABLE `ksiazki`
  ADD PRIMARY KEY (`id_ksiazki`),
  ADD KEY `id_kategorii` (`id_kategorii`);

--
-- Indeksy dla tabeli `opinie`
--
ALTER TABLE `opinie`
  ADD PRIMARY KEY (`id_opinii`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `bibliotekarze`
--
ALTER TABLE `bibliotekarze`
  MODIFY `id_bib` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `kategorie`
--
ALTER TABLE `kategorie`
  MODIFY `id_kategorii` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `klienci`
--
ALTER TABLE `klienci`
  MODIFY `id_klienta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `ksiazki`
--
ALTER TABLE `ksiazki`
  MODIFY `id_ksiazki` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `opinie`
--
ALTER TABLE `opinie`
  MODIFY `id_opinii` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `klienci`
--
ALTER TABLE `klienci`
  ADD CONSTRAINT `klienci_ibfk_1` FOREIGN KEY (`id_ksiazki`) REFERENCES `ksiazki` (`id_ksiazki`);

--
-- Ograniczenia dla tabeli `ksiazki`
--
ALTER TABLE `ksiazki`
  ADD CONSTRAINT `ksiazki_ibfk_1` FOREIGN KEY (`id_kategorii`) REFERENCES `kategorie` (`id_kategorii`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

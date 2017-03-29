-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 29 Mar 2017, 19:57
-- Wersja serwera: 10.1.21-MariaDB
-- Wersja PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `certificate`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kurs`
--

CREATE TABLE `kurs` (
  `idkurs` int(10) UNSIGNED NOT NULL,
  `nazwa_kursu` varchar(200) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `kurs`
--

INSERT INTO `kurs` (`idkurs`, `nazwa_kursu`, `data`) VALUES
(1, 'Monty Python wprowadzenie', '0000-00-00'),
(2, 'neonowa filozofia', '0000-00-00'),
(3, 'Geneza podrózy w czasie', '0000-00-00'),
(6, 'AbecadÅ‚o z pieca spadÅ‚o', '2017-03-16');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kurs_prowadzacy`
--

CREATE TABLE `kurs_prowadzacy` (
  `idkurs` int(10) UNSIGNED NOT NULL,
  `idprowadzacy` int(10) UNSIGNED NOT NULL,
  `prowadzacy_idprowadzacy` int(10) UNSIGNED NOT NULL,
  `kurs_idkurs` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kurs_student`
--

CREATE TABLE `kurs_student` (
  `idkurs` int(10) UNSIGNED NOT NULL,
  `idstudent` int(10) UNSIGNED NOT NULL,
  `kurs_idkurs` int(10) UNSIGNED NOT NULL,
  `student_idstudent` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `prowadzacy`
--

CREATE TABLE `prowadzacy` (
  `idprowadzacy` int(10) UNSIGNED NOT NULL,
  `imie` varchar(50) NOT NULL,
  `nazwisko` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `prowadzacy`
--

INSERT INTO `prowadzacy` (`idprowadzacy`, `imie`, `nazwisko`) VALUES
(1, 'Joanna', 'Pitura'),
(2, 'Janko', 'Perszefar'),
(3, 'Yoko', 'Takuramasaka'),
(4, '', 'Potornicka'),
(5, '', 'Potornicka'),
(6, 'Anna', 'Potornicka'),
(7, 'Maciej', 'Planty');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `student`
--

CREATE TABLE `student` (
  `idstudent` int(10) UNSIGNED NOT NULL,
  `imie` varchar(50) NOT NULL,
  `nazwisko` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `student`
--

INSERT INTO `student` (`idstudent`, `imie`, `nazwisko`) VALUES
(1, 'Janek', 'Wiśniewski'),
(2, 'Bogumił', 'Niechcic'),
(3, 'Barbara', 'Ostrzeńska'),
(4, 'Franciszek', 'Bogusławski'),
(5, 'Andrzej', 'Bogusz'),
(6, 'Andrzej', 'Bogusz'),
(7, 'Roman', 'Koszałek');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `kurs`
--
ALTER TABLE `kurs`
  ADD PRIMARY KEY (`idkurs`);

--
-- Indexes for table `kurs_prowadzacy`
--
ALTER TABLE `kurs_prowadzacy`
  ADD PRIMARY KEY (`prowadzacy_idprowadzacy`,`kurs_idkurs`),
  ADD KEY `fk_kurs_prowadzacy_kurs1_idx` (`kurs_idkurs`);

--
-- Indexes for table `kurs_student`
--
ALTER TABLE `kurs_student`
  ADD PRIMARY KEY (`kurs_idkurs`,`student_idstudent`),
  ADD KEY `fk_kurs_student_student1_idx` (`student_idstudent`);

--
-- Indexes for table `prowadzacy`
--
ALTER TABLE `prowadzacy`
  ADD PRIMARY KEY (`idprowadzacy`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`idstudent`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `kurs`
--
ALTER TABLE `kurs`
  MODIFY `idkurs` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT dla tabeli `prowadzacy`
--
ALTER TABLE `prowadzacy`
  MODIFY `idprowadzacy` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT dla tabeli `student`
--
ALTER TABLE `student`
  MODIFY `idstudent` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `kurs_prowadzacy`
--
ALTER TABLE `kurs_prowadzacy`
  ADD CONSTRAINT `fk_kurs_prowadzacy_kurs1` FOREIGN KEY (`kurs_idkurs`) REFERENCES `kurs` (`idkurs`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_kurs_prowadzacy_prowadzacy` FOREIGN KEY (`prowadzacy_idprowadzacy`) REFERENCES `prowadzacy` (`idprowadzacy`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `kurs_student`
--
ALTER TABLE `kurs_student`
  ADD CONSTRAINT `fk_kurs_student_kurs1` FOREIGN KEY (`kurs_idkurs`) REFERENCES `kurs` (`idkurs`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_kurs_student_student1` FOREIGN KEY (`student_idstudent`) REFERENCES `student` (`idstudent`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

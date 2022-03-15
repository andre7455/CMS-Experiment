-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 07 apr 2021 om 14:31
-- Serverversie: 10.4.14-MariaDB
-- PHP-versie: 7.4.11

SET
SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET
time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boatymcboatface`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `boten`
--

CREATE TABLE `boten`
(
    `ID`           int(255) NOT NULL,
    `Titel`        varchar(255) NOT NULL,
    `Beschrijving` varchar(255) NOT NULL,
    `Locatie`      varchar(255) NOT NULL,
    `Prijs`        double       NOT NULL,
    `isRented`     int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `boten`
--

INSERT INTO `boten` (`ID`, `Titel`, `Beschrijving`, `Locatie`, `Prijs`, `isRented`)
VALUES (1, 'Boot nummer Een!', 'Hele vette boot, de eerste, de koning', 'Deventer', 25, 1),
       (2, 'Boot nummer Twee!', 'Hele coole boot, de tweede, de prins', 'Deventer', 22.5, 1),
       (3, 'Boot nummer Drie!', 'Hele gave boot, de derde, de keizer', 'Apeldoorn', 30.75, 0),
       (4, 'Boot nummer Vier!', 'Hele nette boot, de vierde, de faraoh', 'Apeldoorn', 4.2, 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruiker`
--

CREATE TABLE `gebruiker`
(
    `ID`         int(255) NOT NULL,
    `Username`   varchar(255) NOT NULL,
    `Email`      varchar(255) NOT NULL,
    `Rol`        int(10) NOT NULL,
    `Wachtwoord` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `gebruiker`
--

INSERT INTO `gebruiker` (`ID`, `Username`, `Email`, `Rol`, `Wachtwoord`)
VALUES (9, 'sam', 'sam@sam', 0, '$2y$10$w.9uK2F4bX2vOG2mO5yR6eFvMAFSIqD4liTDLXfhufvDfratW96u2'),
       (10, 'hallop', 'ha@lo', 0, '$2y$10$AUOHY7ZQhEWHT6754y0KrOheoh9NQm8CZocbLek.iJtgTRYJztP..'),
       (11, 'kev', 'kev@in', 0, '$2y$10$GDJRU.zvASLF/phftzMmeO3vf.Gb/841Ts1Meb7Ecxab9rNdM4J42');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `havens`
--

CREATE TABLE `havens`
(
    `ID`             int(255) NOT NULL,
    `Titel`          varchar(255) NOT NULL,
    `Telefoonnummer` varchar(255) NOT NULL,
    `Adres`          varchar(255) NOT NULL,
    `Postcode`       varchar(255) NOT NULL,
    `Havennummer`    varchar(255) NOT NULL,
    `Plaats`         varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `kthavens`
--

CREATE TABLE `kthavens`
(
    `ID`      int(255) NOT NULL,
    `BoatID`  int(255) NOT NULL,
    `HavenID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ktuserrentals`
--

CREATE TABLE `ktuserrentals`
(
    `ID`      int(255) NOT NULL,
    `userID`  int(255) NOT NULL,
    `BoatID`  int(255) NOT NULL,
    `StartID` date NOT NULL,
    `Enddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `rols`
--

CREATE TABLE `rols`
(
    `ID`      int(2) NOT NULL,
    `Rolnaam` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `boten`
--
ALTER TABLE `boten`
    ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `gebruiker`
--
ALTER TABLE `gebruiker`
    ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `havens`
--
ALTER TABLE `havens`
    ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `kthavens`
--
ALTER TABLE `kthavens`
    ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `ktuserrentals`
--
ALTER TABLE `ktuserrentals`
    ADD PRIMARY KEY (`ID`, `BoatID`);

--
-- Indexen voor tabel `rols`
--
ALTER TABLE `rols`
    ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `boten`
--
ALTER TABLE `boten`
    MODIFY `ID` int (255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `gebruiker`
--
ALTER TABLE `gebruiker`
    MODIFY `ID` int (255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT voor een tabel `havens`
--
ALTER TABLE `havens`
    MODIFY `ID` int (255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `kthavens`
--
ALTER TABLE `kthavens`
    MODIFY `ID` int (255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `ktuserrentals`
--
ALTER TABLE `ktuserrentals`
    MODIFY `ID` int (255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `rols`
--
ALTER TABLE `rols`
    MODIFY `ID` int (2) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

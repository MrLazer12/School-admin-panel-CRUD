-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: ian. 31, 2022 la 04:38 PM
-- Versiune server: 10.4.19-MariaDB
-- Versiune PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `colegiu`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `elevi`
--

CREATE TABLE `elevi` (
  `id` int(2) NOT NULL,
  `nume` varchar(25) NOT NULL,
  `prenume` varchar(25) NOT NULL,
  `adresa` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `data_nasterii` date NOT NULL,
  `sex` varchar(2) NOT NULL,
  `media_bac` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `elevi`
--

INSERT INTO `elevi` (`id`, `nume`, `prenume`, `adresa`, `email`, `data_nasterii`, `sex`, `media_bac`) VALUES
(1, 'Batereanu', 'Igor', 'bd.Cuza-Voda 15/3', 'batereanu@gmail.com', '1998-03-14', 'm', 6.25),
(2, 'Bodrug', 'Mihail', 'str.Ismail 13/2', 'bodrug@gmail.com', '1997-09-25', 'm', 8),
(3, 'Botnari', 'Arina', 'str.Teilor 4a', 'botnari@gmail.com', '1998-12-13', 'f', 7.75),
(4, 'Calinciuc', 'Alexandra', 'str.Studentilor 12/3', 'calinciuc@gmail.com', '1999-11-09', 'f', 9),
(5, 'Ispas', 'Eugeniu', 'sos.Muncesti 25/6', 'ispas@gmail.com', '1997-04-13', 'm', 6.25),
(6, 'Croitoru', 'Cristian', 'str.Sarmizegetusa 9/11', 'croitoru@gmail.com', '1998-10-11', 'm', 7),
(7, 'Lipceanu', 'Dan', 'str.Ismail 43/2', 'lipceanu@gmail.com', '1998-06-09', 'm', 8),
(8, 'Lozinschi', 'Mihail', 'str.Miorita 23/3', 'lozinschi@gmail.com', '1998-03-03', 'm', 8.5),
(9, 'Melnic', 'Adrian', 'str.Paris 4', 'melnic@gmail.com', '1997-05-21', 'm', 6.75),
(10, 'Mihailuta', 'Sergiu', 'bd.Dacia 27/3', 'mihailuta@gmail.com', '1998-12-20', 'm', 8.33),
(11, 'Nicuta', 'Ciprian', 'bd.Traian 67/10', 'nicuta@gmail.com', '1998-09-09', 'm', 9),
(12, 'Nita', 'Vladislav', 'str.Cuza-Voda 3/2', 'nita@gmail.com', '1997-12-01', 'm', 6.75),
(13, 'Parolea', 'Vladlena', 'bd.Grenoble 15/3', 'parolea@gmail.com', '1998-06-11', 'f', 6.5),
(14, 'Popovici', 'Maria', 'str.Cuza-Voda 9/2', 'popovici@gmail.com', '1998-07-25', 'f', 7.75),
(15, 'Profir', 'Denis', 'str.Cuza-Voda 3', 'profir@gmail.com', '1999-06-09', 'm', 7.75),
(16, 'Rosca', 'Daniela', 'bd.Kiev 10/5', 'rosca@gmail.com', '1997-01-01', 'm', 5.5),
(18, 'da', 'dasdsadsad', 'dasdasasdas', 'dsad@mail.ru', '2022-01-05', 'm', 2);

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `elevi`
--
ALTER TABLE `elevi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `elevi`
--
ALTER TABLE `elevi`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

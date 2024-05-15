-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 15, 2024 alle 18:59
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_login_session`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `dvd`
--

CREATE TABLE `dvd` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `img` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `genere` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dump dei dati per la tabella `dvd`
--

INSERT INTO `dvd` (`id`, `title`, `img`, `description`, `genere`) VALUES
(1, 'prova123', 'https://m.media-amazon.com/images/I/71xefrbhS8S._AC_SL1500_.jpg', 'test', 'ellimina'),
(5, 'Spiderman', 'https://i.ebayimg.com/images/g/~gEAAOSwo4pYekPb/s-l1200.webp', 'Film suitable for all generations!', 'Action movie'),
(6, 'After', 'https://d1csarkz8obe9u.cloudfront.net/posterpreviews/movie-poster-template-design-21a1c803fe4ff4b858de24f5c91ec57f_screen.jpg?ts=1636996180', 'Good movies!', 'Action'),
(7, 'Harry Potter', 'https://i.ebayimg.com/images/g/HP0AAOSwKIpV-vwL/s-l1200.webp', 'Funny movie', 'Fantasy'),
(8, 'Avatar', 'https://m.media-amazon.com/images/I/91N1lG+LBIS._AC_UF1000,1000_QL80_.jpg', 'For family', 'Action');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(50) NOT NULL,
  `user` varchar(50) DEFAULT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`id`, `email`, `user`, `password`) VALUES
(1, 'pino@gmail.com', 'fine', '$2y$10$aLvRspX6Cbnnvyg2TK1c/O7Vqai57zfJEiMhyHquqI221T8JG6OF2'),
(2, 'pino@gmail.com', 'ciaooooo', '$2y$10$lcB9ojV4zMtaKn2vDaWPaOA.x9KiBJWAJOvh7pBmqfMoenvEuhBqC'),
(3, 'matteo@gmail.com', 'matteo', '$2y$10$89WHDYw2rPhC4KXUAudQo.Tw7Q2t6cMCF0JdsLIgWJ8pDWqb67jIK');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `dvd`
--
ALTER TABLE `dvd`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `dvd`
--
ALTER TABLE `dvd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

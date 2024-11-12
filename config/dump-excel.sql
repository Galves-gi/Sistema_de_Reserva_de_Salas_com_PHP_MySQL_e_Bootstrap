-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 12, 2024 at 09:57 PM
-- Server version: 8.0.39-0ubuntu0.24.04.2
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `excel`
--

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `id` int NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`id`, `user_name`, `user_email`, `user_password`, `user_photo`) VALUES
(1, 'João Silva', 'joao.silva@example.com', 'senha123', 'joao.jpg'),
(2, 'Maria Oliveira', 'maria.oliveira@example.com', 'senha456', 'maria.jpg'),
(3, 'Carlos Pereira', 'carlos.pereira@example.com', 'senha789', 'carlos.jpg'),
(4, 'Ana Costa', 'ana.costa@example.com', 'senha321', 'ana.jpg'),
(5, 'Lucas Santos', 'lucas.santos@example.com', 'senha654', 'lucas.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int NOT NULL,
  `date` date NOT NULL,
  `event` varchar(255) NOT NULL,
  `turno` varchar(255) NOT NULL,
  `hora` varchar(255) NOT NULL,
  `hora_final` varchar(255) NOT NULL,
  `sala` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `date`, `event`, `turno`, `hora`, `hora_final`, `sala`) VALUES
(1, '2024-11-12', 'Reunião de Planejamento', 'Manhã', '09:00', '12:00', 'Sala 1'),
(2, '2024-11-13', 'Treinamento de Vendas', 'Tarde', '14:00', '16:00', 'Sala 2'),
(3, '2024-11-14', 'Workshop de Marketing', 'Manhã', '10:00', '13:00', 'Sala 3'),
(4, '2024-11-15', 'Palestra de Inovação', 'Noite', '18:00', '20:00', 'Auditório'),
(5, '2024-11-16', 'Fórum de Tecnologia', 'Tarde', '13:30', '17:00', 'Sala 4'),
(6, '2024-11-12', 'Reunião de Planejamento', 'Manhã', '09:00', '12:00', 'Sala 1'),
(7, '2024-11-13', 'Treinamento de Vendas', 'Tarde', '14:00', '16:00', 'Sala 2'),
(8, '2024-11-14', 'Workshop de Marketing', 'Manhã', '10:00', '13:00', 'Sala 3'),
(9, '2024-11-15', 'Palestra de Inovação', 'Noite', '18:00', '20:00', 'Auditório'),
(10, '2024-11-16', 'Fórum de Tecnologia', 'Tarde', '13:30', '17:00', 'Sala 4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

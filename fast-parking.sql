-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 18/07/2019 às 16:40
-- Versão do servidor: 10.4.6-MariaDB
-- Versão do PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fast-parking`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelo` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `placa` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entrada` datetime NOT NULL,
  `saida` datetime DEFAULT NULL,
  `pagamento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `modelo`, `placa`, `entrada`, `saida`, `pagamento`) VALUES
(10, 'eduardo', 'Uno', 'asd1234', '2019-07-16 20:22:01', '2019-07-17 19:21:23', 120),
(26, 'Carlos', 'Onix', 'ewq4123', '2019-07-17 10:12:17', '2019-07-17 16:25:54', 40),
(27, 'José Eduardo', 'Honda', 'POD1234', '2019-07-17 19:25:03', '2019-07-17 19:45:34', 0),
(28, 'Matheus', 'Civic', 'ewq1234', '2019-07-17 20:56:18', '2019-07-17 20:57:01', 0),
(29, 'lindonilson', 'Corsa', 'tre7894', '2019-07-18 12:54:22', NULL, NULL),
(30, 'José Eduardo', 'Uno', 'DSA1234', '2019-07-18 16:12:38', NULL, NULL);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `placa` (`placa`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

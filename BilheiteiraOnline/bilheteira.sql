-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Jun-2023 às 00:23
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bilheteira`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contacto`
--

CREATE TABLE `contacto` (
  `nome` varchar(255) NOT NULL,
  `telefone` int(8) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mensagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `contacto`
--

INSERT INTO `contacto` (`nome`, `telefone`, `email`, `mensagem`) VALUES
('nome', 0, 'email', 'mensagem'),
('nome', 0, 'email', 'mensagem'),
('nome', 0, 'email', 'mensagem'),
('nome', 0, 'email', 'mensagem'),
('nome', 0, 'email', 'mensagem');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ticket`
--

CREATE TABLE `ticket` (
  `email` varchar(255) NOT NULL,
  `nbilhetes` int(8) NOT NULL,
  `evento` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizador`
--

CREATE TABLE `utilizador` (
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `utilizador`
--

INSERT INTO `utilizador` (`nome`, `email`, `password`) VALUES
('[value-1]', '[value-2]', '[value-3]'),
('$nome', '$email', '$password'),
('asd', 'asd', 'ads'),
('asdDFSGHNJ', 'asdDSFSGBHNM', 'FDGHFJKGFDSFSGHH'),
('asdDFSGHNJ', 'asdDSFSGBHNM', 'dsasdasdsadsadsa'),
('dsadasas', 'saddasdsa', 'asdasdsa'),
('dsadasas', 'saddasdsa', 'dsasasadsadsa'),
('adsadsa', 'ada@', '1234'),
('wedas', '', 'ddas'),
('e33323', '34567', ''),
('$nome', 'dsadsa', 'wdefrgthyjukl'),
('dfrtguj7ik', 'dfgdbhj', 'dfergthyhjk'),
('xsdwefrgtyui', 'wdefrgthyujkl', 'swdefrgthyuio');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

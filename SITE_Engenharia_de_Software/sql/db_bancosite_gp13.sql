-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 02/06/2021 às 21:46
-- Versão do servidor: 5.6.34
-- Versão do PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_bancosite_gp13`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `bandeira`
--

CREATE TABLE `bandeira` (
  `cod_assunto` int(11) NOT NULL,
  `dsc_assunto` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `bandeira`
--

INSERT INTO `bandeira` (`cod_assunto`, `dsc_assunto`) VALUES
(1, 'contatar professor'),
(2, 'reclamacao'),
(3, 'CAMPUS');

-- --------------------------------------------------------

--
-- Estrutura para tabela `dado_pessoal`
--

CREATE TABLE `dado_pessoal` (
  `cod_assunto` int(11) NOT NULL,
  `dsc_nome_completo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dsc_email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `dsc_chamado` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `dado_pessoal`
--

INSERT INTO `dado_pessoal` (`cod_assunto`, `dsc_nome_completo`, `dsc_email`, `dsc_chamado`) VALUES
(1, 'Bruce Wayne', 'batman@ligadajustica.com', 'Gostaria de Comprar a Uepa');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `bandeira`
--
ALTER TABLE `bandeira`
  ADD PRIMARY KEY (`cod_assunto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

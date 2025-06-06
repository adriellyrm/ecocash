-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 06/06/2025 às 17:33
-- Versão do servidor: 10.4.22-MariaDB
-- Versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ecocash`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(15) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` varchar(15) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `status` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `telefone`, `email`, `senha`, `status`) VALUES
(3, 'arroz', '88545671', 'arroz@gmail.com', '$2y$10$gYZGs.o3iHLiMwEEbcaXgO6QSncunUKuTLAbpCum96kq0wDqW2rdG', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `vendas_trocas`
--

CREATE TABLE `vendas_trocas` (
  `id` int(11) NOT NULL,
  `nome_cliente` varchar(100) DEFAULT NULL,
  `telefone` varchar(25) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `nome_produto` varchar(100) DEFAULT NULL,
  `categoria` varchar(60) DEFAULT NULL,
  `condicao` varchar(60) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `preco` varchar(50) DEFAULT NULL,
  `descricao` varchar(300) DEFAULT NULL,
  `pagamento` varchar(60) DEFAULT NULL,
  `entrega` varchar(60) DEFAULT NULL,
  `observacao` varchar(200) DEFAULT NULL,
  `tipo` varchar(60) DEFAULT NULL,
  `valor_troca` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `vendas_trocas`
--

INSERT INTO `vendas_trocas` (`id`, `nome_cliente`, `telefone`, `email`, `nome_produto`, `categoria`, `condicao`, `quantidade`, `preco`, `descricao`, `pagamento`, `entrega`, `observacao`, `tipo`, `valor_troca`) VALUES
(1, 'Matheus', '', 'lblblblbbl@gmail.com', 'Casa', 'casa', 'seminovo', 5, NULL, 'uma casa muito engraçada', 'pix', 'entrega', 'casa', 'troca', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `vendas_trocas`
--
ALTER TABLE `vendas_trocas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `vendas_trocas`
--
ALTER TABLE `vendas_trocas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

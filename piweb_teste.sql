-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Nov-2022 às 03:47
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `piweb_teste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `dtnascimento` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `cep` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `rua` varchar(255) NOT NULL,
  `numero` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `cpf`, `dtnascimento`, `telefone`, `cep`, `estado`, `cidade`, `bairro`, `rua`, `numero`) VALUES
(1, 'ruhanhomen', 'ruhankaio900@gmail.com', '12345678', '122.385.409-46', '12/21/2222', '(11) 1111-1111', '89227-610', 'SC', 'Joinville', 'Iririú', 'Rua Pasteur', '123'),
(2, 'ruhan1', 'ruhankaio900@gmail.com', '12345678', '122.385.409-46', '11/11/1111', '(47) 98419-2876', '89227-610', 'SC', 'Joinville', 'Iririú', 'Rua Pasteur', '234'),
(3, '123', '123@asd.com', '', '', '', '', '', '', '', '', '', ''),
(4, 'Maria Eduarda da Silva ', 'mariaeduardasilva@gmail.com', '12345678', '122.385.409-46', '25/10/2005', '(47) 98473-1585', '89227-610', 'SC', 'Joinville', 'Iririú', 'Rua Polônia', '564'),
(5, 'Maria Eduarda da Silva ', 'mariaeduardasilva@gmail.com', '12345678', '122.385.409-46', '25/10/2005', '(47) 98473-1585', '89227-350', 'SC', 'Joinville', 'Iririú', 'Rua Repórter Luiz Mauro', '564'),
(6, 'Ruhan', 'mariaeduardasilva@gmail.com', '12345678', '111.111.111-11', '11/11/1111', '(47) 98419-2876', '89227-610', 'SC', 'Joinville', 'Iririú', 'Rua Pasteur', '123'),
(7, 'ruhan', 'mariaeduardasilva@gmail.com', '12345678', '121.231.231-23', '12/31/2312', '(12) 3123-1231', '89227-610', 'SC', 'Joinville', 'Iririú', 'Rua Pasteur', '564');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

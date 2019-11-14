-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Nov-2019 às 15:01
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bancocadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `usuario` varchar(20) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `data` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`usuario`, `nome`, `data`, `email`, `senha`) VALUES
('', '', '0000-00-00', '', ''),
('bhf', 'vhmjfjh', '2019-11-08', 'zdfs@fgdfg.com', '123456'),
('ghf', 'fghfg', '2019-11-13', 'mn,n@hdfjsnkl.com', '123456'),
('hjghj', 'fdgjhfhjfghj', '2019-06-06', 'dhjf@gadfpsm.com', '789456'),
('kmbjk', 'bmnmvb', '2019-01-31', 'zsgdfg@gasjb.com', '456789'),
('lucas', 'lucas fernando ', '1998-07-12', 'lucas@email', '123'),
('victor', 'victor', '1997-09-22', 'aaa@aaa.com', 'aaaaaa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `faleconosco`
--

CREATE TABLE `faleconosco` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mensagem` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `faleconosco`
--

INSERT INTO `faleconosco` (`id`, `nome`, `email`, `mensagem`) VALUES
(1, 'lucas', 'lucas@email', 'irineu vocÃª nÃ£o sabe nem eu'),
(2, 'lucas2', 'lucas@email', 'irineu'),
(3, 'bmnmvb', 'mnn@hdfjsnkl.com', 'SDFSDFSDF'),
(4, 'bmnmvb', 'zsgdfg@gasjb.com', 'sdasda'),
(5, 'sdfsdfs', 'jhonataw@hotmail.com', 'asdasdasdasd'),
(6, 'dfs', 'n@hdfjsnkl.com', 'sdfgsfg'),
(7, 'fghfg', 'fgh@xfn.com', 'sdfafsd'),
(8, 'asdfa', 'fgh@xfn.com', 'asdasdasdasd'),
(9, 'fasdfa', 'lucas@email', 'asdfasdfa'),
(10, 'sdf', 'dhjf@gadfpsm.com', 'asdfasdf'),
(11, 'fdgjhfhjfghj', 'aaa@aaa.com', 'asdfa'),
(12, 'fghfg', 'zsgdfg@gasjb.com', 'asdfasdfasdf'),
(13, 'lucas', 'lucas@email', 'asdasdas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`usuario`);

--
-- Indexes for table `faleconosco`
--
ALTER TABLE `faleconosco`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faleconosco`
--
ALTER TABLE `faleconosco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

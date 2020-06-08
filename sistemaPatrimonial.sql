-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 05, 2020 at 06:54 AM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemaPatrimonial`
--

-- --------------------------------------------------------

--
-- Table structure for table `ativoDeRede`
--

CREATE TABLE `ativoDeRede` (
  `id` int(11) NOT NULL,
  `descricao` varchar(200) DEFAULT NULL,
  `mac` varchar(17) DEFAULT NULL,
  `idResponsavel` int(11) NOT NULL,
  `idLocal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ativoDeRede`
--

INSERT INTO `ativoDeRede` (`id`, `descricao`, `mac`, `idResponsavel`, `idLocal`) VALUES
(1, 'Roteador Wirelles alterado', 'a5:1a:12:23:71:9b', 1, 1),
(2, 'Notebook DELL G7', ' 00E04C440784  ', 1, 1),
(3, 'impressora - DELL', '00:00:00:00:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `local`
--

CREATE TABLE `local` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `complemento` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `local`
--

INSERT INTO `local` (`id`, `nome`, `complemento`) VALUES
(1, 'secretaria', '115, prédio B'),
(2, 'Laboratório 05', 'Sala 205, Prédio 05D');

-- --------------------------------------------------------

--
-- Table structure for table `movel`
--

CREATE TABLE `movel` (
  `id` int(11) NOT NULL,
  `descricao` varchar(200) DEFAULT NULL,
  `largura` float DEFAULT NULL,
  `altura` float DEFAULT NULL,
  `peso` float DEFAULT NULL,
  `idResponsavel` int(11) NOT NULL,
  `idLocal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movel`
--

INSERT INTO `movel` (`id`, `descricao`, `largura`, `altura`, `peso`, `idResponsavel`, `idLocal`) VALUES
(1, 'Mesa de Mármore', 1, 2, 3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `outros`
--

CREATE TABLE `outros` (
  `id` int(11) NOT NULL,
  `descricao` varchar(200) DEFAULT NULL,
  `idResponsavel` int(11) NOT NULL,
  `idLocal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `outros`
--

INSERT INTO `outros` (`id`, `descricao`, `idResponsavel`, `idLocal`) VALUES
(1, 'carrinho de mão', 1, 1),
(2, 'carrinho de mão', 1, 1),
(3, 'Monitor - DELL', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `permissao`
--

CREATE TABLE `permissao` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) DEFAULT NULL,
  `descricao` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `responsavel`
--

CREATE TABLE `responsavel` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `sobrenome` varchar(45) NOT NULL,
  `cpf` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `responsavel`
--

INSERT INTO `responsavel` (`id`, `nome`, `sobrenome`, `cpf`) VALUES
(1, 'lucas', 'coelho reichert', '000.000.000-11'),
(2, 'joão', 'pereira', '000.000.000-00');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `sobrenome` varchar(45) DEFAULT NULL,
  `usuario` varchar(45) NOT NULL,
  `senha` varchar(400) NOT NULL,
  `email` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `sobrenome`, `usuario`, `senha`, `email`) VALUES
(1, 'lucas', 'reichert', 'lucas.reichert', '7a1e5631d96e2f8837b72c68bc6a6db07b1d59df43c804e080fab4bdc5f28366', 'lucas.reichert@redes.ufsm.br'),
(2, 'teste', 'teste', 'teste', '7866e523baa5770bdd065a0e7949cb45f645c94309f807d68801c41778e891cf', 'teste@teste'),
(3, 'joao', 'joao', 'joao', '107561602337098d56b3b5301df9687990d24900d08e1930d62f06872256617f', 'joao');

-- --------------------------------------------------------

--
-- Table structure for table `usuario_permissao`
--

CREATE TABLE `usuario_permissao` (
  `idUsuario` int(11) NOT NULL,
  `idPermissao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ativoDeRede`
--
ALTER TABLE `ativoDeRede`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idResponsavel` (`idResponsavel`),
  ADD KEY `idLocal` (`idLocal`);

--
-- Indexes for table `local`
--
ALTER TABLE `local`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movel`
--
ALTER TABLE `movel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idResponsavel` (`idResponsavel`),
  ADD KEY `idLocal` (`idLocal`);

--
-- Indexes for table `outros`
--
ALTER TABLE `outros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idResponsavel` (`idResponsavel`),
  ADD KEY `idLocal` (`idLocal`);

--
-- Indexes for table `permissao`
--
ALTER TABLE `permissao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `responsavel`
--
ALTER TABLE `responsavel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario_permissao`
--
ALTER TABLE `usuario_permissao`
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idPermissao` (`idPermissao`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ativoDeRede`
--
ALTER TABLE `ativoDeRede`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `local`
--
ALTER TABLE `local`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `movel`
--
ALTER TABLE `movel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `outros`
--
ALTER TABLE `outros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `permissao`
--
ALTER TABLE `permissao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `responsavel`
--
ALTER TABLE `responsavel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `ativoDeRede`
--
ALTER TABLE `ativoDeRede`
  ADD CONSTRAINT `ativoDeRede_ibfk_1` FOREIGN KEY (`idResponsavel`) REFERENCES `responsavel` (`id`),
  ADD CONSTRAINT `ativoDeRede_ibfk_2` FOREIGN KEY (`idLocal`) REFERENCES `local` (`id`);

--
-- Constraints for table `movel`
--
ALTER TABLE `movel`
  ADD CONSTRAINT `movel_ibfk_1` FOREIGN KEY (`idResponsavel`) REFERENCES `responsavel` (`id`),
  ADD CONSTRAINT `movel_ibfk_2` FOREIGN KEY (`idLocal`) REFERENCES `local` (`id`);

--
-- Constraints for table `outros`
--
ALTER TABLE `outros`
  ADD CONSTRAINT `outros_ibfk_1` FOREIGN KEY (`idResponsavel`) REFERENCES `responsavel` (`id`),
  ADD CONSTRAINT `outros_ibfk_2` FOREIGN KEY (`idLocal`) REFERENCES `local` (`id`);

--
-- Constraints for table `usuario_permissao`
--
ALTER TABLE `usuario_permissao`
  ADD CONSTRAINT `usuario_permissao_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `usuario_permissao_ibfk_2` FOREIGN KEY (`idPermissao`) REFERENCES `permissao` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

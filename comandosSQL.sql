-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Ago-2018 às 14:48
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jaguar_sistem`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `anexos`
--

CREATE TABLE `anexos` (
  `idDocumento` int(11) NOT NULL,
  `nDocumento` int(11) DEFAULT NULL,
  `tipoDocumento` varchar(60) DEFAULT NULL,
  `arquivo` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `animais`
--

CREATE TABLE `animais` (
  `nFicha` int(11) NOT NULL,
  `dataRecebimento` date DEFAULT NULL,
  `agente` varchar(60) DEFAULT NULL,
  `tipoRecolhimento` varchar(60) DEFAULT NULL,
  `nomeEntregador` varchar(60) DEFAULT NULL,
  `cpf_cnpj` varchar(20) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `endereco` varchar(60) DEFAULT NULL,
  `municipio` varchar(60) DEFAULT NULL,
  `cep` varchar(60) DEFAULT NULL,
  `idDocumento` int(11) DEFAULT NULL,
  `idUnidade` int(11) DEFAULT NULL,
  `municipioProcedencia` varchar(60) DEFAULT NULL,
  `uf` varchar(60) DEFAULT NULL,
  `ultimaProcedencia` varchar(60) DEFAULT NULL,
  `dieta` varchar(60) DEFAULT NULL,
  `nomeComum` varchar(60) DEFAULT NULL,
  `nomeCientifico` varchar(60) DEFAULT NULL,
  `familia` varchar(60) DEFAULT NULL,
  `ordem` varchar(60) DEFAULT NULL,
  `codMarca` varchar(20) DEFAULT NULL,
  `tipoMarca` varchar(60) DEFAULT NULL,
  `localMarca` varchar(60) DEFAULT NULL,
  `situacao` varchar(60) DEFAULT NULL,
  `periodoQuarentena` int(11) DEFAULT NULL,
  `tipoDestinacao` varchar(60) DEFAULT NULL,
  `subtipoDestinacao` varchar(60) DEFAULT NULL,
  `condicao1` int(11) DEFAULT NULL,
  `condicao2` int(11) DEFAULT NULL,
  `condicao3` int(11) DEFAULT NULL,
  `idArea` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `areas`
--

CREATE TABLE `areas` (
  `idArea` int(11) NOT NULL,
  `nomePropriedade` varchar(60) DEFAULT NULL,
  `proprietario` varchar(60) DEFAULT NULL,
  `telefone` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `uf` varchar(60) DEFAULT NULL,
  `municipio` varchar(60) DEFAULT NULL,
  `endereco` varchar(60) DEFAULT NULL,
  `cep` varchar(60) DEFAULT NULL,
  `lote` varchar(60) DEFAULT NULL,
  `complemento` varchar(60) DEFAULT NULL,
  `latitude` varchar(60) DEFAULT NULL,
  `longitude` varchar(60) DEFAULT NULL,
  `bioma` varchar(60) DEFAULT NULL,
  `distancia` varchar(60) DEFAULT NULL,
  `obs` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `areas`
--

INSERT INTO `areas` (`idArea`, `nomePropriedade`, `proprietario`, `telefone`, `email`, `uf`, `municipio`, `endereco`, `cep`, `lote`, `complemento`, `latitude`, `longitude`, `bioma`, `distancia`, `obs`) VALUES
(1, 'Fazenda Arara Azul', 'Francisco Teixeira', '(63) 3217-8456', 'franciscoteixeira@gmail.com', 'Tocantins', 'Palmas', 'Arse 894', '77586-344', '28', 'Próximo ao supermercado Opção', '-43.626', '34.602', 'Cerrado', '24km', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `unidades`
--

CREATE TABLE `unidades` (
  `idUnidade` int(11) NOT NULL,
  `cnpj` varchar(20) DEFAULT NULL,
  `cep` varchar(30) DEFAULT NULL,
  `municipio` varchar(100) DEFAULT NULL,
  `lote` varchar(20) DEFAULT NULL,
  `complemento` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `perfil` varchar(20) DEFAULT NULL,
  `nomeCompleto` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefone` varchar(30) DEFAULT NULL,
  `celular` varchar(30) DEFAULT NULL,
  `usuario` varchar(30) DEFAULT NULL,
  `senha` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `perfil`, `nomeCompleto`, `email`, `telefone`, `celular`, `usuario`, `senha`) VALUES
(1, 'Agente', 'Agente 1', 'agente@naturanits.com', '665443534234', '0823049820', 'AgenteFilano', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anexos`
--
ALTER TABLE `anexos`
  ADD PRIMARY KEY (`idDocumento`);

--
-- Indexes for table `animais`
--
ALTER TABLE `animais`
  ADD PRIMARY KEY (`nFicha`),
  ADD KEY `idDocumento` (`idDocumento`),
  ADD KEY `idUnidade` (`idUnidade`),
  ADD KEY `idArea` (`idArea`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`idArea`);

--
-- Indexes for table `unidades`
--
ALTER TABLE `unidades`
  ADD PRIMARY KEY (`idUnidade`),
  ADD UNIQUE KEY `id` (`idUnidade`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anexos`
--
ALTER TABLE `anexos`
  MODIFY `idDocumento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `animais`
--
ALTER TABLE `animais`
  MODIFY `nFicha` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `idArea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `unidades`
--
ALTER TABLE `unidades`
  MODIFY `idUnidade` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `animais`
--
ALTER TABLE `animais`
  ADD CONSTRAINT `animais_ibfk_1` FOREIGN KEY (`idDocumento`) REFERENCES `anexos` (`idDocumento`),
  ADD CONSTRAINT `animais_ibfk_2` FOREIGN KEY (`idUnidade`) REFERENCES `unidades` (`idUnidade`),
  ADD CONSTRAINT `animais_ibfk_3` FOREIGN KEY (`idArea`) REFERENCES `areas` (`idArea`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Ago-2018 às 16:51
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.0.30

DROP DATABASE if EXISTS jaguar_sistem;
CREATE DATABASE jaguar_sistem;
USE jaguar_sistem;

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
  `idAnexo` int(11) NOT NULL,
  `tipoDocumento` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nDocumento` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arquivo` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `anexos`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `animais`
--

CREATE TABLE `animais` (
  `idAnimal` int(11) NOT NULL,
  `data` date NOT NULL,
  `nomeAgente` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idEntregador` int(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `idUnidade` int(11) DEFAULT NULL,
  `ultimaProcedencia` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codMarcacao` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipoMarcacao` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localMarcacao` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomeComum` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomeCientifico` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `familia` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ordem` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statusTriagem` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destinacao` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `periodoQuarentena` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modalidadeDestinacao` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtipoModalidade` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `condicao1` int(11) NOT NULL,
  `condicao2` int(11) NOT NULL,
  `condicao3` int(11) NOT NULL,
  `idArea` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `animais`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `areas`
--

CREATE TABLE `areas` (
  `idArea` int(11) NOT NULL,
  `idProprietario` int(11) DEFAULT NULL,
  `nome` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bioma` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `distancia` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observacoes` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idEndereco` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `areas`
--



-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

CREATE TABLE `enderecos` (
  `idEndereco` int(11) NOT NULL,
  `uf` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `municipio` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bairro` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lote` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `complemento` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `enderecos`
--



-- --------------------------------------------------------

--
-- Estrutura da tabela `entregadores`
--

CREATE TABLE `entregadores` (
  `idEntregador` int(11) NOT NULL,
  `nome` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cpfcnpj` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefone` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipoEntrega` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idAnexo` int(11) DEFAULT NULL,
  `idEndereco` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `entregadores`
--



-- --------------------------------------------------------

--
-- Estrutura da tabela `proprietarios`
--

CREATE TABLE `proprietarios` (
  `idProprietario` int(11) NOT NULL,
  `nome` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpfcnpj` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `proprietarios`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `recuperacaosenha`
--

CREATE TABLE `recuperacaosenha` (
  `idSenha` int(11) NOT NULL,
  `criacao` datetime NOT NULL,
  `matricula` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mensagem` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `unidades`
--

CREATE TABLE `unidades` (
  `idUnidade` int(11) NOT NULL,
  `nome` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnpj` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipoUnidade` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idEndereco` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `unidades`
--



-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `matricula` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perfil` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `matricula`, `nome`, `email`, `telefone`, `celular`, `perfil`, `senha`) VALUES
(1, '123456', 'Agente', 'agente@naturatins.com', '123456', '123456', 'Agente', '123456'),
(2, '654321', 'Administrador', 'admin@naturatins.com', '123456', '123456', 'Administrador', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anexos`
--
ALTER TABLE `anexos`
  ADD PRIMARY KEY (`idAnexo`);

--
-- Indexes for table `animais`
--
ALTER TABLE `animais`
  ADD PRIMARY KEY (`idAnimal`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idEntregador` (`idEntregador`),
  ADD KEY `idArea` (`idArea`),
  ADD KEY `idUnidade` (`idUnidade`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`idArea`),
  ADD KEY `idEndereco` (`idEndereco`),
  ADD KEY `idProprietario` (`idProprietario`);

--
-- Indexes for table `enderecos`
--
ALTER TABLE `enderecos`
  ADD PRIMARY KEY (`idEndereco`);

--
-- Indexes for table `entregadores`
--
ALTER TABLE `entregadores`
  ADD PRIMARY KEY (`idEntregador`),
  ADD KEY `idAnexo` (`idAnexo`),
  ADD KEY `idEndereco` (`idEndereco`);

--
-- Indexes for table `proprietarios`
--
ALTER TABLE `proprietarios`
  ADD PRIMARY KEY (`idProprietario`);

--
-- Indexes for table `recuperacaosenha`
--
ALTER TABLE `recuperacaosenha`
  ADD PRIMARY KEY (`idSenha`);

--
-- Indexes for table `unidades`
--
ALTER TABLE `unidades`
  ADD PRIMARY KEY (`idUnidade`),
  ADD KEY `idEndereco` (`idEndereco`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anexos`
--
ALTER TABLE `anexos`
  MODIFY `idAnexo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `idArea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enderecos`
--
ALTER TABLE `enderecos`
  MODIFY `idEndereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `entregadores`
--
ALTER TABLE `entregadores`
  MODIFY `idEntregador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `proprietarios`
--
ALTER TABLE `proprietarios`
  MODIFY `idProprietario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `recuperacaosenha`
--
ALTER TABLE `recuperacaosenha`
  MODIFY `idSenha` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `unidades`
--
ALTER TABLE `unidades`
  MODIFY `idUnidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `animais`
--
ALTER TABLE `animais`
  ADD CONSTRAINT `animais_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`),
  ADD CONSTRAINT `animais_ibfk_2` FOREIGN KEY (`idEntregador`) REFERENCES `entregadores` (`idEntregador`),
  ADD CONSTRAINT `animais_ibfk_3` FOREIGN KEY (`idArea`) REFERENCES `areas` (`idArea`),
  ADD CONSTRAINT `animais_ibfk_4` FOREIGN KEY (`idUnidade`) REFERENCES `unidades` (`idUnidade`);

--
-- Limitadores para a tabela `areas`
--
ALTER TABLE `areas`
  ADD CONSTRAINT `areas_ibfk_1` FOREIGN KEY (`idEndereco`) REFERENCES `enderecos` (`idEndereco`),
  ADD CONSTRAINT `areas_ibfk_2` FOREIGN KEY (`idProprietario`) REFERENCES `proprietarios` (`idProprietario`);

--
-- Limitadores para a tabela `entregadores`
--
ALTER TABLE `entregadores`
  ADD CONSTRAINT `entregadores_ibfk_1` FOREIGN KEY (`idAnexo`) REFERENCES `anexos` (`idAnexo`),
  ADD CONSTRAINT `entregadores_ibfk_2` FOREIGN KEY (`idEndereco`) REFERENCES `enderecos` (`idEndereco`);

--
-- Limitadores para a tabela `unidades`
--
ALTER TABLE `unidades`
  ADD CONSTRAINT `unidades_ibfk_1` FOREIGN KEY (`idEndereco`) REFERENCES `enderecos` (`idEndereco`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

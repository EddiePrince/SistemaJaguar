-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17-Ago-2018 às 16:46
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
-- Database: `sistemajaguar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `anexos`
--

CREATE TABLE `anexos` (
  `idAnexo` int(11) NOT NULL,
  `tipoDocumento` varchar(60) NOT NULL,
  `nDocumento` varchar(60) NOT NULL,
  `arquivo` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `animais`
--

CREATE TABLE `animais` (
  `idAnimal` int(11) NOT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `idEntregador` int(11) DEFAULT NULL,
  `dataEntrada` date NOT NULL,
  `dataSaida` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `areas`
--

CREATE TABLE `areas` (
  `idArea` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `latitude` varchar(60) NOT NULL,
  `longitude` varchar(60) NOT NULL,
  `bioma` varchar(60) NOT NULL,
  `distancia` varchar(60) NOT NULL,
  `observacoes` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dadosdestinacao`
--

CREATE TABLE `dadosdestinacao` (
  `idDestinacao` int(11) NOT NULL,
  `modalidade` varchar(60) NOT NULL,
  `subtipo` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dadosquarentena`
--

CREATE TABLE `dadosquarentena` (
  `idQuarentena` int(11) NOT NULL,
  `periodoQuarentena` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dadostriagem`
--

CREATE TABLE `dadostriagem` (
  `idTriagem` int(11) NOT NULL,
  `codMarcacao` varchar(60) NOT NULL,
  `tipoMarcacao` varchar(60) NOT NULL,
  `localMarcacao` varchar(60) NOT NULL,
  `ultimaProcedencia` varchar(60) NOT NULL,
  `nomeComum` varchar(60) NOT NULL,
  `nomeCientifico` varchar(60) NOT NULL,
  `familia` varchar(60) NOT NULL,
  `ordem` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

CREATE TABLE `enderecos` (
  `idEndereco` int(11) NOT NULL,
  `uf` varchar(60) NOT NULL,
  `municipio` varchar(60) NOT NULL,
  `cep` varchar(60) NOT NULL,
  `bairro` varchar(60) NOT NULL,
  `lote` varchar(60) NOT NULL,
  `complemento` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `entregadores`
--

CREATE TABLE `entregadores` (
  `idEntregador` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `cpfcnpj` varchar(60) NOT NULL,
  `telefone` varchar(60) NOT NULL,
  `tipoEntrega` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `proprietarios`
--

CREATE TABLE `proprietarios` (
  `idProprietario` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `telefone` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `cpfcnpj` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `recuperacaosenha`
--

CREATE TABLE `recuperacaosenha` (
  `idSenha` int(11) NOT NULL,
  `criacao` varchar(60) NOT NULL,
  `matricula` varchar(60) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `titulo` varchar(60) NOT NULL,
  `mensagem` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `unidades`
--

CREATE TABLE `unidades` (
  `idUnidade` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `cnpj` varchar(60) NOT NULL,
  `tipoUnidade` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `matricula` varchar(60) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telefone` varchar(60) NOT NULL,
  `celular` varchar(60) NOT NULL,
  `perfil` varchar(60) NOT NULL,
  `senha` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  ADD KEY `idEntregador` (`idEntregador`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`idArea`);

--
-- Indexes for table `dadosdestinacao`
--
ALTER TABLE `dadosdestinacao`
  ADD PRIMARY KEY (`idDestinacao`);

--
-- Indexes for table `dadosquarentena`
--
ALTER TABLE `dadosquarentena`
  ADD PRIMARY KEY (`idQuarentena`);

--
-- Indexes for table `enderecos`
--
ALTER TABLE `enderecos`
  ADD PRIMARY KEY (`idEndereco`);

--
-- Indexes for table `entregadores`
--
ALTER TABLE `entregadores`
  ADD PRIMARY KEY (`idEntregador`);

--
-- Indexes for table `recuperacaosenha`
--
ALTER TABLE `recuperacaosenha`
  ADD PRIMARY KEY (`idSenha`);

--
-- Indexes for table `unidades`
--
ALTER TABLE `unidades`
  ADD PRIMARY KEY (`idUnidade`);

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
  MODIFY `idAnexo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `idArea` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dadosdestinacao`
--
ALTER TABLE `dadosdestinacao`
  MODIFY `idDestinacao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dadosquarentena`
--
ALTER TABLE `dadosquarentena`
  MODIFY `idQuarentena` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enderecos`
--
ALTER TABLE `enderecos`
  MODIFY `idEndereco` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `entregadores`
--
ALTER TABLE `entregadores`
  MODIFY `idEntregador` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recuperacaosenha`
--
ALTER TABLE `recuperacaosenha`
  MODIFY `idSenha` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `unidades`
--
ALTER TABLE `unidades`
  MODIFY `idUnidade` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `animais`
--
ALTER TABLE `animais`
  ADD CONSTRAINT `animais_ibfk_1` FOREIGN KEY (`idEntregador`) REFERENCES `entregadores` (`idEntregador`),
  ADD CONSTRAINT `animais_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

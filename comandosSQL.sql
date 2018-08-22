-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20-Ago-2018 às 16:21
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
-- Database: `sistemajaguar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `anexos`
--

CREATE TABLE `anexos` (
  `idAnexo` int(11) NOT NULL,
  `nDocumento` varchar(60) NOT NULL,
  `tipoDocumento` varchar(60) NOT NULL,
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
  `idTriagem` int(11) DEFAULT NULL,
  `idQuarentena` int(11) DEFAULT NULL,
  `idDestinacao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `areas`
--

CREATE TABLE `areas` (
  `idArea` int(11) NOT NULL,
  `idProprietario` int(11) DEFAULT NULL,
  `nome` varchar(60) NOT NULL,
  `latitude` varchar(60) NOT NULL,
  `longitude` varchar(60) NOT NULL,
  `bioma` varchar(60) NOT NULL,
  `distancia` varchar(60) NOT NULL,
  `observacoes` varchar(60) NOT NULL,
  `idEndereco` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cnpjs`
--

CREATE TABLE `cnpjs` (
  `idCnpj` int(11) NOT NULL,
  `cnpj` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cpfs`
--

CREATE TABLE `cpfs` (
  `idCpf` int(11) NOT NULL,
  `cpf` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dadosdestinacao`
--

CREATE TABLE `dadosdestinacao` (
  `idDestinacao` int(11) NOT NULL,
  `idArea` int(11) DEFAULT NULL,
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
  `tipoEntrega` int(11) NOT NULL,
  `idAnexo` int(11) DEFAULT NULL,
  `idTelefone` int(11) DEFAULT NULL,
  `tipoPessoa` varchar(60) NOT NULL,
  `idCpf` int(11) DEFAULT NULL,
  `idCnpj` int(11) DEFAULT NULL,
  `idEndereco` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `proprietarios`
--

CREATE TABLE `proprietarios` (
  `idProprietario` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `idTelefone` int(11) DEFAULT NULL,
  `tipoPessoa` varchar(60) NOT NULL,
  `idCnpj` int(11) DEFAULT NULL,
  `idCpf` int(11) DEFAULT NULL
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
-- Estrutura da tabela `telefones`
--

CREATE TABLE `telefones` (
  `idTelefone` int(11) NOT NULL,
  `numero` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `unidades`
--

CREATE TABLE `unidades` (
  `idUnidade` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `tipoUnidade` varchar(60) NOT NULL,
  `idTelefone` int(11) DEFAULT NULL,
  `idCnpj` int(11) DEFAULT NULL,
  `idEndereco` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `idTelefone` int(11) DEFAULT NULL,
  `idUnidade` int(11) DEFAULT NULL,
  `matricula` varchar(60) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `perfil` varchar(60) NOT NULL,
  `senha` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `usuarios` (`idUsuario`, `idTelefone`, `idUnidade`, `matricula`, `nome`, `email`, `perfil`, `senha`) VALUES (NULL, NULL, NULL, '123', 'adm', 'adm', 'adm', 'adm');

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
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idTriagem` (`idTriagem`),
  ADD KEY `idQuarentena` (`idQuarentena`),
  ADD KEY `idDestinacao` (`idDestinacao`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`idArea`),
  ADD KEY `idProprietario` (`idProprietario`),
  ADD KEY `idEndereco` (`idEndereco`);

--
-- Indexes for table `cnpjs`
--
ALTER TABLE `cnpjs`
  ADD PRIMARY KEY (`idCnpj`);

--
-- Indexes for table `cpfs`
--
ALTER TABLE `cpfs`
  ADD PRIMARY KEY (`idCpf`);

--
-- Indexes for table `dadosdestinacao`
--
ALTER TABLE `dadosdestinacao`
  ADD PRIMARY KEY (`idDestinacao`),
  ADD KEY `idArea` (`idArea`);

--
-- Indexes for table `dadosquarentena`
--
ALTER TABLE `dadosquarentena`
  ADD PRIMARY KEY (`idQuarentena`);

--
-- Indexes for table `dadostriagem`
--
ALTER TABLE `dadostriagem`
  ADD PRIMARY KEY (`idTriagem`);

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
  ADD KEY `idEndereco` (`idEndereco`),
  ADD KEY `idTelefone` (`idTelefone`),
  ADD KEY `idCpf` (`idCpf`),
  ADD KEY `idCnpj` (`idCnpj`);

--
-- Indexes for table `proprietarios`
--
ALTER TABLE `proprietarios`
  ADD PRIMARY KEY (`idProprietario`),
  ADD KEY `idTelefone` (`idTelefone`),
  ADD KEY `idCpf` (`idCpf`),
  ADD KEY `idCnpj` (`idCnpj`);

--
-- Indexes for table `recuperacaosenha`
--
ALTER TABLE `recuperacaosenha`
  ADD PRIMARY KEY (`idSenha`);

--
-- Indexes for table `telefones`
--
ALTER TABLE `telefones`
  ADD PRIMARY KEY (`idTelefone`);

--
-- Indexes for table `unidades`
--
ALTER TABLE `unidades`
  ADD PRIMARY KEY (`idUnidade`),
  ADD KEY `idEndereco` (`idEndereco`),
  ADD KEY `idTelefone` (`idTelefone`),
  ADD KEY `idCnpj` (`idCnpj`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `idUnidade` (`idUnidade`),
  ADD KEY `idTelefone` (`idTelefone`);

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
-- AUTO_INCREMENT for table `cnpjs`
--
ALTER TABLE `cnpjs`
  MODIFY `idCnpj` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cpfs`
--
ALTER TABLE `cpfs`
  MODIFY `idCpf` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `dadostriagem`
--
ALTER TABLE `dadostriagem`
  MODIFY `idTriagem` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `telefones`
--
ALTER TABLE `telefones`
  MODIFY `idTelefone` int(11) NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `animais_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`),
  ADD CONSTRAINT `animais_ibfk_3` FOREIGN KEY (`idTriagem`) REFERENCES `dadostriagem` (`idTriagem`),
  ADD CONSTRAINT `animais_ibfk_4` FOREIGN KEY (`idQuarentena`) REFERENCES `dadosquarentena` (`idQuarentena`),
  ADD CONSTRAINT `animais_ibfk_5` FOREIGN KEY (`idDestinacao`) REFERENCES `dadosdestinacao` (`idDestinacao`);

--
-- Limitadores para a tabela `areas`
--
ALTER TABLE `areas`
  ADD CONSTRAINT `areas_ibfk_1` FOREIGN KEY (`idProprietario`) REFERENCES `proprietarios` (`idProprietario`),
  ADD CONSTRAINT `areas_ibfk_2` FOREIGN KEY (`idEndereco`) REFERENCES `enderecos` (`idEndereco`);

--
-- Limitadores para a tabela `dadosdestinacao`
--
ALTER TABLE `dadosdestinacao`
  ADD CONSTRAINT `dadosdestinacao_ibfk_1` FOREIGN KEY (`idArea`) REFERENCES `areas` (`idArea`);

--
-- Limitadores para a tabela `entregadores`
--
ALTER TABLE `entregadores`
  ADD CONSTRAINT `entregadores_ibfk_1` FOREIGN KEY (`idAnexo`) REFERENCES `anexos` (`idAnexo`),
  ADD CONSTRAINT `entregadores_ibfk_2` FOREIGN KEY (`idEndereco`) REFERENCES `enderecos` (`idEndereco`),
  ADD CONSTRAINT `entregadores_ibfk_3` FOREIGN KEY (`idTelefone`) REFERENCES `telefones` (`idTelefone`),
  ADD CONSTRAINT `entregadores_ibfk_4` FOREIGN KEY (`idCpf`) REFERENCES `cpfs` (`idCpf`),
  ADD CONSTRAINT `entregadores_ibfk_5` FOREIGN KEY (`idCnpj`) REFERENCES `cnpjs` (`idCnpj`);

--
-- Limitadores para a tabela `proprietarios`
--
ALTER TABLE `proprietarios`
  ADD CONSTRAINT `proprietarios_ibfk_1` FOREIGN KEY (`idTelefone`) REFERENCES `telefones` (`idTelefone`),
  ADD CONSTRAINT `proprietarios_ibfk_2` FOREIGN KEY (`idCpf`) REFERENCES `cpfs` (`idCpf`),
  ADD CONSTRAINT `proprietarios_ibfk_3` FOREIGN KEY (`idCnpj`) REFERENCES `cnpjs` (`idCnpj`);

--
-- Limitadores para a tabela `unidades`
--
ALTER TABLE `unidades`
  ADD CONSTRAINT `unidades_ibfk_1` FOREIGN KEY (`idEndereco`) REFERENCES `enderecos` (`idEndereco`),
  ADD CONSTRAINT `unidades_ibfk_2` FOREIGN KEY (`idTelefone`) REFERENCES `telefones` (`idTelefone`),
  ADD CONSTRAINT `unidades_ibfk_3` FOREIGN KEY (`idCnpj`) REFERENCES `cnpjs` (`idCnpj`);

--
-- Limitadores para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`idUnidade`) REFERENCES `unidades` (`idUnidade`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`idTelefone`) REFERENCES `telefones` (`idTelefone`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

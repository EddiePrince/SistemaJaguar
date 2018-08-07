-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Ago-2018 às 15:34
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


-- --------------------------------------------------------

-- Database: `jaguar_sistem`

DROP DATABASE if EXISTS `jaguar_sistem`;

CREATE DATABASE IF NOT EXISTS `jaguar_sistem` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `jaguar_sistem`;

-- --------------------------------------------------------


-- Estrutura da tabela `usuarios`

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `perfil` varchar(20) DEFAULT NULL,
  `nomeCompleto` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefone` varchar(30) DEFAULT NULL,
  `celular` varchar(30) DEFAULT NULL,
  `usuario` varchar(30) DEFAULT NULL,
  `senha` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET= UTF8 COLLATE = utf8_general_ci;

-- Extraindo dados da tabela `usuarios`

INSERT INTO `usuarios` (`id`, `perfil`, `nomeCompleto`, `email`, `telefone`, `celular`, `usuario`, `senha`) VALUES
(1, 'Administrador', 'Administrador', 'Administrador@naturanits.com', '--', '--', 'admin', 'admin'),
(2, 'Agente', 'Agente', 'Agente@naturanits.com', '--', '--', 'agente', 'agente');

-- --------------------------------------------------------
--
-- Estrutura da tabela `unidades`
--
DROP TABLE IF EXISTS `unidades`;
CREATE TABLE `unidades` (
`idUnidade` int(11) NOT NULL UNIQUE,
`nomeUnidade` varchar(60) NOT NULL,
`tipoUnidade` varchar(20) NOT NULL,
`cnpj` varchar(20) DEFAULT NULL,
`cep` varchar(30) DEFAULT NULL,
`municipio` varchar(100) DEFAULT NULL,
`bairro` varchar(100) DEFAULT NULL,
`rua`varchar(100) DEFAULT NULL,
`lote` varchar(20) DEFAULT NULL,
`complemento` varchar(100) DEFAULT NULL,
PRIMARY KEY (`idUnidade`)) ENGINE=InnoDB DEFAULT CHARSET= UTF8 COLLATE = utf8_general_ci;


-- Extraindo dados da tabela `unidades`

INSERT INTO `unidades` (`idUnidade`, `nomeUnidade`, `tipoUnidade`, `cnpj`, `cep`, `municipio`, `bairro`, `rua`, `lote`, `complemento`) VALUES
(1, 'Central Palmas', 'Central', '86.4312.555-20', '77229-041', 'Palmas', 'Aureni 1', 'Rua medeiros', '15', NULL),
(2, 'CETAS Araguaína', 'Regional', '094.2223-455', '34440-553', 'Araguaína', 'Taquaralto', '1 de Novembro', '11', NULL);

-- --------------------------------------------------------

-- Estrutura da tabela `animais`

DROP TABLE IF EXISTS `animais`;
CREATE TABLE `animais` (
  `nFicha` int(11) NULL,
  `dataRecebimento` DATE ,
  `modificadoem` datetime DEFAULT NULL ,
  `agenteRecebedor` varchar(60) DEFAULT NULL,
  `tipoRecolhimento` varchar(60) DEFAULT NULL,
  `nomeEntregador` varchar(60) DEFAULT NULL,
  `cpf_cnpj` varchar(20) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `cep` varchar(60) DEFAULT NULL,
  `enderecoEntregador` varchar(60) DEFAULT NULL,
  `municipioEntregador` varchar(100) DEFAULT NULL,
  `idDocumento` int(11) DEFAULT NULL,
  `autoTermoBoletim` varchar(60) NULL,
  `uploadDoc` varchar(60) NULL,
  `idUnidade` int(11) DEFAULT NULL,
  `nomeUnidade` varchar(60) NOT NULL,
  `municipioProcedencia` varchar(60) DEFAULT NULL,
  `ufProcedencia` varchar(60) DEFAULT NULL,
  `locUltimaProcedencia` varchar(60) DEFAULT NULL,
  `dieta` varchar(60) DEFAULT NULL,
  `nomeComum` varchar(60) DEFAULT NULL,
  `nomeCientifico` varchar(60) DEFAULT NULL,
  `familiaAnimal` varchar(60) DEFAULT NULL,
  `ordemAnimal` varchar(60) DEFAULT NULL,
  `codMarca` varchar(20) DEFAULT NULL,
  `tipoMarca` varchar(60) DEFAULT NULL,
  `localMarca` varchar(60) DEFAULT NULL,
  `tipoDestinacao` varchar(60) DEFAULT NULL,
  `periodoQuarentena` varchar(11) DEFAULT NULL,
  `subtipoDestinacao` varchar(60) DEFAULT NULL,
  `condicao1` varchar(255) DEFAULT NULL,
  `condicao2` varchar(255) DEFAULT NULL,
  `condicao3` varchar(255) DEFAULT NULL,
  `situacao` varchar(60) DEFAULT NULL,
  `idArea` int(11) DEFAULT NULL,
  PRIMARY KEY  (`nFicha`)) ENGINE=InnoDB DEFAULT character set = UTF8 COLLATE = utf8_general_ci;

INSERT INTO `animais` (`nFicha`, `dataRecebimento`, `modificadoem`, `agenteRecebedor`, `tipoRecolhimento`, `nomeEntregador`, `cpf_cnpj`, `telefone`, `cep`, `enderecoEntregador`, `municipioEntregador`, `idDocumento`, `autoTermoBoletim`, `uploadDoc`, `idUnidade`, `nomeUnidade`, `municipioProcedencia`, `ufProcedencia`, `locUltimaProcedencia`, `dieta`, `nomeComum`, `nomeCientifico`, `familiaAnimal`, `ordemAnimal`, `codMarca`, `tipoMarca`, `localMarca`, `situacao`, `periodoQuarentena`, `tipoDestinacao`, `subtipoDestinacao`, `condicao1`, `condicao2`, `condicao3`, `idArea`) VALUES (01, '2018-08-15', '2018-08-16 09:30:18', 'Alfredo Mendonça', 'Tipo 1', 'Marcos Silva', '098765432123', '65478932', '130245600', 'Rua x, Bairro y, Numero 0011', 'Almas', '01', '2341', '0', '2', 'CETAS', 'Araguaina', 'TO', 'Brejo', 'Animal', 'Tamanduá', 'Tamanduá Bandeira', 'Bandeira', 'Terráquio', 'COD03', 'Tipo02', 'Natividade', 'Adotado', '30', 'Mediata', 'Soltura', 'Cond1', 'Cond2', 'Cond3', '1');

-- --------------------------------------------------------

-- Estrutura da tabela `anexos`

DROP TABLE IF EXISTS `anexos`;
CREATE TABLE `anexos` (
  `idDocumento` int(11) NOT NULL,
  `nDocumento` varchar(20) DEFAULT NULL,
  `tipoDocumento` varchar(60) DEFAULT NULL,
  `arquivo` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`idDocumento`)
) ENGINE=InnoDB DEFAULT character set = UTF8 COLLATE = utf8_general_ci;

INSERT INTO `anexos` (`idDocumento`, `nDocumento`, `tipoDocumento`, `arquivo`) VALUES ('01', '01', 'indefinido', 'morto');

-- --------------------------------------------------------

-- Estrutura da tabela `areas`

DROP TABLE IF EXISTS `areas`;
CREATE TABLE `areas` (
  `idArea` int(11) NOT NULL UNIQUE,
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
  `obs` text,
  PRIMARY KEY (`idArea`)) ENGINE=InnoDB DEFAULT CHARSET= UTF8 COLLATE = utf8_general_ci;


-- Extraindo dados da tabela `areas`

INSERT INTO `areas` (`idArea`, `nomePropriedade`, `proprietario`, `telefone`, `email`, `uf`, `municipio`, `endereco`, `cep`, `lote`, `complemento`, `latitude`, `longitude`, `bioma`, `distancia`, `obs`) VALUES
(1, 'Fazenda Arara Azul', 'Francisco Teixeira', '(63) 3217-8456', 'franciscoteixeira@gmail.com', 'Tocantins', 'Palmas', 'Arse 894', '77586-344', '28', 'Próximo ao supermercado Opção', '-43.626', '34.602', 'Cerrado', '24km', NULL),
(2, 'Riacho Lince Negro', 'Área Pública', NULL, NULL, 'Tocantins', 'Palmas', '805 Norte Al 24', '77839-053', NULL, 'Riacho atrás da Fábrica Schkling', '21.400', '-41.204', 'Cerrado', '45 Km', NULL);


-- -----------------------------------------------
-- Recuperação de senha

   DROP TABLE if EXISTS recuperacaosenha;
   CREATE TABLE IF NOT EXISTS `recuperacaosenha` (
     `idSenha` int(11) NOT NULL AUTO_INCREMENT,
     `criacao` datetime NOT NULL,
     `nome` varchar(100) NOT NULL,
     `email` varchar(50) NOT NULL,
     `titulo` varchar(100) NOT NULL,
     `mensagem` varchar(100) NOT NULL,
     PRIMARY KEY (`idSenha`)
   )  ENGINE=InnoDB DEFAULT CHARSET= UTF8 COLLATE = utf8_general_ci;

-- Indexes for table `animais`
--
ALTER TABLE `animais`
  ADD KEY `idDocumento` (`idDocumento`),
  ADD KEY `idUnidade` (`idUnidade`),
  ADD KEY `idArea` (`idArea`);

  ALTER TABLE `animais`
  CHANGE `dataRecebimento` `dataRecebimento` DATETIME NULL DEFAULT NULL;
--
-- Indexes for table `unidades`
--
ALTER TABLE `unidades`
  ADD UNIQUE KEY `id` (`idUnidade`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD UNIQUE KEY `email` (`email`);

-- AUTO_INCREMENT for table `anexos`
--
ALTER TABLE `anexos`
  MODIFY `idDocumento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `animais`
--
ALTER TABLE `animais`
  MODIFY `nFicha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `idArea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `unidades`
--
ALTER TABLE `unidades`
  MODIFY `idUnidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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

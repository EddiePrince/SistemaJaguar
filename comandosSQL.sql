CREATE DATABASE IF NOT EXISTS `jaguar_sistem` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `jaguar_sistem`;

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `perfil` varchar(20),
  `nomeCompleto` varchar(255),
  `email` varchar(50) unique,
  `telefone` varchar(30),
  `celular` varchar(30),
  `usuario` varchar(30),
  `senha` varchar(64) ,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT character set = utf8;



USE `jaguar_sistem`;

DROP TABLE IF EXISTS `animais`;
CREATE TABLE `animais` (
  `numeroFicha` int(11) NOT NULL AUTO_INCREMENT unique,
  `data` date,
  `agente_recebedor` varchar(255),
  `tipo_recolhimento` varchar(30),
  `nomeEntregador` varchar(50),
  `cpf_cnpj` varchar(20),
  `telefone` varchar(50),
  `endereco`
  `municipio`
  `cep`
  `tipoDocumento`
  `numeroDocumento`
  `arquivoDocumento`
  `unidadeAcolhedora`
  `municipioProcedencia`
  `UF`
  `ultimaProcedencia`
  `dieta` varchar(30),
  `nome_comum` varchar(255),
  `nome_cientifico` varchar(255),
  PRIMARY KEY (`numero`)
) ENGINE=InnoDB DEFAULT character set = utf8;


USE `jaguar_sistem`;

DROP TABLE IF EXISTS `unidades`;
CREATE TABLE `unidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT unique,
  `cnpj` varchar(20),
  `cep` varchar(30),
  `municipio` varchar(100),
  `bairro` varchar(20),
  `rua` varchar(100),
  `numero` varchar(20),
  `complemento` varchar(100),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT character set = utf8;

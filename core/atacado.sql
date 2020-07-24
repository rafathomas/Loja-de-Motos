-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 14-Jul-2020 às 19:10
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `atacado`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `sobrenome` varchar(200) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `cep` varchar(12) NOT NULL,
  `rua` varchar(200) NOT NULL,
  `bairro` varchar(200) NOT NULL,
  `cidade` varchar(200) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `marca` varchar(200) NOT NULL,
  `modelo` varchar(200) NOT NULL,
  `placa` varchar(20) NOT NULL,
  `km` varchar(200) NOT NULL,
  `orcamento` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `sobrenome`, `cpf`, `cep`, `rua`, `bairro`, `cidade`, `telefone`, `celular`, `marca`, `modelo`, `placa`, `km`, `orcamento`) VALUES
(13, 'Fernando', '', '457.619.038-57', '16072-455', 'Rua BolÃ­via', 'Planalto', 'AraÃ§atuba', '(18) 3608-2925', '(18) 99818-9919', 'honda', 'falcon', 'eeke', '1344', NULL),
(14, 'Jose', 'Alves', '963.283.122-53', '16072-455', 'Rua BolÃ­via', 'Planalto', 'AraÃ§atuba', '(18) 3608-2925', '(18) 99818-9919', 'Titan', 'Falcon', 'ene123', '13674', NULL),
(16, 'Rafael', 'Thomas', '111.111.111-11', '16072-455', 'Rua BolÃ­via', 'Planalto', 'AraÃ§atuba', '(18) 3608-2925', '(18) 99818-9919', 'dsa', 'fsaf', 'dsad', '111', NULL),
(17, 'Jose', 'Silva', '456.786.666-66', '16072-455', 'Rua BolÃ­via', 'Planalto', 'AraÃ§atuba', '(18) 3608-2925', '(18) 99818-9919', 'sf', 'dskdsak', '1234', '12133', NULL),
(18, 'Rafael', 'Thomas', '061.608.208-85', '16072-455', 'Rua BolÃ­via', 'Planalto', 'AraÃ§atuba', '(18) 3608-2925', '(18) 99818-9919', 'fdsf', 'fsdf', 'fds', '1333', 'trocar'),
(19, 'Daniel', 'Silva', '000.000.000-00', '16072-455', 'Rua BolÃ­via', 'Planalto', 'AraÃ§atuba', '(18) 3608-2925', '(18) 99818-9919', 'dsa', 'dsadas', 'dsad', '111', 'Trocar farol'),
(20, 'Roberto Rodrigues', 'da Silva', '345.678.900-00', '16072-455', 'Rua BolÃ­via', 'Planalto', 'AraÃ§atuba', '(18) 1234-5678', '(18) 99818-9919', 'Yamaha', 'Fazer 250', 'eeeee', '12132435', NULL),
(21, 'Jose Roberto', 'da Silva', '761.101.348-96', '16072455', 'Rua BolÃ­via', 'Planalto', 'AraÃ§atuba', '(18) 3608-2925', '(18) 99818-9919', 'ffdfd', 'fsaf', 'fsaf', '112133', NULL),
(22, 'Gustavo ', 'da Silva', '54.634.948-44', '16072455', 'Rua BolÃ­via', 'Planalto', 'AraÃ§atuba', '(18) 3608-2925', '(18) 99818-9919', 'yamaha', 'fdfdsfds', 'fdfd', '132334', NULL),
(23, 'Alice ', 'da Silva', '846.356.465-44', '16072-455', 'Rua BolÃ­via', 'Planalto', 'AraÃ§atuba', '(18) 3608-2925', '(18) 99818-9919', 'Honda', 'PCX', 'BAR3250', '1324357', NULL),
(24, 'Zagal', 'Oalludiu', '186.675.230-89', '13056-063', 'Rua Nove', 'Jardim Novo Planalto', 'Campinas', '(18) 3115-6697', '(18) 99818-9919', 'Honda', 'CG 160', 'asadfa', '1233521', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  `quantidade` varchar(255) NOT NULL,
  `custo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `valor`, `quantidade`, `custo`) VALUES
(1, 'Retrovisor biz', '120.40', '', ''),
(2, 'Escapamento titan 125', '95.40', '', ''),
(3, 'Coxim', '85.70', '', ''),
(7, 'Bucha Cubo Traseiro', '33.33', '33', '3.00'),
(8, 'Ponteira Modelo Devil TTR 230 ', '430.00', '22', '200.00'),
(9, 'Escapamento honda titan 125', '80.00', '20', '30.00'),
(10, 'Farol titan 125', '60.00', '20', '35.00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

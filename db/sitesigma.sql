-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Jul-2022 às 17:19
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sitesigma`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `collection`
--

CREATE TABLE `collection` (
  `CollectionID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `collection`
--

INSERT INTO `collection` (`CollectionID`, `Name`, `Active`) VALUES
(1, 'Bored Ape', 1),
(2, 'CryptoPunk', 1),
(3, 'Azuki', 1),
(4, 'Nekomata', 1),
(5, 'Genzee', 1),
(6, 'Based Ghouls', 1),
(7, 'FLUF World', 1),
(8, 'mfers', 1),
(9, 'Smilesss', 1),
(10, 'Moonbirds', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `ProductsID` int(11) NOT NULL,
  `Code` int(50) NOT NULL,
  `CollectionID` int(11) NOT NULL,
  `Price` float NOT NULL,
  `Image` varchar(200) NOT NULL,
  `Active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`ProductsID`, `Code`, `CollectionID`, `Price`, `Image`, `Active`) VALUES
(1, 122, 1, 1, '122-boredApe.png', 1),
(2, 955, 1, 1, '955-boredApe.png', 1),
(3, 2087, 1, 1, '2087-boredApe.png', 1),
(4, 3368, 1, 1, '3368-boredApe.png', 1),
(5, 3650, 1, 1, '3650-boredApe.png', 1),
(6, 4303, 1, 1, '4303-boredApe.png', 1),
(7, 4671, 1, 1, '4671-boredApe.png', 1),
(8, 8470, 1, 1, '8470-boredApe.png', 1),
(9, 8520, 1, 1, '8520-boredApe.png', 1),
(10, 9996, 1, 1, '9996-boredApe.png', 1),
(11, 104, 2, 2, '104-cryptoPunk.png', 1),
(12, 110, 2, 2, '110-cryptoPunk.png', 1),
(13, 7594, 2, 2, '7594-cryptoPunk.png', 1),
(14, 7600, 2, 2, '7600-cryptoPunk.png', 1),
(15, 7604, 2, 2, '7604-cryptoPunk.png', 1),
(16, 7607, 2, 2, '7607-cryptoPunk.png', 1),
(17, 7612, 2, 2, '7612-cryptoPunk.png', 1),
(18, 7613, 2, 2, '7613-cryptoPunk.png', 1),
(19, 7614, 2, 2, '7614-cryptoPunk.png', 1),
(20, 7617, 2, 2, '7617-cryptoPunk.png', 1),
(21, 1023, 3, 1, '1023-azuki.png', 1),
(22, 2599, 3, 1, '2599-azuki.png', 1),
(23, 2905, 3, 1, '2905-azuki.png', 1),
(24, 4385, 3, 1, '4385-azuki.png', 1),
(25, 4614, 3, 1, '4614-azuki.png', 1),
(26, 5083, 3, 1, '5083-azuki.png', 1),
(27, 5214, 3, 1, '5214-azuki.png', 1),
(28, 9024, 3, 1, '9024-azuki.png', 1),
(29, 9201, 3, 1, '9201-azuki.png', 1),
(30, 9445, 3, 1, '9445-azuki.png', 1),
(33, 5083, 3, 1, '5083-azuki.png', 1),
(34, 5214, 3, 1, '5214-azuki.png', 1),
(36, 9024, 3, 1, '9024-azuki.png', 1),
(37, 9201, 3, 1, '9201-azuki.png', 1),
(38, 9445, 3, 1, '9445-azuki.png', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`CollectionID`);

--
-- Índices para tabela `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductsID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `collection`
--
ALTER TABLE `collection`
  MODIFY `CollectionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `products`
--
ALTER TABLE `products`
  MODIFY `ProductsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

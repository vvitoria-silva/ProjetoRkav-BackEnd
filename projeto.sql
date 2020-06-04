-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Jun-2020 às 02:28
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `cep` varchar(11) NOT NULL,
  `endereco` varchar(300) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `dataNasc` date NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `cpf`, `cep`, `endereco`, `estado`, `dataNasc`, `email`) VALUES
(1, 'Joao da Silva', '630.164.742-47', '69010-174', 'Bairro Centro Travessa Simões 279', 'AM', '1999-12-01', 'joao10silva@gmail.com'),
(2, 'Maria dos Santos', '136.857.692-35', '69097-374', 'Nova Cidade Rua 57,número 484 ', 'AM', '1990-03-01', 'mariasilva@gmail.com'),
(5, 'Teresa Milena Dias', '271.191.382-19', '69050-350', 'Bairro Parque 10 de Novembro Rua Deuzuita Neves, 854 \r\n		', 'AM', '1980-05-29', 'teresadias@gmail.com'),
(11, 'Lucas Souza', '184.982.312-05', '69073-530', 'Bairro São Lázaro Rua Beco Hemetério Cabrinha, 412\r\n', 'AM', '2001-08-22', 'luquinhas@gmail.com'),
(13, 'Camila Isabelle Almeida', '054.672.422-10', '69015-788', 'Bairro Colônia Terra Nova Rua 16, numero 121\r\n		', 'AM', '1995-04-09', 'camilaalmeida@gmail.com'),
(14, 'Olivia Maitê Corte Real', '727.916.432-30', '69085-001', 'Bairro São José Operário Rua Politéia 560', 'AM', '1988-04-03', 'oliviareal@gmail.com'),
(15, 'Natália Isabel Lopes', '677.250.972-28', '69022-566', 'Bairro Tarumã-Açu Via Quinque, 640\r\n		', 'AM', '2000-09-10', 'isabellopes18@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `preco` float NOT NULL,
  `estoque` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `descricao`, `preco`, `estoque`) VALUES
(2, 'Cama King Size Solteiro', 120, 11),
(3, 'Cama Solteiro', 59, 5),
(4, 'Lençol cama super king com bordado inglês', 180, 23),
(5, 'Toalha de banho - Tati IIg - Feito a mão', 45, 12),
(6, 'Lençol cama super King liso', 200, 5),
(7, 'Toalha Karsten', 78, 7),
(8, 'Lençol Super King (com bordado inglês azul marinho)', 200, 5),
(9, 'Toalha Dohler Prisma', 55, 2),
(10, 'Lençol Super King Espanhol', 130, 9),
(11, 'Lençol Super King Tulipa', 270, 5),
(12, 'Toalha Social', 178, 2),
(13, 'Lençol Super King - Grão de Gente', 100, 5),
(14, 'Lençol cama super King Azul', 270, 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'teste', 'teste@gmail.com', 'teste123'),
(2, 'Ramon', 'ramon@gmail.com', 'ramon123'),
(3, 'Karol', 'karoline@gmail.com', 'karolsenha'),
(4, 'Vitória', 'vitoria@gmail.com', 'vitoriasilva'),
(5, 'Alissandra', 'alissandra@gmail.com', 'alissandra');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

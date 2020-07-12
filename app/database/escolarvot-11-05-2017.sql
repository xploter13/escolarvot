-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Maio-2017 às 14:35
-- Versão do servidor: 5.7.18-log
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `escolarvot`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `representante`
--

CREATE TABLE `representante` (
  `id` int(11) NOT NULL,
  `id_turma` int(11) NOT NULL,
  `nome_chapa` varchar(50) DEFAULT NULL,
  `nome_repre` varchar(50) NOT NULL,
  `nome_vice_repre` varchar(50) NOT NULL,
  `num_insc` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `representante`
--

INSERT INTO `representante` (`id`, `id_turma`, `nome_chapa`, `nome_repre`, `nome_vice_repre`, `num_insc`) VALUES
(87, 28, 'Chapa 01', 'Ana Clara Arcanjo', 'Paulo Vitor Carvalho', '01'),
(88, 28, 'Chapa 02', 'Michele Monteiro', 'João Pedro Neves', '02'),
(89, 29, 'Chapa 01', 'Vitória Aparecida', 'Amanda Martins', '03'),
(90, 29, 'Chapa 02', 'Danilo Silva', 'Gabriel Carlos', '04'),
(91, 30, 'Chapa 01', 'Brenda Saturnino', 'Rayane Cunha', '05'),
(92, 30, 'Chapa 02', 'Raíssa Reis', 'Kettlen Lorraine', '06'),
(93, 31, 'Chapa 01', 'Blenda', 'Letícia', '07'),
(94, 31, 'Chapa 02', 'Eloise', 'Ivson', '08'),
(95, 32, 'Chapa 01', 'Naiara', 'Letícia', '09'),
(96, 32, 'Chapa 02', 'Marcos', 'Ana Clara', '10'),
(97, 33, 'Chapa 01', 'André Luis', 'Yan Muniz', '11'),
(98, 32, 'Chapa 02', ' Vitor Gabriel', 'Hugo Vidal', '12'),
(99, 32, 'Chapa 03', 'Mauro', 'Hugo Rosa', '13'),
(100, 34, 'Chapa 01', 'Ana Beatriz', 'Camilly Neves', '14'),
(101, 34, 'Chapa 02', 'Ludmila', 'Lorane', '15'),
(102, 34, 'Chapa 03', 'Maria Eduarda', 'Caren', '16'),
(103, 35, 'Chapa 01', 'Letícia', 'Camile', '17'),
(104, 35, 'Chapa 02', 'Yasmin ', 'Emanuelle', '18'),
(105, 36, 'Chapa 01', 'Mariana Souza', 'Júlia Paiva', '19'),
(106, 36, 'Chapa 02', 'Júlio César', 'Daniel', '20'),
(107, 37, 'Chapa 01', 'Thaíssa', 'Lívia', '21'),
(108, 37, 'Chapa 02', 'Gabriel', 'Gabriella', '22'),
(109, 38, 'Chapa 01', 'Tamires', 'Caio', '23'),
(110, 38, 'Chapa 02', 'Lara', 'Daphne', '24');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `id` int(11) NOT NULL,
  `turma` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`id`, `turma`) VALUES
(28, '601'),
(29, '602'),
(30, '603'),
(31, '604'),
(32, '701'),
(33, '702'),
(34, '801'),
(35, '802'),
(36, '901'),
(37, '902'),
(38, '903');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` bigint(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `login` varchar(10) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `categoria` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `login`, `senha`, `categoria`) VALUES
(1, 'Luiz Fernando', 'fernando', '123', 'Professor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `votos`
--

CREATE TABLE `votos` (
  `id` int(11) NOT NULL,
  `turma` varchar(20) NOT NULL,
  `chapa` varchar(20) NOT NULL,
  `id_representante` int(11) NOT NULL,
  `qtd_votos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `representante`
--
ALTER TABLE `representante`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_chapa_turma1_idx` (`id_turma`);

--
-- Indexes for table `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votos`
--
ALTER TABLE `votos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_votos_chapa_idx` (`id_representante`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `representante`
--
ALTER TABLE `representante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
--
-- AUTO_INCREMENT for table `turma`
--
ALTER TABLE `turma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `votos`
--
ALTER TABLE `votos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `representante`
--
ALTER TABLE `representante`
  ADD CONSTRAINT `fk_chapa_turma1` FOREIGN KEY (`id_turma`) REFERENCES `turma` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `votos`
--
ALTER TABLE `votos`
  ADD CONSTRAINT `fk_votos_chapa` FOREIGN KEY (`id_representante`) REFERENCES `representante` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

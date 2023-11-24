-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/11/2023 às 13:05
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `enade`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `conteudo`
--

CREATE TABLE `conteudo` (
  `ID` int(11) NOT NULL,
  `nome` varchar(20) DEFAULT NULL,
  `materia` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `materia`
--

CREATE TABLE `materia` (
  `sigla` varchar(4) NOT NULL,
  `nome` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pergunta`
--

CREATE TABLE `pergunta` (
  `ID` int(11) NOT NULL,
  `enunciado` text DEFAULT NULL,
  `materia` varchar(4) DEFAULT NULL,
  `conteudo` int(11) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `gabarito` int(11) DEFAULT NULL,
  `PONTUACAO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `respostas`
--

CREATE TABLE `respostas` (
  `aluno` varchar(20) DEFAULT NULL,
  `pergunta` int(11) DEFAULT NULL,
  `alternativa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `login` varchar(20) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Sobrenome` varchar(50) NOT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `foto` blob DEFAULT NULL,
  `pontuacao_maxima` int(11) DEFAULT NULL,
  `admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `conteudo`
--
ALTER TABLE `conteudo`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `materia` (`materia`);

--
-- Índices de tabela `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`sigla`);

--
-- Índices de tabela `pergunta`
--
ALTER TABLE `pergunta`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `materia` (`materia`),
  ADD KEY `conteudo` (`conteudo`);

--
-- Índices de tabela `respostas`
--
ALTER TABLE `respostas`
  ADD KEY `aluno` (`aluno`),
  ADD KEY `pergunta` (`pergunta`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`login`);

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `conteudo`
--
ALTER TABLE `conteudo`
  ADD CONSTRAINT `conteudo_ibfk_1` FOREIGN KEY (`materia`) REFERENCES `materia` (`sigla`);

--
-- Restrições para tabelas `pergunta`
--
ALTER TABLE `pergunta`
  ADD CONSTRAINT `pergunta_ibfk_1` FOREIGN KEY (`materia`) REFERENCES `materia` (`sigla`),
  ADD CONSTRAINT `pergunta_ibfk_2` FOREIGN KEY (`conteudo`) REFERENCES `conteudo` (`ID`);

--
-- Restrições para tabelas `respostas`
--
ALTER TABLE `respostas`
  ADD CONSTRAINT `respostas_ibfk_1` FOREIGN KEY (`aluno`) REFERENCES `usuario` (`login`),
  ADD CONSTRAINT `respostas_ibfk_2` FOREIGN KEY (`pergunta`) REFERENCES `pergunta` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

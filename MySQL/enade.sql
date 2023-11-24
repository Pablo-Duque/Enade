-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24/11/2023 às 04:18
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
  `nome` varchar(50) DEFAULT NULL,
  `materia` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `conteudo`
--

INSERT INTO `conteudo` (`ID`, `nome`, `materia`) VALUES
(1, 'Conceitos de computação em nuvem', 'ADRD'),
(2, 'Criação e administração de máquinas virtuais', 'ADRD'),
(3, 'Servidores Web', 'ADRD'),
(4, 'Servidores de arquivos', 'ADRD'),
(5, 'Tipos de arquitetura de software', 'ARQS'),
(6, 'Modelo de classes de projeto', 'ARQS'),
(7, 'Componentes de software', 'ARQS'),
(8, 'Modelo entidade-relacionamento', 'BDA'),
(9, 'Normalização', 'BDA'),
(10, 'DDL, DML', 'BDA'),
(11, 'Concorrência', 'BDA'),
(12, 'Segurança de dados e integridade', 'BDA'),
(13, 'Layout', 'DDMO'),
(14, 'Criação de aplicativos', 'DDMO'),
(15, 'Persistência de dados', 'DDMO'),
(16, 'Conectividade', 'DDMO'),
(17, 'Serviços em background', 'DDMO'),
(18, 'Deploy', 'DDMO'),
(19, 'Processo de software', 'ENSW'),
(20, 'Engenharia de requisitos', 'ENSW'),
(21, 'Projeto e implementação', 'ENSW'),
(22, 'Manutenção de software', 'ENSW'),
(23, 'Diagramas', 'ENSW'),
(24, 'Recursividade', 'ESD'),
(25, 'Estruturas de dados heterogêneos', 'ESD'),
(26, 'Ponteiro e memória dinâmica', 'ESD'),
(27, 'Árvores', 'ESD'),
(28, 'Algoritmos', 'ESD'),
(29, 'Computação física', 'IOTS'),
(30, 'Sensores e atuadores', 'IOTS'),
(31, 'Circuitos elétricos', 'IOTS'),
(32, 'Protocolos de comunicação', 'IOTS'),
(33, 'Lógica de programação', 'LPR'),
(34, 'Operadores', 'LPR'),
(35, 'Programação sequencial', 'LPR'),
(36, 'Vetores e matrizes', 'LPR'),
(37, 'Orientação a objetos', 'LPR'),
(38, 'Abstração de dados', 'LPR'),
(39, 'Classes e suas características', 'LPR'),
(40, 'Interfaces', 'LPR'),
(41, 'Model-View-Controller', 'LPR');

-- --------------------------------------------------------

--
-- Estrutura para tabela `materia`
--

CREATE TABLE `materia` (
  `sigla` varchar(4) NOT NULL,
  `nome` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `materia`
--

INSERT INTO `materia` (`sigla`, `nome`) VALUES
('ADRD', 'Administração de Redes'),
('ARQS', 'Arquitetura de Software'),
('BDA', 'Banco de Dados'),
('DDMO', 'Desenvolvimento para Dispositivos Móveis'),
('ENSW', 'Engenharia de Software'),
('ESD', 'Estrutura de Dados'),
('IOTS', 'Internet das Coisas'),
('LPR', 'Linguagem de Programação');

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
  `gabarito` int(11) DEFAULT NULL
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
  `senha` varchar(15) DEFAULT NULL,
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
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `conteudo`
--
ALTER TABLE `conteudo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `conteudo`
--
ALTER TABLE `conteudo`
  ADD CONSTRAINT `conteudo_ibfk_1` FOREIGN KEY (`materia`) REFERENCES `materia` (`sigla`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

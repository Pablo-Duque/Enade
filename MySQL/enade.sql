-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03/12/2023 às 14:39
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
-- Estrutura para tabela `alternativa`
--

CREATE TABLE `alternativa` (
  `id` int(11) NOT NULL,
  `alternativa` int(11) NOT NULL,
  `pergunta` int(11) NOT NULL,
  `texto` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `alternativa`
--

INSERT INTO `alternativa` (`id`, `alternativa`, `pergunta`, `texto`) VALUES
(1, 1, 1, 'I e II.'),
(2, 2, 1, 'I e III.'),
(3, 3, 1, 'II e III.'),
(4, 4, 1, 'II e IV.'),
(5, 5, 1, 'III e IV.'),
(6, 1, 2, 'O conceito de transparência mencionado indica que a MV permite que um aplicativo acesse diretamente o hardware da máquina.'),
(7, 2, 2, 'Uma das vantagens mais significativas de uma MV é a economia de carga de CPU e de memória RAM na execução de um aplicativo.'),
(8, 3, 2, 'Uma MV oferece maior controle de segurança, uma vez que aplicativos são executados em um ambiente controlado.'),
(9, 4, 2, 'Para emular uma CPU dual-core, uma MV deve ser instalada e executada em um computador com CPU dual-core.'),
(10, 5, 2, 'Como uma MV não é uma máquina real, um sistema operacional nela executado fica automaticamente imune a vírus.');

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
(41, 'Model-View-Controller', 'LPR'),
(42, 'História', 'CTGR');

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
('CTGR', 'Conteúdo Geral'),
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
  `id` int(11) NOT NULL,
  `enunciado` text DEFAULT NULL,
  `materia` varchar(4) DEFAULT NULL,
  `conteudo` int(11) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `gabarito` int(11) DEFAULT NULL,
  `PONTUACAO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pergunta`
--

INSERT INTO `pergunta` (`id`, `enunciado`, `materia`, `conteudo`, `ano`, `gabarito`, `PONTUACAO`) VALUES
(1, 'Um analista foi contratado para desenvolver um sistema de pesquisa de DVDs em lojas virtuais. O sistema deverá solicitar ao usuário um título de DVD, que será usado para realizar a pesquisa nas bases de dados das lojas conveniadas. Ao detectar a disponibilidade do DVD solicitado, o sistema armazenará temporariamente os dados das lojas (nome, preço, data prevista para entrega do produto) e exibirá as informações ordenadas por preço. Após analisar as informações, o cliente poderá efetuar a compra. O contratante deverá testar algumas operações do sistema antes de ele ser finalizado. Há tempo suficiente para que o analista atenda a essa solicitação e efetue eventuais modificações exigidas pelo contratante. <br><br>Com relação a essa situação, julgue os itens a seguir quanto ao modelo de ciclo de vida.', 'ENSW', 19, 2008, 4, NULL),
(2, 'O conceito de máquina virtual (MV) foi usado na década de 70 do século passado no sistema operacional IBM System 370. Atualmente, centros de dados (datacenters) usam MVs para migrar tarefas entre servidores conectados em rede e, assim, equilibrar carga de processamento. Além disso, plataformas atuais de desenvolvimento de software empregam MVs (Java, .NET). Uma MV pode ser construída para emular um processador ou um computador completo. Um código desenvolvido para uma máquina real pode ser executado de forma transparente em uma MV. <br><br>Com relação a essas informações, assinale a opção correta.', 'ADRD', 2, 2008, 3, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `resposta`
--

CREATE TABLE `resposta` (
  `aluno` varchar(255) DEFAULT NULL,
  `pergunta` int(11) DEFAULT NULL,
  `alternativa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `Nome` varchar(50) NOT NULL,
  `Sobrenome` varchar(50) NOT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `foto` blob DEFAULT NULL,
  `pontuacao_maxima` int(11) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `adm` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `alternativa`
--
ALTER TABLE `alternativa`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `materia` (`materia`),
  ADD KEY `conteudo` (`conteudo`);

--
-- Índices de tabela `resposta`
--
ALTER TABLE `resposta`
  ADD KEY `aluno` (`aluno`),
  ADD KEY `pergunta` (`pergunta`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alternativa`
--
ALTER TABLE `alternativa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `conteudo`
--
ALTER TABLE `conteudo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de tabela `pergunta`
--
ALTER TABLE `pergunta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- Restrições para tabelas `resposta`
--
ALTER TABLE `resposta`
  ADD CONSTRAINT `resposta_ibfk_1` FOREIGN KEY (`aluno`) REFERENCES `usuario` (`email`),
  ADD CONSTRAINT `resposta_ibfk_2` FOREIGN KEY (`pergunta`) REFERENCES `pergunta` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

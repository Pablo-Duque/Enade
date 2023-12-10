-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10/12/2023 às 23:59
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
  `texto` text DEFAULT NULL
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
(10, 5, 2, 'Como uma MV não é uma máquina real, um sistema operacional nela executado fica automaticamente imune a vírus.'),
(11, 1, 3, 'Sobrecarga.'),
(12, 2, 3, 'Herança.'),
(13, 3, 3, 'Sobreposição.'),
(14, 4, 3, 'Abstração.'),
(15, 5, 3, 'Mensagem.'),
(21, 1, 4, 'I e II.'),
(22, 2, 4, 'I e III.'),
(23, 3, 4, 'II e III.'),
(24, 4, 4, 'II e IV.'),
(25, 5, 4, 'III e IV.'),
(26, 1, 5, 'O software deve ser operacionalizado no sistema Linux.'),
(27, 2, 5, 'O tempo de desenvolvimento não deve ultrapassar seis meses.'),
(28, 3, 5, 'O software deve emitir relatórios de compras a cada quinze dias.'),
(29, 4, 5, 'O tempo de resposta do sistema não deve ultrapassar 30 segundos.'),
(30, 5, 5, 'A base de dados deve ser protegida para acesso apenas de usuários autorizados.'),
(36, 1, 6, 'char alternar_estampa(char estampa, char *proxima) {<br> \r\n *proxima = *proxima == estampa ? \' \' : estampa;<br>\r\n return *proxima; <br>\r\n} <br>\r\nvoid criar_molde(char molde[][50], int c, int l, char estampa) { <br>\r\n char proxima = estampa; <br>\r\n for (int i = 0; i < l; i++) <br>\r\n for (int j = 0; j < c; j++) <br>\r\n molde[i][j] = alternar_estampa(estampa, &proxima); <br>\r\n}'),
(37, 2, 6, 'char alternar_estampa(char estampa, char proxima) { <br>\r\n proxima = proxima == estampa ? \' \' : estampa; <br>\r\n return proxima; <br>\r\n} <br>\r\nvoid criar_molde(char molde[][50], int c, int l, char estampa) { <br>\r\n char proxima = estampa; <br>\r\n for (int i = 0; i < l; i++) <br>\r\n for (int j = 0; j < c; j++) <br>\r\n molde[i][j] = alternar_estampa(estampa, proxima); <br>\r\n}'),
(38, 3, 6, 'char alternar_estampa(char estampa, char *proxima) { <br>\r\n return *proxima == estampa ? \' \' : estampa; <br>\r\n} <br>\r\nvoid criar_molde(char molde[][50], int c, int l, char estampa) { <br>\r\n char proxima = estampa; <br>\r\n for (int i = 0; i < l; i++) <br>\r\n for (int j = 0; j < c; j++) <br>\r\n molde[i][j] = alternar_estampa(estampa, &proxima); <br>\r\n} '),
(39, 4, 6, 'char alternar_estampa(char estampa, char *proxima) { <br>\r\n *proxima = *proxima == estampa ? \' \' : estampa; <br>\r\n return *proxima; <br>\r\n} <br>\r\nvoid criar_molde(char molde[][50], int c, int l, char estampa) { <br>\r\n char proxima = estampa; <br>\r\n for (int i = 0; i < l; i++) { <br>\r\n for (int j = 0; j < c; j++) <br>\r\n molde[i][j] = alternar_estampa(estampa, &proxima); <br>\r\n proxima = molde[i][0]; <br>\r\n } <br>\r\n}'),
(40, 5, 6, 'char alternar_estampa(char estampa, char proxima) { <br>\r\n proxima = proxima == estampa ? \' \' : estampa; <br>\r\n return proxima; <br>\r\n} <br>\r\nvoid criar_molde(char molde[][50], int c, int l, char estampa) {<br>\r\n char proxima = estampa; <br>\r\n for (int i = 0; i < l; i++) { <br>\r\n for (int j = 0; j < c; j++) <br>\r\n molde[i][j] = alternar_estampa(estampa, proxima); <br>\r\n proxima = molde[i][0]; <br>\r\n } <br>\r\n}\r\n'),
(41, 1, 7, 'II.'),
(42, 2, 7, 'I e III.'),
(43, 3, 7, 'I, II e IV.'),
(44, 4, 7, 'I, III e IV.'),
(45, 5, 7, 'II, III e IV.');

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
(1, 'Um analista foi contratado para desenvolver um sistema de pesquisa de DVDs em lojas virtuais. O sistema deverá solicitar ao usuário um título de DVD, que será usado para realizar a pesquisa nas bases de dados das lojas conveniadas. Ao detectar a disponibilidade do DVD solicitado, o sistema armazenará temporariamente os dados das lojas (nome, preço, data prevista para entrega do produto) e exibirá as informações ordenadas por preço. Após analisar as informações, o cliente poderá efetuar a compra. O contratante deverá testar algumas operações do sistema antes de ele ser finalizado. Há tempo suficiente para que o analista atenda a essa solicitação e efetue eventuais modificações exigidas pelo contratante. <br><br>Com relação a essa situação, julgue os itens a seguir quanto ao modelo de ciclo de vida.<br><br>I O entendimento do sistema como um todo e a execução seqüencial das fases sem retorno produzem um sistema que pode ser validado pelo contratante.<br><br>II A elaboração do protótipo pode ser utilizada para resolver dúvidas de comunicação, o que aumenta os riscos de inclusão de novas funcionalidades nãoprioritárias.<br><br>III A definição das restrições deve ser a segunda fase a ser realizada no desenvolvimento do projeto, correspondendo à etapa de engenharia.<br><br>IV Um processo iterativo permite que versões progressivas mais completas do sistema sejam construídas e avaliadas.', 'ENSW', 19, 2008, 4, NULL),
(2, 'O conceito de máquina virtual (MV) foi usado na década de 70 do século passado no sistema operacional IBM System 370. Atualmente, centros de dados (datacenters) usam MVs para migrar tarefas entre servidores conectados em rede e, assim, equilibrar carga de processamento. Além disso, plataformas atuais de desenvolvimento de software empregam MVs (Java, .NET). Uma MV pode ser construída para emular um processador ou um computador completo. Um código desenvolvido para uma máquina real pode ser executado de forma transparente em uma MV. <br><br>Com relação a essas informações, assinale a opção correta.', 'ADRD', 2, 2008, 3, NULL),
(3, 'Uma pizzaria fez uma ampliação de suas\r\ninstalações e o gerente aproveitou para melhorar o sistema\r\ninformatizado, que era limitado e não atendia a todas as\r\nfunções necessárias. O gerente, então, contratou uma\r\nempresa para ampliar o software. No desenvolvimento do\r\nnovo sistema, a empresa aproveitou partes do sistema\r\nantigo e estendeu os componentes de maneira a usar\r\ncódigo validado, acrescentando as novas funções\r\nsolicitadas.<br>Que conceito de orientação a objetos está descrito na\r\nsituação hipotética acima?', 'LPR', 37, 2008, 2, NULL),
(4, 'Um analista foi contratado para desenvolver um\r\nsistema de pesquisa de DVDs em lojas virtuais. O sistema\r\ndeverá solicitar ao usuário um título de DVD, que será\r\nusado para realizar a pesquisa nas bases de dados das\r\nlojas conveniadas. Ao detectar a disponibilidade do DVD\r\nsolicitado, o sistema armazenará temporariamente os\r\ndados das lojas (nome, preço, data prevista para entrega\r\ndo produto) e exibirá as informações ordenadas por preço.\r\nApós analisar as informações, o cliente poderá efetuar a\r\ncompra. O contratante deverá testar algumas operações do\r\nsistema antes de ele ser finalizado. Há tempo suficiente\r\npara que o analista atenda a essa solicitação e efetue\r\neventuais modificações exigidas pelo contratante.\r\n<br>\r\nCom relação a essa situação, julgue os itens a seguir\r\nquanto ao modelo de ciclo de vida.<br><br>I O entendimento do sistema como um todo e a execução\r\nseqüencial das fases sem retorno produzem um sistema\r\nque pode ser validado pelo contratante.\r\n<br><br>\r\nII A elaboração do protótipo pode ser utilizada para\r\nresolver dúvidas de comunicação, o que aumenta os\r\nriscos de inclusão de novas funcionalidades nãoprioritárias.\r\n<br><br>\r\nIII A definição das restrições deve ser a segunda fase a\r\nser realizada no desenvolvimento do projeto,\r\ncorrespondendo à etapa de engenharia.\r\n<br><br>\r\nIV Um processo iterativo permite que versões progressivas\r\nmais completas do sistema sejam construídas e\r\navaliadas.', 'ENSW', 19, 2008, 4, NULL),
(5, 'A etapa de definição de requisitos é voltada para estabelecer quais as funções são requeridas pelo sistema e as restrições sobre a operação e o desenvolvimento do software. Os requisitos de software podem ser classificados como requisitos funcionais e não funcionais.\r\nSOMMERVILLE, I. Engenharia de Software, 10.\r\ned. São Paulo: Pearson Education, 2019 (adaptado).\r\n<br><br>\r\nConsiderando as informações do texto, assinale a alternativa em que o item é um requisito funcional.', 'ENSW', 20, 2021, 3, NULL),
(6, 'Uma fábrica adquiriu máquinas de costura industrial para a produção de jogos de toalhas de mesa e guardanapos de tecido com estampas quadriculadas. Cada quadrículo tem tamanho padrão de 5 cm X 5 cm. Para a configuração da costura, é preciso um programa de computador para criar um molde em que sejam informadas as quantidades de quadrículos por comprimento e por largura, além do desenho da estampa a ser costurada. Por exemplo, para um guardanapo de tecido que tenha 30 cm X 30 cm, com uma estampa representada pelo caractere “#”, o seguinte molde precisa ser criado:<br><br>\r\n\r\nComo uma toalha pode ter, no máximo, 250 cm de comprimento e 200 cm de largura, o programador declarou uma matriz char molde[40][50] para ser possível representar moldes cujas medidas compreendam esses limites. Ele também implementou, entre outras, as seguintes funções:<br><br>- criar_molde, para a qual os seguintes parâmetros são esperados, nessa ordem: uma referência à matriz molde, o comprimento e a largura do tecido (em quantidades de quadrículos) e o caractere que representa a estampa;\r\n<br>- alternar_estampa, que tem a tarefa de controlar a disposição alternada das estampas no molde.\r\n<br><br>\r\nConsiderando o cenário descrito, que alternativa a seguir apresenta a implementação correta das funções criar_molde e alternar_estampa?', 'LPR', 36, 2021, 3, NULL),
(7, 'Uma fábrica de software está realizando entrevistas para contração de um profissional que esteja alinhado às exigências do atual mundo corporativo. Sabe-se que processos ágeis de desenvolvimento têm se tornado essenciais para empresas que desejam realizar entregas rápidas e frequentes de produtos e/ou serviços de software.\r\n\r\nEssa empresa possui uma equipe de desenvolvimento que faz uso de processos ágeis como o Scrum e eXtreme Programming (XP) e o acompanhamento por meio do quadro Kanban. Sendo assim, um conjunto de características deve ser verificado durante a entrevista para garantir que o candidato a ser contratado possua conhecimentos necessários para atuar juntamente a esta equipe.\r\n<br><br>\r\nCom base no texto e nos processos ágeis de desenvolvimento de software, avalie as afirmações a seguir.<br><br>I. Métodos Ágeis são baseados em ciclos iterativo e incremental que se concentram no desenvolvimento rápido e na flexibilidade às mudanças, com a participação do cliente no processo de software.\r\n\r\n<br><br>II. Uma forte característica da XP é a garantia da qualidade do código produzido e, para isso, os desenvolvedores produzem testes automatizados antes mesmo de codificar uma funcionalidade.\r\n\r\n<br><br>III. O planejamento no Scrum é baseado na elaboração dos itens do product backlog, que é uma lista de funcionalidades desejadas pelo cliente, sendo o Scrum Master o responsável por gerenciá-lo.\r\n\r\n<br><br>IV. O quadro Kanban permite monitorar a evolução das tarefas necessárias durante o processo ágil de desenvolvimento de software, possibilitando um acompanhamento de forma visual das atividades em construção.\r\n\r\nÉ correto apenas o que se afirma em: ', 'ENSW', 19, 2021, 5, NULL);

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
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`Nome`, `Sobrenome`, `senha`, `foto`, `pontuacao_maxima`, `email`, `adm`) VALUES
('Teste', 'Teste', '$2y$10$6YSsLOHYsmsKucHXdnWKWO.rIQrQpnf0PqnX5uDPTfCHjAdipHOJy', NULL, 0, 'Teste@gmail.com', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de tabela `conteudo`
--
ALTER TABLE `conteudo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de tabela `pergunta`
--
ALTER TABLE `pergunta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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

-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27-Fev-2020 às 13:06
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intranet`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `anuncio`
--

CREATE TABLE `anuncio` (
  `id_anuncio` int(11) NOT NULL,
  `titulo_anuncio` varchar(100) COLLATE utf16_bin NOT NULL,
  `descricao_anuncio` text COLLATE utf16_bin NOT NULL,
  `duracao_dia` int(11) NOT NULL,
  `id_departamento` int(11) NOT NULL,
  `estado_anuncio` int(11) DEFAULT '1',
  `data_criacao` varchar(30) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Extraindo dados da tabela `anuncio`
--

INSERT INTO `anuncio` (`id_anuncio`, `titulo_anuncio`, `descricao_anuncio`, `duracao_dia`, `id_departamento`, `estado_anuncio`, `data_criacao`) VALUES
(1, 'Reunião Administrativa', 'Sala de Reuniões as 17 horas, amanhã quinta (15/09)', 15, 1, 1, '22/02/2020'),
(2, 'Novo colega de serviço', 'Na area de secretaria, chama-se Alberto', 10, 5, 1, '22/02/2020');

-- --------------------------------------------------------

--
-- Estrutura da tabela `departamento`
--

CREATE TABLE `departamento` (
  `id_departamento` int(11) NOT NULL,
  `descricao_departamento` varchar(100) COLLATE utf16_bin NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Extraindo dados da tabela `departamento`
--

INSERT INTO `departamento` (`id_departamento`, `descricao_departamento`, `estado`) VALUES
(1, 'Secretaria Acádemica', 0),
(2, 'Direção', 1),
(3, 'Tecnologias de Informação', 0),
(4, 'Professores', 0),
(5, 'Todos', 0),
(6, 'Alunos', 1),
(7, 'Contabilidade', 1),
(8, 'Juridico', 0),
(9, 'Recursos Humanos', 0),
(10, 'Associação de estudantes', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `evento`
--

CREATE TABLE `evento` (
  `id_evento` int(11) NOT NULL,
  `usuario_criador` int(11) DEFAULT NULL,
  `titulo` varchar(100) COLLATE utf16_bin NOT NULL,
  `local` varchar(100) COLLATE utf16_bin NOT NULL,
  `descricao_evento` text COLLATE utf16_bin NOT NULL,
  `foto` varchar(100) COLLATE utf16_bin DEFAULT NULL,
  `id_responsavel` int(11) NOT NULL,
  `tempo_inicio` varchar(30) COLLATE utf16_bin NOT NULL,
  `data_inicio` varchar(50) COLLATE utf16_bin NOT NULL,
  `tempo_fim` varchar(30) COLLATE utf16_bin NOT NULL,
  `data_fim` varchar(50) COLLATE utf16_bin NOT NULL,
  `estado` int(11) NOT NULL,
  `data_criacao` varchar(30) COLLATE utf16_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Extraindo dados da tabela `evento`
--

INSERT INTO `evento` (`id_evento`, `usuario_criador`, `titulo`, `local`, `descricao_evento`, `foto`, `id_responsavel`, `tempo_inicio`, `data_inicio`, `tempo_fim`, `data_fim`, `estado`, `data_criacao`) VALUES
(1, NULL, 'Jornadas Cientificas', 'ISUTIC', 'Evento anula', '', 0, '11:00', '2020-02-04', '15:00', '2020-02-14', 1, '03/0220/20'),
(2, 1, 'ICPC - Concurso Nacional- ISUTIC', 'ISUTIC', 'aaa', NULL, 0, '12:11', '2020-02-04', '11:11', '2020-02-05', 1, '15/02/2020'),
(3, 1, 'ICPC local', 'ISUTIC', 'aaa', NULL, 0, '11:11', '2020-02-04', '11:11', '2020-02-05', 1, '15/02/2020');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem`
--

CREATE TABLE `mensagem` (
  `id_mensagem` int(11) NOT NULL,
  `id_emissor` int(11) NOT NULL,
  `texto` text COLLATE utf16_bin NOT NULL,
  `imagem` varchar(100) COLLATE utf16_bin DEFAULT NULL,
  `tempo` varchar(30) COLLATE utf16_bin NOT NULL,
  `data_criacao` varchar(50) COLLATE utf16_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem_usuario`
--

CREATE TABLE `mensagem_usuario` (
  `id_mensagem_usuario` int(11) NOT NULL,
  `id_mensagem` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_pessoa` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `nivel_academico`
--

CREATE TABLE `nivel_academico` (
  `id_nivel_academico` int(11) NOT NULL,
  `descricao_nivel_academico` varchar(100) COLLATE utf16_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Extraindo dados da tabela `nivel_academico`
--

INSERT INTO `nivel_academico` (`id_nivel_academico`, `descricao_nivel_academico`) VALUES
(1, 'Técnico Superior'),
(2, 'Técnico Médio '),
(3, 'Mestre'),
(4, 'Doutor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `nivel_usuario`
--

CREATE TABLE `nivel_usuario` (
  `id_nivel_usuario` int(11) NOT NULL,
  `descricao_nivel_usuario` varchar(100) COLLATE utf16_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Extraindo dados da tabela `nivel_usuario`
--

INSERT INTO `nivel_usuario` (`id_nivel_usuario`, `descricao_nivel_usuario`) VALUES
(1, 'Administrador'),
(2, 'Funcionario'),
(3, 'Professor'),
(4, 'Administrativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `id_pessoa` int(11) NOT NULL,
  `id_nivel_academico` int(11) DEFAULT NULL,
  `id_sala` int(11) NOT NULL,
  `nome_pessoa` varchar(100) COLLATE utf16_bin NOT NULL,
  `sobrenome` varchar(100) COLLATE utf16_bin NOT NULL,
  `bi` varchar(30) COLLATE utf16_bin NOT NULL,
  `email` varchar(100) COLLATE utf16_bin NOT NULL,
  `telefone` varchar(30) COLLATE utf16_bin DEFAULT NULL,
  `estado` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id_pessoa`, `id_nivel_academico`, `id_sala`, `nome_pessoa`, `sobrenome`, `bi`, `email`, `telefone`, `estado`) VALUES
(1, 1, 1, 'Paula Makiadi', '', '00000CC048', 'osvaldozamba@gmail.com', '993320642', 1),
(2, 1, 1, 'Osvaldo Calombe', '', '00000CB048', 'osvaldozamba@gmail.com', '993320642', 1),
(3, 2, 1, 'Finilson Zua', '', '00000LA0480', 'stelviocardoso1@gmail.com', '993320642', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `publicacao`
--

CREATE TABLE `publicacao` (
  `id_publicacao` int(11) NOT NULL,
  `id_site` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_pessoa` int(11) NOT NULL,
  `nome_publicacao` varchar(100) COLLATE utf16_bin DEFAULT NULL,
  `texto_publicacao` text COLLATE utf16_bin,
  `arquivo_publicacao` varchar(100) COLLATE utf16_bin DEFAULT NULL,
  `tempo` varchar(30) COLLATE utf16_bin NOT NULL,
  `data_criacao` varchar(50) COLLATE utf16_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sala`
--

CREATE TABLE `sala` (
  `id_sala` int(11) NOT NULL,
  `numero_sala` int(11) NOT NULL,
  `descricao_sala` varchar(100) COLLATE utf16_bin NOT NULL,
  `telefone_sala` varchar(30) COLLATE utf16_bin NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Extraindo dados da tabela `sala`
--

INSERT INTO `sala` (`id_sala`, `numero_sala`, `descricao_sala`, `telefone_sala`, `estado`) VALUES
(1, 213, 'Núcleo de Desenvolvimento de Informática', '991647109', 0),
(2, 104, 'Sala de Aulas 104', '999999999', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `site`
--

CREATE TABLE `site` (
  `id_site` int(11) NOT NULL,
  `id_departamento` int(11) DEFAULT NULL,
  `nome_site` varchar(100) COLLATE utf16_bin DEFAULT NULL,
  `criado_por` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `id_departamento` int(11) DEFAULT NULL,
  `id_nivel_usuario` int(11) DEFAULT NULL,
  `id_pessoa` int(11) NOT NULL,
  `nome_usuario` varchar(100) COLLATE utf16_bin NOT NULL,
  `senha` varchar(100) COLLATE utf16_bin NOT NULL,
  `estado_usuario` int(11) NOT NULL,
  `data_criacao` varchar(30) COLLATE utf16_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `id_departamento`, `id_nivel_usuario`, `id_pessoa`, `nome_usuario`, `senha`, `estado_usuario`, `data_criacao`) VALUES
(1, 3, 1, 1, 'admin', 'admin', 1, '03/0220/20'),
(2, 1, 4, 1, 'paula_admin', 'paula', 1, '16/0220/20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anuncio`
--
ALTER TABLE `anuncio`
  ADD PRIMARY KEY (`id_anuncio`);

--
-- Indexes for table `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id_departamento`);

--
-- Indexes for table `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id_evento`),
  ADD KEY `Ref611` (`usuario_criador`);

--
-- Indexes for table `mensagem`
--
ALTER TABLE `mensagem`
  ADD PRIMARY KEY (`id_mensagem`);

--
-- Indexes for table `mensagem_usuario`
--
ALTER TABLE `mensagem_usuario`
  ADD PRIMARY KEY (`id_mensagem_usuario`,`id_mensagem`,`id_usuario`,`id_pessoa`),
  ADD KEY `Ref37` (`id_mensagem`),
  ADD KEY `Ref68` (`id_pessoa`,`id_usuario`),
  ADD KEY `Refusuario8` (`id_usuario`,`id_pessoa`);

--
-- Indexes for table `nivel_academico`
--
ALTER TABLE `nivel_academico`
  ADD PRIMARY KEY (`id_nivel_academico`);

--
-- Indexes for table `nivel_usuario`
--
ALTER TABLE `nivel_usuario`
  ADD PRIMARY KEY (`id_nivel_usuario`);

--
-- Indexes for table `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id_pessoa`),
  ADD UNIQUE KEY `bi` (`bi`),
  ADD KEY `Ref1515` (`id_nivel_academico`);

--
-- Indexes for table `publicacao`
--
ALTER TABLE `publicacao`
  ADD PRIMARY KEY (`id_publicacao`,`id_site`,`id_usuario`,`id_pessoa`),
  ADD KEY `Ref52` (`id_site`),
  ADD KEY `Ref618` (`id_pessoa`,`id_usuario`),
  ADD KEY `Refusuario18` (`id_usuario`,`id_pessoa`);

--
-- Indexes for table `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`id_sala`),
  ADD UNIQUE KEY `numero_sala` (`numero_sala`);

--
-- Indexes for table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`id_site`),
  ADD KEY `Ref1220` (`id_departamento`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`,`id_pessoa`),
  ADD KEY `Ref1212` (`id_departamento`),
  ADD KEY `Ref1313` (`id_nivel_usuario`),
  ADD KEY `Ref1414` (`id_pessoa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anuncio`
--
ALTER TABLE `anuncio`
  MODIFY `id_anuncio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `evento`
--
ALTER TABLE `evento`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nivel_academico`
--
ALTER TABLE `nivel_academico`
  MODIFY `id_nivel_academico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nivel_usuario`
--
ALTER TABLE `nivel_usuario`
  MODIFY `id_nivel_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id_pessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sala`
--
ALTER TABLE `sala`
  MODIFY `id_sala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

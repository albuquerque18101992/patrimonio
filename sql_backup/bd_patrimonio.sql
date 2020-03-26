-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Mar-2020 às 03:04
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_patrimonio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastrar_ativos`
--

CREATE TABLE `cadastrar_ativos` (
  `id` int(11) NOT NULL,
  `localizacao` varchar(50) DEFAULT NULL,
  `fabricante` varchar(50) NOT NULL,
  `contrato` varchar(50) NOT NULL,
  `numero_serie_cpu` int(50) NOT NULL,
  `numero_serie_monitor` int(50) NOT NULL,
  `numero_serie_mouse` int(50) NOT NULL,
  `numero_serie_teclado` int(50) NOT NULL,
  `numero_ti_cpu` int(50) NOT NULL,
  `numero_ti_monitor` int(50) NOT NULL,
  `descricoes` varchar(280) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_estoque`
--

CREATE TABLE `tb_estoque` (
  `id_produto` int(50) NOT NULL,
  `nome_produto` text NOT NULL,
  `codigo_mv` int(50) NOT NULL,
  `guardados` int(50) NOT NULL,
  `valor_material` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_impressoras`
--

CREATE TABLE `tb_impressoras` (
  `id_impressora` int(50) NOT NULL,
  `localizacao` varchar(50) NOT NULL,
  `fabricante` varchar(50) NOT NULL,
  `contrato` varchar(50) NOT NULL,
  `serial_equipamento` varchar(50) NOT NULL,
  `numero_serie_impressora` int(50) NOT NULL,
  `modelo` varchar(9) NOT NULL,
  `descricoes` varchar(230) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_nivel_acesso`
--

CREATE TABLE `tb_nivel_acesso` (
  `id_acesso` int(10) NOT NULL,
  `tipo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_nivel_acesso`
--

INSERT INTO `tb_nivel_acesso` (`id_acesso`, `tipo`) VALUES
(1, 'administrador'),
(2, 'unidade'),
(3, 'simpress'),
(4, 'tecnico');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_unidades`
--

CREATE TABLE `tb_unidades` (
  `id_unidade` int(11) NOT NULL,
  `nome_da_unidade` varchar(55) NOT NULL,
  `nome_gerente` varchar(55) NOT NULL,
  `cnes` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_unidades`
--

INSERT INTO `tb_unidades` (`id_unidade`, `nome_da_unidade`, `nome_gerente`, `cnes`) VALUES
(1, ' OS - COORDENAÇÃO', 'Carlos Uehara', 1),
(2, 'AD - ASSISTENCIA DOMICILIAR', 'Nívio', 6703607),
(3, 'AMA ESPECIALIDADES VILA CONSTANCIA', 'Zaira', 6415415),
(4, 'AMA/UBS INT. JD. MIRIAM I', '', 2787601),
(5, 'AMA/UBS INT. PARQUE DOROTEIA', '', 2788292),
(6, 'AMA/UBS INT. VILA IMPERIO', '', 5731143),
(7, 'AMA/UBS INT. VILA JOANIZA', 'Arlete', 2751828),
(8, 'AMA/UBS INTEGRADA V. MISSIONARIA', 'Janice', 2789078),
(9, 'APD SANTO AMARO', '', 2),
(10, 'CAPS ADULTO II CIDADE ADEMAR', '', 5731194),
(11, 'CAPS INFANTO/JUVENIL CIDADE ADEMAR', '', 6646581),
(12, 'CEO II / LRPD DR. HUMBERTO NASTARI', '', 2786621),
(13, 'CERIII - CENTRO ESP EM REABILITACAO', '', 7706332),
(14, 'PAI CIDADE ADEMAR', '', 3),
(15, 'REDE HORA CERTA CIDADE ADEMAR', '', 2751925),
(16, 'SRT CIDADE ADEMAR I', '', 4),
(17, 'SRT CIDADE ADEMAR II', '', 5),
(18, 'SRT SANTO AMARO', '', 6),
(19, 'SRT SANTO AMARO II', '', 7),
(20, 'SRT SANTO AMARO III', '', 8),
(21, 'UBS CAMPO GRANDE', 'Maria de Lourdes', 3452689),
(22, 'UBS INT. JARDIM MIRIAM II', 'Josiane', 2787911),
(23, 'UBS JD. UMUARAMA', 'Miriam', 2787911),
(24, 'UBS VILA ARRIETE', 'Heloisa Handa', 2788748),
(25, 'UBS VILA CONSTANCIA', 'Paulo', 2788799),
(26, 'UBS/ESF CIDADE JULIA', 'Ana', 2786893),
(27, 'UBS/ESF JD. APURA', 'Jussara', 2787180),
(28, 'UBS/ESF JD. NITEROI', '', 2787652),
(29, 'UBS/ESF JD. NOVO PANTANAL', '', 7357761),
(30, 'UBS/ESF JD. SAO CARLOS', '', 3074544),
(31, 'UBS/ESF JARDIM SELMA - CIDADE ADEMAR', 'Laura', 10),
(32, 'UBS/ESF LARANJEIRAS', 'Vladimir', 2788039),
(33, 'UBS/ESF MAR PAULISTA', '', 2766000),
(34, 'UBS/ESF MATA VIRGEM', '', 2788098),
(35, 'UBS/ESF SAO JORGE', 'Leandro', 3996115),
(36, 'UBS/ESF VILA APARECIDA', 'Juliana', 2788705),
(37, 'UBS/ESF VILA GUACURI', 'Andrezza Carpentieri', 2788934),
(38, 'UBS/ESF VILA IMPERIO II', 'Marcia', 2788977),
(39, 'UPA PEDREIRA', 'Roberval', 6133460),
(40, 'UPA SANTO AMARO', '', 2752107),
(41, 'URSI CIDADE ADEMAR', '', 5599881),
(42, 'UBS SANTO AMARO', 'Jacqueline Yuri Mitsuyuki', 2788640),
(43, 'UBS JARDIM AEROPORTO', 'Liz Carvalho', 2787156),
(44, 'UBS CHÁCARA SANTO ANTÔNIO', 'Eliete Almeida', 2765993);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id_usuario` int(11) NOT NULL,
  `pessoa` varchar(50) NOT NULL,
  `unidade` varchar(50) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `login_usuario` varchar(50) NOT NULL,
  `cracha` int(50) NOT NULL,
  `documento` varchar(50) NOT NULL,
  `sexo` tinyint(11) DEFAULT NULL,
  `nivel_acesso` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id_usuario`, `pessoa`, `unidade`, `senha`, `login_usuario`, `cracha`, `documento`, `sexo`, `nivel_acesso`) VALUES
(1, 'Paulo Henrique Araujo Ferreira de Albuquerque', 'OS - COORDENAÇÃO', '37d34385b4cc60ab7c18f0f3c2edc5b5', 'paulo.albuquerque', 8210, '408.754.818-09', 1, 'administrador');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastrar_ativos`
--
ALTER TABLE `cadastrar_ativos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_estoque`
--
ALTER TABLE `tb_estoque`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices para tabela `tb_impressoras`
--
ALTER TABLE `tb_impressoras`
  ADD PRIMARY KEY (`id_impressora`);

--
-- Índices para tabela `tb_nivel_acesso`
--
ALTER TABLE `tb_nivel_acesso`
  ADD PRIMARY KEY (`id_acesso`);

--
-- Índices para tabela `tb_unidades`
--
ALTER TABLE `tb_unidades`
  ADD PRIMARY KEY (`id_unidade`);

--
-- Índices para tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastrar_ativos`
--
ALTER TABLE `cadastrar_ativos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_estoque`
--
ALTER TABLE `tb_estoque`
  MODIFY `id_produto` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_impressoras`
--
ALTER TABLE `tb_impressoras`
  MODIFY `id_impressora` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_nivel_acesso`
--
ALTER TABLE `tb_nivel_acesso`
  MODIFY `id_acesso` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_unidades`
--
ALTER TABLE `tb_unidades`
  MODIFY `id_unidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Mar-2020 às 03:18
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

--
-- Extraindo dados da tabela `cadastrar_ativos`
--

INSERT INTO `cadastrar_ativos` (`id`, `localizacao`, `fabricante`, `contrato`, `numero_serie_cpu`, `numero_serie_monitor`, `numero_serie_mouse`, `numero_serie_teclado`, `numero_ti_cpu`, `numero_ti_monitor`, `descricoes`) VALUES
(5, 'data center', 'positivo', 'patrimonio', 65, 1651, 65165, 9, 9, 9, ''),
(6, 'suvis', 'positivo', 'serviços epecificos', 85, 85, 85, 85, 85, 85, '85'),
(7, 'intalacao', 'dell', 'alugada', 32, 32, 32, 32, 32, 32, '32');

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

--
-- Extraindo dados da tabela `tb_estoque`
--

INSERT INTO `tb_estoque` (`id_produto`, `nome_produto`, `codigo_mv`, `guardados`, `valor_material`) VALUES
(1, 'Telefones', 582, 55, 0),
(2, 'Teclados USB', 789, 0, 0),
(3, 'Mouses', 955, 858, 0),
(4, 'Cabo de rede', 98, 1, 50),
(5, 'Hd externo', 2541, 10, 0);

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
(1, 'COORDENAÇÃO', 'Carlos', 1);

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
(1, 'Paulo Albuquerque', 'COORDENAÇÃO', 'e10adc3949ba59abbe56e057f20f883e', 'paulo.albuquerque', 8210, '408.754.818-09', 1, 'administrador'),
(2, 'Juliane Albuquerque', 'COORDENAÇÃO', 'e10adc3949ba59abbe56e057f20f883e', 'juliane.albuqeurque', 8888, '161.158.155-61', 2, 'unidade'),
(3, 'Carlos', 'COORDENAÇÃO', 'a76b42803663940982a0a45f382e3dcb', 'carlo.chefe', 95615, '961.651.561-56', 1, 'tecnico');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tb_estoque`
--
ALTER TABLE `tb_estoque`
  MODIFY `id_produto` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id_unidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

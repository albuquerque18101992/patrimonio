-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Mar-2020 às 23:51
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
  `id_equipamento` int(11) NOT NULL,
  `localizacao` varchar(50) DEFAULT NULL,
  `fabricante` varchar(50) NOT NULL,
  `contrato` varchar(50) NOT NULL,
  `numero_serie_cpu` int(50) NOT NULL,
  `numero_serie_monitor` int(50) NOT NULL,
  `numero_serie_mouse` int(50) NOT NULL,
  `numero_serie_teclado` int(50) NOT NULL,
  `numero_ti_cpu` int(50) NOT NULL,
  `numero_ti_monitor` int(50) NOT NULL,
  `descricoes` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastrar_ativos`
--

INSERT INTO `cadastrar_ativos` (`id_equipamento`, `localizacao`, `fabricante`, `contrato`, `numero_serie_cpu`, `numero_serie_monitor`, `numero_serie_mouse`, `numero_serie_teclado`, `numero_ti_cpu`, `numero_ti_monitor`, `descricoes`) VALUES
(1, 'Administração', 'Positivo', 'Patrimônio', 1, 1, 1, 1, 1, 1, '1'),
(2, 'Consultório Médico', 'Dell', 'Alugada', 2, 2, 2, 2, 2, 2, '2'),
(3, 'Consultório Médico', 'Dell', 'Patrimônio', 3, 3, 3, 3, 3, 3, '3'),
(4, 'Consultório Odontologico', 'Positivo', 'Alugada', 4, 4, 4, 4, 4, 4, '4'),
(5, 'Data Center', 'Dell', 'Alugada', 5, 5, 5, 5, 5, 5, '5'),
(6, 'Farmácia', 'Positivo', 'Patrimônio', 6, 6, 6, 6, 6, 6, '6');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_estoque`
--

CREATE TABLE `tb_estoque` (
  `id_produto` int(50) NOT NULL,
  `nome_produto` text NOT NULL,
  `codigo_mv` int(50) NOT NULL,
  `guardados` int(50) NOT NULL,
  `retirados` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_estoque`
--

INSERT INTO `tb_estoque` (`id_produto`, `nome_produto`, `codigo_mv`, `guardados`, `retirados`) VALUES
(27, 'hub 8 portas', 852, 50, 0),
(28, 'mouses ubs', 784, 100, 0),
(29, 'caixa de rj 45 com 500 unidades', 981, 1, 0),
(31, 'aparelhos telefonicos ', 55699, 150, 0);

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
  `descricoes` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_impressoras`
--

INSERT INTO `tb_impressoras` (`id_impressora`, `localizacao`, `fabricante`, `contrato`, `serial_equipamento`, `numero_serie_impressora`, `descricoes`) VALUES
(1, 'Outros', 'Samsung', 'Outros', 'SRG13132ERFG1ER6G03E365RGERGE65R1G65ERGE00UKJIU8K', 1234, 'IMPRESSORA NA NOVA SALA DE TRATAMENTO DE CORONAVIRUS .'),
(2, 'Sinais Vitais', 'HP', 'Patrimônio', '65165HR56561S165FEW5ETHTYJM!¨&$#', 54578993, 'TESTEEEEE'),
(3, 'Sala de Demanda', 'Samsung', 'Serviços específicos', 'ergwer1g56165e1r65g1561235654234651gsdgerg', 5151, 'teste novamente .'),
(4, 'Sala de Coleta', 'HP', 'Patrimônio', 'advfg651ew5gf61wer1gf60ewr30g1', 6556656, 'mais um teste de testando . kkk'),
(6, 'Outros', 'Outros', 'Alugada', 'OOOAII771884IKJDN', 9875, 'Impressora Lexmark ');

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
(1, 'COORDENAÇÃO', 'Carlos Uehara', 1),
(9, 'UBS/ESF JARDIM SELMA - CIDADE ADEMAR', 'Mônica', 10),
(10, 'UPA SANTO AMARO', 'Patrícia', 2752107),
(11, 'UBS JD. UMUARAMA', 'Miriam', 2787911),
(12, 'AMA/UBS INT. VILA JOANIZA', 'Arlete', 2751828),
(13, 'AD - ASSISTENCIA DOMICILIAR', 'Nivio', 6703607);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id_usuario` int(11) NOT NULL,
  `pessoa` varchar(50) NOT NULL,
  `unidade` varchar(50) NOT NULL,
  `codigo` varchar(32) NOT NULL,
  `criar` varchar(50) NOT NULL,
  `cracha` int(50) NOT NULL,
  `documento` varchar(50) NOT NULL,
  `sexo` tinyint(11) DEFAULT NULL,
  `nivel_acesso` tinyint(11) NOT NULL,
  `data_cadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastrar_ativos`
--
ALTER TABLE `cadastrar_ativos`
  ADD PRIMARY KEY (`id_equipamento`);

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
  MODIFY `id_equipamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT de tabela `tb_estoque`
--
ALTER TABLE `tb_estoque`
  MODIFY `id_produto` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `tb_impressoras`
--
ALTER TABLE `tb_impressoras`
  MODIFY `id_impressora` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tb_unidades`
--
ALTER TABLE `tb_unidades`
  MODIFY `id_unidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

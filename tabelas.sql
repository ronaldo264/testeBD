--
-- Estrutura da tabela `endereco`
--

CREATE TABLE IF NOT EXISTS `endereco` (
  `id_end` int(4) NOT NULL PRIMARY KEY auto_increment,
  `cidade` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `numero` int(4) NOT NULL,
  `cep` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Estrutura da tabela `trabalho`
--

CREATE TABLE IF NOT EXISTS `trabalho` (
  `id_trab` int(8) NOT NULL PRIMARY KEY auto_increment,
  `nome_trab` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;


--
-- Estrutura da tabela `empresa`
--
CREATE TABLE IF NOT EXISTS `empresa` (
  `id_emp` int(8) NOT NULL PRIMARY KEY auto_increment,
  `id_end_emp` int(4) NOT NULL,
  `id_trab_emp` int(8) NOT NULL,
  `nome_emp` varchar(50) NOT NULL,
   FOREIGN KEY (id_end_emp)REFERENCES endereco(id_end),
   FOREIGN KEY (id_trab_emp)REFERENCES trabalho(id_trab)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;


--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE IF NOT EXISTS `pessoa` (
  `id_pessoa` int(8) NOT NULL PRIMARY KEY auto_increment,
  `id_end_pessoa` int(4) NOT NULL,
  `id_emp_pessoa` int(8) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `nasc` date NOT NULL,
  `pis` varchar(12) NOT NULL,
   FOREIGN KEY (id_end_pessoa)REFERENCES endereco(id_end),
   FOREIGN KEY (id_emp_pessoa)REFERENCES empresa(id_emp)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;


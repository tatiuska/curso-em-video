-- Criando o Banco de dados com especificações sobre o charset
CREATE DATABASE cadastro
DEFAULT CHARACTER SET utf8mb4
DEFAULT COLLATE uft8mb4_900_ai_ci;

-- Criando a tabela pessoas com constraints
CREATE TABLE `pessoas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `nascimento` date DEFAULT NULL,
  `sexo` enum('M','F') DEFAULT NULL,
  `peso` decimal(5,2) DEFAULT NULL,
  `altura` decimal(3,2) DEFAULT NULL,
  `nacionalidade` varchar(20) DEFAULT 'Brasil',
  PRIMARY KEY (`id`)
) DEFAULT CHARSET =utf8mb4;

-- Inserindo dados 
INSERT INTO `pessoas`(`nome`, `nascimento`, `sexo`, `peso`, `altura`, `nacionalidade`)
VALUES('Godofredo', '1984-01-02', 'M', '78.5', '1.83', 'Brasil');

SELECT * FROM `pessoas`; -- Comando que mostra a tabela com os dados inseridos.

INSERT INTO `pessoas`(`nome`, `nascimento`, `sexo`, `peso`, `altura`, `nacionalidade`)
VALUES('Maria', '1999-12-30', 'F', '55.2', '1.65', 'Portugal');

SELECT * FROM `pessoas`;

-- Usando DEFAULT para ter o id incluído nas colunas da tabela. Como é um valor que se auto-incrementa, não é obrigatório mencioná-lo na entrada de dados, mas se quiser, pode.
INSERT INTO `pessoas`(`id`, `nome`, `nascimento`, `sexo`, `peso`, `altura`, `nacionalidade`)
VALUES(DEFAULT, 'Creuza', '1920-07-23', 'F', '50.3', '1.62', DEFAULT);

SELECT * FROM `pessoas`;
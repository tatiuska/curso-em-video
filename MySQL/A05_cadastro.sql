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

-- Usando DEFAULT para ter o id incluído nas colunas da tabela. Como é um valor que se auto-incrementa, não é obrigatório mencioná-lo na entrada de dados, mas se quiser, pode.
INSERT INTO `pessoas`(`id`, `nome`, `nascimento`, `sexo`, `peso`, `altura`, `nacionalidade`)
VALUES(DEFAULT, 'Creuza', '1920-07-23', 'F', '50.3', '1.62', DEFAULT);

-- Quando os dados são inseridos na mesma ordem dos campos da tabela, não é preciso citá-los no início do comando.
INSERT INTO `pessoas` VALUES (DEFAULT, 'Adalgiza', '1930-11-02', 'F', '63.4', '1.76', 'Irlanda');

-- Usando o comando INSERT INTO para inserir vários dados no mesmo comando.
INSERT INTO `pessoas` VALUES 
(DEFAULT, 'Ana', '1975-12-18', 'F', '54.1', '1.55', 'EUA'),
(DEFAULT, 'Pedro', '2000-03-15', 'M', '76.8', '1.85', DEFAULT),
(DEFAULT, 'Roberta', '1998-04-09', 'F', '60.8', '1.74', 'Portugal');
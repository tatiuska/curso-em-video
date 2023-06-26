-- Usando o comando Alter Table para adicionar uma nova coluna ao Banco de dados.
ALTER TABLE `pessoas`
ADD COLUMN `profissao` VARCHAR(10);

DESCRIBE `pessoas`; -- Comando que mostra os campos da tabela e seus tipos.

-- Para deletar uma coluna, usa-se o comando Drop Table.
ALTER TABLE `pessoas` DROP COLUMN `profissao`;

-- Para adicionar uma coluna em um local específico da tabela, usa-se o After e o nome da coluna que ficará à sua esquerda:
ALTER TABLE `pessoas` ADD COLUMN `profissao` VARCHAR(10) AFTER `nome`;

-- Caso se queira colocar a coluna nova no início da tabela, usa-se o comando FIRST:
ALTER TABLE `pessoas` ADD COLUMN `codigo` int FIRST;

-- Para mudar a estrutura de definição de uma coluna:
ALTER TABLE `pessoas` MODIFY COLUMN `profissao` VARCHAR(20) NOT NULL DEFAULT ''; -- Nesse caso, a coluna profissão tinha valores nulos, e Guanabara orientou a usar o comando Default e aspas simples para não dar erro. Mas no Workbench o código rodou, mas com um Warning.
-- Adicionando dados no banco de dados cursos
SELECT * FROM `cursos`;

INSERT INTO cursos VALUES
('1', 'HTML4', 'Curso de HTML5', '40', '37', '2014'),
('2', 'Algoritmos', 'Lógica de Programação', '20', '15', '2014'), 
('3', 'Phtoshop', 'Dicas de Photoshop CC', '10', '8', '2014'), 
('4', 'PGP', 'Curso de PHP para inciantes', '40', '20', '2010'), 
('5', 'Jarva', 'Introdução à Linguagem Java', '10', '29', '2000'), 
('6', 'MySQL', 'Bancos de Dados MySQL', '30', '15', '2016'), 
('7', 'Word', 'Curso completo de Word', '40', '30', '2016'), 
('8', 'Sapateado', 'Danças Rítmicas', '40', '30', '2018'), 
('9', 'Cozinha Árabe', 'Aprenda a fazer Kibe', '40', '30', '2018'), 
('10', 'YouTuber', 'Gerar polêmica e ganhar inscritos', '5', '2', '2018');

SELECT * FROM `cursos`;

-- Usa-se um comando por linha por vez para modificar linhas, mas se pode modificar várias colunas em um mesmo comando de linha.
-- Corrigindo o HTML4 para HTML5 usando a chave primária como localização da linha
UPDATE cursos SET nome = 'HTML5' WHERE idcurso = '1';

-- Corrigindo a linha do curso de PHP, que possui erros em duas colunas diferentes.
SELECT * FROM `cursos`;

UPDATE `cursos` SET nome = 'PHP', ano = '2015' WHERE idcurso = '4';

-- Atualização da linha do Java com o comando limit para evitar que se aplique a outras linhas.
UPDATE `cursos` SET nome = 'Java', carga = '40', ano = '2015' WHERE idcurso = '5' LIMIT 1;

SELECT * FROM `cursos`;

-- Detetando as linhas de cursos que não tem nada a ver com TI. Guanabara ensina a fazer desligando o mecanismo de segurança do workbench, e assim se consegue deletar mais de uma linha ao mesmo tempo, mas optei por não usar.

DELETE FROM `cursos` WHERE idcurso = '8';

DELETE FROM `cursos` WHERE idcurso = '9';

DELETE FROM `cursos` WHERE idcurso = '10';

-- Deletando todas as linhas da tabela.
TRUNCATE `cursos`
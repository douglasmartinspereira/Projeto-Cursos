SELECT * FROM usuarios;

SELECT COUNT(*) FROM usuarios;

SELECT COUNT(*) FROM usuarios  /* numero de usuarios */
WHERE tipo_usuario_fk = 3;

SELECT AVG(preco) FROM cursos;  /* média de precos  */

SELECT MIN(preco) FROM cursos;  /* valor minimo */

SELECT MAX(preco) FROM cursos;  /* valor máximo */

SELECT SUM(preco) FROM cursos;  /* soma de todos  */

SELECT tipo_usuario_fk, COUNT(*)
FROM usuarios
GROUP by tipo_usuario_fk;

SELECT tipo_usuario_fk  FROM usuarios
GROUP by tipo_usuario_fk;

SELECT * FROM usuarios;

SELECT MIN(preco) AS 'Minimo', MAX(preco) AS 'Maximo', AVG(preco) 'Media', SUM(preco) 'Total'
FROM cursos;  /* TRAZ OS DADOS E RENOMEIA O NOME DAS COLUNAS */

/* INNER JOIN */

SELECT u.nome AS usuario, t.nome AS TIPO
FROM usuarios as u
INNER JOIN tipo_usuario AS t
ON u.tipo_usuario_fk = t.id_tipo_usuario;

SELECT * FROM usuarios;


SELECT * FROM cursos;

SELECT c.nome AS cursos, u.nome AS professor
FROM cursos AS c INNER JOIN usuarios AS u
ON c.professor_fk = u.id_usuario;

INSERT INTO cursos (nome, descricao, preco, tag, image)
VALUES ('Drinks Maneiros', 'Aprensa a fazer drinks sensacionais', 3000, 'drinks', 'happyhour');

SELECT * FROM cursos;

SELECT cursos.nome AS cursos, usuarios.nome AS professor
FROM cursos  RIGHT JOIN usuarios 
ON cursos.professor_fk = usuarios.id_usuario;
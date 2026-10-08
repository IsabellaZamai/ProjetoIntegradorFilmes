--   CREATE TABLE filmes (
--     id_filme SERIAL PRIMARY KEY,
--     nome VARCHAR(100) NOT NULL,
--     descricao TEXT NOT NULL,
--     ano INT NOT NULL
-- );

-- CREATE TABLE usuarios (
--     nome VARCHAR(100) NOT NULL,
--     email VARCHAR(100) NOT NULL,
--     senha VARCHAR(100) NOT NULL
-- );

-- CREATE TABLE comentarios (
--     id_comentario SERIAL PRIMARY KEY,
--     id_filme INT NOT NULL,
--     id_usuario INT NOT NULL,
--     comentario TEXT NOT NULL,
--     data_comentario TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

--     FOREIGN KEY (id_filme) REFERENCES filmes(id_filme) ON DELETE CASCADE
-- );
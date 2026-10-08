CREATE TABLE filmes (
    id_filme SERIAL PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT NOT NULL,
    ano INT NOT NULL
);

CREATE TABLE usuarios (
    id_usuario SERIAL PRIMARY KEY,
    email VARCHAR(100) NOT NULL,
    senha VARCHAR(255) NOT NULL
);

CREATE TABLE comentarios (
    id_comentario SERIAL PRIMARY KEY,
    id_usuario INT,
    id_filme INT,
    comentario TEXT NOT NULL,
    data_comentario DATE DEFAULT CURRENT_DATE
);
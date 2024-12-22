create database urbanos;
use urbanos;
CREATE TABLE cidades (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    estado VARCHAR(50) NOT NULL
);
CREATE TABLE melhorias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cidade_id INT NOT NULL,
    titulo VARCHAR(255) NOT NULL,
    descricao TEXT NOT NULL,
    categoria VARCHAR(100),
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    relevancia INT DEFAULT 0,
    FOREIGN KEY (cidade_id) REFERENCES cidades(id) ON DELETE CASCADE
);

CREATE TABLE comentarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    melhoria_id INT NOT NULL,
    comentario TEXT NOT NULL,
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (melhoria_id) REFERENCES melhorias(id) ON DELETE CASCADE
);
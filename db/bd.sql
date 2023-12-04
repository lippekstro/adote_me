CREATE DATABASE adoteme;

USE adoteme;

CREATE TABLE faqs(
    id_faq INT PRIMARY KEY AUTO_INCREMENT,
    faq_pergunta VARCHAR(255) NOT NULL,
    faq_resposta TEXT NOT NULL
);

CREATE TABLE usuarios(
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    nascimento DATE NOT NULL,
    cpf BIGINT UNIQUE NOT NULL,
    genero ENUM('M', 'F'),
    telefone BIGINT NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    senha VARCHAR(255) NOT NULL,
    img_usuario LONGBLOB,
    nivel_acesso INT DEFAULT 1
);

CREATE TABLE enderecos(
    id_endereco INT PRIMARY KEY AUTO_INCREMENT,
    cep BIGINT NOT NULL,
    rua VARCHAR(255) NOT NULL,
    quadra VARCHAR(255),
    bairro VARCHAR(255) NOT NULL,
    cidade VARCHAR(255) NOT NULL,
    estado ENUM('MA') DEFAULT 'MA',
    id_usuario INT,
    FOREIGN KEY (id_usuario) REFERENCES usuarios (id_usuario)
);

CREATE TABLE pets(
    id_pet INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    tipo ENUM('gato', 'cachorro') NOT NULL,
    raca VARCHAR(255),
    tamanho INT,
    genero ENUM('M', 'F') NOT NULL,
    peso INT,
    cor VARCHAR(255) NOT NULL,
    img_pet LONGBLOB,
    adocao BOOLEAN NOT NULL,
    adotado BOOLEAN
    bio TEXT,
    id_usuario INT,
    FOREIGN KEY (id_usuario) REFERENCES usuarios (id_usuario)
);

CREATE DATABASE adoteme;

USE adoteme;

CREATE TABLE faqs(
    id_faq INT PRIMARY KEY AUTO_INCREMENT,
    faq_pergunta VARCHAR(255) NOT NULL,
    faq_resposta TEXT NOT NULL
);
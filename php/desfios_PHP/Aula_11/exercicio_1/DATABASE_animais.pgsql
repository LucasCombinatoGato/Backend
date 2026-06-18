CREATE DATABASE animais;


CREATE TABLE dadosAnimais (
    id SERIAL PRIMARY KEY NOT NULL,
    nome TEXT NOT NULL,
    familia TEXT NOT NULL,
    locomocao TEXT NOT NULL,
    alimentacao TEXT NOT NULL,
    extinto BOOLEAN NOT NULL
)

INSERT INTO dadosAnimais (nome, familia, locomocao, alimentacao, extinto) (
    VALUES ('Dodo', 'avinos', 'bípede', 'omnívoros', false)
)

SELECT * FROM dadosAnimais;

UPDATE dadosanimais SET alimentacao = 'herbívoros', extinto = true 
    WHERE nome = 'Dodo';
CREATE DATABASE IF NOT EXISTS utilisateurs_1 CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE utilisateurs_1;


CREATE TABLE IF NOT EXISTS utilisateurs_1(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- EXEMPLE D'INSERTION DE DONNEES: 

INSERT INTO utilisateurs_1 (nom, prenom, email ,password) VALUE ('Dupont','Jean','jean@example.com','1234');
INSERT INTO utilisateurs_1 (nom,prenom,email,password) VALUE ('Moretti','Martin','martin@example.com','5678');

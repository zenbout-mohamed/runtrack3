-- Active: 1753689472411@@127.0.0.1@3306@site_laracon
CREATE DATABASE IF NOT EXISTS site_laracon CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE site_laracon;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    civilite VARCHAR(10) DEFAULT NULL,
    prenom VARCHAR(100) NOT NULL,
    nom VARCHAR(100) NOT NULL,
    adresse VARCHAR(255) DEFAULT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    passions TEXT DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO users (civilite , prenom, nom, email, password, passions) VALUES ('monsieur','Paul','Test','test@example.com','$2y$10$KQr7tHptu6EdpS/FxVfGsu7YHUXT8xuIPbHvezDhLASfsXx66Am/W','["Informatique, voyages"]');

DROP DATABASE IF EXISTS sklep;

CREATE DATABASE sklep;
USE sklep;

CREATE TABLE producenci (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nazwa TEXT,
    opis TEXT
);
CREATE TABLE typy (
    id INT PRIMARY AUTO_INCREMENT,
    kategoria TEXT
);

CREATE TABLE podzespoly (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nazwa TEXT NOT NULL,
    opis TEXT,
    dostepnosc BOOLEAN,
    cena FLOAT,
    typy_id INT,
    producenci_id INT,
    FOREIGN KEY (typy_id) REFERENCES typy(id),
    FOREIGN KEY (producenci_id) REFERENCES producenci(id)
);

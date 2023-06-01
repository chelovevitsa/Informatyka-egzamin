DROP DATABASE IF EXISTS wynajem;
CREATE DATABASE wynajem;
USE wynajem;

CREATE TABLE pokoje (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nazwa TEXT,
    cena INT
);

CREATE TABLE rezerwacje (
    id_rez INT AUTO_INCREMENT PRIMARY KEY,
    id_pok INT,
    liczba_dn INT,
    sezon TEXT,
    FOREIGN KEY(id_pok) REFERENCES pokoje(id)
)
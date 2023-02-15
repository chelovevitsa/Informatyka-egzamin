DROP DATABASE IF EXISTS
CREATE DATABASE malarz;
USE malarz;

CREATE TABLE farby (
  id_farby INT PRIMARY KEY,
  kolor VARCHAR(255),
  cena INT,
  pojemnosc INT
);

CREATE TABLE malowanie (
  id_pomieszczenia INT PRIMARY KEY,
  id_sciany INT PRIMARY KEY,
  id_farby INT,
  liczba_puszek INT,
  FOREIGN KEY (id_farby) REFERENCES farby (id_farby)
);

-- Powinny
-- zawierać strukturę tabeli farby i malowanie (nazwy struktura_farby, struktura_malowanie) oraz dane
-- zapisane do tabeli farby i malowanie (nazwa dane_farby, dane_malowanie) ???

INSERT INTO farby (id_farby, kolor, cena, pojemnosc) 
VALUES
  (1, 'bialy', 20, 5),
  (2, 'czerwony', 30, 3),
  (3, 'niebieski', 35, 3),
  (4, 'Zolty', 22, 4),
  (5, 'zielony', 30, 4),
  (6, 'czarny', 50, 2),
  (7, 'fioletowy', 64, 3);
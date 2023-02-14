CREATE DATABASE ogloszenia;
Use ogloszenia;

CREATE TABLE uzytkownik(
id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
imie varchar(100),
nazwisko varchar(100),
telefon varchar(100),
email varchar(100)
);

CREATE TABLE ogloszenie(
id int AUTO_INCREMENT PRIMARY KEY,
uzytkownik_id int,
kategoria int not null,
podkategoria int,
tytul varchar(100),
tresc varchar(200),
-- Constraint
FOREIGN KEY (uzytkownik_id) REFERENCES uzytkownik(id)
);
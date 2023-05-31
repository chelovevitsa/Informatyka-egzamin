DROP DATABASE IF EXISTS kwiaciarnia;
CREATE DATABASE kwiaciarnia;
USE kwiaciarnia;

DROP TABLE IF EXISTS kwiaciarnia;
DROP TABLE IF EXISTS zamowienia;

CREATE TABLE kwiaciarnia (
id int(10) unsigned NOT NULL AUTO_INCREMENT,
nazwa varchar(20) NOT NULL,
miasto varchar(20) NOT NULL,
ulica varchar(20) NOT NULL,
PRIMARY KEY (id)
);

CREATE TABLE zamowienia (
id int(10) unsigned NOT NULL AUTO_INCREMENT,
id_kwiaciarni int(10) unsigned NOT NULL,
data date NOT NULL,
kwiaty text NOT NULL,
cena float NOT NULL,
PRIMARY KEY (id),
FOREIGN KEY (id_kwiaciarni) REFERENCES kwiaciarnia(id)
);

INSERT INTO kwiaciarnia (nazwa, miasto, ulica) VALUES ('Kwiaciarnia1', 'Malbork', 'Ulica1');
INSERT INTO kwiaciarnia (nazwa, miasto, ulica) VALUES ('Kwiaciarnia2', 'Miasto2', 'Ulica2');
INSERT INTO kwiaciarnia (nazwa, miasto, ulica) VALUES ('Kwiaciarnia3', 'Miasto3', 'Ulica3');
INSERT INTO kwiaciarnia (nazwa, miasto, ulica) VALUES ('Kwiaciarnia4', 'Miasto4', 'Ulica4');
INSERT INTO kwiaciarnia (nazwa, miasto, ulica) VALUES ('Kwiaciarnia5', 'Miasto5', 'Ulica5');
INSERT INTO kwiaciarnia (nazwa, miasto, ulica) VALUES ('Kwiaciarnia6', 'Miasto6', 'Ulica6');

INSERT INTO zamowienia (id_kwiaciarni, data, kwiaty, cena) VALUES (1, '2018-01-01', 'róża', 10.00);
INSERT INTO zamowienia (id_kwiaciarni, data, kwiaty, cena) VALUES (2, '2018-01-02', 'tulipan', 20.00);
INSERT INTO zamowienia (id_kwiaciarni, data, kwiaty, cena) VALUES (3, '2018-01-03', 'lilia', 30.00);
INSERT INTO zamowienia (id_kwiaciarni, data, kwiaty, cena) VALUES (4, '2018-01-04', 'róża', 40.00);
INSERT INTO zamowienia (id_kwiaciarni, data, kwiaty, cena) VALUES (5, '2018-01-05', 'tulipan', 50.00);
INSERT INTO zamowienia (id_kwiaciarni, data, kwiaty, cena) VALUES (6, '2018-01-06', 'lilia', 60.00);
INSERT INTO zamowienia (id_kwiaciarni, data, kwiaty, cena) VALUES (6, '2018-01-07', 'róża', 70.00);
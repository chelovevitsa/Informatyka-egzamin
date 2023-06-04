
CREATE TABLE RodzajPokoju (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nazwa VARCHAR(255)
);

CREATE TABLE Pokoj (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nazwa VARCHAR(255),
    rodzajPokoju INT,
    numer INT,
    FOREIGN KEY (rodzajPokoju) REFERENCES RodzajPokoju(id)
);


CREATE TABLE Rezerwacja (
    id INT AUTO_INCREMENT PRIMARY KEY,
    imie VARCHAR(255),
    nazwisko VARCHAR(255),
    czasRozpoczecia DATETIME,
    czasZakonczenia DATETIME,
    pokoj INT,
    FOREIGN KEY (pokoj) REFERENCES Pokoj(id)
);

INSERT INTO RodzajPokoju (nazwa) VALUES ("2-os King Size");
INSERT INTO RodzajPokoju (nazwa) VALUES ("2-os Łóżka pojedyncze");
INSERT INTO RodzajPokoju (nazwa) VALUES ("1-os");
INSERT INTO RodzajPokoju (nazwa) VALUES ("1-os z widokiem na morze");

INSERT INTO Pokoj (nazwa, rodzajPokoju, numer) VALUES ("Apartament małżeński Błękitny", 1, 101);
INSERT INTO Pokoj (nazwa, rodzajPokoju, numer) VALUES ("Apartament małżeński Zielony", 1, 102);
INSERT INTO Pokoj (nazwa, rodzajPokoju, numer) VALUES ("Business Single #1", 3, 103);
INSERT INTO Pokoj (nazwa, rodzajPokoju, numer) VALUES ("Business Single #2", 3, 104);
INSERT INTO Pokoj (nazwa, rodzajPokoju, numer) VALUES ("Business Deluxe", 2, 105);
INSERT INTO Pokoj (nazwa, rodzajPokoju, numer) VALUES ("Apartament Sea View", 4, 106);

INSERT INTO Rezerwacja (czasRozpoczecia, czasZakonczenia, pokoj, imie, nazwisko) VALUES ("2023-04-10 15:00:00", "2023-04-11 12:00", 1, "Adam", "Nowak");
INSERT INTO Rezerwacja (czasRozpoczecia, czasZakonczenia, pokoj, imie, nazwisko) VALUES ("2023-04-11 15:00:00", "2023-04-12 12:00", 1, "Marzena", "Orzeł");
INSERT INTO Rezerwacja (czasRozpoczecia, czasZakonczenia, pokoj, imie, nazwisko) VALUES ("2023-04-28 15:00:00", "2023-04-29 12:00", 2, "Wojciech", "Magielski");
INSERT INTO Rezerwacja (czasRozpoczecia, czasZakonczenia, pokoj, imie, nazwisko) VALUES ("2023-04-25 15:00:00", "2023-04-26 12:00", 3, "Anna", "Marzęta");
INSERT INTO Rezerwacja (czasRozpoczecia, czasZakonczenia, pokoj, imie, nazwisko) VALUES ("2023-04-25 15:00:00", "2023-04-26 12:00", 6, "John", "Smith");
INSERT INTO Rezerwacja (czasRozpoczecia, czasZakonczenia, pokoj, imie, nazwisko) VALUES ("2023-04-25 15:00:00", "2023-04-26 12:00", 6, "Ariel", "Życiński");
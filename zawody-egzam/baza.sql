DROP DATABASE IF EXISTS wedkarstwo;
CREATE DATABASE wedkarstwo;
USE wedkarstwo;

CREATE TABLE Lowisko (
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    akwen TEXT,
    wojewodztwo TEXT,
    rodzaj INT
);
CREATE TABLE Karty_wedkarskie (
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    imie TEXT,
    nazwisko TEXT,
    adres TEXT,
    data_zezwolenia DATE,
    punkty INT
);
CREATE TABLE Zawody_wedkarskie (
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    Karty_wedkarskie_id INT,
    Lowisko_id INT,
    data_zawodow DATE,
    sedzia TEXT,
    FOREIGN KEY (Lowisko_id) REFERENCES Lowisko(id),
    FOREIGN KEY (Karty_wedkarskie_id) REFERENCES Karty_wedkarskie(id)
)

INSERT INTO `karty_wedkarskie`(`imie`, `nazwisko`, `adres`, `data_zezwolenia`, `punkty`) VALUES ('Pawel','Smolny','Zocha 5','05-05-2005',8);
INSERT INTO `karty_wedkarskie`(`imie`, `nazwisko`, `adres`, `data_zezwolenia`, `punkty`) VALUES ('Alla','Smolny','Winna 15','02-02-2005',3);
INSERT INTO `karty_wedkarskie`(`imie`, `nazwisko`, `adres`, `data_zezwolenia`, `punkty`) VALUES ('Mikita','Kruch','Bud 4','12-12-2012',5)

INSERT INTO `lowisko`(`akwen`, `wojewodztwo`, `rodzaj`) VALUES ('akwen1','Mazowieckie',11);
INSERT INTO `lowisko`(`akwen`, `wojewodztwo`, `rodzaj`) VALUES ('akwen3','Arnnieckie',2);
INSERT INTO `lowisko`(`akwen`, `wojewodztwo`, `rodzaj`) VALUES ('akwen4','Mazowieckie',4)

INSERT INTO `zawody_wedkarskie`(`Karty_wedkarskie_id`, `Lowisko_id`, `data_zawodow`, `sedzia`) VALUES (1,2,'03-03-2022','Oleg');
INSERT INTO `zawody_wedkarskie`(`Karty_wedkarskie_id`, `Lowisko_id`, `data_zawodow`, `sedzia`) VALUES (2,1,'04-03-2022','Wadim');
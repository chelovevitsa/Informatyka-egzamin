DROP DATABASE IF EXISTS wedkowanie;
CREATE DATABASE wedkowanie;
USE wedkowanie;

CREATE TABLE Ryby (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nazwa TEXT NOT NULL,
    wystepowanie TEXT NOT NULL,
    styl_zycia INTEGER NOT NULL
);

CREATE TABLE Okres_ochronny (
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    Ryby_id INTEGER NOT NULL,
    FOREIGN KEY (Ryby_id) REFERENCES Ryby(id),
    od_miesiaca INTEGER NOT NULL,
    do_miesiaca INTEGER NOT NULL,
    wymiar_ochronny INTEGER NOT NULL
);
CREATE TABLE Lowisko (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Ryby_id INTEGER NOT NULL,
    FOREIGN KEY (Ryby_id) REFERENCES Ryby(id),
    akwen TEXT NOT NULL,
    wojewodztwo TEXT NOT NULL,
    rodzaj INTEGER NOT NULL
);
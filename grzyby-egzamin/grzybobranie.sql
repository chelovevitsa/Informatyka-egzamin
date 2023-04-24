DROP DATABASE IF EXISTS grzybobranie;
CREATE DATABASE grzybobranie;
USE grzybobranie;

CREATE TABLE rodzina (
    id INTEGER PRIMARY KEY,
    nazwa TEXT
);
CREATE TABLE potrawy (
    id INTEGER PRIMARY KEY,
    nazwa TEXT
);
CREATE TABLE grzyby (
    id INTEGER,
    rodzina_id INTEGER,
    potrawy_id INTEGER,
    nazwa TEXT,
    potoczna TEXT,
    jadalny BOOLEAN,
    miesiac_zbierania INTEGER,
    nazwa_pliku TEXT,
    FOREIGN KEY (rodzina_id) REFERENCES rodzina(id),
    FOREIGN KEY (potrawy_id) REFERENCES potrawy(id)
)

INSERT INTO `potrawy`(`id`, `nazwa`) VALUES ('1','sos');
INSERT INTO `potrawy`(`id`, `nazwa`) VALUES ('2','duszone');
INSERT INTO `potrawy`(`id`, `nazwa`) VALUES ('3','spagetti');
INSERT INTO `potrawy`(`id`, `nazwa`) VALUES ('4','zupa');
INSERT INTO `potrawy`(`id`, `nazwa`) VALUES ('5','niejadalne')

INSERT INTO `rodzina`(`id`, `nazwa`) VALUES ('1','pieczarkowate');
INSERT INTO `rodzina`(`id`, `nazwa`) VALUES ('2','borowikowate');
INSERT INTO `rodzina`(`id`, `nazwa`) VALUES ('3','pieprznikowate');
INSERT INTO `rodzina`(`id`, `nazwa`) VALUES ('4','truflowate');
INSERT INTO `rodzina`(`id`, `nazwa`) VALUES ('5','boczniakowate')
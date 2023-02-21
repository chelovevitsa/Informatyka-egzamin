DROP DATABASE IF EXISTS `sklep`;
CREATE DATABASE `sklep`;
USE `sklep`;

CREATE TABLE dostawcy (
  id_dostawcy INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nazwa VARCHAR(50) NOT NULL,
  adres VARCHAR(50) NOT NULL
);
CREATE TABLE towary (
  id_towaru INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nazwa VARCHAR(20) NOT NULL,
  cena FLOAT NOT NULL,
  promocja TINYINT(1) NOT NULL,
  IdDostawcy INT(11) NOT NULL,
  FOREIGN KEY (IdDostawcy) REFERENCES dostawcy(id_dostawcy)
);

-- INSERT INTO `dostawcy` (`id_dostawcy`, `nazwa`, `adres`) VALUES ('11', 'Lolo', 'Jana Pawla 4');
-- INSERT INTO `towary` (`id_towaru`, `nazwa`, `cena`, `promocja`, `IdDostawcy`) VALUES ('33', 'Gumka do mazania', '22.3', '0', '11');
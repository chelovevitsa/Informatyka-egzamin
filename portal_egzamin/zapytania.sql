--1
SELECT id, tytul,tresc
FROM ogloszenie
WHERE kategoria = 1;

--2
SELECT uz.telefon
FROM ogloszenie as og
JOIN uzytkownik as uz ON og.uzytkownik_id = uz.id
WHERE og.id = 1;

--3
CREATE USER 'moderator'@'localhost' 
IDENTIFIED BY 'moderator';

--4
SELECT id, nazwa, opis, cena FROM podzespoly WHERE cena<1000
-- 2
SELECT podzespoly.nazwa, podzespoly.opis FROM podzespoly
JOIN producenci ON producenci.id = podzespoly.producenci_id
WHERE producenci.nazwa = 'Intel' AND podzespoly.dostepnosc = 1

-- 3
SELECT podzespoly.nazwa, producenci.nazwa FROM podzespoly
JOIN producenci on podzespoly.producenci_id = producenci.id

-- 4
UPDATE producenci set nazwa = 'PATRIOT' WHERE nazwa = 'Patriot'
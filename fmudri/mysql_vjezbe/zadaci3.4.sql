USE fakultet;
-- mysql workbench
-- zadatak 3.2
-- Ispis matičnih brojeva, imena i prezimena studenata. ime i prezime idu u isti stupac
SELECT
stud.mbrStud,
stud.imeStud,
stud.prezStud
FROM stud;


-- zadatak 3.3
-- Ispis jedinstvenog imena studenata
SELECT
DISTINCT stud.imeStud
FROM stud;


-- zadatak 3.3- DRUGI NAČIN sa GROUP BY
-- Ispis jedinstvenog imena studenata
SELECT
stud.imeStud
FROM stud
GROUP BY stud.imeStud
ORDER BY stud.imeStud DESC;


-- zadatak 3.4.
-- ispis matičnih broj studenata koji su položili ispit iz predmeta sa šifrom 146
SELECT
ispit.mbrStud,
pred.sifPred
FROM ispit INNER JOIN pred ON ispit.sifPred = pred.sifPred
WHERE pred.sifPred=146;


-- zadatak 3.5.
-- Ispis imena i prezimena nastavnika i njihovu plaću dobivenu formulom (kof. + 0.4) * 800
SELECT 
nastavnik.imeNastavnik,
nastavnik.prezNastavnik,
(nastavnik.koef + 0.4)*800 AS 'Plaća'
FROM nastavnik;


-- zadatak 3.6.
-- imena i prezimena nastavnika koji imaju manju plaću od 3500 ili veću od 8000
SELECT 
nastavnik.imeNastavnik,
nastavnik.prezNastavnik,
(nastavnik.koef + 0.4)*800 AS 'Plaća'
FROM nastavnik 
HAVING placa <3500 OR placa >8000;
-- WHERE (nastavnik.koef + 0.4)*800 <3500 OR (nastavnik.koef+0.4)*800;


-- zadatak 3.7
-- imena i prezimena studenata koji su barem jednom pali na ispitu sa siframa od 220 do 240
SELECT
stud.imeStud,
stud.prezStud,
ispit.sifPred
FROM stud INNER JOIN ispit ON stud.mbrStud = ispit.mbrStud
WHERE ispit.sifPred <240 AND ispit.sifPred >220;
AND ispit.ocjena = 1


-- zadatak 3.8
-- imena i prezimena studenata koji su na nekom ispitu dobili 3
SELECT
-- CONCAT naredba koja spaja stringove i mora joj se zadati alias
-- dovršiti!!!

-- 3.9.
-- naziv predmeta na koji nije izišao ni jedan student
SELECT
pred.nazPred
FROM pred LEFT JOIN ispit ON pred.sifPred = ispit.sifPred
WHERE ispit.sifPred IS NULL;

-- 3.10.
-- naziv predmeta na koji je izišao barem jedan student
SELECT
-- DISTINCT riješava se duplikata
DISTINCT pred.nazPred
FROM pred INNER JOIN ispit ON pred.sifPred = ispit.sifPred;


-- zadatak 3.11
-- ispis svih podataka čije ime počinje i završava samoglasnikom
SELECT
*,
SUBSTR(stud.imeStud,1,1) AS inic1,
SUBSTR(stud.imeStud,-1,1) AS inic2
FROM stud
HAVING inic1 IN ('a','e','i','o','u') AND inic2 IN ('a','e','i','o','u');


-- zadatak 3.12
-- ispis svih podataka o studentima kojima ime počinje s bilo kojim znakom osim samoglasnikom
SELECT
*
FROM stud
WHERE LEFT(stud.imeStud,1) NOT IN ('a','e','i','o','u') 
AND RIGHT(stud.imeStud,1) NOT IN ('a','e','i','o','u');


-- ZADATAK 3.13
SELECT
*
FROM stud
WHERE LEFT(stud.imeStud,1) NOT IN ('a','e','i','o','u') 
OR RIGHT(stud.imeStud,1) NOT IN ('a','e','i','o','u');


-- ZADATAK 3.14
-- IME STUDENTA koja sadrže 'NK'
SELECT
*,
LOCATE('nk',stud.imeStud)
FROM stud
WHERE LOCATE('nk',stud.imeStud) >0;


-- zadatak 3.15
-- ime i prezime studenta te naziv i ocjenu za svaki ispit
SELECT
stud.imeStud,
stud.prezStud,
pred.nazPred,
ispit.ocjena
FROM pred INNER JOIN ispit ON pred.sifPred=ispit.sifPred
INNER JOIN stud ON ispit.mbrStud=stud.mbrStud
WHERE ispit.ocjena>1;


-- zadatak 3.16
-- ispis imena i prezimena studenata te mjesto i županniju u kojoj su rođeni. Nakon toga dodajte mjesto i županiju
-- u kojoj stanuju
SELECT
stud.imeStud,
stud.prezStud,
m1.nazMjesto AS mjestorodenja,
zupanija.nazZupanija AS zupanijarodenja,
mjesto.nazMjesto AS mjestostanovanja,
z1.nazZupanija AS zupanijastanovanja
FROM stud INNER JOIN mjesto m1 ON stud.pbrRod=m1.pbr
INNER JOIN zupanija ON zupanija.sifZupanija=mjesto.sifZupanija
INNER JOIN mjesto ON mjesto.pbr=stud.pbrStan
INNER JOIN zupanija z1 ON z1.sifZupanija=mjesto.sifZupanija;
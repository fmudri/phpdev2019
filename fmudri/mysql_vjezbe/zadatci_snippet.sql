use fakultet;

-- zadatak 3.2
-- ispisi maticne brojeve, a ime i prezime studenta u jednom polju
SELECT
stud.mbrStud,
stud.imeStud,
stud.prezStud 
FROM stud;

-- zadatak 3.3
-- ispisi jedinstvena imena studenata
SELECT
DISTINCT stud.imeStud
FROM stud
ORDER BY stud.imeStud DESC;

-- zadatak 3.3  -- drugi način sa group by
-- ispisi jedinstvena imena studenata
SELECT
stud.imeStud
FROM stud
GROUP BY stud.imeStud
ORDER BY stud.imeStud DESC;


-- zadatak 3.4  
-- maticni broj stud koji su polozili ispit iz pred sa sifrom 146
SELECT
ispit.mbrStud
FROM ispit INNER JOIN pred ON ispit.sifPred = pred.sifPred
WHERE pred.sifPred=146;

-- zadatak 3.5
-- imena i prezimena natavnika i placa 
-- formulom (koef+04)*800
SELECT
nastavnik.imeNastavnik,
nastavnik.prezNastavnik,
(nastavnik.koef+0.4)*800 AS placa 
FROM nastavnik;

-- zadatak 3.6
-- imena i prezimena natavnika i placa 
-- formulom (koef+04)*800
SELECT
nastavnik.imeNastavnik,
nastavnik.prezNastavnik,
(nastavnik.koef+0.4)*800 AS placa 
FROM nastavnik
-- WHERE (nastavnik.koef+0.4)*800 <3500 OR (nastavnik.koef+0.4)*800 >8000;
HAVING placa <3500 OR placa >8000;

-- zadatak 3.7
-- ime i prez studenta koji su barem jednom pali predmet 220-240
SELECT
* 
FROM stud INNER JOIN ispit on stud.mbrStud=ispit.mbrStud
WHERE ispit.sifPred BETWEEN 220 AND 240 AND ispit.ocjena=1;

-- zadatak 3.8
SELECT CONCAT(stud.imeStud,' ', stud.prezStud) AS imeprezime
FROM stud
INNER JOIN ispit ON stud.mbrStud=ispit.mbrStud
WHERE ispit.ocjena=3;

-- zadatak 3.9
-- naziv predmeta na koji nije izisao ni jedan student
SELECT
pred.nazPred
FROM pred LEFT JOIN ispit ON pred.sifPred=ispit.sifPred
WHERE ispit.sifPred IS NULL

-- zadatak 3.10
-- naziv predmeta na koji je izisao barem jedan student
SELECT
DISTINCT pred.nazPred
FROM pred RIGHT JOIN ispit ON pred.sifPred=ispit.sifPred

-- zadatak 3.11
-- ime studenta počinje I završava sa aeiou
SELECT
*,
SUBSTR(stud.imeStud,1,1) AS inic1,
SUBSTR(stud.imeStud,-1,1) AS inic2
FROM stud
HAVING inic1 IN ('a','e','i','o','u') AND inic2 IN ('a','e','i','o','u');

-- zadatak 3.11 NA DRUGI NACIN
-- ime studenta počinje I završava sa aeiou
SELECT
*
FROM stud
WHERE LEFT(stud.imeStud,1) IN ('a','e','i','o','u') 
AND RIGHT(stud.imeStud,1) IN ('a','e','i','o','u');

-- zadatak 3.12
-- kao gornji osim preskoci sve sa samoglasnicima
SELECT
*
FROM stud
WHERE LEFT(stud.imeStud,1) NOT IN ('a','e','i','o','u') 
AND RIGHT(stud.imeStud,1) NOT IN ('a','e','i','o','u');

-- zadatak 3.13 NA DRUGI NACIN
-- ime studenta počinje ILI završava sa aeiou
SELECT
*
FROM stud
WHERE LEFT(stud.imeStud,1) IN ('a','e','i','o','u') 
OR RIGHT(stud.imeStud,1) IN ('a','e','i','o','u');

-- zadatak 3.14
-- ime studenta ima 'nk'
SELECT
*,
LOCATE('nk',stud.imeStud)
FROM stud
WHERE LOCATE('nk',stud.imeStud) > 0;

-- zadatak 3.15
-- ime, prezime stud te naziv i ocjenu za svaki ispit
SELECT
stud.imeStud,
stud.prezStud,
pred.nazPred,
ispit.ocjena
FROM pred INNER JOIN ispit on pred.sifPred=ispit.sifPred
INNER JOIN stud ON ispit.mbrStud=stud.mbrStud
WHERE ispit.ocjena>1;

-- 3.16
--  stud zupanije i stanovanja
SELECT
stud.imeStud,
stud.prezStud,
m1.nazMjesto AS mjestorodjenja,
zupanija.nazZupanija AS zupanijarodjenja,
mjesto.nazMjesto AS mjestostanovanja,
z1.nazZupanija AS zupanijastanovanja
FROM
stud INNER JOIN mjesto m1 ON stud.pbrRod= m1.pbr
INNER JOIN zupanija ON zupanija.sifZupanija=m1.sifZupanija
INNER JOIN mjesto ON mjesto.pbr=stud.pbrStan
INNER JOIN zupanija z1 ON z1.sifZupanija=mjesto.sifZupanija;

-- 3.17
-- naziv predmeta i organizacijske jedinice kojima pripadaju za one kolegije koji imaju više od 20 upisanih stud
SELECT
orgjed.nazOrgjed,
pred.nazPred,
pred.upisanoStud
FROM orgjed INNER JOIN pred ON orgjed.sifOrgjed = pred.sifOrgjed
WHERE pred.upisanoStud>20;

-- 3.18.
-- sva mjesta u kojima stanuje barem jedan student, imena se smiju pojaviti samo jednom
SELECT
DISTINCT mjesto.nazMjesto,
stud.pbrStan
FROM stud INNER JOIN mjesto ON stud.pbrStan = mjesto.pbr;

-- 3.19
-- nazivi mjesta u kojima je barem jedan student rođen i stanuje. Imena se smiju samo jednom pojaviti
SELECT
mjesto.nazMjesto,
stud.imeStud,
stud.prezStud,
stud.pbrRod,
stud.pbrStan
FROM stud INNER JOIN mjesto ON mjesto.pbr = stud.pbrRod
WHERE stud.pbrRod = stud.pbrStan
GROUP BY mjesto.nazMjesto;

-- 3.20
-- ispis oznake dvorana i naziva kolegija za one kolegije koje imaju vise od 2 sata predavanja tjedno
SELECT
rezervacija.oznDvorana,
pred.brojSatiTjedno,
pred.nazPred
FROM rezervacija INNER JOIN pred ON rezervacija.sifPred = pred.sifPred
WHERE pred.brojSatiTjedno>2;

-- 3.21
-- nazivi kolegija i oznake dvorana u kojima imaju rezerviran termin. Ispis i naziva OrgJed kojoj kolegij pripada
SELECT
rezervacija.oznDvorana,
pred.nazPred,
orgjed.nazOrgjed
FROM rezervacija INNER JOIN pred ON rezervacija.sifPred = pred.sifPred
LEFT JOIN orgjed ON orgjed.sifOrgjed = pred.sifOrgjed;

-- 3.22
-- ispis podataka o nastavnicima koji su ispitivali studente koji stanuju i istoj županiji kao i nastavnik
SELECT
*
FROM ispit INNER JOIN stud ON stud.mbrStud = ispit.mbrStud
INNER JOIN nastavnik ON ispit.sifNastavnik = nastavnik.sifNastavnik
LEFT JOIN mjesto m1 ON m1.pbr=nastavnik.pbrStan
LEFT JOIN zupanija z1 ON z1.sifZupanija=m1.sifZupanija
LEFT JOIN mjesto m2 ON m2.pbr=stud.pbrStan
LEFT JOIN zupanija z2 ON z2.sifZupanija=m2.sifZupanija
WHERE z1.sifZupanija=z2.sifZupanija;

-- 3.23
-- ispisi podatke o studentima koji studiraju u mjestu razlicitiom od mjesta rodenja, ali koje se nalazi u istoj 
-- zupaniji u kojoj su i rođeni
SELECT
*
FROM stud
LEFT JOIN mjesto m1 ON m1.pbr=stud.pbrRod
LEFT JOIN mjesto m2 ON m2.pbr=stud.pbrStan
WHERE stud.pbrRod!=stud.pbrStan AND m1.sifZupanija=m2.sifZupanija;

-- 3.24
-- ispis podataka o studentima i nastavnicima koji imaju ista prezimena
SELECT
*
FROM stud INNER JOIN nastavnik ON nastavnik.prezNastavnik = stud.prezStud
WHERE nastavnik.prezNastavnik=stud.prezStud;

-- 3.25
-- ispis podataka o studentima i njihovim mjestima stanovanja za one studente koji su barem jednom pali na ispitu
-- "osnove baze podataka".... LIKE je isto sto i =
SELECT
*
FROM stud INNER JOIN ispit ON ispit.mbrStud=stud.mbrStud
LEFT JOIN pred ON ispit.sifPred=pred.sifPred
LEFT JOIN mjesto ON mjesto.pbr=stud.pbrStan
WHERE ispit.ocjena=1 AND pred.nazPred LIKE 'Osnove baza podataka';

-- 3.26
-- 
SELECT
nastavnik.*,
m1.nazMjesto,
z1.nazZupanija
FROM nastavnik INNER JOIN ispit ON nastavnik.sifNastavnik = ispit.sifNastavnik
LEFT JOIN pred ON pred.sifPred=ispit.sifPred
LEFT JOIN mjesto m1 ON m1.pbr=nastavnik.pbrStan
LEFT JOIN zupanija z1 ON z1.sifZupanija=m1.sifZupanija
WHERE ispit.ocjena BETWEEN 2 AND 3;


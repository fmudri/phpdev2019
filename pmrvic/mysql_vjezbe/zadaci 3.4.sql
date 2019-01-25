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












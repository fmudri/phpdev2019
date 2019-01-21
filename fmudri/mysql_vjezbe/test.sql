USE videoteka;
SELECT 
korisnici.ime,
korisnici.prezime
FROM korisnici INNER JOIN posudba ON korisnici.id=posudba.id_korisnik
WHERE posudba.vraceno = 0;


USE videoteka;
SELECT 
korisnici.ime,
korisnici.prezime,
film.naziv
FROM korisnici INNER JOIN posudba ON korisnici.id=posudba.id_korisnik
INNER JOIN film ON film.id=posudba.id_film
WHERE posudba.vraceno = 0;

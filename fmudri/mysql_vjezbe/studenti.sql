SELECT 
student.id,
student.student,
student.prosjek,
predmet.predmet
FROM 
fakultet.student INNER JOIN ispit ON ispit.student_id=student.id 
INNER JOIN fakultet.predmet ON predmet.id=ispit.id 
WHERE prosjek>2.5
GROUP BY student.prosjek
HAVING prosjek<4.5
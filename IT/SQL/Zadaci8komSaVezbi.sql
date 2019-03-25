-- 1. Naći sva izdanja sa tiražem između 4ooo i 8ooo

select 
naziv, 
tiraz
from ki
		join i on i.idi = ki.idi
 where Tiraz between 4000 and 8000;
 
 -- 2. Naći naslove knjiga jugoslovenskih pisaca.
 
 select 
 naslov,
 ime,
 drzava
 from p 
		join p on p.idp = kp.idP
        join k on k.idk = kp.idK
        where Drzava = 'Jugoslavia'
        
        
-- 6. Naći nazive izdavača koji su izdali sve knjige koje je izdao i izdavač sa šifrom i3. 
SELECT i.naziv 
FROM i
JOIN ki ON ki.I_SIF = i.I_SIF
JOIN k ON k.K_SIF = ki.K_SIF
WHERE k.NASLOV IN 

	(SELECT k.NASLOV
FROM k
JOIN ki ON k.K_SIF = ki.K_SIF
JOIN i ON ki.I_SIF = i.I_SIF
WHERE I_SIF = 'i3')

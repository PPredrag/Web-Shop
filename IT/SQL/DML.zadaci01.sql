/*
	1. Izlistati sve podatke iz tabele K (2)
	2. Izlistati sve oblasti knjiga (1)
	3. Izlistati sve jedinstvene oblasti knjiga (1)
	4. Izlistati sve sifre knjiga (2)
	5. Izlistati naslov i oblast knjige u jednoj koloni (za sve knjige) (2)
	6. Prikazati broj knjiga (1)
	7. Izlistati sve romane (1)
	8. Izlistati sve pisce koji se zovu Marko (2)
*/







use kip;

-- 1. Izlistati sve podatke iz tabele K



SELECT *
FROM k
;
-- ili

SELECT 
	idK,
	Naslov,
	Oblast
FROM k;






-- 2. Izlistati sve oblasti knjiga



SELECT 
	Oblast
FROM k;







-- 3. Izlistati sve jedinstvene oblasti knjiga



SELECT 
	DISTINCT OBLAST
FROM K;






-- 4. Izlistati sve sifre knjiga


SELECT 
	idK
FROM K;
--ili
SELECT 
	idK AS SIFRA
FROM K;






-- 5. Izlistati naslov i oblast knjige u jednoj koloni (za sve knjige)



/*
Ne radi u MySQL-u
SELECT 
	Naslov + ' ' + Oblast AS 'Naslov i oblast'
FROM k
*/
select
	concat(Naslov, ' | ', Oblast) AS 'Naslov i oblast'
FROM K;







-- 6. Prikazati broj knjiga


select
	count(*) 'Broj redova'
from K









-- 7. Izlistati sve romane (iz tabele K)



select *
from k
where oblast = 'roman'








-- 8. Izlistati sve pisce koji se zovu Marko



select *
from p
where ime like 'Marko'

select *
from p
where ime like '%Marko%'

/*
	9. Izlistati sve izdavace cije je drugo slovo a
	10. Izlistati nazive izdavaca od osam karaktera, koji pocinju slovom P
	11. Izlistati izdavace ciji je status 10.
	12. Prikazati broj izdavaca ciji je status razlicit od 10
	13. Prikazati jednog izdavaca ciji je status veci, ili jednak 20
	14. Izlistati sve izdavace koji imaju status 10 ili 20
	15. Izlistati sve izdavace ciji je status razlicit od 10 i 20
	16. Izlistati izdavace ciji je status 10 i država Amerika
	17. Izlistati sve izdavace ciji je status izmedu 5 i 15
	18. Izlistati sve izdavace ciji status nije izmedu 5 i 15
	19. Izlistati sve izdavace ciji naziv države ne pocinje slovom a
*/







-- 9. Izlistati sve izdavace cije je drugo slovo a
SELECT
	Naziv
FROM
	I
where
	Naziv like '_a%'

-- 10. Izlistati nazive izdavaca od osam karaktera, koji pocinju slovom P
SELECT
	Naziv
FROM
	I
where
	Naziv RLIKE 'P[a-z0-9]{7}'

-- 11. Izlistati izdavace ciji je status 10.
SELECT
	*
FROM I izd
WHERE izd.STATUS = 10

-- 12. Prikazati broj izdavaca ciji je status razlicit od 10
SELECT COUNT(*) AS BROJ
FROM I
WHERE STATUS <> 10

-- 13. Prikazati jednog izdavaca ciji je status veci, ili jednak 20
/* MSSQL
SELECT TOP 1 *
FROM I
WHERE STATUS >= 20
*/

SELECT *
FROM I
WHERE STATUS >= 20
LIMIT 1

-- 14. Izlistati sve izdavace koji imaju status 10 ili 20
SELECT *
FROM I
WHERE STATUS = 10 OR STATUS = 20

/* ILI */

SELECT *
FROM I
WHERE STATUS IN (10, 20)

-- 15. Izlistati sve izdavace ciji je status razlicit od 10 i 20
SELECT *
FROM I
WHERE STATUS NOT IN (10, 20)

-- 16. Izlistati izdavace ciji je status 10 i država Amerika
SELECT *
FROM Izdavac i
WHERE 
	i.STATUS = 10 
	AND i.DRZAVA = 'AMERIKA'

-- 17. Izlistati sve izdavace ciji je status izmedu 5 i 15
SELECT *
FROM I 
WHERE status >= 5 AND status <= 15 -- > 5 and < 15

SELECT *
FROM I 
WHERE status BETWEEN 5 AND 15 -- 6 and 14

-- 18. Izlistati sve izdavace ciji status nije izmedu 5 i 15
SELECT *
FROM I 
WHERE status NOT BETWEEN 5 AND 15

-- 19. Izlistati sve izdavace ciji naziv države ne pocinje slovom a


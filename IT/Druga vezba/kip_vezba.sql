-- 1. Izlistati sve (kad hocemo sve koristimo *) podatke iz tabele k
-- rezultat SELECT upita je uvek tabela
-- kad hocemo da izlistamo sve, mozemo i rucno da  ukucamo sve nazive kolone
SELECT *
FROM K;

SELECT
	idK,
    Naslov,
    Oblast
FROM K;

-- 2. Izlistati sve oblasti knjiga iz tabele K
SELECT 
	Oblast
FROM K;

-- 3. Izlistati jedinstvene oblasti knjiga iz tabele K
-- Kada stavimo distinct vratice nam jedinstvene vrednosti iz kolone
SELECT
	DISTINCT Oblast
FROM K;

-- 4. Izlistati sve sifre knjiga (2)
SELECT
	idK AS Sifra
FROM K;

-- 5. Izlistati naslov i oblast knjiga u jednoj koloni
SELECT
	-- MSSQL Naslov + ' ' + Oblast AS JednaKolona 
    CONCAT(Naslov, ' (',Oblast,')') AS Knjiga 
FROM K;

-- 6. Prikazati broj knjiga (1)
SELECT
	COUNT(*) AS 'Broj_knjiga'
FROM K;

-- 7. Izlistati sve romane (1)
SELECT
	idK,
    Naslov,
    Oblast
FROM KIP.K
WHERE
	Oblast = 'roman'; -- jedan znak = je poredjenje
    -- <> znak za razlicito
    
-- 8. Izlistati sve pisce koji se zovu Marko
-- kada stavimo procenat onda trazimo rec koja se sadrzi
-- procenat menja bilo koji karakter
-- donja crta _ oznacava tacno jedan 1 karakter
SELECT
	Ime
FROM P 
WHERE
	Ime LIKE '%Copic%';
    -- '%Copic';
    -- '__Copic';
    
-- 9. Izlistati sve izdavace cije je drugo slovo A 
SELECT
	Naziv
FROM I 
WHERE
	Naziv LIKE '_a%';
	
-- 10. Izlistati sve izdavace od osam karaktera, koji pocinju slovom P
-- []izmedju uglastih zagrada navodimo sve vrednoste koje se mogu naci
-- npr [A-Z] [A-Za-z] [A-Z0-9]{7}sedam pojavljivanja
SELECT
	Naziv
FROM I
WHERE
	Naziv RLIKE 'P[a-z]{7}';
    
-- 11. Izlistati izdavace ciji je status 10.
SELECT
	Naziv
FROM I
WHERE 
	Status = 10;
    
-- 12. Prikazati broj izdavaca ciji je status razlicit od 10
SELECT
	COUNT(Naziv) AS Broj_izdavaca
FROM I
WHERE
	Status <> 10;

-- 13. Prikazati jednog izdavaca ciji je status veci ili jednak 20
-- LIMIT vraca prvog iz tabele, prvog na koji naidje
SELECT
	-- MSSQL TOP 5 Naziv
    NAZIV
FROM I 
WHERE Status >= 20; 
LIMIT 1;

-- 14. Izlistati sve izdavace koji imaju status 10 ili 20
-- IN da li su vrednosti u skupu predstavljene u koloni
SELECT
	NAZIV
FROM I 
WHERE Status IN (10,20);
-- Status = 10 or Status = 20;

-- 15. Izlistati sve izdavace ciji je status razlicit od 10 i 20
-- NOT IN - kada nije u skupu
SELECT
	NAZIV
FROM I 
WHERE Status NOT IN (10,20);
-- Status <> 10 AND Status <> 20;

-- 16. Izlistati izdavace ciji je status 10 i drzava Amerika
SELECT
	NAZIV
FROM I
WHERE Status = 10 and Drzava = 'Amerika';

-- 17. Izlistati sve izdavace ciji je status izmedju 5 i 15

SELECT
	NAZIV
FROM I
WHERE Status between 5 and 15;
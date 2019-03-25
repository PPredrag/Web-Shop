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
-- rlike nije dostupan u mssql
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

-- 18. Izlistati sve godine u kojima su knjige izdavali izdavaci sa statusom 30
-- exists - ako vrati bar jedan red vraca TRUE, ako ne vrati nista vraca FALSE
SELECT
	GODINA
FROM KI
WHERE 
	EXISTS
		(
			SELECT idI
			FROM I 
			WHERE status = 30
				AND I.idI = K.idI
		);
	

-- 19. Izlistati (rastuce) sve godine u kojima postoji izdanje
-- ORDER BY mogu da se navedu samo kolone koje su navedene u selectu :)
-- moze da se napise ASC a i ne mora jer se ASC podrazumeva - da ide rastuce
SELECT
	GODINA
FROM ki
order by GODINA ASC;


-- 20. Izlistati (opadajuce) sve godine u kojima postoji izdanje
SELECT
	GODINA
FROM ki
order by GODINA DESC;

-- 21. Izlistati sve podatke o izdavacima. Podatke urediti po drzavi i nazivu
-- moze se napisati ili ime kolone ili broj pod kojim se pojavljuje u SELECTu
SELECT 
	idI,
	Naziv,
	Status,
	Drzava
FROM I
order by 4, 2;
-- order by DRZAVA, NAZIV;

-- 22. a. Izlistati ukupan tiraz
-- SUM je agregatna funkcija, postoje i min, max
SELECT
	SUM(Tiraz)
FROM KI;

-- 23. b. Izlistati ukupan tiraz za svakog izdavaca
-- group by koristimo kada zelimo da grupisemo agregatnu funkciju... u group by se navodi sve ono sto nije agregatna funkcija
SELECT
	SUM(Tiraz),
    idI
FROM KI
group by idI;

-- 23. c. Izlistati ukupan tiraz za svakog izdavaca, uzimajuci u obzir samo izdanja od 1966. do danas
SELECT
    SUM(Tiraz),
    idI
FROM KI
WHERE GODINA >= 1966
group by idI;


-- 23. d. Izlistati ukupan tiraz za svakog izdavaca (samo ako je preko 4000), 
-- uzimajuci u obzir samo izdanja od 1966. do danas 
-- i izdavace sa ukupnim tirazom do barem 4000. 
-- Podatke sortirati po tirazu.
SELECT
    SUM(Tiraz),
    idI
FROM KI
WHERE GODINA >= 1966
group by idI
having sum(Tiraz) >= 4000;

-- 23. f. Izlistati DVA izdavaca sa najvecim ukupnim tirazom, uzimajuci u obzir samo izdanja od 1966. do danas i izdavace sa ukupnim tirazom od barem 4000. Podatke sortirati po tirazu.
SELECT
    sum(Tiraz),
    idI
FROM KI
WHERE GODINA >= 1966
GROUP BY idI
having sum(Tiraz) > 4000
order by 2
limit 2;

-- CRUD = CREATE UPDATE DELETE = CRUD
-- u kolonu PK koja je auto inkrement ne mozemo insertovati pomocu inseret into
select max(idK) from K
INSERT INTO K (idK, NASLOV, OBLAST)
VALUES
	('k7', 'Na Drini cuprija', 'roman')
    ('k8', 'Seobe', 'roman');
    

UPDATE k
SET Oblast = 'Lirika', Naslov = 'Ne nemoj mi prici'
WHERE idK = 'k6';

DELETE FROM I
WHERE Drzava='Amerika';

-- drop brise celu tabelu

-- Koliko su puta pisci iz Jugoslavije bili prvi autori na knjizi?
SELECT
	count(*)
FROM kp	join p on kp.idp=p.idp
WHERE p.Drzava='Jugoslavija' and kp.RBroj=1;

-- Koliki je ukupan tiraz romana jugoslovenskih izdavaca?
SELECT
	sum(tiraz)
FROM ki 
		join k on ki.idk=k.idk
		join i on ki.idi=i.idi
where i.drzava='jugoslavija' and k.oblast='roman';


-- Koliki je ukupan tiraz romana jugoslovenskih izdavaca?

SELECT 
	COALESCE(sum(Tiraz), 0)
FROM ki
WHERE idK in 
	(
		SELECT idK
		FROM k
		WHERE oblast='roman'
	) 
    AND idI in
    (
		SELECT idI
        FROM i
        WHERE drzava='Jugoslavija'
    );
    
SELECT *
FROM K,KI;

SELECT *
FROM K JOIN KI ON k.idk=ki.idK;

-- 18. Izlistati sve godine u kojima su knjige izdavali izdavaci sa statusom 30
-- exists - ako vrati bar jedan red vraca TRUE, ako ne vrati nista vraca FALSE
SELECT
	GODINA
FROM KI JOIN I ON KI.idI=I.idI
WHERE I.status = 30;



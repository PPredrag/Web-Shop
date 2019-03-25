/*
	 01 Izlistati sve godine u kojima su knjige izdavali izdavaci sa statusom 30
	 02 Izlistati (rastuce) sve godine u kojima postoji izdanje
	 03 Izlistati (opadajuce) sve godine u kojima postoji izdanje
	 04 Izlistati sve podatke o izdavacima. Podatke urediti po državi i nazivu
	 05 a. Izlistati ukupan tiraž
	 05 b. Izlistati ukupan tiraž za svakog izdavaca
	 05 c. Izlistati ukupan tiraž za svakog izdavaca, uzimajuci u obzir samo izdanja od 1966. do danas
	 05 d. Izlistati ukupan tiraž za svakog izdavaca (samo ako je preko 4000), uzimajuci u obzir samo izdanja od 1966. do danas
	 05 e. Izlistati ukupan tiraž za svakog izdavaca (samo ako je preko 4000), uzimajuci u obzir samo izdanja od 1966. do danas. Podatke sortirati po tiražu, uzlazno
	 05 f. Izlistati dva izdavaca sa najvecim ukupnim tiražom, uzimajuci u obzir samo izdanja od 1966. do danas i izdavace sa ukupnim tiražom od barem 4000. Podatke sortirati po tiražu
	 
	 CRUD
	 INSERT / UPDATE / DELETE
*/




-- 01 Izlistati sve godine u kojima su knjige izdavali izdavaci sa statusom 30

SELECT GODINA
FROM KI
WHERE IDI IN (
				SELECT IDI
				FROM I
				WHERE I.STATUS = 30
			    )

-- 2 Izlistati (rastuce) sve godine u kojima postoji izdanje
SELECT GODINA
FROM KI
ORDER BY GODINA 

-- ili 
SELECT GODINA
FROM KI
ORDER BY GODINA ASC

-- 3 Izlistati (opadajuce) sve godine u kojima postoji izdanje
SELECT GODINA
FROM KI
ORDER BY GODINA DESC

-- 4 Izlistati sve podatke o izdavacima. Podatke urediti po državi i nazivu
SELECT IDI, NAZIV, STATUS, DRZAVA
FROM I
ORDER BY DRZAVA ASC, NAZIV DESC

-- ILI 
SELECT IDI AS SIFRA, NAZIV, STATUS, DRZAVA
FROM I
ORDER BY 4 ASC, 2 DESC

-- 5 a. Izlistati ukupan tiraž
SELECT
	SUM(TIRAZ)
FROM
	KI
-- b. Izlistati ukupan tiraž za svakog izdavaca
SELECT
	IDI AS SIFRA,
	SUM(TIRAZ) AS UKUPAN_TIRAZ
FROM
	KI
GROUP BY IDI

-- c. Izlistati ukupan tiraž za svakog izdavaca, uzimajuci u obzir samo izdanja od 1966. do danas

SELECT
	IDI AS SIFRA,
	SUM(TIRAZ) AS UKUPAN_TIRAZ
FROM
	KI
WHERE
	GODINA >= '1966'
GROUP BY IDI

-- d. Izlistati ukupan tiraž za svakog izdavaca (samo ako je preko 4000), uzimajuci u obzir samo izdanja od 1966. do danas

SELECT
	IDI AS SIFRA,
	SUM(TIRAZ) AS UKUPAN_TIRAZ
FROM
	KI
WHERE
	GODINA >= '1966'
GROUP BY IDI
HAVING SUM(TIRAZ) > 4000

-- e. Izlistati ukupan tiraž za svakog izdavaca (samo ako je preko 4000), uzimajuci u obzir samo izdanja od 1966. do danas. Podatke sortirati po tiražu, uzlazno
SELECT
	IDI AS SIFRA,
	SUM(TIRAZ) AS UKUPAN_TIRAZ
FROM
	KI
WHERE
	GODINA >= '1966'
GROUP BY IDI
HAVING SUM(TIRAZ) > 4000
ORDER BY 2 

-- f. Izlistati dva izdavaca sa najvecim ukupnim tiražom, uzimajuci u obzir samo izdanja od 1966. do danas i izdavace sa ukupnim tiražom od barem 4000. Podatke sortirati po tiražu
SELECT
	IDI AS SIFRA,
	SUM(TIRAZ) AS UKUPAN_TIRAZ
FROM
	KI
WHERE
	GODINA >= '1966'
GROUP BY IDI
HAVING SUM(TIRAZ) > 4000
ORDER BY 2 DESC
LIMIT 2



-- CRUD
select * from p
select max(idp) from p

INSERT INTO P (IDP, IME, BRNASLOVA, DRZAVA)
VALUES
	('p6', 'Orhan Pamuk', 0, 'Turska'),
	('p7', 'Marijana Mateus', 0, 'Srbija'),
	('p8', 'Zorannah', 0, 'Srbija'),
	('p9', 'Jelena B. Alimpic', 0, 'Srbija'),
	('p10', 'Suzana Mancic', 0, 'Srbija');

select * from k
select max(idk) from k

INSERT INTO K (idk, NASLOV, OBLAST)
VALUES
	('k7', 'Zovem se crveno', 'roman'),
	('k8', 'Amoaž', 'roman');

select * from kp
INSERT INTO KP (IDK, IDP, RBROJ)
VALUES 
	('k7','p6',1),
	('k8','p7',1);

START TRANSACTION
UPDATE P
SET BrNaslova = 1
WHERE IDP = 'p6'
-- COMMIT 
-- ROLLBACK

UPDATE P
SET BrNaslova = BrNaslova + 1
WHERE IDP = 'p7';

DELETE FROM P
WHERE IDP = 'P10'
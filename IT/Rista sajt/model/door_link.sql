-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 26, 2014 at 10:12 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `door_link`
--
CREATE DATABASE IF NOT EXISTS `door_link` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `door_link`;

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `content_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `content_text` text COLLATE utf8_unicode_ci NOT NULL,
  `content_status` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`content_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`content_id`, `content_text`, `content_status`) VALUES
(1, '<div id=''article''>			\n				<div class=''center''>\n					<h1 class=''blue''>PROJEKTNO PREVOĐENJE</h1>\n					<p class=''bold''>Prevodilačka agencija DOOR <span class=''link''>Link</span></p>\n					<h1>Stručnjak u prevođenju tehničke dokumentacije</h1>\n					<p class=''bold italic''>Ivona Dimitrijević, sudski tumač</p>\n					<p><a href=''mailto:ivonadimitrijevic@yahoo.com''>ivonadimitrijevic&#64;yahoo.com</a></p>\n				</div>   \n				\n			</div>', '1'),
(2, '<div id="article">\r\n                   	<h1 class="blue center">PROJEKTNO PREVOĐENJE</h1>\r\n                	<p class="bold center">O nama</p><br>\r\n                    <p>Prevodilačka agencija DOOR Link je posvećena jednom klijentu, čija je potreba <span class="blue bold">prevođenje kompleksne i obimne dokumentacije</span> različite tematike.</p><br>\r\n                    <p>Tim prevodilaca se u te svrhe formira oko jednog projekta, gde je važno obezbediti <span class="blue bold">standardizaciju termina</span> u dokumentaciji koju klijent dobija kao <span class="blue bold">finalni proizvod.</span></p><br>\r\n                    <p>Za svaki pojedinačan projekat se okuplja posebna grupa prevodilaca <span class="blue bold">specijalizovana</span> za datu temu.</p>\r\n                </div>', '1'),
(3, '<div id="article">\r\n                <h1 class="blue center">STRANICA JE U PRIPREMI</h1>    \r\n                </div>', '1'),
(4, '<div id="article">\r\n                <h1 class="center blue">PREVOD</h1><br>\r\n                	<p>Prevod je prekodiranje jezičkog teksta, pri kome dolazi do stvaranja njegove <span class="blue bold">nove</span> jezičke <span class="blue bold">forme</span> i stilističkog <span class="blue bold">oblika</span>.</p><br>\r\n                    <p>Pod prevodom razumemo <span class="blue bold">transformaciju</span> sa jednog jezika na drugi u <span class="bold">pisanoj</span> i <span class="bold">usmenoj</span> formi.</p>\r\n                </div>', '1'),
(5, '<div id="article">\r\n                <h1 class="center blue">PISANI PREVOD</h1><br>\r\n                	<p>Pisani prevod naručuje bilo koje pravno ili fizičko lice koje sarađuje ili je u kontaktu sa <span class="bold blue">stranim pravnim ili fizičkim licem</span>.</p><br>\r\n                    <p>Sam naziv kaže da su ovi prevodi u pisanom (kucanom) obliku.</p>\r\n                    <p>Pri transformaciji teksta sa jednog jezika na ciljni jezik se <span class="bold blue">zadržava originalan</span> izgled <span class="bold blue">dokumenta</span>.</p>\r\n                    <h2 class="center blue">Prevod sa overom sudskog tumača</h2><br>\r\n                    <p>Dokumenta koja su potrebna za određene institucije (pravno validna dokumenta) pored pisanog prevoda zahtevaju i overu <span class="bold blue">pečatom</span> sudskog tumača.</p>\r\n                </div>', '1'),
(6, '<div id="article">\r\n                <h1 class="center blue">USMENI PREVOD</h1><br>\r\n                	<p>Usmeno prevođenje je podesno na <span class="bold blue">poslovnim sastancima, seminarima, predavanjima, konferencijama</span> itd. gde učesnici dolaze sa različitih govornih područja.</p>\r\n                    <p>Kod usmenog prevođenja je potrebno <span class="bold">blagovremeno uputiti</span> prevodioca u terminologiju i tematiku skupa, konferencije ili događaja.</p>\r\n                    <h2 class="center blue">Usmeni, konsekutivni prevod</h2><br>\r\n                    <p>Pri konsekutivnom prevođenju prevodilac reprodukuje izgovoreni tekst u pauzama koje govornik pravi tokom svog izlaganja.</p>\r\n                    <h2 class="center blue">Usmeni, simultani prevod</h2><br>\r\n                    <p>Pri simultanom prevođenju, prevodilac govori istovremeno sa govornikom.</p>\r\n                    <p>Za efikasno vršenje simultanog prevođenja potrebna je posebna oprema (kabina i slušalice za prevodioce i učesnike).</p>                    \r\n                </div>', '1'),
(7, '<div id="article">\r\n                <h1 class="center blue">JEZICI</h1><br>\r\n                	<p>Jezike sa/na koje prevodimo definiše <span class="blue bold">potreba klijenta.</span></p><br>\r\n                    <p>Najtraženiji jezici za prevođenje:</p>\r\n                    <p class="center italic blue bold">Engleski</p>\r\n					<p class="center italic">Grčki</p>\r\n					<p class="center italic">Italijanski</p>\r\n					<p class="center italic">Mađarski</p>\r\n					<p class="center italic blue bold">Nemački</p>\r\n					<p class="center italic blue bold">Ruski</p>\r\n					<p class="center italic blue bold">Slovački</p>\r\n					<p class="center italic">Slovenački</p>\r\n					<p class="center italic">Španski</p><br>\r\n                    <p>Nakon definisanja potreba klijenta, formira se najpodesniji <span class="blue bold">tim prevodilaca</span>, specijalizovanih za da <span class="blue bold">datu industriju</span> i odgovarajuću temu na zahtevanom jeziku.</p>                    \r\n                </div>', '1'),
(8, 'slide_show', '1'),
(9, '<div id="article">\n                <h1 class="center blue">OBUKE</h1><br>\n                	<p>U savremenom poslovnom svetu pored tehničkih znanja potrebno je imati i druge veštine. Ovakve, dodatne veštine obično nazivammo <span class="italic">soft skills.</span></p><br>\n                    <p>U saradnji sa <span class="bold blue">internacionalnom</span> kompanijom DOOR Training and Consulting izdvajamo obuke, gde se stečeno znanje može aplicirati i van radnog mesta.</p><br><br>\n                    <p class="tekst_left"><a class="link_normal" href="index.php?page_id=10">Poslovna korenspodencija</a></p>\n                    <p class="tekst_right"><a class="link_normal" href="index.php?page_id=11">Brzo čitanje</a></p><br><br><br>\n                    <p>Detaljnije o obukama pogledajte na <a class="link_normal" href="http://door-serbia.net/srpski/" target="_blank">www.door-serbia.net/srpski</a></p>\n                </div>', '1'),
(10, '<div id="article">\r\n                <h1 class="center blue">POSLOVNA KORENSPONDENCIJA</h1><br>\r\n                	<p>Ovaj univerzalni trening je potreban svima koji relativno <span class="bold blue">redovno </span>komuniciraju pisanim putem sa klijentima, nadređenima, kolegama, podređenima... sve u svemu – gotovo svim zaposlenima. Sama obuka može – u zavisnosti od potreba konkretnih polaznika – biti više fokusirana na <span class="bold blue">elektronsku</span> ili <span class="bold blue">klasičnu</span> korespondenciju. U svakom slučaju, jedan od ključnih ishoda treninga jeste unapređenje sposobnosti kod polaznika da – u konkretnoj situaciji – procene <span class="bold blue">koji oblik </span>pisane komunikacije je primereniji i <span class="bold blue">da li je</span> ona uopšte primerena.</p>\r\n                    <h2 class="center blue">Ciljevi treninga</h2>\r\n                    <p>Po završetku ovog treninga, učesnici će moći da:</p>\r\n                    <p>&#183;  <span class="bold blue">Strukturalno</span> delotvornije pristupaju pisanju pisama, poruka, izveštaja...<br>&#183;  Bolje procene kada koje <span class="bold blue">stilske</span> i <span class="bold blue">tehničke</span> aspekte pisanja treba da primenjuju<br>\r\n					&#183;  Adekvatnije <span class="bold blue">prilagode</span> standardne principe pisanja <span class="bold blue">jeziku</span> koji koriste</p>\r\n					<h2 class="center blue">Tematska osnova treninga</h2>\r\n                    <p>&#183;  <span class="bold blue">Pravila, standardi i stilske</span> karakteristike kvalitetnog pisanja<br>&#183;  <span class="bold blue">Koraci</span> u planiranju, pisanju i preradi dokumenata<br>&#183;  <span class="bold blue">Specifičnosti</span> različitih oblika dokumenata i imperativ <span class="bold blue">jednostavnosti</span></p><br>\r\n                    <p class="align_right">Trening ima <span class="italic">jednodnevnu</span> i <span class="italic">dvodnevnu</span> varijantu.</p>\r\n                </div>', '1'),
(11, '<div id="article">\r\n                <h1 class="center blue">BRZO ČITANJE</h1><br>\r\n                	<p>Ovaj univerzalni trening pomaže zaposlenima koji su izloženi velikoj količini pisanih informacija da razviju visoki nivo <span class="bold blue">brzine i kvaliteta čitanja</span>, omogućavajući im da – uz pomoć praktičnih metoda – produktivnije <span class="bold blue">organizuju svoje vreme</span> i efikasnije obrade i iskoriste pisane izvore sa kojima su u kontaktu. Ukratko, obuka u brzom čitanju podiže vašu <span class="bold blue">delotvornost</span> u mnogim aspektima svakodnevnog posla.</p>\r\n                    <h2 class="center blue">Ciljevi treninga</h2>\r\n                    <p>Polaznici obuke, pohađanjem treninga i implementacijom praktičnih tehnika i alata u svakodnevnu praksu postižu:</p>\r\n                    <p>&#183; Najmanje <span class="bold blue">dvostruko veću</span> brzinu čitanja odmah po treningu i znatno više kasnije<br>&#183; Drastično povećanje <span class="bold blue">koncentracije i razumevanja</span> pročitanoga<br>&#183; Izraženiju sposobnost <span class="bold blue">odvajanja bitnog</span> od nebitnog pri čitanju<br>&#183; Uvećanje kapaciteta za uočavanje <span class="bold blue">ključnih reči</span> u tekstu</p>\r\n					<h2 class="center blue">Tematska osnova treninga</h2>\r\n                    <p>&#183; <span class="bold blue">Mozak</span> – fenomen i enigma<br>&#183; Fundamentalni <span class="bold blue">principi</span> delotvornog i fleksibilnog čitanja<br>&#183; <span class="bold blue">Tehnike</span> brzog čitanja</p><br>\r\n                    <p class="align_right">Trening ima <span class="italic">jednodnevnu</span> i <span class="italic">dvodnevnu</span> varijantu.</p>\r\n                </div>', '1'),
(12, '<div id="article">\r\n                <h1 class="blue center">STRANICA JE U PRIPREMI</h1>                    \r\n                </div>', '1'),
(13, '<div id="article">\r\n                <h1 class="blue center">STRANICA JE U PRIPREMI</h1>    \r\n                </div>', '1'),
(14, '<div id="article">\r\n                <h1 class="center blue">ZAHTEVI I POTREBE KLIJENTA</h1><br>\r\n                	<p>Na osnovu povratne informacije od klijenata ustanovili smo da je jako važno tačno identifikovati i razumeti <span class="bold">zahtev</span> formiran <span class="bold">na osnovu potrebe.</span></p><br>\r\n                    <p>Nakon tačno definisane potrebe pristupa se izvođenju prevoda.<br>Međutim, klijentu je podjednako važno da se sa njegovom dokumentacijom postupa kao sa <span class="bold">poverljivom</span>, da je prevedenu dobije u <span class="bold">utvrđenom roku</span> i da nadoknada za uslugu bude <span class="bold">primerena.</span></p>\r\n                </div>', '1'),
(15, '<div id="article">\r\n                <h1 class="center blue">POVERLJIVOST INFORMACIJA</h1><br>\r\n                	<p>Vaše informacije i dostavljeni materijal predstavljaju poverljive informacije i podležu obavezi <span class="bold">čuvanja</span> profesionalnih i privatnih <span class="bold">podataka.</span></p><br>\r\n                    <p>Radi zaštite podataka i zadržavanja istog stila, broj prevodilaca je ograničen i unapred definisan <span class="bold">za sve vreme</span> trajanja jednog projekta.</p>\r\n                </div>', '1'),
(16, '<div id="article">\r\n                <h1 class="center blue">NABAVKA I ISPORUKA</h1><br>\r\n                	<p><span class="bold">Rok isporuke</span> zavisi od količine naručenog prevoda i definiše se nakon popisivanja naručene dokumentacije za prevod.</p><br>\r\n                    <p>Izlazimo u sustret <span class="bold">hitnim</span> zahtevima.</p><br>\r\n                    <p>Prevode možete dostavljati i preuzimati lično ili putem pošte, u papirnoj verziji, na kompakt-disku ili drugim elektronskim medijima (uključujući i slanje datoteka i skeniranih dokumenata elektronskom poštom u oba smera).</p>\r\n                </div>', '1'),
(17, '<div id="article">\r\n                <h1 class="center blue">FINANSIJSKI USLOVI</h1><br>\r\n                	<p><span class="bold">Vrednost</span> prevoda je uslovljena vrstom prevoda i jezikom prevoda.</p><br>\r\n                    <p>U <span class="bold">pisanoj</span> formi, <span class="bold">cena</span> prevoda se definiše na osnovu teme, broja stranica (1600 karaktera sa pauzama), potrebnog jezika i angažmana sudskog tumača.</p><br>\r\n                    <p>U <span class="bold">usmenoj</span> formi, <span class="bold">cena</span> prevoda se definiše na osnovu tehnike izvođenja prevoda, kao i na osnovu teme i jezika.</p><br>\r\n                    <p>Cena programa <span class="bold">obuke</span> je uslovljena brojem učesnika u grupi.</p>\r\n                </div>', '1'),
(18, '<div id="article">\r\n                <h1 class="center blue">REFERENCE</h1><br>\r\n                	<p class="bold">Izbor klijenata, koji su angažovali naše prevodioce:</p><br>\r\n                    <p>Agencija za energetiku, Beograd, Republika Srbija<br>Continental Matador Rubber s.r.o.<br>Dečiji kulturni centar, Beograd, Republika Srbija<br>Eustream, Republika Slovačka<br>GGE d.o.o., Beograd, Republika Srbija<br>Golden Begger, Košice, Republika Slovačka<br>Goša, Holding korporacija<br>Harsco Metals Košice, Republika Slovačka<br>HUPRO&reg;, spol. s. r. o.  Republika Slovačka<br>Johnson Controls Automotive d.o.o, Republika Srbija<br>KNAUF Zemun d.o.o., Republika Srbija<br>Koncern Bambi-Banat a.d. Republika Srbija<br>Leoni Wiring Systems Southeast, Prokuplje, Republika Srbija<br>Leoni Wiring Systems, Ilava, Republika Slovačka<br>Light Electric d.o.o.<br>LPT, Piešt’any, Republika Slovačka<br>Ministarstvo ekonomije i regionalnog razvoja, Republika Srbija<br>Ministarstvo energetike i rudarstva, Republika Srbija<br>Ministarstvo poljoprivrede, Republika Slovačka<br>Ministarstvo poljoprivrede, Republika Srbija<br>Nadácia Pontis, Republika Slovačka<br>Nafta a.s. Republika Slovačka<br>Patenting d.o.o.<br>Pontis Foundation, Republika Slovačka<br>Privredna komora, Republika Slovačka<br>Privredna komora, Republika Srbija<br>Profex, Lučenec, Republika Slovačka<br>Simpo Sik, Kuršumlija, Republika Srbija<br>Slovačka ambasada, Beograd, Republika Srbija<br>Slovnaft a.s. , Republika Slovačka<br>SPP Distribucia, Republika Slovačka<br>Statistički zavod, Republika Slovačka<br>Statistički zavod, Republika Srbija<br>Tatravagonka, Subotica, Republika Srbija<br>Torlak, Institut za virusologiju, vakcine i serume<br>Twinning Project: Republika Slovačka, Republika Srbija<br>UNIMED PHARMA s.r.o.<br>ÚRSO, Bratislava, Republika Slovačka</p>\r\n                </div>', '1'),
(19, '<div id="article">\n\n                	<h1 class="blue center">PROJEKTNO PREVOĐENJE</h1>\n                	<p class="bold center">Prevodilačka agencija DOOR <span class="link">Link</span></p><br>\n                    \n                    <form action="./form_process/kontakt_to_email.php" method="post" enctype="multipart/form-data">\n                    <table width="500" border="0" cellspacing="0" cellpadding="5">\n                      <tr>\n                        <td class="tekst_tabela_1"><label for="ime">Vaše ime i prezime:</label></td>\n                        <td><input type="text" name="ime" class="prva_forma" required></td>\n                      </tr>\n                      <tr>\n                        <td class="tekst_tabela_1"><label for="email">Vaša e-mail adresa:</label></td>\n                        <td><input type="text" name="email" class="prva_forma" required></td>\n                      </tr>\n                      <tr>\n                        <td class="tekst_tabela_2"><label for="Tekst">Tekst Vaše poruke:</label></td>\n                        <td><textarea name="tekst" id="textarea" class="prva_forma" required></textarea></td>\n                      </tr>\n                      <tr>\n                        <td>&nbsp;</td>\n                        <td><input class="dugme_1" type="submit" value="Pošalji" required></input><input class="dugme_2" type="reset" value="Obriši"></input></td>\n                      </tr>\n                    </table>\n					</form> \n                    \n                    <p class="align_right">Tel: +381.11.264.23.12<br>Mob: +381.64.193.51.62<br>E-mail: <a href="mailto:ivonadimitrijevic@yahoo.com">ivonadimitrijevic&#64;yahoo.com</a></p>\n                    \n                </div>', '1'),
(20, '<h1 class="blue center">PRIJAVA ZA POSAO</h1>\n                	<p class="bold center">Prevodilačka agencija DOOR <span class="link">Link</span></p><br><br>\n                    \n                    <form action="./form_process/prijava_to_email.php" method="post" enctype="multipart/form-data">\n						<table width="592" border="0" cellspacing="0" cellpadding="5">\n                          <tr>\n                            <td class="td_1"><label for="ime">Ime:</label></td>\n                            <td><input name="ime" type="text" class="prva_forma" required></td>\n                          </tr>\n                          <tr>\n                            <td class="td_1"><label for="prezime">Prezime:</label></td>\n                            <td><input name="prezime" type="text" class="prva_forma" required></td>\n                          </tr>\n                          <tr>\n                            <td class="td_1"><label for="datum">Datum rođenja:</label></td>\n                            <td>\n                            	<select class="prijava" name="mesec" required><option selected></option><option>Januar</option><option>Februar</option><option>Mart</option><option>April</option><option>Maj</option><option>Jun</option><option>Jul</option><option>Avgust</option><option>Septembar</option><option>Oktobar</option><option>Novembar</option><option>Decembar</option>\n                                </select>\n                            	<select class="prijava" name="dan" required><option selected></option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>\n                                </select>\n                                <select class="prijava" name="godina" required><option selected></option><option>1950</option><option>1951</option><option>1952</option><option>1953</option><option>1954</option><option>1955</option><option>1956</option><option>1957</option><option>1958</option><option>1959</option><option>1960</option><option>1961</option><option>1962</option><option>1963</option><option>1964</option><option>1965</option><option>1966</option><option>1967</option><option>1968</option><option>1969</option><option>1970</option><option>1971</option><option>1972</option><option>1973</option><option>1974</option><option>1975</option><option>1976</option><option>1977</option><option>1978</option><option>1979</option><option>1980</option><option>1981</option><option>1982</option><option>1983</option><option>1984</option><option>1985</option><option>1986</option><option>1987</option><option>1988</option><option>1989</option><option>1990</option><option>1991</option><option>1992</option><option>1993</option><option>1994</option><option>1995</option><option>1996</option>                          \n                                </select>                            	\n                            </td>\n                          </tr>\n                          <tr>\n                            <td class="td_1"><label for="mesto">Mesto stalnog boravka:</label></td>\n                            <td><input name="mesto" type="text" class="prva_forma" required></td>\n                          </tr>\n                          <tr>\n                            <td class="td_1"><label for="fikstel">Fiksni telefon:</label></td>\n                            <td><input name="fikstel" type="text" class="prva_forma"></td>\n                          </tr>\n                          <tr>\n                            <td class="td_1"><label for="mobtel">Mobilni telefon:</label></td>\n                            <td><input name="mobtel" type="text" class="prva_forma" required></td>\n                          </tr>\n                          <tr>\n                            <td class="td_1"><label for="email">E-mail adresa:</label></td>\n                            <td><input name="email" type="text" class="prva_forma" required></td>\n                          </tr>\n                          <tr>\n                            <td class="td_1"><label for="znanje">Stečeno zvanje na Filološkom fakultetu:</label></td>\n                            <td><input name="znanje" type="text" class="prva_forma"></td>\n                          </tr>\n                          <tr>\n                            <td class="td_1"><label for="iskustvo_pis">Iskustvo u pisanom prevođenju:*</label></td>\n                            <td><textarea name="iskustvo_pis" id="textarea2" class="prva_forma" required></textarea></td>\n                          </tr>\n                          <tr>\n                            <td class="td_1"><label for="iskustvo_usm">Iskustva u usmenom prevođenju:*</label></td>\n                            <td><textarea name="iskustvo_usm" id="textarea3" class="prva_forma" required></textarea></td>\n                          </tr>\n                          <tr>\n                            <td class="td_1"><label for="cena_pis">Cena pisanog prevoda:</label></td>\n                            <td><input name="cena_pis" type="text" class="prva_forma"></td>\n                          </tr>\n                          <tr>\n                            <td class="td_1"><label for="cena_kon">Cena konsekutivnog prevoda:</label></td>\n                            <td><input name="cena_kon" type="text" class="prva_forma"></td>\n                          </tr>\n                          <tr>\n                            <td class="td_1"><label for="cena_sim">Cena simultanog prevoda:</label></td>\n                            <td><input name="cena_sim" type="text" class="prva_forma"></td>\n                          </tr>\n                          <tr>\n                          	<td>&nbsp;</td>\n                            <td class="table_center">* Navesti naziv klijenta i tematiku</td>\n                          </tr>\n                          <tr>\n                          	<td>&nbsp;</td>\n                            <td>&nbsp;</td>\n                          </tr>\n                          <tr>\n                          	<td class="td_1"><label for="fajl">Biografija na srpskom jeziku (pdf/word):</label></td>\n                            <td><input class="dugme_3" type="file" name="fajl"></td>\n                          </tr>\n                          <tr>\n                          	<td>&nbsp;</td>\n                            <td>&nbsp;</td>\n                          </tr>\n                          <tr>\n                          <td>&nbsp;</td>\n                        	<td><input class="dugme_1" type="submit" value="Pošalji" required></input><input class="dugme_2" type="reset" value="Obriši"></input></td>\n                      	  </tr>\n                        </table>\n					</form>', '1');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `menu_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `nav_status` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `menu_status` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `nav_status`, `menu_status`) VALUES
(1, 'Početna', '0', '1'),
(2, 'O nama', '1', '1'),
(3, 'Usluge', '1', '1'),
(4, 'Prevođenje', '1', '1'),
(5, 'Pisani prevodi', '1', '1'),
(6, 'Usmeni prevodi', '1', '1'),
(7, 'Jezici', '1', '1'),
(8, 'Ilustracija pisanog prevoda', '1', '1'),
(9, 'Obuke', '1', '1'),
(10, 'Poslovna korespondencija', '1', '1'),
(11, 'Brzo čitanje', '1', '1'),
(12, 'Ubrzani engleski', '1', '1'),
(13, 'Link', '0', '1'),
(14, 'Zahtevi i potrebe klijenata', '0', '1'),
(15, 'Poverljivost informacija', '0', '1'),
(16, 'Nabavka i isporuka', '0', '1'),
(17, 'Finansijski uslovi', '0', '1'),
(18, 'Reference', '0', '1'),
(19, 'Kontakt', '1', '1'),
(20, 'Prijava za posao', '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `page_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `photo_id` int(11) DEFAULT NULL,
  `quote_id` int(11) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `content_id` int(11) DEFAULT NULL,
  `page_status` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`page_id`, `photo_id`, `quote_id`, `menu_id`, `content_id`, `page_status`) VALUES
(1, 1, 1, 1, 1, '1'),
(2, 2, 2, 2, 2, '1'),
(3, 14, NULL, 3, 3, '1'),
(4, 11, 3, 4, 4, '1'),
(5, 3, 4, 5, 5, '1'),
(6, 5, 5, 6, 6, '1'),
(7, 4, 6, 7, 7, '1'),
(8, NULL, 7, 8, 8, '1'),
(9, 13, 8, 9, 9, '1'),
(10, 13, 9, 10, 10, '1'),
(11, 13, 10, 11, 11, '1'),
(12, 14, NULL, 12, 12, '1'),
(13, 14, NULL, 13, 13, '1'),
(14, 9, 11, 14, 14, '1'),
(15, 6, 12, 15, 15, '1'),
(16, 7, 13, 16, 16, '1'),
(17, 8, 14, 17, 17, '1'),
(18, 12, 15, 18, 18, '1'),
(19, 10, 16, 19, 19, '1'),
(20, NULL, 17, 20, 20, '1');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `photo_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `photo_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `photo_status` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`photo_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`photo_id`, `photo_name`, `photo_status`) VALUES
(1, '01.jpg', '1'),
(2, '02.jpg', '1'),
(3, '03.jpg', '1'),
(4, '05.jpg', '1'),
(5, '06.jpg', '1'),
(6, '07.jpg', '1'),
(7, '08.jpg', '1'),
(8, '09.jpg', '1'),
(9, '10.jpg', '1'),
(10, '11.jpg', '1'),
(11, '12.jpg', '1'),
(12, '13.jpg', '1'),
(13, '14.jpg', '1'),
(14, 'uc.png', '1');

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE IF NOT EXISTS `quote` (
  `quote_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `quote_content` text COLLATE utf8_unicode_ci NOT NULL,
  `quote_author` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `quote_status` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`quote_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `quote`
--

INSERT INTO `quote` (`quote_id`, `quote_content`, `quote_author`, `quote_status`) VALUES
(1, 'Pokušaj da ne postaneš čovek od uspeha. Radije postani čovek od vrednosti.', 'Albert Einstein', '1'),
(2, 'Možemo da pričamo koliko hoćemo o neadekvatnosti prevoda, međutim ovaj posao jeste i uvek će biti jedan od najznačajnijih i najvrednijih poduhvata u opštim svetskim interesima.', 'J. W. Goethe', '1'),
(3, 'Prevod je ono što sve transformiše tako da se ništa ne promeni.', 'Grass Günter', '1'),
(4, 'Prevod nije samo stvar reči: to je činiti celu kulturu razumljivom.', 'Anthony Burgess', '1'),
(5, 'Sva značenja, koja znamo zavise od ključa tumačenja.', 'George Eliot', '1'),
(6, 'Pisci formiraju nacionalnu književnost dok prevodioci prave univerzalnu književnost.', 'José Saramago', '1'),
(7, 'Prevod je kao žena. Ako je lepa, nije verna. Ako je verna najverovatnije nije lepa.', 'Yevgeny Yevtushenko', '1'),
(8, 'Izgradi ljude i ljudi će izgraditi biznis.', 'Brownie Wise', '1'),
(9, 'Ili zapiši nešto vredno čitanja, ili uradi nešto vredno pisanja.', 'Benjamin Franklin', '1'),
(10, 'Nemojte kupovati knjige za vašu policu, kupujte ih za sebe.', 'Saji Ijiyemi', '1'),
(11, 'U slučajevima nedoumice prednost uvek mora imati liberalnije tumačenje.', 'Marcus Tullius Cicero', '1'),
(12, 'Veliko doba književnosti je možda uvek veliko doba prevoda.', 'Ezra Pound', '1'),
(13, 'Sve ljudsko znanje poprima oblik tumačenja.', 'Walter Benjamin', '1'),
(14, 'Ne prevoditi reč po reč već očuvati opšti stil i snagu jezika.', 'Cicero', '1'),
(15, 'Idealan prevod bi bio onaj koji kad se obrne proizvodi originalan tekst.', 'C. Michaud', '1'),
(16, 'Prevod obično ne stvara velika dela; ali pomaže velikim delima da se stvore.', 'G. Highet', '1'),
(17, 'Zašto ljudi žele da prevode?', 'H. Thursfield', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

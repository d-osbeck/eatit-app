-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1:3306
-- Genereringstid: 17. 12 2021 kl. 00:33:57
-- Serverversion: 5.7.31
-- PHP-version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eatit`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `opskrift`
--

DROP TABLE IF EXISTS `opskrift`;
CREATE TABLE IF NOT EXISTS `opskrift` (
  `opskId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `opskNavn` varchar(100) COLLATE utf16_danish_ci NOT NULL,
  `opskTid` time NOT NULL,
  `opskPortioner` decimal(2,0) NOT NULL,
  `opskKcal` decimal(4,0) NOT NULL,
  `opskAntal` text COLLATE utf16_danish_ci NOT NULL,
  `opskBeskrivelse` text COLLATE utf16_danish_ci NOT NULL,
  `opskRate` decimal(2,0) NOT NULL,
  `opskBillede` varchar(100) COLLATE utf16_danish_ci NOT NULL,
  `opskTidText` text COLLATE utf16_danish_ci NOT NULL,
  PRIMARY KEY (`opskId`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf16 COLLATE=utf16_danish_ci;

--
-- Data dump for tabellen `opskrift`
--

INSERT INTO `opskrift` (`opskId`, `opskNavn`, `opskTid`, `opskPortioner`, `opskKcal`, `opskAntal`, `opskBeskrivelse`, `opskRate`, `opskBillede`, `opskTidText`) VALUES
(3, 'Is', '00:15:00', '4', '700', '<p>2 æggeblommer</p>\r\n<p>2 spsk flormelis</p>\r\n<p>1/2 stang vanilje eller en tsk vaniljesukker</p>\r\n<p>2,5 dl piskefløde</p>\r\n<p>Der kan tilføres smag som lakridspulver, chokolade, frugt, marmelade og meget andet</p>\r\n', '<p>Tag 2 skåle frem:</p>\r\n \r\n<p>Skål 1:\r\nPisk æg, flormelis og vanilje luftig</p>\r\n \r\n<p>Skål 2:\r\nPisk fløden til flødeskum</p>\r\n \r\n<p>Herefter vendes skål 2 i skål 1</p>\r\n \r\n<p>Ønsker man at tilføje smag vendes dette forsigtigt i massen</p> \r\n<p>Massen kommes i en skål i fryseren med at stykke husholdningsfilm henover.</p>\r\n', '4', 'is.webp', '15 min'),
(4, 'Guldkornssmåkager', '00:21:00', '6', '350', '<p>125 g smør</p>\r\n<p>150 g sukker</p>\r\n<p>1 æg</p>\r\n<p>100 g mel</p>\r\n<p>1 tsk bagepulver</p>\r\n<p>1 tsk vanillesukker</p>\r\n<p>3 dl guldkorn</p>\r\n', '<p>Smør, sukker og æg røres sammen</p>\r\n<p>Bland mel, bagepulver og vanille og rør det i dejen</p>\r\n<p>Vend til sidst guldkorn i</p>\r\n<p>Sæt dejen i klatter m. stort mellemrum</p>\r\n<p>Bages i 7 min v. 200 gr</p>\r\n', '5', 'guldkornssmaakage.webp', '21 min'),
(2, 'Banankage', '00:15:00', '4', '300', '<p>3 æg</p>\r\n<p>2 dl sukker</p>\r\n<p>2 tsk vanilje</p>\r\n<p>125g / 2 dl hvedemel</p>\r\n<p>1 tsk bagepulver</p>\r\n<p>2-4 bananer</p>\r\n<p>Margarine til at smøre formen</p>\r\n', '<p>Alle ingredienser røres sammen.</p> \r\n<p>Det hele hældes i en smurt 1L sandkageform.</p>\r\n<p>Bages ved 150gr varmluft el. 175 gr normal ovn</p>', '4', 'banankage.webp', '15 min'),
(1, 'Romkugler', '00:15:00', '6', '450', '<p>300 g kagerester (alle former for kage og også det bløde fra franskbrød, lagkagebunde og lign)</p>\r\n<p>2 spsk romaroma</p>\r\n<p>3 spsk kakaopulver</p>\r\n<p>1 dl. Kokosmel (kan erstattes med chokoladekrymmel eller undlades)</p>\r\n<p>2 spsk hindbærsyltetøj</p>\r\n', '<p>Det hele blandes til en homogen masse.</p> \r\n<p>Er massen for tør, kan der tilsættes lidt mere syltetøj.</p>\r\n<p>Massen trilles til kugler og opbevares i køleskabet i en lufttæt beholder.</p>\r\n', '3', 'romkugler.webp', '15 min'),
(5, 'Bananpandekager', '00:15:00', '4', '450', '<p>2 modne bananer</p>\r\n<p>2 æg</p>\r\n<p>2 spk havregryn</p>\r\n<p>1 tsk kanel (kan undlades)</p>\r\n<p>1 tsk olie eller margarine til stegning</p>\r\n', '<p>Mos bananerne i en skål</p>\r\n<p>Bland æg, havregryn og evt. kanel i og\r\nmos det hele sammen</p>\r\n<p>Varm fedtstoffet på panden og put små klatter af dejen på</p>\r\n \r\n<p>Kan serveres med is, marmelade eller frugt</p>', '4', 'bananpandekager.webp', '15 min'),
(6, 'Spinatpasta', '00:20:00', '4', '500', '<p>1 æg</p>\r\n<p>300 g mel</p>\r\n<p>200 g frisk spinat hakket</p>\r\n<p>7 dl vand</p>\r\n<p>Salt</p>\r\n', '<p>Vandet bringes i kog med lidt salt</p>\r\n<p>Mel, spinat og æg ædles sammen</p>\r\n<p>Dejen rulles ud til bønner</p>\r\n<p>Koges i vandet i få minutter</p>\r\n \r\n<p>Kan serveres med kødsauce eller grøntsager stegt på panden</p>', '4', 'placeholderopskrift.png', '20 min'),
(7, 'Kartoffelsalat', '00:10:00', '4', '500', '<p>Kogte kartofler (ca. 2 kg)</p>\r\n<p>250 ml cremefraiche</p>\r\n<p>½ bøtte sød fransk sennep</p>\r\n<p>2 løg</p>\r\n<p>Salt</p>\r\n', '<p>Creme fraiché, sennep og løg blandes</p> \r\n<p>Kartoflerne skæres i skiver og blandes i</p>\r\n \r\n<p>Kan tilføres fx ærter, tomater som pynt el. purløg</p>\r\n \r\n<p>Kan serveres til fx frikadeller, skinke mm.</p>', '3', 'placeholderopskrift.png', '10 min'),
(8, 'Champignonsuppe', '00:15:00', '4', '650', '<p>500 g friske champignoner</p>\r\n<p>1 skalotteløg</p>\r\n<p>30 g. smør</p>\r\n<p>1 l hønsebouillon</p>\r\n<p>2 dl fløde</p>\r\n<p>Salt og peber</p>', '<p>Champignon skæres ud, løget hakkes</p>\r\n<p>Smøret smeltes, løget svitses. Løget må ikke tage farve</p>\r\n<p>Drys mel henover og bag det sammen</p>\r\n<p>Tilsæt roligt bouillonen under omrøring</p>\r\n<p>Tilsæt champignon og lad dem koge 5 min</p>\r\n<p>Tilsæt fløde og varm op til kogepunktet</p>\r\n \r\n<p>Smages til med salt og peber</p>\r\n \r\n<p>Kan spises med flûtes</p>', '4', 'placeholderopskrift.png', '15 min'),
(9, 'Jordskokkesuppe', '01:20:00', '4', '550', '<p>600g jordskokker</p>\r\n<p>500g kartofler</p>\r\n<p>4 spsk olivenolie</p>\r\n<p>16 dl hønsebouillon (16 dl vand + 2-3 bouillonterninger eller fond fra kogt høne)</p>\r\n<p>2 tsk muskat</p>\r\n<p>5 dl fløde</p>\r\n<p>4 spsk citronsaft</p>\r\n<p>Salt og peber</p>\r\n', '<p>Kartofler og jordskokker skrælles og skæres i tern</p> \r\n<p>Alle ingredienser blandes i gryden</p> \r\n<p>Der skrues ned for varmen når det koger og lad det simre i ca. 1 time</p>\r\n<p>Herefter blendes massen helt blød og smages til med salt og peber</p>\r\n\r\n<p>Kan serveres med brød, flûtes eller lign</p>', '5', 'placeholderopskrift.png', '1 t 15 min'),
(10, 'Gulerodssuppe', '00:40:00', '6', '450', '<p>750 g kartofler skåret i grove tern</p>\r\n<p>500 g gulerødder</p>\r\n<p>2 løg i tern</p>\r\n<p>25 g smør</p>\r\n<p>2 hønsebouillonterninger</p>\r\n<p>1,5 l kogende vand</p>\r\n<p>1,5 dl fløde</p>\r\n<p>½ spsk hvidløgspeber el. alm peber</p>\r\n<p>Smages til med salt</p>\r\n<p>Sprødstegt bacon kan tilføjes hvis det ønskes</p>', '<p>Skræl gulerødder og kartofler</p>\r\n<p>Svits løgene i smørret</p>\r\n<p>Tilsæt bouillonterninger, kartofler og gulerødder</p>\r\n<p>Lad det hele blive godt sprødstegt, så det giver en dejlig smag til suppen</p>\r\n<p>Tilsæt det kogende vand og lad det koge 20-25 min under låg</p>\r\n<p>Blend suppen med en stavblender</p>\r\n<p>Tilsæt fløde og smag til med salt og peber</p>', '4', 'placeholderopskrift.png', '40 min'),
(11, 'Biksemad', '00:15:00', '4', '450', '<p>Ca.1 kg Kartofler</p>\r\n<p>1 finthakket løg</p>\r\n<p>300 g Kødrester</p>\r\n<p>Æg (hvis spejlæg ønskes)</p>\r\n<p>Margarine til at stege i</p>', '<p>Kartoflerne kan skæres i skiver og råsteges eller en rest kogte kartofler skæres i stykker og svitses med løg og kødrester på panden</p>\r\n<p>Put margarine, gerne flydende på den varme pande, tilføj løg. Brun dem let af, men de må ikke brankes</p> \r\n<p>Tilfør kartoflerne og til sidst kødet</p>\r\n<p>Kan serveres med et spejlæg, Hp sauce, ketchup, rugbrød el. rødbede</p>', '5', 'placeholderopskrift.png', '15 min'),
(12, 'Omelet', '00:15:00', '2', '350', '<p>2 æg</p>\r\n<p>2 spsk fløde el. Mælk</p>\r\n<p>1 spsk finthakket løg (kan undlades)</p>\r\n<p>1 spsk revet ost (eller feta)</p>\r\n<p>Salt og peber</p>\r\n<p>Margarine</p>', '<p>Pisk æg og fløde luftigt med et piskeris</p>\r\n<p>Tilsæt ost og løg</p>\r\n<p>Smelt margarine på en varm pande</p>\r\n<p>Hæld massen på panden, og lad det simre til den er fast</p>\r\n<p>Kan pyntes med tomat, bacon, purløg og spises til fx rugbrød</p>', '4', 'placeholderopskrift.png', '15 min'),
(13, 'Marmelade', '00:15:00', '4', '600', '<p>1 kg frugt</p>\r\n<p>300g sukker</p>\r\n<p>3 tsk rød melamin</p>\r\n<p>1-2 tsk vanillesukker</p>\r\n<p>Atamon</p>\r\n<p>Syltetøjsglas</p>\r\n', '<p>Skær frugten i mindre stykker og kog dem med sukkeret (tilfør evt. 1-2 tsk vanilje)</p> \r\n<p>Lade det koge ind</p>\r\n<p>Tilfør melatin</p>\r\n<p>Skold glassene i kogende vand og skold dem i Atamon</p>\r\n \r\n<p>Hæld marmeladen på glas og sæt låget på mens marmeladen stadig er varm.</p>\r\n<p>Opbevares køligt</p>\r\n', '4', 'placeholderopskrift.png', '15 min'),
(14, 'Kartoffelporresuppe', '00:15:00', '4', '500', '<p>25g smør</p>\r\n<p>1 finthakket løg</p>\r\n<p>1/5 kg kartofler</p>\r\n<p>400g porrer</p>\r\n<p>1 l grøntsagsbouillon</p>\r\n<p>1 dl fløde</p>\r\n<p>Salt</p>\r\n<p>Pber</p>\r\n<p>Brøndkarse</p>\r\n<p>Brød</p>\r\n<p>Bacon</p>\r\n', '<p>Skræld kartoflerne og skær dem i tern</p>\r\n<p>Svits dem sammen med løg i ca. 2 min, tilsæt porrer og svits 1 minut mere</p>\r\n<p>Hæld bouillon ved og lad suppen koge i ca. 15 min, til grøntsagerne er møre.</p>\r\n<p>Blend suppen til den er jævn</p>\r\n<p>Tilfør fløde, salt og peber og bring suppen i kog</p>\r\n<p>Kan serveres med bacon, ristet brød og frisk brøndkarse</p>', '5', 'kartoffelsuppe.webp', '15 min'),
(15, 'Klatkager', '00:15:00', '6', '450', '<p>500g risengrød eller risalamande</p>\r\n<p>2 spsk hvedemel</p>\r\n<p>2 spsk sødmælk</p>\r\n<p>2 æg</p>\r\n<p>1 tsk vanilje</p>\r\n<p>50 g smør</p>\r\n', '<p>Melet røres i risengrøden</p>\r\n<p>Æggene piskes sammen</p>\r\n<p>Mælk tilsættes langsomt, til konsistensen er som en lidt tyk havregrød</p>\r\n<p>Dejen smages til med vanilje og sukker, evt. kardemomme, citronskal eller muskat</p>\r\n<p>Serveres med fx flormelis, frugt el. syltetøj</p>\r\n', '5', 'klatkager.webp', '15 min'),
(16, 'Æggekage', '00:30:00', '4', '350', '<p>5 æg</p>\r\n<p>1 dl mælk</p>\r\n<p>1,5 tsk majsstivelse (maizena)</p>\r\n<p>4 skiver bacon (valgfri)</p>\r\n<p>1 pølse (valgfri)</p>\r\n<p>4 cherrytomater eller 1 bøftomat</p>\r\n<p>Purløg</p>\r\n<p>Muskatnød</p>\r\n<p>Salt</p>\r\n<p>Peber</p>\r\n', '<p>Slå æggene ud i en skål og pisk dem let sammen</p>\r\n<p>Rør maizenaen ud i mælken</p>\r\n<p>Pisk det sammen med æggemassen</p>\r\n<p>Pisk godt og tilfør derefter salt og peber og evt. muskatnød</p>\r\n<p>Steg bacon på panden, rist pølserne forsigtigt og tag begge dele af panden</p> \r\n<p>Pølsen skæres i mindre skiver</p>\r\n<p>Hæld æggemassen i panden med baconfedtet eller smelt lidt margarine. Lad det stivne langsomt</p> \r\n<p>Undlad at røre i det, ryst i stedet panden forsigtigt</p>\r\n<p>Når æggekagen er ved at være fin, kommer du pølser, bacon, tomater og evt. hakket purløg på</p>\r\n<p>Kan serveres med brød</p>\r\n', '4', 'eaggekage.webp', '30 min'),
(17, 'Fond', '02:30:00', '1', '500', '<p>1 l vand</p>\r\n<p>Grøntsager (fx. Gulerodsender og skræller, bløde kartofler, kålstokke, løg, overmodne tomater, toppen fra porre, enderne fra auberginer og squash, rester af knoldselleri, rodfrugtersskræller og -ender)</p>\r\n<p>1 tørret chili (valgfri)</p>\r\n<p>4 laurbærblade</p>\r\n<p>2 fed hvidløg</p>\r\n<p>1 tsk timian</p>\r\n<p>Friske krydderurter (valgfri)</p>\r\n<p>salt</p>\r\n', '<p>Skyl alle grøntsager godt og skær dem i mindre stykker</p>\r\n<p>Kom dem i en gryde og hæld vandet ved (det skal kun lige dække, så juster vandmængden derefter)</p>\r\n<p>Bring det hele i kog og kom derefter peberkorn, hvidløg og laurbærblade ved</p>\r\n<p>Skru ned og lad det simre i en time</p>\r\n<p>Kom chili og timian i gryden, lad det simre videre i en time</p>\r\n<p>Si grøntsagerne fra fonden, hæld fonden tilbage i gryden og lad det simre færdigt i ca. ½ time</p>\r\n<p>Kan derefter hældes i et par fryseposer og frysens ned, hvis det ikke skal bruges indenfor de næste par dage</p>\r\n', '3', 'placeholderopskrift.png', '2 t 30 min'),
(18, 'Brasede kartofler', '00:20:00', '4', '450', '<p>2-3 kartofler el. 1 bagekartoffel (kogte)</p>\r\n<p>1 spsk smør</p>\r\n<p>1 spsk olivenolie</p>\r\n<p>Salt og peber</p>\r\n', '<p>Skær kartoflerne i både eller skiver i mundrette stykker</p>\r\n<p>Smelt smørret på panden og steg kartoflerne i 8-10 min.\r\nRør ikke for meget i dem undervejs</p>\r\n<p>Når de er lækre sprøde giver du dem lidt salt og de er klar til servering</p>\r\n<p>Kan serveres med rugbrød, rester af kød, kødsovs og spejlæg</p>\r\n', '5', 'brasedekartofler.webp', '20 min'),
(19, 'Sammenkogt ret', '00:45:00', '6', '550', '<p>350g kød (svinekød i tern, cocktailpølser, oksekød i tern, gullashkød, bacon, kylling i tern eller lign.)</p>\r\n<p>1 finthakket løg</p>\r\n<p>1/2 dl fløde</p>\r\n<p>1 dåse flåede, hakkede tomater el. 3 tomater i tern</p>\r\n<p>2 spsk hvedemel</p>\r\n<p>Margarine til stegning</p>\r\n<p>Salt</p>\r\n<p>Paprika</p>', '<p>Til sammenkogt ret kan du bruge stort set alle kødrester du har liggende i dit køleskab eller fryser</p>\r\n<p>Løget svitses i margarine med en lille smule paprika</p>\r\n<p>Kødet vendes i melet og svitses sammen med løget</p>\r\n<p>De hakkede tomater og fløden tilsættes, lad det simre under låg i ca. ½ time</p>\r\n<p>Kan serveres med kartoffelmos, pasta, ris eller rugbrød</p>', '4', 'placeholderopskrift.png', '45 min'),
(20, 'Spaghettilasagne', '00:50:00', '6', '500', '<p>500g oksekød</p>\r\n<p>1 løg</p>\r\n<p>2 revne gulerødder (valgfri)</p>\r\n<p>1 ds hakkede tomater</p>\r\n<p>Hvidløg</p>\r\n<p>Revet ost</p>\r\n<p>½ l. fløde</p>\r\n<p>300g ukogt pasta</p>\r\n<p>olivenolie</p>', '<p>Løget brunes i en gryde</p> <p>Oksekødet tilsættes og brunes af</p>\r\n<p>Tomaterne og gulerødder tilsættes og 2 fed hvidløg presses i</p>\r\n<p>Pastaen koges i vand med en smule olie og salt</p>\r\n<p>Pastaen hældes i et ovnfast fad og fløden hældes ved</p>\r\n<p>Kødsovsen hældes over pastaen, uden at blande det</p>\r\n</p> Revet ost drysses over</p>\r\n<p>Sættes i ovnen på 220 gr. I ca. 35 min</p>\r\n<p>Kan spises med råkost, salat og flûtes</p>', '4', 'placeholderopskrift.png', '50 min');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

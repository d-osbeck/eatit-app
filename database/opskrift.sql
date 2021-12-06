-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1:3306
-- Genereringstid: 06. 12 2021 kl. 08:15:04
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
  `opskBillede` varchar(100) COLLATE utf16_danish_ci DEFAULT NULL,
  PRIMARY KEY (`opskId`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf16 COLLATE=utf16_danish_ci;

--
-- Data dump for tabellen `opskrift`
--

INSERT INTO `opskrift` (`opskId`, `opskNavn`, `opskTid`, `opskPortioner`, `opskKcal`, `opskAntal`, `opskBeskrivelse`, `opskRate`, `opskBillede`) VALUES
(3, 'Is', '00:15:00', '4', '700', '2 stk æggeblommer\r\n2 spsk flormelis\r\n1/2 stang vanilje\r\n2,5 dl piskefløde\r\n(man kan tilføre smag som lakridspulver, chokolade, frugt, marmelade og meget andet)\r\n', 'Tag 2 skåle frem:\r\n \r\nSkål 1:\r\nPisk æg, flormelis og vanilje luftig\r\n \r\nSkål 2:\r\nPisk fløden til flødeskum\r\n \r\nHerefter vendes skål 2 i skål 1, ønsker man at tilføje smag, vendes dette forsigtigt i) massen puttes i en skål i fryseren med at stykke husholdningsfilm henover.\r\n', '4', '0'),
(4, 'Guldkornssmåkager', '00:21:00', '6', '350', '125 g smør\r\n150 g sukker\r\n1 æg\r\n100 g mel\r\n1 tsk bagepulver\r\n1 tsk vanillesukker\r\n3 dl guldkorn\r\n', 'Smør, sukker og æg røres sammen.\r\nBland mel, bagepulver og vanille og rør det i dejen.\r\nVend til sidst guldkorn i.\r\nSæt dejen i klatter m. stort mellemrum.\r\n \r\nBages i 7 min v. 200 gr\r\n', '5', '0'),
(2, 'Banankage', '00:15:00', '4', '300', '3 æg\r\n2 dl sukker\r\n2 tsk vanilje\r\n125g / 2 dl hvedemel\r\n1 tsk bagepulver\r\n2-4 bananer\r\nMargarine til at smøre formen\r\n', 'Alle ingredienser røres sammen, hældes i en smurt 1l sandkageform og bages ved 150gr varmluft el. 175 gr normal ovn', '4', '0'),
(1, 'Romkugler', '00:15:00', '6', '450', '300 g kagerester (alle former for kage og også det bløde fra franskbrød, lagkagebunde og lign)\r\n2 spsk romaroma\r\n3 spsk kakaopulver\r\n1 dl. Kokosmel (kan erstattes med chokoladekrymmel eller undlades)\r\n2 spsk hindbærsyltetøj\r\n', 'Det hele blandes til en homogen masse og er den for tør, kan der spædes lidt op med syltetøjet.\r\n \r\nRulles til kugler og opbevares i køleskabet i en lufttæt beholder.\r\n', '3', '0'),
(5, 'Bananpandekager', '00:15:00', '4', '450', '2 modne bananer\r\n2 æg\r\n2 spk havregryn\r\n1 tsk kanel (kan undlades)\r\n1 tsk olie eller margarine til stegning\r\n', 'Mos bananerne i en en skål\r\nBland æg, havregryn og evt. kanel i\r\nMos det hele sammen\r\nVarm fedtstoffet på panden og put små klatter af dejen på\r\n \r\nKan serveres med is, marmelade eller frugt', '4', '0'),
(6, 'Spinatpasta', '00:20:00', '4', '500', '300 g mel\r\n200 g frisk spinat\r\n7 dl vand\r\nSalt\r\n', 'Vandet bringes i kog med lidt salt.\r\nRulles ud til bønner.\r\nKoges i vandet i få minutter.\r\n \r\nKan serveres med kødsauce eller grøntsager stegt på panden', '4', '0'),
(7, 'Kartoffelsalat', '00:10:00', '4', '500', 'Kogte kartofler (ca. 2 kg)\r\n250 ml creme fraiché\r\n½ bøtte sød fransk sennep\r\n2 løg\r\nSalt\r\n', 'Creme fraiché, sennep, løg blandes, Kartoflerne skæres i skiver og blandes i.\r\n \r\nKan tilføres fx ærter, tomater som pynt el. purløg\r\n \r\nKan serveres til fx frikadeller, skinke mm.', '3', '0'),
(8, 'Champignonsuppe', '00:15:00', '4', '650', '500 g friske champignoner\r\n1 skalotteløg\r\n30 g. smør\r\n1 l hønsebouillon\r\n2 dl fløde\r\nSalt og peber', 'Champignon skæres ud, løget hakkes.\r\nSmøret smeltes, løget svitses. Løget må ikke tage farve.\r\nDrys mel henover og bag det sammen.\r\nTilsæt roligt bouillonen under omrøring.\r\nTilsæt champignon og lad dem koge 5 min.\r\nTilsæt fløde og varm op til kogepunktet.\r\n \r\nSmages til med salt og peber\r\n \r\nKan spises med flûtes', '4', '0'),
(9, 'Jordskokkesuppe', '01:20:00', '4', '550', '600g jordskokker\r\n500g kartofler\r\n4 spsk olivenolie\r\n16 dl hønsebouillon (16 dl vand + 2-3 bouillonterninger eller fond fra kogt høne)\r\n2 tsk muskat\r\n5 dl. Fløde\r\n4 spsk citronsaft\r\nSalt og peber\r\n', 'Kartofler og jordskokker skrælles og skæres i tern. Alle ingredienser blandes i gryden. Der skrues ned for varmen når det koger og lad det simre i ca. 1 time. Herefter blendes massen helt blød og smages til med salt og peber.\r\n\r\nKan serveres med brød, flûtes eller lign.', '5', '0'),
(10, 'Gulerodssuppe', '00:40:00', '6', '450', '750 g kartofler skåret i grove tern\r\n500 g gulerødder\r\n2 løg i tern\r\n25 g smør\r\n2 hønsebouillonterninger\r\n1,5 l kogende vand\r\n1,5 dl fløde\r\n½ spsk hvidløgspeber el. alm peber\r\nSmages til med salt\r\nSprødstegt bacon kan tilføjes hvis det ønskes', 'Skræl gulerødder og kartofler\r\nSvits løgene i smørret\r\nTilsæt bouillonterninger, kartofler og gulerødder.\r\nLad det hele blive godt sprødstegt, så det giver en dejlig smag til suppen\r\nTilsæt det kogende vand og lad det koge 20-25 min under låg\r\nBlend suppen med en stavblender.\r\nTilsæt fløde og smag til med salt og peber', '4', '0'),
(11, 'Biksemad', '00:15:00', '4', '450', 'Ca.1 kg Kartofler\r\n1 finthakket løg\r\n300 g Kødrester\r\nÆg (hvis spejlæg ønskes)\r\nMargarine til at stege i', 'Kartoflerne kan skæres i skiver og råsteges eller en rest kogte kartofler skæres i stykker og svitses med løg og kødrester på panden.\r\nPut margarine, gerne flydende på den varme pande, tilføj løg. Brun dem let af, men de må ikke brankes. Tilfør kartoflerne og til sidst kødet.\r\nKan serveres med et spejlæg, Hp sauce, ketchup, rugbrød el. rødbede.', '5', NULL),
(12, 'Omelet', '00:15:00', '2', '350', '2 æg\r\n2 spsk fløde el. Mælk\r\n1 spsk finthakket løg (kan undlades)\r\n1 spsk revet ost (eller feta)\r\nSalt og peber\r\nMargarine', 'Pisk æg og fløde luftigt med et piskeris\r\nTilsæt ost og løg\r\nSmelt margarine på en varm pande\r\nKan pyntes med tomat, bacon, purløg og spises til fx rugbrød', '4', NULL),
(13, 'Marmelade', '00:15:00', '4', '600', '1 kg frugt\r\n300g sukker\r\n3 tsk rød melamin\r\n1-2 tsk vanillesukker\r\nAtamon\r\nSyltetøjsglas\r\n', 'Skær frugten i mindre stykker og kog dem med sukkeret (tilfør evt. 1-2 tsk vanilje) lade det koge ind tilfør melatin.\r\nSkold glassene i kogende vand og skuld dem i Atamon.\r\n \r\nHæld marmeladen på glas og sæt låget på mens marmeladen stadig er varm. Opbevares køligt.\r\n', '4', NULL),
(14, 'Kartoffelsuppe', '00:15:00', '4', '500', '25g smør\r\n 1 finthakket løg\r\n1/5 kg kartofler\r\n400g porrer\r\n1 l grøntsagsbouillon\r\n1 dl fløde\r\nsalt\r\npeber\r\nbrøndkarse\r\nbrød\r\nbacon\r\n', 'Skræld kartoflerne og skær dem i tern\r\nSvits dem sammen med løg i ca. 2 min, tilsæt porrer og svits 1 minut mere.\r\nHæld bouillon ved og lad suppen koge i ca. 15 min, til grøntsagerne er møre\r\nBlend suppen til den er jævn\r\nTilfør fløde, salt og peber og bring suppen i kog.\r\n \r\nKan serveres med bacon, ristet brød og frisk brøndkarse\r\n', '5', NULL),
(15, 'Klatkager', '00:15:00', '6', '450', '500g risengrød eller risalamande\r\n2 spsk hvedemel\r\n2 spsk sødmælk\r\n2 æg\r\n1 tsk vanilje\r\n50 g smør\r\n', 'Melet røres i risengrøden.\r\nÆggene piskes sammen\r\nMælk tilsættes langsomt, til konsistensen er som en lidt tyk havregrød.\r\nDejen smages til med vanilje og sukker, evt. kardemomme, citronskal eller muskat\r\n \r\nServeres med fx flormelis, frugt el. syltetøj\r\n', '5', NULL),
(16, 'Æggekage', '00:30:00', '4', '350', '5 æg\r\n1 dl mælk\r\n1,5 tsk majsstivelse (maizena)\r\n4 skiver bacon (valgfri)\r\n1 pølse (valgfri)\r\n4 cherrytomater eller 1 bøftomat\r\nPurløg\r\nMuskatnød\r\nSalt\r\nPeber\r\n', 'Slå æggene ud i en skål og pisk dem let sammen\r\nRør maizenaen ud i mælken\r\nPisk det sammen med æggemassen\r\nPisk godt og tilfør derefter salt og peber og evt. muskatnød.\r\nSteg bacon på panden, rist pølserne forsigtigt og tag begge dele af panden. Pølsen skæres i mindre skiver\r\nHæld æggemassen i panden med baconfedtet eller smelt lidt margarine. Lad det stivne langsomt. Undlad at røre i det, ryst i stedet panden forsigtigt.\r\nNår æggekagen er ved at være fin, kommer du pølser, bacon, tomater og evt. hakket purløg på.\r\n \r\nKan serveres med brød\r\n', '4', NULL),
(17, 'Fond', '02:30:00', '1', '500', '1 l vand\r\nGrøntsager (fx. Gulerodsender og skræller, bløde kartofler, kålstokke, løg, overmodne tomater, toppen fra porre, enderne fra auberginer og squash, rester af knoldselleri, rodfrugtersskræller og -ender)\r\n1 tørret chili (valgfri)\r\n4 laurbærblade\r\n2 fed hvidløg\r\n1 tsk timian\r\nFriske krydderurter (valgfri)\r\nsalt\r\n', 'Skyl alle grøntsager godt og skær dem i mindre stykker\r\nKom dem i en gryde og hæld vandet ved (det skal kun lige dække, så juster vandmængden derefter)\r\nBring det hele i kog og kom derefter peberkorn, hvidløg og laurbærblade ved.\r\nSkru ned og lad det simre i en time\r\nKom chili og timian i gryden, lad det simre videre i en time.\r\nSi grøntsagerne fra fonden, hæld fonden tilbage i gryden og lad det simre færdigt i ca. ½ time.\r\nKan derefter hældes i et par fryseposer og frysens ned, hvis det ikke skal bruges indenfor de næste par dage.\r\n', '3', NULL),
(18, 'Brasede kartofler', '00:20:00', '4', '450', '2-3 kartofler el. 1 bagekartoffel (kogte)\r\n1 spsk smør\r\n1 spsk olivenolie\r\nSalt og peber\r\n', 'Skær kartoflerne i både eller skiver i mundrette stykker\r\nSmelt smørret på panden og steg kartoflerne i 8-10 min.\r\nRør ikke for meget i dem under vejs\r\n \r\nNår de er lækre sprøde giver du dem lidt salt og de er klar til servering.\r\nKan serveres med rugbrød, rester af kød, kødsovs og spejlæg\r\n', '5', NULL),
(19, 'Sammekogt ret', '00:45:00', '6', '550', '350g kød (svinekød i tern, cocktailpølser, oksekød i tern, gullashkød, bacon, kylling i tern eller lign.)\r\n1 finthakket løg\r\n1/2 dl fløde\r\n1 dåse flåede, hakkede tomater el. 3 tomater i tern\r\n2 spsk hvedemel\r\nMargarine til stegning\r\nSalt\r\nPaprika', 'Til sammenkogt ret kan du bruge stort set alle kødrester du måtte have liggende i dit køleskab eller i fryseren.\r\nLøget svitses i margarine med en lille smule paprika\r\nKødet vendes i melet og svitses sammen med løget.\r\nDe hakkede tomater og fløden tilsættes, lad det simre under låg i ca. ½ time.\r\n \r\nKan serveres med kartoffelmos, pasta, ris eller rugbrød', '4', NULL),
(20, 'Spaghettilasagne', '00:50:00', '6', '500', '500g oksekød\r\n1 løg\r\n2 revne gulerødder (valgfri)\r\n1 ds hakkede tomater\r\nHvidløg\r\nRevet ost\r\n½ l. fløde\r\n300g ukogt pasta\r\nolivenolie', 'Løget brunes i en gryde, oksekødet tilsættes og brunes af.\r\nTomaterne og gulerødder tilsættes og 2 fed hvidløg presses i.\r\nPastaen koges i vand med en smule olie og salt.\r\nDet hældes i et ovnfast fad og fløden hældes ved.\r\nKødsovsen hældes over og der drysses revet ost over .\r\n \r\nSættes i ovnen på 220 gr. I ca. 35 min\r\n\r\nKan spises med råkost, salat og flutes.', '4', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

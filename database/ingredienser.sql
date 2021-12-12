-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1:3306
-- Genereringstid: 12. 12 2021 kl. 21:35:23
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
-- Struktur-dump for tabellen `ingredienser`
--

DROP TABLE IF EXISTS `ingredienser`;
CREATE TABLE IF NOT EXISTS `ingredienser` (
  `ingrId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ingrNavn` varchar(100) COLLATE utf16_danish_ci NOT NULL,
  PRIMARY KEY (`ingrId`)
) ENGINE=MyISAM AUTO_INCREMENT=139 DEFAULT CHARSET=utf16 COLLATE=utf16_danish_ci;

--
-- Data dump for tabellen `ingredienser`
--

INSERT INTO `ingredienser` (`ingrId`, `ingrNavn`) VALUES
(15, 'Kaffefløde'),
(14, 'Hvidløgspeber'),
(13, 'Peber'),
(12, 'Salt'),
(11, 'Bacon'),
(10, 'Kalkunbacon'),
(16, 'Piskefløde'),
(17, 'Fløde'),
(18, 'Vand'),
(19, 'Bouillon'),
(20, 'Hønsebouillon'),
(76, 'Steg'),
(23, 'Gulerødder'),
(24, 'Kartofler'),
(133, 'Gullashkød'),
(26, 'Brød'),
(27, 'Rodfrugter'),
(28, 'Bouillonterninger'),
(29, 'Citronsaft'),
(30, 'Muskat'),
(31, 'Olivenolie'),
(32, 'Olie'),
(33, 'Jordskokker'),
(34, 'Flute'),
(35, 'Smør'),
(36, 'Skalotteløg'),
(37, 'Champignon'),
(38, 'Skinke'),
(39, 'Frikadeller'),
(40, 'Purløg'),
(41, 'Tomat'),
(42, 'Ærter'),
(43, 'Løg'),
(44, 'Fransk Sennep'),
(45, 'Creme Fraiche'),
(46, 'Spinat'),
(47, 'Bønner'),
(48, 'Gulerod'),
(49, 'Kødsovs'),
(50, 'Mel'),
(51, 'Bær'),
(134, 'Svinekød'),
(53, 'Is'),
(54, 'Frugt'),
(55, 'Margarine'),
(56, 'Kanel'),
(57, 'Havregryn'),
(58, 'Æg'),
(59, 'Banan'),
(60, 'Hindbærsyltetøj'),
(61, 'Kokosmel'),
(62, 'Kakaopulver'),
(63, 'Romaroma'),
(64, 'Kagerester'),
(65, 'Sukker'),
(66, 'Bagepulver'),
(67, 'Vanillesukker'),
(68, 'Guldkorn'),
(69, 'Marmelade'),
(70, 'Chokolade'),
(71, 'Syltetøj'),
(72, 'Lakridspulver'),
(73, 'Vanilje'),
(74, 'Flormelis'),
(75, 'Hvedemel'),
(78, 'Rugbrød'),
(79, 'Kødsauce'),
(80, 'Kødrester'),
(81, 'Krydderuter'),
(82, 'Hvidløg'),
(83, 'Laurbærblade'),
(84, 'Chili'),
(132, 'Hakkede tomater'),
(86, 'Knoldselleri'),
(87, 'Porre'),
(88, 'Squash'),
(89, 'Aubergine'),
(90, 'Kålstok'),
(91, 'Kål'),
(92, 'Muskatnød'),
(93, 'Bøftomat'),
(94, 'Cherrytomat'),
(95, 'Pølse'),
(96, 'Maizena'),
(97, 'Majsstivelse'),
(98, 'Mælk'),
(130, 'Salat'),
(131, 'Pasta'),
(102, 'Citronskål'),
(103, 'Risengrød'),
(104, 'Kardemomme'),
(105, 'Risalamande'),
(106, 'Grød'),
(107, 'Sødmælk'),
(108, 'Brøndkarse'),
(109, 'Boysenbær'),
(110, 'Blommer'),
(111, 'Pære'),
(112, 'Æble'),
(113, 'Hindbær'),
(114, 'Solbær'),
(115, 'Kirsebær'),
(116, 'Ribs'),
(117, 'Stikkelsbær'),
(118, 'Jordbær'),
(120, 'Mandarin'),
(121, 'Appelsin'),
(122, 'Brombær'),
(123, 'Ost'),
(125, 'Oksesteg'),
(126, 'Flæskesteg'),
(127, 'Hp sauce'),
(128, 'Ketchup'),
(129, 'Rødbeder'),
(135, 'Kylling'),
(136, 'Paprika'),
(137, 'Cocktailpølser'),
(138, 'Ris');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1:3306
-- Genereringstid: 12. 12 2021 kl. 21:35:35
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
-- Struktur-dump for tabellen `opskrift_ingredienser_con`
--

DROP TABLE IF EXISTS `opskrift_ingredienser_con`;
CREATE TABLE IF NOT EXISTS `opskrift_ingredienser_con` (
  `conId` int(10) NOT NULL AUTO_INCREMENT,
  `conOpskId` int(10) NOT NULL,
  `conIngrId` int(10) NOT NULL,
  PRIMARY KEY (`conId`)
) ENGINE=MyISAM AUTO_INCREMENT=403 DEFAULT CHARSET=utf16 COLLATE=utf16_danish_ci;

--
-- Data dump for tabellen `opskrift_ingredienser_con`
--

INSERT INTO `opskrift_ingredienser_con` (`conId`, `conOpskId`, `conIngrId`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 58),
(4, 2, 65),
(5, 2, 73),
(6, 2, 75),
(7, 2, 66),
(8, 2, 59),
(9, 2, 55),
(10, 3, 58),
(11, 3, 74),
(12, 3, 73),
(13, 3, 17),
(14, 3, 16),
(15, 3, 72),
(16, 3, 54),
(17, 3, 71),
(18, 3, 59),
(19, 3, 70),
(20, 3, 54),
(21, 3, 69),
(22, 4, 35),
(23, 4, 65),
(24, 4, 58),
(25, 4, 50),
(26, 4, 66),
(27, 4, 67),
(28, 4, 68),
(29, 1, 64),
(30, 1, 63),
(31, 1, 62),
(32, 1, 61),
(33, 1, 60),
(34, 5, 59),
(35, 5, 58),
(36, 5, 57),
(37, 5, 56),
(38, 5, 55),
(39, 5, 54),
(40, 5, 53),
(41, 5, 69),
(42, 5, 51),
(43, 6, 50),
(44, 6, 46),
(45, 6, 18),
(46, 6, 12),
(47, 6, 49),
(48, 6, 48),
(49, 6, 47),
(50, 6, 46),
(51, 6, 27),
(52, 7, 24),
(53, 7, 45),
(54, 7, 44),
(55, 7, 43),
(56, 7, 12),
(57, 7, 42),
(58, 7, 41),
(59, 7, 40),
(60, 7, 39),
(61, 7, 38),
(62, 8, 37),
(63, 8, 36),
(64, 8, 35),
(65, 8, 20),
(66, 8, 17),
(67, 8, 12),
(68, 8, 13),
(69, 8, 34),
(70, 9, 33),
(71, 9, 24),
(72, 9, 32),
(73, 9, 31),
(74, 9, 30),
(75, 9, 17),
(76, 9, 15),
(77, 9, 16),
(78, 9, 20),
(79, 9, 29),
(80, 9, 18),
(81, 9, 28),
(82, 9, 27),
(83, 9, 26),
(84, 9, 34),
(85, 10, 24),
(86, 10, 48),
(87, 10, 43),
(88, 10, 35),
(90, 10, 20),
(91, 10, 19),
(92, 10, 18),
(93, 10, 17),
(94, 10, 15),
(95, 10, 16),
(96, 10, 14),
(97, 10, 13),
(98, 10, 12),
(99, 10, 10),
(100, 10, 11),
(101, 11, 80),
(102, 11, 76),
(103, 11, 24),
(104, 11, 55),
(105, 11, 12),
(106, 11, 129),
(107, 11, 26),
(108, 11, 128),
(109, 11, 127),
(110, 11, 58),
(111, 11, 43),
(112, 11, 126),
(113, 11, 125),
(114, 11, 39),
(115, 11, 95),
(116, 12, 58),
(117, 12, 78),
(118, 12, 41),
(119, 12, 43),
(120, 12, 123),
(121, 12, 12),
(122, 12, 13),
(123, 12, 55),
(124, 12, 40),
(125, 12, 11),
(126, 12, 17),
(127, 12, 98),
(128, 13, 121),
(129, 13, 122),
(130, 13, 51),
(131, 13, 54),
(132, 13, 120),
(133, 13, 118),
(134, 13, 117),
(135, 13, 116),
(136, 13, 115),
(137, 13, 113),
(138, 13, 114),
(139, 13, 112),
(140, 13, 111),
(141, 13, 109),
(142, 13, 110),
(143, 14, 35),
(144, 14, 43),
(145, 14, 24),
(146, 14, 87),
(147, 14, 19),
(148, 14, 11),
(149, 14, 17),
(150, 14, 15),
(151, 14, 16),
(152, 14, 12),
(153, 14, 13),
(154, 14, 108),
(155, 14, 26),
(156, 15, 106),
(157, 15, 105),
(313, 15, 104),
(314, 15, 103),
(315, 15, 75),
(316, 15, 98),
(317, 15, 107),
(318, 15, 58),
(319, 15, 73),
(320, 15, 35),
(321, 15, 29),
(322, 15, 30),
(323, 15, 74),
(324, 15, 54),
(325, 15, 71),
(326, 16, 58),
(327, 16, 55),
(328, 16, 98),
(329, 16, 97),
(330, 16, 96),
(331, 16, 11),
(332, 16, 95),
(333, 16, 94),
(334, 16, 93),
(335, 16, 41),
(336, 16, 40),
(337, 16, 26),
(338, 16, 92),
(339, 16, 12),
(340, 16, 13),
(341, 17, 18),
(342, 17, 48),
(343, 17, 24),
(344, 17, 91),
(345, 17, 90),
(346, 17, 43),
(347, 17, 41),
(348, 17, 87),
(349, 17, 89),
(350, 17, 88),
(351, 17, 86),
(352, 17, 27),
(353, 17, 84),
(354, 17, 83),
(355, 17, 82),
(356, 17, 81),
(357, 17, 12),
(358, 18, 35),
(359, 18, 24),
(360, 18, 80),
(361, 18, 49),
(362, 18, 79),
(363, 18, 58),
(365, 18, 13),
(366, 18, 78),
(367, 18, 76),
(368, 18, 31),
(369, 18, 26),
(370, 19, 24),
(371, 19, 131),
(372, 19, 138),
(373, 19, 78),
(374, 19, 80),
(375, 19, 137),
(376, 19, 11),
(377, 19, 132),
(378, 19, 41),
(379, 19, 136),
(380, 19, 82),
(381, 19, 17),
(382, 19, 12),
(383, 19, 43),
(385, 19, 48),
(386, 19, 135),
(387, 19, 134),
(388, 19, 133),
(389, 19, 76),
(390, 20, 125),
(391, 20, 43),
(392, 20, 82),
(393, 20, 41),
(394, 20, 132),
(395, 20, 123),
(396, 20, 17),
(397, 20, 131),
(398, 20, 48),
(399, 20, 31),
(402, 20, 130),
(401, 20, 34);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

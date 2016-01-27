-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 10, 2014 at 01:58 PM
-- Server version: 5.5.37
-- PHP Version: 5.3.10-1ubuntu3.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `navigator`
--

-- --------------------------------------------------------

--
-- Table structure for table `communications`
--

CREATE TABLE IF NOT EXISTS `communications` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `type` int(1) NOT NULL,
  `mode` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `subscribers` varchar(255) NOT NULL,
  `updated` date NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `communications`
--

INSERT INTO `communications` (`cid`, `subject`, `content`, `type`, `mode`, `status`, `subscribers`, `updated`) VALUES
(1, 'Welcome Letter', 'This is your welcome letter content', 1, 1, 1, '', '2014-05-21'),
(2, 'Marketing Letter 1', 'this is our first marketing bulk email letter', 1, 2, 2, '', '2014-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `entities`
--

CREATE TABLE IF NOT EXISTS `entities` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `profile` int(11) NOT NULL,
  `mode` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `primarycontact` int(11) NOT NULL,
  `createdby` int(11) NOT NULL,
  `groups` varchar(255) NOT NULL,
  `updated` date NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=298 ;

--
-- Dumping data for table `entities`
--

INSERT INTO `entities` (`eid`, `profile`, `mode`, `name`, `status`, `type`, `primarycontact`, `createdby`, `groups`, `updated`) VALUES
(1, 0, 1, 'Marilize Ackermann', 2, 1, 1, 1, '1', '2014-05-22'),
(2, 1, 1, 'Nicole Adams', 2, 1, 2, 1, '', '2014-05-02'),
(3, 1, 1, 'Gerhardus Jelle Adema', 2, 1, 3, 1, '', '2014-05-03'),
(4, 1, 1, 'Stephen Agar', 2, 1, 4, 1, '', '2014-05-04'),
(5, 1, 1, 'Katherine Pearl Agar', 2, 1, 5, 1, '', '2014-05-05'),
(6, 1, 1, 'Marc Anley', 2, 1, 6, 1, '', '2014-05-06'),
(7, 1, 1, 'Kerry Anley', 2, 1, 7, 1, '', '2014-05-07'),
(8, 1, 1, 'Jacqueline Anne Badenhorst', 2, 1, 8, 1, '', '2014-05-08'),
(9, 1, 1, 'Michael Charles Bardsley', 2, 1, 9, 1, '', '2014-05-09'),
(10, 1, 1, 'Rudi Barnard', 2, 1, 10, 1, '', '2014-05-10'),
(11, 1, 1, 'Dean Simon Kingsley Barnes', 2, 1, 11, 1, '', '2014-05-11'),
(12, 1, 1, 'Jacolien Bartolini', 2, 1, 12, 1, '', '2014-05-12'),
(13, 1, 1, 'Jacobus Christiaan Faure Basson', 2, 1, 13, 1, '', '2014-05-13'),
(14, 1, 1, 'Lucy Rebecca Beard', 2, 1, 14, 1, '', '2014-05-14'),
(15, 1, 1, 'Michaele Behrendt', 2, 1, 15, 1, '', '2014-05-15'),
(16, 1, 1, 'Rodney Belchem', 2, 1, 16, 1, '', '2014-05-16'),
(17, 1, 1, 'Karen Bergh', 2, 1, 17, 1, '', '2014-05-17'),
(18, 1, 1, 'Edwin Bisset', 2, 1, 18, 1, '', '2014-05-18'),
(19, 1, 1, 'Toni Booysen', 2, 1, 19, 1, '', '2014-05-19'),
(20, 1, 1, 'Christopher Robert Borchers', 2, 1, 20, 1, '', '2014-05-20'),
(21, 1, 1, 'William Boshoff', 2, 1, 21, 1, '', '2014-05-21'),
(22, 1, 1, 'Julanie Rachel Boshoff', 2, 1, 22, 1, '', '2014-05-22'),
(23, 1, 1, 'Alesia Valda Bosman', 2, 1, 23, 1, '', '2014-05-23'),
(24, 1, 1, 'Reece Dillon Bosman', 2, 1, 24, 1, '', '2014-05-24'),
(25, 1, 1, 'Brendon Bosworth', 2, 1, 25, 1, '', '2014-05-25'),
(26, 1, 1, 'Jetty Botes-Erasmus', 2, 1, 26, 1, '', '2014-05-26'),
(27, 1, 1, 'Arthur Thomas Botha', 2, 1, 27, 1, '', '2014-05-27'),
(28, 1, 1, 'Marthinus A.J. Botha', 2, 1, 28, 1, '', '2014-05-28'),
(29, 1, 1, 'Wilhelmina J. Botha', 2, 1, 29, 1, '', '2014-05-29'),
(30, 1, 1, 'Phillip Botha', 2, 1, 30, 1, '', '2014-05-30'),
(31, 1, 1, 'Christiaan Botma', 2, 1, 31, 1, '', '2014-05-31'),
(32, 1, 1, 'Jeandre C. Bouwer', 2, 1, 32, 1, '', '2014-06-01'),
(33, 1, 1, 'Hester C. Bouwer', 2, 1, 33, 1, '', '2014-06-02'),
(34, 1, 1, 'Johan H. P. Bredell', 2, 1, 34, 1, '', '2014-06-03'),
(35, 1, 1, 'Hayley Bresler', 2, 1, 35, 1, '', '2014-06-04'),
(36, 1, 1, 'Lucia C Britz', 2, 1, 36, 1, '', '2014-06-05'),
(37, 1, 1, 'James Brown', 2, 1, 37, 1, '', '2014-06-06'),
(38, 1, 1, 'Loricia Bruwer', 2, 1, 38, 1, '', '2014-06-07'),
(39, 1, 1, 'Patricia Bruwer', 2, 1, 39, 1, '', '2014-06-08'),
(40, 1, 1, 'Ettienne Bruwer', 2, 1, 40, 1, '', '2014-06-09'),
(41, 1, 1, 'Marilese Bruwer', 2, 1, 41, 1, '', '2014-06-10'),
(42, 1, 1, 'Anelda Burger', 2, 1, 42, 1, '', '2014-06-11'),
(43, 1, 1, 'Mark Gerald Butler', 2, 1, 43, 1, '', '2014-06-12'),
(44, 1, 1, 'Marco Carbone', 2, 1, 44, 1, '', '2014-06-13'),
(45, 1, 1, 'Jonathan Christopher Carter', 2, 1, 45, 1, '', '2014-06-14'),
(46, 1, 1, 'MRA Cassim', 2, 1, 46, 1, '', '2014-06-15'),
(47, 1, 1, 'James Henry Chambers', 2, 1, 47, 1, '', '2014-06-16'),
(48, 1, 1, 'Judy-Ann Cilliers', 2, 1, 48, 1, '', '2014-06-17'),
(49, 1, 1, 'Andre Cilliers', 2, 1, 49, 1, '', '2014-06-18'),
(50, 1, 1, 'Dean Claassens', 2, 1, 50, 1, '', '2014-06-19'),
(51, 1, 1, 'Nicolas John Clelland-Stokes', 2, 1, 51, 1, '', '2014-06-20'),
(52, 1, 1, 'Michael John Clemitson', 2, 1, 52, 1, '', '2014-06-21'),
(53, 1, 1, 'Morne Coetzee', 2, 1, 53, 1, '', '2014-06-22'),
(54, 1, 1, 'Lies-Marie Coulier', 2, 1, 54, 1, '', '2014-06-23'),
(55, 1, 1, 'Chantele Candice Craig', 2, 1, 55, 1, '', '2014-06-24'),
(56, 1, 1, 'William Cromie', 2, 1, 56, 1, '', '2014-06-25'),
(57, 1, 1, 'Kevin Garth Cronje', 2, 1, 57, 1, '', '2014-06-26'),
(58, 1, 1, 'Lynette Daphne Cronje', 2, 1, 58, 1, '', '2014-06-27'),
(59, 1, 1, 'Helena Da Silva', 2, 1, 59, 1, '', '2014-06-28'),
(60, 1, 1, 'Olaf Dambrowski', 2, 1, 60, 1, '', '2014-06-29'),
(61, 1, 1, 'Haazim Daniel', 2, 1, 61, 1, '', '2014-06-30'),
(62, 1, 1, 'Nicole Davy', 2, 1, 62, 1, '', '2014-07-01'),
(63, 1, 1, 'Almarie De Jager', 2, 1, 63, 1, '', '2014-07-02'),
(64, 1, 1, 'Hendrik De Jager', 2, 1, 64, 1, '', '2014-07-03'),
(65, 1, 1, 'Leonora De Souza', 2, 1, 65, 1, '', '2014-07-04'),
(66, 1, 1, 'Carel Christiaan De Villiers', 2, 1, 66, 1, '', '2014-07-05'),
(67, 1, 1, 'Pieter Wouter De Vos', 2, 1, 67, 1, '', '2014-07-06'),
(68, 1, 1, 'Roelof Jacobus De Vos', 2, 1, 68, 1, '', '2014-07-07'),
(69, 1, 1, 'Arno De Wet', 2, 1, 69, 1, '', '2014-07-08'),
(70, 1, 1, 'Kendal Devine', 2, 1, 70, 1, '', '2014-07-09'),
(71, 1, 1, 'Martin Diessner', 2, 1, 71, 1, '', '2014-07-10'),
(72, 1, 1, 'Robyn Diessner', 2, 1, 72, 1, '', '2014-07-11'),
(73, 1, 1, 'Jelle Dijkstra', 2, 1, 73, 1, '', '2014-07-12'),
(74, 1, 1, 'Hillegonda Magda Else Dijkstra', 2, 1, 74, 1, '', '2014-07-13'),
(75, 1, 1, 'Andrew James Douglas', 2, 1, 75, 1, '', '2014-07-14'),
(76, 1, 1, 'Margaret Judelle Drake', 2, 1, 76, 1, '', '2014-07-15'),
(77, 1, 1, 'B.Wynand Du Toit', 2, 1, 77, 1, '', '2014-07-16'),
(78, 1, 1, 'Lindi Louise Du Toit', 2, 1, 78, 1, '', '2014-07-17'),
(79, 1, 1, 'Migiel Josias Du Toit', 2, 1, 79, 1, '', '2014-07-18'),
(80, 1, 1, 'Levina J. Du Toit', 2, 1, 80, 1, '', '2014-07-19'),
(81, 1, 1, 'Hans Ehrich', 2, 1, 81, 1, '', '2014-07-20'),
(82, 1, 1, 'Hennie Eksteen', 2, 1, 82, 1, '', '2014-07-21'),
(83, 1, 1, 'Paul Christian Els', 2, 1, 83, 1, '', '2014-07-22'),
(84, 1, 1, 'Monique Desire Els', 2, 1, 84, 1, '', '2014-07-23'),
(85, 1, 1, 'Margaretha Fredrika Erasmus', 2, 1, 85, 1, '', '2014-07-24'),
(86, 1, 1, 'Gregory John Fenton', 2, 1, 86, 1, '', '2014-07-25'),
(87, 1, 1, 'Loretta Selma Ferreira', 2, 1, 87, 1, '', '2014-07-26'),
(88, 1, 1, 'Bernard Hein Forrer', 2, 1, 88, 1, '', '2014-07-27'),
(89, 1, 1, 'Graeme Forrer', 2, 1, 89, 1, '', '2014-07-28'),
(90, 1, 1, 'Zuon-Pierre Fortuin', 2, 1, 90, 1, '', '2014-07-29'),
(91, 1, 1, 'Jacqueline Fourie', 2, 1, 91, 1, '', '2014-07-30'),
(92, 1, 1, 'Stoffel Fourie', 2, 1, 92, 1, '', '2014-07-31'),
(93, 1, 1, 'Dale Glenda Fray', 2, 1, 93, 1, '', '2014-08-01'),
(94, 1, 1, 'Girt Geldenhuys', 2, 1, 94, 1, '', '2014-08-02'),
(95, 1, 1, 'Marietjie Geldenhuys', 2, 1, 95, 1, '', '2014-08-03'),
(96, 1, 1, 'Morne Genade', 2, 1, 96, 1, '', '2014-08-04'),
(97, 1, 1, 'Jennifer Elizabeth Glazier', 2, 1, 97, 1, '', '2014-08-05'),
(98, 1, 1, 'Kristi Peta Goodman', 2, 1, 98, 1, '', '2014-08-06'),
(99, 1, 1, 'Ingrid Justine Green', 2, 1, 99, 1, '', '2014-08-07'),
(100, 1, 1, 'Teide Dawne Grice', 2, 1, 100, 1, '', '2014-08-08'),
(101, 1, 1, 'Werner Grift', 2, 1, 101, 1, '', '2014-08-09'),
(102, 1, 1, 'Pat Grobler', 2, 1, 102, 1, '', '2014-08-10'),
(103, 1, 1, 'Leney Hayman', 2, 1, 103, 1, '', '2014-08-11'),
(104, 1, 1, 'Haydn Heydenrych', 2, 1, 104, 1, '', '2014-08-12'),
(105, 1, 1, 'Estelle Heyl', 2, 1, 105, 1, '', '2014-08-13'),
(106, 1, 1, 'Dirk Heyneman', 2, 1, 106, 1, '', '2014-08-14'),
(107, 1, 1, 'Hanneke Heyneman', 2, 1, 107, 1, '', '2014-08-15'),
(108, 1, 1, 'Brian  Hitchcock', 2, 1, 108, 1, '', '2014-08-16'),
(109, 1, 1, 'Orsculla Hitchcock', 2, 1, 109, 1, '', '2014-08-17'),
(110, 1, 1, 'Marcus Hoelper', 2, 1, 110, 1, '', '2014-08-18'),
(111, 1, 1, 'Christoffel Hoffman De Villiers', 2, 1, 111, 1, '', '2014-08-19'),
(112, 1, 1, 'Roger Beresford Hudson', 2, 1, 112, 1, '', '2014-08-20'),
(113, 1, 1, 'Lucia Hudson', 2, 1, 113, 1, '', '2014-08-21'),
(114, 1, 1, 'Keith Derek Igesund', 2, 1, 114, 1, '', '2014-08-22'),
(115, 1, 1, 'Willem F. Immelmann', 2, 1, 115, 1, '', '2014-08-23'),
(116, 1, 1, 'Elizma Immelmann', 2, 1, 116, 1, '', '2014-08-24'),
(117, 1, 1, 'Krystal Stacey Jacobs', 2, 1, 117, 1, '', '2014-08-25'),
(118, 1, 1, 'Monica Jacobsen', 2, 1, 118, 1, '', '2014-08-26'),
(119, 1, 1, 'Nastassia Jaffa', 2, 1, 119, 1, '', '2014-08-27'),
(120, 1, 1, 'Elizabeth Janse van Rensburg', 2, 1, 120, 1, '', '2014-08-28'),
(121, 1, 1, 'Riette Janse van Rensburg', 2, 1, 121, 1, '', '2014-08-29'),
(122, 1, 1, 'Stefan J.  Janse van Rensburg', 2, 1, 122, 1, '', '2014-08-30'),
(123, 1, 1, 'Michael Evan Jennings', 2, 1, 123, 1, '', '2014-08-31'),
(124, 1, 1, 'Sandra Jocelyn', 2, 1, 124, 1, '', '2014-09-01'),
(125, 1, 1, 'Francois Jooste', 2, 1, 125, 1, '', '2014-09-02'),
(126, 1, 1, 'Machteld  Petronella Joubert', 2, 1, 126, 1, '', '2014-09-03'),
(127, 1, 1, 'Anthony Julies', 2, 1, 127, 1, '', '2014-09-04'),
(128, 1, 1, 'Lizette Julies', 2, 1, 128, 1, '', '2014-09-05'),
(129, 1, 1, 'Enrique Edward Julyan', 2, 1, 129, 1, '', '2014-09-06'),
(130, 1, 1, 'Khumbulau Precious Kandawire', 2, 1, 130, 1, '', '2014-09-07'),
(131, 1, 1, 'Andrew Kannemeyer', 2, 1, 131, 1, '', '2014-09-08'),
(132, 1, 1, 'Renee Alison Kannemeyer', 2, 1, 132, 1, '', '2014-09-09'),
(133, 1, 1, 'Magan Kistan', 2, 1, 133, 1, '', '2014-09-10'),
(134, 1, 1, 'Francois Kleyn', 2, 1, 134, 1, '', '2014-09-11'),
(135, 1, 1, 'John Kleyn', 2, 1, 135, 1, '', '2014-09-12'),
(136, 1, 1, 'Delicia Kleyn', 2, 1, 136, 1, '', '2014-09-13'),
(137, 1, 1, 'Melissa Knott', 2, 1, 137, 1, '', '2014-09-14'),
(138, 1, 1, 'Gareth Robert Knott', 2, 1, 138, 1, '', '2014-09-15'),
(139, 1, 1, 'Willie Koen', 2, 1, 139, 1, '', '2014-09-16'),
(140, 1, 1, 'Lienie Koen', 2, 1, 140, 1, '', '2014-09-17'),
(141, 1, 1, 'Robert Charles Koker', 2, 1, 141, 1, '', '2014-09-18'),
(142, 1, 1, 'Dawie Kotze', 2, 1, 142, 1, '', '2014-09-19'),
(143, 1, 1, 'Anton Jacques Krige', 2, 1, 143, 1, '', '2014-09-20'),
(144, 1, 1, 'Clara-Ann Kruger', 2, 1, 144, 1, '', '2014-09-21'),
(145, 1, 1, 'Riann Kruger', 2, 1, 145, 1, '', '2014-09-22'),
(146, 1, 1, 'Lynne Merle Kruger', 2, 1, 146, 1, '', '2014-09-23'),
(147, 1, 1, 'Hannelie G. Lahav', 2, 1, 147, 1, '', '2014-09-24'),
(148, 1, 1, 'Franz Lamers', 2, 1, 148, 1, '', '2014-09-25'),
(149, 1, 1, 'Rafeeq Larney', 2, 1, 149, 1, '', '2014-09-26'),
(150, 1, 1, 'Ernie S. Le Roux', 2, 1, 150, 1, '', '2014-09-27'),
(151, 1, 1, 'Bern  Leuvennink', 2, 1, 151, 1, '', '2014-09-28'),
(152, 1, 1, 'Mildie Leuwennink', 2, 1, 152, 1, '', '2014-09-29'),
(153, 1, 1, 'Johan Liebenberg', 2, 1, 153, 1, '', '2014-09-30'),
(154, 1, 1, 'Charles John Lindstrom', 2, 1, 154, 1, '', '2014-10-01'),
(155, 1, 1, 'Isa Lindstrom', 2, 1, 155, 1, '', '2014-10-02'),
(156, 1, 1, 'Leigh Thomas Lisk', 2, 1, 156, 1, '', '2014-10-03'),
(157, 1, 1, 'Thamsanqa C Lobi', 2, 1, 157, 1, '', '2014-10-04'),
(158, 1, 1, 'Jason Lombard', 2, 1, 158, 1, '', '2014-10-05'),
(159, 1, 1, 'Schalk Lombard', 2, 1, 159, 1, '', '2014-10-06'),
(160, 1, 1, 'Marelize Elizabeth Louw', 2, 1, 160, 1, '', '2014-10-07'),
(161, 1, 1, 'Fritz Louw', 2, 1, 161, 1, '', '2014-10-08'),
(162, 1, 1, 'Charnnel Louw', 2, 1, 162, 1, '', '2014-10-09'),
(163, 1, 1, 'Madeleine Luttig', 2, 1, 163, 1, '', '2014-10-10'),
(164, 1, 1, 'Eduard Maartens', 2, 1, 164, 1, '', '2014-10-11'),
(165, 1, 1, 'Michele MacNab', 2, 1, 165, 1, '', '2014-10-12'),
(166, 1, 1, 'Yusuf Madhi', 2, 1, 166, 1, '', '2014-10-13'),
(167, 1, 1, 'Collin R. Mamdoo', 2, 1, 167, 1, '', '2014-10-14'),
(168, 1, 1, 'CJ  Maritz', 2, 1, 168, 1, '', '2014-10-15'),
(169, 1, 1, 'Petro Maritz', 2, 1, 169, 1, '', '2014-10-16'),
(170, 1, 1, 'Janel Marx', 2, 1, 170, 1, '', '2014-10-17'),
(171, 1, 1, 'Luyanda Mbali', 2, 1, 171, 1, '', '2014-10-18'),
(172, 1, 1, 'Ian Samuel McLuckie', 2, 1, 172, 1, '', '2014-10-19'),
(173, 1, 1, 'Jason Minnaar', 2, 1, 173, 1, '', '2014-10-20'),
(174, 1, 1, 'Tania Leslene Minnaar', 2, 1, 174, 1, '', '2014-10-21'),
(175, 1, 1, 'Treasure Mokaya', 2, 1, 175, 1, '', '2014-10-22'),
(176, 1, 1, 'Andrew Michael Mori', 2, 1, 176, 1, '', '2014-10-23'),
(177, 1, 1, 'John David Mules-Berry', 2, 1, 177, 1, '', '2014-10-24'),
(178, 1, 1, 'Nico Muller', 2, 1, 178, 1, '', '2014-10-25'),
(179, 1, 1, 'Maria Magdalena Muller', 2, 1, 179, 1, '', '2014-10-26'),
(180, 1, 1, 'Narendra Naidoo', 2, 1, 180, 1, '', '2014-10-27'),
(181, 1, 1, 'Eduan Willem Naude', 2, 1, 181, 1, '', '2014-10-28'),
(182, 1, 1, 'Verena Neethling', 2, 1, 182, 1, '', '2014-10-29'),
(183, 1, 1, 'Adriaan Jacobus Nigrini', 2, 1, 183, 1, '', '2014-10-30'),
(184, 1, 1, 'Leandri Nigrini', 2, 1, 184, 1, '', '2014-10-31'),
(185, 1, 1, 'Leutje Nigrini', 2, 1, 185, 1, '', '2014-11-01'),
(186, 1, 1, 'Amanda Trudy Ninow', 2, 1, 186, 1, '', '2014-11-02'),
(187, 1, 1, 'Cornelius Johannes Nortje', 2, 1, 187, 1, '', '2014-11-03'),
(188, 1, 1, 'David Patrick O’Brien', 2, 1, 188, 1, '', '2014-11-04'),
(189, 1, 1, 'Cheri-Ann Madelein O’Brien', 2, 1, 189, 1, '', '2014-11-05'),
(190, 1, 1, 'Luzaan Odendaal', 2, 1, 190, 1, '', '2014-11-06'),
(191, 1, 1, 'Riaan Odendaal', 2, 1, 191, 1, '', '2014-11-07'),
(192, 1, 1, 'Riaan Dirk Odendaal', 2, 1, 192, 1, '', '2014-11-08'),
(193, 1, 1, 'Gerhard Olivier', 2, 1, 193, 1, '', '2014-11-09'),
(194, 1, 1, 'Marnita Oppermann', 2, 1, 194, 1, '', '2014-11-10'),
(195, 1, 1, 'Michelle Payne', 2, 1, 195, 1, '', '2014-11-11'),
(196, 1, 1, 'Gysbertus E.A. Phernambucq', 2, 1, 196, 1, '', '2014-11-12'),
(197, 1, 1, 'Shane Phillips', 2, 1, 197, 1, '', '2014-11-13'),
(198, 1, 1, 'Gregory Edward Pienaar', 2, 1, 198, 1, '', '2014-11-14'),
(199, 1, 1, 'Riaan Pienaar', 2, 1, 199, 1, '', '2014-11-15'),
(200, 1, 1, 'Louis Pieterse', 2, 1, 200, 1, '', '2014-11-16'),
(201, 1, 1, 'Alexandra Pinenkova', 2, 1, 201, 1, '', '2014-11-17'),
(202, 1, 1, 'Mia Melissa Powell', 2, 1, 202, 1, '', '2014-11-18'),
(203, 1, 1, 'Ashley Pretorius', 2, 1, 203, 1, '', '2014-11-19'),
(204, 1, 1, 'Robert Mark Pretorius', 2, 1, 204, 1, '', '2014-11-20'),
(205, 1, 1, 'Lucille  Pretorius', 2, 1, 205, 1, '', '2014-11-21'),
(206, 1, 1, 'Laetitia Prins', 2, 1, 206, 1, '', '2014-11-22'),
(207, 1, 1, 'Maria Elizabeth Prinsloo', 2, 1, 207, 1, '', '2014-11-23'),
(208, 1, 1, 'Johan Hendrik Rabie', 2, 1, 208, 1, '', '2014-11-24'),
(209, 1, 1, 'Christine Maria Margaret Rabie', 2, 1, 209, 1, '', '2014-11-25'),
(210, 1, 1, 'Ruth Reichlin', 2, 1, 210, 1, '', '2014-11-26'),
(211, 1, 1, 'Flavian Rhode', 2, 1, 211, 1, '', '2014-11-27'),
(212, 1, 1, 'Kyle Neville Richards', 2, 1, 212, 1, '', '2014-11-28'),
(213, 1, 1, 'Denis John Rose', 2, 1, 213, 1, '', '2014-11-29'),
(214, 1, 1, 'Morris Rosenblatt', 2, 1, 214, 1, '', '2014-11-30'),
(215, 1, 1, 'Le-Daan Rousseau', 2, 1, 215, 1, '', '2014-12-01'),
(216, 1, 1, 'Ronette Rousseau', 2, 1, 216, 1, '', '2014-12-02'),
(217, 1, 1, 'Jaco Marthinus J Sadie', 2, 1, 217, 1, '', '2014-12-03'),
(218, 1, 1, 'Phumzile Saleni', 2, 1, 218, 1, '', '2014-12-04'),
(219, 1, 1, 'Gary Sandler', 2, 1, 219, 1, '', '2014-12-05'),
(220, 1, 1, 'Elana Sandler', 2, 1, 220, 1, '', '2014-12-06'),
(221, 1, 1, 'Emmission Kobela Santo', 2, 1, 221, 1, '', '2014-12-07'),
(222, 1, 1, 'Annette Saunders', 2, 1, 222, 1, '', '2014-12-08'),
(223, 1, 1, 'Martha Maria Scholtz', 2, 1, 223, 1, '', '2014-12-09'),
(224, 1, 1, 'Schuitmaker', 2, 1, 224, 1, '', '2014-12-10'),
(225, 1, 1, 'Adam Schulman', 2, 1, 225, 1, '', '2014-12-11'),
(226, 1, 1, 'Jill Schulman', 2, 1, 226, 1, '', '2014-12-12'),
(227, 1, 1, 'Melony Schwarz', 2, 1, 227, 1, '', '2014-12-13'),
(228, 1, 1, 'Judith Seekopp', 2, 1, 228, 1, '', '2014-12-14'),
(229, 1, 1, 'Marc Alexander Seyfert', 2, 1, 229, 1, '', '2014-12-15'),
(230, 1, 1, 'Brendon C.,Elisabeth MC Shaw', 2, 1, 230, 1, '', '2014-12-16'),
(231, 1, 1, 'Elisabeth Shaw', 2, 1, 231, 1, '', '2014-12-17'),
(232, 1, 1, 'Nick Sheard', 2, 1, 232, 1, '', '2014-12-18'),
(233, 1, 1, 'Kim Sheard', 2, 1, 233, 1, '', '2014-12-19'),
(234, 1, 1, 'Jennie Sher', 2, 1, 234, 1, '', '2014-12-20'),
(235, 1, 1, 'Zizonke Siqithi', 2, 1, 235, 1, '', '2014-12-21'),
(236, 1, 1, 'Israel Smeyatsky', 2, 1, 236, 1, '', '2014-12-22'),
(237, 1, 1, 'Elsa Smeyatsky', 2, 1, 237, 1, '', '2014-12-23'),
(238, 1, 1, 'Ryan Smith', 2, 1, 238, 1, '', '2014-12-24'),
(239, 1, 1, 'Stephen Anthony Smith', 2, 1, 239, 1, '', '2014-12-25'),
(240, 1, 1, 'Katherine Soobramoney', 2, 1, 240, 1, '', '2014-12-26'),
(241, 1, 1, 'Monique Spaltman', 2, 1, 241, 1, '', '2014-12-27'),
(242, 1, 1, 'Nicole Spies', 2, 1, 242, 1, '', '2014-12-28'),
(243, 1, 1, 'Alexander Steenkamp', 2, 1, 243, 1, '', '2014-12-29'),
(244, 1, 1, 'Anita Steyl', 2, 1, 244, 1, '', '2014-12-30'),
(245, 1, 1, 'Johan Steyn', 2, 1, 245, 1, '', '2014-12-31'),
(246, 1, 1, 'TCB Stofberg', 2, 1, 246, 1, '', '2015-01-01'),
(247, 1, 1, 'Achim Strauss', 2, 1, 247, 1, '', '2015-01-02'),
(248, 1, 1, 'Dimitri Stroinovsky', 2, 1, 248, 1, '', '2015-01-03'),
(249, 1, 1, 'Sanna Maria Sund', 2, 1, 249, 1, '', '2015-01-04'),
(250, 1, 1, 'Nicolene Swanepoel', 2, 1, 250, 1, '', '2015-01-05'),
(251, 1, 1, 'Jerome Paul Swanson', 2, 1, 251, 1, '', '2015-01-06'),
(252, 1, 1, 'Chantel Swiegers', 2, 1, 252, 1, '', '2015-01-07'),
(253, 1, 1, 'Yas Taherzadeh', 2, 1, 253, 1, '', '2015-01-08'),
(254, 1, 1, 'Kim Teer', 2, 1, 254, 1, '', '2015-01-09'),
(255, 1, 1, 'Simboa Philip Thole', 2, 1, 255, 1, '', '2015-01-10'),
(256, 1, 1, 'Chanelle Thom', 2, 1, 256, 1, '', '2015-01-11'),
(257, 1, 1, 'Job Thomas', 2, 1, 257, 1, '', '2015-01-12'),
(258, 1, 1, 'Siyabonga Titi,3042368', 2, 1, 258, 1, '', '2015-01-13'),
(259, 1, 1, 'Christopher J., Vadas,', 2, 1, 259, 1, '', '2015-01-14'),
(260, 1, 1, 'Desire Van Coller', 2, 1, 260, 1, '', '2015-01-15'),
(261, 1, 1, 'JCH Van der Merwe', 2, 1, 261, 1, '', '2015-01-16'),
(262, 1, 1, 'Maryke Petro Van der Merwe', 2, 1, 262, 1, '', '2015-01-17'),
(263, 1, 1, 'Ruan Philippus Van der Merwe', 2, 1, 263, 1, '', '2015-01-18'),
(264, 1, 1, 'Michele Ann Van der Toorn', 2, 1, 264, 1, '', '2015-01-19'),
(265, 1, 1, 'Ruan Van Dijk', 2, 1, 265, 1, '', '2015-01-20'),
(266, 1, 1, 'Mornay Van Greunen', 2, 1, 266, 1, '', '2015-01-21'),
(267, 1, 1, 'Dorothea Petronella Van Greunen', 2, 1, 267, 1, '', '2015-01-22'),
(268, 1, 1, 'Michelle Beatriz Van Nes', 2, 1, 268, 1, '', '2015-01-23'),
(269, 1, 1, 'Emmerentia G Van Niekerk', 2, 1, 269, 1, '', '2015-01-24'),
(270, 1, 1, 'Johan A. Van Noordwyk', 2, 1, 270, 1, '', '2015-01-25'),
(271, 1, 1, 'Pieter Van Reede van Oudtshoorn', 2, 1, 271, 1, '', '2015-01-26'),
(272, 1, 1, 'Joanne Van Wyngaardt', 2, 1, 272, 1, '', '2015-01-27'),
(273, 1, 1, 'George Ernest Van Wyngaardt', 2, 1, 273, 1, '', '2015-01-28'),
(274, 1, 1, 'Dwayne Roger Van Zijl', 2, 1, 274, 1, '', '2015-01-29'),
(275, 1, 1, 'Hester Jacoba Van Zyl', 2, 1, 275, 1, '', '2015-01-30'),
(276, 1, 1, 'Rehan Frans Van Zyl', 2, 1, 276, 1, '', '2015-01-31'),
(277, 1, 1, 'Neill Anthony Vaughn', 2, 1, 277, 1, '', '2015-02-01'),
(278, 1, 1, 'Ernestus Jacobus Vermeulen', 2, 1, 278, 1, '', '2015-02-02'),
(279, 1, 1, 'Mona Gordon Vermeulen', 2, 1, 279, 1, '', '2015-02-03'),
(280, 1, 1, 'Karsten, Vincent', 2, 1, 280, 1, '', '2015-02-04'),
(281, 1, 1, 'Daria Vincent', 2, 1, 281, 1, '', '2015-02-05'),
(282, 1, 1, 'Etienne F Viret', 2, 1, 282, 1, '', '2015-02-06'),
(283, 1, 1, 'Belinda Viret', 2, 1, 283, 1, '', '2015-02-07'),
(284, 1, 1, 'Andreas JC Visagie', 2, 1, 284, 1, '', '2015-02-08'),
(285, 1, 1, 'Douw Viviers', 2, 1, 285, 1, '', '2015-02-09'),
(286, 1, 1, 'Marlene Viviers', 2, 1, 286, 1, '', '2015-02-10'),
(287, 1, 1, 'Jacobus Vorster', 2, 1, 287, 1, '', '2015-02-11'),
(288, 1, 1, 'Alta Vorster', 2, 1, 288, 1, '', '2015-02-12'),
(289, 1, 1, 'Elaine Winifred Walbrugh', 2, 1, 289, 1, '', '2015-02-13'),
(290, 1, 1, 'Geoff Warner', 2, 1, 290, 1, '', '2015-02-14'),
(291, 1, 1, 'Sue A. Watkins-Ball', 2, 1, 291, 1, '', '2015-02-15'),
(292, 1, 1, 'Tamara Wensing', 2, 1, 292, 1, '', '2015-02-16'),
(293, 1, 1, 'Enid Youngleson', 2, 1, 293, 1, '', '2015-02-17'),
(294, 1, 1, 'Rudolf A. H. Zuidema', 2, 1, 294, 1, '', '2015-02-18'),
(296, 0, 1, 'Test Provider', 3, 6, 0, 1, '1', '2014-05-23'),
(297, 0, 1, 'Chia-Hsing Chun', 2, 1, 0, 2, '3', '2014-06-04');

-- --------------------------------------------------------

--
-- Table structure for table `entities_cis`
--

CREATE TABLE IF NOT EXISTS `entities_cis` (
  `ecid` int(11) NOT NULL AUTO_INCREMENT,
  `eid` int(11) NOT NULL,
  `accountnumber` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `fais_fna` int(11) NOT NULL,
  `fais_roa` int(11) NOT NULL,
  `fais_sla` int(11) NOT NULL,
  `updated` date NOT NULL,
  PRIMARY KEY (`ecid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `entities_cis`
--

INSERT INTO `entities_cis` (`ecid`, `eid`, `accountnumber`, `status`, `fais_fna`, `fais_roa`, `fais_sla`, `updated`) VALUES
(1, 296, 'AGUT12212', 1, 1, 1, 1, '2014-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `entities_comments`
--

CREATE TABLE IF NOT EXISTS `entities_comments` (
  `ecid` int(11) NOT NULL AUTO_INCREMENT,
  `eid` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `createdby` int(11) NOT NULL,
  `updated` date NOT NULL,
  PRIMARY KEY (`ecid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `entities_comments`
--

INSERT INTO `entities_comments` (`ecid`, `eid`, `type`, `description`, `createdby`, `updated`) VALUES
(1, 1, 3, 'Leaving for Senegal. Cancelled Health policy. Letter submitted', 2, '2014-05-20'),
(2, 4, 1, 'Remove from data base', 2, '2014-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `entities_contacts`
--

CREATE TABLE IF NOT EXISTS `entities_contacts` (
  `ecid` int(11) NOT NULL AUTO_INCREMENT,
  `eid` int(11) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `preferredname` varchar(255) NOT NULL,
  `idnumber` varchar(255) NOT NULL,
  `dateofbirth` date NOT NULL,
  `physicaladdress` varchar(255) NOT NULL,
  `postaladdress` varchar(255) NOT NULL,
  `homephone` varchar(255) NOT NULL,
  `officephone` varchar(255) NOT NULL,
  `email` varchar(25) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `fica_id` int(11) NOT NULL,
  `fica_poa` int(11) NOT NULL,
  `fica_sars` int(11) NOT NULL,
  `updated` date NOT NULL,
  PRIMARY KEY (`ecid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=298 ;

--
-- Dumping data for table `entities_contacts`
--

INSERT INTO `entities_contacts` (`ecid`, `eid`, `lastname`, `firstname`, `preferredname`, `idnumber`, `dateofbirth`, `physicaladdress`, `postaladdress`, `homephone`, `officephone`, `email`, `mobile`, `fica_id`, `fica_poa`, `fica_sars`, `updated`) VALUES
(1, 1, 'Ackermann', 'Marilize', 'Marilize', '8004010113086', '1980-04-01', '11 Meulenhof A,144 Kloof street,Tamboerskloof,Cape Town 8001', '11 Meulenhof A,144 Kloof street,Tamboerskloof,Cape Town 8001', '', '0214653664', 'marilizeackermann@hotmail', '0846202356', 0, 0, 0, '2014-05-01'),
(2, 2, 'Adams', 'Nicole', 'Nicole', '8811150219089', '1988-11-15', '30 Brinkhuis Street,Sir Lowrys Pass', 'P.O. Box 767, Somerset West, 7130', '', '0218501960', 'nc.adams88@gmail.com', '0826992482', 0, 0, 0, '2014-05-01'),
(3, 3, 'Adema', 'Gerhardus Jelle', 'Gerhard', '7705095128082', '1977-05-09', '7 Alexanderlaan,Oranjezicht,Kaapstad 8001', '7 Alexanderlaan,Oranjezicht,Kaapstad 8001', '', '', 'gerardadema@yahoo.co.uk', '0724927535', 0, 0, 0, '2014-05-01'),
(4, 4, 'Agar', 'Stephen', 'Stephen', '8107275084080', '1981-07-27', '54 van der Merwe Rd,Somerset West 7130', '54 van der Merwe Rd,Somerset West 7130', '0218511221', '0218878267', 'sagar@eceng.co.za', '0727251205', 0, 0, 0, '2014-05-01'),
(5, 5, 'Agar', 'Katherine Pearl', 'Katherine ', '811130', '1981-11-30', '54 van der Merwe Rd,Somerset West 7130', '54 van der Merwe Rd,Somerset West 7130', '', '', 'sagar@eceng.co.za', '', 0, 0, 0, '2014-05-01'),
(6, 6, 'Anley', 'Marc', 'Marc', '7011235045085', '1970-11-23', '2 High Constantia, Constantia, Cape Town', '2 High Constantia,Constantia, Cape Town, 7806', '00447879433300', '', 'manley@deloitte.co.uk', '0798938191', 0, 0, 0, '2014-05-01'),
(7, 7, 'Anley', 'Kerry', 'Kerry', '7307171090188', '1973-07-17', '2 High Constantia, Constantia, Cape Town', '2 High Constantia,Constantia', '', '', 'kerryanley@googlemail.com', '0793708652', 0, 0, 0, '2014-05-01'),
(8, 8, 'Badenhorst', 'Jacqueline Anne', 'Jacqueline ', '6606120251085', '1966-06-12', 'Honeycombe, Belmont Avenue extention, Somerset West 7130', 'Honeycombe, Belmont Avenue extention, Somerset West 7130', '0218553635', '', 'honeycombe@discoverymail.', '0827927075', 0, 0, 0, '2014-05-01'),
(9, 9, 'Bardsley', 'Michael Charles', 'Michael ', '6203115031084', '1962-03-11', '103 Melrose Village, Melrose, Muizenberg', '103 Melrose Village,Melrose,Muizenberg 7945', '0217887910', '', 'mike@onairmedia.tv', '0824439958', 0, 0, 0, '2014-05-01'),
(10, 10, 'Barnard', 'Rudi', 'Rudi', '7607205014082', '1976-07-20', '', 'Private Bag X7,Suite 60,Sea Point 8060', '', '', 'rudi.barnard@gmail.com', '0725559956', 0, 0, 0, '2014-05-01'),
(11, 11, 'Barnes', 'Dean Simon Kingsley', 'Dean', '9212095016087', '1992-12-09', '6 Cranberry Crescent, Camps Bay', 'P.O. Box 32303, Camps Bay, 8040', '', '', 'jenbarnes@telkomsa.net', '0722244054', 0, 0, 0, '2014-05-01'),
(12, 12, 'Bartolini', 'Jacolien', 'Jacolien', '8006120108088', '1980-06-12', '6 Flamingo Street,Onderpapegaaiberg,Stellenbosch 7600', '6 Flamingo Street,Onderpapegaaiberg,Stellenbosch 7600', '', '', 'Jacolien.bartolini@gmail.', '0844446270', 0, 0, 0, '2014-05-01'),
(13, 13, 'Basson', 'Jacobus Christiaan Faure', 'Faure', '7911065243082', '1979-11-06', '', 'Privaatsak X3019,Paarl,7620', '', '', 'faure@ecogeco.co.za', '0828797944', 0, 0, 0, '2014-05-01'),
(14, 14, 'Beard', 'Lucy Rebecca', 'Lucy', '7306090038088', '1973-06-09', '24 St Quintons Road, Oranjezicht, Cape Town', '24 St Quintons Road, Oranjezicht, Cape Town', '', '', 'leighandlucy@gmail.com', '', 0, 0, 0, '2014-05-01'),
(15, 15, 'Behrendt', 'Michaele', 'Michaele', '6404250038088', '1964-04-25', '25 Ridgeworth Place,Bellwood Drive,Ridgeworth Estate,Bellville,7530', '25 Ridgeworth Place,Bellwood Drive,Ridgeworth Estate,Bellville,7530', '', '', 'mbehrendt@capefund.com', '0828775556', 0, 0, 0, '2014-05-01'),
(16, 16, 'Belchem', 'Rodney', 'Rodney', '9006205157083', '1990-06-20', '40 Arum Avenue,Somerset West,7130', '40 Arum Avenue,Somerset West,7130', '', '', 'Rodney.belchem@za.pwc.com', '0731806725', 0, 0, 0, '2014-05-01'),
(17, 17, 'Bergh', 'Karen', 'Karen', '6802220150083', '1968-02-22', '10 Chestnut Close,Bellaire,Bellville', '10 Chestnut Close,Bellaire,Bellville', '', '', 'Karen@karenbergh.co.za', '0832705513', 0, 0, 0, '2014-05-01'),
(18, 18, 'Bisset', 'Edwin', 'Edwin', '3701185028081', '1937-01-18', '2 Stuart Street, Somerset West, 7130', '2 Stuart Street, Somerset West, 7130', '0218523620', '', 'pambisset@vodamail.co.za;', '0720464463', 0, 0, 0, '2014-05-01'),
(19, 19, 'Booysen', 'Toni', 'Toni', '7006250041084', '1970-06-25', '52 Riverside Park,Lourensford Rd,Somerset West', '52 Riverside Park,Lourensford Rd,Somerset West', '0218515414', '', 'toniplayball@gmail.com', '0764133307', 0, 0, 0, '2014-05-01'),
(20, 20, 'Borchers', 'Christopher Robert', 'Christopher ', '3703315148088', '1937-03-31', '48 Schonenberg Retirement Village,Private Bag X3,Somerset West,7129', '48 Schonenberg Retirement Village,Private Bag X3,Somerset West,7129', '', '', 'crborch@mweb.co.za', '0723041078', 0, 0, 0, '2014-05-01'),
(21, 21, 'Boshoff', 'William', 'William', '7903095093082', '1979-03-09', '9 Martin Prince Street, Somerset West, 7130', '9 Martin Prince Street, Somerset West, 7130', '', '0218500311', 'hendrib@cyberlogic.co.za', '0842405094', 0, 0, 0, '2014-05-01'),
(22, 22, 'Boshoff', 'Julanie Rachel', 'Julanie', '7912180083080', '1979-12-18', '9 Martin Prince Street, Somerset West, 7130', '9 Martin Prince Street, Somerset West, 7130', '', '', 'hendrib@cyberlogic.co.za', '', 0, 0, 0, '2014-05-01'),
(23, 23, 'Bosman', 'Alesia Valda', 'Alesia', '6309200098084', '1963-09-20', '13 Ave Normandy,Diepriver,Cape Town 7800', '13 Ave Normandy,Diepriver,Cape Town 7800', '0217151817', '0214448701', 'avbosman@gmail.com', '0842332273', 0, 0, 0, '2014-05-01'),
(24, 24, 'Bosman', 'Reece Dillon', 'Reece', '8707195041084', '1987-07-19', '13 Avenue Normandy,Diep River,Cape Town 7800', '13 Avenue Normandy,Diep River,Cape Town 7800', '0217151817', '', 'moulon@mweb.co.za', '0766125144', 0, 0, 0, '2014-05-01'),
(25, 25, 'Bosworth', 'Brendon', 'Brendon', '8205035198081', '1982-05-03', '8 Diemaar,Kommetjie,7075', '8 Diemaar,Kommetjie,7075', '', '', 'brendon.bosworth@gmail.co', '0843914441', 0, 0, 0, '2014-05-01'),
(26, 26, 'Botes-Erasmus', 'Jetty', 'Jetty', '5704190002081', '1957-04-19', '1022 William Avenue,Pringle Bay,7196', '1022 William Avenue,Pringle Bay,7196', '0282738187', '', 'jbfc@telkomsa.net', '0827865323', 0, 0, 0, '2014-05-01'),
(27, 27, 'Botha', 'Arthur Thomas', 'Arthur', '4209065001086', '1942-09-06', '8 Laurimer Rd,Penhill 7100', '8 Laurimer Rd,Penhill 7100', '0219041291', '', 'chelseafc@telkomsa.net', '0825731990', 0, 0, 0, '2014-05-01'),
(28, 28, 'Botha', 'Marthinus A.J.', 'Thinus', '6302115030086', '1963-02-11', '55 Selkirk,Hermanus Heights,Hermanus', 'Postnet Suite 140, Privaatsak X16, Hermanus', '0283122617', '', 'majbotha@hotmail.com', '0726406822', 0, 0, 0, '2014-05-01'),
(29, 29, 'Botha', 'Wilhelmina J.', 'Elna', '6908100120086', '1969-08-10', '55 Selkirk,Hermanus Heights,Hermanus', 'Postnet Suite 140, Privaatsak X16, Hermanus', '', '', 'elna.botha@hotmail.com', '0726406822', 0, 0, 0, '2014-05-01'),
(30, 30, 'Botha', 'Phillip', 'Phillip', '5803045024082', '1958-03-04', '', '', '0215342255', '', 'phil.botha@psafinishers.c', '0825788649', 0, 0, 0, '2014-05-01'),
(31, 31, 'Botma', 'Christiaan', 'Christiaan', '9009135060087', '1990-09-13', '12 Bowbells,10 Derwent Rd,Tamboerskloof', '12 Bowbells,10 Derwent Rd,Tamboerskloof', '', '', 'Christiaan.botma@globecom', '0823073213', 0, 0, 0, '2014-05-01'),
(32, 32, 'Bouwer', 'Jeandre C.', 'Jeandre', '8107275009087', '1981-07-27', '5 Rooipeer straat,Heatherpark,George', '5 Rooipeer straat,Heatherpark,George', '0448700238', '', 'jeandreb@webmail.co.za', '0845124133', 0, 0, 0, '2014-05-01'),
(33, 33, 'Bouwer', 'Hester C.', 'Hester', '8205020023088', '1982-05-02', '5 Rooipeer straat,Heatherpark,George', '5 Rooipeer straat,Heatherpark,George', '', '', '', '0721389472', 0, 0, 0, '2014-05-01'),
(34, 34, 'Bredell', 'Johan H. P.', 'Johan', '5909165050086', '1959-09-16', '16 Mimosa Street,Hermanus,7200', '16 Mimosa Street,Hermanus,7200', '', '', 'pierrebredell@vodamail.co', '0826558088', 0, 0, 0, '2014-05-01'),
(35, 35, 'Bresler', 'Hayley', 'Hayley', '8506170036089', '1985-06-17', '46A Fifth Avenue', '46A Fifth Avenue', '', '', 'Haylz0617@gmail.com', '0726303758', 0, 0, 0, '2014-05-01'),
(36, 36, 'Britz', 'Lucia C', 'Lucia', '7209120150081', '1972-09-12', '', '', '', '', 'cbritz@slink.co.za', '0836521704', 0, 0, 0, '2014-05-01'),
(37, 37, 'Brown ', 'James', 'James', '7704155078082', '1977-04-15', '79 Fishermans Village,Muizenberg,7945', '79 Fishermans Village,Muizenberg,7945', '', '', 'james@cffc.co.za', '0731139873', 0, 0, 0, '2014-05-01'),
(38, 38, 'Bruwer', 'Loricia', 'Loricia', '9008195053081', '1990-08-19', '2 Paul Sauer Rd, Rosendal, Stellenbosch, 7600', '2 Paul Sauer Rd, Rosendal, Stellenbosch, 7600', '', '', 'bruwer.lo@gmail.com', '0827864077', 0, 0, 0, '2014-05-01'),
(39, 39, 'Bruwer', 'Patricia', 'Patricia', '5712200039084', '1957-12-20', '2 Paul Sauer Rd, Rosendal, Stellenbosch, 7600', '2 Paul Sauer Rd, Rosendal, Stellenbosch, 7600', '0218839997', '', 'subtrop@netactive.co.za', '0845132941', 0, 0, 0, '2014-05-01'),
(40, 40, 'Bruwer', 'Ettienne', 'Ettienne', '9008195053081', '1990-08-19', '2 Paul Sauer Rd, Rosendal, Stellenbosch, 7600', '2 Paul Sauer Rd, Rosendal, Stellenbosch, 7600', '', '', 'ebruwerl@gmail.com', '0827864088', 0, 0, 0, '2014-05-01'),
(41, 41, 'Bruwer', 'Marilese', 'Marilese', '7310010004089', '1973-10-01', '11 Norita Crescent, Rosendal, Durbanville', '11 Norita Crescent, Rosendal, Durbanville', '', '', 'hermanus.bruwer@gmail.com', '0829088600', 0, 0, 0, '2014-05-01'),
(42, 42, 'Burger ', 'Anelda', 'Anelda', '7505120179081', '1975-05-12', '105 Pine Creek,Sir Lowrys Pass Rd,Somerset West 7130', '105 Pine Creek,Sir Lowry???s Pass Rd,Somerset West 7130', '', '0217643162', 'aneldaburger@gmail.com', '0824519887', 0, 0, 0, '2014-05-01'),
(43, 43, 'Butler', 'Mark Gerald', 'Mark Gerald', '7509245062081', '1975-09-24', '45 Aandblom Street,Cape Town', '45 Aandblom Street,Cape Town', '', '', 'mystictravel@mweb.co.za', '0824921380', 0, 0, 0, '2014-05-01'),
(44, 44, 'Carbone', 'Marco', 'Marco', '8408135143086', '1984-08-13', '17de Laan 40,Boston,Bellville,7530', '17de Laan 40,Boston,Bellville,7530', '', '', 'Marcoc46@gmail.com', '0822146595', 0, 0, 0, '2014-05-01'),
(45, 45, 'Carter', 'Jonathan Christopher', 'Jonathan', '8202085235087', '1982-02-08', '38 DeStellenhoek,Stellenbergweg,Vredenberg 7530', '38 DeStellenhoek,Stellenbergweg,Vredenberg 7530', '', '', 'jonathan@ubuntu.com', '0781082588', 0, 0, 0, '2014-05-01'),
(46, 46, 'Cassim', 'MRA', 'MRA', '7106035238086', '1971-06-03', '86 Regent Road, Parklands, 7439', '86 Regent Road, Parklands, 7439', '0215560702', '0215221136', 'cassimri@eskom.co.za', '0845113994', 0, 0, 0, '2014-05-01'),
(47, 47, 'Chambers', 'James Henry', 'James', 'USA 470854242', '0000-00-00', '', '', '', '', 'zambonia53@gmail.com', '0845177736', 0, 0, 0, '2014-05-01'),
(48, 48, 'Cilliers', 'Judy-Ann', 'Judy-Ann', '9005120067087', '1990-05-12', '19 Montaque Avenue,Stellenryk 7550', '19 Montaque Avenue,Stellenryk 7550', '0219191208', '', 'jacilliers@sun.ac.za', '0837104211', 0, 0, 0, '2014-05-01'),
(49, 49, 'Cilliers', 'Andre', 'Andre', '8806155045083', '1988-06-15', '19 Montaque Ave ,Stellenryk 7550', '19 Montaque Ave ,Stellenryk 7550', '0219191208', '', 'valkie8@gmail.com', '0795172927', 0, 0, 0, '2014-05-01'),
(50, 50, 'Claassens', 'Dean', 'Dean', '8705145047086', '1987-05-14', '1 Park Road,Rondebosch 7700', '1 Park Road,Rondebosch 7700', '', '', 'dclaassens@gmail.com', '0782941608', 0, 0, 0, '2014-05-01'),
(51, 51, 'Clelland-Stokes', 'Nicolas John', 'Nic', '7202255146081', '1972-02-25', '3 Molteno Flats,22 Molteno Road,Oranjezicht', '3 Molteno Flats,22 Molteno Road,Oranjezicht', '', '', 'nickjclelland@gmail.com', '0716311211', 0, 0, 0, '2014-05-01'),
(52, 52, 'Clemitson', 'Michael John', 'Michael', '7711035171086', '1977-11-03', '657 Val de Vie,Kliprug Minor Road,Paarl 7646', '657 Val de Vie,Kliprug Minor Road,Paarl 7646', '', '', '', '0835011531', 0, 0, 0, '2014-05-01'),
(53, 53, 'Coetzee', 'Morne', 'Morne', '7803145135083', '1978-03-14', '39 Ida Street, Proteahoogte, Brackenfell', '39 Ida Street, Proteahoogte, Brackenfell', '', '', '', '0832691650', 0, 0, 0, '2014-05-01'),
(54, 54, 'Coulier', 'Lies-Marie', 'Lies-Marie', '6004160368185', '1960-04-16', '26 Peeka Street, Stellenbosch', 'P.O. Box 26, Die Boord, Stellenbosch, 7601', '', '', 'liesmariecoulier@gmail.co', '0824949202', 0, 0, 0, '2014-05-01'),
(55, 55, 'Craig', 'Chantele Candice', 'Chantele', '8210290164083', '1982-10-29', '79 Fishermans Village,Muizenberg,7945', '79 Fishermans Village,Muizenberg,7945', '', '', 'c3makeup@yahoo.com', '0827278484', 0, 0, 0, '2014-05-01'),
(56, 56, 'Cromie', 'William', 'William', '8312150056089', '1983-12-15', '13 Aintree Drive,Somerset West 7130', '13 Aintree Drive,Somerset West 7130', '', '', 'William.cromie@mixtelemat', '', 0, 0, 0, '2014-05-01'),
(57, 57, 'Cronje', 'Kevin Garth', 'Kevin Garth', '6711155021005', '1967-11-15', '29 Leeukloof Drive, Tamboerskloof, Cape Town 8001', '29 Leeukloof Drive, Tamboerskloof, Cape Town 8001', '0214240035', '', 'kevin@kles.co.za', '0823227188', 0, 0, 0, '2014-05-01'),
(58, 58, 'Cronje', 'Lynette Daphne', 'Lynette ', '7509100073082', '1975-09-10', '29 Leeukloof Drive, Tamboerskloof, Cape Town 8001', '29 Leeukloof Drive, Tamboerskloof, Cape Town 8001', '', '', 'lynette@kles.co.za', '', 0, 0, 0, '2014-05-01'),
(59, 59, 'Da Silva', 'Helena', 'Helena', '7503050185087', '1975-03-05', '5 Diaz Street,Panorama,7500', '5 Diaz Street,Panorama,7500', '', '', 'mariahdeabreu@gmail.com', '0827152492', 0, 0, 0, '2014-05-01'),
(60, 60, 'Dambrowski', 'Olaf', 'Olaf', '6212285041088', '1962-12-28', 'PO Box 27291,Rhine Rd,Cape Town 8050', 'PO Box 27291,Rhine Rd,Cape Town 8050', '', '', 'olaf@oomkloof.co.za', '0825682784', 0, 0, 0, '2014-05-01'),
(61, 61, 'Daniel', 'Haazim', 'Haazim', '8504245055085', '1985-04-24', '22 Oxford Str,Woodstock,Cape Town', '22 Oxford Str,Woodstock,Cape Town', '', '', 'haaziml@hotmail.com', '0768444093', 0, 0, 0, '2014-05-01'),
(62, 62, 'Davy', 'Nicole', 'Nicole', '', '0000-00-00', '15 Park Road Place, Park Road, Tamboerskloof, 8001', '15 Park Road Place, Park Road, Tamboerskloof, 8001', '', '0216713054', 'nicole@etasa.co.za', '0826457453', 0, 0, 0, '2014-05-01'),
(63, 63, 'De Jager', 'Almarie', 'Almarie', '6301130125087', '1963-01-13', '18 Ou Kaapse Weg,Grabouw', '18 Ou Kaapse Weg,Grabouw', '', '', 'almariedejager@hotmail.co', '0760803764', 0, 0, 0, '2014-05-01'),
(64, 64, 'De Jager', 'Hendrik', 'Hendrik', '6006025103087', '1960-06-02', '18 Ou Kaapse Weg,Grabouw', '18 Ou Kaapse Weg,Grabouw', '', '', 'jdejagerh@telkomsa.net', '0795211224', 0, 0, 0, '2014-05-01'),
(65, 65, 'De Souza', 'Leonora', 'Leonora', '6805040225084', '1968-05-04', '14 Days Walk, Pinelands, 7405', '14 Days Walk, Pinelands, 7405', '', '0214009598', 'leonora.desouzazilwa@cape', '0766550421', 0, 0, 0, '2014-05-01'),
(66, 66, 'De Villiers', 'Carel Christiaan', 'Carel', '8812025088089', '1988-12-02', '14 Otto Du Plessis Rd, Helderrand, Somerset West, 7130', '', '', '', 'careldevilliers@gmail.com', '0767530860', 0, 0, 0, '2014-05-01'),
(67, 67, 'De Vos', 'Pieter Wouter', 'Pieter', '8304145274088', '1983-04-14', '19 Vlamboom Crescent,Blommendal,Bellville 7530', '19 Vlamboom Crescent,Blommendal,Bellville 7530', '', '0218354300', 'pierre@wickedpixels.com', '0721898817', 0, 0, 0, '2014-05-01'),
(68, 68, 'De Vos', 'Roelof Jacobus', 'Roelof', '7104235042085', '1971-04-23', 'Rooiels weg 9,Worcester 6851,Posbus 5234,Worcester 6851', 'Rooiels weg 9,Worcester 6851,Posbus 5234,Worcester 6851', '', '', 'ralphsforklifts@breede.co', '', 0, 0, 0, '2014-05-01'),
(69, 69, 'De Wet', 'Arno', 'Arno', '8901105107081', '1989-01-10', '', '', '', '', 'a.de.wet1989@gmail.com', '0744542197', 0, 0, 0, '2014-05-01'),
(70, 70, 'Devine', 'Kendal', 'Kendal', '9008280037080', '1990-08-28', '44 Doordrift Road,Constantia 7806', '44 Doordrift Road,Constantia 7806', '0217945879', '', 'kendaldevine1@gmail.com', '0794989459', 0, 0, 0, '2014-05-01'),
(71, 71, 'Diessner', 'Martin', 'Martin', '7506210132089', '1975-06-21', '12 Barbara Road,Camps Bay 8500', '12 Barbara Road,Camps Bay 8500', '0214381300', '', 'martin.diessner@gmail.com', '726441760', 0, 0, 0, '2014-05-01'),
(72, 72, 'Diessner', 'Robyn', 'Robyn', '', '0000-00-00', '12 Barbara Road,Camps Bay 8500', '12 Barbara Road,Camps Bay 8500', '', '', 'robyn.diessner@gmail.com', '0726441789', 0, 0, 0, '2014-05-01'),
(73, 73, 'Dijkstra', 'Jelle', 'Jelle', '', '0000-00-00', 'Posbus 1267,Heritage Close,Somerset West,7130', 'Posbus 1267,Heritage Close,Somerset West,7130', '0218513135', '', 'thedijkstras@telkomsa.net', '', 0, 0, 0, '2014-05-01'),
(74, 74, 'Dijkstra', 'Hillegonda Magda Else', 'Gonnie', '', '0000-00-00', 'Posbus 1267,Heritage Close,Somerset West,7130', 'Posbus 1267,Heritage Close,Somerset West,7130', '0218513135', '', '', '', 0, 0, 0, '2014-05-01'),
(75, 75, 'Douglas', 'Andrew James', 'Andrew', '7611266090189', '1976-11-26', '20 Jacobs Ladder,St James,Cape Town', '20 Jacobs Ladder,St James,Cape Town', '0217885509', '', 'andrew@tegsa.co.za', '0737905946', 0, 0, 0, '2014-05-01'),
(76, 76, 'Drake', 'Margaret Judelle', 'Margaret', '4801310064081', '1948-01-31', '20 Margaret Avenue, Pinelands, 7405', '20 Margaret Avenue, Pinelands, 7405', '', '0215313438', 'bookings@bradclin.com', '0827188267', 0, 0, 0, '2014-05-01'),
(77, 77, 'Du Toit', 'B.Wynand', 'Wynand', '7412065223083', '1974-12-06', '196 Fagan Street,Strand 7140', '196 Fagan Street,Strand 7140', '0218536415', '0219484519', 'bwdutoit@gmail.com', '0844793110', 0, 0, 0, '2014-05-01'),
(78, 78, 'Du Toit', 'Lindi Louise', 'Lindi', '7401240030083', '1974-01-24', '196 Fagan Street,Strand 7140', '196 Fagan Street,Strand 7140', '', '', 'lindildt@gmail.com', '0828273777', 0, 0, 0, '2014-05-01'),
(79, 79, 'Du Toit', 'Migiel Josias', 'Migiel', '4206305003187', '1942-06-30', 'Olienhoutstr 21,Prins Alfred Hamlet,6835 (PO Box 191)', 'Olienhoutstr 21,Prins Alfred Hamlet,6835 (PO Box 191)', '0233133527', '', 'Dutoit.giel@gmail.com', '0768940059', 0, 0, 0, '2014-05-01'),
(80, 80, 'Du Toit', 'Levina J.', 'Levina', '4104090003084', '1941-04-09', 'Olienhoutstr 21,Prins Alfred Hamlet,6835 (PO Box 191)', 'Olienhoutstr 21,Prins Alfred Hamlet,6835 (PO Box 191)', '0233133527', '', 'Dutoit.giel@gmail.com', '0768940059', 0, 0, 0, '2014-05-01'),
(81, 81, 'Ehrich', 'Hans', 'Hans', '7309015131087', '1973-09-01', '', '', '', '', 'hans@lhattorneys.co.za', '0823753205', 0, 0, 0, '2014-05-01'),
(82, 82, 'Eksteen', 'Hennie', 'Hennie', '8301135282089', '1983-01-13', '26 Strand Mews,Vredenhof Street,Strand 7400', '26 Strand Mews,Vredenhof Street,Strand 7400', '0218508397', '0219847162', 'hennie@chemcape.co.za', '0791657059', 0, 0, 0, '2014-05-01'),
(83, 83, 'Els', 'Paul Christian', 'Chris', '6901155050084', '1969-01-15', '54 Lourensford Road, Somerset West, 7130', '54 Lourensford Road, Somerset West, 7130', '0218528186', '', 'pcels69@gmail.com', '0795927315', 0, 0, 0, '2014-05-01'),
(84, 84, 'Els', 'Monique Desire', 'Monique', '7111080079088', '1971-11-08', '54 Lourensford Road, Somerset West, 7130', '54 Lourensford Road, Somerset West, 7130', '0218528186', '', 'monique.els@gmail.com', '0797509624', 0, 0, 0, '2014-05-01'),
(85, 85, 'Erasmus', 'Margaretha Fredrika', 'Mika', '8205110054084', '1982-05-11', '14 Beaufort Rd,Milnerton,7440', '14 Beaufort Rd,Milnerton,7440', '', '', 'Mika.erasmus30@gmail.com', '0834136999', 0, 0, 0, '2014-05-01'),
(86, 86, 'Fenton', 'Gregory John', 'Gregory', '6503215191088', '1965-03-21', '12 Ave Francoise,Fresnaye,Cape Town 8000', '12 Ave Froncoise,Fresnaye,Cape Town 8000', '', '', 'gregf@telkomsa.net', '0825891992', 0, 0, 0, '2014-05-01'),
(87, 87, 'Ferreira', 'Loretta Selma', 'Loretta Selma', '6808210057089', '1968-08-21', 'Unit 50, Noordsig 3,Noordsig Avenue,Fishhoek,7975', 'Unit 50, Noordsig 3,Noordsig Avenue,Fishhoek,7975', '', '', 'ferreira.loretta@gmail.co', '0834152108', 0, 0, 0, '2014-05-01'),
(88, 88, 'Forrer', 'Bernard Hein', 'Bernard', '9001115309089', '1990-01-11', '4 Rheezichtlaan,Karindal,Stellenbosch 7600', '4 Rheezichtlaan,Karindal,Stellenbosch 7600', '', '', '15676986@sun.ac.za', '0825196550', 0, 0, 0, '2014-05-01'),
(89, 89, 'Forrer', 'Graeme', 'Graeme', '8610055358087', '1986-10-05', '4 Rheezichtlaan,Karindal,Stellenbosch 7600', '4 Rheezichtlaan,Karindal,Stellenbosch 7600', '', '', 'gforrer@gmail.com', '0825177880', 0, 0, 0, '2014-05-01'),
(90, 90, 'Fortuin', 'Zuon-Pierre', 'Zuon-Pierre', '8908285161085', '1989-08-28', '28 Yarmouth Road,Muizenberg 7945', '28 Yarmouth Road,Muizenberg 7945', '0217887885', '', 'zuan99@gmail.com', '0833843794', 0, 0, 0, '2014-05-01'),
(91, 91, 'Fourie', 'Jacqueline', 'Jacqueline', '8912110184080', '1989-12-11', 'Unit 20021,Bell???Aire ,Somerset West 7130', 'Unit 20021,Bell???Aire ,Somerset West 7130', '', '', 'jacqui.f.1989@gmail.com', '0843040404', 0, 0, 0, '2014-05-01'),
(92, 92, 'Fourie', 'Stoffel', 'Stoffel', '8301185024084', '1983-01-18', '', 'hermanus', '', '', 'Stoffel.fourie@gmail.com', '0812710890', 0, 0, 0, '2014-05-01'),
(93, 93, 'Fray', 'Dale Glenda', 'Dale', '6109120146082', '1961-09-12', '12 Petticoat Lane, Malibu Village, Blue Downs', '31 Washington Road/,12 Petticoat Lane,Malibu Village,Blue Downs 7100', '', '0219481575', 'dale@digiscanwc.co.za', '0785151211', 0, 0, 0, '2014-05-01'),
(94, 94, 'Geldenhuys', 'Girt', 'Girt', '5409305149088', '1954-09-30', '20 Sonnedou,Welgevonden,Stellenbosch 7600', '20 Sonnedou,Welgevonden,Stellenbosch 7600', '', '', 'girt@enstb.co.za', '0728090141', 0, 0, 0, '2014-05-01'),
(95, 95, 'Geldenhuys', 'Marietjie', 'Marietjie', '6002040005084', '1960-02-04', '20 Sonnedou,Welgevonden,Stellenbosch 7600', '20 Sonnedou,Welgevonden,Stellenbosch 7600', '', '', 'marietjie@enstb.co.za', '0823354804', 0, 0, 0, '2014-05-01'),
(96, 96, 'Genade ', 'Morne', 'Morne', '7310075103081', '1973-10-07', '105 Pine Creek,Sir Lowry???s Pass Rd,Somerset West 7130', '105 Pine Creek,Sir Lowry???s Pass Rd,Somerset West 7130', '', '', 'mornegenade@gmail.com', '0723605179', 0, 0, 0, '2014-05-01'),
(97, 97, 'Glazier ', 'Jennifer Elizabeth', 'Jennifer ', '8608170910188', '1986-08-17', '1 Rustenvrede Avenue, Constantia, 7806', '1 Rustenvrede Avenue, Constantia, 7806', '', '', 'jenny.glazier@gmail.com', '0720364067', 0, 0, 0, '2014-05-01'),
(98, 98, 'Goodman', 'Kristi Peta', 'Kristi', '8507170231084', '1985-07-17', '7 Berry Court, Upper Mill Street, Vredehoek, Cape Town, 8001', '7 Berry Court, Upper Mill Street, Vredehoek, Cape Town, 8001', '', '', 'kristi.goodman@gmail.com', '0824985297', 0, 0, 0, '2014-05-01'),
(99, 99, 'Green', 'Ingrid Justine', 'Ingrid', '7203120255081', '1972-03-12', '19 Whyte???s Way,Glencairn,7975', '19 Whyte???s Way,Glencairn,7975', '0217865840', '', 'ijgreen@icloud.com', '0731698145', 0, 0, 0, '2014-05-01'),
(100, 100, 'Grice', 'Teide Dawne', 'Teide', '9201300076085', '1992-01-30', '3 Harman???s Street,Bothasig,Edgemead 7441', '3 Harman???s Street,Bothasig,Edgemead 7441', '0215596449', '', 'teide04@ymail.com', '0767569808', 0, 0, 0, '2014-05-01'),
(101, 101, 'Grift', 'Werner', 'Werner', '7910245024081', '1979-10-24', '17 Wordsworth Rd,Kelderhof Estate,Somerset West 7130', '17 Wordsworth Rd,Kelderhof Estate,Somerset West 7130', '', '', 'griftw@gmail.com', '0762258656', 0, 0, 0, '2014-05-01'),
(102, 102, 'Grobler', 'Pat', 'Pat', '5106060221082', '1951-06-06', '28 Oak Road, Gordons Bay, 7151', '', '0218564893', '', '', '0836779161', 0, 0, 0, '2014-05-01'),
(103, 103, 'Hayman', 'Leney', 'Leney', '5602190036085', '1956-02-19', '9 Rooseveldt Straat,Paarl', '9 Rooseveldt Straat,Paarl', '0218730020/21', '', 'leneyh123@gmail.com', '0760565082', 0, 0, 0, '2014-05-01'),
(104, 104, 'Heydenrych', 'Haydn', 'Haydn', '5810085132089', '1958-10-08', '8 Logies Bay Road, Llandudno, 7806', '', '0216742090 (w)', '', 'haydn@iafrica.net', '0832533387', 0, 0, 0, '2014-05-01'),
(105, 105, 'Heyl', 'Estelle', 'Estelle', '', '0000-00-00', 'P.O. Box 1032, Gansbaai, 7220', 'P.O. Box 1032, Gansbaai, 7220', '', '', 'estelleheyl@telkomsa.net', '0828290656', 0, 0, 0, '2014-05-01'),
(106, 106, 'Heyneman', 'Dirk', 'Dirk', '7604125052086', '1976-04-12', '4 Mauritius Singel,Stellenberg,7550', '4 Mauritius Singel,Stellenberg,7550', '', '', 'dirk@treesonline.co.za', '8429297060845870000', 0, 0, 0, '2014-05-01'),
(107, 107, 'Heyneman', 'Hanneke', 'Hanneke', '7702280151089', '1977-02-28', '', '', '', '', 'hanneke.heyneman@delispic', '', 0, 0, 0, '2014-05-01'),
(108, 108, 'Hitchcock', 'Brian ', 'Brian ', '6609085581082', '1966-09-08', '21 Donkervliet,Pinehurst,Durbanville 7550', '21 Donkervliet,Pinehurst,Durbanville 7550', '0219198397 (w)', '', 'briane@lqt.co.za', '8367660780713540000', 0, 0, 0, '2014-05-01'),
(109, 109, 'Hitchcock', 'Orsculla', 'Orsculla', '7508250144081', '1975-08-25', '', '', '', '', '', '', 0, 0, 0, '2014-05-01'),
(110, 110, 'Hoelper', 'Marcus', 'Marcus', 'L5RPVM2CG', '1973-06-22', 'Fiskaalstraat 3,PO Box 32053,Camps Bay 8040', 'Fiskaalstraat 3,PO Box 32053,Camps Bay 8040', '', '', 'marcus@retrorentals.co.za', '726620704', 0, 0, 0, '2014-05-01'),
(111, 111, 'Hoffman De Villiers', 'Christoffel', 'Christoffel', '6406245028082', '1964-06-24', '4 Cap du Mont,Beach Boulevard,Blouberg', '4 Cap du Mont,Beach Boulevard,Blouberg', '', '', 'info@chrisdevilliers.com', '824380571', 0, 0, 0, '2014-05-01'),
(112, 112, 'Hudson', 'Roger Beresford', 'Roger', '7803225180082', '1978-03-22', '87 Newlands Avenue,Newlands', '87 Newlands Avenue,Newlands', '', '', 'lgrundling@yahoo.de', '7934958280749400000', 0, 0, 0, '2014-05-01'),
(113, 113, 'Hudson', 'Lucia', 'Lucia', '', '0000-00-00', '', '', '', '', '', '', 0, 0, 0, '2014-05-01'),
(114, 114, 'Igesund', 'Keith Derek', 'Keith', '6412095010089', '1964-12-09', 'P.O. Box 1520, Gordon''s Bay, 7151', 'P.O. Box 1520, Gordon''s Bay, 7151', '', '0218560303', 'keith@pnp-gbay.co.za', '0827771339', 0, 0, 0, '2014-05-01'),
(115, 115, 'Immelmann', 'Willem F.', 'Willem', '7604165101082', '1976-04-16', '5 Stewart Street,Kuilsriver,7580', '5 Stewart Street,Kuilsriver,7580', '219061572', '', 'willem@so.co.za', '8285408040716850000', 0, 0, 0, '2014-05-01'),
(116, 116, 'Immelmann', 'Elizma', 'Elizma', '7910200075086', '1979-10-20', '', '', '', '', 'elizma@so.co.za', '', 0, 0, 0, '2014-05-01'),
(117, 117, 'Jacobs', 'Krystal Stacey', 'Krystal', '871119', '1987-11-19', '4 Consort Road,Somerset Park,Heathfield,7945', '4 Consort Road,Somerset Park,Heathfield,7945', '', '', 'Krystal.jacobs@rns.org.za', '741467530', 0, 0, 0, '2014-05-01'),
(118, 118, 'Jacobsen', 'Monica', 'Monica', '', '0000-00-00', '', '', '', '', '', '', 0, 0, 0, '2014-05-01'),
(119, 119, 'Jaffa', 'Nastassia', 'Nastassia', '8403160554083', '1984-03-16', '2 Marais Vernor Court 2, sea point, Cape Town', '2 Marais Vernor Court 2, sea point, Cape Town', '', '', 'nastassia.jaffa@gmail.com', '0833183571', 0, 0, 0, '2014-05-01'),
(120, 120, 'Janse van Rensburg', 'Elizabeth', 'Elizabeth', '6501060085082', '1965-01-06', 'Posbus 1338,Stellenbosch 7600', 'Posbus 1338,Stellenbosch 7600', '', '', 'lizette@so.co.za', '849521735', 0, 0, 0, '2014-05-01'),
(121, 121, 'Janse van Rensburg', 'Riette', 'Riette', '9211230240081', '1992-11-23', 'Posbus 1338,Stellenbosch 7600', 'Posbus 1338,Stellenbosch 7600', '', '', 'riettetjie@gmail.com', '827894042', 0, 0, 0, '2014-05-01'),
(122, 122, 'Janse van Rensburg', 'Stefan J. ', 'Stefan', '7305205035088', '1973-05-20', 'Flat A003,Bosmans Crossing,Onder Papegaaiberg,Stellenbosch', 'Flat A003,Bosmans Crossing,Onder Papegaaiberg,Stellenbosch', '', '', 'stefan@bivio.co.za', '828528357', 0, 0, 0, '2014-05-01'),
(123, 123, 'Jennings', 'Michael Evan', 'Michael', '8008295076082', '1980-08-29', '15 Park Road Place, Park Road, Tamboerskloof, 8001', '15 Park Road Place, Park Road, Tamboerskloof, 8001', '', '', '', '', 0, 0, 0, '2014-05-01'),
(124, 124, 'Jocelyn', 'Sandra', 'Sandra', '7004151307084', '1970-04-15', '12 Ave Francoise,Fresnaye,Cape Town 8000', '12 Ave Francoise,Fresnaye,Cape Town 8000', '', '0214343030', 'senny@icon.co.za', '0824698329', 0, 0, 0, '2014-05-01'),
(125, 125, 'Jooste', 'Francois', 'Francois', '7509065174081', '1975-09-06', '919 Four Seasons,45 Buitekant Street,Zonnebloem,7925', '919 Four Seasons,45 Buitekant Street,Zonnebloem,7925', '', '', 'Francois.jooste@gmail.com', '0845766850', 0, 0, 0, '2014-05-01'),
(126, 126, 'Joubert', 'Machteld  Petronella', 'Machteld', '8608150064089', '1986-08-15', '13 Chiraz Str,Klein Welgemoed,Stellenbosch 7600', '13 Chiraz Str,Klein Welgemoed,Stellenbosch 7600', '', '', 'marniejoubert@gmail.com', '0832906678', 0, 0, 0, '2014-05-01'),
(127, 127, 'Julies', 'Anthony', 'Anthony', '6712295234086', '1967-12-29', '11 Tiger Street,Windsor Park,Kraaifontein', '11 Tiger Street,Windsor Park,Kraaifontein', '', '', 'antoniajulies@gmail.com', '0845921121', 0, 0, 0, '2014-05-01'),
(128, 128, 'Julies', 'Lizette', 'Lizette', '7006150249084', '1970-06-15', '11 Tiger Street,Windsor Park,Kraaifontein', '11 Tiger Street,Windsor Park,Kraaifontein', '', '', '', '', 0, 0, 0, '2014-05-01'),
(129, 129, 'Julyan', 'Enrique Edward', 'Enrique', '8809165047081', '1988-09-16', '20A Herold Street, Stellenbosch', '20A Herold Street, Stellenbosch', '', '', 'julyan.enrique@gmail.com', '0845812100', 0, 0, 0, '2014-05-01'),
(130, 130, 'Kandawire', 'Khumbulau Precious', 'Khumbulau ', '', '1987-07-31', 'B6 Fairdale,Avondale Terrace,Diepriver 7800', 'B6 Fairdale,Avondale Terrace,Diepriver 7800', '', '', 'khumbulau@hotmail.com', '0735543840', 0, 0, 0, '2014-05-01'),
(131, 131, 'Kannemeyer', 'Andrew', 'Andrew', '6605115214082', '1966-05-11', '3A Park Island Way,Marina da Gama,Muizenberg  7945', '3A Park Island Way,Marina da Gama,Muizenberg  7945', '', '', 'apkannemeyer@gmail.com', '', 0, 0, 0, '2014-05-01'),
(132, 132, 'Kannemeyer', 'Renee Alison', 'Renee', '7312040079081', '1973-12-04', '3A Park Island Way,Marina da Gama,Muizenberg  7945', '3A Park Island Way,Marina da Gama,Muizenberg  7945', '', '', 'renee@activateleadership.', '0827728694', 0, 0, 0, '2014-05-01'),
(133, 133, 'Kistan', 'Magan', 'Magan', '8301045099086', '1983-01-04', '', '', '', '', 'magzjr@hotmail.com', '0716707353', 0, 0, 0, '2014-05-01'),
(134, 134, 'Kleyn', 'Francois', 'Francois', '', '0000-00-00', '31A Riesling Rd,Somerset West 7130', '31A Riesling Rd,Somerset West 7130', '', '', 'fjkleyn@gmail.com', '0823324220', 0, 0, 0, '2014-05-01'),
(135, 135, 'Kleyn', 'John', 'John', '5909265062080', '1959-09-26', '31A Riesling Rd,Somerset West 7130', '31A Riesling Rd,Somerset West 7130', '0218554767', '', 'accurate@iafrica.com', '0824555129', 0, 0, 0, '2014-05-01'),
(136, 136, 'Kleyn', 'Delicia', 'Delicia', '6112230100080', '1961-12-23', '', '', '', '', 'delecia.kleyn@eikenhof.co', '0823799949', 0, 0, 0, '2014-05-01'),
(137, 137, 'Knott', 'Melissa', 'Melissa', '8011240057082', '1980-11-24', '', '', '', '', 'melissa@nexiasa.com', '', 0, 0, 0, '2014-05-01'),
(138, 138, 'Knott', 'Gareth Robert', 'Gareth Robert', '8205311517081', '1982-05-31', '', '', '', '', '', '', 0, 0, 0, '2014-05-01'),
(139, 139, 'Koen', 'Willie', 'Willie', '6401255133088', '1964-01-25', 'Suite 2001,Vincent Palotti', 'Suite 2001,Vincent Palotti', '0216863918', '', 'wkoen@iafrica.co.za', '0829209506', 0, 0, 0, '2014-05-01'),
(140, 140, 'Koen', 'Lienie', 'Lienie', '6410260074088', '1964-10-26', 'Suite 2001,Vincent Palotti', 'Suite 2001,Vincent Palotti', '', '', 'lieniekoen@iafrica.co.za', '', 0, 0, 0, '2014-05-01'),
(141, 141, 'Koker', 'Robert Charles', 'Robert', '7502055174088', '1975-02-05', '', '', '', '', '', '', 0, 0, 0, '2014-05-01'),
(142, 142, 'Kotze', 'Dawie', 'Dawie', '5607085078084', '1956-07-08', '', '', '', '', '', '', 0, 0, 0, '2014-05-01'),
(143, 143, 'Krige', 'Anton Jacques', 'Anton', '8202095266080', '1982-02-09', '1 Rustenvrede Avenue, Constantia, 7806', '1 Rustenvrede Avenue, Constantia, 7806', '', '', 'antonkrige@gmail.com', '0603055111', 0, 0, 0, '2014-05-01'),
(144, 144, 'Kruger', 'Clara-Ann', 'Clara-Ann', '8806260188083', '1988-06-26', '16 T???Wagenpad,Park Island,Marina da Gama 7945', '16 T???Wagenpad,Park Island,Marina da Gama 7945', '0217881822', '', 'Kruger.clara@gmail.com', '0834733506', 0, 0, 0, '2014-05-01'),
(145, 145, 'Kruger', 'Riann', 'Riann', '6501245036083', '1965-01-24', 'Wortelgat Farm,Stanford', 'Wortelgat Farm,Stanford', '', '', 'manager@wortelgat.org.za', '', 0, 0, 0, '2014-05-01'),
(146, 146, 'Kruger', 'Lynne Merle', 'Lynne', '640212', '1964-02-12', 'Wortelgat Farm,Stanford', 'Wortelgat Farm,Stanford', '', '', 'manager@wortelgat.org.za', '', 0, 0, 0, '2014-05-01'),
(147, 147, 'Lahav', 'Hannelie G.', 'Hannelie', '7303050155085', '1973-03-05', '', '', '', '', 'han@finecuts.co.za', '0832299081', 0, 0, 0, '2014-05-01'),
(148, 148, 'Lamers', 'Franz', 'Franz', '7604085123083', '1976-04-08', '21 La Montagne, Somerset West 7130', '21 La Montagne, Somerset West 7130', '0218550537', '', 'info@infiniteq.co.za', '0827847576', 0, 0, 0, '2014-05-01'),
(149, 149, 'Larney', 'Rafeeq', 'Rafeeq', '', '0000-00-00', '24 Oummah Close,Zonnebloem,Cape Town 7925', '24 Oummah Close,Zonnebloem,Cape Town 7925', '', '', 'larnayrafeeq1@gmail.com', '0842993119', 0, 0, 0, '2014-05-01'),
(150, 150, 'Le Roux ', 'Ernie S.', 'Ernie', '8405215149082', '1984-05-21', '2 Islander Close,Gordons Bay 7140', '2 Islander Close,Gordons Bay 7140', '', '', 'ernie10leroux@gmail.com', '0734161449', 0, 0, 0, '2014-05-01'),
(151, 151, 'Leuvennink', 'Bern ', 'Bern ', '8003095029084', '1980-03-09', '', '', '', '', 'bernleuven@gmail.com', '0827017394', 0, 0, 0, '2014-05-01'),
(152, 152, 'Leuwennink', 'Mildie', 'Mildie', '7704030006084', '1977-04-03', '17 Flaminksingel,Outeniqua Strand,Glentana', 'Posbus 1190, Groot Brak Rivier, 6525', '0448790393', '', 'mildiel@gmail.com', '0820624617', 0, 0, 0, '2014-05-01'),
(153, 153, 'Liebenberg ', 'Johan', 'Johan', '6904255030089', '1969-04-25', '', '', '', '', 'coenie@liebengroup.co.za', '0829632021', 0, 0, 0, '2014-05-01'),
(154, 154, 'Lindstrom', 'Charles John', 'Charles', '5102045001087', '1951-02-04', '4310 Wallers Way,Bettys Bay', '4310 Wallers Way,Bettys Bay', '0282729852', '', 'cjlind@sonicmail.co.za', '0825576398', 0, 0, 0, '2014-05-01'),
(155, 155, 'Lindstrom', 'Isa', 'Isa', '5006240043085', '1950-06-24', '4310 Wallers Way,Bettys Bay', '4310 Wallers Way,Bettys Bay', '0282729852', '', 'isalindstrom@sonicmail.co', '0827427866', 0, 0, 0, '2014-05-01'),
(156, 156, 'Lisk', 'Leigh Thomas', 'Leigh', '6911265172082', '1969-11-26', '24 St Quintons Road, Oranjezicht, Cape Town', '24 St Quintons Road, Oranjezicht, Cape Town', '', '', 'leighandlucy@gmail.com', '0797965378', 0, 0, 0, '2014-05-01'),
(157, 157, 'Lobi', 'Thamsanqa C', 'Thamsanqa', '5105105579082', '1951-05-10', '16 Maracarbo Street,Blue Downs,7100', '16 Maracarbo Street,Blue Downs,7100', '0731984463', '', '', '0721477942', 0, 0, 0, '2014-05-01'),
(158, 158, 'Lombard', 'Jason', 'Jason', '7504175156086', '1975-04-17', '40 Spanish Oak,Oak Glen,Bellville 7530', '40 Spanish Oak,Oak Glen,Bellville 7530', '0215251000', '', 'jason.lombard2@gmail.com', '0787848298', 0, 0, 0, '2014-05-01'),
(159, 159, 'Lombard', 'Schalk', 'Schalk', '7311285187088', '1973-11-28', '', '', '', '', 'han@finecuts.co.za', '', 0, 0, 0, '2014-05-01'),
(160, 160, 'Louw', 'Marelize Elizabeth', 'Marelize', '6707035038086', '1967-07-03', '3 Navarre Street, Somerset West', '3 Navarre Street, Somerset West', '0218552845', '', 'marelizelouw@hotmail.com', '0836641499', 0, 0, 0, '2014-05-01'),
(161, 161, 'Louw', 'Fritz', 'Fritz', '7112045079080', '1971-12-04', 'Postnet Suite 182, Gordon''s Bay', 'Postnet Suite 182, Gordon''s Bay', '', '', 'fritzlouw@yahoo.com', '', 0, 0, 0, '2014-05-01'),
(162, 162, 'Louw', 'Charnnel', 'Charnnel', '5902280102080', '1959-02-28', 'Postnet Suite 182, Gordon''s Bay', 'Postnet Suite 182, Gordon''s Bay', '', '', 'fritzlouw71@yahoo.com', '', 0, 0, 0, '2014-05-01'),
(163, 163, 'Luttig', 'Madeleine', 'Madeleine', '7709050019081', '1977-09-05', '41 Silver Oaks Way,Kuilsriver 7580', '41 Silver Oaks Way,Kuilsriver 7580', '0219031655', '', 'madeleinluttig@yahoo.co.u', '0795590904', 0, 0, 0, '2014-05-01'),
(164, 164, 'Maartens', 'Eduard', 'Eduard', '8702015129086', '1987-02-01', '19 Endive Street, Ferndale, Brackenfell', '19 Endive Street, Ferndale, Brackenfell', '', '', 'eduardm@webmail.co.za', '0847077525', 0, 0, 0, '2014-05-01'),
(165, 165, 'MacNab', 'Michele', 'Michele', '8201220654186', '1982-01-22', '3 Mobema Court,91 Upper Mill Street,Vredehoek 8801', '3 Mobema Court,91 Upper Mill Street,Vredehoek 8801', '0214233519', '', 'michele@wwc.co.za', '0791384209', 0, 0, 0, '2014-05-01'),
(166, 166, 'Madhi', 'Yusuf', 'Yusuf', '8905125079089', '1989-05-12', '5 Blourandt,10 Willow Road,Blouberg Rise,7441', '5 Blourandt,10 Willow Road,Blouberg Rise,7441', '', '', 'yusufmadhi@gmail.com', '', 0, 0, 0, '2014-05-01'),
(167, 167, 'Mamdoo', 'Collin R.', 'Collin', '7507235147086', '1975-07-23', '8 Clydesbank Crescent,Parklands', '8 Clydesbank Crescent,Parklands', '0873530547', '', 'collin@is.co.za', '0829262644', 0, 0, 0, '2014-05-01'),
(168, 168, 'Maritz', 'CJ ', 'Hanno', '7101175193084', '1971-01-17', 'Pasella Plaas,Gwayang,George,Posbus 2099,George 6530', 'Pasella Plaas,Gwayang,George,Posbus 2099,George 6530', '0448760176', '', 'hmaritz71@gmail.com', '0767303225', 0, 0, 0, '2014-05-01'),
(169, 169, 'Maritz', 'Petro', 'Petro', '7301240191085', '1973-01-24', 'Pasella Plaas,Gwayang,George,Posbus 2099,George 6530', 'Pasella Plaas,Gwayang,George,Posbus 2099,George 6530', '', '', 'overbergmaritze@gmail.com', ' 0822652377', 0, 0, 0, '2014-05-01'),
(170, 170, 'Marx', 'Janel', 'Janel', '9007230037083', '1990-07-23', '84 4de Laan,Boston,Bellville', '84 4de Laan,Boston,Bellville', '0227720742', '', 'janelmarx@gmail.com', '0732460772', 0, 0, 0, '2014-05-01'),
(171, 171, 'Mbali', 'Luyanda', 'Luyanda', '8601055451089', '1986-01-05', '66 Hester Street,Kuilriver,7580', '66 Hester Street,Kuilriver,7580', '', '0217891300', 'mikambali@yahoo.com', '0826854613', 0, 0, 0, '2014-05-01'),
(172, 172, 'McLuckie', 'Ian Samuel', 'Ian', '8210125208089', '1982-10-12', '', '', '', '', 'iansamuelmcluckie@gmail.c', '0726214035', 0, 0, 0, '2014-05-01'),
(173, 173, 'Minnaar', 'Jason', 'Jason', '7504015239084', '1975-04-01', '36 Royal Fan Crescent,Fernwood Estate,Somerset West', '36 Royal Fan Crescent,Fernwood Estate,Somerset West', '0218520165', '', 'jasonmi@nedbank.co.za', '', 0, 0, 0, '2014-05-01'),
(174, 174, 'Minnaar', 'Tania Leslene', 'Tania', '7801290053085', '1978-01-29', '36 Royal Fan Crescent,Fernwood Estate,Somerset West', '36 Royal Fan Crescent,Fernwood Estate,Somerset West', '', '', 'Tania@whatsathinks.com', '0739118612', 0, 0, 0, '2014-05-01'),
(175, 175, 'Mokaya', 'Treasure', 'Treasure', '8906295300081', '1989-06-29', '3 De Beers Street,Paardevlei,Somerset West 7130', '3 De Beers Street,Paardevlei,Somerset West 7130', '', '', 'treasuremoh@gmail.com', '0789688346', 0, 0, 0, '2014-05-01'),
(176, 176, 'Mori', 'Andrew Michael', 'Andrew', '8303015213085', '1983-03-01', '21 Milner Road,Tamboerskloof,Cape Town 8000', '21 Milner Road,Tamboerskloof,Cape Town 8000', '', '', 'mallet@gmail.com', '0710352861', 0, 0, 0, '2014-05-01'),
(177, 177, 'Mules-Berry', 'John David', 'John', '5201175087088', '1952-01-17', '9 Daffodil Way,Pinelands,7405,Box 702,Howard Place,7450', '9 Daffodil Way,Pinelands,7405,Box 702,Howard Place,7450', '', '', 'JDMB@absamail.co.za', '0835464643', 0, 0, 0, '2014-05-01'),
(178, 178, 'Muller', 'Nico', 'Nico', '6210220119084', '1962-10-22', 'Dolphin 3318,Betty???s Bay', 'Dolphin 3318,Betty???s Bay', '0282729855', '', 'nico@marinameubels.co.za', '', 0, 0, 0, '2014-05-01'),
(179, 179, 'Muller', 'Maria Magdalena', 'Marina', '', '0000-00-00', 'Dolphin 3318,Betty???s Bay', 'Dolphin 3318,Betty???s Bay', '', '', 'nico@marinameubels.co.za', '', 0, 0, 0, '2014-05-01'),
(180, 180, 'Naidoo', 'Narendra', 'Narendra', '8704175167088', '1987-04-17', '19 Soldier Way,Summer Greens,Milnerton,7441', '19 Soldier Way,Summer Greens,Milnerton,7441', '0215516468', '', 'Narendra.naidoo25@gmail.c', '', 0, 0, 0, '2014-05-01'),
(181, 181, 'Naude', 'Eduan Willem', 'Eduan', '9005215168089', '1990-05-21', 'Simonsrust Unit 6,Stellenbosch 7600', 'Simonsrust Unit 6,Stellenbosch 7600', '', '', 'eduan@wec-consult.co.za', '0835610923', 0, 0, 0, '2014-05-01'),
(182, 182, 'Neethling', 'Verena', 'Verena', '8512080213081', '1985-12-08', '18 Queen Street,Worcester,6850', '18 Queen Street,Worcester,6850', '0233472790', '', 'vneethling@gmail.com', '0840551160', 0, 0, 0, '2014-05-01'),
(183, 183, 'Nigrini', 'Adriaan Jacobus', 'Adriaan', '3503235023082', '1935-03-23', '703 La Mer ,21 Beach Road,Strand', '703 La Mer ,21 Beach Road,Strand', '', '', 'attienigini@telkomsa.net', '0825581877', 0, 0, 0, '2014-05-01'),
(184, 184, 'Nigrini', 'Leandri', 'Leandri', '8903030187089', '1989-03-03', '25 Herchel Str', '25 Herchel Str', '', '', 'leandri.nigrini@gmail.com', '0843037842', 0, 0, 0, '2014-05-01'),
(185, 185, 'Nigrini', 'Leutje', 'Leutje', '5710050185080', '1957-10-05', '703 La Mer ,21 Beach Road,Strand', '703 La Mer ,21 Beach Road,Strand', '', '', 'attienigini@telkomsa.net', '', 0, 0, 0, '2014-05-01'),
(186, 186, 'Ninow', 'Amanda Trudy', 'Amanda', '7207050095086', '1972-07-05', '24 New Forest Crescent,Tableview 7441', '24 New Forest Crescent,Tableview 7441', '', '0214765400', 'amanda@thetalentexchange.', '0833081354', 0, 0, 0, '2014-05-01'),
(187, 187, 'Nortje', 'Cornelius Johannes', 'Cornelius ', '8411235129088', '1984-11-23', 'Postal:,P.O. Box 130,Private Bag X4,Die Boord,Stellenbosch,7610', 'Postal:,P.O. Box 130,Private Bag X4,Die Boord,Stellenbosch,7610', '0218802427', '', 'neelsien@hotmail.com', '0726107006', 0, 0, 0, '2014-05-01'),
(188, 188, 'O???Brien', 'David Patrick', 'David', '5004145130081', '1950-04-14', '24 Parel Vallei Rd,Stuart???s Hill,Somerset West 7130', '24 Parel Vallei Rd,Stuart???s Hill,Somerset West 7130', '0218524984', '', 'paddy@liftandshift.co.za', '0834615821', 0, 0, 0, '2014-05-01'),
(189, 189, 'O???Brien', 'Cheri-Ann Madelein', 'Madelein', '6811280114087', '1968-11-28', '24 Parel Vallei Rd,Stuart???s Hill,Somerset West 7130', '24 Parel Vallei Rd,Stuart???s Hill,Somerset West 7130', '0218524984', '', 'madeleinobrien@gmail.com', '0834598431', 0, 0, 0, '2014-05-01'),
(190, 190, 'Odendaal', 'Luzaan', 'Luzaan', '9002110050082', '1990-02-11', '11 Watsonia Road,Bloubergrandt,7441', '11 Watsonia Road,Bloubergrandt,7441', '0215572501', '', 'Luzaan.odendaal@gmail.com', '826156643', 0, 0, 0, '2014-05-01'),
(191, 191, 'Odendaal', 'Riaan', 'Riaan', '6101275042083', '1961-01-27', '11 Watsonia Road,Bloubergrandt,7441', '11 Watsonia Road,Bloubergrandt,7441', '', '', 'riaan@firstcoast.co.za', '0828007297', 0, 0, 0, '2014-05-01'),
(192, 192, 'Odendaal', 'Riaan Dirk', 'Dirk', '9203045326089', '1992-03-04', 'Marrick Safari,R 357,Kimberley', 'Marrick Safari,R 357,Kimberley', '', '', 'Riaand.odendaal@gmail.com', '0826156642', 0, 0, 0, '2014-05-01'),
(193, 193, 'Olivier', 'Gerhard', 'Gerhard', '8108255074083', '1981-08-25', 'A19 HighStrand,Waterkant str,GreenPoint', 'A19 HighStrand,Waterkant str,GreenPoint', '', '', 'Gerhard@greax.com', '0824171483', 0, 0, 0, '2014-05-01'),
(194, 194, 'Oppermann', 'Marnita', 'Marnita', '8101070047087', '1981-01-07', '55 Union Avenue, Pinelands', '55 Union Avenue, Pinelands', '', '', 'marnita1981@gmail.com', '0822254197', 0, 0, 0, '2014-05-01'),
(195, 195, 'Payne', 'Michelle', 'Michelle', '8107270074086', '1981-07-27', '5 Van Nierop Crescent,Panorama,7500', '5 Van Nierop Crescent,Panorama,7500', '', '', 'michellepayne@gmail.com', '0843616714', 0, 0, 0, '2014-05-01'),
(196, 196, 'Phernambucq', 'Gysbertus E.A.', 'Gysbertus ', '3109235060189', '1931-09-23', '8 St Croix Close,Gordons Bay 7140', '8 St Croix Close,Gordons Bay 7140', '0218563907', '', '', '0714510541', 0, 0, 0, '2014-05-01'),
(197, 197, 'Phillips', 'Shane', 'Shane', '8004155128089', '1980-04-15', '6 Bordeaux,Pinot Blanc Str,Burgundy Estate,Posbus 1531,Milnerton', '6 Bordeaux,Pinot Blanc Str,Burgundy Estate,Posbus 1531,Milnerton', '0215503667', '', 'shane.phillips@bcx.co.za', '0810256118', 0, 0, 0, '2014-05-01'),
(198, 198, 'Pienaar', 'Gregory Edward', 'Gregory Edward', '6304055044085', '1963-04-05', '9 Otto du Plessis Rd,Helderrand,Somerset West 7130', '9 Otto du Plessis Rd,Helderrand,Somerset West 7130', '0218518864', '', 'gsrmp@mweb.co.za', '0824404306', 0, 0, 0, '2014-05-01'),
(199, 199, 'Pienaar', 'Riaan', 'Riaan', '', '0000-00-00', '', '', '', '', '', '', 0, 0, 0, '2014-05-01'),
(200, 200, 'Pieterse', 'Louis', 'Louis', '7706065002086', '1977-06-06', '19 Montserrat,Somerset-Wes,18 Hof Avenue Stellenbosch', '19 Montserrat,Somerset-Wes,18 Hof Avenue Stellenbosch', '', '', 'louis.pieterse@gmail.com', '833272752', 0, 0, 0, '2014-05-01'),
(201, 201, 'Pinenkova', 'Alexandra', 'Alexandra', '', '1992-02-07', '9 Ananda House, 195 Main Road, Greenpoint, Cape Town', '9 Ananda House, 195 Main Road, Greenpoint, Cape Town', '', '', 'SashaPinenkova@gmail.com', '0797992436', 0, 0, 0, '2014-05-01'),
(202, 202, 'Powell', 'Mia Melissa', 'Mia', '6810280224086', '1968-10-28', '15 Kingsgate, 301 Beach Road, Sea Point', '15 Kingsgate, 301 Beach Road, Sea Point', '', '', 'miapowell88@gmail.com', '0781942885', 0, 0, 0, '2014-05-01'),
(203, 203, 'Pretorius', 'Ashley', 'Ashley', '8303315354084', '1983-03-31', '13 Geneva Rd,Steenberg,7945', '13 Geneva Rd,Steenberg,7945', '', '', 'ashley.pretorius@dhl.com', '0763628719', 0, 0, 0, '2014-05-01'),
(204, 204, 'Pretorius', 'Robert Mark', 'Robert ', '6101105178081', '1961-01-10', '46 Montague Road, Maitland', '46 Montague Road, Maitland', '0215104882', '', 'lucille_pretorius@yahoo.c', '0767441091', 0, 0, 0, '2014-05-01'),
(205, 205, 'Pretorius', 'Lucille ', 'Lucille ', '5908220220080', '1959-08-22', '46 Montague Road, Maitland', '46 Montague Road, Maitland', '0215104882', '', 'lucille_pretorius@yahoo.c', '0782204610', 0, 0, 0, '2014-05-01'),
(206, 206, 'Prins', 'Laetitia', 'Laetitia', '8605090141084', '1986-05-09', '4 Saasveld Villas,Saasveld Str,Bellville 7530', '4 Saasveld Villas,Saasveld Str,Bellville 7530', '0216805920', '', 'prins.laetitia0@gmail.com', '836559915', 0, 0, 0, '2014-05-01'),
(207, 207, 'Prinsloo', 'Maria Elizabeth', 'Bapsie', '7209098889085', '1972-09-09', '23 Kleinbosch Crescent,Kleinbosch,7500', '23 Kleinbosch Crescent,Kleinbosch,7500', '', '', 'bapsiep@gmail.com', '', 0, 0, 0, '2014-05-01'),
(208, 208, 'Rabie', 'Johan Hendrik', 'Johan', '7603305077087', '1976-03-30', '103 Tredonne Estate,Sir Lowry???s Pass', '103 Tredonne Estate,Sir Lowry???s Pass', '0218581323', '', 'caperaven@caperaven.co.za', '0824915742', 0, 0, 0, '2014-05-01'),
(209, 209, 'Rabie', 'Christine Maria Margaret', 'Christine', '7804100242088', '1978-04-10', '103 Tredonne Estate,Sir Lowry???s Pass', '103 Tredonne Estate,Sir Lowry???s Pass', '0218581323', '', 'Christine@caperaven.co.za', ' 0834728635', 0, 0, 0, '2014-05-01'),
(210, 210, 'Reichlin', 'Ruth', 'Ruth', '3512140019085', '1935-12-14', '17 Burgee Bend,Marina da Gama,Cape Town 7945', '17 Burgee Bend,Marina da Gama,Cape Town 7945', '0217885563', '', 'ruthreichlin@gmail.com', '0734237705', 0, 0, 0, '2014-05-01'),
(211, 211, 'Rhode', 'Flavian', 'Flavian', '', '0000-00-00', '', '', '', '', 'flavian@positivevibes.org', '0715444005', 0, 0, 0, '2014-05-01'),
(212, 212, 'Richards', 'Kyle Neville', 'Kyle ', '8805095088088', '1988-05-09', '21Saxonberg Rd,Edgemead 7441', '21Saxonberg Rd,Edgemead 7441', '0215594393', '', 'knr4988@gmail.com', '0846706920', 0, 0, 0, '2014-05-01'),
(213, 213, 'Rose ', 'Denis John', 'Denis', '5501125134082', '1955-01-12', '19 Whyte???s Way,Glencairn,7975', '19 Whyte???s Way,Glencairn,7975', '0217865840', '', '', '0837117521', 0, 0, 0, '2014-05-01'),
(214, 214, 'Rosenblatt', 'Morris', 'Morris', '5712085050081', '1957-12-08', 'Centraalweg 365,Pringle Bay,7196', 'Centraalweg 365,Pringle Bay,7196', '', '', '', '0828260886', 0, 0, 0, '2014-05-01'),
(215, 215, 'Rousseau', 'Le-Daan', 'Le-Daan', '8406065162084', '1984-06-06', '13 Leerdamstraat,Strand,7140', '13 Leerdamstraat,Strand,7140', '0218546051', '', 'ledaanr@gmail.com', '0796440548', 0, 0, 0, '2014-05-01'),
(216, 216, 'Rousseau', 'Ronette', 'Ronette', '8707070078086', '1987-07-07', '13 Leerdamstraat,Strand,7140', '13 Leerdamstraat,Strand,7140', '0218546051', '', 'rvangreunen@eike.co.za', '0833931556', 0, 0, 0, '2014-05-01'),
(217, 217, 'Sadie', 'Jaco Marthinus J', 'Jaco ', '6804155177081', '1968-04-15', '10 Chestnut Street,Bellville,7530', '10 Chestnut Street,Bellville,7530', '', '', 'jaco@dukesdisco.co.za', '0834620820', 0, 0, 0, '2014-05-01'),
(218, 218, 'Saleni', 'Phumzile', 'Phumzile', '8803056033086', '1988-03-05', '202 Parkview Villas 2,22 Roger Street,Tygervalley 7535', '202 Parkview Villas 2,22 Roger Street,Tygervalley 7535', '', '', 'thasaleni@gmail.com', '', 0, 0, 0, '2014-05-01'),
(219, 219, 'Sandler', 'Gary', 'Gary', '7907255072083', '1979-07-25', '28 Lobelin Street,Milnerton,7441', '28 Lobelin Street,Milnerton,7441', '0214084119', '', 'garysandler@gmail.com', '0790809127', 0, 0, 0, '2014-05-01'),
(220, 220, 'Sandler', 'Elana', 'Elana', '8104130011085', '1981-04-13', '28 Lobelin Street,Milnerton,7441', '28 Lobelin Street,Milnerton,7441', '0214084119', '', '', '', 0, 0, 0, '2014-05-01'),
(221, 221, 'Santo', 'Emmission Kobela', 'Emmission ', '7910260435089', '1979-10-26', '48 Hyde Park, Jetty Street, Foreshore, Cape Town', '48 Hyde Park, Jetty Street, Foreshore, Cape Town', '', '', 'emmission.sephesu@pgwc.go', '0824434312', 0, 0, 0, '2014-05-01'),
(222, 222, 'Saunders', 'Annette', 'Annette', '', '1964-06-12', '', '', '', '', 'peperboom@telkomsa.net', '', 0, 0, 0, '2014-05-01'),
(223, 223, 'Scholtz', 'Martha Maria', 'Martha Maria', '3609280004081', '1936-09-28', '34 3de Laan,Wellington 7655,Res:,10 Becca Street,Blouwaterbaai,Saldanha 7395', '34 3de Laan,Wellington 7655,Res:,10 Becca Street,Blouwaterbaai,Saldanha 7395', '0227140670', '', '', '0828789497', 0, 0, 0, '2014-05-01'),
(224, 224, 'Schuitmaker', '', '', '8812250108081', '1988-12-25', '3 Stepping Stones,Eversdal,Durbanville', '3 Stepping Stones,Eversdal,Durbanville', '', '', 'nicoles@sun.ac.za', '0766408550', 0, 0, 0, '2014-05-01');
INSERT INTO `entities_contacts` (`ecid`, `eid`, `lastname`, `firstname`, `preferredname`, `idnumber`, `dateofbirth`, `physicaladdress`, `postaladdress`, `homephone`, `officephone`, `email`, `mobile`, `fica_id`, `fica_poa`, `fica_sars`, `updated`) VALUES
(225, 225, 'Schulman', 'Adam', 'Adam', '7011195528088', '1970-11-19', '3 Stepping Stones,Eversdal,Durbanville', '3 Stepping Stones,Eversdal,Durbanville', '', '', 'adfamilyil@gmail.com', '0823476558', 0, 0, 0, '2014-05-01'),
(226, 226, 'Schulman', 'Jill', 'Jill', '6706090033081', '1967-06-09', '', '', '', '', 'jill@jsdcreative.com', '0722492202', 0, 0, 0, '2014-05-01'),
(227, 227, 'Schwarz', 'Melony', 'Melony', '5402280159081', '1954-02-28', '32 Mitchell Street, Hermanus, 7200', '32 Mitchell Street, Hermanus, 7200', '', '', 'melonyschwarz@gmail.com', '0823254918', 0, 0, 0, '2014-05-01'),
(228, 228, 'Seekopp', 'Judith', 'Judith', '', '0000-00-00', '4 Geneva Drive,Camps Bay,8005', '4 Geneva Drive,Camps Bay,8005', '', '', 'Judith.seekopp@hotmail.co', '0788310496', 0, 0, 0, '2014-05-01'),
(229, 229, 'Seyfert', 'Marc Alexander', 'Marc', '360713317', '1974-05-29', '109 Bantry Place, 323 Beach Road, Bantry Bay 8005', '109 Bantry Place, 323 Beach Road, Bantry Bay 8005', '0214332519', '', 'alex.barache@hotmail.com', '0795255399', 0, 0, 0, '2014-05-01'),
(230, 230, 'Shaw', 'Brendon C.Elisabeth MC', 'Brendon ', '8204255044083', '1982-04-25', '22 Cape Vistas,Mount Fuji,Vredehoek,8001', '22 Cape Vistas,Mount Fuji,Vredehoek,8001', '', '', 'brendonshaw@gmail.com,', '845873804', 0, 0, 0, '2014-05-01'),
(231, 231, 'Shaw', 'Elisabeth', 'Elisabeth', '8007170056086', '1980-07-17', '22 Cape Vistas,Mount Fuji,Vredehoek,8001', '22 Cape Vistas,Mount Fuji,Vredehoek,8001', '', '', 'lizshaw5@gmail.com', '0820800561', 0, 0, 0, '2014-05-01'),
(232, 232, 'Sheard', 'Nick', 'Nick', '8111105477084', '1981-11-10', 'Unit 46 High Strand Boundary Road,Green Point 7708,Post:,79 Sandown Road,Rondebosch 7700', 'Unit 46 High Strand Boundary Road,Green Point 7708,Post:,79 Sandown Road,Rondebosch 7700', '', '0215294927', 'nickssheard@gmail.com', '0766230121', 0, 0, 0, '2014-05-01'),
(233, 233, 'Sheard', 'Kim', 'Kim', '', '1981-10-21', 'Unit 46 High Strand Boundary Road,Green Point 7708,Post:,79 Sandown Road,Rondebosch 7700', 'Unit 46 High Strand Boundary Road,Green Point 7708,Post:,79 Sandown Road,Rondebosch 7700', '', '', '', '', 0, 0, 0, '2014-05-01'),
(234, 234, 'Sher', 'Jennie', 'Jennie', '4912210108181', '1949-12-21', '485 Helderberg Village,Somerset West 7130', '485 Helderberg Village,Somerset West 7130', '0218553395', '', 'jgreenspan@telkomsa.net', '0837110968', 0, 0, 0, '2014-05-01'),
(235, 235, 'Siqithi', 'Zizonke', 'Zizonke', '8512070630088', '1985-12-07', '16 Springdale Villas,Loubscher Street,Brackenfell 7560', '16 Springdale Villas,Loubscher Street,Brackenfell 7560', '', '', 'zizonkes@sassa.gov.za', '', 0, 0, 0, '2014-05-01'),
(236, 236, 'Smeyatsky', 'Israel', 'Israel', '2811175072089', '1928-11-17', '3A Clifford Rd,Sea Point,8005', '3A Clifford Rd,Sea Point,8005', '0214340516', '', 'wrestler@pixie.co.za', '0845768678', 0, 0, 0, '2014-05-01'),
(237, 237, 'Smeyatsky', 'Elsa', 'Elsa', '2905300062088', '1929-05-30', '3A Clifford Rd,Sea Point,8005', '3A Clifford Rd,Sea Point,8005', '0214340516', '', 'wrestler@pixie.co.za', '', 0, 0, 0, '2014-05-01'),
(238, 238, 'Smith', 'Ryan', 'Ryan', '9004305081088', '1990-04-30', '10 Oaks Court, Union Street, Gardens, Cape Town 8001', '10 Oaks Court, Union Street, Gardens, Cape Town 8001', '', '', 'ryan.smith@vodamail.co.za', '0723851918', 0, 0, 0, '2014-05-01'),
(239, 239, 'Smith', 'Stephen Anthony', 'Stephen ', '7403285085082', '1974-03-28', '31 Robberg Road,Plettenberg Bay 6600', '31 Robberg Road,Plettenberg Bay 6600', '0445333527', '', 'smithytfk@yahoo.com', '0795151680', 0, 0, 0, '2014-05-01'),
(240, 240, 'Soobramoney', 'Katherine', 'Katherine', '7811060081083', '1978-11-06', '', '', '0219822184', ' 0215342255', 'katherine.bala@psafinishe', '0844019097', 0, 0, 0, '2014-05-01'),
(241, 241, 'Spaltman', 'Monique', 'Monique', '9102190230081', '1991-02-19', '14 Mitchell''s Way, Edgemead, 7441', '', '', '', 'monique@cttc.co.za', '0760531874', 0, 0, 0, '2014-05-01'),
(242, 242, 'Spies', 'Nicole', 'Nicole', '9012070099086', '1990-12-07', '23 Strand Meadows,Vredenhof Street,Strand', '23 Strand Meadows,Vredenhof Street,Strand', '', '0216713703', 'nikki.spies@gmail.com', '0824930448', 0, 0, 0, '2014-05-01'),
(243, 243, 'Steenkamp', 'Alexander', 'Alexander', '8303095179081', '1983-03-09', 'Posbus 466,Calvinia 8190', 'Posbus 466,Calvinia 8190', '', '', 'andresteenkamp123@gmail.c', '', 0, 0, 0, '2014-05-01'),
(244, 244, 'Steyl', 'Anita', 'Anita', '5001020055086', '1950-01-02', '31 11de Laan, Boston, Bellville, 7530', '31 11de Laan, Boston, Bellville, 7530', '', '', '', '0843816024', 0, 0, 0, '2014-05-01'),
(245, 245, 'Steyn', 'Johan', 'Johan', '6712285202085', '1967-12-28', '17 Flaminksingel,Outeniqua Strand,Glentana', 'Posbus 1190, Groot Brak Rivier, 6525', '0448790393', '', 'johan@morningmilk.co.za', '', 0, 0, 0, '2014-05-01'),
(246, 246, 'Stofberg', 'TCB', 'TCB', '6908125099083', '1969-08-12', '', '', '', '', '', '0824358532', 0, 0, 0, '2014-05-01'),
(247, 247, 'Strauss', 'Achim', 'Achim', '', '1964-12-08', '', '', '', '', 'astrauss@magindustries.co', '', 0, 0, 0, '2014-05-01'),
(248, 248, 'Stroinovsky', 'Dimitri', 'Dimitri', '', '0000-00-00', 'Bluewater Building,303 Beach Road,SeaPoint 8005', 'Bluewater Building,303 Beach Road,SeaPoint 8005', '', '', 'dim@satravellers.com', '0720359763', 0, 0, 0, '2014-05-01'),
(249, 249, 'Sund', 'Sanna Maria', 'Sanna', '', '0000-00-00', '101 Eclipse,27 Main Road,Sea Point 8005', '101 Eclipse,27 Main Road,Sea Point 8005', '', '', 'Sannah_sund@hotmail.com', '0744364396', 0, 0, 0, '2014-05-01'),
(250, 250, 'Swanepoel', 'Nicolene', 'Nicolene', '6203310067081', '1962-03-31', '', '', '', '', 'nikkiswanepoel@icloud.com', '0834578695', 0, 0, 0, '2014-05-01'),
(251, 251, 'Swanson', 'Jerome Paul', 'Jerome ', '8509015060082', '1985-09-01', '212 Nooitgedacht,Stellenbosch 7600', '212 Nooitgedacht,Stellenbosch 7600', '', '', 'jeromeswanson39@yahoo.com', '0716892967', 0, 0, 0, '2014-05-01'),
(252, 252, 'Swiegers', 'Chantel', 'Chantel', '', '0000-00-00', 'Postnet 96,Privaatsak X15,Somerset West 7130', 'Postnet 96,Privaatsak X15,Somerset West 7130', '', '', 'chantal@spika.co.za', '0729592907', 0, 0, 0, '2014-05-01'),
(253, 253, 'Taherzadeh', 'Yas', 'Yas', '761028215', '1976-10-28', '28 Rhodes Manor,Phillips Drive,Rondebosch 7700', '28 Rhodes Manor,Phillips Drive,Rondebosch 7700', '', '', 'yasie.t@gmail.com', '0824081588', 0, 0, 0, '2014-05-01'),
(254, 254, 'Teer', 'Kim', 'Kim', '', '1989-06-25', '', '', '', '', 'kimteer@gmail.com', '', 0, 0, 0, '2014-05-01'),
(255, 255, 'Thole', 'Simboa Philip', 'Simboa Philip', '', '1982-01-10', '1202 The Towers,Sea Point 8005', '1202 The Towers,Sea Point 8005', '0214397279', '', 'simboa53@gmail.com', '0822167831', 0, 0, 0, '2014-05-01'),
(256, 256, 'Thom', 'Chanelle', 'Chanelle', '9109190155085', '1991-09-19', '15 Tambotie Crescent,Durbanville 7550', '15 Tambotie Crescent,Durbanville 7550', '0219820917', '', 'chanellethom91@gmail.com', '0828875687', 0, 0, 0, '2014-05-01'),
(257, 257, 'Thomas', 'Job', 'Job', '', '1984-06-21', '', '', '', '', '', '', 0, 0, 0, '2014-05-01'),
(258, 258, 'Titi3042368', 'Siyabonga', 'Siyabonga', '8511015718081', '1985-11-01', '', '', '', '0214035251', 'siyabonga.titi@engenoil.c', '0837198586', 0, 0, 0, '2014-05-01'),
(259, 259, 'Vadas', 'Christopher J.', 'Christopher', '8305095120080', '1983-05-09', '101 Eclipse,27 Main Road,Sea Point 8005', '101 Eclipse,27 Main Road,Sea Point 8005', '', '', 'Chris_vadas@hotmail.com', '844160229', 0, 0, 0, '2014-05-01'),
(260, 260, 'Van Coller', 'Desire', 'Desire', '9005290066083', '1990-05-29', '2 Islander Close,Gordons Bay 7140', '2 Islander Close,Gordons Bay 7140', '', '', 'desirevancoller@gmail.com', '0825590025', 0, 0, 0, '2014-05-01'),
(261, 261, 'Van der Merwe', 'JCH', 'JCH', '6208245246080', '1962-08-24', '', '', '', '', '', '0837328970', 0, 0, 0, '2014-05-01'),
(262, 262, 'Van der Merwe', 'Maryke Petro', 'Maryke Petro', '7806240033087', '1978-06-24', '', '', '0219816507', '', 'maryke@angeliccakes.biz', '0798378473', 0, 0, 0, '2014-05-01'),
(263, 263, 'Van der Merwe', 'Ruan Philippus', 'Ruan Philippus', '7709015181083', '1977-09-01', '40 Ferndale, Hoogstede, Brackenfell', '40 Ferndale, Hoogstede, Brackenfell', '0219816507', '0219142664', 'ruan@vandermerwetrust.co.', '', 0, 0, 0, '2014-05-01'),
(264, 264, 'Van der Toorn', 'Michele Ann', 'Michele', '7002280021089', '1970-02-28', '156 Big Bay Beach Club,Big Bay 7448,P.O. Box 20120,Big Bay 7448', '156 Big Bay Beach Club,Big Bay 7448,P.O. Box 20120,Big Bay 7448', '', '', 'mich.michelle@gmail.com', '0823223823', 0, 0, 0, '2014-05-01'),
(265, 265, 'Van Dijk', 'Ruan', 'Ruan', '870501', '1987-05-01', '', '', '', '', 'ruan.onone@gmail.com', '0724697020', 0, 0, 0, '2014-05-01'),
(266, 266, 'Van Greunen', 'Mornay', 'Mornay', '4302055034082', '1943-02-05', '69 Herschel Street, Strand, 7140', '69 Herschel Street, Strand, 7140', '', '', 'dvangreunen@eike.co.za', '0836549060', 0, 0, 0, '2014-05-01'),
(267, 267, 'Van Greunen', 'Dorothea Petronella', 'Dorothea ', '5402250060087', '1954-02-25', '69 Herschel Street, Strand, 7140', '69 Herschel Street, Strand, 7140', '', '', 'jockvangreunen@gmail.com', '0798796356', 0, 0, 0, '2014-05-01'),
(268, 268, 'Van Nes', 'Michelle Beatriz', 'Michelle', '9107010027088', '1991-07-01', '21D Stellenberg Rd,Somerset West,7130', '21D Stellenberg Rd,Somerset West,7130', '0218554904', '', 'michivannes@hotmail.com', '0836425235', 0, 0, 0, '2014-05-01'),
(269, 269, 'Van Niekerk', 'Emmerentia G', 'Emmerentia', '4512030118087', '1945-12-03', '67 The Majestic,Gousstraat,Strand,7140', '67 The Majestic,Gousstraat,Strand,7140', '0218538106', '', '', '0767977273', 0, 0, 0, '2014-05-01'),
(270, 270, 'Van Noordwyk', 'Johan A.', 'Johan ', '7708045008084', '1977-08-04', '145 Jan v Riebeek Str,Oudtshoorn,6625', '145 Jan v Riebeek Str,Oudtshoorn,6625', '', '', 'johan@noordwyk.co.za', '', 0, 0, 0, '2014-05-01'),
(271, 271, 'Van Reede van Oudtshoorn', 'Pieter', 'Pieter', '4308225015083', '1943-08-22', '137 Miller Street,Gordons Bay7151', '137 Miller Street,Gordons Bay7151', '0218562754', '', 'wingsgb@yahoo.co.uk', '0724767666', 0, 0, 0, '2014-05-01'),
(272, 272, 'Van Wyngaardt', 'Joanne', 'Joanne', '8907240027084', '1989-07-24', '16 Endive Street,Ferndale,Brackenfell 7560', '16 Endive Street,Ferndale,Brackenfell 7560', '0219822755', '0219822460', 'jojo.vdmerwe@gmail.com', '0844524747', 0, 0, 0, '2014-05-01'),
(273, 273, 'Van Wyngaardt', 'George Ernest', 'George', '8907185043088', '1989-07-18', '16 Endive Street,Ferndale,Brackenfell 7560', '16 Endive Street,Ferndale,Brackenfell 7560', '0219822755', '', 'ge.vanwyngaardt@gmail.com', '0825799826', 0, 0, 0, '2014-05-01'),
(274, 274, 'Van Zijl', 'Dwayne Roger', 'Dwayne', '8209255036088', '1982-09-25', 'P.O. Box 1032, Gansbaai, 7220', 'P.O. Box 1032, Gansbaai, 7220', '', '', 'vanzijldwayne@googlemail.', '0725690373', 0, 0, 0, '2014-05-01'),
(275, 275, 'Van Zyl', 'Hester Jacoba', 'Hester', '6007250129086', '1960-07-25', '', '', '', '', 'vzylhjl@telkomsa.co.za', '0827876228', 0, 0, 0, '2014-05-01'),
(276, 276, 'Van Zyl', 'Rehan Frans', 'Rehan', '8611055247080', '1986-11-05', '61 Stellenberg Gardens, Eversdal Rd, Durbanville, 7535', 'P.O. Box 681, Bellville, 7535', '', '', 'rehan.vanzyl@gmail.com', '0761923025', 0, 0, 0, '2014-05-01'),
(277, 277, 'Vaughn', 'Neill Anthony', 'Neill ', '8108135740184', '1981-08-13', 'Suite 14 Queens Park Studios,14 Queens Park Avenue ,Woodstock,7925', 'Suite 14 Queens Park Studios,14 Queens Park Avenue ,Woodstock,7925', '0214480391', '', 'info@neillanthony.com', '0725847851', 0, 0, 0, '2014-05-01'),
(278, 278, 'Vermeulen', 'Ernestus Jacobus', 'Ernest', '3301095032081', '1933-01-09', ' P. O. Box 691,Betty???s Bay,7141', ' P. O. Box 691,Betty???s Bay,7141', '', '', 'nismon@sonicmail.co.za', '', 0, 0, 0, '2014-05-01'),
(279, 279, 'Vermeulen', 'Mona Gordon', 'Mona', '3602110042082', '1936-02-11', ' P. O. Box 691,Betty???s Bay,7141', ' P. O. Box 691,Betty???s Bay,7141', '', '', 'nismon@sonicmail.co.za', '', 0, 0, 0, '2014-05-01'),
(280, 280, 'Vincent', 'Karsten', 'Karsten', '', '1971-02-28', 'Hazyview Farm,Stellenbosch', 'Hazyview Farm,Stellenbosch', '0218652711', '', 'vincentbou@mweb.co.za', '0726985098', 0, 0, 0, '2014-05-01'),
(281, 281, 'Vincent', 'Daria', 'Daria', '', '0000-00-00', '', '', '', '', '', '', 0, 0, 0, '2014-05-01'),
(282, 282, 'Viret', 'Etienne F', 'Etienne', '6707015148087', '1967-07-01', '12 Cadiz Street,Uitzicht,Durbanville 7550', '12 Cadiz Street,Uitzicht,Durbanville 7550', '0219755927', '0219754052 ', 'etienne@cadizstreet.co.za', '0825076936', 0, 0, 0, '2014-05-01'),
(283, 283, 'Viret', 'Belinda', 'Belinda', '7104130210084', '1971-04-13', '12 Cadiz Street,Uitzicht,Durbanville 7550', '12 Cadiz Street,Uitzicht,Durbanville 7550', '0219755927', '', 'belinda@cadizstreet.co.za', '', 0, 0, 0, '2014-05-01'),
(284, 284, 'Visagie', 'Andreas JC', 'Andreas', '7001175115089', '1970-01-17', '74 13de Laan,Boston Estates,Bellville 7530', '74 13de Laan,Boston Estates,Bellville 7530', '', '0217075195', 'andreas@cityscapesa.co.za', '796221539', 0, 0, 0, '2014-05-01'),
(285, 285, 'Viviers', 'Douw', 'Douw', '7012165260082', '1970-12-16', '19B Parklands ,Woodlands Close', '19B Parklands ,Woodlands Close', '', '', 'douw.viviers@gmail.com', '0873540223', 0, 0, 0, '2014-05-01'),
(286, 286, 'Viviers', 'Marlene', 'Marlene', '7104180066089', '1971-04-18', '19B Parklands ,Woodlands Close', '19B Parklands ,Woodlands Close', '', '', 'muviviers@gmail.com', '0729260892', 0, 0, 0, '2014-05-01'),
(287, 287, 'Vorster', 'Jacobus', 'Jacobus', '7803115040081', '1978-03-11', '60 Morgenster Street,Onverwacht,Strand 7140', '60 Morgenster Street,Onverwacht,Strand 7140', '0218531810', '', 'jacquesalta@telkomsa.net', '0731491997', 0, 0, 0, '2014-05-01'),
(288, 288, 'Vorster', 'Alta', 'Alta', '8303110126083', '1983-03-11', '60 Morgenster Street,Onverwacht,Strand 7140', '60 Morgenster Street,Onverwacht,Strand 7140', '0218531810', '', 'alta@atstransport.co.za', '0832792787', 0, 0, 0, '2014-05-01'),
(289, 289, 'Walbrugh', 'Elaine Winifred', 'Elaine Winifred', '', '1956-10-01', '6 Swaans Street, Paardevlei, Somerset West 7130', '6 Swaans Street, Paardevlei, Somerset West 7130', '', '', '', '0825776863', 0, 0, 0, '2014-05-01'),
(290, 290, 'Warner', 'Geoff', 'Geoff', '7107055036087', '1971-07-15', '1 Eendrag Street,George 6529', '1 Eendrag Street,George 6529', '', '', 'geoff@gardenroutemall.co.', '0793942197', 0, 0, 0, '2014-05-01'),
(291, 291, 'Watkins-Ball', 'Sue A.', 'Sue A.', '', '0000-00-00', '', '', '', '', 'mrssueball@gmail.com', '0726241179', 0, 0, 0, '2014-05-01'),
(292, 292, 'Wensing', 'Tamara', 'Tamara', '', '1978-05-05', '38 Rupert avenue, Somerset West', '38 Rupert avenue, Somerset West', '', '', 'tamara@villahelderberg.co', '0712039420', 0, 0, 0, '2014-05-01'),
(293, 293, 'Youngleson', 'Enid', 'Enid', '8201110032089', '1982-01-11', '', '', '', '', 'amyoungleson@gmail.com', ' 0823790663', 0, 0, 0, '2014-05-01'),
(294, 294, 'Zuidema', 'Rudolf A. H.', 'Rudolf A. H.', '7610085112083', '1976-10-18', '', '', '0216910110', '', 'rudolf@omnico.co.za', '', 0, 0, 0, '2014-05-01'),
(295, 0, '', '', '', '', '0000-00-00', '', '', '0217885664', '', '', '0712483305', 0, 0, 0, '0000-00-00'),
(296, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', 0, 0, 0, '0000-00-00'),
(297, 296, '', 'Test Provider Contact', '', '', '0000-00-00', '', '', '', '', '', '', 0, 0, 0, '2014-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `entities_hsb`
--

CREATE TABLE IF NOT EXISTS `entities_hsb` (
  `ehid` int(11) NOT NULL AUTO_INCREMENT,
  `eid` int(11) NOT NULL,
  `policynumber` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `fais_fna` int(11) NOT NULL,
  `fais_roa` int(11) NOT NULL,
  `fais_sla` int(11) NOT NULL,
  `updated` date NOT NULL,
  PRIMARY KEY (`ehid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `entities_hsb`
--

INSERT INTO `entities_hsb` (`ehid`, `eid`, `policynumber`, `status`, `fais_fna`, `fais_roa`, `fais_sla`, `updated`) VALUES
(1, 296, 'gfhjfdgfwer6rthrfg', 1, 1, 1, 1, '2014-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `entities_lti`
--

CREATE TABLE IF NOT EXISTS `entities_lti` (
  `elid` int(11) NOT NULL AUTO_INCREMENT,
  `eid` int(11) NOT NULL,
  `policynumber` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `fais_fna` int(11) NOT NULL,
  `fais_roa` int(11) NOT NULL,
  `fais_sla` int(11) NOT NULL,
  `updated` date NOT NULL,
  PRIMARY KEY (`elid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `entities_lti`
--

INSERT INTO `entities_lti` (`elid`, `eid`, `policynumber`, `status`, `fais_fna`, `fais_roa`, `fais_sla`, `updated`) VALUES
(2, 1, 'MOM143436234', 0, 0, 0, 0, '2014-05-12'),
(3, 296, 'sdfgsdfg', 0, 0, 0, 0, '2014-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `entities_sti`
--

CREATE TABLE IF NOT EXISTS `entities_sti` (
  `esid` int(11) NOT NULL AUTO_INCREMENT,
  `eid` int(11) NOT NULL,
  `policynumber` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `fais_fna` int(11) NOT NULL,
  `fais_roa` int(11) NOT NULL,
  `fais_sla` int(11) NOT NULL,
  `updated` date NOT NULL,
  PRIMARY KEY (`esid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `entities_sti`
--

INSERT INTO `entities_sti` (`esid`, `eid`, `policynumber`, `status`, `fais_fna`, `fais_roa`, `fais_sla`, `updated`) VALUES
(2, 1, '123456', 0, 1, 0, 1, '2014-05-21'),
(3, 296, '123456789', 0, 0, 0, 0, '2014-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `entities_tasks`
--

CREATE TABLE IF NOT EXISTS `entities_tasks` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `eid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `reminderdate` date NOT NULL,
  `duedate` date NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `options_commnicationtypes`
--

CREATE TABLE IF NOT EXISTS `options_commnicationtypes` (
  `octid` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`octid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `options_commnicationtypes`
--

INSERT INTO `options_commnicationtypes` (`octid`, `description`) VALUES
(1, 'Bulk Email');

-- --------------------------------------------------------

--
-- Table structure for table `options_communicationmodes`
--

CREATE TABLE IF NOT EXISTS `options_communicationmodes` (
  `ocmid` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`ocmid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `options_communicationmodes`
--

INSERT INTO `options_communicationmodes` (`ocmid`, `description`) VALUES
(1, 'Qeued'),
(2, 'Sent');

-- --------------------------------------------------------

--
-- Table structure for table `options_communicationstatus`
--

CREATE TABLE IF NOT EXISTS `options_communicationstatus` (
  `ocsid` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`ocsid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `options_communicationstatus`
--

INSERT INTO `options_communicationstatus` (`ocsid`, `description`) VALUES
(1, 'Draft'),
(2, 'Finalized');

-- --------------------------------------------------------

--
-- Table structure for table `options_entitycommenttypes`
--

CREATE TABLE IF NOT EXISTS `options_entitycommenttypes` (
  `oectid` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`oectid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `options_entitycommenttypes`
--

INSERT INTO `options_entitycommenttypes` (`oectid`, `description`) VALUES
(1, 'Phone'),
(2, 'SMS'),
(3, 'Email');

-- --------------------------------------------------------

--
-- Table structure for table `options_entitygroups`
--

CREATE TABLE IF NOT EXISTS `options_entitygroups` (
  `oegid` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`oegid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `options_entitygroups`
--

INSERT INTO `options_entitygroups` (`oegid`, `description`) VALUES
(1, 'Short-Term Insurance'),
(2, 'Long-Term Insurance'),
(3, 'Health Service Benefits'),
(4, 'Collective Investments');

-- --------------------------------------------------------

--
-- Table structure for table `options_entitymodes`
--

CREATE TABLE IF NOT EXISTS `options_entitymodes` (
  `oemid` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`oemid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `options_entitymodes`
--

INSERT INTO `options_entitymodes` (`oemid`, `description`) VALUES
(1, 'Active'),
(2, 'Inactive'),
(3, 'Suspended');

-- --------------------------------------------------------

--
-- Table structure for table `options_entitystatus`
--

CREATE TABLE IF NOT EXISTS `options_entitystatus` (
  `oesid` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`oesid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `options_entitystatus`
--

INSERT INTO `options_entitystatus` (`oesid`, `description`) VALUES
(1, 'Lead'),
(2, 'Client'),
(3, 'Provider');

-- --------------------------------------------------------

--
-- Table structure for table `options_entitytypes`
--

CREATE TABLE IF NOT EXISTS `options_entitytypes` (
  `oetid` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`oetid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `options_entitytypes`
--

INSERT INTO `options_entitytypes` (`oetid`, `description`) VALUES
(1, 'Individual'),
(2, 'Partnership'),
(3, 'Trust'),
(4, 'Close Corporation'),
(5, 'Private Company'),
(6, 'Public Company');

-- --------------------------------------------------------

--
-- Table structure for table `options_useraccesslevels`
--

CREATE TABLE IF NOT EXISTS `options_useraccesslevels` (
  `oalid` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`oalid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `options_useraccesslevels`
--

INSERT INTO `options_useraccesslevels` (`oalid`, `description`) VALUES
(1, 'Administrative User'),
(2, 'Privileged User'),
(3, 'Normal User');

-- --------------------------------------------------------

--
-- Table structure for table `options_usermode`
--

CREATE TABLE IF NOT EXISTS `options_usermode` (
  `oumid` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`oumid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `options_usermode`
--

INSERT INTO `options_usermode` (`oumid`, `description`) VALUES
(1, 'Active'),
(2, 'Inactive'),
(3, 'Suspended');

-- --------------------------------------------------------

--
-- Table structure for table `options_userstatus`
--

CREATE TABLE IF NOT EXISTS `options_userstatus` (
  `oesid` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`oesid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `options_userstatus`
--

INSERT INTO `options_userstatus` (`oesid`, `description`) VALUES
(4, 'Active'),
(5, 'Inactive'),
(6, 'Suspended');

-- --------------------------------------------------------

--
-- Table structure for table `options_usertaskstatus`
--

CREATE TABLE IF NOT EXISTS `options_usertaskstatus` (
  `outsid` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`outsid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `options_usertaskstatus`
--

INSERT INTO `options_usertaskstatus` (`outsid`, `description`) VALUES
(1, 'Active'),
(2, 'Inactive'),
(3, 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `fspnumber` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `active` int(11) NOT NULL,
  `updated` date NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`pid`, `name`, `fspnumber`, `phone`, `email`, `mobile`, `active`, `updated`) VALUES
(1, 'Navig8r', '2589', '0825651289', 'dick@navig8r.co.za', '0825651289', 1, '2014-05-13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `eid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `updated` date NOT NULL,
  `accesslevel` int(100) NOT NULL,
  `profiles` varchar(255) NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `eid`, `username`, `password`, `fullname`, `status`, `updated`, `accesslevel`, `profiles`) VALUES
(1, 0, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'System Administrator', 1, '2014-05-30', 1, ''),
(2, 0, 'jacqui', '5f4dcc3b5aa765d61d8327deb882cf99', 'Jacqui Badenhorst', 1, '2014-06-04', 2, ''),
(3, 0, 'dick', '5f4dcc3b5aa765d61d8327deb882cf99', 'Dick Badenhorst', 1, '2014-05-20', 2, '1');

-- --------------------------------------------------------

--
-- Table structure for table `users_notifications`
--

CREATE TABLE IF NOT EXISTS `users_notifications` (
  `unid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `updated` date NOT NULL,
  PRIMARY KEY (`unid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users_notifications`
--

INSERT INTO `users_notifications` (`unid`, `uid`, `description`, `updated`) VALUES
(1, 0, 'This is a beta account', '2014-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `users_tasks`
--

CREATE TABLE IF NOT EXISTS `users_tasks` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `reminderdate` date NOT NULL,
  `duedate` date NOT NULL,
  `progress` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

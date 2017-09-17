-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 17, 2017 at 04:31 PM
-- Server version: 10.1.20-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id1994377_portrait_hoppe`
--

-- --------------------------------------------------------

--
-- Table structure for table `kurse`
--

CREATE TABLE `kurse` (
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_date` date NOT NULL,
  `first_date` date NOT NULL,
  `time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `home_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kurs-id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `kurse`
--

INSERT INTO `kurse` (`title`, `date`, `last_date`, `first_date`, `time`, `description`, `home_description`, `kurs-id`) VALUES
('Bildhauerkurs im M&uuml;hlenhof-Freilichtmuseum in M&uuml;nster\r\n', '14.07.-18.07.2019', '2019-07-18', '2019-07-14', '10:00 -18:00 Uhr', 'im „Mühlenhof“, Theo-Breider-Weg 1, 48149 Münster \nErleben Sie am Mühlenhof, dem historischen Dorf innerhalb der Stadt, Tage des kreativen Gestaltens, gönnen Sie sich das Erlebnis, wie durch Ihre Hände aus einem Stein eine Form wächst. Auch in diesem Sommer startet ein Bildhauerkurs in kleiner, geselliger Runde (max. 10 Teilnehmer), ob jung oder alt, erfahren oder Neuling.\nDieser Kurs richtet sich an alle, die Spaß an der Bildhauerei haben oder sie erlernen möchten. Ich begleite die gesamte Arbeitszeit, führe in die Techniken des Skulpturierens ein und gebe auch gerne Fortgeschrittenen handwerkliche und künstlerische Tipps.Die Kursgebühr beträgt 50 €/Tag, bei mehreren Familienmitgliedern gewähre ich 10 € Nachlass pro weiteres Familienmitglied. In der Kursgebühr sind Materialkosten und Werkzeugnutzung enthalten.\nFür Verpflegung und Getränke sorgen die Kursteilnehmer selbst, die Gaststätte im Mühlenhof ist dabei durchaus zu empfehlen.\nEine Kursteilnahme läuft auf eigene Gefahr. Wer möchte, sollte sich eine Schutzbrille und Arbeitshandschule besorgen.\nAnmeldung über diese Seite, per Mail oder telefonisch.  ', 'Erleben Sie am M&uuml;hlenhof, dem historischen Dorf innerhalb der Stadt, Tage des kreativen Gestaltens, g&ouml;nnen Sie sich das Erlebnis, wie durch Ihre H&auml;nde aus einem Stein eine Form w&auml;chst.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news-id` int(11) NOT NULL,
  `pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news-id`, `pic`, `date`, `description`) VALUES
(3, 'slide_1.jpg', '25.05.2017', 'Stevorino goes Youtube');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id` int(11) UNSIGNED NOT NULL,
  `pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cost` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `pic`, `product`, `cost`, `description`) VALUES
(1, 'shop_1.jpg', 'Drachennbaby', '1.600 €', 'Baumberger Sandstein, ca. 40 cm hoch'),
(2, 'shop_3.jpg', 'Wasserspeier', '2.500 €', 'Bamberger Sandstein, ca. 92 cm hoch'),
(3, 'shop_3.jpg', 'Keltischer Knoten', '350 €', 'Bamberger Sandstein, ca. 40x 40 cm');

-- --------------------------------------------------------

--
-- Table structure for table `web_admin`
--

CREATE TABLE `web_admin` (
  `benutzername` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `passwort` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `ID` int(10) NOT NULL,
  `Session` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `web_admin`
--

INSERT INTO `web_admin` (`benutzername`, `passwort`, `ID`, `Session`) VALUES
('Burkhard-Hoppe', '8db5dcba2fc4033b794bee47212e06dab77c263ecc25301642bba843a2529ae33249f4b0a1725c75d994a6728963b7849be6a6aa51c712b82df35610def7c4ae', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kurse`
--
ALTER TABLE `kurse`
  ADD PRIMARY KEY (`kurs-id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news-id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_admin`
--
ALTER TABLE `web_admin`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kurse`
--
ALTER TABLE `kurse`
  MODIFY `kurs-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `web_admin`
--
ALTER TABLE `web_admin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

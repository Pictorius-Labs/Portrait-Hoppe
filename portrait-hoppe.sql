-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 10. Nov 2017 um 22:03
-- Server-Version: 10.1.26-MariaDB
-- PHP-Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `portrait-hoppe`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kurse_de`
--

CREATE TABLE `kurse_de` (
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `first_date` date NOT NULL,
  `last_date` date NOT NULL,
  `time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `home_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kurs-id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Daten für Tabelle `kurse_de`
--

INSERT INTO `kurse_de` (`title`, `date`, `first_date`, `last_date`, `time`, `description`, `home_description`, `kurs-id`) VALUES
('Bildhauerkurs im M&uuml;hlenhof-Freilichtmuseum in M&uuml;nster', '26.1- 29-1.2017', '2028-12-23', '2028-12-23', '23:23', 'im &bdquo;M&uuml;hlenhof&ldquo;, Theo-Breider-Weg 1, 48149 M&uuml;nster \r\nErleben Sie am M&uuml;hlenhof, dem historischen Dorf innerhalb der Stadt, Tage des kreativen Gestaltens, g&ouml;nnen Sie sich das Erlebnis, wie durch Ihre H&auml;nde aus einem Stein eine Form w&auml;chst. Auch in diesem Sommer startet ein Bildhauerkurs in kleiner, geselliger Runde (max. 10 Teilnehmer), ob jung oder alt, erfahren oder Neuling.\r\nDieser Kurs richtet sich an alle, die Spa&szlig; an der Bildhauerei haben oder sie erlernen m&ouml;chten. Ich begleite die gesamte Arbeitszeit, f&uuml;hre in die Techniken des Skulpturierens ein und gebe auch gerne Fortgeschrittenen handwerkliche und k&uuml;nstlerische Tipps.Die Kursgeb&uuml;hr betr&auml;gt 50 &euro;/Tag, bei mehreren Familienmitgliedern gew&auml;hre ich 10 &euro; Nachlass pro weiteres Familienmitglied. In der Kursgeb&uuml;hr sind Materialkosten und Werkzeugnutzung enthalten.\r\nF&uuml;r Verpflegung und Getr&auml;nke sorgen die Kursteilnehmer selbst, die Gastst&auml;tte im M&uuml;hlenhof ist dabei durchaus zu empfehlen.\r\nEine Kursteilnahme l&auml;uft auf eigene Gefahr. Wer m&ouml;chte, sollte sich eine Schutzbrille und Arbeitshandschule besorgen.\r\nAnmeldung &uuml;ber diese Seite, per Mail oder telefonisch.  ', 'Erleben Sie am M&uuml;hlenhof, dem historischen Dorf innerhalb der Stadt, Tage des kreativen Gestaltens, g&ouml;nnen Sie sich das Erlebnis, wie durch Ihre H&auml;nde aus einem Stein eine Form w&auml;chst.', 2),
('Bildhauerkurs im M&uuml;hlenhof-Freilichtmuseum in M&uuml;nster', '26.1- 29-1.2017', '2028-12-23', '2028-12-23', '23:23', 'im &bdquo;M&uuml;hlenhof&ldquo;, Theo-Breider-Weg 1, 48149 M&uuml;nster \r\nErleben Sie am M&uuml;hlenhof, dem historischen Dorf innerhalb der Stadt, Tage des kreativen Gestaltens, g&ouml;nnen Sie sich das Erlebnis, wie durch Ihre H&auml;nde aus einem Stein eine Form w&auml;chst. Auch in diesem Sommer startet ein Bildhauerkurs in kleiner, geselliger Runde (max. 10 Teilnehmer), ob jung oder alt, erfahren oder Neuling.\r\nDieser Kurs richtet sich an alle, die Spa&szlig; an der Bildhauerei haben oder sie erlernen m&ouml;chten. Ich begleite die gesamte Arbeitszeit, f&uuml;hre in die Techniken des Skulpturierens ein und gebe auch gerne Fortgeschrittenen handwerkliche und k&uuml;nstlerische Tipps.Die Kursgeb&uuml;hr betr&auml;gt 50 &euro;/Tag, bei mehreren Familienmitgliedern gew&auml;hre ich 10 &euro; Nachlass pro weiteres Familienmitglied. In der Kursgeb&uuml;hr sind Materialkosten und Werkzeugnutzung enthalten.\r\nF&uuml;r Verpflegung und Getr&auml;nke sorgen die Kursteilnehmer selbst, die Gastst&auml;tte im M&uuml;hlenhof ist dabei durchaus zu empfehlen.\r\nEine Kursteilnahme l&auml;uft auf eigene Gefahr. Wer m&ouml;chte, sollte sich eine Schutzbrille und Arbeitshandschule besorgen.\r\nAnmeldung &uuml;ber diese Seite, per Mail oder telefonisch.  ', 'Erleben Sie am M&uuml;hlenhof, dem historischen Dorf innerhalb der Stadt, Tage des kreativen Gestaltens, g&ouml;nnen Sie sich das Erlebnis, wie durch Ihre H&auml;nde aus einem Stein eine Form w&auml;chst.', 3),
('Bildhauerkurs im M&uuml;hlenhof-Freilichtmuseum in M&uuml;nster', '26.1- 29-1.2017', '2028-12-23', '2028-12-23', '23:23', 'im &bdquo;M&uuml;hlenhof&ldquo;, Theo-Breider-Weg 1, 48149 M&uuml;nster \r\nErleben Sie am M&uuml;hlenhof, dem historischen Dorf innerhalb der Stadt, Tage des kreativen Gestaltens, g&ouml;nnen Sie sich das Erlebnis, wie durch Ihre H&auml;nde aus einem Stein eine Form w&auml;chst. Auch in diesem Sommer startet ein Bildhauerkurs in kleiner, geselliger Runde (max. 10 Teilnehmer), ob jung oder alt, erfahren oder Neuling.\r\nDieser Kurs richtet sich an alle, die Spa&szlig; an der Bildhauerei haben oder sie erlernen m&ouml;chten. Ich begleite die gesamte Arbeitszeit, f&uuml;hre in die Techniken des Skulpturierens ein und gebe auch gerne Fortgeschrittenen handwerkliche und k&uuml;nstlerische Tipps.Die Kursgeb&uuml;hr betr&auml;gt 50 &euro;/Tag, bei mehreren Familienmitgliedern gew&auml;hre ich 10 &euro; Nachlass pro weiteres Familienmitglied. In der Kursgeb&uuml;hr sind Materialkosten und Werkzeugnutzung enthalten.\r\nF&uuml;r Verpflegung und Getr&auml;nke sorgen die Kursteilnehmer selbst, die Gastst&auml;tte im M&uuml;hlenhof ist dabei durchaus zu empfehlen.\r\nEine Kursteilnahme l&auml;uft auf eigene Gefahr. Wer m&ouml;chte, sollte sich eine Schutzbrille und Arbeitshandschule besorgen.\r\nAnmeldung &uuml;ber diese Seite, per Mail oder telefonisch.  ', 'Erleben Sie am M&uuml;hlenhof, dem historischen Dorf innerhalb der Stadt, Tage des kreativen Gestaltens, g&ouml;nnen Sie sich das Erlebnis, wie durch Ihre H&auml;nde aus einem Stein eine Form w&auml;chst.', 4),
('Bildhauerkurs im M&uuml;hlenhof-Freilichtmuseum in M&uuml;nster', '26.1- 29-1.2017', '2028-12-23', '2028-12-23', '23:23', 'im &bdquo;M&uuml;hlenhof&ldquo;, Theo-Breider-Weg 1, 48149 M&uuml;nster \r\nErleben Sie am M&uuml;hlenhof, dem historischen Dorf innerhalb der Stadt, Tage des kreativen Gestaltens, g&ouml;nnen Sie sich das Erlebnis, wie durch Ihre H&auml;nde aus einem Stein eine Form w&auml;chst. Auch in diesem Sommer startet ein Bildhauerkurs in kleiner, geselliger Runde (max. 10 Teilnehmer), ob jung oder alt, erfahren oder Neuling.\r\nDieser Kurs richtet sich an alle, die Spa&szlig; an der Bildhauerei haben oder sie erlernen m&ouml;chten. Ich begleite die gesamte Arbeitszeit, f&uuml;hre in die Techniken des Skulpturierens ein und gebe auch gerne Fortgeschrittenen handwerkliche und k&uuml;nstlerische Tipps.Die Kursgeb&uuml;hr betr&auml;gt 50 &euro;/Tag, bei mehreren Familienmitgliedern gew&auml;hre ich 10 &euro; Nachlass pro weiteres Familienmitglied. In der Kursgeb&uuml;hr sind Materialkosten und Werkzeugnutzung enthalten.\r\nF&uuml;r Verpflegung und Getr&auml;nke sorgen die Kursteilnehmer selbst, die Gastst&auml;tte im M&uuml;hlenhof ist dabei durchaus zu empfehlen.\r\nEine Kursteilnahme l&auml;uft auf eigene Gefahr. Wer m&ouml;chte, sollte sich eine Schutzbrille und Arbeitshandschule besorgen.\r\nAnmeldung &uuml;ber diese Seite, per Mail oder telefonisch.  ', 'Erleben Sie am M&uuml;hlenhof, dem historischen Dorf innerhalb der Stadt, Tage des kreativen Gestaltens, g&ouml;nnen Sie sich das Erlebnis, wie durch Ihre H&auml;nde aus einem Stein eine Form w&auml;chst.', 5),
('Bildhauerkurs im M&uuml;hlenhof-Freilichtmuseum in M&uuml;nster', '26.1- 29-1.2017', '2028-12-23', '2028-12-23', '23:23', 'im &bdquo;M&uuml;hlenhof&ldquo;, Theo-Breider-Weg 1, 48149 M&uuml;nster \r\nErleben Sie am M&uuml;hlenhof, dem historischen Dorf innerhalb der Stadt, Tage des kreativen Gestaltens, g&ouml;nnen Sie sich das Erlebnis, wie durch Ihre H&auml;nde aus einem Stein eine Form w&auml;chst. Auch in diesem Sommer startet ein Bildhauerkurs in kleiner, geselliger Runde (max. 10 Teilnehmer), ob jung oder alt, erfahren oder Neuling.\r\nDieser Kurs richtet sich an alle, die Spa&szlig; an der Bildhauerei haben oder sie erlernen m&ouml;chten. Ich begleite die gesamte Arbeitszeit, f&uuml;hre in die Techniken des Skulpturierens ein und gebe auch gerne Fortgeschrittenen handwerkliche und k&uuml;nstlerische Tipps.Die Kursgeb&uuml;hr betr&auml;gt 50 &euro;/Tag, bei mehreren Familienmitgliedern gew&auml;hre ich 10 &euro; Nachlass pro weiteres Familienmitglied. In der Kursgeb&uuml;hr sind Materialkosten und Werkzeugnutzung enthalten.\r\nF&uuml;r Verpflegung und Getr&auml;nke sorgen die Kursteilnehmer selbst, die Gastst&auml;tte im M&uuml;hlenhof ist dabei durchaus zu empfehlen.\r\nEine Kursteilnahme l&auml;uft auf eigene Gefahr. Wer m&ouml;chte, sollte sich eine Schutzbrille und Arbeitshandschule besorgen.\r\nAnmeldung &uuml;ber diese Seite, per Mail oder telefonisch.  ', 'Erleben Sie am M&uuml;hlenhof, dem historischen Dorf innerhalb der Stadt, Tage des kreativen Gestaltens, g&ouml;nnen Sie sich das Erlebnis, wie durch Ihre H&auml;nde aus einem Stein eine Form w&auml;chst.', 6);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kurse_en`
--

CREATE TABLE `kurse_en` (
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `first_date` date NOT NULL,
  `last_date` date NOT NULL,
  `time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `home_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kurs-id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kurse_fr`
--

CREATE TABLE `kurse_fr` (
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `first_date` date NOT NULL,
  `last_date` date NOT NULL,
  `time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `home_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kurs-id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kurse_nl`
--

CREATE TABLE `kurse_nl` (
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `first_date` date NOT NULL,
  `last_date` date NOT NULL,
  `time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `home_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kurs-id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `news_de`
--

CREATE TABLE `news_de` (
  `news-id` int(100) NOT NULL,
  `pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `news_de`
--

INSERT INTO `news_de` (`news-id`, `pic`, `date`, `description`) VALUES
(3, '2.jpg', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `news_en`
--

CREATE TABLE `news_en` (
  `news-id` int(100) NOT NULL,
  `pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `news_fr`
--

CREATE TABLE `news_fr` (
  `news-id` int(100) NOT NULL,
  `pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `news_nl`
--

CREATE TABLE `news_nl` (
  `news-id` int(100) NOT NULL,
  `pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `shop_de`
--

CREATE TABLE `shop_de` (
  `id` int(11) NOT NULL,
  `pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cost` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(10000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `shop_de`
--

INSERT INTO `shop_de` (`id`, `pic`, `product`, `cost`, `description`) VALUES
(3, 'shop_3.jpg', 'Skulptur von Damn Daniel dem 2.', '1.999&euro;', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `shop_en`
--

CREATE TABLE `shop_en` (
  `id` int(11) NOT NULL,
  `pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cost` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(10000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `shop_fr`
--

CREATE TABLE `shop_fr` (
  `id` int(11) NOT NULL,
  `pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cost` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(10000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `shop_nl`
--

CREATE TABLE `shop_nl` (
  `id` int(11) NOT NULL,
  `pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cost` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(10000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `slider`
--

CREATE TABLE `slider` (
  `pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `slider`
--

INSERT INTO `slider` (`pic`, `id`) VALUES
('slide_1.jpg', 6),
('slide_2.jpg', 7),
('slide_3.jpg', 8),
('slide_4.jpg', 9);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `web_admin`
--

CREATE TABLE `web_admin` (
  `benutzername` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `passwort` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `ID` int(10) NOT NULL,
  `Session` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `web_admin`
--

INSERT INTO `web_admin` (`benutzername`, `passwort`, `ID`, `Session`) VALUES
('Burkhard-Hoppe', '8db5dcba2fc4033b794bee47212e06dab77c263ecc25301642bba843a2529ae33249f4b0a1725c75d994a6728963b7849be6a6aa51c712b82df35610def7c4ae', 1, '230oa2mf2d90m92aeuhdau9913');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `kurse_de`
--
ALTER TABLE `kurse_de`
  ADD PRIMARY KEY (`kurs-id`);

--
-- Indizes für die Tabelle `kurse_en`
--
ALTER TABLE `kurse_en`
  ADD PRIMARY KEY (`kurs-id`);

--
-- Indizes für die Tabelle `kurse_fr`
--
ALTER TABLE `kurse_fr`
  ADD PRIMARY KEY (`kurs-id`);

--
-- Indizes für die Tabelle `kurse_nl`
--
ALTER TABLE `kurse_nl`
  ADD PRIMARY KEY (`kurs-id`);

--
-- Indizes für die Tabelle `news_de`
--
ALTER TABLE `news_de`
  ADD PRIMARY KEY (`news-id`);

--
-- Indizes für die Tabelle `news_en`
--
ALTER TABLE `news_en`
  ADD PRIMARY KEY (`news-id`);

--
-- Indizes für die Tabelle `news_fr`
--
ALTER TABLE `news_fr`
  ADD PRIMARY KEY (`news-id`);

--
-- Indizes für die Tabelle `news_nl`
--
ALTER TABLE `news_nl`
  ADD PRIMARY KEY (`news-id`);

--
-- Indizes für die Tabelle `shop_de`
--
ALTER TABLE `shop_de`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `shop_en`
--
ALTER TABLE `shop_en`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `shop_fr`
--
ALTER TABLE `shop_fr`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `shop_nl`
--
ALTER TABLE `shop_nl`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `web_admin`
--
ALTER TABLE `web_admin`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `kurse_de`
--
ALTER TABLE `kurse_de`
  MODIFY `kurs-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT für Tabelle `kurse_en`
--
ALTER TABLE `kurse_en`
  MODIFY `kurs-id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `kurse_fr`
--
ALTER TABLE `kurse_fr`
  MODIFY `kurs-id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `kurse_nl`
--
ALTER TABLE `kurse_nl`
  MODIFY `kurs-id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `news_de`
--
ALTER TABLE `news_de`
  MODIFY `news-id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT für Tabelle `news_en`
--
ALTER TABLE `news_en`
  MODIFY `news-id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `news_fr`
--
ALTER TABLE `news_fr`
  MODIFY `news-id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `news_nl`
--
ALTER TABLE `news_nl`
  MODIFY `news-id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `shop_de`
--
ALTER TABLE `shop_de`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT für Tabelle `shop_en`
--
ALTER TABLE `shop_en`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `shop_fr`
--
ALTER TABLE `shop_fr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `shop_nl`
--
ALTER TABLE `shop_nl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT für Tabelle `web_admin`
--
ALTER TABLE `web_admin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>IHWC - Transactions</title>
<script src="IHWC.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.0.0 - IHWC-STHS.db - IHWC-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="IHWC.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
</head><body>
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"IHWC-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"IHWC-STHSCareerStat.db";
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 1; /* Show Webpage Top Menu */
include "Menu.php";?>
[2020-04-12 06:22:07] - Current fund for RUSSIE is under 0 $.<br />
[2020-04-12 06:22:01] - Manual Rest Day has been completed.<br />
[2020-04-12 06:22:00] - Martin Bakos from SLOVAQUIE is back from Exhaustion.<br />
[2020-04-12 06:22:00] - Marko Dano from SLOVAQUIE is back from Exhaustion.<br />
[2020-04-12 06:21:50] - Current fund for ALLEMAGNE is under 0 $.<br />
[2020-04-12 06:21:50] - Current fund for FINLANDE is under 0 $.<br />
[2020-04-12 06:21:50] - Current fund for CANADA is under 0 $.<br />
[2020-04-12 06:21:49] - Current fund for LETTONIE is under 0 $.<br />
[2020-04-12 06:21:49] - Current fund for U23 NORTH AMERICA is under 0 $.<br />
[2020-04-12 06:21:49] - Current fund for TEAM WORLD is under 0 $.<br />
[2020-04-12 06:21:49] - Current fund for SLOVAQUIE is under 0 $.<br />
[2020-04-12 06:21:49] - Current fund for ETATS-UNIS is under 0 $.<br />
[2020-04-12 06:21:49] - Current fund for SUEDE is under 0 $.<br />
[2020-04-12 06:21:49] - Current fund for SUISSE is under 0 $.<br />
[2020-04-12 06:21:48] - Current fund for REPUBLIQUE TCHEQUE is under 0 $.<br />
[2020-04-12 06:21:48] - Current fund for RUSSIE is under 0 $.<br />
[2020-04-12 06:21:20] - Current fund for ALLEMAGNE is under 0 $.<br />
[2020-04-12 06:21:19] - Current fund for FINLANDE is under 0 $.<br />
[2020-04-12 06:21:19] - Current fund for CANADA is under 0 $.<br />
[2020-04-12 06:21:18] - Current fund for LETTONIE is under 0 $.<br />
[2020-04-12 06:21:18] - Current fund for U23 NORTH AMERICA is under 0 $.<br />
[2020-04-12 06:21:18] - Current fund for TEAM WORLD is under 0 $.<br />
[2020-04-12 06:21:17] - Current fund for SLOVAQUIE is under 0 $.<br />
[2020-04-12 06:21:17] - Current fund for ETATS-UNIS is under 0 $.<br />
[2020-04-12 06:21:17] - Current fund for SUEDE is under 0 $.<br />
[2020-04-12 06:21:16] - Current fund for SUISSE is under 0 $.<br />
[2020-04-12 06:21:16] - Current fund for REPUBLIQUE TCHEQUE is under 0 $.<br />
[2020-04-12 06:21:15] - Current fund for RUSSIE is under 0 $.<br />
[2020-04-12 06:20:59] - New Record for Goalie (Carey Price) Most Win (5) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Goalie (Pekka Rinne) Most Shutout (1) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Goalie (Carter Hart) Most Lost (3) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Goalie (Carter Hart) Most Shots Received (182) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Goalie (Sergei Bobrovsky) Most Shots Received (156) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Goalie (Petr Mrazek) Most Lost (2) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Goalie (Danny aus den Birken) Most Lost (1) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Goalie (Danny aus den Birken) Most Win (4) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Goalie (Danny aus den Birken) Most Shots Received (154) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Gabriel Landeskog) Most Shots (27) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (David Musil) Best Plus/Minus (7) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Noah Hanifin) Most Shots Blocked (15) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Alex DeBrincat) Most Penalties Minutes (15) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Mitch Marner) Most Ice Time (2:11) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Dmitri Kulikov) Most Shots (24) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Martin Marincin) Most Penalties Minutes (12) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Martin Bakos) Most Goals (4) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Libor Hudacek) Worse Plus/Minus (-11) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Marko Dano) Most Shots (23) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Lars Eller) Most Shots (21) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Jakub Zboril) Most Shots Blocked (14) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Jakub Kindl) Best Plus/Minus (5) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Michael Frolik) Best Faceoff Percent (724) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Ondrej Palat) Most Empty Net Goal (1) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Ondrej Kase) Most Shots (20) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (David Krejci) Most Hat Trick (1) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Nico Sturm) Worse Plus/Minus (-4) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Dominik Kahun) Most Points (9) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Dominik Kahun) Most Assists (6) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Luca Sbisa) Most Hits (21) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Luca Sbisa) Most Penalties Minutes (10) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Luca Sbisa) Most Shots Blocked (13) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Luca Sbisa) Most Points (7) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Luca Sbisa) Most Assists (4) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Luca Sbisa) Most Goals (3) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Luca Sbisa) Most Ice Time (2:09) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Gregory Hofmann) Most Shots (19) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Noah Rod) Best Plus/Minus (4) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Noah Rod) Most Points (5) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Noah Rod) Most Assists (3) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Noah Rod) Most Goals (2) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Kristaps Sotnieks) Most Ice Time (2:01) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Uvis Janis Balinskis) Most Shots Blocked (9) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Uvis Janis Balinskis) Most Ice Time (2:00) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Harijs Brants) Most Penalties Minutes (8) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Karlis Cukste) Most Hits (13) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Karlis Cukste) Most Shots Blocked (8) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Karlis Cukste) Most Ice Time (1:44) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Rodrigo Abols) Most Hits (8) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Ronalds Kenins) Worse Plus/Minus (-3) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Rudolfs Balcers) Worse Plus/Minus (-2) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Rudolfs Balcers) Most Shots (16) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Nikita Jevpalovs) Best Faceoff Percent (595) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Nikita Jevpalovs) Most Hits (5) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Nikita Jevpalovs) Most Penalties Minutes (4) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Nikita Jevpalovs) Best Plus/Minus (1) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Nikita Jevpalovs) Most Shots Blocked (2) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Nikita Jevpalovs) Most Shots (13) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Nikita Jevpalovs) Most Points (3) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Nikita Jevpalovs) Most Assists (2) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Nikita Jevpalovs) Most Goals (1) in 1 Year!<br />
[2020-04-12 06:20:59] - New Record for Player (Nikita Jevpalovs) Most Ice Time (1:41) in 1 Year!<br />
[2020-04-12 06:20:59] - Anthony Beauvillier from U23 NORTH AMERICA is back from Exhaustion.<br />
[2020-04-12 06:20:59] - Mitch Marner from U23 NORTH AMERICA is back from Exhaustion.<br />
[2020-04-12 06:20:59] - Last 7 Days Pro Star : 1 - Gabriel Landeskog of SUEDE (4-5-9) / 2 - Brad Marchand of CANADA (2-6-8) / 3 - Luca Sbisa of SUISSE (3-4-7)<br />
[2020-04-12 06:20:59] - New Record for Team's Most Hits (26) in 1 Game for FINLANDE!<br />
[2020-04-12 06:20:59] - New Record for Team's Most Penalties Minutes (8) in 1 Game for FINLANDE!<br />
[2020-04-12 06:20:59] - New Record for Team's Most Shots Blocked (15) in 1 Game for FINLANDE!<br />
[2020-04-12 06:20:59] - New Record for Team's Most Hits (26) in 1 Game for RUSSIE!<br />
[2020-04-12 06:20:59] - New Record for Most Shots (85) in a game!<br />
[2020-04-12 06:20:59] - New Record for Team's Most Hits (21) in 1 Game for CANADA!<br />
[2020-04-12 06:20:59] - New Record for Team's Most Shots (51) in 1 Game for CANADA!<br />
[2020-04-12 06:20:59] - New Record for Team's Most Points (21) in 1 Game for CANADA!<br />
[2020-04-12 06:20:59] - New Record for Team's Most Assists (14) in 1 Game for CANADA!<br />
[2020-04-12 06:20:59] - New Record for Team's Most Shots (51) in 1 Game for CANADA!<br />
[2020-04-12 06:20:59] - New Record for Team's Most Points (21) in 1 Game for CANADA!<br />
[2020-04-12 06:20:59] - New Record for Team's Most Assists (14) in 1 Game for CANADA!<br />
[2020-04-12 06:20:59] - New Record for Team's Most Hits (26) in 1 Game for ALLEMAGNE!<br />
[2020-04-12 06:20:59] - New Record for Team's Most Penalties Minutes (12) in 1 Game for ALLEMAGNE!<br />
[2020-04-12 06:20:59] - New Record for Team's Most Shots Blocked (19) in 1 Game for ALLEMAGNE!<br />
[2020-04-12 06:20:58] - Game 29 - Brooks Macek from ALLEMAGNE is injured  (Strained Left Elbow) and is out for 1 week.<br />
[2020-04-12 06:20:58] - Martin Bakos from SLOVAQUIE is injured from Exhaustion.<br />
[2020-04-12 06:20:58] - Marko Dano from SLOVAQUIE is injured from Exhaustion.<br />
[2020-04-12 06:20:58] - New Record for Team's Most Penalties Minutes (10) in 1 Game for SUEDE!<br />
[2020-04-12 06:20:58] - Game 28 - Mattias Tedenby from SUEDE is injured  (Bruised Right Foot) and is out for 2 weeks.<br />
[2020-04-12 06:20:58] - Auto Lines Function has been run for U23 NORTH AMERICA.<br />
[2020-04-12 06:20:58] - Auto Roster Partial Function has been run for U23 NORTH AMERICA.<br />
[2020-04-12 06:20:58] - Owen Tippett of U23 NORTH AMERICA was sent to pro.<br />
[2020-04-12 06:20:58] - Tage Thompson of U23 NORTH AMERICA was sent to pro.<br />
[2020-04-12 05:34:38] - Current fund for SUEDE is under 0 $.<br />
[2020-04-12 05:34:38] - Successfully loaded SUEDE lines done with STHS Client - 3.2.0.5<br />
[2020-04-12 05:34:34] - Current fund for SUEDE is under 0 $.<br />
[2020-04-12 05:34:24] - Current fund for FINLANDE is under 0 $.<br />
[2020-04-12 05:34:23] - Successfully loaded FINLANDE lines done with STHS Client - 3.2.1.1<br />
[2020-04-12 05:34:20] - Current fund for FINLANDE is under 0 $.<br />
[2020-04-12 05:34:10] - Current fund for ALLEMAGNE is under 0 $.<br />
[2020-04-12 05:34:10] - Successfully loaded ALLEMAGNE lines done with STHS Client - 3.2.1.1<br />
[2020-04-12 05:34:07] - Current fund for ALLEMAGNE is under 0 $.<br />
[2020-04-12 05:33:57] - Current fund for CANADA is under 0 $.<br />
[2020-04-12 05:33:56] - Successfully loaded CANADA lines done with STHS Client - 3.2.0.5<br />
[2020-04-12 05:33:53] - Current fund for CANADA is under 0 $.<br />
[2020-04-11 07:06:25] - Current fund for ALLEMAGNE is under 0 $.<br />
[2020-04-11 07:06:25] - Current fund for FINLANDE is under 0 $.<br />
[2020-04-11 07:06:25] - Current fund for CANADA is under 0 $.<br />
[2020-04-11 07:06:24] - Current fund for LETTONIE is under 0 $.<br />
[2020-04-11 07:06:24] - Current fund for U23 NORTH AMERICA is under 0 $.<br />
[2020-04-11 07:06:24] - Current fund for TEAM WORLD is under 0 $.<br />
[2020-04-11 07:06:24] - Current fund for SLOVAQUIE is under 0 $.<br />
[2020-04-11 07:06:23] - Current fund for ETATS-UNIS is under 0 $.<br />
[2020-04-11 07:06:23] - Current fund for SUEDE is under 0 $.<br />
[2020-04-11 07:06:23] - Current fund for SUISSE is under 0 $.<br />
[2020-04-11 07:06:22] - Current fund for REPUBLIQUE TCHEQUE is under 0 $.<br />
[2020-04-11 07:06:22] - Current fund for RUSSIE is under 0 $.<br />
[2020-04-11 07:06:13] - Current fund for ALLEMAGNE is under 0 $.<br />
[2020-04-11 07:06:13] - Current fund for FINLANDE is under 0 $.<br />
[2020-04-11 07:06:13] - Current fund for CANADA is under 0 $.<br />
[2020-04-11 07:06:12] - Current fund for LETTONIE is under 0 $.<br />
[2020-04-11 07:06:12] - Current fund for U23 NORTH AMERICA is under 0 $.<br />
[2020-04-11 07:06:12] - Current fund for TEAM WORLD is under 0 $.<br />
[2020-04-11 07:06:11] - Current fund for SLOVAQUIE is under 0 $.<br />
[2020-04-11 07:06:11] - Current fund for ETATS-UNIS is under 0 $.<br />
[2020-04-11 07:06:11] - Current fund for SUEDE is under 0 $.<br />
[2020-04-11 07:06:10] - Current fund for SUISSE is under 0 $.<br />
[2020-04-11 07:06:10] - Current fund for REPUBLIQUE TCHEQUE is under 0 $.<br />
[2020-04-11 07:06:09] - Current fund for RUSSIE is under 0 $.<br />
[2020-04-11 07:05:58] - New Record for Most Points (29) in a game!<br />
[2020-04-11 07:05:58] - New Record for Most Assists (19) in a game!<br />
[2020-04-11 07:05:58] - New Record for Team's Most Points (17) in 1 Game for REPUBLIQUE TCHEQUE!<br />
[2020-04-11 07:05:58] - New Record for Team's Most Assists (11) in 1 Game for REPUBLIQUE TCHEQUE!<br />
[2020-04-11 07:05:58] - New Record for Team's Most Goals (6) in 1 Game for REPUBLIQUE TCHEQUE!<br />
[2020-04-11 07:05:58] - David Krejci from REPUBLIQUE TCHEQUE has scored a Hat Trick!<br />
[2020-04-11 07:05:58] - New Record for Team's Most Shots (42) in 1 Game for SLOVAQUIE!<br />
[2020-04-11 07:05:58] - New Record for Team's Most Points (12) in 1 Game for ETATS-UNIS!<br />
[2020-04-11 07:05:58] - New Record for Team's Most Assists (8) in 1 Game for ETATS-UNIS!<br />
[2020-04-11 07:05:58] - New Record for Team's Most Points (14) in 1 Game for FINLANDE!<br />
[2020-04-11 07:05:58] - New Record for Team's Most Assists (9) in 1 Game for FINLANDE!<br />
[2020-04-11 07:05:58] - New Record for Team's Most Goals (5) in 1 Game for FINLANDE!<br />
[2020-04-11 07:05:58] - New Record for Player (Mikko Rantanen) Most Shots (10) in 1 Game!<br />
[2020-04-11 07:05:58] - Anthony Beauvillier from U23 NORTH AMERICA is injured from Exhaustion.<br />
[2020-04-11 07:05:58] - Mitch Marner from U23 NORTH AMERICA is injured from Exhaustion.<br />
[2020-04-11 07:05:49] - Auto Lines Function has been run for FINLANDE.<br />
[2020-04-11 07:05:49] - Auto Roster Partial Function has been run for FINLANDE.<br />
[2020-04-11 07:05:49] - Auto Lines Function has been run for U23 NORTH AMERICA.<br />
[2020-04-11 07:05:49] - Auto Roster Partial Function has been run for U23 NORTH AMERICA.<br />
[2020-04-11 07:05:26] - Current fund for SUISSE is under 0 $.<br />
[2020-04-11 07:05:16] - Current fund for ETATS-UNIS is under 0 $.<br />
[2020-04-11 07:05:16] - Successfully loaded ETATS-UNIS lines done with STHS Client - 3.2.0.5<br />
[2020-04-11 07:05:11] - Current fund for ETATS-UNIS is under 0 $.<br />
[2020-04-10 18:03:41] - Current fund for TEAM WORLD is under 0 $.<br />
[2020-04-10 18:03:41] - Successfully loaded TEAM WORLD lines done with STHS Client - 3.2.0.5<br />
[2020-04-10 18:03:36] - Current fund for TEAM WORLD is under 0 $.<br />
[2020-04-10 07:09:14] - Current fund for ALLEMAGNE is under 0 $.<br />
[2020-04-10 07:09:13] - Current fund for FINLANDE is under 0 $.<br />
[2020-04-10 07:09:13] - Current fund for CANADA is under 0 $.<br />
[2020-04-10 07:09:12] - Current fund for LETTONIE is under 0 $.<br />
[2020-04-10 07:09:12] - Current fund for U23 NORTH AMERICA is under 0 $.<br />
[2020-04-10 07:09:12] - Current fund for TEAM WORLD is under 0 $.<br />
[2020-04-10 07:09:12] - Current fund for SLOVAQUIE is under 0 $.<br />
[2020-04-10 07:09:11] - Current fund for ETATS-UNIS is under 0 $.<br />
[2020-04-10 07:09:11] - Current fund for SUEDE is under 0 $.<br />
[2020-04-10 07:09:11] - Current fund for SUISSE is under 0 $.<br />
[2020-04-10 07:09:11] - Current fund for REPUBLIQUE TCHEQUE is under 0 $.<br />
[2020-04-10 07:09:10] - Current fund for RUSSIE is under 0 $.<br />
[2020-04-10 07:09:05] - Manual Rest Day has been completed.<br />
[2020-04-10 07:09:04] - Anthony Beauvillier from U23 NORTH AMERICA is back from Exhaustion.<br />
[2020-04-10 07:03:09] - Current fund for ALLEMAGNE is under 0 $.<br />
[2020-04-10 07:03:09] - Current fund for FINLANDE is under 0 $.<br />
[2020-04-10 07:03:09] - Current fund for CANADA is under 0 $.<br />
[2020-04-10 07:03:08] - Current fund for LETTONIE is under 0 $.<br />
[2020-04-10 07:03:08] - Current fund for U23 NORTH AMERICA is under 0 $.<br />
[2020-04-10 07:03:08] - Current fund for TEAM WORLD is under 0 $.<br />
[2020-04-10 07:03:08] - Current fund for SLOVAQUIE is under 0 $.<br />
[2020-04-10 07:03:08] - Current fund for ETATS-UNIS is under 0 $.<br />
[2020-04-10 07:03:08] - Current fund for SUEDE is under 0 $.<br />
[2020-04-10 07:03:07] - Current fund for SUISSE is under 0 $.<br />
[2020-04-10 07:03:07] - Current fund for REPUBLIQUE TCHEQUE is under 0 $.<br />
[2020-04-10 07:03:07] - Current fund for RUSSIE is under 0 $.<br />
[2020-04-10 07:02:57] - Current fund for ALLEMAGNE is under 0 $.<br />
[2020-04-10 07:02:56] - Current fund for FINLANDE is under 0 $.<br />
[2020-04-10 07:02:56] - Current fund for CANADA is under 0 $.<br />
[2020-04-10 07:02:55] - Current fund for LETTONIE is under 0 $.<br />
[2020-04-10 07:02:55] - Current fund for U23 NORTH AMERICA is under 0 $.<br />
[2020-04-10 07:02:55] - Current fund for TEAM WORLD is under 0 $.<br />
[2020-04-10 07:02:54] - Current fund for SLOVAQUIE is under 0 $.<br />
[2020-04-10 07:02:54] - Current fund for ETATS-UNIS is under 0 $.<br />
[2020-04-10 07:02:53] - Current fund for SUEDE is under 0 $.<br />
[2020-04-10 07:02:53] - Current fund for SUISSE is under 0 $.<br />
[2020-04-10 07:02:53] - Current fund for REPUBLIQUE TCHEQUE is under 0 $.<br />
[2020-04-10 07:02:52] - Current fund for RUSSIE is under 0 $.<br />
[2020-04-10 07:02:40] - New Record for Most Points (28) in a game!<br />
[2020-04-10 07:02:40] - New Record for Most Goals (11) in a game!<br />
[2020-04-10 07:02:40] - New Record for Team's Most Shots Blocked (16) in 1 Game for U23 NORTH AMERICA!<br />
[2020-04-10 07:02:40] - New Record for Team's Most Points (14) in 1 Game for U23 NORTH AMERICA!<br />
[2020-04-10 07:02:40] - New Record for Team's Most Assists (8) in 1 Game for U23 NORTH AMERICA!<br />
[2020-04-10 07:02:40] - New Record for Team's Most Goals (6) in 1 Game for U23 NORTH AMERICA!<br />
[2020-04-10 07:02:40] - Anthony Beauvillier from U23 NORTH AMERICA is injured from Exhaustion.<br />
[2020-04-10 07:02:40] - New Record for Team's Most Penalties Minutes (12) in 1 Game for SLOVAQUIE!<br />
[2020-04-10 07:02:40] - New Record for Team's Most Shots (36) in 1 Game for SLOVAQUIE!<br />
[2020-04-10 07:02:40] - New Record for Team's Most Points (14) in 1 Game for SLOVAQUIE!<br />
[2020-04-10 07:02:40] - New Record for Team's Most Assists (9) in 1 Game for SLOVAQUIE!<br />
[2020-04-10 07:02:40] - New Record for Team's Most Goals (5) in 1 Game for SLOVAQUIE!<br />
[2020-04-10 07:02:40] - New Record for Team's Most Shots Blocked (19) in 1 Game for SUISSE!<br />
[2020-04-10 07:02:40] - New Record for Team's Most Points (16) in 1 Game for SUISSE!<br />
[2020-04-10 07:02:40] - New Record for Team's Most Goals (6) in 1 Game for SUISSE!<br />
[2020-04-10 07:02:40] - New Record for Team's Most Shots (36) in 1 Game for LETTONIE!<br />
[2020-04-10 07:02:40] - New Record for Team's Most Shots Blocked (14) in 1 Game for FINLANDE!<br />
[2020-04-10 07:02:40] - Game 20 - Antti Suomela from FINLANDE is injured  (Separated Left Shoulder) and is out for 2 weeks.<br />
[2020-04-10 07:02:40] - New Record for Team's Most Shots (35) in 1 Game for SUEDE!<br />
[2020-04-10 07:02:40] - New Record for Player (William Nylander) Most Shots (9) in 1 Game!<br />
[2020-04-10 07:02:40] - New Record for Team's Most Penalties Minutes (10) in 1 Game for CANADA!<br />
[2020-04-10 07:02:40] - New Record for Team's Most Shots Blocked (13) in 1 Game for REPUBLIQUE TCHEQUE!<br />
[2020-04-10 05:45:09] - Current fund for SUISSE is under 0 $.<br />
[2020-04-10 05:45:09] - Successfully loaded SUISSE lines done with STHS Client - 3.2.0.5<br />
[2020-04-10 05:45:03] - Current fund for SUISSE is under 0 $.<br />
[2020-04-10 05:43:48] - Pro Player Fatigue Level 2 - Minutes Played Value Modified to 40<br />
[2020-04-10 05:43:42] - Pro Player Fatigue Level 1 - Minutes Played Value Modified to 30<br />
[2020-04-10 05:43:39] - Pro Player Fatigue Level 2 - Minutes Played Value Modified to 25<br />
[2020-04-10 05:40:10] - Current fund for SUEDE is under 0 $.<br />
[2020-04-10 05:40:10] - Successfully loaded SUEDE lines done with STHS Client - 3.2.0.5<br />
[2020-04-10 05:40:01] - Current fund for SUEDE is under 0 $.<br />
[2020-04-10 05:39:45] - Current fund for ETATS-UNIS is under 0 $.<br />
[2020-04-10 05:39:44] - Successfully loaded ETATS-UNIS lines done with STHS Client - 3.2.0.5<br />
[2020-04-10 05:39:41] - Current fund for ETATS-UNIS is under 0 $.<br />
[2020-04-09 06:59:30] - Current fund for ALLEMAGNE is under 0 $.<br />
[2020-04-09 06:59:29] - Current fund for FINLANDE is under 0 $.<br />
[2020-04-09 06:59:29] - Current fund for CANADA is under 0 $.<br />
[2020-04-09 06:59:29] - Current fund for U23 NORTH AMERICA is under 0 $.<br />
[2020-04-09 06:59:29] - Current fund for TEAM WORLD is under 0 $.<br />
[2020-04-09 06:59:28] - Current fund for SLOVAQUIE is under 0 $.<br />
[2020-04-09 06:59:28] - Current fund for ETATS-UNIS is under 0 $.<br />
[2020-04-09 06:59:28] - Current fund for SUEDE is under 0 $.<br />
[2020-04-09 06:59:28] - Current fund for SUISSE is under 0 $.<br />
[2020-04-09 06:59:27] - Current fund for REPUBLIQUE TCHEQUE is under 0 $.<br />
[2020-04-09 06:59:27] - Current fund for RUSSIE is under 0 $.<br />
[2020-04-09 06:59:17] - Current fund for ALLEMAGNE is under 0 $.<br />
[2020-04-09 06:59:16] - Current fund for FINLANDE is under 0 $.<br />
[2020-04-09 06:59:16] - Current fund for CANADA is under 0 $.<br />
[2020-04-09 06:59:16] - Current fund for U23 NORTH AMERICA is under 0 $.<br />
[2020-04-09 06:59:15] - Current fund for TEAM WORLD is under 0 $.<br />
[2020-04-09 06:59:15] - Current fund for SLOVAQUIE is under 0 $.<br />
[2020-04-09 06:59:15] - Current fund for ETATS-UNIS is under 0 $.<br />
[2020-04-09 06:59:14] - Current fund for SUEDE is under 0 $.<br />
[2020-04-09 06:59:14] - Current fund for SUISSE is under 0 $.<br />
[2020-04-09 06:59:13] - Current fund for REPUBLIQUE TCHEQUE is under 0 $.<br />
[2020-04-09 06:59:13] - Current fund for RUSSIE is under 0 $.<br />
[2020-04-09 06:59:02] - New Record for Team's Most Shots (46) in 1 Game for TEAM WORLD!<br />
[2020-04-09 06:59:02] - New Record for Team's Most Points (14) in 1 Game for TEAM WORLD!<br />
[2020-04-09 06:59:02] - New Record for Team's Most Assists (9) in 1 Game for TEAM WORLD!<br />
[2020-04-09 06:59:02] - New Record for Team's Most Shots (46) in 1 Game for TEAM WORLD!<br />
[2020-04-09 06:59:02] - New Record for Team's Most Shots Blocked (24) in 1 Game for SUEDE!<br />
[2020-04-09 06:59:02] - New Record for Team's Most Shots Blocked (12) in 1 Game for CANADA!<br />
[2020-04-09 06:59:02] - New Record for Team's Most Hits (25) in 1 Game for SUISSE!<br />
[2020-04-09 06:59:01] - New Record for Team's Most Shots (39) in 1 Game for REPUBLIQUE TCHEQUE!<br />
[2020-04-09 06:59:01] - New Record for Team's Most Points (10) in 1 Game for REPUBLIQUE TCHEQUE!<br />
[2020-04-09 06:59:01] - New Record for Team's Most Goals (4) in 1 Game for REPUBLIQUE TCHEQUE!<br />
[2020-04-09 06:59:01] - New Record for Team's Most Hits (25) in 1 Game for U23 NORTH AMERICA!<br />
[2020-04-09 06:59:01] - New Record for Team's Most Shots (37) in 1 Game for U23 NORTH AMERICA!<br />
[2020-04-09 06:59:01] - New Record for Team's Most Shots (33) in 1 Game for SLOVAQUIE!<br />
[2020-04-09 06:59:01] - New Record for Team's Most Points (7) in 1 Game for SLOVAQUIE!<br />
[2020-04-09 06:59:01] - New Record for Team's Most Goals (3) in 1 Game for SLOVAQUIE!<br />
[2020-04-09 06:59:01] - New Record for Team's Most Shots (41) in 1 Game for ALLEMAGNE!<br />
[2020-04-09 05:23:03] - Current fund for SUISSE is under 0 $.<br />
[2020-04-09 05:23:03] - Successfully loaded SUISSE lines done with STHS Client - 3.2.0.5<br />
[2020-04-09 05:22:50] - Current fund for SUISSE is under 0 $.<br />
[2020-04-09 05:22:50] - Successfully loaded SUISSE lines done with STHS Client - 3.2.0.5<br />
[2020-04-09 05:22:49] - SUISSE is trying to hire a coach (Daniel Alfredsson) who is already hired<br />
[2020-04-09 05:22:45] - Current fund for SUISSE is under 0 $.<br />
[2020-04-09 05:20:36] - Current fund for SUEDE is under 0 $.<br />
[2020-04-09 05:20:35] - Successfully loaded SUEDE lines done with STHS Client - 3.2.0.5<br />
[2020-04-09 05:20:31] - Current fund for SUEDE is under 0 $.<br />
[2020-04-09 05:20:17] - Successfully loaded SLOVAQUIE lines done with STHS Client - 3.2.0.5<br />
[2020-04-09 05:20:05] - Current fund for ETATS-UNIS is under 0 $.<br />
[2020-04-09 05:20:05] - Successfully loaded ETATS-UNIS lines done with STHS Client - 3.2.0.5<br />
[2020-04-09 05:20:02] - Current fund for ETATS-UNIS is under 0 $.<br />
[2020-04-08 15:41:30] - Successfully loaded LETTONIE lines done with STHS Client - 3.2.0.5<br />
[2020-04-08 15:41:22] - Current fund for U23 NORTH AMERICA is under 0 $.<br />
[2020-04-08 15:41:21] - Successfully loaded U23 NORTH AMERICA lines done with STHS Client - 3.2.0.5<br />
[2020-04-08 15:41:18] - Current fund for U23 NORTH AMERICA is under 0 $.<br />
[2020-04-08 15:38:49] - Current fund for TEAM WORLD is under 0 $.<br />
[2020-04-08 15:38:48] - Successfully loaded TEAM WORLD lines done with STHS Client - 3.2.0.5<br />
[2020-04-08 15:38:45] - Current fund for TEAM WORLD is under 0 $.<br />
[2020-04-08 06:57:51] - Current fund for FINLANDE is under 0 $.<br />
[2020-04-08 06:57:51] - Current fund for CANADA is under 0 $.<br />
[2020-04-08 06:57:51] - Current fund for U23 NORTH AMERICA is under 0 $.<br />
[2020-04-08 06:57:51] - Current fund for TEAM WORLD is under 0 $.<br />
[2020-04-08 06:57:50] - Current fund for ETATS-UNIS is under 0 $.<br />
[2020-04-08 06:57:50] - Current fund for SUEDE is under 0 $.<br />
[2020-04-08 06:57:50] - Current fund for SUISSE is under 0 $.<br />
[2020-04-08 06:57:50] - Current fund for REPUBLIQUE TCHEQUE is under 0 $.<br />
[2020-04-08 06:57:50] - Current fund for RUSSIE is under 0 $.<br />
[2020-04-08 06:57:44] - Manual Rest Day has been completed.<br />
[2020-04-08 06:57:36] - Current fund for FINLANDE is under 0 $.<br />
[2020-04-08 06:57:36] - Current fund for CANADA is under 0 $.<br />
[2020-04-08 06:57:36] - Current fund for U23 NORTH AMERICA is under 0 $.<br />
[2020-04-08 06:57:36] - Current fund for TEAM WORLD is under 0 $.<br />
[2020-04-08 06:57:35] - Current fund for ETATS-UNIS is under 0 $.<br />
[2020-04-08 06:57:35] - Current fund for SUEDE is under 0 $.<br />
[2020-04-08 06:57:35] - Current fund for SUISSE is under 0 $.<br />
[2020-04-08 06:57:35] - Current fund for REPUBLIQUE TCHEQUE is under 0 $.<br />
[2020-04-08 06:57:35] - Current fund for RUSSIE is under 0 $.<br />
[2020-04-08 06:57:23] - Current fund for FINLANDE is under 0 $.<br />
[2020-04-08 06:57:23] - Current fund for CANADA is under 0 $.<br />
[2020-04-08 06:57:23] - Current fund for U23 NORTH AMERICA is under 0 $.<br />
[2020-04-08 06:57:23] - Current fund for TEAM WORLD is under 0 $.<br />
[2020-04-08 06:57:22] - Current fund for ETATS-UNIS is under 0 $.<br />
[2020-04-08 06:57:22] - Current fund for SUEDE is under 0 $.<br />
[2020-04-08 06:57:22] - Current fund for SUISSE is under 0 $.<br />
[2020-04-08 06:57:21] - Current fund for REPUBLIQUE TCHEQUE is under 0 $.<br />
[2020-04-08 06:57:20] - Current fund for RUSSIE is under 0 $.<br />
[2020-04-08 06:57:12] - New Record for Team's Most Hits (17) in 1 Game for LETTONIE!<br />
[2020-04-08 06:57:12] - New Record for Team's Most Shots (32) in 1 Game for LETTONIE!<br />
[2020-04-08 06:57:12] - New Record for Team's Most Hits (20) in 1 Game for TEAM WORLD!<br />
[2020-04-08 06:57:12] - New Record for Team's Most Shots (36) in 1 Game for TEAM WORLD!<br />
[2020-04-08 05:35:59] - Current fund for REPUBLIQUE TCHEQUE is under 0 $.<br />
[2020-04-08 05:35:59] - Successfully loaded REPUBLIQUE TCHEQUE lines done with STHS Client - 3.2.0.5<br />
[2020-04-08 05:35:56] - Current fund for REPUBLIQUE TCHEQUE is under 0 $.<br />
[2020-04-08 05:35:47] - Current fund for ETATS-UNIS is under 0 $.<br />
[2020-04-08 05:35:47] - Successfully loaded ETATS-UNIS lines done with STHS Client - 3.2.0.5<br />
[2020-04-08 05:35:44] - Current fund for ETATS-UNIS is under 0 $.<br />
[2020-04-07 14:56:45] - Successfully loaded LETTONIE lines done with STHS Client - 3.2.0.5<br />
[2020-04-07 14:56:34] - Current fund for TEAM WORLD is under 0 $.<br />
[2020-04-07 14:56:34] - Successfully loaded TEAM WORLD lines done with STHS Client - 3.2.0.5<br />
[2020-04-07 14:56:29] - Current fund for TEAM WORLD is under 0 $.<br />
[2020-04-07 07:00:18] - Current fund for FINLANDE is under 0 $.<br />
[2020-04-07 07:00:17] - Current fund for CANADA is under 0 $.<br />
[2020-04-07 07:00:17] - Current fund for TEAM WORLD is under 0 $.<br />
[2020-04-07 07:00:17] - Current fund for ETATS-UNIS is under 0 $.<br />
[2020-04-07 07:00:17] - Current fund for SUEDE is under 0 $.<br />
[2020-04-07 07:00:17] - Current fund for REPUBLIQUE TCHEQUE is under 0 $.<br />
[2020-04-07 07:00:16] - Current fund for RUSSIE is under 0 $.<br />
[2020-04-07 06:59:53] - Current fund for FINLANDE is under 0 $.<br />
[2020-04-07 06:59:52] - Current fund for CANADA is under 0 $.<br />
[2020-04-07 06:59:52] - Current fund for TEAM WORLD is under 0 $.<br />
[2020-04-07 06:59:51] - Current fund for ETATS-UNIS is under 0 $.<br />
[2020-04-07 06:59:51] - Current fund for SUEDE is under 0 $.<br />
[2020-04-07 06:59:50] - Current fund for REPUBLIQUE TCHEQUE is under 0 $.<br />
[2020-04-07 06:59:49] - Current fund for RUSSIE is under 0 $.<br />
[2020-04-07 06:59:37] - Andrej Sustr from REPUBLIQUE TCHEQUE is back from Upper Body Injury.<br />
[2020-04-07 06:59:37] - New Record for Most Points (27) in a game!<br />
[2020-04-07 06:59:37] - New Record for Most Assists (18) in a game!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Shots Blocked (10) in 1 Game for FINLANDE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Shots (39) in 1 Game for FINLANDE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Points (12) in 1 Game for FINLANDE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Assists (8) in 1 Game for FINLANDE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Goals (4) in 1 Game for FINLANDE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Penalties Minutes (8) in 1 Game for SUISSE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Shots Blocked (10) in 1 Game for SUISSE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Points (15) in 1 Game for SUISSE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Assists (10) in 1 Game for SUISSE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Goals (5) in 1 Game for SUISSE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Hits (21) in 1 Game for REPUBLIQUE TCHEQUE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Shots Blocked (12) in 1 Game for REPUBLIQUE TCHEQUE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Shots (32) in 1 Game for REPUBLIQUE TCHEQUE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Points (9) in 1 Game for REPUBLIQUE TCHEQUE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Assists (6) in 1 Game for REPUBLIQUE TCHEQUE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Hits (22) in 1 Game for ALLEMAGNE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Points (12) in 1 Game for ALLEMAGNE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Assists (8) in 1 Game for ALLEMAGNE!<br />
[2020-04-07 06:59:37] - Game 10 - Andrej Sustr from REPUBLIQUE TCHEQUE is injured  (Upper Body) and is out for 3 days.<br />
[2020-04-07 06:59:37] - New Record for Team's Most Hits (22) in 1 Game for U23 NORTH AMERICA!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Shots (32) in 1 Game for U23 NORTH AMERICA!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Points (9) in 1 Game for U23 NORTH AMERICA!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Assists (6) in 1 Game for U23 NORTH AMERICA!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Penalties Minutes (8) in 1 Game for SUEDE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Hits (16) in 1 Game for TEAM WORLD!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Penalties Minutes (14) in 1 Game for TEAM WORLD!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Points (13) in 1 Game for TEAM WORLD!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Assists (8) in 1 Game for TEAM WORLD!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Goals (5) in 1 Game for TEAM WORLD!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Shots (42) in 1 Game for ETATS-UNIS!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Penalties Minutes (10) in 1 Game for LETTONIE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Shots (31) in 1 Game for LETTONIE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Points (9) in 1 Game for LETTONIE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Assists (6) in 1 Game for LETTONIE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Goals (3) in 1 Game for LETTONIE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Penalties Minutes (12) in 1 Game for RUSSIE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Shots Blocked (14) in 1 Game for RUSSIE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Points (14) in 1 Game for RUSSIE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Assists (9) in 1 Game for RUSSIE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Goals (5) in 1 Game for RUSSIE!<br />
[2020-04-07 06:59:28] - Auto Lines Function has been run for ALLEMAGNE.<br />
[2020-04-07 06:59:28] - Auto Roster Partial Function has been run for ALLEMAGNE.<br />
[2020-04-07 06:52:25] - Successfully loaded REPUBLIQUE TCHEQUE lines done with STHS Client - 3.2.0.5<br />
[2020-04-07 06:52:12] - Current fund for ETATS-UNIS is under 0 $.<br />
[2020-04-07 06:52:12] - Successfully loaded ETATS-UNIS lines done with STHS Client - 3.2.0.5<br />
[2020-04-07 06:52:08] - Current fund for ETATS-UNIS is under 0 $.<br />
[2020-04-07 06:51:58] - Successfully loaded SUISSE lines done with STHS Client - 3.2.0.5<br />
[2020-04-06 10:18:58] - Luke Schenn average salary was modified from 0 $ to 5 900 000 $.<br />
[2020-04-06 09:01:50] - Successfully loaded LETTONIE lines done with STHS Client - 3.2.0.5<br />
[2020-04-06 08:44:18] - Successfully loaded TEAM WORLD lines done with STHS Client - 3.2.0.5<br />
[2020-04-06 08:42:16] - Current fund for CANADA is under 0 $.<br />
[2020-04-06 08:42:16] - Current fund for ETATS-UNIS is under 0 $.<br />
[2020-04-06 08:42:15] - Current fund for SUEDE is under 0 $.<br />
[2020-04-06 08:42:15] - Current fund for RUSSIE is under 0 $.<br />
[2020-04-06 08:42:05] - Manual Rest Day has been completed.<br />
[2020-04-06 06:57:50] - Current fund for CANADA is under 0 $.<br />
[2020-04-06 06:57:50] - Current fund for ETATS-UNIS is under 0 $.<br />
[2020-04-06 06:57:49] - Current fund for SUEDE is under 0 $.<br />
[2020-04-06 06:57:49] - Current fund for RUSSIE is under 0 $.<br />
[2020-04-06 06:57:19] - Current fund for CANADA is under 0 $.<br />
[2020-04-06 06:57:19] - Current fund for ETATS-UNIS is under 0 $.<br />
[2020-04-06 06:57:18] - Current fund for SUEDE is under 0 $.<br />
[2020-04-06 06:57:18] - Current fund for RUSSIE is under 0 $.<br />
[2020-04-06 06:57:08] - Mattias Tedenby from SUEDE is back from Unknown.<br />
[2020-04-06 06:57:08] - New Record for Most Hits (57) in a game!<br />
[2020-04-06 06:57:08] - New Record for Most Shots (77) in a game!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Hits (38) in 1 Game for ETATS-UNIS!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Penalties Minutes (16) in 1 Game for ETATS-UNIS!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots Blocked (13) in 1 Game for ETATS-UNIS!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots (32) in 1 Game for ETATS-UNIS!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Points (11) in 1 Game for ETATS-UNIS!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Assists (6) in 1 Game for ETATS-UNIS!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Goals (5) in 1 Game for ETATS-UNIS!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Hits (38) in 1 Game for ETATS-UNIS!<br />
[2020-04-06 06:57:08] - New Record for Player (Zach Bogosian) Most Hits (10) in 1 Game!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Hits (19) in 1 Game for RUSSIE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Penalties Minutes (4) in 1 Game for RUSSIE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots Blocked (6) in 1 Game for RUSSIE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots (45) in 1 Game for RUSSIE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Points (12) in 1 Game for RUSSIE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Assists (8) in 1 Game for RUSSIE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Goals (4) in 1 Game for RUSSIE!<br />
[2020-04-06 06:57:08] - New Record for Player (Dmitri Kulikov) Most Ice Time (29:13) in 1 Game!<br />
[2020-04-06 06:57:08] - New Record for Most Penalties Minutes (29) in a game!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Hits (16) in 1 Game for U23 NORTH AMERICA!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Penalties Minutes (21) in 1 Game for U23 NORTH AMERICA!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots Blocked (12) in 1 Game for U23 NORTH AMERICA!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots (31) in 1 Game for U23 NORTH AMERICA!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Points (8) in 1 Game for U23 NORTH AMERICA!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Assists (5) in 1 Game for U23 NORTH AMERICA!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Goals (3) in 1 Game for U23 NORTH AMERICA!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Penalties Minutes (21) in 1 Game for U23 NORTH AMERICA!<br />
[2020-04-06 06:57:08] - New Record for Player (Alex DeBrincat) Most Penalties Minutes (15) in 1 Game!<br />
[2020-04-06 06:57:08] - New Record for Player (Mitch Marner) Most Ice Time (27:18) in 1 Game!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Hits (17) in 1 Game for ALLEMAGNE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Penalties Minutes (8) in 1 Game for ALLEMAGNE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots Blocked (15) in 1 Game for ALLEMAGNE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots (40) in 1 Game for ALLEMAGNE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Points (11) in 1 Game for ALLEMAGNE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Assists (7) in 1 Game for ALLEMAGNE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Goals (4) in 1 Game for ALLEMAGNE!<br />
[2020-04-06 06:57:08] - Game 5 - Denis Reul from ALLEMAGNE is injured  (Fractured Bone in Left Hand) and is out for 3 weeks.<br />
[2020-04-06 06:57:08] - New Record for Team's Most Hits (22) in 1 Game for SUEDE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Penalties Minutes (6) in 1 Game for SUEDE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots Blocked (3) in 1 Game for SUEDE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots (33) in 1 Game for SUEDE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Points (18) in 1 Game for SUEDE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Assists (12) in 1 Game for SUEDE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Goals (6) in 1 Game for SUEDE!<br />
[2020-04-06 06:57:08] - New Record for Player (Erik Karlsson) Most Penalties Minutes (6) in 1 Game!<br />
[2020-04-06 06:57:08] - New Record for Player (Gabriel Landeskog) Most Hits (6) in 1 Game!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Hits (19) in 1 Game for REPUBLIQUE TCHEQUE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Penalties Minutes (10) in 1 Game for REPUBLIQUE TCHEQUE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots Blocked (8) in 1 Game for REPUBLIQUE TCHEQUE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots (25) in 1 Game for REPUBLIQUE TCHEQUE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Points (8) in 1 Game for REPUBLIQUE TCHEQUE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Assists (5) in 1 Game for REPUBLIQUE TCHEQUE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Goals (3) in 1 Game for REPUBLIQUE TCHEQUE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Hits (16) in 1 Game for LETTONIE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Penalties Minutes (4) in 1 Game for LETTONIE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots Blocked (14) in 1 Game for LETTONIE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots (26) in 1 Game for LETTONIE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Hits (20) in 1 Game for FINLANDE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Penalties Minutes (4) in 1 Game for FINLANDE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots Blocked (9) in 1 Game for FINLANDE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots (35) in 1 Game for FINLANDE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Points (3) in 1 Game for FINLANDE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Assists (2) in 1 Game for FINLANDE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Goals (1) in 1 Game for FINLANDE!<br />
[2020-04-06 06:57:08] - New Record for Most Hits (46) in a game!<br />
[2020-04-06 06:57:08] - New Record for Most Shots (75) in a game!<br />
[2020-04-06 06:57:08] - New Record for Most Points (26) in a game!<br />
[2020-04-06 06:57:08] - New Record for Most Assists (17) in a game!<br />
[2020-04-06 06:57:08] - New Record for Most Goals (9) in a game!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Hits (26) in 1 Game for SLOVAQUIE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Penalties Minutes (8) in 1 Game for SLOVAQUIE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots Blocked (24) in 1 Game for SLOVAQUIE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots (30) in 1 Game for SLOVAQUIE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Points (6) in 1 Game for SLOVAQUIE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Assists (4) in 1 Game for SLOVAQUIE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Goals (2) in 1 Game for SLOVAQUIE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Hits (26) in 1 Game for SLOVAQUIE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots Blocked (24) in 1 Game for SLOVAQUIE!<br />
[2020-04-06 06:57:08] - New Record for Player (Marek Daloga) Most Shots Blocked (7) in 1 Game!<br />
[2020-04-06 06:57:08] - New Record for Player (Libor Hudacek) Worse Plus/Minus (-6) in 1 Game!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Hits (20) in 1 Game for CANADA!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Penalties Minutes (6) in 1 Game for CANADA!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots Blocked (5) in 1 Game for CANADA!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots (45) in 1 Game for CANADA!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Points (20) in 1 Game for CANADA!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Assists (13) in 1 Game for CANADA!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Goals (7) in 1 Game for CANADA!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Hits (20) in 1 Game for CANADA!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots (45) in 1 Game for CANADA!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Points (20) in 1 Game for CANADA!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Assists (13) in 1 Game for CANADA!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Goals (7) in 1 Game for CANADA!<br />
[2020-04-06 06:57:08] - New Record for Player (Colton Parayko) Most Hits (4) in 1 Game!<br />
[2020-04-06 06:57:08] - New Record for Player (David Musil) Best Plus/Minus (5) in 1 Game!<br />
[2020-04-06 06:57:08] - New Record for Player (Jonathan Toews) Best Plus/Minus (4) in 1 Game!<br />
[2020-04-06 06:57:08] - New Record for Player (Jonathan Toews) Most Points (5) in 1 Game!<br />
[2020-04-06 06:57:08] - New Record for Player (Jonathan Toews) Most Goals (3) in 1 Game!<br />
[2020-04-06 06:57:08] - Jonathan Toews from CANADA has scored a Hat Trick!<br />
[2020-04-06 06:57:08] - New Record for Player (Brad Marchand) Best Plus/Minus (3) in 1 Game!<br />
[2020-04-06 06:57:08] - New Record for Player (Brad Marchand) Most Shots (8) in 1 Game!<br />
[2020-04-06 06:57:08] - New Record for Player (Brad Marchand) Most Points (4) in 1 Game!<br />
[2020-04-06 06:57:08] - New Record for Player (Brad Marchand) Most Assists (3) in 1 Game!<br />
[2020-04-06 06:57:08] - New Record for Most Hits (27) in a game!<br />
[2020-04-06 06:57:08] - New Record for Most Penalties Minutes (16) in a game!<br />
[2020-04-06 06:57:08] - New Record for Most Shots (62) in a game!<br />
[2020-04-06 06:57:08] - New Record for Most Points (18) in a game!<br />
[2020-04-06 06:57:08] - New Record for Most Assists (11) in a game!<br />
[2020-04-06 06:57:08] - New Record for Most Goals (7) in a game!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Hits (11) in 1 Game for TEAM WORLD!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Penalties Minutes (10) in 1 Game for TEAM WORLD!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots Blocked (18) in 1 Game for TEAM WORLD!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots (32) in 1 Game for TEAM WORLD!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Points (8) in 1 Game for TEAM WORLD!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Assists (5) in 1 Game for TEAM WORLD!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Goals (3) in 1 Game for TEAM WORLD!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Penalties Minutes (10) in 1 Game for TEAM WORLD!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots Blocked (18) in 1 Game for TEAM WORLD!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots (32) in 1 Game for TEAM WORLD!<br />
[2020-04-06 06:57:08] - New Record for Player (Antoine Roussel) Most Penalties Minutes (4) in 1 Game!<br />
[2020-04-06 06:57:08] - New Record for Player (Lars Eller) Worse Plus/Minus (-2) in 1 Game!<br />
[2020-04-06 06:57:08] - New Record for Player (Lars Eller) Most Shots (5) in 1 Game!<br />
[2020-04-06 06:57:08] - New Record for Player (Enrico Miglioranzi) Most Shots Blocked (6) in 1 Game!<br />
[2020-04-06 06:57:08] - New Record for Player (Jesper Jensen) Most Shots Blocked (5) in 1 Game!<br />
[2020-04-06 06:57:08] - New Record for Player (Raman Hrabarenka) Most Shots Blocked (3) in 1 Game!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Hits (16) in 1 Game for SUISSE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Penalties Minutes (6) in 1 Game for SUISSE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots Blocked (9) in 1 Game for SUISSE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots (30) in 1 Game for SUISSE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Points (10) in 1 Game for SUISSE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Assists (6) in 1 Game for SUISSE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Goals (4) in 1 Game for SUISSE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Hits (16) in 1 Game for SUISSE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Penalties Minutes (6) in 1 Game for SUISSE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots Blocked (9) in 1 Game for SUISSE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots (30) in 1 Game for SUISSE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Points (10) in 1 Game for SUISSE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Assists (6) in 1 Game for SUISSE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Goals (4) in 1 Game for SUISSE!<br />
[2020-04-06 06:57:08] - New Record for Player (Sven Baertschi) Most Hits (3) in 1 Game!<br />
[2020-04-06 06:57:08] - New Record for Player (Luca Sbisa) Most Goals (2) in 1 Game!<br />
[2020-04-06 06:57:08] - New Record for Player (Luca Sbisa) Most Ice Time (27:15) in 1 Game!<br />
[2020-04-06 06:57:08] - New Record for Player (Raphael Diaz) Best Plus/Minus (2) in 1 Game!<br />
[2020-04-06 06:57:08] - New Record for Player (Mirco Mueller) Most Hits (2) in 1 Game!<br />
[2020-04-06 06:57:08] - New Record for Player (Mirco Mueller) Most Shots Blocked (2) in 1 Game!<br />
[2020-04-06 06:57:08] - New Record for Player (Mirco Mueller) Most Shots (4) in 1 Game!<br />
[2020-04-06 06:57:08] - New Record for Player (Mirco Mueller) Most Ice Time (23:32) in 1 Game!<br />
[2020-04-06 06:57:08] - New Record for Player (Yannick Weber) Worse Plus/Minus (-1) in 1 Game!<br />
[2020-04-06 06:57:08] - New Record for Player (Yannick Weber) Most Goals (1) in 1 Game!<br />
[2020-04-06 06:57:08] - New Record for Player (Yannick Weber) Most Ice Time (19:45) in 1 Game!<br />
[2020-04-06 06:57:08] - New Record for Player (Noah Rod) Most Penalties Minutes (2) in 1 Game!<br />
[2020-04-06 06:57:08] - New Record for Player (Noah Rod) Most Shots (2) in 1 Game!<br />
[2020-04-06 06:57:08] - New Record for Player (Noah Rod) Most Points (2) in 1 Game!<br />
[2020-04-06 06:57:08] - New Record for Player (Noah Rod) Most Assists (2) in 1 Game!<br />
[2020-04-06 06:57:08] - New Record for Player (Noah Rod) Most Ice Time (19:36) in 1 Game!<br />
[2020-04-06 06:57:08] - New Record for Player (Damien Brunner) Most Ice Time (9:51) in 1 Game!<br />
[2020-04-06 06:47:02] - Successfully loaded SUEDE lines done with STHS Client - 3.2.0.5<br />
[2020-04-06 06:46:34] - Successfully loaded ETATS-UNIS lines done with STHS Client - 3.2.0.5<br />
[2020-04-05 11:15:01] - Successfully loaded CANADA lines done with STHS Client - 3.2.0.5<br />
[2020-04-05 10:56:37] - Successfully loaded U23 NORTH AMERICA lines done with STHS Client - 3.2.0.5<br />
[2020-04-05 10:56:37] - U23 NORTH AMERICA Email Address was changed to j@imesimon.<br />
[2020-04-05 10:56:34] - Nick Suzuki of U23 NORTH AMERICA was sent down to farm.<br />
[2020-04-05 10:56:34] - Tage Thompson of U23 NORTH AMERICA was sent down to farm.<br />
[2020-04-05 10:56:34] - Owen Tippett of U23 NORTH AMERICA was sent down to farm.<br />
[2020-04-05 10:56:13] - Successfully loaded TEAM WORLD lines done with STHS Client - 3.2.0.5<br />
[2020-04-05 08:01:16] - Successfully loaded SLOVAQUIE lines done with STHS Client - 3.2.0.5<br />
[2020-04-05 07:28:20] - Pro Game Option - PP Value Modified to 45<br />
[2020-04-05 07:28:20] - Pro Game Option - PP Value Modified to 46<br />
[2020-04-05 07:28:20] - Pro Game Option - PP Value Modified to 46<br />
[2020-04-05 07:28:20] - Pro Game Option - PP Value Modified to 47<br />
[2020-04-05 07:28:20] - Pro Game Option - PP Value Modified to 47<br />
[2020-04-05 07:28:20] - Pro Game Option - PP Value Modified to 48<br />
[2020-04-05 07:28:20] - Pro Game Option - PP Value Modified to 48<br />
[2020-04-05 07:28:20] - Pro Game Option - PP Value Modified to 49<br />
[2020-04-05 07:28:20] - Pro Game Option - PP Value Modified to 49<br />
[2020-04-05 07:28:19] - Pro Game Option - PP Value Modified to 50<br />
[2020-04-05 07:28:17] - Pro Game Option - Shots Value Modified to 73<br />
[2020-04-05 07:28:17] - Pro Game Option - Shots Value Modified to 74<br />
[2020-04-05 07:28:16] - Pro Game Option - Shots Value Modified to 74<br />
[2020-04-05 07:28:16] - Pro Game Option - Shots Value Modified to 75<br />
[2020-04-05 07:28:15] - Pro Game Option - Shots Value Modified to 75<br />
[2020-04-05 07:28:15] - Pro Game Option - Shots Value Modified to 74<br />
[2020-04-05 07:28:15] - Pro Game Option - Shots Value Modified to 73<br />
[2020-04-05 07:28:15] - Pro Game Option - Shots Value Modified to 72<br />
[2020-04-05 07:28:15] - Pro Game Option - Shots Value Modified to 71<br />
[2020-04-05 07:28:15] - Pro Game Option - Shots Value Modified to 70<br />
[2020-04-05 07:28:15] - Pro Game Option - Shots Value Modified to 69<br />
[2020-04-05 07:28:15] - Pro Game Option - Shots Value Modified to 68<br />
[2020-04-05 07:28:15] - Pro Game Option - Shots Value Modified to 67<br />
[2020-04-05 07:28:15] - Pro Game Option - Shots Value Modified to 66<br />
[2020-04-05 07:28:15] - Pro Game Option - Shots Value Modified to 65<br />
[2020-04-05 07:28:15] - Pro Game Option - Shots Value Modified to 64<br />
[2020-04-05 07:28:15] - Pro Game Option - Shots Value Modified to 63<br />
[2020-04-05 07:28:15] - Pro Game Option - Shots Value Modified to 62<br />
[2020-04-05 07:28:15] - Pro Game Option - Shots Value Modified to 61<br />
[2020-04-05 07:28:15] - Pro Game Option - Shots Value Modified to 60<br />
[2020-04-05 07:28:14] - Pro Game Option - Shots Value Modified to 59<br />
[2020-04-05 07:28:14] - Pro Game Option - Shots Value Modified to 58<br />
[2020-04-05 07:28:14] - Pro Game Option - Shots Value Modified to 57<br />
[2020-04-05 07:28:14] - Pro Game Option - Shots Value Modified to 56<br />
[2020-04-05 07:28:14] - Pro Game Option - Shots Value Modified to 55<br />
[2020-04-05 07:28:14] - Pro Game Option - Shots Value Modified to 54<br />
[2020-04-05 07:28:14] - Pro Game Option - Shots Value Modified to 53<br />
[2020-04-05 07:28:14] - Pro Game Option - Shots Value Modified to 52<br />
[2020-04-05 07:28:14] - Pro Game Option - Shots Value Modified to 51<br />
[2020-04-05 07:28:14] - Pro Game Option - Shots Value Modified to 50<br />
[2020-04-05 07:28:14] - Pro Game Option - Shots Value Modified to 49<br />
[2020-04-05 07:28:14] - Pro Game Option - Shots Value Modified to 48<br />
[2020-04-05 07:28:14] - Pro Game Option - Shots Value Modified to 47<br />
[2020-04-05 07:28:14] - Pro Game Option - Shots Value Modified to 46<br />
[2020-04-05 07:28:13] - Pro Game Option - Shots Value Modified to 45<br />
[2020-04-05 07:28:11] - Pro Game Option - Penalties Value Modified to 28<br />
[2020-04-05 07:28:11] - Pro Game Option - Penalties Value Modified to 29<br />
[2020-04-05 07:28:11] - Pro Game Option - Penalties Value Modified to 29<br />
[2020-04-05 07:28:11] - Pro Game Option - Penalties Value Modified to 30<br />
[2020-04-05 07:28:11] - Pro Game Option - Penalties Value Modified to 30<br />
[2020-04-05 07:28:11] - Pro Game Option - Penalties Value Modified to 31<br />
[2020-04-05 07:28:10] - Pro Game Option - Penalties Value Modified to 31<br />
[2020-04-05 07:28:10] - Pro Game Option - Penalties Value Modified to 32<br />
[2020-04-05 07:28:10] - Pro Game Option - Penalties Value Modified to 33<br />
[2020-04-05 07:28:10] - Pro Game Option - Penalties Value Modified to 34<br />
[2020-04-05 07:28:10] - Pro Game Option - Penalties Value Modified to 35<br />
[2020-04-05 07:28:10] - Pro Game Option - Penalties Value Modified to 36<br />
[2020-04-05 07:28:10] - Pro Game Option - Penalties Value Modified to 37<br />
[2020-04-05 07:28:10] - Pro Game Option - Penalties Value Modified to 38<br />
[2020-04-05 07:28:10] - Pro Game Option - Penalties Value Modified to 39<br />
[2020-04-05 07:28:10] - Pro Game Option - Penalties Value Modified to 40<br />
[2020-04-05 07:28:10] - Pro Game Option - Penalties Value Modified to 41<br />
[2020-04-05 07:28:10] - Pro Game Option - Penalties Value Modified to 42<br />
[2020-04-05 07:28:10] - Pro Game Option - Penalties Value Modified to 43<br />
[2020-04-05 07:28:09] - Pro Game Option - Penalties Value Modified to 44<br />
[2020-04-05 07:28:09] - Pro Game Option - Penalties Value Modified to 45<br />
[2020-04-05 07:28:09] - Pro Game Option - Penalties Value Modified to 46<br />
[2020-04-05 07:28:09] - Pro Game Option - Penalties Value Modified to 47<br />
[2020-04-05 07:28:09] - Pro Game Option - Penalties Value Modified to 48<br />
[2020-04-05 07:28:09] - Pro Game Option - Penalties Value Modified to 49<br />
[2020-04-05 07:28:09] - Pro Game Option - Penalties Value Modified to 50<br />
[2020-04-05 07:28:06] - Pro Game Option - Morale Value Modified to 2<br />
[2020-04-05 07:28:06] - Pro Game Option - Morale Value Modified to 3<br />
[2020-04-05 07:28:06] - Pro Game Option - Morale Value Modified to 3<br />
[2020-04-05 07:28:06] - Pro Game Option - Morale Value Modified to 4<br />
[2020-04-05 07:28:06] - Pro Game Option - Morale Value Modified to 4<br />
[2020-04-05 07:28:06] - Pro Game Option - Morale Value Modified to 5<br />
[2020-04-05 07:28:05] - Pro Game Option - Morale Value Modified to 5<br />
[2020-04-05 07:28:05] - Pro Game Option - Morale Value Modified to 6<br />
[2020-04-05 07:28:05] - Pro Game Option - Morale Value Modified to 7<br />
[2020-04-05 07:28:05] - Pro Game Option - Morale Value Modified to 8<br />
[2020-04-05 07:28:05] - Pro Game Option - Morale Value Modified to 9<br />
[2020-04-05 07:28:05] - Pro Game Option - Morale Value Modified to 10<br />
[2020-04-05 07:28:05] - Pro Game Option - Morale Value Modified to 11<br />
[2020-04-05 07:28:05] - Pro Game Option - Morale Value Modified to 12<br />
[2020-04-05 07:28:05] - Pro Game Option - Morale Value Modified to 13<br />
[2020-04-05 07:28:05] - Pro Game Option - Morale Value Modified to 14<br />
[2020-04-05 07:28:05] - Pro Game Option - Morale Value Modified to 15<br />
[2020-04-05 07:28:05] - Pro Game Option - Morale Value Modified to 16<br />
[2020-04-05 07:28:05] - Pro Game Option - Morale Value Modified to 17<br />
[2020-04-05 07:28:05] - Pro Game Option - Morale Value Modified to 18<br />
[2020-04-05 07:28:04] - Pro Game Option - Morale Value Modified to 19<br />
[2020-04-05 07:28:04] - Pro Game Option - Morale Value Modified to 20<br />
[2020-04-05 07:28:04] - Pro Game Option - Morale Value Modified to 21<br />
[2020-04-05 07:28:04] - Pro Game Option - Morale Value Modified to 22<br />
[2020-04-05 07:28:04] - Pro Game Option - Morale Value Modified to 23<br />
[2020-04-05 07:28:04] - Pro Game Option - Morale Value Modified to 24<br />
[2020-04-05 07:28:04] - Pro Game Option - Morale Value Modified to 25<br />
[2020-04-05 07:28:02] - Pro Game Option - Injuries Value Modified to 35<br />
[2020-04-05 07:28:01] - Pro Game Option - Injuries Value Modified to 34<br />
[2020-04-05 07:28:01] - Pro Game Option - Injuries Value Modified to 34<br />
[2020-04-05 07:28:01] - Pro Game Option - Injuries Value Modified to 33<br />
[2020-04-05 07:28:01] - Pro Game Option - Injuries Value Modified to 33<br />
[2020-04-05 07:28:01] - Pro Game Option - Injuries Value Modified to 32<br />
[2020-04-05 07:28:01] - Pro Game Option - Injuries Value Modified to 32<br />
[2020-04-05 07:28:01] - Pro Game Option - Injuries Value Modified to 31<br />
[2020-04-05 07:28:01] - Pro Game Option - Injuries Value Modified to 31<br />
[2020-04-05 07:28:01] - Pro Game Option - Injuries Value Modified to 30<br />
[2020-04-05 07:27:58] - Pro Game Option - Goals Value Modified to 30<br />
[2020-04-05 07:27:58] - Pro Game Option - Goals Value Modified to 29<br />
[2020-04-05 07:27:57] - Pro Game Option - Goals Value Modified to 29<br />
[2020-04-05 07:27:57] - Pro Game Option - Goals Value Modified to 30<br />
[2020-04-05 07:27:57] - Pro Game Option - Goals Value Modified to 30<br />
[2020-04-05 07:27:57] - Pro Game Option - Goals Value Modified to 31<br />
[2020-04-05 07:27:57] - Pro Game Option - Goals Value Modified to 32<br />
[2020-04-05 07:27:57] - Pro Game Option - Goals Value Modified to 33<br />
[2020-04-05 07:27:56] - Pro Game Option - Goals Value Modified to 34<br />
[2020-04-05 07:27:56] - Pro Game Option - Goals Value Modified to 35<br />
[2020-04-05 07:27:56] - Pro Game Option - Goals Value Modified to 36<br />
[2020-04-05 07:27:56] - Pro Game Option - Goals Value Modified to 37<br />
[2020-04-05 07:27:56] - Pro Game Option - Goals Value Modified to 38<br />
[2020-04-05 07:27:56] - Pro Game Option - Goals Value Modified to 39<br />
[2020-04-05 07:27:56] - Pro Game Option - Goals Value Modified to 40<br />
[2020-04-05 07:27:56] - Pro Game Option - Goals Value Modified to 41<br />
[2020-04-05 07:27:56] - Pro Game Option - Goals Value Modified to 42<br />
[2020-04-05 07:27:56] - Pro Game Option - Goals Value Modified to 43<br />
[2020-04-05 07:27:56] - Pro Game Option - Goals Value Modified to 44<br />
[2020-04-05 07:27:55] - Pro Game Option - Goals Value Modified to 45<br />
[2020-04-05 07:27:52] - Pro Game Option - Fights Value Modified to 10<br />
[2020-04-05 07:27:52] - Pro Game Option - Fights Value Modified to 11<br />
[2020-04-05 07:27:51] - Pro Game Option - Fights Value Modified to 11<br />
[2020-04-05 07:27:51] - Pro Game Option - Fights Value Modified to 12<br />
[2020-04-05 07:27:51] - Pro Game Option - Fights Value Modified to 12<br />
[2020-04-05 07:27:51] - Pro Game Option - Fights Value Modified to 13<br />
[2020-04-05 07:27:51] - Pro Game Option - Fights Value Modified to 13<br />
[2020-04-05 07:27:51] - Pro Game Option - Fights Value Modified to 14<br />
[2020-04-05 07:27:51] - Pro Game Option - Fights Value Modified to 15<br />
[2020-04-05 07:27:51] - Pro Game Option - Fights Value Modified to 16<br />
[2020-04-05 07:27:51] - Pro Game Option - Fights Value Modified to 17<br />
[2020-04-05 07:27:51] - Pro Game Option - Fights Value Modified to 18<br />
[2020-04-05 07:27:51] - Pro Game Option - Fights Value Modified to 19<br />
[2020-04-05 07:27:51] - Pro Game Option - Fights Value Modified to 20<br />
[2020-04-05 07:27:51] - Pro Game Option - Fights Value Modified to 21<br />
[2020-04-05 07:27:50] - Pro Game Option - Fights Value Modified to 22<br />
[2020-04-05 07:27:50] - Pro Game Option - Fights Value Modified to 23<br />
[2020-04-05 07:27:50] - Pro Game Option - Fights Value Modified to 24<br />
[2020-04-05 07:27:50] - Pro Game Option - Fights Value Modified to 25<br />
[2020-04-05 07:27:50] - Pro Game Option - Fights Value Modified to 26<br />
[2020-04-05 07:27:50] - Pro Game Option - Fights Value Modified to 27<br />
[2020-04-05 07:27:50] - Pro Game Option - Fights Value Modified to 28<br />
[2020-04-05 07:27:50] - Pro Game Option - Fights Value Modified to 29<br />
[2020-04-05 07:27:50] - Pro Game Option - Fights Value Modified to 30<br />
[2020-04-05 07:27:50] - Pro Game Option - Fights Value Modified to 31<br />
[2020-04-05 07:27:50] - Pro Game Option - Fights Value Modified to 32<br />
[2020-04-05 07:27:50] - Pro Game Option - Fights Value Modified to 33<br />
[2020-04-05 07:27:50] - Pro Game Option - Fights Value Modified to 34<br />
[2020-04-05 07:27:50] - Pro Game Option - Fights Value Modified to 35<br />
[2020-04-05 07:27:50] - Pro Game Option - Fights Value Modified to 36<br />
[2020-04-05 07:27:50] - Pro Game Option - Fights Value Modified to 37<br />
[2020-04-05 07:27:49] - Pro Game Option - Fights Value Modified to 38<br />
[2020-04-05 07:27:49] - Pro Game Option - Fights Value Modified to 39<br />
[2020-04-05 07:27:49] - Pro Game Option - Fights Value Modified to 40<br />
[2020-04-05 07:27:47] - Pro Game Option - Coaches Value Modified to 30<br />
[2020-04-05 07:27:47] - Pro Game Option - Coaches Value Modified to 31<br />
[2020-04-05 07:27:47] - Pro Game Option - Coaches Value Modified to 31<br />
[2020-04-05 07:27:47] - Pro Game Option - Coaches Value Modified to 32<br />
[2020-04-05 07:27:47] - Pro Game Option - Coaches Value Modified to 33<br />
[2020-04-05 07:27:47] - Pro Game Option - Coaches Value Modified to 34<br />
[2020-04-05 07:27:47] - Pro Game Option - Coaches Value Modified to 35<br />
[2020-04-05 07:27:47] - Pro Game Option - Coaches Value Modified to 36<br />
[2020-04-05 07:27:47] - Pro Game Option - Coaches Value Modified to 37<br />
[2020-04-05 07:27:46] - Pro Game Option - Coaches Value Modified to 38<br />
[2020-04-05 07:27:46] - Pro Game Option - Coaches Value Modified to 39<br />
[2020-04-05 07:27:46] - Pro Game Option - Coaches Value Modified to 40<br />
[2020-04-05 07:27:46] - Pro Game Option - Coaches Value Modified to 41<br />
[2020-04-05 07:27:46] - Pro Game Option - Coaches Value Modified to 42<br />
[2020-04-05 07:27:46] - Pro Game Option - Coaches Value Modified to 43<br />
[2020-04-05 07:27:46] - Pro Game Option - Coaches Value Modified to 44<br />
[2020-04-05 07:27:46] - Pro Game Option - Coaches Value Modified to 45<br />
[2020-04-05 07:27:46] - Pro Game Option - Coaches Value Modified to 46<br />
[2020-04-05 07:27:46] - Pro Game Option - Coaches Value Modified to 47<br />
[2020-04-05 07:27:46] - Pro Game Option - Coaches Value Modified to 48<br />
[2020-04-05 07:27:46] - Pro Game Option - Coaches Value Modified to 49<br />
[2020-04-05 07:27:45] - Pro Game Option - Coaches Value Modified to 50<br />
[2020-04-05 06:37:37] - Successfully loaded REPUBLIQUE TCHEQUE lines done with STHS Client - 3.2.0.5<br />
[2020-04-05 06:37:25] - Successfully loaded RUSSIE lines done with STHS Client - 3.2.0.5<br />
[2020-04-05 06:37:12] - Successfully loaded LETTONIE lines done with STHS Client - 3.2.0.5<br />
[2020-04-05 06:37:03] - Successfully loaded FINLANDE lines done with STHS Client - 3.2.1.1<br />
[2020-04-05 06:36:31] - Successfully loaded SUISSE lines done with STHS Client - 3.2.0.5<br />
[2020-04-04 15:28:41] - SUEDE roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 9 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-04-04 15:28:40] - Anders Nilsson was added to SUEDE.<br />
[2020-04-04 15:28:36] - There's not enough Goalie players to make a roster for SUEDE.
<br />
[2020-04-04 15:28:32] - Anders Nilsson was created.<br />
[2020-04-04 15:28:32] - Anders Nilsson average salary was modified from 0 $ to 950 000 $.<br />
[2020-04-04 15:27:43] - Anders Nilsson has been added to SUEDE.<br />
[2020-04-04 15:26:54] - Robin Lehner was added to SUEDE.<br />
[2020-04-04 15:26:52] - Robin Lehner has been added to SUEDE.<br />
[2020-04-04 15:26:50] - There's not enough Goalie players to make a roster for SUEDE.
<br />
[2020-04-04 15:26:45] - Robin Lehner was created.<br />
[2020-04-04 15:26:45] - Robin Lehner average salary was modified from 0 $ to 4 250 000 $.<br />
[2020-04-04 15:25:18] - Niklas Hjalmarsson was added to SUEDE.<br />
[2020-04-04 15:25:14] - There's not enough Goalie players to make a roster for SUEDE.
<br />
[2020-04-04 15:25:11] - Niklas Hjalmarsson was created.<br />
[2020-04-04 15:25:11] - Niklas Hjalmarsson average salary was modified from 0 $ to 4 750 000 $.<br />
[2020-04-04 15:24:16] - Niklas Hjalmarsson has been added to SUEDE.<br />
[2020-04-04 15:23:32] - Rasmus Andersson was added to SUEDE.<br />
[2020-04-04 15:23:31] - Rasmus Andersson has been added to SUEDE.<br />
[2020-04-04 15:23:28] - There's not enough Defense players to make a roster for SUEDE.
There's not enough Goalie players to make a roster for SUEDE.
<br />
[2020-04-04 15:23:24] - Rasmus Andersson was created.<br />
[2020-04-04 15:23:24] - Rasmus Andersson average salary was modified from 0 $ to 2 000 000 $.<br />
[2020-04-04 15:21:28] - Jonas Brodin was added to SUEDE.<br />
[2020-04-04 15:21:27] - Jonas Brodin has been added to SUEDE.<br />
[2020-04-04 15:21:24] - There's not enough Defense players to make a roster for SUEDE.
There's not enough Goalie players to make a roster for SUEDE.
<br />
[2020-04-04 15:21:18] - Jonas Brodin was created.<br />
[2020-04-04 15:21:18] - Jonas Brodin average salary was modified from 0 $ to 4 000 000 $.<br />
[2020-04-04 15:19:46] - Hampus Lindholm was added to SUEDE.<br />
[2020-04-04 15:19:45] - Hampus Lindholm has been added to SUEDE.<br />
[2020-04-04 15:19:42] - There's not enough Defense players to make a roster for SUEDE.
There's not enough Goalie players to make a roster for SUEDE.
<br />
[2020-04-04 15:19:37] - Hampus Lindholm was created.<br />
[2020-04-04 15:19:37] - Hampus Lindholm average salary was modified from 0 $ to 6 500 000 $.<br />
[2020-04-04 15:18:33] - There's not enough Defense players to make a roster for SUEDE.
There's not enough Goalie players to make a roster for SUEDE.
<br />
[2020-04-04 15:18:07] - Erik Karlsson was added to SUEDE.<br />
[2020-04-04 15:18:06] - Erik Karlsson has been added to SUEDE.<br />
[2020-04-04 15:18:03] - There's not enough Defense players to make a roster for SUEDE.
There's not enough Goalie players to make a roster for SUEDE.
<br />
[2020-04-04 15:17:57] - Erik Karlsson was created.<br />
[2020-04-04 15:17:57] - Erik Karlsson average salary was modified from 0 $ to 8 500 000 $.<br />
[2020-04-04 15:16:34] - Victor Hedman was added to SUEDE.<br />
[2020-04-04 15:16:32] - Victor Hedman has been added to SUEDE.<br />
[2020-04-04 15:16:29] - There's not enough Defense players to make a roster for SUEDE.
There's not enough Goalie players to make a roster for SUEDE.
<br />
[2020-04-04 15:16:24] - Victor Hedman was created.<br />
[2020-04-04 15:16:24] - Victor Hedman average salary was modified from 0 $ to 6 500 000 $.<br />
[2020-04-04 15:15:08] - Tobias Enstrom was added to SUEDE.<br />
[2020-04-04 15:15:07] - Tobias Enstrom has been added to SUEDE.<br />
[2020-04-04 15:15:04] - There's not enough Defense players to make a roster for SUEDE.
There's not enough Goalie players to make a roster for SUEDE.
<br />
[2020-04-04 15:14:59] - Tobias Enstrom was created.<br />
[2020-04-04 15:14:59] - Tobias Enstrom average salary was modified from 0 $ to 6 500 000 $.<br />
[2020-04-04 15:13:39] - Patrik Berglund was added to SUEDE.<br />
[2020-04-04 15:13:38] - Patrik Berglund has been added to SUEDE.<br />
[2020-04-04 15:13:35] - There's not enough Defense players to make a roster for SUEDE.
There's not enough Goalie players to make a roster for SUEDE.
<br />
[2020-04-04 15:13:29] - Patrik Berglund was created.<br />
[2020-04-04 15:13:29] - Patrik Berglund average salary was modified from 0 $ to 5 750 000 $.<br />
[2020-04-04 15:11:03] - Joel Eriksson Ek was added to SUEDE.<br />
[2020-04-04 15:11:01] - Joel Eriksson Ek has been added to SUEDE.<br />
[2020-04-04 15:10:53] - There's not enough Defense players to make a roster for SUEDE.
There's not enough Goalie players to make a roster for SUEDE.
<br />
[2020-04-04 15:10:48] - Joel Eriksson Ek was created.<br />
[2020-04-04 15:10:48] - Joel Eriksson Ek average salary was modified from 0 $ to 950 000 $.<br />
[2020-04-04 15:09:18] - Max Friberg was added to SUEDE.<br />
[2020-04-04 15:09:17] - Max Friberg has been added to SUEDE.<br />
[2020-04-04 15:09:14] - There's not enough Defense players to make a roster for SUEDE.
There's not enough Goalie players to make a roster for SUEDE.
<br />
[2020-04-04 15:09:09] - Max Friberg was created.<br />
[2020-04-04 15:09:09] - Max Friberg average salary was modified from 0 $ to 4 300 000 $.<br />
[2020-04-04 15:07:38] - Farm Team 4 roster errors : Not enough Players available in Pro Team! 11 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[2020-04-04 15:07:38] - SUEDE roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 9 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-04-04 15:07:37] - Mattias Tedenby was added to SUEDE.<br />
[2020-04-04 15:07:35] - Mattias Tedenby has been added to SUEDE.<br />
[2020-04-04 15:07:33] - There's not enough Defense players to make a roster for SUEDE.
There's not enough Goalie players to make a roster for SUEDE.
<br />
[2020-04-04 15:07:27] - Mattias Tedenby was created.<br />
[2020-04-04 15:07:27] - Mattias Tedenby average salary was modified from 0 $ to 6 000 000 $.<br />
[2020-04-04 15:06:09] - Gustav Nyquist was added to SUEDE.<br />
[2020-04-04 15:06:07] - Gustav Nyquist has been added to SUEDE.<br />
[2020-04-04 15:06:04] - There's not enough Defense players to make a roster for SUEDE.
There's not enough Goalie players to make a roster for SUEDE.
Not enough players available for SUEDE.
<br />
[2020-04-04 15:06:01] - Gustav Nyquist was created.<br />
[2020-04-04 15:06:01] - Gustav Nyquist average salary was modified from 0 $ to 2 000 000 $.<br />
[2020-04-04 15:04:43] - Jacob De La Rose was added to SUEDE.<br />
[2020-04-04 15:04:42] - Jacob De La Rose has been added to SUEDE.<br />
[2020-04-04 15:04:39] - There's not enough Defense players to make a roster for SUEDE.
There's not enough Goalie players to make a roster for SUEDE.
Not enough players available for SUEDE.
<br />
[2020-04-04 15:04:34] - Jacob De La Rose was created.<br />
[2020-04-04 15:04:34] - Jacob De La Rose average salary was modified from 0 $ to 2 000 000 $.<br />
[2020-04-04 15:03:18] - Magnus Paajarvi was added to SUEDE.<br />
[2020-04-04 15:03:16] - Magnus Paajarvi has been added to SUEDE.<br />
[2020-04-04 15:03:13] - There's not enough Defense players to make a roster for SUEDE.
There's not enough Goalie players to make a roster for SUEDE.
Not enough players available for SUEDE.
<br />
[2020-04-04 15:03:08] - Magnus Paajarvi was created.<br />
[2020-04-04 15:03:08] - Magnus Paajarvi average salary was modified from 0 $ to 5 200 000 $.<br />
[2020-04-04 15:01:53] - Henrik Sedin was added to SUEDE.<br />
[2020-04-04 15:01:51] - Henrik Sedin has been added to SUEDE.<br />
[2020-04-04 15:01:49] - There's not enough Defense players to make a roster for SUEDE.
There's not enough Goalie players to make a roster for SUEDE.
Not enough players available for SUEDE.
<br />
[2020-04-04 15:01:43] - Henrik Sedin was created.<br />
[2020-04-04 15:01:43] - Henrik Sedin average salary was modified from 0 $ to 7 300 000 $.<br />
[2020-04-04 15:00:30] - Victor Olofsson was added to SUEDE.<br />
[2020-04-04 15:00:29] - Victor Olofsson has been added to SUEDE.<br />
[2020-04-04 15:00:26] - There's not enough Defense players to make a roster for SUEDE.
There's not enough Goalie players to make a roster for SUEDE.
Not enough players available for SUEDE.
<br />
[2020-04-04 15:00:19] - Victor Olofsson was created.<br />
[2020-04-04 15:00:19] - Victor Olofsson average salary was modified from 0 $ to 900 000 $.<br />
[2020-04-04 14:58:55] - Loui Eriksson was added to SUEDE.<br />
[2020-04-04 14:58:54] - Loui Eriksson has been added to SUEDE.<br />
[2020-04-04 14:58:50] - There's not enough Right Wing players to make a roster for SUEDE.
There's not enough Forward players to make a roster for SUEDE.
There's not enough Defense players to make a roster for SUEDE.
There's not enough Goalie players to make a roster for SUEDE.
Not enough players available for SUEDE.
<br />
[2020-04-04 14:58:44] - Loui Eriksson was created.<br />
[2020-04-04 14:58:44] - Loui Eriksson average salary was modified from 0 $ to 7 500 000 $.<br />
[2020-04-04 14:57:11] - Gabriel Landeskog was added to SUEDE.<br />
[2020-04-04 14:57:09] - Gabriel Landeskog has been added to SUEDE.<br />
[2020-04-04 14:57:06] - There's not enough Left Wing players to make a roster for SUEDE.
There's not enough Right Wing players to make a roster for SUEDE.
There's not enough Forward players to make a roster for SUEDE.
There's not enough Defense players to make a roster for SUEDE.
There's not enough Goalie players to make a roster for SUEDE.
Not enough players available for SUEDE.
<br />
[2020-04-04 14:57:00] - Gabriel Landeskog was created.<br />
[2020-04-04 14:57:00] - Gabriel Landeskog average salary was modified from 0 $ to 7 000 000 $.<br />
[2020-04-04 14:55:48] - William Nylander was added to SUEDE.<br />
[2020-04-04 14:55:45] - William Nylander has been added to SUEDE.<br />
[2020-04-04 14:55:41] - Rickard Rakell was added to SUEDE.<br />
[2020-04-04 14:55:39] - Rickard Rakell has been added to SUEDE.<br />
[2020-04-04 14:55:36] - There's not enough Center players to make a roster for SUEDE.
There's not enough Left Wing players to make a roster for SUEDE.
There's not enough Right Wing players to make a roster for SUEDE.
There's not enough Forward players to make a roster for SUEDE.
There's not enough Defense players to make a roster for SUEDE.
There's not enough Goalie players to make a roster for SUEDE.
Not enough players available for SUEDE.
<br />
[2020-04-04 14:55:30] - Rickard Rakell was created.<br />
[2020-04-04 14:55:30] - Rickard Rakell average salary was modified from 0 $ to 3 650 000 $.<br />
[2020-04-04 14:53:59] - William Nylander was created.<br />
[2020-04-04 14:53:59] - William Nylander average salary was modified from 0 $ to 5 000 000 $.<br />
[2020-04-04 14:52:38] - SUEDE hired Daniel Alfredsson for 500 000 $ for 1 year(s).<br />
[2020-04-04 14:52:34] - There's not enough Center players to make a roster for SUEDE.
There's not enough Left Wing players to make a roster for SUEDE.
There's not enough Right Wing players to make a roster for SUEDE.
There's not enough Forward players to make a roster for SUEDE.
There's not enough Defense players to make a roster for SUEDE.
There's not enough Goalie players to make a roster for SUEDE.
Not enough players available for SUEDE.
<br />
[2020-04-04 14:52:29] - Daniel Alfredsson was created.<br />
[2020-04-04 14:51:43] - Nicklas Backstrom was added to SUEDE.<br />
[2020-04-04 14:51:41] - Nicklas Backstrom has been added to SUEDE.<br />
[2020-04-04 14:51:38] - There's not enough Center players to make a roster for SUEDE.
There's not enough Left Wing players to make a roster for SUEDE.
There's not enough Right Wing players to make a roster for SUEDE.
There's not enough Forward players to make a roster for SUEDE.
There's not enough Defense players to make a roster for SUEDE.
There's not enough Goalie players to make a roster for SUEDE.
Not enough players available for SUEDE.
<br />
[2020-04-04 14:51:32] - Nicklas Backstrom was created.<br />
[2020-04-04 14:51:32] - Nicklas Backstrom average salary was modified from 0 $ to 6 700 000 $.<br />
[2020-04-04 13:56:10] - Successfully loaded ALLEMAGNE lines done with STHS Client - 3.2.1.1<br />
[2020-04-04 13:53:33] - There's not enough Center players to make a roster for SUEDE.
There's not enough Left Wing players to make a roster for SUEDE.
There's not enough Right Wing players to make a roster for SUEDE.
There's not enough Forward players to make a roster for SUEDE.
There's not enough Defense players to make a roster for SUEDE.
There's not enough Goalie players to make a roster for SUEDE.
Not enough players available for SUEDE.
<br />
[2020-04-04 13:53:17] - U23 NORTH AMERICA roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 9 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-04-04 13:52:24] - CANADA roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 9 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-04-04 13:52:22] - Bo Horvat was added to CANADA.<br />
[2020-04-04 13:52:21] - Brad Marchand was added to CANADA.<br />
[2020-04-04 13:52:20] - Ty Rattie was added to CANADA.<br />
[2020-04-04 13:52:19] - Taylor Hall was added to CANADA.<br />
[2020-04-04 13:52:17] - Steven Stamkos was added to CANADA.<br />
[2020-04-04 13:52:16] - Sean Monahan was added to CANADA.<br />
[2020-04-04 13:52:16] - Sam Reinhart was added to CANADA.<br />
[2020-04-04 13:52:15] - Ryan Ellis was added to CANADA.<br />
[2020-04-04 13:52:14] - Phillip Danault was added to CANADA.<br />
[2020-04-04 13:52:13] - Mark Stone was added to CANADA.<br />
[2020-04-04 13:52:12] - Luke Schenn was added to CANADA.<br />
[2020-04-04 13:52:11] - Logan Couture was added to CANADA.<br />
[2020-04-04 13:52:10] - Jonathan Toews was added to CANADA.<br />
[2020-04-04 13:52:09] - Jonathan Drouin was added to CANADA.<br />
[2020-04-04 13:52:08] - John Tavares was added to CANADA.<br />
[2020-04-04 13:52:06] - David Musil was added to CANADA.<br />
[2020-04-04 13:52:05] - Colton Parayko was added to CANADA.<br />
[2020-04-04 13:52:04] - Cody Ceci was added to CANADA.<br />
[2020-04-04 13:52:03] - Carey Price was added to CANADA.<br />
[2020-04-04 13:52:02] - Cam Fowler was added to CANADA.<br />
[2020-04-04 13:52:01] - Brent Burns was added to CANADA.<br />
[2020-04-04 13:52:00] - Brayden Schenn was added to CANADA.<br />
[2020-04-04 13:51:56] - Braden Holtby was added to CANADA.<br />
[2020-04-04 13:51:53] - Braden Holtby has been added to CANADA.<br />
[2020-04-04 13:51:48] - Carey Price has been added to CANADA.<br />
[2020-04-04 13:51:45] - Luke Schenn has been added to CANADA.<br />
[2020-04-04 13:51:40] - Ryan Ellis has been added to CANADA.<br />
[2020-04-04 13:51:36] - Cody Ceci has been added to CANADA.<br />
[2020-04-04 13:51:31] - Brent Burns has been added to CANADA.<br />
[2020-04-04 13:51:27] - Colton Parayko has been added to CANADA.<br />
[2020-04-04 13:51:22] - David Musil has been added to CANADA.<br />
[2020-04-04 13:51:19] - Cam Fowler has been added to CANADA.<br />
[2020-04-04 13:51:14] - Jonathan Drouin has been added to CANADA.<br />
[2020-04-04 13:51:10] - Phillip Danault has been added to CANADA.<br />
[2020-04-04 13:51:02] - Bo Horvat has been added to CANADA.<br />
[2020-04-04 13:50:58] - Jonathan Toews has been added to CANADA.<br />
[2020-04-04 13:50:52] - Brayden Schenn has been added to CANADA.<br />
[2020-04-04 13:50:46] - Ty Rattie has been added to CANADA.<br />
[2020-04-04 13:50:42] - Logan Couture has been added to CANADA.<br />
[2020-04-04 13:50:38] - Sam Reinhart has been added to CANADA.<br />
[2020-04-04 13:50:33] - Mark Stone has been added to CANADA.<br />
[2020-04-04 13:50:29] - Sean Monahan has been added to CANADA.<br />
[2020-04-04 13:50:26] - Brad Marchand has been added to CANADA.<br />
[2020-04-04 13:50:22] - Steven Stamkos has been added to CANADA.<br />
[2020-04-04 13:50:17] - John Tavares has been added to CANADA.<br />
[2020-04-04 13:50:13] - Taylor Hall has been added to CANADA.<br />
[2020-04-04 13:48:48] - There's not enough Center players to make a roster for CANADA.
There's not enough Left Wing players to make a roster for CANADA.
There's not enough Right Wing players to make a roster for CANADA.
There's not enough Forward players to make a roster for CANADA.
There's not enough Defense players to make a roster for CANADA.
There's not enough Goalie players to make a roster for CANADA.
Not enough players available for CANADA.
<br />
[2020-04-04 13:48:44] - Braden Holtby was created.<br />
[2020-04-04 13:48:44] - Braden Holtby average salary was modified from 0 $ to 7 500 000 $.<br />
[2020-04-04 13:47:41] - Carey Price was created.<br />
[2020-04-04 13:47:41] - Carey Price average salary was modified from 0 $ to 10 500 000 $.<br />
[2020-04-04 13:46:24] - Luke Schenn was created.<br />
[2020-04-04 13:45:17] - Ryan Ellis was created.<br />
[2020-04-04 13:45:17] - Ryan Ellis average salary was modified from 0 $ to 4 500 000 $.<br />
[2020-04-04 13:44:10] - Cody Ceci was created.<br />
[2020-04-04 13:44:10] - Cody Ceci average salary was modified from 0 $ to 2 500 000 $.<br />
[2020-04-04 13:43:02] - Brent Burns was created.<br />
[2020-04-04 13:43:02] - Brent Burns average salary was modified from 0 $ to 6 750 000 $.<br />
[2020-04-04 13:41:52] - Colton Parayko was created.<br />
[2020-04-04 13:41:52] - Colton Parayko average salary was modified from 0 $ to 4 500 000 $.<br />
[2020-04-04 13:40:40] - David Musil was created.<br />
[2020-04-04 13:40:40] - David Musil average salary was modified from 0 $ to 3 000 000 $.<br />
[2020-04-04 13:38:49] - Cam Fowler was created.<br />
[2020-04-04 13:38:49] - Cam Fowler average salary was modified from 0 $ to 7 500 000 $.<br />
[2020-04-04 13:37:04] - Jonathan Drouin was created.<br />
[2020-04-04 13:37:04] - Jonathan Drouin average salary was modified from 0 $ to 5 700 000 $.<br />
[2020-04-04 13:35:52] - Phillip Danault was created.<br />
[2020-04-04 13:35:52] - Phillip Danault average salary was modified from 0 $ to 2 000 000 $.<br />
[2020-04-04 13:34:47] - Bo Horvat was created.<br />
[2020-04-04 13:34:47] - Bo Horvat average salary was modified from 0 $ to 4 500 000 $.<br />
[2020-04-04 13:33:39] - Jonathan Toews was created.<br />
[2020-04-04 13:33:39] - Jonathan Toews average salary was modified from 0 $ to 9 000 000 $.<br />
[2020-04-04 13:32:24] - Brayden Schenn was created.<br />
[2020-04-04 13:32:24] - Brayden Schenn average salary was modified from 0 $ to 7 000 000 $.<br />
[2020-04-04 13:31:02] - Ty Rattie was created.<br />
[2020-04-04 13:31:02] - Ty Rattie average salary was modified from 0 $ to 5 500 000 $.<br />
[2020-04-04 13:29:48] - Logan Couture was created.<br />
[2020-04-04 13:29:48] - Logan Couture average salary was modified from 0 $ to 7 250 000 $.<br />
[2020-04-04 13:28:26] - Sam Reinhart was created.<br />
[2020-04-04 13:28:26] - Sam Reinhart average salary was modified from 0 $ to 5 500 000 $.<br />
[2020-04-04 13:27:12] - Mark Stone was created.<br />
[2020-04-04 13:27:12] - Mark Stone average salary was modified from 0 $ to 7 000 000 $.<br />
[2020-04-04 13:25:58] - Sean Monahan was created.<br />
[2020-04-04 13:25:58] - Sean Monahan average salary was modified from 0 $ to 6 000 000 $.<br />
[2020-04-04 13:24:49] - Brad Marchand was created.<br />
[2020-04-04 13:24:49] - Brad Marchand average salary was modified from 0 $ to 9 000 000 $.<br />
[2020-04-04 13:23:42] - Steven Stamkos was created.<br />
[2020-04-04 13:23:42] - Steven Stamkos average salary was modified from 0 $ to 9 500 000 $.<br />
[2020-04-04 13:22:26] - John Tavares was created.<br />
[2020-04-04 13:22:26] - John Tavares average salary was modified from 0 $ to 10 000 000 $.<br />
[2020-04-04 13:21:16] - Taylor Hall was created.<br />
[2020-04-04 13:21:16] - Taylor Hall average salary was modified from 0 $ to 6 500 000 $.<br />
[2020-04-04 13:19:50] - CANADA hired Ron Wilson for 2 500 000 $ for 3 year(s).<br />
[2020-04-04 13:19:46] - There's not enough Center players to make a roster for CANADA.
There's not enough Left Wing players to make a roster for CANADA.
There's not enough Right Wing players to make a roster for CANADA.
There's not enough Forward players to make a roster for CANADA.
There's not enough Defense players to make a roster for CANADA.
There's not enough Goalie players to make a roster for CANADA.
Not enough players available for CANADA.
<br />
[2020-04-04 13:19:41] - Ron Wilson was created.<br />
[2020-04-04 13:17:19] - There's not enough Center players to make a roster for CANADA.
There's not enough Left Wing players to make a roster for CANADA.
There's not enough Right Wing players to make a roster for CANADA.
There's not enough Forward players to make a roster for CANADA.
There's not enough Defense players to make a roster for CANADA.
There's not enough Goalie players to make a roster for CANADA.
Not enough players available for CANADA.
<br />
[2020-04-04 13:17:19] - There's not enough Center players to make a roster for SUEDE.
There's not enough Left Wing players to make a roster for SUEDE.
There's not enough Right Wing players to make a roster for SUEDE.
There's not enough Forward players to make a roster for SUEDE.
There's not enough Defense players to make a roster for SUEDE.
There's not enough Goalie players to make a roster for SUEDE.
Not enough players available for SUEDE.
<br />
[2020-04-04 13:17:11] - Ville Pokka was added to FINLANDE.<br />
[2020-04-04 13:17:10] - Ville Leskinen was added to FINLANDE.<br />
[2020-04-04 13:17:08] - Tuomo Ruutu was added to FINLANDE.<br />
[2020-04-04 13:17:06] - Toni Rajala was added to FINLANDE.<br />
[2020-04-04 13:17:04] - Teemu Pulkkinen was added to FINLANDE.<br />
[2020-04-04 13:17:02] - Sebastian Aho was added to FINLANDE.<br />
[2020-04-04 13:17:00] - Sami Vatanen was added to FINLANDE.<br />
[2020-04-04 13:16:58] - Saku Maenalanen was added to FINLANDE.<br />
[2020-04-04 13:16:56] - Roope Hintz was added to FINLANDE.<br />
[2020-04-04 13:16:55] - Pekka Rinne was added to FINLANDE.<br />
[2020-04-04 13:16:53] - Olli Maatta was added to FINLANDE.<br />
[2020-04-04 13:16:51] - Miro Heiskanen was added to FINLANDE.<br />
[2020-04-04 13:16:37] - Mikko Rantanen was added to FINLANDE.<br />
[2020-04-04 13:16:35] - Miikka Salomaki was added to FINLANDE.<br />
[2020-04-04 13:16:33] - Kasperi Kapanen was added to FINLANDE.<br />
[2020-04-04 13:16:32] - Jyrki Jokipakka was added to FINLANDE.<br />
[2020-04-04 13:16:30] - Juuse Saros was added to FINLANDE.<br />
[2020-04-04 13:16:28] - Julius Honka was added to FINLANDE.<br />
[2020-04-04 13:16:26] - Joel Armia was added to FINLANDE.<br />
[2020-04-04 13:16:24] - Jesse Puljujarvi was added to FINLANDE.<br />
[2020-04-04 13:16:22] - Jesperi Kotkaniemi was added to FINLANDE.<br />
[2020-04-04 13:16:20] - Jani Hakanpaa was added to FINLANDE.<br />
[2020-04-04 13:16:18] - Antti Suomela was added to FINLANDE.<br />
[2020-04-04 13:16:06] - Pekka Rinne has been added to FINLANDE.<br />
[2020-04-04 13:16:01] - Jyrki Jokipakka has been added to FINLANDE.<br />
[2020-04-04 13:15:56] - Julius Honka has been added to FINLANDE.<br />
[2020-04-04 13:15:51] - Ville Pokka has been added to FINLANDE.<br />
[2020-04-04 13:15:46] - Sami Vatanen has been added to FINLANDE.<br />
[2020-04-04 13:15:40] - Jani Hakanpaa has been added to FINLANDE.<br />
[2020-04-04 13:15:36] - Olli Maatta has been added to FINLANDE.<br />
[2020-04-04 13:15:29] - Miro Heiskanen has been added to FINLANDE.<br />
[2020-04-04 13:15:24] - Jesperi Kotkaniemi has been added to FINLANDE.<br />
[2020-04-04 13:15:18] - Roope Hintz has been added to FINLANDE.<br />
[2020-04-04 13:15:12] - Joel Armia has been added to FINLANDE.<br />
[2020-04-04 13:15:09] - Tuomo Ruutu has been added to FINLANDE.<br />
[2020-04-04 13:15:04] - Ville Leskinen has been added to FINLANDE.<br />
[2020-04-04 13:14:59] - Toni Rajala has been added to FINLANDE.<br />
[2020-04-04 13:14:53] - Miikka Salomaki has been added to FINLANDE.<br />
[2020-04-04 13:14:47] - Kasperi Kapanen has been added to FINLANDE.<br />
[2020-04-04 13:14:43] - Teemu Pulkkinen has been added to FINLANDE.<br />
[2020-04-04 13:14:38] - Antti Suomela has been added to FINLANDE.<br />
[2020-04-04 13:14:33] - Saku Maenalanen has been added to FINLANDE.<br />
[2020-04-04 13:14:27] - Jesse Puljujarvi has been added to FINLANDE.<br />
[2020-04-04 13:14:20] - Mikko Rantanen has been added to FINLANDE.<br />
[2020-04-04 13:14:14] - Sebastian Aho has been added to FINLANDE.<br />
[2020-04-04 13:14:08] - Juuse Saros has been added to FINLANDE.<br />
[2020-04-04 13:14:00] - There's not enough Center players to make a roster for FINLANDE.
There's not enough Left Wing players to make a roster for FINLANDE.
There's not enough Right Wing players to make a roster for FINLANDE.
There's not enough Forward players to make a roster for FINLANDE.
There's not enough Defense players to make a roster for FINLANDE.
There's not enough Goalie players to make a roster for FINLANDE.
Not enough players available for FINLANDE.
<br />
[2020-04-04 13:13:56] - Juuse Saros was created.<br />
[2020-04-04 13:13:56] - Juuse Saros average salary was modified from 0 $ to 1 500 000 $.<br />
[2020-04-04 13:12:56] - Pekka Rinne was created.<br />
[2020-04-04 13:12:56] - Pekka Rinne average salary was modified from 0 $ to 5 000 000 $.<br />
[2020-04-04 13:11:53] - Jyrki Jokipakka was created.<br />
[2020-04-04 13:11:53] - Jyrki Jokipakka average salary was modified from 0 $ to 2 250 000 $.<br />
[2020-04-04 13:10:44] - Julius Honka was created.<br />
[2020-04-04 13:10:44] - Julius Honka average salary was modified from 0 $ to 1 500 000 $.<br />
[2020-04-04 13:09:38] - Ville Pokka was created.<br />
[2020-04-04 13:09:38] - Ville Pokka average salary was modified from 0 $ to 1 750 000 $.<br />
[2020-04-04 13:08:28] - Sami Vatanen was created.<br />
[2020-04-04 13:08:28] - Sami Vatanen average salary was modified from 0 $ to 3 200 000 $.<br />
[2020-04-04 13:07:16] - Jani Hakanpaa was created.<br />
[2020-04-04 13:07:16] - Jani Hakanpaa average salary was modified from 0 $ to 3 500 000 $.<br />
[2020-04-04 13:05:52] - Olli Maatta was created.<br />
[2020-04-04 13:05:52] - Olli Maatta average salary was modified from 0 $ to 3 500 000 $.<br />
[2020-04-04 13:03:25] - Miro Heiskanen was created.<br />
[2020-04-04 13:03:25] - Miro Heiskanen average salary was modified from 0 $ to 950 000 $.<br />
[2020-04-04 13:02:16] - Jesperi Kotkaniemi was created.<br />
[2020-04-04 13:02:16] - Jesperi Kotkaniemi average salary was modified from 0 $ to 950 000 $.<br />
[2020-04-04 12:08:47] - Roope Hintz was created.<br />
[2020-04-04 12:08:47] - Roope Hintz average salary was modified from 0 $ to 950 000 $.<br />
[2020-04-04 12:07:36] - Joel Armia was created.<br />
[2020-04-04 12:07:36] - Joel Armia average salary was modified from 0 $ to 950 000 $.<br />
[2020-04-04 12:06:33] - Tuomo Ruutu was created.<br />
[2020-04-04 12:05:34] - Ville Leskinen was created.<br />
[2020-04-04 12:05:34] - Ville Leskinen average salary was modified from 0 $ to 2 000 000 $.<br />
[2020-04-04 12:03:52] - Toni Rajala was created.<br />
[2020-04-04 12:03:52] - Toni Rajala average salary was modified from 0 $ to 1 900 000 $.<br />
[2020-04-04 12:02:42] - Miikka Salomaki was created.<br />
[2020-04-04 12:02:42] - Miikka Salomaki average salary was modified from 0 $ to 1 000 000 $.<br />
[2020-04-04 12:01:29] - Kasperi Kapanen was created.<br />
[2020-04-04 12:01:29] - Kasperi Kapanen average salary was modified from 0 $ to 950 000 $.<br />
[2020-04-04 12:00:12] - Teemu Pulkkinen was created.<br />
[2020-04-04 12:00:12] - Teemu Pulkkinen average salary was modified from 0 $ to 3 000 000 $.<br />
[2020-04-04 11:58:56] - Antti Suomela was created.<br />
[2020-04-04 11:58:56] - Antti Suomela average salary was modified from 0 $ to 925 000 $.<br />
[2020-04-04 11:57:49] - Saku Maenalanen was created.<br />
[2020-04-04 11:57:49] - Saku Maenalanen average salary was modified from 0 $ to 2 100 000 $.<br />
[2020-04-04 11:53:37] - Jesse Puljujarvi was created.<br />
[2020-04-04 11:53:37] - Jesse Puljujarvi average salary was modified from 0 $ to 3 000 000 $.<br />
[2020-04-04 11:43:09] - Mikko Rantanen was created.<br />
[2020-04-04 11:43:09] - Mikko Rantanen average salary was modified from 0 $ to 7 500 000 $.<br />
[2020-04-04 11:41:56] - Sebastian Aho was created.<br />
[2020-04-04 11:41:56] - Sebastian Aho average salary was modified from 0 $ to 7 000 000 $.<br />
[2020-04-04 11:40:24] - FINLANDE hired Saku Koivu for 900 000 $ for 3 year(s).<br />
[2020-04-04 11:40:20] - There's not enough Center players to make a roster for FINLANDE.
There's not enough Left Wing players to make a roster for FINLANDE.
There's not enough Right Wing players to make a roster for FINLANDE.
There's not enough Forward players to make a roster for FINLANDE.
There's not enough Defense players to make a roster for FINLANDE.
There's not enough Goalie players to make a roster for FINLANDE.
Not enough players available for FINLANDE.
<br />
[2020-04-04 11:40:16] - Saku Koivu was created.<br />
[2020-04-04 09:26:54] - There's not enough Center players to make a roster for FINLANDE.
There's not enough Left Wing players to make a roster for FINLANDE.
There's not enough Right Wing players to make a roster for FINLANDE.
There's not enough Forward players to make a roster for FINLANDE.
There's not enough Defense players to make a roster for FINLANDE.
There's not enough Goalie players to make a roster for FINLANDE.
Not enough players available for FINLANDE.
<br />
[2020-04-04 09:26:54] - There's not enough Center players to make a roster for CANADA.
There's not enough Left Wing players to make a roster for CANADA.
There's not enough Right Wing players to make a roster for CANADA.
There's not enough Forward players to make a roster for CANADA.
There's not enough Defense players to make a roster for CANADA.
There's not enough Goalie players to make a roster for CANADA.
Not enough players available for CANADA.
<br />
[2020-04-04 09:26:53] - There's not enough Center players to make a roster for SUEDE.
There's not enough Left Wing players to make a roster for SUEDE.
There's not enough Right Wing players to make a roster for SUEDE.
There's not enough Forward players to make a roster for SUEDE.
There's not enough Defense players to make a roster for SUEDE.
There's not enough Goalie players to make a roster for SUEDE.
Not enough players available for SUEDE.
<br />
[2020-04-04 09:26:45] - Kirby Dach has been deleted from U23 NORTH AMERICA.<br />
[2020-04-04 09:26:40] - U23 NORTH AMERICA roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 9 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-04-04 09:26:33] - Kirby Dach has been added to U23 NORTH AMERICA.<br />
[2020-04-04 09:26:30] - Adam Fox was added to U23 NORTH AMERICA.<br />
[2020-04-04 09:26:28] - Adam Fox has been added to U23 NORTH AMERICA.<br />
[2020-04-04 09:26:25] - Quinn Hughes was added to U23 NORTH AMERICA.<br />
[2020-04-04 09:26:23] - Quinn Hughes has been added to U23 NORTH AMERICA.<br />
[2020-04-04 09:26:19] - Alexis Lafrenière was added to U23 NORTH AMERICA.<br />
[2020-04-04 09:26:18] - Alexis Lafrenière has been added to U23 NORTH AMERICA.<br />
[2020-04-04 09:26:15] - There's not enough Defense players to make a roster for U23 NORTH AMERICA.
<br />
[2020-04-04 09:26:07] - Alexis Lafrenière was created.<br />
[2020-04-04 09:26:07] - Alexis Lafrenière average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-04 09:22:08] - Adam Fox was created.<br />
[2020-04-04 09:22:08] - Adam Fox average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-04 09:19:56] - Quinn Hughes was created.<br />
[2020-04-04 09:19:56] - Quinn Hughes average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-04 09:17:34] - Kirby Dach was added to U23 NORTH AMERICA.<br />
[2020-04-04 09:17:33] - Kirby Dach has been added to U23 NORTH AMERICA.<br />
[2020-04-04 09:17:30] - There's not enough Defense players to make a roster for U23 NORTH AMERICA.
<br />
[2020-04-04 09:17:22] - Kirby Dach was created.<br />
[2020-04-04 09:17:22] - Kirby Dach average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-04 09:14:06] - Arturs Silovs was added to LETTONIE.<br />
[2020-04-04 09:14:05] - Arturs Silovs has been added to LETTONIE.<br />
[2020-04-04 09:14:02] - There's not enough Goalie players to make a roster for LETTONIE.
<br />
[2020-04-04 09:13:55] - Arturs Silovs was created.<br />
[2020-04-04 09:13:55] - Arturs Silovs average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-04 09:05:25] - Carter Hart was added to U23 NORTH AMERICA.<br />
[2020-04-04 09:05:23] - Colton Point was added to U23 NORTH AMERICA.<br />
[2020-04-04 09:05:20] - There's not enough Defense players to make a roster for U23 NORTH AMERICA.
There's not enough Goalie players to make a roster for U23 NORTH AMERICA.
<br />
[2020-04-04 09:05:16] - Colton Point was created.<br />
[2020-04-04 09:05:16] - Colton Point average salary was modified from 0 $ to 900 000 $.<br />
[2020-04-04 08:48:11] - Carter Hart was created.<br />
[2020-04-04 08:48:11] - Carter Hart average salary was modified from 0 $ to 950 000 $.<br />
[2020-04-04 08:47:25] - Colton Point has been added to U23 NORTH AMERICA.<br />
[2020-04-04 08:47:21] - Carter Hart has been added to U23 NORTH AMERICA.<br />
[2020-04-04 08:47:05] - Noah Hanifin was added to U23 NORTH AMERICA.<br />
[2020-04-04 08:47:03] - Noah Hanifin has been added to U23 NORTH AMERICA.<br />
[2020-04-04 08:46:58] - Cale Makar was added to U23 NORTH AMERICA.<br />
[2020-04-04 08:46:56] - Cale Makar has been added to U23 NORTH AMERICA.<br />
[2020-04-04 08:46:50] - Samuel Girard was added to U23 NORTH AMERICA.<br />
[2020-04-04 08:46:48] - Samuel Girard has been added to U23 NORTH AMERICA.<br />
[2020-04-04 08:46:43] - Charles McAvoy was added to U23 NORTH AMERICA.<br />
[2020-04-04 08:46:41] - Charles McAvoy has been added to U23 NORTH AMERICA.<br />
[2020-04-04 08:46:35] - Thomas Chabot was added to U23 NORTH AMERICA.<br />
[2020-04-04 08:46:33] - Thomas Chabot has been added to U23 NORTH AMERICA.<br />
[2020-04-04 08:46:30] - There's not enough Defense players to make a roster for U23 NORTH AMERICA.
There's not enough Goalie players to make a roster for U23 NORTH AMERICA.
<br />
[2020-04-04 08:46:24] - Thomas Chabot was created.<br />
[2020-04-04 08:46:24] - Thomas Chabot average salary was modified from 0 $ to 950 000 $.<br />
[2020-04-04 08:45:08] - Noah Hanifin was created.<br />
[2020-04-04 08:45:08] - Noah Hanifin average salary was modified from 0 $ to 4 000 000 $.<br />
[2020-04-04 08:43:56] - Cale Makar was created.<br />
[2020-04-04 08:43:56] - Cale Makar average salary was modified from 0 $ to 950 000 $.<br />
[2020-04-04 08:42:42] - Samuel Girard was created.<br />
[2020-04-04 08:42:42] - Samuel Girard average salary was modified from 0 $ to 950 000 $.<br />
[2020-04-04 08:41:27] - Charles McAvoy was created.<br />
[2020-04-04 08:41:27] - Charles McAvoy average salary was modified from 0 $ to 950 000 $.<br />
[2020-04-04 08:40:04] - Brock Boeser was added to U23 NORTH AMERICA.<br />
[2020-04-04 08:40:02] - Brock Boeser has been added to U23 NORTH AMERICA.<br />
[2020-04-04 08:39:56] - Jack Roslovic was added to U23 NORTH AMERICA.<br />
[2020-04-04 08:39:55] - Jack Roslovic has been added to U23 NORTH AMERICA.<br />
[2020-04-04 08:39:50] - Zachary Senyshyn was added to U23 NORTH AMERICA.<br />
[2020-04-04 08:39:48] - Zachary Senyshyn has been added to U23 NORTH AMERICA.<br />
[2020-04-04 08:39:40] - Nick Suzuki was added to U23 NORTH AMERICA.<br />
[2020-04-04 08:39:39] - Nick Suzuki has been added to U23 NORTH AMERICA.<br />
[2020-04-04 08:39:36] - There's not enough Defense players to make a roster for U23 NORTH AMERICA.
There's not enough Goalie players to make a roster for U23 NORTH AMERICA.
Not enough players available for U23 NORTH AMERICA.
<br />
[2020-04-04 08:39:30] - Nick Suzuki was created.<br />
[2020-04-04 08:39:30] - Nick Suzuki average salary was modified from 0 $ to 950 000 $.<br />
[2020-04-04 08:38:14] - Zachary Senyshyn was created.<br />
[2020-04-04 08:38:14] - Zachary Senyshyn average salary was modified from 0 $ to 1 250 000 $.<br />
[2020-04-04 08:37:04] - Jack Roslovic was created.<br />
[2020-04-04 08:37:04] - Jack Roslovic average salary was modified from 0 $ to 950 000 $.<br />
[2020-04-04 08:35:25] - Brock Boeser was created.<br />
[2020-04-04 08:35:25] - Brock Boeser average salary was modified from 0 $ to 950 000 $.<br />
[2020-04-04 08:34:10] - Anthony Beauvillier was added to U23 NORTH AMERICA.<br />
[2020-04-04 08:34:09] - Anthony Beauvillier has been added to U23 NORTH AMERICA.<br />
[2020-04-04 08:34:02] - Tage Thompson was added to U23 NORTH AMERICA.<br />
[2020-04-04 08:34:01] - Tage Thompson has been added to U23 NORTH AMERICA.<br />
[2020-04-04 08:33:56] - Owen Tippett was added to U23 NORTH AMERICA.<br />
[2020-04-04 08:33:55] - Owen Tippett has been added to U23 NORTH AMERICA.<br />
[2020-04-04 08:33:49] - Alex DeBrincat was added to U23 NORTH AMERICA.<br />
[2020-04-04 08:33:48] - Alex DeBrincat has been added to U23 NORTH AMERICA.<br />
[2020-04-04 08:33:40] - Kieffer Bellows was added to U23 NORTH AMERICA.<br />
[2020-04-04 08:33:39] - Kieffer Bellows has been added to U23 NORTH AMERICA.<br />
[2020-04-04 08:33:36] - There's not enough Left Wing players to make a roster for U23 NORTH AMERICA.
There's not enough Right Wing players to make a roster for U23 NORTH AMERICA.
There's not enough Forward players to make a roster for U23 NORTH AMERICA.
There's not enough Defense players to make a roster for U23 NORTH AMERICA.
There's not enough Goalie players to make a roster for U23 NORTH AMERICA.
Not enough players available for U23 NORTH AMERICA.
<br />
[2020-04-04 08:33:29] - Kieffer Bellows was created.<br />
[2020-04-04 08:33:29] - Kieffer Bellows average salary was modified from 0 $ to 900 000 $.<br />
[2020-04-04 08:31:59] - Anthony Beauvillier was created.<br />
[2020-04-04 08:31:59] - Anthony Beauvillier average salary was modified from 0 $ to 950 000 $.<br />
[2020-04-04 08:30:32] - Tage Thompson was created.<br />
[2020-04-04 08:30:32] - Tage Thompson average salary was modified from 0 $ to 900 000 $.<br />
[2020-04-04 08:29:06] - Owen Tippett was created.<br />
[2020-04-04 08:29:06] - Owen Tippett average salary was modified from 0 $ to 950 000 $.<br />
[2020-04-04 08:27:45] - Alex DeBrincat was created.<br />
[2020-04-04 08:27:45] - Alex DeBrincat average salary was modified from 0 $ to 950 000 $.<br />
[2020-04-04 07:28:12] - Dylan Strome was added to U23 NORTH AMERICA.<br />
[2020-04-04 07:28:10] - Dylan Strome has been added to U23 NORTH AMERICA.<br />
[2020-04-04 07:28:06] - Mitch Marner was added to U23 NORTH AMERICA.<br />
[2020-04-04 07:28:03] - Mitch Marner has been added to U23 NORTH AMERICA.<br />
[2020-04-04 07:28:00] - Anthony Cirelli was added to U23 NORTH AMERICA.<br />
[2020-04-04 07:27:57] - Anthony Cirelli has been added to U23 NORTH AMERICA.<br />
[2020-04-04 07:27:54] - There's not enough Center players to make a roster for U23 NORTH AMERICA.
There's not enough Left Wing players to make a roster for U23 NORTH AMERICA.
There's not enough Right Wing players to make a roster for U23 NORTH AMERICA.
There's not enough Forward players to make a roster for U23 NORTH AMERICA.
There's not enough Defense players to make a roster for U23 NORTH AMERICA.
There's not enough Goalie players to make a roster for U23 NORTH AMERICA.
Not enough players available for U23 NORTH AMERICA.
<br />
[2020-04-04 07:27:40] - Anthony Cirelli was created.<br />
[2020-04-04 07:27:40] - Anthony Cirelli average salary was modified from 0 $ to 475 000 $.<br />
[2020-04-04 07:26:02] - Dylan Strome was created.<br />
[2020-04-04 07:26:02] - Dylan Strome average salary was modified from 0 $ to 900 000 $.<br />
[2020-04-04 07:24:36] - Mitch Marner was created.<br />
[2020-04-04 07:24:36] - Mitch Marner average salary was modified from 0 $ to 9 500 000 $.<br />
[2020-04-04 07:22:26] - U23 NORTH AMERICA hired Bruce Boudreau for 2 000 000 $ for 2 year(s).<br />
[2020-04-04 07:22:21] - There's not enough Center players to make a roster for U23 NORTH AMERICA.
There's not enough Left Wing players to make a roster for U23 NORTH AMERICA.
There's not enough Right Wing players to make a roster for U23 NORTH AMERICA.
There's not enough Forward players to make a roster for U23 NORTH AMERICA.
There's not enough Defense players to make a roster for U23 NORTH AMERICA.
There's not enough Goalie players to make a roster for U23 NORTH AMERICA.
Not enough players available for U23 NORTH AMERICA.
<br />
[2020-04-04 07:22:17] - Bruce Boudreau was created.<br />
[2020-04-04 07:19:32] - There's not enough Center players to make a roster for FINLANDE.
There's not enough Left Wing players to make a roster for FINLANDE.
There's not enough Right Wing players to make a roster for FINLANDE.
There's not enough Forward players to make a roster for FINLANDE.
There's not enough Defense players to make a roster for FINLANDE.
There's not enough Goalie players to make a roster for FINLANDE.
Not enough players available for FINLANDE.
<br />
[2020-04-04 07:19:32] - There's not enough Center players to make a roster for CANADA.
There's not enough Left Wing players to make a roster for CANADA.
There's not enough Right Wing players to make a roster for CANADA.
There's not enough Forward players to make a roster for CANADA.
There's not enough Defense players to make a roster for CANADA.
There's not enough Goalie players to make a roster for CANADA.
Not enough players available for CANADA.
<br />
[2020-04-04 07:19:31] - There's not enough Goalie players to make a roster for LETTONIE.
<br />
[2020-04-04 07:19:31] - There's not enough Center players to make a roster for U23 NORTH AMERICA.
There's not enough Left Wing players to make a roster for U23 NORTH AMERICA.
There's not enough Right Wing players to make a roster for U23 NORTH AMERICA.
There's not enough Forward players to make a roster for U23 NORTH AMERICA.
There's not enough Defense players to make a roster for U23 NORTH AMERICA.
There's not enough Goalie players to make a roster for U23 NORTH AMERICA.
Not enough players available for U23 NORTH AMERICA.
<br />
[2020-04-04 07:19:31] - There's not enough Center players to make a roster for SUEDE.
There's not enough Left Wing players to make a roster for SUEDE.
There's not enough Right Wing players to make a roster for SUEDE.
There's not enough Forward players to make a roster for SUEDE.
There's not enough Defense players to make a roster for SUEDE.
There's not enough Goalie players to make a roster for SUEDE.
Not enough players available for SUEDE.
<br />
[2020-04-04 07:18:18] - RUSSIE roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 9 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-04-04 07:18:16] - Alexander Radulov was added to RUSSIE.<br />
[2020-04-04 07:18:15] - Yegor Rykov was added to RUSSIE.<br />
[2020-04-04 07:18:13] - Vladislav Kamenev was added to RUSSIE.<br />
[2020-04-04 07:18:11] - Sergei Bobrovsky was added to RUSSIE.<br />
[2020-04-04 07:18:09] - Pavel Buchnevich was added to RUSSIE.<br />
[2020-04-04 07:18:07] - Nikita Tryamkin was added to RUSSIE.<br />
[2020-04-04 07:18:05] - Nikita Nesterov was added to RUSSIE.<br />
[2020-04-04 07:18:03] - Nikita Filatov was added to RUSSIE.<br />
[2020-04-04 07:18:01] - Mikhail Sergachev was added to RUSSIE.<br />
[2020-04-04 07:17:59] - Kirill Kaprizov was added to RUSSIE.<br />
[2020-04-04 07:17:57] - Ilya Sorokin was added to RUSSIE.<br />
[2020-04-04 07:17:55] - Ilya Kovalchuk was added to RUSSIE.<br />
[2020-04-04 07:17:53] - Evgeny Dadonov was added to RUSSIE.<br />
[2020-04-04 07:17:51] - Dmitri Orlov was added to RUSSIE.<br />
[2020-04-04 07:17:50] - Dmitri Kulikov was added to RUSSIE.<br />
[2020-04-04 07:17:48] - Bogdan Yakimov was added to RUSSIE.<br />
[2020-04-04 07:17:44] - Anton Volchenkov was added to RUSSIE.<br />
[2020-04-04 07:17:41] - Ilya Sorokin has been added to RUSSIE.<br />
[2020-04-04 07:17:35] - Sergei Bobrovsky has been added to RUSSIE.<br />
[2020-04-04 07:17:30] - Yegor Rykov has been added to RUSSIE.<br />
[2020-04-04 07:17:23] - Nikita Tryamkin has been added to RUSSIE.<br />
[2020-04-04 07:17:17] - Mikhail Sergachev has been added to RUSSIE.<br />
[2020-04-04 07:17:12] - Anton Volchenkov has been added to RUSSIE.<br />
[2020-04-04 07:17:06] - Dmitri Orlov has been added to RUSSIE.<br />
[2020-04-04 07:17:01] - Nikita Nesterov has been added to RUSSIE.<br />
[2020-04-04 07:16:55] - Dmitri Kulikov has been added to RUSSIE.<br />
[2020-04-04 07:16:48] - Alexander Radulov has been added to RUSSIE.<br />
[2020-04-04 07:16:43] - Evgeny Dadonov has been added to RUSSIE.<br />
[2020-04-04 07:16:38] - Ilya Kovalchuk has been added to RUSSIE.<br />
[2020-04-04 07:16:32] - Pavel Buchnevich has been added to RUSSIE.<br />
[2020-04-04 07:16:27] - Kirill Kaprizov has been added to RUSSIE.<br />
[2020-04-04 07:16:21] - Vladislav Kamenev has been added to RUSSIE.<br />
[2020-04-04 07:16:15] - Bogdan Yakimov has been added to RUSSIE.<br />
[2020-04-04 07:16:09] - Nikita Filatov has been added to RUSSIE.<br />
[2020-04-04 07:16:01] - Farm Team 1 roster errors : Not enough Players available in Pro Team! 6 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[2020-04-04 07:16:01] - RUSSIE roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 9 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-04-04 07:16:00] - Evgeny Grachev was added to RUSSIE.<br />
[2020-04-04 07:15:53] - Evgeny Grachev has been added to RUSSIE.<br />
[2020-04-04 07:15:48] - Mikhail Grigorenko was added to RUSSIE.<br />
[2020-04-04 07:15:46] - Mikhail Grigorenko has been added to RUSSIE.<br />
[2020-04-04 07:15:33] - Farm Team 1 roster errors : Not enough Players available in Pro Team! 4 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[2020-04-04 07:15:33] - RUSSIE roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 9 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-04-04 07:15:32] - There's not enough Center players to make a roster for RUSSIE.
There's not enough Defense players to make a roster for RUSSIE.
There's not enough Goalie players to make a roster for RUSSIE.
Not enough players available for RUSSIE.
<br />
[2020-04-04 07:15:28] - Ilya Sorokin was created.<br />
[2020-04-04 07:15:28] - Ilya Sorokin average salary was modified from 0 $ to 950 000 $.<br />
[2020-04-04 07:14:21] - Sergei Bobrovsky was created.<br />
[2020-04-04 07:14:21] - Sergei Bobrovsky average salary was modified from 0 $ to 8 500 000 $.<br />
[2020-04-04 07:13:05] - Yegor Rykov was created.<br />
[2020-04-04 07:13:05] - Yegor Rykov average salary was modified from 0 $ to 1 300 000 $.<br />
[2020-04-04 07:11:48] - Nikita Tryamkin was created.<br />
[2020-04-04 07:11:48] - Nikita Tryamkin average salary was modified from 0 $ to 1 500 000 $.<br />
[2020-04-04 07:10:38] - Mikhail Sergachev was created.<br />
[2020-04-04 07:10:38] - Mikhail Sergachev average salary was modified from 0 $ to 950 000 $.<br />
[2020-04-04 07:09:24] - Anton Volchenkov was created.<br />
[2020-04-04 07:09:24] - Anton Volchenkov average salary was modified from 0 $ to 2 000 000 $.<br />
[2020-04-04 07:08:13] - Dmitri Orlov was created.<br />
[2020-04-04 07:08:13] - Dmitri Orlov average salary was modified from 0 $ to 6 000 000 $.<br />
[2020-04-04 07:06:46] - Nikita Nesterov was created.<br />
[2020-04-04 07:06:46] - Nikita Nesterov average salary was modified from 0 $ to 1 200 000 $.<br />
[2020-04-04 07:05:30] - Dmitri Kulikov was created.<br />
[2020-04-04 07:05:30] - Dmitri Kulikov average salary was modified from 0 $ to 7 000 000 $.<br />
[2020-04-04 07:03:24] - Alexander Radulov was created.<br />
[2020-04-04 07:03:24] - Alexander Radulov average salary was modified from 0 $ to 5 000 000 $.<br />
[2020-04-04 07:02:09] - Evgeny Dadonov was created.<br />
[2020-04-04 07:02:09] - Evgeny Dadonov average salary was modified from 0 $ to 3 785 000 $.<br />
[2020-04-04 07:00:50] - Ilya Kovalchuk was created.<br />
[2020-04-04 07:00:50] - Ilya Kovalchuk average salary was modified from 0 $ to 6 666 666 $.<br />
[2020-04-04 06:59:34] - Pavel Buchnevich was created.<br />
[2020-04-04 06:59:34] - Pavel Buchnevich average salary was modified from 0 $ to 950 000 $.<br />
[2020-04-04 06:58:12] - Vladislav Namestnikov was added to RUSSIE.<br />
[2020-04-04 06:58:10] - Vladislav Namestnikov has been added to RUSSIE.<br />
[2020-04-04 06:58:08] - There's not enough Center players to make a roster for RUSSIE.
There's not enough Forward players to make a roster for RUSSIE.
There's not enough Defense players to make a roster for RUSSIE.
There's not enough Goalie players to make a roster for RUSSIE.
Not enough players available for RUSSIE.
<br />
[2020-04-04 06:58:02] - Vladislav Namestnikov was created.<br />
[2020-04-04 06:58:02] - Vladislav Namestnikov average salary was modified from 0 $ to 1 800 000 $.<br />
[2020-04-04 06:56:44] - Kirill Kaprizov was created.<br />
[2020-04-04 06:56:44] - Kirill Kaprizov average salary was modified from 0 $ to 950 000 $.<br />
[2020-04-04 06:55:22] - Dmitrij Jaskin was added to RUSSIE.<br />
[2020-04-04 06:55:20] - Dmitrij Jaskin has been added to RUSSIE.<br />
[2020-04-04 06:55:18] - There's not enough Center players to make a roster for RUSSIE.
There's not enough Left Wing players to make a roster for RUSSIE.
There's not enough Right Wing players to make a roster for RUSSIE.
There's not enough Forward players to make a roster for RUSSIE.
There's not enough Defense players to make a roster for RUSSIE.
There's not enough Goalie players to make a roster for RUSSIE.
Not enough players available for RUSSIE.
<br />
[2020-04-04 06:54:54] - Vladislav Kamenev was created.<br />
[2020-04-04 06:54:54] - Vladislav Kamenev average salary was modified from 0 $ to 1 500 000 $.<br />
[2020-04-04 06:53:29] - Dmitrij Jaskin was created.<br />
[2020-04-04 06:53:29] - Dmitrij Jaskin average salary was modified from 0 $ to 1 700 000 $.<br />
[2020-04-04 06:51:34] - Bogdan Yakimov was created.<br />
[2020-04-04 06:51:34] - Bogdan Yakimov average salary was modified from 0 $ to 1 400 000 $.<br />
[2020-04-04 06:47:34] - Nikita Filatov was created.<br />
[2020-04-04 06:47:34] - Nikita Filatov average salary was modified from 0 $ to 4 250 000 $.<br />
[2020-04-04 06:46:16] - Evgeny Grachev was created.<br />
[2020-04-04 06:46:16] - Evgeny Grachev average salary was modified from 0 $ to 6 500 000 $.<br />
[2020-04-04 06:44:52] - Mikhail Grigorenko was created.<br />
[2020-04-04 06:44:52] - Mikhail Grigorenko average salary was modified from 0 $ to 2 200 000 $.<br />
[2020-04-04 06:43:00] - Nikita Gusev was added to RUSSIE.<br />
[2020-04-04 06:42:58] - Nikita Gusev has been added to RUSSIE.<br />
[2020-04-04 06:42:55] - There's not enough Center players to make a roster for RUSSIE.
There's not enough Left Wing players to make a roster for RUSSIE.
There's not enough Right Wing players to make a roster for RUSSIE.
There's not enough Forward players to make a roster for RUSSIE.
There's not enough Defense players to make a roster for RUSSIE.
There's not enough Goalie players to make a roster for RUSSIE.
Not enough players available for RUSSIE.
<br />
[2020-04-04 06:42:50] - Nikita Gusev was created.<br />
[2020-04-04 06:42:50] - Nikita Gusev average salary was modified from 0 $ to 5 250 000 $.<br />
[2020-04-04 06:41:26] - Alexander Ovechkin was added to RUSSIE.<br />
[2020-04-04 06:41:24] - Alexander Ovechkin has been added to RUSSIE.<br />
[2020-04-04 06:41:21] - There's not enough Center players to make a roster for RUSSIE.
There's not enough Left Wing players to make a roster for RUSSIE.
There's not enough Right Wing players to make a roster for RUSSIE.
There's not enough Forward players to make a roster for RUSSIE.
There's not enough Defense players to make a roster for RUSSIE.
There's not enough Goalie players to make a roster for RUSSIE.
Not enough players available for RUSSIE.
<br />
[2020-04-04 06:41:15] - Alexander Ovechkin was created.<br />
[2020-04-04 06:41:15] - Alexander Ovechkin average salary was modified from 0 $ to 9 500 000 $.<br />
[2020-04-04 06:39:10] - RUSSIE hired Zinetula Bilyaletdinov for 500 000 $ for 1 year(s).<br />
[2020-04-04 06:39:06] - There's not enough Center players to make a roster for RUSSIE.
There's not enough Left Wing players to make a roster for RUSSIE.
There's not enough Right Wing players to make a roster for RUSSIE.
There's not enough Forward players to make a roster for RUSSIE.
There's not enough Defense players to make a roster for RUSSIE.
There's not enough Goalie players to make a roster for RUSSIE.
Not enough players available for RUSSIE.
<br />
[2020-04-04 06:39:02] - Zinetula Bilyaletdinov was created.<br />
[2020-04-04 06:28:05] - Harijs Brants was added to LETTONIE.<br />
[2020-04-04 06:28:03] - Harijs Brants has been added to LETTONIE.<br />
[2020-04-04 06:28:00] - There's not enough Goalie players to make a roster for LETTONIE.
<br />
[2020-04-04 06:27:55] - Harijs Brants was created.<br />
[2020-04-04 06:27:55] - Harijs Brants average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-04 06:26:03] - Oskars Bartulis was added to LETTONIE.<br />
[2020-04-04 06:26:01] - Oskars Bartulis has been added to LETTONIE.<br />
[2020-04-04 06:25:59] - There's not enough Defense players to make a roster for LETTONIE.
There's not enough Goalie players to make a roster for LETTONIE.
<br />
[2020-04-04 06:25:52] - Oskars Bartulis was created.<br />
[2020-04-04 06:25:52] - Oskars Bartulis average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-04 06:24:13] - Oskars Cibulskis was erased.<br />
[2020-04-04 06:24:13] - Oskars Cibulskis retired from LETTONIE<br />
[2020-04-04 06:24:05] - Kristaps Zile was erased.<br />
[2020-04-04 06:24:05] - Kristaps Zile retired from LETTONIE<br />
[2020-04-04 06:14:54] - LETTONIE roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 9 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-04-04 06:14:52] - Raimonds Vitolins was added to LETTONIE.<br />
[2020-04-04 06:14:50] - Raimonds Vitolins has been added to LETTONIE.<br />
[2020-04-04 06:14:48] - There's not enough Goalie players to make a roster for LETTONIE.
<br />
[2020-04-04 06:14:41] - Raimonds Vitolins was created.<br />
[2020-04-04 06:14:41] - Raimonds Vitolins average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-04 06:09:42] - Miks Indrasis was added to LETTONIE.<br />
[2020-04-04 06:09:39] - Miks Indrasis has been added to LETTONIE.<br />
[2020-04-04 06:09:36] - There's not enough Goalie players to make a roster for LETTONIE.
<br />
[2020-04-04 06:02:34] - Miks Indrasis was created.<br />
[2020-04-04 06:02:34] - Miks Indrasis average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-04 05:56:23] - Frenks Razgals was added to LETTONIE.<br />
[2020-04-04 05:56:22] - Frenks Razgals has been added to LETTONIE.<br />
[2020-04-04 05:56:18] - There's not enough Goalie players to make a roster for LETTONIE.
<br />
[2020-04-04 05:56:12] - Frenks Razgals was created.<br />
[2020-04-04 05:56:12] - Frenks Razgals average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-04 05:52:41] - Martin Karsums was added to LETTONIE.<br />
[2020-04-04 05:52:39] - Martin Karsums has been added to LETTONIE.<br />
[2020-04-04 05:52:36] - There's not enough Goalie players to make a roster for LETTONIE.
<br />
[2020-04-04 05:52:32] - Martin Karsums was created.<br />
[2020-04-04 05:52:32] - Martin Karsums average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-04 05:47:01] - Farm Team 9 roster errors : Not enough Players available in Pro Team! 18 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[2020-04-04 05:47:01] - LETTONIE roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 9 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-04-04 05:47:01] - There's not enough Goalie players to make a roster for LETTONIE.
<br />
[2020-04-04 05:46:52] - Andris Dzerins was added to LETTONIE.<br />
[2020-04-04 05:46:51] - Andris Dzerins has been added to LETTONIE.<br />
[2020-04-04 05:46:48] - There's not enough Goalie players to make a roster for LETTONIE.
<br />
[2020-04-04 05:46:43] - Andris Dzerins was created.<br />
[2020-04-04 05:46:43] - Andris Dzerins average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-04 05:42:28] - Vitalijs Pavlovs was added to LETTONIE.<br />
[2020-04-04 05:42:26] - Vitalijs Pavlovs has been added to LETTONIE.<br />
[2020-04-04 05:42:24] - There's not enough Right Wing players to make a roster for LETTONIE.
There's not enough Goalie players to make a roster for LETTONIE.
<br />
[2020-04-04 05:42:17] - Vitalijs Pavlovs was created.<br />
[2020-04-04 05:42:17] - Vitalijs Pavlovs average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-04 05:34:43] - Oskars Batna was added to LETTONIE.<br />
[2020-04-04 05:34:41] - Oskars Batna has been added to LETTONIE.<br />
[2020-04-04 05:34:38] - There's not enough Center players to make a roster for LETTONIE.
There's not enough Right Wing players to make a roster for LETTONIE.
There's not enough Goalie players to make a roster for LETTONIE.
Not enough players available for LETTONIE.
<br />
[2020-04-04 05:34:33] - Oskars Batna was created.<br />
[2020-04-04 05:34:33] - Oskars Batna average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-04 05:31:08] - Farm Team 9 roster errors : Not enough Players available in Pro Team! 15 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[2020-04-04 05:31:08] - LETTONIE roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 9 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-04-04 05:31:07] - There's not enough Center players to make a roster for LETTONIE.
There's not enough Right Wing players to make a roster for LETTONIE.
There's not enough Goalie players to make a roster for LETTONIE.
Not enough players available for LETTONIE.
<br />
[2020-04-04 05:30:11] - Kaspars Daugavins was added to LETTONIE.<br />
[2020-04-04 05:30:09] - Kaspars Daugavins has been added to LETTONIE.<br />
[2020-04-04 05:30:07] - There's not enough Center players to make a roster for LETTONIE.
There's not enough Right Wing players to make a roster for LETTONIE.
There's not enough Forward players to make a roster for LETTONIE.
There's not enough Goalie players to make a roster for LETTONIE.
Not enough players available for LETTONIE.
<br />
[2020-04-04 05:30:02] - Kaspars Daugavins was created.<br />
[2020-04-04 05:30:02] - Kaspars Daugavins average salary was modified from 0 $ to 650 000 $.<br />
[2020-04-04 05:28:07] - Farm Team 9 roster errors : Not enough Players available in Pro Team! 14 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[2020-04-04 05:28:07] - LETTONIE roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 9 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-04-04 05:28:07] - There's not enough Center players to make a roster for LETTONIE.
There's not enough Right Wing players to make a roster for LETTONIE.
There's not enough Forward players to make a roster for LETTONIE.
There's not enough Goalie players to make a roster for LETTONIE.
Not enough players available for LETTONIE.
<br />
[2020-04-04 05:19:01] - There's not enough Center players to make a roster for FINLANDE.
There's not enough Left Wing players to make a roster for FINLANDE.
There's not enough Right Wing players to make a roster for FINLANDE.
There's not enough Forward players to make a roster for FINLANDE.
There's not enough Defense players to make a roster for FINLANDE.
There's not enough Goalie players to make a roster for FINLANDE.
Not enough players available for FINLANDE.
<br />
[2020-04-04 05:19:01] - There's not enough Center players to make a roster for CANADA.
There's not enough Left Wing players to make a roster for CANADA.
There's not enough Right Wing players to make a roster for CANADA.
There's not enough Forward players to make a roster for CANADA.
There's not enough Defense players to make a roster for CANADA.
There's not enough Goalie players to make a roster for CANADA.
Not enough players available for CANADA.
<br />
[2020-04-04 05:19:00] - There's not enough Center players to make a roster for LETTONIE.
There's not enough Right Wing players to make a roster for LETTONIE.
There's not enough Forward players to make a roster for LETTONIE.
There's not enough Goalie players to make a roster for LETTONIE.
Not enough players available for LETTONIE.
<br />
[2020-04-04 05:19:00] - There's not enough Center players to make a roster for U23 NORTH AMERICA.
There's not enough Left Wing players to make a roster for U23 NORTH AMERICA.
There's not enough Right Wing players to make a roster for U23 NORTH AMERICA.
There's not enough Forward players to make a roster for U23 NORTH AMERICA.
There's not enough Defense players to make a roster for U23 NORTH AMERICA.
There's not enough Goalie players to make a roster for U23 NORTH AMERICA.
Not enough players available for U23 NORTH AMERICA.
<br />
[2020-04-04 05:19:00] - There's not enough Center players to make a roster for SUEDE.
There's not enough Left Wing players to make a roster for SUEDE.
There's not enough Right Wing players to make a roster for SUEDE.
There's not enough Forward players to make a roster for SUEDE.
There's not enough Defense players to make a roster for SUEDE.
There's not enough Goalie players to make a roster for SUEDE.
Not enough players available for SUEDE.
<br />
[2020-04-04 05:18:59] - There's not enough Center players to make a roster for RUSSIE.
There's not enough Left Wing players to make a roster for RUSSIE.
There's not enough Right Wing players to make a roster for RUSSIE.
There's not enough Forward players to make a roster for RUSSIE.
There's not enough Defense players to make a roster for RUSSIE.
There's not enough Goalie players to make a roster for RUSSIE.
Not enough players available for RUSSIE.
<br />
[2020-04-04 05:18:45] - REPUBLIQUE TCHEQUE roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 9 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-04-04 05:18:42] - Vojtech Budik was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-04 05:18:40] - Vojtech Budik has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-04 05:18:32] - Vojtech Budik was created.<br />
[2020-04-04 05:18:32] - Vojtech Budik average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-04 04:55:42] - Jindrich Abdul was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-04 04:55:41] - Jindrich Abdul has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-04 04:55:31] - Jindrich Abdul was created.<br />
[2020-04-04 04:55:31] - Jindrich Abdul average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-03 11:41:08] - There's not enough Center players to make a roster for FINLANDE.
There's not enough Left Wing players to make a roster for FINLANDE.
There's not enough Right Wing players to make a roster for FINLANDE.
There's not enough Forward players to make a roster for FINLANDE.
There's not enough Defense players to make a roster for FINLANDE.
There's not enough Goalie players to make a roster for FINLANDE.
Not enough players available for FINLANDE.
<br />
[2020-04-03 11:41:08] - There's not enough Center players to make a roster for CANADA.
There's not enough Left Wing players to make a roster for CANADA.
There's not enough Right Wing players to make a roster for CANADA.
There's not enough Forward players to make a roster for CANADA.
There's not enough Defense players to make a roster for CANADA.
There's not enough Goalie players to make a roster for CANADA.
Not enough players available for CANADA.
<br />
[2020-04-03 11:41:08] - There's not enough Center players to make a roster for LETTONIE.
There's not enough Right Wing players to make a roster for LETTONIE.
There's not enough Forward players to make a roster for LETTONIE.
There's not enough Goalie players to make a roster for LETTONIE.
Not enough players available for LETTONIE.
<br />
[2020-04-03 11:41:07] - There's not enough Center players to make a roster for U23 NORTH AMERICA.
There's not enough Left Wing players to make a roster for U23 NORTH AMERICA.
There's not enough Right Wing players to make a roster for U23 NORTH AMERICA.
There's not enough Forward players to make a roster for U23 NORTH AMERICA.
There's not enough Defense players to make a roster for U23 NORTH AMERICA.
There's not enough Goalie players to make a roster for U23 NORTH AMERICA.
Not enough players available for U23 NORTH AMERICA.
<br />
[2020-04-03 11:41:07] - There's not enough Center players to make a roster for SUEDE.
There's not enough Left Wing players to make a roster for SUEDE.
There's not enough Right Wing players to make a roster for SUEDE.
There's not enough Forward players to make a roster for SUEDE.
There's not enough Defense players to make a roster for SUEDE.
There's not enough Goalie players to make a roster for SUEDE.
Not enough players available for SUEDE.
<br />
[2020-04-03 11:41:06] - There's not enough Center players to make a roster for RUSSIE.
There's not enough Left Wing players to make a roster for RUSSIE.
There's not enough Right Wing players to make a roster for RUSSIE.
There's not enough Forward players to make a roster for RUSSIE.
There's not enough Defense players to make a roster for RUSSIE.
There's not enough Goalie players to make a roster for RUSSIE.
Not enough players available for RUSSIE.
<br />
[2020-04-03 11:40:59] - Patrik Rybar was added to SLOVAQUIE.<br />
[2020-04-03 11:40:57] - Patrik Rybar has been added to SLOVAQUIE.<br />
[2020-04-03 11:40:55] - There's not enough Goalie players to make a roster for SLOVAQUIE.
<br />
[2020-04-03 11:40:48] - Patrik Rybar was created.<br />
[2020-04-03 11:40:48] - Patrik Rybar average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-03 11:37:42] - Connor Hellebuyck was added to ETATS-UNIS.<br />
[2020-04-03 11:37:40] - Connor Hellebuyck has been added to ETATS-UNIS.<br />
[2020-04-03 11:37:36] - There's not enough Goalie players to make a roster for ETATS-UNIS.
<br />
[2020-04-03 11:37:33] - Connor Hellebuyck was created.<br />
[2020-04-03 11:37:33] - Connor Hellebuyck average salary was modified from 0 $ to 1 750 000 $.<br />
[2020-04-03 11:36:26] - Ben Bishop was added to ETATS-UNIS.<br />
[2020-04-03 11:36:24] - Ben Bishop has been added to ETATS-UNIS.<br />
[2020-04-03 11:36:21] - There's not enough Goalie players to make a roster for ETATS-UNIS.
<br />
[2020-04-03 11:36:16] - Ben Bishop was created.<br />
[2020-04-03 11:36:16] - Ben Bishop average salary was modified from 0 $ to 6 500 000 $.<br />
[2020-04-03 11:34:55] - Jake Gardiner was added to ETATS-UNIS.<br />
[2020-04-03 11:34:53] - Jake Gardiner has been added to ETATS-UNIS.<br />
[2020-04-03 11:34:50] - There's not enough Goalie players to make a roster for ETATS-UNIS.
<br />
[2020-04-03 11:34:44] - Jake Gardiner was created.<br />
[2020-04-03 11:34:44] - Jake Gardiner average salary was modified from 0 $ to 6 500 000 $.<br />
[2020-04-03 11:33:21] - Jamie McBain was added to ETATS-UNIS.<br />
[2020-04-03 11:33:19] - Jamie McBain has been added to ETATS-UNIS.<br />
[2020-04-03 11:33:16] - There's not enough Defense players to make a roster for ETATS-UNIS.
There's not enough Goalie players to make a roster for ETATS-UNIS.
<br />
[2020-04-03 11:33:10] - Jamie McBain was created.<br />
[2020-04-03 11:33:10] - Jamie McBain average salary was modified from 0 $ to 4 500 000 $.<br />
[2020-04-03 11:31:42] - Jacob Trouba was added to ETATS-UNIS.<br />
[2020-04-03 11:31:40] - Jacob Trouba has been added to ETATS-UNIS.<br />
[2020-04-03 11:31:37] - There's not enough Defense players to make a roster for ETATS-UNIS.
There's not enough Goalie players to make a roster for ETATS-UNIS.
<br />
[2020-04-03 11:31:31] - Jacob Trouba was created.<br />
[2020-04-03 11:31:31] - Jacob Trouba average salary was modified from 0 $ to 5 000 000 $.<br />
[2020-04-03 11:30:14] - Ryan Suter was added to ETATS-UNIS.<br />
[2020-04-03 11:30:12] - Ryan Suter has been added to ETATS-UNIS.<br />
[2020-04-03 11:30:10] - There's not enough Defense players to make a roster for ETATS-UNIS.
There's not enough Goalie players to make a roster for ETATS-UNIS.
<br />
[2020-04-03 11:30:04] - Ryan Suter was created.<br />
[2020-04-03 11:30:04] - Ryan Suter average salary was modified from 0 $ to 8 500 000 $.<br />
[2020-04-03 11:28:43] - John Carlson was added to ETATS-UNIS.<br />
[2020-04-03 11:28:41] - John Carlson has been added to ETATS-UNIS.<br />
[2020-04-03 11:28:36] - There's not enough Defense players to make a roster for ETATS-UNIS.
There's not enough Goalie players to make a roster for ETATS-UNIS.
<br />
[2020-04-03 11:28:30] - John Carlson was created.<br />
[2020-04-03 11:28:30] - John Carlson average salary was modified from 0 $ to 6 000 000 $.<br />
[2020-04-03 11:26:45] - Salary Cap Fix Value Value Modified to 200 000 000 $<br />
[2020-04-03 11:26:29] - Zach Bogosian was added to ETATS-UNIS.<br />
[2020-04-03 11:26:27] - Zach Bogosian has been added to ETATS-UNIS.<br />
[2020-04-03 11:26:25] - ETATS-UNIS are expected to be over the salary cap by 2 900 003 $!<br />
[2020-04-03 11:26:23] - There's not enough Defense players to make a roster for ETATS-UNIS.
There's not enough Goalie players to make a roster for ETATS-UNIS.
<br />
[2020-04-03 11:26:17] - Zach Bogosian was created.<br />
[2020-04-03 11:26:17] - Zach Bogosian average salary was modified from 0 $ to 6 000 000 $.<br />
[2020-04-03 11:24:48] - Tyler Myers was added to ETATS-UNIS.<br />
[2020-04-03 11:24:46] - Tyler Myers has been added to ETATS-UNIS.<br />
[2020-04-03 11:24:43] - There's not enough Defense players to make a roster for ETATS-UNIS.
There's not enough Goalie players to make a roster for ETATS-UNIS.
<br />
[2020-04-03 11:24:37] - Tyler Myers was created.<br />
[2020-04-03 11:24:37] - Tyler Myers average salary was modified from 0 $ to 7 500 000 $.<br />
[2020-04-03 11:22:26] - Farm Team 5 roster errors : Not enough Players available in Pro Team! 14 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[2020-04-03 11:22:26] - ETATS-UNIS roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 9 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-04-03 11:22:23] - Phil Kessel was added to ETATS-UNIS.<br />
[2020-04-03 11:22:21] - Phil Kessel has been added to ETATS-UNIS.<br />
[2020-04-03 11:22:19] - There's not enough Defense players to make a roster for ETATS-UNIS.
There's not enough Goalie players to make a roster for ETATS-UNIS.
<br />
[2020-04-03 11:22:13] - Phil Kessel was created.<br />
[2020-04-03 11:22:13] - Phil Kessel average salary was modified from 0 $ to 7 500 000 $.<br />
[2020-04-03 11:19:34] - Ryan Callahan was added to ETATS-UNIS.<br />
[2020-04-03 11:19:32] - Ryan Callahan has been added to ETATS-UNIS.<br />
[2020-04-03 11:19:30] - There's not enough Defense players to make a roster for ETATS-UNIS.
There's not enough Goalie players to make a roster for ETATS-UNIS.
<br />
[2020-04-03 11:19:00] - Ryan Callahan was created.<br />
[2020-04-03 11:17:49] - Emerson Etem was added to ETATS-UNIS.<br />
[2020-04-03 11:17:47] - Emerson Etem has been added to ETATS-UNIS.<br />
[2020-04-03 11:17:44] - There's not enough Defense players to make a roster for ETATS-UNIS.
There's not enough Goalie players to make a roster for ETATS-UNIS.
Not enough players available for ETATS-UNIS.
<br />
[2020-04-03 11:17:38] - Emerson Etem was created.<br />
[2020-04-03 11:17:38] - Emerson Etem average salary was modified from 0 $ to 2 700 000 $.<br />
[2020-04-03 11:16:09] - Max Pacioretty was added to ETATS-UNIS.<br />
[2020-04-03 11:16:08] - Max Pacioretty has been added to ETATS-UNIS.<br />
[2020-04-03 11:16:05] - There's not enough Defense players to make a roster for ETATS-UNIS.
There's not enough Goalie players to make a roster for ETATS-UNIS.
Not enough players available for ETATS-UNIS.
<br />
[2020-04-03 11:16:00] - Max Pacioretty was created.<br />
[2020-04-03 11:16:00] - Max Pacioretty average salary was modified from 0 $ to 8 000 000 $.<br />
[2020-04-03 11:14:01] - Kevin Labanc was added to ETATS-UNIS.<br />
[2020-04-03 11:13:55] - Kevin Labanc has been added to ETATS-UNIS.<br />
[2020-04-03 11:13:50] - There's not enough Defense players to make a roster for ETATS-UNIS.
There's not enough Goalie players to make a roster for ETATS-UNIS.
Not enough players available for ETATS-UNIS.
<br />
[2020-04-03 11:13:43] - Kevin Labanc was created.<br />
[2020-04-03 11:13:43] - Kevin Labanc average salary was modified from 0 $ to 950 000 $.<br />
[2020-04-03 11:12:29] - James Van Riemsdyk was added to ETATS-UNIS.<br />
[2020-04-03 11:12:27] - James Van Riemsdyk has been added to ETATS-UNIS.<br />
[2020-04-03 11:12:24] - There's not enough Defense players to make a roster for ETATS-UNIS.
There's not enough Goalie players to make a roster for ETATS-UNIS.
Not enough players available for ETATS-UNIS.
<br />
[2020-04-03 11:12:19] - James Van Riemsdyk was created.<br />
[2020-04-03 11:12:19] - James Van Riemsdyk average salary was modified from 0 $ to 5 500 000 $.<br />
[2020-04-03 11:11:14] - There's not enough Defense players to make a roster for ETATS-UNIS.
There's not enough Goalie players to make a roster for ETATS-UNIS.
Not enough players available for ETATS-UNIS.
<br />
[2020-04-03 11:10:44] - Johnny Gaudreau was added to ETATS-UNIS.<br />
[2020-04-03 11:10:42] - Johnny Gaudreau has been added to ETATS-UNIS.<br />
[2020-04-03 11:10:39] - There's not enough Defense players to make a roster for ETATS-UNIS.
There's not enough Goalie players to make a roster for ETATS-UNIS.
Not enough players available for ETATS-UNIS.
<br />
[2020-04-03 11:10:33] - Johnny Gaudreau was created.<br />
[2020-04-03 11:10:33] - Johnny Gaudreau average salary was modified from 0 $ to 7 500 000 $.<br />
[2020-04-03 11:09:06] - Zach Parise was added to ETATS-UNIS.<br />
[2020-04-03 11:09:03] - Zach Parise has been added to ETATS-UNIS.<br />
[2020-04-03 11:09:01] - There's not enough Left Wing players to make a roster for ETATS-UNIS.
There's not enough Right Wing players to make a roster for ETATS-UNIS.
There's not enough Defense players to make a roster for ETATS-UNIS.
There's not enough Goalie players to make a roster for ETATS-UNIS.
Not enough players available for ETATS-UNIS.
<br />
[2020-04-03 11:08:55] - Zach Parise was created.<br />
[2020-04-03 11:08:55] - Zach Parise average salary was modified from 0 $ to 8 000 000 $.<br />
[2020-04-03 11:07:28] - Kyle Connor was added to ETATS-UNIS.<br />
[2020-04-03 11:07:26] - Kyle Connor has been added to ETATS-UNIS.<br />
[2020-04-03 11:07:23] - There's not enough Left Wing players to make a roster for ETATS-UNIS.
There's not enough Right Wing players to make a roster for ETATS-UNIS.
There's not enough Forward players to make a roster for ETATS-UNIS.
There's not enough Defense players to make a roster for ETATS-UNIS.
There's not enough Goalie players to make a roster for ETATS-UNIS.
Not enough players available for ETATS-UNIS.
<br />
[2020-04-03 11:07:17] - Kyle Connor was created.<br />
[2020-04-03 11:07:17] - Kyle Connor average salary was modified from 0 $ to 950 000 $.<br />
[2020-04-03 11:05:41] - Jack Eichel was added to ETATS-UNIS.<br />
[2020-04-03 11:05:39] - Jack Eichel has been added to ETATS-UNIS.<br />
[2020-04-03 11:05:37] - There's not enough Left Wing players to make a roster for ETATS-UNIS.
There's not enough Right Wing players to make a roster for ETATS-UNIS.
There's not enough Forward players to make a roster for ETATS-UNIS.
There's not enough Defense players to make a roster for ETATS-UNIS.
There's not enough Goalie players to make a roster for ETATS-UNIS.
Not enough players available for ETATS-UNIS.
<br />
[2020-04-03 11:05:31] - Jack Eichel was created.<br />
[2020-04-03 11:05:31] - Jack Eichel average salary was modified from 0 $ to 6 500 000 $.<br />
[2020-04-03 11:04:12] - Blake Wheeler was added to ETATS-UNIS.<br />
[2020-04-03 11:04:10] - Blake Wheeler has been added to ETATS-UNIS.<br />
[2020-04-03 11:04:08] - There's not enough Left Wing players to make a roster for ETATS-UNIS.
There's not enough Right Wing players to make a roster for ETATS-UNIS.
There's not enough Forward players to make a roster for ETATS-UNIS.
There's not enough Defense players to make a roster for ETATS-UNIS.
There's not enough Goalie players to make a roster for ETATS-UNIS.
Not enough players available for ETATS-UNIS.
<br />
[2020-04-03 11:04:02] - Blake Wheeler was created.<br />
[2020-04-03 11:04:02] - Blake Wheeler average salary was modified from 0 $ to 7 750 000 $.<br />
[2020-04-03 11:02:26] - Tyler Johnson was added to ETATS-UNIS.<br />
[2020-04-03 11:02:25] - Tyler Johnson has been added to ETATS-UNIS.<br />
[2020-04-03 11:02:22] - There's not enough Center players to make a roster for ETATS-UNIS.
There's not enough Left Wing players to make a roster for ETATS-UNIS.
There's not enough Right Wing players to make a roster for ETATS-UNIS.
There's not enough Forward players to make a roster for ETATS-UNIS.
There's not enough Defense players to make a roster for ETATS-UNIS.
There's not enough Goalie players to make a roster for ETATS-UNIS.
Not enough players available for ETATS-UNIS.
<br />
[2020-04-03 11:02:17] - Tyler Johnson was created.<br />
[2020-04-03 11:02:17] - Tyler Johnson average salary was modified from 0 $ to 9 800 000 $.<br />
[2020-04-03 11:00:55] - Cole Cassels was added to ETATS-UNIS.<br />
[2020-04-03 11:00:53] - Cole Cassels has been added to ETATS-UNIS.<br />
[2020-04-03 11:00:50] - There's not enough Center players to make a roster for ETATS-UNIS.
There's not enough Left Wing players to make a roster for ETATS-UNIS.
There's not enough Right Wing players to make a roster for ETATS-UNIS.
There's not enough Forward players to make a roster for ETATS-UNIS.
There's not enough Defense players to make a roster for ETATS-UNIS.
There's not enough Goalie players to make a roster for ETATS-UNIS.
Not enough players available for ETATS-UNIS.
<br />
[2020-04-03 11:00:44] - Cole Cassels was created.<br />
[2020-04-03 11:00:44] - Cole Cassels average salary was modified from 0 $ to 3 000 000 $.<br />
[2020-04-03 10:59:17] - Derek Stepan was added to ETATS-UNIS.<br />
[2020-04-03 10:59:15] - Derek Stepan has been added to ETATS-UNIS.<br />
[2020-04-03 10:59:12] - There's not enough Center players to make a roster for ETATS-UNIS.
There's not enough Left Wing players to make a roster for ETATS-UNIS.
There's not enough Right Wing players to make a roster for ETATS-UNIS.
There's not enough Forward players to make a roster for ETATS-UNIS.
There's not enough Defense players to make a roster for ETATS-UNIS.
There's not enough Goalie players to make a roster for ETATS-UNIS.
Not enough players available for ETATS-UNIS.
<br />
[2020-04-03 10:59:07] - Derek Stepan was created.<br />
[2020-04-03 10:59:07] - Derek Stepan average salary was modified from 0 $ to 6 750 000 $.<br />
[2020-04-03 10:57:13] - SLOVAQUIE hired Miroslav Satan for 500 000 $ for 1 year(s).<br />
[2020-04-03 10:57:09] - There's not enough Goalie players to make a roster for SLOVAQUIE.
<br />
[2020-04-03 10:57:05] - Miroslav Satan was created.<br />
[2020-04-03 10:55:21] - ETATS-UNIS hired Todd Richards for 2 000 000 $ for 4 year(s).<br />
[2020-04-03 10:55:17] - There's not enough Center players to make a roster for ETATS-UNIS.
There's not enough Left Wing players to make a roster for ETATS-UNIS.
There's not enough Right Wing players to make a roster for ETATS-UNIS.
There's not enough Forward players to make a roster for ETATS-UNIS.
There's not enough Defense players to make a roster for ETATS-UNIS.
There's not enough Goalie players to make a roster for ETATS-UNIS.
Not enough players available for ETATS-UNIS.
<br />
[2020-04-03 10:55:12] - Todd Richards was created.<br />
[2020-04-03 10:52:20] - Denis Godla was added to SLOVAQUIE.<br />
[2020-04-03 10:52:19] - Denis Godla has been added to SLOVAQUIE.<br />
[2020-04-03 10:52:15] - There's not enough Goalie players to make a roster for SLOVAQUIE.
<br />
[2020-04-03 10:52:10] - Denis Godla was created.<br />
[2020-04-03 10:52:10] - Denis Godla average salary was modified from 0 $ to 800 000 $.<br />
[2020-04-03 10:50:47] - Peter Ceresnak was added to SLOVAQUIE.<br />
[2020-04-03 10:50:45] - Peter Ceresnak has been added to SLOVAQUIE.<br />
[2020-04-03 10:50:43] - There's not enough Goalie players to make a roster for SLOVAQUIE.
<br />
[2020-04-03 10:50:36] - Peter Ceresnak was created.<br />
[2020-04-03 10:50:36] - Peter Ceresnak average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-03 10:43:50] - Marek Daloga was added to SLOVAQUIE.<br />
[2020-04-03 10:43:48] - Marek Daloga has been added to SLOVAQUIE.<br />
[2020-04-03 10:43:45] - There's not enough Defense players to make a roster for SLOVAQUIE.
There's not enough Goalie players to make a roster for SLOVAQUIE.
<br />
[2020-04-03 10:43:39] - Marek Daloga was created.<br />
[2020-04-03 10:43:39] - Marek Daloga average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-03 10:41:09] - Martin Fehervary was added to SLOVAQUIE.<br />
[2020-04-03 10:41:07] - Martin Fehervary has been added to SLOVAQUIE.<br />
[2020-04-03 10:41:04] - There's not enough Defense players to make a roster for SLOVAQUIE.
There's not enough Goalie players to make a roster for SLOVAQUIE.
<br />
[2020-04-03 10:40:59] - Martin Fehervary was created.<br />
[2020-04-03 10:40:59] - Martin Fehervary average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-03 10:37:29] - Patrik Koch was added to SLOVAQUIE.<br />
[2020-04-03 10:37:27] - Patrik Koch has been added to SLOVAQUIE.<br />
[2020-04-03 10:37:23] - There's not enough Defense players to make a roster for SLOVAQUIE.
There's not enough Goalie players to make a roster for SLOVAQUIE.
<br />
[2020-04-03 10:37:17] - Patrik Koch was created.<br />
[2020-04-03 10:37:17] - Patrik Koch average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-03 10:33:11] - Martin Marincin was added to SLOVAQUIE.<br />
[2020-04-03 10:33:09] - Martin Marincin has been added to SLOVAQUIE.<br />
[2020-04-03 10:33:07] - There's not enough Defense players to make a roster for SLOVAQUIE.
There's not enough Goalie players to make a roster for SLOVAQUIE.
<br />
[2020-04-03 10:33:02] - Martin Marincin was created.<br />
[2020-04-03 10:33:02] - Martin Marincin average salary was modified from 0 $ to 3 250 000 $.<br />
[2020-04-03 10:31:26] - Michal Cajkovsky was added to SLOVAQUIE.<br />
[2020-04-03 10:31:24] - Michal Cajkovsky has been added to SLOVAQUIE.<br />
[2020-04-03 10:31:22] - There's not enough Defense players to make a roster for SLOVAQUIE.
There's not enough Goalie players to make a roster for SLOVAQUIE.
<br />
[2020-04-03 10:31:16] - Michal Cajkovsky was created.<br />
[2020-04-03 10:31:16] - Michal Cajkovsky average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-03 10:27:57] - Andrej Sekera was added to SLOVAQUIE.<br />
[2020-04-03 10:27:55] - Andrej Sekera has been added to SLOVAQUIE.<br />
[2020-04-03 10:27:53] - There's not enough Defense players to make a roster for SLOVAQUIE.
There's not enough Goalie players to make a roster for SLOVAQUIE.
<br />
[2020-04-03 10:27:47] - Andrej Sekera was created.<br />
[2020-04-03 10:27:47] - Andrej Sekera average salary was modified from 0 $ to 2 500 000 $.<br />
[2020-04-03 10:26:13] - Marcel Hascak was added to SLOVAQUIE.<br />
[2020-04-03 10:26:11] - Marcel Hascak has been added to SLOVAQUIE.<br />
[2020-04-03 10:26:08] - There's not enough Defense players to make a roster for SLOVAQUIE.
There's not enough Goalie players to make a roster for SLOVAQUIE.
<br />
[2020-04-03 10:26:02] - Marcel Hascak was created.<br />
[2020-04-03 10:26:02] - Marcel Hascak average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-03 10:23:29] - Tomas Marcinko was added to SLOVAQUIE.<br />
[2020-04-03 10:23:27] - Tomas Marcinko has been added to SLOVAQUIE.<br />
[2020-04-03 10:23:24] - There's not enough Defense players to make a roster for SLOVAQUIE.
There's not enough Goalie players to make a roster for SLOVAQUIE.
<br />
[2020-04-03 10:23:17] - Tomas Marcinko was created.<br />
[2020-04-03 10:23:17] - Tomas Marcinko average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-03 10:20:55] - Martin Bakos was added to SLOVAQUIE.<br />
[2020-04-03 10:20:52] - Martin Bakos has been added to SLOVAQUIE.<br />
[2020-04-03 10:20:50] - There's not enough Defense players to make a roster for SLOVAQUIE.
There's not enough Goalie players to make a roster for SLOVAQUIE.
<br />
[2020-04-03 10:20:44] - Martin Bakos was created.<br />
[2020-04-03 10:20:44] - Martin Bakos average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-03 10:16:05] - Matus Sukel was added to SLOVAQUIE.<br />
[2020-04-03 10:16:04] - Matus Sukel has been added to SLOVAQUIE.<br />
[2020-04-03 10:16:01] - There's not enough Defense players to make a roster for SLOVAQUIE.
There's not enough Goalie players to make a roster for SLOVAQUIE.
<br />
[2020-04-03 10:15:56] - Matus Sukel was created.<br />
[2020-04-03 10:15:56] - Matus Sukel average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-03 10:12:25] - Patrik Lamper was added to SLOVAQUIE.<br />
[2020-04-03 10:12:23] - Patrik Lamper has been added to SLOVAQUIE.<br />
[2020-04-03 10:12:21] - There's not enough Defense players to make a roster for SLOVAQUIE.
There's not enough Goalie players to make a roster for SLOVAQUIE.
Not enough players available for SLOVAQUIE.
<br />
[2020-04-03 10:12:07] - Patrik Lamper was created.<br />
[2020-04-03 10:12:07] - Patrik Lamper average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-03 10:09:21] - Lukas Cingel was added to SLOVAQUIE.<br />
[2020-04-03 10:09:19] - Lukas Cingel has been added to SLOVAQUIE.<br />
[2020-04-03 10:09:17] - There's not enough Defense players to make a roster for SLOVAQUIE.
There's not enough Goalie players to make a roster for SLOVAQUIE.
Not enough players available for SLOVAQUIE.
<br />
[2020-04-03 10:09:12] - Lukas Cingel was created.<br />
[2020-04-03 10:09:12] - Lukas Cingel average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-03 10:03:52] - Michal Kristof was added to SLOVAQUIE.<br />
[2020-04-03 10:03:50] - Michal Kristof has been added to SLOVAQUIE.<br />
[2020-04-03 10:03:45] - There's not enough Defense players to make a roster for SLOVAQUIE.
There's not enough Goalie players to make a roster for SLOVAQUIE.
Not enough players available for SLOVAQUIE.
<br />
[2020-04-03 10:03:31] - Michal Kristof was created.<br />
[2020-04-03 10:03:31] - Michal Kristof average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-03 09:57:18] - Andrej Kudrna was added to SLOVAQUIE.<br />
[2020-04-03 09:57:17] - Andrej Kudrna has been added to SLOVAQUIE.<br />
[2020-04-03 09:57:12] - There's not enough Defense players to make a roster for SLOVAQUIE.
There's not enough Goalie players to make a roster for SLOVAQUIE.
Not enough players available for SLOVAQUIE.
<br />
[2020-04-03 09:57:06] - Andrej Kudrna was created.<br />
[2020-04-03 09:57:06] - Andrej Kudrna average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-03 08:38:24] - Marian Studenic was added to SLOVAQUIE.<br />
[2020-04-03 08:38:21] - Marian Studenic has been added to SLOVAQUIE.<br />
[2020-04-03 08:38:19] - There's not enough Defense players to make a roster for SLOVAQUIE.
There's not enough Goalie players to make a roster for SLOVAQUIE.
Not enough players available for SLOVAQUIE.
<br />
[2020-04-03 08:38:13] - Marian Studenic was created.<br />
[2020-04-03 08:38:13] - Marian Studenic average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-03 08:27:48] - Tomas Zigo was added to SLOVAQUIE.<br />
[2020-04-03 08:27:47] - Tomas Zigo has been added to SLOVAQUIE.<br />
[2020-04-03 08:27:44] - There's not enough Center players to make a roster for SLOVAQUIE.
There's not enough Left Wing players to make a roster for SLOVAQUIE.
There's not enough Forward players to make a roster for SLOVAQUIE.
There's not enough Defense players to make a roster for SLOVAQUIE.
There's not enough Goalie players to make a roster for SLOVAQUIE.
Not enough players available for SLOVAQUIE.
<br />
[2020-04-03 08:27:35] - Tomas Zigo was created.<br />
[2020-04-03 08:27:35] - Tomas Zigo average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-03 08:19:28] - Libor Hudacek was added to SLOVAQUIE.<br />
[2020-04-03 08:19:26] - Libor Hudacek has been added to SLOVAQUIE.<br />
[2020-04-03 08:19:24] - There's not enough Center players to make a roster for SLOVAQUIE.
There's not enough Left Wing players to make a roster for SLOVAQUIE.
There's not enough Right Wing players to make a roster for SLOVAQUIE.
There's not enough Forward players to make a roster for SLOVAQUIE.
There's not enough Defense players to make a roster for SLOVAQUIE.
There's not enough Goalie players to make a roster for SLOVAQUIE.
Not enough players available for SLOVAQUIE.
<br />
[2020-04-03 08:19:16] - Libor Hudacek was created.<br />
[2020-04-03 08:19:16] - Libor Hudacek average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-03 08:10:23] - There's not enough Center players to make a roster for FINLANDE.
There's not enough Left Wing players to make a roster for FINLANDE.
There's not enough Right Wing players to make a roster for FINLANDE.
There's not enough Forward players to make a roster for FINLANDE.
There's not enough Defense players to make a roster for FINLANDE.
There's not enough Goalie players to make a roster for FINLANDE.
Not enough players available for FINLANDE.
<br />
[2020-04-03 08:10:23] - There's not enough Center players to make a roster for CANADA.
There's not enough Left Wing players to make a roster for CANADA.
There's not enough Right Wing players to make a roster for CANADA.
There's not enough Forward players to make a roster for CANADA.
There's not enough Defense players to make a roster for CANADA.
There's not enough Goalie players to make a roster for CANADA.
Not enough players available for CANADA.
<br />
[2020-04-03 08:10:23] - There's not enough Center players to make a roster for LETTONIE.
There's not enough Right Wing players to make a roster for LETTONIE.
There's not enough Forward players to make a roster for LETTONIE.
There's not enough Goalie players to make a roster for LETTONIE.
Not enough players available for LETTONIE.
<br />
[2020-04-03 08:10:22] - There's not enough Center players to make a roster for U23 NORTH AMERICA.
There's not enough Left Wing players to make a roster for U23 NORTH AMERICA.
There's not enough Right Wing players to make a roster for U23 NORTH AMERICA.
There's not enough Forward players to make a roster for U23 NORTH AMERICA.
There's not enough Defense players to make a roster for U23 NORTH AMERICA.
There's not enough Goalie players to make a roster for U23 NORTH AMERICA.
Not enough players available for U23 NORTH AMERICA.
<br />
[2020-04-03 08:10:22] - There's not enough Center players to make a roster for SLOVAQUIE.
There's not enough Left Wing players to make a roster for SLOVAQUIE.
There's not enough Right Wing players to make a roster for SLOVAQUIE.
There's not enough Forward players to make a roster for SLOVAQUIE.
There's not enough Defense players to make a roster for SLOVAQUIE.
There's not enough Goalie players to make a roster for SLOVAQUIE.
Not enough players available for SLOVAQUIE.
<br />
[2020-04-03 08:10:22] - There's not enough Center players to make a roster for ETATS-UNIS.
There's not enough Left Wing players to make a roster for ETATS-UNIS.
There's not enough Right Wing players to make a roster for ETATS-UNIS.
There's not enough Forward players to make a roster for ETATS-UNIS.
There's not enough Defense players to make a roster for ETATS-UNIS.
There's not enough Goalie players to make a roster for ETATS-UNIS.
Not enough players available for ETATS-UNIS.
<br />
[2020-04-03 08:10:21] - There's not enough Center players to make a roster for SUEDE.
There's not enough Left Wing players to make a roster for SUEDE.
There's not enough Right Wing players to make a roster for SUEDE.
There's not enough Forward players to make a roster for SUEDE.
There's not enough Defense players to make a roster for SUEDE.
There's not enough Goalie players to make a roster for SUEDE.
Not enough players available for SUEDE.
<br />
[2020-04-03 08:10:21] - There's not enough Center players to make a roster for RUSSIE.
There's not enough Left Wing players to make a roster for RUSSIE.
There's not enough Right Wing players to make a roster for RUSSIE.
There's not enough Forward players to make a roster for RUSSIE.
There's not enough Defense players to make a roster for RUSSIE.
There's not enough Goalie players to make a roster for RUSSIE.
Not enough players available for RUSSIE.
<br />
[2020-04-03 08:10:13] - Nigel Dawes was added to TEAM WORLD.<br />
[2020-04-03 08:10:11] - Nigel Dawes has been added to TEAM WORLD.<br />
[2020-04-03 08:10:00] - Nigel Dawes was created.<br />
[2020-04-03 08:10:00] - Nigel Dawes average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-03 08:06:55] - Dustin Boyd was added to TEAM WORLD.<br />
[2020-04-03 08:06:53] - Dustin Boyd has been added to TEAM WORLD.<br />
[2020-04-03 08:06:45] - Dustin Boyd was created.<br />
[2020-04-03 08:06:45] - Dustin Boyd average salary was modified from 0 $ to 800 000 $.<br />
[2020-04-03 08:04:41] - Darren Dietz was added to TEAM WORLD.<br />
[2020-04-03 08:04:40] - Darren Dietz has been added to TEAM WORLD.<br />
[2020-04-03 08:04:32] - Darren Dietz was created.<br />
[2020-04-03 08:04:32] - Darren Dietz average salary was modified from 0 $ to 1 500 000 $.<br />
[2020-04-03 06:09:21] - There's not enough Center players to make a roster for FINLANDE.
There's not enough Left Wing players to make a roster for FINLANDE.
There's not enough Right Wing players to make a roster for FINLANDE.
There's not enough Forward players to make a roster for FINLANDE.
There's not enough Defense players to make a roster for FINLANDE.
There's not enough Goalie players to make a roster for FINLANDE.
Not enough players available for FINLANDE.
<br />
[2020-04-03 06:09:20] - There's not enough Center players to make a roster for CANADA.
There's not enough Left Wing players to make a roster for CANADA.
There's not enough Right Wing players to make a roster for CANADA.
There's not enough Forward players to make a roster for CANADA.
There's not enough Defense players to make a roster for CANADA.
There's not enough Goalie players to make a roster for CANADA.
Not enough players available for CANADA.
<br />
[2020-04-03 06:09:20] - There's not enough Center players to make a roster for LETTONIE.
There's not enough Right Wing players to make a roster for LETTONIE.
There's not enough Forward players to make a roster for LETTONIE.
There's not enough Goalie players to make a roster for LETTONIE.
Not enough players available for LETTONIE.
<br />
[2020-04-03 06:09:20] - There's not enough Center players to make a roster for U23 NORTH AMERICA.
There's not enough Left Wing players to make a roster for U23 NORTH AMERICA.
There's not enough Right Wing players to make a roster for U23 NORTH AMERICA.
There's not enough Forward players to make a roster for U23 NORTH AMERICA.
There's not enough Defense players to make a roster for U23 NORTH AMERICA.
There's not enough Goalie players to make a roster for U23 NORTH AMERICA.
Not enough players available for U23 NORTH AMERICA.
<br />
[2020-04-03 06:09:20] - There's not enough Center players to make a roster for SLOVAQUIE.
There's not enough Left Wing players to make a roster for SLOVAQUIE.
There's not enough Right Wing players to make a roster for SLOVAQUIE.
There's not enough Forward players to make a roster for SLOVAQUIE.
There's not enough Defense players to make a roster for SLOVAQUIE.
There's not enough Goalie players to make a roster for SLOVAQUIE.
Not enough players available for SLOVAQUIE.
<br />
[2020-04-03 06:09:19] - There's not enough Center players to make a roster for ETATS-UNIS.
There's not enough Left Wing players to make a roster for ETATS-UNIS.
There's not enough Right Wing players to make a roster for ETATS-UNIS.
There's not enough Forward players to make a roster for ETATS-UNIS.
There's not enough Defense players to make a roster for ETATS-UNIS.
There's not enough Goalie players to make a roster for ETATS-UNIS.
Not enough players available for ETATS-UNIS.
<br />
[2020-04-03 06:09:19] - There's not enough Center players to make a roster for SUEDE.
There's not enough Left Wing players to make a roster for SUEDE.
There's not enough Right Wing players to make a roster for SUEDE.
There's not enough Forward players to make a roster for SUEDE.
There's not enough Defense players to make a roster for SUEDE.
There's not enough Goalie players to make a roster for SUEDE.
Not enough players available for SUEDE.
<br />
[2020-04-03 06:09:19] - There's not enough Center players to make a roster for RUSSIE.
There's not enough Left Wing players to make a roster for RUSSIE.
There's not enough Right Wing players to make a roster for RUSSIE.
There's not enough Forward players to make a roster for RUSSIE.
There's not enough Defense players to make a roster for RUSSIE.
There's not enough Goalie players to make a roster for RUSSIE.
Not enough players available for RUSSIE.
<br />
[2020-04-03 06:09:10] - Robert Lantosi was added to SLOVAQUIE.<br />
[2020-04-03 06:09:08] - Robert Lantosi has been added to SLOVAQUIE.<br />
[2020-04-03 06:09:05] - There's not enough Center players to make a roster for SLOVAQUIE.
There's not enough Left Wing players to make a roster for SLOVAQUIE.
There's not enough Right Wing players to make a roster for SLOVAQUIE.
There's not enough Forward players to make a roster for SLOVAQUIE.
There's not enough Defense players to make a roster for SLOVAQUIE.
There's not enough Goalie players to make a roster for SLOVAQUIE.
Not enough players available for SLOVAQUIE.
<br />
[2020-04-03 06:08:59] - Robert Lantosi was created.<br />
[2020-04-03 06:08:59] - Robert Lantosi average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-03 06:05:44] - Farm Team 6 roster errors : Not enough Players available in Pro Team! 2 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[2020-04-03 06:05:44] - SLOVAQUIE roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 9 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-04-03 06:05:43] - Marko Dano was added to SLOVAQUIE.<br />
[2020-04-03 06:05:41] - Marko Dano has been added to SLOVAQUIE.<br />
[2020-04-03 06:05:38] - There's not enough Center players to make a roster for SLOVAQUIE.
There's not enough Left Wing players to make a roster for SLOVAQUIE.
There's not enough Right Wing players to make a roster for SLOVAQUIE.
There's not enough Forward players to make a roster for SLOVAQUIE.
There's not enough Defense players to make a roster for SLOVAQUIE.
There's not enough Goalie players to make a roster for SLOVAQUIE.
Not enough players available for SLOVAQUIE.
<br />
[2020-04-03 06:05:33] - Marko Dano was created.<br />
[2020-04-03 06:05:33] - Marko Dano average salary was modified from 0 $ to 2 000 000 $.<br />
[2020-04-03 06:03:40] - Adam Liska was added to SLOVAQUIE.<br />
[2020-04-03 06:03:39] - Adam Liska has been added to SLOVAQUIE.<br />
[2020-04-03 06:03:36] - There's not enough Center players to make a roster for SLOVAQUIE.
There's not enough Left Wing players to make a roster for SLOVAQUIE.
There's not enough Right Wing players to make a roster for SLOVAQUIE.
There's not enough Forward players to make a roster for SLOVAQUIE.
There's not enough Defense players to make a roster for SLOVAQUIE.
There's not enough Goalie players to make a roster for SLOVAQUIE.
Not enough players available for SLOVAQUIE.
<br />
[2020-04-03 06:03:27] - Adam Liska was created.<br />
[2020-04-03 06:03:27] - Adam Liska average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-03 05:57:25] - Tim Bozon was added to TEAM WORLD.<br />
[2020-04-03 05:57:24] - Tim Bozon has been added to TEAM WORLD.<br />
[2020-04-03 05:57:16] - Tim Bozon was created.<br />
[2020-04-03 05:57:16] - Tim Bozon average salary was modified from 0 $ to 750 000 $.<br />
[2020-04-03 05:55:02] - Joachim Blichfeld was added to TEAM WORLD.<br />
[2020-04-03 05:55:01] - Joachim Blichfeld has been added to TEAM WORLD.<br />
[2020-04-03 05:54:53] - Joachim Blichfeld was created.<br />
[2020-04-03 05:54:53] - Joachim Blichfeld average salary was modified from 0 $ to 850 000 $.<br />
[2020-04-03 05:53:21] - Mathias From was added to TEAM WORLD.<br />
[2020-04-03 05:53:19] - Mathias From has been added to TEAM WORLD.<br />
[2020-04-03 05:53:10] - Mathias From was created.<br />
[2020-04-03 05:53:10] - Mathias From average salary was modified from 0 $ to 750 000 $.<br />
[2020-04-03 05:51:23] - Wojtek Wolski was added to TEAM WORLD.<br />
[2020-04-03 05:51:21] - Wojtek Wolski has been added to TEAM WORLD.<br />
[2020-04-03 05:51:13] - Wojtek Wolski was created.<br />
[2020-04-03 05:51:13] - Wojtek Wolski average salary was modified from 0 $ to 2 700 000 $.<br />
[2020-04-03 05:49:05] - Antoine Roussel was added to TEAM WORLD.<br />
[2020-04-03 05:49:04] - Antoine Roussel has been added to TEAM WORLD.<br />
[2020-04-03 05:48:56] - Antoine Roussel was created.<br />
[2020-04-03 05:48:56] - Antoine Roussel average salary was modified from 0 $ to 2 800 000 $.<br />
[2020-04-03 05:47:34] - Daniel Sprong was added to TEAM WORLD.<br />
[2020-04-03 05:47:32] - Daniel Sprong has been added to TEAM WORLD.<br />
[2020-04-03 05:47:29] - Not enough players available for TEAM WORLD.
<br />
[2020-04-03 05:47:22] - Daniel Sprong was created.<br />
[2020-04-03 05:47:22] - Daniel Sprong average salary was modified from 0 $ to 950 000 $.<br />
[2020-04-03 05:45:43] - Oliver Bjorkstrand was added to TEAM WORLD.<br />
[2020-04-03 05:45:42] - Oliver Bjorkstrand has been added to TEAM WORLD.<br />
[2020-04-03 05:45:39] - There's not enough Left Wing players to make a roster for TEAM WORLD.
There's not enough Right Wing players to make a roster for TEAM WORLD.
There's not enough Forward players to make a roster for TEAM WORLD.
Not enough players available for TEAM WORLD.
<br />
[2020-04-03 05:45:34] - Oliver Bjorkstrand was created.<br />
[2020-04-03 05:45:34] - Oliver Bjorkstrand average salary was modified from 0 $ to 3 500 000 $.<br />
[2020-04-03 05:44:04] - Thomas Vanek was added to TEAM WORLD.<br />
[2020-04-03 05:44:02] - Thomas Vanek has been added to TEAM WORLD.<br />
[2020-04-03 05:43:59] - There's not enough Left Wing players to make a roster for TEAM WORLD.
There's not enough Right Wing players to make a roster for TEAM WORLD.
There's not enough Forward players to make a roster for TEAM WORLD.
Not enough players available for TEAM WORLD.
<br />
[2020-04-03 05:43:53] - Thomas Vanek was created.<br />
[2020-04-03 05:43:53] - Thomas Vanek average salary was modified from 0 $ to 7 500 000 $.<br />
[2020-04-03 05:42:07] - Yegor Sharangovich was added to TEAM WORLD.<br />
[2020-04-03 05:42:05] - Yegor Sharangovich has been added to TEAM WORLD.<br />
[2020-04-03 05:42:03] - There's not enough Left Wing players to make a roster for TEAM WORLD.
There's not enough Right Wing players to make a roster for TEAM WORLD.
There's not enough Forward players to make a roster for TEAM WORLD.
Not enough players available for TEAM WORLD.
<br />
[2020-04-03 05:41:58] - Yegor Sharangovich was created.<br />
[2020-04-03 05:41:58] - Yegor Sharangovich average salary was modified from 0 $ to 775 000 $.<br />
[2020-04-03 05:40:27] - Max Hermens was added to TEAM WORLD.<br />
[2020-04-03 05:40:26] - Max Hermens has been added to TEAM WORLD.<br />
[2020-04-03 05:40:23] - There's not enough Center players to make a roster for TEAM WORLD.
There's not enough Left Wing players to make a roster for TEAM WORLD.
There's not enough Right Wing players to make a roster for TEAM WORLD.
There's not enough Forward players to make a roster for TEAM WORLD.
Not enough players available for TEAM WORLD.
<br />
[2020-04-03 05:40:20] - Max Hermens was created.<br />
[2020-04-03 05:40:20] - Max Hermens average salary was modified from 0 $ to 1 400 000 $.<br />
[2020-04-03 05:38:48] - Hafthor Sigrunarson was added to TEAM WORLD.<br />
[2020-04-03 05:38:46] - Hafthor Sigrunarson has been added to TEAM WORLD.<br />
[2020-04-03 05:38:43] - There's not enough Center players to make a roster for TEAM WORLD.
There's not enough Left Wing players to make a roster for TEAM WORLD.
There's not enough Right Wing players to make a roster for TEAM WORLD.
There's not enough Forward players to make a roster for TEAM WORLD.
Not enough players available for TEAM WORLD.
<br />
[2020-04-03 05:38:40] - Hafthor Sigrunarson was created.<br />
[2020-04-03 05:38:40] - Hafthor Sigrunarson average salary was modified from 0 $ to 1 000 000 $.<br />
[2020-04-03 05:36:58] - Lars Eller was added to TEAM WORLD.<br />
[2020-04-03 05:36:56] - Lars Eller has been added to TEAM WORLD.<br />
[2020-04-03 05:36:53] - There's not enough Center players to make a roster for TEAM WORLD.
There's not enough Left Wing players to make a roster for TEAM WORLD.
There's not enough Right Wing players to make a roster for TEAM WORLD.
There's not enough Forward players to make a roster for TEAM WORLD.
Not enough players available for TEAM WORLD.
<br />
[2020-04-03 05:36:49] - Lars Eller was created.<br />
[2020-04-03 05:36:49] - Lars Eller average salary was modified from 0 $ to 5 225 000 $.<br />
[2020-04-03 05:35:20] - Mattias Norstebo was added to TEAM WORLD.<br />
[2020-04-03 05:35:18] - Mattias Norstebo has been added to TEAM WORLD.<br />
[2020-04-03 05:35:16] - There's not enough Center players to make a roster for TEAM WORLD.
There's not enough Left Wing players to make a roster for TEAM WORLD.
There's not enough Right Wing players to make a roster for TEAM WORLD.
There's not enough Forward players to make a roster for TEAM WORLD.
There's not enough Defense players to make a roster for TEAM WORLD.
Not enough players available for TEAM WORLD.
<br />
[2020-04-03 05:35:10] - Mattias Norstebo was created.<br />
[2020-04-03 05:35:10] - Mattias Norstebo average salary was modified from 0 $ to 1 000 000 $.<br />
[2020-04-03 05:32:51] - Andrey Pedan was added to TEAM WORLD.<br />
[2020-04-03 05:32:49] - Andrey Pedan has been added to TEAM WORLD.<br />
[2020-04-03 05:32:47] - There's not enough Center players to make a roster for TEAM WORLD.
There's not enough Left Wing players to make a roster for TEAM WORLD.
There's not enough Right Wing players to make a roster for TEAM WORLD.
There's not enough Forward players to make a roster for TEAM WORLD.
There's not enough Defense players to make a roster for TEAM WORLD.
Not enough players available for TEAM WORLD.
<br />
[2020-04-03 05:32:42] - Andrey Pedan was created.<br />
[2020-04-03 05:32:42] - Andrey Pedan average salary was modified from 0 $ to 950 000 $.<br />
[2020-04-03 05:30:47] - Farm Team 7 roster errors : Not enough Players available in Pro Team! 6 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[2020-04-03 05:30:47] - TEAM WORLD roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 9 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-04-03 05:30:46] - There's not enough Center players to make a roster for TEAM WORLD.
There's not enough Left Wing players to make a roster for TEAM WORLD.
There's not enough Right Wing players to make a roster for TEAM WORLD.
There's not enough Forward players to make a roster for TEAM WORLD.
There's not enough Defense players to make a roster for TEAM WORLD.
Not enough players available for TEAM WORLD.
<br />
[2020-04-03 05:30:43] - Markus Lauridsen was added to TEAM WORLD.<br />
[2020-04-03 05:30:42] - Markus Lauridsen has been added to TEAM WORLD.<br />
[2020-04-03 05:30:39] - There's not enough Center players to make a roster for TEAM WORLD.
There's not enough Left Wing players to make a roster for TEAM WORLD.
There's not enough Right Wing players to make a roster for TEAM WORLD.
There's not enough Forward players to make a roster for TEAM WORLD.
There's not enough Defense players to make a roster for TEAM WORLD.
Not enough players available for TEAM WORLD.
<br />
[2020-04-03 05:30:26] - Markus Lauridsen was created.<br />
[2020-04-03 05:30:26] - Markus Lauridsen average salary was modified from 0 $ to 1 000 000 $.<br />
[2020-04-03 05:28:32] - Enrico Miglioranzi was added to TEAM WORLD.<br />
[2020-04-03 05:28:31] - Enrico Miglioranzi has been added to TEAM WORLD.<br />
[2020-04-03 05:28:28] - There's not enough Center players to make a roster for TEAM WORLD.
There's not enough Left Wing players to make a roster for TEAM WORLD.
There's not enough Right Wing players to make a roster for TEAM WORLD.
There's not enough Forward players to make a roster for TEAM WORLD.
There's not enough Defense players to make a roster for TEAM WORLD.
Not enough players available for TEAM WORLD.
<br />
[2020-04-03 05:28:22] - Enrico Miglioranzi was created.<br />
[2020-04-03 05:28:22] - Enrico Miglioranzi average salary was modified from 0 $ to 1 250 000 $.<br />
[2020-04-03 05:26:16] - Jesper Jensen was added to TEAM WORLD.<br />
[2020-04-03 05:26:15] - Jesper Jensen has been added to TEAM WORLD.<br />
[2020-04-03 05:26:12] - There's not enough Center players to make a roster for TEAM WORLD.
There's not enough Left Wing players to make a roster for TEAM WORLD.
There's not enough Right Wing players to make a roster for TEAM WORLD.
There's not enough Forward players to make a roster for TEAM WORLD.
There's not enough Defense players to make a roster for TEAM WORLD.
Not enough players available for TEAM WORLD.
<br />
[2020-04-03 05:26:06] - Jesper Jensen was created.<br />
[2020-04-03 05:26:06] - Jesper Jensen average salary was modified from 0 $ to 2 500 000 $.<br />
[2020-04-03 05:23:47] - Raman Hrabarenka was added to TEAM WORLD.<br />
[2020-04-03 05:23:44] - Raman Hrabarenka has been added to TEAM WORLD.<br />
[2020-04-03 05:23:40] - There's not enough Center players to make a roster for TEAM WORLD.
There's not enough Left Wing players to make a roster for TEAM WORLD.
There's not enough Right Wing players to make a roster for TEAM WORLD.
There's not enough Forward players to make a roster for TEAM WORLD.
There's not enough Defense players to make a roster for TEAM WORLD.
Not enough players available for TEAM WORLD.
<br />
[2020-04-03 05:23:29] - Raman Hrabarenka was created.<br />
[2020-04-03 05:23:29] - Raman Hrabarenka average salary was modified from 0 $ to 2 950 000 $.<br />
[2020-04-03 05:21:27] - Frederik Andersen was added to TEAM WORLD.<br />
[2020-04-03 05:21:25] - Frederik Andersen has been added to TEAM WORLD.<br />
[2020-04-03 05:21:23] - There's not enough Center players to make a roster for TEAM WORLD.
There's not enough Left Wing players to make a roster for TEAM WORLD.
There's not enough Right Wing players to make a roster for TEAM WORLD.
There's not enough Forward players to make a roster for TEAM WORLD.
There's not enough Defense players to make a roster for TEAM WORLD.
There's not enough Goalie players to make a roster for TEAM WORLD.
Not enough players available for TEAM WORLD.
<br />
[2020-04-03 05:21:17] - Frederik Andersen was created.<br />
[2020-04-03 05:21:17] - Frederik Andersen average salary was modified from 0 $ to 3 500 000 $.<br />
[2020-04-03 05:19:45] - Alexandar Georgiyev was added to TEAM WORLD.<br />
[2020-04-03 05:19:43] - Alexandar Georgiyev has been added to TEAM WORLD.<br />
[2020-04-03 05:19:41] - There's not enough Center players to make a roster for TEAM WORLD.
There's not enough Left Wing players to make a roster for TEAM WORLD.
There's not enough Right Wing players to make a roster for TEAM WORLD.
There's not enough Forward players to make a roster for TEAM WORLD.
There's not enough Defense players to make a roster for TEAM WORLD.
There's not enough Goalie players to make a roster for TEAM WORLD.
Not enough players available for TEAM WORLD.
<br />
[2020-04-03 05:19:33] - Alexandar Georgiyev was created.<br />
[2020-04-03 05:19:33] - Alexandar Georgiyev average salary was modified from 0 $ to 950 000 $.<br />
[2020-04-03 05:16:48] - TEAM WORLD hired Paul MacLean for 1 000 000 $ for 3 year(s).<br />
[2020-04-03 05:16:44] - There's not enough Center players to make a roster for TEAM WORLD.
There's not enough Left Wing players to make a roster for TEAM WORLD.
There's not enough Right Wing players to make a roster for TEAM WORLD.
There's not enough Forward players to make a roster for TEAM WORLD.
There's not enough Defense players to make a roster for TEAM WORLD.
There's not enough Goalie players to make a roster for TEAM WORLD.
Not enough players available for TEAM WORLD.
<br />
[2020-04-03 05:16:41] - Paul MacLean was created.<br />
[2020-04-03 05:14:36] - REPUBLIQUE TCHEQUE roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 9 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-04-03 05:14:35] - Pavel Francouz was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 05:14:33] - Pavel Francouz has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 05:14:30] - There's not enough Goalie players to make a roster for REPUBLIQUE TCHEQUE.
<br />
[2020-04-03 05:14:25] - Pavel Francouz was created.<br />
[2020-04-03 05:14:25] - Pavel Francouz average salary was modified from 0 $ to 1 800 000 $.<br />
[2020-04-03 05:12:57] - Petr Mrazek was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 05:12:55] - Petr Mrazek has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 05:12:52] - There's not enough Goalie players to make a roster for REPUBLIQUE TCHEQUE.
<br />
[2020-04-03 05:12:47] - Petr Mrazek was created.<br />
[2020-04-03 05:12:47] - Petr Mrazek average salary was modified from 0 $ to 4 500 000 $.<br />
[2020-04-03 05:11:24] - Filip Kral was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 05:11:22] - Filip Kral has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 05:11:19] - There's not enough Defense players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Goalie players to make a roster for REPUBLIQUE TCHEQUE.
<br />
[2020-04-03 05:11:14] - Filip Kral was created.<br />
[2020-04-03 05:11:14] - Filip Kral average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-03 05:08:49] - Jakub Zboril was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 05:08:48] - Jakub Zboril has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 05:08:45] - There's not enough Defense players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Goalie players to make a roster for REPUBLIQUE TCHEQUE.
<br />
[2020-04-03 05:08:36] - Jakub Zboril was created.<br />
[2020-04-03 05:08:36] - Jakub Zboril average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-03 04:42:20] - Tomas Kundratek was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:42:18] - Tomas Kundratek has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:42:16] - There's not enough Defense players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Goalie players to make a roster for REPUBLIQUE TCHEQUE.
<br />
[2020-04-03 04:42:10] - Tomas Kundratek was created.<br />
[2020-04-03 04:42:10] - Tomas Kundratek average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-03 04:40:28] - Farm Team 2 roster errors : Not enough Players available in Pro Team! 16 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[2020-04-03 04:40:28] - REPUBLIQUE TCHEQUE roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 9 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-04-03 04:40:26] - Filip Hronek was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:40:24] - Filip Hronek has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:40:22] - There's not enough Defense players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Goalie players to make a roster for REPUBLIQUE TCHEQUE.
<br />
[2020-04-03 04:40:10] - Filip Hronek was created.<br />
[2020-04-03 04:40:10] - Filip Hronek average salary was modified from 0 $ to 950 000 $.<br />
[2020-04-03 04:38:30] - Andrej Sustr was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:38:28] - Andrej Sustr has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:38:26] - There's not enough Defense players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Goalie players to make a roster for REPUBLIQUE TCHEQUE.
<br />
[2020-04-03 04:38:20] - Andrej Sustr was created.<br />
[2020-04-03 04:38:20] - Andrej Sustr average salary was modified from 0 $ to 3 000 000 $.<br />
[2020-04-03 04:35:51] - Jakub Kindl was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:35:50] - Jakub Kindl has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:35:47] - There's not enough Defense players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Goalie players to make a roster for REPUBLIQUE TCHEQUE.
<br />
[2020-04-03 04:35:41] - Jakub Kindl was created.<br />
[2020-04-03 04:35:41] - Jakub Kindl average salary was modified from 0 $ to 1 700 000 $.<br />
[2020-04-03 04:32:20] - Jaromir Jagr was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:32:18] - Jaromir Jagr has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:32:16] - There's not enough Defense players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Goalie players to make a roster for REPUBLIQUE TCHEQUE.
<br />
[2020-04-03 04:32:09] - Jaromir Jagr was created.<br />
[2020-04-03 04:32:09] - Jaromir Jagr average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-03 04:29:41] - Filip Chytil was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:29:39] - Filip Chytil has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:29:36] - There's not enough Defense players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Goalie players to make a roster for REPUBLIQUE TCHEQUE.
<br />
[2020-04-03 04:29:29] - Filip Chytil was created.<br />
[2020-04-03 04:29:29] - Filip Chytil average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-03 04:24:58] - There's not enough Defense players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Goalie players to make a roster for REPUBLIQUE TCHEQUE.
<br />
[2020-04-03 04:24:14] - Martin Necas was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:24:09] - artin Necas has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:24:06] - There's not enough Defense players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Goalie players to make a roster for REPUBLIQUE TCHEQUE.
<br />
[2020-04-03 04:23:49] - Martin Necas was created.<br />
[2020-04-03 04:23:49] - Martin Necas average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-03 04:03:57] - Filip Chlapik was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:03:54] - Filip Chlapik has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:03:52] - There's not enough Defense players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Goalie players to make a roster for REPUBLIQUE TCHEQUE.
<br />
[2020-04-03 04:03:48] - Filip Chlapik was created.<br />
[2020-04-03 04:03:48] - Filip Chlapik average salary was modified from 0 $ to 850 000 $.<br />
[2020-04-03 04:00:28] - David Kampf was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:00:26] - David Kampf has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:00:23] - There's not enough Defense players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Goalie players to make a roster for REPUBLIQUE TCHEQUE.
Not enough players available for REPUBLIQUE TCHEQUE.
<br />
[2020-04-03 04:00:17] - David Kampf was created.<br />
[2020-04-03 04:00:17] - David Kampf average salary was modified from 0 $ to 1 500 000 $.<br />
[2020-04-03 03:56:30] - Dominik Simon was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:56:28] - Dominik Simon has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:56:25] - There's not enough Defense players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Goalie players to make a roster for REPUBLIQUE TCHEQUE.
Not enough players available for REPUBLIQUE TCHEQUE.
<br />
[2020-04-03 03:56:19] - Dominik Simon was created.<br />
[2020-04-03 03:56:19] - Dominik Simon average salary was modified from 0 $ to 900 000 $.<br />
[2020-04-03 03:54:07] - Pavel Zacha was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:54:05] - Pavel Zacha has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:54:02] - There's not enough Defense players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Goalie players to make a roster for REPUBLIQUE TCHEQUE.
Not enough players available for REPUBLIQUE TCHEQUE.
<br />
[2020-04-03 03:53:58] - Pavel Zacha was created.<br />
[2020-04-03 03:53:58] - Pavel Zacha average salary was modified from 0 $ to 950 000 $.<br />
[2020-04-03 03:49:48] - Filip Zadina was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:49:47] - Filip Zadina has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:49:44] - There's not enough Defense players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Goalie players to make a roster for REPUBLIQUE TCHEQUE.
Not enough players available for REPUBLIQUE TCHEQUE.
<br />
[2020-04-03 03:49:40] - Filip Zadina was created.<br />
[2020-04-03 03:49:40] - Filip Zadina average salary was modified from 0 $ to 950 000 $.<br />
[2020-04-03 03:47:28] - Michael Frolik was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:47:26] - Michael Frolik has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:47:24] - There's not enough Center players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Left Wing players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Right Wing players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Forward players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Defense players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Goalie players to make a roster for REPUBLIQUE TCHEQUE.
Not enough players available for REPUBLIQUE TCHEQUE.
<br />
[2020-04-03 03:47:19] - Michael Frolik was created.<br />
[2020-04-03 03:47:19] - Michael Frolik average salary was modified from 0 $ to 4 650 000 $.<br />
[2020-04-03 03:43:47] - Ondrej Palat was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:43:45] - Ondrej Palat has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:43:43] - There's not enough Center players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Left Wing players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Right Wing players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Forward players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Defense players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Goalie players to make a roster for REPUBLIQUE TCHEQUE.
Not enough players available for REPUBLIQUE TCHEQUE.
<br />
[2020-04-03 03:43:39] - Ondrej Palat was created.<br />
[2020-04-03 03:43:39] - Ondrej Palat average salary was modified from 0 $ to 3 000 000 $.<br />
[2020-04-03 03:35:56] - Martin Hanzal was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:35:54] - Martin Hanzal has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:35:52] - There's not enough Center players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Left Wing players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Right Wing players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Forward players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Defense players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Goalie players to make a roster for REPUBLIQUE TCHEQUE.
Not enough players available for REPUBLIQUE TCHEQUE.
<br />
[2020-04-03 03:35:47] - Martin Hanzal was created.<br />
[2020-04-03 03:35:47] - Martin Hanzal average salary was modified from 0 $ to 4 000 000 $.<br />
[2020-04-03 03:33:10] - Ondrej Kase was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:33:08] - Ondrej Kase has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:33:05] - There's not enough Center players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Left Wing players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Right Wing players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Forward players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Defense players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Goalie players to make a roster for REPUBLIQUE TCHEQUE.
Not enough players available for REPUBLIQUE TCHEQUE.
<br />
[2020-04-03 03:33:01] - Ondrej Kase was created.<br />
[2020-04-03 03:33:01] - Ondrej Kase average salary was modified from 0 $ to 950 000 $.<br />
[2020-04-03 03:30:58] - David Krejci was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:30:56] - David Krejci has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:30:53] - There's not enough Center players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Left Wing players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Right Wing players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Forward players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Defense players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Goalie players to make a roster for REPUBLIQUE TCHEQUE.
Not enough players available for REPUBLIQUE TCHEQUE.
<br />
[2020-04-03 03:30:48] - David Krejci was created.<br />
[2020-04-03 03:30:48] - David Krejci average salary was modified from 0 $ to 6 800 000 $.<br />
[2020-04-03 03:28:42] - REPUBLIQUE TCHEQUE hired Robert Lang for 500 000 $ for 1 year(s).<br />
[2020-04-03 03:28:37] - There's not enough Center players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Left Wing players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Right Wing players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Forward players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Defense players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Goalie players to make a roster for REPUBLIQUE TCHEQUE.
Not enough players available for REPUBLIQUE TCHEQUE.
<br />
[2020-04-03 03:28:33] - Robert Lang was created.<br />
[2020-04-02 13:53:58] - There's not enough Center players to make a roster for FINLANDE.
There's not enough Left Wing players to make a roster for FINLANDE.
There's not enough Right Wing players to make a roster for FINLANDE.
There's not enough Forward players to make a roster for FINLANDE.
There's not enough Defense players to make a roster for FINLANDE.
There's not enough Goalie players to make a roster for FINLANDE.
Not enough players available for FINLANDE.
<br />
[2020-04-02 13:53:58] - There's not enough Center players to make a roster for CANADA.
There's not enough Left Wing players to make a roster for CANADA.
There's not enough Right Wing players to make a roster for CANADA.
There's not enough Forward players to make a roster for CANADA.
There's not enough Defense players to make a roster for CANADA.
There's not enough Goalie players to make a roster for CANADA.
Not enough players available for CANADA.
<br />
[2020-04-02 13:53:57] - There's not enough Center players to make a roster for LETTONIE.
There's not enough Right Wing players to make a roster for LETTONIE.
There's not enough Forward players to make a roster for LETTONIE.
There's not enough Goalie players to make a roster for LETTONIE.
Not enough players available for LETTONIE.
<br />
[2020-04-02 13:53:57] - There's not enough Center players to make a roster for U23 NORTH AMERICA.
There's not enough Left Wing players to make a roster for U23 NORTH AMERICA.
There's not enough Right Wing players to make a roster for U23 NORTH AMERICA.
There's not enough Forward players to make a roster for U23 NORTH AMERICA.
There's not enough Defense players to make a roster for U23 NORTH AMERICA.
There's not enough Goalie players to make a roster for U23 NORTH AMERICA.
Not enough players available for U23 NORTH AMERICA.
<br />
[2020-04-02 13:53:56] - There's not enough Center players to make a roster for TEAM WORLD.
There's not enough Left Wing players to make a roster for TEAM WORLD.
There's not enough Right Wing players to make a roster for TEAM WORLD.
There's not enough Forward players to make a roster for TEAM WORLD.
There's not enough Defense players to make a roster for TEAM WORLD.
There's not enough Goalie players to make a roster for TEAM WORLD.
Not enough players available for TEAM WORLD.
<br />
[2020-04-02 13:53:56] - There's not enough Center players to make a roster for SLOVAQUIE.
There's not enough Left Wing players to make a roster for SLOVAQUIE.
There's not enough Right Wing players to make a roster for SLOVAQUIE.
There's not enough Forward players to make a roster for SLOVAQUIE.
There's not enough Defense players to make a roster for SLOVAQUIE.
There's not enough Goalie players to make a roster for SLOVAQUIE.
Not enough players available for SLOVAQUIE.
<br />
[2020-04-02 13:53:56] - There's not enough Center players to make a roster for ETATS-UNIS.
There's not enough Left Wing players to make a roster for ETATS-UNIS.
There's not enough Right Wing players to make a roster for ETATS-UNIS.
There's not enough Forward players to make a roster for ETATS-UNIS.
There's not enough Defense players to make a roster for ETATS-UNIS.
There's not enough Goalie players to make a roster for ETATS-UNIS.
Not enough players available for ETATS-UNIS.
<br />
[2020-04-02 13:53:56] - There's not enough Center players to make a roster for SUEDE.
There's not enough Left Wing players to make a roster for SUEDE.
There's not enough Right Wing players to make a roster for SUEDE.
There's not enough Forward players to make a roster for SUEDE.
There's not enough Defense players to make a roster for SUEDE.
There's not enough Goalie players to make a roster for SUEDE.
Not enough players available for SUEDE.
<br />
[2020-04-02 13:53:55] - There's not enough Center players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Left Wing players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Right Wing players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Forward players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Defense players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Goalie players to make a roster for REPUBLIQUE TCHEQUE.
Not enough players available for REPUBLIQUE TCHEQUE.
<br />
[2020-04-02 13:53:55] - There's not enough Center players to make a roster for RUSSIE.
There's not enough Left Wing players to make a roster for RUSSIE.
There's not enough Right Wing players to make a roster for RUSSIE.
There's not enough Forward players to make a roster for RUSSIE.
There's not enough Defense players to make a roster for RUSSIE.
There's not enough Goalie players to make a roster for RUSSIE.
Not enough players available for RUSSIE.
<br />
[2020-04-02 13:53:47] - Yannic Seidenberg was added to ALLEMAGNE.<br />
[2020-04-02 13:53:45] - Yannic Seidenberg has been added to ALLEMAGNE.<br />
[2020-04-02 13:53:34] - Yannic Seidenberg was created.<br />
[2020-04-02 13:53:34] - Yannic Seidenberg average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-02 06:53:02] - There's not enough Center players to make a roster for FINLANDE.
There's not enough Left Wing players to make a roster for FINLANDE.
There's not enough Right Wing players to make a roster for FINLANDE.
There's not enough Forward players to make a roster for FINLANDE.
There's not enough Defense players to make a roster for FINLANDE.
There's not enough Goalie players to make a roster for FINLANDE.
Not enough players available for FINLANDE.
<br />
[2020-04-02 06:53:02] - There's not enough Center players to make a roster for CANADA.
There's not enough Left Wing players to make a roster for CANADA.
There's not enough Right Wing players to make a roster for CANADA.
There's not enough Forward players to make a roster for CANADA.
There's not enough Defense players to make a roster for CANADA.
There's not enough Goalie players to make a roster for CANADA.
Not enough players available for CANADA.
<br />
[2020-04-02 06:53:02] - There's not enough Center players to make a roster for LETTONIE.
There's not enough Right Wing players to make a roster for LETTONIE.
There's not enough Forward players to make a roster for LETTONIE.
There's not enough Goalie players to make a roster for LETTONIE.
Not enough players available for LETTONIE.
<br />
[2020-04-02 06:53:01] - There's not enough Center players to make a roster for U23 NORTH AMERICA.
There's not enough Left Wing players to make a roster for U23 NORTH AMERICA.
There's not enough Right Wing players to make a roster for U23 NORTH AMERICA.
There's not enough Forward players to make a roster for U23 NORTH AMERICA.
There's not enough Defense players to make a roster for U23 NORTH AMERICA.
There's not enough Goalie players to make a roster for U23 NORTH AMERICA.
Not enough players available for U23 NORTH AMERICA.
<br />
[2020-04-02 06:53:01] - There's not enough Center players to make a roster for TEAM WORLD.
There's not enough Left Wing players to make a roster for TEAM WORLD.
There's not enough Right Wing players to make a roster for TEAM WORLD.
There's not enough Forward players to make a roster for TEAM WORLD.
There's not enough Defense players to make a roster for TEAM WORLD.
There's not enough Goalie players to make a roster for TEAM WORLD.
Not enough players available for TEAM WORLD.
<br />
[2020-04-02 06:53:01] - There's not enough Center players to make a roster for SLOVAQUIE.
There's not enough Left Wing players to make a roster for SLOVAQUIE.
There's not enough Right Wing players to make a roster for SLOVAQUIE.
There's not enough Forward players to make a roster for SLOVAQUIE.
There's not enough Defense players to make a roster for SLOVAQUIE.
There's not enough Goalie players to make a roster for SLOVAQUIE.
Not enough players available for SLOVAQUIE.
<br />
[2020-04-02 06:53:00] - There's not enough Center players to make a roster for ETATS-UNIS.
There's not enough Left Wing players to make a roster for ETATS-UNIS.
There's not enough Right Wing players to make a roster for ETATS-UNIS.
There's not enough Forward players to make a roster for ETATS-UNIS.
There's not enough Defense players to make a roster for ETATS-UNIS.
There's not enough Goalie players to make a roster for ETATS-UNIS.
Not enough players available for ETATS-UNIS.
<br />
[2020-04-02 06:53:00] - There's not enough Center players to make a roster for SUEDE.
There's not enough Left Wing players to make a roster for SUEDE.
There's not enough Right Wing players to make a roster for SUEDE.
There's not enough Forward players to make a roster for SUEDE.
There's not enough Defense players to make a roster for SUEDE.
There's not enough Goalie players to make a roster for SUEDE.
Not enough players available for SUEDE.
<br />
[2020-04-02 06:53:00] - There's not enough Center players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Left Wing players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Right Wing players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Forward players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Defense players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Goalie players to make a roster for REPUBLIQUE TCHEQUE.
Not enough players available for REPUBLIQUE TCHEQUE.
<br />
[2020-04-02 06:52:59] - There's not enough Center players to make a roster for RUSSIE.
There's not enough Left Wing players to make a roster for RUSSIE.
There's not enough Right Wing players to make a roster for RUSSIE.
There's not enough Forward players to make a roster for RUSSIE.
There's not enough Defense players to make a roster for RUSSIE.
There's not enough Goalie players to make a roster for RUSSIE.
Not enough players available for RUSSIE.
<br />
[2020-04-02 06:51:14] - ALLEMAGNE roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 9 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-04-02 06:51:11] - Danny aus den Birken was added to ALLEMAGNE.<br />
[2020-04-02 06:51:09] - Danny aus den Birken has been added to ALLEMAGNE.<br />
[2020-04-02 06:51:07] - There's not enough Goalie players to make a roster for ALLEMAGNE.
<br />
[2020-04-02 06:51:02] - Danny aus den Birken was created.<br />
[2020-04-02 06:51:02] - Danny aus den Birken average salary was modified from 0 $ to 1 350 000 $.<br />
[2020-04-02 06:48:49] - Mathias Niederberger was added to ALLEMAGNE.<br />
[2020-04-02 06:48:47] - Mathias Niederberger has been added to ALLEMAGNE.<br />
[2020-04-02 06:48:45] - There's not enough Goalie players to make a roster for ALLEMAGNE.
<br />
[2020-04-02 06:48:25] - Mathias Niederberger was created.<br />
[2020-04-02 06:48:25] - Mathias Niederberger average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-02 06:44:11] - Moritz Seider was added to ALLEMAGNE.<br />
[2020-04-02 06:44:09] - Moritz Seider has been added to ALLEMAGNE.<br />
[2020-04-02 06:44:06] - There's not enough Defense players to make a roster for ALLEMAGNE.
There's not enough Goalie players to make a roster for ALLEMAGNE.
<br />
[2020-04-02 06:43:58] - Moritz Seider was created.<br />
[2020-04-02 06:43:58] - Moritz Seider average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-02 06:39:47] - Simon Sezemsky was added to ALLEMAGNE.<br />
[2020-04-02 06:39:46] - Simon Sezemsky has been added to ALLEMAGNE.<br />
[2020-04-02 06:39:42] - There's not enough Defense players to make a roster for ALLEMAGNE.
There's not enough Goalie players to make a roster for ALLEMAGNE.
<br />
[2020-04-02 06:39:36] - Simon Sezemsky was created.<br />
[2020-04-02 06:39:36] - Simon Sezemsky average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-02 06:33:59] - Leon Gawanke was added to ALLEMAGNE.<br />
[2020-04-02 06:33:58] - Leon Gawanke has been added to ALLEMAGNE.<br />
[2020-04-02 06:33:55] - There's not enough Defense players to make a roster for ALLEMAGNE.
There's not enough Goalie players to make a roster for ALLEMAGNE.
<br />
[2020-04-02 06:33:47] - Leon Gawanke was created.<br />
[2020-04-02 06:33:47] - Leon Gawanke average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-02 06:29:55] - Konrad Abeltshauser was added to ALLEMAGNE.<br />
[2020-04-02 06:29:54] - Konrad Abeltshauser has been added to ALLEMAGNE.<br />
[2020-04-02 06:29:51] - There's not enough Defense players to make a roster for ALLEMAGNE.
There's not enough Goalie players to make a roster for ALLEMAGNE.
<br />
[2020-04-02 06:29:46] - Konrad Abeltshauser was created.<br />
[2020-04-02 06:29:46] - Konrad Abeltshauser average salary was modified from 0 $ to 1 200 000 $.<br />
[2020-04-02 06:24:30] - Jonas Müller was added to ALLEMAGNE.<br />
[2020-04-02 06:24:28] - Jonas Müller has been added to ALLEMAGNE.<br />
[2020-04-02 06:24:25] - There's not enough Defense players to make a roster for ALLEMAGNE.
There's not enough Goalie players to make a roster for ALLEMAGNE.
<br />
[2020-04-02 06:24:18] - Jonas Müller was created.<br />
[2020-04-02 06:24:18] - Jonas Müller average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-02 06:15:56] - Denis Reul was added to ALLEMAGNE.<br />
[2020-04-02 06:15:54] - Denis Reul has been added to ALLEMAGNE.<br />
[2020-04-02 06:15:52] - There's not enough Defense players to make a roster for ALLEMAGNE.
There's not enough Goalie players to make a roster for ALLEMAGNE.
<br />
[2020-04-02 06:15:46] - Denis Reul was created.<br />
[2020-04-02 06:15:46] - Denis Reul average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-02 05:47:59] - Tobias Rieder was added to ALLEMAGNE.<br />
[2020-04-02 05:47:56] - Tobias Rieder has been added to ALLEMAGNE.<br />
[2020-04-02 05:47:53] - There's not enough Defense players to make a roster for ALLEMAGNE.
There's not enough Goalie players to make a roster for ALLEMAGNE.
<br />
[2020-04-02 05:47:48] - Tobias Rieder was created.<br />
[2020-04-02 05:47:48] - Tobias Rieder average salary was modified from 0 $ to 2 000 000 $.<br />
[2020-04-02 05:44:55] - Tim Stützle was added to ALLEMAGNE.<br />
[2020-04-02 05:44:53] - Tim Stützle has been added to ALLEMAGNE.<br />
[2020-04-02 05:44:51] - There's not enough Defense players to make a roster for ALLEMAGNE.
There's not enough Goalie players to make a roster for ALLEMAGNE.
<br />
[2020-04-02 05:44:45] - Tim Stützle was created.<br />
[2020-04-02 05:44:45] - Tim Stützle average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-02 05:32:22] - Philip Gogulla was added to ALLEMAGNE.<br />
[2020-04-02 05:32:20] - Philip Gogulla has been added to ALLEMAGNE.<br />
[2020-04-02 05:32:16] - There's not enough Defense players to make a roster for ALLEMAGNE.
There's not enough Goalie players to make a roster for ALLEMAGNE.
<br />
[2020-04-02 05:32:09] - Philip Gogulla was created.<br />
[2020-04-02 05:32:09] - Philip Gogulla average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-02 05:25:16] - Farm Team 12 roster errors : Not enough Players available in Pro Team! 11 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[2020-04-02 05:25:16] - ALLEMAGNE roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 9 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-04-02 05:25:16] - There's not enough Defense players to make a roster for ALLEMAGNE.
There's not enough Goalie players to make a roster for ALLEMAGNE.
<br />
[2020-04-01 19:36:18] - Nico Sturm was added to ALLEMAGNE.<br />
[2020-04-01 19:36:16] - Nico Sturm has been added to ALLEMAGNE.<br />
[2020-04-01 19:36:13] - There's not enough Defense players to make a roster for ALLEMAGNE.
There's not enough Goalie players to make a roster for ALLEMAGNE.
<br />
[2020-04-01 19:36:08] - Nico Sturm was created.<br />
[2020-04-01 19:36:08] - Nico Sturm average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-01 19:29:06] - Markus Eisenschmid was added to ALLEMAGNE.<br />
[2020-04-01 19:29:05] - Markus Eisenschmid has been added to ALLEMAGNE.<br />
[2020-04-01 19:29:02] - There's not enough Defense players to make a roster for ALLEMAGNE.
There's not enough Goalie players to make a roster for ALLEMAGNE.
<br />
[2020-04-01 19:28:55] - Markus Eisenschmid was created.<br />
[2020-04-01 19:28:55] - Markus Eisenschmid average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-01 19:23:25] - Marc Michaelis was added to ALLEMAGNE.<br />
[2020-04-01 19:23:23] - Marc Michaelis has been added to ALLEMAGNE.<br />
[2020-04-01 19:23:19] - There's not enough Defense players to make a roster for ALLEMAGNE.
There's not enough Goalie players to make a roster for ALLEMAGNE.
Not enough players available for ALLEMAGNE.
<br />
[2020-04-01 19:23:14] - Marc Michaelis was created.<br />
[2020-04-01 19:23:14] - Marc Michaelis average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-01 19:18:03] - Lukas Reichel was added to ALLEMAGNE.<br />
[2020-04-01 19:17:58] - Lukas Reichel has been added to ALLEMAGNE.<br />
[2020-04-01 19:17:55] - There's not enough Defense players to make a roster for ALLEMAGNE.
There's not enough Goalie players to make a roster for ALLEMAGNE.
Not enough players available for ALLEMAGNE.
<br />
[2020-04-01 19:17:48] - Lukas Reichel was created.<br />
[2020-04-01 19:17:48] - Lukas Reichel average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-01 19:10:24] - Lean Bergmann was added to ALLEMAGNE.<br />
[2020-04-01 19:10:21] - Lean Bergmann has been added to ALLEMAGNE.<br />
[2020-04-01 19:10:18] - There's not enough Defense players to make a roster for ALLEMAGNE.
There's not enough Goalie players to make a roster for ALLEMAGNE.
Not enough players available for ALLEMAGNE.
<br />
[2020-04-01 19:10:10] - Lean Bergmann was created.<br />
[2020-04-01 19:10:10] - Lean Bergmann average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-01 19:03:14] - Laurin Braun was added to ALLEMAGNE.<br />
[2020-04-01 19:03:12] - Laurin Braun has been added to ALLEMAGNE.<br />
[2020-04-01 19:03:09] - There's not enough Defense players to make a roster for ALLEMAGNE.
There's not enough Goalie players to make a roster for ALLEMAGNE.
Not enough players available for ALLEMAGNE.
<br />
[2020-04-01 19:02:56] - Laurin Braun was created.<br />
[2020-04-01 19:02:56] - Laurin Braun average salary was modified from 0 $ to 1 400 000 $.<br />
[2020-04-01 19:00:23] - Eduard Lewandowski was added to ALLEMAGNE.<br />
[2020-04-01 19:00:21] - Eduard Lewandowski has been added to ALLEMAGNE.<br />
[2020-04-01 19:00:19] - There's not enough Defense players to make a roster for ALLEMAGNE.
There's not enough Goalie players to make a roster for ALLEMAGNE.
Not enough players available for ALLEMAGNE.
<br />
[2020-04-01 19:00:14] - Eduard Lewandowski was created.<br />
[2020-04-01 19:00:14] - Eduard Lewandowski average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-01 18:56:30] - Dominik Kahun was added to ALLEMAGNE.<br />
[2020-04-01 18:56:28] - Dominik Kahun has been added to ALLEMAGNE.<br />
[2020-04-01 18:56:25] - There's not enough Center players to make a roster for ALLEMAGNE.
There's not enough Left Wing players to make a roster for ALLEMAGNE.
There's not enough Right Wing players to make a roster for ALLEMAGNE.
There's not enough Forward players to make a roster for ALLEMAGNE.
There's not enough Defense players to make a roster for ALLEMAGNE.
There's not enough Goalie players to make a roster for ALLEMAGNE.
Not enough players available for ALLEMAGNE.
<br />
[2020-04-01 18:55:38] - Dominik Kahun was created.<br />
[2020-04-01 18:55:38] - Dominik Kahun average salary was modified from 0 $ to 1 300 000 $.<br />
[2020-04-01 18:53:19] - Dominik Bokk was added to ALLEMAGNE.<br />
[2020-04-01 18:53:17] - Dominik Bokk has been added to ALLEMAGNE.<br />
[2020-04-01 18:53:14] - There's not enough Center players to make a roster for ALLEMAGNE.
There's not enough Left Wing players to make a roster for ALLEMAGNE.
There's not enough Right Wing players to make a roster for ALLEMAGNE.
There's not enough Forward players to make a roster for ALLEMAGNE.
There's not enough Defense players to make a roster for ALLEMAGNE.
There's not enough Goalie players to make a roster for ALLEMAGNE.
Not enough players available for ALLEMAGNE.
<br />
[2020-04-01 18:53:08] - Dominik Bokk was created.<br />
[2020-04-01 18:53:08] - Dominik Bokk average salary was modified from 0 $ to 950 000 $.<br />
[2020-04-01 18:49:37] - Daniel Pietta was added to ALLEMAGNE.<br />
[2020-04-01 18:49:35] - Daniel Pietta has been added to ALLEMAGNE.<br />
[2020-04-01 18:49:32] - There's not enough Center players to make a roster for ALLEMAGNE.
There's not enough Left Wing players to make a roster for ALLEMAGNE.
There's not enough Right Wing players to make a roster for ALLEMAGNE.
There's not enough Forward players to make a roster for ALLEMAGNE.
There's not enough Defense players to make a roster for ALLEMAGNE.
There's not enough Goalie players to make a roster for ALLEMAGNE.
Not enough players available for ALLEMAGNE.
<br />
[2020-04-01 18:49:28] - Daniel Pietta was created.<br />
[2020-04-01 18:49:28] - Daniel Pietta average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-01 18:42:48] - Brooks Macek was added to ALLEMAGNE.<br />
[2020-04-01 18:42:45] - Brooks Macek has been added to ALLEMAGNE.<br />
[2020-04-01 18:42:43] - There's not enough Center players to make a roster for ALLEMAGNE.
There's not enough Left Wing players to make a roster for ALLEMAGNE.
There's not enough Right Wing players to make a roster for ALLEMAGNE.
There's not enough Forward players to make a roster for ALLEMAGNE.
There's not enough Defense players to make a roster for ALLEMAGNE.
There's not enough Goalie players to make a roster for ALLEMAGNE.
Not enough players available for ALLEMAGNE.
<br />
[2020-04-01 18:42:34] - Brooks Macek was created.<br />
[2020-04-01 18:42:34] - Brooks Macek average salary was modified from 0 $ to 1 200 000 $.<br />
[2020-04-01 18:36:49] - ALLEMAGNE hired Marco Sturm for 1 000 000 $ for 2 year(s).<br />
[2020-04-01 18:36:44] - There's not enough Center players to make a roster for ALLEMAGNE.
There's not enough Left Wing players to make a roster for ALLEMAGNE.
There's not enough Right Wing players to make a roster for ALLEMAGNE.
There's not enough Forward players to make a roster for ALLEMAGNE.
There's not enough Defense players to make a roster for ALLEMAGNE.
There's not enough Goalie players to make a roster for ALLEMAGNE.
Not enough players available for ALLEMAGNE.
<br />
[2020-04-01 18:36:38] - Marco Sturm was created.<br />
[2020-04-01 18:32:52] - There's not enough Center players to make a roster for ALLEMAGNE.
There's not enough Left Wing players to make a roster for ALLEMAGNE.
There's not enough Right Wing players to make a roster for ALLEMAGNE.
There's not enough Forward players to make a roster for ALLEMAGNE.
There's not enough Defense players to make a roster for ALLEMAGNE.
There's not enough Goalie players to make a roster for ALLEMAGNE.
Not enough players available for ALLEMAGNE.
<br />
[2020-04-01 18:32:52] - There's not enough Center players to make a roster for FINLANDE.
There's not enough Left Wing players to make a roster for FINLANDE.
There's not enough Right Wing players to make a roster for FINLANDE.
There's not enough Forward players to make a roster for FINLANDE.
There's not enough Defense players to make a roster for FINLANDE.
There's not enough Goalie players to make a roster for FINLANDE.
Not enough players available for FINLANDE.
<br />
[2020-04-01 18:32:51] - There's not enough Center players to make a roster for CANADA.
There's not enough Left Wing players to make a roster for CANADA.
There's not enough Right Wing players to make a roster for CANADA.
There's not enough Forward players to make a roster for CANADA.
There's not enough Defense players to make a roster for CANADA.
There's not enough Goalie players to make a roster for CANADA.
Not enough players available for CANADA.
<br />
[2020-04-01 18:32:51] - There's not enough Center players to make a roster for LETTONIE.
There's not enough Right Wing players to make a roster for LETTONIE.
There's not enough Forward players to make a roster for LETTONIE.
There's not enough Goalie players to make a roster for LETTONIE.
Not enough players available for LETTONIE.
<br />
[2020-04-01 18:32:50] - There's not enough Center players to make a roster for U23 NORTH AMERICA.
There's not enough Left Wing players to make a roster for U23 NORTH AMERICA.
There's not enough Right Wing players to make a roster for U23 NORTH AMERICA.
There's not enough Forward players to make a roster for U23 NORTH AMERICA.
There's not enough Defense players to make a roster for U23 NORTH AMERICA.
There's not enough Goalie players to make a roster for U23 NORTH AMERICA.
Not enough players available for U23 NORTH AMERICA.
<br />
[2020-04-01 18:32:49] - There's not enough Center players to make a roster for TEAM WORLD.
There's not enough Left Wing players to make a roster for TEAM WORLD.
There's not enough Right Wing players to make a roster for TEAM WORLD.
There's not enough Forward players to make a roster for TEAM WORLD.
There's not enough Defense players to make a roster for TEAM WORLD.
There's not enough Goalie players to make a roster for TEAM WORLD.
Not enough players available for TEAM WORLD.
<br />
[2020-04-01 18:32:49] - There's not enough Center players to make a roster for SLOVAQUIE.
There's not enough Left Wing players to make a roster for SLOVAQUIE.
There's not enough Right Wing players to make a roster for SLOVAQUIE.
There's not enough Forward players to make a roster for SLOVAQUIE.
There's not enough Defense players to make a roster for SLOVAQUIE.
There's not enough Goalie players to make a roster for SLOVAQUIE.
Not enough players available for SLOVAQUIE.
<br />
[2020-04-01 18:32:49] - There's not enough Center players to make a roster for ETATS-UNIS.
There's not enough Left Wing players to make a roster for ETATS-UNIS.
There's not enough Right Wing players to make a roster for ETATS-UNIS.
There's not enough Forward players to make a roster for ETATS-UNIS.
There's not enough Defense players to make a roster for ETATS-UNIS.
There's not enough Goalie players to make a roster for ETATS-UNIS.
Not enough players available for ETATS-UNIS.
<br />
[2020-04-01 18:32:48] - There's not enough Center players to make a roster for SUEDE.
There's not enough Left Wing players to make a roster for SUEDE.
There's not enough Right Wing players to make a roster for SUEDE.
There's not enough Forward players to make a roster for SUEDE.
There's not enough Defense players to make a roster for SUEDE.
There's not enough Goalie players to make a roster for SUEDE.
Not enough players available for SUEDE.
<br />
[2020-04-01 18:32:48] - There's not enough Center players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Left Wing players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Right Wing players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Forward players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Defense players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Goalie players to make a roster for REPUBLIQUE TCHEQUE.
Not enough players available for REPUBLIQUE TCHEQUE.
<br />
[2020-04-01 18:32:47] - There's not enough Center players to make a roster for RUSSIE.
There's not enough Left Wing players to make a roster for RUSSIE.
There's not enough Right Wing players to make a roster for RUSSIE.
There's not enough Forward players to make a roster for RUSSIE.
There's not enough Defense players to make a roster for RUSSIE.
There's not enough Goalie players to make a roster for RUSSIE.
Not enough players available for RUSSIE.
<br />
[2020-04-01 18:32:31] - Pro Roster Limit Minimum Forward Value Modified to 9<br />
[2020-04-01 18:32:31] - Pro Roster Limit Minimum Forward Value Modified to 8<br />
[2020-04-01 18:32:31] - Pro Roster Limit Minimum Forward Value Modified to 7<br />
[2020-04-01 18:32:12] - Pro Roster Player Limit Value Modified to 25<br />
[2020-04-01 18:31:52] - SUISSE roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 6 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-04-01 18:31:51] - Michael Fora was added to SUISSE.<br />
[2020-04-01 18:31:49] - Michael Fora has been added to SUISSE.<br />
[2020-04-01 18:31:41] - Michael Fora was created.<br />
[2020-04-01 18:31:41] - Michael Fora average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-01 18:26:19] - Lukas Frick was added to SUISSE.<br />
[2020-04-01 18:26:17] - Lukas Frick has been added to SUISSE.<br />
[2020-04-01 18:26:14] - There's not enough Defense players to make a roster for SUISSE.
<br />
[2020-04-01 18:26:09] - Lukas Frick was created.<br />
[2020-04-01 18:26:09] - Lukas Frick average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-01 18:23:04] - Romain Loeffel was added to SUISSE.<br />
[2020-04-01 18:23:02] - Romain Loeffel has been added to SUISSE.<br />
[2020-04-01 18:23:00] - There's not enough Defense players to make a roster for SUISSE.
<br />
[2020-04-01 18:22:53] - Romain Loeffel was created.<br />
[2020-04-01 18:22:53] - Romain Loeffel average salary was modified from 0 $ to 500 000 $.<br />
[2020-04-01 18:17:22] - Nino Niederreiter was added to SUISSE.<br />
[2020-04-01 18:17:20] - Nino Niederreiter has been added to SUISSE.<br />
[2020-04-01 18:17:17] - There's not enough Defense players to make a roster for SUISSE.
<br />
[2020-04-01 18:17:13] - Nino Niederreiter was created.<br />
[2020-04-01 18:17:13] - Nino Niederreiter average salary was modified from 0 $ to 5 000 000 $.<br />
[2020-04-01 18:15:12] - Sven Baertschi was added to SUISSE.<br />
[2020-04-01 18:15:10] - Sven Baertschi has been added to SUISSE.<br />
[2020-04-01 18:14:59] - Farm Team 3 roster errors : Not enough Players available in Pro Team! 18 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[2020-04-01 18:14:59] - SUISSE roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 6 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-04-01 18:14:57] - There's not enough Defense players to make a roster for SUISSE.
<br />
[2020-04-01 18:14:51] - Sven Baertschi was created.<br />
[2020-04-01 18:14:51] - Sven Baertschi average salary was modified from 0 $ to 5 000 000 $.<br />
[2020-04-01 11:16:28] - There's not enough Center players to make a roster for ALLEMAGNE.
There's not enough Left Wing players to make a roster for ALLEMAGNE.
There's not enough Right Wing players to make a roster for ALLEMAGNE.
There's not enough Forward players to make a roster for ALLEMAGNE.
There's not enough Defense players to make a roster for ALLEMAGNE.
There's not enough Goalie players to make a roster for ALLEMAGNE.
Not enough players available for ALLEMAGNE.
<br />
[2020-04-01 11:16:28] - There's not enough Center players to make a roster for FINLANDE.
There's not enough Left Wing players to make a roster for FINLANDE.
There's not enough Right Wing players to make a roster for FINLANDE.
There's not enough Forward players to make a roster for FINLANDE.
There's not enough Defense players to make a roster for FINLANDE.
There's not enough Goalie players to make a roster for FINLANDE.
Not enough players available for FINLANDE.
<br />
[2020-04-01 11:16:28] - There's not enough Center players to make a roster for CANADA.
There's not enough Left Wing players to make a roster for CANADA.
There's not enough Right Wing players to make a roster for CANADA.
There's not enough Forward players to make a roster for CANADA.
There's not enough Defense players to make a roster for CANADA.
There's not enough Goalie players to make a roster for CANADA.
Not enough players available for CANADA.
<br />
[2020-04-01 11:16:27] - There's not enough Center players to make a roster for LETTONIE.
There's not enough Right Wing players to make a roster for LETTONIE.
There's not enough Goalie players to make a roster for LETTONIE.
Not enough players available for LETTONIE.
<br />
[2020-04-01 11:16:27] - There's not enough Center players to make a roster for U23 NORTH AMERICA.
There's not enough Left Wing players to make a roster for U23 NORTH AMERICA.
There's not enough Right Wing players to make a roster for U23 NORTH AMERICA.
There's not enough Forward players to make a roster for U23 NORTH AMERICA.
There's not enough Defense players to make a roster for U23 NORTH AMERICA.
There's not enough Goalie players to make a roster for U23 NORTH AMERICA.
Not enough players available for U23 NORTH AMERICA.
<br />
[2020-04-01 11:16:27] - There's not enough Center players to make a roster for TEAM WORLD.
There's not enough Left Wing players to make a roster for TEAM WORLD.
There's not enough Right Wing players to make a roster for TEAM WORLD.
There's not enough Forward players to make a roster for TEAM WORLD.
There's not enough Defense players to make a roster for TEAM WORLD.
There's not enough Goalie players to make a roster for TEAM WORLD.
Not enough players available for TEAM WORLD.
<br />
[2020-04-01 11:16:26] - There's not enough Center players to make a roster for SLOVAQUIE.
There's not enough Left Wing players to make a roster for SLOVAQUIE.
There's not enough Right Wing players to make a roster for SLOVAQUIE.
There's not enough Forward players to make a roster for SLOVAQUIE.
There's not enough Defense players to make a roster for SLOVAQUIE.
There's not enough Goalie players to make a roster for SLOVAQUIE.
Not enough players available for SLOVAQUIE.
<br />
[2020-04-01 11:16:26] - There's not enough Center players to make a roster for ETATS-UNIS.
There's not enough Left Wing players to make a roster for ETATS-UNIS.
There's not enough Right Wing players to make a roster for ETATS-UNIS.
There's not enough Forward players to make a roster for ETATS-UNIS.
There's not enough Defense players to make a roster for ETATS-UNIS.
There's not enough Goalie players to make a roster for ETATS-UNIS.
Not enough players available for ETATS-UNIS.
<br />
[2020-04-01 11:16:26] - There's not enough Center players to make a roster for SUEDE.
There's not enough Left Wing players to make a roster for SUEDE.
There's not enough Right Wing players to make a roster for SUEDE.
There's not enough Forward players to make a roster for SUEDE.
There's not enough Defense players to make a roster for SUEDE.
There's not enough Goalie players to make a roster for SUEDE.
Not enough players available for SUEDE.
<br />
[2020-04-01 11:16:25] - There's not enough Defense players to make a roster for SUISSE.
<br />
[2020-04-01 11:16:25] - There's not enough Center players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Left Wing players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Right Wing players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Forward players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Defense players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Goalie players to make a roster for REPUBLIQUE TCHEQUE.
Not enough players available for REPUBLIQUE TCHEQUE.
<br />
[2020-04-01 11:16:24] - There's not enough Center players to make a roster for RUSSIE.
There's not enough Left Wing players to make a roster for RUSSIE.
There's not enough Right Wing players to make a roster for RUSSIE.
There's not enough Forward players to make a roster for RUSSIE.
There's not enough Defense players to make a roster for RUSSIE.
There's not enough Goalie players to make a roster for RUSSIE.
Not enough players available for RUSSIE.
<br />
[2020-04-01 11:15:57] - Farm Team 3 roster errors : Not enough Players available in Pro Team! 18 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[2020-04-01 11:15:57] - SUISSE roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 6 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-04-01 11:15:56] - There's not enough Defense players to make a roster for SUISSE.
<br />
[2020-03-30 16:09:55] - Farm Team 3 roster errors : Not enough Players available in Pro Team! 18 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[2020-03-30 16:09:55] - SUISSE roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 6 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-03-30 16:09:53] - Luca Sbisa was added to SUISSE.<br />
[2020-03-30 16:09:51] - Luca Sbisa has been added to SUISSE.<br />
[2020-03-30 16:09:48] - There's not enough Defense players to make a roster for SUISSE.
<br />
[2020-03-30 16:09:44] - Luca Sbisa was created.<br />
[2020-03-30 16:09:44] - Luca Sbisa average salary was modified from 0 $ to 5 000 000 $.<br />
[2020-03-28 10:50:21] - Farm Team 3 roster errors : Not enough Players available in Pro Team! 17 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[2020-03-28 10:50:21] - SUISSE roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 6 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-03-28 10:50:20] - Gregory Hofmann was added to SUISSE.<br />
[2020-03-28 10:50:18] - Gregory Hofmann has been added to SUISSE.<br />
[2020-03-28 10:50:15] - There's not enough Defense players to make a roster for SUISSE.
<br />
[2020-03-28 10:50:09] - Gregory Hofmann was created.<br />
[2020-03-28 10:50:09] - Gregory Hofmann average salary was modified from 0 $ to 500 000 $.<br />
[2020-03-28 10:46:31] - Farm Team 9 roster errors : Not enough Players available in Pro Team! 14 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[2020-03-28 10:46:31] - LETTONIE roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 6 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-03-28 10:46:30] - There's not enough Center players to make a roster for LETTONIE.
There's not enough Right Wing players to make a roster for LETTONIE.
There's not enough Goalie players to make a roster for LETTONIE.
Not enough players available for LETTONIE.
<br />
[2020-03-28 10:46:27] - Fabrice Herzog was added to SUISSE.<br />
[2020-03-28 10:46:25] - Fabrice Herzog has been added to SUISSE.<br />
[2020-03-28 10:46:22] - There's not enough Defense players to make a roster for SUISSE.
<br />
[2020-03-28 10:46:15] - Fabrice Herzog was created.<br />
[2020-03-28 10:46:15] - Fabrice Herzog average salary was modified from 0 $ to 500 000 $.<br />
[2020-03-28 10:43:19] - Damien Riat was added to SUISSE.<br />
[2020-03-28 10:43:17] - Damien Riat has been added to SUISSE.<br />
[2020-03-28 10:43:14] - There's not enough Defense players to make a roster for SUISSE.
<br />
[2020-03-28 10:43:01] - Damien Riat was created.<br />
[2020-03-28 10:43:01] - Damien Riat average salary was modified from 0 $ to 500 000 $.<br />
[2020-03-28 10:40:38] - Calvin Thurkauf was added to SUISSE.<br />
[2020-03-28 10:40:37] - Calvin Thurkauf has been added to SUISSE.<br />
[2020-03-28 10:40:34] - There's not enough Defense players to make a roster for SUISSE.
<br />
[2020-03-28 10:40:10] - Calvin Thurkauf was created.<br />
[2020-03-28 10:40:10] - Calvin Thurkauf average salary was modified from 0 $ to 500 000 $.<br />
[2020-03-28 10:35:30] - Philipp Kurashev was added to SUISSE.<br />
[2020-03-28 10:35:28] - Philipp Kurashev has been added to SUISSE.<br />
[2020-03-28 10:35:25] - There's not enough Defense players to make a roster for SUISSE.
<br />
[2020-03-28 10:35:10] - Philipp Kurashev was created.<br />
[2020-03-28 10:35:10] - Philipp Kurashev average salary was modified from 0 $ to 500 000 $.<br />
[2020-03-28 10:32:08] - Simon Moser was added to SUISSE.<br />
[2020-03-28 10:32:06] - Simon Moser has been added to SUISSE.<br />
[2020-03-28 10:32:03] - There's not enough Defense players to make a roster for SUISSE.
Not enough players available for SUISSE.
<br />
[2020-03-28 10:31:56] - Simon Moser was created.<br />
[2020-03-28 10:31:56] - Simon Moser average salary was modified from 0 $ to 500 000 $.<br />
[2020-03-28 10:29:20] - Andreas Ambuhl was added to SUISSE.<br />
[2020-03-28 10:29:18] - Andreas Ambuhl has been added to SUISSE.<br />
[2020-03-28 10:29:16] - There's not enough Defense players to make a roster for SUISSE.
Not enough players available for SUISSE.
<br />
[2020-03-28 10:29:10] - Andreas Ambuhl was created.<br />
[2020-03-28 10:29:10] - Andreas Ambuhl average salary was modified from 0 $ to 500 000 $.<br />
[2020-03-28 10:25:50] - Farm Team 3 roster errors : Not enough Players available in Pro Team! 10 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[2020-03-28 10:25:50] - SUISSE roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 6 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-03-28 10:25:50] - There's not enough Defense players to make a roster for SUISSE.
Not enough players available for SUISSE.
<br />
[2020-03-28 10:25:26] - Farm Team 9 roster errors : Not enough Players available in Pro Team! 14 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[2020-03-28 10:25:26] - LETTONIE roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 6 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-03-28 10:25:25] - There's not enough Center players to make a roster for LETTONIE.
There's not enough Right Wing players to make a roster for LETTONIE.
There's not enough Goalie players to make a roster for LETTONIE.
Not enough players available for LETTONIE.
<br />
[2020-03-28 10:25:21] - Vincent Praplan was added to SUISSE.<br />
[2020-03-28 10:25:19] - Vincent Praplan has been added to SUISSE.<br />
[2020-03-28 10:25:16] - There's not enough Defense players to make a roster for SUISSE.
Not enough players available for SUISSE.
<br />
[2020-03-28 10:25:08] - Vincent Praplan was created.<br />
[2020-03-28 10:25:08] - Vincent Praplan average salary was modified from 0 $ to 500 000 $.<br />
[2020-03-28 10:20:50] - Farm Team 3 roster errors : Not enough Players available in Pro Team! 9 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[2020-03-28 10:20:50] - SUISSE roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 6 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-03-28 10:20:48] - Christoph Bertschy was added to SUISSE.<br />
[2020-03-28 10:20:40] - Christoph Bertschy  has been added to SUISSE.<br />
[2020-03-28 10:20:37] - There's not enough Center players to make a roster for SUISSE.
There's not enough Left Wing players to make a roster for SUISSE.
There's not enough Right Wing players to make a roster for SUISSE.
There's not enough Defense players to make a roster for SUISSE.
Not enough players available for SUISSE.
<br />
[2020-03-28 10:20:33] - Christoph Bertschy was created.<br />
[2020-03-28 10:20:33] - Christoph Bertschy average salary was modified from 0 $ to 750 000 $.<br />
[2020-03-28 10:18:20] - Farm Team 3 roster errors : Not enough Players available in Pro Team! 8 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[2020-03-28 10:18:20] - SUISSE roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 6 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-03-28 10:16:32] - Farm Team 3 roster errors : Not enough Players available in Pro Team! 8 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[2020-03-28 10:16:32] - SUISSE roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 6 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-03-28 10:16:31] - There's not enough Center players to make a roster for SUISSE.
There's not enough Left Wing players to make a roster for SUISSE.
There's not enough Right Wing players to make a roster for SUISSE.
There's not enough Defense players to make a roster for SUISSE.
Not enough players available for SUISSE.
<br />
[2020-03-28 10:12:20] - Hide Potential Option Activated<br />
[2020-03-28 10:12:12] - Show Overall Option Deactivated<br />
[2020-03-28 10:11:47] - Farm Team 3 roster errors : Not enough Players available in Pro Team! 8 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[2020-03-28 10:11:47] - SUISSE roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 6 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-03-28 10:11:45] - Nico Hischier was added to SUISSE.<br />
[2020-03-28 10:11:43] - Nico Hischier has been added to SUISSE.<br />
[2020-03-28 10:11:38] - Farm Team 3 roster errors : Not enough Players available in Pro Team! 7 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[2020-03-28 10:11:38] - SUISSE roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 6 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-03-28 10:11:37] - There's not enough Center players to make a roster for SUISSE.
There's not enough Left Wing players to make a roster for SUISSE.
There's not enough Right Wing players to make a roster for SUISSE.
There's not enough Forward players to make a roster for SUISSE.
There's not enough Defense players to make a roster for SUISSE.
Not enough players available for SUISSE.
<br />
[2020-03-28 10:11:33] - Nico Hischier was created.<br />
[2020-03-28 10:11:33] - Nico Hischier average salary was modified from 0 $ to 950 000 $.<br />
[2020-03-26 15:13:05] - Robert Mayer was added to SUISSE.<br />
[2020-03-26 15:13:02] - Robert Mayer has been added to SUISSE.<br />
[2020-03-26 15:12:59] - There's not enough Center players to make a roster for SUISSE.
There's not enough Left Wing players to make a roster for SUISSE.
There's not enough Right Wing players to make a roster for SUISSE.
There's not enough Forward players to make a roster for SUISSE.
There's not enough Defense players to make a roster for SUISSE.
There's not enough Goalie players to make a roster for SUISSE.
Not enough players available for SUISSE.
<br />
[2020-03-26 15:12:55] - Robert Mayer was created.<br />
[2020-03-26 15:12:55] - Robert Mayer average salary was modified from 0 $ to 500 000 $.<br />
[2020-03-26 15:10:54] - Reto Berra was added to SUISSE.<br />
[2020-03-26 15:10:51] - Reto Berra has been added to SUISSE.<br />
[2020-03-26 15:10:48] - There's not enough Center players to make a roster for SUISSE.
There's not enough Left Wing players to make a roster for SUISSE.
There's not enough Right Wing players to make a roster for SUISSE.
There's not enough Forward players to make a roster for SUISSE.
There's not enough Defense players to make a roster for SUISSE.
There's not enough Goalie players to make a roster for SUISSE.
Not enough players available for SUISSE.
<br />
[2020-03-26 15:10:40] - Reto Berra was created.<br />
[2020-03-26 15:10:40] - Reto Berra average salary was modified from 0 $ to 1 500 000 $.<br />
[2020-03-26 15:08:47] - Raphael Diaz was added to SUISSE.<br />
[2020-03-26 15:08:44] - Raphael Diaz has been added to SUISSE.<br />
[2020-03-26 15:08:41] - There's not enough Center players to make a roster for SUISSE.
There's not enough Left Wing players to make a roster for SUISSE.
There's not enough Right Wing players to make a roster for SUISSE.
There's not enough Forward players to make a roster for SUISSE.
There's not enough Defense players to make a roster for SUISSE.
There's not enough Goalie players to make a roster for SUISSE.
Not enough players available for SUISSE.
<br />
[2020-03-26 15:08:33] - Raphael Diaz was created.<br />
[2020-03-26 15:08:33] - Raphael Diaz average salary was modified from 0 $ to 975 000 $.<br />
[2020-03-26 15:04:14] - Mirco Mueller was added to SUISSE.<br />
[2020-03-26 15:04:11] - Mirco Mueller has been added to SUISSE.<br />
[2020-03-26 15:04:08] - There's not enough Center players to make a roster for SUISSE.
There's not enough Left Wing players to make a roster for SUISSE.
There's not enough Right Wing players to make a roster for SUISSE.
There's not enough Forward players to make a roster for SUISSE.
There's not enough Defense players to make a roster for SUISSE.
There's not enough Goalie players to make a roster for SUISSE.
Not enough players available for SUISSE.
<br />
[2020-03-26 15:04:02] - Mirco Mueller was created.<br />
[2020-03-26 15:04:02] - Mirco Mueller average salary was modified from 0 $ to 2 000 000 $.<br />
[2020-03-26 15:02:03] - Yannick Weber was added to SUISSE.<br />
[2020-03-26 15:02:01] - Yannick Weber has been added to SUISSE.<br />
[2020-03-26 15:01:51] - There's not enough Center players to make a roster for SUISSE.
There's not enough Left Wing players to make a roster for SUISSE.
There's not enough Right Wing players to make a roster for SUISSE.
There's not enough Forward players to make a roster for SUISSE.
There's not enough Defense players to make a roster for SUISSE.
There's not enough Goalie players to make a roster for SUISSE.
Not enough players available for SUISSE.
<br />
[2020-03-26 15:01:47] - Yannick Weber was created.<br />
[2020-03-26 15:01:47] - Yannick Weber average salary was modified from 0 $ to 950 000 $.<br />
[2020-03-26 14:56:51] - Noah Rod was added to SUISSE.<br />
[2020-03-26 14:56:48] - Noah Rod has been added to SUISSE.<br />
[2020-03-26 14:56:45] - There's not enough Center players to make a roster for SUISSE.
There's not enough Left Wing players to make a roster for SUISSE.
There's not enough Right Wing players to make a roster for SUISSE.
There's not enough Forward players to make a roster for SUISSE.
There's not enough Defense players to make a roster for SUISSE.
There's not enough Goalie players to make a roster for SUISSE.
Not enough players available for SUISSE.
<br />
[2020-03-26 14:56:40] - Noah Rod was created.<br />
[2020-03-26 14:56:40] - Noah Rod average salary was modified from 0 $ to 1 000 000 $.<br />
[2020-03-26 14:54:06] - Damien Brunner was added to SUISSE.<br />
[2020-03-26 14:54:04] - Damien Brunner has been added to SUISSE.<br />
[2020-03-26 14:54:01] - There's not enough Center players to make a roster for SUISSE.
There's not enough Left Wing players to make a roster for SUISSE.
There's not enough Right Wing players to make a roster for SUISSE.
There's not enough Forward players to make a roster for SUISSE.
There's not enough Defense players to make a roster for SUISSE.
There's not enough Goalie players to make a roster for SUISSE.
Not enough players available for SUISSE.
<br />
[2020-03-26 14:53:55] - Damien Brunner was created.<br />
[2020-03-26 14:53:55] - Damien Brunner average salary was modified from 0 $ to 500 000 $.<br />
[2020-03-26 14:20:08] - There's not enough Center players to make a roster for LETTONIE.
There's not enough Right Wing players to make a roster for LETTONIE.
There's not enough Goalie players to make a roster for LETTONIE.
Not enough players available for LETTONIE.
<br />
[2020-03-26 14:19:26] - Gustavs Davis Grigals was created.<br />
[2020-03-26 14:19:26] - Gustavs Davis Grigals average salary was modified from 0 $ to 500 000 $.<br />
[2020-03-26 14:17:04] - Farm Team 9 roster errors : Not enough Players available in Pro Team! 14 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[2020-03-26 14:17:04] - LETTONIE roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 6 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-03-26 14:17:04] - There's not enough Center players to make a roster for LETTONIE.
There's not enough Right Wing players to make a roster for LETTONIE.
There's not enough Goalie players to make a roster for LETTONIE.
Not enough players available for LETTONIE.
<br />
[2020-03-26 14:11:46] - Kristaps Sotnieks was added to LETTONIE.<br />
[2020-03-26 14:11:44] - Kristaps Sotnieks has been added to LETTONIE.<br />
[2020-03-26 14:11:41] - There's not enough Center players to make a roster for LETTONIE.
There's not enough Right Wing players to make a roster for LETTONIE.
There's not enough Goalie players to make a roster for LETTONIE.
Not enough players available for LETTONIE.
<br />
[2020-03-26 14:11:35] - Kristaps Sotnieks was created.<br />
[2020-03-26 14:11:35] - Kristaps Sotnieks average salary was modified from 0 $ to 500 000 $.<br />
[2020-03-26 14:08:39] - Uvis Janis Balinskis was added to LETTONIE.<br />
[2020-03-26 14:08:36] - Uvis Janis Balinskis has been added to LETTONIE.<br />
[2020-03-26 14:08:33] - There's not enough Center players to make a roster for LETTONIE.
There's not enough Right Wing players to make a roster for LETTONIE.
There's not enough Defense players to make a roster for LETTONIE.
There's not enough Goalie players to make a roster for LETTONIE.
Not enough players available for LETTONIE.
<br />
[2020-03-26 14:08:27] - Uvis Janis Balinskis was created.<br />
[2020-03-26 14:08:27] - Uvis Janis Balinskis average salary was modified from 0 $ to 500 000 $.<br />
[2020-03-26 07:00:40] - Kristaps Zile was added to LETTONIE.<br />
[2020-03-26 07:00:38] - Kristaps Zile has been added to LETTONIE.<br />
[2020-03-26 07:00:35] - There's not enough Center players to make a roster for LETTONIE.
There's not enough Right Wing players to make a roster for LETTONIE.
There's not enough Defense players to make a roster for LETTONIE.
There's not enough Goalie players to make a roster for LETTONIE.
Not enough players available for LETTONIE.
<br />
[2020-03-26 07:00:26] - Kristaps Zile was created.<br />
[2020-03-26 07:00:26] - Kristaps Zile average salary was modified from 0 $ to 500 000 $.<br />
[2020-03-26 06:57:35] - Oskars Cibulskis was added to LETTONIE.<br />
[2020-03-26 06:57:29] - Oskars Cibulskis has been added to LETTONIE.<br />
[2020-03-26 06:57:26] - There's not enough Center players to make a roster for LETTONIE.
There's not enough Right Wing players to make a roster for LETTONIE.
There's not enough Defense players to make a roster for LETTONIE.
There's not enough Goalie players to make a roster for LETTONIE.
Not enough players available for LETTONIE.
<br />
[2020-03-26 06:57:20] - Oskars Cibulskis was created.<br />
[2020-03-26 06:57:20] - Oskars Cibulskis average salary was modified from 0 $ to 500 000 $.<br />
[2020-03-26 06:49:56] - Kalvis Ozols was added to LETTONIE.<br />
[2020-03-26 06:49:53] - Kalvis Ozols has been added to LETTONIE.<br />
[2020-03-26 06:49:50] - There's not enough Center players to make a roster for LETTONIE.
There's not enough Right Wing players to make a roster for LETTONIE.
There's not enough Defense players to make a roster for LETTONIE.
There's not enough Goalie players to make a roster for LETTONIE.
Not enough players available for LETTONIE.
<br />
[2020-03-26 06:49:39] - Kalvis Ozols was created.<br />
[2020-03-26 06:49:39] - Kalvis Ozols average salary was modified from 0 $ to 500 000 $.<br />
[2020-03-26 06:45:50] - Janis Jaks was added to LETTONIE.<br />
[2020-03-26 06:45:47] - Janis Jaks has been added to LETTONIE.<br />
[2020-03-26 06:45:44] - There's not enough Center players to make a roster for LETTONIE.
There's not enough Right Wing players to make a roster for LETTONIE.
There's not enough Defense players to make a roster for LETTONIE.
There's not enough Goalie players to make a roster for LETTONIE.
Not enough players available for LETTONIE.
<br />
[2020-03-26 06:45:18] - Janis Jaks was created.<br />
[2020-03-26 06:45:18] - Janis Jaks average salary was modified from 0 $ to 500 000 $.<br />
[2020-03-26 06:30:52] - There's not enough Center players to make a roster for SUISSE.
There's not enough Left Wing players to make a roster for SUISSE.
There's not enough Right Wing players to make a roster for SUISSE.
There's not enough Forward players to make a roster for SUISSE.
There's not enough Defense players to make a roster for SUISSE.
There's not enough Goalie players to make a roster for SUISSE.
Not enough players available for SUISSE.
<br />
[2020-03-26 06:30:48] - LETTONIE hired Aldis Girgensons for 500 000 $ for 1 year(s).<br />
[2020-03-26 06:30:44] - There's not enough Center players to make a roster for LETTONIE.
There's not enough Right Wing players to make a roster for LETTONIE.
There's not enough Defense players to make a roster for LETTONIE.
There's not enough Goalie players to make a roster for LETTONIE.
Not enough players available for LETTONIE.
<br />
[2020-03-26 06:30:39] - Aldis Girgensons was created.<br />
[2020-03-26 06:25:28] - Farm Team 9 roster errors : Not enough Players available in Pro Team! 8 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[2020-03-26 06:25:28] - LETTONIE roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 6 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-03-26 06:25:27] - There's not enough Center players to make a roster for LETTONIE.
There's not enough Right Wing players to make a roster for LETTONIE.
There's not enough Defense players to make a roster for LETTONIE.
There's not enough Goalie players to make a roster for LETTONIE.
Not enough players available for LETTONIE.
<br />
[2020-03-26 06:24:50] - Farm Team 9 roster errors : Not enough Players available in Pro Team! 8 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[2020-03-26 06:24:50] - LETTONIE roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 6 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-03-26 06:24:47] - Emils Gegeris was added to LETTONIE.<br />
[2020-03-26 06:24:45] - Emils Gegeris has been added to LETTONIE.<br />
[2020-03-26 06:24:41] - There's not enough Center players to make a roster for LETTONIE.
There's not enough Right Wing players to make a roster for LETTONIE.
There's not enough Defense players to make a roster for LETTONIE.
There's not enough Goalie players to make a roster for LETTONIE.
Not enough players available for LETTONIE.
<br />
[2020-03-26 06:24:31] - Emils Gegeris was created.<br />
[2020-03-26 06:24:31] - Emils Gegeris average salary was modified from 0 $ to 500 000 $.<br />
[2020-03-26 06:21:19] - Lauris Darzins was added to LETTONIE.<br />
[2020-03-26 06:21:16] - Lauris Darzins has been added to LETTONIE.<br />
[2020-03-26 06:21:14] - There's not enough Center players to make a roster for LETTONIE.
There's not enough Right Wing players to make a roster for LETTONIE.
There's not enough Forward players to make a roster for LETTONIE.
There's not enough Defense players to make a roster for LETTONIE.
There's not enough Goalie players to make a roster for LETTONIE.
Not enough players available for LETTONIE.
<br />
[2020-03-26 06:21:03] - Lauris Darzins was created.<br />
[2020-03-26 06:21:03] - Lauris Darzins average salary was modified from 0 $ to 500 000 $.<br />
[2020-03-26 06:17:28] - Mareks Mitens was added to LETTONIE.<br />
[2020-03-26 06:17:26] - Mareks Mitens has been added to LETTONIE.<br />
[2020-03-26 06:17:22] - There's not enough Center players to make a roster for LETTONIE.
There's not enough Right Wing players to make a roster for LETTONIE.
There's not enough Forward players to make a roster for LETTONIE.
There's not enough Defense players to make a roster for LETTONIE.
There's not enough Goalie players to make a roster for LETTONIE.
Not enough players available for LETTONIE.
<br />
[2020-03-26 06:17:18] - Mareks Mitens was created.<br />
[2020-03-26 06:17:18] - Mareks Mitens average salary was modified from 0 $ to 1 200 000 $.<br />
[2020-03-26 06:15:58] - Karlis Cukste was added to LETTONIE.<br />
[2020-03-26 06:15:55] - Karlis Cukste has been added to LETTONIE.<br />
[2020-03-26 06:15:49] - There's not enough Center players to make a roster for LETTONIE.
There's not enough Right Wing players to make a roster for LETTONIE.
There's not enough Forward players to make a roster for LETTONIE.
There's not enough Defense players to make a roster for LETTONIE.
There's not enough Goalie players to make a roster for LETTONIE.
Not enough players available for LETTONIE.
<br />
[2020-03-26 06:15:45] - Karlis Cukste was created.<br />
[2020-03-26 06:15:45] - Karlis Cukste average salary was modified from 0 $ to 1 500 000 $.<br />
[2020-03-26 06:12:43] - Rodrigo Abols was added to LETTONIE.<br />
[2020-03-26 06:12:40] - Rodrigo Abols has been added to LETTONIE.<br />
[2020-03-26 06:12:35] - There's not enough Center players to make a roster for LETTONIE.
There's not enough Right Wing players to make a roster for LETTONIE.
There's not enough Forward players to make a roster for LETTONIE.
There's not enough Defense players to make a roster for LETTONIE.
There's not enough Goalie players to make a roster for LETTONIE.
Not enough players available for LETTONIE.
<br />
[2020-03-26 06:12:31] - Rodrigo Abols was created.<br />
[2020-03-26 06:12:31] - Rodrigo Abols average salary was modified from 0 $ to 1 500 000 $.<br />
[2020-03-26 06:09:44] - Farm Team 9 roster errors : Not enough Players available in Pro Team! 3 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[2020-03-26 06:09:44] - LETTONIE roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 6 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-03-26 06:09:43] - Ronalds Kenins was added to LETTONIE.<br />
[2020-03-26 06:09:37] - Ronalds Kenins has been added to LETTONIE.<br />
[2020-03-26 06:09:33] - There's not enough Center players to make a roster for LETTONIE.
There's not enough Left Wing players to make a roster for LETTONIE.
There's not enough Right Wing players to make a roster for LETTONIE.
There's not enough Forward players to make a roster for LETTONIE.
There's not enough Defense players to make a roster for LETTONIE.
There's not enough Goalie players to make a roster for LETTONIE.
Not enough players available for LETTONIE.
<br />
[2020-03-26 06:09:29] - Ronalds Kenins was created.<br />
[2020-03-26 06:09:29] - Ronalds Kenins average salary was modified from 0 $ to 2 000 000 $.<br />
[2020-03-26 06:07:40] - Farm Team 9 roster errors : Not enough Players available in Pro Team! 2 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[2020-03-26 06:07:40] - LETTONIE roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 6 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-03-26 06:07:38] - Rudolfs Balcers was added to LETTONIE.<br />
[2020-03-26 06:07:36] - Rudolfs Balcers has been added to LETTONIE.<br />
[2020-03-26 06:07:32] - There's not enough Center players to make a roster for LETTONIE.
There's not enough Left Wing players to make a roster for LETTONIE.
There's not enough Right Wing players to make a roster for LETTONIE.
There's not enough Forward players to make a roster for LETTONIE.
There's not enough Defense players to make a roster for LETTONIE.
There's not enough Goalie players to make a roster for LETTONIE.
Not enough players available for LETTONIE.
<br />
[2020-03-26 06:07:28] - Rudolfs Balcers was created.<br />
[2020-03-26 06:07:28] - Rudolfs Balcers average salary was modified from 0 $ to 950 000 $.<br />
[2020-03-26 06:06:19] - Unknown Player average salary was modified from 0 $ to 0 $.<br />
[2020-03-26 06:05:23] - Farm Team 9 roster errors : Not enough Players available in Pro Team! 1 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[2020-03-26 06:05:23] - LETTONIE roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 6 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-03-26 06:05:21] - Nikita Jevpalovs was added to LETTONIE.<br />
[2020-03-26 06:05:18] - Nikita Jevpalovs has been added to LETTONIE.<br />
[2020-03-26 06:05:04] - There's not enough Center players to make a roster for LETTONIE.
There's not enough Left Wing players to make a roster for LETTONIE.
There's not enough Right Wing players to make a roster for LETTONIE.
There's not enough Forward players to make a roster for LETTONIE.
There's not enough Defense players to make a roster for LETTONIE.
There's not enough Goalie players to make a roster for LETTONIE.
Not enough players available for LETTONIE.
<br />
[2020-03-26 06:04:56] - There's not enough Center players to make a roster for LETTONIE.
There's not enough Left Wing players to make a roster for LETTONIE.
There's not enough Right Wing players to make a roster for LETTONIE.
There's not enough Forward players to make a roster for LETTONIE.
There's not enough Defense players to make a roster for LETTONIE.
There's not enough Goalie players to make a roster for LETTONIE.
Not enough players available for LETTONIE.
<br />
[2020-03-26 06:04:19] - Farm Team 9 roster errors : Not enough Players available in Pro Team! 0 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[2020-03-26 06:04:19] - LETTONIE roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 6 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-03-26 06:04:18] - There's not enough Center players to make a roster for LETTONIE.
There's not enough Left Wing players to make a roster for LETTONIE.
There's not enough Right Wing players to make a roster for LETTONIE.
There's not enough Forward players to make a roster for LETTONIE.
There's not enough Defense players to make a roster for LETTONIE.
There's not enough Goalie players to make a roster for LETTONIE.
Not enough players available for LETTONIE.
<br />
[2020-03-26 06:03:27] - Nikita Jevpalovs was created.<br />
[2020-03-26 06:03:27] - Nikita Jevpalovs average salary was modified from 0 $ to 1 200 000 $.<br />
[2020-03-26 06:02:32] - Unknown Player average salary was modified from 0 $ to 0 $.<br />
[2020-03-24 18:56:01] - There's not enough Center players to make a roster for ALLEMAGNE.
There's not enough Left Wing players to make a roster for ALLEMAGNE.
There's not enough Right Wing players to make a roster for ALLEMAGNE.
There's not enough Forward players to make a roster for ALLEMAGNE.
There's not enough Defense players to make a roster for ALLEMAGNE.
There's not enough Goalie players to make a roster for ALLEMAGNE.
Not enough players available for ALLEMAGNE.
<br />
[2020-03-24 18:56:00] - There's not enough Center players to make a roster for FINLANDE.
There's not enough Left Wing players to make a roster for FINLANDE.
There's not enough Right Wing players to make a roster for FINLANDE.
There's not enough Forward players to make a roster for FINLANDE.
There's not enough Defense players to make a roster for FINLANDE.
There's not enough Goalie players to make a roster for FINLANDE.
Not enough players available for FINLANDE.
<br />
[2020-03-24 18:56:00] - There's not enough Center players to make a roster for CANADA.
There's not enough Left Wing players to make a roster for CANADA.
There's not enough Right Wing players to make a roster for CANADA.
There's not enough Forward players to make a roster for CANADA.
There's not enough Defense players to make a roster for CANADA.
There's not enough Goalie players to make a roster for CANADA.
Not enough players available for CANADA.
<br />
[2020-03-24 18:56:00] - There's not enough Center players to make a roster for LETTONIE.
There's not enough Left Wing players to make a roster for LETTONIE.
There's not enough Right Wing players to make a roster for LETTONIE.
There's not enough Forward players to make a roster for LETTONIE.
There's not enough Defense players to make a roster for LETTONIE.
There's not enough Goalie players to make a roster for LETTONIE.
Not enough players available for LETTONIE.
<br />
[2020-03-24 18:55:59] - There's not enough Center players to make a roster for U23 NORTH AMERICA.
There's not enough Left Wing players to make a roster for U23 NORTH AMERICA.
There's not enough Right Wing players to make a roster for U23 NORTH AMERICA.
There's not enough Forward players to make a roster for U23 NORTH AMERICA.
There's not enough Defense players to make a roster for U23 NORTH AMERICA.
There's not enough Goalie players to make a roster for U23 NORTH AMERICA.
Not enough players available for U23 NORTH AMERICA.
<br />
[2020-03-24 18:55:59] - There's not enough Center players to make a roster for TEAM WORLD.
There's not enough Left Wing players to make a roster for TEAM WORLD.
There's not enough Right Wing players to make a roster for TEAM WORLD.
There's not enough Forward players to make a roster for TEAM WORLD.
There's not enough Defense players to make a roster for TEAM WORLD.
There's not enough Goalie players to make a roster for TEAM WORLD.
Not enough players available for TEAM WORLD.
<br />
[2020-03-24 18:55:59] - There's not enough Center players to make a roster for SLOVAQUIE.
There's not enough Left Wing players to make a roster for SLOVAQUIE.
There's not enough Right Wing players to make a roster for SLOVAQUIE.
There's not enough Forward players to make a roster for SLOVAQUIE.
There's not enough Defense players to make a roster for SLOVAQUIE.
There's not enough Goalie players to make a roster for SLOVAQUIE.
Not enough players available for SLOVAQUIE.
<br />
[2020-03-24 18:55:58] - There's not enough Center players to make a roster for ETATS-UNIS.
There's not enough Left Wing players to make a roster for ETATS-UNIS.
There's not enough Right Wing players to make a roster for ETATS-UNIS.
There's not enough Forward players to make a roster for ETATS-UNIS.
There's not enough Defense players to make a roster for ETATS-UNIS.
There's not enough Goalie players to make a roster for ETATS-UNIS.
Not enough players available for ETATS-UNIS.
<br />
[2020-03-24 18:55:58] - There's not enough Center players to make a roster for SUEDE.
There's not enough Left Wing players to make a roster for SUEDE.
There's not enough Right Wing players to make a roster for SUEDE.
There's not enough Forward players to make a roster for SUEDE.
There's not enough Defense players to make a roster for SUEDE.
There's not enough Goalie players to make a roster for SUEDE.
Not enough players available for SUEDE.
<br />
[2020-03-24 18:55:58] - There's not enough Center players to make a roster for SUISSE.
There's not enough Left Wing players to make a roster for SUISSE.
There's not enough Right Wing players to make a roster for SUISSE.
There's not enough Forward players to make a roster for SUISSE.
There's not enough Defense players to make a roster for SUISSE.
There's not enough Goalie players to make a roster for SUISSE.
Not enough players available for SUISSE.
<br />
[2020-03-24 18:55:57] - There's not enough Center players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Left Wing players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Right Wing players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Forward players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Defense players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Goalie players to make a roster for REPUBLIQUE TCHEQUE.
Not enough players available for REPUBLIQUE TCHEQUE.
<br />
[2020-03-24 18:55:57] - There's not enough Center players to make a roster for RUSSIE.
There's not enough Left Wing players to make a roster for RUSSIE.
There's not enough Right Wing players to make a roster for RUSSIE.
There's not enough Forward players to make a roster for RUSSIE.
There's not enough Defense players to make a roster for RUSSIE.
There's not enough Goalie players to make a roster for RUSSIE.
Not enough players available for RUSSIE.
<br />
[2020-03-24 18:55:46] - SUISSE hired Christian Wohlwend for 500 000 $ for 1 year(s).<br />
[2020-03-24 18:55:41] - There's not enough Center players to make a roster for SUISSE.
There's not enough Left Wing players to make a roster for SUISSE.
There's not enough Right Wing players to make a roster for SUISSE.
There's not enough Forward players to make a roster for SUISSE.
There's not enough Defense players to make a roster for SUISSE.
There's not enough Goalie players to make a roster for SUISSE.
Not enough players available for SUISSE.
<br />
[2020-03-24 18:55:34] - Christian Wohlwend was created.<br />
[2020-03-24 18:54:19] - There's not enough Center players to make a roster for TEAM WORLD.
There's not enough Left Wing players to make a roster for TEAM WORLD.
There's not enough Right Wing players to make a roster for TEAM WORLD.
There's not enough Forward players to make a roster for TEAM WORLD.
There's not enough Defense players to make a roster for TEAM WORLD.
There's not enough Goalie players to make a roster for TEAM WORLD.
Not enough players available for TEAM WORLD.
<br />
[2020-03-24 18:54:10] - There's not enough Center players to make a roster for FINLANDE.
There's not enough Left Wing players to make a roster for FINLANDE.
There's not enough Right Wing players to make a roster for FINLANDE.
There's not enough Forward players to make a roster for FINLANDE.
There's not enough Defense players to make a roster for FINLANDE.
There's not enough Goalie players to make a roster for FINLANDE.
Not enough players available for FINLANDE.
<br />
[2020-03-24 18:54:03] - There's not enough Center players to make a roster for ETATS-UNIS.
There's not enough Left Wing players to make a roster for ETATS-UNIS.
There's not enough Right Wing players to make a roster for ETATS-UNIS.
There's not enough Forward players to make a roster for ETATS-UNIS.
There's not enough Defense players to make a roster for ETATS-UNIS.
There's not enough Goalie players to make a roster for ETATS-UNIS.
Not enough players available for ETATS-UNIS.
<br />
[2020-03-24 18:53:51] - There's not enough Center players to make a roster for SUISSE.
There's not enough Left Wing players to make a roster for SUISSE.
There's not enough Right Wing players to make a roster for SUISSE.
There's not enough Forward players to make a roster for SUISSE.
There's not enough Defense players to make a roster for SUISSE.
There's not enough Goalie players to make a roster for SUISSE.
Not enough players available for SUISSE.
<br />
[2020-03-24 18:53:42] - There's not enough Center players to make a roster for RUSSIE.
There's not enough Left Wing players to make a roster for RUSSIE.
There's not enough Right Wing players to make a roster for RUSSIE.
There's not enough Forward players to make a roster for RUSSIE.
There's not enough Defense players to make a roster for RUSSIE.
There's not enough Goalie players to make a roster for RUSSIE.
Not enough players available for RUSSIE.
<br />
[2020-03-24 18:53:29] - There's not enough Center players to make a roster for LETTONIE.
There's not enough Left Wing players to make a roster for LETTONIE.
There's not enough Right Wing players to make a roster for LETTONIE.
There's not enough Forward players to make a roster for LETTONIE.
There's not enough Defense players to make a roster for LETTONIE.
There's not enough Goalie players to make a roster for LETTONIE.
Not enough players available for LETTONIE.
<br />
[2020-03-24 18:53:20] - There's not enough Center players to make a roster for U23 NORTH AMERICA.
There's not enough Left Wing players to make a roster for U23 NORTH AMERICA.
There's not enough Right Wing players to make a roster for U23 NORTH AMERICA.
There's not enough Forward players to make a roster for U23 NORTH AMERICA.
There's not enough Defense players to make a roster for U23 NORTH AMERICA.
There's not enough Goalie players to make a roster for U23 NORTH AMERICA.
Not enough players available for U23 NORTH AMERICA.
<br />
[2020-03-24 18:53:03] - There's not enough Center players to make a roster for SLOVAQUIE.
There's not enough Left Wing players to make a roster for SLOVAQUIE.
There's not enough Right Wing players to make a roster for SLOVAQUIE.
There's not enough Forward players to make a roster for SLOVAQUIE.
There's not enough Defense players to make a roster for SLOVAQUIE.
There's not enough Goalie players to make a roster for SLOVAQUIE.
Not enough players available for SLOVAQUIE.
<br />
[2020-03-24 18:52:54] - There's not enough Center players to make a roster for ALLEMAGNE.
There's not enough Left Wing players to make a roster for ALLEMAGNE.
There's not enough Right Wing players to make a roster for ALLEMAGNE.
There's not enough Forward players to make a roster for ALLEMAGNE.
There's not enough Defense players to make a roster for ALLEMAGNE.
There's not enough Goalie players to make a roster for ALLEMAGNE.
Not enough players available for ALLEMAGNE.
<br />
[2020-03-24 18:52:42] - There's not enough Center players to make a roster for SUEDE.
There's not enough Left Wing players to make a roster for SUEDE.
There's not enough Right Wing players to make a roster for SUEDE.
There's not enough Forward players to make a roster for SUEDE.
There's not enough Defense players to make a roster for SUEDE.
There's not enough Goalie players to make a roster for SUEDE.
Not enough players available for SUEDE.
<br />
[2020-03-24 18:52:36] - There's not enough Center players to make a roster for CANADA.
There's not enough Left Wing players to make a roster for CANADA.
There's not enough Right Wing players to make a roster for CANADA.
There's not enough Forward players to make a roster for CANADA.
There's not enough Defense players to make a roster for CANADA.
There's not enough Goalie players to make a roster for CANADA.
Not enough players available for CANADA.
<br />
[2020-03-24 18:52:24] - There's not enough Center players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Left Wing players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Right Wing players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Forward players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Defense players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Goalie players to make a roster for REPUBLIQUE TCHEQUE.
Not enough players available for REPUBLIQUE TCHEQUE.
<br />
[2020-03-24 18:52:09] - There's not enough Center players to make a roster for CANADA.
There's not enough Left Wing players to make a roster for CANADA.
There's not enough Right Wing players to make a roster for CANADA.
There's not enough Forward players to make a roster for CANADA.
There's not enough Defense players to make a roster for CANADA.
There's not enough Goalie players to make a roster for CANADA.
Not enough players available for CANADA.
<br />
[2020-03-24 17:46:55] - There's not enough Center players to make a roster for ALLEMAGNE.
There's not enough Left Wing players to make a roster for ALLEMAGNE.
There's not enough Right Wing players to make a roster for ALLEMAGNE.
There's not enough Forward players to make a roster for ALLEMAGNE.
There's not enough Defense players to make a roster for ALLEMAGNE.
There's not enough Goalie players to make a roster for ALLEMAGNE.
Not enough players available for ALLEMAGNE.
<br />
[2020-03-24 17:46:54] - There's not enough Center players to make a roster for FINLANDE.
There's not enough Left Wing players to make a roster for FINLANDE.
There's not enough Right Wing players to make a roster for FINLANDE.
There's not enough Forward players to make a roster for FINLANDE.
There's not enough Defense players to make a roster for FINLANDE.
There's not enough Goalie players to make a roster for FINLANDE.
Not enough players available for FINLANDE.
<br />
[2020-03-24 17:46:53] - There's not enough Center players to make a roster for CANADA.
There's not enough Left Wing players to make a roster for CANADA.
There's not enough Right Wing players to make a roster for CANADA.
There's not enough Forward players to make a roster for CANADA.
There's not enough Defense players to make a roster for CANADA.
There's not enough Goalie players to make a roster for CANADA.
Not enough players available for CANADA.
<br />
[2020-03-24 17:46:52] - There's not enough Center players to make a roster for LETTONIE.
There's not enough Left Wing players to make a roster for LETTONIE.
There's not enough Right Wing players to make a roster for LETTONIE.
There's not enough Forward players to make a roster for LETTONIE.
There's not enough Defense players to make a roster for LETTONIE.
There's not enough Goalie players to make a roster for LETTONIE.
Not enough players available for LETTONIE.
<br />
[2020-03-24 17:46:52] - There's not enough Center players to make a roster for U23 NORTH AMERICA.
There's not enough Left Wing players to make a roster for U23 NORTH AMERICA.
There's not enough Right Wing players to make a roster for U23 NORTH AMERICA.
There's not enough Forward players to make a roster for U23 NORTH AMERICA.
There's not enough Defense players to make a roster for U23 NORTH AMERICA.
There's not enough Goalie players to make a roster for U23 NORTH AMERICA.
Not enough players available for U23 NORTH AMERICA.
<br />
[2020-03-24 17:46:51] - There's not enough Center players to make a roster for TEAM WORLD.
There's not enough Left Wing players to make a roster for TEAM WORLD.
There's not enough Right Wing players to make a roster for TEAM WORLD.
There's not enough Forward players to make a roster for TEAM WORLD.
There's not enough Defense players to make a roster for TEAM WORLD.
There's not enough Goalie players to make a roster for TEAM WORLD.
Not enough players available for TEAM WORLD.
<br />
[2020-03-24 17:46:51] - There's not enough Center players to make a roster for SLOVAQUIE.
There's not enough Left Wing players to make a roster for SLOVAQUIE.
There's not enough Right Wing players to make a roster for SLOVAQUIE.
There's not enough Forward players to make a roster for SLOVAQUIE.
There's not enough Defense players to make a roster for SLOVAQUIE.
There's not enough Goalie players to make a roster for SLOVAQUIE.
Not enough players available for SLOVAQUIE.
<br />
[2020-03-24 17:46:50] - There's not enough Center players to make a roster for ETATS-UNIS.
There's not enough Left Wing players to make a roster for ETATS-UNIS.
There's not enough Right Wing players to make a roster for ETATS-UNIS.
There's not enough Forward players to make a roster for ETATS-UNIS.
There's not enough Defense players to make a roster for ETATS-UNIS.
There's not enough Goalie players to make a roster for ETATS-UNIS.
Not enough players available for ETATS-UNIS.
<br />
[2020-03-24 17:46:50] - There's not enough Center players to make a roster for SUEDE.
There's not enough Left Wing players to make a roster for SUEDE.
There's not enough Right Wing players to make a roster for SUEDE.
There's not enough Forward players to make a roster for SUEDE.
There's not enough Defense players to make a roster for SUEDE.
There's not enough Goalie players to make a roster for SUEDE.
Not enough players available for SUEDE.
<br />
[2020-03-24 17:46:49] - There's not enough Center players to make a roster for SUISSE.
There's not enough Left Wing players to make a roster for SUISSE.
There's not enough Right Wing players to make a roster for SUISSE.
There's not enough Forward players to make a roster for SUISSE.
There's not enough Defense players to make a roster for SUISSE.
There's not enough Goalie players to make a roster for SUISSE.
Not enough players available for SUISSE.
<br />
[2020-03-24 17:46:49] - There's not enough Center players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Left Wing players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Right Wing players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Forward players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Defense players to make a roster for REPUBLIQUE TCHEQUE.
There's not enough Goalie players to make a roster for REPUBLIQUE TCHEQUE.
Not enough players available for REPUBLIQUE TCHEQUE.
<br />
[2020-03-24 17:46:48] - There's not enough Center players to make a roster for RUSSIE.
There's not enough Left Wing players to make a roster for RUSSIE.
There's not enough Right Wing players to make a roster for RUSSIE.
There's not enough Forward players to make a roster for RUSSIE.
There's not enough Defense players to make a roster for RUSSIE.
There's not enough Goalie players to make a roster for RUSSIE.
Not enough players available for RUSSIE.
<br />
[2020-03-24 17:38:41] - Farm Team 3 roster errors : Not enough Players available in Pro Team! 0 Dressed. 20 Required.
Some errors will be automatically fixed.
<br />
[2020-03-24 17:38:41] - SUISSE roster errors : Not enough Centers available in Pro Team! 0 Dressed. 3 Required.
Not enough Left Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Right Wings available in Pro Team! 0 Dressed. 3 Required.
Not enough Forward available in Pro Team! 0 Dressed. 6 Required.
Not enough Defenseman available in Pro Team! 0 Dressed. 6 Required.
Not enough Goalie available in Pro Team! 0 Dressed. 2 Required.
Not enough Players available in Pro Team! 0 Dressed. 18 Required.
Some errors will be automatically fixed.
<br />
[2020-03-24 17:38:40] - There's not enough Center players to make a roster for SUISSE.
There's not enough Left Wing players to make a roster for SUISSE.
There's not enough Right Wing players to make a roster for SUISSE.
There's not enough Forward players to make a roster for SUISSE.
There's not enough Defense players to make a roster for SUISSE.
There's not enough Goalie players to make a roster for SUISSE.
Not enough players available for SUISSE.
<br />
[2020-03-24 17:38:15] - Season #2020 has started!<br />
[2020-03-24 17:38:06] - Pro Schedule has been created.<br />
[2020-01-21 11:48:08] - Farm Simulating Engine is now version 1.5<br />
[2020-01-21 11:48:07] - Pro Simulating Engine is now version 1.5<br />
[2020-01-21 11:47:55] - The IHWC2020 was created successfully!<br />
[2020-01-21 11:47:55] - 0 Referees were imported correctly!<br />
[2020-01-21 11:47:54] - 0 Coaches were imported correctly!<br />
[2020-01-21 11:47:54] - 0 Players were imported correctly!<br />
[2020-01-21 11:47:53] - Creator Comment is Based on ASHL league rating<br />
[2020-01-21 11:47:53] - Creator is Simon Brassard<br />
<?php include "Footer.php";?>

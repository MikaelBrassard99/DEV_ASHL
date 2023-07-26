<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>CMHJ - Team History</title>
<script src="CMHJ-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.6.6 - CMHJ-STHS.db - CMHJ-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
</head><body>
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"CMHJ-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"CMHJ-STHSCareerStat.db";
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 1; /* Show Webpage Top Menu */
include "Menu.php";?>
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#Allemagne">Allemagne</a> | <a href="#Canada">Canada</a> | <a href="#Finlande">Finlande</a> | <a href="#RépubliqueTchèque">République Tchèque</a> | <a href="#Russie">Russie</a> | <a href="#Suède">Suède</a> | <a href="#TeamWorld">Team World</a> | <a href="#USA">USA</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamHistory_GER"><a id="Allemagne">Allemagne</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">Allemagne Page</a> ]
[ <a href="CMHJ-PLF-ProTeamRoster.php#Allemagne">Pro Team Roster</a> ]
[ <a href="CMHJ-PLF-ProTeamScoring.php#Allemagne">Pro Team Scoring</a> ]
[ <a href="CMHJ-PLF-TeamFinance.php#Allemagne">Team Finance</a> ]
[ <a href="CMHJ-PLF-ProTeamPlayersInfo.php#Allemagne">Pro Team PlayersInfo</a> ]
[ <a href="CMHJ-PLF-ProTeamLines.php#Allemagne">Pro Team Lines</a> ]
[ <a href="CMHJ-PLF-TeamProspects.php#Allemagne">Team Prospects</a> ]
[ <a href="CMHJ-PLF-ProTeamSchedule.php#Allemagne">Pro Team Schedule</a> ]
[ <a href="CMHJ-PLF-ProTeamStats.php#Allemagne">Pro Team Stats</a> ]
[ <a href="CMHJ-PLF-ProTeamStatsVS.php#Allemagne">Pro Team Stats VS</a> ]
[ <a href="CMHJ-PLF-TeamInjurySuspension.php#Allemagne">Team Injury Suspension</a> ]
[ <a href="CMHJ-PLF-TeamHistory.php#Allemagne">Team History</a> ]
[ <a href="CMHJ-PLF-TeamRecords.php#Allemagne">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Allemagne');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Allemagne" style="display: block;">
<br /><br />
[2020-12-30 06:44:11] - New Record for Team's Most Hits (24) in 1 Game for Allemagne!<br />
[2020-12-28 05:12:26] - New Record for Team's Most Hits (19) in 1 Game for Allemagne!<br />
[2020-12-28 05:12:26] - New Record for Team's Most Penalties Minutes (23) in 1 Game for Allemagne!<br />
[2020-12-28 05:12:26] - New Record for Team's Most Penalties Minutes (23) in 1 Game for Allemagne!<br />
[2020-12-26 05:10:43] - New Record for Team's Most Hits (14) in 1 Game for Allemagne!<br />
[2020-12-26 05:10:43] - New Record for Team's Most Shots Blocked (21) in 1 Game for Allemagne!<br />
[2020-12-26 05:10:43] - New Record for Team's Most Shots (53) in 1 Game for Allemagne!<br />
[2020-12-26 05:10:43] - New Record for Team's Most Points (19) in 1 Game for Allemagne!<br />
[2020-12-26 05:10:43] - New Record for Team's Most Assists (12) in 1 Game for Allemagne!<br />
[2020-12-26 05:10:43] - New Record for Team's Most Goals (7) in 1 Game for Allemagne!<br />
[2020-12-26 05:10:43] - New Record for Team's Most Shots Blocked (21) in 1 Game for Allemagne!<br />
[2020-12-26 05:10:43] - New Record for Team's Most Shots (53) in 1 Game for Allemagne!<br />
[2020-12-13 14:08:11] - John-Jason Peterka has been selected as assistant for Allemagne.<br />
[2020-12-13 14:08:11] - Unknown Player is no longer as assistant for Allemagne.<br />
[2020-12-13 14:08:11] - Moritz Seider has been selected as assistant for Allemagne.<br />
[2020-12-13 14:08:11] - Unknown Player is no longer as assistant for Allemagne.<br />
[2020-12-13 14:08:11] - Tim Stützle has been selected as captain for Allemagne.<br />
[2020-12-13 14:08:11] - Unknown Player is no longer captain for Allemagne.<br />
[2020-12-13 07:19:03] - Connor Korte was added to Allemagne.<br />
[2020-12-12 07:11:18] - Allemagne hired Tobias Abstreiter  for 500 000 $ for 1 year(s).<br />
[2020-12-12 07:09:37] - Tommy Pasanen was added to Allemagne.<br />
[2020-12-12 07:09:36] - Tobias Ancicka was added to Allemagne.<br />
[2020-12-12 07:09:36] - Tim Stützle was added to Allemagne.<br />
[2020-12-12 07:09:36] - Simon Gnyp was added to Allemagne.<br />
[2020-12-12 07:09:35] - Samuel Dubé was added to Allemagne.<br />
[2020-12-12 07:09:35] - Niklas Länger was added to Allemagne.<br />
[2020-12-12 07:09:35] - Nikita Quapp was added to Allemagne.<br />
[2020-12-12 07:09:34] - Moritz Seider was added to Allemagne.<br />
[2020-12-12 07:09:34] - Maximilian Glötzl was added to Allemagne.<br />
[2020-12-12 07:09:34] - Markus Schweiger was added to Allemagne.<br />
[2020-12-12 07:09:34] - Maksymilian Szuber was added to Allemagne.<br />
[2020-12-12 07:09:33] - Lukas Reichel was added to Allemagne.<br />
[2020-12-12 07:09:33] - Luca Münzenberger was added to Allemagne.<br />
[2020-12-12 07:09:33] - Joshua Samanski was added to Allemagne.<br />
[2020-12-12 07:09:32] - John-Jason Peterka was added to Allemagne.<br />
[2020-12-12 07:09:32] - Jan Nijenhuis was added to Allemagne.<br />
[2020-12-12 07:09:32] - Jakub Borzecki was added to Allemagne.<br />
[2020-12-12 07:09:31] - Haakon Hänelt was added to Allemagne.<br />
[2020-12-12 07:09:31] - Florian Elias was added to Allemagne.<br />
[2020-12-12 07:09:31] - Filip Reisnecker was added to Allemagne.<br />
[2020-12-12 07:09:30] - Elias Lindner was added to Allemagne.<br />
[2020-12-12 07:09:28] - Arno Tiefensee was added to Allemagne.<br />
[2020-12-12 05:54:14] - Florian Elias has been added to Allemagne.<br />
[2020-12-12 05:54:09] - Jakub Borzecki has been added to Allemagne.<br />
[2020-12-12 05:54:03] - Joshua Samanski has been added to Allemagne.<br />
[2020-12-12 05:53:58] - Samuel Dubé has been added to Allemagne.<br />
[2020-12-12 05:53:53] - Elias Lindner has been added to Allemagne.<br />
[2020-12-12 05:53:48] - Markus Schweiger has been added to Allemagne.<br />
[2020-12-12 05:53:43] - Filip Reisnecker has been added to Allemagne.<br />
[2020-12-12 05:53:38] - Jan Nijenhuis has been added to Allemagne.<br />
[2020-12-12 05:53:32] - Connor Konte has been added to Allemagne.<br />
[2020-12-12 05:53:27] - Haakon Hänelt has been added to Allemagne.<br />
[2020-12-12 05:53:22] - Lukas Reichel has been added to Allemagne.<br />
[2020-12-12 05:53:16] - John-Jason Peterka has been added to Allemagne.<br />
[2020-12-12 05:53:10] - Tim Stützle has been added to Allemagne.<br />
[2020-12-12 05:46:09] - Luca Münzenberger has been added to Allemagne.<br />
[2020-12-12 05:46:03] - Niklas Länger has been added to Allemagne.<br />
[2020-12-12 05:45:58] - Maximilian Glötzl has been added to Allemagne.<br />
[2020-12-12 05:45:52] - Maksymilian Szuber has been added to Allemagne.<br />
[2020-12-12 05:45:45] - Tommy Pasanen has been added to Allemagne.<br />
[2020-12-12 05:45:39] - Simon Gnyp has been added to Allemagne.<br />
[2020-12-12 05:45:34] - Moritz Seider has been added to Allemagne.<br />
[2020-12-12 05:45:29] - Arno Tiefensee has been added to Allemagne.<br />
[2020-12-12 05:45:23] - Tobias Ancicka has been added to Allemagne.<br />
[2020-12-12 05:45:18] - Nikita Quapp has been added to Allemagne.<br />
[2020-12-02 17:20:36] - General Manager Change : Allemagne hired general manager Joey Pronovost<br />
[2020-12-02 17:20:30] - Team Name Change : Team 4 changed name to Allemagne<br />
</div>
<h1 class="TeamHistory_CAN"><a id="Canada">Canada</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">Canada Page</a> ]
[ <a href="CMHJ-PLF-ProTeamRoster.php#Canada">Pro Team Roster</a> ]
[ <a href="CMHJ-PLF-ProTeamScoring.php#Canada">Pro Team Scoring</a> ]
[ <a href="CMHJ-PLF-TeamFinance.php#Canada">Team Finance</a> ]
[ <a href="CMHJ-PLF-ProTeamPlayersInfo.php#Canada">Pro Team PlayersInfo</a> ]
[ <a href="CMHJ-PLF-ProTeamLines.php#Canada">Pro Team Lines</a> ]
[ <a href="CMHJ-PLF-TeamProspects.php#Canada">Team Prospects</a> ]
[ <a href="CMHJ-PLF-ProTeamSchedule.php#Canada">Pro Team Schedule</a> ]
[ <a href="CMHJ-PLF-ProTeamStats.php#Canada">Pro Team Stats</a> ]
[ <a href="CMHJ-PLF-ProTeamStatsVS.php#Canada">Pro Team Stats VS</a> ]
[ <a href="CMHJ-PLF-TeamInjurySuspension.php#Canada">Team Injury Suspension</a> ]
[ <a href="CMHJ-PLF-TeamHistory.php#Canada">Team History</a> ]
[ <a href="CMHJ-PLF-TeamRecords.php#Canada">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Canada');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Canada" style="display: block;">
<br /><br />
[2021-01-06 05:11:16] - Canada are the Tournament Champions!<br />
[2020-12-31 05:58:51] - New Record for Team's Most Hits (23) in 1 Game for Canada!<br />
[2020-12-28 05:12:26] - New Record for Team's Most Penalties Minutes (8) in 1 Game for Canada!<br />
[2020-12-26 05:10:43] - New Record for Team's Most Hits (21) in 1 Game for Canada!<br />
[2020-12-26 05:10:43] - New Record for Team's Most Penalties Minutes (6) in 1 Game for Canada!<br />
[2020-12-26 05:10:43] - New Record for Team's Most Shots Blocked (17) in 1 Game for Canada!<br />
[2020-12-26 05:10:43] - New Record for Team's Most Shots (47) in 1 Game for Canada!<br />
[2020-12-26 05:10:43] - New Record for Team's Most Points (21) in 1 Game for Canada!<br />
[2020-12-26 05:10:43] - New Record for Team's Most Assists (13) in 1 Game for Canada!<br />
[2020-12-26 05:10:43] - New Record for Team's Most Goals (8) in 1 Game for Canada!<br />
[2020-12-17 04:27:00] - Justin Barron has been selected as assistant for Canada.<br />
[2020-12-17 04:27:00] - Unknown Player is no longer as assistant for Canada.<br />
[2020-12-17 04:27:00] - Dylan Cozens has been selected as assistant for Canada.<br />
[2020-12-17 04:27:00] - Unknown Player is no longer as assistant for Canada.<br />
[2020-12-17 04:27:00] - Kirby Dach has been selected as captain for Canada.<br />
[2020-12-17 04:27:00] - Unknown Player is no longer captain for Canada.<br />
[2020-12-05 09:57:15] - Canada hired Gilles Bouchard for 500 000 $ for 1 year(s).<br />
[2020-12-05 07:42:29] - Thomas Harley was added to Canada.<br />
[2020-12-05 07:42:29] - Shane Wright was added to Canada.<br />
[2020-12-05 07:42:28] - Samuel Régis was added to Canada.<br />
[2020-12-05 07:42:28] - Quinton Byfield was added to Canada.<br />
[2020-12-05 07:42:27] - Kirby Dach was added to Canada.<br />
[2020-12-05 07:42:27] - Kaiden Guhle was added to Canada.<br />
[2020-12-05 07:42:26] - Justin Barron was added to Canada.<br />
[2020-12-05 07:42:26] - Jonathan Lemieux was added to Canada.<br />
[2020-12-05 07:42:25] - Jamie Drysdale was added to Canada.<br />
[2020-12-05 07:42:25] - Jakob Pelletier was added to Canada.<br />
[2020-12-05 07:42:25] - Jack Quinn was added to Canada.<br />
[2020-12-05 07:42:24] - Dylan Garand was added to Canada.<br />
[2020-12-05 07:42:24] - Dylan Cozens was added to Canada.<br />
[2020-12-05 07:42:23] - Dawson Mercer was added to Canada.<br />
[2020-12-05 07:42:21] - Connor Zary was added to Canada.<br />
[2020-12-05 07:42:19] - Connor McMichael was added to Canada.<br />
[2020-12-05 07:42:18] - Cole Perfetti was added to Canada.<br />
[2020-12-05 07:42:16] - Brett Brochu was added to Canada.<br />
[2020-12-05 07:42:15] - Braden Schneider was added to Canada.<br />
[2020-12-05 07:42:14] - Bowen Byram was added to Canada.<br />
[2020-12-05 07:42:12] - Alexis Lafrenière was added to Canada.<br />
[2020-12-05 07:42:11] - Alex Newhook was added to Canada.<br />
[2020-12-05 07:42:10] - Alex Beaucage was added to Canada.<br />
[2020-12-04 17:27:19] - Brett Brochu has been added to Canada.<br />
[2020-12-04 17:27:15] - Jonathan Lemieux has been added to Canada.<br />
[2020-12-04 17:27:11] - Dylan Garand has been added to Canada.<br />
[2020-12-04 17:27:07] - Braden Schneider has been added to Canada.<br />
[2020-12-04 17:27:02] - Justin Barron has been added to Canada.<br />
[2020-12-04 17:26:58] - Thomas Harley has been added to Canada.<br />
[2020-12-04 17:26:54] - Kaiden Guhle has been added to Canada.<br />
[2020-12-04 17:26:48] - Samuel Régis has been added to Canada.<br />
[2020-12-04 17:26:43] - Jamie Drysdale has been added to Canada.<br />
[2020-12-04 17:26:38] - Bowen Byram has been added to Canada.<br />
[2020-12-04 16:08:40] - Kirby Dach has been added to Canada.<br />
[2020-12-04 16:08:36] - Jack Quinn has been added to Canada.<br />
[2020-12-04 16:08:33] - Cole Perfetti has been added to Canada.<br />
[2020-12-04 16:08:28] - Alex Beaucage has been added to Canada.<br />
[2020-12-04 16:08:23] - Alex Newhook has been added to Canada.<br />
[2020-12-04 16:08:18] - Connor Zary has been added to Canada.<br />
[2020-12-04 15:58:21] - Jacob Pelletier has been added to Canada.<br />
[2020-12-04 15:57:50] - Alexis Lafrenière has been added to Canada.<br />
[2020-12-04 15:57:45] - Connor McMichael has been added to Canada.<br />
[2020-12-04 15:57:41] - Shane Wright has been added to Canada.<br />
[2020-12-04 15:57:36] - Dawson Mercer has been added to Canada.<br />
[2020-12-04 14:26:23] - Dylan Cozens has been added to Canada.<br />
[2020-12-04 14:26:19] - Quinton Byfield has been added to Canada.<br />
[2020-12-02 17:20:14] - General Manager Change : Canada hired general manager Daniel Mercier<br />
[2020-12-02 17:20:03] - Team Name Change : Team 2 changed name to Canada<br />
</div>
<h1 class="TeamHistory_FIN"><a id="Finlande">Finlande</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">Finlande Page</a> ]
[ <a href="CMHJ-PLF-ProTeamRoster.php#Finlande">Pro Team Roster</a> ]
[ <a href="CMHJ-PLF-ProTeamScoring.php#Finlande">Pro Team Scoring</a> ]
[ <a href="CMHJ-PLF-TeamFinance.php#Finlande">Team Finance</a> ]
[ <a href="CMHJ-PLF-ProTeamPlayersInfo.php#Finlande">Pro Team PlayersInfo</a> ]
[ <a href="CMHJ-PLF-ProTeamLines.php#Finlande">Pro Team Lines</a> ]
[ <a href="CMHJ-PLF-TeamProspects.php#Finlande">Team Prospects</a> ]
[ <a href="CMHJ-PLF-ProTeamSchedule.php#Finlande">Pro Team Schedule</a> ]
[ <a href="CMHJ-PLF-ProTeamStats.php#Finlande">Pro Team Stats</a> ]
[ <a href="CMHJ-PLF-ProTeamStatsVS.php#Finlande">Pro Team Stats VS</a> ]
[ <a href="CMHJ-PLF-TeamInjurySuspension.php#Finlande">Team Injury Suspension</a> ]
[ <a href="CMHJ-PLF-TeamHistory.php#Finlande">Team History</a> ]
[ <a href="CMHJ-PLF-TeamRecords.php#Finlande">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Finlande');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Finlande" style="display: block;">
<br /><br />
[2020-12-30 06:44:11] - New Record for Team's Most Hits (30) in 1 Game for Finlande!<br />
[2020-12-30 06:44:11] - New Record for Team's Most Shots Blocked (15) in 1 Game for Finlande!<br />
[2020-12-28 05:12:26] - New Record for Team's Most Penalties Minutes (6) in 1 Game for Finlande!<br />
[2020-12-28 05:12:26] - New Record for Team's Most Points (19) in 1 Game for Finlande!<br />
[2020-12-28 05:12:26] - New Record for Team's Most Assists (12) in 1 Game for Finlande!<br />
[2020-12-28 05:12:26] - New Record for Team's Most Goals (7) in 1 Game for Finlande!<br />
[2020-12-26 05:10:43] - New Record for Team's Most Hits (23) in 1 Game for Finlande!<br />
[2020-12-26 05:10:43] - New Record for Team's Most Penalties Minutes (4) in 1 Game for Finlande!<br />
[2020-12-26 05:10:43] - New Record for Team's Most Shots Blocked (14) in 1 Game for Finlande!<br />
[2020-12-26 05:10:43] - New Record for Team's Most Shots (47) in 1 Game for Finlande!<br />
[2020-12-26 05:10:43] - New Record for Team's Most Points (3) in 1 Game for Finlande!<br />
[2020-12-26 05:10:43] - New Record for Team's Most Assists (2) in 1 Game for Finlande!<br />
[2020-12-26 05:10:43] - New Record for Team's Most Goals (1) in 1 Game for Finlande!<br />
[2020-12-22 03:24:34] - Ville Heinola has been selected as assistant for Finlande.<br />
[2020-12-22 03:24:34] - Unknown Player is no longer as assistant for Finlande.<br />
[2020-12-22 03:24:34] - Anton Lundell has been selected as assistant for Finlande.<br />
[2020-12-22 03:24:34] - Unknown Player is no longer as assistant for Finlande.<br />
[2020-12-22 03:24:34] - Kaapo Kakko has been selected as captain for Finlande.<br />
[2020-12-22 03:24:34] - Unknown Player is no longer captain for Finlande.<br />
[2020-12-06 06:03:03] - Finlande hired Raimo Helminen for 500 000 $ for 1 year(s).<br />
[2020-12-06 05:59:58] - Ville Heinola was added to Finlande.<br />
[2020-12-06 05:59:57] - Topi Niemela was added to Finlande.<br />
[2020-12-06 05:59:57] - Santeri Hatakka was added to Finlande.<br />
[2020-12-06 05:59:57] - Roni Hirvonen was added to Finlande.<br />
[2020-12-06 05:59:56] - Roby Jarventie was added to Finlande.<br />
[2020-12-06 05:59:56] - Patrik Puistola was added to Finlande.<br />
[2020-12-06 05:59:56] - Mikko Kokkonen was added to Finlande.<br />
[2020-12-06 05:59:55] - Leevi Merilainen was added to Finlande.<br />
[2020-12-06 05:59:55] - Leevi Aaltonen was added to Finlande.<br />
[2020-12-06 05:59:55] - Kasper Simontaival was added to Finlande.<br />
[2020-12-06 05:59:54] - Kari Piiroinen was added to Finlande.<br />
[2020-12-06 05:59:54] - Kaapo Kakko was added to Finlande.<br />
[2020-12-06 05:59:54] - Juuso Parssinen was added to Finlande.<br />
[2020-12-06 05:59:53] - Joni Jurmo was added to Finlande.<br />
[2020-12-06 05:59:53] - Joel Blomqvist was added to Finlande.<br />
[2020-12-06 05:59:53] - Henri Nikkanen was added to Finlande.<br />
[2020-12-06 05:59:52] - Eemil Viro was added to Finlande.<br />
[2020-12-06 05:59:52] - Brad Lambert was added to Finlande.<br />
[2020-12-06 05:59:52] - Antti Tuomisto was added to Finlande.<br />
[2020-12-06 05:59:51] - Antti Saarela was added to Finlande.<br />
[2020-12-06 05:59:51] - Anton Lundell was added to Finlande.<br />
[2020-12-06 05:59:51] - Aku Räty was added to Finlande.<br />
[2020-12-06 05:59:50] - Aatu Räty was added to Finlande.<br />
[2020-12-05 10:04:50] - Leevi Merilainen has been added to Finlande.<br />
[2020-12-05 10:04:44] - Kari Piiroinen has been added to Finlande.<br />
[2020-12-05 10:04:39] - Joel Blomqvist has been added to Finlande.<br />
[2020-12-05 10:04:31] - Joni Jurmo has been added to Finlande.<br />
[2020-12-05 10:04:25] - Eemil Viro has been added to Finlande.<br />
[2020-12-05 10:04:20] - Topi Niemela has been added to Finlande.<br />
[2020-12-05 10:04:14] - Santeri Hatakka has been added to Finlande.<br />
[2020-12-05 10:04:07] - Mikko Kokkonen has been added to Finlande.<br />
[2020-12-05 10:04:02] - Antti Tuomisto has been added to Finlande.<br />
[2020-12-05 10:03:57] - Ville Heinola has been added to Finlande.<br />
[2020-12-05 10:03:48] - Aatu Räty has been added to Finlande.<br />
[2020-12-05 10:03:38] - Kasper Simontaival has been added to Finlande.<br />
[2020-12-05 10:03:30] - Roni Hirvonen has been added to Finlande.<br />
[2020-12-05 10:03:25] - Roby Jarventie has been added to Finlande.<br />
[2020-12-05 10:03:19] - Anton Lundell has been added to Finlande.<br />
[2020-12-05 10:03:12] - Juuso Parssinen has been added to Finlande.<br />
[2020-12-05 10:03:04] - Aku Räty has been added to Finlande.<br />
[2020-12-05 10:02:52] - Leevi Aaltonen has been added to Finlande.<br />
[2020-12-05 10:02:46] - Antti Saarela has been added to Finlande.<br />
[2020-12-05 10:02:40] - Brad Lambert has been added to Finlande.<br />
[2020-12-05 10:02:33] - Henri Nikkanen has been added to Finlande.<br />
[2020-12-05 10:02:27] - Patrik Puistola has been added to Finlande.<br />
[2020-12-05 10:02:18] - Kaapo Kakko has been added to Finlande.<br />
[2020-12-02 17:20:50] - General Manager Change : Finlande hired general manager Mathieu Boudreault<br />
[2020-12-02 17:20:42] - Team Name Change : Team 6 changed name to Finlande<br />
</div>
<h1 class="TeamHistory_CZE"><a id="RépubliqueTchèque">République Tchèque</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">République Tchèque Page</a> ]
[ <a href="CMHJ-PLF-ProTeamRoster.php#RépubliqueTchèque">Pro Team Roster</a> ]
[ <a href="CMHJ-PLF-ProTeamScoring.php#RépubliqueTchèque">Pro Team Scoring</a> ]
[ <a href="CMHJ-PLF-TeamFinance.php#RépubliqueTchèque">Team Finance</a> ]
[ <a href="CMHJ-PLF-ProTeamPlayersInfo.php#RépubliqueTchèque">Pro Team PlayersInfo</a> ]
[ <a href="CMHJ-PLF-ProTeamLines.php#RépubliqueTchèque">Pro Team Lines</a> ]
[ <a href="CMHJ-PLF-TeamProspects.php#RépubliqueTchèque">Team Prospects</a> ]
[ <a href="CMHJ-PLF-ProTeamSchedule.php#RépubliqueTchèque">Pro Team Schedule</a> ]
[ <a href="CMHJ-PLF-ProTeamStats.php#RépubliqueTchèque">Pro Team Stats</a> ]
[ <a href="CMHJ-PLF-ProTeamStatsVS.php#RépubliqueTchèque">Pro Team Stats VS</a> ]
[ <a href="CMHJ-PLF-TeamInjurySuspension.php#RépubliqueTchèque">Team Injury Suspension</a> ]
[ <a href="CMHJ-PLF-TeamHistory.php#RépubliqueTchèque">Team History</a> ]
[ <a href="CMHJ-PLF-TeamRecords.php#RépubliqueTchèque">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_RépubliqueTchèque');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_RépubliqueTchèque" style="display: block;">
<br /><br />
[2020-12-31 05:58:50] - New Record for Team's Most Shots (42) in 1 Game for République Tchèque!<br />
[2020-12-29 05:33:43] - New Record for Team's Most Hits (34) in 1 Game for République Tchèque!<br />
[2020-12-29 05:33:43] - New Record for Team's Most Hits (34) in 1 Game for République Tchèque!<br />
[2020-12-25 05:10:26] - New Record for Team's Most Hits (19) in 1 Game for République Tchèque!<br />
[2020-12-25 05:10:26] - New Record for Team's Most Penalties Minutes (4) in 1 Game for République Tchèque!<br />
[2020-12-25 05:10:26] - New Record for Team's Most Shots Blocked (12) in 1 Game for République Tchèque!<br />
[2020-12-25 05:10:26] - New Record for Team's Most Shots (39) in 1 Game for République Tchèque!<br />
[2020-12-25 05:10:26] - New Record for Team's Most Points (19) in 1 Game for République Tchèque!<br />
[2020-12-25 05:10:26] - New Record for Team's Most Assists (12) in 1 Game for République Tchèque!<br />
[2020-12-25 05:10:26] - New Record for Team's Most Goals (7) in 1 Game for République Tchèque!<br />
[2020-12-25 05:10:26] - New Record for Team's Most Shots (39) in 1 Game for République Tchèque!<br />
[2020-12-25 05:10:26] - New Record for Team's Most Points (19) in 1 Game for République Tchèque!<br />
[2020-12-25 05:10:26] - New Record for Team's Most Goals (7) in 1 Game for République Tchèque!<br />
[2020-12-22 18:52:43] - Stanislav Svozil has been selected as assistant for République Tchèque.<br />
[2020-12-22 18:52:43] - Unknown Player is no longer as assistant for République Tchèque.<br />
[2020-12-22 18:52:43] - Michal Teply has been selected as assistant for République Tchèque.<br />
[2020-12-22 18:52:43] - Unknown Player is no longer as assistant for République Tchèque.<br />
[2020-12-22 18:52:43] - Jan Mysak has been selected as captain for République Tchèque.<br />
[2020-12-22 18:52:43] - Unknown Player is no longer captain for République Tchèque.<br />
[2020-12-11 07:42:38] - République Tchèque hired Robert Lang for 500 000 $ for 1 year(s).<br />
[2020-12-11 07:40:41] - Stanislav Svozil was added to République Tchèque.<br />
[2020-12-11 07:40:40] - Simon Kubicek was added to République Tchèque.<br />
[2020-12-11 07:40:40] - Radek Muzik was added to République Tchèque.<br />
[2020-12-11 07:40:39] - Radek Kucerik was added to République Tchèque.<br />
[2020-12-11 07:40:39] - Pavel Novak was added to République Tchèque.<br />
[2020-12-11 07:40:39] - Ondrej Psenicka was added to République Tchèque.<br />
[2020-12-11 07:40:38] - Ondrej Balaz was added to République Tchèque.<br />
[2020-12-11 07:40:38] - Nick Malik was added to République Tchèque.<br />
[2020-12-11 07:40:38] - Michal Teply was added to République Tchèque.<br />
[2020-12-11 07:40:37] - Martin Lang was added to République Tchèque.<br />
[2020-12-11 07:40:37] - Martin Hugo Has was added to République Tchèque.<br />
[2020-12-11 07:40:37] - Lukas Parik was added to République Tchèque.<br />
[2020-12-11 07:40:37] - Karel Klikorka was added to République Tchèque.<br />
[2020-12-11 07:40:36] - Jonas Peterek was added to République Tchèque.<br />
[2020-12-11 07:40:36] - Jaromir Pytlik was added to République Tchèque.<br />
[2020-12-11 07:40:36] - Jan Mysak was added to République Tchèque.<br />
[2020-12-11 07:40:35] - Jan Bednar was added to République Tchèque.<br />
[2020-12-11 07:40:35] - Filip Prikryl was added to République Tchèque.<br />
[2020-12-11 07:40:35] - David Vitouch was added to République Tchèque.<br />
[2020-12-11 07:40:34] - David Jiricek was added to République Tchèque.<br />
[2020-12-11 07:40:34] - David Jindra was added to République Tchèque.<br />
[2020-12-11 07:40:34] - Adam Raska was added to République Tchèque.<br />
[2020-12-11 07:40:33] - Adam Najman was added to République Tchèque.<br />
[2020-12-11 07:09:05] - David Vitouch has been added to République Tchèque.<br />
[2020-12-11 05:57:06] - Lukas Parik has been added to République Tchèque.<br />
[2020-12-11 05:57:01] - Jan Bednar has been added to République Tchèque.<br />
[2020-12-11 05:56:56] - Nick Malik has been added to République Tchèque.<br />
[2020-12-11 05:56:51] - Ondrej Balaz has been added to République Tchèque.<br />
[2020-12-11 05:56:45] - David Jiricek has been added to République Tchèque.<br />
[2020-12-11 05:56:40] - Radek Kucerik has been added to République Tchèque.<br />
[2020-12-11 05:56:34] - Karel Klikorka has been added to République Tchèque.<br />
[2020-12-11 05:56:29] - Simon Kubicek has been added to République Tchèque.<br />
[2020-12-11 05:56:23] - Martin Hugo Has has been added to République Tchèque.<br />
[2020-12-11 05:56:17] - Stanislav Svozil has been added to République Tchèque.<br />
[2020-12-11 05:56:02] - Jonas Peterek has been added to République Tchèque.<br />
[2020-12-11 05:55:55] - Filip Prikryl has been added to République Tchèque.<br />
[2020-12-11 05:55:48] - David Jindra has been added to République Tchèque.<br />
[2020-12-11 05:55:38] - Ondrej Psenicka has been added to République Tchèque.<br />
[2020-12-11 05:55:34] - Radek Musik has been added to République Tchèque.<br />
[2020-12-11 05:55:28] - Martin Lang has been added to République Tchèque.<br />
[2020-12-11 05:55:22] - Adam Raska has been added to République Tchèque.<br />
[2020-12-11 05:55:16] - Adam Najman has been added to République Tchèque.<br />
[2020-12-11 05:55:11] - Jaromir Pytlick has been added to République Tchèque.<br />
[2020-12-11 05:55:04] - Michal Teply has been added to République Tchèque.<br />
[2020-12-11 05:54:58] - Jan Mysak has been added to République Tchèque.<br />
[2020-12-11 05:54:52] - Pavel Novak has been added to République Tchèque.<br />
[2020-12-02 17:21:34] - General Manager Change : République Tchèque hired general manager Mathieu Veilleux<br />
[2020-12-02 17:21:26] - Team Name Change : Team 3 changed name to République Tchèque<br />
</div>
<h1 class="TeamHistory_RUS"><a id="Russie">Russie</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">Russie Page</a> ]
[ <a href="CMHJ-PLF-ProTeamRoster.php#Russie">Pro Team Roster</a> ]
[ <a href="CMHJ-PLF-ProTeamScoring.php#Russie">Pro Team Scoring</a> ]
[ <a href="CMHJ-PLF-TeamFinance.php#Russie">Team Finance</a> ]
[ <a href="CMHJ-PLF-ProTeamPlayersInfo.php#Russie">Pro Team PlayersInfo</a> ]
[ <a href="CMHJ-PLF-ProTeamLines.php#Russie">Pro Team Lines</a> ]
[ <a href="CMHJ-PLF-TeamProspects.php#Russie">Team Prospects</a> ]
[ <a href="CMHJ-PLF-ProTeamSchedule.php#Russie">Pro Team Schedule</a> ]
[ <a href="CMHJ-PLF-ProTeamStats.php#Russie">Pro Team Stats</a> ]
[ <a href="CMHJ-PLF-ProTeamStatsVS.php#Russie">Pro Team Stats VS</a> ]
[ <a href="CMHJ-PLF-TeamInjurySuspension.php#Russie">Team Injury Suspension</a> ]
[ <a href="CMHJ-PLF-TeamHistory.php#Russie">Team History</a> ]
[ <a href="CMHJ-PLF-TeamRecords.php#Russie">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Russie');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Russie" style="display: block;">
<br /><br />
[2021-01-02 05:10:41] - Russie didn't make playoff for year 2020.<br />
[2020-12-31 05:58:50] - New Record for Team's Most Points (10) in 1 Game for Russie!<br />
[2020-12-31 05:58:50] - New Record for Team's Most Goals (4) in 1 Game for Russie!<br />
[2020-12-27 05:24:12] - New Record for Team's Most Points (9) in 1 Game for Russie!<br />
[2020-12-27 05:24:12] - New Record for Team's Most Assists (6) in 1 Game for Russie!<br />
[2020-12-27 05:24:12] - New Record for Team's Most Goals (3) in 1 Game for Russie!<br />
[2020-12-25 05:10:26] - New Record for Team's Most Hits (20) in 1 Game for Russie!<br />
[2020-12-25 05:10:26] - New Record for Team's Most Penalties Minutes (12) in 1 Game for Russie!<br />
[2020-12-25 05:10:26] - New Record for Team's Most Shots Blocked (12) in 1 Game for Russie!<br />
[2020-12-25 05:10:26] - New Record for Team's Most Shots (31) in 1 Game for Russie!<br />
[2020-12-25 05:10:26] - New Record for Team's Most Points (6) in 1 Game for Russie!<br />
[2020-12-25 05:10:26] - New Record for Team's Most Assists (4) in 1 Game for Russie!<br />
[2020-12-25 05:10:26] - New Record for Team's Most Goals (2) in 1 Game for Russie!<br />
[2020-12-20 04:28:08] - Vasili Podkolzin has been selected as assistant for Russie.<br />
[2020-12-20 04:28:08] - Unknown Player is no longer as assistant for Russie.<br />
[2020-12-20 04:28:08] - Mikhail Abramov has been selected as assistant for Russie.<br />
[2020-12-20 04:28:08] - Unknown Player is no longer as assistant for Russie.<br />
[2020-12-20 04:28:08] - Semyon Chistyakov has been selected as captain for Russie.<br />
[2020-12-20 04:28:08] - Unknown Player is no longer captain for Russie.<br />
[2020-12-10 15:28:13] - Yegor Savikov was added to Russie.<br />
[2020-12-10 15:00:14] - Yegor Savikov has been added to Russie.<br />
[2020-12-10 09:02:22] - Artemi Knyazev was released.<br />
[2020-12-10 09:02:22] - Russie paid 0 $ to release Artemi Knyazev.<br />
[2020-12-10 07:54:10] - Yegor Chinakhov was added to Russie.<br />
[2020-12-10 07:54:09] - Yegor Afanasyev was added to Russie.<br />
[2020-12-10 07:54:09] - Yan Kuznetsov was added to Russie.<br />
[2020-12-10 07:54:08] - Vsevolod Skotnikov was added to Russie.<br />
[2020-12-10 07:54:08] - Vladislav Lukashevich was added to Russie.<br />
[2020-12-10 07:54:07] - Vladislav Firstov was added to Russie.<br />
[2020-12-10 07:54:07] - Vasili Ponomaryov was added to Russie.<br />
[2020-12-10 07:54:07] - Vasili Podkolzin was added to Russie.<br />
[2020-12-10 07:54:06] - Shakir Mukhamadullin was added to Russie.<br />
[2020-12-10 07:54:06] - Semyon Chistyakov was added to Russie.<br />
[2020-12-10 07:54:05] - Rodion Amirov was added to Russie.<br />
[2020-12-10 07:54:05] - Prokhor Poltapov was added to Russie.<br />
[2020-12-10 07:54:04] - Nikita Chibrikov was added to Russie.<br />
[2020-12-10 07:54:04] - Mikhail Abramov was added to Russie.<br />
[2020-12-10 07:54:03] - Marat Khusnutdinov was added to Russie.<br />
[2020-12-10 07:54:03] - Ivan Sapozhnikov was added to Russie.<br />
[2020-12-10 07:54:02] - Ilya Nikolayev was added to Russie.<br />
[2020-12-10 07:54:02] - Iaroslav Askarov was added to Russie.<br />
[2020-12-10 07:54:01] - Dmitri Ovchinnikov was added to Russie.<br />
[2020-12-10 07:54:01] - Danil Gushchin was added to Russie.<br />
[2020-12-10 07:54:01] - Daniil Chayka was added to Russie.<br />
[2020-12-10 07:54:00] - Artemi Knyazev was added to Russie.<br />
[2020-12-10 07:53:59] - Alexander Nikishin was added to Russie.<br />
[2020-12-10 07:53:56] - Russie hired Vladislav Tretiak for 500 000 $ for 1 year(s).<br />
[2020-12-10 06:37:51] - Vsevolod Skotnikov has been added to Russie.<br />
[2020-12-10 06:37:45] - Ivan Sapozhnikov has been added to Russie.<br />
[2020-12-10 06:37:38] - Iaroslav Askarov has been added to Russie.<br />
[2020-12-10 06:37:32] - Vladislav Lukashevich has been added to Russie.<br />
[2020-12-10 06:37:26] - Alexander Nikishin has been added to Russie.<br />
[2020-12-10 06:37:20] - Yan Kuznetsov has been added to Russie.<br />
[2020-12-10 06:37:15] - Shakir Mukhamadullin has been added to Russie.<br />
[2020-12-10 06:37:08] - Daniil Chayka has been added to Russie.<br />
[2020-12-10 06:37:02] - Artemi Knyazev has been added to Russie.<br />
[2020-12-10 06:36:57] - Semyon Chistyakov has been added to Russie.<br />
[2020-12-10 06:36:47] - Prokhor Poltapov has been added to Russie.<br />
[2020-12-10 06:36:42] - Danil Gushchin has been added to Russie.<br />
[2020-12-10 06:36:36] - Ilya Nikolayev has been added to Russie.<br />
[2020-12-10 06:36:30] - Yegor Afanasyev has been added to Russie.<br />
[2020-12-10 06:36:24] - Vladislav Firstov has been added to Russie.<br />
[2020-12-10 06:36:17] - Vasili Podkolzin has been added to Russie.<br />
[2020-12-10 06:36:11] - Dmitri Ovchinnikov has been added to Russie.<br />
[2020-12-10 06:36:05] - Marat Khusnutdinov has been added to Russie.<br />
[2020-12-10 06:35:58] - Yegor Chinakhov has been added to Russie.<br />
[2020-12-10 06:35:51] - Rodion Amirov has been added to Russie.<br />
[2020-12-10 06:35:45] - Vasili Ponomaryov has been added to Russie.<br />
[2020-12-10 06:35:39] - Nikita Chibrikov has been added to Russie.<br />
[2020-12-10 06:35:34] - Mikhail Abramov has been added to Russie.<br />
[2020-12-02 17:23:15] - General Manager Change : Russie hired general manager Jean-Bruno Gélinas<br />
[2020-12-02 17:23:06] - Team Name Change : Team 7 changed name to Russie<br />
</div>
<h1 class="TeamHistory_SWE"><a id="Suède">Suède</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">Suède Page</a> ]
[ <a href="CMHJ-PLF-ProTeamRoster.php#Suède">Pro Team Roster</a> ]
[ <a href="CMHJ-PLF-ProTeamScoring.php#Suède">Pro Team Scoring</a> ]
[ <a href="CMHJ-PLF-TeamFinance.php#Suède">Team Finance</a> ]
[ <a href="CMHJ-PLF-ProTeamPlayersInfo.php#Suède">Pro Team PlayersInfo</a> ]
[ <a href="CMHJ-PLF-ProTeamLines.php#Suède">Pro Team Lines</a> ]
[ <a href="CMHJ-PLF-TeamProspects.php#Suède">Team Prospects</a> ]
[ <a href="CMHJ-PLF-ProTeamSchedule.php#Suède">Pro Team Schedule</a> ]
[ <a href="CMHJ-PLF-ProTeamStats.php#Suède">Pro Team Stats</a> ]
[ <a href="CMHJ-PLF-ProTeamStatsVS.php#Suède">Pro Team Stats VS</a> ]
[ <a href="CMHJ-PLF-TeamInjurySuspension.php#Suède">Team Injury Suspension</a> ]
[ <a href="CMHJ-PLF-TeamHistory.php#Suède">Team History</a> ]
[ <a href="CMHJ-PLF-TeamRecords.php#Suède">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Suède');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Suède" style="display: block;">
<br /><br />
[2020-12-31 05:58:51] - New Record for Team's Most Shots (41) in 1 Game for Suède!<br />
[2020-12-25 05:10:26] - New Record for Team's Most Hits (20) in 1 Game for Suède!<br />
[2020-12-25 05:10:26] - New Record for Team's Most Penalties Minutes (20) in 1 Game for Suède!<br />
[2020-12-25 05:10:26] - New Record for Team's Most Shots Blocked (19) in 1 Game for Suède!<br />
[2020-12-25 05:10:26] - New Record for Team's Most Shots (37) in 1 Game for Suède!<br />
[2020-12-25 05:10:26] - New Record for Team's Most Points (18) in 1 Game for Suède!<br />
[2020-12-25 05:10:26] - New Record for Team's Most Assists (12) in 1 Game for Suède!<br />
[2020-12-25 05:10:26] - New Record for Team's Most Goals (6) in 1 Game for Suède!<br />
[2020-12-25 05:10:26] - New Record for Team's Most Hits (20) in 1 Game for Suède!<br />
[2020-12-25 05:10:26] - New Record for Team's Most Penalties Minutes (20) in 1 Game for Suède!<br />
[2020-12-25 05:10:26] - New Record for Team's Most Shots Blocked (19) in 1 Game for Suède!<br />
[2020-12-25 05:10:26] - New Record for Team's Most Shots (37) in 1 Game for Suède!<br />
[2020-12-25 05:10:26] - New Record for Team's Most Points (18) in 1 Game for Suède!<br />
[2020-12-25 05:10:26] - New Record for Team's Most Assists (12) in 1 Game for Suède!<br />
[2020-12-25 05:10:26] - New Record for Team's Most Goals (6) in 1 Game for Suède!<br />
[2020-12-23 05:14:44] - Victor Soderström has been selected as assistant for Suède.<br />
[2020-12-23 05:14:44] - Unknown Player is no longer as assistant for Suède.<br />
[2020-12-23 05:14:44] - Philip Broberg has been selected as assistant for Suède.<br />
[2020-12-23 05:14:44] - Unknown Player is no longer as assistant for Suède.<br />
[2020-12-23 05:14:44] - Tobias Björnfot has been selected as captain for Suède.<br />
[2020-12-23 05:14:44] - Unknown Player is no longer captain for Suède.<br />
[2020-12-06 16:16:19] - Suède hired Peter Forsberg for 500 000 $ for 1 year(s).<br />
[2020-12-06 16:15:15] - Zion Nybeck was added to Suède.<br />
[2020-12-06 16:15:14] - William Wallinder was added to Suède.<br />
[2020-12-06 16:15:14] - William Eklund was added to Suède.<br />
[2020-12-06 16:15:13] - Victor Soderström was added to Suède.<br />
[2020-12-06 16:15:13] - Tobias Björnfot was added to Suède.<br />
[2020-12-06 16:15:13] - Theodor Niederbach was added to Suède.<br />
[2020-12-06 16:15:12] - Simon Robertsson was added to Suède.<br />
[2020-12-06 16:15:12] - Simon Holmström was added to Suède.<br />
[2020-12-06 16:15:11] - Philip Broberg was added to Suède.<br />
[2020-12-06 16:15:11] - Oskar Magnusson was added to Suède.<br />
[2020-12-06 16:15:10] - Noel Gunler was added to Suède.<br />
[2020-12-06 16:15:10] - Lucas Raymond was added to Suède.<br />
[2020-12-06 16:15:10] - Karl Henriksson was added to Suède.<br />
[2020-12-06 16:15:09] - Jesper Wallstedt was added to Suède.<br />
[2020-12-06 16:15:09] - Hugo Alnefelt was added to Suède.<br />
[2020-12-06 16:15:08] - Helge Grans was added to Suède.<br />
[2020-12-06 16:15:08] - Emil Heineman was added to Suède.<br />
[2020-12-06 16:15:07] - Emil Andrae was added to Suède.<br />
[2020-12-06 16:15:07] - Daniel Torgersson was added to Suède.<br />
[2020-12-06 16:15:06] - Calle Clang was added to Suède.<br />
[2020-12-06 16:15:06] - Alexander Holtz was added to Suède.<br />
[2020-12-06 16:15:05] - Albin Grewe was added to Suède.<br />
[2020-12-06 16:15:05] - Albert Johansson was added to Suède.<br />
[2020-12-06 06:09:48] - William Eklund has been added to Suède.<br />
[2020-12-06 06:09:43] - Theodor Niederbach has been added to Suède.<br />
[2020-12-06 06:09:38] - Zion Nybeck has been added to Suède.<br />
[2020-12-06 06:09:32] - Karl Henriksson has been added to Suède.<br />
[2020-12-06 06:09:26] - Albin Grewe has been added to Suède.<br />
[2020-12-06 06:09:21] - Oskar Magnusson has been added to Suède.<br />
[2020-12-06 06:09:15] - Daniel Torgersson has been added to Suède.<br />
[2020-12-06 06:09:09] - Lucas Raymond has been added to Suède.<br />
[2020-12-06 06:09:03] - Simon Robertsson has been added to Suède.<br />
[2020-12-06 06:08:58] - Simon Holmström has been added to Suède.<br />
[2020-12-06 06:08:52] - Emil Heineman has been added to Suède.<br />
[2020-12-06 06:08:46] - Noel Gunler has been added to Suède.<br />
[2020-12-06 06:08:41] - Alexander Holtz has been added to Suède.<br />
[2020-12-06 06:08:35] - Albert Johansson has been added to Suède.<br />
[2020-12-06 06:08:29] - William Wallinder has been added to Suède.<br />
[2020-12-06 06:08:22] - Emil Andrae has been added to Suède.<br />
[2020-12-06 06:08:17] - Helge Grans has been added to Suède.<br />
[2020-12-06 06:08:11] - Tobias Björnfot has been added to Suède.<br />
[2020-12-06 06:08:05] - Philip Broberg has been added to Suède.<br />
[2020-12-06 06:07:59] - Victor Soderstrom has been added to Suède.<br />
[2020-12-06 06:07:53] - Calle Clang has been added to Suède.<br />
[2020-12-06 06:07:46] - Jesper Wallstedt has been added to Suède.<br />
[2020-12-06 06:07:40] - Hugo Alnefelt has been added to Suède.<br />
[2020-12-02 17:22:29] - General Manager Change : Suède hired general manager Mikaël Brassard<br />
[2020-12-02 17:22:23] - Team Name Change : Team 5 changed name to Suède<br />
</div>
<h1 class="TeamHistory_TWO"><a id="TeamWorld">Team World</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">Team World Page</a> ]
[ <a href="CMHJ-PLF-ProTeamRoster.php#TeamWorld">Pro Team Roster</a> ]
[ <a href="CMHJ-PLF-ProTeamScoring.php#TeamWorld">Pro Team Scoring</a> ]
[ <a href="CMHJ-PLF-TeamFinance.php#TeamWorld">Team Finance</a> ]
[ <a href="CMHJ-PLF-ProTeamPlayersInfo.php#TeamWorld">Pro Team PlayersInfo</a> ]
[ <a href="CMHJ-PLF-ProTeamLines.php#TeamWorld">Pro Team Lines</a> ]
[ <a href="CMHJ-PLF-TeamProspects.php#TeamWorld">Team Prospects</a> ]
[ <a href="CMHJ-PLF-ProTeamSchedule.php#TeamWorld">Pro Team Schedule</a> ]
[ <a href="CMHJ-PLF-ProTeamStats.php#TeamWorld">Pro Team Stats</a> ]
[ <a href="CMHJ-PLF-ProTeamStatsVS.php#TeamWorld">Pro Team Stats VS</a> ]
[ <a href="CMHJ-PLF-TeamInjurySuspension.php#TeamWorld">Team Injury Suspension</a> ]
[ <a href="CMHJ-PLF-TeamHistory.php#TeamWorld">Team History</a> ]
[ <a href="CMHJ-PLF-TeamRecords.php#TeamWorld">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TeamWorld');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TeamWorld" style="display: block;">
<br /><br />
[2021-01-02 05:10:41] - Team World didn't make playoff for year 2020.<br />
[2020-12-31 05:58:51] - New Record for Team's Most Hits (21) in 1 Game for Team World!<br />
[2020-12-31 05:58:51] - New Record for Team's Most Points (11) in 1 Game for Team World!<br />
[2020-12-31 05:58:51] - New Record for Team's Most Assists (7) in 1 Game for Team World!<br />
[2020-12-31 05:58:51] - New Record for Team's Most Goals (4) in 1 Game for Team World!<br />
[2020-12-26 05:10:43] - New Record for Team's Most Hits (20) in 1 Game for Team World!<br />
[2020-12-26 05:10:43] - New Record for Team's Most Penalties Minutes (12) in 1 Game for Team World!<br />
[2020-12-26 05:10:43] - New Record for Team's Most Shots Blocked (18) in 1 Game for Team World!<br />
[2020-12-26 05:10:43] - New Record for Team's Most Shots (43) in 1 Game for Team World!<br />
[2020-12-26 05:10:43] - New Record for Team's Most Points (8) in 1 Game for Team World!<br />
[2020-12-26 05:10:43] - New Record for Team's Most Assists (5) in 1 Game for Team World!<br />
[2020-12-26 05:10:43] - New Record for Team's Most Goals (3) in 1 Game for Team World!<br />
[2020-12-26 05:10:43] - New Record for Team's Most Shots (43) in 1 Game for Team World!<br />
[2020-12-15 04:52:56] - Marko Mladenovic has been selected as assistant for Team World.<br />
[2020-12-15 04:52:56] - Unknown Player is no longer as assistant for Team World.<br />
[2020-12-15 04:52:56] - Kirill Steklov has been selected as assistant for Team World.<br />
[2020-12-15 04:52:56] - Unknown Player is no longer as assistant for Team World.<br />
[2020-12-15 04:52:56] - Jonas Brondberg has been selected as captain for Team World.<br />
[2020-12-15 04:52:56] - Unknown Player is no longer captain for Team World.<br />
[2020-12-10 09:15:12] - Théo Rochette was added to Team World.<br />
[2020-12-10 09:15:09] - Théo Rochette has been added to Team World.<br />
[2020-12-10 09:02:42] - Kieran Higgins was released by Team World<br />
[2020-12-05 07:41:18] - Team World hired Tim Hunter for 500 000 $ for 1 year(s).<br />
[2020-12-04 13:44:35] - Declan Bronte was released.<br />
[2020-12-04 13:44:35] - Team World paid 0 $ to release Declan Bronte.<br />
[2020-12-04 13:41:27] - Yusaku Ando was added to Team World.<br />
[2020-12-04 13:41:26] - Tobias Johansen Breivold was added to Team World.<br />
[2020-12-04 13:41:24] - Reinhard Venter was added to Team World.<br />
[2020-12-04 13:41:22] - Rapolas Marcinkevicius was added to Team World.<br />
[2020-12-04 13:41:20] - Raivis Ansons was added to Team World.<br />
[2020-12-04 13:41:19] - Mike Collard was added to Team World.<br />
[2020-12-04 13:41:18] - Marko Mladenovic was added to Team World.<br />
[2020-12-04 13:41:16] - Kirill Steklov was added to Team World.<br />
[2020-12-04 13:41:15] - Kieran Higgins was added to Team World.<br />
[2020-12-04 13:41:13] - Joaquim Muratet was added to Team World.<br />
[2020-12-04 13:16:34] - Tobias Johansen Breivold has been added to Team World.<br />
[2020-12-04 13:16:33] - Rudolfs Polcs was added to Team World.<br />
[2020-12-04 11:55:03] - Sander Vold Engebratten was added to Team World.<br />
[2020-12-04 11:55:01] - Ole Julian Bjorvik Holm was added to Team World.<br />
[2020-12-04 11:34:42] - Jonas Brondberg was added to Team World.<br />
[2020-12-04 11:34:38] - Frederik Dichow was added to Team World.<br />
[2020-12-04 11:34:31] - Mads Sogaard has been deleted from Team World.<br />
[2020-12-04 06:57:40] - Simon Knak was added to Team World.<br />
[2020-12-04 06:57:37] - Samuel Hlavaj was added to Team World.<br />
[2020-12-04 06:43:39] - Maxim Cajkovic was added to Team World.<br />
[2020-12-04 06:38:06] - Joaquim Muratet has been added to Team World.<br />
[2020-12-04 06:38:00] - Mike Collard has been added to Team World.<br />
[2020-12-04 06:37:55] - Yusaku Ando has been added to Team World.<br />
[2020-12-04 06:37:48] - Rapolas Marcinkevicius has been added to Team World.<br />
[2020-12-04 06:37:43] - Kieran Higgins has been added to Team World.<br />
[2020-12-04 06:37:38] - Reinhard Venter has been added to Team World.<br />
[2020-12-04 06:37:33] - Kirill Steklov has been added to Team World.<br />
[2020-12-04 06:37:26] - Marko Mladenovic has been added to Team World.<br />
[2020-12-04 06:37:21] - Raivis Ansons has been added to Team World.<br />
[2020-12-04 06:37:14] - Rudolfs Polcs has been added to Team World.<br />
[2020-12-04 06:37:08] - Sander Vold Engebratten has been added to Team World.<br />
[2020-12-04 06:37:02] - Ole Julian Bjorvik Holm has been added to Team World.<br />
[2020-12-04 06:36:56] - Jonas Brondberg has been added to Team World.<br />
[2020-12-04 06:36:49] - Frederik Dichow has been added to Team World.<br />
[2020-12-04 06:36:43] - Mads Sogaard has been added to Team World.<br />
[2020-12-04 06:36:39] - Simon Knak has been added to Team World.<br />
[2020-12-04 06:36:34] - Simon Hlavaj has been added to Team World.<br />
[2020-12-04 06:36:27] - Maxim Cajkovic has been added to Team World.<br />
[2020-12-03 05:34:57] - Declan Bronte was added to Team World.<br />
[2020-12-03 05:34:56] - Jordan Spence was added to Team World.<br />
[2020-12-03 05:34:54] - Martin Chromiak was added to Team World.<br />
[2020-12-03 05:34:52] - Martin Chromiak has been added to Team World.<br />
[2020-12-03 05:34:43] - Declan Bronte has been added to Team World.<br />
[2020-12-03 05:34:37] - Jordan Spence has been added to Team World.<br />
[2020-12-02 18:02:04] - Arthur Kaliyev was added to Team World.<br />
[2020-12-02 18:02:02] - Thimo Nickl was added to Team World.<br />
[2020-12-02 18:01:58] - Thimo Nickl has been added to Team World.<br />
[2020-12-02 18:01:47] - Arthur Kaliyev has been added to Team World.<br />
[2020-12-02 17:39:21] - Marco Rossi was added to Team World.<br />
[2020-12-02 17:39:18] - Marco Rossi has been added to Team World.<br />
[2020-12-02 17:21:04] - General Manager Change : Team World hired general manager Maxime Bourrassa<br />
[2020-12-02 17:20:55] - Team Name Change : Team 8 changed name to Team World<br />
</div>
<h1 class="TeamHistory_USA"><a id="USA">USA</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">USA Page</a> ]
[ <a href="CMHJ-PLF-ProTeamRoster.php#USA">Pro Team Roster</a> ]
[ <a href="CMHJ-PLF-ProTeamScoring.php#USA">Pro Team Scoring</a> ]
[ <a href="CMHJ-PLF-TeamFinance.php#USA">Team Finance</a> ]
[ <a href="CMHJ-PLF-ProTeamPlayersInfo.php#USA">Pro Team PlayersInfo</a> ]
[ <a href="CMHJ-PLF-ProTeamLines.php#USA">Pro Team Lines</a> ]
[ <a href="CMHJ-PLF-TeamProspects.php#USA">Team Prospects</a> ]
[ <a href="CMHJ-PLF-ProTeamSchedule.php#USA">Pro Team Schedule</a> ]
[ <a href="CMHJ-PLF-ProTeamStats.php#USA">Pro Team Stats</a> ]
[ <a href="CMHJ-PLF-ProTeamStatsVS.php#USA">Pro Team Stats VS</a> ]
[ <a href="CMHJ-PLF-TeamInjurySuspension.php#USA">Team Injury Suspension</a> ]
[ <a href="CMHJ-PLF-TeamHistory.php#USA">Team History</a> ]
[ <a href="CMHJ-PLF-TeamRecords.php#USA">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_USA');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_USA" style="display: block;">
<br /><br />
[2020-12-25 05:10:26] - New Record for Team's Most Hits (26) in 1 Game for USA!<br />
[2020-12-25 05:10:26] - New Record for Team's Most Penalties Minutes (6) in 1 Game for USA!<br />
[2020-12-25 05:10:26] - New Record for Team's Most Shots Blocked (18) in 1 Game for USA!<br />
[2020-12-25 05:10:26] - New Record for Team's Most Shots (37) in 1 Game for USA!<br />
[2020-12-25 05:10:26] - New Record for Team's Most Points (25) in 1 Game for USA!<br />
[2020-12-25 05:10:26] - New Record for Team's Most Assists (16) in 1 Game for USA!<br />
[2020-12-25 05:10:26] - New Record for Team's Most Goals (9) in 1 Game for USA!<br />
[2020-12-25 05:10:26] - New Record for Team's Most Hits (26) in 1 Game for USA!<br />
[2020-12-25 05:10:26] - New Record for Team's Most Points (25) in 1 Game for USA!<br />
[2020-12-25 05:10:26] - New Record for Team's Most Assists (16) in 1 Game for USA!<br />
[2020-12-25 05:10:26] - New Record for Team's Most Goals (9) in 1 Game for USA!<br />
[2020-12-13 12:32:17] - Nick Robertson has been selected as assistant for USA.<br />
[2020-12-13 12:32:17] - Unknown Player is no longer as assistant for USA.<br />
[2020-12-13 12:32:17] - Jake Sanderson has been selected as assistant for USA.<br />
[2020-12-13 12:32:17] - Unknown Player is no longer as assistant for USA.<br />
[2020-12-13 12:32:17] - Jack Hughes has been selected as captain for USA.<br />
[2020-12-13 12:32:17] - Unknown Player is no longer captain for USA.<br />
[2020-12-09 15:00:56] - Trevor Zegras was added to USA.<br />
[2020-12-09 15:00:55] - Thomas Bordeleau was added to USA.<br />
[2020-12-09 15:00:55] - Spencer Knight was added to USA.<br />
[2020-12-09 15:00:54] - Ryan Johnson was added to USA.<br />
[2020-12-09 15:00:54] - Patrick Moynihan was added to USA.<br />
[2020-12-09 15:00:53] - Nick Robertson was added to USA.<br />
[2020-12-09 15:00:53] - Matthew Boldy was added to USA.<br />
[2020-12-09 15:00:52] - Matthew Beniers was added to USA.<br />
[2020-12-09 15:00:52] - John Farinacci was added to USA.<br />
[2020-12-09 15:00:51] - Jayden Struble was added to USA.<br />
[2020-12-09 15:00:51] - Jake Sanderson was added to USA.<br />
[2020-12-09 15:00:51] - Jacob Perreault was added to USA.<br />
[2020-12-09 15:00:50] - Jackson LaCombe was added to USA.<br />
[2020-12-09 15:00:50] - Jack Hughes was added to USA.<br />
[2020-12-09 15:00:49] - Henry Thrun was added to USA.<br />
[2020-12-09 15:00:49] - Dustin Wolf was added to USA.<br />
[2020-12-09 15:00:48] - Drew Helleson was added to USA.<br />
[2020-12-09 15:00:48] - Drew Commesso was added to USA.<br />
[2020-12-09 15:00:47] - Cole Caufield was added to USA.<br />
[2020-12-09 15:00:47] - Cam York was added to USA.<br />
[2020-12-09 15:00:46] - Brendan Brisson was added to USA.<br />
[2020-12-09 15:00:46] - Bobby Brink was added to USA.<br />
[2020-12-09 15:00:45] - Alex Turcotte was added to USA.<br />
[2020-12-08 06:29:21] - USA hired Tony Granato for 500 000 $ for 1 year(s).<br />
[2020-12-07 06:39:57] - Drew Commesso has been added to USA.<br />
[2020-12-07 06:39:52] - Dustin Wolf has been added to USA.<br />
[2020-12-07 06:39:46] - Spencer Knight has been added to USA.<br />
[2020-12-07 06:39:39] - Henry Thrun has been added to USA.<br />
[2020-12-07 06:39:34] - Jackson LaCombe has been added to USA.<br />
[2020-12-07 06:39:28] - Jayden Struble has been added to USA.<br />
[2020-12-07 06:39:23] - Drew Helleson has been added to USA.<br />
[2020-12-07 06:39:17] - Ryan Johnson has been added to USA.<br />
[2020-12-07 06:39:11] - Cam York has been added to USA.<br />
[2020-12-07 06:39:06] - Jake Sanderson has been added to USA.<br />
[2020-12-07 06:39:01] - Matthew Beniers has been added to USA.<br />
[2020-12-07 06:38:54] - Patrick Moynihan has been added to USA.<br />
[2020-12-07 06:38:49] - Brendan Brisson has been added to USA.<br />
[2020-12-07 06:38:43] - Thomas Bordeleau has been added to USA.<br />
[2020-12-07 06:38:36] - Jacob Perreault has been added to USA.<br />
[2020-12-07 06:38:28] - John Farinacci has been added to USA.<br />
[2020-12-07 06:38:22] - Bobby Brink has been added to USA.<br />
[2020-12-07 06:37:30] - Trevor Zegras has been added to USA.<br />
[2020-12-07 06:37:21] - Alex Turcotte has been added to USA.<br />
[2020-12-07 06:37:15] - Matthew Boldy has been added to USA.<br />
[2020-12-07 06:37:09] - Jack Hughes has been added to USA.<br />
[2020-12-07 06:37:03] - Nick Robertson has been added to USA.<br />
[2020-12-07 06:36:57] - Cole Caufield has been added to USA.<br />
[2020-12-02 17:21:16] - General Manager Change : USA hired general manager Francis Bérubé<br />
[2020-12-02 17:21:09] - Team Name Change : Team 1 changed name to USA<br />
</div>
<?php include "Footer.php";?>

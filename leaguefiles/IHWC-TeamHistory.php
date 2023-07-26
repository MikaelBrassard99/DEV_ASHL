<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>IHWC - Team History</title>
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
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#ALLEMAGNE">ALLEMAGNE</a> | <a href="#CANADA">CANADA</a> | <a href="#ETATS-UNIS">ETATS-UNIS</a> | <a href="#FINLANDE">FINLANDE</a> | <a href="#LETTONIE">LETTONIE</a> | <a href="#REPUBLIQUETCHEQUE">REPUBLIQUE TCHEQUE</a> | <a href="#RUSSIE">RUSSIE</a> | <a href="#SLOVAQUIE">SLOVAQUIE</a> | <a href="#SUEDE">SUEDE</a> | <a href="#SUISSE">SUISSE</a> | <a href="#TEAMWORLD">TEAM WORLD</a> | <a href="#U23NORTHAMERICA">U23 NORTH AMERICA</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamHistory_ALL"><a id="ALLEMAGNE">ALLEMAGNE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">ALLEMAGNE Page</a> ]
[ <a href="IHWC-ProTeamRoster.php#ALLEMAGNE">Pro Team Roster</a> ]
[ <a href="IHWC-ProTeamScoring.php#ALLEMAGNE">Pro Team Scoring</a> ]
[ <a href="IHWC-TeamFinance.php#ALLEMAGNE">Team Finance</a> ]
[ <a href="IHWC-ProTeamPlayersInfo.php#ALLEMAGNE">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-ProTeamLines.php#ALLEMAGNE">Pro Team Lines</a> ]
[ <a href="IHWC-TeamProspects.php#ALLEMAGNE">Team Prospects</a> ]
[ <a href="IHWC-ProTeamSchedule.php#ALLEMAGNE">Pro Team Schedule</a> ]
[ <a href="IHWC-ProTeamStats.php#ALLEMAGNE">Pro Team Stats</a> ]
[ <a href="IHWC-ProTeamStatsVS.php#ALLEMAGNE">Pro Team Stats VS</a> ]
[ <a href="IHWC-TeamInjurySuspension.php#ALLEMAGNE">Team Injury Suspension</a> ]
[ <a href="IHWC-TeamHistory.php#ALLEMAGNE">Team History</a> ]
[ <a href="IHWC-TeamRecords.php#ALLEMAGNE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ALLEMAGNE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ALLEMAGNE" style="display: block;">
<br /><br />
[2020-04-12 06:20:59] - New Record for Team's Most Hits (26) in 1 Game for ALLEMAGNE!<br />
[2020-04-12 06:20:59] - New Record for Team's Most Penalties Minutes (12) in 1 Game for ALLEMAGNE!<br />
[2020-04-12 06:20:59] - New Record for Team's Most Shots Blocked (19) in 1 Game for ALLEMAGNE!<br />
[2020-04-09 06:59:01] - New Record for Team's Most Shots (41) in 1 Game for ALLEMAGNE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Hits (22) in 1 Game for ALLEMAGNE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Points (12) in 1 Game for ALLEMAGNE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Assists (8) in 1 Game for ALLEMAGNE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Hits (17) in 1 Game for ALLEMAGNE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Penalties Minutes (8) in 1 Game for ALLEMAGNE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots Blocked (15) in 1 Game for ALLEMAGNE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots (40) in 1 Game for ALLEMAGNE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Points (11) in 1 Game for ALLEMAGNE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Assists (7) in 1 Game for ALLEMAGNE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Goals (4) in 1 Game for ALLEMAGNE!<br />
[2020-04-04 13:56:10] - Denis Reul has been selected as assistant for ALLEMAGNE.<br />
[2020-04-04 13:56:10] - Unknown Player is no longer as assistant for ALLEMAGNE.<br />
[2020-04-04 13:56:10] - Philip Gogulla has been selected as assistant for ALLEMAGNE.<br />
[2020-04-04 13:56:10] - Unknown Player is no longer as assistant for ALLEMAGNE.<br />
[2020-04-04 13:56:10] - Yannic Seidenberg has been selected as captain for ALLEMAGNE.<br />
[2020-04-04 13:56:10] - Unknown Player is no longer captain for ALLEMAGNE.<br />
[2020-04-02 13:53:47] - Yannic Seidenberg was added to ALLEMAGNE.<br />
[2020-04-02 13:53:45] - Yannic Seidenberg has been added to ALLEMAGNE.<br />
[2020-04-02 06:51:11] - Danny aus den Birken was added to ALLEMAGNE.<br />
[2020-04-02 06:51:09] - Danny aus den Birken has been added to ALLEMAGNE.<br />
[2020-04-02 06:48:49] - Mathias Niederberger was added to ALLEMAGNE.<br />
[2020-04-02 06:48:47] - Mathias Niederberger has been added to ALLEMAGNE.<br />
[2020-04-02 06:44:11] - Moritz Seider was added to ALLEMAGNE.<br />
[2020-04-02 06:44:09] - Moritz Seider has been added to ALLEMAGNE.<br />
[2020-04-02 06:39:47] - Simon Sezemsky was added to ALLEMAGNE.<br />
[2020-04-02 06:39:46] - Simon Sezemsky has been added to ALLEMAGNE.<br />
[2020-04-02 06:33:59] - Leon Gawanke was added to ALLEMAGNE.<br />
[2020-04-02 06:33:58] - Leon Gawanke has been added to ALLEMAGNE.<br />
[2020-04-02 06:29:55] - Konrad Abeltshauser was added to ALLEMAGNE.<br />
[2020-04-02 06:29:54] - Konrad Abeltshauser has been added to ALLEMAGNE.<br />
[2020-04-02 06:24:30] - Jonas Müller was added to ALLEMAGNE.<br />
[2020-04-02 06:24:28] - Jonas Müller has been added to ALLEMAGNE.<br />
[2020-04-02 06:15:56] - Denis Reul was added to ALLEMAGNE.<br />
[2020-04-02 06:15:54] - Denis Reul has been added to ALLEMAGNE.<br />
[2020-04-02 05:47:59] - Tobias Rieder was added to ALLEMAGNE.<br />
[2020-04-02 05:47:56] - Tobias Rieder has been added to ALLEMAGNE.<br />
[2020-04-02 05:44:55] - Tim Stützle was added to ALLEMAGNE.<br />
[2020-04-02 05:44:53] - Tim Stützle has been added to ALLEMAGNE.<br />
[2020-04-02 05:32:22] - Philip Gogulla was added to ALLEMAGNE.<br />
[2020-04-02 05:32:20] - Philip Gogulla has been added to ALLEMAGNE.<br />
[2020-04-01 19:36:18] - Nico Sturm was added to ALLEMAGNE.<br />
[2020-04-01 19:36:16] - Nico Sturm has been added to ALLEMAGNE.<br />
[2020-04-01 19:29:06] - Markus Eisenschmid was added to ALLEMAGNE.<br />
[2020-04-01 19:29:05] - Markus Eisenschmid has been added to ALLEMAGNE.<br />
[2020-04-01 19:23:25] - Marc Michaelis was added to ALLEMAGNE.<br />
[2020-04-01 19:23:23] - Marc Michaelis has been added to ALLEMAGNE.<br />
[2020-04-01 19:18:03] - Lukas Reichel was added to ALLEMAGNE.<br />
[2020-04-01 19:17:58] - Lukas Reichel has been added to ALLEMAGNE.<br />
[2020-04-01 19:10:24] - Lean Bergmann was added to ALLEMAGNE.<br />
[2020-04-01 19:10:21] - Lean Bergmann has been added to ALLEMAGNE.<br />
[2020-04-01 19:03:14] - Laurin Braun was added to ALLEMAGNE.<br />
[2020-04-01 19:03:12] - Laurin Braun has been added to ALLEMAGNE.<br />
[2020-04-01 19:00:23] - Eduard Lewandowski was added to ALLEMAGNE.<br />
[2020-04-01 19:00:21] - Eduard Lewandowski has been added to ALLEMAGNE.<br />
[2020-04-01 18:56:30] - Dominik Kahun was added to ALLEMAGNE.<br />
[2020-04-01 18:56:28] - Dominik Kahun has been added to ALLEMAGNE.<br />
[2020-04-01 18:53:19] - Dominik Bokk was added to ALLEMAGNE.<br />
[2020-04-01 18:53:17] - Dominik Bokk has been added to ALLEMAGNE.<br />
[2020-04-01 18:49:37] - Daniel Pietta was added to ALLEMAGNE.<br />
[2020-04-01 18:49:35] - Daniel Pietta has been added to ALLEMAGNE.<br />
[2020-04-01 18:42:48] - Brooks Macek was added to ALLEMAGNE.<br />
[2020-04-01 18:42:45] - Brooks Macek has been added to ALLEMAGNE.<br />
[2020-04-01 18:36:49] - ALLEMAGNE hired Marco Sturm for 1 000 000 $ for 2 year(s).<br />
[2020-03-24 18:53:00] - General Manager Change : ALLEMAGNE hired general manager David Côté<br />
[2020-01-21 11:49:29] - Team Name Change : Team 12 changed name to ALLEMAGNE<br />
</div>
<h1 class="TeamHistory_CAN"><a id="CANADA">CANADA</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">CANADA Page</a> ]
[ <a href="IHWC-ProTeamRoster.php#CANADA">Pro Team Roster</a> ]
[ <a href="IHWC-ProTeamScoring.php#CANADA">Pro Team Scoring</a> ]
[ <a href="IHWC-TeamFinance.php#CANADA">Team Finance</a> ]
[ <a href="IHWC-ProTeamPlayersInfo.php#CANADA">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-ProTeamLines.php#CANADA">Pro Team Lines</a> ]
[ <a href="IHWC-TeamProspects.php#CANADA">Team Prospects</a> ]
[ <a href="IHWC-ProTeamSchedule.php#CANADA">Pro Team Schedule</a> ]
[ <a href="IHWC-ProTeamStats.php#CANADA">Pro Team Stats</a> ]
[ <a href="IHWC-ProTeamStatsVS.php#CANADA">Pro Team Stats VS</a> ]
[ <a href="IHWC-TeamInjurySuspension.php#CANADA">Team Injury Suspension</a> ]
[ <a href="IHWC-TeamHistory.php#CANADA">Team History</a> ]
[ <a href="IHWC-TeamRecords.php#CANADA">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CANADA');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CANADA" style="display: block;">
<br /><br />
[2020-04-12 06:20:59] - New Record for Team's Most Hits (21) in 1 Game for CANADA!<br />
[2020-04-12 06:20:59] - New Record for Team's Most Shots (51) in 1 Game for CANADA!<br />
[2020-04-12 06:20:59] - New Record for Team's Most Points (21) in 1 Game for CANADA!<br />
[2020-04-12 06:20:59] - New Record for Team's Most Assists (14) in 1 Game for CANADA!<br />
[2020-04-12 06:20:59] - New Record for Team's Most Shots (51) in 1 Game for CANADA!<br />
[2020-04-12 06:20:59] - New Record for Team's Most Points (21) in 1 Game for CANADA!<br />
[2020-04-12 06:20:59] - New Record for Team's Most Assists (14) in 1 Game for CANADA!<br />
[2020-04-10 07:02:40] - New Record for Team's Most Penalties Minutes (10) in 1 Game for CANADA!<br />
[2020-04-09 06:59:02] - New Record for Team's Most Shots Blocked (12) in 1 Game for CANADA!<br />
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
[2020-04-05 11:15:01] - Cam Fowler has been selected as assistant for CANADA.<br />
[2020-04-05 11:15:01] - Unknown Player is no longer as assistant for CANADA.<br />
[2020-04-05 11:15:01] - John Tavares has been selected as assistant for CANADA.<br />
[2020-04-05 11:15:01] - Unknown Player is no longer as assistant for CANADA.<br />
[2020-04-05 11:15:01] - Jonathan Toews has been selected as captain for CANADA.<br />
[2020-04-05 11:15:01] - Unknown Player is no longer captain for CANADA.<br />
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
[2020-04-04 13:19:50] - CANADA hired Ron Wilson for 2 500 000 $ for 3 year(s).<br />
[2020-03-24 18:52:21] - General Manager Change : CANADA hired general manager Martin Mercier<br />
[2020-01-21 11:48:45] - Team Name Change : Team 10 changed name to CANADA<br />
</div>
<h1 class="TeamHistory_USA"><a id="ETATS-UNIS">ETATS-UNIS</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">ETATS-UNIS Page</a> ]
[ <a href="IHWC-ProTeamRoster.php#ETATS-UNIS">Pro Team Roster</a> ]
[ <a href="IHWC-ProTeamScoring.php#ETATS-UNIS">Pro Team Scoring</a> ]
[ <a href="IHWC-TeamFinance.php#ETATS-UNIS">Team Finance</a> ]
[ <a href="IHWC-ProTeamPlayersInfo.php#ETATS-UNIS">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-ProTeamLines.php#ETATS-UNIS">Pro Team Lines</a> ]
[ <a href="IHWC-TeamProspects.php#ETATS-UNIS">Team Prospects</a> ]
[ <a href="IHWC-ProTeamSchedule.php#ETATS-UNIS">Pro Team Schedule</a> ]
[ <a href="IHWC-ProTeamStats.php#ETATS-UNIS">Pro Team Stats</a> ]
[ <a href="IHWC-ProTeamStatsVS.php#ETATS-UNIS">Pro Team Stats VS</a> ]
[ <a href="IHWC-TeamInjurySuspension.php#ETATS-UNIS">Team Injury Suspension</a> ]
[ <a href="IHWC-TeamHistory.php#ETATS-UNIS">Team History</a> ]
[ <a href="IHWC-TeamRecords.php#ETATS-UNIS">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ETATS-UNIS');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ETATS-UNIS" style="display: block;">
<br /><br />
[2020-04-11 07:05:58] - New Record for Team's Most Points (12) in 1 Game for ETATS-UNIS!<br />
[2020-04-11 07:05:58] - New Record for Team's Most Assists (8) in 1 Game for ETATS-UNIS!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Shots (42) in 1 Game for ETATS-UNIS!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Hits (38) in 1 Game for ETATS-UNIS!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Penalties Minutes (16) in 1 Game for ETATS-UNIS!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots Blocked (13) in 1 Game for ETATS-UNIS!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots (32) in 1 Game for ETATS-UNIS!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Points (11) in 1 Game for ETATS-UNIS!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Assists (6) in 1 Game for ETATS-UNIS!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Goals (5) in 1 Game for ETATS-UNIS!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Hits (38) in 1 Game for ETATS-UNIS!<br />
[2020-04-06 06:46:34] - Ryan Suter has been selected as assistant for ETATS-UNIS.<br />
[2020-04-06 06:46:34] - Unknown Player is no longer as assistant for ETATS-UNIS.<br />
[2020-04-06 06:46:34] - Phil Kessel has been selected as assistant for ETATS-UNIS.<br />
[2020-04-06 06:46:34] - Unknown Player is no longer as assistant for ETATS-UNIS.<br />
[2020-04-06 06:46:34] - Blake Wheeler has been selected as captain for ETATS-UNIS.<br />
[2020-04-06 06:46:34] - Unknown Player is no longer captain for ETATS-UNIS.<br />
[2020-04-03 11:37:42] - Connor Hellebuyck was added to ETATS-UNIS.<br />
[2020-04-03 11:37:40] - Connor Hellebuyck has been added to ETATS-UNIS.<br />
[2020-04-03 11:36:26] - Ben Bishop was added to ETATS-UNIS.<br />
[2020-04-03 11:36:24] - Ben Bishop has been added to ETATS-UNIS.<br />
[2020-04-03 11:34:55] - Jake Gardiner was added to ETATS-UNIS.<br />
[2020-04-03 11:34:53] - Jake Gardiner has been added to ETATS-UNIS.<br />
[2020-04-03 11:33:21] - Jamie McBain was added to ETATS-UNIS.<br />
[2020-04-03 11:33:19] - Jamie McBain has been added to ETATS-UNIS.<br />
[2020-04-03 11:31:42] - Jacob Trouba was added to ETATS-UNIS.<br />
[2020-04-03 11:31:40] - Jacob Trouba has been added to ETATS-UNIS.<br />
[2020-04-03 11:30:14] - Ryan Suter was added to ETATS-UNIS.<br />
[2020-04-03 11:30:12] - Ryan Suter has been added to ETATS-UNIS.<br />
[2020-04-03 11:28:43] - John Carlson was added to ETATS-UNIS.<br />
[2020-04-03 11:28:41] - John Carlson has been added to ETATS-UNIS.<br />
[2020-04-03 11:26:29] - Zach Bogosian was added to ETATS-UNIS.<br />
[2020-04-03 11:26:27] - Zach Bogosian has been added to ETATS-UNIS.<br />
[2020-04-03 11:24:48] - Tyler Myers was added to ETATS-UNIS.<br />
[2020-04-03 11:24:46] - Tyler Myers has been added to ETATS-UNIS.<br />
[2020-04-03 11:22:23] - Phil Kessel was added to ETATS-UNIS.<br />
[2020-04-03 11:22:21] - Phil Kessel has been added to ETATS-UNIS.<br />
[2020-04-03 11:19:34] - Ryan Callahan was added to ETATS-UNIS.<br />
[2020-04-03 11:19:32] - Ryan Callahan has been added to ETATS-UNIS.<br />
[2020-04-03 11:17:49] - Emerson Etem was added to ETATS-UNIS.<br />
[2020-04-03 11:17:47] - Emerson Etem has been added to ETATS-UNIS.<br />
[2020-04-03 11:16:09] - Max Pacioretty was added to ETATS-UNIS.<br />
[2020-04-03 11:16:08] - Max Pacioretty has been added to ETATS-UNIS.<br />
[2020-04-03 11:14:01] - Kevin Labanc was added to ETATS-UNIS.<br />
[2020-04-03 11:13:55] - Kevin Labanc has been added to ETATS-UNIS.<br />
[2020-04-03 11:12:29] - James Van Riemsdyk was added to ETATS-UNIS.<br />
[2020-04-03 11:12:27] - James Van Riemsdyk has been added to ETATS-UNIS.<br />
[2020-04-03 11:10:44] - Johnny Gaudreau was added to ETATS-UNIS.<br />
[2020-04-03 11:10:42] - Johnny Gaudreau has been added to ETATS-UNIS.<br />
[2020-04-03 11:09:06] - Zach Parise was added to ETATS-UNIS.<br />
[2020-04-03 11:09:03] - Zach Parise has been added to ETATS-UNIS.<br />
[2020-04-03 11:07:28] - Kyle Connor was added to ETATS-UNIS.<br />
[2020-04-03 11:07:26] - Kyle Connor has been added to ETATS-UNIS.<br />
[2020-04-03 11:05:41] - Jack Eichel was added to ETATS-UNIS.<br />
[2020-04-03 11:05:39] - Jack Eichel has been added to ETATS-UNIS.<br />
[2020-04-03 11:04:12] - Blake Wheeler was added to ETATS-UNIS.<br />
[2020-04-03 11:04:10] - Blake Wheeler has been added to ETATS-UNIS.<br />
[2020-04-03 11:02:26] - Tyler Johnson was added to ETATS-UNIS.<br />
[2020-04-03 11:02:25] - Tyler Johnson has been added to ETATS-UNIS.<br />
[2020-04-03 11:00:55] - Cole Cassels was added to ETATS-UNIS.<br />
[2020-04-03 11:00:53] - Cole Cassels has been added to ETATS-UNIS.<br />
[2020-04-03 10:59:17] - Derek Stepan was added to ETATS-UNIS.<br />
[2020-04-03 10:59:15] - Derek Stepan has been added to ETATS-UNIS.<br />
[2020-04-03 10:55:21] - ETATS-UNIS hired Todd Richards for 2 000 000 $ for 4 year(s).<br />
[2020-03-24 18:54:08] - General Manager Change : ETATS-UNIS hired general manager Jonathan Légaré<br />
[2020-01-21 11:50:39] - Team Name Change : Team 5 changed name to ETATS-UNIS<br />
</div>
<h1 class="TeamHistory_FIN"><a id="FINLANDE">FINLANDE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">FINLANDE Page</a> ]
[ <a href="IHWC-ProTeamRoster.php#FINLANDE">Pro Team Roster</a> ]
[ <a href="IHWC-ProTeamScoring.php#FINLANDE">Pro Team Scoring</a> ]
[ <a href="IHWC-TeamFinance.php#FINLANDE">Team Finance</a> ]
[ <a href="IHWC-ProTeamPlayersInfo.php#FINLANDE">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-ProTeamLines.php#FINLANDE">Pro Team Lines</a> ]
[ <a href="IHWC-TeamProspects.php#FINLANDE">Team Prospects</a> ]
[ <a href="IHWC-ProTeamSchedule.php#FINLANDE">Pro Team Schedule</a> ]
[ <a href="IHWC-ProTeamStats.php#FINLANDE">Pro Team Stats</a> ]
[ <a href="IHWC-ProTeamStatsVS.php#FINLANDE">Pro Team Stats VS</a> ]
[ <a href="IHWC-TeamInjurySuspension.php#FINLANDE">Team Injury Suspension</a> ]
[ <a href="IHWC-TeamHistory.php#FINLANDE">Team History</a> ]
[ <a href="IHWC-TeamRecords.php#FINLANDE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_FINLANDE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_FINLANDE" style="display: block;">
<br /><br />
[2020-04-12 06:20:59] - New Record for Team's Most Hits (26) in 1 Game for FINLANDE!<br />
[2020-04-12 06:20:59] - New Record for Team's Most Penalties Minutes (8) in 1 Game for FINLANDE!<br />
[2020-04-12 06:20:59] - New Record for Team's Most Shots Blocked (15) in 1 Game for FINLANDE!<br />
[2020-04-11 07:05:58] - New Record for Team's Most Points (14) in 1 Game for FINLANDE!<br />
[2020-04-11 07:05:58] - New Record for Team's Most Assists (9) in 1 Game for FINLANDE!<br />
[2020-04-11 07:05:58] - New Record for Team's Most Goals (5) in 1 Game for FINLANDE!<br />
[2020-04-10 07:02:40] - New Record for Team's Most Shots Blocked (14) in 1 Game for FINLANDE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Shots Blocked (10) in 1 Game for FINLANDE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Shots (39) in 1 Game for FINLANDE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Points (12) in 1 Game for FINLANDE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Assists (8) in 1 Game for FINLANDE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Goals (4) in 1 Game for FINLANDE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Hits (20) in 1 Game for FINLANDE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Penalties Minutes (4) in 1 Game for FINLANDE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots Blocked (9) in 1 Game for FINLANDE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots (35) in 1 Game for FINLANDE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Points (3) in 1 Game for FINLANDE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Assists (2) in 1 Game for FINLANDE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Goals (1) in 1 Game for FINLANDE!<br />
[2020-04-05 06:37:03] - Olli Maatta has been selected as assistant for FINLANDE.<br />
[2020-04-05 06:37:03] - Unknown Player is no longer as assistant for FINLANDE.<br />
[2020-04-05 06:37:03] - Sami Vatanen has been selected as assistant for FINLANDE.<br />
[2020-04-05 06:37:03] - Unknown Player is no longer as assistant for FINLANDE.<br />
[2020-04-05 06:37:03] - Tuomo Ruutu has been selected as captain for FINLANDE.<br />
[2020-04-05 06:37:03] - Unknown Player is no longer captain for FINLANDE.<br />
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
[2020-04-04 11:40:24] - FINLANDE hired Saku Koivu for 900 000 $ for 3 year(s).<br />
[2020-03-24 18:54:17] - General Manager Change : FINLANDE hired general manager Sébastien Tremblay<br />
[2020-01-21 11:50:29] - Team Name Change : Team 11 changed name to FINLANDE<br />
</div>
<h1 class="TeamHistory_LET"><a id="LETTONIE">LETTONIE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">LETTONIE Page</a> ]
[ <a href="IHWC-ProTeamRoster.php#LETTONIE">Pro Team Roster</a> ]
[ <a href="IHWC-ProTeamScoring.php#LETTONIE">Pro Team Scoring</a> ]
[ <a href="IHWC-TeamFinance.php#LETTONIE">Team Finance</a> ]
[ <a href="IHWC-ProTeamPlayersInfo.php#LETTONIE">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-ProTeamLines.php#LETTONIE">Pro Team Lines</a> ]
[ <a href="IHWC-TeamProspects.php#LETTONIE">Team Prospects</a> ]
[ <a href="IHWC-ProTeamSchedule.php#LETTONIE">Pro Team Schedule</a> ]
[ <a href="IHWC-ProTeamStats.php#LETTONIE">Pro Team Stats</a> ]
[ <a href="IHWC-ProTeamStatsVS.php#LETTONIE">Pro Team Stats VS</a> ]
[ <a href="IHWC-TeamInjurySuspension.php#LETTONIE">Team Injury Suspension</a> ]
[ <a href="IHWC-TeamHistory.php#LETTONIE">Team History</a> ]
[ <a href="IHWC-TeamRecords.php#LETTONIE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LETTONIE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LETTONIE" style="display: block;">
<br /><br />
[2020-04-10 07:02:40] - New Record for Team's Most Shots (36) in 1 Game for LETTONIE!<br />
[2020-04-08 06:57:12] - New Record for Team's Most Hits (17) in 1 Game for LETTONIE!<br />
[2020-04-08 06:57:12] - New Record for Team's Most Shots (32) in 1 Game for LETTONIE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Penalties Minutes (10) in 1 Game for LETTONIE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Shots (31) in 1 Game for LETTONIE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Points (9) in 1 Game for LETTONIE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Assists (6) in 1 Game for LETTONIE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Goals (3) in 1 Game for LETTONIE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Hits (16) in 1 Game for LETTONIE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Penalties Minutes (4) in 1 Game for LETTONIE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots Blocked (14) in 1 Game for LETTONIE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots (26) in 1 Game for LETTONIE!<br />
[2020-04-05 06:37:12] - Kaspars Daugavins has been selected as assistant for LETTONIE.<br />
[2020-04-05 06:37:12] - Unknown Player is no longer as assistant for LETTONIE.<br />
[2020-04-05 06:37:12] - Martin Karsums has been selected as assistant for LETTONIE.<br />
[2020-04-05 06:37:12] - Unknown Player is no longer as assistant for LETTONIE.<br />
[2020-04-05 06:37:12] - Oskars Bartulis has been selected as captain for LETTONIE.<br />
[2020-04-05 06:37:12] - Unknown Player is no longer captain for LETTONIE.<br />
[2020-04-04 09:14:06] - Arturs Silovs was added to LETTONIE.<br />
[2020-04-04 09:14:05] - Arturs Silovs has been added to LETTONIE.<br />
[2020-04-04 06:28:05] - Harijs Brants was added to LETTONIE.<br />
[2020-04-04 06:28:03] - Harijs Brants has been added to LETTONIE.<br />
[2020-04-04 06:26:03] - Oskars Bartulis was added to LETTONIE.<br />
[2020-04-04 06:26:01] - Oskars Bartulis has been added to LETTONIE.<br />
[2020-04-04 06:24:13] - Oskars Cibulskis retired from LETTONIE<br />
[2020-04-04 06:24:05] - Kristaps Zile retired from LETTONIE<br />
[2020-04-04 06:14:52] - Raimonds Vitolins was added to LETTONIE.<br />
[2020-04-04 06:14:50] - Raimonds Vitolins has been added to LETTONIE.<br />
[2020-04-04 06:09:42] - Miks Indrasis was added to LETTONIE.<br />
[2020-04-04 06:09:39] - Miks Indrasis has been added to LETTONIE.<br />
[2020-04-04 05:56:23] - Frenks Razgals was added to LETTONIE.<br />
[2020-04-04 05:56:22] - Frenks Razgals has been added to LETTONIE.<br />
[2020-04-04 05:52:41] - Martin Karsums was added to LETTONIE.<br />
[2020-04-04 05:52:39] - Martin Karsums has been added to LETTONIE.<br />
[2020-04-04 05:46:52] - Andris Dzerins was added to LETTONIE.<br />
[2020-04-04 05:46:51] - Andris Dzerins has been added to LETTONIE.<br />
[2020-04-04 05:42:28] - Vitalijs Pavlovs was added to LETTONIE.<br />
[2020-04-04 05:42:26] - Vitalijs Pavlovs has been added to LETTONIE.<br />
[2020-04-04 05:34:43] - Oskars Batna was added to LETTONIE.<br />
[2020-04-04 05:34:41] - Oskars Batna has been added to LETTONIE.<br />
[2020-04-04 05:30:11] - Kaspars Daugavins was added to LETTONIE.<br />
[2020-04-04 05:30:09] - Kaspars Daugavins has been added to LETTONIE.<br />
[2020-03-26 14:11:46] - Kristaps Sotnieks was added to LETTONIE.<br />
[2020-03-26 14:11:44] - Kristaps Sotnieks has been added to LETTONIE.<br />
[2020-03-26 14:08:39] - Uvis Janis Balinskis was added to LETTONIE.<br />
[2020-03-26 14:08:36] - Uvis Janis Balinskis has been added to LETTONIE.<br />
[2020-03-26 07:00:40] - Kristaps Zile was added to LETTONIE.<br />
[2020-03-26 07:00:38] - Kristaps Zile has been added to LETTONIE.<br />
[2020-03-26 06:57:35] - Oskars Cibulskis was added to LETTONIE.<br />
[2020-03-26 06:57:29] - Oskars Cibulskis has been added to LETTONIE.<br />
[2020-03-26 06:49:56] - Kalvis Ozols was added to LETTONIE.<br />
[2020-03-26 06:49:53] - Kalvis Ozols has been added to LETTONIE.<br />
[2020-03-26 06:45:50] - Janis Jaks was added to LETTONIE.<br />
[2020-03-26 06:45:47] - Janis Jaks has been added to LETTONIE.<br />
[2020-03-26 06:30:48] - LETTONIE hired Aldis Girgensons for 500 000 $ for 1 year(s).<br />
[2020-03-26 06:24:47] - Emils Gegeris was added to LETTONIE.<br />
[2020-03-26 06:24:45] - Emils Gegeris has been added to LETTONIE.<br />
[2020-03-26 06:21:19] - Lauris Darzins was added to LETTONIE.<br />
[2020-03-26 06:21:16] - Lauris Darzins has been added to LETTONIE.<br />
[2020-03-26 06:17:28] - Mareks Mitens was added to LETTONIE.<br />
[2020-03-26 06:17:26] - Mareks Mitens has been added to LETTONIE.<br />
[2020-03-26 06:15:58] - Karlis Cukste was added to LETTONIE.<br />
[2020-03-26 06:15:55] - Karlis Cukste has been added to LETTONIE.<br />
[2020-03-26 06:12:43] - Rodrigo Abols was added to LETTONIE.<br />
[2020-03-26 06:12:40] - Rodrigo Abols has been added to LETTONIE.<br />
[2020-03-26 06:09:43] - Ronalds Kenins was added to LETTONIE.<br />
[2020-03-26 06:09:37] - Ronalds Kenins has been added to LETTONIE.<br />
[2020-03-26 06:07:38] - Rudolfs Balcers was added to LETTONIE.<br />
[2020-03-26 06:07:36] - Rudolfs Balcers has been added to LETTONIE.<br />
[2020-03-26 06:05:21] - Nikita Jevpalovs was added to LETTONIE.<br />
[2020-03-26 06:05:18] - Nikita Jevpalovs has been added to LETTONIE.<br />
[2020-03-24 18:53:34] - General Manager Change : LETTONIE hired general manager Olivier Madgin<br />
[2020-01-21 11:50:18] - Team Name Change : Team 9 changed name to LETTONIE<br />
</div>
<h1 class="TeamHistory_TCH"><a id="REPUBLIQUETCHEQUE">REPUBLIQUE TCHEQUE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">REPUBLIQUE TCHEQUE Page</a> ]
[ <a href="IHWC-ProTeamRoster.php#REPUBLIQUETCHEQUE">Pro Team Roster</a> ]
[ <a href="IHWC-ProTeamScoring.php#REPUBLIQUETCHEQUE">Pro Team Scoring</a> ]
[ <a href="IHWC-TeamFinance.php#REPUBLIQUETCHEQUE">Team Finance</a> ]
[ <a href="IHWC-ProTeamPlayersInfo.php#REPUBLIQUETCHEQUE">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-ProTeamLines.php#REPUBLIQUETCHEQUE">Pro Team Lines</a> ]
[ <a href="IHWC-TeamProspects.php#REPUBLIQUETCHEQUE">Team Prospects</a> ]
[ <a href="IHWC-ProTeamSchedule.php#REPUBLIQUETCHEQUE">Pro Team Schedule</a> ]
[ <a href="IHWC-ProTeamStats.php#REPUBLIQUETCHEQUE">Pro Team Stats</a> ]
[ <a href="IHWC-ProTeamStatsVS.php#REPUBLIQUETCHEQUE">Pro Team Stats VS</a> ]
[ <a href="IHWC-TeamInjurySuspension.php#REPUBLIQUETCHEQUE">Team Injury Suspension</a> ]
[ <a href="IHWC-TeamHistory.php#REPUBLIQUETCHEQUE">Team History</a> ]
[ <a href="IHWC-TeamRecords.php#REPUBLIQUETCHEQUE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_REPUBLIQUETCHEQUE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_REPUBLIQUETCHEQUE" style="display: block;">
<br /><br />
[2020-04-11 07:05:58] - New Record for Team's Most Points (17) in 1 Game for REPUBLIQUE TCHEQUE!<br />
[2020-04-11 07:05:58] - New Record for Team's Most Assists (11) in 1 Game for REPUBLIQUE TCHEQUE!<br />
[2020-04-11 07:05:58] - New Record for Team's Most Goals (6) in 1 Game for REPUBLIQUE TCHEQUE!<br />
[2020-04-10 07:02:40] - New Record for Team's Most Shots Blocked (13) in 1 Game for REPUBLIQUE TCHEQUE!<br />
[2020-04-09 06:59:01] - New Record for Team's Most Shots (39) in 1 Game for REPUBLIQUE TCHEQUE!<br />
[2020-04-09 06:59:01] - New Record for Team's Most Points (10) in 1 Game for REPUBLIQUE TCHEQUE!<br />
[2020-04-09 06:59:01] - New Record for Team's Most Goals (4) in 1 Game for REPUBLIQUE TCHEQUE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Hits (21) in 1 Game for REPUBLIQUE TCHEQUE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Shots Blocked (12) in 1 Game for REPUBLIQUE TCHEQUE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Shots (32) in 1 Game for REPUBLIQUE TCHEQUE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Points (9) in 1 Game for REPUBLIQUE TCHEQUE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Assists (6) in 1 Game for REPUBLIQUE TCHEQUE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Hits (19) in 1 Game for REPUBLIQUE TCHEQUE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Penalties Minutes (10) in 1 Game for REPUBLIQUE TCHEQUE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots Blocked (8) in 1 Game for REPUBLIQUE TCHEQUE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots (25) in 1 Game for REPUBLIQUE TCHEQUE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Points (8) in 1 Game for REPUBLIQUE TCHEQUE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Assists (5) in 1 Game for REPUBLIQUE TCHEQUE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Goals (3) in 1 Game for REPUBLIQUE TCHEQUE!<br />
[2020-04-05 06:37:37] - Michael Frolik has been selected as assistant for REPUBLIQUE TCHEQUE.<br />
[2020-04-05 06:37:37] - Unknown Player is no longer as assistant for REPUBLIQUE TCHEQUE.<br />
[2020-04-05 06:37:37] - David Krejci has been selected as assistant for REPUBLIQUE TCHEQUE.<br />
[2020-04-05 06:37:37] - Unknown Player is no longer as assistant for REPUBLIQUE TCHEQUE.<br />
[2020-04-05 06:37:37] - Jaromir Jagr has been selected as captain for REPUBLIQUE TCHEQUE.<br />
[2020-04-05 06:37:37] - Unknown Player is no longer captain for REPUBLIQUE TCHEQUE.<br />
[2020-04-04 05:18:42] - Vojtech Budik was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-04 05:18:40] - Vojtech Budik has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-04 04:55:42] - Jindrich Abdul was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-04 04:55:41] - Jindrich Abdul has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 05:14:35] - Pavel Francouz was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 05:14:33] - Pavel Francouz has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 05:12:57] - Petr Mrazek was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 05:12:55] - Petr Mrazek has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 05:11:24] - Filip Kral was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 05:11:22] - Filip Kral has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 05:08:49] - Jakub Zboril was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 05:08:48] - Jakub Zboril has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:42:20] - Tomas Kundratek was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:42:18] - Tomas Kundratek has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:40:26] - Filip Hronek was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:40:24] - Filip Hronek has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:38:30] - Andrej Sustr was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:38:28] - Andrej Sustr has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:35:51] - Jakub Kindl was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:35:50] - Jakub Kindl has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:32:20] - Jaromir Jagr was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:32:18] - Jaromir Jagr has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:29:41] - Filip Chytil was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:29:39] - Filip Chytil has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:24:14] - Martin Necas was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:24:09] - artin Necas has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:03:57] - Filip Chlapik was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:03:54] - Filip Chlapik has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:00:28] - David Kampf was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 04:00:26] - David Kampf has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:56:30] - Dominik Simon was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:56:28] - Dominik Simon has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:54:07] - Pavel Zacha was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:54:05] - Pavel Zacha has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:49:48] - Filip Zadina was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:49:47] - Filip Zadina has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:47:28] - Michael Frolik was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:47:26] - Michael Frolik has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:43:47] - Ondrej Palat was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:43:45] - Ondrej Palat has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:35:56] - Martin Hanzal was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:35:54] - Martin Hanzal has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:33:10] - Ondrej Kase was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:33:08] - Ondrej Kase has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:30:58] - David Krejci was added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:30:56] - David Krejci has been added to REPUBLIQUE TCHEQUE.<br />
[2020-04-03 03:28:42] - REPUBLIQUE TCHEQUE hired Robert Lang for 500 000 $ for 1 year(s).<br />
[2020-03-24 18:52:34] - General Manager Change : REPUBLIQUE TCHEQUE hired general manager Éric Simard<br />
[2020-01-21 11:49:02] - Team Name Change : Team 2 changed name to REPUBLIQUE TCHEQUE<br />
</div>
<h1 class="TeamHistory_RUS"><a id="RUSSIE">RUSSIE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">RUSSIE Page</a> ]
[ <a href="IHWC-ProTeamRoster.php#RUSSIE">Pro Team Roster</a> ]
[ <a href="IHWC-ProTeamScoring.php#RUSSIE">Pro Team Scoring</a> ]
[ <a href="IHWC-TeamFinance.php#RUSSIE">Team Finance</a> ]
[ <a href="IHWC-ProTeamPlayersInfo.php#RUSSIE">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-ProTeamLines.php#RUSSIE">Pro Team Lines</a> ]
[ <a href="IHWC-TeamProspects.php#RUSSIE">Team Prospects</a> ]
[ <a href="IHWC-ProTeamSchedule.php#RUSSIE">Pro Team Schedule</a> ]
[ <a href="IHWC-ProTeamStats.php#RUSSIE">Pro Team Stats</a> ]
[ <a href="IHWC-ProTeamStatsVS.php#RUSSIE">Pro Team Stats VS</a> ]
[ <a href="IHWC-TeamInjurySuspension.php#RUSSIE">Team Injury Suspension</a> ]
[ <a href="IHWC-TeamHistory.php#RUSSIE">Team History</a> ]
[ <a href="IHWC-TeamRecords.php#RUSSIE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_RUSSIE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_RUSSIE" style="display: block;">
<br /><br />
[2020-04-12 06:20:59] - New Record for Team's Most Hits (26) in 1 Game for RUSSIE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Penalties Minutes (12) in 1 Game for RUSSIE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Shots Blocked (14) in 1 Game for RUSSIE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Points (14) in 1 Game for RUSSIE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Assists (9) in 1 Game for RUSSIE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Goals (5) in 1 Game for RUSSIE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Hits (19) in 1 Game for RUSSIE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Penalties Minutes (4) in 1 Game for RUSSIE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots Blocked (6) in 1 Game for RUSSIE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots (45) in 1 Game for RUSSIE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Points (12) in 1 Game for RUSSIE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Assists (8) in 1 Game for RUSSIE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Goals (4) in 1 Game for RUSSIE!<br />
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
[2020-04-04 07:16:00] - Evgeny Grachev was added to RUSSIE.<br />
[2020-04-04 07:15:53] - Evgeny Grachev has been added to RUSSIE.<br />
[2020-04-04 07:15:48] - Mikhail Grigorenko was added to RUSSIE.<br />
[2020-04-04 07:15:46] - Mikhail Grigorenko has been added to RUSSIE.<br />
[2020-04-04 06:58:12] - Vladislav Namestnikov was added to RUSSIE.<br />
[2020-04-04 06:58:10] - Vladislav Namestnikov has been added to RUSSIE.<br />
[2020-04-04 06:55:22] - Dmitrij Jaskin was added to RUSSIE.<br />
[2020-04-04 06:55:20] - Dmitrij Jaskin has been added to RUSSIE.<br />
[2020-04-04 06:43:00] - Nikita Gusev was added to RUSSIE.<br />
[2020-04-04 06:42:58] - Nikita Gusev has been added to RUSSIE.<br />
[2020-04-04 06:41:26] - Alexander Ovechkin was added to RUSSIE.<br />
[2020-04-04 06:41:24] - Alexander Ovechkin has been added to RUSSIE.<br />
[2020-04-04 06:39:10] - RUSSIE hired Zinetula Bilyaletdinov for 500 000 $ for 1 year(s).<br />
[2020-03-24 18:53:48] - General Manager Change : RUSSIE hired general manager Maxime-Olivier Mercier<br />
[2020-01-21 11:49:57] - Team Name Change : Team 1 changed name to RUSSIE<br />
</div>
<h1 class="TeamHistory_SLO"><a id="SLOVAQUIE">SLOVAQUIE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">SLOVAQUIE Page</a> ]
[ <a href="IHWC-ProTeamRoster.php#SLOVAQUIE">Pro Team Roster</a> ]
[ <a href="IHWC-ProTeamScoring.php#SLOVAQUIE">Pro Team Scoring</a> ]
[ <a href="IHWC-TeamFinance.php#SLOVAQUIE">Team Finance</a> ]
[ <a href="IHWC-ProTeamPlayersInfo.php#SLOVAQUIE">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-ProTeamLines.php#SLOVAQUIE">Pro Team Lines</a> ]
[ <a href="IHWC-TeamProspects.php#SLOVAQUIE">Team Prospects</a> ]
[ <a href="IHWC-ProTeamSchedule.php#SLOVAQUIE">Pro Team Schedule</a> ]
[ <a href="IHWC-ProTeamStats.php#SLOVAQUIE">Pro Team Stats</a> ]
[ <a href="IHWC-ProTeamStatsVS.php#SLOVAQUIE">Pro Team Stats VS</a> ]
[ <a href="IHWC-TeamInjurySuspension.php#SLOVAQUIE">Team Injury Suspension</a> ]
[ <a href="IHWC-TeamHistory.php#SLOVAQUIE">Team History</a> ]
[ <a href="IHWC-TeamRecords.php#SLOVAQUIE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SLOVAQUIE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SLOVAQUIE" style="display: block;">
<br /><br />
[2020-04-11 07:05:58] - New Record for Team's Most Shots (42) in 1 Game for SLOVAQUIE!<br />
[2020-04-10 07:02:40] - New Record for Team's Most Penalties Minutes (12) in 1 Game for SLOVAQUIE!<br />
[2020-04-10 07:02:40] - New Record for Team's Most Shots (36) in 1 Game for SLOVAQUIE!<br />
[2020-04-10 07:02:40] - New Record for Team's Most Points (14) in 1 Game for SLOVAQUIE!<br />
[2020-04-10 07:02:40] - New Record for Team's Most Assists (9) in 1 Game for SLOVAQUIE!<br />
[2020-04-10 07:02:40] - New Record for Team's Most Goals (5) in 1 Game for SLOVAQUIE!<br />
[2020-04-09 06:59:01] - New Record for Team's Most Shots (33) in 1 Game for SLOVAQUIE!<br />
[2020-04-09 06:59:01] - New Record for Team's Most Points (7) in 1 Game for SLOVAQUIE!<br />
[2020-04-09 06:59:01] - New Record for Team's Most Goals (3) in 1 Game for SLOVAQUIE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Hits (26) in 1 Game for SLOVAQUIE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Penalties Minutes (8) in 1 Game for SLOVAQUIE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots Blocked (24) in 1 Game for SLOVAQUIE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots (30) in 1 Game for SLOVAQUIE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Points (6) in 1 Game for SLOVAQUIE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Assists (4) in 1 Game for SLOVAQUIE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Goals (2) in 1 Game for SLOVAQUIE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Hits (26) in 1 Game for SLOVAQUIE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots Blocked (24) in 1 Game for SLOVAQUIE!<br />
[2020-04-05 08:01:16] - Martin Marincin has been selected as assistant for SLOVAQUIE.<br />
[2020-04-05 08:01:16] - Unknown Player is no longer as assistant for SLOVAQUIE.<br />
[2020-04-05 08:01:16] - Andrej Sekera has been selected as assistant for SLOVAQUIE.<br />
[2020-04-05 08:01:16] - Unknown Player is no longer as assistant for SLOVAQUIE.<br />
[2020-04-05 08:01:16] - Marko Dano has been selected as captain for SLOVAQUIE.<br />
[2020-04-05 08:01:16] - Unknown Player is no longer captain for SLOVAQUIE.<br />
[2020-04-03 11:40:59] - Patrik Rybar was added to SLOVAQUIE.<br />
[2020-04-03 11:40:57] - Patrik Rybar has been added to SLOVAQUIE.<br />
[2020-04-03 10:57:13] - SLOVAQUIE hired Miroslav Satan for 500 000 $ for 1 year(s).<br />
[2020-04-03 10:52:20] - Denis Godla was added to SLOVAQUIE.<br />
[2020-04-03 10:52:19] - Denis Godla has been added to SLOVAQUIE.<br />
[2020-04-03 10:50:47] - Peter Ceresnak was added to SLOVAQUIE.<br />
[2020-04-03 10:50:45] - Peter Ceresnak has been added to SLOVAQUIE.<br />
[2020-04-03 10:43:50] - Marek Daloga was added to SLOVAQUIE.<br />
[2020-04-03 10:43:48] - Marek Daloga has been added to SLOVAQUIE.<br />
[2020-04-03 10:41:09] - Martin Fehervary was added to SLOVAQUIE.<br />
[2020-04-03 10:41:07] - Martin Fehervary has been added to SLOVAQUIE.<br />
[2020-04-03 10:37:29] - Patrik Koch was added to SLOVAQUIE.<br />
[2020-04-03 10:37:27] - Patrik Koch has been added to SLOVAQUIE.<br />
[2020-04-03 10:33:11] - Martin Marincin was added to SLOVAQUIE.<br />
[2020-04-03 10:33:09] - Martin Marincin has been added to SLOVAQUIE.<br />
[2020-04-03 10:31:26] - Michal Cajkovsky was added to SLOVAQUIE.<br />
[2020-04-03 10:31:24] - Michal Cajkovsky has been added to SLOVAQUIE.<br />
[2020-04-03 10:27:57] - Andrej Sekera was added to SLOVAQUIE.<br />
[2020-04-03 10:27:55] - Andrej Sekera has been added to SLOVAQUIE.<br />
[2020-04-03 10:26:13] - Marcel Hascak was added to SLOVAQUIE.<br />
[2020-04-03 10:26:11] - Marcel Hascak has been added to SLOVAQUIE.<br />
[2020-04-03 10:23:29] - Tomas Marcinko was added to SLOVAQUIE.<br />
[2020-04-03 10:23:27] - Tomas Marcinko has been added to SLOVAQUIE.<br />
[2020-04-03 10:20:55] - Martin Bakos was added to SLOVAQUIE.<br />
[2020-04-03 10:20:52] - Martin Bakos has been added to SLOVAQUIE.<br />
[2020-04-03 10:16:05] - Matus Sukel was added to SLOVAQUIE.<br />
[2020-04-03 10:16:04] - Matus Sukel has been added to SLOVAQUIE.<br />
[2020-04-03 10:12:25] - Patrik Lamper was added to SLOVAQUIE.<br />
[2020-04-03 10:12:23] - Patrik Lamper has been added to SLOVAQUIE.<br />
[2020-04-03 10:09:21] - Lukas Cingel was added to SLOVAQUIE.<br />
[2020-04-03 10:09:19] - Lukas Cingel has been added to SLOVAQUIE.<br />
[2020-04-03 10:03:52] - Michal Kristof was added to SLOVAQUIE.<br />
[2020-04-03 10:03:50] - Michal Kristof has been added to SLOVAQUIE.<br />
[2020-04-03 09:57:18] - Andrej Kudrna was added to SLOVAQUIE.<br />
[2020-04-03 09:57:17] - Andrej Kudrna has been added to SLOVAQUIE.<br />
[2020-04-03 08:38:24] - Marian Studenic was added to SLOVAQUIE.<br />
[2020-04-03 08:38:21] - Marian Studenic has been added to SLOVAQUIE.<br />
[2020-04-03 08:27:48] - Tomas Zigo was added to SLOVAQUIE.<br />
[2020-04-03 08:27:47] - Tomas Zigo has been added to SLOVAQUIE.<br />
[2020-04-03 08:19:28] - Libor Hudacek was added to SLOVAQUIE.<br />
[2020-04-03 08:19:26] - Libor Hudacek has been added to SLOVAQUIE.<br />
[2020-04-03 06:09:10] - Robert Lantosi was added to SLOVAQUIE.<br />
[2020-04-03 06:09:08] - Robert Lantosi has been added to SLOVAQUIE.<br />
[2020-04-03 06:05:43] - Marko Dano was added to SLOVAQUIE.<br />
[2020-04-03 06:05:41] - Marko Dano has been added to SLOVAQUIE.<br />
[2020-04-03 06:03:40] - Adam Liska was added to SLOVAQUIE.<br />
[2020-04-03 06:03:39] - Adam Liska has been added to SLOVAQUIE.<br />
[2020-03-24 18:53:17] - General Manager Change : SLOVAQUIE hired general manager Felix Fortier<br />
[2020-01-21 11:49:38] - Team Name Change : Team 6 changed name to SLOVAQUIE<br />
</div>
<h1 class="TeamHistory_SWE"><a id="SUEDE">SUEDE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">SUEDE Page</a> ]
[ <a href="IHWC-ProTeamRoster.php#SUEDE">Pro Team Roster</a> ]
[ <a href="IHWC-ProTeamScoring.php#SUEDE">Pro Team Scoring</a> ]
[ <a href="IHWC-TeamFinance.php#SUEDE">Team Finance</a> ]
[ <a href="IHWC-ProTeamPlayersInfo.php#SUEDE">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-ProTeamLines.php#SUEDE">Pro Team Lines</a> ]
[ <a href="IHWC-TeamProspects.php#SUEDE">Team Prospects</a> ]
[ <a href="IHWC-ProTeamSchedule.php#SUEDE">Pro Team Schedule</a> ]
[ <a href="IHWC-ProTeamStats.php#SUEDE">Pro Team Stats</a> ]
[ <a href="IHWC-ProTeamStatsVS.php#SUEDE">Pro Team Stats VS</a> ]
[ <a href="IHWC-TeamInjurySuspension.php#SUEDE">Team Injury Suspension</a> ]
[ <a href="IHWC-TeamHistory.php#SUEDE">Team History</a> ]
[ <a href="IHWC-TeamRecords.php#SUEDE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SUEDE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SUEDE" style="display: block;">
<br /><br />
[2020-04-12 06:20:58] - New Record for Team's Most Penalties Minutes (10) in 1 Game for SUEDE!<br />
[2020-04-10 07:02:40] - New Record for Team's Most Shots (35) in 1 Game for SUEDE!<br />
[2020-04-10 05:40:07] - General Manager Change : SUEDE hired general manager Alexandre Brabant<br />
[2020-04-10 05:40:07] - General Manager Change : SUEDE fired general manager Maxyme Veaudry<br />
[2020-04-09 06:59:02] - New Record for Team's Most Shots Blocked (24) in 1 Game for SUEDE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Penalties Minutes (8) in 1 Game for SUEDE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Hits (22) in 1 Game for SUEDE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Penalties Minutes (6) in 1 Game for SUEDE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots Blocked (3) in 1 Game for SUEDE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots (33) in 1 Game for SUEDE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Points (18) in 1 Game for SUEDE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Assists (12) in 1 Game for SUEDE!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Goals (6) in 1 Game for SUEDE!<br />
[2020-04-06 06:47:02] - Erik Karlsson has been selected as assistant for SUEDE.<br />
[2020-04-06 06:47:02] - Unknown Player is no longer as assistant for SUEDE.<br />
[2020-04-06 06:47:02] - Gabriel Landeskog has been selected as assistant for SUEDE.<br />
[2020-04-06 06:47:02] - Unknown Player is no longer as assistant for SUEDE.<br />
[2020-04-06 06:47:02] - Nicklas Backstrom has been selected as captain for SUEDE.<br />
[2020-04-06 06:47:02] - Unknown Player is no longer captain for SUEDE.<br />
[2020-04-04 15:28:40] - Anders Nilsson was added to SUEDE.<br />
[2020-04-04 15:27:43] - Anders Nilsson has been added to SUEDE.<br />
[2020-04-04 15:26:54] - Robin Lehner was added to SUEDE.<br />
[2020-04-04 15:26:52] - Robin Lehner has been added to SUEDE.<br />
[2020-04-04 15:25:18] - Niklas Hjalmarsson was added to SUEDE.<br />
[2020-04-04 15:24:16] - Niklas Hjalmarsson has been added to SUEDE.<br />
[2020-04-04 15:23:32] - Rasmus Andersson was added to SUEDE.<br />
[2020-04-04 15:23:31] - Rasmus Andersson has been added to SUEDE.<br />
[2020-04-04 15:21:28] - Jonas Brodin was added to SUEDE.<br />
[2020-04-04 15:21:27] - Jonas Brodin has been added to SUEDE.<br />
[2020-04-04 15:19:46] - Hampus Lindholm was added to SUEDE.<br />
[2020-04-04 15:19:45] - Hampus Lindholm has been added to SUEDE.<br />
[2020-04-04 15:18:07] - Erik Karlsson was added to SUEDE.<br />
[2020-04-04 15:18:06] - Erik Karlsson has been added to SUEDE.<br />
[2020-04-04 15:16:34] - Victor Hedman was added to SUEDE.<br />
[2020-04-04 15:16:32] - Victor Hedman has been added to SUEDE.<br />
[2020-04-04 15:15:08] - Tobias Enstrom was added to SUEDE.<br />
[2020-04-04 15:15:07] - Tobias Enstrom has been added to SUEDE.<br />
[2020-04-04 15:13:39] - Patrik Berglund was added to SUEDE.<br />
[2020-04-04 15:13:38] - Patrik Berglund has been added to SUEDE.<br />
[2020-04-04 15:11:03] - Joel Eriksson Ek was added to SUEDE.<br />
[2020-04-04 15:11:01] - Joel Eriksson Ek has been added to SUEDE.<br />
[2020-04-04 15:09:18] - Max Friberg was added to SUEDE.<br />
[2020-04-04 15:09:17] - Max Friberg has been added to SUEDE.<br />
[2020-04-04 15:07:37] - Mattias Tedenby was added to SUEDE.<br />
[2020-04-04 15:07:35] - Mattias Tedenby has been added to SUEDE.<br />
[2020-04-04 15:06:09] - Gustav Nyquist was added to SUEDE.<br />
[2020-04-04 15:06:07] - Gustav Nyquist has been added to SUEDE.<br />
[2020-04-04 15:04:43] - Jacob De La Rose was added to SUEDE.<br />
[2020-04-04 15:04:42] - Jacob De La Rose has been added to SUEDE.<br />
[2020-04-04 15:03:18] - Magnus Paajarvi was added to SUEDE.<br />
[2020-04-04 15:03:16] - Magnus Paajarvi has been added to SUEDE.<br />
[2020-04-04 15:01:53] - Henrik Sedin was added to SUEDE.<br />
[2020-04-04 15:01:51] - Henrik Sedin has been added to SUEDE.<br />
[2020-04-04 15:00:30] - Victor Olofsson was added to SUEDE.<br />
[2020-04-04 15:00:29] - Victor Olofsson has been added to SUEDE.<br />
[2020-04-04 14:58:55] - Loui Eriksson was added to SUEDE.<br />
[2020-04-04 14:58:54] - Loui Eriksson has been added to SUEDE.<br />
[2020-04-04 14:57:11] - Gabriel Landeskog was added to SUEDE.<br />
[2020-04-04 14:57:09] - Gabriel Landeskog has been added to SUEDE.<br />
[2020-04-04 14:55:48] - William Nylander was added to SUEDE.<br />
[2020-04-04 14:55:45] - William Nylander has been added to SUEDE.<br />
[2020-04-04 14:55:41] - Rickard Rakell was added to SUEDE.<br />
[2020-04-04 14:55:39] - Rickard Rakell has been added to SUEDE.<br />
[2020-04-04 14:52:38] - SUEDE hired Daniel Alfredsson for 500 000 $ for 1 year(s).<br />
[2020-04-04 14:51:43] - Nicklas Backstrom was added to SUEDE.<br />
[2020-04-04 14:51:41] - Nicklas Backstrom has been added to SUEDE.<br />
[2020-03-24 18:52:49] - General Manager Change : SUEDE hired general manager Maxyme Veaudry<br />
[2020-01-21 11:49:13] - Team Name Change : Team 4 changed name to SUEDE<br />
</div>
<h1 class="TeamHistory_SUI"><a id="SUISSE">SUISSE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">SUISSE Page</a> ]
[ <a href="IHWC-ProTeamRoster.php#SUISSE">Pro Team Roster</a> ]
[ <a href="IHWC-ProTeamScoring.php#SUISSE">Pro Team Scoring</a> ]
[ <a href="IHWC-TeamFinance.php#SUISSE">Team Finance</a> ]
[ <a href="IHWC-ProTeamPlayersInfo.php#SUISSE">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-ProTeamLines.php#SUISSE">Pro Team Lines</a> ]
[ <a href="IHWC-TeamProspects.php#SUISSE">Team Prospects</a> ]
[ <a href="IHWC-ProTeamSchedule.php#SUISSE">Pro Team Schedule</a> ]
[ <a href="IHWC-ProTeamStats.php#SUISSE">Pro Team Stats</a> ]
[ <a href="IHWC-ProTeamStatsVS.php#SUISSE">Pro Team Stats VS</a> ]
[ <a href="IHWC-TeamInjurySuspension.php#SUISSE">Team Injury Suspension</a> ]
[ <a href="IHWC-TeamHistory.php#SUISSE">Team History</a> ]
[ <a href="IHWC-TeamRecords.php#SUISSE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SUISSE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SUISSE" style="display: block;">
<br /><br />
[2020-04-10 07:02:40] - New Record for Team's Most Shots Blocked (19) in 1 Game for SUISSE!<br />
[2020-04-10 07:02:40] - New Record for Team's Most Points (16) in 1 Game for SUISSE!<br />
[2020-04-10 07:02:40] - New Record for Team's Most Goals (6) in 1 Game for SUISSE!<br />
[2020-04-09 06:59:02] - New Record for Team's Most Hits (25) in 1 Game for SUISSE!<br />
[2020-04-09 05:23:03] - Andreas Ambuhl has been selected as assistant for SUISSE.<br />
[2020-04-09 05:23:03] - Erik Karlsson is no longer as assistant for SUISSE.<br />
[2020-04-09 05:23:03] - Nino Niederreiter has been selected as assistant for SUISSE.<br />
[2020-04-09 05:23:03] - Gabriel Landeskog is no longer as assistant for SUISSE.<br />
[2020-04-09 05:23:03] - Raphael Diaz has been selected as captain for SUISSE.<br />
[2020-04-09 05:23:03] - Nicklas Backstrom is no longer captain for SUISSE.<br />
[2020-04-09 05:22:49] - Erik Karlsson has been selected as assistant for SUISSE.<br />
[2020-04-09 05:22:49] - Andreas Ambuhl is no longer as assistant for SUISSE.<br />
[2020-04-09 05:22:49] - Gabriel Landeskog has been selected as assistant for SUISSE.<br />
[2020-04-09 05:22:49] - Nino Niederreiter is no longer as assistant for SUISSE.<br />
[2020-04-09 05:22:49] - Nicklas Backstrom has been selected as captain for SUISSE.<br />
[2020-04-09 05:22:49] - Raphael Diaz is no longer captain for SUISSE.<br />
[2020-04-07 06:59:37] - New Record for Team's Most Penalties Minutes (8) in 1 Game for SUISSE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Shots Blocked (10) in 1 Game for SUISSE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Points (15) in 1 Game for SUISSE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Assists (10) in 1 Game for SUISSE!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Goals (5) in 1 Game for SUISSE!<br />
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
[2020-04-05 06:36:31] - Andreas Ambuhl has been selected as assistant for SUISSE.<br />
[2020-04-05 06:36:31] - Unknown Player is no longer as assistant for SUISSE.<br />
[2020-04-05 06:36:31] - Nino Niederreiter has been selected as assistant for SUISSE.<br />
[2020-04-05 06:36:31] - Unknown Player is no longer as assistant for SUISSE.<br />
[2020-04-05 06:36:31] - Raphael Diaz has been selected as captain for SUISSE.<br />
[2020-04-05 06:36:31] - Unknown Player is no longer captain for SUISSE.<br />
[2020-04-01 18:31:51] - Michael Fora was added to SUISSE.<br />
[2020-04-01 18:31:49] - Michael Fora has been added to SUISSE.<br />
[2020-04-01 18:26:19] - Lukas Frick was added to SUISSE.<br />
[2020-04-01 18:26:17] - Lukas Frick has been added to SUISSE.<br />
[2020-04-01 18:23:04] - Romain Loeffel was added to SUISSE.<br />
[2020-04-01 18:23:02] - Romain Loeffel has been added to SUISSE.<br />
[2020-04-01 18:17:22] - Nino Niederreiter was added to SUISSE.<br />
[2020-04-01 18:17:20] - Nino Niederreiter has been added to SUISSE.<br />
[2020-04-01 18:15:12] - Sven Baertschi was added to SUISSE.<br />
[2020-04-01 18:15:10] - Sven Baertschi has been added to SUISSE.<br />
[2020-03-30 16:09:53] - Luca Sbisa was added to SUISSE.<br />
[2020-03-30 16:09:51] - Luca Sbisa has been added to SUISSE.<br />
[2020-03-28 10:50:20] - Gregory Hofmann was added to SUISSE.<br />
[2020-03-28 10:50:18] - Gregory Hofmann has been added to SUISSE.<br />
[2020-03-28 10:46:27] - Fabrice Herzog was added to SUISSE.<br />
[2020-03-28 10:46:25] - Fabrice Herzog has been added to SUISSE.<br />
[2020-03-28 10:43:19] - Damien Riat was added to SUISSE.<br />
[2020-03-28 10:43:17] - Damien Riat has been added to SUISSE.<br />
[2020-03-28 10:40:38] - Calvin Thurkauf was added to SUISSE.<br />
[2020-03-28 10:40:37] - Calvin Thurkauf has been added to SUISSE.<br />
[2020-03-28 10:35:30] - Philipp Kurashev was added to SUISSE.<br />
[2020-03-28 10:35:28] - Philipp Kurashev has been added to SUISSE.<br />
[2020-03-28 10:32:08] - Simon Moser was added to SUISSE.<br />
[2020-03-28 10:32:06] - Simon Moser has been added to SUISSE.<br />
[2020-03-28 10:29:20] - Andreas Ambuhl was added to SUISSE.<br />
[2020-03-28 10:29:18] - Andreas Ambuhl has been added to SUISSE.<br />
[2020-03-28 10:25:21] - Vincent Praplan was added to SUISSE.<br />
[2020-03-28 10:25:19] - Vincent Praplan has been added to SUISSE.<br />
[2020-03-28 10:20:48] - Christoph Bertschy was added to SUISSE.<br />
[2020-03-28 10:20:40] - Christoph Bertschy  has been added to SUISSE.<br />
[2020-03-28 10:11:45] - Nico Hischier was added to SUISSE.<br />
[2020-03-28 10:11:43] - Nico Hischier has been added to SUISSE.<br />
[2020-03-26 15:13:05] - Robert Mayer was added to SUISSE.<br />
[2020-03-26 15:13:02] - Robert Mayer has been added to SUISSE.<br />
[2020-03-26 15:10:54] - Reto Berra was added to SUISSE.<br />
[2020-03-26 15:10:51] - Reto Berra has been added to SUISSE.<br />
[2020-03-26 15:08:47] - Raphael Diaz was added to SUISSE.<br />
[2020-03-26 15:08:44] - Raphael Diaz has been added to SUISSE.<br />
[2020-03-26 15:04:14] - Mirco Mueller was added to SUISSE.<br />
[2020-03-26 15:04:11] - Mirco Mueller has been added to SUISSE.<br />
[2020-03-26 15:02:03] - Yannick Weber was added to SUISSE.<br />
[2020-03-26 15:02:01] - Yannick Weber has been added to SUISSE.<br />
[2020-03-26 14:56:51] - Noah Rod was added to SUISSE.<br />
[2020-03-26 14:56:48] - Noah Rod has been added to SUISSE.<br />
[2020-03-26 14:54:06] - Damien Brunner was added to SUISSE.<br />
[2020-03-26 14:54:04] - Damien Brunner has been added to SUISSE.<br />
[2020-03-24 18:55:46] - SUISSE hired Christian Wohlwend for 500 000 $ for 1 year(s).<br />
[2020-03-24 18:53:56] - General Manager Change : SUISSE hired general manager Simon Brassard<br />
[2020-01-21 11:50:06] - Team Name Change : Team 3 changed name to SUISSE<br />
</div>
<h1 class="TeamHistory_TWO"><a id="TEAMWORLD">TEAM WORLD</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">TEAM WORLD Page</a> ]
[ <a href="IHWC-ProTeamRoster.php#TEAMWORLD">Pro Team Roster</a> ]
[ <a href="IHWC-ProTeamScoring.php#TEAMWORLD">Pro Team Scoring</a> ]
[ <a href="IHWC-TeamFinance.php#TEAMWORLD">Team Finance</a> ]
[ <a href="IHWC-ProTeamPlayersInfo.php#TEAMWORLD">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-ProTeamLines.php#TEAMWORLD">Pro Team Lines</a> ]
[ <a href="IHWC-TeamProspects.php#TEAMWORLD">Team Prospects</a> ]
[ <a href="IHWC-ProTeamSchedule.php#TEAMWORLD">Pro Team Schedule</a> ]
[ <a href="IHWC-ProTeamStats.php#TEAMWORLD">Pro Team Stats</a> ]
[ <a href="IHWC-ProTeamStatsVS.php#TEAMWORLD">Pro Team Stats VS</a> ]
[ <a href="IHWC-TeamInjurySuspension.php#TEAMWORLD">Team Injury Suspension</a> ]
[ <a href="IHWC-TeamHistory.php#TEAMWORLD">Team History</a> ]
[ <a href="IHWC-TeamRecords.php#TEAMWORLD">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TEAMWORLD');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TEAMWORLD" style="display: block;">
<br /><br />
[2020-04-09 06:59:02] - New Record for Team's Most Shots (46) in 1 Game for TEAM WORLD!<br />
[2020-04-09 06:59:02] - New Record for Team's Most Points (14) in 1 Game for TEAM WORLD!<br />
[2020-04-09 06:59:02] - New Record for Team's Most Assists (9) in 1 Game for TEAM WORLD!<br />
[2020-04-09 06:59:02] - New Record for Team's Most Shots (46) in 1 Game for TEAM WORLD!<br />
[2020-04-08 15:38:48] - Darren Dietz has been selected as assistant for TEAM WORLD.<br />
[2020-04-08 15:38:48] - Unknown Player is no longer as assistant for TEAM WORLD.<br />
[2020-04-08 15:38:48] - Antoine Roussel has been selected as assistant for TEAM WORLD.<br />
[2020-04-08 15:38:48] - Unknown Player is no longer as assistant for TEAM WORLD.<br />
[2020-04-08 15:38:48] - Lars Eller has been selected as captain for TEAM WORLD.<br />
[2020-04-08 15:38:48] - Unknown Player is no longer captain for TEAM WORLD.<br />
[2020-04-08 06:57:12] - New Record for Team's Most Hits (20) in 1 Game for TEAM WORLD!<br />
[2020-04-08 06:57:12] - New Record for Team's Most Shots (36) in 1 Game for TEAM WORLD!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Hits (16) in 1 Game for TEAM WORLD!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Penalties Minutes (14) in 1 Game for TEAM WORLD!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Points (13) in 1 Game for TEAM WORLD!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Assists (8) in 1 Game for TEAM WORLD!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Goals (5) in 1 Game for TEAM WORLD!<br />
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
[2020-04-03 08:10:13] - Nigel Dawes was added to TEAM WORLD.<br />
[2020-04-03 08:10:11] - Nigel Dawes has been added to TEAM WORLD.<br />
[2020-04-03 08:06:55] - Dustin Boyd was added to TEAM WORLD.<br />
[2020-04-03 08:06:53] - Dustin Boyd has been added to TEAM WORLD.<br />
[2020-04-03 08:04:41] - Darren Dietz was added to TEAM WORLD.<br />
[2020-04-03 08:04:40] - Darren Dietz has been added to TEAM WORLD.<br />
[2020-04-03 05:57:25] - Tim Bozon was added to TEAM WORLD.<br />
[2020-04-03 05:57:24] - Tim Bozon has been added to TEAM WORLD.<br />
[2020-04-03 05:55:02] - Joachim Blichfeld was added to TEAM WORLD.<br />
[2020-04-03 05:55:01] - Joachim Blichfeld has been added to TEAM WORLD.<br />
[2020-04-03 05:53:21] - Mathias From was added to TEAM WORLD.<br />
[2020-04-03 05:53:19] - Mathias From has been added to TEAM WORLD.<br />
[2020-04-03 05:51:23] - Wojtek Wolski was added to TEAM WORLD.<br />
[2020-04-03 05:51:21] - Wojtek Wolski has been added to TEAM WORLD.<br />
[2020-04-03 05:49:05] - Antoine Roussel was added to TEAM WORLD.<br />
[2020-04-03 05:49:04] - Antoine Roussel has been added to TEAM WORLD.<br />
[2020-04-03 05:47:34] - Daniel Sprong was added to TEAM WORLD.<br />
[2020-04-03 05:47:32] - Daniel Sprong has been added to TEAM WORLD.<br />
[2020-04-03 05:45:43] - Oliver Bjorkstrand was added to TEAM WORLD.<br />
[2020-04-03 05:45:42] - Oliver Bjorkstrand has been added to TEAM WORLD.<br />
[2020-04-03 05:44:04] - Thomas Vanek was added to TEAM WORLD.<br />
[2020-04-03 05:44:02] - Thomas Vanek has been added to TEAM WORLD.<br />
[2020-04-03 05:42:07] - Yegor Sharangovich was added to TEAM WORLD.<br />
[2020-04-03 05:42:05] - Yegor Sharangovich has been added to TEAM WORLD.<br />
[2020-04-03 05:40:27] - Max Hermens was added to TEAM WORLD.<br />
[2020-04-03 05:40:26] - Max Hermens has been added to TEAM WORLD.<br />
[2020-04-03 05:38:48] - Hafthor Sigrunarson was added to TEAM WORLD.<br />
[2020-04-03 05:38:46] - Hafthor Sigrunarson has been added to TEAM WORLD.<br />
[2020-04-03 05:36:58] - Lars Eller was added to TEAM WORLD.<br />
[2020-04-03 05:36:56] - Lars Eller has been added to TEAM WORLD.<br />
[2020-04-03 05:35:20] - Mattias Norstebo was added to TEAM WORLD.<br />
[2020-04-03 05:35:18] - Mattias Norstebo has been added to TEAM WORLD.<br />
[2020-04-03 05:32:51] - Andrey Pedan was added to TEAM WORLD.<br />
[2020-04-03 05:32:49] - Andrey Pedan has been added to TEAM WORLD.<br />
[2020-04-03 05:30:43] - Markus Lauridsen was added to TEAM WORLD.<br />
[2020-04-03 05:30:42] - Markus Lauridsen has been added to TEAM WORLD.<br />
[2020-04-03 05:28:32] - Enrico Miglioranzi was added to TEAM WORLD.<br />
[2020-04-03 05:28:31] - Enrico Miglioranzi has been added to TEAM WORLD.<br />
[2020-04-03 05:26:16] - Jesper Jensen was added to TEAM WORLD.<br />
[2020-04-03 05:26:15] - Jesper Jensen has been added to TEAM WORLD.<br />
[2020-04-03 05:23:47] - Raman Hrabarenka was added to TEAM WORLD.<br />
[2020-04-03 05:23:44] - Raman Hrabarenka has been added to TEAM WORLD.<br />
[2020-04-03 05:21:27] - Frederik Andersen was added to TEAM WORLD.<br />
[2020-04-03 05:21:25] - Frederik Andersen has been added to TEAM WORLD.<br />
[2020-04-03 05:19:45] - Alexandar Georgiyev was added to TEAM WORLD.<br />
[2020-04-03 05:19:43] - Alexandar Georgiyev has been added to TEAM WORLD.<br />
[2020-04-03 05:16:48] - TEAM WORLD hired Paul MacLean for 1 000 000 $ for 3 year(s).<br />
[2020-03-24 18:54:25] - General Manager Change : TEAM WORLD hired general manager Yannick Ferland<br />
[2020-01-21 11:51:02] - Team Name Change : Team 7 changed name to TEAM WORLD<br />
</div>
<h1 class="TeamHistory_U23"><a id="U23NORTHAMERICA">U23 NORTH AMERICA</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">U23 NORTH AMERICA Page</a> ]
[ <a href="IHWC-ProTeamRoster.php#U23NORTHAMERICA">Pro Team Roster</a> ]
[ <a href="IHWC-ProTeamScoring.php#U23NORTHAMERICA">Pro Team Scoring</a> ]
[ <a href="IHWC-TeamFinance.php#U23NORTHAMERICA">Team Finance</a> ]
[ <a href="IHWC-ProTeamPlayersInfo.php#U23NORTHAMERICA">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-ProTeamLines.php#U23NORTHAMERICA">Pro Team Lines</a> ]
[ <a href="IHWC-TeamProspects.php#U23NORTHAMERICA">Team Prospects</a> ]
[ <a href="IHWC-ProTeamSchedule.php#U23NORTHAMERICA">Pro Team Schedule</a> ]
[ <a href="IHWC-ProTeamStats.php#U23NORTHAMERICA">Pro Team Stats</a> ]
[ <a href="IHWC-ProTeamStatsVS.php#U23NORTHAMERICA">Pro Team Stats VS</a> ]
[ <a href="IHWC-TeamInjurySuspension.php#U23NORTHAMERICA">Team Injury Suspension</a> ]
[ <a href="IHWC-TeamHistory.php#U23NORTHAMERICA">Team History</a> ]
[ <a href="IHWC-TeamRecords.php#U23NORTHAMERICA">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_U23NORTHAMERICA');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_U23NORTHAMERICA" style="display: block;">
<br /><br />
[2020-04-10 07:02:40] - New Record for Team's Most Shots Blocked (16) in 1 Game for U23 NORTH AMERICA!<br />
[2020-04-10 07:02:40] - New Record for Team's Most Points (14) in 1 Game for U23 NORTH AMERICA!<br />
[2020-04-10 07:02:40] - New Record for Team's Most Assists (8) in 1 Game for U23 NORTH AMERICA!<br />
[2020-04-10 07:02:40] - New Record for Team's Most Goals (6) in 1 Game for U23 NORTH AMERICA!<br />
[2020-04-09 06:59:01] - New Record for Team's Most Hits (25) in 1 Game for U23 NORTH AMERICA!<br />
[2020-04-09 06:59:01] - New Record for Team's Most Shots (37) in 1 Game for U23 NORTH AMERICA!<br />
[2020-04-08 15:41:21] - Brock Boeser has been selected as assistant for U23 NORTH AMERICA.<br />
[2020-04-08 15:41:21] - Unknown Player is no longer as assistant for U23 NORTH AMERICA.<br />
[2020-04-08 15:41:21] - Thomas Chabot has been selected as assistant for U23 NORTH AMERICA.<br />
[2020-04-08 15:41:21] - Unknown Player is no longer as assistant for U23 NORTH AMERICA.<br />
[2020-04-08 15:41:21] - Mitch Marner has been selected as captain for U23 NORTH AMERICA.<br />
[2020-04-08 15:41:21] - Unknown Player is no longer captain for U23 NORTH AMERICA.<br />
[2020-04-07 06:59:37] - New Record for Team's Most Hits (22) in 1 Game for U23 NORTH AMERICA!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Shots (32) in 1 Game for U23 NORTH AMERICA!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Points (9) in 1 Game for U23 NORTH AMERICA!<br />
[2020-04-07 06:59:37] - New Record for Team's Most Assists (6) in 1 Game for U23 NORTH AMERICA!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Hits (16) in 1 Game for U23 NORTH AMERICA!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Penalties Minutes (21) in 1 Game for U23 NORTH AMERICA!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots Blocked (12) in 1 Game for U23 NORTH AMERICA!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Shots (31) in 1 Game for U23 NORTH AMERICA!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Points (8) in 1 Game for U23 NORTH AMERICA!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Assists (5) in 1 Game for U23 NORTH AMERICA!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Goals (3) in 1 Game for U23 NORTH AMERICA!<br />
[2020-04-06 06:57:08] - New Record for Team's Most Penalties Minutes (21) in 1 Game for U23 NORTH AMERICA!<br />
[2020-04-04 09:26:45] - Kirby Dach has been deleted from U23 NORTH AMERICA.<br />
[2020-04-04 09:26:33] - Kirby Dach has been added to U23 NORTH AMERICA.<br />
[2020-04-04 09:26:30] - Adam Fox was added to U23 NORTH AMERICA.<br />
[2020-04-04 09:26:28] - Adam Fox has been added to U23 NORTH AMERICA.<br />
[2020-04-04 09:26:25] - Quinn Hughes was added to U23 NORTH AMERICA.<br />
[2020-04-04 09:26:23] - Quinn Hughes has been added to U23 NORTH AMERICA.<br />
[2020-04-04 09:26:19] - Alexis Lafrenière was added to U23 NORTH AMERICA.<br />
[2020-04-04 09:26:18] - Alexis Lafrenière has been added to U23 NORTH AMERICA.<br />
[2020-04-04 09:17:34] - Kirby Dach was added to U23 NORTH AMERICA.<br />
[2020-04-04 09:17:33] - Kirby Dach has been added to U23 NORTH AMERICA.<br />
[2020-04-04 09:05:25] - Carter Hart was added to U23 NORTH AMERICA.<br />
[2020-04-04 09:05:23] - Colton Point was added to U23 NORTH AMERICA.<br />
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
[2020-04-04 08:40:04] - Brock Boeser was added to U23 NORTH AMERICA.<br />
[2020-04-04 08:40:02] - Brock Boeser has been added to U23 NORTH AMERICA.<br />
[2020-04-04 08:39:56] - Jack Roslovic was added to U23 NORTH AMERICA.<br />
[2020-04-04 08:39:55] - Jack Roslovic has been added to U23 NORTH AMERICA.<br />
[2020-04-04 08:39:50] - Zachary Senyshyn was added to U23 NORTH AMERICA.<br />
[2020-04-04 08:39:48] - Zachary Senyshyn has been added to U23 NORTH AMERICA.<br />
[2020-04-04 08:39:40] - Nick Suzuki was added to U23 NORTH AMERICA.<br />
[2020-04-04 08:39:39] - Nick Suzuki has been added to U23 NORTH AMERICA.<br />
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
[2020-04-04 07:28:12] - Dylan Strome was added to U23 NORTH AMERICA.<br />
[2020-04-04 07:28:10] - Dylan Strome has been added to U23 NORTH AMERICA.<br />
[2020-04-04 07:28:06] - Mitch Marner was added to U23 NORTH AMERICA.<br />
[2020-04-04 07:28:03] - Mitch Marner has been added to U23 NORTH AMERICA.<br />
[2020-04-04 07:28:00] - Anthony Cirelli was added to U23 NORTH AMERICA.<br />
[2020-04-04 07:27:57] - Anthony Cirelli has been added to U23 NORTH AMERICA.<br />
[2020-04-04 07:22:26] - U23 NORTH AMERICA hired Bruce Boudreau for 2 000 000 $ for 2 year(s).<br />
[2020-03-24 18:53:26] - General Manager Change : U23 NORTH AMERICA hired general manager J-P Vandal<br />
[2020-03-18 12:34:41] - Team Name Change : U23 North America changed name to U23 NORTH AMERICA<br />
[2020-03-18 12:34:27] - Team Name Change : DANEMARK changed name to U23 North America<br />
[2020-01-21 11:50:54] - Team Name Change : Team 8 changed name to DANEMARK<br />
</div>
<?php include "Footer.php";?>

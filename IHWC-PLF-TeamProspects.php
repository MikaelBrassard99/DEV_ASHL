<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>IHWC - Team Prospects</title>
<script src="IHWC-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.0.0 - IHWC-STHS.db - IHWC-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="IHWC-PLF.css" rel="stylesheet" type="text/css" />
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
<h1 class="TeamProspects_ALL"><a id="ALLEMAGNE">ALLEMAGNE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">ALLEMAGNE Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#ALLEMAGNE">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#ALLEMAGNE">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#ALLEMAGNE">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#ALLEMAGNE">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#ALLEMAGNE">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#ALLEMAGNE">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#ALLEMAGNE">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#ALLEMAGNE">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#ALLEMAGNE">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#ALLEMAGNE">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#ALLEMAGNE">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#ALLEMAGNE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ALLEMAGNE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ALLEMAGNE" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 0</h3>
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>ALL 1, ALL 2, ALL 3, ALL 4, ALL 5<br />
<b>Year 2022: </b>ALL 1, ALL 2, ALL 3, ALL 4, ALL 5<br />
<b>Year 2023: </b>ALL 1, ALL 2, ALL 3, ALL 4, ALL 5<br />
<b>Year 2024: </b>ALL 1, ALL 2, ALL 3, ALL 4, ALL 5<br />
<b>Year 2025: </b>ALL 1, ALL 2, ALL 3, ALL 4, ALL 5<br />
</div>
<h1 class="TeamProspects_CAN"><a id="CANADA">CANADA</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">CANADA Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#CANADA">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#CANADA">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#CANADA">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#CANADA">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#CANADA">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#CANADA">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#CANADA">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#CANADA">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#CANADA">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#CANADA">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#CANADA">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#CANADA">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CANADA');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CANADA" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 0</h3>
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>CAN 1, CAN 2, CAN 3, CAN 4, CAN 5<br />
<b>Year 2022: </b>CAN 1, CAN 2, CAN 3, CAN 4, CAN 5<br />
<b>Year 2023: </b>CAN 1, CAN 2, CAN 3, CAN 4, CAN 5<br />
<b>Year 2024: </b>CAN 1, CAN 2, CAN 3, CAN 4, CAN 5<br />
<b>Year 2025: </b>CAN 1, CAN 2, CAN 3, CAN 4, CAN 5<br />
</div>
<h1 class="TeamProspects_USA"><a id="ETATS-UNIS">ETATS-UNIS</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">ETATS-UNIS Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#ETATS-UNIS">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#ETATS-UNIS">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#ETATS-UNIS">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#ETATS-UNIS">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#ETATS-UNIS">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#ETATS-UNIS">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#ETATS-UNIS">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#ETATS-UNIS">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#ETATS-UNIS">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#ETATS-UNIS">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#ETATS-UNIS">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#ETATS-UNIS">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ETATS-UNIS');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ETATS-UNIS" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 0</h3>
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>USA 1, USA 2, USA 3, USA 4, USA 5<br />
<b>Year 2022: </b>USA 1, USA 2, USA 3, USA 4, USA 5<br />
<b>Year 2023: </b>USA 1, USA 2, USA 3, USA 4, USA 5<br />
<b>Year 2024: </b>USA 1, USA 2, USA 3, USA 4, USA 5<br />
<b>Year 2025: </b>USA 1, USA 2, USA 3, USA 4, USA 5<br />
</div>
<h1 class="TeamProspects_FIN"><a id="FINLANDE">FINLANDE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">FINLANDE Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#FINLANDE">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#FINLANDE">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#FINLANDE">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#FINLANDE">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#FINLANDE">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#FINLANDE">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#FINLANDE">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#FINLANDE">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#FINLANDE">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#FINLANDE">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#FINLANDE">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#FINLANDE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_FINLANDE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_FINLANDE" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 0</h3>
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>FIN 1, FIN 2, FIN 3, FIN 4, FIN 5<br />
<b>Year 2022: </b>FIN 1, FIN 2, FIN 3, FIN 4, FIN 5<br />
<b>Year 2023: </b>FIN 1, FIN 2, FIN 3, FIN 4, FIN 5<br />
<b>Year 2024: </b>FIN 1, FIN 2, FIN 3, FIN 4, FIN 5<br />
<b>Year 2025: </b>FIN 1, FIN 2, FIN 3, FIN 4, FIN 5<br />
</div>
<h1 class="TeamProspects_LET"><a id="LETTONIE">LETTONIE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">LETTONIE Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#LETTONIE">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#LETTONIE">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#LETTONIE">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#LETTONIE">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#LETTONIE">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#LETTONIE">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#LETTONIE">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#LETTONIE">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#LETTONIE">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#LETTONIE">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#LETTONIE">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#LETTONIE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LETTONIE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LETTONIE" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 0</h3>
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>LET 1, LET 2, LET 3, LET 4, LET 5<br />
<b>Year 2022: </b>LET 1, LET 2, LET 3, LET 4, LET 5<br />
<b>Year 2023: </b>LET 1, LET 2, LET 3, LET 4, LET 5<br />
<b>Year 2024: </b>LET 1, LET 2, LET 3, LET 4, LET 5<br />
<b>Year 2025: </b>LET 1, LET 2, LET 3, LET 4, LET 5<br />
</div>
<h1 class="TeamProspects_TCH"><a id="REPUBLIQUETCHEQUE">REPUBLIQUE TCHEQUE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">REPUBLIQUE TCHEQUE Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#REPUBLIQUETCHEQUE">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#REPUBLIQUETCHEQUE">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#REPUBLIQUETCHEQUE">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#REPUBLIQUETCHEQUE">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#REPUBLIQUETCHEQUE">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#REPUBLIQUETCHEQUE">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#REPUBLIQUETCHEQUE">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#REPUBLIQUETCHEQUE">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#REPUBLIQUETCHEQUE">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#REPUBLIQUETCHEQUE">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#REPUBLIQUETCHEQUE">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#REPUBLIQUETCHEQUE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_REPUBLIQUETCHEQUE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_REPUBLIQUETCHEQUE" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 0</h3>
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>TCH 1, TCH 2, TCH 3, TCH 4, TCH 5<br />
<b>Year 2022: </b>TCH 1, TCH 2, TCH 3, TCH 4, TCH 5<br />
<b>Year 2023: </b>TCH 1, TCH 2, TCH 3, TCH 4, TCH 5<br />
<b>Year 2024: </b>TCH 1, TCH 2, TCH 3, TCH 4, TCH 5<br />
<b>Year 2025: </b>TCH 1, TCH 2, TCH 3, TCH 4, TCH 5<br />
</div>
<h1 class="TeamProspects_RUS"><a id="RUSSIE">RUSSIE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">RUSSIE Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#RUSSIE">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#RUSSIE">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#RUSSIE">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#RUSSIE">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#RUSSIE">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#RUSSIE">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#RUSSIE">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#RUSSIE">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#RUSSIE">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#RUSSIE">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#RUSSIE">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#RUSSIE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_RUSSIE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_RUSSIE" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 0</h3>
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>RUS 1, RUS 2, RUS 3, RUS 4, RUS 5<br />
<b>Year 2022: </b>RUS 1, RUS 2, RUS 3, RUS 4, RUS 5<br />
<b>Year 2023: </b>RUS 1, RUS 2, RUS 3, RUS 4, RUS 5<br />
<b>Year 2024: </b>RUS 1, RUS 2, RUS 3, RUS 4, RUS 5<br />
<b>Year 2025: </b>RUS 1, RUS 2, RUS 3, RUS 4, RUS 5<br />
</div>
<h1 class="TeamProspects_SLO"><a id="SLOVAQUIE">SLOVAQUIE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">SLOVAQUIE Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#SLOVAQUIE">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#SLOVAQUIE">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#SLOVAQUIE">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#SLOVAQUIE">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#SLOVAQUIE">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#SLOVAQUIE">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#SLOVAQUIE">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#SLOVAQUIE">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#SLOVAQUIE">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#SLOVAQUIE">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#SLOVAQUIE">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#SLOVAQUIE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SLOVAQUIE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SLOVAQUIE" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 0</h3>
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>SLO 1, SLO 2, SLO 3, SLO 4, SLO 5<br />
<b>Year 2022: </b>SLO 1, SLO 2, SLO 3, SLO 4, SLO 5<br />
<b>Year 2023: </b>SLO 1, SLO 2, SLO 3, SLO 4, SLO 5<br />
<b>Year 2024: </b>SLO 1, SLO 2, SLO 3, SLO 4, SLO 5<br />
<b>Year 2025: </b>SLO 1, SLO 2, SLO 3, SLO 4, SLO 5<br />
</div>
<h1 class="TeamProspects_SWE"><a id="SUEDE">SUEDE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">SUEDE Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#SUEDE">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#SUEDE">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#SUEDE">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#SUEDE">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#SUEDE">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#SUEDE">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#SUEDE">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#SUEDE">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#SUEDE">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#SUEDE">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#SUEDE">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#SUEDE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SUEDE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SUEDE" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 0</h3>
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>SWE 1, SWE 2, SWE 3, SWE 4, SWE 5<br />
<b>Year 2022: </b>SWE 1, SWE 2, SWE 3, SWE 4, SWE 5<br />
<b>Year 2023: </b>SWE 1, SWE 2, SWE 3, SWE 4, SWE 5<br />
<b>Year 2024: </b>SWE 1, SWE 2, SWE 3, SWE 4, SWE 5<br />
<b>Year 2025: </b>SWE 1, SWE 2, SWE 3, SWE 4, SWE 5<br />
</div>
<h1 class="TeamProspects_SUI"><a id="SUISSE">SUISSE</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">SUISSE Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#SUISSE">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#SUISSE">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#SUISSE">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#SUISSE">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#SUISSE">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#SUISSE">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#SUISSE">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#SUISSE">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#SUISSE">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#SUISSE">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#SUISSE">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#SUISSE">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SUISSE');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SUISSE" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 0</h3>
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>SUI 1, SUI 2, SUI 3, SUI 4, SUI 5<br />
<b>Year 2022: </b>SUI 1, SUI 2, SUI 3, SUI 4, SUI 5<br />
<b>Year 2023: </b>SUI 1, SUI 2, SUI 3, SUI 4, SUI 5<br />
<b>Year 2024: </b>SUI 1, SUI 2, SUI 3, SUI 4, SUI 5<br />
<b>Year 2025: </b>SUI 1, SUI 2, SUI 3, SUI 4, SUI 5<br />
</div>
<h1 class="TeamProspects_TWO"><a id="TEAMWORLD">TEAM WORLD</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">TEAM WORLD Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#TEAMWORLD">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#TEAMWORLD">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#TEAMWORLD">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#TEAMWORLD">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#TEAMWORLD">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#TEAMWORLD">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#TEAMWORLD">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#TEAMWORLD">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#TEAMWORLD">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#TEAMWORLD">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#TEAMWORLD">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#TEAMWORLD">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TEAMWORLD');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TEAMWORLD" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 0</h3>
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>TWO 1, TWO 2, TWO 3, TWO 4, TWO 5<br />
<b>Year 2022: </b>TWO 1, TWO 2, TWO 3, TWO 4, TWO 5<br />
<b>Year 2023: </b>TWO 1, TWO 2, TWO 3, TWO 4, TWO 5<br />
<b>Year 2024: </b>TWO 1, TWO 2, TWO 3, TWO 4, TWO 5<br />
<b>Year 2025: </b>TWO 1, TWO 2, TWO 3, TWO 4, TWO 5<br />
</div>
<h1 class="TeamProspects_U23"><a id="U23NORTHAMERICA">U23 NORTH AMERICA</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">U23 NORTH AMERICA Page</a> ]
[ <a href="IHWC-PLF-ProTeamRoster.php#U23NORTHAMERICA">Pro Team Roster</a> ]
[ <a href="IHWC-PLF-ProTeamScoring.php#U23NORTHAMERICA">Pro Team Scoring</a> ]
[ <a href="IHWC-PLF-TeamFinance.php#U23NORTHAMERICA">Team Finance</a> ]
[ <a href="IHWC-PLF-ProTeamPlayersInfo.php#U23NORTHAMERICA">Pro Team PlayersInfo</a> ]
[ <a href="IHWC-PLF-ProTeamLines.php#U23NORTHAMERICA">Pro Team Lines</a> ]
[ <a href="IHWC-PLF-TeamProspects.php#U23NORTHAMERICA">Team Prospects</a> ]
[ <a href="IHWC-PLF-ProTeamSchedule.php#U23NORTHAMERICA">Pro Team Schedule</a> ]
[ <a href="IHWC-PLF-ProTeamStats.php#U23NORTHAMERICA">Pro Team Stats</a> ]
[ <a href="IHWC-PLF-ProTeamStatsVS.php#U23NORTHAMERICA">Pro Team Stats VS</a> ]
[ <a href="IHWC-PLF-TeamInjurySuspension.php#U23NORTHAMERICA">Team Injury Suspension</a> ]
[ <a href="IHWC-PLF-TeamHistory.php#U23NORTHAMERICA">Team History</a> ]
[ <a href="IHWC-PLF-TeamRecords.php#U23NORTHAMERICA">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_U23NORTHAMERICA');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_U23NORTHAMERICA" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 0</h3>
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>U23 1, U23 2, U23 3, U23 4, U23 5<br />
<b>Year 2022: </b>U23 1, U23 2, U23 3, U23 4, U23 5<br />
<b>Year 2023: </b>U23 1, U23 2, U23 3, U23 4, U23 5<br />
<b>Year 2024: </b>U23 1, U23 2, U23 3, U23 4, U23 5<br />
<b>Year 2025: </b>U23 1, U23 2, U23 3, U23 4, U23 5<br />
</div>
<?php include "Footer.php";?>

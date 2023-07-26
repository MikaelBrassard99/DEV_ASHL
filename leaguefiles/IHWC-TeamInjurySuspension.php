<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>IHWC - Team Injury Suspension</title>
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
<h1 class="TeamInjurySuspension_ALL"><a id="ALLEMAGNE">ALLEMAGNE</a></h1>
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
<br />
Brooks Macek is out for 5 days because of a Strained Left Elbow Injury.<br />
Denis Reul is out for 1 week because of a Fractured Bone in Left Hand Injury.<br />
</div>
<h1 class="TeamInjurySuspension_CAN"><a id="CANADA">CANADA</a></h1>
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
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_USA"><a id="ETATS-UNIS">ETATS-UNIS</a></h1>
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
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_FIN"><a id="FINLANDE">FINLANDE</a></h1>
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
<br />
Antti Suomela is out for 5 days because of a Separated Left Shoulder Injury.<br />
</div>
<h1 class="TeamInjurySuspension_LET"><a id="LETTONIE">LETTONIE</a></h1>
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
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_TCH"><a id="REPUBLIQUETCHEQUE">REPUBLIQUE TCHEQUE</a></h1>
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
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_RUS"><a id="RUSSIE">RUSSIE</a></h1>
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
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_SLO"><a id="SLOVAQUIE">SLOVAQUIE</a></h1>
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
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_SWE"><a id="SUEDE">SUEDE</a></h1>
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
<br />
Mattias Tedenby is out for 1 week because of a Bruised Right Foot Injury.<br />
</div>
<h1 class="TeamInjurySuspension_SUI"><a id="SUISSE">SUISSE</a></h1>
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
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_TWO"><a id="TEAMWORLD">TEAM WORLD</a></h1>
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
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_U23"><a id="U23NORTHAMERICA">U23 NORTH AMERICA</a></h1>
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
<br />
No Injury or Suspension.
</div>
<h3 class="STHSTeamInjurySuspension_RecoverySpeed">Pro Injury Recovery Rate is 1.<br />Farm Injury Recovery Rate is 1.</h3>
<?php include "Footer.php";?>

﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Pro Team Scoring</title>
<script src="ASHL13.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.3.5.5 - ASHL13-STHS.db - ASHL13-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<style>
@media screen and (max-width: 1200px) {
.STHSWarning {display:block;}
.STHSScoring_PlayersTable1 tbody td:nth-last-child(1){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-last-child(1){display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-last-child(2){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-last-child(2){display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-last-child(3){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-last-child(3){display:none;}
}
@media screen and (max-width: 1060px) {
.STHSScoring_PlayersTable1 tbody td:nth-last-child(6){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-last-child(6){display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-last-child(7){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-last-child(7){display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-last-child(8){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-last-child(8){display:none;}
.STHSScoring_PlayersTable2 tbody td:nth-last-child(1){display:none;}
.STHSScoring_PlayersTable2 thead th:nth-last-child(1){display:none;}
.STHSScoring_PlayersTable2 tbody td:nth-last-child(2){display:none;}
.STHSScoring_PlayersTable2 thead th:nth-last-child(2){display:none;}
.STHSScoring_PlayersTable2 tbody td:nth-last-child(3){display:none;}
.STHSScoring_PlayersTable2 thead th:nth-last-child(3){display:none;}
.STHSScoring_GoaliesTable tbody td:nth-last-child(1){display:none;}
.STHSScoring_GoaliesTable thead th:nth-last-child(1){display:none;}
.STHSScoring_GoaliesTable tbody td:nth-last-child(2){display:none;}
.STHSScoring_GoaliesTable thead th:nth-last-child(2){display:none;}
.STHSScoring_GoaliesTable tbody td:nth-last-child(3){display:none;}
.STHSScoring_GoaliesTable thead th:nth-last-child(3){display:none;}
}
@media screen and (max-width: 960px) {
.STHSW10 {display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-child(2){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-child(2){display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-child(3){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-child(3){display:none;}
.STHSScoring_PlayersTable2 tbody td:nth-child(2){display:none;}
.STHSScoring_PlayersTable2 thead th:nth-child(2){display:none;}
.STHSScoring_PlayersTable2 tbody td:nth-child(3){display:none;}
.STHSScoring_PlayersTable2 thead th:nth-child(3){display:none;}
}
@media screen and (max-width: 890px) {
.STHSW10 {display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-child(12){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-child(12){display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-child(14){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-child(14){display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-child(15){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-child(15){display:none;}
.STHSScoring_GoaliesTable tbody td:nth-last-child(8){display:none;}
.STHSScoring_GoaliesTable thead th:nth-last-child(8){display:none;}
}</style>
</head><body>
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
<style>.tabsmenu{display:none;}</style> <!-- Do Not Show Top Menu STHS Option Apply -->
<?php If (file_exists("STHSSetting.php") == true){
require_once "STHSSetting.php";
$db = new SQLite3($DatabaseFile);
include "Menu.php";}?>
<script>$(function(){$("table").basictablesorter()});</script>
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#AnaheimDucks">Anaheim Ducks</a> | <a href="#ArizonaCoyotes">Arizona Coyotes</a> | <a href="#BostonBruins">Boston Bruins</a> | <a href="#BuffaloSabres">Buffalo Sabres</a> | <a href="#CalgaryFlames">Calgary Flames</a> | <a href="#CarolinaHurricanes">Carolina Hurricanes</a> | <a href="#ChicagoBlackhawks">Chicago Blackhawks</a> | <a href="#ColoradoAvalanche">Colorado Avalanche</a> | <a href="#ColumbusBlueJackets">Columbus Blue Jackets</a> | <a href="#DallasStars">Dallas Stars</a> | <a href="#DetroitRedWings">Detroit Red Wings</a> | <a href="#EdmontonOilers">Edmonton Oilers</a> | <a href="#FloridaPanthers">Florida Panthers</a> | <a href="#LosAngelesKings">Los Angeles Kings</a> | <a href="#MinnesotaWild">Minnesota Wild</a> | <a href="#MontrealCanadiens">Montreal Canadiens</a> | <a href="#NashvillePredators">Nashville Predators</a> | <a href="#NewJerseyDevils">New Jersey Devils</a> | <a href="#NewYorkIslanders">New York Islanders</a> | <a href="#NewYorkRangers">New York Rangers</a> | <a href="#OttawaSenators">Ottawa Senators</a> | <a href="#PhiladelphiaFlyers">Philadelphia Flyers</a> | <a href="#PittsburghPenguins">Pittsburgh Penguins</a> | <a href="#QuebecNordiques">Quebec Nordiques</a> | <a href="#SanJoseSharks">San Jose Sharks</a> | <a href="#SeattleKraken">Seattle Kraken</a> | <a href="#St.LouisBlues">St. Louis Blues</a> | <a href="#TampaBayLightning">Tampa Bay Lightning</a> | <a href="#TorontoMapleLeafs">Toronto Maple Leafs</a> | <a href="#VancouverCanucks">Vancouver Canucks</a> | <a href="#VegasGoldenKnights">Vegas Golden Knights</a> | <a href="#WashingtonCapitals">Washington Capitals</a> | <a href="#WinnipegJets">Winnipeg Jets</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamScoringPro_ANH"><a id="AnaheimDucks">Anaheim Ducks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=26">Anaheim Ducks Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#AnaheimDucks">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#AnaheimDucks">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#AnaheimDucks">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#AnaheimDucks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#AnaheimDucks">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#AnaheimDucks">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#AnaheimDucks">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#AnaheimDucks">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#AnaheimDucks">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#AnaheimDucks">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#AnaheimDucks">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#AnaheimDucks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_AnaheimDucks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_AnaheimDucks" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_ARZ"><a id="ArizonaCoyotes">Arizona Coyotes</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=30">Arizona Coyotes Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#ArizonaCoyotes">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#ArizonaCoyotes">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#ArizonaCoyotes">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#ArizonaCoyotes">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#ArizonaCoyotes">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#ArizonaCoyotes">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#ArizonaCoyotes">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#ArizonaCoyotes">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#ArizonaCoyotes">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#ArizonaCoyotes">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#ArizonaCoyotes">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#ArizonaCoyotes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ArizonaCoyotes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ArizonaCoyotes" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_BOS"><a id="BostonBruins">Boston Bruins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">Boston Bruins Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#BostonBruins">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#BostonBruins">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#BostonBruins">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#BostonBruins">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#BostonBruins">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#BostonBruins">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#BostonBruins">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#BostonBruins">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#BostonBruins">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#BostonBruins">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#BostonBruins">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#BostonBruins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BostonBruins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BostonBruins" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_BUF"><a id="BuffaloSabres">Buffalo Sabres</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">Buffalo Sabres Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#BuffaloSabres">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#BuffaloSabres">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#BuffaloSabres">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#BuffaloSabres">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#BuffaloSabres">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#BuffaloSabres">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#BuffaloSabres">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#BuffaloSabres">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#BuffaloSabres">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#BuffaloSabres">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#BuffaloSabres">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#BuffaloSabres">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BuffaloSabres');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BuffaloSabres" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_CGY"><a id="CalgaryFlames">Calgary Flames</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=21">Calgary Flames Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#CalgaryFlames">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#CalgaryFlames">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#CalgaryFlames">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#CalgaryFlames">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#CalgaryFlames">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#CalgaryFlames">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#CalgaryFlames">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#CalgaryFlames">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#CalgaryFlames">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#CalgaryFlames">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#CalgaryFlames">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#CalgaryFlames">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CalgaryFlames');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CalgaryFlames" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_CAR"><a id="CarolinaHurricanes">Carolina Hurricanes</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">Carolina Hurricanes Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#CarolinaHurricanes">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#CarolinaHurricanes">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#CarolinaHurricanes">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#CarolinaHurricanes">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#CarolinaHurricanes">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#CarolinaHurricanes">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#CarolinaHurricanes">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#CarolinaHurricanes">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#CarolinaHurricanes">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#CarolinaHurricanes">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#CarolinaHurricanes">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#CarolinaHurricanes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CarolinaHurricanes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CarolinaHurricanes" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_CHI"><a id="ChicagoBlackhawks">Chicago Blackhawks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=16">Chicago Blackhawks Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#ChicagoBlackhawks">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#ChicagoBlackhawks">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#ChicagoBlackhawks">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#ChicagoBlackhawks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#ChicagoBlackhawks">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#ChicagoBlackhawks">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#ChicagoBlackhawks">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#ChicagoBlackhawks">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#ChicagoBlackhawks">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#ChicagoBlackhawks">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#ChicagoBlackhawks">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#ChicagoBlackhawks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ChicagoBlackhawks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ChicagoBlackhawks" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_COL"><a id="ColoradoAvalanche">Colorado Avalanche</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=22">Colorado Avalanche Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#ColoradoAvalanche">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#ColoradoAvalanche">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#ColoradoAvalanche">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#ColoradoAvalanche">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#ColoradoAvalanche">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#ColoradoAvalanche">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#ColoradoAvalanche">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#ColoradoAvalanche">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#ColoradoAvalanche">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#ColoradoAvalanche">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#ColoradoAvalanche">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#ColoradoAvalanche">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ColoradoAvalanche');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ColoradoAvalanche" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_CLB"><a id="ColumbusBlueJackets">Columbus Blue Jackets</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=20">Columbus Blue Jackets Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#ColumbusBlueJackets">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#ColumbusBlueJackets">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#ColumbusBlueJackets">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#ColumbusBlueJackets">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#ColumbusBlueJackets">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#ColumbusBlueJackets">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#ColumbusBlueJackets">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#ColumbusBlueJackets">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#ColumbusBlueJackets">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#ColumbusBlueJackets">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#ColumbusBlueJackets">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#ColumbusBlueJackets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ColumbusBlueJackets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ColumbusBlueJackets" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_DAL"><a id="DallasStars">Dallas Stars</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=29">Dallas Stars Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#DallasStars">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#DallasStars">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#DallasStars">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#DallasStars">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#DallasStars">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#DallasStars">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#DallasStars">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#DallasStars">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#DallasStars">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#DallasStars">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#DallasStars">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#DallasStars">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_DallasStars');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_DallasStars" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_DET"><a id="DetroitRedWings">Detroit Red Wings</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=17">Detroit Red Wings Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#DetroitRedWings">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#DetroitRedWings">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#DetroitRedWings">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#DetroitRedWings">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#DetroitRedWings">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#DetroitRedWings">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#DetroitRedWings">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#DetroitRedWings">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#DetroitRedWings">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#DetroitRedWings">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#DetroitRedWings">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#DetroitRedWings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_DetroitRedWings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_DetroitRedWings" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_EDM"><a id="EdmontonOilers">Edmonton Oilers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=23">Edmonton Oilers Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#EdmontonOilers">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#EdmontonOilers">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#EdmontonOilers">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#EdmontonOilers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#EdmontonOilers">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#EdmontonOilers">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#EdmontonOilers">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#EdmontonOilers">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#EdmontonOilers">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#EdmontonOilers">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#EdmontonOilers">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#EdmontonOilers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_EdmontonOilers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_EdmontonOilers" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_FLA"><a id="FloridaPanthers">Florida Panthers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">Florida Panthers Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#FloridaPanthers">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#FloridaPanthers">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#FloridaPanthers">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#FloridaPanthers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#FloridaPanthers">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#FloridaPanthers">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#FloridaPanthers">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#FloridaPanthers">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#FloridaPanthers">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#FloridaPanthers">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#FloridaPanthers">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#FloridaPanthers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_FloridaPanthers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_FloridaPanthers" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_LOS"><a id="LosAngelesKings">Los Angeles Kings</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=27">Los Angeles Kings Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#LosAngelesKings">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#LosAngelesKings">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#LosAngelesKings">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#LosAngelesKings">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#LosAngelesKings">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#LosAngelesKings">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#LosAngelesKings">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#LosAngelesKings">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#LosAngelesKings">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#LosAngelesKings">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#LosAngelesKings">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#LosAngelesKings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LosAngelesKings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LosAngelesKings" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_MIN"><a id="MinnesotaWild">Minnesota Wild</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=24">Minnesota Wild Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#MinnesotaWild">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#MinnesotaWild">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#MinnesotaWild">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#MinnesotaWild">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#MinnesotaWild">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#MinnesotaWild">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#MinnesotaWild">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#MinnesotaWild">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#MinnesotaWild">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#MinnesotaWild">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#MinnesotaWild">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#MinnesotaWild">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MinnesotaWild');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MinnesotaWild" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_MTL"><a id="MontrealCanadiens">Montreal Canadiens</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">Montreal Canadiens Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#MontrealCanadiens">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#MontrealCanadiens">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#MontrealCanadiens">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#MontrealCanadiens">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#MontrealCanadiens">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#MontrealCanadiens">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#MontrealCanadiens">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#MontrealCanadiens">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#MontrealCanadiens">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#MontrealCanadiens">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#MontrealCanadiens">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#MontrealCanadiens">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MontrealCanadiens');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MontrealCanadiens" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_NSH"><a id="NashvillePredators">Nashville Predators</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=18">Nashville Predators Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#NashvillePredators">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#NashvillePredators">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#NashvillePredators">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#NashvillePredators">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#NashvillePredators">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#NashvillePredators">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#NashvillePredators">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#NashvillePredators">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#NashvillePredators">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#NashvillePredators">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#NashvillePredators">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#NashvillePredators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NashvillePredators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NashvillePredators" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_NJD"><a id="NewJerseyDevils">New Jersey Devils</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">New Jersey Devils Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#NewJerseyDevils">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#NewJerseyDevils">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#NewJerseyDevils">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#NewJerseyDevils">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#NewJerseyDevils">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#NewJerseyDevils">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#NewJerseyDevils">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#NewJerseyDevils">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#NewJerseyDevils">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#NewJerseyDevils">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#NewJerseyDevils">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#NewJerseyDevils">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewJerseyDevils');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewJerseyDevils" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_NYI"><a id="NewYorkIslanders">New York Islanders</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">New York Islanders Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#NewYorkIslanders">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#NewYorkIslanders">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#NewYorkIslanders">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#NewYorkIslanders">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#NewYorkIslanders">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#NewYorkIslanders">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#NewYorkIslanders">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#NewYorkIslanders">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#NewYorkIslanders">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#NewYorkIslanders">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#NewYorkIslanders">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#NewYorkIslanders">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewYorkIslanders');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewYorkIslanders" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_NYR"><a id="NewYorkRangers">New York Rangers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">New York Rangers Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#NewYorkRangers">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#NewYorkRangers">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#NewYorkRangers">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#NewYorkRangers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#NewYorkRangers">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#NewYorkRangers">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#NewYorkRangers">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#NewYorkRangers">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#NewYorkRangers">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#NewYorkRangers">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#NewYorkRangers">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#NewYorkRangers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewYorkRangers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewYorkRangers" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_OTT"><a id="OttawaSenators">Ottawa Senators</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">Ottawa Senators Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#OttawaSenators">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#OttawaSenators">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#OttawaSenators">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#OttawaSenators">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#OttawaSenators">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#OttawaSenators">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#OttawaSenators">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#OttawaSenators">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#OttawaSenators">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#OttawaSenators">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#OttawaSenators">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#OttawaSenators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_OttawaSenators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_OttawaSenators" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_PHI"><a id="PhiladelphiaFlyers">Philadelphia Flyers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">Philadelphia Flyers Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#PhiladelphiaFlyers">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#PhiladelphiaFlyers">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#PhiladelphiaFlyers">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#PhiladelphiaFlyers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#PhiladelphiaFlyers">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#PhiladelphiaFlyers">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#PhiladelphiaFlyers">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#PhiladelphiaFlyers">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#PhiladelphiaFlyers">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#PhiladelphiaFlyers">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#PhiladelphiaFlyers">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#PhiladelphiaFlyers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PhiladelphiaFlyers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PhiladelphiaFlyers" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_PIT"><a id="PittsburghPenguins">Pittsburgh Penguins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">Pittsburgh Penguins Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#PittsburghPenguins">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#PittsburghPenguins">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#PittsburghPenguins">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#PittsburghPenguins">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#PittsburghPenguins">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#PittsburghPenguins">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#PittsburghPenguins">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#PittsburghPenguins">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#PittsburghPenguins">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#PittsburghPenguins">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#PittsburghPenguins">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#PittsburghPenguins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PittsburghPenguins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PittsburghPenguins" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_QUE"><a id="QuebecNordiques">Quebec Nordiques</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=31">Quebec Nordiques Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#QuebecNordiques">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#QuebecNordiques">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#QuebecNordiques">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#QuebecNordiques">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#QuebecNordiques">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#QuebecNordiques">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#QuebecNordiques">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#QuebecNordiques">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#QuebecNordiques">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#QuebecNordiques">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#QuebecNordiques">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#QuebecNordiques">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_QuebecNordiques');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_QuebecNordiques" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_SJS"><a id="SanJoseSharks">San Jose Sharks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=28">San Jose Sharks Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#SanJoseSharks">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#SanJoseSharks">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#SanJoseSharks">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#SanJoseSharks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#SanJoseSharks">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#SanJoseSharks">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#SanJoseSharks">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#SanJoseSharks">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#SanJoseSharks">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#SanJoseSharks">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#SanJoseSharks">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#SanJoseSharks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SanJoseSharks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SanJoseSharks" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_SEA"><a id="SeattleKraken">Seattle Kraken</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=32">Seattle Kraken Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#SeattleKraken">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#SeattleKraken">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#SeattleKraken">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#SeattleKraken">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#SeattleKraken">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#SeattleKraken">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#SeattleKraken">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#SeattleKraken">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#SeattleKraken">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#SeattleKraken">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#SeattleKraken">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#SeattleKraken">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SeattleKraken');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SeattleKraken" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_STL"><a id="St.LouisBlues">St. Louis Blues</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=19">St. Louis Blues Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#St.LouisBlues">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#St.LouisBlues">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#St.LouisBlues">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#St.LouisBlues">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#St.LouisBlues">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#St.LouisBlues">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#St.LouisBlues">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#St.LouisBlues">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#St.LouisBlues">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#St.LouisBlues">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#St.LouisBlues">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#St.LouisBlues">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_St.LouisBlues');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_St.LouisBlues" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_TBL"><a id="TampaBayLightning">Tampa Bay Lightning</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=13">Tampa Bay Lightning Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#TampaBayLightning">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#TampaBayLightning">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#TampaBayLightning">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#TampaBayLightning">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#TampaBayLightning">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#TampaBayLightning">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#TampaBayLightning">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#TampaBayLightning">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#TampaBayLightning">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#TampaBayLightning">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#TampaBayLightning">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#TampaBayLightning">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TampaBayLightning');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TampaBayLightning" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_TOR"><a id="TorontoMapleLeafs">Toronto Maple Leafs</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">Toronto Maple Leafs Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#TorontoMapleLeafs">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#TorontoMapleLeafs">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#TorontoMapleLeafs">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#TorontoMapleLeafs">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#TorontoMapleLeafs">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#TorontoMapleLeafs">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#TorontoMapleLeafs">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#TorontoMapleLeafs">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#TorontoMapleLeafs">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#TorontoMapleLeafs">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#TorontoMapleLeafs">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#TorontoMapleLeafs">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TorontoMapleLeafs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TorontoMapleLeafs" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_VAN"><a id="VancouverCanucks">Vancouver Canucks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=25">Vancouver Canucks Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#VancouverCanucks">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#VancouverCanucks">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#VancouverCanucks">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#VancouverCanucks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#VancouverCanucks">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#VancouverCanucks">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#VancouverCanucks">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#VancouverCanucks">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#VancouverCanucks">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#VancouverCanucks">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#VancouverCanucks">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#VancouverCanucks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_VancouverCanucks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_VancouverCanucks" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_VEG"><a id="VegasGoldenKnights">Vegas Golden Knights</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=33">Vegas Golden Knights Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#VegasGoldenKnights">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#VegasGoldenKnights">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#VegasGoldenKnights">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#VegasGoldenKnights">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#VegasGoldenKnights">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#VegasGoldenKnights">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#VegasGoldenKnights">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#VegasGoldenKnights">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#VegasGoldenKnights">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#VegasGoldenKnights">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#VegasGoldenKnights">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#VegasGoldenKnights">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_VegasGoldenKnights');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_VegasGoldenKnights" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_WSH"><a id="WashingtonCapitals">Washington Capitals</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=14">Washington Capitals Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#WashingtonCapitals">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#WashingtonCapitals">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#WashingtonCapitals">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#WashingtonCapitals">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#WashingtonCapitals">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#WashingtonCapitals">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#WashingtonCapitals">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#WashingtonCapitals">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#WashingtonCapitals">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#WashingtonCapitals">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#WashingtonCapitals">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#WashingtonCapitals">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_WashingtonCapitals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_WashingtonCapitals" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_WPG"><a id="WinnipegJets">Winnipeg Jets</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=15">Winnipeg Jets Page</a> ]
[ <a href="ASHL13-ProTeamRoster.php#WinnipegJets">Pro Team Roster</a> ]
[ <a href="ASHL13-ProTeamScoring.php#WinnipegJets">Pro Team Scoring</a> ]
[ <a href="ASHL13-TeamFinance.php#WinnipegJets">Team Finance</a> ]
[ <a href="ASHL13-ProTeamPlayersInfo.php#WinnipegJets">Pro Team PlayersInfo</a> ]
[ <a href="ASHL13-ProTeamLines.php#WinnipegJets">Pro Team Lines</a> ]
[ <a href="ASHL13-TeamProspects.php#WinnipegJets">Team Prospects</a> ]
[ <a href="ASHL13-ProTeamSchedule.php#WinnipegJets">Pro Team Schedule</a> ]
[ <a href="ASHL13-ProTeamStats.php#WinnipegJets">Pro Team Stats</a> ]
[ <a href="ASHL13-ProTeamStatsVS.php#WinnipegJets">Pro Team Stats VS</a> ]
[ <a href="ASHL13-TeamInjurySuspension.php#WinnipegJets">Team Injury Suspension</a> ]
[ <a href="ASHL13-TeamHistory.php#WinnipegJets">Team History</a> ]
[ <a href="ASHL13-TeamRecords.php#WinnipegJets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_WinnipegJets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_WinnipegJets" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<?php include "Footer.php";?>

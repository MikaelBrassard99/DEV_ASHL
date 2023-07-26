<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>ASHL - Farm Team Schedule</title>
<script src="ASHL8-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.1.5.5" />
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="ASHL8-PLF.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == true){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
</head><body>
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"ASHL8-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"ASHL8-STHSCareerStat.db";
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 1; /* Show Webpage Top Menu */
include "Menu.php";?>
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#LavalChiefs">Laval Chiefs</a> | <a href="#PortlandPirates">Portland Pirates</a> | <a href="#ProvidenceBruins">Providence Bruins</a> | <a href="#RochesterAmericans">Rochester Americans</a> | <a href="#JolietteSportif">Joliette Sportif</a> | <a href="#CharlotteCheckers">Charlotte Checkers</a> | <a href="#RockfordIceHogs">Rockford IceHogs</a> | <a href="#LakeErieMonsters">Lake Erie Monsters</a> | <a href="#SpringfieldFalcons">Springfield Falcons</a> | <a href="#LasVegasGamblers">Las Vegas Gamblers</a> | <a href="#GrandRapidsGriffins">Grand Rapids Griffins</a> | <a href="#OklahomaCityBarons">Oklahoma City Barons</a> | <a href="#SanAntonioRampage">San Antonio Rampage</a> | <a href="#GatineauOlympiques">Gatineau Olympiques</a> | <a href="#HoustonAeros">Houston Aeros</a> | <a href="#Trois-RivièresDraveurs">Trois-Rivières Draveurs</a> | <a href="#MilwaukeeAdmirals">Milwaukee Admirals</a> | <a href="#AlbanyDevils">Albany Devils</a> | <a href="#BridgeportSoundTigers">Bridgeport Sound Tigers</a> | <a href="#ConnecticutWhale">Connecticut Whale</a> | <a href="#BinghamtonSenators">Binghamton Senators</a> | <a href="#AdirondackPhantoms">Adirondack Phantoms</a> | <a href="#Wilkes-Barre/ScrantonPenguins">Wilkes-Barre/Scranton Penguins</a> | <a href="#ChicoutimiSaguenéens">Chicoutimi Saguenéens</a> | <a href="#Rouyn-NorandaHuskies">Rouyn-Noranda Huskies</a> | <a href="#MercerIslandArchangels">Mercer Island Archangels</a> | <a href="#PeoriaRivermen">Peoria Rivermen</a> | <a href="#NorfolkAdmirals">Norfolk Admirals</a> | <a href="#RobervalDwarfs">Roberval Dwarfs</a> | <a href="#ChicagoWolves">Chicago Wolves</a> | <a href="#LandshutCannibals">Landshut Cannibals</a> | <a href="#ManitobaMoose">Manitoba Moose</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<script>$(function(){$("table").basictablesorter()});</script>
<h1 class="TeamScheduleFarm_LAV"><a id="LavalChiefs">Laval Chiefs</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=26">Anaheim Ducks Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#AnaheimDucks">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-FarmTeamScoring.php#LavalChiefs">Farm Team Scoring</a> ]
[ <a href="ASHL8-PLF-FarmTeamLines.php#LavalChiefs">Farm Team Lines</a> ]
[ <a href="ASHL8-PLF-FarmTeamSchedule.php#LavalChiefs">Farm Team Schedule</a> ]
[ <a href="ASHL8-PLF-FarmTeamStats.php#LavalChiefs">Farm Team Stats</a> ]
[ <a href="ASHL8-PLF-FarmTeamStatsVS.php#LavalChiefs">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LavalChiefs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LavalChiefs" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>7</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ColoradoAvalanche">Lake Erie Monsters</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#AnaheimDucks">Laval Chiefs</a></td><td>1</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL8-PLF-Farm-7.php">Game Direct Link</a></td></tr>
<tr><td>4</td><td>15</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ColoradoAvalanche">Lake Erie Monsters</a></td><td>5</td><td><a href="ASHL8-PLF-ProTeamRoster.php#AnaheimDucks">Laval Chiefs</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-15.php">Game Direct Link</a></td></tr>
<tr><td>6</td><td>23</td><td><a href="ASHL8-PLF-ProTeamRoster.php#AnaheimDucks">Laval Chiefs</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ColoradoAvalanche">Lake Erie Monsters</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-23.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>31</td><td><a href="ASHL8-PLF-ProTeamRoster.php#AnaheimDucks">Laval Chiefs</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ColoradoAvalanche">Lake Erie Monsters</a></td><td>3</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL8-PLF-Farm-31.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_POR"><a id="PortlandPirates">Portland Pirates</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=30">Arizona Coyotes Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#ArizonaCoyotes">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-FarmTeamScoring.php#PortlandPirates">Farm Team Scoring</a> ]
[ <a href="ASHL8-PLF-FarmTeamLines.php#PortlandPirates">Farm Team Lines</a> ]
[ <a href="ASHL8-PLF-FarmTeamSchedule.php#PortlandPirates">Farm Team Schedule</a> ]
[ <a href="ASHL8-PLF-FarmTeamStats.php#PortlandPirates">Farm Team Stats</a> ]
[ <a href="ASHL8-PLF-FarmTeamStatsVS.php#PortlandPirates">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PortlandPirates');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PortlandPirates" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
</table></div>
<h1 class="TeamScheduleFarm_PRO"><a id="ProvidenceBruins">Providence Bruins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">Boston Bruins Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#BostonBruins">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-FarmTeamScoring.php#ProvidenceBruins">Farm Team Scoring</a> ]
[ <a href="ASHL8-PLF-FarmTeamLines.php#ProvidenceBruins">Farm Team Lines</a> ]
[ <a href="ASHL8-PLF-FarmTeamSchedule.php#ProvidenceBruins">Farm Team Schedule</a> ]
[ <a href="ASHL8-PLF-FarmTeamStats.php#ProvidenceBruins">Farm Team Stats</a> ]
[ <a href="ASHL8-PLF-FarmTeamStatsVS.php#ProvidenceBruins">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ProvidenceBruins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ProvidenceBruins" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
</table></div>
<h1 class="TeamScheduleFarm_RCH"><a id="RochesterAmericans">Rochester Americans</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">Buffalo Sabres Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#BuffaloSabres">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-FarmTeamScoring.php#RochesterAmericans">Farm Team Scoring</a> ]
[ <a href="ASHL8-PLF-FarmTeamLines.php#RochesterAmericans">Farm Team Lines</a> ]
[ <a href="ASHL8-PLF-FarmTeamSchedule.php#RochesterAmericans">Farm Team Schedule</a> ]
[ <a href="ASHL8-PLF-FarmTeamStats.php#RochesterAmericans">Farm Team Stats</a> ]
[ <a href="ASHL8-PLF-FarmTeamStatsVS.php#RochesterAmericans">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_RochesterAmericans');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_RochesterAmericans" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>4</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>3</td><td><a href="ASHL8-PLF-ProTeamRoster.php#BuffaloSabres">Rochester Americans</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-4.php">Game Direct Link</a></td></tr>
<tr><td>3</td><td>12</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#BuffaloSabres">Rochester Americans</a></td><td>1</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL8-PLF-Farm-12.php">Game Direct Link</a></td></tr>
<tr><td>5</td><td>20</td><td><a href="ASHL8-PLF-ProTeamRoster.php#BuffaloSabres">Rochester Americans</a></td><td>1</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-20.php">Game Direct Link</a></td></tr>
<tr><td>7</td><td>28</td><td><a href="ASHL8-PLF-ProTeamRoster.php#BuffaloSabres">Rochester Americans</a></td><td>1</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-28.php">Game Direct Link</a></td></tr>
<tr><td>9</td><td>36</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>5</td><td><a href="ASHL8-PLF-ProTeamRoster.php#BuffaloSabres">Rochester Americans</a></td><td>4</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL8-PLF-Farm-36.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_JOL"><a id="JolietteSportif">Joliette Sportif</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=21">Calgary Flames Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#CalgaryFlames">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-FarmTeamScoring.php#JolietteSportif">Farm Team Scoring</a> ]
[ <a href="ASHL8-PLF-FarmTeamLines.php#JolietteSportif">Farm Team Lines</a> ]
[ <a href="ASHL8-PLF-FarmTeamSchedule.php#JolietteSportif">Farm Team Schedule</a> ]
[ <a href="ASHL8-PLF-FarmTeamStats.php#JolietteSportif">Farm Team Stats</a> ]
[ <a href="ASHL8-PLF-FarmTeamStatsVS.php#JolietteSportif">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_JolietteSportif');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_JolietteSportif" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>6</td><td><a href="ASHL8-PLF-ProTeamRoster.php#CalgaryFlames">Joliette Sportif</a></td><td>4</td><td><a href="ASHL8-PLF-ProTeamRoster.php#St.LouisBlues">Peoria Rivermen</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-6.php">Game Direct Link</a></td></tr>
<tr><td>4</td><td>14</td><td><a href="ASHL8-PLF-ProTeamRoster.php#CalgaryFlames">Joliette Sportif</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#St.LouisBlues">Peoria Rivermen</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-14.php">Game Direct Link</a></td></tr>
<tr><td>6</td><td>22</td><td><a href="ASHL8-PLF-ProTeamRoster.php#St.LouisBlues">Peoria Rivermen</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#CalgaryFlames">Joliette Sportif</a></td><td>3</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL8-PLF-Farm-22.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>30</td><td><a href="ASHL8-PLF-ProTeamRoster.php#St.LouisBlues">Peoria Rivermen</a></td><td>4</td><td><a href="ASHL8-PLF-ProTeamRoster.php#CalgaryFlames">Joliette Sportif</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-30.php">Game Direct Link</a></td></tr>
<tr><td>10</td><td>38</td><td><a href="ASHL8-PLF-ProTeamRoster.php#CalgaryFlames">Joliette Sportif</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#St.LouisBlues">Peoria Rivermen</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-38.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_CHA"><a id="CharlotteCheckers">Charlotte Checkers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">Carolina Hurricanes Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#CarolinaHurricanes">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-FarmTeamScoring.php#CharlotteCheckers">Farm Team Scoring</a> ]
[ <a href="ASHL8-PLF-FarmTeamLines.php#CharlotteCheckers">Farm Team Lines</a> ]
[ <a href="ASHL8-PLF-FarmTeamSchedule.php#CharlotteCheckers">Farm Team Schedule</a> ]
[ <a href="ASHL8-PLF-FarmTeamStats.php#CharlotteCheckers">Farm Team Stats</a> ]
[ <a href="ASHL8-PLF-FarmTeamStatsVS.php#CharlotteCheckers">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CharlotteCheckers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CharlotteCheckers" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
</table></div>
<h1 class="TeamScheduleFarm_RFD"><a id="RockfordIceHogs">Rockford IceHogs</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=16">Chicago Blackhawks Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-FarmTeamScoring.php#RockfordIceHogs">Farm Team Scoring</a> ]
[ <a href="ASHL8-PLF-FarmTeamLines.php#RockfordIceHogs">Farm Team Lines</a> ]
[ <a href="ASHL8-PLF-FarmTeamSchedule.php#RockfordIceHogs">Farm Team Schedule</a> ]
[ <a href="ASHL8-PLF-FarmTeamStats.php#RockfordIceHogs">Farm Team Stats</a> ]
[ <a href="ASHL8-PLF-FarmTeamStatsVS.php#RockfordIceHogs">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_RockfordIceHogs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_RockfordIceHogs" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>8</td><td><a href="ASHL8-PLF-ProTeamRoster.php#VancouverCanucks">Chicago Wolves</a></td><td>3</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-8.php">Game Direct Link</a></td></tr>
<tr><td>4</td><td>16</td><td><a href="ASHL8-PLF-ProTeamRoster.php#VancouverCanucks">Chicago Wolves</a></td><td>1</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-16.php">Game Direct Link</a></td></tr>
<tr><td>6</td><td>24</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>3</td><td><a href="ASHL8-PLF-ProTeamRoster.php#VancouverCanucks">Chicago Wolves</a></td><td>2</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL8-PLF-Farm-24.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>32</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>4</td><td><a href="ASHL8-PLF-ProTeamRoster.php#VancouverCanucks">Chicago Wolves</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-32.php">Game Direct Link</a></td></tr>
<tr><td>10</td><td>40</td><td><a href="ASHL8-PLF-ProTeamRoster.php#VancouverCanucks">Chicago Wolves</a></td><td>3</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-40.php">Game Direct Link</a></td></tr>
<tr><td>16</td><td>60</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ColoradoAvalanche">Lake Erie Monsters</a></td><td>3</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-60.php">Game Direct Link</a></td></tr>
<tr><td>18</td><td>64</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ColoradoAvalanche">Lake Erie Monsters</a></td><td>7</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-64.php">Game Direct Link</a></td></tr>
<tr><td>20</td><td>68</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ColoradoAvalanche">Lake Erie Monsters</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-68.php">Game Direct Link</a></td></tr>
<tr><td>22</td><td>72</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>5</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ColoradoAvalanche">Lake Erie Monsters</a></td><td>4</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL8-PLF-Farm-72.php">Game Direct Link</a></td></tr>
<tr><td>24</td><td>76</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ColoradoAvalanche">Lake Erie Monsters</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-76.php">Game Direct Link</a></td></tr>
<tr><td>26</td><td>80</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>3</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ColoradoAvalanche">Lake Erie Monsters</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-80.php">Game Direct Link</a></td></tr>
<tr><td>30</td><td>86</td><td><a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques</a></td><td>3</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-86.php">Game Direct Link</a></td></tr>
<tr><td>32</td><td>88</td><td><a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques</a></td><td>4</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-88.php">Game Direct Link</a></td></tr>
<tr><td>34</td><td>90</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-90.php">Game Direct Link</a></td></tr>
<tr><td>36</td><td>92</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>1</td><td><a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques</a></td><td>2</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL8-PLF-Farm-92.php">Game Direct Link</a></td></tr>
<tr><td>38</td><td>94</td><td><a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques</a></td><td>5</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>4</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL8-PLF-Farm-94.php">Game Direct Link</a></td></tr>
<tr><td>40</td><td>96</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>4</td><td><a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-96.php">Game Direct Link</a></td></tr>
<tr><td>42</td><td>98</td><td><a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-98.php">Game Direct Link</a></td></tr>
<tr><td>43</td><td>99</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>3</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-99.php">Game Direct Link</a></td></tr>
<tr><td>44</td><td>100</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>4</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-100.php">Game Direct Link</a></td></tr>
<tr><td>45</td><td>101</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-101.php">Game Direct Link</a></td></tr>
<tr><td>46</td><td>102</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>4</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>3</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL8-PLF-Farm-102.php">Game Direct Link</a></td></tr>
<tr><td>47</td><td>103</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>4</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-103.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_LKE"><a id="LakeErieMonsters">Lake Erie Monsters</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=22">Colorado Avalanche Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#ColoradoAvalanche">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-FarmTeamScoring.php#LakeErieMonsters">Farm Team Scoring</a> ]
[ <a href="ASHL8-PLF-FarmTeamLines.php#LakeErieMonsters">Farm Team Lines</a> ]
[ <a href="ASHL8-PLF-FarmTeamSchedule.php#LakeErieMonsters">Farm Team Schedule</a> ]
[ <a href="ASHL8-PLF-FarmTeamStats.php#LakeErieMonsters">Farm Team Stats</a> ]
[ <a href="ASHL8-PLF-FarmTeamStatsVS.php#LakeErieMonsters">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LakeErieMonsters');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LakeErieMonsters" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>7</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ColoradoAvalanche">Lake Erie Monsters</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#AnaheimDucks">Laval Chiefs</a></td><td>1</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL8-PLF-Farm-7.php">Game Direct Link</a></td></tr>
<tr><td>4</td><td>15</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ColoradoAvalanche">Lake Erie Monsters</a></td><td>5</td><td><a href="ASHL8-PLF-ProTeamRoster.php#AnaheimDucks">Laval Chiefs</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-15.php">Game Direct Link</a></td></tr>
<tr><td>6</td><td>23</td><td><a href="ASHL8-PLF-ProTeamRoster.php#AnaheimDucks">Laval Chiefs</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ColoradoAvalanche">Lake Erie Monsters</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-23.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>31</td><td><a href="ASHL8-PLF-ProTeamRoster.php#AnaheimDucks">Laval Chiefs</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ColoradoAvalanche">Lake Erie Monsters</a></td><td>3</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL8-PLF-Farm-31.php">Game Direct Link</a></td></tr>
<tr><td>16</td><td>60</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ColoradoAvalanche">Lake Erie Monsters</a></td><td>3</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-60.php">Game Direct Link</a></td></tr>
<tr><td>18</td><td>64</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ColoradoAvalanche">Lake Erie Monsters</a></td><td>7</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-64.php">Game Direct Link</a></td></tr>
<tr><td>20</td><td>68</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ColoradoAvalanche">Lake Erie Monsters</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-68.php">Game Direct Link</a></td></tr>
<tr><td>22</td><td>72</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>5</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ColoradoAvalanche">Lake Erie Monsters</a></td><td>4</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL8-PLF-Farm-72.php">Game Direct Link</a></td></tr>
<tr><td>24</td><td>76</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ColoradoAvalanche">Lake Erie Monsters</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-76.php">Game Direct Link</a></td></tr>
<tr><td>26</td><td>80</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>3</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ColoradoAvalanche">Lake Erie Monsters</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-80.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_SPR"><a id="SpringfieldFalcons">Springfield Falcons</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=20">Columbus Blue Jackets Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#ColumbusBlueJackets">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-FarmTeamScoring.php#SpringfieldFalcons">Farm Team Scoring</a> ]
[ <a href="ASHL8-PLF-FarmTeamLines.php#SpringfieldFalcons">Farm Team Lines</a> ]
[ <a href="ASHL8-PLF-FarmTeamSchedule.php#SpringfieldFalcons">Farm Team Schedule</a> ]
[ <a href="ASHL8-PLF-FarmTeamStats.php#SpringfieldFalcons">Farm Team Stats</a> ]
[ <a href="ASHL8-PLF-FarmTeamStatsVS.php#SpringfieldFalcons">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SpringfieldFalcons');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SpringfieldFalcons" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
</table></div>
<h1 class="TeamScheduleFarm_LVG"><a id="LasVegasGamblers">Las Vegas Gamblers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=29">Dallas Stars Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#DallasStars">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-FarmTeamScoring.php#LasVegasGamblers">Farm Team Scoring</a> ]
[ <a href="ASHL8-PLF-FarmTeamLines.php#LasVegasGamblers">Farm Team Lines</a> ]
[ <a href="ASHL8-PLF-FarmTeamSchedule.php#LasVegasGamblers">Farm Team Schedule</a> ]
[ <a href="ASHL8-PLF-FarmTeamStats.php#LasVegasGamblers">Farm Team Stats</a> ]
[ <a href="ASHL8-PLF-FarmTeamStatsVS.php#LasVegasGamblers">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LasVegasGamblers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LasVegasGamblers" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
</table></div>
<h1 class="TeamScheduleFarm_GRG"><a id="GrandRapidsGriffins">Grand Rapids Griffins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=17">Detroit Red Wings Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#DetroitRedWings">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-FarmTeamScoring.php#GrandRapidsGriffins">Farm Team Scoring</a> ]
[ <a href="ASHL8-PLF-FarmTeamLines.php#GrandRapidsGriffins">Farm Team Lines</a> ]
[ <a href="ASHL8-PLF-FarmTeamSchedule.php#GrandRapidsGriffins">Farm Team Schedule</a> ]
[ <a href="ASHL8-PLF-FarmTeamStats.php#GrandRapidsGriffins">Farm Team Stats</a> ]
[ <a href="ASHL8-PLF-FarmTeamStatsVS.php#GrandRapidsGriffins">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_GrandRapidsGriffins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_GrandRapidsGriffins" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
</table></div>
<h1 class="TeamScheduleFarm_OKC"><a id="OklahomaCityBarons">Oklahoma City Barons</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=23">Edmonton Oilers Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#EdmontonOilers">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-FarmTeamScoring.php#OklahomaCityBarons">Farm Team Scoring</a> ]
[ <a href="ASHL8-PLF-FarmTeamLines.php#OklahomaCityBarons">Farm Team Lines</a> ]
[ <a href="ASHL8-PLF-FarmTeamSchedule.php#OklahomaCityBarons">Farm Team Schedule</a> ]
[ <a href="ASHL8-PLF-FarmTeamStats.php#OklahomaCityBarons">Farm Team Stats</a> ]
[ <a href="ASHL8-PLF-FarmTeamStatsVS.php#OklahomaCityBarons">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_OklahomaCityBarons');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_OklahomaCityBarons" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>5</td><td><a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques</a></td><td>6</td><td><a href="ASHL8-PLF-ProTeamRoster.php#EdmontonOilers">Oklahoma City Barons</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-5.php">Game Direct Link</a></td></tr>
<tr><td>4</td><td>13</td><td><a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques</a></td><td>5</td><td><a href="ASHL8-PLF-ProTeamRoster.php#EdmontonOilers">Oklahoma City Barons</a></td><td>6</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL8-PLF-Farm-13.php">Game Direct Link</a></td></tr>
<tr><td>6</td><td>21</td><td><a href="ASHL8-PLF-ProTeamRoster.php#EdmontonOilers">Oklahoma City Barons</a></td><td>1</td><td><a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-21.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>29</td><td><a href="ASHL8-PLF-ProTeamRoster.php#EdmontonOilers">Oklahoma City Barons</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-29.php">Game Direct Link</a></td></tr>
<tr><td>10</td><td>37</td><td><a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#EdmontonOilers">Oklahoma City Barons</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-37.php">Game Direct Link</a></td></tr>
<tr><td>12</td><td>45</td><td><a href="ASHL8-PLF-ProTeamRoster.php#EdmontonOilers">Oklahoma City Barons</a></td><td>3</td><td><a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-45.php">Game Direct Link</a></td></tr>
<tr><td>14</td><td>53</td><td><a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#EdmontonOilers">Oklahoma City Barons</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-53.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_SAR"><a id="SanAntonioRampage">San Antonio Rampage</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">Florida Panthers Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#FloridaPanthers">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-FarmTeamScoring.php#SanAntonioRampage">Farm Team Scoring</a> ]
[ <a href="ASHL8-PLF-FarmTeamLines.php#SanAntonioRampage">Farm Team Lines</a> ]
[ <a href="ASHL8-PLF-FarmTeamSchedule.php#SanAntonioRampage">Farm Team Schedule</a> ]
[ <a href="ASHL8-PLF-FarmTeamStats.php#SanAntonioRampage">Farm Team Stats</a> ]
[ <a href="ASHL8-PLF-FarmTeamStatsVS.php#SanAntonioRampage">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SanAntonioRampage');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SanAntonioRampage" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
</table></div>
<h1 class="TeamScheduleFarm_GAT"><a id="GatineauOlympiques">Gatineau Olympiques</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=27">Los Angeles Kings Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-FarmTeamScoring.php#GatineauOlympiques">Farm Team Scoring</a> ]
[ <a href="ASHL8-PLF-FarmTeamLines.php#GatineauOlympiques">Farm Team Lines</a> ]
[ <a href="ASHL8-PLF-FarmTeamSchedule.php#GatineauOlympiques">Farm Team Schedule</a> ]
[ <a href="ASHL8-PLF-FarmTeamStats.php#GatineauOlympiques">Farm Team Stats</a> ]
[ <a href="ASHL8-PLF-FarmTeamStatsVS.php#GatineauOlympiques">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_GatineauOlympiques');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_GatineauOlympiques" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>5</td><td><a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques</a></td><td>6</td><td><a href="ASHL8-PLF-ProTeamRoster.php#EdmontonOilers">Oklahoma City Barons</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-5.php">Game Direct Link</a></td></tr>
<tr><td>4</td><td>13</td><td><a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques</a></td><td>5</td><td><a href="ASHL8-PLF-ProTeamRoster.php#EdmontonOilers">Oklahoma City Barons</a></td><td>6</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL8-PLF-Farm-13.php">Game Direct Link</a></td></tr>
<tr><td>6</td><td>21</td><td><a href="ASHL8-PLF-ProTeamRoster.php#EdmontonOilers">Oklahoma City Barons</a></td><td>1</td><td><a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-21.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>29</td><td><a href="ASHL8-PLF-ProTeamRoster.php#EdmontonOilers">Oklahoma City Barons</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-29.php">Game Direct Link</a></td></tr>
<tr><td>10</td><td>37</td><td><a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#EdmontonOilers">Oklahoma City Barons</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-37.php">Game Direct Link</a></td></tr>
<tr><td>12</td><td>45</td><td><a href="ASHL8-PLF-ProTeamRoster.php#EdmontonOilers">Oklahoma City Barons</a></td><td>3</td><td><a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-45.php">Game Direct Link</a></td></tr>
<tr><td>14</td><td>53</td><td><a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#EdmontonOilers">Oklahoma City Barons</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-53.php">Game Direct Link</a></td></tr>
<tr><td>16</td><td>59</td><td><a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques</a></td><td>5</td><td><a href="ASHL8-PLF-ProTeamRoster.php#St.LouisBlues">Peoria Rivermen</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-59.php">Game Direct Link</a></td></tr>
<tr><td>18</td><td>63</td><td><a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques</a></td><td>6</td><td><a href="ASHL8-PLF-ProTeamRoster.php#St.LouisBlues">Peoria Rivermen</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-63.php">Game Direct Link</a></td></tr>
<tr><td>20</td><td>67</td><td><a href="ASHL8-PLF-ProTeamRoster.php#St.LouisBlues">Peoria Rivermen</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-67.php">Game Direct Link</a></td></tr>
<tr><td>22</td><td>71</td><td><a href="ASHL8-PLF-ProTeamRoster.php#St.LouisBlues">Peoria Rivermen</a></td><td>7</td><td><a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-71.php">Game Direct Link</a></td></tr>
<tr><td>24</td><td>75</td><td><a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#St.LouisBlues">Peoria Rivermen</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-75.php">Game Direct Link</a></td></tr>
<tr><td>30</td><td>86</td><td><a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques</a></td><td>3</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-86.php">Game Direct Link</a></td></tr>
<tr><td>32</td><td>88</td><td><a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques</a></td><td>4</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-88.php">Game Direct Link</a></td></tr>
<tr><td>34</td><td>90</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-90.php">Game Direct Link</a></td></tr>
<tr><td>36</td><td>92</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>1</td><td><a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques</a></td><td>2</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL8-PLF-Farm-92.php">Game Direct Link</a></td></tr>
<tr><td>38</td><td>94</td><td><a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques</a></td><td>5</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>4</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL8-PLF-Farm-94.php">Game Direct Link</a></td></tr>
<tr><td>40</td><td>96</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>4</td><td><a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-96.php">Game Direct Link</a></td></tr>
<tr><td>42</td><td>98</td><td><a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-98.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_HOU"><a id="HoustonAeros">Houston Aeros</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=24">Minnesota Wild Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#MinnesotaWild">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-FarmTeamScoring.php#HoustonAeros">Farm Team Scoring</a> ]
[ <a href="ASHL8-PLF-FarmTeamLines.php#HoustonAeros">Farm Team Lines</a> ]
[ <a href="ASHL8-PLF-FarmTeamSchedule.php#HoustonAeros">Farm Team Schedule</a> ]
[ <a href="ASHL8-PLF-FarmTeamStats.php#HoustonAeros">Farm Team Stats</a> ]
[ <a href="ASHL8-PLF-FarmTeamStatsVS.php#HoustonAeros">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_HoustonAeros');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_HoustonAeros" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
</table></div>
<h1 class="TeamScheduleFarm_TRD"><a id="Trois-RivièresDraveurs">Trois-Rivières Draveurs</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">Montreal Canadiens Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#MontrealCanadiens">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-FarmTeamScoring.php#Trois-RivièresDraveurs">Farm Team Scoring</a> ]
[ <a href="ASHL8-PLF-FarmTeamLines.php#Trois-RivièresDraveurs">Farm Team Lines</a> ]
[ <a href="ASHL8-PLF-FarmTeamSchedule.php#Trois-RivièresDraveurs">Farm Team Schedule</a> ]
[ <a href="ASHL8-PLF-FarmTeamStats.php#Trois-RivièresDraveurs">Farm Team Stats</a> ]
[ <a href="ASHL8-PLF-FarmTeamStatsVS.php#Trois-RivièresDraveurs">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Trois-RivièresDraveurs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Trois-RivièresDraveurs" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>1</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils</a></td><td>4</td><td><a href="ASHL8-PLF-ProTeamRoster.php#MontrealCanadiens">Trois-Rivières Draveurs</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-1.php">Game Direct Link</a></td></tr>
<tr><td>3</td><td>9</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils</a></td><td>6</td><td><a href="ASHL8-PLF-ProTeamRoster.php#MontrealCanadiens">Trois-Rivières Draveurs</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-9.php">Game Direct Link</a></td></tr>
<tr><td>5</td><td>17</td><td><a href="ASHL8-PLF-ProTeamRoster.php#MontrealCanadiens">Trois-Rivières Draveurs</a></td><td>4</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-17.php">Game Direct Link</a></td></tr>
<tr><td>7</td><td>25</td><td><a href="ASHL8-PLF-ProTeamRoster.php#MontrealCanadiens">Trois-Rivières Draveurs</a></td><td>3</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-25.php">Game Direct Link</a></td></tr>
<tr><td>9</td><td>33</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils</a></td><td>4</td><td><a href="ASHL8-PLF-ProTeamRoster.php#MontrealCanadiens">Trois-Rivières Draveurs</a></td><td>5</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL8-PLF-Farm-33.php">Game Direct Link</a></td></tr>
<tr><td>11</td><td>41</td><td><a href="ASHL8-PLF-ProTeamRoster.php#MontrealCanadiens">Trois-Rivières Draveurs</a></td><td>3</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-41.php">Game Direct Link</a></td></tr>
<tr><td>13</td><td>49</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils</a></td><td>5</td><td><a href="ASHL8-PLF-ProTeamRoster.php#MontrealCanadiens">Trois-Rivières Draveurs</a></td><td>4</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL8-PLF-Farm-49.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_MIL"><a id="MilwaukeeAdmirals">Milwaukee Admirals</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=18">Nashville Predators Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#NashvillePredators">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-FarmTeamScoring.php#MilwaukeeAdmirals">Farm Team Scoring</a> ]
[ <a href="ASHL8-PLF-FarmTeamLines.php#MilwaukeeAdmirals">Farm Team Lines</a> ]
[ <a href="ASHL8-PLF-FarmTeamSchedule.php#MilwaukeeAdmirals">Farm Team Schedule</a> ]
[ <a href="ASHL8-PLF-FarmTeamStats.php#MilwaukeeAdmirals">Farm Team Stats</a> ]
[ <a href="ASHL8-PLF-FarmTeamStatsVS.php#MilwaukeeAdmirals">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MilwaukeeAdmirals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MilwaukeeAdmirals" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
</table></div>
<h1 class="TeamScheduleFarm_ALB"><a id="AlbanyDevils">Albany Devils</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">New Jersey Devils Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-FarmTeamScoring.php#AlbanyDevils">Farm Team Scoring</a> ]
[ <a href="ASHL8-PLF-FarmTeamLines.php#AlbanyDevils">Farm Team Lines</a> ]
[ <a href="ASHL8-PLF-FarmTeamSchedule.php#AlbanyDevils">Farm Team Schedule</a> ]
[ <a href="ASHL8-PLF-FarmTeamStats.php#AlbanyDevils">Farm Team Stats</a> ]
[ <a href="ASHL8-PLF-FarmTeamStatsVS.php#AlbanyDevils">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_AlbanyDevils');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_AlbanyDevils" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>1</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils</a></td><td>4</td><td><a href="ASHL8-PLF-ProTeamRoster.php#MontrealCanadiens">Trois-Rivières Draveurs</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-1.php">Game Direct Link</a></td></tr>
<tr><td>3</td><td>9</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils</a></td><td>6</td><td><a href="ASHL8-PLF-ProTeamRoster.php#MontrealCanadiens">Trois-Rivières Draveurs</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-9.php">Game Direct Link</a></td></tr>
<tr><td>5</td><td>17</td><td><a href="ASHL8-PLF-ProTeamRoster.php#MontrealCanadiens">Trois-Rivières Draveurs</a></td><td>4</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-17.php">Game Direct Link</a></td></tr>
<tr><td>7</td><td>25</td><td><a href="ASHL8-PLF-ProTeamRoster.php#MontrealCanadiens">Trois-Rivières Draveurs</a></td><td>3</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-25.php">Game Direct Link</a></td></tr>
<tr><td>9</td><td>33</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils</a></td><td>4</td><td><a href="ASHL8-PLF-ProTeamRoster.php#MontrealCanadiens">Trois-Rivières Draveurs</a></td><td>5</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL8-PLF-Farm-33.php">Game Direct Link</a></td></tr>
<tr><td>11</td><td>41</td><td><a href="ASHL8-PLF-ProTeamRoster.php#MontrealCanadiens">Trois-Rivières Draveurs</a></td><td>3</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-41.php">Game Direct Link</a></td></tr>
<tr><td>13</td><td>49</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils</a></td><td>5</td><td><a href="ASHL8-PLF-ProTeamRoster.php#MontrealCanadiens">Trois-Rivières Draveurs</a></td><td>4</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL8-PLF-Farm-49.php">Game Direct Link</a></td></tr>
<tr><td>15</td><td>57</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils</a></td><td>4</td><td><a href="ASHL8-PLF-ProTeamRoster.php#TampaBayLightning">Norfolk Admirals</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-57.php">Game Direct Link</a></td></tr>
<tr><td>17</td><td>61</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils</a></td><td>1</td><td><a href="ASHL8-PLF-ProTeamRoster.php#TampaBayLightning">Norfolk Admirals</a></td><td>2</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL8-PLF-Farm-61.php">Game Direct Link</a></td></tr>
<tr><td>19</td><td>65</td><td><a href="ASHL8-PLF-ProTeamRoster.php#TampaBayLightning">Norfolk Admirals</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-65.php">Game Direct Link</a></td></tr>
<tr><td>21</td><td>69</td><td><a href="ASHL8-PLF-ProTeamRoster.php#TampaBayLightning">Norfolk Admirals</a></td><td>3</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-69.php">Game Direct Link</a></td></tr>
<tr><td>23</td><td>73</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#TampaBayLightning">Norfolk Admirals</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-73.php">Game Direct Link</a></td></tr>
<tr><td>25</td><td>77</td><td><a href="ASHL8-PLF-ProTeamRoster.php#TampaBayLightning">Norfolk Admirals</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-77.php">Game Direct Link</a></td></tr>
<tr><td>29</td><td>85</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils</a></td><td>3</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-85.php">Game Direct Link</a></td></tr>
<tr><td>31</td><td>87</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils</a></td><td>4</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-87.php">Game Direct Link</a></td></tr>
<tr><td>33</td><td>89</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>5</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-89.php">Game Direct Link</a></td></tr>
<tr><td>35</td><td>91</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-91.php">Game Direct Link</a></td></tr>
<tr><td>37</td><td>93</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils</a></td><td>3</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-93.php">Game Direct Link</a></td></tr>
<tr><td>39</td><td>95</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>1</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-95.php">Game Direct Link</a></td></tr>
<tr><td>41</td><td>97</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils</a></td><td>3</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-97.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_BRI"><a id="BridgeportSoundTigers">Bridgeport Sound Tigers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">New York Islanders Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#NewYorkIslanders">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-FarmTeamScoring.php#BridgeportSoundTigers">Farm Team Scoring</a> ]
[ <a href="ASHL8-PLF-FarmTeamLines.php#BridgeportSoundTigers">Farm Team Lines</a> ]
[ <a href="ASHL8-PLF-FarmTeamSchedule.php#BridgeportSoundTigers">Farm Team Schedule</a> ]
[ <a href="ASHL8-PLF-FarmTeamStats.php#BridgeportSoundTigers">Farm Team Stats</a> ]
[ <a href="ASHL8-PLF-FarmTeamStatsVS.php#BridgeportSoundTigers">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BridgeportSoundTigers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BridgeportSoundTigers" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#OttawaSenators">Binghamton Senators</a></td><td>4</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewYorkIslanders">Bridgeport Sound Tigers</a></td><td>3</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL8-PLF-Farm-2.php">Game Direct Link</a></td></tr>
<tr><td>3</td><td>10</td><td><a href="ASHL8-PLF-ProTeamRoster.php#OttawaSenators">Binghamton Senators</a></td><td>5</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewYorkIslanders">Bridgeport Sound Tigers</a></td><td>7</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-10.php">Game Direct Link</a></td></tr>
<tr><td>5</td><td>18</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewYorkIslanders">Bridgeport Sound Tigers</a></td><td>3</td><td><a href="ASHL8-PLF-ProTeamRoster.php#OttawaSenators">Binghamton Senators</a></td><td>4</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL8-PLF-Farm-18.php">Game Direct Link</a></td></tr>
<tr><td>7</td><td>26</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewYorkIslanders">Bridgeport Sound Tigers</a></td><td>5</td><td><a href="ASHL8-PLF-ProTeamRoster.php#OttawaSenators">Binghamton Senators</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-26.php">Game Direct Link</a></td></tr>
<tr><td>9</td><td>34</td><td><a href="ASHL8-PLF-ProTeamRoster.php#OttawaSenators">Binghamton Senators</a></td><td>3</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewYorkIslanders">Bridgeport Sound Tigers</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-34.php">Game Direct Link</a></td></tr>
<tr><td>11</td><td>42</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewYorkIslanders">Bridgeport Sound Tigers</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#OttawaSenators">Binghamton Senators</a></td><td>3</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL8-PLF-Farm-42.php">Game Direct Link</a></td></tr>
<tr><td>13</td><td>50</td><td><a href="ASHL8-PLF-ProTeamRoster.php#OttawaSenators">Binghamton Senators</a></td><td>5</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewYorkIslanders">Bridgeport Sound Tigers</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-50.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_CTW"><a id="ConnecticutWhale">Connecticut Whale</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">New York Rangers Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#NewYorkRangers">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-FarmTeamScoring.php#ConnecticutWhale">Farm Team Scoring</a> ]
[ <a href="ASHL8-PLF-FarmTeamLines.php#ConnecticutWhale">Farm Team Lines</a> ]
[ <a href="ASHL8-PLF-FarmTeamSchedule.php#ConnecticutWhale">Farm Team Schedule</a> ]
[ <a href="ASHL8-PLF-FarmTeamStats.php#ConnecticutWhale">Farm Team Stats</a> ]
[ <a href="ASHL8-PLF-FarmTeamStatsVS.php#ConnecticutWhale">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ConnecticutWhale');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ConnecticutWhale" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>3</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewYorkRangers">Connecticut Whale</a></td><td>4</td><td><a href="ASHL8-PLF-ProTeamRoster.php#TampaBayLightning">Norfolk Admirals</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-3.php">Game Direct Link</a></td></tr>
<tr><td>3</td><td>11</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewYorkRangers">Connecticut Whale</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#TampaBayLightning">Norfolk Admirals</a></td><td>3</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL8-PLF-Farm-11.php">Game Direct Link</a></td></tr>
<tr><td>5</td><td>19</td><td><a href="ASHL8-PLF-ProTeamRoster.php#TampaBayLightning">Norfolk Admirals</a></td><td>5</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewYorkRangers">Connecticut Whale</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-19.php">Game Direct Link</a></td></tr>
<tr><td>7</td><td>27</td><td><a href="ASHL8-PLF-ProTeamRoster.php#TampaBayLightning">Norfolk Admirals</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewYorkRangers">Connecticut Whale</a></td><td>1</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL8-PLF-Farm-27.php">Game Direct Link</a></td></tr>
<tr><td>9</td><td>35</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewYorkRangers">Connecticut Whale</a></td><td>3</td><td><a href="ASHL8-PLF-ProTeamRoster.php#TampaBayLightning">Norfolk Admirals</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-35.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_BNG"><a id="BinghamtonSenators">Binghamton Senators</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">Ottawa Senators Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#OttawaSenators">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-FarmTeamScoring.php#BinghamtonSenators">Farm Team Scoring</a> ]
[ <a href="ASHL8-PLF-FarmTeamLines.php#BinghamtonSenators">Farm Team Lines</a> ]
[ <a href="ASHL8-PLF-FarmTeamSchedule.php#BinghamtonSenators">Farm Team Schedule</a> ]
[ <a href="ASHL8-PLF-FarmTeamStats.php#BinghamtonSenators">Farm Team Stats</a> ]
[ <a href="ASHL8-PLF-FarmTeamStatsVS.php#BinghamtonSenators">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BinghamtonSenators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BinghamtonSenators" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#OttawaSenators">Binghamton Senators</a></td><td>4</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewYorkIslanders">Bridgeport Sound Tigers</a></td><td>3</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL8-PLF-Farm-2.php">Game Direct Link</a></td></tr>
<tr><td>3</td><td>10</td><td><a href="ASHL8-PLF-ProTeamRoster.php#OttawaSenators">Binghamton Senators</a></td><td>5</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewYorkIslanders">Bridgeport Sound Tigers</a></td><td>7</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-10.php">Game Direct Link</a></td></tr>
<tr><td>5</td><td>18</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewYorkIslanders">Bridgeport Sound Tigers</a></td><td>3</td><td><a href="ASHL8-PLF-ProTeamRoster.php#OttawaSenators">Binghamton Senators</a></td><td>4</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL8-PLF-Farm-18.php">Game Direct Link</a></td></tr>
<tr><td>7</td><td>26</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewYorkIslanders">Bridgeport Sound Tigers</a></td><td>5</td><td><a href="ASHL8-PLF-ProTeamRoster.php#OttawaSenators">Binghamton Senators</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-26.php">Game Direct Link</a></td></tr>
<tr><td>9</td><td>34</td><td><a href="ASHL8-PLF-ProTeamRoster.php#OttawaSenators">Binghamton Senators</a></td><td>3</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewYorkIslanders">Bridgeport Sound Tigers</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-34.php">Game Direct Link</a></td></tr>
<tr><td>11</td><td>42</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewYorkIslanders">Bridgeport Sound Tigers</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#OttawaSenators">Binghamton Senators</a></td><td>3</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL8-PLF-Farm-42.php">Game Direct Link</a></td></tr>
<tr><td>13</td><td>50</td><td><a href="ASHL8-PLF-ProTeamRoster.php#OttawaSenators">Binghamton Senators</a></td><td>5</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewYorkIslanders">Bridgeport Sound Tigers</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-50.php">Game Direct Link</a></td></tr>
<tr><td>15</td><td>58</td><td><a href="ASHL8-PLF-ProTeamRoster.php#OttawaSenators">Binghamton Senators</a></td><td>1</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-58.php">Game Direct Link</a></td></tr>
<tr><td>17</td><td>62</td><td><a href="ASHL8-PLF-ProTeamRoster.php#OttawaSenators">Binghamton Senators</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>3</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL8-PLF-Farm-62.php">Game Direct Link</a></td></tr>
<tr><td>19</td><td>66</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>4</td><td><a href="ASHL8-PLF-ProTeamRoster.php#OttawaSenators">Binghamton Senators</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-66.php">Game Direct Link</a></td></tr>
<tr><td>21</td><td>70</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>3</td><td><a href="ASHL8-PLF-ProTeamRoster.php#OttawaSenators">Binghamton Senators</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-70.php">Game Direct Link</a></td></tr>
<tr><td>23</td><td>74</td><td><a href="ASHL8-PLF-ProTeamRoster.php#OttawaSenators">Binghamton Senators</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-74.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_ADK"><a id="AdirondackPhantoms">Adirondack Phantoms</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">Philadelphia Flyers Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#PhiladelphiaFlyers">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-FarmTeamScoring.php#AdirondackPhantoms">Farm Team Scoring</a> ]
[ <a href="ASHL8-PLF-FarmTeamLines.php#AdirondackPhantoms">Farm Team Lines</a> ]
[ <a href="ASHL8-PLF-FarmTeamSchedule.php#AdirondackPhantoms">Farm Team Schedule</a> ]
[ <a href="ASHL8-PLF-FarmTeamStats.php#AdirondackPhantoms">Farm Team Stats</a> ]
[ <a href="ASHL8-PLF-FarmTeamStatsVS.php#AdirondackPhantoms">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_AdirondackPhantoms');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_AdirondackPhantoms" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
</table></div>
<h1 class="TeamScheduleFarm_WBS"><a id="Wilkes-Barre/ScrantonPenguins">Wilkes-Barre/Scranton Penguins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">Pittsburgh Penguins Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-FarmTeamScoring.php#Wilkes-Barre/ScrantonPenguins">Farm Team Scoring</a> ]
[ <a href="ASHL8-PLF-FarmTeamLines.php#Wilkes-Barre/ScrantonPenguins">Farm Team Lines</a> ]
[ <a href="ASHL8-PLF-FarmTeamSchedule.php#Wilkes-Barre/ScrantonPenguins">Farm Team Schedule</a> ]
[ <a href="ASHL8-PLF-FarmTeamStats.php#Wilkes-Barre/ScrantonPenguins">Farm Team Stats</a> ]
[ <a href="ASHL8-PLF-FarmTeamStatsVS.php#Wilkes-Barre/ScrantonPenguins">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Wilkes-Barre/ScrantonPenguins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Wilkes-Barre/ScrantonPenguins" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>4</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>3</td><td><a href="ASHL8-PLF-ProTeamRoster.php#BuffaloSabres">Rochester Americans</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-4.php">Game Direct Link</a></td></tr>
<tr><td>3</td><td>12</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#BuffaloSabres">Rochester Americans</a></td><td>1</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL8-PLF-Farm-12.php">Game Direct Link</a></td></tr>
<tr><td>5</td><td>20</td><td><a href="ASHL8-PLF-ProTeamRoster.php#BuffaloSabres">Rochester Americans</a></td><td>1</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-20.php">Game Direct Link</a></td></tr>
<tr><td>7</td><td>28</td><td><a href="ASHL8-PLF-ProTeamRoster.php#BuffaloSabres">Rochester Americans</a></td><td>1</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-28.php">Game Direct Link</a></td></tr>
<tr><td>9</td><td>36</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>5</td><td><a href="ASHL8-PLF-ProTeamRoster.php#BuffaloSabres">Rochester Americans</a></td><td>4</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL8-PLF-Farm-36.php">Game Direct Link</a></td></tr>
<tr><td>15</td><td>58</td><td><a href="ASHL8-PLF-ProTeamRoster.php#OttawaSenators">Binghamton Senators</a></td><td>1</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-58.php">Game Direct Link</a></td></tr>
<tr><td>17</td><td>62</td><td><a href="ASHL8-PLF-ProTeamRoster.php#OttawaSenators">Binghamton Senators</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>3</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL8-PLF-Farm-62.php">Game Direct Link</a></td></tr>
<tr><td>19</td><td>66</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>4</td><td><a href="ASHL8-PLF-ProTeamRoster.php#OttawaSenators">Binghamton Senators</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-66.php">Game Direct Link</a></td></tr>
<tr><td>21</td><td>70</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>3</td><td><a href="ASHL8-PLF-ProTeamRoster.php#OttawaSenators">Binghamton Senators</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-70.php">Game Direct Link</a></td></tr>
<tr><td>23</td><td>74</td><td><a href="ASHL8-PLF-ProTeamRoster.php#OttawaSenators">Binghamton Senators</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-74.php">Game Direct Link</a></td></tr>
<tr><td>29</td><td>85</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils</a></td><td>3</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-85.php">Game Direct Link</a></td></tr>
<tr><td>31</td><td>87</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils</a></td><td>4</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-87.php">Game Direct Link</a></td></tr>
<tr><td>33</td><td>89</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>5</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-89.php">Game Direct Link</a></td></tr>
<tr><td>35</td><td>91</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-91.php">Game Direct Link</a></td></tr>
<tr><td>37</td><td>93</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils</a></td><td>3</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-93.php">Game Direct Link</a></td></tr>
<tr><td>39</td><td>95</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>1</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-95.php">Game Direct Link</a></td></tr>
<tr><td>41</td><td>97</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils</a></td><td>3</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-97.php">Game Direct Link</a></td></tr>
<tr><td>43</td><td>99</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>3</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-99.php">Game Direct Link</a></td></tr>
<tr><td>44</td><td>100</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>4</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-100.php">Game Direct Link</a></td></tr>
<tr><td>45</td><td>101</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-101.php">Game Direct Link</a></td></tr>
<tr><td>46</td><td>102</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>4</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>3</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL8-PLF-Farm-102.php">Game Direct Link</a></td></tr>
<tr><td>47</td><td>103</td><td><a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins</a></td><td>4</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-103.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_CHI"><a id="ChicoutimiSaguenéens">Chicoutimi Saguenéens</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=31">Quebec Nordiques Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#QuebecNordiques">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-FarmTeamScoring.php#ChicoutimiSaguenéens">Farm Team Scoring</a> ]
[ <a href="ASHL8-PLF-FarmTeamLines.php#ChicoutimiSaguenéens">Farm Team Lines</a> ]
[ <a href="ASHL8-PLF-FarmTeamSchedule.php#ChicoutimiSaguenéens">Farm Team Schedule</a> ]
[ <a href="ASHL8-PLF-FarmTeamStats.php#ChicoutimiSaguenéens">Farm Team Stats</a> ]
[ <a href="ASHL8-PLF-FarmTeamStatsVS.php#ChicoutimiSaguenéens">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ChicoutimiSaguenéens');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ChicoutimiSaguenéens" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
</table></div>
<h1 class="TeamScheduleFarm_RNO"><a id="Rouyn-NorandaHuskies">Rouyn-Noranda Huskies</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=28">San Jose Sharks Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#SanJoseSharks">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-FarmTeamScoring.php#Rouyn-NorandaHuskies">Farm Team Scoring</a> ]
[ <a href="ASHL8-PLF-FarmTeamLines.php#Rouyn-NorandaHuskies">Farm Team Lines</a> ]
[ <a href="ASHL8-PLF-FarmTeamSchedule.php#Rouyn-NorandaHuskies">Farm Team Schedule</a> ]
[ <a href="ASHL8-PLF-FarmTeamStats.php#Rouyn-NorandaHuskies">Farm Team Stats</a> ]
[ <a href="ASHL8-PLF-FarmTeamStatsVS.php#Rouyn-NorandaHuskies">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Rouyn-NorandaHuskies');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Rouyn-NorandaHuskies" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
</table></div>
<h1 class="TeamScheduleFarm_MIA"><a id="MercerIslandArchangels">Mercer Island Archangels</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=32">Seattle Saints Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#SeattleSaints">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-FarmTeamScoring.php#MercerIslandArchangels">Farm Team Scoring</a> ]
[ <a href="ASHL8-PLF-FarmTeamLines.php#MercerIslandArchangels">Farm Team Lines</a> ]
[ <a href="ASHL8-PLF-FarmTeamSchedule.php#MercerIslandArchangels">Farm Team Schedule</a> ]
[ <a href="ASHL8-PLF-FarmTeamStats.php#MercerIslandArchangels">Farm Team Stats</a> ]
[ <a href="ASHL8-PLF-FarmTeamStatsVS.php#MercerIslandArchangels">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MercerIslandArchangels');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MercerIslandArchangels" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
</table></div>
<h1 class="TeamScheduleFarm_PEO"><a id="PeoriaRivermen">Peoria Rivermen</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=19">St. Louis Blues Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#St.LouisBlues">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-FarmTeamScoring.php#PeoriaRivermen">Farm Team Scoring</a> ]
[ <a href="ASHL8-PLF-FarmTeamLines.php#PeoriaRivermen">Farm Team Lines</a> ]
[ <a href="ASHL8-PLF-FarmTeamSchedule.php#PeoriaRivermen">Farm Team Schedule</a> ]
[ <a href="ASHL8-PLF-FarmTeamStats.php#PeoriaRivermen">Farm Team Stats</a> ]
[ <a href="ASHL8-PLF-FarmTeamStatsVS.php#PeoriaRivermen">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PeoriaRivermen');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PeoriaRivermen" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>6</td><td><a href="ASHL8-PLF-ProTeamRoster.php#CalgaryFlames">Joliette Sportif</a></td><td>4</td><td><a href="ASHL8-PLF-ProTeamRoster.php#St.LouisBlues">Peoria Rivermen</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-6.php">Game Direct Link</a></td></tr>
<tr><td>4</td><td>14</td><td><a href="ASHL8-PLF-ProTeamRoster.php#CalgaryFlames">Joliette Sportif</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#St.LouisBlues">Peoria Rivermen</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-14.php">Game Direct Link</a></td></tr>
<tr><td>6</td><td>22</td><td><a href="ASHL8-PLF-ProTeamRoster.php#St.LouisBlues">Peoria Rivermen</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#CalgaryFlames">Joliette Sportif</a></td><td>3</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL8-PLF-Farm-22.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>30</td><td><a href="ASHL8-PLF-ProTeamRoster.php#St.LouisBlues">Peoria Rivermen</a></td><td>4</td><td><a href="ASHL8-PLF-ProTeamRoster.php#CalgaryFlames">Joliette Sportif</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-30.php">Game Direct Link</a></td></tr>
<tr><td>10</td><td>38</td><td><a href="ASHL8-PLF-ProTeamRoster.php#CalgaryFlames">Joliette Sportif</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#St.LouisBlues">Peoria Rivermen</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-38.php">Game Direct Link</a></td></tr>
<tr><td>16</td><td>59</td><td><a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques</a></td><td>5</td><td><a href="ASHL8-PLF-ProTeamRoster.php#St.LouisBlues">Peoria Rivermen</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-59.php">Game Direct Link</a></td></tr>
<tr><td>18</td><td>63</td><td><a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques</a></td><td>6</td><td><a href="ASHL8-PLF-ProTeamRoster.php#St.LouisBlues">Peoria Rivermen</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-63.php">Game Direct Link</a></td></tr>
<tr><td>20</td><td>67</td><td><a href="ASHL8-PLF-ProTeamRoster.php#St.LouisBlues">Peoria Rivermen</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-67.php">Game Direct Link</a></td></tr>
<tr><td>22</td><td>71</td><td><a href="ASHL8-PLF-ProTeamRoster.php#St.LouisBlues">Peoria Rivermen</a></td><td>7</td><td><a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-71.php">Game Direct Link</a></td></tr>
<tr><td>24</td><td>75</td><td><a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#St.LouisBlues">Peoria Rivermen</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-75.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_NOR"><a id="NorfolkAdmirals">Norfolk Admirals</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=13">Tampa Bay Lightning Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#TampaBayLightning">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-FarmTeamScoring.php#NorfolkAdmirals">Farm Team Scoring</a> ]
[ <a href="ASHL8-PLF-FarmTeamLines.php#NorfolkAdmirals">Farm Team Lines</a> ]
[ <a href="ASHL8-PLF-FarmTeamSchedule.php#NorfolkAdmirals">Farm Team Schedule</a> ]
[ <a href="ASHL8-PLF-FarmTeamStats.php#NorfolkAdmirals">Farm Team Stats</a> ]
[ <a href="ASHL8-PLF-FarmTeamStatsVS.php#NorfolkAdmirals">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NorfolkAdmirals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NorfolkAdmirals" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>3</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewYorkRangers">Connecticut Whale</a></td><td>4</td><td><a href="ASHL8-PLF-ProTeamRoster.php#TampaBayLightning">Norfolk Admirals</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-3.php">Game Direct Link</a></td></tr>
<tr><td>3</td><td>11</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewYorkRangers">Connecticut Whale</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#TampaBayLightning">Norfolk Admirals</a></td><td>3</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL8-PLF-Farm-11.php">Game Direct Link</a></td></tr>
<tr><td>5</td><td>19</td><td><a href="ASHL8-PLF-ProTeamRoster.php#TampaBayLightning">Norfolk Admirals</a></td><td>5</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewYorkRangers">Connecticut Whale</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-19.php">Game Direct Link</a></td></tr>
<tr><td>7</td><td>27</td><td><a href="ASHL8-PLF-ProTeamRoster.php#TampaBayLightning">Norfolk Admirals</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewYorkRangers">Connecticut Whale</a></td><td>1</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL8-PLF-Farm-27.php">Game Direct Link</a></td></tr>
<tr><td>9</td><td>35</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewYorkRangers">Connecticut Whale</a></td><td>3</td><td><a href="ASHL8-PLF-ProTeamRoster.php#TampaBayLightning">Norfolk Admirals</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-35.php">Game Direct Link</a></td></tr>
<tr><td>15</td><td>57</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils</a></td><td>4</td><td><a href="ASHL8-PLF-ProTeamRoster.php#TampaBayLightning">Norfolk Admirals</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-57.php">Game Direct Link</a></td></tr>
<tr><td>17</td><td>61</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils</a></td><td>1</td><td><a href="ASHL8-PLF-ProTeamRoster.php#TampaBayLightning">Norfolk Admirals</a></td><td>2</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL8-PLF-Farm-61.php">Game Direct Link</a></td></tr>
<tr><td>19</td><td>65</td><td><a href="ASHL8-PLF-ProTeamRoster.php#TampaBayLightning">Norfolk Admirals</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-65.php">Game Direct Link</a></td></tr>
<tr><td>21</td><td>69</td><td><a href="ASHL8-PLF-ProTeamRoster.php#TampaBayLightning">Norfolk Admirals</a></td><td>3</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-69.php">Game Direct Link</a></td></tr>
<tr><td>23</td><td>73</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#TampaBayLightning">Norfolk Admirals</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-73.php">Game Direct Link</a></td></tr>
<tr><td>25</td><td>77</td><td><a href="ASHL8-PLF-ProTeamRoster.php#TampaBayLightning">Norfolk Admirals</a></td><td>2</td><td><a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-77.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_ROB"><a id="RobervalDwarfs">Roberval Dwarfs</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">Toronto Maple Leafs Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#TorontoMapleLeafs">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-FarmTeamScoring.php#RobervalDwarfs">Farm Team Scoring</a> ]
[ <a href="ASHL8-PLF-FarmTeamLines.php#RobervalDwarfs">Farm Team Lines</a> ]
[ <a href="ASHL8-PLF-FarmTeamSchedule.php#RobervalDwarfs">Farm Team Schedule</a> ]
[ <a href="ASHL8-PLF-FarmTeamStats.php#RobervalDwarfs">Farm Team Stats</a> ]
[ <a href="ASHL8-PLF-FarmTeamStatsVS.php#RobervalDwarfs">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_RobervalDwarfs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_RobervalDwarfs" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
</table></div>
<h1 class="TeamScheduleFarm_CHI"><a id="ChicagoWolves">Chicago Wolves</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=25">Vancouver Canucks Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#VancouverCanucks">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-FarmTeamScoring.php#ChicagoWolves">Farm Team Scoring</a> ]
[ <a href="ASHL8-PLF-FarmTeamLines.php#ChicagoWolves">Farm Team Lines</a> ]
[ <a href="ASHL8-PLF-FarmTeamSchedule.php#ChicagoWolves">Farm Team Schedule</a> ]
[ <a href="ASHL8-PLF-FarmTeamStats.php#ChicagoWolves">Farm Team Stats</a> ]
[ <a href="ASHL8-PLF-FarmTeamStatsVS.php#ChicagoWolves">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ChicagoWolves');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ChicagoWolves" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>8</td><td><a href="ASHL8-PLF-ProTeamRoster.php#VancouverCanucks">Chicago Wolves</a></td><td>3</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-8.php">Game Direct Link</a></td></tr>
<tr><td>4</td><td>16</td><td><a href="ASHL8-PLF-ProTeamRoster.php#VancouverCanucks">Chicago Wolves</a></td><td>1</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-16.php">Game Direct Link</a></td></tr>
<tr><td>6</td><td>24</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>3</td><td><a href="ASHL8-PLF-ProTeamRoster.php#VancouverCanucks">Chicago Wolves</a></td><td>2</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL8-PLF-Farm-24.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>32</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>4</td><td><a href="ASHL8-PLF-ProTeamRoster.php#VancouverCanucks">Chicago Wolves</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-32.php">Game Direct Link</a></td></tr>
<tr><td>10</td><td>40</td><td><a href="ASHL8-PLF-ProTeamRoster.php#VancouverCanucks">Chicago Wolves</a></td><td>3</td><td><a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL8-PLF-Farm-40.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_LAN"><a id="LandshutCannibals">Landshut Cannibals</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=14">Washington Capitals Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#WashingtonCapitals">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-FarmTeamScoring.php#LandshutCannibals">Farm Team Scoring</a> ]
[ <a href="ASHL8-PLF-FarmTeamLines.php#LandshutCannibals">Farm Team Lines</a> ]
[ <a href="ASHL8-PLF-FarmTeamSchedule.php#LandshutCannibals">Farm Team Schedule</a> ]
[ <a href="ASHL8-PLF-FarmTeamStats.php#LandshutCannibals">Farm Team Stats</a> ]
[ <a href="ASHL8-PLF-FarmTeamStatsVS.php#LandshutCannibals">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LandshutCannibals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LandshutCannibals" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
</table></div>
<h1 class="TeamScheduleFarm_MAN"><a id="ManitobaMoose">Manitoba Moose</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=15">Winnipeg Jets Page</a> ]
[ <a href="ASHL8-PLF-ProTeamRoster.php#WinnipegJets">Pro Team Roster</a> ]
[ <a href="ASHL8-PLF-FarmTeamScoring.php#ManitobaMoose">Farm Team Scoring</a> ]
[ <a href="ASHL8-PLF-FarmTeamLines.php#ManitobaMoose">Farm Team Lines</a> ]
[ <a href="ASHL8-PLF-FarmTeamSchedule.php#ManitobaMoose">Farm Team Schedule</a> ]
[ <a href="ASHL8-PLF-FarmTeamStats.php#ManitobaMoose">Farm Team Stats</a> ]
[ <a href="ASHL8-PLF-FarmTeamStatsVS.php#ManitobaMoose">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ManitobaMoose');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ManitobaMoose" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
</table></div>
<?php include "Footer.php";?>

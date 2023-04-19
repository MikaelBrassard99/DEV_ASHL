<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Pro Team Schedule</title>
<script src="ASHL11-PRE.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.6.6 - ASHL11-STHS.db - ASHL11-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
<style>.tabsmenu{display:none;}</style> <!-- Do Not Show Top Menu STHS Option Apply -->
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"ASHL11-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"ASHL11-STHSCareerStat.db";
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 1; /* Show Webpage Top Menu */
include "Menu.php";?>
<script>$(function(){$("table").basictablesorter()});</script>
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#AnaheimDucks">Anaheim Ducks</a> | <a href="#ArizonaCoyotes">Arizona Coyotes</a> | <a href="#BostonBruins">Boston Bruins</a> | <a href="#BuffaloSabres">Buffalo Sabres</a> | <a href="#CalgaryFlames">Calgary Flames</a> | <a href="#CarolinaHurricanes">Carolina Hurricanes</a> | <a href="#ChicagoBlackhawks">Chicago Blackhawks</a> | <a href="#ColoradoAvalanche">Colorado Avalanche</a> | <a href="#ColumbusBlueJackets">Columbus Blue Jackets</a> | <a href="#DallasStars">Dallas Stars</a> | <a href="#DetroitRedWings">Detroit Red Wings</a> | <a href="#EdmontonOilers">Edmonton Oilers</a> | <a href="#FloridaPanthers">Florida Panthers</a> | <a href="#LosAngelesKings">Los Angeles Kings</a> | <a href="#MinnesotaWild">Minnesota Wild</a> | <a href="#MontrealCanadiens">Montreal Canadiens</a> | <a href="#NashvillePredators">Nashville Predators</a> | <a href="#NewJerseyDevils">New Jersey Devils</a> | <a href="#NewYorkIslanders">New York Islanders</a> | <a href="#NewYorkRangers">New York Rangers</a> | <a href="#OttawaSenators">Ottawa Senators</a> | <a href="#PhiladelphiaFlyers">Philadelphia Flyers</a> | <a href="#PittsburghPenguins">Pittsburgh Penguins</a> | <a href="#QuebecNordiques">Quebec Nordiques</a> | <a href="#SanJoseSharks">San Jose Sharks</a> | <a href="#SeattleKraken">Seattle Kraken</a> | <a href="#St.LouisBlues">St. Louis Blues</a> | <a href="#TampaBayLightning">Tampa Bay Lightning</a> | <a href="#TorontoMapleLeafs">Toronto Maple Leafs</a> | <a href="#VancouverCanucks">Vancouver Canucks</a> | <a href="#VegasGoldenKnights">Vegas Golden Knights</a> | <a href="#WashingtonCapitals">Washington Capitals</a> | <a href="#WinnipegJets">Winnipeg Jets</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamSchedulePro_ANH"><a id="AnaheimDucks">Anaheim Ducks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=26">Anaheim Ducks Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#AnaheimDucks">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#AnaheimDucks">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#AnaheimDucks">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#AnaheimDucks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#AnaheimDucks">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#AnaheimDucks">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#AnaheimDucks">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#AnaheimDucks">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#AnaheimDucks">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#AnaheimDucks">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#AnaheimDucks">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#AnaheimDucks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_AnaheimDucks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_AnaheimDucks" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>1</td><td><a href="ASHL11-PRE-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>2</td><td><a href="ASHL11-PRE-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>0</td><td>W</td><td></td><td></td><td>R1<td><a href="ASHL11-PRE-1.php">Game Direct Link</a></td></tr>
<tr><td>3</td><td>17</td><td><a href="ASHL11-PRE-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>5</td><td><a href="ASHL11-PRE-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>4</td><td>L</td><td></td><td></td><td>R1<td><a href="ASHL11-PRE-17.php">Game Direct Link</a></td></tr>
<tr><td>5</td><td>34</td><td><a href="ASHL11-PRE-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>0</td><td><a href="ASHL11-PRE-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>2</td><td>W</td><td></td><td></td><td>R1<td><a href="ASHL11-PRE-34.php">Game Direct Link</a></td></tr>
<tr><td>7</td><td>49</td><td><a href="ASHL11-PRE-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>2</td><td><a href="ASHL11-PRE-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>4</td><td>L</td><td></td><td></td><td>R1<td><a href="ASHL11-PRE-49.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_ARZ"><a id="ArizonaCoyotes">Arizona Coyotes</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=30">Arizona Coyotes Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#ArizonaCoyotes">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#ArizonaCoyotes">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#ArizonaCoyotes">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#ArizonaCoyotes">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#ArizonaCoyotes">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#ArizonaCoyotes">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#ArizonaCoyotes">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#ArizonaCoyotes">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#ArizonaCoyotes">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#ArizonaCoyotes">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#ArizonaCoyotes">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#ArizonaCoyotes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ArizonaCoyotes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ArizonaCoyotes" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>10</td><td><a href="ASHL11-PRE-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>1</td><td><a href="ASHL11-PRE-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-10.php">Game Direct Link</a></td></tr>
<tr><td>4</td><td>25</td><td><a href="ASHL11-PRE-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>2</td><td><a href="ASHL11-PRE-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-25.php">Game Direct Link</a></td></tr>
<tr><td>6</td><td>40</td><td><a href="ASHL11-PRE-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>2</td><td><a href="ASHL11-PRE-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-40.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>65</td><td><a href="ASHL11-PRE-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>5</td><td><a href="ASHL11-PRE-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-65.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_BOS"><a id="BostonBruins">Boston Bruins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">Boston Bruins Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#BostonBruins">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#BostonBruins">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#BostonBruins">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#BostonBruins">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#BostonBruins">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#BostonBruins">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#BostonBruins">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#BostonBruins">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#BostonBruins">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#BostonBruins">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#BostonBruins">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#BostonBruins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BostonBruins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BostonBruins" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>3</td><td><a href="ASHL11-PRE-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>4</td><td><a href="ASHL11-PRE-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>7</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-3.php">Game Direct Link</a></td></tr>
<tr><td>3</td><td>20</td><td><a href="ASHL11-PRE-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>3</td><td><a href="ASHL11-PRE-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-20.php">Game Direct Link</a></td></tr>
<tr><td>5</td><td>35</td><td><a href="ASHL11-PRE-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>2</td><td><a href="ASHL11-PRE-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-35.php">Game Direct Link</a></td></tr>
<tr><td>7</td><td>54</td><td><a href="ASHL11-PRE-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>1</td><td><a href="ASHL11-PRE-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-54.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_BUF"><a id="BuffaloSabres">Buffalo Sabres</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">Buffalo Sabres Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#BuffaloSabres">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#BuffaloSabres">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#BuffaloSabres">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#BuffaloSabres">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#BuffaloSabres">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#BuffaloSabres">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#BuffaloSabres">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#BuffaloSabres">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#BuffaloSabres">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#BuffaloSabres">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#BuffaloSabres">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#BuffaloSabres">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BuffaloSabres');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BuffaloSabres" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>16</td><td><a href="ASHL11-PRE-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>2</td><td><a href="ASHL11-PRE-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-16.php">Game Direct Link</a></td></tr>
<tr><td>4</td><td>33</td><td><a href="ASHL11-PRE-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>3</td><td><a href="ASHL11-PRE-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-33.php">Game Direct Link</a></td></tr>
<tr><td>6</td><td>48</td><td><a href="ASHL11-PRE-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>4</td><td><a href="ASHL11-PRE-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-48.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>55</td><td><a href="ASHL11-PRE-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>4</td><td><a href="ASHL11-PRE-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-55.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_CGY"><a id="CalgaryFlames">Calgary Flames</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=21">Calgary Flames Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#CalgaryFlames">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#CalgaryFlames">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#CalgaryFlames">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#CalgaryFlames">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#CalgaryFlames">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#CalgaryFlames">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#CalgaryFlames">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#CalgaryFlames">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#CalgaryFlames">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#CalgaryFlames">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#CalgaryFlames">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#CalgaryFlames">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CalgaryFlames');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CalgaryFlames" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>9</td><td><a href="ASHL11-PRE-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>1</td><td><a href="ASHL11-PRE-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-9.php">Game Direct Link</a></td></tr>
<tr><td>3</td><td>24</td><td><a href="ASHL11-PRE-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>3</td><td><a href="ASHL11-PRE-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>2</td><td>L</td><td></td><td>*</td><td></td><td><a href="ASHL11-PRE-24.php">Game Direct Link</a></td></tr>
<tr><td>5</td><td>39</td><td><a href="ASHL11-PRE-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>2</td><td><a href="ASHL11-PRE-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>7</td><td>L</td><td></td><td></td><td>R3<td><a href="ASHL11-PRE-39.php">Game Direct Link</a></td></tr>
<tr><td>7</td><td>51</td><td><a href="ASHL11-PRE-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>2</td><td><a href="ASHL11-PRE-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>1</td><td>L</td><td>*</td><td></td><td>R3<td><a href="ASHL11-PRE-51.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_CAR"><a id="CarolinaHurricanes">Carolina Hurricanes</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">Carolina Hurricanes Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#CarolinaHurricanes">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#CarolinaHurricanes">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#CarolinaHurricanes">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#CarolinaHurricanes">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#CarolinaHurricanes">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#CarolinaHurricanes">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#CarolinaHurricanes">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#CarolinaHurricanes">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#CarolinaHurricanes">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#CarolinaHurricanes">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#CarolinaHurricanes">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#CarolinaHurricanes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CarolinaHurricanes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CarolinaHurricanes" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>11</td><td><a href="ASHL11-PRE-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>3</td><td><a href="ASHL11-PRE-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>2</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL11-PRE-11.php">Game Direct Link</a></td></tr>
<tr><td>4</td><td>31</td><td><a href="ASHL11-PRE-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>4</td><td><a href="ASHL11-PRE-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-31.php">Game Direct Link</a></td></tr>
<tr><td>6</td><td>46</td><td><a href="ASHL11-PRE-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>4</td><td><a href="ASHL11-PRE-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-46.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>56</td><td><a href="ASHL11-PRE-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>2</td><td><a href="ASHL11-PRE-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>3</td><td>W</td><td></td><td>*</td><td></td><td><a href="ASHL11-PRE-56.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_CHI"><a id="ChicagoBlackhawks">Chicago Blackhawks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=16">Chicago Blackhawks Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#ChicagoBlackhawks">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#ChicagoBlackhawks">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#ChicagoBlackhawks">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#ChicagoBlackhawks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#ChicagoBlackhawks">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#ChicagoBlackhawks">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#ChicagoBlackhawks">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#ChicagoBlackhawks">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#ChicagoBlackhawks">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#ChicagoBlackhawks">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#ChicagoBlackhawks">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#ChicagoBlackhawks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ChicagoBlackhawks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ChicagoBlackhawks" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>7</td><td><a href="ASHL11-PRE-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>4</td><td><a href="ASHL11-PRE-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>3</td><td>W</td><td>*</td><td></td><td>R1<td><a href="ASHL11-PRE-7.php">Game Direct Link</a></td></tr>
<tr><td>3</td><td>18</td><td><a href="ASHL11-PRE-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>5</td><td><a href="ASHL11-PRE-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>3</td><td>L</td><td></td><td></td><td>R1<td><a href="ASHL11-PRE-18.php">Game Direct Link</a></td></tr>
<tr><td>5</td><td>38</td><td><a href="ASHL11-PRE-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>3</td><td><a href="ASHL11-PRE-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-38.php">Game Direct Link</a></td></tr>
<tr><td>7</td><td>50</td><td><a href="ASHL11-PRE-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>1</td><td><a href="ASHL11-PRE-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>2</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL11-PRE-50.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_COL"><a id="ColoradoAvalanche">Colorado Avalanche</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=22">Colorado Avalanche Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#ColoradoAvalanche">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#ColoradoAvalanche">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#ColoradoAvalanche">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#ColoradoAvalanche">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#ColoradoAvalanche">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#ColoradoAvalanche">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#ColoradoAvalanche">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#ColoradoAvalanche">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#ColoradoAvalanche">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#ColoradoAvalanche">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#ColoradoAvalanche">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#ColoradoAvalanche">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ColoradoAvalanche');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ColoradoAvalanche" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>7</td><td><a href="ASHL11-PRE-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>4</td><td><a href="ASHL11-PRE-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>3</td><td>L</td><td>*</td><td></td><td>R1<td><a href="ASHL11-PRE-7.php">Game Direct Link</a></td></tr>
<tr><td>3</td><td>18</td><td><a href="ASHL11-PRE-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>5</td><td><a href="ASHL11-PRE-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>3</td><td>W</td><td></td><td></td><td>R1<td><a href="ASHL11-PRE-18.php">Game Direct Link</a></td></tr>
<tr><td>4</td><td>32</td><td><a href="ASHL11-PRE-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>5</td><td><a href="ASHL11-PRE-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-32.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>62</td><td><a href="ASHL11-PRE-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>2</td><td><a href="ASHL11-PRE-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-62.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_CLB"><a id="ColumbusBlueJackets">Columbus Blue Jackets</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=20">Columbus Blue Jackets Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#ColumbusBlueJackets">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#ColumbusBlueJackets">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#ColumbusBlueJackets">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#ColumbusBlueJackets">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#ColumbusBlueJackets">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#ColumbusBlueJackets">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#ColumbusBlueJackets">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#ColumbusBlueJackets">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#ColumbusBlueJackets">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#ColumbusBlueJackets">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#ColumbusBlueJackets">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#ColumbusBlueJackets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ColumbusBlueJackets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ColumbusBlueJackets" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>8</td><td><a href="ASHL11-PRE-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>4</td><td><a href="ASHL11-PRE-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-8.php">Game Direct Link</a></td></tr>
<tr><td>3</td><td>23</td><td><a href="ASHL11-PRE-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>2</td><td><a href="ASHL11-PRE-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-23.php">Game Direct Link</a></td></tr>
<tr><td>6</td><td>47</td><td><a href="ASHL11-PRE-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>1</td><td><a href="ASHL11-PRE-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-47.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>58</td><td><a href="ASHL11-PRE-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>3</td><td><a href="ASHL11-PRE-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-58.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_DAL"><a id="DallasStars">Dallas Stars</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=29">Dallas Stars Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#DallasStars">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#DallasStars">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#DallasStars">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#DallasStars">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#DallasStars">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#DallasStars">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#DallasStars">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#DallasStars">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#DallasStars">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#DallasStars">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#DallasStars">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#DallasStars">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_DallasStars');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_DallasStars" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>12</td><td><a href="ASHL11-PRE-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>1</td><td><a href="ASHL11-PRE-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-12.php">Game Direct Link</a></td></tr>
<tr><td>4</td><td>26</td><td><a href="ASHL11-PRE-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>3</td><td><a href="ASHL11-PRE-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-26.php">Game Direct Link</a></td></tr>
<tr><td>6</td><td>42</td><td><a href="ASHL11-PRE-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>0</td><td><a href="ASHL11-PRE-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-42.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>60</td><td><a href="ASHL11-PRE-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>1</td><td><a href="ASHL11-PRE-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-60.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_DET"><a id="DetroitRedWings">Detroit Red Wings</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=17">Detroit Red Wings Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#DetroitRedWings">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#DetroitRedWings">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#DetroitRedWings">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#DetroitRedWings">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#DetroitRedWings">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#DetroitRedWings">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#DetroitRedWings">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#DetroitRedWings">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#DetroitRedWings">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#DetroitRedWings">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#DetroitRedWings">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#DetroitRedWings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_DetroitRedWings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_DetroitRedWings" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>15</td><td><a href="ASHL11-PRE-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>4</td><td><a href="ASHL11-PRE-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-15.php">Game Direct Link</a></td></tr>
<tr><td>4</td><td>30</td><td><a href="ASHL11-PRE-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>2</td><td><a href="ASHL11-PRE-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-30.php">Game Direct Link</a></td></tr>
<tr><td>6</td><td>41</td><td><a href="ASHL11-PRE-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>2</td><td><a href="ASHL11-PRE-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-41.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>57</td><td><a href="ASHL11-PRE-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>0</td><td><a href="ASHL11-PRE-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-57.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_EDM"><a id="EdmontonOilers">Edmonton Oilers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=23">Edmonton Oilers Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#EdmontonOilers">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#EdmontonOilers">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#EdmontonOilers">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#EdmontonOilers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#EdmontonOilers">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#EdmontonOilers">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#EdmontonOilers">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#EdmontonOilers">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#EdmontonOilers">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#EdmontonOilers">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#EdmontonOilers">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#EdmontonOilers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_EdmontonOilers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_EdmontonOilers" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>2</td><td><a href="ASHL11-PRE-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>3</td><td><a href="ASHL11-PRE-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-2.php">Game Direct Link</a></td></tr>
<tr><td>3</td><td>22</td><td><a href="ASHL11-PRE-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>4</td><td><a href="ASHL11-PRE-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-22.php">Game Direct Link</a></td></tr>
<tr><td>5</td><td>39</td><td><a href="ASHL11-PRE-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>2</td><td><a href="ASHL11-PRE-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>7</td><td>W</td><td></td><td></td><td>R3<td><a href="ASHL11-PRE-39.php">Game Direct Link</a></td></tr>
<tr><td>7</td><td>51</td><td><a href="ASHL11-PRE-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>2</td><td><a href="ASHL11-PRE-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>1</td><td>W</td><td>*</td><td></td><td>R3<td><a href="ASHL11-PRE-51.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_FLA"><a id="FloridaPanthers">Florida Panthers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">Florida Panthers Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#FloridaPanthers">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#FloridaPanthers">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#FloridaPanthers">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#FloridaPanthers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#FloridaPanthers">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#FloridaPanthers">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#FloridaPanthers">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#FloridaPanthers">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#FloridaPanthers">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#FloridaPanthers">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#FloridaPanthers">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#FloridaPanthers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_FloridaPanthers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_FloridaPanthers" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>13</td><td><a href="ASHL11-PRE-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>1</td><td><a href="ASHL11-PRE-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>2</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL11-PRE-13.php">Game Direct Link</a></td></tr>
<tr><td>4</td><td>29</td><td><a href="ASHL11-PRE-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>3</td><td><a href="ASHL11-PRE-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-29.php">Game Direct Link</a></td></tr>
<tr><td>6</td><td>43</td><td><a href="ASHL11-PRE-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>2</td><td><a href="ASHL11-PRE-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-43.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>61</td><td><a href="ASHL11-PRE-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>1</td><td><a href="ASHL11-PRE-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-61.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_LOS"><a id="LosAngelesKings">Los Angeles Kings</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=27">Los Angeles Kings Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#LosAngelesKings">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#LosAngelesKings">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#LosAngelesKings">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#LosAngelesKings">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#LosAngelesKings">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#LosAngelesKings">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#LosAngelesKings">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#LosAngelesKings">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#LosAngelesKings">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#LosAngelesKings">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#LosAngelesKings">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#LosAngelesKings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LosAngelesKings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LosAngelesKings" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>1</td><td><a href="ASHL11-PRE-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>2</td><td><a href="ASHL11-PRE-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>0</td><td>L</td><td></td><td></td><td>R1<td><a href="ASHL11-PRE-1.php">Game Direct Link</a></td></tr>
<tr><td>3</td><td>17</td><td><a href="ASHL11-PRE-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>5</td><td><a href="ASHL11-PRE-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>4</td><td>W</td><td></td><td></td><td>R1<td><a href="ASHL11-PRE-17.php">Game Direct Link</a></td></tr>
<tr><td>6</td><td>40</td><td><a href="ASHL11-PRE-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>2</td><td><a href="ASHL11-PRE-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-40.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>65</td><td><a href="ASHL11-PRE-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>5</td><td><a href="ASHL11-PRE-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-65.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_MIN"><a id="MinnesotaWild">Minnesota Wild</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=24">Minnesota Wild Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#MinnesotaWild">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#MinnesotaWild">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#MinnesotaWild">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#MinnesotaWild">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#MinnesotaWild">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#MinnesotaWild">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#MinnesotaWild">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#MinnesotaWild">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#MinnesotaWild">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#MinnesotaWild">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#MinnesotaWild">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#MinnesotaWild">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MinnesotaWild');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MinnesotaWild" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>8</td><td><a href="ASHL11-PRE-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>4</td><td><a href="ASHL11-PRE-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-8.php">Game Direct Link</a></td></tr>
<tr><td>3</td><td>23</td><td><a href="ASHL11-PRE-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>2</td><td><a href="ASHL11-PRE-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-23.php">Game Direct Link</a></td></tr>
<tr><td>6</td><td>41</td><td><a href="ASHL11-PRE-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>2</td><td><a href="ASHL11-PRE-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-41.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>57</td><td><a href="ASHL11-PRE-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>0</td><td><a href="ASHL11-PRE-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-57.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_MTL"><a id="MontrealCanadiens">Montreal Canadiens</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">Montreal Canadiens Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#MontrealCanadiens">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#MontrealCanadiens">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#MontrealCanadiens">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#MontrealCanadiens">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#MontrealCanadiens">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#MontrealCanadiens">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#MontrealCanadiens">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#MontrealCanadiens">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#MontrealCanadiens">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#MontrealCanadiens">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#MontrealCanadiens">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#MontrealCanadiens">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MontrealCanadiens');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MontrealCanadiens" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>5</td><td><a href="ASHL11-PRE-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>2</td><td><a href="ASHL11-PRE-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>9</td><td>W</td><td></td><td></td><td>R3<td><a href="ASHL11-PRE-5.php">Game Direct Link</a></td></tr>
<tr><td>2</td><td>13</td><td><a href="ASHL11-PRE-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>1</td><td><a href="ASHL11-PRE-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>2</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL11-PRE-13.php">Game Direct Link</a></td></tr>
<tr><td>4</td><td>29</td><td><a href="ASHL11-PRE-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>3</td><td><a href="ASHL11-PRE-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-29.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>64</td><td><a href="ASHL11-PRE-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>1</td><td><a href="ASHL11-PRE-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>3</td><td>L</td><td></td><td></td><td>R3<td><a href="ASHL11-PRE-64.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_NSH"><a id="NashvillePredators">Nashville Predators</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=18">Nashville Predators Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#NashvillePredators">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#NashvillePredators">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#NashvillePredators">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#NashvillePredators">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#NashvillePredators">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#NashvillePredators">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#NashvillePredators">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#NashvillePredators">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#NashvillePredators">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#NashvillePredators">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#NashvillePredators">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#NashvillePredators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NashvillePredators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NashvillePredators" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>3</td><td><a href="ASHL11-PRE-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>4</td><td><a href="ASHL11-PRE-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>7</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-3.php">Game Direct Link</a></td></tr>
<tr><td>3</td><td>20</td><td><a href="ASHL11-PRE-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>3</td><td><a href="ASHL11-PRE-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-20.php">Game Direct Link</a></td></tr>
<tr><td>6</td><td>43</td><td><a href="ASHL11-PRE-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>2</td><td><a href="ASHL11-PRE-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-43.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>61</td><td><a href="ASHL11-PRE-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>1</td><td><a href="ASHL11-PRE-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-61.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_NJD"><a id="NewJerseyDevils">New Jersey Devils</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">New Jersey Devils Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#NewJerseyDevils">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#NewJerseyDevils">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#NewJerseyDevils">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#NewJerseyDevils">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#NewJerseyDevils">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#NewJerseyDevils">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#NewJerseyDevils">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#NewJerseyDevils">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#NewJerseyDevils">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#NewJerseyDevils">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#NewJerseyDevils">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#NewJerseyDevils">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewJerseyDevils');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewJerseyDevils" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>15</td><td><a href="ASHL11-PRE-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>4</td><td><a href="ASHL11-PRE-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-15.php">Game Direct Link</a></td></tr>
<tr><td>4</td><td>30</td><td><a href="ASHL11-PRE-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>2</td><td><a href="ASHL11-PRE-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-30.php">Game Direct Link</a></td></tr>
<tr><td>6</td><td>44</td><td><a href="ASHL11-PRE-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>1</td><td><a href="ASHL11-PRE-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-44.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>63</td><td><a href="ASHL11-PRE-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>2</td><td><a href="ASHL11-PRE-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-63.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_NYI"><a id="NewYorkIslanders">New York Islanders</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">New York Islanders Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#NewYorkIslanders">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#NewYorkIslanders">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#NewYorkIslanders">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#NewYorkIslanders">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#NewYorkIslanders">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#NewYorkIslanders">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#NewYorkIslanders">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#NewYorkIslanders">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#NewYorkIslanders">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#NewYorkIslanders">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#NewYorkIslanders">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#NewYorkIslanders">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewYorkIslanders');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewYorkIslanders" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>4</td><td><a href="ASHL11-PRE-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>6</td><td><a href="ASHL11-PRE-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-4.php">Game Direct Link</a></td></tr>
<tr><td>3</td><td>21</td><td><a href="ASHL11-PRE-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>5</td><td><a href="ASHL11-PRE-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-21.php">Game Direct Link</a></td></tr>
<tr><td>5</td><td>37</td><td><a href="ASHL11-PRE-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>0</td><td><a href="ASHL11-PRE-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>2</td><td>L</td><td></td><td></td><td>R2<td><a href="ASHL11-PRE-37.php">Game Direct Link</a></td></tr>
<tr><td>7</td><td>52</td><td><a href="ASHL11-PRE-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>4</td><td><a href="ASHL11-PRE-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>5</td><td>W</td><td></td><td>*</td><td>R2<td><a href="ASHL11-PRE-52.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_NYR"><a id="NewYorkRangers">New York Rangers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">New York Rangers Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#NewYorkRangers">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#NewYorkRangers">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#NewYorkRangers">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#NewYorkRangers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#NewYorkRangers">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#NewYorkRangers">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#NewYorkRangers">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#NewYorkRangers">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#NewYorkRangers">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#NewYorkRangers">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#NewYorkRangers">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#NewYorkRangers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewYorkRangers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewYorkRangers" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>14</td><td><a href="ASHL11-PRE-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>2</td><td><a href="ASHL11-PRE-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>3</td><td>L</td><td></td><td></td><td>R1<td><a href="ASHL11-PRE-14.php">Game Direct Link</a></td></tr>
<tr><td>4</td><td>27</td><td><a href="ASHL11-PRE-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>2</td><td><a href="ASHL11-PRE-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>6</td><td>W</td><td></td><td></td><td>R1<td><a href="ASHL11-PRE-27.php">Game Direct Link</a></td></tr>
<tr><td>5</td><td>37</td><td><a href="ASHL11-PRE-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>0</td><td><a href="ASHL11-PRE-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>2</td><td>W</td><td></td><td></td><td>R2<td><a href="ASHL11-PRE-37.php">Game Direct Link</a></td></tr>
<tr><td>7</td><td>52</td><td><a href="ASHL11-PRE-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>4</td><td><a href="ASHL11-PRE-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>5</td><td>L</td><td></td><td>*</td><td>R2<td><a href="ASHL11-PRE-52.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_OTT"><a id="OttawaSenators">Ottawa Senators</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">Ottawa Senators Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#OttawaSenators">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#OttawaSenators">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#OttawaSenators">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#OttawaSenators">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#OttawaSenators">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#OttawaSenators">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#OttawaSenators">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#OttawaSenators">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#OttawaSenators">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#OttawaSenators">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#OttawaSenators">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#OttawaSenators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_OttawaSenators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_OttawaSenators" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>12</td><td><a href="ASHL11-PRE-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>1</td><td><a href="ASHL11-PRE-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-12.php">Game Direct Link</a></td></tr>
<tr><td>4</td><td>26</td><td><a href="ASHL11-PRE-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>3</td><td><a href="ASHL11-PRE-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-26.php">Game Direct Link</a></td></tr>
<tr><td>6</td><td>46</td><td><a href="ASHL11-PRE-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>4</td><td><a href="ASHL11-PRE-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-46.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>56</td><td><a href="ASHL11-PRE-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>2</td><td><a href="ASHL11-PRE-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>3</td><td>L</td><td></td><td>*</td><td></td><td><a href="ASHL11-PRE-56.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_PHI"><a id="PhiladelphiaFlyers">Philadelphia Flyers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">Philadelphia Flyers Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#PhiladelphiaFlyers">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#PhiladelphiaFlyers">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#PhiladelphiaFlyers">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#PhiladelphiaFlyers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#PhiladelphiaFlyers">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#PhiladelphiaFlyers">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#PhiladelphiaFlyers">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#PhiladelphiaFlyers">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#PhiladelphiaFlyers">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#PhiladelphiaFlyers">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#PhiladelphiaFlyers">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#PhiladelphiaFlyers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PhiladelphiaFlyers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PhiladelphiaFlyers" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>14</td><td><a href="ASHL11-PRE-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>2</td><td><a href="ASHL11-PRE-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>3</td><td>W</td><td></td><td></td><td>R1<td><a href="ASHL11-PRE-14.php">Game Direct Link</a></td></tr>
<tr><td>4</td><td>27</td><td><a href="ASHL11-PRE-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>2</td><td><a href="ASHL11-PRE-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>6</td><td>L</td><td></td><td></td><td>R1<td><a href="ASHL11-PRE-27.php">Game Direct Link</a></td></tr>
<tr><td>6</td><td>44</td><td><a href="ASHL11-PRE-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>1</td><td><a href="ASHL11-PRE-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-44.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>63</td><td><a href="ASHL11-PRE-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>2</td><td><a href="ASHL11-PRE-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-63.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_PIT"><a id="PittsburghPenguins">Pittsburgh Penguins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">Pittsburgh Penguins Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#PittsburghPenguins">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#PittsburghPenguins">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#PittsburghPenguins">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#PittsburghPenguins">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#PittsburghPenguins">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#PittsburghPenguins">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#PittsburghPenguins">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#PittsburghPenguins">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#PittsburghPenguins">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#PittsburghPenguins">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#PittsburghPenguins">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#PittsburghPenguins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PittsburghPenguins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PittsburghPenguins" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>6</td><td><a href="ASHL11-PRE-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>2</td><td><a href="ASHL11-PRE-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-6.php">Game Direct Link</a></td></tr>
<tr><td>3</td><td>19</td><td><a href="ASHL11-PRE-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>0</td><td><a href="ASHL11-PRE-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-19.php">Game Direct Link</a></td></tr>
<tr><td>5</td><td>36</td><td><a href="ASHL11-PRE-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>4</td><td><a href="ASHL11-PRE-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-36.php">Game Direct Link</a></td></tr>
<tr><td>7</td><td>53</td><td><a href="ASHL11-PRE-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>1</td><td><a href="ASHL11-PRE-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-53.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_QUE"><a id="QuebecNordiques">Quebec Nordiques</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=31">Quebec Nordiques Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#QuebecNordiques">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#QuebecNordiques">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#QuebecNordiques">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#QuebecNordiques">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#QuebecNordiques">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#QuebecNordiques">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#QuebecNordiques">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#QuebecNordiques">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#QuebecNordiques">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#QuebecNordiques">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#QuebecNordiques">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#QuebecNordiques">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_QuebecNordiques');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_QuebecNordiques" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>5</td><td><a href="ASHL11-PRE-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>2</td><td><a href="ASHL11-PRE-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>9</td><td>L</td><td></td><td></td><td>R3<td><a href="ASHL11-PRE-5.php">Game Direct Link</a></td></tr>
<tr><td>5</td><td>35</td><td><a href="ASHL11-PRE-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>2</td><td><a href="ASHL11-PRE-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-35.php">Game Direct Link</a></td></tr>
<tr><td>7</td><td>54</td><td><a href="ASHL11-PRE-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>1</td><td><a href="ASHL11-PRE-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-54.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>64</td><td><a href="ASHL11-PRE-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>1</td><td><a href="ASHL11-PRE-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>3</td><td>W</td><td></td><td></td><td>R3<td><a href="ASHL11-PRE-64.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_SJS"><a id="SanJoseSharks">San Jose Sharks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=28">San Jose Sharks Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#SanJoseSharks">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#SanJoseSharks">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#SanJoseSharks">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#SanJoseSharks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#SanJoseSharks">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#SanJoseSharks">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#SanJoseSharks">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#SanJoseSharks">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#SanJoseSharks">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#SanJoseSharks">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#SanJoseSharks">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#SanJoseSharks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SanJoseSharks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SanJoseSharks" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>16</td><td><a href="ASHL11-PRE-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>2</td><td><a href="ASHL11-PRE-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-16.php">Game Direct Link</a></td></tr>
<tr><td>4</td><td>33</td><td><a href="ASHL11-PRE-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>3</td><td><a href="ASHL11-PRE-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-33.php">Game Direct Link</a></td></tr>
<tr><td>5</td><td>34</td><td><a href="ASHL11-PRE-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>0</td><td><a href="ASHL11-PRE-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>2</td><td>L</td><td></td><td></td><td>R1<td><a href="ASHL11-PRE-34.php">Game Direct Link</a></td></tr>
<tr><td>7</td><td>49</td><td><a href="ASHL11-PRE-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>2</td><td><a href="ASHL11-PRE-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>4</td><td>W</td><td></td><td></td><td>R1<td><a href="ASHL11-PRE-49.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_SEA"><a id="SeattleKraken">Seattle Kraken</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=32">Seattle Kraken Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#SeattleKraken">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#SeattleKraken">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#SeattleKraken">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#SeattleKraken">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#SeattleKraken">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#SeattleKraken">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#SeattleKraken">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#SeattleKraken">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#SeattleKraken">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#SeattleKraken">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#SeattleKraken">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#SeattleKraken">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SeattleKraken');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SeattleKraken" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>4</td><td><a href="ASHL11-PRE-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>6</td><td><a href="ASHL11-PRE-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-4.php">Game Direct Link</a></td></tr>
<tr><td>3</td><td>21</td><td><a href="ASHL11-PRE-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>5</td><td><a href="ASHL11-PRE-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-21.php">Game Direct Link</a></td></tr>
<tr><td>6</td><td>48</td><td><a href="ASHL11-PRE-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>4</td><td><a href="ASHL11-PRE-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-48.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>55</td><td><a href="ASHL11-PRE-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>4</td><td><a href="ASHL11-PRE-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-55.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_STL"><a id="St.LouisBlues">St. Louis Blues</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=19">St. Louis Blues Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#St.LouisBlues">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#St.LouisBlues">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#St.LouisBlues">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#St.LouisBlues">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#St.LouisBlues">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#St.LouisBlues">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#St.LouisBlues">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#St.LouisBlues">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#St.LouisBlues">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#St.LouisBlues">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#St.LouisBlues">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#St.LouisBlues">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_St.LouisBlues');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_St.LouisBlues" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>11</td><td><a href="ASHL11-PRE-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>3</td><td><a href="ASHL11-PRE-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>2</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL11-PRE-11.php">Game Direct Link</a></td></tr>
<tr><td>4</td><td>31</td><td><a href="ASHL11-PRE-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>4</td><td><a href="ASHL11-PRE-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-31.php">Game Direct Link</a></td></tr>
<tr><td>6</td><td>45</td><td><a href="ASHL11-PRE-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>1</td><td><a href="ASHL11-PRE-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-45.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>59</td><td><a href="ASHL11-PRE-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>0</td><td><a href="ASHL11-PRE-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-59.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_TBL"><a id="TampaBayLightning">Tampa Bay Lightning</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=13">Tampa Bay Lightning Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#TampaBayLightning">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#TampaBayLightning">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#TampaBayLightning">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#TampaBayLightning">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#TampaBayLightning">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#TampaBayLightning">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#TampaBayLightning">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#TampaBayLightning">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#TampaBayLightning">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#TampaBayLightning">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#TampaBayLightning">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#TampaBayLightning">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TampaBayLightning');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TampaBayLightning" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>6</td><td><a href="ASHL11-PRE-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>2</td><td><a href="ASHL11-PRE-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-6.php">Game Direct Link</a></td></tr>
<tr><td>3</td><td>19</td><td><a href="ASHL11-PRE-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>0</td><td><a href="ASHL11-PRE-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-19.php">Game Direct Link</a></td></tr>
<tr><td>4</td><td>28</td><td><a href="ASHL11-PRE-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>2</td><td><a href="ASHL11-PRE-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-28.php">Game Direct Link</a></td></tr>
<tr><td>9</td><td>66</td><td><a href="ASHL11-PRE-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>5</td><td><a href="ASHL11-PRE-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-66.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_TOR"><a id="TorontoMapleLeafs">Toronto Maple Leafs</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">Toronto Maple Leafs Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#TorontoMapleLeafs">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#TorontoMapleLeafs">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#TorontoMapleLeafs">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#TorontoMapleLeafs">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#TorontoMapleLeafs">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#TorontoMapleLeafs">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#TorontoMapleLeafs">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#TorontoMapleLeafs">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#TorontoMapleLeafs">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#TorontoMapleLeafs">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#TorontoMapleLeafs">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#TorontoMapleLeafs">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TorontoMapleLeafs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TorontoMapleLeafs" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>4</td><td>32</td><td><a href="ASHL11-PRE-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>5</td><td><a href="ASHL11-PRE-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-32.php">Game Direct Link</a></td></tr>
<tr><td>5</td><td>38</td><td><a href="ASHL11-PRE-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>3</td><td><a href="ASHL11-PRE-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-38.php">Game Direct Link</a></td></tr>
<tr><td>7</td><td>50</td><td><a href="ASHL11-PRE-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>1</td><td><a href="ASHL11-PRE-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>2</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL11-PRE-50.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>62</td><td><a href="ASHL11-PRE-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>2</td><td><a href="ASHL11-PRE-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-62.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_VAN"><a id="VancouverCanucks">Vancouver Canucks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=25">Vancouver Canucks Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#VancouverCanucks">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#VancouverCanucks">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#VancouverCanucks">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#VancouverCanucks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#VancouverCanucks">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#VancouverCanucks">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#VancouverCanucks">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#VancouverCanucks">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#VancouverCanucks">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#VancouverCanucks">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#VancouverCanucks">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#VancouverCanucks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_VancouverCanucks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_VancouverCanucks" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>4</td><td>28</td><td><a href="ASHL11-PRE-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>2</td><td><a href="ASHL11-PRE-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-28.php">Game Direct Link</a></td></tr>
<tr><td>6</td><td>45</td><td><a href="ASHL11-PRE-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>1</td><td><a href="ASHL11-PRE-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-45.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>59</td><td><a href="ASHL11-PRE-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>0</td><td><a href="ASHL11-PRE-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-59.php">Game Direct Link</a></td></tr>
<tr><td>9</td><td>66</td><td><a href="ASHL11-PRE-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>5</td><td><a href="ASHL11-PRE-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-66.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_VEG"><a id="VegasGoldenKnights">Vegas Golden Knights</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=33">Vegas Golden Knights Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#VegasGoldenKnights">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#VegasGoldenKnights">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#VegasGoldenKnights">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#VegasGoldenKnights">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#VegasGoldenKnights">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#VegasGoldenKnights">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#VegasGoldenKnights">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#VegasGoldenKnights">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#VegasGoldenKnights">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#VegasGoldenKnights">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#VegasGoldenKnights">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#VegasGoldenKnights">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_VegasGoldenKnights');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_VegasGoldenKnights" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>10</td><td><a href="ASHL11-PRE-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>1</td><td><a href="ASHL11-PRE-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-10.php">Game Direct Link</a></td></tr>
<tr><td>4</td><td>25</td><td><a href="ASHL11-PRE-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>2</td><td><a href="ASHL11-PRE-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-25.php">Game Direct Link</a></td></tr>
<tr><td>6</td><td>47</td><td><a href="ASHL11-PRE-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>1</td><td><a href="ASHL11-PRE-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-47.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>58</td><td><a href="ASHL11-PRE-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>3</td><td><a href="ASHL11-PRE-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-58.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_WSH"><a id="WashingtonCapitals">Washington Capitals</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=14">Washington Capitals Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#WashingtonCapitals">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#WashingtonCapitals">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#WashingtonCapitals">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#WashingtonCapitals">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#WashingtonCapitals">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#WashingtonCapitals">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#WashingtonCapitals">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#WashingtonCapitals">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#WashingtonCapitals">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#WashingtonCapitals">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#WashingtonCapitals">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#WashingtonCapitals">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_WashingtonCapitals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_WashingtonCapitals" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>2</td><td><a href="ASHL11-PRE-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>3</td><td><a href="ASHL11-PRE-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-2.php">Game Direct Link</a></td></tr>
<tr><td>3</td><td>22</td><td><a href="ASHL11-PRE-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>4</td><td><a href="ASHL11-PRE-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-22.php">Game Direct Link</a></td></tr>
<tr><td>6</td><td>42</td><td><a href="ASHL11-PRE-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>0</td><td><a href="ASHL11-PRE-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-42.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>60</td><td><a href="ASHL11-PRE-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>1</td><td><a href="ASHL11-PRE-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-60.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_WPG"><a id="WinnipegJets">Winnipeg Jets</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=15">Winnipeg Jets Page</a> ]
[ <a href="ASHL11-PRE-ProTeamRoster.php#WinnipegJets">Pro Team Roster</a> ]
[ <a href="ASHL11-PRE-ProTeamScoring.php#WinnipegJets">Pro Team Scoring</a> ]
[ <a href="ASHL11-PRE-TeamFinance.php#WinnipegJets">Team Finance</a> ]
[ <a href="ASHL11-PRE-ProTeamPlayersInfo.php#WinnipegJets">Pro Team PlayersInfo</a> ]
[ <a href="ASHL11-PRE-ProTeamLines.php#WinnipegJets">Pro Team Lines</a> ]
[ <a href="ASHL11-PRE-TeamProspects.php#WinnipegJets">Team Prospects</a> ]
[ <a href="ASHL11-PRE-ProTeamSchedule.php#WinnipegJets">Pro Team Schedule</a> ]
[ <a href="ASHL11-PRE-ProTeamStats.php#WinnipegJets">Pro Team Stats</a> ]
[ <a href="ASHL11-PRE-ProTeamStatsVS.php#WinnipegJets">Pro Team Stats VS</a> ]
[ <a href="ASHL11-PRE-TeamInjurySuspension.php#WinnipegJets">Team Injury Suspension</a> ]
[ <a href="ASHL11-PRE-TeamHistory.php#WinnipegJets">Team History</a> ]
[ <a href="ASHL11-PRE-TeamRecords.php#WinnipegJets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_WinnipegJets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_WinnipegJets" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>9</td><td><a href="ASHL11-PRE-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>1</td><td><a href="ASHL11-PRE-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-9.php">Game Direct Link</a></td></tr>
<tr><td>3</td><td>24</td><td><a href="ASHL11-PRE-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>3</td><td><a href="ASHL11-PRE-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>2</td><td>W</td><td></td><td>*</td><td></td><td><a href="ASHL11-PRE-24.php">Game Direct Link</a></td></tr>
<tr><td>5</td><td>36</td><td><a href="ASHL11-PRE-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>4</td><td><a href="ASHL11-PRE-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-36.php">Game Direct Link</a></td></tr>
<tr><td>7</td><td>53</td><td><a href="ASHL11-PRE-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>1</td><td><a href="ASHL11-PRE-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL11-PRE-53.php">Game Direct Link</a></td></tr>
</table></div>
<?php include "Footer.php";?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>CMHJ - Pro Team PlayersInfo</title>
<script src="CMHJ.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.5.5 - CMHJ-STHS.db - CMHJ-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<style>
@media screen and (max-width: 1200px) {
.STHSWarning {display:block;}
table.basictablesorter tbody td:nth-child(15){display:none;}
table.basictablesorter thead th:nth-child(15){display:none;}
table.basictablesorter tbody td:nth-child(16){display:none;}
table.basictablesorter thead th:nth-child(16){display:none;}
table.basictablesorter tbody td:nth-child(17){display:none;}
table.basictablesorter thead th:nth-child(17){display:none;}
}@media screen and (max-width: 960px) {
table.basictablesorter tbody td:nth-child(8){display:none;}
table.basictablesorter thead th:nth-child(8){display:none;}
table.basictablesorter tbody td:nth-child(9){display:none;}
table.basictablesorter thead th:nth-child(9){display:none;}
table.basictablesorter tbody td:nth-child(11){display:none;}
table.basictablesorter thead th:nth-child(11){display:none;}
table.basictablesorter tbody td:nth-child(12){display:none;}
table.basictablesorter thead th:nth-child(12){display:none;}
}@media screen and (max-width: 720px) {
table.basictablesorter tbody td:nth-child(2){display:none;}
table.basictablesorter thead th:nth-child(2){display:none;}
table.basictablesorter tbody td:nth-child(3){display:none;}
table.basictablesorter thead th:nth-child(3){display:none;}
}</style>
<link href="CMHJ.css" rel="stylesheet" type="text/css" />
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
<script>jQuery(function($,undefined) {$.basictablesorter.addParser({id: 'thousands',is: function(s) {return false;}, format: function(s) { return s.replace('$','').replace(/,/g,'');}, type: 'numeric' }); $("table").basictablesorter({headers:{11:{sorter:'thousands'},12:{sorter:'thousands'},13:{sorter:'thousands'},14:{sorter:'thousands'},15:{sorter:'thousands'}}});});</script>
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#Allemagne">Allemagne</a> | <a href="#Canada">Canada</a> | <a href="#Finlande">Finlande</a> | <a href="#RépubliqueTchèque">République Tchèque</a> | <a href="#Russie">Russie</a> | <a href="#Suède">Suède</a> | <a href="#TeamWorld">Team World</a> | <a href="#USA">USA</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamPlayerInfoPro_GER"><a id="Allemagne">Allemagne</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">Allemagne Page</a> ]
[ <a href="CMHJ-ProTeamRoster.php#Allemagne">Pro Team Roster</a> ]
[ <a href="CMHJ-ProTeamScoring.php#Allemagne">Pro Team Scoring</a> ]
[ <a href="CMHJ-TeamFinance.php#Allemagne">Team Finance</a> ]
[ <a href="CMHJ-ProTeamPlayersInfo.php#Allemagne">Pro Team PlayersInfo</a> ]
[ <a href="CMHJ-ProTeamLines.php#Allemagne">Pro Team Lines</a> ]
[ <a href="CMHJ-TeamProspects.php#Allemagne">Team Prospects</a> ]
[ <a href="CMHJ-ProTeamSchedule.php#Allemagne">Pro Team Schedule</a> ]
[ <a href="CMHJ-ProTeamStats.php#Allemagne">Pro Team Stats</a> ]
[ <a href="CMHJ-ProTeamStatsVS.php#Allemagne">Pro Team Stats VS</a> ]
[ <a href="CMHJ-TeamInjurySuspension.php#Allemagne">Team Injury Suspension</a> ]
[ <a href="CMHJ-TeamHistory.php#Allemagne">Team History</a> ]
[ <a href="CMHJ-TeamRecords.php#Allemagne">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Allemagne');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Allemagne" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>Arno Tiefensee</td><td>GER</td><td>G</td><td>18</td><td>2002-01-02</td><td>190 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Connor Korte</td><td>GER</td><td>C/LW/RW</td><td>17</td><td>2003-01-02</td><td>183 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Elias Lindner</td><td>GER</td><td>C/LW/RW</td><td>19</td><td>2001-01-02</td><td>185 Lbs</td><td>6 ft2</td><td>3</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Filip Reisnecker</td><td>GER</td><td>RW</td><td>19</td><td>2001-01-02</td><td>192 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Florian Elias</td><td>GER</td><td>C/LW/RW</td><td>18</td><td>2002-01-02</td><td>170 Lbs</td><td>5 ft8</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Haakon Hänelt</td><td>GER</td><td>C/LW/RW/D</td><td>17</td><td>2003-01-02</td><td>183 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Jakub Borzecki</td><td>GER</td><td>C/LW/RW</td><td>18</td><td>2002-01-02</td><td>203 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Jan Nijenhuis</td><td>GER</td><td>C/LW/RW</td><td>19</td><td>2001-01-02</td><td>170 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>John-Jason Peterka</td><td>GER</td><td>LW</td><td>18</td><td>2002-01-02</td><td>192 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Joshua Samanski</td><td>GER</td><td>C/LW/RW</td><td>18</td><td>2002-01-02</td><td>179 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Luca Münzenberger</td><td>GER</td><td>D</td><td>18</td><td>2002-01-02</td><td>194 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Lukas Reichel</td><td>GER</td><td>LW</td><td>18</td><td>2002-01-02</td><td>172 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Maksymilian Szuber</td><td>GER</td><td>D</td><td>18</td><td>2002-01-02</td><td>190 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Markus Schweiger</td><td>GER</td><td>C/LW/RW</td><td>18</td><td>2002-01-02</td><td>154 Lbs</td><td>5 ft6</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Maximilian Glötzl</td><td>GER</td><td>D</td><td>18</td><td>2002-01-02</td><td>198 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Moritz Seider</td><td>GER</td><td>D</td><td>19</td><td>2001-01-02</td><td>207 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Nikita Quapp</td><td>GER</td><td>G</td><td>17</td><td>2003-01-02</td><td>187 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Niklas Länger</td><td>GER</td><td>D</td><td>19</td><td>2001-01-02</td><td>168 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Samuel Dubé</td><td>GER</td><td>C</td><td>18</td><td>2002-01-02</td><td>168 Lbs</td><td>5 ft8</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Simon Gnyp</td><td>GER</td><td>D</td><td>19</td><td>2001-01-02</td><td>179 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Tim Stützle</td><td>GER</td><td>C/LW</td><td>18</td><td>2002-01-02</td><td>187 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Tobias Ancicka</td><td>GER</td><td>G</td><td>19</td><td>2001-01-02</td><td>181 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Tommy Pasanen</td><td>GER</td><td>D</td><td>19</td><td>2001-01-02</td><td>218 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>23</td><td>18,2</td><td>185 Lbs</td><td>6 ft 1</td><td>1,00 years</td><td>0 $</td>
<td>23</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_CAN"><a id="Canada">Canada</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">Canada Page</a> ]
[ <a href="CMHJ-ProTeamRoster.php#Canada">Pro Team Roster</a> ]
[ <a href="CMHJ-ProTeamScoring.php#Canada">Pro Team Scoring</a> ]
[ <a href="CMHJ-TeamFinance.php#Canada">Team Finance</a> ]
[ <a href="CMHJ-ProTeamPlayersInfo.php#Canada">Pro Team PlayersInfo</a> ]
[ <a href="CMHJ-ProTeamLines.php#Canada">Pro Team Lines</a> ]
[ <a href="CMHJ-TeamProspects.php#Canada">Team Prospects</a> ]
[ <a href="CMHJ-ProTeamSchedule.php#Canada">Pro Team Schedule</a> ]
[ <a href="CMHJ-ProTeamStats.php#Canada">Pro Team Stats</a> ]
[ <a href="CMHJ-ProTeamStatsVS.php#Canada">Pro Team Stats VS</a> ]
[ <a href="CMHJ-TeamInjurySuspension.php#Canada">Team Injury Suspension</a> ]
[ <a href="CMHJ-TeamHistory.php#Canada">Team History</a> ]
[ <a href="CMHJ-TeamRecords.php#Canada">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Canada');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Canada" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>Alex Beaucage</td><td>CAN</td><td>LW/RW</td><td>19</td><td>2001-01-02</td><td>192 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Alex Newhook</td><td>CAN</td><td>C</td><td>19</td><td>2001-01-02</td><td>192 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Alexis Lafrenière</td><td>CAN</td><td>LW</td><td>19</td><td>2001-01-02</td><td>192 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Bowen Byram</td><td>CAN</td><td>D</td><td>19</td><td>2001-01-02</td><td>194 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Braden Schneider</td><td>CAN</td><td>D</td><td>19</td><td>2001-01-02</td><td>209 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Brett Brochu</td><td>CAN</td><td>G</td><td>18</td><td>2002-01-02</td><td>161 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Cole Perfetti</td><td>CAN</td><td>C/LW</td><td>18</td><td>2002-01-02</td><td>185 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Connor McMichael</td><td>CAN</td><td>C</td><td>19</td><td>2001-01-02</td><td>181 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Connor Zary</td><td>CAN</td><td>C</td><td>19</td><td>2001-01-02</td><td>181 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Dawson Mercer</td><td>CAN</td><td>RW</td><td>19</td><td>2001-01-02</td><td>179 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Dylan Cozens</td><td>CAN</td><td>C</td><td>19</td><td>2001-01-02</td><td>185 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Dylan Garand</td><td>CAN</td><td>G</td><td>18</td><td>2002-01-02</td><td>172 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Jack Quinn</td><td>CAN</td><td>RW</td><td>19</td><td>2001-01-02</td><td>179 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Jakob Pelletier</td><td>CAN</td><td>LW</td><td>19</td><td>2001-01-02</td><td>170 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Jamie Drysdale</td><td>CAN</td><td>D</td><td>18</td><td>2002-01-02</td><td>170 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Jonathan Lemieux</td><td>CAN</td><td>G</td><td>19</td><td>2001-01-02</td><td>185 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Justin Barron</td><td>CAN</td><td>D</td><td>19</td><td>2001-01-02</td><td>198 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Kaiden Guhle</td><td>CAN</td><td>D</td><td>18</td><td>2002-01-02</td><td>187 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Kirby Dach</td><td>CAN</td><td>C</td><td>19</td><td>2001-01-02</td><td>198 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Quinton Byfield</td><td>CAN</td><td>C</td><td>18</td><td>2002-01-02</td><td>214 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Samuel Régis</td><td>CAN</td><td>D</td><td>19</td><td>2001-01-02</td><td>205 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Shane Wright</td><td>CAN</td><td>C</td><td>16</td><td>2004-01-02</td><td>183 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Thomas Harley</td><td>CAN</td><td>D</td><td>19</td><td>2001-01-02</td><td>192 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>23</td><td>18,6</td><td>187 Lbs</td><td>6 ft 1</td><td>1,00 years</td><td>0 $</td>
<td>23</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_FIN"><a id="Finlande">Finlande</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">Finlande Page</a> ]
[ <a href="CMHJ-ProTeamRoster.php#Finlande">Pro Team Roster</a> ]
[ <a href="CMHJ-ProTeamScoring.php#Finlande">Pro Team Scoring</a> ]
[ <a href="CMHJ-TeamFinance.php#Finlande">Team Finance</a> ]
[ <a href="CMHJ-ProTeamPlayersInfo.php#Finlande">Pro Team PlayersInfo</a> ]
[ <a href="CMHJ-ProTeamLines.php#Finlande">Pro Team Lines</a> ]
[ <a href="CMHJ-TeamProspects.php#Finlande">Team Prospects</a> ]
[ <a href="CMHJ-ProTeamSchedule.php#Finlande">Pro Team Schedule</a> ]
[ <a href="CMHJ-ProTeamStats.php#Finlande">Pro Team Stats</a> ]
[ <a href="CMHJ-ProTeamStatsVS.php#Finlande">Pro Team Stats VS</a> ]
[ <a href="CMHJ-TeamInjurySuspension.php#Finlande">Team Injury Suspension</a> ]
[ <a href="CMHJ-TeamHistory.php#Finlande">Team History</a> ]
[ <a href="CMHJ-TeamRecords.php#Finlande">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Finlande');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Finlande" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>Aatu Räty</td><td>FIN</td><td>C</td><td>18</td><td>2002-01-02</td><td>181 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Aku Räty</td><td>FIN</td><td>RW</td><td>19</td><td>2001-01-02</td><td>176 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Anton Lundell</td><td>FIN</td><td>C</td><td>19</td><td>2001-01-02</td><td>187 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Antti Saarela</td><td>FIN</td><td>LW/RW</td><td>19</td><td>2001-01-02</td><td>187 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Antti Tuomisto</td><td>FIN</td><td>D</td><td>19</td><td>2001-01-02</td><td>194 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Brad Lambert</td><td>FIN</td><td>C</td><td>17</td><td>2003-01-02</td><td>172 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Eemil Viro</td><td>FIN</td><td>D</td><td>18</td><td>2002-01-02</td><td>168 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Henri Nikkanen</td><td>FIN</td><td>C</td><td>19</td><td>2001-01-02</td><td>203 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Joel Blomqvist</td><td>FIN</td><td>G</td><td>18</td><td>2002-01-02</td><td>183 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Joni Jurmo</td><td>FIN</td><td>D</td><td>18</td><td>2002-01-02</td><td>198 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Juuso Parssinen</td><td>FIN</td><td>C</td><td>19</td><td>2001-01-02</td><td>198 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Kaapo Kakko</td><td>FIN</td><td>RW</td><td>19</td><td>2001-01-02</td><td>198 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Kari Piiroinen</td><td>FIN</td><td>G</td><td>19</td><td>2001-01-02</td><td>176 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Kasper Simontaival</td><td>FIN</td><td>RW</td><td>18</td><td>2002-01-02</td><td>172 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Leevi Aaltonen</td><td>FIN</td><td>LW/RW</td><td>19</td><td>2001-01-02</td><td>176 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Leevi Merilainen</td><td>FIN</td><td>G</td><td>18</td><td>2002-01-02</td><td>159 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Mikko Kokkonen</td><td>FIN</td><td>D</td><td>19</td><td>2001-01-02</td><td>198 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Patrik Puistola</td><td>FIN</td><td>LW/RW</td><td>19</td><td>2001-01-02</td><td>165 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Roby Jarventie</td><td>FIN</td><td>LW</td><td>18</td><td>2002-01-02</td><td>190 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Roni Hirvonen</td><td>FIN</td><td>C</td><td>18</td><td>2002-01-02</td><td>170 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Santeri Hatakka</td><td>FIN</td><td>D</td><td>19</td><td>2001-01-02</td><td>183 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Topi Niemela</td><td>FIN</td><td>D</td><td>18</td><td>2002-01-02</td><td>163 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Ville Heinola</td><td>FIN</td><td>D</td><td>19</td><td>2001-01-02</td><td>181 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>23</td><td>18,5</td><td>182 Lbs</td><td>6 ft 1</td><td>1,00 years</td><td>0 $</td>
<td>23</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_CZE"><a id="RépubliqueTchèque">République Tchèque</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">République Tchèque Page</a> ]
[ <a href="CMHJ-ProTeamRoster.php#RépubliqueTchèque">Pro Team Roster</a> ]
[ <a href="CMHJ-ProTeamScoring.php#RépubliqueTchèque">Pro Team Scoring</a> ]
[ <a href="CMHJ-TeamFinance.php#RépubliqueTchèque">Team Finance</a> ]
[ <a href="CMHJ-ProTeamPlayersInfo.php#RépubliqueTchèque">Pro Team PlayersInfo</a> ]
[ <a href="CMHJ-ProTeamLines.php#RépubliqueTchèque">Pro Team Lines</a> ]
[ <a href="CMHJ-TeamProspects.php#RépubliqueTchèque">Team Prospects</a> ]
[ <a href="CMHJ-ProTeamSchedule.php#RépubliqueTchèque">Pro Team Schedule</a> ]
[ <a href="CMHJ-ProTeamStats.php#RépubliqueTchèque">Pro Team Stats</a> ]
[ <a href="CMHJ-ProTeamStatsVS.php#RépubliqueTchèque">Pro Team Stats VS</a> ]
[ <a href="CMHJ-TeamInjurySuspension.php#RépubliqueTchèque">Team Injury Suspension</a> ]
[ <a href="CMHJ-TeamHistory.php#RépubliqueTchèque">Team History</a> ]
[ <a href="CMHJ-TeamRecords.php#RépubliqueTchèque">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_RépubliqueTchèque');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_RépubliqueTchèque" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>Adam Najman</td><td>CZE</td><td>C</td><td>19</td><td>2001-01-02</td><td>185 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Adam Raska</td><td>CZE</td><td>LW/RW</td><td>19</td><td>2001-01-02</td><td>168 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>David Jindra</td><td>CZE</td><td>C/LW/RW</td><td>19</td><td>2001-01-02</td><td>168 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>David Jiricek</td><td>CZE</td><td>D</td><td>17</td><td>2003-01-02</td><td>176 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>David Vitouch</td><td>CZE</td><td>C/LW</td><td>19</td><td>2001-01-02</td><td>154 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Filip Prikryl</td><td>CZE</td><td>C</td><td>19</td><td>2001-01-02</td><td>170 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Jan Bednar</td><td>CZE</td><td>G</td><td>18</td><td>2002-01-02</td><td>196 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Jan Mysak</td><td>CZE</td><td>C/LW</td><td>18</td><td>2002-01-02</td><td>181 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Jaromir Pytlik</td><td>CZE</td><td>C</td><td>19</td><td>2001-01-02</td><td>201 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Jonas Peterek</td><td>CZE</td><td>C</td><td>19</td><td>2001-01-02</td><td>176 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Karel Klikorka</td><td>CZE</td><td>D</td><td>19</td><td>2001-01-02</td><td>194 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Lukas Parik</td><td>CZE</td><td>G</td><td>19</td><td>2001-01-02</td><td>185 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Martin Hugo Has</td><td>CZE</td><td>D</td><td>19</td><td>2001-01-02</td><td>187 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Martin Lang</td><td>CZE</td><td>LW/RW</td><td>19</td><td>2001-01-02</td><td>172 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Michal Teply</td><td>CZE</td><td>LW/RW</td><td>19</td><td>2001-01-02</td><td>192 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Nick Malik</td><td>CZE</td><td>G</td><td>18</td><td>2002-01-02</td><td>176 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Ondrej Balaz</td><td>CZE</td><td>D</td><td>18</td><td>2002-01-02</td><td>176 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Ondrej Psenicka</td><td>CZE</td><td>RW</td><td>19</td><td>2001-01-02</td><td>205 Lbs</td><td>6 ft6</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Pavel Novak</td><td>CZE</td><td>LW/RW</td><td>18</td><td>2002-01-02</td><td>170 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Radek Kucerik</td><td>CZE</td><td>D</td><td>19</td><td>2001-01-02</td><td>209 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Radek Muzik</td><td>CZE</td><td>LW/RW</td><td>19</td><td>2001-01-02</td><td>187 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Simon Kubicek</td><td>CZE</td><td>D</td><td>19</td><td>2001-01-02</td><td>205 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Stanislav Svozil</td><td>CZE</td><td>D</td><td>17</td><td>2003-01-02</td><td>172 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>23</td><td>18,6</td><td>183 Lbs</td><td>6 ft 1</td><td>1,00 years</td><td>0 $</td>
<td>23</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_RUS"><a id="Russie">Russie</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">Russie Page</a> ]
[ <a href="CMHJ-ProTeamRoster.php#Russie">Pro Team Roster</a> ]
[ <a href="CMHJ-ProTeamScoring.php#Russie">Pro Team Scoring</a> ]
[ <a href="CMHJ-TeamFinance.php#Russie">Team Finance</a> ]
[ <a href="CMHJ-ProTeamPlayersInfo.php#Russie">Pro Team PlayersInfo</a> ]
[ <a href="CMHJ-ProTeamLines.php#Russie">Pro Team Lines</a> ]
[ <a href="CMHJ-TeamProspects.php#Russie">Team Prospects</a> ]
[ <a href="CMHJ-ProTeamSchedule.php#Russie">Pro Team Schedule</a> ]
[ <a href="CMHJ-ProTeamStats.php#Russie">Pro Team Stats</a> ]
[ <a href="CMHJ-ProTeamStatsVS.php#Russie">Pro Team Stats VS</a> ]
[ <a href="CMHJ-TeamInjurySuspension.php#Russie">Team Injury Suspension</a> ]
[ <a href="CMHJ-TeamHistory.php#Russie">Team History</a> ]
[ <a href="CMHJ-TeamRecords.php#Russie">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Russie');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Russie" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>Alexander Nikishin</td><td>RUS</td><td>D</td><td>19</td><td>2001-01-02</td><td>216 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Daniil Chayka</td><td>RUS</td><td>D</td><td>18</td><td>2002-01-02</td><td>185 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Danil Gushchin</td><td>RUS</td><td>RW</td><td>18</td><td>2002-01-02</td><td>165 Lbs</td><td>5 ft8</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Dmitri Ovchinnikov</td><td>RUS</td><td>C/LW/RW</td><td>18</td><td>2002-01-02</td><td>163 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Iaroslav Askarov</td><td>RUS</td><td>G</td><td>18</td><td>2002-01-02</td><td>176 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Ilya Nikolayev</td><td>RUS</td><td>C</td><td>19</td><td>2001-01-02</td><td>183 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Ivan Sapozhnikov</td><td>RUS</td><td>G</td><td>18</td><td>2002-01-02</td><td>183 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Marat Khusnutdinov</td><td>RUS</td><td>C</td><td>18</td><td>2002-01-02</td><td>165 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Mikhail Abramov</td><td>RUS</td><td>C/RW</td><td>19</td><td>2001-01-02</td><td>185 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Nikita Chibrikov</td><td>RUS</td><td>C/LW/RW</td><td>17</td><td>2003-01-02</td><td>161 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Rodion Amirov</td><td>RUS</td><td>LW/RW</td><td>19</td><td>2001-01-02</td><td>168 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Semyon Chistyakov</td><td>RUS</td><td>D</td><td>19</td><td>2001-01-02</td><td>179 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Shakir Mukhamadullin</td><td>RUS</td><td>D</td><td>18</td><td>2002-01-02</td><td>170 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Vasili Podkolzin</td><td>RUS</td><td>RW</td><td>19</td><td>2001-01-02</td><td>203 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Vasili Ponomaryov</td><td>RUS</td><td>C</td><td>18</td><td>2002-01-02</td><td>176 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Vladislav Lukashevich</td><td>RUS</td><td>D</td><td>17</td><td>2003-01-02</td><td>165 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Yan Kuznetsov</td><td>RUS</td><td>D</td><td>18</td><td>2002-01-02</td><td>214 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Yegor Afanasyev</td><td>RUS</td><td>C/LW/RW</td><td>19</td><td>2001-01-02</td><td>203 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Yegor Chinakhov</td><td>RUS</td><td>RW</td><td>19</td><td>2001-01-02</td><td>179 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Yegor Savikov</td><td>RUS</td><td>D</td><td>18</td><td>2002-01-02</td><td>159 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>20</td><td>18,3</td><td>180 Lbs</td><td>6 ft 0</td><td>1,00 years</td><td>0 $</td>
<td>20</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_SWE"><a id="Suède">Suède</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">Suède Page</a> ]
[ <a href="CMHJ-ProTeamRoster.php#Suède">Pro Team Roster</a> ]
[ <a href="CMHJ-ProTeamScoring.php#Suède">Pro Team Scoring</a> ]
[ <a href="CMHJ-TeamFinance.php#Suède">Team Finance</a> ]
[ <a href="CMHJ-ProTeamPlayersInfo.php#Suède">Pro Team PlayersInfo</a> ]
[ <a href="CMHJ-ProTeamLines.php#Suède">Pro Team Lines</a> ]
[ <a href="CMHJ-TeamProspects.php#Suède">Team Prospects</a> ]
[ <a href="CMHJ-ProTeamSchedule.php#Suède">Pro Team Schedule</a> ]
[ <a href="CMHJ-ProTeamStats.php#Suède">Pro Team Stats</a> ]
[ <a href="CMHJ-ProTeamStatsVS.php#Suède">Pro Team Stats VS</a> ]
[ <a href="CMHJ-TeamInjurySuspension.php#Suède">Team Injury Suspension</a> ]
[ <a href="CMHJ-TeamHistory.php#Suède">Team History</a> ]
[ <a href="CMHJ-TeamRecords.php#Suède">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Suède');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Suède" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>Albert Johansson</td><td>SWE</td><td>D</td><td>19</td><td>2001-01-02</td><td>168 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Albin Grewe</td><td>SWE</td><td>C/RW</td><td>19</td><td>2001-01-02</td><td>187 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Alexander Holtz</td><td>SWE</td><td>RW</td><td>18</td><td>2002-01-02</td><td>183 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Calle Clang</td><td>SWE</td><td>G</td><td>18</td><td>2002-01-02</td><td>176 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Daniel Torgersson</td><td>SWE</td><td>LW/RW</td><td>18</td><td>2002-01-02</td><td>205 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Emil Andrae</td><td>SWE</td><td>D</td><td>18</td><td>2002-01-02</td><td>181 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Emil Heineman</td><td>SWE</td><td>LW</td><td>19</td><td>2001-01-02</td><td>185 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Helge Grans</td><td>SWE</td><td>D</td><td>18</td><td>2002-01-02</td><td>192 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Hugo Alnefelt</td><td>SWE</td><td>G</td><td>19</td><td>2001-01-02</td><td>183 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Jesper Wallstedt</td><td>SWE</td><td>G</td><td>18</td><td>2002-01-02</td><td>214 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Karl Henriksson</td><td>SWE</td><td>C/LW</td><td>19</td><td>2001-01-02</td><td>174 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Lucas Raymond</td><td>SWE</td><td>LW/RW</td><td>18</td><td>2002-01-02</td><td>183 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Noel Gunler</td><td>SWE</td><td>LW/RW</td><td>19</td><td>2001-01-02</td><td>174 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Oskar Magnusson</td><td>SWE</td><td>C/RW</td><td>18</td><td>2002-01-02</td><td>165 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Philip Broberg</td><td>SWE</td><td>D</td><td>19</td><td>2001-01-02</td><td>203 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Simon Holmström</td><td>SWE</td><td>RW</td><td>19</td><td>2001-01-02</td><td>185 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Simon Robertsson</td><td>SWE</td><td>RW</td><td>17</td><td>2003-01-02</td><td>181 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Theodor Niederbach</td><td>SWE</td><td>C/RW</td><td>18</td><td>2002-01-02</td><td>172 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Tobias Björnfot</td><td>SWE</td><td>D</td><td>19</td><td>2001-01-02</td><td>203 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Victor Soderström</td><td>SWE</td><td>D</td><td>19</td><td>2001-01-02</td><td>196 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>William Eklund</td><td>SWE</td><td>C/LW</td><td>18</td><td>2002-01-02</td><td>172 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>William Wallinder</td><td>SWE</td><td>D</td><td>18</td><td>2002-01-02</td><td>192 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Zion Nybeck</td><td>SWE</td><td>LW/RW</td><td>18</td><td>2002-01-02</td><td>176 Lbs</td><td>5 ft8</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>23</td><td>18,4</td><td>185 Lbs</td><td>6 ft 0</td><td>1,00 years</td><td>0 $</td>
<td>23</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_TWO"><a id="TeamWorld">Team World</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">Team World Page</a> ]
[ <a href="CMHJ-ProTeamRoster.php#TeamWorld">Pro Team Roster</a> ]
[ <a href="CMHJ-ProTeamScoring.php#TeamWorld">Pro Team Scoring</a> ]
[ <a href="CMHJ-TeamFinance.php#TeamWorld">Team Finance</a> ]
[ <a href="CMHJ-ProTeamPlayersInfo.php#TeamWorld">Pro Team PlayersInfo</a> ]
[ <a href="CMHJ-ProTeamLines.php#TeamWorld">Pro Team Lines</a> ]
[ <a href="CMHJ-TeamProspects.php#TeamWorld">Team Prospects</a> ]
[ <a href="CMHJ-ProTeamSchedule.php#TeamWorld">Pro Team Schedule</a> ]
[ <a href="CMHJ-ProTeamStats.php#TeamWorld">Pro Team Stats</a> ]
[ <a href="CMHJ-ProTeamStatsVS.php#TeamWorld">Pro Team Stats VS</a> ]
[ <a href="CMHJ-TeamInjurySuspension.php#TeamWorld">Team Injury Suspension</a> ]
[ <a href="CMHJ-TeamHistory.php#TeamWorld">Team History</a> ]
[ <a href="CMHJ-TeamRecords.php#TeamWorld">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TeamWorld');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TeamWorld" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>Arthur Kaliyev</td><td>OUZ</td><td>LW</td><td>19</td><td>2001-01-02</td><td>190 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Frederik Dichow</td><td>DEN</td><td>G</td><td>19</td><td>2001-01-02</td><td>192 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Joaquim Muratet</td><td>ESP</td><td>C</td><td>17</td><td>2003-01-02</td><td>159 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Jonas Brondberg</td><td>DEN</td><td>D</td><td>19</td><td>2001-01-02</td><td>194 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Jordan Spence</td><td>AUS</td><td>D</td><td>19</td><td>2001-01-02</td><td>179 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Kirill Steklov</td><td>EST</td><td>D</td><td>18</td><td>2002-01-02</td><td>190 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Marco Rossi</td><td>AUS</td><td>C</td><td>19</td><td>2001-01-02</td><td>185 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Marko Mladenovic</td><td>SER</td><td>D</td><td>18</td><td>2002-01-02</td><td>165 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Martin Chromiak</td><td>SVK</td><td>RW</td><td>18</td><td>2002-01-02</td><td>181 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Maxim Cajkovic</td><td>SVK</td><td>RW</td><td>19</td><td>2001-01-02</td><td>190 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Mike Collard</td><td>NED</td><td>C/LW/RW</td><td>17</td><td>2003-01-02</td><td>139 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Ole Julian Bjorvik Holm</td><td>NOR</td><td>D</td><td>18</td><td>2002-01-02</td><td>201 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Raivis Ansons</td><td>LET</td><td>LW/RW</td><td>18</td><td>2002-01-02</td><td>192 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Rapolas Marcinkevicius</td><td>LIT</td><td>C/LW/RW</td><td>17</td><td>2003-01-02</td><td>214 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Reinhard Venter</td><td>SAF</td><td>C/LW/RW</td><td>19</td><td>2001-01-02</td><td>194 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Rudolfs Polcs</td><td>LET</td><td>C</td><td>19</td><td>2001-01-02</td><td>194 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Samuel Hlavaj</td><td>SVK</td><td>G</td><td>19</td><td>2001-01-02</td><td>214 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Sander Vold Engebratten</td><td>NOR</td><td>D</td><td>18</td><td>2002-01-02</td><td>172 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Simon Knak</td><td>SWI</td><td>RW</td><td>18</td><td>2002-01-02</td><td>190 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Théo Rochette</td><td>SWI</td><td>C</td><td>18</td><td>2002-01-02</td><td>165 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Thimo Nickl</td><td>AUS</td><td>D</td><td>19</td><td>2001-01-02</td><td>176 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Tobias Johansen Breivold</td><td>NOR</td><td>G</td><td>19</td><td>2001-01-02</td><td>165 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Yusaku Ando</td><td>JAP</td><td>C/LW/RW</td><td>17</td><td>2003-01-02</td><td>148 Lbs</td><td>5 ft7</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>23</td><td>18,3</td><td>182 Lbs</td><td>6 ft 1</td><td>1,00 years</td><td>0 $</td>
<td>23</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_USA"><a id="USA">USA</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">USA Page</a> ]
[ <a href="CMHJ-ProTeamRoster.php#USA">Pro Team Roster</a> ]
[ <a href="CMHJ-ProTeamScoring.php#USA">Pro Team Scoring</a> ]
[ <a href="CMHJ-TeamFinance.php#USA">Team Finance</a> ]
[ <a href="CMHJ-ProTeamPlayersInfo.php#USA">Pro Team PlayersInfo</a> ]
[ <a href="CMHJ-ProTeamLines.php#USA">Pro Team Lines</a> ]
[ <a href="CMHJ-TeamProspects.php#USA">Team Prospects</a> ]
[ <a href="CMHJ-ProTeamSchedule.php#USA">Pro Team Schedule</a> ]
[ <a href="CMHJ-ProTeamStats.php#USA">Pro Team Stats</a> ]
[ <a href="CMHJ-ProTeamStatsVS.php#USA">Pro Team Stats VS</a> ]
[ <a href="CMHJ-TeamInjurySuspension.php#USA">Team Injury Suspension</a> ]
[ <a href="CMHJ-TeamHistory.php#USA">Team History</a> ]
[ <a href="CMHJ-TeamRecords.php#USA">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_USA');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_USA" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary Ave</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th></tr></thead>
<tr><td>Alex Turcotte</td><td>USA</td><td>C</td><td>19</td><td>2001-01-02</td><td>185 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Bobby Brink</td><td>USA</td><td>RW</td><td>19</td><td>2001-01-02</td><td>163 Lbs</td><td>5 ft8</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Brendan Brisson</td><td>USA</td><td>C</td><td>19</td><td>2001-01-02</td><td>185 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Cam York</td><td>USA</td><td>D</td><td>19</td><td>2001-01-02</td><td>174 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Cole Caufield</td><td>USA</td><td>RW</td><td>19</td><td>2001-01-02</td><td>165 Lbs</td><td>5 ft7</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Drew Commesso</td><td>USA</td><td>G</td><td>18</td><td>2002-01-02</td><td>181 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Drew Helleson</td><td>USA</td><td>D</td><td>19</td><td>2001-01-02</td><td>193 Lbs</td><td>6 ft2</td><td>8</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Dustin Wolf</td><td>USA</td><td>G</td><td>19</td><td>2001-01-02</td><td>161 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Henry Thrun</td><td>USA</td><td>D</td><td>19</td><td>2001-01-02</td><td>190 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Jack Hughes</td><td>USA</td><td>C/LW/RW</td><td>19</td><td>2001-01-02</td><td>170 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Jackson LaCombe</td><td>USA</td><td>D</td><td>19</td><td>2001-01-02</td><td>172 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Jacob Perreault</td><td>USA</td><td>C/RW</td><td>18</td><td>2002-01-02</td><td>192 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Jake Sanderson</td><td>USA</td><td>D</td><td>18</td><td>2002-01-02</td><td>185 Lbs</td><td>6 ft1</td><td>1</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Jayden Struble</td><td>USA</td><td>D</td><td>19</td><td>2001-01-02</td><td>205 Lbs</td><td>6 ft0</td><td>1</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>John Farinacci</td><td>USA</td><td>C</td><td>19</td><td>2001-01-02</td><td>185 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Matthew Beniers</td><td>USA</td><td>C/LW</td><td>18</td><td>2002-01-02</td><td>174 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Matthew Boldy</td><td>USA</td><td>LW</td><td>19</td><td>2001-01-02</td><td>194 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Nick Robertson</td><td>USA</td><td>C/LW</td><td>19</td><td>2001-01-02</td><td>161 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Patrick Moynihan</td><td>USA</td><td>C</td><td>19</td><td>2001-01-02</td><td>185 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Ryan Johnson</td><td>USA</td><td>D</td><td>19</td><td>2001-01-02</td><td>174 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Spencer Knight</td><td>USA</td><td>G</td><td>19</td><td>2001-01-02</td><td>192 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Thomas Bordeleau</td><td>USA</td><td>C</td><td>18</td><td>2002-01-02</td><td>179 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
<tr><td>Trevor Zegras</td><td>USA</td><td>C</td><td>19</td><td>2001-01-02</td><td>170 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>0 $</td><td>0 $</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>23</td><td>18,8</td><td>180 Lbs</td><td>6 ft 0</td><td>1,00 years</td><td>0 $</td>
<td>23</td><td>0</td><td>0</td></tr></table></div>
<?php include "Footer.php";?>

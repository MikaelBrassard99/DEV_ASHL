<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Pro Team Schedule</title>
<script src="ASHL10.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.3.3 - ASHL10-STHS.db - ASHL10-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="ASHL10.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
</head><body>
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"ASHL10-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"ASHL10-STHSCareerStat.db";
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
[ <a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#AnaheimDucks">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#AnaheimDucks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#AnaheimDucks">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#AnaheimDucks">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#AnaheimDucks">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#AnaheimDucks">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#AnaheimDucks">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#AnaheimDucks">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#AnaheimDucks">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#AnaheimDucks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_AnaheimDucks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_AnaheimDucks" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-4.php">Game Direct Link</a></td></tr>
<tr><td>5</td><td>27</td><td><a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>4</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL10-27.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>48</td><td><a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-48.php">Game Direct Link</a></td></tr>
<tr><td>11</td><td>67</td><td><a href="ASHL10-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-67.php">Game Direct Link</a></td></tr>
<tr><td>14</td><td>87</td><td><a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-87.php">Game Direct Link</a></td></tr>
<tr><td>17</td><td>108</td><td><a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-108.php">Game Direct Link</a></td></tr>
<tr><td>19</td><td>122</td><td><a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>7</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-122.php">Game Direct Link</a></td></tr>
<tr><td>21</td><td>142</td><td><a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-142.php">Game Direct Link</a></td></tr>
<tr><td>25</td><td>152</td><td><a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>7</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-152.php">Game Direct Link</a></td></tr>
<tr><td>27</td><td>163</td><td><a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>3</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL10-163.php">Game Direct Link</a></td></tr>
<tr><td>29</td><td>184</td><td><a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>3</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL10-184.php">Game Direct Link</a></td></tr>
<tr><td>31</td><td>196</td><td><a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-196.php">Game Direct Link</a></td></tr>
<tr><td>35</td><td>219</td><td><a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-219.php">Game Direct Link</a></td></tr>
<tr><td>38</td><td>242</td><td><a href="ASHL10-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>3</td><td>W</td><td></td><td></td><td>R1<td><a href="ASHL10-242.php">Game Direct Link</a></td></tr>
<tr><td>40</td><td>254</td><td><a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-254.php">Game Direct Link</a></td></tr>
<tr><td>42</td><td>273</td><td><a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-273.php">Game Direct Link</a></td></tr>
<tr><td>49</td><td>314</td><td><a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-314.php">Game Direct Link</a></td></tr>
<tr><td>52</td><td>346</td><td><a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-346.php">Game Direct Link</a></td></tr>
<tr><td>55</td><td>361</td><td><a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>6</td><td><a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-361.php">Game Direct Link</a></td></tr>
<tr><td>57</td><td>376</td><td><a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-376.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_ARZ"><a id="ArizonaCoyotes">Arizona Coyotes</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=30">Arizona Coyotes Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#ArizonaCoyotes">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#ArizonaCoyotes">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#ArizonaCoyotes">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#ArizonaCoyotes">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#ArizonaCoyotes">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#ArizonaCoyotes">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#ArizonaCoyotes">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#ArizonaCoyotes">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#ArizonaCoyotes">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#ArizonaCoyotes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ArizonaCoyotes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ArizonaCoyotes" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>7</td><td><a href="ASHL10-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-7.php">Game Direct Link</a></td></tr>
<tr><td>5</td><td>26</td><td><a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-26.php">Game Direct Link</a></td></tr>
<tr><td>7</td><td>43</td><td><a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>3</td><td>W</td><td></td><td>*</td><td></td><td><a href="ASHL10-43.php">Game Direct Link</a></td></tr>
<tr><td>12</td><td>74</td><td><a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-74.php">Game Direct Link</a></td></tr>
<tr><td>14</td><td>91</td><td><a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-91.php">Game Direct Link</a></td></tr>
<tr><td>18</td><td>118</td><td><a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-118.php">Game Direct Link</a></td></tr>
<tr><td>20</td><td>130</td><td><a href="ASHL10-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>5</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL10-130.php">Game Direct Link</a></td></tr>
<tr><td>25</td><td>152</td><td><a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>7</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-152.php">Game Direct Link</a></td></tr>
<tr><td>27</td><td>173</td><td><a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>7</td><td><a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-173.php">Game Direct Link</a></td></tr>
<tr><td>30</td><td>192</td><td><a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-192.php">Game Direct Link</a></td></tr>
<tr><td>32</td><td>206</td><td><a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-206.php">Game Direct Link</a></td></tr>
<tr><td>35</td><td>217</td><td><a href="ASHL10-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-217.php">Game Direct Link</a></td></tr>
<tr><td>37</td><td>235</td><td><a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>4</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL10-235.php">Game Direct Link</a></td></tr>
<tr><td>40</td><td>248</td><td><a href="ASHL10-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-248.php">Game Direct Link</a></td></tr>
<tr><td>42</td><td>274</td><td><a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-274.php">Game Direct Link</a></td></tr>
<tr><td>44</td><td>291</td><td><a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-291.php">Game Direct Link</a></td></tr>
<tr><td>48</td><td>307</td><td><a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-307.php">Game Direct Link</a></td></tr>
<tr><td>51</td><td>339</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>4</td><td>L</td><td></td><td>*</td><td></td><td><a href="ASHL10-339.php">Game Direct Link</a></td></tr>
<tr><td>55</td><td>360</td><td><a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>6</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>7</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-360.php">Game Direct Link</a></td></tr>
<tr><td>59</td><td>391</td><td><a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-391.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_BOS"><a id="BostonBruins">Boston Bruins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">Boston Bruins Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#BostonBruins">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#BostonBruins">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#BostonBruins">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#BostonBruins">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#BostonBruins">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#BostonBruins">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#BostonBruins">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#BostonBruins">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#BostonBruins">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#BostonBruins">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#BostonBruins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BostonBruins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BostonBruins" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>8</td><td><a href="ASHL10-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-8.php">Game Direct Link</a></td></tr>
<tr><td>5</td><td>23</td><td><a href="ASHL10-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-23.php">Game Direct Link</a></td></tr>
<tr><td>11</td><td>67</td><td><a href="ASHL10-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-67.php">Game Direct Link</a></td></tr>
<tr><td>15</td><td>93</td><td><a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-93.php">Game Direct Link</a></td></tr>
<tr><td>17</td><td>112</td><td><a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-112.php">Game Direct Link</a></td></tr>
<tr><td>19</td><td>121</td><td><a href="ASHL10-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>4</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL10-121.php">Game Direct Link</a></td></tr>
<tr><td>21</td><td>139</td><td><a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-139.php">Game Direct Link</a></td></tr>
<tr><td>27</td><td>170</td><td><a href="ASHL10-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-170.php">Game Direct Link</a></td></tr>
<tr><td>32</td><td>200</td><td><a href="ASHL10-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-200.php">Game Direct Link</a></td></tr>
<tr><td>34</td><td>214</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>4</td><td>W</td><td></td><td>*</td><td></td><td><a href="ASHL10-214.php">Game Direct Link</a></td></tr>
<tr><td>37</td><td>234</td><td><a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>4</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL10-234.php">Game Direct Link</a></td></tr>
<tr><td>39</td><td>247</td><td><a href="ASHL10-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-247.php">Game Direct Link</a></td></tr>
<tr><td>41</td><td>261</td><td><a href="ASHL10-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-261.php">Game Direct Link</a></td></tr>
<tr><td>42</td><td>277</td><td><a href="ASHL10-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>3</td><td>W</td><td></td><td>*</td><td></td><td><a href="ASHL10-277.php">Game Direct Link</a></td></tr>
<tr><td>44</td><td>293</td><td><a href="ASHL10-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-293.php">Game Direct Link</a></td></tr>
<tr><td>47</td><td>305</td><td><a href="ASHL10-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>4</td><td>L</td><td></td><td>*</td><td></td><td><a href="ASHL10-305.php">Game Direct Link</a></td></tr>
<tr><td>51</td><td>341</td><td><a href="ASHL10-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-341.php">Game Direct Link</a></td></tr>
<tr><td>54</td><td>353</td><td><a href="ASHL10-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-353.php">Game Direct Link</a></td></tr>
<tr><td>56</td><td>368</td><td><a href="ASHL10-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-368.php">Game Direct Link</a></td></tr>
<tr><td>58</td><td>383</td><td><a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-383.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_BUF"><a id="BuffaloSabres">Buffalo Sabres</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">Buffalo Sabres Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#BuffaloSabres">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#BuffaloSabres">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#BuffaloSabres">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#BuffaloSabres">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#BuffaloSabres">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#BuffaloSabres">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#BuffaloSabres">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#BuffaloSabres">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#BuffaloSabres">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#BuffaloSabres">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BuffaloSabres');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BuffaloSabres" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-2.php">Game Direct Link</a></td></tr>
<tr><td>3</td><td>11</td><td><a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-11.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>47</td><td><a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-47.php">Game Direct Link</a></td></tr>
<tr><td>11</td><td>70</td><td><a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-70.php">Game Direct Link</a></td></tr>
<tr><td>13</td><td>84</td><td><a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-84.php">Game Direct Link</a></td></tr>
<tr><td>15</td><td>99</td><td><a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-99.php">Game Direct Link</a></td></tr>
<tr><td>17</td><td>106</td><td><a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>3</td><td>L</td><td></td><td>*</td><td></td><td><a href="ASHL10-106.php">Game Direct Link</a></td></tr>
<tr><td>23</td><td>147</td><td><a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-147.php">Game Direct Link</a></td></tr>
<tr><td>26</td><td>161</td><td><a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-161.php">Game Direct Link</a></td></tr>
<tr><td>29</td><td>189</td><td><a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-189.php">Game Direct Link</a></td></tr>
<tr><td>32</td><td>205</td><td><a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-205.php">Game Direct Link</a></td></tr>
<tr><td>35</td><td>219</td><td><a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-219.php">Game Direct Link</a></td></tr>
<tr><td>36</td><td>229</td><td><a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>7</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-229.php">Game Direct Link</a></td></tr>
<tr><td>41</td><td>262</td><td><a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>4</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL10-262.php">Game Direct Link</a></td></tr>
<tr><td>43</td><td>286</td><td><a href="ASHL10-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>4</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL10-286.php">Game Direct Link</a></td></tr>
<tr><td>47</td><td>304</td><td><a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-304.php">Game Direct Link</a></td></tr>
<tr><td>49</td><td>318</td><td><a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-318.php">Game Direct Link</a></td></tr>
<tr><td>55</td><td>356</td><td><a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-356.php">Game Direct Link</a></td></tr>
<tr><td>58</td><td>383</td><td><a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-383.php">Game Direct Link</a></td></tr>
<tr><td>59</td><td>391</td><td><a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-391.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_CGY"><a id="CalgaryFlames">Calgary Flames</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=21">Calgary Flames Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#CalgaryFlames">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#CalgaryFlames">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#CalgaryFlames">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#CalgaryFlames">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#CalgaryFlames">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#CalgaryFlames">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#CalgaryFlames">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#CalgaryFlames">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#CalgaryFlames">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#CalgaryFlames">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CalgaryFlames');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CalgaryFlames" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>3</td><td>18</td><td><a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-18.php">Game Direct Link</a></td></tr>
<tr><td>7</td><td>37</td><td><a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-37.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>50</td><td><a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-50.php">Game Direct Link</a></td></tr>
<tr><td>12</td><td>74</td><td><a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-74.php">Game Direct Link</a></td></tr>
<tr><td>15</td><td>96</td><td><a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>3</td><td>L</td><td></td><td>*</td><td></td><td><a href="ASHL10-96.php">Game Direct Link</a></td></tr>
<tr><td>17</td><td>112</td><td><a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-112.php">Game Direct Link</a></td></tr>
<tr><td>19</td><td>121</td><td><a href="ASHL10-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>4</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL10-121.php">Game Direct Link</a></td></tr>
<tr><td>21</td><td>141</td><td><a href="ASHL10-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-141.php">Game Direct Link</a></td></tr>
<tr><td>26</td><td>160</td><td><a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-160.php">Game Direct Link</a></td></tr>
<tr><td>30</td><td>191</td><td><a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-191.php">Game Direct Link</a></td></tr>
<tr><td>32</td><td>209</td><td><a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>4</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL10-209.php">Game Direct Link</a></td></tr>
<tr><td>34</td><td>216</td><td><a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>0</td><td>L</td><td></td><td></td><td>R3<td><a href="ASHL10-216.php">Game Direct Link</a></td></tr>
<tr><td>40</td><td>249</td><td><a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-249.php">Game Direct Link</a></td></tr>
<tr><td>42</td><td>275</td><td><a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-275.php">Game Direct Link</a></td></tr>
<tr><td>44</td><td>290</td><td><a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>7</td><td><a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-290.php">Game Direct Link</a></td></tr>
<tr><td>48</td><td>309</td><td><a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-309.php">Game Direct Link</a></td></tr>
<tr><td>50</td><td>322</td><td><a href="ASHL10-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-322.php">Game Direct Link</a></td></tr>
<tr><td>55</td><td>357</td><td><a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-357.php">Game Direct Link</a></td></tr>
<tr><td>57</td><td>374</td><td><a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-374.php">Game Direct Link</a></td></tr>
<tr><td>59</td><td>390</td><td><a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-390.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_CAR"><a id="CarolinaHurricanes">Carolina Hurricanes</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">Carolina Hurricanes Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#CarolinaHurricanes">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#CarolinaHurricanes">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#CarolinaHurricanes">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#CarolinaHurricanes">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#CarolinaHurricanes">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#CarolinaHurricanes">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#CarolinaHurricanes">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#CarolinaHurricanes">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#CarolinaHurricanes">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#CarolinaHurricanes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_CarolinaHurricanes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_CarolinaHurricanes" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>6</td><td><a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-6.php">Game Direct Link</a></td></tr>
<tr><td>6</td><td>34</td><td><a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-34.php">Game Direct Link</a></td></tr>
<tr><td>11</td><td>68</td><td><a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-68.php">Game Direct Link</a></td></tr>
<tr><td>13</td><td>81</td><td><a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>4</td><td>L</td><td></td><td>*</td><td></td><td><a href="ASHL10-81.php">Game Direct Link</a></td></tr>
<tr><td>15</td><td>100</td><td><a href="ASHL10-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-100.php">Game Direct Link</a></td></tr>
<tr><td>17</td><td>115</td><td><a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>2</td><td>W</td><td></td><td>*</td><td></td><td><a href="ASHL10-115.php">Game Direct Link</a></td></tr>
<tr><td>20</td><td>135</td><td><a href="ASHL10-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-135.php">Game Direct Link</a></td></tr>
<tr><td>25</td><td>153</td><td><a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-153.php">Game Direct Link</a></td></tr>
<tr><td>27</td><td>167</td><td><a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-167.php">Game Direct Link</a></td></tr>
<tr><td>32</td><td>205</td><td><a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-205.php">Game Direct Link</a></td></tr>
<tr><td>35</td><td>222</td><td><a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-222.php">Game Direct Link</a></td></tr>
<tr><td>39</td><td>247</td><td><a href="ASHL10-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-247.php">Game Direct Link</a></td></tr>
<tr><td>42</td><td>271</td><td><a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>3</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL10-271.php">Game Direct Link</a></td></tr>
<tr><td>43</td><td>284</td><td><a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-284.php">Game Direct Link</a></td></tr>
<tr><td>46</td><td>302</td><td><a href="ASHL10-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-302.php">Game Direct Link</a></td></tr>
<tr><td>49</td><td>313</td><td><a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>2</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL10-313.php">Game Direct Link</a></td></tr>
<tr><td>50</td><td>332</td><td><a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-332.php">Game Direct Link</a></td></tr>
<tr><td>53</td><td>347</td><td><a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-347.php">Game Direct Link</a></td></tr>
<tr><td>56</td><td>369</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>6</td><td><a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-369.php">Game Direct Link</a></td></tr>
<tr><td>59</td><td>396</td><td><a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>5</td><td>L</td><td></td><td>*</td><td></td><td><a href="ASHL10-396.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_CHI"><a id="ChicagoBlackhawks">Chicago Blackhawks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=16">Chicago Blackhawks Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#ChicagoBlackhawks">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#ChicagoBlackhawks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#ChicagoBlackhawks">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#ChicagoBlackhawks">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#ChicagoBlackhawks">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#ChicagoBlackhawks">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#ChicagoBlackhawks">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#ChicagoBlackhawks">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#ChicagoBlackhawks">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#ChicagoBlackhawks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ChicagoBlackhawks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ChicagoBlackhawks" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-1.php">Game Direct Link</a></td></tr>
<tr><td>5</td><td>22</td><td><a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>2</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL10-22.php">Game Direct Link</a></td></tr>
<tr><td>9</td><td>59</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-59.php">Game Direct Link</a></td></tr>
<tr><td>12</td><td>78</td><td><a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-78.php">Game Direct Link</a></td></tr>
<tr><td>14</td><td>88</td><td><a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>4</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL10-88.php">Game Direct Link</a></td></tr>
<tr><td>16</td><td>105</td><td><a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-105.php">Game Direct Link</a></td></tr>
<tr><td>18</td><td>119</td><td><a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>1</td><td>L</td><td></td><td></td><td>R1<td><a href="ASHL10-119.php">Game Direct Link</a></td></tr>
<tr><td>20</td><td>136</td><td><a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>4</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL10-136.php">Game Direct Link</a></td></tr>
<tr><td>25</td><td>155</td><td><a href="ASHL10-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-155.php">Game Direct Link</a></td></tr>
<tr><td>27</td><td>164</td><td><a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-164.php">Game Direct Link</a></td></tr>
<tr><td>31</td><td>194</td><td><a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-194.php">Game Direct Link</a></td></tr>
<tr><td>34</td><td>215</td><td><a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>6</td><td><a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-215.php">Game Direct Link</a></td></tr>
<tr><td>38</td><td>244</td><td><a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-244.php">Game Direct Link</a></td></tr>
<tr><td>41</td><td>260</td><td><a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-260.php">Game Direct Link</a></td></tr>
<tr><td>45</td><td>297</td><td><a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-297.php">Game Direct Link</a></td></tr>
<tr><td>48</td><td>306</td><td><a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-306.php">Game Direct Link</a></td></tr>
<tr><td>51</td><td>341</td><td><a href="ASHL10-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-341.php">Game Direct Link</a></td></tr>
<tr><td>56</td><td>364</td><td><a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-364.php">Game Direct Link</a></td></tr>
<tr><td>58</td><td>379</td><td><a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>3</td><td>W</td><td></td><td></td><td>R1<td><a href="ASHL10-379.php">Game Direct Link</a></td></tr>
<tr><td>60</td><td>400</td><td><a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-400.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_COL"><a id="ColoradoAvalanche">Colorado Avalanche</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=22">Colorado Avalanche Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#ColoradoAvalanche">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#ColoradoAvalanche">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#ColoradoAvalanche">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#ColoradoAvalanche">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#ColoradoAvalanche">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#ColoradoAvalanche">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#ColoradoAvalanche">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#ColoradoAvalanche">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#ColoradoAvalanche">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#ColoradoAvalanche">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ColoradoAvalanche');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ColoradoAvalanche" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>6</td><td><a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-6.php">Game Direct Link</a></td></tr>
<tr><td>3</td><td>18</td><td><a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-18.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>53</td><td><a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-53.php">Game Direct Link</a></td></tr>
<tr><td>11</td><td>68</td><td><a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-68.php">Game Direct Link</a></td></tr>
<tr><td>15</td><td>98</td><td><a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-98.php">Game Direct Link</a></td></tr>
<tr><td>18</td><td>119</td><td><a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>1</td><td>W</td><td></td><td></td><td>R1<td><a href="ASHL10-119.php">Game Direct Link</a></td></tr>
<tr><td>20</td><td>127</td><td><a href="ASHL10-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-127.php">Game Direct Link</a></td></tr>
<tr><td>22</td><td>145</td><td><a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>6</td><td><a href="ASHL10-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-145.php">Game Direct Link</a></td></tr>
<tr><td>27</td><td>165</td><td><a href="ASHL10-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-165.php">Game Direct Link</a></td></tr>
<tr><td>29</td><td>185</td><td><a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-185.php">Game Direct Link</a></td></tr>
<tr><td>31</td><td>197</td><td><a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>4</td><td>L</td><td></td><td>*</td><td></td><td><a href="ASHL10-197.php">Game Direct Link</a></td></tr>
<tr><td>33</td><td>212</td><td><a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-212.php">Game Direct Link</a></td></tr>
<tr><td>35</td><td>218</td><td><a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>5</td><td>L</td><td></td><td></td><td>R1<td><a href="ASHL10-218.php">Game Direct Link</a></td></tr>
<tr><td>37</td><td>231</td><td><a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>3</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL10-231.php">Game Direct Link</a></td></tr>
<tr><td>40</td><td>257</td><td><a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-257.php">Game Direct Link</a></td></tr>
<tr><td>42</td><td>272</td><td><a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>6</td><td><a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-272.php">Game Direct Link</a></td></tr>
<tr><td>44</td><td>290</td><td><a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>7</td><td><a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-290.php">Game Direct Link</a></td></tr>
<tr><td>49</td><td>314</td><td><a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-314.php">Game Direct Link</a></td></tr>
<tr><td>55</td><td>355</td><td><a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-355.php">Game Direct Link</a></td></tr>
<tr><td>59</td><td>390</td><td><a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-390.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_CLB"><a id="ColumbusBlueJackets">Columbus Blue Jackets</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=20">Columbus Blue Jackets Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#ColumbusBlueJackets">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#ColumbusBlueJackets">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#ColumbusBlueJackets">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#ColumbusBlueJackets">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#ColumbusBlueJackets">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#ColumbusBlueJackets">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#ColumbusBlueJackets">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#ColumbusBlueJackets">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#ColumbusBlueJackets">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#ColumbusBlueJackets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_ColumbusBlueJackets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_ColumbusBlueJackets" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>5</td><td>22</td><td><a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>2</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL10-22.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>51</td><td><a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-51.php">Game Direct Link</a></td></tr>
<tr><td>11</td><td>64</td><td><a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-64.php">Game Direct Link</a></td></tr>
<tr><td>13</td><td>82</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-82.php">Game Direct Link</a></td></tr>
<tr><td>15</td><td>102</td><td><a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-102.php">Game Direct Link</a></td></tr>
<tr><td>17</td><td>110</td><td><a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-110.php">Game Direct Link</a></td></tr>
<tr><td>19</td><td>125</td><td><a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-125.php">Game Direct Link</a></td></tr>
<tr><td>21</td><td>138</td><td><a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-138.php">Game Direct Link</a></td></tr>
<tr><td>26</td><td>160</td><td><a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-160.php">Game Direct Link</a></td></tr>
<tr><td>28</td><td>178</td><td><a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-178.php">Game Direct Link</a></td></tr>
<tr><td>30</td><td>190</td><td><a href="ASHL10-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-190.php">Game Direct Link</a></td></tr>
<tr><td>32</td><td>199</td><td><a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>7</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-199.php">Game Direct Link</a></td></tr>
<tr><td>35</td><td>223</td><td><a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-223.php">Game Direct Link</a></td></tr>
<tr><td>38</td><td>244</td><td><a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-244.php">Game Direct Link</a></td></tr>
<tr><td>40</td><td>254</td><td><a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-254.php">Game Direct Link</a></td></tr>
<tr><td>43</td><td>287</td><td><a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-287.php">Game Direct Link</a></td></tr>
<tr><td>49</td><td>316</td><td><a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-316.php">Game Direct Link</a></td></tr>
<tr><td>52</td><td>346</td><td><a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-346.php">Game Direct Link</a></td></tr>
<tr><td>55</td><td>359</td><td><a href="ASHL10-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>3</td><td>W</td><td></td><td>*</td><td></td><td><a href="ASHL10-359.php">Game Direct Link</a></td></tr>
<tr><td>58</td><td>382</td><td><a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-382.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_DAL"><a id="DallasStars">Dallas Stars</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=29">Dallas Stars Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#DallasStars">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#DallasStars">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#DallasStars">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#DallasStars">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#DallasStars">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#DallasStars">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#DallasStars">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#DallasStars">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#DallasStars">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#DallasStars">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#DallasStars">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_DallasStars');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_DallasStars" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>3</td><td>16</td><td><a href="ASHL10-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>2</td><td>W</td><td></td><td>*</td><td></td><td><a href="ASHL10-16.php">Game Direct Link</a></td></tr>
<tr><td>4</td><td>21</td><td><a href="ASHL10-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-21.php">Game Direct Link</a></td></tr>
<tr><td>11</td><td>66</td><td><a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>4</td><td>L</td><td></td><td>*</td><td></td><td><a href="ASHL10-66.php">Game Direct Link</a></td></tr>
<tr><td>15</td><td>95</td><td><a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-95.php">Game Direct Link</a></td></tr>
<tr><td>17</td><td>111</td><td><a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-111.php">Game Direct Link</a></td></tr>
<tr><td>20</td><td>127</td><td><a href="ASHL10-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-127.php">Game Direct Link</a></td></tr>
<tr><td>22</td><td>146</td><td><a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-146.php">Game Direct Link</a></td></tr>
<tr><td>25</td><td>155</td><td><a href="ASHL10-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-155.php">Game Direct Link</a></td></tr>
<tr><td>28</td><td>175</td><td><a href="ASHL10-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>5</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL10-175.php">Game Direct Link</a></td></tr>
<tr><td>30</td><td>190</td><td><a href="ASHL10-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-190.php">Game Direct Link</a></td></tr>
<tr><td>32</td><td>202</td><td><a href="ASHL10-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>3</td><td>L</td><td></td><td>*</td><td></td><td><a href="ASHL10-202.php">Game Direct Link</a></td></tr>
<tr><td>35</td><td>222</td><td><a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-222.php">Game Direct Link</a></td></tr>
<tr><td>38</td><td>243</td><td><a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>4</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL10-243.php">Game Direct Link</a></td></tr>
<tr><td>41</td><td>264</td><td><a href="ASHL10-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-264.php">Game Direct Link</a></td></tr>
<tr><td>43</td><td>279</td><td><a href="ASHL10-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-279.php">Game Direct Link</a></td></tr>
<tr><td>45</td><td>295</td><td><a href="ASHL10-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-295.php">Game Direct Link</a></td></tr>
<tr><td>48</td><td>308</td><td><a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-308.php">Game Direct Link</a></td></tr>
<tr><td>51</td><td>343</td><td><a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>3</td><td>L</td><td></td><td>*</td><td></td><td><a href="ASHL10-343.php">Game Direct Link</a></td></tr>
<tr><td>56</td><td>368</td><td><a href="ASHL10-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-368.php">Game Direct Link</a></td></tr>
<tr><td>59</td><td>392</td><td><a href="ASHL10-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>4</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL10-392.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_DET"><a id="DetroitRedWings">Detroit Red Wings</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=17">Detroit Red Wings Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#DetroitRedWings">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#DetroitRedWings">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#DetroitRedWings">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#DetroitRedWings">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#DetroitRedWings">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#DetroitRedWings">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#DetroitRedWings">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#DetroitRedWings">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#DetroitRedWings">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#DetroitRedWings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_DetroitRedWings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_DetroitRedWings" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>3</td><td>14</td><td><a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-14.php">Game Direct Link</a></td></tr>
<tr><td>5</td><td>25</td><td><a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-25.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>55</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-55.php">Game Direct Link</a></td></tr>
<tr><td>11</td><td>66</td><td><a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>4</td><td>W</td><td></td><td>*</td><td></td><td><a href="ASHL10-66.php">Game Direct Link</a></td></tr>
<tr><td>14</td><td>92</td><td><a href="ASHL10-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-92.php">Game Direct Link</a></td></tr>
<tr><td>17</td><td>114</td><td><a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-114.php">Game Direct Link</a></td></tr>
<tr><td>19</td><td>123</td><td><a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-123.php">Game Direct Link</a></td></tr>
<tr><td>21</td><td>140</td><td><a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-140.php">Game Direct Link</a></td></tr>
<tr><td>23</td><td>148</td><td><a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-148.php">Game Direct Link</a></td></tr>
<tr><td>27</td><td>169</td><td><a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-169.php">Game Direct Link</a></td></tr>
<tr><td>29</td><td>184</td><td><a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>3</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL10-184.php">Game Direct Link</a></td></tr>
<tr><td>32</td><td>208</td><td><a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-208.php">Game Direct Link</a></td></tr>
<tr><td>35</td><td>218</td><td><a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>5</td><td>W</td><td></td><td></td><td>R1<td><a href="ASHL10-218.php">Game Direct Link</a></td></tr>
<tr><td>38</td><td>245</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>2</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL10-245.php">Game Direct Link</a></td></tr>
<tr><td>44</td><td>292</td><td><a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-292.php">Game Direct Link</a></td></tr>
<tr><td>48</td><td>311</td><td><a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-311.php">Game Direct Link</a></td></tr>
<tr><td>50</td><td>324</td><td><a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>7</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-324.php">Game Direct Link</a></td></tr>
<tr><td>56</td><td>370</td><td><a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-370.php">Game Direct Link</a></td></tr>
<tr><td>58</td><td>379</td><td><a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>3</td><td>L</td><td></td><td></td><td>R1<td><a href="ASHL10-379.php">Game Direct Link</a></td></tr>
<tr><td>59</td><td>395</td><td><a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>7</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-395.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_EDM"><a id="EdmontonOilers">Edmonton Oilers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=23">Edmonton Oilers Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#EdmontonOilers">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#EdmontonOilers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#EdmontonOilers">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#EdmontonOilers">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#EdmontonOilers">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#EdmontonOilers">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#EdmontonOilers">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#EdmontonOilers">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#EdmontonOilers">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#EdmontonOilers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_EdmontonOilers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_EdmontonOilers" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-5.php">Game Direct Link</a></td></tr>
<tr><td>5</td><td>23</td><td><a href="ASHL10-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-23.php">Game Direct Link</a></td></tr>
<tr><td>6</td><td>34</td><td><a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-34.php">Game Direct Link</a></td></tr>
<tr><td>10</td><td>61</td><td><a href="ASHL10-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>4</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL10-61.php">Game Direct Link</a></td></tr>
<tr><td>12</td><td>77</td><td><a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-77.php">Game Direct Link</a></td></tr>
<tr><td>14</td><td>88</td><td><a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>4</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL10-88.php">Game Direct Link</a></td></tr>
<tr><td>17</td><td>109</td><td><a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-109.php">Game Direct Link</a></td></tr>
<tr><td>20</td><td>128</td><td><a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-128.php">Game Direct Link</a></td></tr>
<tr><td>25</td><td>158</td><td><a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-158.php">Game Direct Link</a></td></tr>
<tr><td>27</td><td>173</td><td><a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>7</td><td><a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-173.php">Game Direct Link</a></td></tr>
<tr><td>31</td><td>195</td><td><a href="ASHL10-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-195.php">Game Direct Link</a></td></tr>
<tr><td>34</td><td>216</td><td><a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>0</td><td>W</td><td></td><td></td><td>R3<td><a href="ASHL10-216.php">Game Direct Link</a></td></tr>
<tr><td>35</td><td>226</td><td><a href="ASHL10-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>3</td><td>L</td><td></td><td>*</td><td></td><td><a href="ASHL10-226.php">Game Direct Link</a></td></tr>
<tr><td>38</td><td>243</td><td><a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>4</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL10-243.php">Game Direct Link</a></td></tr>
<tr><td>41</td><td>261</td><td><a href="ASHL10-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-261.php">Game Direct Link</a></td></tr>
<tr><td>44</td><td>289</td><td><a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-289.php">Game Direct Link</a></td></tr>
<tr><td>49</td><td>321</td><td><a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-321.php">Game Direct Link</a></td></tr>
<tr><td>51</td><td>340</td><td><a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-340.php">Game Direct Link</a></td></tr>
<tr><td>55</td><td>355</td><td><a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-355.php">Game Direct Link</a></td></tr>
<tr><td>57</td><td>376</td><td><a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-376.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_FLA"><a id="FloridaPanthers">Florida Panthers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">Florida Panthers Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#FloridaPanthers">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#FloridaPanthers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#FloridaPanthers">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#FloridaPanthers">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#FloridaPanthers">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#FloridaPanthers">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#FloridaPanthers">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#FloridaPanthers">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#FloridaPanthers">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#FloridaPanthers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_FloridaPanthers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_FloridaPanthers" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-5.php">Game Direct Link</a></td></tr>
<tr><td>3</td><td>12</td><td><a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>3</td><td>L</td><td></td><td>*</td><td></td><td><a href="ASHL10-12.php">Game Direct Link</a></td></tr>
<tr><td>5</td><td>27</td><td><a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>4</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL10-27.php">Game Direct Link</a></td></tr>
<tr><td>7</td><td>43</td><td><a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>3</td><td>L</td><td></td><td>*</td><td></td><td><a href="ASHL10-43.php">Game Direct Link</a></td></tr>
<tr><td>12</td><td>79</td><td><a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-79.php">Game Direct Link</a></td></tr>
<tr><td>15</td><td>97</td><td><a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-97.php">Game Direct Link</a></td></tr>
<tr><td>17</td><td>114</td><td><a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-114.php">Game Direct Link</a></td></tr>
<tr><td>19</td><td>126</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-126.php">Game Direct Link</a></td></tr>
<tr><td>21</td><td>139</td><td><a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-139.php">Game Direct Link</a></td></tr>
<tr><td>24</td><td>149</td><td><a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>6</td><td>L</td><td></td><td></td><td>R1<td><a href="ASHL10-149.php">Game Direct Link</a></td></tr>
<tr><td>27</td><td>164</td><td><a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-164.php">Game Direct Link</a></td></tr>
<tr><td>29</td><td>187</td><td><a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-187.php">Game Direct Link</a></td></tr>
<tr><td>33</td><td>211</td><td><a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-211.php">Game Direct Link</a></td></tr>
<tr><td>35</td><td>227</td><td><a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-227.php">Game Direct Link</a></td></tr>
<tr><td>41</td><td>264</td><td><a href="ASHL10-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-264.php">Game Direct Link</a></td></tr>
<tr><td>43</td><td>283</td><td><a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>5</td><td>L</td><td></td><td>*</td><td></td><td><a href="ASHL10-283.php">Game Direct Link</a></td></tr>
<tr><td>46</td><td>300</td><td><a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-300.php">Game Direct Link</a></td></tr>
<tr><td>48</td><td>308</td><td><a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-308.php">Game Direct Link</a></td></tr>
<tr><td>55</td><td>356</td><td><a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-356.php">Game Direct Link</a></td></tr>
<tr><td>56</td><td>363</td><td><a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>1</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL10-363.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_LOS"><a id="LosAngelesKings">Los Angeles Kings</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=27">Los Angeles Kings Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#LosAngelesKings">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#LosAngelesKings">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#LosAngelesKings">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#LosAngelesKings">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#LosAngelesKings">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#LosAngelesKings">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#LosAngelesKings">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#LosAngelesKings">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#LosAngelesKings">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#LosAngelesKings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_LosAngelesKings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_LosAngelesKings" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-2.php">Game Direct Link</a></td></tr>
<tr><td>5</td><td>26</td><td><a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-26.php">Game Direct Link</a></td></tr>
<tr><td>7</td><td>45</td><td><a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-45.php">Game Direct Link</a></td></tr>
<tr><td>9</td><td>57</td><td><a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-57.php">Game Direct Link</a></td></tr>
<tr><td>11</td><td>65</td><td><a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>5</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL10-65.php">Game Direct Link</a></td></tr>
<tr><td>15</td><td>96</td><td><a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>3</td><td>W</td><td></td><td>*</td><td></td><td><a href="ASHL10-96.php">Game Direct Link</a></td></tr>
<tr><td>18</td><td>118</td><td><a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-118.php">Game Direct Link</a></td></tr>
<tr><td>20</td><td>134</td><td><a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-134.php">Game Direct Link</a></td></tr>
<tr><td>27</td><td>167</td><td><a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-167.php">Game Direct Link</a></td></tr>
<tr><td>29</td><td>189</td><td><a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-189.php">Game Direct Link</a></td></tr>
<tr><td>32</td><td>200</td><td><a href="ASHL10-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-200.php">Game Direct Link</a></td></tr>
<tr><td>37</td><td>231</td><td><a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>3</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL10-231.php">Game Direct Link</a></td></tr>
<tr><td>41</td><td>259</td><td><a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-259.php">Game Direct Link</a></td></tr>
<tr><td>42</td><td>269</td><td><a href="ASHL10-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-269.php">Game Direct Link</a></td></tr>
<tr><td>44</td><td>292</td><td><a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-292.php">Game Direct Link</a></td></tr>
<tr><td>48</td><td>306</td><td><a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-306.php">Game Direct Link</a></td></tr>
<tr><td>50</td><td>330</td><td><a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>4</td><td>W</td><td></td><td>*</td><td></td><td><a href="ASHL10-330.php">Game Direct Link</a></td></tr>
<tr><td>51</td><td>335</td><td><a href="ASHL10-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-335.php">Game Direct Link</a></td></tr>
<tr><td>56</td><td>365</td><td><a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-365.php">Game Direct Link</a></td></tr>
<tr><td>58</td><td>381</td><td><a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>2</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL10-381.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_MIN"><a id="MinnesotaWild">Minnesota Wild</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=24">Minnesota Wild Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#MinnesotaWild">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#MinnesotaWild">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#MinnesotaWild">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#MinnesotaWild">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#MinnesotaWild">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#MinnesotaWild">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#MinnesotaWild">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#MinnesotaWild">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#MinnesotaWild">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#MinnesotaWild">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MinnesotaWild');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MinnesotaWild" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>8</td><td><a href="ASHL10-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-8.php">Game Direct Link</a></td></tr>
<tr><td>4</td><td>20</td><td><a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-20.php">Game Direct Link</a></td></tr>
<tr><td>12</td><td>76</td><td><a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-76.php">Game Direct Link</a></td></tr>
<tr><td>15</td><td>94</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-94.php">Game Direct Link</a></td></tr>
<tr><td>17</td><td>116</td><td><a href="ASHL10-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-116.php">Game Direct Link</a></td></tr>
<tr><td>20</td><td>132</td><td><a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-132.php">Game Direct Link</a></td></tr>
<tr><td>23</td><td>148</td><td><a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-148.php">Game Direct Link</a></td></tr>
<tr><td>26</td><td>161</td><td><a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-161.php">Game Direct Link</a></td></tr>
<tr><td>29</td><td>188</td><td><a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>3</td><td>L</td><td></td><td>*</td><td></td><td><a href="ASHL10-188.php">Game Direct Link</a></td></tr>
<tr><td>32</td><td>209</td><td><a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>4</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL10-209.php">Game Direct Link</a></td></tr>
<tr><td>35</td><td>220</td><td><a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-220.php">Game Direct Link</a></td></tr>
<tr><td>38</td><td>237</td><td><a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-237.php">Game Direct Link</a></td></tr>
<tr><td>41</td><td>267</td><td><a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-267.php">Game Direct Link</a></td></tr>
<tr><td>43</td><td>282</td><td><a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-282.php">Game Direct Link</a></td></tr>
<tr><td>45</td><td>295</td><td><a href="ASHL10-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-295.php">Game Direct Link</a></td></tr>
<tr><td>49</td><td>316</td><td><a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-316.php">Game Direct Link</a></td></tr>
<tr><td>51</td><td>338</td><td><a href="ASHL10-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-338.php">Game Direct Link</a></td></tr>
<tr><td>53</td><td>350</td><td><a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-350.php">Game Direct Link</a></td></tr>
<tr><td>58</td><td>386</td><td><a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-386.php">Game Direct Link</a></td></tr>
<tr><td>60</td><td>404</td><td><a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-404.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_MTL"><a id="MontrealCanadiens">Montreal Canadiens</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">Montreal Canadiens Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#MontrealCanadiens">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#MontrealCanadiens">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#MontrealCanadiens">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#MontrealCanadiens">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#MontrealCanadiens">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#MontrealCanadiens">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#MontrealCanadiens">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#MontrealCanadiens">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#MontrealCanadiens">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#MontrealCanadiens">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MontrealCanadiens');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MontrealCanadiens" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>3</td><td>19</td><td><a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>3</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL10-19.php">Game Direct Link</a></td></tr>
<tr><td>7</td><td>37</td><td><a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-37.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>50</td><td><a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-50.php">Game Direct Link</a></td></tr>
<tr><td>11</td><td>64</td><td><a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-64.php">Game Direct Link</a></td></tr>
<tr><td>15</td><td>99</td><td><a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-99.php">Game Direct Link</a></td></tr>
<tr><td>20</td><td>133</td><td><a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>7</td><td>W</td><td></td><td></td><td>R3<td><a href="ASHL10-133.php">Game Direct Link</a></td></tr>
<tr><td>27</td><td>166</td><td><a href="ASHL10-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-166.php">Game Direct Link</a></td></tr>
<tr><td>32</td><td>199</td><td><a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>7</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-199.php">Game Direct Link</a></td></tr>
<tr><td>36</td><td>229</td><td><a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>7</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-229.php">Game Direct Link</a></td></tr>
<tr><td>37</td><td>232</td><td><a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-232.php">Game Direct Link</a></td></tr>
<tr><td>41</td><td>258</td><td><a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-258.php">Game Direct Link</a></td></tr>
<tr><td>42</td><td>268</td><td><a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>6</td><td><a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-268.php">Game Direct Link</a></td></tr>
<tr><td>44</td><td>291</td><td><a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-291.php">Game Direct Link</a></td></tr>
<tr><td>49</td><td>319</td><td><a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-319.php">Game Direct Link</a></td></tr>
<tr><td>50</td><td>330</td><td><a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>4</td><td>L</td><td></td><td>*</td><td></td><td><a href="ASHL10-330.php">Game Direct Link</a></td></tr>
<tr><td>54</td><td>354</td><td><a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-354.php">Game Direct Link</a></td></tr>
<tr><td>56</td><td>364</td><td><a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-364.php">Game Direct Link</a></td></tr>
<tr><td>57</td><td>375</td><td><a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-375.php">Game Direct Link</a></td></tr>
<tr><td>59</td><td>393</td><td><a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-393.php">Game Direct Link</a></td></tr>
<tr><td>60</td><td>402</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>7</td><td><a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-402.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_NSH"><a id="NashvillePredators">Nashville Predators</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=18">Nashville Predators Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#NashvillePredators">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#NashvillePredators">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#NashvillePredators">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#NashvillePredators">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#NashvillePredators">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#NashvillePredators">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#NashvillePredators">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#NashvillePredators">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#NashvillePredators">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#NashvillePredators">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#NashvillePredators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NashvillePredators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NashvillePredators" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>3</td><td>11</td><td><a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-11.php">Game Direct Link</a></td></tr>
<tr><td>5</td><td>24</td><td><a href="ASHL10-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-24.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>47</td><td><a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-47.php">Game Direct Link</a></td></tr>
<tr><td>11</td><td>70</td><td><a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-70.php">Game Direct Link</a></td></tr>
<tr><td>13</td><td>85</td><td><a href="ASHL10-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>4</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL10-85.php">Game Direct Link</a></td></tr>
<tr><td>14</td><td>92</td><td><a href="ASHL10-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-92.php">Game Direct Link</a></td></tr>
<tr><td>17</td><td>115</td><td><a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>2</td><td>L</td><td></td><td>*</td><td></td><td><a href="ASHL10-115.php">Game Direct Link</a></td></tr>
<tr><td>20</td><td>129</td><td><a href="ASHL10-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-129.php">Game Direct Link</a></td></tr>
<tr><td>22</td><td>144</td><td><a href="ASHL10-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-144.php">Game Direct Link</a></td></tr>
<tr><td>27</td><td>171</td><td><a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-171.php">Game Direct Link</a></td></tr>
<tr><td>28</td><td>183</td><td><a href="ASHL10-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-183.php">Game Direct Link</a></td></tr>
<tr><td>32</td><td>206</td><td><a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-206.php">Game Direct Link</a></td></tr>
<tr><td>35</td><td>226</td><td><a href="ASHL10-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>3</td><td>W</td><td></td><td>*</td><td></td><td><a href="ASHL10-226.php">Game Direct Link</a></td></tr>
<tr><td>38</td><td>237</td><td><a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-237.php">Game Direct Link</a></td></tr>
<tr><td>41</td><td>265</td><td><a href="ASHL10-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-265.php">Game Direct Link</a></td></tr>
<tr><td>50</td><td>322</td><td><a href="ASHL10-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-322.php">Game Direct Link</a></td></tr>
<tr><td>54</td><td>353</td><td><a href="ASHL10-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-353.php">Game Direct Link</a></td></tr>
<tr><td>56</td><td>366</td><td><a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-366.php">Game Direct Link</a></td></tr>
<tr><td>57</td><td>375</td><td><a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-375.php">Game Direct Link</a></td></tr>
<tr><td>58</td><td>384</td><td><a href="ASHL10-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-384.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_NJD"><a id="NewJerseyDevils">New Jersey Devils</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">New Jersey Devils Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#NewJerseyDevils">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#NewJerseyDevils">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#NewJerseyDevils">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#NewJerseyDevils">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#NewJerseyDevils">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#NewJerseyDevils">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#NewJerseyDevils">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#NewJerseyDevils">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#NewJerseyDevils">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#NewJerseyDevils">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewJerseyDevils');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewJerseyDevils" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>9</td><td><a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>1</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL10-9.php">Game Direct Link</a></td></tr>
<tr><td>5</td><td>29</td><td><a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-29.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>49</td><td><a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>4</td><td>L</td><td></td><td>*</td><td></td><td><a href="ASHL10-49.php">Game Direct Link</a></td></tr>
<tr><td>11</td><td>63</td><td><a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-63.php">Game Direct Link</a></td></tr>
<tr><td>15</td><td>93</td><td><a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-93.php">Game Direct Link</a></td></tr>
<tr><td>17</td><td>111</td><td><a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-111.php">Game Direct Link</a></td></tr>
<tr><td>20</td><td>128</td><td><a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-128.php">Game Direct Link</a></td></tr>
<tr><td>25</td><td>156</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-156.php">Game Direct Link</a></td></tr>
<tr><td>27</td><td>171</td><td><a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-171.php">Game Direct Link</a></td></tr>
<tr><td>29</td><td>186</td><td><a href="ASHL10-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-186.php">Game Direct Link</a></td></tr>
<tr><td>31</td><td>194</td><td><a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-194.php">Game Direct Link</a></td></tr>
<tr><td>35</td><td>221</td><td><a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-221.php">Game Direct Link</a></td></tr>
<tr><td>38</td><td>241</td><td><a href="ASHL10-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>2</td><td>L</td><td></td><td>*</td><td></td><td><a href="ASHL10-241.php">Game Direct Link</a></td></tr>
<tr><td>40</td><td>257</td><td><a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-257.php">Game Direct Link</a></td></tr>
<tr><td>42</td><td>271</td><td><a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>3</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL10-271.php">Game Direct Link</a></td></tr>
<tr><td>43</td><td>280</td><td><a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-280.php">Game Direct Link</a></td></tr>
<tr><td>45</td><td>294</td><td><a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-294.php">Game Direct Link</a></td></tr>
<tr><td>48</td><td>307</td><td><a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-307.php">Game Direct Link</a></td></tr>
<tr><td>54</td><td>354</td><td><a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-354.php">Game Direct Link</a></td></tr>
<tr><td>59</td><td>399</td><td><a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-399.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_NYI"><a id="NewYorkIslanders">New York Islanders</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">New York Islanders Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#NewYorkIslanders">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#NewYorkIslanders">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#NewYorkIslanders">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#NewYorkIslanders">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#NewYorkIslanders">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#NewYorkIslanders">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#NewYorkIslanders">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#NewYorkIslanders">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#NewYorkIslanders">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#NewYorkIslanders">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewYorkIslanders');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewYorkIslanders" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>3</td><td>10</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-10.php">Game Direct Link</a></td></tr>
<tr><td>5</td><td>24</td><td><a href="ASHL10-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-24.php">Game Direct Link</a></td></tr>
<tr><td>9</td><td>58</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-58.php">Game Direct Link</a></td></tr>
<tr><td>11</td><td>73</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>4</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL10-73.php">Game Direct Link</a></td></tr>
<tr><td>13</td><td>82</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-82.php">Game Direct Link</a></td></tr>
<tr><td>15</td><td>94</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-94.php">Game Direct Link</a></td></tr>
<tr><td>19</td><td>126</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-126.php">Game Direct Link</a></td></tr>
<tr><td>20</td><td>132</td><td><a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-132.php">Game Direct Link</a></td></tr>
<tr><td>25</td><td>158</td><td><a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-158.php">Game Direct Link</a></td></tr>
<tr><td>28</td><td>174</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-174.php">Game Direct Link</a></td></tr>
<tr><td>30</td><td>191</td><td><a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-191.php">Game Direct Link</a></td></tr>
<tr><td>32</td><td>207</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>5</td><td>L</td><td>*</td><td></td><td>R2<td><a href="ASHL10-207.php">Game Direct Link</a></td></tr>
<tr><td>38</td><td>245</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>2</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL10-245.php">Game Direct Link</a></td></tr>
<tr><td>40</td><td>252</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-252.php">Game Direct Link</a></td></tr>
<tr><td>43</td><td>288</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>5</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL10-288.php">Game Direct Link</a></td></tr>
<tr><td>45</td><td>298</td><td><a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-298.php">Game Direct Link</a></td></tr>
<tr><td>52</td><td>345</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>2</td><td>W</td><td></td><td>*</td><td></td><td><a href="ASHL10-345.php">Game Direct Link</a></td></tr>
<tr><td>55</td><td>360</td><td><a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>6</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>7</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-360.php">Game Direct Link</a></td></tr>
<tr><td>59</td><td>395</td><td><a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>7</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-395.php">Game Direct Link</a></td></tr>
<tr><td>60</td><td>400</td><td><a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-400.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_NYR"><a id="NewYorkRangers">New York Rangers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">New York Rangers Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#NewYorkRangers">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#NewYorkRangers">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#NewYorkRangers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#NewYorkRangers">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#NewYorkRangers">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#NewYorkRangers">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#NewYorkRangers">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#NewYorkRangers">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#NewYorkRangers">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#NewYorkRangers">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#NewYorkRangers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_NewYorkRangers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_NewYorkRangers" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>3</td><td>14</td><td><a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-14.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>55</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-55.php">Game Direct Link</a></td></tr>
<tr><td>9</td><td>59</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-59.php">Game Direct Link</a></td></tr>
<tr><td>12</td><td>76</td><td><a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-76.php">Game Direct Link</a></td></tr>
<tr><td>15</td><td>101</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>2</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL10-101.php">Game Direct Link</a></td></tr>
<tr><td>17</td><td>108</td><td><a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-108.php">Game Direct Link</a></td></tr>
<tr><td>23</td><td>147</td><td><a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-147.php">Game Direct Link</a></td></tr>
<tr><td>25</td><td>156</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-156.php">Game Direct Link</a></td></tr>
<tr><td>27</td><td>172</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-172.php">Game Direct Link</a></td></tr>
<tr><td>28</td><td>183</td><td><a href="ASHL10-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-183.php">Game Direct Link</a></td></tr>
<tr><td>32</td><td>207</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>5</td><td>W</td><td>*</td><td></td><td>R2<td><a href="ASHL10-207.php">Game Direct Link</a></td></tr>
<tr><td>34</td><td>214</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>4</td><td>L</td><td></td><td>*</td><td></td><td><a href="ASHL10-214.php">Game Direct Link</a></td></tr>
<tr><td>38</td><td>239</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>4</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL10-239.php">Game Direct Link</a></td></tr>
<tr><td>40</td><td>251</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>4</td><td>L</td><td></td><td></td><td>R1<td><a href="ASHL10-251.php">Game Direct Link</a></td></tr>
<tr><td>41</td><td>258</td><td><a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-258.php">Game Direct Link</a></td></tr>
<tr><td>43</td><td>280</td><td><a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-280.php">Game Direct Link</a></td></tr>
<tr><td>48</td><td>309</td><td><a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-309.php">Game Direct Link</a></td></tr>
<tr><td>51</td><td>339</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>4</td><td>W</td><td></td><td>*</td><td></td><td><a href="ASHL10-339.php">Game Direct Link</a></td></tr>
<tr><td>56</td><td>369</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>6</td><td><a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-369.php">Game Direct Link</a></td></tr>
<tr><td>60</td><td>402</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>7</td><td><a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-402.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_OTT"><a id="OttawaSenators">Ottawa Senators</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">Ottawa Senators Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#OttawaSenators">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#OttawaSenators">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#OttawaSenators">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#OttawaSenators">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#OttawaSenators">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#OttawaSenators">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#OttawaSenators">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#OttawaSenators">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#OttawaSenators">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#OttawaSenators">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#OttawaSenators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_OttawaSenators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_OttawaSenators" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-1.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>46</td><td><a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-46.php">Game Direct Link</a></td></tr>
<tr><td>10</td><td>61</td><td><a href="ASHL10-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>4</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL10-61.php">Game Direct Link</a></td></tr>
<tr><td>14</td><td>91</td><td><a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-91.php">Game Direct Link</a></td></tr>
<tr><td>17</td><td>113</td><td><a href="ASHL10-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-113.php">Game Direct Link</a></td></tr>
<tr><td>20</td><td>135</td><td><a href="ASHL10-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-135.php">Game Direct Link</a></td></tr>
<tr><td>22</td><td>145</td><td><a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>6</td><td><a href="ASHL10-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-145.php">Game Direct Link</a></td></tr>
<tr><td>27</td><td>166</td><td><a href="ASHL10-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-166.php">Game Direct Link</a></td></tr>
<tr><td>28</td><td>182</td><td><a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>3</td><td>W</td><td></td><td></td><td>R2<td><a href="ASHL10-182.php">Game Direct Link</a></td></tr>
<tr><td>33</td><td>210</td><td><a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-210.php">Game Direct Link</a></td></tr>
<tr><td>35</td><td>225</td><td><a href="ASHL10-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>6</td><td><a href="ASHL10-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-225.php">Game Direct Link</a></td></tr>
<tr><td>37</td><td>233</td><td><a href="ASHL10-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>2</td><td>W</td><td></td><td>*</td><td></td><td><a href="ASHL10-233.php">Game Direct Link</a></td></tr>
<tr><td>40</td><td>248</td><td><a href="ASHL10-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-248.php">Game Direct Link</a></td></tr>
<tr><td>41</td><td>259</td><td><a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-259.php">Game Direct Link</a></td></tr>
<tr><td>43</td><td>284</td><td><a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-284.php">Game Direct Link</a></td></tr>
<tr><td>47</td><td>305</td><td><a href="ASHL10-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>4</td><td>W</td><td></td><td>*</td><td></td><td><a href="ASHL10-305.php">Game Direct Link</a></td></tr>
<tr><td>50</td><td>324</td><td><a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>7</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-324.php">Game Direct Link</a></td></tr>
<tr><td>53</td><td>350</td><td><a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-350.php">Game Direct Link</a></td></tr>
<tr><td>56</td><td>367</td><td><a href="ASHL10-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>6</td><td><a href="ASHL10-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-367.php">Game Direct Link</a></td></tr>
<tr><td>59</td><td>393</td><td><a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-393.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_PHI"><a id="PhiladelphiaFlyers">Philadelphia Flyers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">Philadelphia Flyers Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#PhiladelphiaFlyers">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#PhiladelphiaFlyers">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#PhiladelphiaFlyers">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#PhiladelphiaFlyers">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#PhiladelphiaFlyers">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#PhiladelphiaFlyers">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#PhiladelphiaFlyers">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#PhiladelphiaFlyers">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#PhiladelphiaFlyers">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#PhiladelphiaFlyers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PhiladelphiaFlyers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PhiladelphiaFlyers" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>5</td><td>31</td><td><a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-31.php">Game Direct Link</a></td></tr>
<tr><td>9</td><td>57</td><td><a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-57.php">Game Direct Link</a></td></tr>
<tr><td>10</td><td>60</td><td><a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-60.php">Game Direct Link</a></td></tr>
<tr><td>15</td><td>98</td><td><a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-98.php">Game Direct Link</a></td></tr>
<tr><td>17</td><td>109</td><td><a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-109.php">Game Direct Link</a></td></tr>
<tr><td>20</td><td>129</td><td><a href="ASHL10-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-129.php">Game Direct Link</a></td></tr>
<tr><td>24</td><td>151</td><td><a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-151.php">Game Direct Link</a></td></tr>
<tr><td>28</td><td>174</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-174.php">Game Direct Link</a></td></tr>
<tr><td>30</td><td>193</td><td><a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-193.php">Game Direct Link</a></td></tr>
<tr><td>32</td><td>208</td><td><a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-208.php">Game Direct Link</a></td></tr>
<tr><td>35</td><td>221</td><td><a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-221.php">Game Direct Link</a></td></tr>
<tr><td>37</td><td>232</td><td><a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-232.php">Game Direct Link</a></td></tr>
<tr><td>40</td><td>251</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>4</td><td>W</td><td></td><td></td><td>R1<td><a href="ASHL10-251.php">Game Direct Link</a></td></tr>
<tr><td>42</td><td>274</td><td><a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-274.php">Game Direct Link</a></td></tr>
<tr><td>43</td><td>283</td><td><a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>5</td><td>W</td><td></td><td>*</td><td></td><td><a href="ASHL10-283.php">Game Direct Link</a></td></tr>
<tr><td>48</td><td>310</td><td><a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-310.php">Game Direct Link</a></td></tr>
<tr><td>50</td><td>331</td><td><a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-331.php">Game Direct Link</a></td></tr>
<tr><td>51</td><td>340</td><td><a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-340.php">Game Direct Link</a></td></tr>
<tr><td>56</td><td>370</td><td><a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-370.php">Game Direct Link</a></td></tr>
<tr><td>60</td><td>404</td><td><a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-404.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_PIT"><a id="PittsburghPenguins">Pittsburgh Penguins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">Pittsburgh Penguins Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#PittsburghPenguins">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#PittsburghPenguins">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#PittsburghPenguins">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#PittsburghPenguins">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#PittsburghPenguins">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#PittsburghPenguins">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#PittsburghPenguins">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#PittsburghPenguins">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#PittsburghPenguins">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#PittsburghPenguins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_PittsburghPenguins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_PittsburghPenguins" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>3</td><td>17</td><td><a href="ASHL10-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>4</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL10-17.php">Game Direct Link</a></td></tr>
<tr><td>5</td><td>25</td><td><a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-25.php">Game Direct Link</a></td></tr>
<tr><td>9</td><td>58</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-58.php">Game Direct Link</a></td></tr>
<tr><td>15</td><td>97</td><td><a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-97.php">Game Direct Link</a></td></tr>
<tr><td>17</td><td>110</td><td><a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-110.php">Game Direct Link</a></td></tr>
<tr><td>20</td><td>136</td><td><a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>4</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL10-136.php">Game Direct Link</a></td></tr>
<tr><td>22</td><td>146</td><td><a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-146.php">Game Direct Link</a></td></tr>
<tr><td>27</td><td>163</td><td><a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>3</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL10-163.php">Game Direct Link</a></td></tr>
<tr><td>32</td><td>202</td><td><a href="ASHL10-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>3</td><td>W</td><td></td><td>*</td><td></td><td><a href="ASHL10-202.php">Game Direct Link</a></td></tr>
<tr><td>36</td><td>228</td><td><a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-228.php">Game Direct Link</a></td></tr>
<tr><td>38</td><td>239</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>4</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL10-239.php">Game Direct Link</a></td></tr>
<tr><td>41</td><td>262</td><td><a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>4</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL10-262.php">Game Direct Link</a></td></tr>
<tr><td>42</td><td>272</td><td><a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>6</td><td><a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-272.php">Game Direct Link</a></td></tr>
<tr><td>45</td><td>294</td><td><a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-294.php">Game Direct Link</a></td></tr>
<tr><td>47</td><td>303</td><td><a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-303.php">Game Direct Link</a></td></tr>
<tr><td>49</td><td>312</td><td><a href="ASHL10-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>7</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-312.php">Game Direct Link</a></td></tr>
<tr><td>50</td><td>332</td><td><a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-332.php">Game Direct Link</a></td></tr>
<tr><td>53</td><td>349</td><td><a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>4</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL10-349.php">Game Direct Link</a></td></tr>
<tr><td>56</td><td>366</td><td><a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-366.php">Game Direct Link</a></td></tr>
<tr><td>60</td><td>403</td><td><a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-403.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_QUE"><a id="QuebecNordiques">Quebec Nordiques</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=31">Quebec Nordiques Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#QuebecNordiques">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#QuebecNordiques">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#QuebecNordiques">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#QuebecNordiques">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#QuebecNordiques">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#QuebecNordiques">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#QuebecNordiques">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#QuebecNordiques">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#QuebecNordiques">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#QuebecNordiques">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_QuebecNordiques');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_QuebecNordiques" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>3</td><td>13</td><td><a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-13.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>51</td><td><a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-51.php">Game Direct Link</a></td></tr>
<tr><td>11</td><td>73</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>4</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL10-73.php">Game Direct Link</a></td></tr>
<tr><td>15</td><td>102</td><td><a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-102.php">Game Direct Link</a></td></tr>
<tr><td>18</td><td>120</td><td><a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>3</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL10-120.php">Game Direct Link</a></td></tr>
<tr><td>20</td><td>133</td><td><a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>7</td><td>L</td><td></td><td></td><td>R3<td><a href="ASHL10-133.php">Game Direct Link</a></td></tr>
<tr><td>24</td><td>150</td><td><a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-150.php">Game Direct Link</a></td></tr>
<tr><td>26</td><td>162</td><td><a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-162.php">Game Direct Link</a></td></tr>
<tr><td>30</td><td>193</td><td><a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-193.php">Game Direct Link</a></td></tr>
<tr><td>32</td><td>201</td><td><a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-201.php">Game Direct Link</a></td></tr>
<tr><td>34</td><td>215</td><td><a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>6</td><td><a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-215.php">Game Direct Link</a></td></tr>
<tr><td>36</td><td>228</td><td><a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-228.php">Game Direct Link</a></td></tr>
<tr><td>40</td><td>249</td><td><a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-249.php">Game Direct Link</a></td></tr>
<tr><td>41</td><td>260</td><td><a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-260.php">Game Direct Link</a></td></tr>
<tr><td>43</td><td>287</td><td><a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-287.php">Game Direct Link</a></td></tr>
<tr><td>45</td><td>296</td><td><a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>3</td><td>L</td><td></td><td>*</td><td></td><td><a href="ASHL10-296.php">Game Direct Link</a></td></tr>
<tr><td>48</td><td>310</td><td><a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-310.php">Game Direct Link</a></td></tr>
<tr><td>50</td><td>325</td><td><a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-325.php">Game Direct Link</a></td></tr>
<tr><td>55</td><td>361</td><td><a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>6</td><td><a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-361.php">Game Direct Link</a></td></tr>
<tr><td>59</td><td>396</td><td><a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>5</td><td>W</td><td></td><td>*</td><td></td><td><a href="ASHL10-396.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_SJS"><a id="SanJoseSharks">San Jose Sharks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=28">San Jose Sharks Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#SanJoseSharks">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#SanJoseSharks">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#SanJoseSharks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#SanJoseSharks">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#SanJoseSharks">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#SanJoseSharks">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#SanJoseSharks">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#SanJoseSharks">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#SanJoseSharks">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#SanJoseSharks">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#SanJoseSharks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SanJoseSharks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SanJoseSharks" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>4</td><td>21</td><td><a href="ASHL10-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-21.php">Game Direct Link</a></td></tr>
<tr><td>7</td><td>36</td><td><a href="ASHL10-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>6</td><td><a href="ASHL10-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-36.php">Game Direct Link</a></td></tr>
<tr><td>11</td><td>72</td><td><a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>1</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL10-72.php">Game Direct Link</a></td></tr>
<tr><td>14</td><td>89</td><td><a href="ASHL10-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-89.php">Game Direct Link</a></td></tr>
<tr><td>16</td><td>105</td><td><a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-105.php">Game Direct Link</a></td></tr>
<tr><td>18</td><td>117</td><td><a href="ASHL10-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-117.php">Game Direct Link</a></td></tr>
<tr><td>20</td><td>130</td><td><a href="ASHL10-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>5</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL10-130.php">Game Direct Link</a></td></tr>
<tr><td>24</td><td>150</td><td><a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-150.php">Game Direct Link</a></td></tr>
<tr><td>27</td><td>168</td><td><a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-168.php">Game Direct Link</a></td></tr>
<tr><td>29</td><td>186</td><td><a href="ASHL10-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-186.php">Game Direct Link</a></td></tr>
<tr><td>31</td><td>195</td><td><a href="ASHL10-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-195.php">Game Direct Link</a></td></tr>
<tr><td>33</td><td>211</td><td><a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-211.php">Game Direct Link</a></td></tr>
<tr><td>36</td><td>230</td><td><a href="ASHL10-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>1</td><td>W</td><td></td><td>*</td><td></td><td><a href="ASHL10-230.php">Game Direct Link</a></td></tr>
<tr><td>38</td><td>242</td><td><a href="ASHL10-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>3</td><td>L</td><td></td><td></td><td>R1<td><a href="ASHL10-242.php">Game Direct Link</a></td></tr>
<tr><td>42</td><td>270</td><td><a href="ASHL10-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-270.php">Game Direct Link</a></td></tr>
<tr><td>43</td><td>282</td><td><a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-282.php">Game Direct Link</a></td></tr>
<tr><td>46</td><td>302</td><td><a href="ASHL10-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-302.php">Game Direct Link</a></td></tr>
<tr><td>51</td><td>338</td><td><a href="ASHL10-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-338.php">Game Direct Link</a></td></tr>
<tr><td>55</td><td>357</td><td><a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-357.php">Game Direct Link</a></td></tr>
<tr><td>59</td><td>389</td><td><a href="ASHL10-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-389.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_SEA"><a id="SeattleKraken">Seattle Kraken</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=32">Seattle Kraken Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#SeattleKraken">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#SeattleKraken">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#SeattleKraken">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#SeattleKraken">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#SeattleKraken">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#SeattleKraken">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#SeattleKraken">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#SeattleKraken">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#SeattleKraken">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#SeattleKraken">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#SeattleKraken">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SeattleKraken');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SeattleKraken" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>3</td><td>12</td><td><a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>3</td><td>W</td><td></td><td>*</td><td></td><td><a href="ASHL10-12.php">Game Direct Link</a></td></tr>
<tr><td>5</td><td>28</td><td><a href="ASHL10-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-28.php">Game Direct Link</a></td></tr>
<tr><td>7</td><td>45</td><td><a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-45.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>52</td><td><a href="ASHL10-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-52.php">Game Direct Link</a></td></tr>
<tr><td>13</td><td>85</td><td><a href="ASHL10-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>4</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL10-85.php">Game Direct Link</a></td></tr>
<tr><td>15</td><td>100</td><td><a href="ASHL10-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-100.php">Game Direct Link</a></td></tr>
<tr><td>17</td><td>116</td><td><a href="ASHL10-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-116.php">Game Direct Link</a></td></tr>
<tr><td>25</td><td>153</td><td><a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-153.php">Game Direct Link</a></td></tr>
<tr><td>27</td><td>165</td><td><a href="ASHL10-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-165.php">Game Direct Link</a></td></tr>
<tr><td>29</td><td>187</td><td><a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-187.php">Game Direct Link</a></td></tr>
<tr><td>33</td><td>212</td><td><a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-212.php">Game Direct Link</a></td></tr>
<tr><td>35</td><td>217</td><td><a href="ASHL10-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-217.php">Game Direct Link</a></td></tr>
<tr><td>39</td><td>246</td><td><a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-246.php">Game Direct Link</a></td></tr>
<tr><td>41</td><td>265</td><td><a href="ASHL10-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-265.php">Game Direct Link</a></td></tr>
<tr><td>42</td><td>277</td><td><a href="ASHL10-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>3</td><td>L</td><td></td><td>*</td><td></td><td><a href="ASHL10-277.php">Game Direct Link</a></td></tr>
<tr><td>44</td><td>289</td><td><a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-289.php">Game Direct Link</a></td></tr>
<tr><td>49</td><td>315</td><td><a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-315.php">Game Direct Link</a></td></tr>
<tr><td>51</td><td>335</td><td><a href="ASHL10-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-335.php">Game Direct Link</a></td></tr>
<tr><td>55</td><td>358</td><td><a href="ASHL10-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-358.php">Game Direct Link</a></td></tr>
<tr><td>57</td><td>374</td><td><a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-374.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_STL"><a id="St.LouisBlues">St. Louis Blues</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=19">St. Louis Blues Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#St.LouisBlues">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#St.LouisBlues">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#St.LouisBlues">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#St.LouisBlues">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#St.LouisBlues">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#St.LouisBlues">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#St.LouisBlues">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#St.LouisBlues">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#St.LouisBlues">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#St.LouisBlues">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#St.LouisBlues">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_St.LouisBlues');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_St.LouisBlues" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>7</td><td><a href="ASHL10-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-7.php">Game Direct Link</a></td></tr>
<tr><td>3</td><td>17</td><td><a href="ASHL10-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>4</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL10-17.php">Game Direct Link</a></td></tr>
<tr><td>5</td><td>31</td><td><a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-31.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>52</td><td><a href="ASHL10-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-52.php">Game Direct Link</a></td></tr>
<tr><td>14</td><td>87</td><td><a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-87.php">Game Direct Link</a></td></tr>
<tr><td>18</td><td>120</td><td><a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>3</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL10-120.php">Game Direct Link</a></td></tr>
<tr><td>20</td><td>137</td><td><a href="ASHL10-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-137.php">Game Direct Link</a></td></tr>
<tr><td>22</td><td>144</td><td><a href="ASHL10-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-144.php">Game Direct Link</a></td></tr>
<tr><td>28</td><td>175</td><td><a href="ASHL10-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>5</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL10-175.php">Game Direct Link</a></td></tr>
<tr><td>30</td><td>192</td><td><a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-192.php">Game Direct Link</a></td></tr>
<tr><td>32</td><td>203</td><td><a href="ASHL10-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-203.php">Game Direct Link</a></td></tr>
<tr><td>35</td><td>225</td><td><a href="ASHL10-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>6</td><td><a href="ASHL10-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-225.php">Game Direct Link</a></td></tr>
<tr><td>38</td><td>241</td><td><a href="ASHL10-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>2</td><td>W</td><td></td><td>*</td><td></td><td><a href="ASHL10-241.php">Game Direct Link</a></td></tr>
<tr><td>42</td><td>269</td><td><a href="ASHL10-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-269.php">Game Direct Link</a></td></tr>
<tr><td>43</td><td>286</td><td><a href="ASHL10-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>4</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL10-286.php">Game Direct Link</a></td></tr>
<tr><td>45</td><td>297</td><td><a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-297.php">Game Direct Link</a></td></tr>
<tr><td>49</td><td>319</td><td><a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-319.php">Game Direct Link</a></td></tr>
<tr><td>55</td><td>358</td><td><a href="ASHL10-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-358.php">Game Direct Link</a></td></tr>
<tr><td>58</td><td>384</td><td><a href="ASHL10-ProTeamRoster.php#NashvillePredators">Nashville Predators</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-384.php">Game Direct Link</a></td></tr>
<tr><td>60</td><td>405</td><td><a href="ASHL10-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>3</td><td>L</td><td></td><td>*</td><td></td><td><a href="ASHL10-405.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_TBL"><a id="TampaBayLightning">Tampa Bay Lightning</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=13">Tampa Bay Lightning Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#TampaBayLightning">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#TampaBayLightning">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#TampaBayLightning">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#TampaBayLightning">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#TampaBayLightning">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#TampaBayLightning">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#TampaBayLightning">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#TampaBayLightning">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#TampaBayLightning">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#TampaBayLightning">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TampaBayLightning');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TampaBayLightning" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>3</td><td>10</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-10.php">Game Direct Link</a></td></tr>
<tr><td>7</td><td>39</td><td><a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-39.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>48</td><td><a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-48.php">Game Direct Link</a></td></tr>
<tr><td>13</td><td>84</td><td><a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-84.php">Game Direct Link</a></td></tr>
<tr><td>15</td><td>95</td><td><a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-95.php">Game Direct Link</a></td></tr>
<tr><td>17</td><td>106</td><td><a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>3</td><td>W</td><td></td><td>*</td><td></td><td><a href="ASHL10-106.php">Game Direct Link</a></td></tr>
<tr><td>20</td><td>134</td><td><a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-134.php">Game Direct Link</a></td></tr>
<tr><td>24</td><td>149</td><td><a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>6</td><td>W</td><td></td><td></td><td>R1<td><a href="ASHL10-149.php">Game Direct Link</a></td></tr>
<tr><td>26</td><td>162</td><td><a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-162.php">Game Direct Link</a></td></tr>
<tr><td>32</td><td>203</td><td><a href="ASHL10-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-203.php">Game Direct Link</a></td></tr>
<tr><td>37</td><td>233</td><td><a href="ASHL10-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>2</td><td>L</td><td></td><td>*</td><td></td><td><a href="ASHL10-233.php">Game Direct Link</a></td></tr>
<tr><td>39</td><td>246</td><td><a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-246.php">Game Direct Link</a></td></tr>
<tr><td>41</td><td>266</td><td><a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-266.php">Game Direct Link</a></td></tr>
<tr><td>45</td><td>298</td><td><a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-298.php">Game Direct Link</a></td></tr>
<tr><td>47</td><td>303</td><td><a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-303.php">Game Direct Link</a></td></tr>
<tr><td>49</td><td>321</td><td><a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-321.php">Game Direct Link</a></td></tr>
<tr><td>53</td><td>347</td><td><a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-347.php">Game Direct Link</a></td></tr>
<tr><td>56</td><td>371</td><td><a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-371.php">Game Direct Link</a></td></tr>
<tr><td>58</td><td>382</td><td><a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-382.php">Game Direct Link</a></td></tr>
<tr><td>59</td><td>399</td><td><a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-399.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_TOR"><a id="TorontoMapleLeafs">Toronto Maple Leafs</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">Toronto Maple Leafs Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#TorontoMapleLeafs">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#TorontoMapleLeafs">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#TorontoMapleLeafs">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#TorontoMapleLeafs">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#TorontoMapleLeafs">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#TorontoMapleLeafs">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#TorontoMapleLeafs">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#TorontoMapleLeafs">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#TorontoMapleLeafs">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#TorontoMapleLeafs">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TorontoMapleLeafs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TorontoMapleLeafs" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>9</td><td><a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>1</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL10-9.php">Game Direct Link</a></td></tr>
<tr><td>5</td><td>29</td><td><a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-29.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>53</td><td><a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-53.php">Game Direct Link</a></td></tr>
<tr><td>11</td><td>72</td><td><a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>1</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL10-72.php">Game Direct Link</a></td></tr>
<tr><td>14</td><td>89</td><td><a href="ASHL10-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-89.php">Game Direct Link</a></td></tr>
<tr><td>21</td><td>142</td><td><a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-142.php">Game Direct Link</a></td></tr>
<tr><td>27</td><td>170</td><td><a href="ASHL10-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-170.php">Game Direct Link</a></td></tr>
<tr><td>28</td><td>182</td><td><a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>3</td><td>L</td><td></td><td></td><td>R2<td><a href="ASHL10-182.php">Game Direct Link</a></td></tr>
<tr><td>32</td><td>201</td><td><a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-201.php">Game Direct Link</a></td></tr>
<tr><td>35</td><td>223</td><td><a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-223.php">Game Direct Link</a></td></tr>
<tr><td>37</td><td>235</td><td><a href="ASHL10-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>4</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL10-235.php">Game Direct Link</a></td></tr>
<tr><td>42</td><td>270</td><td><a href="ASHL10-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-270.php">Game Direct Link</a></td></tr>
<tr><td>43</td><td>285</td><td><a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-285.php">Game Direct Link</a></td></tr>
<tr><td>46</td><td>300</td><td><a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-300.php">Game Direct Link</a></td></tr>
<tr><td>48</td><td>311</td><td><a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-311.php">Game Direct Link</a></td></tr>
<tr><td>49</td><td>318</td><td><a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-318.php">Game Direct Link</a></td></tr>
<tr><td>51</td><td>343</td><td><a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>3</td><td>W</td><td></td><td>*</td><td></td><td><a href="ASHL10-343.php">Game Direct Link</a></td></tr>
<tr><td>54</td><td>352</td><td><a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-352.php">Game Direct Link</a></td></tr>
<tr><td>56</td><td>371</td><td><a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-371.php">Game Direct Link</a></td></tr>
<tr><td>58</td><td>386</td><td><a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-386.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_VAN"><a id="VancouverCanucks">Vancouver Canucks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=25">Vancouver Canucks Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#VancouverCanucks">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#VancouverCanucks">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#VancouverCanucks">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#VancouverCanucks">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#VancouverCanucks">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#VancouverCanucks">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#VancouverCanucks">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#VancouverCanucks">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#VancouverCanucks">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#VancouverCanucks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_VancouverCanucks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_VancouverCanucks" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-4.php">Game Direct Link</a></td></tr>
<tr><td>3</td><td>13</td><td><a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-13.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>49</td><td><a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>4</td><td>W</td><td></td><td>*</td><td></td><td><a href="ASHL10-49.php">Game Direct Link</a></td></tr>
<tr><td>11</td><td>63</td><td><a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-63.php">Game Direct Link</a></td></tr>
<tr><td>13</td><td>81</td><td><a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>4</td><td>W</td><td></td><td>*</td><td></td><td><a href="ASHL10-81.php">Game Direct Link</a></td></tr>
<tr><td>19</td><td>125</td><td><a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-125.php">Game Direct Link</a></td></tr>
<tr><td>21</td><td>140</td><td><a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-140.php">Game Direct Link</a></td></tr>
<tr><td>25</td><td>157</td><td><a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>4</td><td>W</td><td></td><td>*</td><td></td><td><a href="ASHL10-157.php">Game Direct Link</a></td></tr>
<tr><td>27</td><td>168</td><td><a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-168.php">Game Direct Link</a></td></tr>
<tr><td>29</td><td>185</td><td><a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-185.php">Game Direct Link</a></td></tr>
<tr><td>31</td><td>197</td><td><a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche</a></td><td>4</td><td>W</td><td></td><td>*</td><td></td><td><a href="ASHL10-197.php">Game Direct Link</a></td></tr>
<tr><td>33</td><td>213</td><td><a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-213.php">Game Direct Link</a></td></tr>
<tr><td>36</td><td>230</td><td><a href="ASHL10-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>1</td><td>L</td><td></td><td>*</td><td></td><td><a href="ASHL10-230.php">Game Direct Link</a></td></tr>
<tr><td>42</td><td>275</td><td><a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-275.php">Game Direct Link</a></td></tr>
<tr><td>43</td><td>288</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>5</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL10-288.php">Game Direct Link</a></td></tr>
<tr><td>49</td><td>315</td><td><a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-315.php">Game Direct Link</a></td></tr>
<tr><td>50</td><td>325</td><td><a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-325.php">Game Direct Link</a></td></tr>
<tr><td>53</td><td>349</td><td><a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>4</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL10-349.php">Game Direct Link</a></td></tr>
<tr><td>56</td><td>363</td><td><a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>1</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL10-363.php">Game Direct Link</a></td></tr>
<tr><td>59</td><td>392</td><td><a href="ASHL10-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>4</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL10-392.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_VEG"><a id="VegasGoldenKnights">Vegas Golden Knights</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=33">Vegas Golden Knights Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#VegasGoldenKnights">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#VegasGoldenKnights">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#VegasGoldenKnights">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#VegasGoldenKnights">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#VegasGoldenKnights">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#VegasGoldenKnights">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#VegasGoldenKnights">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#VegasGoldenKnights">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#VegasGoldenKnights">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#VegasGoldenKnights">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_VegasGoldenKnights');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_VegasGoldenKnights" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>3</td><td>19</td><td><a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>3</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL10-19.php">Game Direct Link</a></td></tr>
<tr><td>5</td><td>28</td><td><a href="ASHL10-ProTeamRoster.php#SeattleKraken">Seattle Kraken</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-28.php">Game Direct Link</a></td></tr>
<tr><td>7</td><td>39</td><td><a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-39.php">Game Direct Link</a></td></tr>
<tr><td>12</td><td>78</td><td><a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-78.php">Game Direct Link</a></td></tr>
<tr><td>14</td><td>90</td><td><a href="ASHL10-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-90.php">Game Direct Link</a></td></tr>
<tr><td>18</td><td>117</td><td><a href="ASHL10-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-117.php">Game Direct Link</a></td></tr>
<tr><td>20</td><td>137</td><td><a href="ASHL10-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-137.php">Game Direct Link</a></td></tr>
<tr><td>24</td><td>151</td><td><a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-151.php">Game Direct Link</a></td></tr>
<tr><td>28</td><td>178</td><td><a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-178.php">Game Direct Link</a></td></tr>
<tr><td>31</td><td>196</td><td><a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-196.php">Game Direct Link</a></td></tr>
<tr><td>33</td><td>210</td><td><a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-210.php">Game Direct Link</a></td></tr>
<tr><td>35</td><td>220</td><td><a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-220.php">Game Direct Link</a></td></tr>
<tr><td>37</td><td>234</td><td><a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>4</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL10-234.php">Game Direct Link</a></td></tr>
<tr><td>40</td><td>252</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-252.php">Game Direct Link</a></td></tr>
<tr><td>42</td><td>268</td><td><a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>6</td><td><a href="ASHL10-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-268.php">Game Direct Link</a></td></tr>
<tr><td>43</td><td>285</td><td><a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-285.php">Game Direct Link</a></td></tr>
<tr><td>49</td><td>313</td><td><a href="ASHL10-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>2</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL10-313.php">Game Direct Link</a></td></tr>
<tr><td>51</td><td>337</td><td><a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-337.php">Game Direct Link</a></td></tr>
<tr><td>54</td><td>352</td><td><a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-352.php">Game Direct Link</a></td></tr>
<tr><td>58</td><td>381</td><td><a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>2</td><td>W</td><td>*</td><td></td><td></td><td><a href="ASHL10-381.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_WSH"><a id="WashingtonCapitals">Washington Capitals</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=14">Washington Capitals Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#WashingtonCapitals">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#WashingtonCapitals">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#WashingtonCapitals">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#WashingtonCapitals">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#WashingtonCapitals">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#WashingtonCapitals">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#WashingtonCapitals">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#WashingtonCapitals">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#WashingtonCapitals">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#WashingtonCapitals">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_WashingtonCapitals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_WashingtonCapitals" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>3</td><td>16</td><td><a href="ASHL10-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>2</td><td>L</td><td></td><td>*</td><td></td><td><a href="ASHL10-16.php">Game Direct Link</a></td></tr>
<tr><td>8</td><td>46</td><td><a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-46.php">Game Direct Link</a></td></tr>
<tr><td>11</td><td>65</td><td><a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>5</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL10-65.php">Game Direct Link</a></td></tr>
<tr><td>12</td><td>79</td><td><a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-79.php">Game Direct Link</a></td></tr>
<tr><td>15</td><td>101</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>2</td><td>L</td><td>*</td><td></td><td></td><td><a href="ASHL10-101.php">Game Direct Link</a></td></tr>
<tr><td>19</td><td>122</td><td><a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>7</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-122.php">Game Direct Link</a></td></tr>
<tr><td>21</td><td>138</td><td><a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-138.php">Game Direct Link</a></td></tr>
<tr><td>25</td><td>157</td><td><a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>4</td><td>L</td><td></td><td>*</td><td></td><td><a href="ASHL10-157.php">Game Direct Link</a></td></tr>
<tr><td>27</td><td>169</td><td><a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-169.php">Game Direct Link</a></td></tr>
<tr><td>29</td><td>188</td><td><a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>3</td><td>W</td><td></td><td>*</td><td></td><td><a href="ASHL10-188.php">Game Direct Link</a></td></tr>
<tr><td>32</td><td>204</td><td><a href="ASHL10-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-204.php">Game Direct Link</a></td></tr>
<tr><td>35</td><td>227</td><td><a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#FloridaPanthers">Florida Panthers</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-227.php">Game Direct Link</a></td></tr>
<tr><td>41</td><td>266</td><td><a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-266.php">Game Direct Link</a></td></tr>
<tr><td>42</td><td>273</td><td><a href="ASHL10-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-273.php">Game Direct Link</a></td></tr>
<tr><td>45</td><td>296</td><td><a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques</a></td><td>3</td><td>W</td><td></td><td>*</td><td></td><td><a href="ASHL10-296.php">Game Direct Link</a></td></tr>
<tr><td>47</td><td>304</td><td><a href="ASHL10-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-304.php">Game Direct Link</a></td></tr>
<tr><td>51</td><td>337</td><td><a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-337.php">Game Direct Link</a></td></tr>
<tr><td>52</td><td>345</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkIslanders">New York Islanders</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>2</td><td>L</td><td></td><td>*</td><td></td><td><a href="ASHL10-345.php">Game Direct Link</a></td></tr>
<tr><td>56</td><td>365</td><td><a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-365.php">Game Direct Link</a></td></tr>
<tr><td>60</td><td>405</td><td><a href="ASHL10-ProTeamRoster.php#St.LouisBlues">St. Louis Blues</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>3</td><td>W</td><td></td><td>*</td><td></td><td><a href="ASHL10-405.php">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_WPG"><a id="WinnipegJets">Winnipeg Jets</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=15">Winnipeg Jets Page</a> ]
[ <a href="ASHL10-ProTeamRoster.php#WinnipegJets">Pro Team Roster</a> ]
[ <a href="ASHL10-ProTeamScoring.php#WinnipegJets">Pro Team Scoring</a> ]
[ <a href="ASHL10-ProTeamPlayersInfo.php#WinnipegJets">Pro Team PlayersInfo</a> ]
[ <a href="ASHL10-ProTeamLines.php#WinnipegJets">Pro Team Lines</a> ]
[ <a href="ASHL10-TeamProspects.php#WinnipegJets">Team Prospects</a> ]
[ <a href="ASHL10-ProTeamSchedule.php#WinnipegJets">Pro Team Schedule</a> ]
[ <a href="ASHL10-ProTeamStats.php#WinnipegJets">Pro Team Stats</a> ]
[ <a href="ASHL10-ProTeamStatsVS.php#WinnipegJets">Pro Team Stats VS</a> ]
[ <a href="ASHL10-TeamInjurySuspension.php#WinnipegJets">Team Injury Suspension</a> ]
[ <a href="ASHL10-TeamHistory.php#WinnipegJets">Team History</a> ]
[ <a href="ASHL10-TeamRecords.php#WinnipegJets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_WinnipegJets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_WinnipegJets" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>4</td><td>20</td><td><a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-20.php">Game Direct Link</a></td></tr>
<tr><td>7</td><td>36</td><td><a href="ASHL10-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>6</td><td><a href="ASHL10-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-36.php">Game Direct Link</a></td></tr>
<tr><td>10</td><td>60</td><td><a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-60.php">Game Direct Link</a></td></tr>
<tr><td>12</td><td>77</td><td><a href="ASHL10-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers</a></td><td>4</td><td><a href="ASHL10-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-77.php">Game Direct Link</a></td></tr>
<tr><td>14</td><td>90</td><td><a href="ASHL10-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-90.php">Game Direct Link</a></td></tr>
<tr><td>17</td><td>113</td><td><a href="ASHL10-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-113.php">Game Direct Link</a></td></tr>
<tr><td>19</td><td>123</td><td><a href="ASHL10-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-123.php">Game Direct Link</a></td></tr>
<tr><td>21</td><td>141</td><td><a href="ASHL10-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#CalgaryFlames">Calgary Flames</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-141.php">Game Direct Link</a></td></tr>
<tr><td>27</td><td>172</td><td><a href="ASHL10-ProTeamRoster.php#NewYorkRangers">New York Rangers</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-172.php">Game Direct Link</a></td></tr>
<tr><td>32</td><td>204</td><td><a href="ASHL10-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#WashingtonCapitals">Washington Capitals</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-204.php">Game Direct Link</a></td></tr>
<tr><td>33</td><td>213</td><td><a href="ASHL10-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-213.php">Game Direct Link</a></td></tr>
<tr><td>41</td><td>267</td><td><a href="ASHL10-ProTeamRoster.php#MinnesotaWild">Minnesota Wild</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-267.php">Game Direct Link</a></td></tr>
<tr><td>43</td><td>279</td><td><a href="ASHL10-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#DallasStars">Dallas Stars</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-279.php">Game Direct Link</a></td></tr>
<tr><td>44</td><td>293</td><td><a href="ASHL10-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>0</td><td><a href="ASHL10-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="ASHL10-293.php">Game Direct Link</a></td></tr>
<tr><td>49</td><td>312</td><td><a href="ASHL10-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>1</td><td><a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>7</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-312.php">Game Direct Link</a></td></tr>
<tr><td>50</td><td>331</td><td><a href="ASHL10-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers</a></td><td>3</td><td><a href="ASHL10-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-331.php">Game Direct Link</a></td></tr>
<tr><td>55</td><td>359</td><td><a href="ASHL10-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets</a></td><td>3</td><td>L</td><td></td><td>*</td><td></td><td><a href="ASHL10-359.php">Game Direct Link</a></td></tr>
<tr><td>56</td><td>367</td><td><a href="ASHL10-ProTeamRoster.php#OttawaSenators">Ottawa Senators</a></td><td>6</td><td><a href="ASHL10-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-367.php">Game Direct Link</a></td></tr>
<tr><td>59</td><td>389</td><td><a href="ASHL10-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>2</td><td><a href="ASHL10-ProTeamRoster.php#SanJoseSharks">San Jose Sharks</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-389.php">Game Direct Link</a></td></tr>
<tr><td>60</td><td>403</td><td><a href="ASHL10-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins</a></td><td>5</td><td><a href="ASHL10-ProTeamRoster.php#WinnipegJets">Winnipeg Jets</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="ASHL10-403.php">Game Direct Link</a></td></tr>
</table></div>
<?php include "Footer.php";?>

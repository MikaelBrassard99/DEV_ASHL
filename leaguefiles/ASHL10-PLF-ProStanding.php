<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Pro Standing</title>
<script src="ASHL10-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.3.3 - ASHL10-STHS.db - ASHL10-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="ASHL10-PLF.css" rel="stylesheet" type="text/css" />
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
<div class="STHSCenter"><h1>Nashville Predators wins the playoff!</h1></div>
<table class="STHSTableFullW"><tr>
<td><b> Round : 1</b></td>
<td><b> Round : 2</b></td>
<td><b> Round : 3</b></td>
<td><b> Round : 4</b></td>
<td><b> Round : 5</b></td>
</tr>
<tr>
<td><b>
<a href="ASHL10-PLF-ProTeamRoster.php#QuebecNordiques">Quebec Nordiques - 2</a><br />
<a href="ASHL10-PLF-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers - 3</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
</tr>
<tr>
<td><b>
<a href="ASHL10-PLF-ProTeamRoster.php#TampaBayLightning">Tampa Bay Lightning - 0</a><br />
<a href="ASHL10-PLF-ProTeamRoster.php#OttawaSenators">Ottawa Senators - 3</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
</tr>
<tr>
<td><b>
<a href="ASHL10-PLF-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs - 1</a><br />
<a href="ASHL10-PLF-ProTeamRoster.php#WashingtonCapitals">Washington Capitals - 3</a><br />
<br /></b></td>
<td><b>
<a href="ASHL10-PLF-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets - 3</a><br />
<a href="ASHL10-PLF-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers - 1</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
</tr>
<tr>
<td><b>
<a href="ASHL10-PLF-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets - 3</a><br />
<a href="ASHL10-PLF-ProTeamRoster.php#FloridaPanthers">Florida Panthers - 2</a><br />
<br /></b></td>
<td><b>
<a href="ASHL10-PLF-ProTeamRoster.php#BostonBruins">Boston Bruins - 3</a><br />
<a href="ASHL10-PLF-ProTeamRoster.php#OttawaSenators">Ottawa Senators - 1</a><br />
<br /></b></td>
<td><b>
<a href="ASHL10-PLF-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets - 3</a><br />
<a href="ASHL10-PLF-ProTeamRoster.php#WashingtonCapitals">Washington Capitals - 2</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
</tr>
<tr>
<td><b>
<a href="ASHL10-PLF-ProTeamRoster.php#BostonBruins">Boston Bruins - 3</a><br />
<a href="ASHL10-PLF-ProTeamRoster.php#NewYorkIslanders">New York Islanders - 2</a><br />
<br /></b></td>
<td><b>
<a href="ASHL10-PLF-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes - 1</a><br />
<a href="ASHL10-PLF-ProTeamRoster.php#WashingtonCapitals">Washington Capitals - 3</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
</tr>
<tr>
<td><b>
<a href="ASHL10-PLF-ProTeamRoster.php#CarolinaHurricanes">Carolina Hurricanes - 3</a><br />
<a href="ASHL10-PLF-ProTeamRoster.php#NewYorkRangers">New York Rangers - 0</a><br />
<br /></b></td>
<td><b>
<a href="ASHL10-PLF-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens - 3</a><br />
<a href="ASHL10-PLF-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins - 2</a><br />
<br /></b></td>
<td><b>
<a href="ASHL10-PLF-ProTeamRoster.php#BostonBruins">Boston Bruins - 1</a><br />
<a href="ASHL10-PLF-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens - 3</a><br />
<br /></b></td>
<td><b>
<a href="ASHL10-PLF-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets - 3</a><br />
<a href="ASHL10-PLF-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens - 2</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
</tr>
<tr>
<td><b>
<a href="ASHL10-PLF-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens - 3</a><br />
<a href="ASHL10-PLF-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres - 2</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
</tr>
<tr>
<td><b>
<a href="ASHL10-PLF-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins - 3</a><br />
<a href="ASHL10-PLF-ProTeamRoster.php#NewJerseyDevils">New Jersey Devils - 0</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<a href="ASHL10-PLF-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets - 1</a><br />
<a href="ASHL10-PLF-ProTeamRoster.php#NashvillePredators">Nashville Predators - 3</a><br />
<br /></b></td>
</tr>
<tr>
<td><b>
<a href="ASHL10-PLF-ProTeamRoster.php#WinnipegJets">Winnipeg Jets - 1</a><br />
<a href="ASHL10-PLF-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche - 3</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
</tr>
<tr>
<td><b>
<a href="ASHL10-PLF-ProTeamRoster.php#CalgaryFlames">Calgary Flames - 3</a><br />
<a href="ASHL10-PLF-ProTeamRoster.php#VancouverCanucks">Vancouver Canucks - 1</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
</tr>
<tr>
<td><b>
<a href="ASHL10-PLF-ProTeamRoster.php#AnaheimDucks">Anaheim Ducks - 0</a><br />
<a href="ASHL10-PLF-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights - 3</a><br />
<br /></b></td>
<td><b>
<a href="ASHL10-PLF-ProTeamRoster.php#CalgaryFlames">Calgary Flames - 3</a><br />
<a href="ASHL10-PLF-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche - 1</a><br />
<br /></b></td>
<td><b>
<a href="ASHL10-PLF-ProTeamRoster.php#CalgaryFlames">Calgary Flames - 0</a><br />
<a href="ASHL10-PLF-ProTeamRoster.php#NashvillePredators">Nashville Predators - 3</a><br />
<br /></b></td>
<td><b>
<a href="ASHL10-PLF-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks - 2</a><br />
<a href="ASHL10-PLF-ProTeamRoster.php#NashvillePredators">Nashville Predators - 3</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
</tr>
<tr>
<td><b>
<a href="ASHL10-PLF-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes - 3</a><br />
<a href="ASHL10-PLF-ProTeamRoster.php#St.LouisBlues">St. Louis Blues - 0</a><br />
<br /></b></td>
<td><b>
<a href="ASHL10-PLF-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes - 3</a><br />
<a href="ASHL10-PLF-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights - 1</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
</tr>
<tr>
<td><b>
<a href="ASHL10-PLF-ProTeamRoster.php#SanJoseSharks">San Jose Sharks - 3</a><br />
<a href="ASHL10-PLF-ProTeamRoster.php#DetroitRedWings">Detroit Red Wings - 2</a><br />
<br /></b></td>
<td><b>
<a href="ASHL10-PLF-ProTeamRoster.php#SanJoseSharks">San Jose Sharks - 0</a><br />
<a href="ASHL10-PLF-ProTeamRoster.php#NashvillePredators">Nashville Predators - 3</a><br />
<br /></b></td>
<td><b>
<a href="ASHL10-PLF-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes - 1</a><br />
<a href="ASHL10-PLF-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks - 3</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
</tr>
<tr>
<td><b>
<a href="ASHL10-PLF-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks - 3</a><br />
<a href="ASHL10-PLF-ProTeamRoster.php#DallasStars">Dallas Stars - 2</a><br />
<br /></b></td>
<td><b>
<a href="ASHL10-PLF-ProTeamRoster.php#ChicagoBlackhawks">Chicago Blackhawks - 3</a><br />
<a href="ASHL10-PLF-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings - 2</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
</tr>
<tr>
<td><b>
<a href="ASHL10-PLF-ProTeamRoster.php#MinnesotaWild">Minnesota Wild - 0</a><br />
<a href="ASHL10-PLF-ProTeamRoster.php#NashvillePredators">Nashville Predators - 3</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
</tr>
<tr>
<td><b>
<a href="ASHL10-PLF-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings - 3</a><br />
<a href="ASHL10-PLF-ProTeamRoster.php#EdmontonOilers">Edmonton Oilers - 0</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
</tr>
<tr>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
</tr>
</table>
<?php include "Footer.php";?>

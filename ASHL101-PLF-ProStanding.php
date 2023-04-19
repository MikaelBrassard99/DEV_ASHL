<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Pro Standing</title>
<script src="ASHL101-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.6.6 - ASHL101-STHS.db - ASHL101-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
<style>.tabsmenu{display:none;}</style> <!-- Do Not Show Top Menu STHS Option Apply -->
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"ASHL101-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"ASHL101-STHSCareerStat.db";
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 1; /* Show Webpage Top Menu */
include "Menu.php";?>
<div class="STHSCenter"><h1>Toronto Maple Leafs wins the playoff!</h1></div>
<table class="STHSTableFullW"><tr>
<td><b> Round : 1</b></td>
<td><b> Round : 2</b></td>
<td><b> Round : 3</b></td>
<td><b> Round : 4</b></td>
</tr>
<tr>
<td><b>
<a href="ASHL101-PLF-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins - 4</a><br />
<a href="ASHL101-PLF-ProTeamRoster.php#PhiladelphiaFlyers">Philadelphia Flyers - 3</a><br />
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
<a href="ASHL101-PLF-ProTeamRoster.php#BuffaloSabres">Buffalo Sabres - 3</a><br />
<a href="ASHL101-PLF-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens - 4</a><br />
<br /></b></td>
<td><b>
<a href="ASHL101-PLF-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins - 4</a><br />
<a href="ASHL101-PLF-ProTeamRoster.php#MontrealCanadiens">Montreal Canadiens - 0</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
</tr>
<tr>
<td><b>
<a href="ASHL101-PLF-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs - 4</a><br />
<a href="ASHL101-PLF-ProTeamRoster.php#ColumbusBlueJackets">Columbus Blue Jackets - 1</a><br />
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
<a href="ASHL101-PLF-ProTeamRoster.php#BostonBruins">Boston Bruins - 1</a><br />
<a href="ASHL101-PLF-ProTeamRoster.php#FloridaPanthers">Florida Panthers - 4</a><br />
<br /></b></td>
<td><b>
<a href="ASHL101-PLF-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs - 4</a><br />
<a href="ASHL101-PLF-ProTeamRoster.php#FloridaPanthers">Florida Panthers - 1</a><br />
<br /></b></td>
<td><b>
<a href="ASHL101-PLF-ProTeamRoster.php#PittsburghPenguins">Pittsburgh Penguins - 0</a><br />
<a href="ASHL101-PLF-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs - 4</a><br />
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
<a href="ASHL101-PLF-ProTeamRoster.php#TorontoMapleLeafs">Toronto Maple Leafs - 4</a><br />
<a href="ASHL101-PLF-ProTeamRoster.php#WinnipegJets">Winnipeg Jets - 3</a><br />
<br /></b></td>
</tr>
<tr>
<td><b>
<a href="ASHL101-PLF-ProTeamRoster.php#NashvillePredators">Nashville Predators - 3</a><br />
<a href="ASHL101-PLF-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings - 4</a><br />
<br /></b></td>
<td><b>
<a href="ASHL101-PLF-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche - 3</a><br />
<a href="ASHL101-PLF-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings - 4</a><br />
<br /></b></td>
<td><b>
<a href="ASHL101-PLF-ProTeamRoster.php#WinnipegJets">Winnipeg Jets - 4</a><br />
<a href="ASHL101-PLF-ProTeamRoster.php#LosAngelesKings">Los Angeles Kings - 2</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
</tr>
<tr>
<td><b>
<a href="ASHL101-PLF-ProTeamRoster.php#CalgaryFlames">Calgary Flames - 1</a><br />
<a href="ASHL101-PLF-ProTeamRoster.php#WinnipegJets">Winnipeg Jets - 4</a><br />
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
<a href="ASHL101-PLF-ProTeamRoster.php#ArizonaCoyotes">Arizona Coyotes - 3</a><br />
<a href="ASHL101-PLF-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights - 4</a><br />
<br /></b></td>
<td><b>
<a href="ASHL101-PLF-ProTeamRoster.php#VegasGoldenKnights">Vegas Golden Knights - 3</a><br />
<a href="ASHL101-PLF-ProTeamRoster.php#WinnipegJets">Winnipeg Jets - 4</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
</tr>
<tr>
<td><b>
<a href="ASHL101-PLF-ProTeamRoster.php#ColoradoAvalanche">Colorado Avalanche - 4</a><br />
<a href="ASHL101-PLF-ProTeamRoster.php#St.LouisBlues">St. Louis Blues - 3</a><br />
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

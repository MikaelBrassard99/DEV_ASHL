<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Farm Standing</title>
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
<div class="STHSCenter"><h1>Norfolk Admirals (TBL) wins the playoff!</h1></div>
<table class="STHSTableFullW"><tr>
<td><b> Round : 1</b></td>
<td><b> Round : 2</b></td>
<td><b> Round : 3</b></td>
<td><b> Round : 4</b></td>
</tr>
<tr>
<td><b>
<a href="ASHL101-PLF-ProTeamRoster.php#NewYorkIslanders">Bridgeport Sound Tigers (NYI) - 2</a><br />
<a href="ASHL101-PLF-ProTeamRoster.php#NewYorkRangers">Connecticut Whale (NYR) - 4</a><br />
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
<a href="ASHL101-PLF-ProTeamRoster.php#CarolinaHurricanes">Charlotte Checkers (CAR) - 4</a><br />
<a href="ASHL101-PLF-ProTeamRoster.php#QuebecNordiques">Chicoutimi Saguenéens (QUE) - 2</a><br />
<br /></b></td>
<td><b>
<a href="ASHL101-PLF-ProTeamRoster.php#CarolinaHurricanes">Charlotte Checkers (CAR) - 2</a><br />
<a href="ASHL101-PLF-ProTeamRoster.php#NewYorkRangers">Connecticut Whale (NYR) - 4</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
</tr>
<tr>
<td><b>
<a href="ASHL101-PLF-ProTeamRoster.php#WashingtonCapitals">CCCP Red Army (WSH) - 1</a><br />
<a href="ASHL101-PLF-ProTeamRoster.php#TampaBayLightning">Norfolk Admirals (TBL) - 4</a><br />
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
<a href="ASHL101-PLF-ProTeamRoster.php#BuffaloSabres">Rochester Americans (BUF) - 0</a><br />
<a href="ASHL101-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins (PIT) - 4</a><br />
<br /></b></td>
<td><b>
<a href="ASHL101-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins (PIT) - 0</a><br />
<a href="ASHL101-PLF-ProTeamRoster.php#TampaBayLightning">Norfolk Admirals (TBL) - 4</a><br />
<br /></b></td>
<td><b>
<a href="ASHL101-PLF-ProTeamRoster.php#TampaBayLightning">Norfolk Admirals (TBL) - 4</a><br />
<a href="ASHL101-PLF-ProTeamRoster.php#NewYorkRangers">Connecticut Whale (NYR) - 3</a><br />
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
<a href="ASHL101-PLF-ProTeamRoster.php#EdmontonOilers">Oklahoma City Barons (EDM) - 1</a><br />
<a href="ASHL101-PLF-ProTeamRoster.php#TampaBayLightning">Norfolk Admirals (TBL) - 4</a><br />
<br /></b></td>
</tr>
<tr>
<td><b>
<a href="ASHL101-PLF-ProTeamRoster.php#EdmontonOilers">Oklahoma City Barons (EDM) - 4</a><br />
<a href="ASHL101-PLF-ProTeamRoster.php#ColumbusBlueJackets">Springfield Falcons (CLB) - 1</a><br />
<br /></b></td>
<td><b>
<a href="ASHL101-PLF-ProTeamRoster.php#EdmontonOilers">Oklahoma City Barons (EDM) - 4</a><br />
<a href="ASHL101-PLF-ProTeamRoster.php#VancouverCanucks">Chicago Wolves (VAN) - 1</a><br />
<br /></b></td>
<td><b>
<a href="ASHL101-PLF-ProTeamRoster.php#EdmontonOilers">Oklahoma City Barons (EDM) - 4</a><br />
<a href="ASHL101-PLF-ProTeamRoster.php#NashvillePredators">Milwaukee Admirals (NSH) - 2</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
</tr>
<tr>
<td><b>
<a href="ASHL101-PLF-ProTeamRoster.php#AnaheimDucks">Laval Chiefs (ANH) - 2</a><br />
<a href="ASHL101-PLF-ProTeamRoster.php#VancouverCanucks">Chicago Wolves (VAN) - 4</a><br />
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
<a href="ASHL101-PLF-ProTeamRoster.php#ColoradoAvalanche">Lake Erie Monsters (COL) - 2</a><br />
<a href="ASHL101-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques (LOS) - 4</a><br />
<br /></b></td>
<td><b>
<a href="ASHL101-PLF-ProTeamRoster.php#NashvillePredators">Milwaukee Admirals (NSH) - 4</a><br />
<a href="ASHL101-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques (LOS) - 2</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
</tr>
<tr>
<td><b>
<a href="ASHL101-PLF-ProTeamRoster.php#DetroitRedWings">Grand Rapids Griffins (DET) - 1</a><br />
<a href="ASHL101-PLF-ProTeamRoster.php#NashvillePredators">Milwaukee Admirals (NSH) - 4</a><br />
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

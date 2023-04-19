<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>ASHL - Farm Standing</title>
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
<div class="STHSCenter"><h1>Wilkes-Barre/Scranton Penguins (PIT) wins the playoff!</h1></div>
<table class="STHSTableFullW"><tr>
<td><b> Round : 1</b></td>
<td><b> Round : 2</b></td>
<td><b> Round : 3</b></td>
<td><b> Round : 4</b></td>
</tr>
<tr>
<td><b>
<a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils (NJD) - 4</a><br />
<a href="ASHL8-PLF-ProTeamRoster.php#MontrealCanadiens">Trois-Rivières Draveurs (MTL) - 3</a><br />
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
<a href="ASHL8-PLF-ProTeamRoster.php#OttawaSenators">Binghamton Senators (OTT) - 4</a><br />
<a href="ASHL8-PLF-ProTeamRoster.php#NewYorkIslanders">Bridgeport Sound Tigers (NYI) - 3</a><br />
<br /></b></td>
<td><b>
<a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils (NJD) - 4</a><br />
<a href="ASHL8-PLF-ProTeamRoster.php#TampaBayLightning">Norfolk Admirals (TBL) - 2</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
</tr>
<tr>
<td><b>
<a href="ASHL8-PLF-ProTeamRoster.php#NewYorkRangers">Connecticut Whale (NYR) - 1</a><br />
<a href="ASHL8-PLF-ProTeamRoster.php#TampaBayLightning">Norfolk Admirals (TBL) - 4</a><br />
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
<a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins (PIT) - 4</a><br />
<a href="ASHL8-PLF-ProTeamRoster.php#BuffaloSabres">Rochester Americans (BUF) - 1</a><br />
<br /></b></td>
<td><b>
<a href="ASHL8-PLF-ProTeamRoster.php#OttawaSenators">Binghamton Senators (OTT) - 1</a><br />
<a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins (PIT) - 4</a><br />
<br /></b></td>
<td><b>
<a href="ASHL8-PLF-ProTeamRoster.php#NewJerseyDevils">Albany Devils (NJD) - 3</a><br />
<a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins (PIT) - 4</a><br />
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
<a href="ASHL8-PLF-ProTeamRoster.php#PittsburghPenguins">Wilkes-Barre/Scranton Penguins (PIT) - 4</a><br />
<a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs (CHI) - 1</a><br />
<br /></b></td>
</tr>
<tr>
<td><b>
<a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques (LOS) - 4</a><br />
<a href="ASHL8-PLF-ProTeamRoster.php#EdmontonOilers">Oklahoma City Barons (EDM) - 3</a><br />
<br /></b></td>
<td><b>
<a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques (LOS) - 4</a><br />
<a href="ASHL8-PLF-ProTeamRoster.php#St.LouisBlues">Peoria Rivermen (STL) - 1</a><br />
<br /></b></td>
<td><b>
<a href="ASHL8-PLF-ProTeamRoster.php#LosAngelesKings">Gatineau Olympiques (LOS) - 3</a><br />
<a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs (CHI) - 4</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
</tr>
<tr>
<td><b>
<a href="ASHL8-PLF-ProTeamRoster.php#CalgaryFlames">Joliette Sportif (CGY) - 1</a><br />
<a href="ASHL8-PLF-ProTeamRoster.php#St.LouisBlues">Peoria Rivermen (STL) - 4</a><br />
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
<a href="ASHL8-PLF-ProTeamRoster.php#ColoradoAvalanche">Lake Erie Monsters (COL) - 4</a><br />
<a href="ASHL8-PLF-ProTeamRoster.php#AnaheimDucks">Laval Chiefs (ANH) - 0</a><br />
<br /></b></td>
<td><b>
<a href="ASHL8-PLF-ProTeamRoster.php#ColoradoAvalanche">Lake Erie Monsters (COL) - 2</a><br />
<a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs (CHI) - 4</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
</tr>
<tr>
<td><b>
<a href="ASHL8-PLF-ProTeamRoster.php#VancouverCanucks">Chicago Wolves (VAN) - 1</a><br />
<a href="ASHL8-PLF-ProTeamRoster.php#ChicagoBlackhawks">Rockford IceHogs (CHI) - 4</a><br />
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

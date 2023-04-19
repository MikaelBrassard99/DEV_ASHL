<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Farm Team Stats</title>
<script src="ASHL10.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.0.0 - ASHL10-STHS.db - ASHL10-STHSCareerStat.db"/>
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
<table class="basictablesorter STHSTeamStat_Table1"><thead><tr>
<td></td><td colspan="9">Overall</td><td colspan="9">Home</td><td colspan="9">Visitor</td><td colspan="3"></td></tr><tr>
<th class="STHSW200">Team</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th></tr></thead>
<tr><td>Laval Chiefs</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Portland Pirates</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Providence Bruins</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Rochester Americans</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Joliette Sportif</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Charlotte Checkers</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Rockford IceHogs</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Lake Erie Monsters</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Springfield Falcons</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Las Vegas Gamblers</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Grand Rapids Griffins</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Oklahoma City Barons</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>San Antonio Rampage</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Gatineau Olympiques</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Houston Aeros</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Trois-Rivières Draveurs</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Milwaukee Admirals</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Albany Devils</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Bridgeport Sound Tigers</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Connecticut Whale</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Binghamton Senators</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Adirondack Phantoms</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Wilkes-Barre/Scranton Penguins</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Chicoutimi Saguenéens</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Rouyn-Noranda Huskies</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Mercer Island Archangels</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Peoria Rivermen</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Norfolk Admirals</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Roberval Dwarfs</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Chicago Wolves</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Henderson Silver Knights</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Landshut Cannibals</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Manitoba Moose</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>Laval Chiefs</td><td>LAV</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Portland Pirates</td><td>POR</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Providence Bruins</td><td>PRO</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Rochester Americans</td><td>RCH</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Joliette Sportif</td><td>JOL</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Charlotte Checkers</td><td>CHA</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Rockford IceHogs</td><td>RFD</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Lake Erie Monsters</td><td>LKE</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Springfield Falcons</td><td>SPR</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Las Vegas Gamblers</td><td>LVG</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Grand Rapids Griffins</td><td>GRG</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Oklahoma City Barons</td><td>OKC</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>San Antonio Rampage</td><td>SAR</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Gatineau Olympiques</td><td>GAT</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Houston Aeros</td><td>HOU</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Trois-Rivières Draveurs</td><td>TRD</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Milwaukee Admirals</td><td>MIL</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Albany Devils</td><td>ALB</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Bridgeport Sound Tigers</td><td>BRI</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Connecticut Whale</td><td>CTW</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Binghamton Senators</td><td>BNG</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Adirondack Phantoms</td><td>ADK</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Wilkes-Barre/Scranton Penguins</td><td>WBS</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Chicoutimi Saguenéens</td><td>CHI</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Rouyn-Noranda Huskies</td><td>RNO</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Mercer Island Archangels</td><td>MIA</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Peoria Rivermen</td><td>PEO</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Norfolk Admirals</td><td>NOR</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Roberval Dwarfs</td><td>ROB</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Chicago Wolves</td><td>CHI</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Henderson Silver Knights</td><td>PAR</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Landshut Cannibals</td><td>LAN</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Manitoba Moose</td><td>MAN</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0</td><td>0,00%</td><td>0</td><td>0,00%</td><td>0,00%</td><td>0,00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0,00</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Grand Rapids Griffins</td><td>0,00</td></tr>
<tr><td>2</td><td>Oklahoma City Barons</td><td>0,00</td></tr>
<tr><td>3</td><td>Springfield Falcons</td><td>0,00</td></tr>
<tr><td>4</td><td>Las Vegas Gamblers</td><td>0,00</td></tr>
<tr><td>5</td><td>Houston Aeros</td><td>0,00</td></tr>
<tr><td>6</td><td>Trois-Rivières Draveurs</td><td>0,00</td></tr>
<tr><td>7</td><td>San Antonio Rampage</td><td>0,00</td></tr>
<tr><td>8</td><td>Gatineau Olympiques</td><td>0,00</td></tr>
<tr><td>9</td><td>Providence Bruins</td><td>0,00</td></tr>
<tr><td>10</td><td>Rochester Americans</td><td>0,00</td></tr>
<tr><td>11</td><td>Laval Chiefs</td><td>0,00</td></tr>
<tr><td>12</td><td>Portland Pirates</td><td>0,00</td></tr>
<tr><td>13</td><td>Rockford IceHogs</td><td>0,00</td></tr>
<tr><td>14</td><td>Lake Erie Monsters</td><td>0,00</td></tr>
<tr><td>15</td><td>Joliette Sportif</td><td>0,00</td></tr>
<tr><td>16</td><td>Charlotte Checkers</td><td>0,00</td></tr>
<tr><td>17</td><td>Milwaukee Admirals</td><td>0,00</td></tr>
<tr><td>18</td><td>Norfolk Admirals</td><td>0,00</td></tr>
<tr><td>19</td><td>Roberval Dwarfs</td><td>0,00</td></tr>
<tr><td>20</td><td>Mercer Island Archangels</td><td>0,00</td></tr>
<tr><td>21</td><td>Peoria Rivermen</td><td>0,00</td></tr>
<tr><td>22</td><td>Landshut Cannibals</td><td>0,00</td></tr>
<tr><td>23</td><td>Manitoba Moose</td><td>0,00</td></tr>
<tr><td>24</td><td>Chicago Wolves</td><td>0,00</td></tr>
<tr><td>25</td><td>Henderson Silver Knights</td><td>0,00</td></tr>
<tr><td>26</td><td>Connecticut Whale</td><td>0,00</td></tr>
<tr><td>27</td><td>Binghamton Senators</td><td>0,00</td></tr>
<tr><td>28</td><td>Albany Devils</td><td>0,00</td></tr>
<tr><td>29</td><td>Bridgeport Sound Tigers</td><td>0,00</td></tr>
<tr><td>30</td><td>Chicoutimi Saguenéens</td><td>0,00</td></tr>
<tr><td>31</td><td>Rouyn-Noranda Huskies</td><td>0,00</td></tr>
<tr><td>32</td><td>Adirondack Phantoms</td><td>0,00</td></tr>
<tr><td>33</td><td>Wilkes-Barre/Scranton Penguins</td><td>0,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0,00</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Wilkes-Barre/Scranton Penguins</td><td>0,00</td></tr>
<tr><td>2</td><td>Adirondack Phantoms</td><td>0,00</td></tr>
<tr><td>3</td><td>Rouyn-Noranda Huskies</td><td>0,00</td></tr>
<tr><td>4</td><td>Chicoutimi Saguenéens</td><td>0,00</td></tr>
<tr><td>5</td><td>Bridgeport Sound Tigers</td><td>0,00</td></tr>
<tr><td>6</td><td>Albany Devils</td><td>0,00</td></tr>
<tr><td>7</td><td>Binghamton Senators</td><td>0,00</td></tr>
<tr><td>8</td><td>Connecticut Whale</td><td>0,00</td></tr>
<tr><td>9</td><td>Henderson Silver Knights</td><td>0,00</td></tr>
<tr><td>10</td><td>Chicago Wolves</td><td>0,00</td></tr>
<tr><td>11</td><td>Manitoba Moose</td><td>0,00</td></tr>
<tr><td>12</td><td>Landshut Cannibals</td><td>0,00</td></tr>
<tr><td>13</td><td>Peoria Rivermen</td><td>0,00</td></tr>
<tr><td>14</td><td>Mercer Island Archangels</td><td>0,00</td></tr>
<tr><td>15</td><td>Roberval Dwarfs</td><td>0,00</td></tr>
<tr><td>16</td><td>Norfolk Admirals</td><td>0,00</td></tr>
<tr><td>17</td><td>Milwaukee Admirals</td><td>0,00</td></tr>
<tr><td>18</td><td>Charlotte Checkers</td><td>0,00</td></tr>
<tr><td>19</td><td>Joliette Sportif</td><td>0,00</td></tr>
<tr><td>20</td><td>Lake Erie Monsters</td><td>0,00</td></tr>
<tr><td>21</td><td>Rockford IceHogs</td><td>0,00</td></tr>
<tr><td>22</td><td>Portland Pirates</td><td>0,00</td></tr>
<tr><td>23</td><td>Laval Chiefs</td><td>0,00</td></tr>
<tr><td>24</td><td>Rochester Americans</td><td>0,00</td></tr>
<tr><td>25</td><td>Providence Bruins</td><td>0,00</td></tr>
<tr><td>26</td><td>Gatineau Olympiques</td><td>0,00</td></tr>
<tr><td>27</td><td>San Antonio Rampage</td><td>0,00</td></tr>
<tr><td>28</td><td>Trois-Rivières Draveurs</td><td>0,00</td></tr>
<tr><td>29</td><td>Houston Aeros</td><td>0,00</td></tr>
<tr><td>30</td><td>Las Vegas Gamblers</td><td>0,00</td></tr>
<tr><td>31</td><td>Springfield Falcons</td><td>0,00</td></tr>
<tr><td>32</td><td>Oklahoma City Barons</td><td>0,00</td></tr>
<tr><td>33</td><td>Grand Rapids Griffins</td><td>0,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Manitoba Moose</td><td>0,00%</td></tr>
<tr><td>2</td><td>Landshut Cannibals</td><td>0,00%</td></tr>
<tr><td>3</td><td>Henderson Silver Knights</td><td>0,00%</td></tr>
<tr><td>4</td><td>Chicago Wolves</td><td>0,00%</td></tr>
<tr><td>5</td><td>Roberval Dwarfs</td><td>0,00%</td></tr>
<tr><td>6</td><td>Norfolk Admirals</td><td>0,00%</td></tr>
<tr><td>7</td><td>Peoria Rivermen</td><td>0,00%</td></tr>
<tr><td>8</td><td>Mercer Island Archangels</td><td>0,00%</td></tr>
<tr><td>9</td><td>Rouyn-Noranda Huskies</td><td>0,00%</td></tr>
<tr><td>10</td><td>Chicoutimi Saguenéens</td><td>0,00%</td></tr>
<tr><td>11</td><td>Wilkes-Barre/Scranton Penguins</td><td>0,00%</td></tr>
<tr><td>12</td><td>Adirondack Phantoms</td><td>0,00%</td></tr>
<tr><td>13</td><td>Binghamton Senators</td><td>0,00%</td></tr>
<tr><td>14</td><td>Connecticut Whale</td><td>0,00%</td></tr>
<tr><td>15</td><td>Bridgeport Sound Tigers</td><td>0,00%</td></tr>
<tr><td>16</td><td>Albany Devils</td><td>0,00%</td></tr>
<tr><td>17</td><td>Milwaukee Admirals</td><td>0,00%</td></tr>
<tr><td>18</td><td>Trois-Rivières Draveurs</td><td>0,00%</td></tr>
<tr><td>19</td><td>Houston Aeros</td><td>0,00%</td></tr>
<tr><td>20</td><td>Gatineau Olympiques</td><td>0,00%</td></tr>
<tr><td>21</td><td>San Antonio Rampage</td><td>0,00%</td></tr>
<tr><td>22</td><td>Oklahoma City Barons</td><td>0,00%</td></tr>
<tr><td>23</td><td>Grand Rapids Griffins</td><td>0,00%</td></tr>
<tr><td>24</td><td>Las Vegas Gamblers</td><td>0,00%</td></tr>
<tr><td>25</td><td>Springfield Falcons</td><td>0,00%</td></tr>
<tr><td>26</td><td>Lake Erie Monsters</td><td>0,00%</td></tr>
<tr><td>27</td><td>Rockford IceHogs</td><td>0,00%</td></tr>
<tr><td>28</td><td>Charlotte Checkers</td><td>0,00%</td></tr>
<tr><td>29</td><td>Joliette Sportif</td><td>0,00%</td></tr>
<tr><td>30</td><td>Rochester Americans</td><td>0,00%</td></tr>
<tr><td>31</td><td>Providence Bruins</td><td>0,00%</td></tr>
<tr><td>32</td><td>Portland Pirates</td><td>0,00%</td></tr>
<tr><td>33</td><td>Laval Chiefs</td><td>0,00%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0,00%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Grand Rapids Griffins</td><td>0,00%</td></tr>
<tr><td>2</td><td>Oklahoma City Barons</td><td>0,00%</td></tr>
<tr><td>3</td><td>Springfield Falcons</td><td>0,00%</td></tr>
<tr><td>4</td><td>Las Vegas Gamblers</td><td>0,00%</td></tr>
<tr><td>5</td><td>Houston Aeros</td><td>0,00%</td></tr>
<tr><td>6</td><td>Trois-Rivières Draveurs</td><td>0,00%</td></tr>
<tr><td>7</td><td>San Antonio Rampage</td><td>0,00%</td></tr>
<tr><td>8</td><td>Gatineau Olympiques</td><td>0,00%</td></tr>
<tr><td>9</td><td>Providence Bruins</td><td>0,00%</td></tr>
<tr><td>10</td><td>Rochester Americans</td><td>0,00%</td></tr>
<tr><td>11</td><td>Laval Chiefs</td><td>0,00%</td></tr>
<tr><td>12</td><td>Portland Pirates</td><td>0,00%</td></tr>
<tr><td>13</td><td>Rockford IceHogs</td><td>0,00%</td></tr>
<tr><td>14</td><td>Lake Erie Monsters</td><td>0,00%</td></tr>
<tr><td>15</td><td>Joliette Sportif</td><td>0,00%</td></tr>
<tr><td>16</td><td>Charlotte Checkers</td><td>0,00%</td></tr>
<tr><td>17</td><td>Milwaukee Admirals</td><td>0,00%</td></tr>
<tr><td>18</td><td>Norfolk Admirals</td><td>0,00%</td></tr>
<tr><td>19</td><td>Roberval Dwarfs</td><td>0,00%</td></tr>
<tr><td>20</td><td>Mercer Island Archangels</td><td>0,00%</td></tr>
<tr><td>21</td><td>Peoria Rivermen</td><td>0,00%</td></tr>
<tr><td>22</td><td>Landshut Cannibals</td><td>0,00%</td></tr>
<tr><td>23</td><td>Manitoba Moose</td><td>0,00%</td></tr>
<tr><td>24</td><td>Chicago Wolves</td><td>0,00%</td></tr>
<tr><td>25</td><td>Henderson Silver Knights</td><td>0,00%</td></tr>
<tr><td>26</td><td>Connecticut Whale</td><td>0,00%</td></tr>
<tr><td>27</td><td>Binghamton Senators</td><td>0,00%</td></tr>
<tr><td>28</td><td>Albany Devils</td><td>0,00%</td></tr>
<tr><td>29</td><td>Bridgeport Sound Tigers</td><td>0,00%</td></tr>
<tr><td>30</td><td>Chicoutimi Saguenéens</td><td>0,00%</td></tr>
<tr><td>31</td><td>Rouyn-Noranda Huskies</td><td>0,00%</td></tr>
<tr><td>32</td><td>Adirondack Phantoms</td><td>0,00%</td></tr>
<tr><td>33</td><td>Wilkes-Barre/Scranton Penguins</td><td>0,00%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0,00%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Grand Rapids Griffins</td><td>0,00%</td></tr>
<tr><td>2</td><td>Oklahoma City Barons</td><td>0,00%</td></tr>
<tr><td>3</td><td>Springfield Falcons</td><td>0,00%</td></tr>
<tr><td>4</td><td>Las Vegas Gamblers</td><td>0,00%</td></tr>
<tr><td>5</td><td>Houston Aeros</td><td>0,00%</td></tr>
<tr><td>6</td><td>Trois-Rivières Draveurs</td><td>0,00%</td></tr>
<tr><td>7</td><td>San Antonio Rampage</td><td>0,00%</td></tr>
<tr><td>8</td><td>Gatineau Olympiques</td><td>0,00%</td></tr>
<tr><td>9</td><td>Providence Bruins</td><td>0,00%</td></tr>
<tr><td>10</td><td>Rochester Americans</td><td>0,00%</td></tr>
<tr><td>11</td><td>Laval Chiefs</td><td>0,00%</td></tr>
<tr><td>12</td><td>Portland Pirates</td><td>0,00%</td></tr>
<tr><td>13</td><td>Rockford IceHogs</td><td>0,00%</td></tr>
<tr><td>14</td><td>Lake Erie Monsters</td><td>0,00%</td></tr>
<tr><td>15</td><td>Joliette Sportif</td><td>0,00%</td></tr>
<tr><td>16</td><td>Charlotte Checkers</td><td>0,00%</td></tr>
<tr><td>17</td><td>Milwaukee Admirals</td><td>0,00%</td></tr>
<tr><td>18</td><td>Norfolk Admirals</td><td>0,00%</td></tr>
<tr><td>19</td><td>Roberval Dwarfs</td><td>0,00%</td></tr>
<tr><td>20</td><td>Mercer Island Archangels</td><td>0,00%</td></tr>
<tr><td>21</td><td>Peoria Rivermen</td><td>0,00%</td></tr>
<tr><td>22</td><td>Landshut Cannibals</td><td>0,00%</td></tr>
<tr><td>23</td><td>Manitoba Moose</td><td>0,00%</td></tr>
<tr><td>24</td><td>Chicago Wolves</td><td>0,00%</td></tr>
<tr><td>25</td><td>Henderson Silver Knights</td><td>0,00%</td></tr>
<tr><td>26</td><td>Connecticut Whale</td><td>0,00%</td></tr>
<tr><td>27</td><td>Binghamton Senators</td><td>0,00%</td></tr>
<tr><td>28</td><td>Albany Devils</td><td>0,00%</td></tr>
<tr><td>29</td><td>Bridgeport Sound Tigers</td><td>0,00%</td></tr>
<tr><td>30</td><td>Chicoutimi Saguenéens</td><td>0,00%</td></tr>
<tr><td>31</td><td>Rouyn-Noranda Huskies</td><td>0,00%</td></tr>
<tr><td>32</td><td>Adirondack Phantoms</td><td>0,00%</td></tr>
<tr><td>33</td><td>Wilkes-Barre/Scranton Penguins</td><td>0,00%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Manitoba Moose</td><td>0,00%</td></tr>
<tr><td>2</td><td>Landshut Cannibals</td><td>0,00%</td></tr>
<tr><td>3</td><td>Henderson Silver Knights</td><td>0,00%</td></tr>
<tr><td>4</td><td>Chicago Wolves</td><td>0,00%</td></tr>
<tr><td>5</td><td>Roberval Dwarfs</td><td>0,00%</td></tr>
<tr><td>6</td><td>Norfolk Admirals</td><td>0,00%</td></tr>
<tr><td>7</td><td>Peoria Rivermen</td><td>0,00%</td></tr>
<tr><td>8</td><td>Mercer Island Archangels</td><td>0,00%</td></tr>
<tr><td>9</td><td>Rouyn-Noranda Huskies</td><td>0,00%</td></tr>
<tr><td>10</td><td>Chicoutimi Saguenéens</td><td>0,00%</td></tr>
<tr><td>11</td><td>Wilkes-Barre/Scranton Penguins</td><td>0,00%</td></tr>
<tr><td>12</td><td>Adirondack Phantoms</td><td>0,00%</td></tr>
<tr><td>13</td><td>Binghamton Senators</td><td>0,00%</td></tr>
<tr><td>14</td><td>Connecticut Whale</td><td>0,00%</td></tr>
<tr><td>15</td><td>Bridgeport Sound Tigers</td><td>0,00%</td></tr>
<tr><td>16</td><td>Albany Devils</td><td>0,00%</td></tr>
<tr><td>17</td><td>Milwaukee Admirals</td><td>0,00%</td></tr>
<tr><td>18</td><td>Trois-Rivières Draveurs</td><td>0,00%</td></tr>
<tr><td>19</td><td>Houston Aeros</td><td>0,00%</td></tr>
<tr><td>20</td><td>Gatineau Olympiques</td><td>0,00%</td></tr>
<tr><td>21</td><td>San Antonio Rampage</td><td>0,00%</td></tr>
<tr><td>22</td><td>Oklahoma City Barons</td><td>0,00%</td></tr>
<tr><td>23</td><td>Grand Rapids Griffins</td><td>0,00%</td></tr>
<tr><td>24</td><td>Las Vegas Gamblers</td><td>0,00%</td></tr>
<tr><td>25</td><td>Springfield Falcons</td><td>0,00%</td></tr>
<tr><td>26</td><td>Lake Erie Monsters</td><td>0,00%</td></tr>
<tr><td>27</td><td>Rockford IceHogs</td><td>0,00%</td></tr>
<tr><td>28</td><td>Charlotte Checkers</td><td>0,00%</td></tr>
<tr><td>29</td><td>Joliette Sportif</td><td>0,00%</td></tr>
<tr><td>30</td><td>Rochester Americans</td><td>0,00%</td></tr>
<tr><td>31</td><td>Providence Bruins</td><td>0,00%</td></tr>
<tr><td>32</td><td>Portland Pirates</td><td>0,00%</td></tr>
<tr><td>33</td><td>Laval Chiefs</td><td>0,00%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0,00</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Grand Rapids Griffins</td><td>0,00</td></tr>
<tr><td>2</td><td>Oklahoma City Barons</td><td>0,00</td></tr>
<tr><td>3</td><td>Springfield Falcons</td><td>0,00</td></tr>
<tr><td>4</td><td>Las Vegas Gamblers</td><td>0,00</td></tr>
<tr><td>5</td><td>Houston Aeros</td><td>0,00</td></tr>
<tr><td>6</td><td>Trois-Rivières Draveurs</td><td>0,00</td></tr>
<tr><td>7</td><td>San Antonio Rampage</td><td>0,00</td></tr>
<tr><td>8</td><td>Gatineau Olympiques</td><td>0,00</td></tr>
<tr><td>9</td><td>Providence Bruins</td><td>0,00</td></tr>
<tr><td>10</td><td>Rochester Americans</td><td>0,00</td></tr>
<tr><td>11</td><td>Laval Chiefs</td><td>0,00</td></tr>
<tr><td>12</td><td>Portland Pirates</td><td>0,00</td></tr>
<tr><td>13</td><td>Rockford IceHogs</td><td>0,00</td></tr>
<tr><td>14</td><td>Lake Erie Monsters</td><td>0,00</td></tr>
<tr><td>15</td><td>Joliette Sportif</td><td>0,00</td></tr>
<tr><td>16</td><td>Charlotte Checkers</td><td>0,00</td></tr>
<tr><td>17</td><td>Milwaukee Admirals</td><td>0,00</td></tr>
<tr><td>18</td><td>Norfolk Admirals</td><td>0,00</td></tr>
<tr><td>19</td><td>Roberval Dwarfs</td><td>0,00</td></tr>
<tr><td>20</td><td>Mercer Island Archangels</td><td>0,00</td></tr>
<tr><td>21</td><td>Peoria Rivermen</td><td>0,00</td></tr>
<tr><td>22</td><td>Landshut Cannibals</td><td>0,00</td></tr>
<tr><td>23</td><td>Manitoba Moose</td><td>0,00</td></tr>
<tr><td>24</td><td>Chicago Wolves</td><td>0,00</td></tr>
<tr><td>25</td><td>Henderson Silver Knights</td><td>0,00</td></tr>
<tr><td>26</td><td>Connecticut Whale</td><td>0,00</td></tr>
<tr><td>27</td><td>Binghamton Senators</td><td>0,00</td></tr>
<tr><td>28</td><td>Albany Devils</td><td>0,00</td></tr>
<tr><td>29</td><td>Bridgeport Sound Tigers</td><td>0,00</td></tr>
<tr><td>30</td><td>Chicoutimi Saguenéens</td><td>0,00</td></tr>
<tr><td>31</td><td>Rouyn-Noranda Huskies</td><td>0,00</td></tr>
<tr><td>32</td><td>Adirondack Phantoms</td><td>0,00</td></tr>
<tr><td>33</td><td>Wilkes-Barre/Scranton Penguins</td><td>0,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0,00</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Wilkes-Barre/Scranton Penguins</td><td>0,00</td></tr>
<tr><td>2</td><td>Adirondack Phantoms</td><td>0,00</td></tr>
<tr><td>3</td><td>Rouyn-Noranda Huskies</td><td>0,00</td></tr>
<tr><td>4</td><td>Chicoutimi Saguenéens</td><td>0,00</td></tr>
<tr><td>5</td><td>Bridgeport Sound Tigers</td><td>0,00</td></tr>
<tr><td>6</td><td>Albany Devils</td><td>0,00</td></tr>
<tr><td>7</td><td>Binghamton Senators</td><td>0,00</td></tr>
<tr><td>8</td><td>Connecticut Whale</td><td>0,00</td></tr>
<tr><td>9</td><td>Henderson Silver Knights</td><td>0,00</td></tr>
<tr><td>10</td><td>Chicago Wolves</td><td>0,00</td></tr>
<tr><td>11</td><td>Manitoba Moose</td><td>0,00</td></tr>
<tr><td>12</td><td>Landshut Cannibals</td><td>0,00</td></tr>
<tr><td>13</td><td>Peoria Rivermen</td><td>0,00</td></tr>
<tr><td>14</td><td>Mercer Island Archangels</td><td>0,00</td></tr>
<tr><td>15</td><td>Roberval Dwarfs</td><td>0,00</td></tr>
<tr><td>16</td><td>Norfolk Admirals</td><td>0,00</td></tr>
<tr><td>17</td><td>Milwaukee Admirals</td><td>0,00</td></tr>
<tr><td>18</td><td>Charlotte Checkers</td><td>0,00</td></tr>
<tr><td>19</td><td>Joliette Sportif</td><td>0,00</td></tr>
<tr><td>20</td><td>Lake Erie Monsters</td><td>0,00</td></tr>
<tr><td>21</td><td>Rockford IceHogs</td><td>0,00</td></tr>
<tr><td>22</td><td>Portland Pirates</td><td>0,00</td></tr>
<tr><td>23</td><td>Laval Chiefs</td><td>0,00</td></tr>
<tr><td>24</td><td>Rochester Americans</td><td>0,00</td></tr>
<tr><td>25</td><td>Providence Bruins</td><td>0,00</td></tr>
<tr><td>26</td><td>Gatineau Olympiques</td><td>0,00</td></tr>
<tr><td>27</td><td>San Antonio Rampage</td><td>0,00</td></tr>
<tr><td>28</td><td>Trois-Rivières Draveurs</td><td>0,00</td></tr>
<tr><td>29</td><td>Houston Aeros</td><td>0,00</td></tr>
<tr><td>30</td><td>Las Vegas Gamblers</td><td>0,00</td></tr>
<tr><td>31</td><td>Springfield Falcons</td><td>0,00</td></tr>
<tr><td>32</td><td>Oklahoma City Barons</td><td>0,00</td></tr>
<tr><td>33</td><td>Grand Rapids Griffins</td><td>0,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Manitoba Moose</td><td>0,00%</td></tr>
<tr><td>2</td><td>Landshut Cannibals</td><td>0,00%</td></tr>
<tr><td>3</td><td>Henderson Silver Knights</td><td>0,00%</td></tr>
<tr><td>4</td><td>Chicago Wolves</td><td>0,00%</td></tr>
<tr><td>5</td><td>Roberval Dwarfs</td><td>0,00%</td></tr>
<tr><td>6</td><td>Norfolk Admirals</td><td>0,00%</td></tr>
<tr><td>7</td><td>Peoria Rivermen</td><td>0,00%</td></tr>
<tr><td>8</td><td>Mercer Island Archangels</td><td>0,00%</td></tr>
<tr><td>9</td><td>Rouyn-Noranda Huskies</td><td>0,00%</td></tr>
<tr><td>10</td><td>Chicoutimi Saguenéens</td><td>0,00%</td></tr>
<tr><td>11</td><td>Wilkes-Barre/Scranton Penguins</td><td>0,00%</td></tr>
<tr><td>12</td><td>Adirondack Phantoms</td><td>0,00%</td></tr>
<tr><td>13</td><td>Binghamton Senators</td><td>0,00%</td></tr>
<tr><td>14</td><td>Connecticut Whale</td><td>0,00%</td></tr>
<tr><td>15</td><td>Bridgeport Sound Tigers</td><td>0,00%</td></tr>
<tr><td>16</td><td>Albany Devils</td><td>0,00%</td></tr>
<tr><td>17</td><td>Milwaukee Admirals</td><td>0,00%</td></tr>
<tr><td>18</td><td>Trois-Rivières Draveurs</td><td>0,00%</td></tr>
<tr><td>19</td><td>Houston Aeros</td><td>0,00%</td></tr>
<tr><td>20</td><td>Gatineau Olympiques</td><td>0,00%</td></tr>
<tr><td>21</td><td>San Antonio Rampage</td><td>0,00%</td></tr>
<tr><td>22</td><td>Oklahoma City Barons</td><td>0,00%</td></tr>
<tr><td>23</td><td>Grand Rapids Griffins</td><td>0,00%</td></tr>
<tr><td>24</td><td>Las Vegas Gamblers</td><td>0,00%</td></tr>
<tr><td>25</td><td>Springfield Falcons</td><td>0,00%</td></tr>
<tr><td>26</td><td>Lake Erie Monsters</td><td>0,00%</td></tr>
<tr><td>27</td><td>Rockford IceHogs</td><td>0,00%</td></tr>
<tr><td>28</td><td>Charlotte Checkers</td><td>0,00%</td></tr>
<tr><td>29</td><td>Joliette Sportif</td><td>0,00%</td></tr>
<tr><td>30</td><td>Rochester Americans</td><td>0,00%</td></tr>
<tr><td>31</td><td>Providence Bruins</td><td>0,00%</td></tr>
<tr><td>32</td><td>Portland Pirates</td><td>0,00%</td></tr>
<tr><td>33</td><td>Laval Chiefs</td><td>0,00%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0,00</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Wilkes-Barre/Scranton Penguins</td><td>0,00</td></tr>
<tr><td>2</td><td>Adirondack Phantoms</td><td>0,00</td></tr>
<tr><td>3</td><td>Rouyn-Noranda Huskies</td><td>0,00</td></tr>
<tr><td>4</td><td>Chicoutimi Saguenéens</td><td>0,00</td></tr>
<tr><td>5</td><td>Bridgeport Sound Tigers</td><td>0,00</td></tr>
<tr><td>6</td><td>Albany Devils</td><td>0,00</td></tr>
<tr><td>7</td><td>Binghamton Senators</td><td>0,00</td></tr>
<tr><td>8</td><td>Connecticut Whale</td><td>0,00</td></tr>
<tr><td>9</td><td>Henderson Silver Knights</td><td>0,00</td></tr>
<tr><td>10</td><td>Chicago Wolves</td><td>0,00</td></tr>
<tr><td>11</td><td>Manitoba Moose</td><td>0,00</td></tr>
<tr><td>12</td><td>Landshut Cannibals</td><td>0,00</td></tr>
<tr><td>13</td><td>Peoria Rivermen</td><td>0,00</td></tr>
<tr><td>14</td><td>Mercer Island Archangels</td><td>0,00</td></tr>
<tr><td>15</td><td>Roberval Dwarfs</td><td>0,00</td></tr>
<tr><td>16</td><td>Norfolk Admirals</td><td>0,00</td></tr>
<tr><td>17</td><td>Milwaukee Admirals</td><td>0,00</td></tr>
<tr><td>18</td><td>Charlotte Checkers</td><td>0,00</td></tr>
<tr><td>19</td><td>Joliette Sportif</td><td>0,00</td></tr>
<tr><td>20</td><td>Lake Erie Monsters</td><td>0,00</td></tr>
<tr><td>21</td><td>Rockford IceHogs</td><td>0,00</td></tr>
<tr><td>22</td><td>Portland Pirates</td><td>0,00</td></tr>
<tr><td>23</td><td>Laval Chiefs</td><td>0,00</td></tr>
<tr><td>24</td><td>Rochester Americans</td><td>0,00</td></tr>
<tr><td>25</td><td>Providence Bruins</td><td>0,00</td></tr>
<tr><td>26</td><td>Gatineau Olympiques</td><td>0,00</td></tr>
<tr><td>27</td><td>San Antonio Rampage</td><td>0,00</td></tr>
<tr><td>28</td><td>Trois-Rivières Draveurs</td><td>0,00</td></tr>
<tr><td>29</td><td>Houston Aeros</td><td>0,00</td></tr>
<tr><td>30</td><td>Las Vegas Gamblers</td><td>0,00</td></tr>
<tr><td>31</td><td>Springfield Falcons</td><td>0,00</td></tr>
<tr><td>32</td><td>Oklahoma City Barons</td><td>0,00</td></tr>
<tr><td>33</td><td>Grand Rapids Griffins</td><td>0,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0,00</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Grand Rapids Griffins</td><td>0,00</td></tr>
<tr><td>2</td><td>Oklahoma City Barons</td><td>0,00</td></tr>
<tr><td>3</td><td>Springfield Falcons</td><td>0,00</td></tr>
<tr><td>4</td><td>Las Vegas Gamblers</td><td>0,00</td></tr>
<tr><td>5</td><td>Houston Aeros</td><td>0,00</td></tr>
<tr><td>6</td><td>Trois-Rivières Draveurs</td><td>0,00</td></tr>
<tr><td>7</td><td>San Antonio Rampage</td><td>0,00</td></tr>
<tr><td>8</td><td>Gatineau Olympiques</td><td>0,00</td></tr>
<tr><td>9</td><td>Providence Bruins</td><td>0,00</td></tr>
<tr><td>10</td><td>Rochester Americans</td><td>0,00</td></tr>
<tr><td>11</td><td>Laval Chiefs</td><td>0,00</td></tr>
<tr><td>12</td><td>Portland Pirates</td><td>0,00</td></tr>
<tr><td>13</td><td>Rockford IceHogs</td><td>0,00</td></tr>
<tr><td>14</td><td>Lake Erie Monsters</td><td>0,00</td></tr>
<tr><td>15</td><td>Joliette Sportif</td><td>0,00</td></tr>
<tr><td>16</td><td>Charlotte Checkers</td><td>0,00</td></tr>
<tr><td>17</td><td>Milwaukee Admirals</td><td>0,00</td></tr>
<tr><td>18</td><td>Norfolk Admirals</td><td>0,00</td></tr>
<tr><td>19</td><td>Roberval Dwarfs</td><td>0,00</td></tr>
<tr><td>20</td><td>Mercer Island Archangels</td><td>0,00</td></tr>
<tr><td>21</td><td>Peoria Rivermen</td><td>0,00</td></tr>
<tr><td>22</td><td>Landshut Cannibals</td><td>0,00</td></tr>
<tr><td>23</td><td>Manitoba Moose</td><td>0,00</td></tr>
<tr><td>24</td><td>Chicago Wolves</td><td>0,00</td></tr>
<tr><td>25</td><td>Henderson Silver Knights</td><td>0,00</td></tr>
<tr><td>26</td><td>Connecticut Whale</td><td>0,00</td></tr>
<tr><td>27</td><td>Binghamton Senators</td><td>0,00</td></tr>
<tr><td>28</td><td>Albany Devils</td><td>0,00</td></tr>
<tr><td>29</td><td>Bridgeport Sound Tigers</td><td>0,00</td></tr>
<tr><td>30</td><td>Chicoutimi Saguenéens</td><td>0,00</td></tr>
<tr><td>31</td><td>Rouyn-Noranda Huskies</td><td>0,00</td></tr>
<tr><td>32</td><td>Adirondack Phantoms</td><td>0,00</td></tr>
<tr><td>33</td><td>Wilkes-Barre/Scranton Penguins</td><td>0,00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Grand Rapids Griffins</td><td>0,00%</td></tr>
<tr><td>2</td><td>Oklahoma City Barons</td><td>0,00%</td></tr>
<tr><td>3</td><td>Springfield Falcons</td><td>0,00%</td></tr>
<tr><td>4</td><td>Las Vegas Gamblers</td><td>0,00%</td></tr>
<tr><td>5</td><td>Houston Aeros</td><td>0,00%</td></tr>
<tr><td>6</td><td>Trois-Rivières Draveurs</td><td>0,00%</td></tr>
<tr><td>7</td><td>San Antonio Rampage</td><td>0,00%</td></tr>
<tr><td>8</td><td>Gatineau Olympiques</td><td>0,00%</td></tr>
<tr><td>9</td><td>Providence Bruins</td><td>0,00%</td></tr>
<tr><td>10</td><td>Rochester Americans</td><td>0,00%</td></tr>
<tr><td>11</td><td>Laval Chiefs</td><td>0,00%</td></tr>
<tr><td>12</td><td>Portland Pirates</td><td>0,00%</td></tr>
<tr><td>13</td><td>Rockford IceHogs</td><td>0,00%</td></tr>
<tr><td>14</td><td>Lake Erie Monsters</td><td>0,00%</td></tr>
<tr><td>15</td><td>Joliette Sportif</td><td>0,00%</td></tr>
<tr><td>16</td><td>Charlotte Checkers</td><td>0,00%</td></tr>
<tr><td>17</td><td>Milwaukee Admirals</td><td>0,00%</td></tr>
<tr><td>18</td><td>Norfolk Admirals</td><td>0,00%</td></tr>
<tr><td>19</td><td>Roberval Dwarfs</td><td>0,00%</td></tr>
<tr><td>20</td><td>Mercer Island Archangels</td><td>0,00%</td></tr>
<tr><td>21</td><td>Peoria Rivermen</td><td>0,00%</td></tr>
<tr><td>22</td><td>Landshut Cannibals</td><td>0,00%</td></tr>
<tr><td>23</td><td>Manitoba Moose</td><td>0,00%</td></tr>
<tr><td>24</td><td>Chicago Wolves</td><td>0,00%</td></tr>
<tr><td>25</td><td>Henderson Silver Knights</td><td>0,00%</td></tr>
<tr><td>26</td><td>Connecticut Whale</td><td>0,00%</td></tr>
<tr><td>27</td><td>Binghamton Senators</td><td>0,00%</td></tr>
<tr><td>28</td><td>Albany Devils</td><td>0,00%</td></tr>
<tr><td>29</td><td>Bridgeport Sound Tigers</td><td>0,00%</td></tr>
<tr><td>30</td><td>Chicoutimi Saguenéens</td><td>0,00%</td></tr>
<tr><td>31</td><td>Rouyn-Noranda Huskies</td><td>0,00%</td></tr>
<tr><td>32</td><td>Adirondack Phantoms</td><td>0,00%</td></tr>
<tr><td>33</td><td>Wilkes-Barre/Scranton Penguins</td><td>0,00%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>

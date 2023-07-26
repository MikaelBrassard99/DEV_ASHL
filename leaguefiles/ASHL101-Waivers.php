<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Waivers</title>
<script src="ASHL101.js"></script>
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
<table class="STHSWaiver_Table"><thead><tr><th>
<b>Player</b></th><th>
<b>From Team</b></th><th>
<b>Picked by</b></th><th>
<b>Day Put on Waivers</b></th><th>
<b>Day Removed from Waivers</b></th></tr></thead><tbody>
<tr><td>Ludwig Blomstrand</td><td>
<a href="ASHL101-ProTeamRoster.php#BostonBruins">Boston Bruins</a></td><td>
</td><td>192</td><td>194</td></tr>
</tbody></table>
<br />
<h1 class="STHSWaivers_WaiverOrder">Waiver Order</h1>
1 - Carolina Hurricanes<br />
2 - Quebec Nordiques<br />
3 - Washington Capitals<br />
4 - New York Islanders<br />
5 - Ottawa Senators<br />
6 - Anaheim Ducks<br />
7 - Dallas Stars<br />
8 - New Jersey Devils<br />
9 - Detroit Red Wings<br />
10 - Vancouver Canucks<br />
11 - New York Rangers<br />
12 - Seattle Kraken<br />
13 - Tampa Bay Lightning<br />
14 - Pittsburgh Penguins<br />
15 - Chicago Blackhawks<br />
16 - Edmonton Oilers<br />
17 - Buffalo Sabres<br />
18 - San Jose Sharks<br />
19 - Minnesota Wild<br />
20 - Nashville Predators<br />
21 - Toronto Maple Leafs<br />
22 - Calgary Flames<br />
23 - Arizona Coyotes<br />
24 - Boston Bruins<br />
25 - Florida Panthers<br />
26 - Colorado Avalanche<br />
27 - St. Louis Blues<br />
28 - Columbus Blue Jackets<br />
29 - Winnipeg Jets<br />
30 - Montreal Canadiens<br />
31 - Vegas Golden Knights<br />
32 - Philadelphia Flyers<br />
33 - Los Angeles Kings<br />
<?php include "Footer.php";?>

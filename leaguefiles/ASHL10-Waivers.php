<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Waivers</title>
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
<table class="STHSWaiver_Table"><thead><tr><th>
<b>Player</b></th><th>
<b>From Team</b></th><th>
<b>Picked by</b></th><th>
<b>Day Put on Waivers</b></th><th>
<b>Day Removed from Waivers</b></th></tr></thead><tbody>
<tr><td colspan="5" style="text-align:center;"><br /><h2 class="STHSWaivers_NoPlayerOnWaiver">No Player on Waivers</h2></td></tr>
</tbody></table>
<br />
<h1 class="STHSWaivers_WaiverOrder">Waiver Order</h1>
1 - Quebec Nordiques<br />
2 - Tampa Bay Lightning<br />
3 - Seattle Kraken<br />
4 - Winnipeg Jets<br />
5 - Toronto Maple Leafs<br />
6 - Calgary Flames<br />
7 - Columbus Blue Jackets<br />
8 - Anaheim Ducks<br />
9 - Boston Bruins<br />
10 - Carolina Hurricanes<br />
11 - Arizona Coyotes<br />
12 - San Jose Sharks<br />
13 - Chicago Blackhawks<br />
14 - Minnesota Wild<br />
15 - Montreal Canadiens<br />
16 - Pittsburgh Penguins<br />
17 - New Jersey Devils<br />
18 - Los Angeles Kings<br />
19 - Edmonton Oilers<br />
20 - Nashville Predators<br />
21 - Buffalo Sabres<br />
22 - Dallas Stars<br />
23 - Detroit Red Wings<br />
24 - St. Louis Blues<br />
25 - New York Rangers<br />
26 - New York Islanders<br />
27 - Florida Panthers<br />
28 - Vegas Golden Knights<br />
29 - Vancouver Canucks<br />
30 - Washington Capitals<br />
31 - Ottawa Senators<br />
32 - Colorado Avalanche<br />
33 - Philadelphia Flyers<br />
<?php include "Footer.php";?>

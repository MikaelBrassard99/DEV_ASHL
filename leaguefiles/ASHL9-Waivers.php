<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>ASHL - Waivers</title>
<script src="ASHL9.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.2.0.0 - ASHL9-STHS.db - ASHL9-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="ASHL9.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
</head><body>
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"ASHL9-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"ASHL9-STHSCareerStat.db";
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
1 - New Jersey Devils<br />
2 - Chicago Blackhawks<br />
3 - New York Islanders<br />
4 - Edmonton Oilers<br />
5 - Ottawa Senators<br />
6 - Minnesota Wild<br />
7 - Carolina Hurricanes<br />
8 - Columbus Blue Jackets<br />
9 - Nashville Predators<br />
10 - Toronto Maple Leafs<br />
11 - Boston Bruins<br />
12 - Washington Capitals<br />
13 - Anaheim Ducks<br />
14 - Philadelphia Flyers<br />
15 - Colorado Avalanche<br />
16 - Winnipeg Jets<br />
17 - Tampa Bay Lightning<br />
18 - Arizona Coyotes<br />
19 - Seattle Saints<br />
20 - Vancouver Canucks<br />
21 - Calgary Flames<br />
22 - San Jose Sharks<br />
23 - Detroit Red Wings<br />
24 - Dallas Stars<br />
25 - Vegas Golden Knights<br />
26 - Buffalo Sabres<br />
27 - Montreal Canadiens<br />
28 - Florida Panthers<br />
29 - New York Rangers<br />
30 - Quebec Nordiques<br />
31 - Pittsburgh Penguins<br />
32 - St. Louis Blues<br />
33 - Los Angeles Kings<br />
<?php include "Footer.php";?>

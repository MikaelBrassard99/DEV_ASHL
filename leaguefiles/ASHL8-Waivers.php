<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>ASHL - Waivers</title>
<script src="ASHL8.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.1.5.5" />
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="ASHL8.css" rel="stylesheet" type="text/css" />
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
1 - New York Islanders<br />
2 - Quebec Nordiques<br />
3 - Winnipeg Jets<br />
4 - Dallas Stars<br />
5 - Calgary Flames<br />
6 - Minnesota Wild<br />
7 - Washington Capitals<br />
8 - Carolina Hurricanes<br />
9 - New Jersey Devils<br />
10 - Columbus Blue Jackets<br />
11 - Vancouver Canucks<br />
12 - San Jose Sharks<br />
13 - Buffalo Sabres<br />
14 - Toronto Maple Leafs<br />
15 - Florida Panthers<br />
16 - Detroit Red Wings<br />
17 - Colorado Avalanche<br />
18 - Philadelphia Flyers<br />
19 - Seattle Saints<br />
20 - Edmonton Oilers<br />
21 - Anaheim Ducks<br />
22 - Nashville Predators<br />
23 - Ottawa Senators<br />
24 - Chicago Blackhawks<br />
25 - Pittsburgh Penguins<br />
26 - Arizona Coyotes<br />
27 - New York Rangers<br />
28 - St. Louis Blues<br />
29 - Los Angeles Kings<br />
30 - Montreal Canadiens<br />
31 - Tampa Bay Lightning<br />
32 - Boston Bruins<br />
<?php include "Footer.php";?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>ASHL - Waivers</title>
<script type="text/javascript" src="ASHL7.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.1.2.2" />
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="ASHL7.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == true){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
</head><body>
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"ASHL7-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"ASHL7-STHSCareerStat.db";
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 7; /* Show Webpage Top Menu */
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
1 - Winnipeg Jets<br />
2 - Dallas Stars<br />
3 - Montreal Canadiens<br />
4 - Calgary Flames<br />
5 - Edmonton Oilers<br />
6 - Columbus Blue Jackets<br />
7 - San Jose Sharks<br />
8 - Washington Capitals<br />
9 - St. Louis Blues<br />
10 - Ottawa Senators<br />
11 - Florida Panthers<br />
12 - Toronto Maple Leafs<br />
13 - Vancouver Canucks<br />
14 - Arizona Coyotes<br />
15 - Boston Bruins<br />
16 - Carolina Hurricanes<br />
17 - New York Islanders<br />
18 - Anaheim Ducks<br />
19 - Quebec Nordiques<br />
20 - Philadelphia Flyers<br />
21 - New Jersey Devils<br />
22 - Nashville Predators<br />
23 - Buffalo Sabres<br />
24 - Detroit Red Wings<br />
25 - Minnesota Wild<br />
26 - Chicago Blackhawks<br />
27 - Tampa Bay Lightning<br />
28 - Colorado Avalanche<br />
29 - Seattle Saints<br />
30 - New York Rangers<br />
31 - Los Angeles Kings<br />
32 - Pittsburgh Penguins<br />
<?php include "Footer.php";?>

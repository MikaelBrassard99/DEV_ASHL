<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>ASHL - Waivers</title>
<script type="text/javascript" src="ASHL6-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="Decription" content="Simon Brassard - STHS - Version : 3.0.9.9" />
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="ASHL6-PLF.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == true){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
</head><body>
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"ASHL6-STHS.db";
$LangOverwrite = (boolean)FALSE;
$lang = "en"; /* The $lang option must be either "en" or "fr" */
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
1 - New York Rangers<br />
2 - Ottawa Senators<br />
3 - Detroit Red Wings<br />
4 - Vancouver Canucks<br />
5 - Carolina Hurricanes<br />
6 - Tampa Bay Lightning<br />
7 - Dallas Stars<br />
8 - Washington Capitals<br />
9 - Minnesota Wild<br />
10 - Edmonton Oilers<br />
11 - New York Islanders<br />
12 - Boston Bruins<br />
13 - New Jersey Devils<br />
14 - Seattle Saints<br />
15 - Los Angeles Kings<br />
16 - Winnipeg Jets<br />
17 - Arizona Coyotes<br />
18 - Chicago Blackhawks<br />
19 - Florida Panthers<br />
20 - Toronto Maple Leafs<br />
21 - Buffalo Sabres<br />
22 - Columbus Blue Jackets<br />
23 - San Jose Sharks<br />
24 - Quebec Nordiques<br />
25 - Calgary Flames<br />
26 - St. Louis Blues<br />
27 - Colorado Avalanche<br />
28 - Philadelphia Flyers<br />
29 - Montreal Canadiens<br />
30 - Nashville Predators<br />
31 - Anaheim Ducks<br />
32 - Pittsburgh Penguins<br />
<?php include "Footer.php";?>
